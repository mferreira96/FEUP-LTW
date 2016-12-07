$(document).ready(function(){
  //setInfoDefault();
  $('.tabs .tab_links a').on('click', function(e)  {
        var currentValue = $(this).attr('href');
        $(currentValue).show().siblings().hide();
        $(this).parent('li').addClass('tabs_active').siblings().removeClass('tabs_active');

        e.preventDefault();
  });
});

/*function setInfoDefault(){
  var currentValue = "#restaurant_info";//$(this).attr('href');
  $(currentValue).show().siblings().hide();
  $(this).parent('li').addClass('tabs_active').siblings().removeClass('tabs_active');
}*/
