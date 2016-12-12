<?php
  include('../helpers/userAdministration.php');
  include('../database/connection.php');
  include('../database/restaurant.php');
  login_check_register();
  $userType = userType_check();
  include('../views/register.php');
?>
