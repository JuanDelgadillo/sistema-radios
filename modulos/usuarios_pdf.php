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
  <h1>Usuarios registrados</h1>
  <?php 
  $user = mysql_query("SELECT * FROM users ");
  $privileges = ['1'=>'Administrador','2'=>'Invitado'];
      ?>
    <table border="1" width="900px">
          <tr>
            <th style="text-align:center;background-color:gray;">C&eacute;dula</th>
            <th style="text-align:center;background-color:gray;">Nombre de usuario</th>
            <th style="text-align:center;background-color:gray;">Contrase&ntilde;a</th>
            <th style="text-align:center;background-color:gray;">Privilegio</th>
          </tr>
      <?php while($row = mysql_fetch_assoc($user))
      {
        ?>
              <tr>
                <td style="text-align:center;"><?=$row['cedula']?></td>
                <td style="text-align:center;"><?=$row['user']?></td>
                <td style="text-align:center;"><?=$row['password']?></td>
                <td style="text-align:center;"><?=$privileges[$row['rol']]?></td>
              </tr>
        <?php
      } ?>
        </table>
</body>
</html>