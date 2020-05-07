@extends('layouts.app')

@section('content')
<div class="container">
    <p class="h4 text-success text-center">PRECIOS</p>
</div>

<ul class="navbar-nav mr-auto">
    @if( Auth::check())
         @if(Auth::user()->hasRole('admin'))
         
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Distribuidor</th>
                    <th scope="col">Viacha</th>
                    <th scope="col">Yura Azul</th>
                    <th scope="col">Yura Rojo</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($precio as $precio
                  )
                    <tr> 
                      <td>{{ $precio->id }}</td>
                      <td>{{ $precio->name }}</td>
                      <td>{{ $precio->viacha }}</td>
                      <td>{{ $precio->yazul }}</td>
                      <td>{{ $precio->yrojo }}</td>
                  </tr>
                  <tr> 
                    
                </tr>
                @endforeach
                </tbody>
              </table>
           
      
         
         @elseif(Auth::user()->hasRole('user'))
         <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Distribuidor</th>
              <th scope="col">Viacha</th>
              <th scope="col">Yura Azul</th>
              <th scope="col">Yura Rojo</th>
            </tr>
          </thead>
          <tbody>
            
            
                  <tr> 
                    
                   
                  </tr>
             
         
          </tbody>
        </table>
        @endif
   @endif    

@endsection