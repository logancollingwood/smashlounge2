$(document).ready(function(){
        var map;
      var marker;
      var markers = [];

      var submittedFrameData = [{}];
      var gfyObj;
      var gfyEl;

      function bindInfoWindow(map, infoWindow) {


        google.maps.event.addListener(map, 'click', function( event ){
          var lat = event.latLng.lat();
          var lon = event.latLng.lng();
          document.getElementById('group_long').value = lon.toFixed(3);
          document.getElementById('group_lat').value = lat.toFixed(3);

        });

        google.maps.event.addListener(map, 'click', function(event) {
          placeMarker(event.latLng, map);
        });
      }

      function placeMarker(location, map) {
          if (marker == undefined){
              marker = new google.maps.Marker({
                  position: location,
                  map: map,
                  animation: google.maps.Animation.DROP,
              });
          }
          else{
              marker.setPosition(location);
          }
          markers.push(marker);
          map.setCenter(location);
      }


      function initialize() {
        var mapOptions = {
          zoom: 3,
          center: new google.maps.LatLng(39.198, -101.601),
        };
        var infoWindow = new google.maps.InfoWindow;
        var map = new google.maps.Map(document.getElementById('map-submit-canvas'),
            mapOptions);

        bindInfoWindow(map, infoWindow);
        $(document).ready(function(){
          $('a[href="#group"]').on('shown.bs.tab', function(e) {
            google.maps.event.trigger(map, 'resize');
          });
        });
      }

      google.maps.event.addDomListener(window, 'load', initialize);

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