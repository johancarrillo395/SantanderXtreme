<?php

 

if (!isset($_GET["id_banco"]))
{
	echo "No existe el Usuario a editar";
	exit();
}
 
$id_banco = $_GET["id_banco"];
include_once "../../bd.php";
$sentencia = $conexion->prepare("SELECT id_banco,nom_banco,tipo_cuenta,ctabanc_proveedor FROM bancos  WHERE id_banco = ?;");
$sentencia->execute([$id_banco]);
$banco = $sentencia->fetchObject();
if (!$banco)
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
		<form action="update_bancos.php" method="POST">
 
      </div>
      <div class="mb-3">
          <label for="id_banco">ID Banco</label>
          <input value="<?php echo $banco->id_banco; ?>" readonly name="id_banco"
          id="id_banco" placeholder="ID Banco"   class="form-control">
       </div>

       <div class="mb-3">
         <label for="nom_banco">Nombre Banco</label>
         <input value="<?php echo $banco->nom_banco; ?>" required name="nom_banco"  
           id="nom_banco" placeholder="Nombre Banco"  class="form-control" >
       </div>

        <div class="mb-3">
          <label for="tipo_cuenta">Tipo de Cuenta</label>
            <select required class="form-control" name="tipo_cuenta" id="tipo_cuenta">
              <option value="">Seleccione</option>
              <option value="CA">Cuenta de Ahorro</option>
              <option value="CC">Cuenta Corriente</option>  
            </select>
        </div>

       <div class="mb-3">
         <label for="ctabanc_proveedor">Numero de cuenta</label>
         <input value="<?php echo $banco->ctabanc_proveedor; ?>"required name="ctabanc_proveedor"  
          id="ctabanc_proveedor" placeholder="Numero de cuenta"  class="form-control" >
          
       </div>
       </div> 
       <button type="submit" class="btn btn-success">Guardar</button>
			<a href="./listar_bancos.php" class="btn btn-warning">Volver</a>
 
		</form>
	</div>
</div>
<?php include_once "../../templates/footer.php"?>