<?php include("../../templates/header.php"); ?>

</br>

<?php

include_once "../../bd.php";
/*echo "Entro a Listar para saber si está entrando o no....";*/
$sentencia = $conexion->query('SELECT id_banco,nom_banco,tipo_cuenta,ctabanc_proveedor FROM bancos ORDER BY 1');
$banco = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>

<div class="card"> 
    <div class="card-header"> 
            <a name="" id="" class="btn btn-primary" 
            href="forma_bancos.php" role="button">
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
                    <th>Nombre </th>
				            <th>Tipo Cuenta</th>
                    <th>Numero</th>
                    <th>Editar</th>
                    <th>Borrar</th>						
                </tr>
             </thead>

          <tbody>
            <?php foreach($banco as $ban)
					  {
					  ?>
						      <tr class="text-center">
                    <td><?php echo $ban->id_banco ?></td>
                    <td><?php echo $ban->nom_banco?></td>
                    <td><?php echo $ban->tipo_cuenta?></td>
                    <td><?php echo $ban->ctabanc_proveedor?></td>
							      <td><a class="btn btn-warning" href="<?php echo "./editar_bancos.php?id_banco=".$ban->id_banco?>">Editar📝</a></td>
							      <td><a class="btn btn-danger"  href="<?php echo "./elim_bancos.php?id_banco=".$ban->id_banco?>">Borrar🗑️</a></td>
						      </tr>
            <?php
					  } ?>
          </tbody>
        </table>
      </div>
    </div>
</div>     

<?php include("../../templates/footer.php"); ?>