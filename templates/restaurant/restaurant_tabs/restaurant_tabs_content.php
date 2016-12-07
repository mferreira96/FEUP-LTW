<?php
  echo '<div class="tabs">';
    include("../templates/restaurant/restaurant_tabs/restaurant_links_to_tabs.php");
    echo'<div class="tabs_content">';
      include("../templates/restaurant/restaurant_tabs/restaurant_info.php");
      include("../templates/restaurant/restaurant_tabs/restaurant_maps.php");
      include("../templates/restaurant/restaurant_tabs/restaurant_all_reviews.php");
      include("../templates/restaurant/restaurant_tabs/restaurant_gallery.php");
    echo'</div>';
  echo'</div>';
?>
