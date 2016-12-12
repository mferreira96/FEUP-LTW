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
*//*
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
  }*/

/*
  Add an user
*/
/*
  function addUser($user){
    global $dbh;

    $stm = $dbh->prepare('INSERT INTO user(username,name, email, password) VALUES (?, ?, ?, ?)');
    $passW = sha1($user['password']);
    $stm->execute(array($user['username'],$user['name'], $user['email'],  $passW));
  }
*/
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

	 function createUser($db, $username, $name, $email, $password, $status) {
		$query = "INSERT INTO user VALUES(?,?,?,?,?,?,?,?)";
		$stmt = $dbh->prepare($query);
		$stmt->execute(array($username, $name, $email, hash('sha256', $password), $status));
}
 ?>
