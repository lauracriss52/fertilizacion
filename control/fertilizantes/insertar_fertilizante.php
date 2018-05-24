 <?php  
 //insert.php  
include('../../db/dbconnect.php');
if(isset($_POST["Nombre_ferti"]))  
 {  
      $Nombre_ferti = mysqli_real_escape_string($conexion, $_POST["Nombre_ferti"]);  
      $Tipo_ferti = mysqli_real_escape_string($conexion, $_POST["Tipo_ferti"]);  
      $Estado_ferti = mysqli_real_escape_string($conexion, $_POST["Estado_ferti"]);  
      $Fabricante_ferti = mysqli_real_escape_string($conexion, $_POST["Fabricante_ferti"]);  
      $Descripcion_ferti = mysqli_real_escape_string($conexion, $_POST["Descripcion_ferti"]);  
      $sql = "INSERT INTO fertilizantes(Nombre_fertilizante,Tipo_fertilizante,Estado_fertilizante,Fabricante_fertilizante,Descripcion_fertilizante) VALUES ('".$Nombre_ferti."','".$Tipo_ferti."', '".$Estado_ferti."', '".$Fabricante_ferti."', '".$Descripcion_ferti."')";  
      if(mysqli_query($conexion, $sql))  
      {  
           echo "Fertilizante Creado";  
      }  
 } 
 
 ?>