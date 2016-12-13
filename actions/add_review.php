<?php

  include_once('../database/connection.php');
  include_once('../database/review.php');


if(isset($_POST['submit'])){
  try {

    addReview($_POST['idRestaurant'], $_SESSION['username'], $_POST['rating'], $_POST['comment']);

  } catch (PDOException $e) {
    die($e->getMessage());
  }
}

  header('Location: ../public/restaurant.php');

?>
