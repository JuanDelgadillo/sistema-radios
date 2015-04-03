<?php

session_start();

include "../config/conection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
    
    <title>Sistema de control de radios</title>

    <link rel="shortcut icon" href="../assets/images/gt_favicon.png">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="../assets/css/bootstrap-theme.css" media="screen" >
    <link rel="stylesheet" href="../assets/css/main.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../assets/js/html5shiv.js"></script>
    <script src="../assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top headroom" >
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <?php if(isset($_SESSION['user'])){ ?>
                <a class="navbar-brand" href="./"><img src="../assets/images/logo.png" alt="Progressus HTML5 template"></a>
                <?php } ?>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    <li><a href="../">Inicio</a></li>
                    <?php if(isset($_SESSION['user'])){ ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Personal <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="registro_personal.php">Nueva persona</a></li>
                            <li><a href="personal_registrado.php">Ver personal registrado</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Radios <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="registro_radios.php">Nuevo radio</a></li>
                            <li><a href="radios_registrados.php">Ver radios registrados</a></li>
                        </ul>
                    </li>
                    <!-- <li><a href="#">Registro de radios</a></li> -->
                    <!-- <li><a href="registro_personal.php">Registro del personal</a></li>  -->
                    <li><a href="consultar_registros.php">Consulta</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gestión de usuarios <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="usuarios_registrados.php">Ver usuarios registrados</a></li>
                        </ul>
                    </li>
                    <!-- <li><a href="#">Gestión de usuarios</a></li> -->
                    <!-- <li><a class="btn" href="signin.html">SIGN IN / SIGN UP</a></li> -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$_SESSION['user']?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../procesos/salir.php">Cerrar sesión</a></li>
                        </ul>
                    </li>
                    <?php } ?>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div> 
    <!-- /.navbar -->

    <header id="head" class="secondary"></header>
    <div class="container text-center">
        <h1 class="thin">Sistema de Control de Radios</h1>
    </div>
    <!-- container -->
<?php if(isset($_SESSION['user'])){ ?>  
    <!-- /Intro-->
        <br>
    <!-- Highlights - jumbotron -->
    <div class="jumbotron">
        <div class="container">
            
            <h3 class="text-center thin">Estadística</h3>
            
             <div class="row">
                <div class="col-md-6 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-bar-chart-o"></i><a href="grafica_personal.php" target="_blank">Gráfico del personal</a></h4></div>
                    <div class="h-body text-center">
                        <p>Gráfico estadístico de todas las personas <br> registradas en la base de datos.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-bar-chart-o"></i><a href="grafica_radios.php" target="_blank">Gráfico de los radios</a></h4></div>
                    <div class="h-body text-center">
                        <p>Gráfico estadístico de todos los radios <br> registrados en la base de datos.</p>
                    </div>
                </div>
            </div> <!-- /row  -->

            <div class="row">
                <div class="col-md-6 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-bar-chart-o"></i><a href="grafica_usuarios.php" target="_blank">Gráfico de los usuarios</a></h4></div>
                    <div class="h-body text-center">
                        <p>Gráfico estadístico de todos los usuarios <br> registrados en la base de datos.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-bar-chart-o"></i><a href="grafica_asignaciones.php" target="_blank">Gráfico de las asignaciones</a></h4></div>
                    <div class="h-body text-center">
                        <p>Gráfico estadístico de todas las asignaciones  <br>de radios registradas en la base de datos.</p>
                    </div>
                </div>
            </div> <!-- /row  -->
        
        </div>
    </div>
    <!-- /Highlights -->

<?php } ?>

    <footer id="footer" class="top-space">

        <div class="footer2">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="simplenav">
                                <b><a href="./">Inicio</a></b> 
                                <?php if(isset($_SESSION['user'])){ ?> |
                                <a href="registro_personal.php">Registro del personal</a> |
                                <a href="registro_radios.php">Registro de radios</a> |
                                <a href="consultar_registros.php">Consulta</a> |
                                <a href="usuarios_registrados.php">Gestión de usuarios</a> |
                                <a href="../procesos/salir.php">Cerrar sesión</a>
                                <?php } ?>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="text-right">
                                Copyright &copy; 2015. 
                            </p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>
    </footer>   
        




    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/headroom.min.js"></script>
    <script src="assets/js/jQuery.headroom.min.js"></script>
    <script src="assets/js/template.js"></script>

<?php 

if(isset($_SESSION['menssage']) && $_SESSION['menssage'] != "")
{

  printf("<script type='text/javascript' language='javascript'>

  alert('".$_SESSION['menssage']."');

    </script>");

  unset($_SESSION['menssage']);
}

 ?>
</body>
</html>