<?php 


require_once 'db_connect.php';
$id=$_POST['id']; 
$sql = "select * from etudiants where id=$id";


if ($result = mysqli_query($connect, $sql)) { 
 
    /* Récupération du tableau associatif */
    while ($row = mysqli_fetch_row($result)) { 
   $etudiant= "
   nom: <input type='text' value='$row[1]' id='nomUpdate'> 
   prenom:<input type='text' value='$row[2]' id='prenomUpdate'> 
   age:<input type='text' value='$row[3]' id='ageUpdate'> 
   cin:<input type='text' value='$row[4]' id='cinUpdate'> 
   <input type='hidden' value='$row[0]' id='idEtudiant'> 
   <input type='button' value='Enregistrer' onclick='updateBD()'>

   
   
   "; 
      	 
    }
    }

 echo $etudiant;


?>