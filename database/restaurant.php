<?php

    /*
    Get a restaurant
    */

    function getAllRestaurants(){
      global $dbh;

      $stm = $dbh->prepare('SELECT * FROM restaurant ');
      $stm->execute();
      return $stm->fetchAll();
    }

    /*
    Get reviews of restaurant
    */

    function getReviews($name){
      
    }




 ?>
