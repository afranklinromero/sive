@extends('layouts.app')
@section('content')
  <div class="container">
      <p class="h4 text-success text-center">PRECIOS</p>
  </div>
  @include('precioproductos.aside.info')
  <ul class="navbar-nav mr-auto">
      @if( Auth::check())
          @if(Auth::user()->hasRole('admin'))
              <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Id Cliente</th>
                      <th scope="col">CI/NIT</th>
                      <th scope="col">Nombres</th>
                      <th scope="col">Apellidos</th>
                      <th scope="col">estado</th>

                      <th> <a href="{{ route('precioproductos.create') }}" class="btn btn-success">Nuevo</a></th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $numero_tabla = 1;
                    @endphp
                    @foreach($clientes as $cliente)
                      <tr> 
                      
                        <td>  {{ $numero_tabla ++  }} </td>
                        <td>{{ $cliente->id }}</td>
                        <td>{{ $cliente->cinit }}</td>
                        <td>{{ $cliente->nombres }}</td>
                        <td>{{ $cliente->apellidos }}</td>
                        <td>{{ $cliente->estado }}</td>
                        <td>
                            <a href="{{route ('precioproductos.show', $cliente->id) }}" class="btn btn-info">VER</a>
                        </td>
                      
                        <td>
                          <form action="{{route ('precioproductos.destroy', $cliente->id) }}" method="POST">
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
                {{ $clientes->links() }}
                

            <div>
              @include('precioproductos.aside.asaide')
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

@section('detalle')
    <p>vacio</p>
@endsection