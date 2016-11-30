<<?php
  function getAllReviewsFromRestaurant($idRestaurant){
    global $dbh;

    $stm = $dbh->prepare('SELECT * FROM review
                            WHERE idRestaurant = ?');
    $stm->execute(array($idRestaurant));
    return $stm->fetchAll();
  }

 ?>
