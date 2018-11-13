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
        
   
        <td>
         <a href="#" class="label label-primary">Leer</a>
         <a href="#" class="label label-primary">Leer</a>
         <a href="#" class="label label-primary">Leer</a>
         
        </td>
            
    </tr>
        @endforeach
      @endif  
   
    
  </tbody>
</table> 
@include('plantillas.footer')