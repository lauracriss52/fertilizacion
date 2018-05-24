 <?php  
 //insert.php  
include('../../db/dbconnect.php');
if(isset($_POST["Nombre_element"]))  
 {  
      $Nombre_element = mysqli_real_escape_string($conexion, $_POST["Nombre_element"]);  
      $Descripcion_element = mysqli_real_escape_string($conexion, $_POST["Descripcion_element"]);  
      $Categoria_element = mysqli_real_escape_string($conexion, $_POST["Categoria_element"]);  
      $sql = "INSERT INTO elementos(Nombre_elemento,Descripcion_elemento,Categoria_elemento) VALUES ('".$Nombre_element."','".$Descripcion_element."', '".$Categoria_element."')";  
      if(mysqli_query($conexion, $sql))  
      {  
           echo "Elemento Creado";  
      }  
 }  
 ?>