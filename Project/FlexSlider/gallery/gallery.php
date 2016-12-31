<div id="restaurant_gallery" class="restaurant_tabs_content">
<head>
	<meta content="charset=utf-8">
	<title>Gallery</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

  <!-- Syntax Highlighter -->
 
	<link rel="stylesheet" href="../template/restaurant/restaurant_tabs/gallery/flexslider.css" type="text/css" media="screen" />

	<!-- Modernizr -->
  <script src="../template/restaurant/restaurant_tabs/gallery/gallery/js/modernizr.js"></script>

</head>
<body class="loading">

  <div id="container" class="cf">

	<div id="main" role="main">
      <section class="slider">
        <div class="flexslider">
          <ul class="slides">
            <li>
  	    	    <img src="../pics/food_1.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="../pics/food_2.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="../pics/food_3.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="../pics/food_4.jpg" />
  	    		</li>
          </ul>
        </div>
      </section>
     
    </div>

  </div>

  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="../template/restaurant/restaurant_tabs/galleryjquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>


  <!-- Syntax Highlighter -->
  <script type="text/javascript" src="../template/restaurant/restaurant_tabs/gallery/gallery/js/shCore.js"></script>
  <script type="text/javascript" src="../template/restaurant/restaurant_tabs/gallery/gallery/js/shBrushXml.js"></script>
  <script type="text/javascript" src="../template/restaurant/restaurant_tabs/gallery/gallery/js/shBrushJScript.js"></script>

  <!-- Optional FlexSlider Additions -->
  <script src="../template/restaurant/restaurant_tabs/gallery/gallery/js/jquery.easing.js"></script>
  <script src="../template/restaurant/restaurant_tabs/gallery/gallery/js/jquery.mousewheel.js"></script>
  <script defer src="../template/restaurant/restaurant_tabs/gallery/gallery/js/demo.js"></script>

</body>
</div>