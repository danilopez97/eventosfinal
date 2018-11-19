@include('plantillas.header')

<div class="container">
  <div class="row">
    <div class="col-md-6">
      
    <form class="form-horizontal" method="POST" action='{{ url("/inscripcion/store/{$personas->idpersona}")}}'>
      {{ csrf_field() }}
      <fieldset>
        <legend>Asignacion de eventos</legend>

        @if(count($errors)>0)
          @foreach($errors->all() as $error)
            <div class="alert alert-danger"> 
              {{ $error }}
            </div>
          @endforeach
        @endif

         <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Nombre</label>
          <div class="col-lg-10">
            <input disabled="disabled" type="text" value="{{ $personas->nombre }}" class="form-control" name="Nombre_producto" id="inputEmail" placeholder="Nombre">
          </div>
        </div>


          Elija sus Eventos<br>
  @foreach($eventos as $evento)
  <input type="checkbox" class="form" name="checkbox[]"  value="{{ $evento->idevento }}">{{ $evento->nombre_evento }}<br>
  @endforeach
        
  <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <a href="{{ url('/personasinscritas') }}" class="btn btn-default" >Regresar</a> 
            <button type="submit" class="btn btn-primary" value="enviar">Ingresar</button>
          </div>
        </div>
      </fieldset>
    </form>

    </div>
  </div>
</div>


@include('plantillas.footer')