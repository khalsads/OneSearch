function myMap() {
  var mapProp = {
    center: new google.maps.LatLng(43.7544, -79.73709),
    zoom: 15,
  };
  var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
  var marker = new google.maps.Marker({
    position: { lat: 43.7544, lng: -79.73709 },
    map: map,
  });
}
