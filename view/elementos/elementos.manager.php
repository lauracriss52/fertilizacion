        <?php  
     include('../../db/dbconnect.php');                 
        ?>
        <!DOCTYPE html> 
    <html lang="es">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <!--Import Google Icon Font-->
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
           <link rel="icon" href="" sizes="16x16"> 
          <!--Import materialize.css-->
          <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
          <link type="text/css" rel="stylesheet" href="../../css/materialize.css"  media="screen,projection"/>
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
          <title>Administración y control de tareas</title>
          <!--Let browser know website is optimized for mobile-->
          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        </head>
    <style type="text/css">
    .side-nav{
        top: 64px;
    }
         @media only screen and (max-width : 992px) {
          header, main, footer {
            padding-left: 0;
          }
        }      
        .side-nav{
        width: 280px;    
        }
    </style>
     <body>
         <header>
                <div class="navbar-fixed">
                     <nav class="amber darken-1" role="navigation">
                    <div style="width:90%" class="container">
                <div class="nav-wrapper"> 
            <a href="#!" class="brand-logo"><h5>FER<span class="red-text">TIL</span></h5></a>
                  <ul class="right hide-on-med-and-down">
                    <li ><a id="mbar"href="" class="white-text"><i class="material-icons left ">screen_share</i>Bacj</a></li>
                    <li ><a id="mbar"href="" target="_blank" class="white-text"><i class="material-icons left ">settings_system_daydream</i>Link</a></li>
                    <li ><a id="mbar"href="" target="_blank" class="white-text"><i class="material-icons left ">supervisor_account</i>Link</a></li>
                       <li>
                       <a class='dropdown-button ' data-beloworigin="true" href='#' data-activates='drop_user'>
                    <div class="chip">
                    <img src="../../img/header/user.png" alt="Contact Person">
                     Usuario
                      </div>
                       </a>    
                       </li>
                  </ul>
                <!!-- este es el menu-->
                 </div> 
              <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
                </div>
                </div> 
        <!--AQUI ESTA EL MENU DE LA IZQUIERDA -->    
         <ul id="slide-out" class="side-nav fixed">
        <li><div class="userView">
          <div class="background">
            <img src="../../img/header/sennova.png">
          </div>
          <a href="#!user"><img class="circle" src="../../img/header/senalog.png"></a>
        </div></li>
      <li><a href="javascript:window.history.back();"><i class="material-icons left">arrow_back</i>Regresar</a></li>
        <li><div class="divider"></div></li>
        <li><a class="subheader">Indice</a></li>
        <li><a class="waves-effect" href="" target="_blank">Link</a></li>
        <li><a class="waves-effect" href="" target="_blank">Link</a></li>
        <li><a class="waves-effect" href="" target="_blank">Link</a></li>
        <li><a class="subheader">Aplicaciones</a></li>
        <li><a class="waves-effect" target="_blank" href="../../view/tareas_admin/task_admin.php">Tareas</a></li>
      </ul>    
      </nav>
    </header>
        <!-- Navbar goes here -->
        <!-- Page Layout here -->
        <div class="row">
          <div class="col s12 m4 l3"> <!-- Note that "m4 l3" was added -->
          </div>
          <div class="col s12 m8 l9"> <!-- Note that "m8 l9" was added -->
     <h4 class="center title">Panel de control de Elementos</h4>     
    <a href="#agregando_elementos" class="btn-floating btn-large waves-effect waves-light red modal-trigger"><i class="material-icons">add</i></a>
              <div class="divider"></div>
    <table id="example" class="display highlight striped responsive-table" cellspacing="0" width="100%">
            <thead>
                <tr>
                <th>ID</th>    
                <th>Nombre</th>    
                <th>Descripcion</th>    
                <th>Categoría</th>    
                <th>Control</th>  
                </tr>
            </thead>
            <tfoot>
                <tr>
                 <th>ID</th>    
                <th>Nombre</th>    
                <th>Descripcion</th>       
                <th>Categoría</th>
                <th>Control</th>      
                </tr>
            </tfoot>
            <tbody>
                <?php
    //fetch.php
        $query = "SELECT * FROM elementos ORDER BY RAND()";
        $result = mysqli_query($conexion, $query);
        if(mysqli_num_rows($result) > 0)
        {
         while($row = mysqli_fetch_array($result))
         {
          echo'
             <tr>
            <td class="">'.$row["id_elemento"].'</td>    
            <td class="">'.$row["Nombre_elemento"].'</td>    
            <td class="">'.$row["Descripcion_elemento"].'</td>    
            <td class="">'.$row["Categoria_elemento"].'</td>      
                          <td>
                        <a href="#" data-position="left" data-delay="50" data-tooltip="Editar datos de: '.$row["Nombre_elemento"].'"name="" value="" id="'.$row["id_elemento"].'" class="tooltipped waves-effect waves-light black-text select_edit_elemento"><i class="material-icons black-text right">mode_edit</i></a>  
                        </td>  
            </tr>
          ';
         }
        }
        ?>
            </tbody>
        </table>
            </div>  
          </div>
        </div>
              <!-- MODAL PARA AGREGAR NUEVAS FINCAS ¡INICIO!-->
      <div id="agregando_elementos" class="modal">
        <div class="modal-content">
           <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat right red-text">X</a>
            <h4 class="center">Agregar un Elemento</h4>
      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <input id="Nombre_element" type="text" class="validate">
              <label for="Nombre_element">Nombre E</label>
            </div>
            <div class="input-field col s6">
              <input id="Descripcion_element" type="text" class="validate">
              <label for="Descripcion_element">Descripcion E</label>
            </div>
          </div>
          <div class="row">
           <div class="col s12">
            <select class="browser-default" id="Categoria_element" name="Categoria_element">
              <option value="" disabled selected>Elige una categoría</option>
              <option value="Mayor">Mayor</option>
              <option value="Secundario">Secundario</option>
              <option value="Menor">Menor</option>
            </select>
            <label>Categoría</label>
          </div>
          </div>  
        </form>
      </div>
       <span class="green-text" id="msg_exito_element"></span>
       <span class="red-text" id="msg_error_elemento"></span>
        </div>
        <div class="modal-footer">
         <button id="btn_agregar_element" class="btn waves-effect waves-light" type="button" name="action">Guardar
        <i class="material-icons right">send</i></button>
        </div>
      </div>
        <!-- MODAL PARA AGREGAR NUEVAS FINCAS  ¡FIN!-->
             <!--Modal que carga los datos para actualizarlos-->
            <div class="modal" id="mostrar_elemento" style="width:90%">  
          <div class="modal-dialog">  
               <div class="modal-content">  
                    <div class="modal-header">  
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat right red-text">X</a>
                         <h5 class="modal-title">Actualizanado Fertilizante</h5>  
                    </div>  
                    <div class="modal-body" id="elemento_detalle">  
                    </div> 
                 <div class="row col s2">    
                 </div>
               </div>  
          </div>  
     </div>        
                            <!-- Dropdown Structure -->
      <ul id='drop_user' class='dropdown-content'>
      </ul>
                    </body>
          <!--Import jQuery before materialize.js-->
          <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
          <script type="text/javascript" src="../../js/materialize/materialize.min.js"></script>
          <script type="text/javascript" src="../../js/materialize/materialize.js"></script>
        <!-- IMPORTAR LOS JS DE LAS DATAABLES-->
          <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
           <script src="../../js/datables.control.js"></script>
              <script>
          $(document).ready(function() {
            $('select').material_select();
            $('.modal').modal();
            $('.tooltipped').tooltip({delay: 50});
                         $('.timepicker').pickatime({
                default: 'now', // Set default time: 'now', '1:30AM', '16:30'
                fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
                twelvehour: true, // Use AM/PM or 24-hour format
                donetext: 'OK', // text for done-button
                cleartext: 'Limpiar', // text for clear-button
                canceltext: 'Cancelar', // Text for cancel-button
                autoclose: false, // automatic close timepicker
                ampmclickable: true, // make AM PM clickable
                aftershow: function(){} //Function for after opening timepicker
              });
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
          });
            </script>    
          <script>
         //ESTE CÓDIGO ARREGA UN NUEVO ELEMENTO ¡INICIO!
                 $(document).ready(function(){  
                $('#btn_agregar_element').click(function(){  
               var Nombre_element = $('#Nombre_element').val();  
               var Descripcion_element = $('#Descripcion_element').val();  
               var Categoria_element = $('#Categoria_element').val();    
               if(Nombre_element == '' || Descripcion_element == ''|| Categoria_element == '')  
               {  
                    $('#msg_error_element').html("Todos los campos son obligatorios");  
               }  
               else  
               {  
                    $('#msg_error_element').html('');  
                    $.ajax({  
                         url:"../../control/elementos/insertar_elemento.php",  
                         method:"POST",  
                         data:{Nombre_element:Nombre_element,Descripcion_element:Descripcion_element,Categoria_element:Categoria_element},  
                         success:function(data){  
                              $("form").trigger("reset");  
                              $('#msg_exito_element').fadeIn().html(data);  
                              setTimeout(function(){  
                                   $('#msg_exito_element').fadeOut("Slow");  
                              }, 8000);  
                         }  
                    });  
               }  
          });  
     }); 
           //ESTE CÓDIGO ARREGA UN NUEVO ELEMENTO => ¡FIN!
            //ESTE CODIGO CARGA LOS ELEMENTOS EN EL MODAL ¡INICIO!
     $(document).ready(function(){  
          $(document).on('click', '.select_edit_elemento', function(){  
               var element_id = $(this).attr("id");  
               if(element_id != '')  
               {  
                    $.ajax({  
                         url:"../../control/elementos/select_edit_elemento.php",  
                         method:"POST",  
                         data:{element_id:element_id},  
                         success:function(data){  
                              $('#elemento_detalle').html(data);  
                              $('#mostrar_elemento').modal('open');  
                         }  
                    });  
               }            
          });  
     });  
    //ESTE CODIGO CARGA LOS ELEMENTOS EN EL MODAL ¡FIN!
           //Este códgio EDITA lOS ELEMENTOS ¡INICIO!        
     $(document).ready(function(){  
        $(document).on('click', '#actualiza_element', function(){
               var id_elemento = $('#id_elemento').val();  
               var Nombre_elemento = $('#Nombre_elemento').val();  
               var Descripcion_elemento = $('#Descripcion_elemento').val();  
               var Categoria_elemento = $('#Categoria_elemento').val();    
               if(Nombre_elemento =='' || Descripcion_elemento == '' || Categoria_elemento == '')  
               {  
                    $('#msg_error_elemento').html("No puedes dejar ningún campo vacío");  
               }  
               else  
               {  
                    $('#msg_error_elemento').html('');   
                    $.ajax({  
                         url:"../../control/elementos/editar_elemento.php",  
                         method:"POST",  
                         data:{id_elemento:id_elemento,Nombre_elemento:Nombre_elemento, Descripcion_elemento:Descripcion_elemento, Categoria_elemento:Categoria_elemento},  
                         success:function(data){   
                              $('#msg_exito_elemento').fadeIn().html(data);  
                              setTimeout(function(){  
                                   $('#msg_exito_elemento').fadeOut("Slow");  
                              },4000);  
                         }  
                    });  
               }
        }); 
     }); 
     //Este códgio EDITA LOS ELEMENTOS ¡FIN!      
     </script>
    </html>
