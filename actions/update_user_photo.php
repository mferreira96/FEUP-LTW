<?php

  include_once('../database/connection.php');
  include_once('../database/image.php');

  $uploads_dir = "../pics";

if(isset($_POST['submitPhoto'])){
  try {
    if($_POST['name']!== ""){

      $tmp_name = $_FILES["name"]["tmp_name"];
      $name = basename($_FILES["name"]["name"]);

      updateUserPhoto( $_SESSION['username'], $name);

      move_uploaded_file($tmp_name, "$uploads_dir/$name");
    }
  } catch (PDOException $e) {
    die($e->getMessage());
  }
}
  header('Location: ../public/restaurant_overview.php');

 ?>
