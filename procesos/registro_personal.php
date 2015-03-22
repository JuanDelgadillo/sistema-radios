<?php

session_start();

include_once "../config/conection.php";

extract($_REQUEST);

if(isset($aceptar))
{
    //var_dump($_REQUEST);
    $verificar_cedula = mysql_query("SELECT * FROM persona WHERE cedula = '$cedula' ");

    if(mysql_num_rows($verificar_cedula) == 0)
    {
        $data_persona = mysql_query("INSERT INTO persona (cedula, nombre, apellido, sexo, telefono, unidad, jerarquia, promocion, direccion) VALUES ('$cedula','$nombre','$apellido','$sexo','$telefono','$unidad','$jerarquia','$promocion','$direccion') ");

        $password = base64_encode($cedula);

        $data_user = mysql_query("INSERT INTO users (cedula, user, password, rol) VALUES ('$cedula','$cedula','$password', 2) ");
    }
    else
    {
        $_SESSION['menssage'] = "La cedula $cedula ya se encuentra registrada en el sistema.";
        header("Location:../modulos/registro_personal.php");
        die();
    }
}
else
{
    header("Location:../");
}

?>