@include('plantillas.header')






      

  
<legend>Inscripciones</legend>

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
     
    <th>ID</th>
         <th>Persona</th>
         <th>Evento</th>

   
    </tr>
  </thead>
  <tbody>
      @if(count($inscripciones)>0)
        @foreach($inscripciones as $inscripcion)
      <tr>  
      <td>{{$inscripcion->idinscripcion}}</td>  
      <td>{{$inscripcion->persona}}</td>
          <td>{{$inscripcion->evento}}</td>
          
          @if(Auth::check())
        <td>
       
        <a href='{{ url("/inscripcion/delete/{$inscripcion->idinscripcion}") }}' class="label label-danger">Borrar</a>

         <td>
         @endif
       
    </tr>
        @endforeach
      @endif  
   
    
  </tbody>
</table> 
@include('plantillas.footer')