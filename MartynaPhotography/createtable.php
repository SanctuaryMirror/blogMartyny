<?php
	include_once 'connection.php';
	include_once 'opendb.php';
	
//tworzymy tabele z adminem
$table = "CREATE TABLE IF NOT EXISTS login(
id SMALLINT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
userlogin TEXT NOT NULL,
password TEXT NOT NULL)";
try{$conn->query($table);
	echo "Table LOGIN created!";
}catch (PDOException $e){
	echo "An error occured ".$e->getMessage();
}
// tworzymy konto administratora
$data ="INSERT INTO login (id,userlogin,password)
VALUES ('DEFAULT','AdminMartyny','KochamPrzemka')";
try{$conn->query($data);
	echo "All data confirmed and saved.";
}catch (PDOException $e){
	echo "An error occurred ".$e->getMessage();
}
	

//tworzymy tabele postów na blogu oraz na home.
$table = "CREATE TABLE IF NOT EXISTS blog(
id SMALLINT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
title VARCHAR(255) NOT NULL,
content TEXT NOT NULL,
image VARCHAR(255) NOT NULL,
publicationdate DATE NOT NULL)";

try{
	$conn->query($table);
	echo "Table BLOG created!";
}catch (PDOException $e){
	echo "An error occured ".$e->getMessage();
}
//tworzymy tabele dla filmów.
$table = "CREATE TABLE IF NOT EXISTS video(
id SMALLINT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
video VARCHAR(255) NOT NULL,
publicationdate DATE NOT NULL)";

try{
	$conn->query($table);
	echo "Table VIDEO created!";
}catch (PDOException $e){
	echo "An error occured ".$e->getMessage();
}
//tworzymy tabele dla albumów.
$table ="CREATE TABLE IF NOT EXISTS album(
id SMALLINT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
albumname VARCHAR(255) NOT NULL,
publicationdate DATE NOT NULL)";

try{
	$conn->query($table);
	echo "Table ALBUM created!";
}catch (PDOException $e){
	echo "An error occured ".$e->getMessage();
}

//tworzymy druga tabele do zawartosci albumow, polaczone foreign keyem.
$table ="CREATE TABLE IF NOT EXISTS photos(
id SMALLINT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
photo VARCHAR(255) NOT NULL,
publicationdate DATE NOT NULL,
albumid INT UNSIGNED NOT NULL REFERENCES album(id))";

try{
	$conn->query($table);
	echo "Table photos created!";
}catch (PDOException $e){
	echo "An error occured ".$e->getMessage();
}
//tworzymy tabele do wypelniania czesci o mnie
$table ="CREATE TABLE IF NOT EXISTS aboutme(
id SMALLINT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
photo TEXT NOT NULL)";

try{
	$conn->query($table);
	echo "Table aboutme created!";
}catch (PDOException $e){
	echo "An error occured ".$e->getMessage();
}
//tabela do wypelniania danych kontaktowych
$table ="CREATE TABLE IF NOT EXISTS contact(
id SMALLINT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(255) NOT NULL,
adres VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL)";

try{
	$conn->query($table);
	echo "Table contact created!";
}catch (PDOException $e){
	echo "An error occured ".$e->getMessage();
}

?>
