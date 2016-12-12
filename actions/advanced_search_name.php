<?php

  include_once('../database/connection.php');
  include_once('../database/restaurant.php');


  try {
    getRestaurantsByName($_POST['name']);
  } catch (PDOException $e) {
    die($e->getMessage());
  }

 ?>