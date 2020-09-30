<!-- MAESTRO-->
<div class="card">
    <div class="card-header bg-info text-white">
        <h2>Cliente</h2>
    </div>
    <div class="card-body">
        <div class="form-group">
            {!! Form::label('cliente_id','Cliente') !!}
            {!! Form::select('cliente_id',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('cinit','Nit/CI') !!}
            {!! Form::text('cinit',null,['class'=>'form-control'])!!}
        </div>
    </div>
</div>
<br>
<!-- DETALLE-->
<div class="card">
    <div class="card-header bg-info text-white">
        <h2>Precio Productos</h2>
    </div>
    <div class="card-body ">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Cliente id</th>
                <th scope="col">Producto_id</th>
                <th scope="col">Precio Compra</th>
                <th scope="col">Precio Cliente</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
                <tr> 
                    <td> 1 </td>
                    <td> 
                        <div class="form-group">
                            {!! Form::text('cliente_id',null,['class'=>'form-control'])!!}
                        </div>      
                    </td>
                    <td> 
                        <div class="form-group">
                            {!! Form::text('producto_id',null,['class'=>'form-control'])!!}
                        </div>      
                    </td>
                    <td> 
                        <div class="form-group">
                            {!! Form::text('preciocompra',null,['class'=>'form-control'])!!}
                        </div>      
                    </td>
                    <td> 
                        <div class="form-group">
                            {!! Form::text('precio',null,['class'=>'form-control'])!!}
                        </div>      
                    </td>
                    <td> 
                            <a href="#" class="btn btn-success">+</a>
                            <a href="#" class="btn btn-danger">-</a>
                    </td>
                </tr>
            </tbody>
          </table>
    </div>
</div>

<div class="form-group">
    {!! Form::submit('ENVIAR',['step' => 'any','class'=>'btn btn-success']) !!}
    <a href="{{ route('precioproductos.index')}}" class="btn btn-info"> VOLVER</a>
</div>