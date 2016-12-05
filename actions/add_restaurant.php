<?php


  include_once('../database/connection.php');
  include_once('../database/restaurant.php');


if(isset($_POST['submit'])){
  $variables = $_POST;

  try {
    addRestaurant($variables);
  } catch (PDOException $e) {
    die($e->getMessage());
  }
}
 ?>
