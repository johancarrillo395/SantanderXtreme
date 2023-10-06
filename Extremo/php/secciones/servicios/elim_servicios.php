<?php

if (!isset($_GET["id_servicio"]))
{
    exit();
}

$servicio = $_GET["id_servicio"];
include_once "../../bd.php";
$sentencia = $conexion->prepare("SELECT fun_delete_servicio( ? );");
$resultado = $sentencia->execute([$servicio ]);
if ($resultado === true) {
    header("Location: listar_servicios.php");
} else {
    echo "Algo salió mal... Go back to the elemental school";
}