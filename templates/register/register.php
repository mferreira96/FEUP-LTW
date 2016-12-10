<?php

include_once('../../database/connection.php');
include_once('../../database/user.php');


if ($_POST['submit'] == 'owner') {
    $status = 1;
}
else {
    $status = 0;
}
createUser($dbh, $_POST['username'], $_POST['name'], $_POST['email'], $status, $_POST['password'], $status);
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>