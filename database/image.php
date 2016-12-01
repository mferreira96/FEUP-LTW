<<?php

  function getImagesOfRestaurant($idRestaurant){
    global $dbh;

    $stm = $dbh->prepare('SELECT * FROM image, restaurant WHERE restaurant.id = ? AND image.id = restaurant.idPhoto');
    $stm->execute(array($idRestaurant));
    return $stm->fetchAll();
  }

  function getImageOfUSer($idUser){
    global $dbh;

    $stm = $dbh->prepare('SELECT * FROM image, user WHERE user.id = ? AND user.idPhoto = image.id ');
    $stm->execute(array($idUser));

    return $stm->fetch(); 
  }

 ?>