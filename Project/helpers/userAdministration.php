<?php
function login_check(){
  if(!login_check_bool()){
    header('Location: ../public/login.php');
    die();
  }
}

function login_check_register(){
  if((isset($_SESSION['user-logged']) && $_SESSION['user-logged']) === true){
    header('Location: ../public/restaurant_overview.php');
    die();
  }
}

function login_check_bool()
{
  #$retVal = '0';
  $retVal = false;
  if(isset($_SESSION['user-logged']) && $_SESSION['user-logged'])
  {
    #$retVal = $retVal.'1';
    if(isset($_SESSION['IPaddress']) && $_SESSION['IPaddress'] === $_SERVER['REMOTE_ADDR'])//for preventing hijackin
    {
      #$retVal = $retVal.'2';
      if(isset($_SESSION['userAgent']) && $_SESSION['userAgent'] === $_SERVER['HTTP_USER_AGENT'])//for preventing hijackin
      {
        #$retVal = $retVal.'3';
        $retVal = true;
      }
    }
  }
  return (bool)$retVal;
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
