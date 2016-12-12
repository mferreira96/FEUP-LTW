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

  function getPassword($username){
      global $dbh;

      $stm = $dbh->prepare('SELECT password FROM user WHERE username = ?');
      $stm->execute(array($username));
      return $stm->fetch();
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

	 function createUser( $username, $name, $email, $password) {
    global $dbh;

    $query = "INSERT INTO user VALUES(?,?,?,?)";
		$stmt = $dbh->prepare($query);
		$stmt->execute(array($username, $name, $email,$password));
}
 ?>
