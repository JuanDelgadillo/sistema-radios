<?php

$servidor="localhost";
$basedatos="sistema_radios_policial";
$usuario="root";
$clave="salomon";


$conn = new PDO('mysql:host='.$servidor.';dbname='.$basedatos, $usuario, $clave);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM persona ";
$cedula= $conn->query($query)->fetchAll();
$cedu = count($cedula);

$query = "(SELECT * FROM `ultima_asignacion_radio`)";
$oficial= $conn->query($query)->fetchAll();
if ($oficial){$ofi= count($oficial);}else {$ofi= count($oficial);}

 

$query = "(SELECT * FROM `penultima_asignacion_radio`)";
$oficial_agregado= $conn->query($query)->fetchAll();
if ($oficial_agregado){$ofi_agregado= count($oficial_agregado);}else {$ofi_agregado= count($oficial_agregado);}

$query = "(SELECT * FROM `antepenultima_asignacion_radio`)";
$ante_penultima= $conn->query($query)->fetchAll();
if ($ante_penultima){$ant_penult= count($ante_penultima);}else {$ant_penult= count($ante_penultima);}

require_once ('../jpgraph/src/jpgraph.php');
require_once ('../jpgraph/src/jpgraph_bar.php');
 
 
require_once ("../jpgraph/src/jpgraph_pie.php");
 
// Se define el array de valores y el array de la leyenda
$datos = array($ofi,$ofi_agregado,$ant_penult);
$leyenda = array("Ultima asignacion","Penultima asignacion","Antepenultima asignacion");
 
//Se define el grafico
$grafico = new PieGraph(600,300);
 
//Definimos el titulo
$grafico->title->Set("GRAFICO DE ASIGNACIONES");
$grafico->title->SetFont(FF_FONT1,FS_BOLD);
 
//Añadimos el titulo y la leyenda
$p1 = new PiePlot($datos);
$p1->SetLegends($leyenda);
$p1->SetCenter(0.4);
 
//Se muestra el grafico
$grafico->Add($p1);
$grafico->Stroke();

 
 
 
 

?>
