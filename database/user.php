<?php

  /*
    Get an user
  */

  function getUser($username){
      global $dbh;

      $stm = $dbh->prepare('SELECT * FROM user WHERE username = :user');
      $stm->bindParam(':user', $username, PDO::PARAM_STR);
      $stm->execute();
      return $stm->fetch();
  }

/*
  Verify if the password of the user is correct
*/
  function verifyPassword($username, $password){
    global $dbh;

    $stm = $dbh->prepare('SELECT * FROM user WHERE username = :user');
    $stm->bindParam(':user', $username, PDO::PARAM_STR);
    $stm->execute();
    $result =  $stm->fetch();

    $pass = sha1($password);
    if($result['password'] == $pass)
      return true;

    return false;
  }

/*
  Add an user
*/

  function addUser($user){
    global $dbh;

    $stm = $dbh->prepare('INSERT INTO user(username,name, email, photo, password) VALUES (:userN, :name, :email, NULL, :pass)');
    $stm->bindParam(':userN', $user['username'], PDO::PARAM_STR);
    $passW = sha1($user['password']);
    $stm->bindParam(':pass', $passW, PDO::PARAM_STR);
    $stm->bindParam(':name', $user['name'],  PDO::PARAM_STR);
    $stm->bindParam(':email', $user['email'],  PDO::PARAM_STR);
    $stm->execute();
  }

  /*
  Get user by Id
  */

  function getUserByusername($username){
    global $dbh;

    $stm  = $dbh->prepare('SELECT * FROM user WHERE username = ?');
    $stm->execute(array($username));

    return $stm->fetch();

  }


      /*
      Update user
      */

      function updateUser($variables){
        global $dbh;

        $stm = $dbh->prepare('UPDATE user SET ?, ?,? WHERE username = ?');
        $stm->execute(array($variables['name'], $variables['email'], $variables['password'], $variables['username']));

      }
 ?>
