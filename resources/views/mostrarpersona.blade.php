@include('plantillas.header')

<legend>Personas</legend>

<div class="row">
  <div class=col-md-4>
    @if(session('info'))
    <div class="alert alert-success">
      {{ session('info') }}
    </div>
    @endif
  </div>
</div>

<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Edad</th>
      <th>Telefono</th>
      <th>Fotografía</th>
   
    
    </tr>
  </thead>
  <tbody>
      @if(count($personas)>0)
        @foreach($personas->all() as $persona)
      <tr>    
          <td>{{$persona->nombre}}</td>
        <td>{{$persona->edad}}</td>
        <td>{{$persona->telefono}}</td>
        <td>
          <img src="{{asset('img_productos/')}}/{{$persona->imagen}}" width="100" heigth="100"><br>  </td>
        @if(Auth::check())
        <td>
        <a href='{{ url("/persona/edit/{$persona->idpersona}") }}' class="label label-success">Modificar</a>
        <a href='{{ url("/persona/delete/{$persona->idpersona}") }}' class="label label-danger">Borrar</a>
      <!--a href='{{ url("/inscripcion/show/{$persona->idpersona}") }}' class="label label-primary">Asignacion</a>-->
        <a href='{{ url("/inscripcion/listarinscripcion/{$persona->idpersona}") }}' class="label label-primary">Ver eventos</a>

         <td>
      @endif
        

       

       
      </td>
        @endforeach
      @endif  
   
    
  </tbody>
</table> 
@include('plantillas.footer')