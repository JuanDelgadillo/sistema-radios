<?php

session_start();

include "../config/conection.php";
extract($_REQUEST);

if(isset($idRadio))
{
    $radio = mysql_fetch_assoc(mysql_query("SELECT * FROM radios WHERE id_radio = '$idRadio' "));
    $form = "../procesos/update.php";
    $title = "Actualizar información del radio";
    $radio_id = $radio['radio_id'];
    $activo_fijo = $radio['activo_fijo'];
    $serial_radio = $radio['serial_radio'];
    $estado_radio = $radio['estado_radio'];
    $modelo_radio = $radio['modelo_radio'];
    $observacion = $radio['observacion'];
}
else
{
    $form = "../procesos/registro_radio.php";
    $title = "Registro de radios";
    $radio_id = "";
    $activo_fijo = "";
    $serial_radio = "";
    $estado_radio = "";
    $modelo_radio = "";
    $observacion = "";
}

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
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Radios <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="">Nuevo radio</a></li>
                            <li><a href="radios_registrados.php">Ver radios registrados</a></li>
                        </ul>
                    </li>
                    <li><a href="consultar_registros.php">Consulta</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gestión de usuarios <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="usuarios_registrados.php">Ver usuarios registrados</a></li>
                        </ul>
                    </li>
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

    <!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="../">Inicio</a></li>
            <li class="active"><?=$title?></li>
        </ol>

        <div class="row">
            
            <!-- Article main content -->
            <article class="col-sm-9 maincontent">
                <header class="page-header">
                    <h1 class="page-title"><?=$title?></h1>
                </header>
                    <form method="POST" action="<?=$form?>">
                        <?php if(isset($idRadio)){ ?>
                        <input type="hidden" name="idRadio" value="<?=$idRadio?>">
                        <input type="hidden" value="radio" name="category">
                        <?php } ?>
                        <div class="row">
                            <div class="col-sm-4">
                                <span>IDentificador (ID)</span>
                                <input class="form-control" type="text" value="<?=$radio_id?>" name="identificador_radio" placeholder="ID del radio">
                            </div>
                            <div class="col-sm-4">
                                <span>Activo fijo</span>
                                <input class="form-control" type="text" value="<?=$activo_fijo?>" name="activo_fijo" placeholder="Activo fijo">
                            </div>
                            <div class="col-sm-4">
                                <span>Serial</span>
                                <input class="form-control" type="text" value="<?=$serial_radio?>" name="serial" placeholder="Serial">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-4">
                                <span>Estado</span>
                                <select name="estado" class="form-control" required>
                                    <option value="">- Seleccione -</option>
                                    <option <?php if($estado_radio == "APAGADO") echo "SELECTED"; ?> value="APAGADO">APAGADO</option>
                                    <option <?php if($estado_radio == "EXTRAVIADO") echo "SELECTED"; ?> value="EXTRAVIADO">EXTRAVIADO</option>
                                    <option <?php if($estado_radio == "OPERATIVO") echo "SELECTED"; ?> value="OPERATIVO">OPERATIVO</option>
                                    <option <?php if($estado_radio == "PARA DESINCORPORAR") echo "SELECTED"; ?> value="PARA DESINCORPORAR">PARA DESINCORPORAR</option>
                                    <option <?php if($estado_radio == "REPROGRAMAR") echo "SELECTED"; ?> value="REPROGRAMAR">REPROGRAMAR</option>
                                    <option <?php if($estado_radio == "REVISION") echo "SELECTED"; ?> value="REVISION">REVISION</option>
                                    <option <?php if($estado_radio == "SIN INFORMACION") echo "SELECTED"; ?> value="SIN INFORMACION">SIN INFORMACION</option>
                                    <option <?php if($estado_radio == "VERIFICAR") echo "SELECTED"; ?> value="VERIFICAR">VERIFICAR</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <span>Módelo</span>
                                <input class="form-control" type="text" value="<?=$modelo_radio?>" name="modelo" placeholder="Módelo">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <span>Observación</span>
                                <textarea style="resize:none;" name="observacion" placeholder="Escribe la observación aquí" class="form-control" rows="5"><?=$observacion?></textarea>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-sm-6">
                                
                            </div>
                            <div class="col-sm-6 text-right">
                                <input class="btn btn-action" name="aceptar" type="submit" value="Aceptar">
                            </div>
                        </div>
                    </form>

            </article>
            <!-- /Article -->
        </div>
    </div>  <!-- /container -->

    <footer id="footer" class="top-space">

        <div class="footer2">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="simplenav">
                                <b><a href="../">Inicio</a></b> 
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
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/headroom.min.js"></script>
    <script src="../assets/js/jQuery.headroom.min.js"></script>
    <script src="../assets/js/template.js"></script>
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