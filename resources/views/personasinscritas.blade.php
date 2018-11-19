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
      <th>nombre</th>
      <th>edad</th>
      <th>telefono</th>
   
    
    </tr>
  </thead>
  <tbody>
      @if(count($personas)>0)
        @foreach($personas->all() as $persona)
      <tr>    
          <td>{{$persona->nombre}}</td>
        <td>{{$persona->edad}}</td>
        <td>{{$persona->telefono}}</td>
        
        @if(Auth::check())
        <td>
       
        <a href='{{ url("/inscripcion/show/{$persona->idpersona}") }}' class="label label-success">Asignacion</a>
        <!--<a href='{{ url("/inscripcion/eliminar/{$persona->idpersona}") }}' class="label label-success">Desasignar</a>-->

         <td>
         @endif
        

       

       
      </td>
        @endforeach
      @endif  
   
    
  </tbody>
</table> 
@include('plantillas.footer')