<?php

  include_once('../database/connection.php');
  include_once('../database/restaurant.php');


  try {
    updateRestaurant($_POST);
  } catch (PDOException $e) {
    die($e->getMessage());
  }

 ?>
