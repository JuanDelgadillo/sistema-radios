<?php

session_start();

include_once "../config/conection.php";

extract($_REQUEST);

if(isset($aceptar))
{
    $verificar_id_radio = mysql_query("SELECT * FROM radios WHERE radio_id = '$identificador_radio' ");

    if(mysql_num_rows($verificar_id_radio) == 0)
    {
        //var_dump($_REQUEST);
        $data_radio = mysql_query("INSERT INTO radios (radio_id, activo_fijo, serial_radio, estado_radio, modelo_radio, observacion) VALUES ('$identificador_radio','$activo_fijo','$serial','$estado','$modelo','$observacion') ");

        $_SESSION['menssage'] = "El radio ha sido registrado satisfactoriamente.";
        header("Location:../modulos/registro_radios.php");
        die();
    }
    else
    {
        $_SESSION['menssage'] = "El identificador del radio ID: $identificador_radio ya se encuentra registrado en el sistema.";
        header("Location:../modulos/registro_radios.php");
        die();
    }
}
else
{
    header("Location:../");
}

?>