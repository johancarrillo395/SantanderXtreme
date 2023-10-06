<?php include("../../templates/header.php"); ?>

</br>
<div class="card">
    <div class="card-header">
       Parametros
    </div>
    <div class="card-body">
        

    <form action="" method="post">

  

    <div class="mb-3">
      <label for="" class="form-label">Nombre de empresa</label>
      <input type="text"
        class="form-control" name="nomEmpresa" id="nomEmpresa" placeholder="Nombre de empresa">
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Ciudad</label>
      <input type="text" 
        class="form-control" name="ciuEmpresa" id="ciuEmpresa" placeholder="Ciudad" >
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Porcentaje de IVA</label>
      <input type="text" 
        class="form-control" name="ivaEmpresa" id="ivaEmpresa" readonly value="19%" placeholder="Porcentaje de IVA">
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Número de factura</label>
      <input type="text"  
        class="form-control" name="ecliente" id="ecliente"  pattern="[0-9]+" placeholder="Número de factura">
    </div>
 
    
      <button type="submit" class="btn btn-success">Agregar Registo</button>
      <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

    </form>


   
        
    
</div>

<?php include("../../templates/footer.php"); ?>