<?php

session_start();

include "../config/conection.php";

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
  <h1>Personal registrado</h1>
  <?php 
  $persona = mysql_query("SELECT * FROM persona WHERE cedula != 00000000 ");
      ?>
    <table border="1" width="900px">
          <tr>
                <th style="text-align:center;background-color:gray;">C&eacute;dula</th>
                <th style="text-align:center;background-color:gray;">Nombre</th>
                <th style="text-align:center;background-color:gray;">Apellido</th>
                <th style="text-align:center;background-color:gray;">Sexo</th>
                <th style="text-align:center;background-color:gray;">Tel&eacute;fono</th>
                <th style="text-align:center;background-color:gray;">Unidad</th>
                <th style="text-align:center;background-color:gray;">Jerarqu&iacute;a</th>
                <th style="text-align:center;background-color:gray;">Promoci&oacute;n</th>
                <th style="text-align:center;background-color:gray;">Direcci&oacute;n</th>
              </tr>
      <?php while($row = mysql_fetch_assoc($persona))
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
              </tr>
        <?php
      } ?>
        </table>
</body>
</html>