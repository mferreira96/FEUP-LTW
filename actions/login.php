<?php
//session_start();
if(isset($_POST['username']) && isset($_POST['password'])) //websecurity, key!
{
  include_once('../database/connection.php');
  include_once('../database/user.php');

  $value = getUserByusername($_POST['username']);
  $realPass = getPassword($_POST['username']);

  if ($value != false && password_verify($_POST['password'], $realPass)){
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['user-logged'] = true;
      $_SESSION['userType'] = "reviewer";
      $_SESSION['IPaddress'] = $_SERVER['REMOTE_ADDR']; //for preventing hijacking
      $_SESSION['userAgent'] = $_SERVER['HTTP_USER_AGENT']; //for preventing hijacking


      header('Location: ../public/restaurant_overview.php');
  }else{
    header('Location: ../public/login.php');
  }
}else{
  header('Location: ../public/login.php');
}
//header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
