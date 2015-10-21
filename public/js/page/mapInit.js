var map;
var customIcons = {
      'All': {
        icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png'
      },
      'Smash 64': {
        icon: 'http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'
      },
      'Smash Melee': {
        icon: 'http://maps.google.com/mapfiles/ms/icons/red-dot.png'
      },
      'Smash Brawl': {
        icon: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png'
      },
      'Project M': {
        icon: 'http://maps.google.com/mapfiles/ms/icons/purple-dot.png'
      },
      'Smash 4': {
        icon: 'http://maps.google.com/mapfiles/ms/icons/orange-dot.png'
      },
    };

function bindInfoWindow(marker, map, infoWindow, html) {
  google.maps.event.addListener(marker, 'click', function() {
    infoWindow.setContent(html);
    infoWindow.open(map, marker);
  });

  google.maps.event.addListener(map, 'click', function( event ){
    var lat = event.latLng.lat();
    var lon = event.latLng.lng();
    document.getElementById('longitude').value = lon.toFixed(3);
    document.getElementById('latitude').value = lat.toFixed(3);
    $("#longitude").html = lon;
            alert( "Latitude: "+event.latLng.lat()+" "+", longitude: "+event.latLng.lng() ); 
  });
}


function initialize() {
  var mapOptions = {
    center: new google.maps.LatLng(45.9193968, -38.5453781),
    zoom: 3,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById("map-canvas"),
      mapOptions);
}


/*
 *
 * Handling map data
 *
*/
$(document).ready(function() {
  initialize();
  var infoWindow = new google.maps.InfoWindow;
  $.getJSON("/api/groups/all", function(json1) {
    console.debug("loaded: " + json1);
    $.each(json1, function(key, data) {

      var latLng = new google.maps.LatLng(data.latitude, data.longitude);

      var html = "<b><a href='/groups/" + encodeURIComponent(data.name)  + "'>" + data.name + "</a></b><br/>";
      html += data.game + "<br/>";
      html += "<a href='" + data.profileid + "'>Facebook" + "</a><br/>"; 
      html += data.region + "<br/>";

      var icon = customIcons[data.game] || {};
      var marker = new google.maps.Marker({
        map: map,
        position: latLng,
        icon: icon.icon
      });
      bindInfoWindow(marker, map, infoWindow, html);


      marker.setMap(map);
    });
  });
});