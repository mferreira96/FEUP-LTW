$(document).ready(function(){
    if($(window).width() >= "900"){
        $('.tabs .tab_links a').on('click', function(e)  {
              var currentValue = $(this).attr('href');
              $(currentValue).show().siblings().hide();
              $(this).parent('li').addClass('tabs_active').siblings().removeClass('tabs_active');
              if(currentValue == '#restaurant_maps') {
                initMap();
              }
              if(currentValue == '#restaurant_gallery') {
                initSlider();
              }
              e.preventDefault();
        });
    }
});
