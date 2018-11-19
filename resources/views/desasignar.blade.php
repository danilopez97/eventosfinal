@include('plantillas.header')






      
      <form class="form-horizontal" method="POST" action='{{ url("/inscripcion/desasignar/{$inscripcions->idinscripcion}")}}'>
      {{ csrf_field() }}
      <fieldset>
        <legend>Desasignar Eventos</legend>
  


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
     
      
         <th>Eventos</th>

   
    </tr>
  </thead>
  <tbody>
      @if(count($inscripciones)>0)
        @foreach($inscripciones as $inscripcion)
      <tr>    
        
          <td>  <input type="checkbox" class="form" name="checkbox[]"  value="{{ $inscripcion->idevento }}">{{ $inscripcion->evento }}<br>
</td>
       
    </tr>
        @endforeach
      @endif  
   



    
  </tbody>
</table> 

<div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <a href="{{ url('/mostrarevento') }}" class="btn btn-default" >Regresar</a>
            <button type="submit" class="btn btn-primary">Actualizar </button>
          </div>
        </div>
      </fieldset>
    </form>
@include('plantillas.footer')