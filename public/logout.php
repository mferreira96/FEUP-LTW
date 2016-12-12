<?php
  session_start();
  include('../helpers/userAdministration.php');
  login_check();
  $userType = userType_check();
  include('../actions/logout.php');
  if($userType === "reviewer")
  {
    include('../views/logout_reviewer.php');
  }else
  {
    include('../views/logout_owner.php');
  }
?>
