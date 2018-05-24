 <?php  
 //UPDATE.php  
include('../../db/dbconnect.php'); 
 if(isset($_POST["cultivos_id"],$_POST["Nombre_cultivo"],$_POST["Variedad_cultivo"],$_POST["Superficie_cultivo"],$_POST["Metodo_cultivo"],$_POST["Descripcion_cultivo"]))  
 {  
      $id = mysqli_real_escape_string($conexion, $_POST["cultivos_id"]);  
      $Nombre_cultivo = mysqli_real_escape_string($conexion, $_POST["Nombre_cultivo"]);  
      $Variedad_cultivo = mysqli_real_escape_string($conexion, $_POST["Variedad_cultivo"]);      
      $Superficie_cultivo = mysqli_real_escape_string($conexion, $_POST["Superficie_cultivo"]);          
      $Metodo_cultivo = mysqli_real_escape_string($conexion, $_POST["Metodo_cultivo"]);          
      $Descripcion_cultivo = mysqli_real_escape_string($conexion, $_POST["Descripcion_cultivo"]);          

    $sql = "UPDATE cultivos SET                   Nombre_cultivo='$Nombre_cultivo',Variedad_cultivo='$Variedad_cultivo',Superficie_cultivo='$Superficie_cultivo',Metodo_cultivo='$Metodo_cultivo',Descripcion_cultivo='$Descripcion_cultivo' WHERE id_cultivo = '$id'";  
      if(mysqli_query($conexion, $sql))  
      {  
           echo "Todo se ha actualizado éxitosamente...";  
      } else{echo"Error al actualizar ):";}
 }  

 ?> 