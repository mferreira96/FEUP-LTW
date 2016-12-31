<?php
  include_once('../database/connection.php');
  include_once('../database/review.php');

if(isset($_POST['submit'])){
  try {
    addReply($_GET['id'], $_POST['comment']);
  } catch (PDOException $e) {
    die($e->getMessage());
  }
}

header('Location: ../public/restaurant_overview.php');
?>
