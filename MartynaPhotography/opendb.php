<?php
	require 'connection.php';
	
try{
$sql='Use database1';
$conn->exec($sql);
    }
catch(PDOException $e)
    {
    echo "
" . $e->getMessage();
    }
?>