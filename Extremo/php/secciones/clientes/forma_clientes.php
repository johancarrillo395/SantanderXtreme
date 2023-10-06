<?php include("../../templates/header.php"); ?>
 
</br>

<div class="card">
    <div class="card-header">
       Datos de clientes
    </div>
    <div class="card-body">
        

    <form action="./insertar_clientes.php" method="POST" id="form">

     
 
    <div class="mb-3">
      <label for="ndocumento">ID Cliente</label>
      <input required name="ndocumento" type="number"
       id="ndocumento" placeholder="ID Cliente"  maxlength="15" class="form-control">
    </div>

    <div class="mb-3">
    <label for="tpdoc">Tipo de documento</label>
      <select required class="form-control" name="tpdoc" id="tpdoc">
        <option value="">Seleccione</option>
        <option value="CC">CC</option>
        <option value="CE">CE</option>  
        <option value="Pasaporte">Pasaporte</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="nombres">Nombres</label>
      <input required name="nombres" type="text"
        id="nombres" placeholder="Nombres Cliente" pattern="^[a-zA-Z0-9\s]+$" class="form-control">
    </div>

    <div class="mb-3">
      <label for="apellidos">Apellidos</label>
      <input required name="apellidos" type="text"
        id="apellidos" placeholder="Apellidos Cliente" pattern="^[a-zA-Z0-9\s]+$" class="form-control"    >
    </div>

    <div class="mb-3">
      <label for="nacimiento">Fecha de nacimiento</label>
      <input required name="nacimiento" type="date"
        id="nacimiento" placeholder="Fecha de nacimiento Cliente" date-format="dd/mm/yyyy"  class="form-control">
    </div>

    <div class="mb-3">
      <label for="mail">Email</label>
      <input required name="mail" type="email"
       id="mail"  placeholder="E-mail Cliente" class="form-control">
    </div>

    <div class="mb-3">
      <label for="password" >Contraseña</label>
      <input required  name="password" type="password"
        id="password"  placeholder="Contraseña"   class="form-control">
    </div>

    <div class="mb-3">
      <label for="tel" >Telefono</label>
      <input required  name="tel" type="number"
        id="tel" placeholder="Telefono" pattern="[0-9]{10}" class="form-control">
    </div>

    <div class="mb-3">
      <label for="contacto" class="form-label">Contacto</label>
      <input required name="contacto" type="number"
        id="contacto" placeholder="Contacto"  pattern="[0-9]{10}" class="form-control">
    </div>
    
      <button type="submit" class="btn btn-success">Agregar Registo</button>
      <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

    </form>


   
        
    
</div>

<?php include("../../templates/footer.php"); ?>