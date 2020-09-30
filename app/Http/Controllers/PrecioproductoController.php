<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Precio;
use App\Precioproducto;
use App\Producto;
use Illuminate\Http\Request;

class PrecioproductoController extends Controller
{
    //
    public function index(){
        $clientes=Cliente::orderBy('nombres')->paginate();
        return view('precioproductos.index', compact('clientes'));
    }

   
   public function create(){
        $clientes = Cliente::orderBy('nombres');
        $productos = Producto::orderBy('nombre');
        //dd($productos->get());
        return view('precioproductos.create', compact('clientes', 'productos'));
    }
    
    public function store (Request $request){
        
        $precioproducto = new Precioproducto();

        $precioproducto->cliente_id = $request->cliente_id;
        $precioproducto->producto_id = $request->producto_id;
        $precioproducto->precio = $request->precio;
        $precioproducto->created_at = now();
        $precioproducto->updated_at = now();
        $precioproducto->estado = 1;

        $precioproducto->save();

        return redirect()->route('precioproductos.index')
                        ->with('info','El Precio producto fue guardado');


   }
   

   public function edit($id){
    $precioproducto = Precioproducto::find($id);
    return view('precioproductos.edit', compact('precioproducto'));

    }
    public function update (Request $request, $id){
        
        $precioproducto = Precioproducto::find($id);

        $precioproducto->cliente_id = $request->cliente_id;
        $precioproducto->producto_id = $request->producto_id;
        $precioproducto->precio = $request->precio;
        $precioproducto->updated_at = now();

        $precioproducto->save();

        return redirect()->route('precioproductos.index')
                        ->with('info','El Precio producto fue actualizado');


   }

    public function show ($cliente_id){
        $cliente = Cliente::find($cliente_id);
        $precioproductos = Precioproducto::where('cliente_id', $cliente_id)->orderBy('id')->get();
        return view('precioproductos.show', compact('cliente', 'precioproductos'));


   }

   public function showprecioproducto ($id){
        $precioproducto = Precioproducto::find($id);
        $cliente = Cliente::find($precioproducto->cliente_id);
        //dd($cliente);
        return view('precioproductos.showprecioproducto', compact('cliente', 'precioproducto'));


    }
   public function destroy ($id){
       $precioproducto = Precioproducto::find($id);
       $precioproducto->delete();
       return back ()->with('info', 'El Predio producto fue eliminado');
    }

    
}
