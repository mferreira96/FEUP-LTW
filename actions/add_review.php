<?php

  session_start();
  include_once('../database/connection.php');
  include_once('../database/review.php');


  try {
    addReview($idRestaurant, $userName, $rate, $comment);
    //modificar para as labels respetiveas
  } catch (PDOException $e) {
    die($e->getMessage());
  }

 ?>
