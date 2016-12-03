<?php

  session_start();
  include_once('../database/connection.php');
  include_once('../database/restaurant.php');


  try {
    addRestaurant($_POST);
  } catch (PDOException $e) {
    die($e->getMessage());
  }

 ?>
