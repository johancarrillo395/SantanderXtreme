<?php include("../../templates/header.php"); ?>

<br/>

<h5> </h5> 
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
        <thead class="table-dark thead-light">
            <tr>
                <th scope="col">nitProveedor</th>
                <th scope="col">nomProveedor  </th>
                <th scope="col">telProveedor</th>
                <th scope="col">mailProveedor</th>
                <th scope="col">dirProveedor</th>
                <th scope="col">idMunicipio</th>
               
                <th scope="col">cBancProveedor</th>
                <th>Editar</th>
                <th>Eliminar</th>	
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td>007219872</td>  
                <td>Bunjeextreme</td>
                <td>3179246217</td>
                <td>prove@gmail.com</td>
                <td>Carrera 26 4-27</td>  
                <td>1</td>
                <td>684041</td>
                <td><a name="" id="" class="btn btn-warning" href="#" role="button">Editar📝</a></td>
                <td><a name="" id="" class="btn btn-danger"  href="#" role="button">Borrar🗑️</a></td> 
                </td>                 
        </tbody>
    </table>
</div>
<?php include("../../templates/footer.php"); ?>