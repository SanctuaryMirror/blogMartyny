<?php
	include_once 'connection.php';
	include_once 'opendb.php';
	
$table = "CREATE TABLE IF NOT EXISTS login
		(
		`id` int(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
		userlogin TEXT NOT NULL,
		password TEXT NOT NULL
		)";

try{
		$conn->query($table);
		echo "Table login created!";
}catch (PDOException $e){
echo "An error occured ".$e->getMessage();}
?>

