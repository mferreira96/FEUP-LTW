<?php

  include_once('../database/connection.php');
  include_once('../database/image.php');

  $uploads_dir = "../pics";
  try {
    /// ainda nao esta funcional
    $tmp_name = $_FILES["name"]["tmp_name"];
    $name = basename($_FILES["name"]["name"]);

    addImageRestaurant($name,$_GET['id']);
    move_uploaded_file($tmp_name, "$uploads_dir/$name");

  } catch (PDOException $e) {
    die($e->getMessage());
  }
  
  header('Location: ../public/restaurant_overview.php');
 ?>
