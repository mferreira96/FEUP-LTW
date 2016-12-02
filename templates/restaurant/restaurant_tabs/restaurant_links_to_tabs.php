<ul id="restaurant_tabs">

  <!--<li id="tabs_references"> -->   <!--compare to CSS exercise 2, not sure how to realize the tabs -->
    <li id="restaurant_info">
    <!--  <a href="../templates/restaurant/restaurant_tabs/restaurant_info.php">Info</a> -->

      <!--<a href="#restaurant_info">Information</a> --><!--not done as on CSS ex2 because all the paths are shown on URL # -->
      <div id="restaurant_info_link">
        <p>Information</p>
      </div>
      <div id="restaurant_info_content">
        <?php
          include_once("../templates/restaurant/restaurant_tabs/restaurant_info.php");
        ?>
      </div>

    <li id="restaurant_maps">
  <!--    <a href="../templates/restaurant/restaurant_tabs/restaurant_maps.php">Maps</a> -->
      <!-- <a href="#restaurant_maps">Google Maps</a> -->
      <div id="restaurant_maps_link">
        <p>Google Maps</p>
      </div>
      <div id="restaurant_maps_content">
        <?php
          include_once("../templates/restaurant/restaurant_tabs/restaurant_maps.php");
        ?>
    </div>

    <li id="restaurant_reviews">
  <!--    <a href="../templates/restaurant/restauran
  t_tabs/restaurant_review.php">Review</a> -->
    <!--  <a href="#restaurant_reviews">Reviews</a> -->
      <div id="restaurant_reviews_link">
        <p>Reviews</p>
      </div>
      <div id="restaurant_reviews_content">
        <?php
          include_once("../templates/restaurant/restaurant_tabs/restaurant_review.php");
        ?>
      </div>

    <li id="restaurant_gallery">
  <!--    <a href="../templates/restaurant/restaurant_tabs/restaurant_gallery.php">Gallery</a> -->
      <!--<a href="#restaurant_gallery">Gallery</a> -->
      <div id="restaurant_gallery_link">
        <p>Gallery</p>
      </div>
      <div id="restaurant_gallery_content">
        <?php
          include_once("../templates/restaurant/restaurant_tabs/restaurant_gallery.php");
        ?>
      </div>
  </ul>
<!--
<div id="tabs_references">
  <ul>
    <li><a href="restaurant_tabs/restaurant_info.php">Info</a></li>
    <li><a href="restaurant_tabs/restaurant_maps.php">Maps</a></li>
    <li><a href="restaurant_tabs/restaurant_review.php">Review</a></li>
    <li><a href="restaurant_tabs/restaurant_gallery.php">Gallery</a></li>
  </ul>
</div>

first try
-->
