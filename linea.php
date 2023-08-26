<?php

require_once 'modelo/demostracion.php';
require_once 'modelo/linea.php';
require_once 'modelo/RespuestaLInea.php';
require_once 'modelos/tasa.php';


header('Content-Type: application/json');

$d = new demostracion();
$d-> $codigo = 1;
$d-> $descrpcion = 'DNI';

$l= new linea();
$l-> $id= 222;
$l-> $codigo= 752;
$l-> $demostracion = $d;
$l-> $tasa = $t;
$l-> $tope = 250000;

$rl = new RespuestaLInea();
$rl-> $linea = '$l';
$rl-> $contiene