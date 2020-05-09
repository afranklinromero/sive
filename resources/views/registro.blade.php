@extends('layouts.app')

@section('content')
<div class="container">
    <p class="h4 text-success text-center">REGISTRO DE PEDIDO</p>

    <form name="registroPedido" action="procesar.php" method="POST">
        <label>Nombre de Distribuidor</label>
        <div class="row">
          <div class="col">
          <input type="text" class="form-control" placeholder="{{ auth()->user()->name }} " name="nombre" disabled>
          </div>
          
      </div>
      <label>Fecha:</label>
      <script>
      
var f = new Date();
document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
</script>
  
  <fieldset class="form-group">
    <legend class="col-form-label col-sm-2 pt-0">Pedidos</legend>
    <div class="accordion" id="accordionExample">

          <div class="card">
            <div class="card-header" id="headingOne">
              <div class="form-check">
              
                    <input data-toggle="collapse" class="form-check-input collapsed" type="radio" name="gridRadios" id="gridRadios1" value="option1"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <label class="form-check-label" for="gridRadios1">
                    Viacha 
                    </label>
              
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    <input type="number" class="form-control" id="num1" name="num1" placeholder="Cantidad de Bolsas">
                   
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingTwo">
              <div class="form-check">
                
                    <input data-toggle="collapse" class="form-check-input collapsed" type="radio" name="gridRadios" id="gridRadios2" value="option2" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <label class="form-check-label" for="gridRadios1">
                    Yura Rojo
                    </label>
                
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                    <input type="number" class="form-control" id="num2" name="num2" placeholder="Cantidad de Bolsas">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingthree">
              <div class="form-check">
              
                    <input data-toggle="collapse" class="form-check-input collapsed" type="radio" name="gridRadios" id="gridRadios3" value="option3" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <label class="form-check-label" for="gridRadios1">
                    Yura Azul
                    </label>
              
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    <input type="number" class="form-control" id="num3" name="num3" placeholder="Cantidad de Bolsas">
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
  </fieldset>
  <div class="form-row mt-3">
    <div class="form-group col-md-6">
      <label for="inputCity">Fecha de Entrega</label>
      <input type="date" class="form-control" id="fecha_pedido" name="fecha_pedido">
    </div>
 
    </div>

    <label>Cliente Final Entrega</label>
          <div class="row">
            <div class="col">
            <input type="text" class="form-control" placeholder="Nombre" name="nombre_entrega">
            </div>
            
          </div>

        <div id="geo1" class="mt-2">
              <p  class="btn btn-info" onclick="geoloc4()">Registrar Ubicacion.</p>
            <div id="demo"></div>
             <input type="text" class="form-control" placeholder="Coordena para ser utilizada en google maps" name="coro" id="coro">
            
             <div class="form-group mt-2">
    <label for="exampleFormControlTextarea1">Direccion del Lugar</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
            <div class="form-group row mt-2">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-success">REGISTRAR</button>
              </div>
            </div>
        </div>

       

  </form>
</div>
  
  

<script type="text/javascript">
function geoloc4() {
  
  
  d=document.getElementById("demo");
  if (navigator.geolocation){
    d.innerHTML="";
    navigator.geolocation.getCurrentPosition(showPosition,showError);
  }
else {
   d.innerHTML="<p>Lo sentimos, tu dispositivo no admite la geolocaización.</p>";
   }
}
function showPosition(position){
  latitud=position.coords.latitude;
  longitud=position.coords.longitude;
   
  var inputNombre = document.getElementById("coro");
    inputNombre.value = ""+latitud+longitud;
}

function showError(error){
  switch(error.code) {
    case error.PERMISSION_DENIED:
      d.innerHTML+="<p>El usuario ha denegado el permiso a la localización.</p>"
      break;
    case error.POSITION_UNAVAILABLE:
      d.innerHTML+="<p>La información de la localización no está disponible.</p>"
      break;
    case error.TIMEOUT:
      d.innerHTML+="<p>El tiempo de espera para buscar la localización ha expirado.</p>"
      break;
    case error.UNKNOWN_ERROR:
      d.innerHTML+="<p>Ha ocurrido un error desconocido.</p>"
      break;
    }
  }
</script>

@endsection