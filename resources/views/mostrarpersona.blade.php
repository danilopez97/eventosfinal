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
       
        <a href='{{ url("/persona/edit/{$persona->idpersona}") }}' class="label label-success">Modificar</a>
        <a href='{{ url("/persona/delete/{$persona->idpersona}") }}' class="label label-danger">Borrar</a>
         <td>
         @endif
        

       

       
      </td>
        @endforeach
      @endif  
   
    
  </tbody>
</table> 
@include('plantillas.footer')