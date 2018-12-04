var seen = [];
var global;

function drawRandomGif() {
  $.getJSON("/api/smashgifs", function( data ) {

    var found = data['data'];
    
    console.debug(found);
    var item;
    var spawned = false;
    var url = found['url'];
    var permalink = "http://www.reddit.com" + found['permalink'];
    var title = found['title'];
    var score = found['score'];

    url = url.replace('#', '');
    if (seen.length > 10) {
      seen = [];
    }
    if (seen.indexOf(url) != -1) {
     drawRandomGif();
    }

    seen.push(url);

    var re = /((https?:)?\/\/)?(.+?\.)?gfycat\.com\/(.+)/; 
    var m = re.exec(url);

    if (m == null) {
      drawRandomGif();
    }

    
    //<a class="button button-inline button-large button-info" href=characters/' .  urlencode($randomLink) . '>'.'<span><i class="fa fa-share-alt"></i>' . $randomLink . '</span></a>
    panelHeading = "<a class='button button-inline button-small button-info' id='drawgif'><i class='fa fa-random'></i></a><br>"; 
var panelBody = "<div style='position:relative; padding-bottom:70.80%'><iframe src='https://gfycat.com/ifr/" + m[4] + "' frameborder='0' scrolling='no' width='100%' height='100%' style='position:absolute;top:0;left:0;' allowfullscreen></iframe></div>"
    var panelFooter = "<span class='randGifDesc pull-left'><a href='" + permalink + "'>" +  title + "</a></span><span class='upvotecount pull-right'><small>upvotes: </small>" + score + "</span>";
    var link = '<a href="' + permalink + '"><i class="fa fa-reddit fa-2x"></i></a>'; 
    spawned = true;

    $("#smashgif-body").empty();
    $("#smashgif-body").append(panelBody);

    $("#smashgif-title").empty();
     $("#smashgif-title").append(link);

    $("#smashgif-desc").empty();
    $("#smashgif-desc").append(title);

    $("#another-link").empty();
    $("#another-link").append(panelHeading);

    var gifobj = document.getElementById('smashgify');

    var gfyObj = new gfyObject(gifobj);
    gfyObj.init();
    
  });
}

$(document).ready(function(){
  drawRandomGif();
});

$(document).on("click", "#drawgif", function(e) {
 	$("#smashgif-title").empty();
 	$("#smashgif-body").empty();
 	$("#smashgif-desc").empty();
 	$("#smashgif-title").append("<i class='fa fa-circle-o-notch fa-spin'></i>");
  	drawRandomGif();
});
