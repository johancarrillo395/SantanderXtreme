 
<?php
if (!isset($_POST["ndocumento"])     ||  
    !isset($_POST["tpdoc"])   ||   
    !isset($_POST["nombres"])    ||
    !isset($_POST["apellidos"])    ||
    !isset($_POST["nacimiento"])    ||
    !isset($_POST["mail"])      ||
    !isset($_POST["password"])    ||
    !isset($_POST["tel"])    ||
    !isset($_POST["contacto"]))    
    {
    exit();
    }
#Si todo va bien, se ejecuta esta parte del código..., si no, nos jodimos

include_once "../../bd.php";
$idCliente   = $_POST["ndocumento"];
$documento   = $_POST["tpdoc"];
$nombres     = $_POST["nombres"];
$apellidos   = $_POST["apellidos"];
$nacimiento  = $_POST["nacimiento"];
$email       = $_POST["mail"];
$password    = $_POST["password"];
$telefono    = $_POST["tel"];
$contacto    = $_POST["contacto"];
/*
Al incluir el archivo "base_de_datos.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código
 */

$sentencia = $conexion->prepare("SELECT fun_insert_clientes(?, ?, ?, ?, ?,?, ?, ?, ?);");
$resultado = $sentencia->execute([$idCliente,$documento,$nombres ,$apellidos,$nacimiento,$email,$password,$telefono,$contacto ]); # Pasar en el mismo orden de los ?
#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar*/
echo $resultado;
if ($resultado === true) {
    # Redireccionar a la lista
    echo "Registro Insertado";
	header("Location: listar_clientes.php");
} else
    {
    echo "Registro NO Insertado";
    echo "Algo salió mal. Por favor verifica que la tabla exista";
    }