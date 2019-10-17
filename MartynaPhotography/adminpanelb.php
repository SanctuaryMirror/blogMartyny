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
		
		
		header("Location: adminpanelaccess.php");
	}
	else
	{
		echo "Document.getElementById('signal').style.visibility ='visible'";
		header("Location: adminpanel.php");
	}

}
?>
<!DOCTYPE HTML>
<html lang="pl-PL">
	<head>
	<meta charset="UTF-8">
	<meta name="description" content="Martyna Bartosińska Photography">
	<meta name="keywords" content="Martyna, Bartosińska, Photography, Fotografia, ">
	<meta name="author" content="Martyna Bartosińska">
	<title>Martyna Bartosińska Photography</title>
	<link rel="stylesheet" href="stylemartyna.css">
	</head>
	<body>
	<div id="navigation">
		<a href="index.php"><div id="home">Strona główna</div></a>
		<div id="blog">Blog</div>
		<div id="videos">Filmy</div>
		<div id="about">O mnie</div>
		<div id="client-showcase">Prezentacja klienta</div>
		<div id="contact">Kontakt</div>
		<a href="adminpanel.php"><div id="panel">Admin Panel</div></a>
	</div>
	<div id="photo">
	<img src="glowna2.jpg" width=100% >
	</div>
	<div id="box">
<div id="panelwindow">
<form method="post">
<h1>Okno Logowania do Administratora Bloga</h1>
<p> Login:</p>
<p><input type="text" name="username" placeholder="Podaj Login"></p>
<p> Hasło:</p>
<p><input type="password" name="password" placeholder="Podaj Hasło"></p>
<p id="signal">Login lub hasło nieprawidłowe</p>
<div id="loginbutton" value="submit">
<button id="buttonid">ZALOGUJ</button></div>
</form>
</div>	
</div>
	</body>
</html>