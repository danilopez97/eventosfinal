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
     
      
         <th>Eventos</th>
         <th>Imagen</th>

   
    </tr>
  </thead>
  <tbody>
      @if(count($inscripciones)>0)
        @foreach($inscripciones as $inscripcion)
      <tr>    
        
          <td>{{$inscripcion->evento}}</td>
          <td>
          <img src="{{asset('img_productos/')}}/{{$inscripcion->imagen}}" width="100" heigth="100"><br>  </td>
    </tr>
        @endforeach
      @endif  
   
    
  </tbody>
</table> 
@include('plantillas.footer')