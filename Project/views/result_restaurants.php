<?php
  global $userType;
  include_once('../templates/header.php');
  echo '<div class="content">';
  include('../helpers/menu.php');

  echo '<div class="main">';
      include_once('../templates/restaurant/list_restaurants.php');



  if(isset($_SESSION['request']) && $_SESSION['userType'] === "reviewer"){
    echo'<div id="see_all_results"><a href="../actions/all_results.php">All restaurants</a></div>';
  }
  echo '</div>';
  echo '</div>';
  include_once('../templates/footer.php');
?>
