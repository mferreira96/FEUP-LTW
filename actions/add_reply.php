<?php
  include_once('../database/connection.php');
  include_once('../database/review.php');


  try {
    addReply($_POST['idReview'], $_POST['comment']);
  } catch (PDOException $e) {
    die($e->getMessage());
  }





  ?>
