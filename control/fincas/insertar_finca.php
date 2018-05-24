 <?php  
 //insert.php  
include('../../db/dbconnect.php');
if(isset($_POST["Nombre_finc"],$_POST["Departamento_finc"]))  
 {  
      $Nombre_finc = mysqli_real_escape_string($conexion, $_POST["Nombre_finc"]);  
      $Descripcion_finc = mysqli_real_escape_string($conexion, $_POST["Descripcion_finc"]);  
      $Departamento_finc = mysqli_real_escape_string($conexion, $_POST["Departamento_finc"]);  
      $Municipio_finc = mysqli_real_escape_string($conexion, $_POST["Municipio_finc"]);  
      $Vereda_finc = mysqli_real_escape_string($conexion, $_POST["Vereda_finc"]);  
      $Latitud_finc = mysqli_real_escape_string($conexion, $_POST["Latitud_finc"]);  
      $Longitud_finc = mysqli_real_escape_string($conexion, $_POST["Longitud_finc"]);  
      $Viaacc_finc = mysqli_real_escape_string($conexion, $_POST["Viaacc_finc"]);  
      $Intgamilia_finc = mysqli_real_escape_string($conexion, $_POST["Intgamilia_finc"]);  
      $Jovenes1518 = mysqli_real_escape_string($conexion, $_POST["Jovenes1518"]);  
      $sql = "INSERT INTO fincas(Nombre_finca,Descripcion_finca,Departamento_finca,Municipio_finca,Vereda_finca,Latitud_finca,Longitud_finca,
       Viaacc_finca,Intgamilia_finca,Jovenes1518) VALUES ('".$Nombre_finc."','".$Descripcion_finc."', '".$Departamento_finc."', '".$Municipio_finc."', '".$Vereda_finc."','".$Latitud_finc."','".$Longitud_finc."','".$Viaacc_finc."','".$Intgamilia_finc."','".$Jovenes1518."')";  
      if(mysqli_query($conexion, $sql))  
      {  
           echo "Finca Guardada";  
      }  
 }  
 ?>