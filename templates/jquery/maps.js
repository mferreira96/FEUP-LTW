function initMap() {
       var location = {lat: 41.157944, lng: -8.629105};
       var map = new google.maps.Map(document.getElementById('maps'), {
         zoom: 8,
         center: location
       });
       var marker = new google.maps.Marker({
         position: location,
         map: map
       });
     }
