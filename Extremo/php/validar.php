<?php

include_once("bd.php");

$USUARIO=$_POST["mail_cliente"];
$PASSWORD=$_POST["pass_cliente"];


$consulta = "SELECT * FROM clientes WHERE mail_cliente = '$USUARIO' AND  pass_cliente = '$PASSWORD' ";
$resultado = $conexion->query($consulta);

$filas = $resultado->rowCount();

if($filas>0){
    header("location:index.php");

}else{
    ?>
    <h1>ERROR DE AUTENTIFICACIÓN</h1>
    <?php
}







?>