<?php

if (!isset($_GET["id_tpservicio"]))
{
    exit();
}

$id_tpservicio = $_GET["id_tpservicio"];
include_once "../../bd.php";
$sentencia = $conexion->prepare("SELECT fun_delete_tpservicio( ? );");
$resultado = $sentencia->execute([$id_tpservicio ]);
if ($resultado === true) {
    header("Location: listar_tpservicio.php");
} else {
    echo "Algo salió mal... Go back to the elemental school";
}