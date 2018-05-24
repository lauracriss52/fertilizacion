<?php

include('../../db/dbconnect.php');

if(isset($_POST["del_finca"]))
{

$query= "DELETE FROM fincas WHERE id_finca = '".$_POST["del_finca"]."'";
$result = mysqli_query($conexion, $query);	
	if($result){
		echo 'Finca eliminada';
        
	}else{
    echo 'No se ha podido eliminar esta finca';    
    }
}



?>