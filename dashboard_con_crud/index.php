<?php require_once "vistas/parte_superior.php"?>

<?php
include_once "./bd/conexion.php";
 
$sentencia =  $conexion->query('SELECT id_municipio,nom_municipio,cod_postal FROM Municipios ORDER BY 1');
$municipios = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
 


<div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>    
            </div>    
        </div>    
    </div>    
    <br>  
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                            <th scope="col">ID</th>
                           <th scope="col">Nombre del municipio</th>
                            <th scope="col">Codigo Postal</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                            foreach($municipios as $muni) {                                                        
                            ?>
                            <tr>
                            <td><?php echo $muni->id_municipio ?></td>
							<td><?php echo $muni->nom_municipio ?></td>
                            <td><?php echo $muni->cod_postal ?></td>
							<td><a class="btn btn-warning" href=" ">Editar 📝</a></td>
							<td><a class="btn btn-danger"   href=" ">Eliminar 🗑️</a></td>
                            </tr>
                            <?php
                                }
                            ?>                                
                        </tbody>        
                       </table>                    
                    </div>
                </div>
        </div>  
    </div>    
      
<!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formPersonas">    
            <div class="modal-body">
                <div class="form-group">
                <label for="nombre" class="col-form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre">
                </div>
                <div class="form-group">
                <label for="pais" class="col-form-label">País:</label>
                <input type="text" class="form-control" id="pais">
                </div>                
                <div class="form-group">
                <label for="edad" class="col-form-label">Edad:</label>
                <input type="number" class="form-control" id="edad">
                </div>            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>  
      
    
    
</div>
<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php"?>