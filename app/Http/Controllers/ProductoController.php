<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function index(){
        $productos=Producto::orderBy('nombre')->paginate();
        return view('productos.index',compact('productos'));
    }

   
   public function create(){
    
    return view('productos.create');

    }
    
    public function store (Request $request){
        
        $producto = new Producto();

        $producto->nombre = $request->nombre;
        $producto->preciocompra = $request->preciocompra;
        $producto->created_at = now();
        $producto->updated_at = now();
        $producto->estado = 1;

        $producto->save();

        return redirect()->route('productos.index')
                        ->with('info','El Producto fue guardado');


   }
   

   public function edit($id){
    $producto = Producto::find($id);
    return view('productos.edit', compact('producto'));

    }
    public function update (Request $request, $id){
        
        $producto = Producto::find($id);

        $producto->nombre = $request->nombre;
        $producto->preciocompra = $request->preciocompra;
        $producto->updated_at = now();

        $producto->save();

        return redirect()->route('productos.index')
                        ->with('info','El Producto fue actualizado');


   }
    public function show ($id){
        $producto = Producto::find($id);
        return view('productos.show', compact('producto'));


   }
   public function destroy ($id){
       $producto = Producto::find($id);
       $producto->delete();
       return back ()->with('info', 'El Producto fue eliminado');
    }

    public function obtenerpreciocompra(){
        $id = $_GET['id'];
        //dd($id);
        $producto = Producto::find($id);
        
        echo $producto->preciocompra;
    }
}
