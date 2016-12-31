<?php
//  session_start(); Already in connection
  include_once('../helpers/userAdministration.php');
  include_once('../database/connection.php');
  include_once('../database/restaurant.php');
  login_check();
  $userType = userType_check();

  include_once('../views/result_restaurants.php');

?>
