
 <?php  
 //UPDATE.php  
include('../../db/dbconnect.php'); 
 if(isset($_POST["id_ferti"],$_POST["Nombre_fertilizante"],$_POST["Tipo_fertilizante"],$_POST["Estado_fertilizante"],$_POST["Fabricante_fertilizante"],$_POST["Descripcion_fertilizante"]))  
 {  
      $id = mysqli_real_escape_string($conexion, $_POST["id_ferti"]);  
      $Nombre_fertilizante = mysqli_real_escape_string($conexion, $_POST["Nombre_fertilizante"]);  
      $Tipo_fertilizante = mysqli_real_escape_string($conexion, $_POST["Tipo_fertilizante"]);      
      $Estado_fertilizante = mysqli_real_escape_string($conexion, $_POST["Estado_fertilizante"]);          
      $Fabricante_fertilizante = mysqli_real_escape_string($conexion, $_POST["Fabricante_fertilizante"]);          
      $Descripcion_fertilizante = mysqli_real_escape_string($conexion, $_POST["Descripcion_fertilizante"]);          
          
        
      $sql = "UPDATE fertilizantes SET Nombre_fertilizante='$Nombre_fertilizante',Tipo_fertilizante='$Tipo_fertilizante',Estado_fertilizante='$Estado_fertilizante',Fabricante_fertilizante='$Fabricante_fertilizante',Descripcion_fertilizante='$Descripcion_fertilizante' WHERE id_fertilizante= '$id'";  
      if(mysqli_query($conexion, $sql))  
      {  
           echo "Todo se ha actualizado éxitosamente...";  
      } else{echo"Error al actualizar ):";}

 
 
 
 
 }  

 ?> 