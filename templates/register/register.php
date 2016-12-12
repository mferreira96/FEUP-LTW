<?php

include_once('../database/connection.php');
include_once('../database/user.php');

  try {
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    createUser($dbh, $_POST['username'], $_POST['name'], $_POST['email'], $pass);
  } catch (PDOException $e) {
    die($e->getMessage());
  }

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
