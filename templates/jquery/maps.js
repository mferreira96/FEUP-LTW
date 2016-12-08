/*$(document).ready(function(){
  initMap();
  var marker = new google.maps.Marker({
    position: location,
    map: map
  });
});



function initMap(){
  var location = {lat: -25.363, lng: 131.044};
  var map = new google.maps.Map(document.getElementById('restaurant_maps'),{
    zoom: 4,
    center: location
  });
}*/

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

       /*document.getElementsByClassName("restaurant_tabs_content").style.display = "none";*/

      var classes_to_hide = document.getElementsByClassName("restaurant_tabs_content"); //google maps has to be loaded first
      for(var i = 0; i < classes_to_hide.length; i++){
        classes_to_hide[i].style.display = "none";
      };

     }
