<?php

  include_once('../database/connection.php');
  include_once('../database/user.php');


  try {
    if (isset($_POST['submit'])) {
      updateUser($_POST);
    }
  } catch (PDOException $e) {
    die($e->getMessage());
  }

 ?>
