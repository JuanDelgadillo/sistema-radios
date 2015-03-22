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
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Personal <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="">Nueva persona</a></li>
                            <li><a href="">Ver personal registrado</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Radios <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="">Nuevo radio</a></li>
                            <li><a href="">Ver radios registrados</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Consulta</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gestión de usuarios <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="">Ver usuarios registrados</a></li>
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
            <li class="active">Registro del personal</li>
        </ol>

        <div class="row">
            
            <!-- Article main content -->
            <article class="col-sm-9 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Registro del personal</h1>
                </header>
                    <form method="POST" action="../procesos/registro_personal.php">
                        <div class="row">
                            <div class="col-sm-4">
                                <span>Cédula</span>
                                <input class="form-control" type="text" name="cedula" placeholder="Cédula">
                            </div>
                            <div class="col-sm-4">
                                <span>Nombre</span>
                                <input class="form-control" type="text" name="nombre" placeholder="Nombre">
                            </div>
                            <div class="col-sm-4">
                                <span>Apellido</span>
                                <input class="form-control" type="text" name="apellido" placeholder="Apellido">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-4">
                                <span>Sexo</span>
                                <select name="sexo" class="form-control" required>
                                    <option value="">- Seleccione -</option>
                                    <option value="Hombre">Hombre</option>
                                    <option value="Mujer">Mujer</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <span>Teléfono</span>
                                <input class="form-control" type="text" name="telefono" placeholder="Teléfono">
                            </div>
                            <div class="col-sm-4">
                                <span>Unidad</span>
                                <select name="unidad" class="form-control" required>
                                    <option value="">- Seleccione -</option>
                                    <option value="15">15</option>
                                    <option value="37">37</option>
                                    <option value="171">171</option>
                                    <option value="A ORDEN DE  OPERACIONES">A ORDEN DE  OPERACIONES</option>
                                    <option value="ACADEMIA">ACADEMIA</option>
                                    <option value="ADJUNTO OPERACIONES">ADJUNTO OPERACIONES</option>
                                    <option value="AGUILA">AGUILA</option>
                                    <option value="ALCALDIA">ALCALDIA</option>
                                    <option value="AMBIENTAL">AMBIENTAL</option>
                                    <option value="ARCHIVO">ARCHIVO</option>
                                    <option value="ATAGRO">ATAGRO</option>
                                    <option value="CALLEJON">CALLEJON</option>
                                    <option value="CANINO">CANINO</option>
                                    <option value="CAPTURA">CAPTURA</option>
                                    <option value="CCP">CCP</option>
                                    <option value="CCP ESTE">CCP ESTE</option>
                                    <option value="CCP NORTE">CCP NORTE</option>
                                    <option value="CENTRAL COMUNICACIONES">CENTRAL COMUNICACIONES</option>
                                    <option value="CIPP">CIPP</option>
                                    <option value="COMISION CULTURA">COMISION CULTURA</option>
                                    <option value="COMISION D1">COMISION D1</option>
                                    <option value="COMISION DESARROLLO SOCIAL">COMISION DESARROLLO SOCIAL</option>
                                    <option value="COMISION FISCALIA">COMISION FISCALIA</option>
                                    <option value="COMISION IMAU">COMISION IMAU</option>
                                    <option value="COMISION M1">COMISION M1</option>
                                    <option value="COMISION POLICIA URDANETA">COMISION POLICIA URDANETA</option>
                                    <option value="COMISION PROTECCION">COMISION PROTECCION</option>
                                    <option value="COMISION SEBIN">COMISION SEBIN</option>
                                    <option value="COMISION SEDEMAT">COMISION SEDEMAT</option>
                                    <option value="COMISION VICTIMA">COMISION VICTIMA</option>
                                    <option value="COMUNAL">COMUNAL</option>
                                    <option value="COORDINACION DE PATRULLAJE">COORDINACION DE PATRULLAJE</option>
                                    <option value="COORDINACION PALACIO MUNICIPAL">COORDINACION PALACIO MUNICIPAL</option>
                                    <option value="COORDINACIÓN VIGIANCIA TRANSPORTE Y TRANSITO">COORDINACIÓN VIGIANCIA TRANSPORTE Y </option>TRANSITO
                                    <option value="COORDINADOR SERVICIO POLICIA COMUNAL">COORDINADOR SERVICIO POLICIA COMUNAL</option>
                                    <option value="COP">COP</option>
                                    <option value="CURVA">CURVA</option>
                                    <option value="DEP. VIAL">DEP. VIAL</option>
                                    <option value="DIEP">DIEP</option>
                                    <option value="DIRECCION DE OPERACIONES">DIRECCION DE OPERACIONES</option>
                                    <option value="DIRECCION VIAL">DIRECCION VIAL</option>
                                    <option value="DIRECTOR CONSEJO DISCIPLINARIO">DIRECTOR CONSEJO DISCIPLINARIO</option>
                                    <option value="DIRECTOR DE GIRA ALCALDESA">DIRECTOR DE GIRA ALCALDESA</option>
                                    <option value="Directora SIEG">Directora SIEG</option>
                                    <option value="DIVISION AEREA">DIVISION AEREA</option>
                                    <option value="DIVISION DE TRANSITO">DIVISION DE TRANSITO</option>
                                    <option value="DIVISION VIAL">DIVISION VIAL</option>
                                    <option value="EQUINOS">EQUINOS</option>
                                    <option value="ESTACION POLICIAL">ESTACION POLICIAL</option>
                                    <option value="ESTACION POLICIAL OESTE">ESTACION POLICIAL OESTE</option>
                                    <option value="EXPERTO VEHICULO">EXPERTO VEHICULO</option>
                                    <option value="HOMOLOGACION">HOMOLOGACION</option>
                                    <option value="IMTCUMA">IMTCUMA</option>
                                    <option value="INCAPACITADO">INCAPACITADO</option>
                                    <option value="INFRAESTRUCTURA">INFRAESTRUCTURA</option>
                                    <option value="INTELIGENCIA">INTELIGENCIA</option>
                                    <option value="JEFE ACADEMIA">JEFE ACADEMIA</option>
                                    <option value="JEFE ALCALDIA">JEFE ALCALDIA</option>
                                    <option value="JEFE CCP ESTE">JEFE CCP ESTE</option>
                                    <option value="JEFE DE SEGURIDAD SEDE ADMINISTRATIVA">JEFE DE SEGURIDAD SEDE ADMINISTRATIVA</option>
                                    <option value="JEFE TRANSPORTE Y DIVISION VIAL">JEFE TRANSPORTE Y DIVISION VIAL</option>
                                    <option value="LAGO">LAGO</option>
                                    <option value="LEGALES">LEGALES</option>
                                    <option value="LICORES">LICORES</option>
                                    <option value="MARACAIBO 1">MARACAIBO 1</option>
                                    <option value="MOTORIZADO">MOTORIZADO</option>
                                    <option value="MOTORIZADO C-M1">MOTORIZADO C-M1</option>
                                    <option value="MOVIL D-1">MOVIL D-1</option>
                                    <option value="MOVIL D-2">MOVIL D-2</option>
                                    <option value="MOVIL D-3">MOVIL D-3</option>
                                    <option value="MOVIL DIRECTOR">MOVIL DIRECTOR</option>
                                    <option value="OCAP">OCAP</option>
                                    <option value="OPERACIONES">OPERACIONES</option>
                                    <option value="ORDEN DE OPERACIONES">ORDEN DE OPERACIONES</option>
                                    <option value="ORDP">ORDP</option>
                                    <option value="ORGANIZACIÓN Y METODO">ORGANIZACIÓN Y METODO</option>
                                    <option value="PALACIO MUNICIPAL">PALACIO MUNICIPAL</option>
                                    <option value="PARQUE DE ARMAS">PARQUE DE ARMAS</option>
                                    <option value="PATRIA SEGURA">PATRIA SEGURA</option>
                                    <option value="PATRULAJE T-1">PATRULAJE T-1</option>
                                    <option value="PATRULLAE T-2">PATRULLAE T-2</option>
                                    <option value="PATRULLAJE">PATRULLAJE</option>
                                    <option value="PATRULLAJE 2 OFICIAL JEFE">PATRULLAJE 2 OFICIAL JEFE</option>
                                    <option value="PATRULLAJE INTELIGENTE">PATRULLAJE INTELIGENTE</option>
                                    <option value="PATRULLAJE SUP.AGREG">PATRULLAJE SUP.AGREG</option>
                                    <option value="PROCESO DE INCAPACIDAD">PROCESO DE INCAPACIDAD</option>
                                    <option value="RECAUDACION">RECAUDACION</option>
                                    <option value="REGISTRO PRINCIPAL">REGISTRO PRINCIPAL</option>
                                    <option value="RELACION PUBLICA">RELACION PUBLICA</option>
                                    <option value="REPOSO">REPOSO</option>
                                    <option value="REPOSO MEDICO">REPOSO MEDICO</option>
                                    <option value="SALA SITUACIONAL">SALA SITUACIONAL</option>
                                    <option value="SECRETARIA CIUDADANA">SECRETARIA CIUDADANA</option>
                                    <option value="SEDEMAT">SEDEMAT</option>
                                    <option value="SIEG">SIEG</option>
                                    <option value="SIETPOL">SIETPOL</option>
                                    <option value="SUB DIRECCION">SUB DIRECCION</option>
                                    <option value="SUSTANCIACION">SUSTANCIACION</option>
                                    <option value="TERMINAL">TERMINAL</option>
                                    <option value="TRANSITO TERRESTRE">TRANSITO TERRESTRE</option>
                                    <option value="TRANSPORTE">TRANSPORTE</option>
                                    <option value="TURNO 1">TURNO 1</option>
                                    <option value="TURNO 2">TURNO 2</option>
                                    <option value="UNES">UNES</option>
                                    <option value="UNICON">UNICON</option>
                                    <option value="VIAL">VIAL</option>
                                    <option value="VIALES">VIALES</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-4">
                                <span>Jerarquía</span>
                                <select class="form-control" name="jerarquia" required>
                                    <option value="">- Seleccione -</option>
                                    <option value="OFICIAL">OFICIAL</option>
                                    <option value="OFICIAL AGREGADO">OFICIAL AGREGADO</option>
                                    <option value="OFICIAL JEFE">OFICIAL JEFE</option>
                                    <option value="SUPERVISOR AGREGADO">SUPERVISOR AGREGADO</option>
                                    <option value="SUPERVISOR">SUPERVISOR</option>
                                    <option value="SUPERVISOR JEFE">SUPERVISOR JEFE</option>
                                    <option value="T.S.U.">T.S.U.</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <span>Promoción</span>
                                <select class="form-control" name="promocion" required>
                                    <option value="">- Seleccione -</option>
                                    <option value="CASO ESPECIAL">CASO ESPECIAL</option>
                                    <option value="CUARTA">CUARTA</option>
                                    <option value="CUARTA VIEJA">CUARTA VIEJA</option>
                                    <option value="NOVENA">NOVENA</option>
                                    <option value="OCTAVA">OCTAVA</option>
                                    <option value="PRIMERA">PRIMERA</option>
                                    <option value="QUINTA">QUINTA</option>
                                    <option value="SEGUNDA">SEGUNDA</option>
                                    <option value="SEPTIMA">SEPTIMA</option>
                                    <option value="SEXTA">SEXTA</option>
                                    <option value="TERCERA">TERCERA</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <span>Dirección</span>
                                <textarea style="resize:none;" name="direccion" placeholder="Escribe la dirección aquí" class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                        <br>
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
                                <a href="#">Registro de radios</a> |
                                <a href="#">Consulta</a> |
                                <a href="#">Gestión de usuarios</a> |
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