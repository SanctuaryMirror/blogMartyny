<?php
	
	include_once 'connection.php';
	
try
	{
	$sql = "CREATE DATABASE database1";
	$conn->exec($sql);
    echo "Database created successfully with the name database1";
    }
catch(PDOException $e)
    {
    echo $sql . "
" . $e->getMessage();
    }
?>