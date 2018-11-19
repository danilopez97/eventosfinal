
@include('plantillas.header')

<legend>Eventos</legend>

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
      <th>Nombre del evento</th>
      <th>Descripción</th>
      <th>Fecha</th>
   
    
    </tr>
  </thead>
  <tbody>
      @if(count($eventos)>0)
        @foreach($eventos->all() as $evento)
      <tr>    
          <td>{{$evento->nombre_evento}}</td>
        <td>{{$evento->descripcion_evento}}</td>
        <td>{{$evento->fecha}}</td>
        <td>
          <img src="{{asset('img_productos/')}}/{{$evento->imagen}}" width="100" heigth="100"><br>  </td>
        

       @if(Auth::check())
        <td>
       
        <a href='{{ url("/evento/edit/{$evento->idevento}") }}' class="label label-success">Modificar</a>
        <a href='{{ url("/evento/delete/{$evento->idevento}") }}' class="label label-danger">Borrar</a>
         <td>
         @endif

       
      </td>
        @endforeach
      @endif  
   
    
  </tbody>
</table> 
@include('plantillas.footer')
