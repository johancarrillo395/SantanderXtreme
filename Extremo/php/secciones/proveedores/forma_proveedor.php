<?php include("../../templates/header.php"); ?>
<br/>

<div class="card">
    <div class="card-header">
    Proveedores
    </div>
    <div class="card-body">
        
 <form action="" method="post">

 

       <div class="mb-3">
         <label for="nitproveedor" class="form-label">NIT</label>
         <input type="text"
           class="form-control" name="nitproveedor" id="nitproveedor" placeholder="NIT del proveedor" required>
       </div>

       <div class="mb-3">
         <label for="" class="form-label">Nombre del proveedor</label>
         <input type="text"
           class="form-control" name="nomproveedor" id="nomproveedor" placeholder="Nombre del proveedor" required>
       </div>

       <div class="mb-3">
         <label for="dirproveedor" class="form-label">Dirección</label>
         <input type="text"
           class="form-control" name="dirproveedor" id="dirproveedor" placeholder="Dirección del proveedor" required>
       </div>


       <div class="mb-3">
         <label for="mailproveedor" class="form-label">Correo electrónico</label>
         <input type="email"
           class="form-control" name="mailproveedor" id="mailproveedor" placeholder="Correo electrónico del proveedor"required>
       </div>

       <div class="mb-3">
         <label for="telproveedor" class="form-label">Teléfono</label>
         <input type="text"
           class="form-control" name="telproveedor" id="telproveedor" placeholder="Teléfono del proveedor" required>
       </div>

       <div class="mb-3">
         <label for="cbanc1" class="form-label">Cuenta bancaria 1</label>
         <input type="text"
           class="form-control" name="cbanc1" id="cbanc1" placeholder="Cuenta bancaria" required>
       </div>

       <div class="mb-3">
         <label for="cbanc2" class="form-label">Cuenta bancaria 2</label>
         <input type="text"
           class="form-control" name="cbanc2" id="cbanc2" placeholder="Cuenta bancaria" required>
       </div>

       <div class="mb-3">
       <label for="municipio" class="form-label">Municipio</label>
       <select required class="form-control" name="municipio" id="municipio">
       <option value="">Seleccione un municipio</option>
       <option value="">Barichara</option>
       <option value="">Velez</option>  
       <option value="">San Gil</option>
       </select>
      </div>

      <div class="mb-3">
       <label for="banco" class="form-label">Banco</label>
       <select required class="form-control" name="banco" id="banco">
       <option value="">Seleccione un municipio</option>
       <option value="">Barichara</option>
       <option value="">Velez</option>  
       <option value="">San Gil</option>
       </select>
      </div>

        

       <button type="submit" class="btn btn-success">Agregar Registo</button>
       <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>




 </form>


 
         
</div>




<?php include("../../templates/footer.php"); ?>