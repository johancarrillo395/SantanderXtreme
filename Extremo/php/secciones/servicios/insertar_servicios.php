 
<?php
if (!isset($_POST["tpservicio"])    ||
    !isset($_POST["nomservicio"])    ||
    !isset($_POST["dispServicio"])   ||
    !isset($_POST["detservicio"])    ||
    !isset($_POST["pcservicio"]))    
    {
    #exit();
    echo"positivo para cocaina";
    }
#Si todo va bien, se ejecuta esta parte del código..., si no, nos jodimos

include_once "../../bd.php";
$tpservi    =$_POST["tpservicio"];
$nomservi  = $_POST["nomservicio"];
$dispservi = $_POST["dispServicio"];
$detservi  = $_POST["detservicio"];
$pcservi   = $_POST["pcservicio"];
echo $tpservi;
/*
Al incluir el archivo "base_de_datos.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código
 */

$sentencia = $conexion->prepare("SELECT fun_insert_servicios(?, ?, ?, ?,?);");
$resultado = $sentencia->execute([$tpservi,$nomservi,$dispservi,$detservi,$pcservi]); # Pasar en el mismo orden de los ?
#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar*/
echo $resultado;
if ($resultado === true) {
    # Redireccionar a la lista
    echo "Registro Insertado";
	header("Location: listar_servicios.php");
} else
    {
    echo "Registro NO Insertado";
    echo "Algo salió mal. Por favor verifica que la tabla exista";
    }