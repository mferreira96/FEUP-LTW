<?php
  session_start();
  if(isset($_SESSION['user-logged']) && $_SESSION['user-logged'] === true){
    header('Location: restaurant_overview.php');
    die();
  }else{
    include('../views/login.php');
  }
?>
