@extends('layouts.app')
@section('content')
<div class="container">
    <p class="h4 text-success text-center">CLIENTES</p>
</div>
@include('clientes.aside.info')
<ul class="navbar-nav mr-auto">
    @if( Auth::check())
         @if(Auth::user()->hasRole('admin'))
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">CI/Nit</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Direccion</th>
                    <th> <a href="{{ route('clientes.create') }}" class="btn btn-success">Nuevo</a></th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $numero_tabla = 1;
                  @endphp
                  @foreach($clientes as $cliente)
                    <tr> 
                     
                      <td>  {{ $numero_tabla ++  }} </td>
                      <td>{{ $cliente->cinit }}</td>
                      <td>{{ $cliente->nombres }}</td>
                      <td>{{ $cliente->apellidos }}</td>
                      <td>{{ $cliente->telefono }}</td>
                      <td>{{ $cliente->direccion }}</td>
                      <td>
                          <a href="{{route ('clientes.show', $cliente->id) }}" class="btn btn-info">VER</a>
                      </td>
                    
                      <td>
                        <form action="{{route ('clientes.destroy', $cliente->id) }}" method="POST">
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
            @include('clientes.aside.asaide')
           </div>

      
         
         @elseif(Auth::user()->hasRole('user'))
         <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Nombres</th>
              <th scope="col">Apellidos</th>
              <th scope="col">Correo</th>
              <th scope="col">Telefono</th>
              <th scope="col">Direccion</th>

            </tr>
          </thead>
          <tbody>
           
          </tbody>
        </table>
        @endif
   @endif    

@endsection