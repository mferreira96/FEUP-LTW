<?php

  session_start();
  include_once('../database/connection.php');
  include_once('../database/user.php');


  try {
    addUser($_POST);
  } catch (PDOException $e) {
    die($e->getMessage());
  }

 ?>
