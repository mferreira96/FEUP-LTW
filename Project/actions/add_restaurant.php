<?php

  include_once('../database/connection.php');
  include_once('../database/restaurant.php');
  include_once('../database/image.php');

  //session_start();
  if(isset($_POST['add'])){
    if($_POST['form_key'] === $_SESSION['form_key']){
      $variables = $_POST;
      $uploads_dir = "../pics";
      try {

        addRestaurant($variables);
        $idRestaurant= $dbh->lastInsertId();

        addOwner($idRestaurant, $_SESSION['username']);

        $tmp_name = $_FILES["restaurant_picture"]["tmp_name"];
        $name = basename($_FILES["restaurant_picture"]["name"]);

        if(strlen($name)!==0){
          addImageRestaurant($name, $idRestaurant);

          move_uploaded_file($tmp_name, "$uploads_dir/$name");
        }
      } catch (PDOException $e) {
        die($e->getMessage());
      }
    }else{
      include('restaurant_overview.php?userType=owner?');
    }
}
header('Location: ../public/restaurant_overview.php');

 ?>
