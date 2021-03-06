<div id="restaurant_gallery" class="restaurant_tabs_content">

<?php


    include_once('../database/connection.php');
    include_once('../database/image.php');

    $images = getImagesOfRestaurant($restaurant['id']);

?>

<div class="loading">

  <div id="container" class="cf">

	<div id="main" role="main">
      <section class="slider">
        <div class="flexslider">
          <ul class="slides">
		  <?php
			$var = 1;
			foreach($images as $image){
				?>

            <li>
  	    	    <img src=<?="../pics/". $image['name'] ?> width="500"px height="500"px/>
  	    	</li>

			<?php } ?>
          </ul>
        </div>
      </section>

    </div>

  </div>

  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="../FlexSlider/jquery.flexslider.js"></script>

  <script type="text/javascript">

  </script>


  <!-- Syntax Highlighter -->
  <script type="text/javascript" src="../FlexSlider/gallery/js/shCore.js"></script>
  <script type="text/javascript" src="../FlexSlider/gallery/js/shBrushXml.js"></script>
  <script type="text/javascript" src="../FlexSlider/gallery/js/shBrushJScript.js"></script>

  <!-- Optional FlexSlider Additions -->
  <script src="../FlexSlider/gallery/js/jquery.easing.js"></script>
  <script src="../FlexSlider/gallery/js/jquery.mousewheel.js"></script>
  <script defer src="../FlexSlider/gallery/js/demo.js"></script>

</div>

<div id="n">
<?php if($_SESSION['userType'] === "reviewer")
{
?>
  <div id="upload_picture"><a href="../public/upload_restaurant_picture.php?id=<?php echo $_GET['id'];?>">Upload a new picture</a></div>
<?php
}
?>

</div>
