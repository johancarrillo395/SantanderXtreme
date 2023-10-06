<?php

if (!isset($_GET["nit_proveedor"]))
{
    exit();
}

$nit_proveedor = $_GET["nit_proveedor"];
include_once "../../bd.php";
$sentencia = $conexion->prepare("SELECT fun_delete_proveedor( ? );");
$resultado = $sentencia->execute([$nit_proveedor]);
if ($resultado === true) {
    header("Location: listar_proveedores.php");
} else {
    echo "Algo salió mal... Go back to the elemental school";
}