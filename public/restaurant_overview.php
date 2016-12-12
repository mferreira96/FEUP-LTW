<?php
//  session_start(); Already in connection
  include('../helpers/userAdministration.php');
  include('../database/connection.php');
  include('../database/restaurant.php');
  login_check();
  $userType = userType_check();
  getAllRestaurants();

  include('../views/result_restaurants.php');

?>
