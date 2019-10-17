<?php
include_once 'login.php';

try{
	$array=array( ':userlogin'=>"Admin",
				':userpassword'=>"Admin123");
	$query="INSERT INTO login (userlogin,password) VALUES ('Admin','Admin123')";
	$stmt= $conn->prepare($query);
	$stmt->execute($array);
	echo "Table record created";
}catch (PDOException $e){
echo "An error occured ".$e->getMessage();}
?>
	