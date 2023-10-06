<?php include("../../templates/header.php"); ?>
<br/>

<div class="card">
    <div class="card-header">
        Cuentas de proveedores
    </div>
    <div class="card-body">
        
    <form action="./insertar_bancos.php" method="POST" id="form">

 

       <div class="mb-3">
         <label for="nomBanco">Nombre Banco</label>
         <input required name="nombanco" type="text"
           id="nombanco" placeholder="Nombre Banco"  class="form-control"  >
       </div>

        <div class="mb-3">
          <label for="tpcuenta">Tipo de Cuenta</label>
            <select required class="form-control" name="tpcuenta" id="tpcuenta">
              <option value="">Seleccione</option>
              <option value="CA">Cuenta de Ahorro</option>
              <option value="CC">Cuenta Corriente</option>  
            </select>
        </div>

       <div class="mb-3">
         <label for="">Numero de cuenta</label>
         <input required name="numcuenta" type="number"
          id="numcuenta" placeholder="Numero de cuenta"  class="form-control" >
       </div>

       <button type="submit" class="btn btn-success">Agregar Registo</button>
       <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

      


 </form>


 
         
</div>




<?php include("../../templates/footer.php"); ?> 

