    <!DOCTYPE html>
    <html lang="es">
    <head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
       <title>FERTILIZACION</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
    <header>
    <div class="navbar-fixed">
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="view/fincas/fincas.manager.php">Control de fincas</a></li>
          <li><a href="view/cultivos/cultivos.manager.php">Control de Cultivos</a></li>
          <li class="divider"></li>
          <li><a href="#!">Panel de control</a></li>
        </ul>       
        <ul id="dropdown2" class="dropdown-content">
          <li><a href="view/fertilizantes/fertilizantes.manager.php">Control de fertilizantes</a></li>
          <li class="divider"></li>
          <li><a href="view/elementos/elementos.manager.php">Grupo de elementos</a></li>
          <li class="divider"></li>
        </ul>      
        <ul id="campo_studio" class="dropdown-content">
          <li><a href="#!">ANALISIS DE SUELOS</a></li>
          <li><a href="#!">Ver resultados</a></li>
          <li><a href="#!">Administrar</a></li>
          <li><a href="#!">CREAR ANALISIS FOLIAR</a></li>
          <li><a href="view/analisis_suelo/analisis_suelo.php">CREAR ANALISIS DE SUELO</a></li>
          <li class="divider"></li>
        </ul>
         <nav class="light-green" role="navigation">
        <div style="width:90%" class="container">
    <div class="nav-wrapper"> 
      <a href="#!" class="brand-logo"><h5>FER<span class="red-text">TIL</span></h5></a>
      <ul class="right hide-on-med-and-down">
        <li ><a id="mbar"href="#" class="black-text"><i class="material-icons left ">search</i>Buscar</a></li>
     <li>  <a class='dropdown-button black-text' data-beloworigin="true" href='#' data-activates='campo_studio'>Estudio de Campo</a></li>
        <li ><a id="mbar"href="#" class="black-text"><i class="material-icons left ">donut_small</i>Programas PF</a></li>
        <li ><a id="mbar"href="#" class="black-text"><i class="material-icons left ">build</i>ANALISIS</a></li>  
        <li>  <a class='dropdown-button ' data-beloworigin="true" href='#' data-activates='dropdown1'>FINCA</a></li>
        <li>  <a class='dropdown-button ' data-beloworigin="true" href='#' data-activates='dropdown2'>FERTILIZANTES</a></li>
      </ul>
    <!!-- este es el menu-->
     </div> 
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
    </div> 
    <!--AQUI ESTA EL MENU DE LA IZQUIERDA -->    
    <ul id="slide-out" class="side-nav">
    <li><div class="user-view">
      <div class="background">
        <img src="img/header/header.jpg">
      </div>
      <a href="#!user"><img class="circle" src="img/header/student3.jpg"></a>
      <a href="#!name"><span class="white-text name">John Doe</span></a>
      <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    </ul>
    </nav>
    </header>
    <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/back/coverback.jpg"> <!-- random image -->
      </li>
    </ul>
    </div>
     <div class="container">
     </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize/materialize.min.js"></script>
      <script type="text/javascript" src="js/materialize/materialize.js"></script>
      <script type="text/javascript" src="js/materialize/activadores_materialize.js"></script>
      <!-- DATA TABLES-- -->
      <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
      <script src="js/datables.control.js"></script>
    </body>
    </html>
