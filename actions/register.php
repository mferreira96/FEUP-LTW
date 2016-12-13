<?php

include_once('../database/connection.php');
include_once('../database/user.php');

if(isset($_POST['submit'])){
  try {
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    createUser($_POST['username'], $_POST['name'], $_POST['email'], $pass);
  } catch (PDOException $e) {
    die($e->getMessage());
  }
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>