
$(function() {

    var $sidebar   = $("#sidebar"),
        $dataAnchor = $(".dataAnchor"),
        $window    = $(window),
        offset     = $sidebar.offset(),
        anchorOff  = $dataAnchor.offset(),
        topPadding = 50;

    $window.scroll(function() {
      if ($(window).width() > 768) {
        if ($window.scrollTop() > offset.top) {
            $sidebar.css(
              "margin-top", $window.scrollTop() - offset.top + topPadding
            );
            $("#sidebarBrand").show();
        } else {
            $sidebar.css("margin-top", 0);
            $("#sidebarBrand").hide();
        }
      } else {
          $sidebar.css("margin-top", 0);
          $("#sidebarBrand").hide();
      }

    });
    
    if (anchorOff != undefined) {
      $window.scroll(function() {
        if ($(window).width() > 768) {
          if($window.scrollTop() > anchorOff.top) {
            $dataAnchor.css(
              "margin-top", $window.scrollTop() - anchorOff.top + 30
            );
          }
        }
      });
    }


});
function handleResponse(){}var gfyCollection=function(){var d=[];function b(g,j){if(j.getElementsByClassName){return j.getElementsByClassName(g)}else{var e=[];var h=j.getElementsByTagName("*");for(var f=0;f<h.length;f++){if((" "+h[f].className+" ").indexOf(" "+g+" ")>-1){e.push(h[f])}}return e}}function c(){elem_coll=b("gfyitem",document);for(var e=0;e<elem_coll.length;e++){var f=new gfyObject(elem_coll[e]);f.init()}}function a(){return d}return{init:c,get:a}}();var gfyObject=function(C){var ap=C;var n;var aH;var i;var aK;var V;var ao;var au;var z;var k;var aP;var F;var ay;var aD;var T;var ab;var e;var b;var t;var am;var I;var aA;var ah=false;var H=false;var q=false;var aF=false;var az=this;var S;var u;var h;var ai=0;var aq=0;var X=0;var aj=0;var y;var A;var E;var o;var D;var P;var aO;var at=0;function B(aT,aV){if(aV.getElementsByClassName){return aV.getElementsByClassName(aT)}else{var aR=[];var aU=aV.getElementsByTagName("*");for(var aS=0;aS<aU.length;aS++){if((" "+aU[aS].className+" ").indexOf(" "+aT+" ")>-1){aR.push(aU[aS])}}return aR}}function c(aR){o=aR;gfyFrameRate=o.frameRate}function f(){aj=1;au=document.createElement("video");au.className="gfyVid";au.autoplay=true;au.loop=true;au.poster=true;au.controls=false;if(d()-2>gfyWidth){au.width=gfyWidth;au.height=gfyHeight;t.width=gfyWidth;t.height=gfyHeight}source=document.createElement("source");source.src=gfyMp4Url;var aR=navigator.userAgent.toLowerCase();if(aR.indexOf("android")>-1){source.src=source.src.replace(/\.mp4/g,"-android.mp4")}source.type="video/mp4";source.className="mp4source";au.appendChild(source);source2=document.createElement("source");source2.src=gfyWebmUrl;source2.type="video/webm";source2.className="webmsource";au.appendChild(source2);au.style.position="absolute";au.style.top=0;au.style.left=0;au.style.border=0;au.style.padding=0;au.style.zIndex=25;ap.appendChild(au);au.addEventListener("error",J,true);au.onmouseover=j;au.onmouseout=U}function av(){z=document.createElement("img");z.className="gfyGif";z.src=gfyGifUrl;t.width=0;t.height=0;z.style.position="absolute";z.style.top=0;z.style.left=0;z.style.border=0;z.style.padding=0;z.style.zIndex=25;ap.appendChild(z);z.onmouseover=j;z.onmouseout=U}function K(){parentElem=ap.parentNode;replaceElem=document.createElement("div");replaceElem.className=ap.className;replaceElem.style.cssText=ap.style.cssText;parentElem.insertBefore(replaceElem,ap);parentElem.removeChild(ap);wrapperElem=replaceElem;wrapperElem.style.display="inline-block";ap.style.padding=0;ap=document.createElement("div");wrapperElem.appendChild(ap);ap.style.width=gfyWidth+"px";ap.style.position="relative";ap.style.padding=0;ap.style.zIndex=5;ap.style.height=gfyHeight+at+"px";aa();x();an()}function aa(){b=document.createElement("canvas");b.className="gfyDotCanvas oTrans oShow";b.style.position="absolute";b.style.right=0;b.style.top="5px";b.width=35;b.height=35;b.style.zIndex=30;if(!D){b.style.display="none"}ap.appendChild(b)}function x(){t=document.createElement("canvas");t.className="gfyPreLoadCanvas";t.style.position="absolute";t.style.top=0;t.style.left=0;t.width=gfyWidth;t.height=gfyHeight;t.height=gfyHeight;t.style.cssText="position: absolute; z-index: 22; top: 0px; left: 0px; -webkit-filter: blur(2px);";ap.appendChild(t)}function an(){i=document.createElement("div");i.className="gfyCtrlBox";aK=document.createElement("img");aK.className="gfyCtrlPause";aK.src="http://assets.gfycat.com/img/pause.png";aK.width=15;aK.height=15;aK.style.marginLeft="10px";aK.style.marginTop="12px";aK.style.borderStyle="none";i.appendChild(aK);a1=document.createElement("a");ctrlReverse=document.createElement("img");ctrlReverse.className="gfyCtrlReverse";ctrlReverse.src="http://assets.gfycat.com/img/reverse3.png";ctrlReverse.width=15;ctrlReverse.height=15;ctrlReverse.style.marginLeft="6px";ctrlReverse.style.marginTop="12px";ctrlReverse.style.borderStyle="none";a1.appendChild(ctrlReverse);i.appendChild(a1);a2=document.createElement("a");V=document.createElement("img");V.className="gfyCtrlSlower";V.src="http://assets.gfycat.com/img/slower.png";V.width=15;V.height=15;V.style.marginLeft="13px";V.style.marginTop="12px";V.style.borderStyle="none";a2.appendChild(V);i.appendChild(a2);a3=document.createElement("a");ao=document.createElement("img");ao.className="gfyCtrlFaster";ao.src="http://assets.gfycat.com/img/faster.png";ao.width=15;ao.height=15;ao.style.marginLeft="4px";ao.style.marginTop="12px";ao.style.borderStyle="none";a3.appendChild(ao);i.appendChild(a3);aH=document.createElement("div");aH.className="gfyCtrlTabPull";pullTabImg=document.createElement("img");pullTabImg.src="http://assets.gfycat.com/img/pulltabsmaller.png";pullTabImg.style.borderStyle="0";aH.appendChild(pullTabImg);aH.style.position="absolute";aH.style.right="0";aH.style.bottom="-21px";aH.style.margin="0";aH.style.padding="0";aH.style.borderStyle="none";aH.style.width="36px";aH.style.height="21px";i.style.position="absolute";i.style.right="0px";i.style.bottom=at+"px";i.style.height="40px";i.style.width="102px";i.style.backgroundColor="#0054a5";i.style.zIndex="10";i.style.margin="0";i.style.display="none";i.style.lineHeight="0";i.appendChild(aH);i.setAttribute("id","ctr"+n);ap.appendChild(i)}function af(){gfyInfo=document.createElement("div");gfyInfo.className="gfyInfo oTrans oHide";F=document.createElement("div");F.className="gfyInfoItem";F.innerHTML="Gif Size: "+aG(gfyGifSize);gfyInfo.appendChild(F);gfySize=document.createElement("div");gfySize.className="gfyInfoItem";gfySize.innerHTML="Gfy Size: "+aG(gfyMp4Size);gfyInfo.appendChild(gfySize);e=document.createElement("div");e.className="gfyInfoItem";e.innerHTML="Compression: "+Math.round(10*gfyGifSize/gfyMp4Size)/10+" to 1";gfyInfo.appendChild(e);T=document.createElement("div");T.className="gfyInfoItem";T.innerHTML="Views: "+gfyViews;gfyInfo.appendChild(T);ap.appendChild(gfyInfo)}function ar(){aj=0;ap.removeChild(au)}function R(){ap.removeChild(z)}function Z(){if(aj==1){if(au.paused){aK.src="http://assets.gfycat.com/img/pause.png";ao.src="http://assets.gfycat.com/img/faster.png";V.src="http://assets.gfycat.com/img/slower.png";ao.onclick=aQ;V.onclick=ax}ar();av();k.src=k.src.replace(/gif-icon/g,"film-icon");i.style.display="none";Y(true);ae()}else{R();f();k.src=k.src.replace(/film-icon/g,"gif-icon");aB()}}function O(){R();f()}function al(){ar();av()}function aG(aT){var aS=-1;var aR=[" kB"," MB"];do{aT=aT/1024;aS++}while(aT>1024);return Math.max(aT,0.1).toFixed(1)+aR[aS]}function r(){if(document.selection){var aR=document.body.createTextRange();aR.moveToElementText(this);aR.select()}else{if(window.getSelection){var aR=document.createRange();aR.selectNode(this);window.getSelection().addRange(aR)}}}function v(){var aR=B("mp4source",au)[0].src;if(aR.indexOf("zippy")>-1){E="#99cf2c";dotRed=50;dotGreen=105;dotBlue=0}else{if(aR.indexOf("fat")>-1){E="#fdc428";dotRed=210;dotGreen=153;dotBlue=0}else{dotRed=163;dotGreen=7;dotBlue=0;E="#cd312a"}}}function Y(aS){if(typeof gfyMp4Size==="undefined"){return v()}var aR;if(aS==true){aR=gfyGifSize}else{aR=gfyMp4Size}if(aR<1000000){E="#99cf2c";dotRed=50;dotGreen=105;dotBlue=0}else{if(aR<2000000){E="#fdc428";dotRed=210;dotGreen=153;dotBlue=0}else{dotRed=163;dotGreen=7;dotBlue=0;E="#cd312a"}}}function aI(aS,aR){return(" "+aS.className+" ").indexOf(" "+aR+" ")>-1}function aJ(aS,aR){aS.className=aS.className.replace(/(^\s+|\s+$)/g,"");return aI(aS,aR)?false:(aS.className+=" "+aR)}function aM(aS,aR){return aS.className=(" "+aS.className+" ").replace(" "+aR+" "," ")}function Q(){var aR=false;(function(aS){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|android|ipad|playbook|silk|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(aS)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(aS.substr(0,4))){aR=true}})(navigator.userAgent||navigator.vendor||window.opera);return aR}function d(){if(window.outerWidth){return window.outerHeight}else{return document.body.clientWidth}}function ak(){n=ap.getAttribute("data-id");data=ap.getAttribute("data-controls");if(data=="false"){P=false}else{P=true}data=ap.getAttribute("data-dot");if(data=="false"){D=false}else{D=true}data=ap.getAttribute("data-perimeter");if(data=="true"){aO=true}else{aO=false}if(aO){at=60}loadJSONP("http://gfycat.com/cajax/get/"+n,function(aR){if(aR){W(aR)}else{}})}function W(aR){o=aR.gfyItem;gfyWidth=o.width;gfyHeight=o.height;gfyMp4Url=o.mp4Url;gfyWebmUrl=o.webmUrl;gfyFrameRate=o.frameRate;gfyGifUrl=o.gifUrl;K();if(Q()||!document.createElement("video").canPlayType){av();aJ(k,"oShow");aM(k,"oHide")}else{f()}aH.onmouseover=aL;aH.onmouseout=G;i.onmouseover=ag;i.onmouseout=aN;ap.onmouseover=j;ap.onmouseout=U;aK.onclick=aE;V.onclick=ax;ao.onclick=aQ;ctrlReverse.onclick=g;Y();az.drawLoadingBeat()}function aC(){if(q||(!D&&!P)){return false}else{q=true;aF=false;clearTimeout(u);u=setTimeout(function(){az.showOpacityStep()},5)}}function ac(){if(aF||(!D&&!P)){return false}else{q=false;aF=true;clearTimeout(u);u=setTimeout(function(){az.hideOpacityStep()},5)}}this.checkCtrl=function(){if(am||I){}else{N()}};this.checkGfyExtras=function(){if(aA||am||I){}else{ac()}};function M(){if(X){aJ(A,"oHide");aM(A,"oShow");X=false}else{A.style.display="block";aJ(A,"oShow");aM(A,"oHide");X=true}w()}function w(){setTimeout(function(){aJ(ap,"foo");aM(ap,"foo")},10)}function j(){aA=1;aC()}function U(){aA=0;setTimeout(function(){az.checkGfyExtras()},1000)}function aL(){am=1;l()}function G(){am=0;setTimeout(function(){az.checkCtrl()},400)}function ag(){I=1}function aN(){I=0;setTimeout(function(){az.checkCtrl()},400)}function aE(){if(au.paused){au.play();this.src="http://assets.gfycat.com/img/pause.png";ao.src="http://assets.gfycat.com/img/faster.png";V.src="http://assets.gfycat.com/img/slower.png";ao.onclick=aQ;V.onclick=ax}else{au.pause();this.src="http://assets.gfycat.com/img/play.png";ao.src="http://assets.gfycat.com/img/stepforward.png";V.src="http://assets.gfycat.com/img/stepbackward.png";ao.onclick=aw;V.onclick=a}}function p(){var aU=this.parentNode.parentNode.parentNode;var aR=aU.getElementsByTagName("video")[0];var aT=-0.125;aR.pause();aR.setAttribute("data-playbackRate",setInterval((function aS(){aR.currentTime+=aT;if(aR.currentTime<=0.126){aR.currentTime=aR.duration}return aS})(),125))}function g(){aK.src="http://assets.gfycat.com/img/pause.png";ao.src="http://assets.gfycat.com/img/faster.png";V.src="http://assets.gfycat.com/img/slower.png";ao.onclick=aQ;V.onclick=ax;au.pause();var aR=B("mp4source",au)[0];var aS=B("webmsource",au)[0];if(ah){aR.src=aR.src.replace(/-reverse\.mp4/g,".mp4");aS.src=aS.src.replace(/-reverse\.webm/g,".webm");ah=false}else{aR.src=aR.src.replace(/-android/g,"");aR.src=aR.src.replace(/\.mp4/g,"-reverse.mp4");aS.src=aS.src.replace(/\.webm/g,"-reverse.webm");ah=true}au.playbackRate=1;au.load();au.play();az.drawLoadingBeat()}function J(aR){if(au.networkState==HTMLMediaElement.NETWORK_NO_SOURCE){ap.style.backgroundColor="rgb(242,222,222)";ap.style.borderColor="rgb(238,211,215)";ap.style.borderStyle="solid";ap.style.borderWidth="1px";ap.style.padding="10px";ap.style.color="rgb(185, 74, 72)";ap.innerHTML="Oops! We can't reach this gfy. Is your <b>network</b> working? <br><br>We'd love to here from you if there is a problem on our end.  Sorry!<br><br>You can try directly <a href='"+gfyGifUrl+"'>here</a>."}}function ax(){if(au.playbackRate<=1){au.playbackRate=au.playbackRate/2}else{au.playbackRate--}}function aQ(){if(au.playbackRate<=1){au.playbackRate=au.playbackRate*2}else{au.playbackRate++}}function aw(){if(window.opera){var aR=au.onplay;au.onplay=function(){au.pause();au.onplay=aR};au.play()}else{au.currentTime+=(1/gfyFrameRate)}}function a(){au.currentTime-=(1/gfyFrameRate)}function L(){if(au.playbackRate<=1){var aS=au.playbackRate/2;var aU=au.playbackRate*2}else{var aS=au.playbackRate-1;var aU=au.playbackRate+1}var aR="#";if(ah){aR=aR+"?direction=reverse";var aT="&"}else{var aT="?"}if(au.playbackRate!=1){aR=aR+aT+"speed="+au.playbackRate}V.parentNode.href=aR;ao.parentNode.href=aR;ctrlReverse.parentNode.href=aR}function l(){if(H){return false}else{H=true;clearTimeout(S);S=setTimeout(function(){az.showCtrlStep()},5)}}function N(){if(H){return false}else{H=true;clearTimeout(S);S=setTimeout(function(){az.hideCtrlStep()},5)}}this.showOpacityStep=function(){q=true;aF=false;if(P){i.style.opacity=parseFloat(i.style.opacity)+0.1}if(!aq&&D){b.style.opacity=parseFloat(b.style.opacity)+0.1}if((b.style.opacity>=1&&i.style.opacity>=1)||(P&&!D&&i.style.opacity>=1)||(!P&&D&&b.style.opacity>=1)){if(D){b.style.opacity=1}if(P){i.style.opacity=1}q=false}else{clearTimeout(u);u=setTimeout(function(){az.showOpacityStep()},5)}};this.hideOpacityStep=function(){aF=true;q=false;if(P){i.style.opacity=parseFloat(i.style.opacity)-0.005}if(!aq){b.style.opacity=parseFloat(b.style.opacity)-0.005}if((b.style.opacity<=0&&i.style.opacity<=0)||(P&&!D&&i.style.opacity<=0)||(!P&&D&&b.style.opacity<=0)){if(P){i.style.opacity=0}b.style.opacity=0;aF=false}else{clearTimeout(u);u=setTimeout(function(){az.hideOpacityStep()},5)}};this.showCtrlStep=function(){H=true;curBottom=parseInt(i.style.bottom);if(isNaN(curBottom)){curBottom=at}if(curBottom>at-parseInt(i.style.height)){curBottom=curBottom-4;if(curBottom<at-parseInt(i.style.height)){curBottom=at-parseInt(i.style.height)}i.style.bottom=curBottom+"px";clearTimeout(S);S=setTimeout(function(){az.showCtrlStep()},5)}else{H=false}};this.hideCtrlStep=function(){H=true;curBottom=parseInt(i.style.bottom);if(curBottom<at){curBottom=curBottom+4;if(curBottom>at){curBottom=at}i.style.bottom=curBottom+"px";clearTimeout(S);S=setTimeout(function(){az.hideCtrlStep()},5)}else{H=false}};function aB(){Y();au.load();var aR=navigator.userAgent.toLowerCase();if(aR.indexOf("android")>-1){au.loop=false;au.addEventListener("load",function(){au.play()},false);au.addEventListener("ended",function(){au.currentTime=0.1;au.play()},false)}au.play();ai=0;if(!aq){az.drawLoadingBeat()}}function ad(){return;var aR=s("speed");var aS=s("direction");if(aR){au.playbackRate=aR}if(aS&&aS=="reverse"){if(!ah){g()}}}function s(aY){var aX=window.document.URL.toString();if(aX.indexOf("?")>0){var aT=aX.split("?");var aW=aT[1].split("&");var aR=new Array(aW.length);var aU=new Array(aW.length);var aV=0;for(aV=0;aV<aW.length;aV++){var aS=aW[aV].split("=");aR[aV]=aS[0];if(aS[1]!=""){aU[aV]=unescape(aS[1])}else{aU[aV]="No Value"}}for(aV=0;aV<aW.length;aV++){if(aR[aV]==aY){return aU[aV]}}return 0}}this.drawLoadingBeat=function(){aq=1;var a7=au.buffered;var bc=au.duration;var aR=0;try{var aY=a7.start(0);var aV=a7.end(0);var aR=aV/bc;var a6=b.getContext("2d");a6.clearRect(0,0,50,50);a6.beginPath();a6.fillStyle="#555555";a6.arc(16,16,14,0,Math.PI*2,false);a6.lineTo(16,16);a6.closePath();a6.fill();a6.beginPath();a6.fillStyle=E;a6.arc(16,16,15,0,Math.PI*aR*2,false);a6.lineTo(16,16);a6.closePath();a6.fill()}catch(ba){try{var a6=t.getContext("2d");var a4=t.width;var a0=t.height;a6.clearRect(0,0,a4,a0);a6.beginPath();a6.fillStyle="#333";var aW=Math.min(a4,a0)/2;var a5=a6.createRadialGradient(a4/2,a0/2,0,a4/2,a0/2,aW);a5.addColorStop(0,"#ddd");a5.addColorStop(1,"#fff");aW=Math.max(a4,a0);var a9=3*Math.PI/2+((2*Math.PI*ai)/10)%(2*Math.PI);a6.arc(a4/2,a0/2,aW,3*Math.PI/2,a9,false);a6.lineTo(a4/2,a0/2);a6.closePath();a6.fillStyle="#888";a6.strokeStyle="#111";a6.lineWidth=4;a6.stroke();a6.fill();a6.beginPath();aW=Math.min(a4,a0)*6/16;a6.arc(a4/2,a0/2,aW,0,2*Math.PI,false);a6.strokeStyle="#ccc";a6.stroke();a6.beginPath();aW=Math.min(a4,a0)*7/16;a6.arc(a4/2,a0/2,aW,0,2*Math.PI,false);a6.strokeStyle="#ccc";a6.stroke();a6.lineWidth=2;a6.strokeStyle="#111";a6.beginPath();a6.moveTo(0,a0/2);a6.lineTo(a4,a0/2);a6.stroke();a6.beginPath();a6.moveTo(a4/2,0);a6.lineTo(a4/2,a0);a6.stroke();a6.font=a0/2+"px Arial";a6.fillStyle="#111";a6.fillText(parseInt(ai/10)+1,a4/2-a0/8,3/4*a0);ai++;var aT=new Array();var aS=new Array();for(var a8=0;a8<a4/4;a8++){aT.x=((ai)*5+a8)%a4;aT.y=a0/8*Math.sin(aT.x*8*Math.PI/a4);aS.x=a4-aT.x;aS.y=a0/8*Math.sin(aS.x*8*Math.PI/a4+Math.PI)}t.style.webkitFilter="blur(2px)";i.style.display="none";a6=b.getContext("2d");a6.clearRect(0,0,50,50);a6.beginPath();var aX=ai*15%125;var bb=aX+dotRed;var aU=aX+dotGreen;var aZ=aX+dotBlue;a6.fillStyle="rgb("+bb+","+aU+","+aZ+")";a6.arc(25,5,5,0,Math.PI*2,false);a6.lineTo(25,5);a6.closePath();a6.fill()}catch(ba){}}if(!(aR>=0.98)){setTimeout(function(){az.drawLoadingBeat()},100)}else{try{ai=0;aq=0;if(P){i.style.display="block"}t.getContext("2d").clearRect(0,0,t.width,t.height);var a6=b.getContext("2d");a6.clearRect(0,0,50,50);a6.beginPath();a6.fillStyle=E;a6.arc(25,5,5,0,Math.PI*aR*2,false);a6.lineTo(25,5);a6.closePath();a6.fill();setTimeout(function(){az.checkGfyExtras()},1000);ad()}catch(ba){}}};function ae(){try{t.getContext("2d").clearRect(0,0,t.width,t.height);var aR=b.getContext("2d");aR.clearRect(0,0,50,50);aR.beginPath();aR.fillStyle=E;aR.arc(25,5,5,0,Math.PI*2,false);aR.lineTo(25,5);aR.closePath();aR.fill()}catch(aS){}}return{init:ak,refresh:aB,setGfyItem:c}};var gfyCounter=function(){var a;function b(){var e=document.URL;var d=/.*\/(.*)/;m=d.exec(document.URL);a=m[1];return a}function c(){b();if(a=="account"){return}var d=document.createElement("SCRIPT");d.src="http://tracking.gfycat.com/viewCount/"+a;document.getElementsByTagName("HEAD")[0].appendChild(d)}return{getId:b,callCounter:c}}();function jsonpResp(a){}window.onload=function(){gfyCollection.init()};var loadJSONP=(function(){var a=0;return function(d,f,e){var c="_jsonp_"+a++;if(d.match(/\?/)){d+="&callback="+c}else{d+="?callback="+c}var b=document.createElement("script");b.type="text/javascript";b.src=d;window[c]=function(g){f.call((e||window),g);document.getElementsByTagName("head")[0].removeChild(b);b=null;delete window[c]};document.getElementsByTagName("head")[0].appendChild(b)}})();
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
    var optAutoplay = true; // Option: automatically play video when loaded
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
