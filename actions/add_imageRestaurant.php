<?php

  include_once('../database/connection.php');
  include_once('../database/image.php');

  $uploads_dir = "../pics";
  try {
    /// ainda nao esta funcional
    $tmp_name = $_FILES["image"]["tmp_name"];
    $name = basename($_FILES["image"]["name"]);

    addImageRestaurant($name,$idRestaurant);
    move_uploaded_file($tmp_name, "$uploads_dir/$name");

  } catch (PDOException $e) {
    die($e->getMessage());
  }

 ?>
