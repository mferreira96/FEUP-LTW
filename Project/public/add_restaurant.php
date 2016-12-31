<?php
  include('../helpers/userAdministration.php');
  include('../database/connection.php');
  include('../database/restaurant.php');
  login_check();
  $userType = userType_check();
  $form_key = bin2hex(mcrypt_create_iv(22, MCRYPT_DEV_URANDOM));
  $_SESSION['form_key'] = $form_key;
  include('../views/add_restaurant.php');

?>
