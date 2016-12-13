<?php

  /*
    Get all reviews
  */

  function getAllReviewsFromRestaurant($idRestaurant){
    global $dbh;

    $stm = $dbh->prepare('SELECT * FROM review
                            WHERE idRestaurant = ?');
    $stm->execute(array($idRestaurant));
    return $stm->fetchAll();
  }

  /*
    Get answer to a review
  */

  function getReply($idReview){
    global $dbh;

    $stm = $dbh->prepare('SELECT * FROM reply WHERE idReview = ?');
    $stm->execute(array($idReview));
    return $stm->fetch();
  }


  /*
    Add a review
  */

  function addReview($idRestaurant, $username, $rate, $comment){
    global $dbh;

    $stm = $dbh->prepare('INSERT INTO review VALUES (NULL,?,?,?,?)');
    $stm->execute(array($idRestaurant, $username, $rate, $comment));
  }



  /*
    Add an answer
  */

  function addReply($idReview, $comment){
      global $dbh;

      $stm = $dbh->prepare('INSERT INTO reply VALUES (NULL,?,?)');
      $stm->execute(array($idReview, $comment));
  }



 ?>
