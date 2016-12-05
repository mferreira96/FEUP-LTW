<?php


  include_once('../database/connection.php');
  include_once('../database/restaurant.php');



  $variables = $_POST;

  try {
    addRestaurant($variables);
  } catch (PDOException $e) {
    die($e->getMessage());
  }

 ?>
