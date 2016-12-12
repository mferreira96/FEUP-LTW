<?php
//session_start();
if(isset($_POST['username']) && isset($_POST['password'])) //websecurity, key!
{
  include_once('../database/connection.php');
  include_once('../database/user.php');
  if (true || userExists($_POST['username'], $_POST['password'])){   //delete true|| and write the function
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['user-logged'] = true;
      $_SESSION['userType'] = "reviewer";
      header('Location: ../public/restaurant_overview.php');
  }else{
    header('Location: ../public/login.php');
  }
}else{
  header('Location: ../public/login.php');
}
//header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
