<?php

session_start();

include "../config/conection.php";
extract($_REQUEST);

if(isset($cedula))
{
    $persona = mysql_fetch_assoc(mysql_query("SELECT * FROM persona WHERE cedula = '$cedula' "));
    $form = "../procesos/update.php";
    $title = "Actualizar información de la persona";
    $nombre = $persona['nombre'];
    $apellido = $persona['apellido'];
    $sexo = $persona['sexo'];
    $telefono = $persona['telefono'];
    $unidad = $persona['unidad'];
    $jerarquia = $persona['jerarquia'];
    $promocion = $persona['promocion'];
    $direccion = $persona['direccion'];
}
else
{
    $form = "../procesos/registro_personal.php";
    $title = "Registro del personal";
    $cedula = "";
    $nombre = "";
    $apellido = "";
    $sexo = "";
    $telefono = "";
    $unidad = "";
    $jerarquia = "";
    $promocion = "";
    $direccion = "";
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
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Personal <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="">Nueva persona</a></li>
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
                    <li><a href="#">Consulta</a></li>
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
                        <div class="row">
                            <div class="col-sm-4">
                                <span>Cédula</span>
                                <input class="form-control" type="text" value="<?=$cedula?>" name="cedula" placeholder="Cédula">
                            </div>
                            <div class="col-sm-4">
                                <span>Nombre</span>
                                <input class="form-control" type="text" value="<?=$nombre?>" name="nombre" placeholder="Nombre">
                            </div>
                            <div class="col-sm-4">
                                <span>Apellido</span>
                                <input class="form-control" type="text" value="<?=$apellido?>" name="apellido" placeholder="Apellido">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-4">
                                <span>Sexo</span>
                                <select name="sexo" class="form-control" required>
                                    <option value="">- Seleccione -</option>
                                    <option <?php if($sexo == "Hombre") echo "SELECTED"; ?> value="Hombre">Hombre</option>
                                    <option <?php if($sexo == "Mujer") echo "SELECTED"; ?> value="Mujer">Mujer</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <span>Teléfono</span>
                                <input class="form-control" type="text" value="<?=$telefono?>" name="telefono" placeholder="Teléfono">
                            </div>
                            <div class="col-sm-4">
                                <span>Unidad</span>
                                <select name="unidad" class="form-control" required>
                                    <option value="">- Seleccione -</option>
                                    <option <?php if($unidad == "15") echo "SELECTED"; ?> value="15">15</option>
                                    <option <?php if($unidad == "37") echo "SELECTED"; ?> value="37">37</option>
                                    <option <?php if($unidad == "171") echo "SELECTED"; ?> value="171">171</option>
                                    <option <?php if($unidad == "A ORDEN DE  OPERACIONES") echo "SELECTED"; ?> value="A ORDEN DE  OPERACIONES">A ORDEN DE  OPERACIONES</option>
                                    <option <?php if($unidad == "ACADEMIA") echo "SELECTED"; ?> value="ACADEMIA">ACADEMIA</option>
                                    <option <?php if($unidad == "ADJUNTO OPERACIONES") echo "SELECTED"; ?> value="ADJUNTO OPERACIONES">ADJUNTO OPERACIONES</option>
                                    <option <?php if($unidad == "AGUILA") echo "SELECTED"; ?> value="AGUILA">AGUILA</option>
                                    <option <?php if($unidad == "ALCALDIA") echo "SELECTED"; ?> value="ALCALDIA">ALCALDIA</option>
                                    <option <?php if($unidad == "AMBIENTAL") echo "SELECTED"; ?> value="AMBIENTAL">AMBIENTAL</option>
                                    <option <?php if($unidad == "ARCHIVO") echo "SELECTED"; ?> value="ARCHIVO">ARCHIVO</option>
                                    <option <?php if($unidad == "ATAGRO") echo "SELECTED"; ?> value="ATAGRO">ATAGRO</option>
                                    <option <?php if($unidad == "CALLEJON") echo "SELECTED"; ?> value="CALLEJON">CALLEJON</option>
                                    <option <?php if($unidad == "CANINO") echo "SELECTED"; ?> value="CANINO">CANINO</option>
                                    <option <?php if($unidad == "CAPTURA") echo "SELECTED"; ?> value="CAPTURA">CAPTURA</option>
                                    <option <?php if($unidad == "CCP") echo "SELECTED"; ?> value="CCP">CCP</option>
                                    <option <?php if($unidad == "CCP ESTE") echo "SELECTED"; ?> value="CCP ESTE">CCP ESTE</option>
                                    <option <?php if($unidad == "CCP NORTE") echo "SELECTED"; ?> value="CCP NORTE">CCP NORTE</option>
                                    <option <?php if($unidad == "CENTRAL COMUNICACIONES") echo "SELECTED"; ?> value="CENTRAL COMUNICACIONES">CENTRAL COMUNICACIONES</option>
                                    <option <?php if($unidad == "CIPP") echo "SELECTED"; ?> value="CIPP">CIPP</option>
                                    <option <?php if($unidad == "COMISION CULTURA") echo "SELECTED"; ?> value="COMISION CULTURA">COMISION CULTURA</option>
                                    <option <?php if($unidad == "COMISION D1") echo "SELECTED"; ?> value="COMISION D1">COMISION D1</option>
                                    <option <?php if($unidad == "COMISION DESARROLLO SOCIAL") echo "SELECTED"; ?> value="COMISION DESARROLLO SOCIAL">COMISION DESARROLLO SOCIAL</option>
                                    <option <?php if($unidad == "COMISION FISCALIA") echo "SELECTED"; ?> value="COMISION FISCALIA">COMISION FISCALIA</option>
                                    <option <?php if($unidad == "COMISION IMAU") echo "SELECTED"; ?> value="COMISION IMAU">COMISION IMAU</option>
                                    <option <?php if($unidad == "COMISION M1") echo "SELECTED"; ?> value="COMISION M1">COMISION M1</option>
                                    <option <?php if($unidad == "COMISION POLICIA URDANETA") echo "SELECTED"; ?> value="COMISION POLICIA URDANETA">COMISION POLICIA URDANETA</option>
                                    <option <?php if($unidad == "COMISION PROTECCION") echo "SELECTED"; ?> value="COMISION PROTECCION">COMISION PROTECCION</option>
                                    <option <?php if($unidad == "COMISION SEBIN") echo "SELECTED"; ?> value="COMISION SEBIN">COMISION SEBIN</option>
                                    <option <?php if($unidad == "COMISION SEDEMAT") echo "SELECTED"; ?> value="COMISION SEDEMAT">COMISION SEDEMAT</option>
                                    <option <?php if($unidad == "COMISION VICTIMA") echo "SELECTED"; ?> value="COMISION VICTIMA">COMISION VICTIMA</option>
                                    <option <?php if($unidad == "COMUNAL") echo "SELECTED"; ?> value="COMUNAL">COMUNAL</option>
                                    <option <?php if($unidad == "COORDINACION DE PATRULLAJE") echo "SELECTED"; ?> value="COORDINACION DE PATRULLAJE">COORDINACION DE PATRULLAJE</option>
                                    <option <?php if($unidad == "COORDINACION PALACIO MUNICIPAL") echo "SELECTED"; ?> value="COORDINACION PALACIO MUNICIPAL">COORDINACION PALACIO MUNICIPAL</option>
                                    <option <?php if($unidad == "COORDINACIÓN VIGIANCIA TRANSPORTE Y") echo "SELECTED"; ?> value="COORDINACIÓN VIGIANCIA TRANSPORTE Y TRANSITO">COORDINACIÓN VIGIANCIA TRANSPORTE Y TRANSITO</option>
                                    <option <?php if($unidad == "COORDINADOR SERVICIO POLICIA COMUNAL") echo "SELECTED"; ?> value="COORDINADOR SERVICIO POLICIA COMUNAL">COORDINADOR SERVICIO POLICIA COMUNAL</option>
                                    <option <?php if($unidad == "COP") echo "SELECTED"; ?> value="COP">COP</option>
                                    <option <?php if($unidad == "CURVA") echo "SELECTED"; ?> value="CURVA">CURVA</option>
                                    <option <?php if($unidad == "DEP. VIAL") echo "SELECTED"; ?> value="DEP. VIAL">DEP. VIAL</option>
                                    <option <?php if($unidad == "DIEP") echo "SELECTED"; ?> value="DIEP">DIEP</option>
                                    <option <?php if($unidad == "DIRECCION DE OPERACIONES") echo "SELECTED"; ?> value="DIRECCION DE OPERACIONES">DIRECCION DE OPERACIONES</option>
                                    <option <?php if($unidad == "DIRECCION VIAL") echo "SELECTED"; ?> value="DIRECCION VIAL">DIRECCION VIAL</option>
                                    <option <?php if($unidad == "DIRECTOR CONSEJO DISCIPLINARIO") echo "SELECTED"; ?> value="DIRECTOR CONSEJO DISCIPLINARIO">DIRECTOR CONSEJO DISCIPLINARIO</option>
                                    <option <?php if($unidad == "DIRECTOR DE GIRA ALCALDESA") echo "SELECTED"; ?> value="DIRECTOR DE GIRA ALCALDESA">DIRECTOR DE GIRA ALCALDESA</option>
                                    <option <?php if($unidad == "Directora SIEG") echo "SELECTED"; ?> value="Directora SIEG">Directora SIEG</option>
                                    <option <?php if($unidad == "DIVISION AEREA") echo "SELECTED"; ?> value="DIVISION AEREA">DIVISION AEREA</option>
                                    <option <?php if($unidad == "DIVISION DE TRANSITO") echo "SELECTED"; ?> value="DIVISION DE TRANSITO">DIVISION DE TRANSITO</option>
                                    <option <?php if($unidad == "DIVISION VIAL") echo "SELECTED"; ?> value="DIVISION VIAL">DIVISION VIAL</option>
                                    <option <?php if($unidad == "EQUINOS") echo "SELECTED"; ?> value="EQUINOS">EQUINOS</option>
                                    <option <?php if($unidad == "ESTACION POLICIAL") echo "SELECTED"; ?> value="ESTACION POLICIAL">ESTACION POLICIAL</option>
                                    <option <?php if($unidad == "ESTACION POLICIAL OESTE") echo "SELECTED"; ?> value="ESTACION POLICIAL OESTE">ESTACION POLICIAL OESTE</option>
                                    <option <?php if($unidad == "EXPERTO VEHICULO") echo "SELECTED"; ?> value="EXPERTO VEHICULO">EXPERTO VEHICULO</option>
                                    <option <?php if($unidad == "HOMOLOGACION") echo "SELECTED"; ?> value="HOMOLOGACION">HOMOLOGACION</option>
                                    <option <?php if($unidad == "IMTCUMA") echo "SELECTED"; ?> value="IMTCUMA">IMTCUMA</option>
                                    <option <?php if($unidad == "INCAPACITADO") echo "SELECTED"; ?> value="INCAPACITADO">INCAPACITADO</option>
                                    <option <?php if($unidad == "INFRAESTRUCTURA") echo "SELECTED"; ?> value="INFRAESTRUCTURA">INFRAESTRUCTURA</option>
                                    <option <?php if($unidad == "INTELIGENCIA") echo "SELECTED"; ?> value="INTELIGENCIA">INTELIGENCIA</option>
                                    <option <?php if($unidad == "JEFE ACADEMIA") echo "SELECTED"; ?> value="JEFE ACADEMIA">JEFE ACADEMIA</option>
                                    <option <?php if($unidad == "JEFE ALCALDIA") echo "SELECTED"; ?> value="JEFE ALCALDIA">JEFE ALCALDIA</option>
                                    <option <?php if($unidad == "JEFE CCP ESTE") echo "SELECTED"; ?> value="JEFE CCP ESTE">JEFE CCP ESTE</option>
                                    <option <?php if($unidad == "JEFE DE SEGURIDAD SEDE ADMINISTRATIVA") echo "SELECTED"; ?> value="JEFE DE SEGURIDAD SEDE ADMINISTRATIVA">JEFE DE SEGURIDAD SEDE ADMINISTRATIVA</option>
                                    <option <?php if($unidad == "JEFE TRANSPORTE Y DIVISION VIAL") echo "SELECTED"; ?> value="JEFE TRANSPORTE Y DIVISION VIAL">JEFE TRANSPORTE Y DIVISION VIAL</option>
                                    <option <?php if($unidad == "LAGO") echo "SELECTED"; ?> value="LAGO">LAGO</option>
                                    <option <?php if($unidad == "LEGALES") echo "SELECTED"; ?> value="LEGALES">LEGALES</option>
                                    <option <?php if($unidad == "LICORES") echo "SELECTED"; ?> value="LICORES">LICORES</option>
                                    <option <?php if($unidad == "MARACAIBO 1") echo "SELECTED"; ?> value="MARACAIBO 1">MARACAIBO 1</option>
                                    <option <?php if($unidad == "MOTORIZADO") echo "SELECTED"; ?> value="MOTORIZADO">MOTORIZADO</option>
                                    <option <?php if($unidad == "MOTORIZADO C-M1") echo "SELECTED"; ?> value="MOTORIZADO C-M1">MOTORIZADO C-M1</option>
                                    <option <?php if($unidad == "MOVIL D-1") echo "SELECTED"; ?> value="MOVIL D-1">MOVIL D-1</option>
                                    <option <?php if($unidad == "MOVIL D-2") echo "SELECTED"; ?> value="MOVIL D-2">MOVIL D-2</option>
                                    <option <?php if($unidad == "MOVIL D-3") echo "SELECTED"; ?> value="MOVIL D-3">MOVIL D-3</option>
                                    <option <?php if($unidad == "MOVIL DIRECTOR") echo "SELECTED"; ?> value="MOVIL DIRECTOR">MOVIL DIRECTOR</option>
                                    <option <?php if($unidad == "OCAP") echo "SELECTED"; ?> value="OCAP">OCAP</option>
                                    <option <?php if($unidad == "OPERACIONES") echo "SELECTED"; ?> value="OPERACIONES">OPERACIONES</option>
                                    <option <?php if($unidad == "ORDEN DE OPERACIONES") echo "SELECTED"; ?> value="ORDEN DE OPERACIONES">ORDEN DE OPERACIONES</option>
                                    <option <?php if($unidad == "ORDP") echo "SELECTED"; ?> value="ORDP">ORDP</option>
                                    <option <?php if($unidad == "ORGANIZACIÓN Y METODO") echo "SELECTED"; ?> value="ORGANIZACIÓN Y METODO">ORGANIZACIÓN Y METODO</option>
                                    <option <?php if($unidad == "PALACIO MUNICIPAL") echo "SELECTED"; ?> value="PALACIO MUNICIPAL">PALACIO MUNICIPAL</option>
                                    <option <?php if($unidad == "PARQUE DE ARMAS") echo "SELECTED"; ?> value="PARQUE DE ARMAS">PARQUE DE ARMAS</option>
                                    <option <?php if($unidad == "PATRIA SEGURA") echo "SELECTED"; ?> value="PATRIA SEGURA">PATRIA SEGURA</option>
                                    <option <?php if($unidad == "PATRULAJE T-1") echo "SELECTED"; ?> value="PATRULAJE T-1">PATRULAJE T-1</option>
                                    <option <?php if($unidad == "PATRULLAE T-2") echo "SELECTED"; ?> value="PATRULLAE T-2">PATRULLAE T-2</option>
                                    <option <?php if($unidad == "PATRULLAJE") echo "SELECTED"; ?> value="PATRULLAJE">PATRULLAJE</option>
                                    <option <?php if($unidad == "PATRULLAJE 2 OFICIAL JEFE") echo "SELECTED"; ?> value="PATRULLAJE 2 OFICIAL JEFE">PATRULLAJE 2 OFICIAL JEFE</option>
                                    <option <?php if($unidad == "PATRULLAJE INTELIGENTE") echo "SELECTED"; ?> value="PATRULLAJE INTELIGENTE">PATRULLAJE INTELIGENTE</option>
                                    <option <?php if($unidad == "PATRULLAJE SUP.AGREG") echo "SELECTED"; ?> value="PATRULLAJE SUP.AGREG">PATRULLAJE SUP.AGREG</option>
                                    <option <?php if($unidad == "PROCESO DE INCAPACIDAD") echo "SELECTED"; ?> value="PROCESO DE INCAPACIDAD">PROCESO DE INCAPACIDAD</option>
                                    <option <?php if($unidad == "RECAUDACION") echo "SELECTED"; ?> value="RECAUDACION">RECAUDACION</option>
                                    <option <?php if($unidad == "REGISTRO PRINCIPAL") echo "SELECTED"; ?> value="REGISTRO PRINCIPAL">REGISTRO PRINCIPAL</option>
                                    <option <?php if($unidad == "RELACION PUBLICA") echo "SELECTED"; ?> value="RELACION PUBLICA">RELACION PUBLICA</option>
                                    <option <?php if($unidad == "REPOSO") echo "SELECTED"; ?> value="REPOSO">REPOSO</option>
                                    <option <?php if($unidad == "REPOSO MEDICO") echo "SELECTED"; ?> value="REPOSO MEDICO">REPOSO MEDICO</option>
                                    <option <?php if($unidad == "SALA SITUACIONAL") echo "SELECTED"; ?> value="SALA SITUACIONAL">SALA SITUACIONAL</option>
                                    <option <?php if($unidad == "SECRETARIA CIUDADANA") echo "SELECTED"; ?> value="SECRETARIA CIUDADANA">SECRETARIA CIUDADANA</option>
                                    <option <?php if($unidad == "SEDEMAT") echo "SELECTED"; ?> value="SEDEMAT">SEDEMAT</option>
                                    <option <?php if($unidad == "SIEG") echo "SELECTED"; ?> value="SIEG">SIEG</option>
                                    <option <?php if($unidad == "SIETPOL") echo "SELECTED"; ?> value="SIETPOL">SIETPOL</option>
                                    <option <?php if($unidad == "SUB DIRECCION") echo "SELECTED"; ?> value="SUB DIRECCION">SUB DIRECCION</option>
                                    <option <?php if($unidad == "SUSTANCIACION") echo "SELECTED"; ?> value="SUSTANCIACION">SUSTANCIACION</option>
                                    <option <?php if($unidad == "TERMINAL") echo "SELECTED"; ?> value="TERMINAL">TERMINAL</option>
                                    <option <?php if($unidad == "TRANSITO TERRESTRE") echo "SELECTED"; ?> value="TRANSITO TERRESTRE">TRANSITO TERRESTRE</option>
                                    <option <?php if($unidad == "TRANSPORTE") echo "SELECTED"; ?> value="TRANSPORTE">TRANSPORTE</option>
                                    <option <?php if($unidad == "TURNO 1") echo "SELECTED"; ?> value="TURNO 1">TURNO 1</option>
                                    <option <?php if($unidad == "TURNO 2") echo "SELECTED"; ?> value="TURNO 2">TURNO 2</option>
                                    <option <?php if($unidad == "UNES") echo "SELECTED"; ?> value="UNES">UNES</option>
                                    <option <?php if($unidad == "UNICON") echo "SELECTED"; ?> value="UNICON">UNICON</option>
                                    <option <?php if($unidad == "VIAL") echo "SELECTED"; ?> value="VIAL">VIAL</option>
                                    <option <?php if($unidad == "VIALES") echo "SELECTED"; ?> value="VIALES">VIALES</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-4">
                                <span>Jerarquía</span>
                                <select class="form-control" name="jerarquia" required>
                                    <option value="">- Seleccione -</option>
                                    <option <?php if($jerarquia == "OFICIAL") echo "SELECTED"; ?> value="OFICIAL">OFICIAL</option>
                                    <option <?php if($jerarquia == "OFICIAL AGREGADO") echo "SELECTED"; ?> value="OFICIAL AGREGADO">OFICIAL AGREGADO</option>
                                    <option <?php if($jerarquia == "OFICIAL JEFE") echo "SELECTED"; ?> value="OFICIAL JEFE">OFICIAL JEFE</option>
                                    <option <?php if($jerarquia == "SUPERVISOR AGREGADO") echo "SELECTED"; ?> value="SUPERVISOR AGREGADO">SUPERVISOR AGREGADO</option>
                                    <option <?php if($jerarquia == "SUPERVISOR") echo "SELECTED"; ?> value="SUPERVISOR">SUPERVISOR</option>
                                    <option <?php if($jerarquia == "SUPERVISOR JEFE") echo "SELECTED"; ?> value="SUPERVISOR JEFE">SUPERVISOR JEFE</option>
                                    <option <?php if($jerarquia == "T.S.U.") echo "SELECTED"; ?> value="T.S.U.">T.S.U.</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <span>Promoción</span>
                                <select class="form-control" name="promocion" required>
                                    <option value="">- Seleccione -</option>
                                    <option <?php if($promocion == "CASO ESPECIAL") echo "SELECTED"; ?> value="CASO ESPECIAL">CASO ESPECIAL</option>
                                    <option <?php if($promocion == "CUARTA") echo "SELECTED"; ?> value="CUARTA">CUARTA</option>
                                    <option <?php if($promocion == "CUARTA VIEJA") echo "SELECTED"; ?> value="CUARTA VIEJA">CUARTA VIEJA</option>
                                    <option <?php if($promocion == "NOVENA") echo "SELECTED"; ?> value="NOVENA">NOVENA</option>
                                    <option <?php if($promocion == "OCTAVA") echo "SELECTED"; ?> value="OCTAVA">OCTAVA</option>
                                    <option <?php if($promocion == "PRIMERA") echo "SELECTED"; ?> value="PRIMERA">PRIMERA</option>
                                    <option <?php if($promocion == "QUINTA") echo "SELECTED"; ?> value="QUINTA">QUINTA</option>
                                    <option <?php if($promocion == "SEGUNDA") echo "SELECTED"; ?> value="SEGUNDA">SEGUNDA</option>
                                    <option <?php if($promocion == "SEPTIMA") echo "SELECTED"; ?> value="SEPTIMA">SEPTIMA</option>
                                    <option <?php if($promocion == "SEXTA") echo "SELECTED"; ?> value="SEXTA">SEXTA</option>
                                    <option <?php if($promocion == "TERCERA") echo "SELECTED"; ?> value="TERCERA">TERCERA</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <span>Dirección</span>
                                <textarea style="resize:none;" name="direccion" placeholder="Escribe la dirección aquí" class="form-control" rows="5"><?=$direccion?></textarea>
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
                                <a href="registro_radios.php">Registro de radios</a> |
                                <a href="#">Consulta</a> |
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