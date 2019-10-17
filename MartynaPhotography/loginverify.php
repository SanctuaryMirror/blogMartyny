<?php
require_once 'opendb.php';

session_start();
$login= $_POST['username'];
$haslo=$_POST['password'];

$sql= "SELECT * FROM login WHERE userlogin='$login' AND password='$haslo'";
if ($rezultat= $conn -> query($sql));
{
	$ilu_userow = $rezultat ->rowCount();
	if($ilu_userow>0)
	{
		$wiersz=$rezultat->fetch(PDO::FETCH_ASSOC);
		$user=$wiersz['userlogin'];
		$_SESSION['username']=$user;
		$_SESSION['loggedin']=true;
		header("Location: adminpaneladding-blog.php");
	}
	else
	{
		$_SESSION['loggedin']=false;
		header("Location: testy.php");
	}

}
?>