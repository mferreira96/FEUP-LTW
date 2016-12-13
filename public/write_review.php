<?php
  include('../helpers/userAdministration.php');
  include('../database/connection.php');
  login_check();
  $userType = userType_check();
  include('../views/write_review.php');
?>
