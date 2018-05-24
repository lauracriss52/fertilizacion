        <?php  
            include('../../db/dbconnect.php');                 
            //FUNCION PARA OBTENER EN DEPARATMENTO>MUNICIPIO>FINCA EN LOS SELECTS
            $Departamento = '';
            $query = "SELECT Departamento FROM depar_munic_finca GROUP BY Departamento ORDER BY Departamento ASC";
            $result = mysqli_query($conexion, $query);
            while($row = mysqli_fetch_array($result))
            {
             $Departamento .= '<option value="'.$row["Departamento"].'">'.$row["Departamento"].'</option>';
            }
            
            //FUNCION PARA OBTTENER LOS DATOS DE UN CULTIVO EN EL SELECT
                 function obtener_cultivos($conexion) {  
                  $output = '';  
                  $sql = "SELECT * FROM cultivos ORDER BY id_cultivo DESC";  
                  $result = mysqli_query($conexion, $sql);  
                  while($row = mysqli_fetch_array($result))  
                  {  
                       $output .= '<option value="'.$row["id_cultivo"].'">'.$row["Nombre_cultivo"].'</option>';  
                  }  
                  return $output;  
             }  
             function obtener_carac_cultivo($conexion)  
             {  

             }

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
 
              <title>Análisis de suelos</title>
              <!--Let browser know website is optimized for mobile-->
              <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            </head>
         <body>
            <header>
                    <div class="navbar-fixed">
                         <nav class="light-green" role="navigation">
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
          </nav>
        </header>
             <nav>
        <div class="nav-wrapper light-green darken-3">
          <div class="col s12" style="padding-left:10px;">
            <a href="../../index.php" class="breadcrumb">Index</a>
            <a href="#!" class="breadcrumb">Estudios de campo</a>
            <a href="#!" class="breadcrumb">Análisis de suelo</a>
          </div>
        </div>
      </nav>
          <div class="section white">
            <div class="row container " style="width:80%">
              <h4 class="header">Análisis de suelo</h4>
              <p class="grey-text text-darken-3 lighten-3">En esta sección se puede añadir una análisis de suelo teniendo en cuenta las variables más significativas</p>
            </div>
          </div>
            <div class="container" style="width:"><!--CONTAINER DE LA CABECERA [INICIO]-->
             <div class="row"><!--FILA GENERAL [INICIO]-->
        <form class="col s12">
          <div class="row">
            <div class="input-field col s4">
              <i class="material-icons prefix">info_outline</i>
              <input id="Nombre_programa" type="text" class="validate">
              <label for="Nombre_programa">Nombre del programa</label>
              </div>
              
              <div class="input-field col s4">
              <i class="material-icons prefix">person</i>
              <input id="Propietario" type="text" class="validate">
              <label for="Propietario">Propietario</label>
            </div>
                
            <div class="input-field col s4">
              <i class="material-icons prefix">directions_walk</i>
              <input id="Asistente_tecnico" type="text" class="validate">
              <label for="Asistente_tecnico">Asistente técnico</label>
            </div>
          </div>   
        
            <div class="row">
              <div class="input-field col s6">
              <input type="text" id="Fecha_muestreo" name="Fecha_muestreo" class="datepicker">
              <label for="Fecha_muestreo">Fecha muestreo</label>
            </div> 
            <div class="input-field col s6">
                <input type="text" id="Fecha_recepcion" name="Fecha_recepcion" class="datepicker">
              <label for="Fecha_recepcion">Fecha Recepción</label>
            </div>
              </div>        
            <div class="row">
                <div class="col s4">
                <label style="font-size:14px"><b></b>Selecciona un cultivo</label>
                <select class="browser-default" name="nombre_cultivo" id="nombre_cultivo">
                    <option disabled selected>Elige un cultivo</option>
                    <?php echo obtener_cultivos($conexion); ?>
                 </select>
                </div>
                    <div class="" id="show_product">  
                      <?php echo obtener_carac_cultivo($conexion);?>  
                    </div>
            </div>        
               
            <div class="row">
             <div class="input-field col s4">
                    <label class="active" for="Departamento">Departamento</label>
                 <select name="Departamento" id="Departamento" class="activate selec_control">
                    <option value="" disabled selected>Elige un departamento</option>
                       <?php echo $Departamento; ?>
                  </select> 
              </div>       
                   <div class="col s4">
                    <label>Municipio</label>
                <select name="Municipio" id="Municipio" class="browser-default form-control  selec_control">
                    <option value="" disabled selected>Elige un municipio</option>
                  </select> 
              </div>            
            <div class="col s4">
                    <label>Finca</label>
                    <select name="Finca" id="Finca" class=" browser-default validate">
                    <option value="" disabled selected>Elige una finca</option>
                  </select><br>
                    <a class="waves-effect waves-light green-text">
                    <i class="material-icons right">room</i>¿No se encuentra tu finca?</a>  
              </div> 
                 </div>       
            <div class="row">
                <div class="input-field col s6">
                <input type="text" id="Descripcion_finca" name="Descripcion_finca" class="validate">
                <label for="Descripcion_finca">Descripcion de la finca</label>
                </div>   
                </div>
                    <div class="row">
         <input type="button" name="g_cabecera" id="g_cabecera" class="waves-light btn black-text grey lighten-4 right" value="Guardar y Continuar"/>
            <br>
            <span class="green-text" id="msg_exito_ana"></span><!--CONTROLADOR DE RESPUESTAS [EXITO]-->
            <span class="red-text" id="msg_error_ana"></span> <!--CONTROLADOR DE RESPUESTAS  [ERROR]-->
              </form><!-- Aquí termina el primer formulario de la cabecera-->
                </div>
                </div><!--FILA GENERAL [FIN]-->
             </div><!--CONTAINER DE LA CABECERA [FIN]-->
                <!--LA RECOLECCIÓN DE DATOS DEL ANÁLISIS DE SUELO [INICIO]{ -->
             <div class="container">
          <div class="card-panel white">      

        <div class="row">
             <div class="chip">
                Elige la textura del suelo
              </div>
            <div class="divider"></div> 
                     <div class="input-field">
                    <select class="">
                    <option>Arenoso</option> 
                    <option>Arenoso franco</option> 
                    <option>Franco arenoso</option> 
                    <option>Franco</option> 
                    <option>Franco limoso</option> 
                    <option>Franco arcilloso arenoso</option> 
                    <option>Franco arcilloso</option> 
                    <option>Franco arcillo limoso</option> 
                    <option>Limoso</option> 
                    <option>Arcillo arenoso</option> 
                    <option>Arcillo limoso</option> 
                    <option>Arcilloso</option>     
                    </select>
                    </div>
                <br>
              <div class="chip">
                Agrega los nutrientes a tu análisis de suelo
              </div>
      
                 <div class="divider"></div> 
            <br>
        
               <table class="responsive-table bordered">
                                    <thead>
                                        <tr>
                                            <th data-field="id">Nombre</th>
                                            <th data-field="number">Valor</th>
                                            <th data-field="Interpretación">Interpretación</th>
                                            <th data-field="date">Nombre</th>
                                            <th data-field="progress">Valor</th>
                                            <th data-field="total">Interpretación</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>PH</td>
                                        <td><input type="text" id="ph" name="ph"></td>
                                            <td><span id="inter_ph"></span></td>
                                            <td>C.E</td>
                                           <td ><input type="text" id="ce" name="ce"></td>
                                            <td><span id="inter_ce"></span></td>
                                             
                                  

                                         </tr>
                                        <tr>
                                            <td>C.I.C.E</td>
                                    <td><input type="text" id="sd" name="sd"></td>
                                            <td><span id="sd">23</span></td>
                                            <td>C.O</td>
                                        <td><input type="text" id="sd" name="sd"></td>
                                            <td><span>60</span></td>
                                  
                                         </tr>          
                                        
                                        <tr>
                                            <td>Salinidad</td>
                                    <td><input type="text" id="sd" name="sd"></td>
                                            <td><span id="sd">27</span></td>
            
                                         </tr>
                    
                                    </tbody>
                           </table> 
        </div>
      
                   </div>
                    <!-- ANALISIS DE SUELO }-->
                 </div>
             </div>
             
               <div class="container" style="width:"><!-- CONTENEDOR DEL ANÁLISIS DE SUELO-->
                <div class="card-panel white">      
         
         
        <div class="row">
            <br>
              <div class="chip">
                Agrega los nutrientes a tu análisis de suelo
              </div>
      
                 <div class="divider"></div> 
            <br>
                <div class="col s6">
                <label>Resultado de analisis</label>
                  <select class="browser-default">
                    <option value=""selected>ppm</option>
                    <option value=""selected>ppm</option>
                    <option value=""selected>ppm</option>
                  </select>
                    </div>
               <table class="responsive-table bordered">
                                    <thead>
                                        <tr>
                                            <th data-field="id">Elementos</th>
                                            <th data-field="number">Valor</th>
                                            <th data-field="Interpretación">Interpretación</th>
                                            <th data-field="date">Nivel %</th>
                               
                                            <th data-field="total">Recomendado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><select class="browser-default" name="co_o_mo" id="co_o_mo">
                                                <label for=""><b>M.O</b></label>
                                                <option value="mo">M.O</option>
                                                <option value="co">C.O</option>
                                             </select>
                                            <select class="browser-default" name="tipo_clima" id="tipo_clima">
                                                <label><b>Clima</b></label>
                                                <option value="clma_frio">Frio</option>
                                                <option value="clma_medio">Medio</option>
                                                <option value="clma_calido">Calido</option>
                                            </select>


                                            </td>
                                    <td><input type="text" id="nitro" name="nitro"></td>
                                            <td><span id="inter_nitrogeno"></span></td>
                                            <td>25 %</td>
                                         
                                            <td>60 - 70</td>
                                  

                                         </tr>
                                        <tr>
                                            <td><b>P</b> &#40;Bray II - ppm&#41;</td>
                                    <td><input type="text" id="fosforo" name="fosforo"></td>
                                            <td><span id="inter_fosforo"></span></td>
                                            <td>65 %</td>
                                       
                                            <td>60 - 70</td>
                                  

                                         </tr>  
                                        <tr>
                                            <td><b>Ca</b> &#40;cmol kg&#41;</td>
                                    <td><input type="text" id="calcio" name="calcio"></td>
                                            <td><span id="inter_calcio"></span></td>
                                            <td>65 %</td>
                                       
                                            <td>60 - 70</td>
                                  

                                         </tr>        
                                        
                                        <tr>
                                            <td><b>Mg</b> &#40;cmol kg&#41;</td>
                                    <td><input type="text" id="magnecio" name="magnecio"></td>
                                            <td><span id="inter_magnecio"></span></td>
                                            <td>95 %</td>
                                       
                                            <td>60 - 70</td>
                                  

                                         </tr>       
                                        
                                        <tr>
                                            <td><b>K</b> &#40;cmol kg&#41;</td>
                                    <td><input type="text" id="potasio" name="potasio"></td>
                                            <td><span id="inter_potasio"></span></td>
                                            <td>85 %</td>
                                       
                                            <td>30 - 70</td>
                                  

                                         </tr>          
                                        
                                        <tr>
                                            <td><b>Na</b> &#40;cmol kg&#41;</td>
                                    <td><input type="text" id="sodio" name="sodio"></td>
                                            <td><span id="inter_sodio"></span></td>
                                            <td>69 %</td>
                                       
                                            <td>20 - 45</td>
                                  

                                         </tr>      
                                        
                                        <tr>
                                            <td><b>S</b> &#40;ppm&#41;</td>
                                    <td><input type="text" id="azufre" name="azufre"></td>
                                            <td><span id="inter_azufre"></span></td>
                                            <td>69 %</td>
                                       
                                            <td>20 - 45</td>
                                      </tr>              
                                        <tr>
                                            <td><b>Mn</b> &#40;ppm&#41;</td>
                                    <td><input type="text" id="manganeso" name="manganeso"></td>
                                            <td><span id="inter_manganeso"></span></td>
                                            <td>69 %</td>
                                       
                                            <td>20 - 45</td>
                                         </tr>        
                                        
                                        <tr>
                                            <td><b>Cu</b> &#40;ppm&#41;</td>
                                    <td><input type="text" id="cobre" name="cobre"></td>
                                            <td><span id="inter_cobre"></span></td>
                                            <td>69 %</td>
                                       
                                            <td>20 - 45</td>
                                         </tr>               
                                        
                                        <tr>
                                            <td><b>Zn</b> &#40;ppm&#41;</td>
                                    <td><input type="text" id="zinc" name="zinc"></td>
                                            <td><span id="inter_zinc"></span></td>
                                            <td>69 %</td>
                                       
                                            <td>20 - 45</td>
                                         </tr>             
                                        
                                        <tr>
                                            <td><b>Fe</b> &#40;ppm&#41;</td>
                                    <td><input type="text" id="hierro" name="hierro"></td>
                                            <td><span id="inter_hierro"></span></td>
                                            <td>69 %</td>
                                       
                                            <td>20 - 45</td>
                                         </tr>
                    
                                    </tbody>
                           </table> 
        </div>
      
                   </div><!-- TARJETA PANEL-->
                </div><!--FIN DEL CONTENEDOR DE ANÁLISIS DE SUELOS-->
    
                 
                <!-- RECOLECIÓN DE DATOS DEL ANÁLISIS DE SUELO [FIN]}-->
            </body>
              <!--Importar jQuery antes de materialize.js-->
            <script type="text/javascript" src="../../js/Jquery.min_3.1.js"></script><!--Jquery nunca puede faltar-->
            <script type="text/javascript" src="../../js/materialize/materialize.min.js"></script>
            <script type="text/javascript" src="../../js/materialize/materialize.js"></script>
             <!-- El modelo de análisis de suelo-->    
            <script src="../../model/m.analisis_suelo/m.analisis_suelo.js"></script> 
            <!-- Modelo para  el análisis de suelo-->
            <script src="../../model/m.analisis_suelo/m.analisis_suelo.js"></script> 
            <!--Controladores de los [input] fecha y hora de materialize-->
            <script src="../../js/fecha_hora_activador.js"></script>  
            <!-- Estos son los controladores de los elementos [Javascript] de materialize-->
            <script src="../../js/activadores.materialize.js"></script>  
            <script>
                 //ESTE CÓDIGO AGREGA LA CABECERA DEL ANALISIS DE SUELO => "INICIO"
                 $(document).ready(function(){  
                $('#g_cabecera').click(function(){  
               var Nombre_programa = $('#Nombre_programa').val();  
               var Propietario = $('#Propietario').val();  
               var Asistente_tecnico = $('#Asistente_tecnico').val();  
               var Fecha_muestreo = $('#Fecha_muestreo').val();  
               var Fecha_recepcion = $('#Fecha_recepcion').val();  
               var id_cultivo = $('#id_cultivo').val();  
                //--------------------//
               var Departamento = $('#Departamento').val();  
               var Municipio = $('#Municipio').val();  
               var Finca = $('#Finca').val();  
                    
               if(Nombre_programa == '' || Propietario == ''|| Asistente_tecnico == ''|| Fecha_muestreo == ''
                ||Fecha_recepcion == ''||Departamento == ''||Municipio == ''||Finca == '')  
               {  
                    $('#msg_error_ana').html("Todos los campos son obligatorios");  
               }  
               else  
               {  
                   $('#msg_error_ana').html('');  
                    $.ajax({  
                         url:"../../control/analisis_suelo/insertar_ana_suelo.php",  
                         method:"POST",  
                         data:{Nombre_programa:Nombre_programa,Propietario:Propietario,Asistente_tecnico:Asistente_tecnico,Fecha_muestreo:Fecha_muestreo,Fecha_recepcion:Fecha_recepcion,id_cultivo:id_cultivo,
                         Departamento:Departamento,Municipio:Municipio,Finca:Finca      
                         },  
                         success:function(data){  
                              //$("form").trigger("reset");  
                              $('#msg_exito_ana').fadeIn().html(data);  
                              setTimeout(function(){  
                                   $('#msg_exito_ana').fadeOut("Slow");  
                              }, 8000);  
                         }  
                    });  
               }  
          });
                  }); 
           //ESTE CÓDIGO AGREGA LA CABECERA DEL ANALISIS DE SUELO => ¡FIN!
                

                </script>    
        <script>
         
            
    //Código para Determinar la apreciación del PH{
    $( "#ph" ).keyup(function() {
    var val_ph = parseFloat($(this ).val());    
    this.value = (this.value + '').replace(/[^0-9.]/g, '');    
    if (val_ph<4.5)
    {
    $( "#inter_ph" ).text( "Extremadamente ácido" ).addClass('chip');
    
    }else if(val_ph>4.5 & val_ph<=5.0)
    {
   $( "#inter_ph" ).text( "Muy fuertemente ácido");
    }else if(val_ph>=5.1 & val_ph<=5.5)
    {
    $( "#inter_ph" ).text( "Fuertemente ácido" );
    }else if(val_ph>=5.6 & val_ph<=6.0){
    $( "#inter_ph" ).text( "Moderadamente ácido" );    
    }else if(val_ph>=6.1 & val_ph<=6.5)
    {
    $( "#inter_ph" ).text( "Ligeramente ácido" );         
    }else if(val_ph>=6.6 & val_ph<=7.3)
    {
    $( "#inter_ph" ).text( "Neutro" );                  
    }else if(val_ph>=7.4 & val_ph<=7.9)
    {
    $( "#inter_ph" ).text( "Alcalino calcareo" );                  
    }else if(val_ph>=7.9 & val_ph<=8.4)
    {
    $( "#inter_ph" ).text( "Moderadamente alcalino (Na)" );                  
    }else if(val_ph>=8.4 & val_ph<=9.0)
    {
    $( "#inter_ph" ).text( "Fuertemente alcalino (Na)" );                  
    }else if(val_ph>=9.0)
    {
    $( "#inter_ph" ).text( "Extremadamente alcalino" );                  
    }
      
            
    if( $(this).val() == '' ) {
   $( "#inter_ph" ).text( "Val" ).addClass('black-text');
    }
  })
  .keyup();  
    //Código para Determinar la apreciación del PH fin } 
    
    //Código para determinar la apreciación de C.E
        $( "#ce" ).keyup(function() {
    var val_ce = parseFloat($(this ).val());    
    this.value = (this.value + '').replace(/[^0-9.]/g, '');    
    if (val_ce<0.5)
    {
    $( "#inter_ce" ).text( "Muy bajo" ).addClass('chip');
    }
    else if(val_ce>0.5 & val_ce<=1)
    {
   $( "#inter_ce" ).text( "Bajo");
    }
    else if(val_ce>1 & val_ce<2)
    {
    $( "#inter_ce" ).text("Medio");
    }else if (val_ce>=2)
    {
    $( "#inter_ce" ).text("Alto");
    }
    if( $(this).val() == '' ) {
   $( "#inter_ce" ).text( "Val" ).addClass('black-text');
    }
  })
  .keyup();  
 
    //Este select determina la seleccion del clima para la M. {}       
   $('#tipo_clima').change(function(){
   selection = $(this).val();    
   switch(selection)
   { 
       case 'clma_frio':
           //En el caso de que sea clima frio haga lo siguiente{
     // Código que me permite trabajar con la materia orgánica{        
    $( "#nitro" ).keyup(function() {
    var value = parseFloat($(this ).val());    
    this.value = (this.value + '').replace(/[^0-9.]/g, '');    
    if (value<=2.9)
    {
    $( "#inter_nitrogeno" ).text( "Bajo" );

    }else if(value>=3.0 & value<=5.7)
    {
   $( "#inter_nitrogeno" ).text( "Medio");
    }else if(value>=5.0 & value<=7.0)
    {
   $( "#inter_nitrogeno" ).text( "Ideal");
    }else if(value>=7.0)
    {
   $( "#inter_nitrogeno" ).text( "Alto");
    }
    if( $(this).val() == '' ) {
   $( "#inter_nitrogeno" ).text( "Val" ).addClass('chip');
    }
  })
    // Código que me permite trabajar con la materia orgánica}
        
  .keyup();
           
            //}
 
           break; //
           
        case 'clma_medio':
            //Apreciación steniendo en cuenta el clima medio{
               $( "#nitro" ).keyup(function() {
            var value = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if (value<=1.7)
            {
            $( "#inter_nitrogeno" ).text( "Bajo" );

            }else if(value>=1.8 & value<=2.9)
            {
           $( "#inter_nitrogeno" ).text( "Medio");
            }else if(value>=3.0 & value<=4.0)
            {
           $( "#inter_nitrogeno" ).text( "Ideal");
            }else if(value>=4.0)
            {
           $( "#inter_nitrogeno" ).text( "Alto");
            }
            if( $(this).val() == '' ) {
           $( "#inter_nitrogeno" ).text( "Val" ).addClass('chip');
            }
          })
            //}

          .keyup();
           
           break;      
          case 'clma_calido':
          //Apreciación para el clima calido inicio
               $( "#nitro" ).keyup(function() {
            var value = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if (value<=1.1)
            {
            $( "#inter_nitrogeno" ).text( "Bajo" );

            }else if(value>=1.2 & value<=2.3)
            {
           $( "#inter_nitrogeno" ).text( "Medio");
            }else if(value>=2.4 & value<=2.5)
            {
           $( "#inter_nitrogeno" ).text( "Ideal");
            }else if(value>=2.5)
            {
           $( "#inter_nitrogeno" ).text( "Alto");
            }
            if( $(this).val() == '' ) {
           $( "#inter_nitrogeno" ).text( "Val" ).addClass('chip');
            }
          })
            // Apreciacion para el clima calido fin

           break;
           
       default:
          $( "#inter_nitrogeno" ).text( "Default" );

           break;
   }
});

         //Determinacion para los valores del P fosforo{
           $( "#fosforo" ).keyup(function() {
            var val_fosforo = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if (val_fosforo<10)
            {
            $( "#inter_fosforo" ).text( "Muy Bajo" ).addClass('chip');
            }
            else if(val_fosforo>=10 & val_fosforo<=20)
            {
           $( "#inter_fosforo" ).text( "Bajo" );
            }else if(val_fosforo>=20 & val_fosforo<=40)
            {
            $( "#inter_fosforo" ).text( "Medio" );
            }else if(val_fosforo>=40)
            {
            $( "#inter_fosforo" ).text( "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#inter_fosforo" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
            //}  
            
            //Determinacion para los valores del Ca calcio{
           $( "#calcio" ).keyup(function() {
            var val_calcio = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if (val_calcio<2)
            {
            $( "#inter_calcio" ).text( "Muy Bajo" ).addClass('chip');
            }
            else if(val_calcio>=2 & val_calcio<=3)
            {
           $( "#inter_calcio" ).text( "Bajo" );
            }else if(val_calcio>3 & val_calcio<=6)
            {
            $( "#inter_calcio" ).text( "Medio" );
            }else if(val_calcio>=6)
            {
            $( "#inter_calcio" ).text( "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#inter_calcio" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
            //}        
            
            //Determinacion para los valores del Mg Magnecio{
           $( "#magnecio" ).keyup(function() {
            var val_magnecio = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if (val_magnecio<0.5)
            {
            $( "#inter_magnecio" ).text( "Muy Bajo" ).addClass('chip');
            }
            else if(val_magnecio>=0.5 & val_magnecio<=1.2)
            {
           $( "#inter_magnecio" ).text( "Bajo" );
            }else if(val_magnecio>1.2 & val_magnecio<=1.8)
            {
            $( "#inter_magnecio" ).text( "Medio" );
            }else if(val_magnecio>=1.8)
            {
            $( "#inter_magnecio" ).text( "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#inter_magnecio" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
            //}     
            
            //Determinacion para los valores del Mg Potasio{
           $( "#potasio" ).keyup(function() {
            var val_potasio = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if (val_potasio<0.2)
            {
            $( "#inter_potasio" ).text( "Muy Bajo" ).addClass('chip');
            }
            else if(val_potasio>=0.2 & val_potasio<=0.4)
            {
           $( "#inter_potasio" ).text( "Bajo" );
            }else if(val_potasio>0.4 & val_potasio<=0.6)
            {
            $( "#inter_potasio" ).text( "Medio" );
            }else if(val_potasio>0.6 & val_potasio<=1)
            {
            $( "#inter_potasio" ).text( "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#inter_potasio" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
            //}           
           
            //Determinacion para los valores del Na Sodio{
           $( "#sodio" ).keyup(function() {
            var val_sodio = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if(val_sodio<0.1)
            {
           $( "#inter_sodio" ).text( "Bajo" );
            }else if(val_sodio>=0.1 & val_sodio<=0.5)
            {
            $( "#inter_sodio" ).text( "Medio" );
            }else if(val_sodio>0.5)
            {
            $( "#inter_sodio" ).text( "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#inter_sodio" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
            //}            
            
        //Determinacion para los valores del S Azufre{
           $( "#azufre" ).keyup(function() {
            var val_azufre = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if(val_azufre<8)
            {
           $( "#inter_azufre" ).text( "Bajo" );
            }else if(val_azufre>=8 & val_azufre<=16)
            {
            $( "#inter_azufre" ).text( "Medio" );
            }else if(val_azufre>16)
            {
            $( "#inter_azufre" ).text( "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#inter_azufre" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
            //}
            
            //Determinacion para los valores del B Boro{
           $( "#boro" ).keyup(function() {
            var val_boro = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if(val_boro<0.3)
            {
           $( "#inter_boro").text( "Bajo" );
            }else if(val_boro>=0.3 & val_boro<=0.6)
            {
            $( "#inter_boro").text( "Medio" );
            }else if(val_boro>0.6)
            {
            $( "#inter_boro").text( "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#inter_boro" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
            //}         
            
            //Determinacion para los valores del Mn manganeso{
           $( "#manganeso" ).keyup(function() {
            var val_manganeso = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if(val_manganeso<5)
            {
           $( "#inter_manganeso").text( "Bajo" );
            }else if(val_manganeso>=5 & val_manganeso<=10)
            {
            $( "#inter_manganeso").text( "Medio" );
            }else if(val_manganeso>10)
            {
            $( "#inter_manganeso").text( "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#inter_manganeso" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
            //}       
            
            //Determinacion para los valores del Cu Cobre{
           $( "#cobre" ).keyup(function() {
            var val_cobre = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if(val_cobre<2)
            {
           $( "#inter_cobre").text( "Bajo" );
            }else if(val_cobre>=2 & val_cobre<=4)
            {
            $( "#inter_cobre").text( "Medio" );
            }else if(val_cobre>4)
            {
            $( "#inter_cobre").text( "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#inter_cobre" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
            //}       
            
            //Determinacion para los valores del Zn Zinc{
           $( "#zinc" ).keyup(function() {
            var val_zinc = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if(val_zinc<3)
            {
           $( "#inter_zinc").text( "Bajo" );
            }else if(val_zinc>=3 & val_zinc<=6)
            {
            $( "#inter_zinc").text( "Medio" );
            }else if(val_zinc>6)
            {
            $( "#inter_zinc").text( "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#inter_zinc" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
            //}          
            
            //Determinacion para los valores del Fe Hierro{
           $( "#hierro" ).keyup(function() {
            var val_hierro = parseFloat($(this ).val());    
            this.value = (this.value + '').replace(/[^0-9.]/g, '');    
            if(val_hierro<50)
            {
           $( "#inter_hierro").text( "Bajo" );
            }else if(val_hierro>=50 & val_hierro<=100)
            {
            $( "#inter_hierro").text( "Medio" );
            }else if(val_hierro>100)
            {
            $( "#inter_hierro").text( "Alto" );
            }
            if( $(this).val() == '' ) {
           $( "#inter_hierro" ).text( "Val" ).addClass('black-text');
            }
          })
          .keyup();
            
            //}
                
        </script>
            </html>