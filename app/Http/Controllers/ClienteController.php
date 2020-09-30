<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Client;

class ClienteController extends Controller
{
    //

    public function index(){
        $clientes=Cliente::orderBy('nombres')->orderBy('apellidos')->paginate();
        return view('clientes.index',compact('clientes'));
    }

   
   public function create(){
    
    return view('clientes.create');

    }
    
    public function store (Request $request){
        
        $cliente = new Cliente();
        $cliente->cinit = $request->cinit;
        $cliente->nombres = $request->nombres;
        $cliente->apellidos = $request->apellidos;
        $cliente->telefono = $request->telefono;
        $cliente->direccion = $request->direccion;
        $cliente->created_at = now();
        $cliente->updated_at = now();
        $cliente->estado = 1;
        $cliente->save();

        return redirect()->route('clientes.index')
                        ->with('info','El Cliente fue guardado');


   }
   

   public function edit($id){
    $cliente = Cliente::find($id);
    return view('clientes.edit', compact('cliente'));

    }
    public function update (Request $request, $id){
        
        $cliente = Cliente::find($id);

        $cliente->cinit = $request->cinit;
        $cliente->nombres = $request->nombres;
        $cliente->apellidos = $request->apellidos;
        $cliente->telefono = $request->telefono;
        $cliente->direccion = $request->direccion;
        $cliente->updated_at = now();

        $cliente->save();

        return redirect()->route('clientes.index')
                        ->with('info','El Cliente fue actualizado');


   }
    public function show ($id){
        $cliente = Cliente::find($id);
        return view('clientes.show', compact('cliente'));


   }
   public function destroy ($id){
       $cliente = Cliente::find($id);
       $cliente->delete();
       return back ()->with('info', 'El Cliente fue eliminado');
    }

}
