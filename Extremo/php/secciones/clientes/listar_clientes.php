<?php include("../../templates/header.php"); ?>

</br>

<?php

include_once "../../bd.php";
/*echo "Entro a Listar para saber si está entrando o no....";*/
$sentencia = $conexion->query('SELECT id_cliente,tp_documento,nom_cliente,ape_cliente,nac_cliente,mail_cliente,pass_cliente,tel_cliente,cto_emerg  FROM clientes ORDER BY 1');
$cliente = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>

<div class="card"> 
    <div class="card-header"> 
            <a name="" id="" class="btn btn-primary" 
            href="forma_clientes.php" role="button">
            Agregar Registro
            </a>
    </div>
</div>

<div class="card ">
 
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-lg table-cell-sm table-row-sm table-bordered table-hover" id="tabla_id">
          <thead class="table-dark thead-light">
                <tr class="text-center">
                    <th>ID</th>
                    <th>Tipo</th>
					          <th>Nombres</th>
				            <th>Apellidos</th>
                    <th>Fecha nacimiento</th>
                    <th>Email</th>
                    <th>Contraseña</th>
                    <th>Telefono</th>
                    <th>Contacto</th>
                    <th>Editar</th>
                    <th>Borrar</th>						
                </tr>
        </thead>

        <tbody>
            <?php foreach($cliente as $clien)
					{
					?>
						  <tr class="text-center">
                <td><?php echo $clien->id_cliente ?></td>
                <td><?php echo $clien->tp_documento?></td>
							  <td><?php echo $clien->nom_cliente?></td>
						 	  <td><?php echo $clien->ape_cliente?></td>
							  <td><?php echo $clien->nac_cliente?></td>
							  <td><?php echo $clien->mail_cliente?></td>
                <td><?php echo $clien->pass_cliente?></td>
                <td><?php echo $clien->tel_cliente?></td>
                <td><?php echo $clien->cto_emerg?></td>
							  <td><a class="btn btn-warning" href="<?php echo "./editar_clientes.php?id_cliente=" . $clien->id_cliente?>">Editar 📝</a></td>
							  <td><a class="btn btn-danger"  href="<?php echo "./elim_clientes.php?id_cliente=" . $clien->id_cliente?>">Borrar 🗑️</a></td>
						  </tr>
          <?php
					} ?>
        </tbody>
        </table>
      </div>
    </div>
</div>     

<?php include("../../templates/footer.php"); ?>