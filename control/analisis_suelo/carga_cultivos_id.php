 <?php  
 //load_data.php  
 include('../../db/dbconnect.php');                 
 $output = '';  
 if(isset($_POST["id_cultivo"]))  
 {  
      if($_POST["id_cultivo"] != '')  
      {  
           $sql = "SELECT * FROM cultivos WHERE id_cultivo = '".$_POST["id_cultivo"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM cultivos";  
      }  
      $result = mysqli_query($conexion, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<input type="hidden" name="id_cultivo" id="id_cultivo" value="'.$row["id_cultivo"].'">';  
           $output .= '
           <div class="input-field col s3">
            <input type="text" name="Variedad_cultivo" id="Variedad_cultivo" value="'.$row["Variedad_cultivo"].'" readonly>
            <label for="Nombre_cultivo" class="active">Variead</label>
            </div>';
            $output .= '
           <div class="input-field col s5">
            <input type="text" name="Descripcion_cultivo" id="Descripcion_cultivo" value="'.$row["Descripcion_cultivo"].'" readonly>
            <label for="Descripcion_cultivo" class="active">Descripcion Cultivo</label>
            </div>';
            
           
      }  
      echo $output;  
 }  
 ?>  