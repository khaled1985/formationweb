<?php
require_once 'db_connect.php';

$id=$_POST['id']; 
$query = "delete  FROM etudiants where id=$id ";

if (mysqli_query($connect, $query)) {
    echo "Suppression avec succes";
} else {echo "Error: ";}





?>