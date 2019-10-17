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
	<div id="box">
<div id="panelwindow">
<form method="post" action="loginverify.php">
<h1>Okno Logowania do Administratora Bloga</h1>
<p> Login:</p>
<p><input type="text" required name="username" placeholder="Podaj Login"></p>
<p> Hasło:</p>
<p><input type="password" required name="password" placeholder="Podaj Hasło"></p>
<div id="loginbutton" value="submit">
<p id="signal">Login lub hasło jest nieprawidłowe</p>
<button id="buttonid">ZALOGUJ</button></div>
</form>
</div>	
</div>
	</body>
</html>