<?php

  include_once('../database/connection.php');
  include_once('../database/user.php');


  try {
    if (isset($_POST['submit'])) {
      $realPass = getPassword($_SESSION['username']);

      if(password_verify($_POST['old_password'], $realPass['password'])){
        if($_POST['confirm_new_password'] === $_POST['new_password']){
          updateUser($_POST);
        }
      }
    }
  } catch (PDOException $e) {
    die($e->getMessage());
  }

 ?>
