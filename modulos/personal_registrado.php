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
                            <li><a href="registro_personal.php">Nueva persona</a></li>
                            <li class="active"><a href="">Ver personal registrado</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Radios <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="registro_radios.php">Nuevo radio</a></li>
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
            <li class="active">Personal registrado</li>
        </ol>

        <div class="row">
            
            <!-- Article main content -->
            <article class="col-sm-9 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Personal registrado</h1>
                </header>
                    <div id="auditoria">
                        <table style="width:1800px; margin-top:0;" >
                          <tr>
                            <th style="text-align:center;">Cédula</th>
                            <th style="text-align:center;">Nombre</th>
                            <th style="text-align:center;">Apellido</th>
                            <th style="text-align:center;">Sexo</th>
                            <th style="text-align:center;">Teléfono</th>
                            <th style="text-align:center;">Unidad</th>
                            <th style="text-align:center;">Jerarquía</th>
                            <th style="text-align:center;">Promoción</th>
                            <th style="text-align:center;">Dirección</th>
                            <th style="text-align:center;">Operaciones</th>
                          </tr>
                          <?php

                          $personas = mysql_query("SELECT * FROM persona WHERE cedula != 00000000 ");

                          while ($row = mysql_fetch_assoc($personas))
                          {
                          ?>
                          <tr>
                            <td style="text-align:center;"><?=$row['cedula']?></td>
                            <td style="text-align:center;"><?=$row['nombre']?></td>
                            <td style="text-align:center;"><?=$row['apellido']?></td>
                            <td style="text-align:center;"><?=$row['sexo']?></td>
                            <td style="text-align:center;"><?=$row['telefono']?></td>
                            <td style="text-align:center;"><?=$row['unidad']?></td>
                            <td style="text-align:center;"><?=$row['jerarquia']?></td>
                            <td style="text-align:center;"><?=$row['promocion']?></td>
                            <td style="text-align:center;"><?=$row['direccion']?></td>
                            <td style="text-align:center;"><a href="registro_personal.php?cedula=<?=$row['cedula']?>">Actualizar</a> - <a href="../procesos/delete.php?category=persona&cedula=<?=$row['cedula']?>">Eliminar</a></td>
                          </tr>
                         <?php } ?>
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