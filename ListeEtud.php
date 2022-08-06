 <?php
require_once 'db_connect.php';

$query = "SELECT  * FROM etudiants ";

$table="";
if ($result = mysqli_query($connect, $query)) { 

	while ($row = mysqli_fetch_row($result)) {  
$table  .= $row[1]."   ".$row[2]."<br>";
    }
} 	
	 
 echo $table;
 
?>

