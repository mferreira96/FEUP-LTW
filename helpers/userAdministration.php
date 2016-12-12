<?php
function login_check(){
  if((isset($_SESSION['user-logged']) && $_SESSION['user-logged']) === false){
    header('Location: ../views/login.php');
    die();
  }
}

function userType_check(){
  if(isset($_SESSION['userType']) && $_SESSION['userType'] === "owner")
  {
    $userType = "owner"; //0 owner, 1 reviewer
  }
  else
  {
    $userType = "reviewer";
  }
  return $userType;
}
?>
