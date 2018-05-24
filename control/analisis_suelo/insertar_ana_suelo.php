 <?php  
 //insert.php  
include('../../db/dbconnect.php');
if(isset($_POST["Nombre_programa"]))  
 {  
      $Nombre_programa = mysqli_real_escape_string($conexion, $_POST["Nombre_programa"]);  
      $Propietario = mysqli_real_escape_string($conexion, $_POST["Propietario"]);  
      $Asistente_tecnico = mysqli_real_escape_string($conexion, $_POST["Asistente_tecnico"]);  
      $Fecha_muestreo = mysqli_real_escape_string($conexion, $_POST["Fecha_muestreo"]);  
      $Fecha_recepcion = mysqli_real_escape_string($conexion, $_POST["Fecha_recepcion"]);  
      $id_cultivo = mysqli_real_escape_string($conexion, $_POST["id_cultivo"]);  
      //--------------//
      $Departamento = mysqli_real_escape_string($conexion, $_POST["Departamento"]);  
      $Municipio = mysqli_real_escape_string($conexion, $_POST["Municipio"]);  
      $Finca = mysqli_real_escape_string($conexion, $_POST["Finca"]);  
      $sql = "INSERT INTO cabecera(Nombre_programa,Propietario,Asistente_tecnico,Fecha_muestreo,Fecha_recepcion,Cultivo,Departamento,Municipio,Finca) VALUES ('".$Nombre_programa."','".$Propietario."', '".$Asistente_tecnico."', '".$Fecha_muestreo."'
      ,'".$Fecha_recepcion."','".$id_cultivo."','".$Departamento."','".$Municipio."','".$Finca."')";  
      if(mysqli_query($conexion, $sql))  
      {  
           echo "Operación realizada con éxito";  
      }  
 }  
 ?>