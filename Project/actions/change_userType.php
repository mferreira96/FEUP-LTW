<?php
  session_start();
  if($_SESSION['userType'] === "reviewer")
  {
    $_SESSION['userType'] = "owner";
  }
  else
  {
    $_SESSION['userType'] = "reviewer";
  }
  header('Location: ../public/restaurant_overview.php');
?>
