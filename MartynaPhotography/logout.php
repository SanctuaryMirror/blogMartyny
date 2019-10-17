<?php
require_once 'opendb.php';


session_start();
	unset($_SESSION['username']);
	unset($_SESSION['password']);
	session_destroy();
	header('Location:adminpanel.php');
?>