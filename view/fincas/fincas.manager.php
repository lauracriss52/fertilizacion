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
        <img src="../../img/header/header.jpg">
      </div>
      <a href="#!user"><img class="circle" src="../../img/header/user.png"></a>
 
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
 <h4 class="center title">Panel de control de fincas</h4>     
<a href="#agregando_fincas" class="btn-floating btn-large waves-effect waves-light red modal-trigger"><i class="material-icons">add</i></a>
          <div class="divider"></div>
<table id="example" class="display highlight striped responsive-table" cellspacing="0" width="100%">
        <thead>
            <tr>
            <th>ID</th>    
            <th>Nombre</th>    
            <th>Descripcion</th>    
            <th>Departamento</th>    
            <th>Municipio</th>    
            <th>Control</th>  
            </tr>
        </thead>
        <tfoot>
            <tr>
             <th>ID</th>    
            <th>Nombre</th>    
            <th>Descripcion</th>       
            <th>Departamento</th>    
            <th>Municipio</th>    
            <th>Control</th>  
            </tr>
        </tfoot>
        <tbody>
            
            <?php
//fetch.php
 

    $query = "SELECT * FROM fincas ORDER BY RAND()";
    $result = mysqli_query($conexion, $query);
    if(mysqli_num_rows($result) > 0)
    {
     while($row = mysqli_fetch_array($result))
     {
      echo'
         <tr>
        <td class="">'.$row["id_finca"].'</td>    
        <td class="">'.$row["Nombre_finca"].'</td>    
        <td class="">'.$row["Descripcion_finca"].'</td>   
        <td class="">'.$row["Departamento_finca"].'</td>    
        <td class="">'.$row["Municipio_finca"].'</td>    
                      <td>
                    <a href="#" data-position="left" data-delay="50" data-tooltip="Editar datos de: '.$row["Nombre_finca"].'"name="" value="" id="'.$row["id_finca"].'" class="tooltipped waves-effect waves-light black-text select_edit_finca"><i class="material-icons black-text right">mode_edit</i></a>    
<a href="#" data-position="left" data-delay="50" data-tooltip="Eiminar: '.$row["Nombre_finca"].'"name="" value="" id="'.$row["id_finca"].'" class="tooltipped waves-effect waves-light black-text eliminar_finca"><i class="material-icons red-text right">delete</i></a>  


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
  <div id="agregando_fincas" class="modal" style="width:80%">
    <div class="modal-content">
       <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat right red-text">X</a>
        <h4 class="center">Crear nueva finca</h4>
  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="Nombre_finc" type="text" class="validate">
          <label for="Nombre_finc">Nombre finca <span class="red-text">*</span></label>
        </div>
        <div class="input-field col s6">
          <input id="Descripcion_finc" type="text" class="validate">
          <label for="Descripcion_finc">Descripcion <span class="red-text">*</span></label>
        </div>
      </div>
      <div class="row">
        <div class="browser-default col s6">
    <select id="Departamento_finc">
      <option value="" disabled selected>Elige un departamento</option>
      <option value="Santander">Santander</option>
      <option value="Boyacá">Boyacá</option>
      <option value="Antioquia">Antioquia</option>
    </select>
    <label>Departamento finca</label>
      </div>        
         <div class="input-field col s6">
          <input value="" id="Municipio_finc" type="text" class="validate">
          <label for="Municipio_finc">Municipio finca</label>
        </div>
      </div>
           <div class="row">
        <div class="input-field col s4">
          <input id="Vereda_finc" type="text" class="validate">
          <label for="Vereda_finc">Vereda finca</label>
        </div>
        <div class="input-field col s4">
          <input id="Latitud_finc" type="number" class="validate">
          <label for="Latitud_finc">Latitud <span class="red-text">*</span></label>
        </div>     
         <div class="input-field col s4">
          <input id="Longitud_finc" type="number" class="validate">
          <label for="Longitud_finc">Longitud  <span class="red-text">*</span></label>
        </div>
      </div>         
        <div class="row">
        <div class="input-field col s4">
          <input id="Viaacc_finc" type="text" class="validate">
          <label for="Viaacc_finc">Vías de acceso finca</label>
        </div>
        <div class="input-field col s4">
          <input id="Intgamilia_finc" type="number" class="validate">
          <label for="Intgamilia_finc">Integrantes familia <span class="red-text">*</span></label>
        </div>     
         <div class="input-field col s4">
          <input id="Jovenes1518" type="number" class="validate">
          <label for="Jovenes1518">Jovenes 15-18  <span class="red-text">*</span></label>
        </div>
      </div>
    </form>
  </div>
   <span class="green-text" id="msg_exito_finca"></span>
   <span class="red-text" id="msg_error_finca"></span>
    </div>
    <div class="modal-footer">
     <button id="btn_agregar_finca" class="btn waves-effect waves-light" type="button" name="action">Guardar
    <i class="material-icons right">send</i></button>
    </div>
  </div>
    <!-- MODAL PARA AGREGAR NUEVAS FINCAS  ¡FIN!-->
        
         <!--Modal que carga los datos para actualizarlos-->
        <div class="modal" id="mostrando_fincas" style="width:90%">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat right red-text">X</a>
                     <h5 class="modal-title center">Actualizando fincas</h5>  
                </div>  
                <div class="modal-body" id="finca_detalle">  
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
       <script src="../../js/activadores.materialize.js"></script>
       <script src="../../model/fincas/fincas.js"></script>
  
 
</html>
