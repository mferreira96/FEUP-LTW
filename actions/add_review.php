<?php

  include_once('../database/connection.php');
  include_once('../database/review.php');


if(isset($_POST['submit'])){
  try {
    addReview($idRestaurant, $username, $rate, $comment);
    //modificar para as labels respetiveas
  } catch (PDOException $e) {
    die($e->getMessage());
  }
}

  header('Location: ../public/restaurant.php');

?>
