@include('plantillas.header')

<div class="container">
	<div class="row">
		<div class="col-md-6">
			
			<form class="form-horizontal" method="POST" action="{{ url('/inscripcion/store')}}">
      {{ csrf_field() }}
      <fieldset>
        <legend>Inscripcion</legend>

        @if(count($errors)>0)
          @foreach($errors->all() as $error)
            <div class="alert alert-danger"> 
              {{ $error }}
            </div>
          @endforeach
        @endif

        

  <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Persona</label>
          <div class="col-lg-10">
            <select name="idpersona" id="idpersona" class="form-control"> 
              @foreach($personas as $persona)
            <option value="{{$persona['idpersona']}}">{{$persona['nombre']}} </option>
          @endforeach
            </select>
          </div>
        </div>



          Elija sus eventos<br>
  @foreach($eventos as $evento)
  <input type="checkbox" class="form" name="checkbox[]"  value="{{ $evento->idevento }}">{{ $evento->nombre_evento }}<br>
  @endforeach



     


        


       
<!--<div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">tipo de producto</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="tipodeproducto" id="inputEmail">
          </div>
        </div>-->





       

        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <a href="{{ url('/home') }}" class="btn btn-default" >Regresar</a> 
            <button type="submit" class="btn btn-primary" value="enviar">Ingresar</button>
          </div>
        </div>
      </fieldset>
    </form>

		</div>
	</div>
</div>

@include('plantillas.footer')