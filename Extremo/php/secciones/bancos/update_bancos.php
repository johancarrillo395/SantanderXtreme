 

<?php

#Salir si alguno de los datos no está presente
if (!isset($_POST["id_banco"])       || 
    !isset($_POST["nom_banco"])      ||
    !isset($_POST["tipo_cuenta"])    ||
    !isset($_POST["ctabanc_proveedor"]))  
  {
    exit();
}

#Si todo va bien, se ejecuta esta parte del código...

include_once "../../bd.php";
$id_banco            = $_POST["id_banco"];
$nom_banco           = $_POST["nom_banco"];
$tipo_cuenta         = $_POST["tipo_cuenta"];
$ctabanc_proveedor   = $_POST["ctabanc_proveedor"];
 

$sentencia = $conexion->prepare("SELECT  fun_update_bancos(?,?,?,?);");
$resultado = $sentencia->execute([$id_banco,$nom_banco,$tipo_cuenta,$ctabanc_proveedor]); # Pasar en el mismo orden de los ?
if ($resultado === true) 
{
    header("Location:listar_bancos.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del clientes";
}

 
  
  

 
 
  
 