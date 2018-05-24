<?php  
 if(isset($_POST["finca_id"]))  
 {  
      $output = '';  
      include('../../db/dbconnect.php');                                  
     $query = "SELECT * FROM fincas WHERE id_finca = '".$_POST["finca_id"]."'";  
      $result = mysqli_query($conexion, $query);  
     
      $output .= '  
      
           <div style="width:90%" class="container">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '    
        <input type="hidden" name="id_finca" id="id_finca" value="'.$row["id_finca"].'"> 
              <div class="row">
        <div class="input-field col s6">
          <input id="Nombre_finca" name="Nombre_finca" type="text" value="'.$row["Nombre_finca"].'" class="validate">
          <label class="active" for="Nombre_finca">Nombre finca</label>
        </div>
        <div class="input-field col s6">
          <input id="Descripcion_finca" name="Descripcion_finca" type="text" value="'.$row["Descripcion_finca"].'"  class="validate">
          <label class="active" for="Descripcion_finca">Descripcion</label>
        </div>
      </div>
      
          <div class="row">
        <div class="browser-default col s6">
    <select id="Departamento_finca" name="Departamento_finca">
      <option value="'.$row["Departamento_finca"].'" selected>'.$row["Departamento_finca"].'</option>
      <option value="Santander">Santander</option>
      <option value="Boyacá">Boyacá</option>
      <option value="Antioquia">Antioquia</option>
    </select>
    <label>Departamento finca</label>
      </div>        
         <div class="input-field col s6">
        <input id="Municipio_finca" name="Municipio_finca" type="text" value="'.$row["Municipio_finca"].'" class="validate">
          <label class="active" for="Municipio_finca">Municipio finca</label>
        </div>
      </div>
           <div class="row">
        <div class="input-field col s4">
          <input id="Vereda_finca" name="Vereda_finca" type="text" value="'.$row["Vereda_finca"].'" class="validate">
          <label class="active" for="Vereda_finca">Vereda finca</label>
        </div>
        <div class="input-field col s4">
          <input id="Latitud_finca" name="Latitud_finca" type="number" value="'.$row["Latitud_finca"].'" class="validate">
          <label class="active" for="Latitud_finca">Latitud <span class="red-text">*</span></label>
        </div>     
         <div class="input-field col s4">
          <input id="Longitud_finca" name="Longitud_finca" type="number" value="'.$row["Longitud_finca"].'" class="validate">
          <label class="active" for="Longitud_finca">Longitud  <span class="red-text">*</span></label>
        </div>
      </div>         
        <div class="row">
        <div class="input-field col s4">
          <input id="Viaacc_finca" name="Viaacc_finca" type="text" value="'.$row["Viaacc_finca"].'" class="validate">
          <label class="active" for="Viaacc_finca">Vías de acceso finca</label>
        </div>
        <div class="input-field col s4">
          <input id="Intgamilia_finca" name="Intgamilia_finca" type="number" value="'.$row["Intgamilia_finca"].'" class="validate">
          <label class="active" for="Intgamilia_finca">Integrantes familia <span class="red-text">*</span></label>
        </div>     
         <div class="input-field col s4">
          <input id="Jovenes1518_finca" name="Jovenes1518_finca" type="number" value="'.$row["Jovenes1518"].'" class="validate">
          <label class="active" for="Jovenes1518_finca">Jovenes 15-18  <span class="red-text">*</span></label>
        </div>
      </div>
    </form>
 
        
        
        <div class="col s12 center">
                <span id="error_actua_finca" class="red-text"></span>  
                <span id="exito_actua_finca" class="green-text"></span>
            </div>   
            <div class="col s12 center">
         <input type="button" name="actualiza_finca" id="actualiza_finca" class="btn" value="Actualizar" />        
            </div>
    </div>
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




         