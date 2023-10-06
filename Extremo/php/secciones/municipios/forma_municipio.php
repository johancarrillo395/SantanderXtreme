<?php include("../../templates/header.php"); ?>
 
</br>

<div class="card">
    <div class="card-header">
       Datos de clientes
    </div>
    <div class="card-body">
        

    <form action="./insertar_municipios.php" method="POST" id="form">

     
 
    
    <div class="mb-3">
      <label for="nom_municipio">Nombre de municipio</label>
      <input required name="nom_municipio" type="text"
       id="nom_municipio" placeholder="Nombre de municipio" class="form-control">
    </div>

    <div class="mb-3">
      <label for="cod_postal">Código postal</label>
      <input required name="cod_postal" type="number"
       id="cod_postal" placeholder="Código postal" class="form-control">
    </div>

    
    
      <button type="submit" class="btn btn-success">Agregar Registo</button>
      <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

    </form>


   
        
    
</div>

<?php include("../../templates/footer.php"); ?>