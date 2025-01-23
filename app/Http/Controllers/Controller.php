<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiendaController extends Controller
{
    public function index(){
        return "Página principal";
    }

    public function crear(){
        return "Registra producto en la tienda";
    }

    public function mostrar($producto = null){
        return "Muestra producto $producto";
    }
}
