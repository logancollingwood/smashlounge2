$(document).ready(function(){

	//allows us to link to individual tabs
	var hash = window.location.hash;
    hash && $('ul.nav a[href="' + hash + '"]').tab('show');
      
    //for gfycatContainer
    var spawned = false;


	//we default to tech gif
	$("#charList").hide();

	$("#gifType").change(function() {
		var type = $( "#gifType" ).val();
		if (type == "T") {
			$("#charList").hide();
			$("#techList").show();
		} else if (type == "C") {
			$("#techList").hide();
			$("#charList").show();
		}
	});

	$("#gifurl").change(function(event){
        var url = $("#gifurl").val();

        var re = /((https?:)?\/\/)?(.+?\.)?gfycat\.com\/(.+)/; 
        var str = url;
        var m = re.exec(str);
        if (m == null) {
          if (spawned) {
            $( ".spawned" ).empty();
            $( ".spawned" ).remove();
            spawned = false;
          }
          return;
        }

        $( ".spawned" ).empty();
        var linkAndString = "<a href='http://www.gfycat.com/" + m[4] + "'><p class='fifty2'>" + m[4] + "</p></a>"; 
        $(".gfyLocation").append("<div class='spawned'><br>" + linkAndString + "<hr><div class='well'><img class='gfyitem' data-expand=true data-id='" + m[4] + "' /></div></div>");
        $("#gfyFrameTarget").append("<div class='well'><div id='submittedGfy' data-autoplay=false data-expand=true data-id='" + m[4] + "'></div></div>")
        spawned = true;
        gfyCollection.init();
        //return;
    });
});