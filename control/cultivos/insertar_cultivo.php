 <?php  
 //insert.php  
include('../../db/dbconnect.php');
if(isset($_POST["Nombre_cultiv"]))  
 {  
      $Nombre_cultiv = mysqli_real_escape_string($conexion, $_POST["Nombre_cultiv"]);  
      $Variedad_cultiv = mysqli_real_escape_string($conexion, $_POST["Variedad_cultiv"]);  
      $Superficie_cultiv = mysqli_real_escape_string($conexion, $_POST["Superficie_cultiv"]);  
      $Metodo_cultiv = mysqli_real_escape_string($conexion, $_POST["Metodo_cultiv"]);  
      $Descripcion_cultiv = mysqli_real_escape_string($conexion, $_POST["Descripcion_cultiv"]);  
      $sql = "INSERT INTO cultivos(Nombre_cultivo,Variedad_cultivo,Superficie_cultivo,Metodo_cultivo,Descripcion_cultivo) VALUES ('".$Nombre_cultiv."','".$Variedad_cultiv."', '".$Superficie_cultiv."', '".$Metodo_cultiv."', '".$Descripcion_cultiv."')";  
      if(mysqli_query($conexion, $sql))  
      {  
           echo "Cultivo Creado";  
      }  
 }  
 ?>