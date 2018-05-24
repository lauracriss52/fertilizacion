<?php
//fetch.php
if(isset($_POST["selec_control"]))
{
include('../../db/dbconnect.php');                                  
 $output = '';
 if($_POST["selec_control"] == "Departamento")
 {
  $query = "SELECT Municipio FROM depar_munic_finca WHERE Departamento = '".$_POST["query"]."' GROUP BY Municipio";
  $result = mysqli_query($conexion, $query);
  $output .= '<option value="">Seleccione Municipio</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["Municipio"].'">'.$row[ "Municipio"].'</option>';
  }
 }
 if($_POST["selec_control"] == "Municipio")
 {
  $query = "SELECT Finca_nombre FROM depar_munic_finca WHERE Municipio = '".$_POST["query"]."'";
  $result = mysqli_query($conexion, $query);
  $output .= '<option value="">Seleccione Finca</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["Finca_nombre"].'">'.$row["Finca_nombre"].'</option>';
  }
 }
 echo $output;
}
?>