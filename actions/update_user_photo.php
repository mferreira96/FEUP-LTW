<?php

  include_once('../database/connection.php');
  include_once('../database/image.php');


if(isset($_POST['submit'])){
  try {
    updateUserPhoto($_POST['name'], $_POST['username']);

    $tmp_name = $_FILES["name"]["tmp_name"];
    $name = basename($_FILES["name"]["name"]);

    move_uploaded_file($tmp_name, "$uploads_dir/$name");

  } catch (PDOException $e) {
    die($e->getMessage());
  }
}
  header('Location: ../public/restaurant_overview.php');

 ?>
