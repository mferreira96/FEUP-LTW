<?php

  include_once('../database/connection.php');
  include_once('../database/review.php');


if(isset($_POST['submit'])){
  try {
    print_r($_POST);
    addReview($_GET['id'], $_SESSION['username'], $_POST['rating'], $_POST['comment']);

  } catch (PDOException $e) {
    die($e->getMessage());
  }
}

  header('Location: ../public/restaurant.php');

?>
