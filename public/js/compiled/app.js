

$(function() {

    var $sidebar   = $("#sidebar"),
        $dataAnchor = $(".dataAnchor"),
        $window    = $(window),
        offset     = $sidebar.offset(),
        anchorOff  = $dataAnchor.offset(),
        ANIMATE_TIME   = 300,
        topPadding = 50;

    $window.scroll(function() {
      if ($(window).width() > 768) {
        if ($window.scrollTop() > offset.top - topPadding) {
            $sidebar.css(
              "margin-top", $window.scrollTop() - offset.top + topPadding
            );
            $("#sidebarBrand").show(ANIMATE_TIME, 'linear');
        } else {
            $sidebar.css("margin-top", 0);
            $("#sidebarBrand").hide(ANIMATE_TIME, 'linear');
        }
      } else {
          $sidebar.css("margin-top", 0);
          $("#sidebarBrand").hide(ANIMATE_TIME, 'linear');
      }

    });
    
    if (anchorOff != undefined) {
      $window.scroll(function() {
        if ($(window).width() > 768) {
          if($window.scrollTop() > anchorOff.top - 30) {
            $dataAnchor.css(
              "margin-top", $window.scrollTop() - anchorOff.top + 30
            );
          } else {
            $dataAnchor.css(
              "margin-top", 0
            );
          }2
        }
      });
    }

  $(function(){
      var hash = window.location.hash;
      hash && $('ul.nav a[href="' + hash + '"]').tab('show');

      $('.nav-tabs a').click(function (e) {
        $(this).tab('show');
        var scrollmem = $('body').scrollTop();
        window.location.hash = this.hash;
        $('html,body').scrollTop(scrollmem);
      });
    });

});

  /**
   * Request Animation Frame polyfill
   */
/*
(function() {
    var lastTime = 0;

    //Define Browser Vendors
    var vendors = ['ms', 'moz', 'webkit', 'o'];

    //Iterate Over Browser Vendors
    //.. and set requestAnimationFrame when it does not exist
    for (var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
        window.requestAnimationFrame = window[vendors[x] + 'RequestAnimationFrame'];
        window.cancelAnimationFrame = window[vendors[x] + 'CancelAnimationFrame'] || window[vendors[x] + 'CancelRequestAnimationFrame'];
    }

    //If still not set after all that...
    if (!window.requestAnimationFrame)
        window.requestAnimationFrame = function(callback, element) {
            //Current Time
            var currTime = new Date().getTime();

            //Time Delay before Next Call
            var timeToCall = Math.max(0, 16 - (currTime - lastTime));

            //setTimeout id
            //.. calls the callback with current time as the first argument
            //.. waits (timeToCall)ms before calling the callback
            var id = window.setTimeout(function() {
                    callback(currTime + timeToCall);
                },
                timeToCall);

            //updates lastTime
            lastTime = currTime + timeToCall;

            //returns setTimeout id
            return id;
        };

    //If cancelAnimationFrame still not set
    if (!window.cancelAnimationFrame)
    //sets cancelAnimationFrame
        window.cancelAnimationFrame = function(id) {
        clearTimeout(id);
    };
}());
*/

/*
 * gfyCollection:
 * Global object to be called on page load.
 * This runs through the page DOM for elements
 * with class "gfyitem" and attempts to convert
 * them to gfycat embeds by creating a new
 * gfyObject with the element.
 * Can also be used _after_ page load
 * by calling gfyCollection.get() to get
 * the collection of gfycat objects on the page
 * and re-initialize them or interact with them
 * as desired.
 */


var gfyCollection = function () {

    var collection = [];

    // Helper function -- only required because some browsers do not have get by class name
    function byClass(className, obj) {

        if (obj.getElementsByClassName) {
            return obj.getElementsByClassName(className);
        } else {
            var retnode = [];
            var elem = obj.getElementsByTagName('*');
            for (var i = 0; i < elem.length; i++) {
                if ((' ' + elem[i].className + ' ').indexOf(' ' + className + ' ') > -1) retnode.push(elem[i]);
            }
            return retnode;
        }
    }

    function init() {
        // find each gfycat on page and run its init
        elem_coll = byClass("gfyitem", document);
        for (var i = 0; i < elem_coll.length; i++) {
            var gfyObj = new gfyObject(elem_coll[i]);
            collection.push(gfyObj);
        }
        //console.log(collection);
        // run init _after_ all are collected, because the init function deletes and recreates
        for(var i = 0; i < collection.length; i++) {
            if (collection[i] == null) continue;
            collection[i].init();
        }
    }

    function get() {
        // optional interface for an external script to interact with all objects on a page
        return collection;
    }

    function empty() {
        collection = []
        init();
    }

    return {
        init: init,
        get: get,
        empty: empty
    }

}();

/*
 * A new gfyObject is created for each
 * gfycat embed on the page.  This object
 * creates all video/control elements
 * and is self-contained with all functions
 * for interacting with its own gfycat video.
 */

var gfyObject = function (gfyElem) {
    var gfyRootElem = gfyElem;
    if (gfyRootElem == null) return;
    var gfyId = gfyRootElem.getAttribute('data-id');
    var gfyId;
    // Options are set by data- attributes on tag
    var optExpand; // Option: will video grow to fill space
    var optTitle; // Option: display title on hover over
    var optCtrls = true; // Option: add controls to bottom right corner
    var optAutoplay = false; // Option: automatically play video when loaded
    // references to each html element
    var ctrlBox;
    var ctrlPausePlay;
    var ctrlSlower;
    var ctrlFaster;
    var vid;
    var gif;
    var overlayCanvas;
    var titleDiv;
    var isMobile;
    var isReverse = false;
    var isGifOnly = false;
    var self = this;
    var gfyItem;
    var gfyWidth;
    var gfyHeight;

    // Custom Properties
    //var lastTime = -1;
    var currentFrame;
    //var frameTick;

    // Helper function -- only required because some browsers do not have get by class name
    function byClass(className, obj) {
        if (obj.getElementsByClassName) {
            return obj.getElementsByClassName(className);
        } else {
            var retnode = [];
            var elem = obj.getElementsByTagName('*');
            for (var i = 0; i < elem.length; i++) {
                if ((' ' + elem[i].className + ' ').indexOf(' ' + className + ' ') > -1) retnode.push(elem[i]);
            }
            return retnode;
        }
    }

    function createTitle() {
        titleDiv = document.createElement('div');
        titleDiv.style.position = "absolute";
        try {
            titleDiv.style.backgroundColor = "rgba(0,0,0,0.4)";
        } catch (e) {
            // IE does not have rgba
            titleDiv.style.backgroundColor = "#000";
            // Allow non-IE browsers without rgba to carry on
            try {
                titleDiv.style.filter = 'alpha(opacity=60)';
            } catch (e) {}
        }
        titleDiv.style.color = "#fff";
        titleDiv.style.fontFamily = "Arial,sans-serif";
        titleDiv.style.fontSize = "20px";
        titleDiv.style.padding = "10px";
        titleDiv.innerHTML = gfyItem.title;
        titleDiv.style.left = "0";
        titleDiv.style.top = "0";
        titleDiv.style.display = "none";
        gfyRootElem.appendChild(titleDiv);
    }

    // overlayCanvas used to display a play button overlay if
    // video is not on "autoplay"
    function createOverlayCanvas() {
        overlayCanvas = document.createElement('canvas');
        overlayCanvas.style.position = "absolute";
        overlayCanvas.style.left = "0";
        overlayCanvas.style.top = "0";
        overlayCanvas.onclick = pauseClick;
        overlayCanvas.onmouseout = gfyMouseOut;
        overlayCanvas.onmouseover = gfyMouseOver;
        // Removed overlay canvas to take out pause / play button
        // gfyRootElem.appendChild(overlayCanvas);
    }

    function createVidTag() {
        vid = document.createElement('video');
        vid.className = 'gfyVid';
        if (optAutoplay)
            vid.autoplay = true;
        vid.loop = true;
        if(isMobile)
            vid.controls = true;
        else
            vid.controls = false;
        vid.style.width = '100%';
        vid.style.height = 'auto';
        // poster url gfyName is case sensitive
        vid.setAttribute('poster', 'https://thumbs.gfycat.com/' + gfyItem.gfyName + '-poster.jpg');
        source2 = document.createElement('source');
        source2.src = gfyWebmUrl;
        source2.type = 'video/webm';
        source2.className = "webmsource";
        vid.appendChild(source2);
        source = document.createElement('source');
        source.src = gfyMp4Url;
        source.type = 'video/mp4';
        source.className = "mp4source";
        vid.appendChild(source);
        gfyRootElem.appendChild(vid);
    }

    // from mobiledetect.com
    function mobilecheck() {
        var check = false;
        (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|android|ipad|playbook|silk|blackberry|htc|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
        return check; 
    }
    
    function createGifTag() {
        gif = document.createElement('img');
        gif.src = gfyItem.gifUrl;
        if (optExpand)
            gif.style.width = '100%';
        else
            gif.style.maxWidth = gfyItem.width + 'px';
        gif.style.height = 'auto';
        gif.onmouseout = gfyMouseOut;
        gif.onmouseover = gfyMouseOver;
        gfyRootElem.appendChild(gif);
        gfyRootElem.style.position = "relative";
        gfyRootElem.style.padding = 0;
    }

    function setWrapper() {
        gfyRootElem.style.position = "relative";
        gfyRootElem.style.padding = 0;
        if (!optExpand) {
            gfyRootElem.style.display = 'inline-block';
            gfyRootElem.style.overflow = 'hidden';
            gfyRootElem.style.boxSizing = 'border-box';
            gfyRootElem.style.MozBoxSizing = 'border-box';
            gfyRootElem.style.webkitBoxSizing = 'border-box';
        }
    }

    function createCtrlBox() {
        if (!optCtrls)
            return;
        ctrlRow = document.createElement('div');
        ctrlRow.style.position = 'relative';
        ctrlBox = document.createElement('div');
        ctrlBox.className = "CtrlBox";
        ctrlPausePlay = document.createElement('img');
        ctrlPausePlay.className = "gfyCtrlPause";
        ctrlPausePlay.src = "https://assets.gfycat.com/img/placeholder.png";
        ctrlPausePlay.style.backgroundImage = "url('https://assets.gfycat.com/img/gfycontrols.png')";
        ctrlPausePlay.style.cssFloat = 'right';
        ctrlPausePlay.style.marginRight = '5px';
        ctrlPausePlay.style.width = '12px';
        ctrlPausePlay.style.height = '12px';
        ctrlPausePlay.style.borderStyle = 'none';
        ctrlBox.appendChild(ctrlPausePlay);
        ctrlReverse = document.createElement('img');
        ctrlReverse.className = "gfyCtrlReverse";
        ctrlReverse.src = "https://assets.gfycat.com/img/placeholder.png";
        ctrlReverse.style.backgroundImage = "url('https://assets.gfycat.com/img/gfycontrols.png')";
        ctrlReverse.style.cssFloat = 'right';
        ctrlReverse.style.marginRight = '5px';
        ctrlReverse.style.width = '14px';
        ctrlReverse.style.height = '12px';
        ctrlReverse.style.backgroundPosition = '-46px 0';
        ctrlReverse.style.borderStyle = 'none';
        ctrlSlower = document.createElement('img');
        ctrlSlower.className = "gfyCtrlSlower";
        ctrlSlower.src = "https://assets.gfycat.com/img/placeholder.png";
        ctrlSlower.style.backgroundImage = "url('https://assets.gfycat.com/img/gfycontrols.png')";
        ctrlSlower.style.marginRight = '5px';
        ctrlSlower.style.width = '14px';
        ctrlSlower.style.height = '12px';
        ctrlSlower.style.cssFloat = 'right';
        ctrlSlower.style.borderStyle = 'none';
        ctrlFaster = document.createElement('img');
        ctrlFaster.className = "gfyCtrlFaster";
        ctrlFaster.src = "https://assets.gfycat.com/img/placeholder.png";
        ctrlFaster.style.backgroundImage = "url('https://assets.gfycat.com/img/gfycontrols.png')";
        ctrlFaster.style.width = '14px';
        ctrlFaster.style.height = '12px';
        ctrlFaster.style.cssFloat = 'right';
        ctrlFaster.style.marginRight = '5px';
        ctrlFaster.style.borderStyle = 'none';
        if (vid.paused)
            setCtrlsPaused();
        else
            setCtrlsPlaying();
        ctrlBox.style.position = 'relative';
        ctrlBox.style.cssFloat = 'right';
        ctrlBox.style.width = '100px';
        ctrlBox.style.padding = '5px';
        ctrlBox.style.margin = '0';
        ctrlBox.setAttribute("id", "ctr" + gfyId);
        ctrlPausePlay.onclick = pauseClick;
        ctrlReverse.onclick = reverse;
        ctrlBox.appendChild(ctrlFaster);
        ctrlBox.appendChild(ctrlSlower);
        ctrlBox.appendChild(ctrlReverse);
        ctrlBox.appendChild(ctrlPausePlay);
        ctrlRow.appendChild(ctrlBox);
        gfyRootElem.appendChild(ctrlRow);
    }

    function deleteVidTag() {
        gfyRootElem.removeChild(vid);
    }

    /*
    function checkCurrentFrame() {
        //Check for a change in time
        if (vid.currentTime !== lastTime) {
            //Current frame is the current time divided by the framerate
            currentFrame = Math.ceil(vid.currentTime * gfyFrameRate);
            console.log('Current Time: ' + vid.currentTime);
            console.log('gfyFrameRate: ' + gfyFrameRate);
            console.log(currentFrame);

            //Create frameTick event
            frameTick = new CustomEvent('frameTick', {'detail': currentFrame})

            //Dispatch custom event
            gfyRootElem.dispatchEvent(frameTick);

            //Set lastTime to currentTime
            lastTime = vid.currentTime;
        }

        //wait approximately 16ms and run again
        requestAnimationFrame(checkCurrentFrame);
    }
    */

    function init() {
        if (gfyRootElem.parentNode ==  null) return;
        isMobile = mobilecheck();
        gfyId = gfyRootElem.getAttribute('data-id');
        if (gfyId == '') return;
        if (gfyRootElem.getAttribute('data-title') == "true")
            optTitle = true;
        if (gfyRootElem.getAttribute('data-expand') == "true")
            optExpand = true;
        if (gfyRootElem.getAttribute('data-controls') == "true")
            optCtrls = true;
        if (gfyRootElem.getAttribute('data-autoplay') == "false")
            optAutoplay = false;
        var newElem = document.createElement('div');
        attrib_src = gfyRootElem.attributes;
        attrib_dest = newElem.attributes;
        for (var i = 0; i < attrib_src.length; i++) {
            var tst = attrib_src.item(i);
            var tst2 = tst.cloneNode();
            if (tst2.name == "style" && tst.value != 'null') {
                attrib_dest.setNamedItem(tst2);
            } else {}
            //attrib_dest.setNamedItem(attrib_src.item(i).cloneNode());
        }
        gfyRootElem.parentNode.replaceChild(newElem, gfyRootElem);
        gfyRootElem = newElem;
        // call gfycat API to get info for this gfycat
        loadJSONP("https://gfycat.com/cajax/get/" + gfyId, function (data) {
            if (data) {
                gfyItem = data.gfyItem;
                if (gfyItem == null) return;

                gfyMp4Url = gfyItem.mp4Url;
                gfyMp4Url = gfyMp4Url.replace('http:\/\/','https://');

                gfyWebmUrl = gfyItem.webmUrl;
                gfyWebmUrl = gfyWebmUrl.replace('http:\/\/','https://');

                gfyFrameRate = gfyItem.frameRate;


                if (document.createElement('video').canPlayType) {
                    createVidTag();
                    setWrapper();
                    createTitle();
                    createOverlayCanvas();
                    //checkCurrentFrame();
                    // Can't grab the width/height until video loaded
                    if (vid.addEventListener)
                        vid.addEventListener("loadedmetadata", vidLoaded, false);
                    else
                        vid.attachEvent("onloadedmetadata", vidLoaded);
                    if (optAutoplay)
                        vid.play();
                } else {
                    isGifOnly = true;
                    createGifTag();
                    createTitle();
                    gif.onload = function () {
                        var ua = navigator.userAgent.toLowerCase();
                        if (ua.indexOf("msie") > -1)
                            titleDiv.style.width = gif.clientWidth + 'px';
                        else
                            titleDiv.style.width = gif.clientWidth - 20 + 'px';
                    }
                }

                // Set current time to original frame and stuff
                currentFrame = vid.currentTime * gfyFrameRate;

            } else {}
        });
    }

    function replaceHttpHttps(link) {
        link.replace('http://','https://');
    }

    function loadJSONP(url, callback, context) {
        var unique = Math.floor((Math.random()*10000000) + 1);
        // INIT
        var name = "_" + gfyId + "_" + unique++;
        if (url.match(/\?/)) url += "&callback=" + name;
        else url += "?callback=" + name;

        // Create script
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = url;

        // Setup handler
        window[name] = function (data) {
            callback.call((context || window), data);
            document.getElementsByTagName('head')[0].removeChild(script);
            script = null;
            try {
                delete window[name];
            } catch (e) {}
        };

        // Load JSON
        document.getElementsByTagName('head')[0].appendChild(script);
    }

    function setSize() {
        gfyWidth = vid.offsetWidth;
        gfyHeight = vid.offsetHeight;
        // vid.videoWidth is the native size of the video. This stays the same even if the element is resized.
        // if optExpand is not set, then the video will never expand larger than videoWidth, so we need to choose this.
        if (!optExpand && gfyWidth > vid.videoWidth) {
            gfyWidth = vid.videoWidth;
            gfyHeight = vid.videoHeight;
        }
        overlayCanvas.width = gfyWidth;
        overlayCanvas.height = gfyHeight;
        // subtract padding of titleDiv
        titleDiv.style.width = gfyWidth - 20 + 'px';
    }

    function vidLoaded() {
        setSize();
        if (!ctrlBox) {
            createCtrlBox();
        }
        if (!optAutoplay && !isMobile)
            drawPlayOverlay();
    }

    function clearPlayOverlay() {
        var ctx = overlayCanvas.getContext("2d");
        if (gfyWidth)
            ctx.clearRect(0, 0, gfyWidth, gfyHeight);
    }
    // When video is set to load paused, or when no playback controls are present, show a large Play button overlay.
    function drawPlayOverlay() {
        //console.debug("drawing overlay");
        var ctx = overlayCanvas.getContext("2d");
        ctx.clearRect(0, 0, gfyWidth, gfyHeight);
        ctx.strokeStyle = "#ffffff";
        ctx.fillStyle = "#ffffff";
        ctx.lineWidth = 5;
        var pWidth = 70;
        var pHeight = 80;
        var pRad = 5;
        if (gfyHeight < 160 || gfyWidth < 200) {
            pHeight = pHeight * gfyHeight / 240;
            pWidth = pWidth * gfyHeight / 240;
            pRad = 3;
        }
        drawPolygon(ctx, [
            [gfyWidth / 2 - pWidth / 2, gfyHeight / 2 - pHeight / 2],
            [gfyWidth / 2 + pWidth / 2, gfyHeight / 2],
            [gfyWidth / 2 - pWidth / 2, gfyHeight / 2 + pHeight / 2]
        ], pRad);
        ctx.stroke();
        ctx.fill();
    }

    function drawPolygon(ctx, pts, radius) {
        if (radius > 0) {
            pts = getRoundedPoints(pts, radius);
        }
        var i, pt, len = pts.length;
        ctx.beginPath();
        for (i = 0; i < len; i++) {
            pt = pts[i];
            if (i == 0) {
                ctx.moveTo(pt[0], pt[1]);
            } else {
                ctx.lineTo(pt[0], pt[1]);
            }
            if (radius > 0) {
                ctx.quadraticCurveTo(pt[2], pt[3], pt[4], pt[5]);
            }
        }
        ctx.closePath();
    }

    function getFrame() {
        return currentFrame;
    }

    function getRoundedPoints(pts, radius) {
        var i1, i2, i3, p1, p2, p3, prevPt, nextPt,
            len = pts.length,
            res = new Array(len);
        for (i2 = 0; i2 < len; i2++) {
            i1 = i2 - 1;
            i3 = i2 + 1;
            if (i1 < 0) {
                i1 = len - 1;
            }
            if (i3 == len) {
                i3 = 0;
            }
            p1 = pts[i1];
            p2 = pts[i2];
            p3 = pts[i3];
            prevPt = getRoundedPoint(p1[0], p1[1], p2[0], p2[1], radius, false);
            nextPt = getRoundedPoint(p2[0], p2[1], p3[0], p3[1], radius, true);
            res[i2] = [prevPt[0], prevPt[1], p2[0], p2[1], nextPt[0], nextPt[1]];
        }
        return res;
    };

    function getRoundedPoint(x1, y1, x2, y2, radius, first) {
        var total = Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2)),
            idx = first ? radius / total : (total - radius) / total;
        return [x1 + (idx * (x2 - x1)), y1 + (idx * (y2 - y1))];
    };

    function setCtrlsPaused() {
        if (!optCtrls) {
            drawPlayOverlay();
            return;
        }
        ctrlPausePlay.style.backgroundPosition = '-71px 0';
        ctrlSlower.style.backgroundPosition = '0 0';
        ctrlSlower.style.marginLeft = "6px";
        ctrlFaster.style.backgroundPosition = '-192px 0';
        ctrlFaster.style.width = "8px";
        ctrlFaster.onclick = stepForward;
        ctrlSlower.onclick = stepBackward;
    }

    function setCtrlsPlaying() {
        clearPlayOverlay();
        if (!optCtrls)
            return;
        ctrlPausePlay.style.backgroundPosition = '-95px 0';
        ctrlFaster.style.backgroundPosition = '-20px 0';
        ctrlSlower.style.backgroundPosition = '-165px 0';
        ctrlFaster.style.width = "14px";
        ctrlSlower.style.marginLeft = "0px";
        ctrlFaster.onclick = faster;
        ctrlSlower.onclick = slower;
    }

    function pauseClick() {
        if (vid.paused) {
            vid.play();
            setCtrlsPlaying();
            currentFrame = calculateFrame();
        } else {
            vid.pause();
            setCtrlsPaused();
            currentFrame = calculateFrame();
        }
    }

    function gfyMouseOver() {
        if (!optTitle || !gfyItem.title)
            return;
        titleDiv.style.display = 'block';
    }

    function gfyMouseOut() {
        if (!optTitle)
            return;
        titleDiv.style.display = 'none';
    }

    function reverse() {
        // Change controls over: reverse button to forward, and slower/faster to step forward/step back.
        ctrlPausePlay.style.backgroundPosition = '-95px 0';
        ctrlSlower.style.backgroundPosition = '0 0';
        ctrlSlower.style.marginLeft = "6px";
        ctrlFaster.style.backgroundPosition = '-192px 0';
        ctrlFaster.style.width = "8px";
        ctrlFaster.onclick = stepForward;
        ctrlSlower.onclick = stepBackward;
        vid.pause();
        // Swap video source tags for reverse encoded files
        var mp4src = byClass("mp4source", vid)[0];
        var webmsrc = byClass("webmsource", vid)[0];
        if (isReverse) {
            mp4src.src = mp4src.src.replace(/-reverse\.mp4/g, ".mp4");
            mp4src.src = mp4src.src.replace(/-reverse\.webm/g, ".webm");
            webmsrc.src = webmsrc.src.replace(/-reverse\.webm/g, ".webm");
            ctrlReverse.style.backgroundPosition = '-46px 0';
            isReverse = false;
        } else {
            mp4src.src = mp4src.src.replace(/\.mp4/g, "-reverse.mp4");
            mp4src.src = mp4src.src.replace(/\.webm/g, "-reverse.webm");
            webmsrc.src = webmsrc.src.replace(/\.webm/g, "-reverse.webm");
            ctrlReverse.style.backgroundPosition = '-141px 0';
            isReverse = true;
        }
        vid.playbackRate = 1;
        vid.load();
        vid.play();
    }

    function slower() {
        if (vid.playbackRate <= 1)
            vid.playbackRate = vid.playbackRate / 2;
        else
            vid.playbackRate--;
    }

    function faster() {
        if (vid.playbackRate <= 1) {
            vid.playbackRate = vid.playbackRate * 2;
        } else {
            vid.playbackRate++;
        }
    }

    function calculateFrame() {
        // This is to calculate the current frame the video is at
        frames = Math.floor(vid.currentTime) * gfyFrameRate;
        remainder = vid.currentTime - Math.floor(vid.currentTime);
        remainingFrames = Math.ceil(remainder * gfyFrameRate);
        frames = frames + remainingFrames;
        return frames;
    }

    function stepForward() {
        if (window.opera) {
            var storeFunc = vid.onplay;
            vid.onplay = function () {
                vid.pause();
                vid.onplay = storeFunc;
            };
            vid.play();
        } else {
            vid.currentTime += (1 / gfyFrameRate);
            currentFrame = calculateFrame();
        }
    }

    function stepBackward() {
        vid.currentTime -= (1 / gfyFrameRate);
        currentFrame = calculateFrame();
    }

    function refresh() {
        vid.load();
        vid.play();
    }

    return {
        init: init,
        refresh: refresh,
        id: gfyId,
        toggle: pauseClick,
        stepForward: stepForward,
        stepBackward: stepBackward,
        getFrame: getFrame
    }
}

if(document.addEventListener)
    document.addEventListener("DOMContentLoaded",gfyCollection.init,false);
else
    document.attachEvent("onreadystatechange",gfyCollection.init);


/*!
 * smoothState.js is jQuery plugin that progressively enhances
 * page loads to behave more like a single-page application.
 *
 * @author  Miguel Ángel Pérez   reachme@miguel-perez.com
 * @see     http://smoothstate.com
 *
 */
!function(t,n,e,o){"use strict";if(!n.history.pushState)return t.fn.smoothState=function(){return this},void(t.fn.smoothState.options={});if(!t.fn.smoothState){var r=t("html, body"),a=n.console,i={debug:!1,anchors:"a",forms:"form",allowFormCaching:!1,repeatDelay:500,blacklist:".no-smoothState",prefetch:!1,prefetchOn:"mouseover touchstart",cacheLength:0,loadingClass:"is-loading",alterRequest:function(t){return t},onBefore:function(t,n){},onStart:{duration:0,render:function(t){}},onProgress:{duration:0,render:function(t){}},onReady:{duration:0,render:function(t,n){t.html(n)}},onAfter:function(t,n){}},s={isExternal:function(t){var e=t.match(/^([^:\/?#]+:)?(?:\/\/([^\/?#]*))?([^?#]+)?(\?[^#]*)?(#.*)?/);return"string"==typeof e[1]&&e[1].length>0&&e[1].toLowerCase()!==n.location.protocol?!0:"string"==typeof e[2]&&e[2].length>0&&e[2].replace(new RegExp(":("+{"http:":80,"https:":443}[n.location.protocol]+")?$"),"")!==n.location.host?!0:!1},stripHash:function(t){return t.replace(/#.*/,"")},isHash:function(t,e){e=e||n.location.href;var o=t.indexOf("#")>-1?!0:!1,r=s.stripHash(t)===s.stripHash(e)?!0:!1;return o&&r},translate:function(n){var e={dataType:"html",type:"GET"};return n="string"==typeof n?t.extend({},e,{url:n}):t.extend({},e,n)},shouldLoadAnchor:function(t,n){var e=t.prop("href");return!(s.isExternal(e)||s.isHash(e)||t.is(n)||t.prop("target"))},clearIfOverCapacity:function(t,n){return Object.keys||(Object.keys=function(t){var n,e=[];for(n in t)Object.prototype.hasOwnProperty.call(t,n)&&e.push(n);return e}),Object.keys(t).length>n&&(t={}),t},storePageIn:function(n,e,o,r){var a=t("<html></html>").append(t(o));return n[e]={status:"loaded",title:a.find("title").first().text(),html:a.find("#"+r)},n},triggerAllAnimationEndEvent:function(n,e){e=" "+e||"";var o=0,r="animationstart webkitAnimationStart oanimationstart MSAnimationStart",a="animationend webkitAnimationEnd oanimationend MSAnimationEnd",i="allanimationend",l=function(e){t(e.delegateTarget).is(n)&&(e.stopPropagation(),o++)},u=function(e){t(e.delegateTarget).is(n)&&(e.stopPropagation(),o--,0===o&&n.trigger(i))};n.on(r,l),n.on(a,u),n.on("allanimationend"+e,function(){o=0,s.redraw(n)})},redraw:function(t){t.height()}},l=function(e){if(null!==e.state){var o=n.location.href,r=t("#"+e.state.id),a=r.data("smoothState");a.href===o||s.isHash(o,a.href)||a.load(o,!1)}},u=function(i,l){var u=t(i),c=u.prop("id"),f=null,h=!1,d={},p=n.location.href,g=function(t){t=t||!1,t&&d.hasOwnProperty(t)?delete d[t]:d={},u.data("smoothState").cache=d},m=function(n,e){e=e||t.noop;var o=s.translate(n);if(d=s.clearIfOverCapacity(d,l.cacheLength),!d.hasOwnProperty(o.url)||"undefined"!=typeof o.data){d[o.url]={status:"fetching"};var r=t.ajax(o);r.success(function(t){s.storePageIn(d,o.url,t,c),u.data("smoothState").cache=d}),r.error(function(){d[o.url].status="error"}),e&&r.complete(e)}},y=function(){if(f){var n=t(f,u);if(n.length){var e=n.offset().top;r.scrollTop(e)}f=null}},v=function(o){var i="#"+c,s=d[o]?t(d[o].html.html()):null;s.length?(e.title=d[o].title,u.data("smoothState").href=o,l.loadingClass&&r.removeClass(l.loadingClass),l.onReady.render(u,s),u.one("ss.onReadyEnd",function(){h=!1,l.onAfter(u,s),y()}),n.setTimeout(function(){u.trigger("ss.onReadyEnd")},l.onReady.duration)):!s&&l.debug&&a?a.warn("No element with an id of "+i+" in response from "+o+" in "+d):n.location=o},S=function(t,e,o){var i=s.translate(t);"undefined"==typeof e&&(e=!0),"undefined"==typeof o&&(o=!0);var f=!1,h=!1,p={loaded:function(){var t=f?"ss.onProgressEnd":"ss.onStartEnd";h&&f?h&&v(i.url):u.one(t,function(){v(i.url),o||g(i.url)}),e&&n.history.pushState({id:c},d[i.url].title,i.url),h&&!o&&g(i.url)},fetching:function(){f||(f=!0,u.one("ss.onStartEnd",function(){l.loadingClass&&r.addClass(l.loadingClass),l.onProgress.render(u),n.setTimeout(function(){u.trigger("ss.onProgressEnd"),h=!0},l.onProgress.duration)})),n.setTimeout(function(){d.hasOwnProperty(i.url)&&p[d[i.url].status]()},10)},error:function(){l.debug&&a?a.log("There was an error loading: "+i.url):n.location=i.url}};d.hasOwnProperty(i.url)||m(i),l.onStart.render(u),n.setTimeout(function(){r.scrollTop(0),u.trigger("ss.onStartEnd")},l.onStart.duration),p[d[i.url].status]()},w=function(n){var e,o=t(n.currentTarget);s.shouldLoadAnchor(o,l.blacklist)&&!h&&(n.stopPropagation(),e=s.translate(o.prop("href")),e=l.alterRequest(e),m(e))},E=function(n){var e=t(n.currentTarget);if(!n.metaKey&&!n.ctrlKey&&s.shouldLoadAnchor(e,l.blacklist)&&(n.stopPropagation(),n.preventDefault(),!C())){T();var o=s.translate(e.prop("href"));h=!0,f=e.prop("hash"),o=l.alterRequest(o),l.onBefore(e,u),S(o)}},b=function(n){var e=t(n.currentTarget);if(!e.is(l.blacklist)&&(n.preventDefault(),n.stopPropagation(),!C())){T();var r={url:e.prop("action"),data:e.serialize(),type:e.prop("method")};h=!0,r=l.alterRequest(r),"get"===r.type.toLowerCase()&&(r.url=r.url+"?"+r.data),l.onBefore(e,u),S(r,o,l.allowFormCaching)}},P=0,C=function(){var t=null===l.repeatDelay,n=parseInt(Date.now())>P;return!(t||n)},T=function(){P=parseInt(Date.now())+parseInt(l.repeatDelay)},A=function(t){l.anchors&&(t.on("click",l.anchors,E),l.prefetch&&t.on(l.prefetchOn,l.anchors,w)),l.forms&&t.on("submit",l.forms,b)},O=function(){var t=u.prop("class");u.removeClass(t),s.redraw(u),u.addClass(t)};return l=t.extend({},t.fn.smoothState.options,l),null===n.history.state&&n.history.replaceState({id:c},e.title,p),s.storePageIn(d,p,e.documentElement.outerHTML,c),s.triggerAllAnimationEndEvent(u,"ss.onStartEnd ss.onProgressEnd ss.onEndEnd"),A(u),{href:p,cache:d,clear:g,load:S,fetch:m,restartCSSAnimations:O}},c=function(n){return this.each(function(){var e=this.tagName.toLowerCase();this.id&&"body"!==e&&"html"!==e&&!t.data(this,"smoothState")?t.data(this,"smoothState",new u(this,n)):!this.id&&a?a.warn("Every smoothState container needs an id but the following one does not have one:",this):"body"!==e&&"html"!==e||!a||a.warn("The smoothstate container cannot be the "+this.tagName+" tag")})};n.onpopstate=l,t.smoothStateUtility=s,t.fn.smoothState=c,t.fn.smoothState.options=i}}(jQuery,window,document);