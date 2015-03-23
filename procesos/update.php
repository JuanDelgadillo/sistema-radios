<?php

session_start();

include_once "../config/conection.php";

extract($_REQUEST);

if(isset($category))
{
    var_dump($_REQUEST);
    if($category == "persona")
    {
        $verificar_persona_ultima_asignacion = mysql_query("SELECT * FROM ultima_asignacion_radio WHERE cedula = '$cedula' ");
        $verificar_persona_penultima_asignacion = mysql_query("SELECT * FROM penultima_asignacion_radio WHERE cedula = '$cedula' ");
        $verificar_persona_antepenultima_asignacion = mysql_query("SELECT * FROM antepenultima_asignacion_radio WHERE cedula = '$cedula' ");

        if(mysql_num_rows($verificar_persona_ultima_asignacion) == 0 && mysql_num_rows($verificar_persona_penultima_asignacion) == 0 && mysql_num_rows($verificar_persona_antepenultima_asignacion) == 0)
        {
            $delete_persona = mysql_query("DELETE FROM persona WHERE cedula = '$cedula' ");
            $_SESSION['menssage'] = "La persona ha sido eliminada satisfactoriamente.";
            header("Location:../modulos/personal_registrado.php");
        }
        else
        {
            $_SESSION['menssage'] = "La persona no se puede eliminar ya que posee un radio asignado en el historico del sistema.";
            header("Location:../modulos/personal_registrado.php");   
        }
    }
    elseif($category == "radio")
    {
        
    }
}
else
{
    header("Location:../");
}


?>