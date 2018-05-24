
 <?php  
 //UPDATE.php  
include('../../db/dbconnect.php'); 
 if(isset($_POST["id_finca"],$_POST["Nombre_finca"],$_POST["Descripcion_finca"],$_POST["Departamento_finca"]
        ,$_POST["Longitud_finca"],$_POST["Viaacc_finca"],$_POST["Intgamilia_finca"],$_POST["Jovenes1518_finca"]))  
 {  
      $id = mysqli_real_escape_string($conexion, $_POST["id_finca"]);  
      $Nombre_finca = mysqli_real_escape_string($conexion, $_POST["Nombre_finca"]);  
      $Descripcion_finca = mysqli_real_escape_string($conexion, $_POST["Descripcion_finca"]);      
      $Departamento_finca = mysqli_real_escape_string($conexion, $_POST["Departamento_finca"]);          
      $Municipio_finca = mysqli_real_escape_string($conexion, $_POST["Municipio_finca"]);          
      $Vereda_finca = mysqli_real_escape_string($conexion, $_POST["Vereda_finca"]);          
      $Latitud_finca = mysqli_real_escape_string($conexion, $_POST["Latitud_finca"]);          
      $Longitud_finca = mysqli_real_escape_string($conexion, $_POST["Longitud_finca"]);          
      $Viaacc_finca = mysqli_real_escape_string($conexion, $_POST["Viaacc_finca"]);          
      $Intgamilia_finca = mysqli_real_escape_string($conexion, $_POST["Intgamilia_finca"]);          
      $Jovenes1518 = mysqli_real_escape_string($conexion, $_POST["Jovenes1518_finca"]);          
          
        
      $sql = "UPDATE fincas SET Nombre_finca='$Nombre_finca',Descripcion_finca='$Descripcion_finca',Departamento_finca='$Departamento_finca',Municipio_finca='$Municipio_finca',Vereda_finca='$Vereda_finca',Latitud_finca='$Latitud_finca',Longitud_finca='$Longitud_finca',Viaacc_finca='$Viaacc_finca',Intgamilia_finca='$Intgamilia_finca',Jovenes1518='$Jovenes1518' WHERE id_finca= '$id'";  
      if(mysqli_query($conexion, $sql))  
      {  
           echo "Todo se ha actualizado éxitosamente...";  
      } else{echo"Error al actualizar ):";}

 
 
 
 
 }  

 ?> 