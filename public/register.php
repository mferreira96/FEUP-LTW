<?php
  include('../helpers/userAdministration.php');
  include('../database/connection.php');
  include('../database/restaurant.php');
  login_check_register();
  $userType = userType_check();
  $user['username'] = " ";
  $user['name'] = " ";
  $user['email'] = " ";
  include('../views/register.php');
?>
