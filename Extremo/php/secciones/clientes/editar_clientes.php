<?php
 

if (!isset($_GET["id_cliente"]))
{
	echo "No existe el Usuario a editar";
	exit();
}
 
$id_cliente = $_GET["id_cliente"];
include_once "../../bd.php";
$sentencia = $conexion->prepare("SELECT id_cliente,mail_cliente, pass_cliente,tel_cliente,cto_emerg FROM clientes WHERE id_cliente = ?;");
$sentencia->execute([$id_cliente]);
$cliente = $sentencia->fetchObject();
if (!$cliente)
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
		<form action="update_clientes.php" method="POST">
			 
			<div class="mb-3">
      	<label for="id_cliente" class="form-label">ID Cliente</label>
      		<input value="<?php echo $cliente->id_cliente; ?>" readonly name="id_cliente" type="number" id="id_cliente" placeholder="ID Cliente"  maxlength="15" class="form-control">
    	</div>

			<div class="mb-3">
      		 <label for="mail_cliente">Email</label>
			   <input value="<?php echo $cliente->mail_cliente; ?>" required name="mail_cliente" type="email" id="mail_cliente"  placeholder="E-mail Cliente" class="form-control">	  
            </div>

			 <div class="mb-3">
      			<label for="pass_cliente" class="form-label">Contraseña</label>
      			<input  value="<?php echo $cliente->pass_cliente; ?>" required  name="pass_cliente" type="password" id="pass_cliente"  placeholder="Contraseña"   class="form-control">
 		     </div>

			  <div class="mb-3">
      			<label for="tel_cliente" class="form-label">Telefono</label>
      			<input value="<?php echo $cliente->tel_cliente; ?>" required  name="tel_cliente" type="number"   id="tel_cliente" placeholder="Telefono" pattern="[0-9]{10}" class="form-control">
       		 </div>

			  <div class="mb-3">
      			<label for="cto_emerg" class="form-label">Contacto</label>
      			<input value="<?php echo $cliente->cto_emerg; ?>" required name="cto_emerg" type="number" id="cto_emerg" placeholder="Contacto"  pattern="[0-9]{10}" class="form-control">
			 </div>
   		 

			
			<button type="submit" class="btn btn-success">Guardar</button>
			<a href="./listar_clientes.php" class="btn btn-warning">Volver</a>
		</form>
	</div>
</div>
<?php include_once "../../templates/footer.php"?>