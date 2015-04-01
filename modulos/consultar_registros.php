<?php

session_start();

include "../config/conection.php";
extract($_REQUEST);
if(isset($consultar))
{
    if($category == "Persona")
    {
        //var_dump($_REQUEST);
        $th = '<th style="text-align:center;">Cédula</th>
        <th style="text-align:center;">Nombre</th>
        <th style="text-align:center;">Apellido</th>
        <th style="text-align:center;">Sexo</th>
        <th style="text-align:center;">Teléfono</th>
        <th style="text-align:center;">Unidad</th>
        <th style="text-align:center;">Jerarquía</th>
        <th style="text-align:center;">Promoción</th>
        <th style="text-align:center;">Dirección</th>';
        $consulta = mysql_query("SELECT * FROM persona WHERE CONCAT (cedula, nombre, apellido, sexo, telefono, unidad, jerarquia, promocion, direccion) LIKE '%$criterio%' ");
        $_SESSION['textConsulta'] = "SELECT * FROM persona WHERE CONCAT (cedula, nombre, apellido, sexo, telefono, unidad, jerarquia, promocion, direccion) LIKE '%$criterio%' ";
        $ancho ="width:1800px;";
    }
    elseif($category == "Radio")
    {
        $th = '<th style="text-align:center;">IDentificador (ID)</th>
        <th style="text-align:center;">Activo fijo</th>
        <th style="text-align:center;">Serial</th>
        <th style="text-align:center;">Estado</th>
        <th style="text-align:center;">Módelo</th>
        <th style="text-align:center;">Observación</th>
        <th style="text-align:center;">Operaciones</th>';
        $consulta = mysql_query("SELECT * FROM radios WHERE CONCAT (radio_id, activo_fijo, serial_radio, estado_radio, modelo_radio, observacion) LIKE '%$criterio%' ");
        $_SESSION['textConsulta'] = "SELECT * FROM radios WHERE CONCAT (radio_id, activo_fijo, serial_radio, estado_radio, modelo_radio, observacion) LIKE '%$criterio%' ";
        $ancho ="width:1200px;";
    }
    elseif($category == "Ultima asignación de radio")
    {
        $th = '<th style="text-align:center;">IDentificador (ID)</th>
        <th style="text-align:center;">Activo fijo</th>
        <th style="text-align:center;">Serial</th>
        <th style="text-align:center;">Estado</th>
        <th style="text-align:center;">Módelo</th>
        <th style="text-align:center;">Observación</th>
        <th style="text-align:center;">Cedula - Ultima asignacion</th>
        <th style="text-align:center;">Fecha - Ultima asignacion</th>
        <th style="text-align:center;">Ultima asignacion</th>';
        $consulta = mysql_query("SELECT * FROM radios, ultima_asignacion_radio WHERE CONCAT (radios.radio_id, radios.activo_fijo, radios.serial_radio, radios.estado_radio, radios.modelo_radio, radios.observacion) LIKE '%$criterio%' AND radios.id_radio = ultima_asignacion_radio.id_radio ");
        $_SESSION['textConsulta'] = "SELECT * FROM radios, ultima_asignacion_radio WHERE CONCAT (radios.radio_id, radios.activo_fijo, radios.serial_radio, radios.estado_radio, radios.modelo_radio, radios.observacion) LIKE '%$criterio%' AND radios.id_radio = ultima_asignacion_radio.id_radio ";
        $ancho ="width:1400px;";
    }
    elseif($category == "Penultima asignación de radio")
    {
        $th = '<th style="text-align:center;">IDentificador (ID)</th>
        <th style="text-align:center;">Activo fijo</th>
        <th style="text-align:center;">Serial</th>
        <th style="text-align:center;">Estado</th>
        <th style="text-align:center;">Módelo</th>
        <th style="text-align:center;">Observación</th>
        <th style="text-align:center;">Cedula - Penultima asignacion</th>
        <th style="text-align:center;">Fecha - Penultima asignacion</th>
        <th style="text-align:center;">Penultima asignacion</th>';
        $consulta = mysql_query("SELECT * FROM radios, penultima_asignacion_radio WHERE CONCAT (radios.radio_id, radios.activo_fijo, radios.serial_radio, radios.estado_radio, radios.modelo_radio, radios.observacion) LIKE '%$criterio%' AND radios.id_radio = penultima_asignacion_radio.id_radio ");
        $_SESSION['textConsulta'] = "SELECT * FROM radios, penultima_asignacion_radio WHERE CONCAT (radios.radio_id, radios.activo_fijo, radios.serial_radio, radios.estado_radio, radios.modelo_radio, radios.observacion) LIKE '%$criterio%' AND radios.id_radio = penultima_asignacion_radio.id_radio ";
        $ancho ="width:1400px;";
    }
    elseif($category == "Antepenultima asignación de radio")
    {
        $th = '<th style="text-align:center;">IDentificador (ID)</th>
        <th style="text-align:center;">Activo fijo</th>
        <th style="text-align:center;">Serial</th>
        <th style="text-align:center;">Estado</th>
        <th style="text-align:center;">Módelo</th>
        <th style="text-align:center;">Observación</th>
        <th style="text-align:center;">Cedula - Antepenultima asignacion</th>
        <th style="text-align:center;">Fecha - Antepenultima asignacion</th>
        <th style="text-align:center;">Antepenultima asignacion</th>';
        $consulta = mysql_query("SELECT * FROM radios, antepenultima_asignacion_radio WHERE CONCAT (radios.radio_id, radios.activo_fijo, radios.serial_radio, radios.estado_radio, radios.modelo_radio, radios.observacion) LIKE '%$criterio%' AND radios.id_radio = antepenultima_asignacion_radio.id_radio ");
        $_SESSION['textConsulta'] = "SELECT * FROM radios, antepenultima_asignacion_radio WHERE CONCAT (radios.radio_id, radios.activo_fijo, radios.serial_radio, radios.estado_radio, radios.modelo_radio, radios.observacion) LIKE '%$criterio%' AND radios.id_radio = antepenultima_asignacion_radio.id_radio ";
        $ancho ="width:1400px;";
    }

}
else
{
    $consulta= "";
    $_SESSION['textConsulta'] = "";
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
    <style type="text/css">

table { 
  margin: 10px 0 30px 0;
}

table tr th, table tr td { 
  background: #3C3C3C;
  color: #FFF;
  padding: 7px 4px;
  text-align: left;
  border:1px solid white;
}

table tr td { 
  background: #D3F2F7;
  color: #47433F;
  border-top: 1px solid #FFF;
  padding: 7px;
}

    #auditoria {
        width:100%;
        height:400px;
        overflow: scroll;
        overflow-y:auto;
        background-color: #EEE;
        margin:0 auto;
        }
.btn {
    padding: 10px 10px;
}

  </style>

    <script>

    window.addEventListener("load",function(){
        exportarExcel.addEventListener('click',function(){
            if(textConsulta.value != "")
            {
                var tp;
                if(tipo_consulta.value == "Persona") tp = 1;
                if(tipo_consulta.value == "Radio") tp = 2;
                if(tipo_consulta.value == "Ultima asignación de radio") tp = 3;
                if(tipo_consulta.value == "Penultima asignación de radio") tp = 4;
                if(tipo_consulta.value == "Antepenultima asignación de radio") tp = 5;

                window.location="../procesos/exportar.php?category=consulta&tp="+tp;
            }
            else
            {
                alert("Debes realizar una consulta para poder exportarla a Excel.");
            }
        },false);
        exportarPdf.addEventListener('click',function(){
            if(textConsulta.value != "")
            {
                var tp;
                if(tipo_consulta.value == "Persona") tp = 1;
                if(tipo_consulta.value == "Radio") tp = 2;
                if(tipo_consulta.value == "Ultima asignación de radio") tp = 3;
                if(tipo_consulta.value == "Penultima asignación de radio") tp = 4;
                if(tipo_consulta.value == "Antepenultima asignación de radio") tp = 5;

                window.open("consulta_pdf.php?category=consulta&tp="+tp);
            }
            else
            {
                alert("Debes realizar una consulta para poder exportarla a Pdf.");
            }
        },false);
    },false);

    </script>

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
                    <li class="active"><a href="#">Consulta</a></li>
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
            <li class="active">Consulta</li>
        </ol>

        <div class="row">
            
            <!-- Article main content -->
            <article class="col-sm-9 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Consultar registros</h1>
                </header>
                <div class="row">
                    <form action="" method="POST">
                            <div class="col-sm-4">
                                <span>Categoría a consultar</span>
                                <select name="category" class="form-control" required>
                                    <option value="">- Seleccione -</option>
                                    <option value="Persona">Persona</option>
                                    <option value="Radio">Radio</option>
                                    <option value="Ultima asignación de radio">Ultima asignación de radio</option>
                                    <option value="Penultima asignación de radio">Penultima asignación de radio</option>
                                    <option value="Antepenultima asignación de radio">Antepenultima asignación de radio</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <span>Dato a consultar</span>
                                <input class="form-control" type="text" name="criterio" required placeholder="Dato a consultar">
                            </div>
                            <div class="col-sm-4"><br>
                                <input class="btn btn-action" name="consultar" type="submit" value="Consultar">
                            </div>
                    </form>
                        </div>
                        <br>
                    <div id="auditoria">
                        <table style="<?php if(!isset($consultar)){ echo 'width:100%;'; } else { echo $ancho; } ?> margin-top:0;" >
                          <tr>
                            <?php if(!isset($consultar)){ ?>
                            <th style="text-align:center;">Resultado</th>
                            <?php }
                            else {
                                echo $th;
                            } ?>
                          </tr>
                            <?php if(isset($consultar)){ while($row = mysql_fetch_assoc($consulta)){ ?>
                            <tr>
                            <?php if($category == "Persona"){ ?>
                            <td style="text-align:center;"><?=$row['cedula']?></td>
                            <td style="text-align:center;"><?=$row['nombre']?></td>
                            <td style="text-align:center;"><?=$row['apellido']?></td>
                            <td style="text-align:center;"><?=$row['sexo']?></td>
                            <td style="text-align:center;"><?=$row['telefono']?></td>
                            <td style="text-align:center;"><?=$row['unidad']?></td>
                            <td style="text-align:center;"><?=$row['jerarquia']?></td>
                            <td style="text-align:center;"><?=$row['promocion']?></td>
                            <td style="text-align:center;"><?=$row['direccion']?></td>
                            <?php } ?>
                            <?php if($category == "Radio"){ ?>
                            <td style="text-align:center;"><?=$row['radio_id']?></td>
                            <td style="text-align:center;"><?=$row['activo_fijo']?></td>
                            <td style="text-align:center;"><?=$row['serial_radio']?></td>
                            <td style="text-align:center;"><?=$row['estado_radio']?></td>
                            <td style="text-align:center;"><?=$row['modelo_radio']?></td>
                            <td style="text-align:center;"><?=$row['observacion']?></td>
                            <td style="text-align:center;"><a href="asignacion_radio.php?id=<?=$row['id_radio']?>">Asignar</a></td>
                            <?php } ?>
                            <?php if($category == "Ultima asignación de radio"){ ?>
                            <td style="text-align:center;"><?=$row['radio_id']?></td>
                            <td style="text-align:center;"><?=$row['activo_fijo']?></td>
                            <td style="text-align:center;"><?=$row['serial_radio']?></td>
                            <td style="text-align:center;"><?=$row['estado_radio']?></td>
                            <td style="text-align:center;"><?=$row['modelo_radio']?></td>
                            <td style="text-align:center;"><?=$row['observacion']?></td>
                            <td style="text-align:center;"><?=$row['cedula_ultima']?></td>
                            <td style="text-align:center;"><?=$row['fecha_ultima_asignacion']?></td>
                            <td style="text-align:center;"><?=$row['ultima_asignacion']?></td>
                            <?php } ?>
                            <?php if($category == "Penultima asignación de radio"){ ?>
                            <td style="text-align:center;"><?=$row['radio_id']?></td>
                            <td style="text-align:center;"><?=$row['activo_fijo']?></td>
                            <td style="text-align:center;"><?=$row['serial_radio']?></td>
                            <td style="text-align:center;"><?=$row['estado_radio']?></td>
                            <td style="text-align:center;"><?=$row['modelo_radio']?></td>
                            <td style="text-align:center;"><?=$row['observacion']?></td>
                            <td style="text-align:center;"><?=$row['cedula_penultima']?></td>
                            <td style="text-align:center;"><?=$row['fecha_penultima_asignacion']?></td>
                            <td style="text-align:center;"><?=$row['penultima_asignacion']?></td>
                            <?php } ?>
                            <?php if($category == "Antepenultima asignación de radio"){ ?>
                            <td style="text-align:center;"><?=$row['radio_id']?></td>
                            <td style="text-align:center;"><?=$row['activo_fijo']?></td>
                            <td style="text-align:center;"><?=$row['serial_radio']?></td>
                            <td style="text-align:center;"><?=$row['estado_radio']?></td>
                            <td style="text-align:center;"><?=$row['modelo_radio']?></td>
                            <td style="text-align:center;"><?=$row['observacion']?></td>
                            <td style="text-align:center;"><?=$row['cedula_antepenultima']?></td>
                            <td style="text-align:center;"><?=$row['fecha_antepenultima_asignacion']?></td>
                            <td style="text-align:center;"><?=$row['antepenultima_asignacion']?></td>
                            <?php } ?>

                            </tr>
                            <?php } } //End while - End if ?>

                        </table>
                    </div>
                    <br>
                        <div class="row">
                            <div class="col-sm-4 text-right">
                            </div>
                            <div class="col-sm-4 text-right">
                            </div>
                            <div class="col-sm-4 text-right">
                                <input class="btn btn-action" id="exportarPdf" type="button" value="PDF">
                                <input type="hidden" name="tipo_consulta" id="tipo_consulta" value="<?=$category?>">
                                <input type="hidden" id="textConsulta" name="textConsulta" value="<?=$_SESSION['textConsulta']?>">
                                <input class="btn btn-action" id="exportarExcel" type="button" value="EXCEL">
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