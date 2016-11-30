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
      Add a restaurant
    */
    function addRestaurant($values){
      global $dbh;

      $stm = $dbh->prepare('INSERT INTO restaurant(id, name, descriptionm, rate, idPhoto, idOwner, local) VALUES (NULL, :name, :description, NULL, NULL, NULL. :local)');
      $stm->bindParam(:name, $values['name'], PARAM_STR);
      $stm->bindParam(:description, $values['description'], PARAM_STR);
      $stm->bindParam(:local, $values['local'], PARAM_STR);
      $stm->execute();
    }

    /*
      Get restaurants by Id
    */

    function getRestaurantById($id){
      global $dbh;

      $stm = $dbh->prepare('SELECT * FROM restaurant WHERE id = ?');
      $stm->execute(array($id));
      return $stm->fetchAll();

    }

    /*
      Get Restaurants by location
    */


    function getRestaurantsByLocation($location){
      global $dbh;

      $stm = $dbh->preapre('SELECT * FROM restaurant WHERE location = ?');
      $stm->execute(array($location));
      return $stm->fetchAll();

    }

    /*
    Get restaurants with a rate higher than X
    */

    function getRestaurantsByRate($number){
      global $dbh;

      $stm = $dbh->prepare('SELECT * FROM restaurant ORDER BY rate DESC LIMIT ?')
      $stm->execute(array($number));
      return $stm->fetchAll();
    }


    /*
      Get the owners of the restaurant
    */

    function getOwnersId($idRestaurant){
      global $dbh;

      $stm = $dbh->prepare('SELECT idUser FROM restaurantOwners WHERE idRestaurant = ?');
      $stm->execute(array($idRestaurant));
      return $stm->fetchAll();

    }

    /*
    Adiciona um Owner a um determinado restaurante
    */

    function addOwner($idRestaurant, $idUser){
      global $dbh;

      $stm = $dbh->prepare('INSERT INTO restaurantOwners(idRestaurant, idUser) VALUES(?,?)');
      $stm->execute(array($idRestaurant, $idUser));

    }

 ?>
