 
<?php
if (!isset($_POST["nitproveedor"])    ||  
    !isset($_POST["nomproveedor"])    ||   
    !isset($_POST["dirproveedor"])    ||
    !isset($_POST["mailproveedor"])   ||
    !isset($_POST["telproveedor"])    ||
    !isset($_POST["cbanc1"])          ||
    !isset($_POST["cbanc2"])          ||
    !isset($_POST["municipio"])       ||
    !isset($_POST["banco"]))    
    {
    exit();
    }
#Si todo va bien, se ejecuta esta parte del código..., si no, nos jodimos

include_once "../../bd.php";
$nit         = $_POST["nitproveedor"];
$nombre      = $_POST["nomproveedor"];
$dirección   = $_POST["dirproveedor"];
$correo      = $_POST["mailproveedor"];
$teléfono    = $_POST["telproveedor"];
$bancaria    = $_POST["cbanc1"];
$bancaria2   = $_POST["cbanc2"];
$municipio   = $_POST["municipio"];
$banco       = $_POST["banco"];
/*
Al incluir el archivo "base_de_datos.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código
 */

$sentencia = $conexion->prepare("SELECT fun_insert_proveedor(?, ?, ?, ?, ?,?, ?, ?, ?);");
$resultado = $sentencia->execute([$nit,$nombre,$dirección,$correo,$teléfono,$bancaria,$bancaria2,$municipio,$banco]); # Pasar en el mismo orden de los ?
#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar*/
echo $resultado;
if ($resultado === true) {
    # Redireccionar a la lista
    echo "Registro Insertado";
	header("Location: listar_proveedores.php");
} else
    {
    echo "Registro NO Insertado";
    echo "Algo salió mal. Por favor verifica que la tabla exista";
    }