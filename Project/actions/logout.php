<?php
	//session_start();
	unset($_SESSION['username']);
	unset($_SESSION['user-logged']);
	session_destroy();
?>
