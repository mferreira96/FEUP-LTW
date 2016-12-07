<?php


  include_once('../database/connection.php');
  include_once('../database/user.php');
  include_once('../database/image.php');

  $uploads_dir = "../pics";
  try {
    addUser($_POST);

    $tmp_name = $_FILES["image"]["tmp_name"];
    $name = basename($_FILES["image"]["name"]);

    $id= $dbh->lastInsertId();

    addImageUser($name, $_POST['username']);
    move_uploaded_file($tmp_name, "$uploads_dir/$name");

  } catch (PDOException $e) {
    die($e->getMessage());
  }

 ?>
