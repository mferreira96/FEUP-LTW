<?php

include_once('../database/connection.php');
include_once('../database/user.php');
include_once('../database/image.php');

if(isset($_POST['submit'])){
  try {
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    createUser($_POST['username'], $_POST['name'], $_POST['email'], $pass);

    addImageUser('blank-profile-picture.png',$_POST['username']);

  } catch (PDOException $e) {
    die($e->getMessage());
  }
}

header('Location: ../public/restaurant_overview.php');
?>
