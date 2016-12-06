<?php

  include_once('../database/connection.php');
  include_once('../database/restaurant.php');
  include_once('../database/image.php');

  //session_start();

  $variables = $_POST;
  $uploads_dir = "../pics";
  try {

    $tmp_name = $_FILES["restaurant_picture"]["tmp_name"];
    $name = basename($_FILES["restaurant_picture"]["name"]);
    addImage($name);

    $id= $dbh->lastInsertId();

    move_uploaded_file($tmp_name, "$uploads_dir/$name");

    addRestaurant($variables, $id);
    $idRestaurant= $dbh->lastInsertId();
/*
  Para quando ja estiver a funcionar o user

    addOwner($idRestaurant, $_SESSION['username']);
*/
  } catch (PDOException $e) {
    die($e->getMessage());
  }

 ?>
