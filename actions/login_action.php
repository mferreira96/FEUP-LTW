<?php
session_start();
include_once('../../database/connection.php');
include_once('../../database/user.php');
if (userExists($dbh, $_POST['username'], $_POST['password'])){
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['user-logged'] = true;
}
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>