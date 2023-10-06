<?php

 

if (!isset($_GET["id_tpservicio"]))
{
	echo "No existe el Usuario a editar";
	exit();
}
 
$id_tpservicio = $_GET["id_tpservicio"];
include_once "../../bd.php";
$sentencia = $conexion->prepare("SELECT id_tpservicio,nom_tpservicio FROM tipo_servicio  WHERE id_tpservicio = ?;");
$sentencia->execute([$id_tpservicio]);
$tpservicio = $sentencia->fetchObject();
if (!$tpservicio)
{
    #No existe
    echo "¡No existe algún Usuario con ese ID!";
    exit();
}

#Si el usuario existe, se ejecuta esta parte del código
?>
<?php include_once "../../templates/header.php"?>
</br>
<div class="row">
	<div class="col-12">
		<h1>Editar</h1>
		<form action="update_tpservicio.php" method="POST">

      <div class="mb-3">
      <label for="id_tpservicio">ID Tipo Servicio</label>
      <input value="<?php echo $tpservicio->id_tpservicio; ?>" readonly  name="id_tpservicio"  
       id="id_tpservicio" placeholder="ID Tipo Servicio" class="form-control">
      </div>

      <div class="mb-3">
        <label for="nom_tpservicio" >Nombre Tipo Servicio</label>
           <input value="<?php echo $tpservicio->nom_tpservicio; ?>" required  name="nom_tpservicio"       type="text" id="nom_tpservicio" placeholder="Nombre Tipo de Servicio"  class="form-control">
           
      </div>
      <button type="submit" class="btn btn-success">Guardar</button>
			<a href="./listar_tpservicio.php" class="btn btn-warning">Volver</a>
		</form>
	</div>
</div>
<?php include_once "../../templates/footer.php"?>