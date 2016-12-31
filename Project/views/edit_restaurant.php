<?php
  include_once('../templates/header.php');
  echo '<div class="content">';
    include_once('../templates/owner/owner_menu.php');
    echo'<div class="main">';
    include_once('../database/connection.php');
    include_once('../database/restaurant.php');

    try {
      $restaurant = getRestaurantById($_GET['id']);
    } catch(PDOException $e) {
      die($e->getMessage());
    }
      include_once('../templates/owner/owner_edit_restaurant.php');
    echo'</div>';
  echo '</div>';
  include_once('../templates/footer.php');
?>
