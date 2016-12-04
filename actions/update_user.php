<?php

  include_once('../database/connection.php');
  include_once('../database/user.php');


  try {
    updateUser($_POST);
  } catch (PDOException $e) {
    die($e->getMessage());
  }

 ?>
