<?php 

$contraseña         = "123456789";
$usuario            = "postgres";
$nombreBaseDeDatos  = "db_xtreme";
# Puede ser 127.0.0.1 o el nombre de tu equipo; o la IP de un servidor remoto
$rutaServidor = "127.0.0.1";
$puerto = "5432";

try 
{
   $conexion = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
   $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Conectado a la base de datos Postgresql";
} 

catch (Exception $e) 
{
   echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}


?>  

<?php

 