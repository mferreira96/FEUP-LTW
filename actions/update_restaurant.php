<?php

  include_once('../database/connection.php');
  include_once('../database/restaurant.php');


if(isset($_POST['submit'])){
  try {
    updateRestaurant($_POST);
  } catch (PDOException $e) {
    die($e->getMessage());
  }
}

?>
