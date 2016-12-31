<?php
  include('../helpers/userAdministration.php');
  include('../database/connection.php');
  include('../database/restaurant.php');
  login_check();
  $userType = userType_check();
  include('../views/edit_user.php');
?>
