<?php
  echo '<div class="tabs">';
    include("../templates/restaurant/restaurant_tabs/restaurant_links_to_tabs.php");
    echo'<div class="tabs_content">';
      echo '<h3>Info</h3>';
      include("../templates/restaurant/restaurant_tabs/restaurant_info.php");
      echo '<h3>Maps</h3>';
      include("../templates/restaurant/restaurant_tabs/restaurant_maps.php");
      echo '<h3>Reviews</h3>';
      include("../templates/restaurant/restaurant_tabs/restaurant_all_reviews.php");
      echo '<h3>Gallery</h3>';
    //  include("../templates/restaurant/restaurant_tabs/restaurant_gallery.php");
    echo'</div>';
  echo'</div>';
?>
