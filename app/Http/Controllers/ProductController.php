<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return "LISTA DE PRODUCTOS";
    }

    public function create(){
        return "FORMULARIO CREAR UN PRODUCTO";
    }

    public function show($producto){
        return "DETALLE DEL $producto";
    }
}
