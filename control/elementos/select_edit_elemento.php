<?php  
 if(isset($_POST["element_id"]))  
 {  
      $output = '';  
      include('../../db/dbconnect.php');                                  
     $query = "SELECT * FROM elementos WHERE id_elemento = '".$_POST["element_id"]."'";  
      $result = mysqli_query($conexion, $query);  
     
      $output .= '  
      
           <div style="width:90%" class="container">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '    
                <form id="submit_form"> 
        <div class="col s4">
        <input type="hidden" name="id_elemento" id="id_elemento" value="'.$row["id_elemento"].'">  
        <label><b>Nombre Elemento</b></label>
        <input type="text" name="Nombre_elemento" id="Nombre_elemento" value="'.$row["Nombre_elemento"].'">  
        <label><b>Descripción E</b></label>
        <input type="text" name="Descripcion_elemento" id="Descripcion_elemento" value="'.$row["Descripcion_elemento"].'">
        <div class="row">
       <div class="col s12">
        <select class="browser-default" id="Categoria_elemento" name="Categoria_elemento">
          <option value="'.$row["Categoria_elemento"].'" selected>'.$row["Categoria_elemento"].'</option>
          <option value="Mayor">Mayor</option>
          <option value="Secundario">Secundario</option>
          <option value="Menor">Menor</option>
        </select>
        <label>Categoría</label>
      </div>
      </div> 
      
        <div class="row">
        <div class="col s12 center">
                     <span id="msg_error_elemento" class="red-text"></span>  
                <span id="msg_exito_elemento" class="green-text"></span>
            </div>   
            <div class="col s12 center">
         <input type="button" name="actualiza_element" id="actualiza_element" class="btn" value="Actualizar" />        
            </div>
        </div>
         </form> 
           ';  
      }  
      $output .= '  
           </div>  
      ';  
      echo $output;  
     
 }  
 ?>
 

<script>
         $(document).ready(function() {
                $('.datepicker').pickadate({
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 15, // Creates a dropdown of 15 years to control year,
                // The title label to use for the month nav buttons
                labelMonthNext: 'Mes siguiente',
                labelMonthPrev: 'Mes anterior',

                // The title label to use for the dropdown selectors
                labelMonthSelect: 'Selecciona un mes',
                labelYearSelect: 'Selecciona un año',

                // Months and weekdays
                monthsFull: [ 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre' ],
                monthsShort: [ 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic' ],
                weekdaysFull: [ 'Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado' ],
                weekdaysShort: [ 'Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab' ],

                // Materialize modified
                weekdaysLetter: [ 'D', 'L', 'M', 'M', 'J', 'V', 'S' ],

                today: 'Hoy',
                clear: 'Limpiar',
                close: 'Ok',
                closeOnSelect: false // Close upon selecting a date,
              });
              });
      
            
              $(document).ready(function() {
                $('.datepicker').pickadate({
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 15, // Creates a dropdown of 15 years to control year,
                today: 'Hoy',
                clear: 'Limpiar',
                close: 'Ok',
                closeOnSelect: false // Close upon selecting a date,
              });
              });

  $(document).ready(function() {
    $('select').material_select();
  });

    
</script>    




         