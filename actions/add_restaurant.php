<?php


  include_once('../database/connection.php');
  include_once('../database/restaurant.php');
  include_once('../database/image.php');


  $variables = $_POST;

  try {
    echo $_POST['restaurant_picture'];
    addImage($_POST['restaurant_picture']);

    $id= $dbh->lastInsertId();
    addRestaurant($variables, $id);
  } catch (PDOException $e) {
    die($e->getMessage());
  }

 ?>
