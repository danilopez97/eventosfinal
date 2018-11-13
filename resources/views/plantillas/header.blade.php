<!DOCTYPE html>
<html>
<head>
	<title>Sistema Productos</title>
	<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/hola.css') }}">
	<script type="text/javascript" src="{{ url('js/jquery-3.2.1.js') }}" ></script>
	<script type="text/javascript" src="{{ url('js/bootstrap.js') }}" ></script>
</head>
<body>



 <meta name="viewport" content="width=device-width">
</head>
<div class="wrap">
<span class="decor"></span>
<nav>
  <ul class="primary">
    <li>
      <a href="/home">home</a>
      <ul class="sub">
        <li><a href="/producto/create">Crear Producto</a></li>
        <li><a href="/mostrarrecetas">Recetas</a></li>
        <li><a href="/receta/create">Crear Recetas</a></li>
      
      </ul>
    </li>
    <li>
      <a href="/mostrarpersona">Personas</a>
      <ul class="sub">
        <li><a href="/persona/create">Ingresar persona</a></li>
        <li><a href="/mostrarproduccion">Produccion</a></li>
        <li><a href="/produccion/create">Agregar Produccion</a></li>
      </ul>
    </li>
    <li>
      <a href="/mostrardetalle">Detalle Produccion</a>
      <ul class="sub">
        <li><a href="/detalle/create">Agregar Materia a produccion</a></li>
        
      </ul>  
    </li>
    <li>
      <a href="/mostrarstock">Bodega de Productos</a>
      <ul class="sub">
        <li><a href="/stock/create">Ingreso de Productos a Bodega</a></li>
        <li><a href="/mostrarcliente">Clientes</a></li>
        <li><a href="/cliente/create">Agregar Clientes</a></li>
      </ul>  
    </li>
    <li>
      <a href="/mostrarventa">Ventas</a>
      <ul class="sub">
        <li><a href="/venta/create">Realizar Venta</a></li>
        <li><a href="/mostrarventasreportes">reporte venta</a></li>
        <li><a href="/mostrarprimareportes">reporte Materia Prima</a></li>
     
      </ul>  
    </li>
  </ul>
</nav>
</div>