<?php include("../../templates/header.php"); ?>

</br>
<div class="card">
    <div class="card-header">
       Datos de Servicios
    </div>
    <div class="card-body">
        
<?php 

include_once("../../bd.php");
$sentencia = $conexion->query('SELECT id_tpservicio,nom_tpservicio  FROM tipo_servicio ORDER BY 1');
$tpservicio = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>

    <form action="./insertar_servicios.php" method="POST" id="form">
 
    
    <div class="mb-3">
      <select class="form-select form select-sm" name="tpservicio"  id="tpservicio">
        <?php foreach($tpservicio as $tpservi) { ?>	 
        <option value="<?php echo $tpservi->id_tpservicio ?>"> 
        <?php echo $tpservi->nom_tpservicio?></option> 
       <?php } ?>
      </select>
    </div>

    <div class="mb-3">
      <label for="nomservicio">Nombre Servicio</label>
        <input  required name="nomservicio" type="text"
        id="nomservicio" placeholder="Nombre Servicio"   class="form-control"  >
    </div>

  <div class="mb-3">
  <label for="disponibilidad">Disponibilidad</label>
  <select class="form-control" id="dispServicio" name="dispServicio">
    <option value="true">Disponible</option>
    <option value="false">No disponible</option>
  </select>
</div>

    <div class="mb-3">
      <label for="detservicio">Detalle</label>
      <textarea  required name="detservicio" id="detservicio" rows="3" placeholder="Detalle Servicio"  class="form-control"></textarea>
    </div>

    <div class="mb-3">
      <label for="pcservicio">Precio</label>
      <input  required   name="pcservicio" type="number"
        id="pcservicio"  step="1000"  placeholder="Precio en COP"   class="form-control" >
    </div>
       
      <button type="submit" class="btn btn-success">Agregar Registo</button>
      <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>  
    
  </form>
 

   

   
        
    
</div>

<?php include("../../templates/footer.php"); ?>