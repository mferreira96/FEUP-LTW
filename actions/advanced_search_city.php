<?php

  include_once('../database/connection.php');
  include_once('../database/restaurant.php');


  try {
    getRestaurantsByCity($_POST['name']);
  } catch (PDOException $e) {
    die($e->getMessage());
  }

 ?>