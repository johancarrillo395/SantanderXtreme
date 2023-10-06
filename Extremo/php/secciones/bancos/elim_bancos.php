<?php

if (!isset($_GET["id_banco"]))
{
    exit();
}

$id_banco = $_GET["id_banco"];
include_once "../../bd.php";
$sentencia = $conexion->prepare("SELECT fun_delete_bancos( ? );");
$resultado = $sentencia->execute([$id_banco ]);
if ($resultado === true) {
    header("Location: listar_bancos.php");
} else {
    echo "Algo salió mal... Go back to the elemental school";
}