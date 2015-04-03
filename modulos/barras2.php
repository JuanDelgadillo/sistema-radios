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

$query = "(SELECT * FROM `radios` WHERE estado_radio = 'APAGADO')";
$oficial= $conn->query($query)->fetchAll();
if ($oficial){$ofi= count($oficial);}else {$ofi= count($oficial);}

 

$query = "(SELECT * FROM `radios` WHERE estado_radio  = 'AVERIADO'  )";
$oficial_agregado= $conn->query($query)->fetchAll();
if ($oficial_agregado){$ofi_agregado= count($oficial_agregado);}else {$ofi_agregado= count($oficial_agregado);}


$query = "(SELECT * FROM `radios` WHERE estado_radio   = 'EXTRAVIADO'   )";
$oficial_jefe= $conn->query($query)->fetchAll();
if ($oficial_jefe){$ofi_jefe= count($oficial_jefe);}else {$ofi_jefe= count($oficial_jefe);}


$query = "(SELECT * FROM `radios` WHERE estado_radio  = 'OPERATIVO'   )";
$supervisor_agregado= $conn->query($query)->fetchAll();
if ($supervisor_agregado){$sup_agregado= count($supervisor_agregado);}else {$sup_agregado= count($supervisor_agregado);}

$query = "(SELECT * FROM `radios` WHERE estado_radio  = 'PARA DESINCORPORAR'   )";
$supervisor= $conn->query($query)->fetchAll();
if ($supervisor){$sup= count($supervisor);}else {$sup= count($supervisor);}

$query = "(SELECT * FROM `radios` WHERE estado_radio  = 'REPROGRAMAR'   )";
$supervisor_jefe= $conn->query($query)->fetchAll();
if ($supervisor_jefe){$sup_jefe= count($supervisor_jefe);}else {$sup_jefe= count($supervisor_jefe);}

$query = "(SELECT * FROM `radios` WHERE estado_radio  = 'REVISION'   )";
$t_s_u= $conn->query($query)->fetchAll();
if ($t_s_u){$tsu= count($t_s_u);}else {$tsu= count($t_s_u);}

$query = "(SELECT * FROM `radios` WHERE estado_radio  = 'SIN INFORMACION'   )";
$sin_informacion= $conn->query($query)->fetchAll();
if ($sin_informacion){$sin_inform= count($sin_informacion);}else {$sin_inform= count($sin_informacion);}

$query = "(SELECT * FROM `radios` WHERE estado_radio  = 'VERIFICAR'   )";
$verificar= $conn->query($query)->fetchAll();
if ($verificar){$verif= count($verificar);}else {$verif= count($verificar);}

require_once ('../jpgraph/src/jpgraph.php');
require_once ('../jpgraph/src/jpgraph_bar.php');
 
 
require_once ("../jpgraph/src/jpgraph_pie.php");
 
// Se define el array de valores y el array de la leyenda
$datos = array($ofi,$ofi_agregado,$ofi_jefe,$sup_agregado,$sup,$sup_jefe,$tsu,$sin_inform,$verif);
$leyenda = array("Apagado","Averiado","Extraviado","Operativo","Para desincorporar","Reprogramar","Revision","Sin informacion","Verificar");
 
//Se define el grafico
$grafico = new PieGraph(600,300);
 
//Definimos el titulo
$grafico->title->Set("GRAFICO DE RADIOS");
$grafico->title->SetFont(FF_FONT1,FS_BOLD);
 
//Añadimos el titulo y la leyenda
$p1 = new PiePlot($datos);
$p1->SetLegends($leyenda);
$p1->SetCenter(0.4);
 
//Se muestra el grafico
$grafico->Add($p1);
$grafico->Stroke();

 
 
 
 

?>
