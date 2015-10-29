var seen = [];
var global;

function drawRandomGif() {
  $.getJSON("/api/smashgifs", function( data ) {

    var found = data['data'];
    

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
    panelHeading = "<a class='button button-inline button-small button-info' id='drawgif'>&nbsp;<i class='fa fa-random'></i>another?</a><br>"; 
    var panelBody = "<img id='smashgify' class='gfyitem' data-expand=true data-autoplay=true data-id='" + m[4] + "' />";
    var panelFooter = "<span class='randGifDesc pull-left'><a href='" + permalink + "'>" +  title + "</a></span><span class='upvotecount pull-right'><small>upvotes: </small>" + score + "</span>";
    
    spawned = true;

    $("#smashgif-body").empty();
    $("#smashgif-body").append(panelBody);

    $("#smashgif-title").empty();
    $("#smashgif-title").append("score: " + score);
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
