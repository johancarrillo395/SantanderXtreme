<?php

if (!isset($_GET["id_municipio"]))
{
    exit();
}

$id_municipio = $_GET["id_municipio"];
include_once "../../bd.php";
$sentencia = $conexion->prepare("SELECT fun_delete_municipio( ? );");
$resultado = $sentencia->execute([$id_municipio]);
if ($resultado === true) {
    header("Location: listar_municipio.php");
} else {
    echo "Algo salió mal... Go back to the elemental school";
}