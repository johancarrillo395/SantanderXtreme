<?php include_once("../../templates/header.php"); ?>

</br>

<div class="card">
    <div class="card-header">
       Datos de Reservas
    </div>
    <div class="card-body">
        

    <form action="./insertar_clientes.php" method="POST">
 
        
    <div class="mb-3">
      <label for="id">Identificador de reserva</label>
      <input required  name="idReserva"  id="idReserva" placeholder="ID Reserva"
        class="form-control">
    </div>

    <div class="mb-3">
      <label for="">Fecha de reserva</label>
      <input required  name="fecReserva" type="date" id="fecReserva" placeholder="Fecha de reserva" 
       date-format="dd/mm/yyyy" class="form-control">
    </div>

    <div class="mb-3">
      <label for="">Duración</label>
      <input required name="duracReserva"  type="number" id="duracReserva"  placeholder="Duración"
        class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Estado Reserva</label>
    <select required name="estReserva" id="estReserva" class="form-control"  >
      <option value="">Seleccione</option>
      <option value="1">Pendiente</option>
      <option value="2">Aprobada</option>
      <option value="3">Rechazada</option>
    </select>
    </div>

    <div class="mb-3">
      <label for="id">Identificación Cliente<</label>
      <input required  name="idCliente" id="idCliente" placeholder="ID Cliente"
        class="form-control">
    </div>

     
    
      <button type="submit" class="btn btn-success">Agregar Registo</button>
      <a href="listar_clientes.php" class="btn btn-primary">Cancelar</a>
     

    </form>


   
        
    
</div>

<?php include("../../templates/footer.php"); ?>