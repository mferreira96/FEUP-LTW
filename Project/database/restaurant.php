<?php

    /*
    Get a restaurant
    */

    function getAllRestaurants(){
      global $dbh;

      $stm = $dbh->prepare('SELECT * FROM restaurant');
      $stm->execute();
      return $stm->fetchAll();
    }


    /*
      Add a restaurant
    */
    function addRestaurant($values){
      global $dbh;

      $stm = $dbh->prepare('INSERT INTO restaurant(name,street,number,city,postcode,opening_hours,link_to_website, type_of_food,comment, telephoneNumber, rate) VALUES ( ?,?,?,?,?,?,?,?,?, ?,?)');
      $stm->execute(array($values['name'],$values['street'], $values['number'], $values['city'], $values['postcode'],  $values['opening_hours'], $values['link_to_website'],$values['type_of_food'],$values['comment'],$values['telephoneNumber'],0 ));

    }



    /*
      Get restaurants by Id
    */

    function getRestaurantById($id){
      global $dbh;

      $stm = $dbh->prepare('SELECT * FROM restaurant WHERE id = ?');
      $stm->execute(array($id));
      return $stm->fetch();

    }

    /*
      Get Restaurants by location
    */


    function getRestaurantsByCity($location){
      global $dbh;

      $stm = $dbh->preapre('SELECT * FROM restaurant WHERE city = ?');
      $stm->execute(array($city));
      return $stm->fetchAll();

    }

    /*
    Get restaurants with a rate higher than X
    */
    function getRestaurantsByRatingLimit($limit) {
      global $dbh;

      $stmt = $dbh->prepare('SELECT * FROM restaurant
  							   ORDER BY rate DESC LIMIT ?');
  		$stmt->execute(array($limit));

      return $stmt->fetchAll();
  	}

    /*
    Get restaurant by name
    */

    function getRestaurantsByName($name){
      global $dbh;

      $stm = $dbh->prepare('SELECT * FROM restaurant WHERE name = ?');
      $stm->execute(array($name));
      return $stm->fetchAll();
    }


    /*
      Get the owners of the restaurant
    */

    function getOwnersUsername($idRestaurant){
      global $dbh;

      $stm = $dbh->prepare('SELECT username FROM restaurantOwners WHERE idRestaurant = ?');
      $stm->execute(array($idRestaurant));
      return $stm->fetchAll();

    }

    /*
    	add another ownr to a restaurant
    */

    function addOwner($idRestaurant, $username){
      global $dbh;

      $stm = $dbh->prepare('INSERT INTO restaurantOwners(idRestaurant, username) VALUES(?,?)');
      $stm->execute(array($idRestaurant, $username));

    }


    /*
    Update restaurant
    */

    function updateRestaurant($values){
        global $dbh;
        print_r($values);
        $stm = $dbh->prepare('UPDATE restaurant SET name=?, street=?, number=?, city=?, postcode=?, opening_hours=?,link_to_website=? WHERE id = ?');
        $stm->execute(array($values['name'],$values['street'], $values['number'], $values['city'], $values['postcode'],  $values['opening_hours'], $values['link_to_website'], $values['id']));
    }

    function getRestaurantByCityFood($city, $food){
      global $dbh;

      $stm = $dbh->prepare('SELECT * FROM restaurant WHERE city = ? AND type_of_food = ?');
      $stm->execute(array($city, $food));
      return $stm->fetchAll();
    }

    function getRestaurantsByOwner($username){
      global $dbh;

      $stm = $dbh->prepare('SELECT * FROM restaurant, restaurantOwners WHERE restaurantOwners.username = ? AND restaurantOwners.idRestaurant = restaurant.id');
      $stm->execute(array($username));
      return $stm->fetchAll();
    }
 ?>
