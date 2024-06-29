 <?php
require_once 'db_connect.php';

$query = "SELECT  * FROM etudiants ";
//premier test g
$content="";
if ($result = mysqli_query($connect, $query)) { 

	while ($row = mysqli_fetch_row($result)) { 
     
        if($row[3]<40){$color="red";}else{$color="green"; }
     
        $content  .= "<tr style='color:$color'><td>$row[1]</td>
           <td>  $row[2]  </td> <td>  $row[3]  </td> <td>  $row[4]  </td> 
           <td >  
           
          
           <i class='fa fa-trash' aria-hidden='true' onclick=\"deleteEtudiant('$row[0]')\" style='cursor:pointer'></i>
           <i class='fa fa-pencil-square-o' aria-hidden='true' onclick=\"modification('$row[0]')\" style='cursor:pointer'></i>

           </td>
           
           </tr>";

    }
} 	

$table='<table border="1px solid blue" width=50% style="text-align:center">
<tr style="background-color:silver">
<th>  Nom </th>
<th>  Prenom </th>
<th> Age</th>
<th> CIN </th>
<th> Actions  </th>
</tr>'.
$content.'
</table>



';
 echo $table;
 
?>

