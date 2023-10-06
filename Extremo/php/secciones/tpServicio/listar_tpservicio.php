<?php include("../../templates/header.php"); ?>

</br>

<?php 

include_once("../../bd.php");
$sentencia = $conexion->query('SELECT id_tpservicio,nom_tpservicio  FROM tipo_servicio ORDER BY 1');
$tpservicio = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>


<div class="card">
    <div class="card-header"> 
        <a name="" id="" class="btn btn-primary" 
            href="forma_tpservicio.php" role="button">
        Agregar Registro
        </a>
    </div> 
</div>

<div class="card ">
    <div class="card-body">
      <div class="table-responsive-sm">
        <table class="table  table-sm table-bordered table-hover" id="tabla_id">
            <thead class="table-dark thead-light">
                <tr class="text-center">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            
          <tbody>
                <?php foreach($tpservicio as $tpservi)
				  	{
						?>
						  <tr class="text-center">
                <td><?php echo $tpservi->id_tpservicio ?></td>
                <td><?php echo $tpservi->nom_tpservicio?></td>
							  <td><a class="btn btn-warning" href="<?php echo "./editar_tpservicio.php?id_tpservicio=" . $tpservi->id_tpservicio?>">Editar📝</a></td>
							  <td><a class="btn btn-danger"  href="<?php echo "./elim_tpservicio.php?id_tpservicio=" .     $tpservi->id_tpservicio?>">Eliminar🗑️</a></td>
						  </tr>
            <?php
					  } ?>
          </tbody>
        </table>
      </div>
    </div>
</div>

<?php include("../../templates/footer.php"); ?>

        