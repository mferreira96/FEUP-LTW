<?php
  global $userType;
  include_once('../templates/header.php');
  echo '<div class="content">';
  include('../helpers/menu.php');

  echo '<div class="main">';
      include_once('../templates/restaurant/list_restaurants.php');
  echo '</div>';
  echo '</div>';
  include_once('../templates/footer.php');
?>
