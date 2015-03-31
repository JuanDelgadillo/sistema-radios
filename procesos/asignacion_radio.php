<?php

session_start();

include_once "../config/conection.php";

extract($_REQUEST);

if(isset($aceptar))
{
	$fecha = date("Y-m-d");
	$verificar_ultima_asignacion = mysql_query("SELECT * FROM ultima_asignacion_radio WHERE id_radio = '$id_radio' ");
	$verificar_penultima_asignacion = mysql_query("SELECT * FROM penultima_asignacion_radio WHERE id_radio = '$id_radio' ");
	$verificar_antepenultima_asignacion = mysql_query("SELECT * FROM antepenultima_asignacion_radio WHERE id_radio = '$id_radio' ");
	$ultima_asignacion = mysql_fetch_array($verificar_ultima_asignacion);
	$penultima_asignacion = mysql_fetch_array($verificar_penultima_asignacion);
	if(mysql_num_rows($verificar_ultima_asignacion) == 0)
	{
		$nueva_asignacion = mysql_query("INSERT INTO ultima_asignacion_radio (id_radio, cedula_ultima, fecha_ultima_asignacion, ultima_asignacion) VALUES ('$id_radio','$cedula_asignacion','$fecha','$ubicacion_ultima_asignacion') ");
		$_SESSION['menssage'] = "El radio ha sido asignado satisfactoriamente.";
		header("Location:../modulos/consultar_registros.php");
		die();
	}
	elseif(mysql_num_rows($verificar_penultima_asignacion) == 0)
	{

		$movimiento_ultima_asignacion = mysql_query("INSERT INTO penultima_asignacion_radio (id_radio, cedula_penultima, fecha_penultima_asignacion, penultima_asignacion)  VALUES ('$id_radio','$ultima_asignacion[1]', '$ultima_asignacion[2]', '$ultima_asignacion[3]') ")or die(mysql_error());
		$nueva_asignacion = mysql_query("UPDATE ultima_asignacion_radio SET cedula_ultima = '$cedula_asignacion', fecha_ultima_asignacion = '$fecha', ultima_asignacion = '$ubicacion_ultima_asignacion' WHERE  id_radio = '$id_radio' ");
		$_SESSION['menssage'] = "El radio ha sido asignado satisfactoriamente.";
		header("Location:../modulos/consultar_registros.php");
		die();
	}
	elseif(mysql_num_rows($verificar_antepenultima_asignacion) == 0)
	{
		$movimiento_penultima_asignacion = mysql_query("INSERT INTO antepenultima_asignacion_radio (id_radio, cedula_antepenultima, fecha_antepenultima_asignacion, antepenultima_asignacion) VALUES ('$id_radio','$penultima_asignacion[1]','$penultima_asignacion[2]','$penultima_asignacion[3]') ");
		$movimiento_ultima_asignacion = mysql_query("UPDATE penultima_asignacion_radio SET cedula_penultima = '$ultima_asignacion[1]', fecha_penultima_asignacion = '$ultima_asignacion[2]', penultima_asignacion = '$ultima_asignacion[3]' WHERE id_radio = '$id_radio' ");
		$nueva_asignacion = mysql_query("UPDATE ultima_asignacion_radio SET cedula_ultima = '$cedula_asignacion', fecha_ultima_asignacion = '$fecha', ultima_asignacion = '$ubicacion_ultima_asignacion' WHERE  id_radio = '$id_radio' ");
		$_SESSION['menssage'] = "El radio ha sido asignado satisfactoriamente.";
		header("Location:../modulos/consultar_registros.php");
		die();
	}
	else
	{
		$movimiento_penultima_asignacion = mysql_query("UPDATE antepenultima_asignacion_radio SET cedula_antepenultima = '".$penultima_asignacion['cedula']."', fecha_antepenultima_asignacion = '".$penultima_asignacion['fecha_penultima_asignacion']."', antepenultima_asignacion = '".$penultima_asignacion['penultima_asignacion']."' WHERE id_radio = '$id_radio' ");
		$movimiento_ultima_asignacion = mysql_query("UPDATE penultima_asignacion_radio SET cedula_penultima = '$ultima_asignacion[1]', fecha_penultima_asignacion = '$ultima_asignacion[2]', penultima_asignacion = '$ultima_asignacion[3]' WHERE id_radio = '$id_radio' ");
		$nueva_asignacion = mysql_query("UPDATE ultima_asignacion_radio SET cedula_ultima = '$cedula_asignacion', fecha_ultima_asignacion = '$fecha', ultima_asignacion = '$ubicacion_ultima_asignacion' WHERE  id_radio = '$id_radio' ");
		$_SESSION['menssage'] = "El radio ha sido asignado satisfactoriamente.";
		header("Location:../modulos/consultar_registros.php");
		die();
	}

	//var_dump($_REQUEST);

}
else
{
	header("Location:../");
}


?>