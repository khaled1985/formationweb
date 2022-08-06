<?php
require_once "db_connect.php";

$id=$_POST['id'];
$nom =$_POST['nom'];
$prenom=$_POST['prenom'];
$age=$_POST['age'];
$cin=$_POST['cin'];

$query="update etudiants set nom='$nom',prenom='$prenom',age=$age,cin=$cin where id=$id";
 
if(mysqli_query($connect,$query)){
    echo "Mise a jour avec succé" ;
}else{
    echo "error";
}

?>