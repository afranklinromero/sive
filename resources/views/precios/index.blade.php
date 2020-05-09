@extends('layouts.app')
@section('content')
<div class="container">
    <p class="h4 text-success text-center">PRECIOS</p>
</div>
@include('precios.aside.info')
<ul class="navbar-nav mr-auto">
    @if( Auth::check())
         @if(Auth::user()->hasRole('admin'))
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Distribuidor</th>
                    <th> <a href="{{ route('precios.create') }}" class="btn btn-success">Nuevo</a></th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $numero_tabla = 1;
                  @endphp
                  @foreach($precios as $precio)
                    <tr> 
                     
                      <td>  {{ $numero_tabla ++  }} </td>
                      <td>{{ $precio->name }}</td>
                      <td>
                          <a href="{{route ('precios.show', $precio->id) }}" class="btn btn-info">VER</a>
                      </td>
                    
                      <td>
                        <form action="{{route ('precios.destroy', $precio->id) }}" method="POST">
                          {{ csrf_field() }}
                          <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger">                
                          BORRAR
                            </button>
                        </form>
                      </td>
                      
                  </tr>
                  
                @endforeach
                </tbody>
              </table>
             
           <div>
            @include('precios.aside.asaide')
           </div>

      
         
         @elseif(Auth::user()->hasRole('user'))
         <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Distribuidor</th>
              <th scope="col">Viacha</th>
              <th scope="col">Yura Azul</th>
              <th scope="col">Yura Rojo</th>
              <th scope="col">Accion</th>

            </tr>
          </thead>
          <tbody>
           
          </tbody>
        </table>
        @endif
   @endif    

@endsection