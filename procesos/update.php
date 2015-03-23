<?php

session_start();

include_once "../config/conection.php";

extract($_REQUEST);

if(isset($category))
{
    if($category == "persona")
    {
       if($cedula_get != $cedula)
       {
            $verificar_cedula = mysql_query("SELECT * FROM persona WHERE cedula = '$cedula' ");

            if(mysql_num_rows($verificar_cedula) != 0)
            {
                $_SESSION['menssage'] = "La cedula $cedula ya se encuentra registrada en el sistema.";
                header("Location:../modulos/registro_personal.php?cedula=".$cedula_get);
                die();  
            }
       }
       else
       {
            $update_persona = mysql_query("UPDATE persona SET cedula = '$cedula', nombre = '$nombre', apellido = '$apellido', sexo = '$sexo', telefono = '$telefono', unidad = '$unidad', jerarquia = '$jerarquia', promocion = '$promocion', direccion = '$direccion' WHERE cedula = '$cedula' ");
            
            $_SESSION['menssage'] = "La información de la persona se actualizo satisfactoriamente.";
            header("Location:../modulos/personal_registrado.php");
            die(); 
            var_dump($_REQUEST);
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