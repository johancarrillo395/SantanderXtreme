 

<?php

#Salir si alguno de los datos no está presente
if (!isset($_POST["id_municipio"])       || 
    !isset($_POST["nom_municipio"])      || 
    !isset($_POST["cod_postal"]))  
  {
    exit();
}

#Si todo va bien, se ejecuta esta parte del código...

include_once "../../bd.php";
$id_municipio  = $_POST["id_municipio"];
$municipio     = $_POST["nom_municipio"];
$postal        = $_POST["cod_postal"];
 

$sentencia = $conexion->prepare("SELECT  fun_update_municipios(? , ? , ?);");
$resultado = $sentencia->execute([$id_municipio,$municipio,$postal]); # Pasar en el mismo orden de los ?
if ($resultado === true) 
{
    header("Location:listar_municipio.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del clientes";
}

 
  
 