<?php


require_once "db_connect.php";


$nom=substr($_POST["nom"],0,3);
$prenom=$_POST["prenom"];
$age=$_POST["age"];
$cin=$_POST["cin"];
 

if(strlen($cin)==8 ){

 
    $sql="INSERT INTO etudiants  VALUES ('', '$nom', '$prenom',$age,$cin)";

    if (mysqli_query($connect, $sql)) {
        echo "Création avec succée";
    } else {
        echo "Failed: "  ;
    }
}else{
    echo "<p style='color:red'>CIN doit avoir 8 caracteres coté php</p>";
}

  


?>