<?php

function getAllImageSOfRestaurants(){
  global $dbh;

  $stm = $dbh->prepare('SELECT * FROM image_restaurant');
  $stm->execute();

  return $stm->fetchAll();
}

function getImagesOfRestaurant($idRestaurant){
  global $dbh;

  $stm = $dbh->prepare('SELECT * FROM image_restaurant WHERE idRestaurant = ?');
  $stm->execute(array($idRestaurant));

  return $stm->fetchAll();
}

  function getImageOfUSer($username){
    global $dbh;

    $stm = $dbh->prepare('SELECT * FROM image_user WHERE username = ?');
    $stm->execute(array($username));

    return $stm->fetch();
  }

  function addImageRestaurant($name,$idRestaurant){
    global $dbh;

    $stm = $dbh->prepare('INSERT INTO image_restaurant VALUES(NULL,?,?)');
    $stm->execute(array($idRestaurant, $name));
  }

  function addImageUser($name,$username){
    global $dbh;

    $stm = $dbh->prepare('INSERT INTO image_user VALUES(NULL,?,?)');
    $stm->execute(array($username, $name));
  }

  function updateUserPhoto($username,$name){
    global $dbh;

    $stm = $dbh->prepare('UPDATE image_user SET name = ? WHERE username = ?');
    $stm->execute(array($name, $username));
  }

 ?>
