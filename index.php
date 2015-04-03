<?php

session_start();

include "config/conection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
    
    <title>Sistema de control de radios</title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
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
                <a class="navbar-brand" href="./"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></a>
                <?php } ?>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    <li class="active"><a href="./">Inicio</a></li>
                    <?php if(isset($_SESSION['user'])){ ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Personal <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="modulos/registro_personal.php">Nueva persona</a></li>
                            <li><a href="modulos/personal_registrado.php">Ver personal registrado</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Radios <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="modulos/registro_radios.php">Nuevo radio</a></li>
                            <li><a href="modulos/radios_registrados.php">Ver radios registrados</a></li>
                        </ul>
                    </li>
                    <!-- <li><a href="#">Registro de radios</a></li> -->
                    <!-- <li><a href="modulos/registro_personal.php">Registro del personal</a></li>  -->
                    <li><a href="modulos/consultar_registros.php">Consulta</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gestión de usuarios <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="modulos/usuarios_registrados.php">Ver usuarios registrados</a></li>
                        </ul>
                    </li>
                    <!-- <li><a href="#">Gestión de usuarios</a></li> -->
                    <!-- <li><a class="btn" href="signin.html">SIGN IN / SIGN UP</a></li> -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$_SESSION['user']?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="procesos/salir.php">Cerrar sesión</a></li>
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
<?php if(! isset($_SESSION['user'])){ ?>
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="./">Inicio</a></li>
            <li class="active">Acceso de usuario</li>
        </ol>

        <div class="row">
            
            <!-- Article main content -->
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h2 class="page-title">Control de acceso</h2>
                </header>
                <div style="position:absolute;"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></div>
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 class="thin text-center">Iniciar sesión</h3>
                            <p class="text-center text-muted"></p>
                            <hr>
                            
                            <form method="POST" action="procesos/login.php">
                                <div class="top-margin">
                                    <label>Nombre de usuario <span class="text-danger">*</span></label>
                                    <input type="text" name="user" class="form-control" required>
                                </div>
                                <div class="top-margin">
                                    <label>Contraseña <span class="text-danger">*</span></label>
                                    <input type="password" name="contrasena" class="form-control" required>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-lg-6">
                                    </div>
                                    <div class="col-lg-4 text-right">
                                        <button class="btn btn-action" name="ingresar" type="submit">Iniciar sesión</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                
            </article>
            <!-- /Article -->

        </div>
    </div>  <!-- /container -->
<?php }else{ ?>  
    <!-- /Intro-->
        <br>
    <!-- Highlights - jumbotron -->
    <div class="jumbotron">
        <div class="container">
            
            <h3 class="text-center thin">Panel de control</h3>
            
            <div class="row">
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-users fa-5"></i><a href="modulos/registro_personal.php">Registro del personal</a></h4></div>
                    <div class="h-body text-center">
                        <p>Módulo que permite registrar el personal de la estación de policia</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-phone fa-5"></i><a href="modulos/registro_radios.php">Registro de radios</a></h4></div>
                    <div class="h-body text-center">
                        <p>Módulo que permite registrar los radios de la estación policial.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-search fa-5"></i><a href="modulos/consultar_registros.php">Consulta</a></h4></div>
                    <div class="h-body text-center">
                        <p>Módulo que permite consultar los registros internos de la base de datos del sistema.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-users fa-5"></i><a href="modulos/usuarios_registrados.php">Gestión de usuarios</a></h4></div>
                    <div class="h-body text-center">
                        <p>Módulo que permite gestionar los usuarios que administran y tienen acceso al sistema de radios.</p>
                    </div>
                </div>
            </div> <!-- /row  -->

            <div class="row">
                <div class="col-md-6 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-print"></i><a href="modulos/reporte_general.php" target="_blank">Reporte general</a></h4></div>
                    <div class="h-body text-center">
                        <p>Reporte general de la información actual del sistema.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-bar-chart-o"></i><a href="modulos/estadistica.php">Estadísticas</a></h4></div>
                    <div class="h-body text-center">
                        <p>Módulo que permite visualizar las estadísticas <br> de los registros internos de la base de datos del sistema.</p>
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
                                <a href="modulos/registro_personal.php">Registro del personal</a> |
                                <a href="modulos/registro_radios.php">Registro de radios</a> |
                                <a href="modulos/consultar_registros.php">Consulta</a> |
                                <a href="modulos/usuarios_registrados.php">Gestión de usuarios</a> |
                                <a href="procesos/salir.php">Cerrar sesión</a>
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