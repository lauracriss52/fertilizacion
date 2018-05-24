<?php  
 if(isset($_POST["cultivo_id"]))  
 {  
      $output = '';  
      include('../../db/dbconnect.php');                                  
     $query = "SELECT * FROM cultivos WHERE id_cultivo = '".$_POST["cultivo_id"]."'";  
      $result = mysqli_query($conexion, $query);  
     
      $output .= '  
      
           <div style="width:90%" class="container">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '    
                <form id="submit_form"> 
        <div class="col s4">
    <input type="hidden" disabled  readonly="readonly" name="id_cultivo" id="id_cultivo" value="'.$row["id_cultivo"].'">
        <label><b>Nombre Cultivo</b></label>
        <input type="text" name="Nombre_cultivo" id="Nombre_cultivo" value="'.$row["Nombre_cultivo"].'">  
        <label><b>Vaierdad C</b></label>
        <input type="text" name="Variedad_cultivo" id="Variedad_cultivo" value="'.$row["Variedad_cultivo"].'">  
        <label><b>Superficie C</b></label>
        <input type="text" name="Superficie_cultivo" id="Superficie_cultivo" value="'.$row["Superficie_cultivo"].'">
        <label><b>Método C</b></label>
        <input type="text" name="Metodo_cultivo" id="Metodo_cultivo" value="'.$row["Metodo_cultivo"].'">
        <b>Descripcion_cultivo</b></label>
        <input type="text" name="Descripcion_cultivo" id="Descripcion_cultivo" value="'.$row["Descripcion_cultivo"].'">
 
        <div class="row">
        <div class="col s12 center">
                     <span id="msg_error_cultivo" class="red-text"></span>  
                <span id="msg_exito_cultivo" class="green-text"></span>
            </div>   
            <div class="col s12 center">
         <input type="button" name="actualiza_cultivo" id="actualiza_cultivo" class="btn" value="Actualizar" />        
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




         