$(document).ready(function(){
  $('.tabs .tab_links a').on('click', function(e)  {
        var currentValue = $(this).attr('href');
        $(currentValue).show().siblings().hide();
        $(this).parent('li').addClass('tabs_active').siblings().removeClass('tabs_active');

        e.preventDefault();
  });
});
