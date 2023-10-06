<?php 

$contraseña         = "PgSena2023";
$usuario            = "postgres";
$nombreBaseDeDatos  = "db_ruttero";
# Puede ser 127.0.0.1 o el nombre de tu equipo; o la IP de un servidor remoto
$rutaServidor = "127.0.0.1";
$puerto = "5432";
try {
   $base_de_datos = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
   $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Conectado a heroku postgresql";
} catch (Exception $e) {
   echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}


?>  