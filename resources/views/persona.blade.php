@include('plantillas.header')

<div class="container">
	<div class="row">
		<div class="col-md-6">
			
			<form class="form-horizontal" method="POST" action="{{ url('/persona/store')}}">
      {{ csrf_field() }}
      <fieldset>
        <legend>Ingreso de Personas</legend>

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
            <input type="text" class="form-control" name="nombre" id="inputEmail" placeholder="Nombre"  required autofocus>
          </div>
        </div>

         <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Edad</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="edad" id="inputEmail" placeholder="Edad" required autofocus>
          </div>
        </div>

         <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Telefono</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="telefono" id="inputEmail" placeholder="Telefono" required autofocus>
          </div>
        </div>

        

        

  


       
<!--<div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">tipo de producto</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="tipodeproducto" id="inputEmail">
          </div>
        </div>-->



        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <a href="{{ url('/mostrarpersona') }}" class="btn btn-default" >Regresar</a> 
            <button type="submit" class="btn btn-primary">Ingresar</button>
          </div>
        </div>
      </fieldset>
    </form>

		</div>
	</div>
</div>

@include('plantillas.footer')