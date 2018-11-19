@include('plantillas.header')

<div class="container">
	<div class="row">
		<div class="col-md-6">
			
			<form class="form-horizontal" method="POST" action='{{ url("/persona/update/{$persona->idpersona}")}}'enctype="multipart/form-data" >
      {{ csrf_field() }}
      <fieldset>
        <legend>Editar Persona</legend>
        

        @if(count($errors)>0)
          @foreach($errors->all() as $error)
            <div class="alert alert-danger"> 
              {{ $error }}
            </div>
          @endforeach
        @endif

        <div class="form-group">
        <td>
          <img src="{{asset('img_productos/')}}/{{$persona->imagen}}" width="100" heigth="100"><br>  </td>
          <label for="inputEmail" class="col-lg-2 control-label">Nombre</label> 
          <div class="col-lg-10">
            
            <input type="text" value="{{ $persona->nombre}}" class="form-control" name="nombre" id="inputEmail" placeholder="nombre" required autofocus >
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Edad</label>
          <div class="col-lg-10">
             <input type="text" value="{{ $persona->edad}}" class="form-control" name="edad" id="inputEmail" placeholder="Edad" required autofocus>
           
          </div>
          </div>


           <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Telefono</label> 
          <div class="col-lg-10">
            <input type="text" value="{{ $persona->telefono}}" class="form-control" name="telefono" id="inputEmail" placeholder="Telefono" required autofocus>
        
        </div>
        </div>


         


        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Imagen</label>
          <div class="col-lg-10">
            <input type="file" class="form-control" name="imagen" id="inputEmail" placeholder="Imagen">
          </div>
        </div>
       
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <a href="{{ url('/mostrarpersona') }}" class="btn btn-default" >Regresar</a>
            <button type="submit" class="btn btn-primary">Actualizar </button>
          </div>
        </div>
      </fieldset>
    </form>


		</div>
	</div>
</div>


@include('plantillas.footer')