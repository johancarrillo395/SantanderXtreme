<?php include("../../templates/header.php"); ?>

</br>

<?php

include_once "../../bd.php";
/*echo "Entro a Listar para saber si está entrando o no....";*/
$sentencia = $conexion->query('SELECT id_servicio,id_tpservicio,nom_servicio,dispo_servicio,deta_servicio,precio_servicio  FROM servicios ORDER BY 1');
$servicio = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>
<div class="card">
    <div class="card-header"> 
         <a name="" id="" class="btn btn-primary" 
         href="forma_servicios.php" role="button">
         Agregar Registro
        </a>
    </div>
    <div class="card-body">
    
     <div class="table-responsive-sm">
        <table class="table  table-sm table-cell-sm table-row-sm table-bordered table-hover" id="tabla_id">
            <thead class="table-dark thead-light">
                <tr>
                        <th>ID</th>
                        <th>Tipo de Servicio</th>
                        <th>Nombre Servicio</th>
						<th>Disponibilidad</th>
					    <th>Detalle</th>
                        <th>Precio</th>
                        <th>Editar</th>
                        <th>Eliminar</th>						
                </tr>
            </thead>
            <tbody>
            <?php foreach($servicio as $servi)
					{           
					?>
						  <tr class="text-center">
                              <td><?php echo $servi->id_servicio ?></td>
                              <td><?php echo $servi->id_tpservicio?></td>
                              <td><?php echo $servi->nom_servicio?></td>
                              <td><?php IF   ($servi->dispo_servicio==false){$servi->dispo_servicio='No disponible';} ELSE {$servi->dispo_servicio='Disponible';} Echo $servi->dispo_servicio?></td>
						 	  <td><?php echo $servi->deta_servicio?></td>
							  <td><?php echo $servi->precio_servicio?></td>
							  <td><a class="btn btn-warning" href="<?php echo "./editar_servicios.php?id_servicio=" . $servi->id_servicio?>">Editar 📝</a></td>
							  <td><a class="btn btn-danger"  href="<?php echo "./elim_servicios.php?id_servicio=" . $servi->id_servicio?>">Borrar 🗑️</a></td>
						  </tr>
          <?php
					} ?>
        </tbody>
        </table>
     </div>
     
         
  
<?php include("../../templates/footer.php"); ?>