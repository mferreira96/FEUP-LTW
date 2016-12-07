<?php

  include_once('../database/connection.php');
  include_once('../database/restaurant.php');
  include_once('../database/image.php');

  //session_start();

  $variables = $_POST;
  $uploads_dir = "../pics";
  try {

    addRestaurant($variables);
    $tmp_name = $_FILES["restaurant_picture"]["tmp_name"];
    $name = basename($_FILES["restaurant_picture"]["name"]);

    $id= $dbh->lastInsertId();


    addImageRestaurant($name, $id);

    move_uploaded_file($tmp_name, "$uploads_dir/$name");


/*    $idRestaurant= $dbh->lastInsertId();

  Para quando ja estiver a funcionar o user

    addOwner($idRestaurant, $_SESSION['username']);
*/
  } catch (PDOException $e) {
    die($e->getMessage());
  }

 ?>
