<?php

session_start();

include "../config/conection.php";
extract($_REQUEST);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Sistema de control de radios</title>
  <style>
  
  h1{
    text-align: center;
  }

  table {
    margin:0 auto;
  }

  </style>

  <script>

  window.addEventListener("load",function(){
    window.print();
  },false);

  </script>
</head>
<body>
  <h1>Reporte de consulta</h1>
  <?php 
  if($tp == 1)
    {
        //var_dump($_REQUEST);
        $th = '<th style="text-align:center;">Cédula</th>
        <th style="text-align:center;background-color:gray;">Nombre</th>
        <th style="text-align:center;background-color:gray;">Apellido</th>
        <th style="text-align:center;background-color:gray;">Sexo</th>
        <th style="text-align:center;background-color:gray;">Tel&eacute;fono</th>
        <th style="text-align:center;background-color:gray;">Unidad</th>
        <th style="text-align:center;background-color:gray;">Jerarqu&iacute;a</th>
        <th style="text-align:center;background-color:gray;">Promoci&oacute;n</th>
        <th style="text-align:center;background-color:gray;">Direcci&oacute;n</th>';
        $ancho ="width:900px;";
    }
    elseif($tp == 2)
    {
        $th = '<th style="text-align:center;background-color:gray;">IDentificador (ID)</th>
        <th style="text-align:center;background-color:gray;">Activo fijo</th>
        <th style="text-align:center;background-color:gray;">Serial</th>
        <th style="text-align:center;background-color:gray;">Estado</th>
        <th style="text-align:center;background-color:gray;">M&oacute;delo</th>
        <th style="text-align:center;background-color:gray;">Observaci&oacute;n</th>';
        $ancho ="width:900px;";
    }
    elseif($tp == 3)
    {
        $th = '<th style="text-align:center;background-color:gray;">IDentificador (ID)</th>
        <th style="text-align:center;background-color:gray;">Activo fijo</th>
        <th style="text-align:center;background-color:gray;">Serial</th>
        <th style="text-align:center;background-color:gray;">Estado</th>
        <th style="text-align:center;background-color:gray;">M&oacute;delo</th>
        <th style="text-align:center;background-color:gray;">Observaci&oacute;n</th>
        <th style="text-align:center;background-color:gray;">Cedula - Ultima asignacion</th>
        <th style="text-align:center;background-color:gray;">Fecha - Ultima asignacion</th>
        <th style="text-align:center;background-color:gray;">Ultima asignacion</th>';
        $ancho ="width:900px;";
    }
    elseif($tp == 4)
    {
        $th = '<th style="text-align:center;background-color:gray;">IDentificador (ID)</th>
        <th style="text-align:center;background-color:gray;">Activo fijo</th>
        <th style="text-align:center;background-color:gray;">Serial</th>
        <th style="text-align:center;background-color:gray;">Estado</th>
        <th style="text-align:center;background-color:gray;">M&oacute;delo</th>
        <th style="text-align:center;background-color:gray;">Observaci&oacute;n</th>
        <th style="text-align:center;background-color:gray;">Cedula - Penultima asignacion</th>
        <th style="text-align:center;background-color:gray;">Fecha - Penultima asignacion</th>
        <th style="text-align:center;background-color:gray;">Penultima asignacion</th>';
        $ancho ="width:900px;";
    }
    elseif($tp == 5)
    {
        $th = '<th style="text-align:center;background-color:gray;">IDentificador (ID)</th>
        <th style="text-align:center;background-color:gray;">Activo fijo</th>
        <th style="text-align:center;background-color:gray;">Serial</th>
        <th style="text-align:center;background-color:gray;">Estado</th>
        <th style="text-align:center;background-color:gray;">M&oacute;delo</th>
        <th style="text-align:center;background-color:gray;">Observaci&oacute;n</th>
        <th style="text-align:center;background-color:gray;">Cedula - Antepenultima asignacion</th>
        <th style="text-align:center;background-color:gray;">Fecha - Antepenultima asignacion</th>
        <th style="text-align:center;background-color:gray;">Antepenultima asignacion</th>';
        $ancho ="width:900px;";
    }

  $consulta = mysql_query($_SESSION['textConsulta']);
  ?>
  <table style="<?=$ancho?> margin-top:0;" border="1" >
                          <tr>
                            <?=$th?>
                          </tr>
                            <?php while($row = mysql_fetch_assoc($consulta)){ ?>
                            <tr>
                            <?php if($tp == 1){ ?>
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
                            <?php if($tp == 2){ ?>
                            <td style="text-align:center;"><?=$row['radio_id']?></td>
                            <td style="text-align:center;"><?=$row['activo_fijo']?></td>
                            <td style="text-align:center;"><?=$row['serial_radio']?></td>
                            <td style="text-align:center;"><?=$row['estado_radio']?></td>
                            <td style="text-align:center;"><?=$row['modelo_radio']?></td>
                            <td style="text-align:center;"><?=$row['observacion']?></td>
                            <?php } ?>
                            <?php if($tp == 3){ ?>
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
                            <?php if($tp == 4){ ?>
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
                            <?php if($tp == 5){ ?>
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
                            <?php }  //End while ?>

                        </table>
</body>
</html>