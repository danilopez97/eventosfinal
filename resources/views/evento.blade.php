@include('plantillas.header')

<div class="container">
	<div class="row">
		<div class="col-md-6">
			
			<form class="form-horizontal" method="POST" action="{{ url('/evento/store')}}" enctype="multipart/form-data">
      {{ csrf_field() }}
      <fieldset>
        <legend>Ingreso de Eventos</legend>

        @if(count($errors)>0)
          @foreach($errors->all() as $error)
            <div class="alert alert-danger"> 
              {{ $error }}
            </div>
          @endforeach
        @endif

        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Nombre del evento</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="nombre_evento" id="inputEmail" placeholder="Nombre del evento"  required autofocus>
          </div>
        </div>

         <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Descripción</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="descripcion_evento" id="inputEmail" placeholder="Descripcion del evento" required autofocus>
          </div>
        </div>

         <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Fecha</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="fecha" id="inputEmail" placeholder="Fecha" required autofocus>
          </div>
        </div>

         <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Imagen</label>
          <div class="col-lg-10">
            <input type="file" class="form-control" name="imagen" id="inputEmail" placeholder="Imagen">
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
            <a href="{{ url('/mostrarevento') }}" class="btn btn-default" >Regresar</a> 
            <button type="submit" class="btn btn-primary">Ingresar</button>
          </div>
        </div>
      </fieldset>
    </form>

		</div>
	</div>
</div>

@include('plantillas.footer')