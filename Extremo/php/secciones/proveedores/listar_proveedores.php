 

<?php include("../../templates/header.php"); ?>

</br>

<?php

include_once "../../bd.php";
/*echo "Entro a Listar para saber si está entrando o no....";*/
$sentencia = $conexion->query('SELECT nit_proveedor,nom_proveedor,dir_proveedor,mail_proveedor,tel_proveedor,cta_bancaria1,cta_bancaria2,id_municipio,id_banco  FROM proveedores ORDER BY 1');
$proveedores  = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>

<div class="card"> 
    <div class="card-header"> 
            <a name="" id="" class="btn btn-primary" 
            href="forma_proveedor.php" role="button">
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
                    <th>Nombres</th>
                    <th>Dirrecion</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Cuenta Bancaria</th>
                    <th>Cuenta Bancaria</th>
                    <th>Municipio</th>
                    <th>Banco</th>
                    <th>Editar</th>
                    <th>Borrar</th>						
                </tr>
        </thead>
 
        <tbody>
            <?php foreach($proveedores as $provee)
					{
					?>
				    <tr class="text-center">
                        <td><?php echo $provee->nit_proveedor ?></td>
                        <td><?php echo $provee->nom_proveedor?></td>
                        <td><?php echo $provee->dir_proveedor?></td>
                        <td><?php echo $provee->mail_proveedor?></td>
                        <td><?php echo $provee->tel_proveedor?></td>
			                  <td><?php echo $provee->cta_bancaria1?></td>
                        <td><?php echo $provee->cta_bancaria2?></td>
                        <td><?php echo $provee->id_municipio?></td>
                        <td><?php echo $provee->id_banco?></td>
	                    <td><a class="btn btn-warning" href="<?php echo "./editar_proveedor.php?nit_proveedor=" . $provee->nit_proveedor?>">Editar 📝</a></td>
			            <td><a class="btn btn-danger"  href="<?php echo "./elim_proveedor.php?nit_proveedor=" . $provee->nit_proveedor?>">Borrar 🗑️</a></td>
			        </tr>
          <?php
					} ?>
        </tbody>
        </table>
      </div>
    </div>
</div>     

<?php include("../../templates/footer.php"); ?>