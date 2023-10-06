 

<?php

#Salir si alguno de los datos no está presente
if (!isset($_POST["id_cliente"])     ||   
    !isset($_POST["mail_cliente"])   ||    
    !isset($_POST["pass_cliente"])   ||
    !isset($_POST["tel_cliente"])    ||  
    !isset($_POST["cto_emerg"]))  
  {
    exit();
}

#Si todo va bien, se ejecuta esta parte del código...

include_once "../../bd.php";
$idCliente   = $_POST["id_cliente"];
$email       = $_POST["mail_cliente"];
$password    = $_POST["pass_cliente"];
$telefono    = $_POST["tel_cliente"];
$contacto    = $_POST["cto_emerg"];


$sentencia = $conexion->prepare("SELECT fun_update_clientes(?,?,?,?,?);");

$resultado = $sentencia->execute([$idCliente,$email,$password,$telefono,$contacto ]); # Pasar en el mismo orden de los ?
if ($resultado === true) 
{
    header("Location:listar_clientes.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del clientes";
}