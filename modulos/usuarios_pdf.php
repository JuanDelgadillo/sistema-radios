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
    //window.print();
  },false);

  </script>
</head>
<body>
  <h1>Usuarios registrados</h1>
  <?php 
  $radio = mysql_query("SELECT * FROM radios ");
      ?>
    <table border="1" width="900px">
          <tr>
            <th style="text-align:center;background-color:gray;">IDentificador (ID)</th>
            <th style="text-align:center;background-color:gray;">Activo fijo</th>
            <th style="text-align:center;background-color:gray;">Serial</th>
            <th style="text-align:center;background-color:gray;">Estado</th>
            <th style="text-align:center;background-color:gray;">M&oacute;delo</th>
            <th style="text-align:center;background-color:gray;">Observaci&oacute;n</th>
              </tr>
      <?php while($row = mysql_fetch_assoc($radio))
      {
        ?>
              <tr>
                <td style="text-align:center;"><?=$row['radio_id']?></td>
                <td style="text-align:center;"><?=$row['activo_fijo']?></td>
                <td style="text-align:center;"><?=$row['serial_radio']?></td>
                <td style="text-align:center;"><?=$row['estado_radio']?></td>
                <td style="text-align:center;"><?=$row['modelo_radio']?></td>
                <td style="text-align:center;"><?=$row['observacion']?></td>
              </tr>
        <?php
      } ?>
        </table>
</body>
</html>