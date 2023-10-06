 

<?php

#Salir si alguno de los datos no está presente
if (!isset($_POST["id_servicio"])       || 
    !isset($_POST["nom_servicio"])      || 
    !isset($_POST["dispo_servicio"])    ||
    !isset($_POST["deta_servicio"])     || 
    !isset($_POST["precio_servicio"]))  
  {
    exit();
}

#Si todo va bien, se ejecuta esta parte del código...

include_once "../../bd.php";
$id_servicio  = $_POST["id_servicio"];
$nom_servicio = $_POST["nom_servicio"];
$dispservi    = $_POST["dispo_servicio"];
$detservi     = $_POST["deta_servicio"];
$pcservi      = $_POST["precio_servicio"]; 

$sentencia = $conexion->prepare("SELECT  fun_update_servicios(?,?,?,?,?);");
$resultado = $sentencia->execute([$id_servicio,$nom_servicio,$dispservi,$detservi,$pcservi ]); # Pasar en el mismo orden de los ?
if ($resultado === true) 
{
    header("Location:listar_servicios.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del clientes";
}

 
 
 
 