<?php
header("Content-type: application/vnd.ms-excel; name='excel'");
header("Content-Disposition: filename=reporte.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<?php
@session_start();
ini_set("display_errors", 0);
include_once "../config/conection.php";
extract($_REQUEST);
if($category == "personas")
{
    $persona = mysql_query("SELECT * FROM persona WHERE cedula != 00000000 ");
      ?>
    <table border="1" width="1200px">
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
                <td style="text-align:center;"><?=utf8_decode($row['cedula'])?></td>
                <td style="text-align:center;"><?=utf8_decode($row['nombre'])?></td>
                <td style="text-align:center;"><?=utf8_decode($row['apellido'])?></td>
                <td style="text-align:center;"><?=utf8_decode($row['sexo'])?></td>
                <td style="text-align:center;"><?=utf8_decode($row['telefono'])?></td>
                <td style="text-align:center;"><?=utf8_decode($row['unidad'])?></td>
                <td style="text-align:center;"><?=utf8_decode($row['jerarquia'])?></td>
                <td style="text-align:center;"><?=utf8_decode($row['promocion'])?></td>
                <td style="text-align:center;"><?=utf8_decode($row['direccion'])?></td>
              </tr>
        <?php
      } ?>
        </table>
<?php 
}
elseif($category == "radios")
{
  $radio = mysql_query("SELECT * FROM radios ");
      ?>
    <table border="1" width="1200px">
          <tr>
            <th style="text-align:center;background-color:gray;">IDentificador (ID)</th>
            <th style="text-align:center;background-color:gray;">Activo fijo</th>
            <th style="text-align:center;background-color:gray;">Serial</th>
            <th style="text-align:center;background-color:gray;">Estado</th>
            <th style="text-align:center;background-color:gray;">M&oacute;delo</th>
            <th style="text-align:center;background-color:gray;">Observaci&oacute;n</th>
            <th style="text-align:center;background-color:gray;">C&eacute;dula - Ultima asignaci&oacute;n</th>
            <th style="text-align:center;background-color:gray;">Fecha - Ultima asignaci&oacute;n</th>
            <th style="text-align:center;background-color:gray;">Ultima asignaci&oacute;n</th>
            <th style="text-align:center;background-color:gray;">C&eacute;dula - Penultima asignaci&oacute;n</th>
            <th style="text-align:center;background-color:gray;">Fecha - Penultima asignaci&oacute;n</th>
            <th style="text-align:center;background-color:gray;">Penultima asignacion</th>
            <th style="text-align:center;background-color:gray;">C&eacute;dula - Antepenultima asignaci&oacute;n</th>
            <th style="text-align:center;background-color:gray;">Fecha - Antepenultima asignaci&oacute;n</th>
            <th style="text-align:center;background-color:gray;">Antepenultima asignaci&oacute;n</th>
              </tr>
      <?php while($row = mysql_fetch_assoc($radio))
      {
        $ultima_asignacion = mysql_fetch_assoc(mysql_query("SELECT * FROM ultima_asignacion_radio WHERE id_radio = '".$row['id_radio']."' "));
        $penultima_asignacion = mysql_fetch_assoc(mysql_query("SELECT * FROM penultima_asignacion_radio WHERE id_radio = '".$row['id_radio']."' "));
        $antepenultima_asignacion = mysql_fetch_assoc(mysql_query("SELECT * FROM antepenultima_asignacion_radio WHERE id_radio = '".$row['id_radio']."' "));
        ?>
              <tr>
                <td style="text-align:center;"><?=$row['radio_id']?></td>
                <td style="text-align:center;"><?=$row['activo_fijo']?></td>
                <td style="text-align:center;"><?=$row['serial_radio']?></td>
                <td style="text-align:center;"><?=$row['estado_radio']?></td>
                <td style="text-align:center;"><?=$row['modelo_radio']?></td>
                <td style="text-align:center;"><?=$row['observacion']?></td>
                <td style="text-align:center;"><?=$ultima_asignacion['cedula']?></td>
                <td style="text-align:center;"><?=$ultima_asignacion['fecha_ultima_asignacion']?></td>
                <td style="text-align:center;"><?=$ultima_asignacion['ultima_asignacion']?></td>
                <td style="text-align:center;"><?=$penultima_asignacion['cedula']?></td>
                <td style="text-align:center;"><?=$penultima_asignacion['fecha_penultima_asignacion']?></td>
                <td style="text-align:center;"><?=$penultima_asignacion['penultima_asignacion']?></td>
                <td style="text-align:center;"><?=$antepenultima_asignacion['cedula']?></td>
                <td style="text-align:center;"><?=$antepenultima_asignacion['fecha_antepenultima_asignacion']?></td>
                <td style="text-align:center;"><?=$antepenultima_asignacion['antepenultima_asignacion']?></td>
              </tr>
        <?php
      } ?>
        </table>
        <?php
}
elseif($category == "users")
{
  $user = mysql_query("SELECT * FROM users ");
  $privileges = ['1'=>'Administrador','2'=>'Invitado'];
      ?>
    <table border="1" width="1200px">
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
<?php 
}
elseif($category == "consulta")
{
  ?>
  <?php
}
?>