<?php

  include_once('../database/connection.php');
  include_once('../database/user.php');

  if(isset($_POST['submit'])){
    $passwordFlag = verifyPassword($_POST['username'],$_POST['password']);

    // palavra passe correta
    if(passwordFlag == true){

        $_SESSION['username'] = $_POST['username'];

    }
    else{
      // palavra passe incorreta
    }
  }


 ?>
