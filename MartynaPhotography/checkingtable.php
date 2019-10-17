<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Login</th><th>Password</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

try{
	$query =$conn->prepare("SELECT * FROM login");
	$query->execute();
	$result = $query->setFetchMode(PDO::FETCH_ASSOC); 
	 foreach(new TableRows(new RecursiveArrayIterator($query->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}catch (PDOException $e){
echo "An error occured ".$e->getMessage();}
$conn=null;
echo "</table>";
?>
	