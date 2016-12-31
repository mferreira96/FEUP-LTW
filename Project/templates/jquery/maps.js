var geocoder;
var map;

function initMap() {
       var location = {lat: 41.157944, lng: -8.629105};
       map = new google.maps.Map(document.getElementById('maps'), { //var map
         zoom: 8,
         center: location
       });


       geocoder = new google.maps.Geocoder();
       codeAddress();
}

function codeAddress() {
    var address = document.getElementById("map_adress").value;
    // var address_street_nr = 'Rohrackkerstr 154';      //load
    // var address_city_postcode = 'Stuttgart 70329';   //load
    // var address = address_street_nr + ' ' + address_city;
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        map.setZoom(12);
        var marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location
        });
      } else {
        alert("Geocode was not successful for the following reason: " + status);
      }
    });
  }
