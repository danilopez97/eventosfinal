<!DOCTYPE html>
<html>
<head>
	<title>Sistema eventos</title>
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
      <a href="#">Personas</a>
      <ul class="sub">
      <li><a href="/mostrarpersona">Listar</a></li>
        <li><a href="/persona/create">Ingresar persona</a></li>
        
      </ul>
    </li>
    <li>
      <a href="#">Eventos</a>
      <ul class="sub">
      <li><a href="/mostrarevento">Listar</a></li>

        <li><a href="/evento/create">Nuevo evento</a></li>
        
      </ul>  
    </li>
    <li>
      <a href="#">Inscripcion</a>
      <ul class="sub">
        <li><a href="/personasinscritas">Inscribir</a></li>
        <li><a href="/inscripcion/cambiarasignacion">Listar</a></li>       
      </ul>  
    </li>

    @if(Auth::check())
    <li>
      <a href="#">{{ Auth::user()->name }}</a>
      <ul class="sub">
        <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar Sesión
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                          </li>
      
     
      </ul>  
    </li>
    @else
    <li>
      <a href="{{ route('login') }}">Iniciar Sesión</a>
     
    </li>
    @endif
    





  </ul>
</nav>
</div>