<?php

  include_once('../database/connection.php');
  include_once('../database/restaurant.php');


  try {
    getRestaurantsByRatingLimit($_POST['limit']);
  } catch (PDOException $e) {
    die($e->getMessage());
  }

 ?>
