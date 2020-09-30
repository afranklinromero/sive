@extends('layouts.app')

  @section('content')
  <div class="container">
        <p class="h4 text-success text-center">PRECIOS</p>
        @include('precioproductos.aside.maestro')
      </div>
  @endsection
  @section('detalle')
    <div class="container">
        @include('precioproductos.aside.detalleproducto')
    </div>
  @endsection
</div>