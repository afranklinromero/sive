<p>
    <table class="table table-striped">
        <thead>
          <tr>
            
            <th scope="col">Id</th>
            <th scope="col">Producto</th>
            <th scope="col">Precio Compra</th>
            <th scope="col">Precio Cliente</th>
            <th scope="col">Fecha Creacion</th>
            <th scope="col">Fecha Modificacion</th>
            <th scope="col">Estado</th>
                  
          </tr>
        </thead>
        <tbody>
            <tr>
                <td> {{ $precioproducto->id}}</td>
                <td> {{ $precioproducto->producto->nombre}}</td>
                <td> {{ $precioproducto->producto->preciocompra}}</td>
                <td> {{ $precioproducto->precio}}</td>
                <td> {{ $precioproducto->created_at}}</td>
                <td> {{ $precioproducto->updated_at}}</td>
                <td> {{ $precioproducto->estado}}</td>
            <tr>
        </tbody>
      </table>

    <a href="{{route('precioproductos.edit', $precioproducto->id)}}" class="btn btn-warning mr-1">EDITAR </a>
    <a href="{{route('precioproductos.show', $precioproducto->cliente_id)}}" class="btn btn-info"> VOLVER</a>
     
</p>