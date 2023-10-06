<?php
 

if (!isset($_GET["id_municipio"]))
{
	echo "No existe el Usuario a editar";
	exit();
}
 
$id_municipio = $_GET["id_municipio"];
include_once "../../bd.php";
$sentencia = $conexion->prepare("SELECT id_municipio,nom_municipio,cod_postal FROM municipios WHERE id_municipio = ?;");
$sentencia->execute([$id_municipio]);
$municipios = $sentencia->fetchObject();
if (!$municipios)
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
		<form action="update_municipio.php" method="POST">
			 
			<div class="mb-3">
      	<label for="id_servicio" class="form-label">ID Municipio </label>
      		<input value="<?php echo $municipios->id_municipio; ?>" readonly name="id_municipio" type="number" id="id_municipio" placeholder="ID Municipio "   class="form-control">
    	</div>

        <div class="mb-3">
      <label for="nom_municipio">Nombre de municipio</label>
      <input value="<?php echo $municipios->nom_municipio; ?>" required name="nom_municipio" type="text"
       id="nom_municipio" placeholder="Nombre de municipio" class="form-control">
    </div>
 
    <div class="mb-3">
      <label for="cod_postal">Código postal</label>
      <input value="<?php echo$municipios->cod_postal; ?>"  required name="cod_postal" type="number"
       id="cod_postal" placeholder="Código postal" class="form-control">
    </div>

   		 

			
			<button type="submit" class="btn btn-success">Guardar</button>
			<a href="./listar_municipio.php" class="btn btn-warning">Volver</a>
		</form>
	</div>
</div>
<?php include_once "../../templates/footer.php"?>