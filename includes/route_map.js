$(document).ready(function()
{
 
  $('#routeform').submit(function(e)
  {
    calcRoute();
    return false;
  });
 
});

var directionDisplay;
var directionsService = new google.maps.DirectionsService();
var map;
var home;
 
function initialize(x, y)
{
  directionsDisplay = new google.maps.DirectionsRenderer();
  var home = new google.maps.LatLng(x, y);
  var myOptions =
  {
    zoom:11,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    center: home
  }
  map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
  directionsDisplay.setMap(map);
  directionsDisplay.setPanel(document.getElementById("directions"));

  var beachMarker = new google.maps.Marker
  ({
      position: home,
      map: map
  });
}
 
function calcRoute()
{
  var start = document.getElementById("routefrom").value;
 
  var request =
  {
    origin:start,
    destination:home,
    travelMode: google.maps.DirectionsTravelMode.DRIVING
  };

  directionsService.route(request, function(response, status)
  {
    if (status == google.maps.DirectionsStatus.OK)
    {
      directionsDisplay.setDirections(response);
    }
  });
}
