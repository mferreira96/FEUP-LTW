<?php

  include_once('../database/connection.php');
  include_once('../database/image.php');


  try {
    updateUserPhoto($_POST['name'], $_POST['username']);
  } catch (PDOException $e) {
    die($e->getMessage());
  }

  header('Location: ../public/restaurant_overview.php');

 ?>
