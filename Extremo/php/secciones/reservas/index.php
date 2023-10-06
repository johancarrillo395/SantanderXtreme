<?php include("../../templates/header.php"); ?>

</br>
 <?php
include_once "../../bd.php";
/*echo "Entro a Listar para saber si está entrando o no....";*/
$sentencia = $conexion->query('SELECT id_reserva,fecha_reserva,durac_reserva,valor_reserva,est_reserva, id_cliente FROM Reservas ORDER BY 1');
$reservas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>


<div class="card">
    <div class="card-header"> 
         <a name="" id="" class="btn btn-primary" 
         href="crear.php" role="button">
         Agregar Registro
        </a>
    </div>
    <div class="card-body">
    
     <div class="table-responsive-sm">
        <table class="table  table-sm table-bordered table-hover">
            <thead class=" text-center table-dark thead-light">
                <tr>
                        <th>ID</th>
                        <th>Fecha</th>
                        <th>Duracion</th>
						            <th>Valor</th>
                        <th>Estado</th>
                        <th>ID Cliente</th>
                        <th>Editar</th>
                        <th>Eliminar</th>						
                </tr>
            </thead>
            <tbody>
                <tr> 
	<?php foreach($reservas as $reser)
					{
						?>
						<tr class="text-center">
							<td><?php echo $clien->id_reserva ?></td>
							<td><?php echo $clien->fecha_reserva ?></td>
							<td><?php echo $clien->durac_reserva?></td>
							<td><?php echo $clien->valor_reserva?></td>
							<td><?php echo $clien->est_reserva?></td>
							<td><?php echo $clien-> id_cliente ?></td>
							<td><a class="btn btn-warning" href="">Editar 📝</a></td>
							<td><a class="btn btn-danger"  href="">Eliminar 🗑️</a></td>
						</tr>
					<?php
					} ?>
            </tbody>
        </table>
     </div>
     
  
  
<?php include("../../templates/footer.php"); ?>