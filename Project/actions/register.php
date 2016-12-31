<?php

include_once('../database/connection.php');
include_once('../database/user.php');
include_once('../database/image.php');

if(isset($_POST['submit'])){
  if($_POST['password']===$_POST['confirm']){
    try {

      $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

      createUser($_POST['username'], $_POST['name'], $_POST['email'], $pass);

      addImageUser('blank-profile-picture.png',$_POST['username']);

    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }else{
      header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
}

header('Location: ../public/restaurant_overview.php');
?>
