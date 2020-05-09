<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Precio;
use App\Http\Requests\PrecioRequest;

class PrecioController extends Controller
{
  
    public function index(){
        $precios=Precio::orderBy('id')->paginate();
        return view('precios.index',compact('precios'));
    }

   
   public function create(){
    
    return view('precios.create');

    }
    
    public function store (PrecioRequest $request){
        
        $precios = new Precio;

        $precios->name = $request->name;
        $precios->viacha = $request->viacha;
        $precios->yazul = $request->yazul;
        $precios->yrojo = $request->yrojo;

        $precios->save();

        return redirect()->route('precios.index')
                        ->with('info','El Producto fue guardado');


   }
   

   public function edit($id){
    $precios = Precio::find($id);
    return view('precios.edit', compact('precios'));

    }
    public function update (PrecioRequest $request, $id){
        
        $precios = Precio::find($id);

        $precios->name = $request->name;
        $precios->viacha = $request->viacha;
        $precios->yazul = $request->yazul;
        $precios->yrojo = $request->yrojo;

        $precios->save();

        return redirect()->route('precios.index')
                        ->with('info','El Producto fue actualizado');


   }
    public function show ($id){
        $precios = Precio::find($id);
        return view('precios.show', compact('precios'));


   }
   public function destroy ($id){
       $precios = Precio::find($id);
       $precios->delete();
       return back ()->with('info', 'El precio fue eliminado');
        }


}
