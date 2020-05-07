<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Precio;

class PrecioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $precio=Precio::orderBy('id')->paginate();
        return view('precios',compact('precio'));
    }
}
