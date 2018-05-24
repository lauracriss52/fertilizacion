<?php  
 if(isset($_POST["fertil_id"]))  
 {  
      $output = '';  
      include('../../db/dbconnect.php');                                  
     $query = "SELECT * FROM fertilizantes WHERE id_fertilizante = '".$_POST["fertil_id"]."'";  
      $result = mysqli_query($conexion, $query);  
     
      $output .= '  
      
           <div style="width:90%" class="container">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '    
                <form id="submit_form"> 
        <div class="col s4">
        <input type="hidden" name="id_ferti" id="id_ferti" value="'.$row["id_fertilizante"].'">  
        <label><b>Nombre Fertilizante</b></label>
        <input type="text" name="Nombre_fertilizante" id="Nombre_fertilizante" value="'.$row["Nombre_fertilizante"].'">  
        <label><b>Tipo F</b></label>
        <input type="text" name="Tipo_fertilizante" id="Tipo_fertilizante" value="'.$row["Tipo_fertilizante"].'">
        <label><b>Estado F</b></label>
        <input type="text" name="Estado_fertilizante" id="Estado_fertilizante" value="'.$row["Estado_fertilizante"].'"> <label><b>Fabricante F</b></label>
        <input type="text" name="Fabricante_fertilizante" id="Fabricante_fertilizante" 
        value="'.$row["Fabricante_fertilizante"].'">
        <label><b>Descripción F</b></label>
        <input type="text" name="Descripcion_fertilizante" id="Descripcion_fertilizante" value="'.$row["Descripcion_fertilizante"].'">
        <div class="row">
        <div class="col s12 center">
                     <span id="error_ferti" class="red-text"></span>  
                <span id="exito_ferti" class="green-text"></span>
            </div>   
            <div class="col s12 center">
         <input type="button" name="actualiza_ferti" id="actualiza_ferti" class="btn" value="Actualizar" />        
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




         