
 <?php  
 //UPDATE.php  
include('../../db/dbconnect.php'); 
 if(isset($_POST["id_elemento"],$_POST["Nombre_elemento"],$_POST["Descripcion_elemento"],$_POST["Categoria_elemento"]))  
 {  
      $id = mysqli_real_escape_string($conexion, $_POST["id_elemento"]);  
      $Nombre_elemento = mysqli_real_escape_string($conexion, $_POST["Nombre_elemento"]);  
      $Descripcion_elemento = mysqli_real_escape_string($conexion, $_POST["Descripcion_elemento"]);      
      $Categoria_elemento = mysqli_real_escape_string($conexion, $_POST["Categoria_elemento"]);          

          
        
      $sql = "UPDATE elementos SET Nombre_elemento='$Nombre_elemento',Descripcion_elemento='$Descripcion_elemento',Categoria_elemento='$Categoria_elemento' WHERE id_elemento = '$id'";  
      if(mysqli_query($conexion, $sql))  
      {  
           echo "Todo se ha actualizado éxitosamente...";  
      } else{echo"Error al actualizar ):";}

 
 
 
 
 }  

 ?> 