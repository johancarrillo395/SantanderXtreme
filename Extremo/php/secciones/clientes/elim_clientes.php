<?php

if (!isset($_GET["id_cliente"]))
{
    exit();
}

$id_cliente = $_GET["id_cliente"];
include_once "../../bd.php";
$sentencia = $conexion->prepare("SELECT fun_delete_clientes( ? );");
$resultado = $sentencia->execute([$id_cliente]);
if ($resultado === true) {
    header("Location: listar_clientes.php");
} else {
    echo "Algo salió mal... Go back to the elemental school";
}