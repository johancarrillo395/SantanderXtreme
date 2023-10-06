<?php
$url_base="http://localhost/Extremo/";
?>

<!doctype html>
<html lang="en">
<head>

<title>Title</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS v5.2.1 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
  
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
 


  
</head>
<body>
 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">SantanderXtreme</a>
        <!-- Botón para colapsar la barra de navegación en dispositivos pequeños -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Contenedor de enlaces de navegación -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $url_base;?>php/secciones/reservas/">Reservas<a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Factura</a>
                </li>
                
                
                <!-- Menú desplegable -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Tablas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo $url_base;?>php/secciones/parametros/">Parametros</a>
                        <a class="dropdown-item" href="<?php echo $url_base;?>php/secciones/clientes/listar_clientes.php">Clientes</a>
                        <a class="dropdown-item" href="<?php echo $url_base;?>php/secciones/tpServicio/listar_tpservicio.php">Tipo Servicios</a>
                        <a class="dropdown-item" href="<?php echo $url_base;?>php/secciones/servicios/listar_servicios.php">Servicios</a>
                        <a class="dropdown-item" href="<?php echo $url_base;?>php/secciones/municipios/listar_municipio.php">Municipios</a>
                        <a class="dropdown-item" href="<?php echo $url_base;?>php/secciones/bancos/listar_bancos.php">Bancos</a>
                        <a class="dropdown-item" href="<?php echo $url_base;?>php/secciones/proveedores/listar_proveedores.php">Proveedores</a>
                        <a class="dropdown-item" href="<?php echo $url_base;?>php/secciones/pgProveedores/">Pago Proveedores</a>
                      
                        <a class="dropdown-item" href="<?php echo $url_base;?>php/secciones/ProveedorServicio/">Proveedor Servicio</a>
                        <a class="dropdown-item" href="<?php echo $url_base;?>php/secciones/recaudos/">Recaudos</a>
                        <a class="dropdown-item" href="<?php echo $url_base;?>php/secciones/reservas/">Reservas</a>
                        <a class="dropdown-item" href="<?php echo $url_base;?>php/secciones/dtReserva/">DetalleReserva</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../index.html">Cerrar Sesiòn</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
 
 

     
<main class="container">
    