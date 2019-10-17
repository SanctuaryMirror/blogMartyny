<?php
require 'opendb.php';
$check=$_POST['check'];

if ($check>0 && $check<2)
{
	echo "to jest wprowadzanie postu bloga</br></br></br>";
	$title=$_POST['title'];
	$content=$_POST['myTextArea'];
	$date = date('Y/m/d  a', time());
	echo "to jest tytuł: $title </br></br>";
	echo "to jest kontent: $content </br></br>";
	echo "to jest data: $date </br></br>";
	$fileName=$_FILES['file']['name'];
	$target_Path = "blogs/";
	$target_Path = $target_Path.basename( $_FILES['file']['name'] );
	move_uploaded_file( $_FILES['file']['tmp_name'], $target_Path );

	$data = [
	'title'=>$title,
	'content'=>$content,
	'image'=>$fileName,
	'publicationdate'=>$date];
	
	$table= "INSERT INTO blog (id,title,content,image,publicationdate) 
			VALUES ('DEFAULT',:title,:content,:image,:publicationdate)";
	$stmt= $conn->prepare($table);
	$stmt->execute($data);
}

if ($check>1 && $check<3){
	echo "to jest wprowadzanie filmów";
	$plik=$_POST['file'];
	echo "to jest plik: $plik </br></br>";
	$target_Path = "movies/";
$target_Path = $target_Path.basename( $_FILES['file']['name'] );
move_uploaded_file( $_FILES['file']['tmp_name'], $target_Path );
}
if ($check>2 && $check<4)
	echo "to jest wprowadzanie albumów";
// KOMENTARZ : ZAMIAST WRZUCAC FOTE, tu dodamy nazwe albumu ktora bedzie folderem dla zdjec.
if ($check>3 && $check<5)
	echo "to jest wprowadzanie zdjęć do albumu";
if ($check>4 && $check<6)
	echo "to jest aktualizacja o mnie";
if ($check>5 && $check<7)
	echo "to jest aktualizacja kontaktu";
?>