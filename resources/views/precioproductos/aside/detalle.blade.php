<p>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Id Producto</th>
            <th scope="col">Nombre producto</th>
            <th scope="col">Precio Compra</th>
            <th scope="col">Precio Cliente</th>
            <th scope="col">Estado</th>
            <th colspan="2">opciones</th>
                  
          </tr>
        </thead>
        <tbody>
          @foreach($precioproductos as $precioproducto)
            <tr>
                <td> {{ $precioproducto->id}}</td>
                <td> {{ $precioproducto->producto_id}}</td>
                <td> {{ $precioproducto->producto->nombre}}</td>
                <td> {{ $precioproducto->producto->preciocompra}}</td>
                <td> {{ $precioproducto->precio}}</td>
                <td> {{ $precioproducto->estado}}</td>
                <td>
                    <a href="{{route ('precioproductos.showprecioproducto', $precioproducto->id) }}" class="btn btn-info">VER</a>
                </td>
              
                <td>
                  <form action="{{route ('precioproductos.destroy', $precioproducto->id) }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                      <button class="btn btn-danger">                
                    BORRAR
                      </button>
                  </form>
                </td>
               
            <tr>
          @endforeach
        </tbody>
      </table>

    <a href="{{route ('precioproductos.edit', $cliente->id)}}"class="btn btn-warning mr-1">EDITAR </a><a href="{{ route('precioproductos.index')}}" class="btn btn-info"> VOLVER</a>
     
</p>
