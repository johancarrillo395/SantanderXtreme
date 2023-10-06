<?php
 

if (!isset($_GET["id_servicio"]))
{
	echo "No existe el Usuario a editar";
	exit();
}
 
$id_servicio = $_GET["id_servicio"];
include_once "../../bd.php";
$sentencia = $conexion->prepare("SELECT id_servicio,nom_servicio,dispo_servicio, precio_servicio,precio_servicio FROM servicios WHERE id_servicio = ?;");
$sentencia->execute([$id_servicio]);
$servicio = $sentencia->fetchObject();
if (!$servicio)
{
    #No existe
    echo "¡No existe algún Usuario con ese ID!";
    exit();
}

#Si el usuario existe, se ejecuta esta parte del código
?>
<?php include_once "../../templates/header.php"?>
<div class="row">
	<div class="col-12">
		<h1>Editar</h1>
		<form action="update_servicio.php" method="POST">

    <div class="mb-3">
      	<label for="id_servicio" class="form-label">Servicio</label>
      		<input value="<?php echo $servicio->id_servicio; ?>" readonly name="id_servicio" type="number" id="id_servicio" placeholder="ID Servicio" class="form-control">
    	</div>

      

   <div class="mb-3">
      <label for="nom_servicio">Nombre Servicio</label>
        <input  value="<?php echo $servicio->nom_servicio; ?>" required name="nom_servicio" type="text"
        id="nom_servicio" placeholder="Nombre Servicio"   class="form-control"  >
    </div>

    <div class="mb-3">
     <label for="dispo_servicio">Disponibilidad</label>
        <select class="form-control" id=" dispo_servicio" name="dispo_servicio">
        <option value="1">Disponible</option>
        <option value="0">No disponible</option>
  </select>
</div>

			<div class="mb-3">
      <label for="deta_servicio">Detalle</label>
      <textarea  required name="deta_servicio" id="deta_servicio" rows="3" placeholder="Detalle Servicio"  class="form-control"></textarea>
    </div>

			    <div class="mb-3">
      <label for="precio_servicio">Precio</label>
      <input value="<?php echo $servicio->precio_servicio; ?>" required   name="precio_servicio" type="number" 
        id="precio_servicio"  step="1000"  placeholder="Precio en COP"   class="form-control" >
    </div>

			
			<button type="submit" class="btn btn-success">Guardar</button>
			<a href="./listar_servicios.php" class="btn btn-warning">Volver</a>
		</form>
	</div>
</div>
<?php include_once "../../templates/footer.php"?>