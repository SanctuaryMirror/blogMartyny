<!DOCTYPE HTML>
<script>
function logout(){
window.location.href='logout.php';
}
</script>
<html lang="pl-PL" >
	<head>
	<meta charset="UTF-8">
	<meta name="description" content="Martyna Bartosińska Photography">
	<meta name="keywords" content="Martyna, Bartosińska, Photography, Fotografia, ">
	<meta name="author" content="Martyna Bartosińska">
	<meta http-equiv="Cache-control" content="no-cache">
	<title>Martyna Bartosińska Photography</title>
	<link rel="stylesheet" href="stylemartyna.css">
	<script type="text/javascript" src="wysiwyg.js"></script>
	</head>
	<body OnLoad="iFrameOn();" OnLoad="logout()">
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
<div id='postbox'>
<div id='paneloptions'>
<ul>
<li><a>Dodawanie</a>
	<ul><li><a href="adminpaneladding-blog.php">Blog</a></li>
		<li><a href="adminpaneladding-movies.php">Filmy</a></li>
		<li><a href="adminpaneladding-albums.php">Albumy</a></li>
		<li><a href="adminpaneladding-photos.php">Zdjęcia</a></li></ul>
<li><a>Aktualizacja</a>
	<ul><li><a href="adminpanelactualisation-aboutme.php">O mnie</a></li>
		<li><a href="adminpanelactualisation-contact.php">Kontakt</a></li></ul>
<li><a>Usunięcie</a>
	<ul><li><a href="adminpaneldelete-blog.php">Blog</a></li>
		<li><a href="adminpaneldelete-movies.php">Filmy</a></li>
		<li><a href="adminpaneldelete-albums.php">Albumy</a></li>
		<li><a href="adminpaneldelete-photos.php">Zdjęcia</a></li></ul>
<li><a href="adminpanelstatistics.php">Statystyki</a></li>
</ul>

</div>
<div class='window'>
<form name="myform" id="myform" method="post" action="formularz.php">
<h1>Aktualizowanie sekcji "O Mnie"</h1>
<p>Wstaw plik z dysku</p>
<p><input type="file" name="file" placeholder="wstaw zdjęcie"></input></p>
<p>Edytor tekstu:<p>
<input type="button" onClick="iBold()" value="B"/>
<input type="button" onClick="iUnderline()" value="U"/>
<input type="button" onClick="iItalic()" value="I"/>
<input type="button" onClick="iFontSize()" value="Text Size"/>
<input type="button" onClick="iForeColor()" value="Text Color"/>
<input type="button" onClick="iHorizontalRule()" value="HR"/>
<input type="button" onClick="iUnorderedList()" value="UL"/>
<input type="button" onClick="iOrderedList()" value="OL"/>
<input type="button" onClick="iLink()" value="Link"/>
<input type="button" onClick="iUnlink()" value="Unlink"/>
<p><textarea style="display:none;" id="myTextArea" maxlength="55000" type="text" name="myTextArea" placeholder="wstaw Treść"></textarea>
<iframe name="richTextField" id="richTextField" style="border:#000000 1px solid; width:900px; height:450px;"></iframe></p>
<input style ="display:none;" name="check" type="number=" value="5"/>
<input id="mybutton" name="mybutton" type="button" value="Submit Data" OnClick="javascript:submit_form();"/>
</form>
</div>
<input id="logout" type="button" onClick="logout()" value="wyloguj się"/>
</div>
</body>
</html>