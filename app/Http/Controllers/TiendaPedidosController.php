<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiendaPedidosController extends Controller
{
    public function __construct()
    {

    }

    // FUNCION MOSTRAR INDEX
    public function index(Request $request) // cargar un objeto, principal
    {
        return view("tiendapedidos.index");
    }

    // MOSTRAR MODULO DE COLORES
    public function colores()
    {
        return view("tiendapedidos.colores");
    }

    // MOSTRAR MODULO DE ESTILOS
    public function estilos()
    {
        return view("tiendapedidos.estilos");
    }

    //FUNCION MOSTRAR VISTAS
    public function show()
    {
        return view("tiendapedidos.show");
    }

}
