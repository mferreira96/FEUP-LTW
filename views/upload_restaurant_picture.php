<?php
  include_once('../templates/header.php');
  echo '<div class="content">';
    include_once('../templates/owner/owner_menu.php');
    echo'<div class="main">';
      include_once('../templates/restaurant/restaurant_tabs/upload_restaurant_picture.php');
    echo'</div>';
  echo '</div>';
  include_once('../templates/footer.php');
?>
