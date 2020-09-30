@extends('layouts.app')
@section('content')
<div class="container">
    <p class="h4 text-success text-center">PRODUCTOS</p>
</div>
@include('productos.aside.info')
<ul class="navbar-nav mr-auto">
    @if( Auth::check())
         @if(Auth::user()->hasRole('admin'))
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio de compra</th>
                    <th scope="col">Fecha creacion</th>
                    <th scope="col">Fecha modificacion</th>
                    <th scope="col">Estado</th>
                    <th> <a href="{{ route('productos.create') }}" class="btn btn-success">Nuevo</a></th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $numero_tabla = 1;
                  @endphp
                  @foreach($productos as $producto)
                    <tr> 
                     
                      <td>  {{ $numero_tabla ++  }} </td>
                      <td>{{ $producto->nombre }}</td>
                      <td>{{ $producto->preciocompra }}</td>
                      <td>{{ $producto->created_at }}</td>
                      <td>{{ $producto->updated_at }}</td>
                      <td>{{ $producto->estado }}</td>
                      <td>
                          <a href="{{route ('productos.show', $producto->id) }}" class="btn btn-info">VER</a>
                      </td>
                    
                      <td>
                        <form action="{{route ('productos.destroy', $producto->id) }}" method="POST">
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
              {{ $productos->links() }}
           <div>
            @include('productos.aside.asaide')
           </div>

      
         
         @elseif(Auth::user()->hasRole('user'))
         <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Precio de compra</th>
              <th scope="col">Fecha creacion</th>
              <th scope="col">Fecha modificacion</th>
              <th scope="col">Estado</th>
              <th scope="col">Accion</th>

            </tr>
          </thead>
          <tbody>
           
          </tbody>
        </table>
        @endif
   @endif    

@endsection