<?php
  include('../helpers/userAdministration.php');
  include('../database/connection.php');
  login_check();
  $userType = userType_check();
  include('../views/upload_restaurant_picture.php');
?>
