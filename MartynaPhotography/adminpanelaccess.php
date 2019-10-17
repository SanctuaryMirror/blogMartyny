<!DOCTYPE HTML>
<html lang="pl-PL">
	<head>
	<meta charset="UTF-8">
	<meta name="description" content="Martyna Bartosińska Photography">
	<meta name="keywords" content="Martyna, Bartosińska, Photography, Fotografia, ">
	<meta name="author" content="Martyna Bartosińska">
	<meta http-equiv="Cache-control" content="no-cache">
	<title>Martyna Bartosińska Photography</title>
	<link rel="stylesheet" href="stylemartyna.css">
	</head>
	<body>
	<div id="navigation">
		<a href="index.php"><div id="home">Strona główna</div></a>
		<a href="blog.php"><div id="blog">Blog</div></a>
		<a href="videos.php"><div id="videos">Filmy</div></a>
		<a href="about.php"><div id="about">O mnie</div></a>
		<a href="albums.php"><div id="albums">Albumy</div></a>
		<a href="contact.php"><div id="contact">Kontakt</div></a>
		<a href="adminpanel.php"><div id="panel">Admin Panel</div></a>
	</div>
	<div id="photo">
	<img src="glowna2.jpg" width=100% >
	</div>
	<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "<h1>Welcome to the Admin Panel " . $_SESSION['username'] . "!</h1>";
} else {
    header("Location:adminpanel.php");
}
?>
<div id='paneloptions'>
<a href="adminpaneladding.php"><div id='panelbutton1'>Dodawanie</div></a>
<a href="adminpanelactualisation.php"><div id='panelbutton2'>Aktualizacje</div></a>
<a href="adminpaneldeleting.php"<div id='panelbutton3'>Usuwanie</div></a>
</div>
<div id='postbox'>
<div class='window'>
<p> okno adminpanelu</p>
</div>
</div>
	</body>
</html>