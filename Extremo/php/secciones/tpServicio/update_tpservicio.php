 

<?php

#Salir si alguno de los datos no está presente
if (
    !isset($_POST["id_tpservicio"])     ||   
    !isset($_POST["nom_tpservicio"]))  
  {
    exit();
}

#Si todo va bien, se ejecuta esta parte del código...

include_once "../../bd.php";
$idtpservi   = $_POST["id_tpservicio"];
$nomtpservi  = $_POST["nom_tpservicio"];

$sentencia = $conexion->prepare("SELECT fun_update_tpservicio(?,?);");

$resultado = $sentencia->execute([$idtpservi,$nomtpservi]); # Pasar en el mismo orden de los ?
if ($resultado === true) 
{
    header("Location:listar_tpservicio.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del clientes";
}