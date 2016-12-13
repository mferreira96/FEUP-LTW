<?php
//  session_start(); Already in connection
  include('../helpers/userAdministration.php');
  include('../database/connection.php');
  include('../database/restaurant.php');
  login_check();
  $userType = userType_check();
  if($_SESSION['userType'] === "owner"){
    //function get all restaurants of an owner
  }
  else
  {
    if($_SESSION['userType'] === "reviewer")
    {
      if($_SESSION['request'] === "search")
      {
        //search by name funciont
      }
    }
    getAllRestaurants();
  }

  include('../public/restaurant_overview.php');

?>
