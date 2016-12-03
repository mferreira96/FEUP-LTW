<?php

  /*
    Get an user
  */

  function getUser($username){
      global $dbh;

      $stm = $dbh->prepare('SELECT * FROM user WHERE userName = :user');
      $stm->bindParam(':user', $username, PDO::PARAM_STR);
      $stm->execute();
      return $stm->fetch();
  }

/*
  Verify if the password of the user is correct
*/
  function verifyPassword($username, $password){
    global $dbh;

    $stm = $dbh->prepare('SELECT * FROM user WHERE userName = :user');
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

    $stm = $dbh->prepare('INSERT INTO user(userName,name, email, photo, password) VALUES (:userN, :name, :email, NULL, :pass)');
    $stm->bindParam(':userN', $user['userName'], PDO::PARAM_STR);
    $passW = sha1($user['password']);
    $stm->bindParam(':pass', $passW, PDO::PARAM_STR);
    $stm->bindParam(':name', $user['name'],  PDO::PARAM_STR);
    $stm->bindParam(':email', $user['email'],  PDO::PARAM_STR);
    $stm->execute();
  }

  /*
  Get user by Id
  */

  function getUserByUserName($userName){
    global $dbh;

    $stm  = $dbh->prepare('SELECT * FROM user WHERE userName = ?');
    $stm->execute(array($userName));

    return $stm->fetch();

  }

 ?>
