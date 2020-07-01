<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Clientes;
use App\Http\Requests\ClientesFormRequest;
use Illuminate\Support\Facades\Redirect;
use DB;

class ClientesController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    
    public function index(Request $request) // cargar un objeto, principal
    {
        if($request)
        {
            $query=trim($request->get('searchText')); // objeto en formulario listado para realizar busquedas
            $clientes=DB::table('clientes')
            ->where('nombre','LIKE','%'.$query.'%')
            ->where('condicion','=','1')
            ->orwhere('apellido','LIKE','%'.$query.'%')
            ->where('condicion','=','1')
            ->orwhere('codigo_raiz','LIKE','%'.$query.'%')
            ->where('condicion','=','1')
            ->orwhere('codigo_reciente','LIKE','%'.$query.'%')
            ->where('condicion','=','1')
            

            ->orderBy('id_cliente','desc')
            ->paginate(7);
            return view('clientes.index',["clientes"=>$clientes,"searchText"=>$query]);
        }
    }

    public function create() // cargar un objeto y sus datos 
    { 
        return view("clientes.create"); // retorna a la vista principal que se ha creado en resource
    }

    public function store(ClientesFormRequest $request) // almacenar un objeto y los datos 
    {
        $clientes=new Clientes;
        $clientes->codigo_raiz=$request->get('codigo_raiz');
        $clientes->codigo_reciente=$request->get('codigo_reciente');
        $clientes->nombre=$request->get('nombre');
        $clientes->apellido=$request->get('apellido');
        $clientes->telefono=$request->get('telefono');
        $clientes->nota=$request->get('nota');
        $clientes->condicion='1';
        $clientes->save();
        return Redirect::to('clientes');
    }

    public function show($id_cliente) // mostrar un objeto y los datos
    {
        return view("clientes.show",["clientes"=>Clientes::findOrFail($id_cliente)]);
    }

    public function edit($id_cliente) // editar un objeto y los datos
    {
        return view("clientes.edit",["clientes"=>Clientes::findOrFail($id_cliente)]);
    }

    public function update(ClientesFormRequest $request,$id_cliente) // guardar un objeto y los datos
    {   
        $clientes=Clientes::findOrFail($id_cliente); // duda
        $clientes->codigo_raiz=$request->get('codigo_raiz');
        $clientes->codigo_reciente=$request->get('codigo_reciente');
        $clientes->nombre=$request->get('nombre');
        $clientes->apellido=$request->get('apellido');
        $clientes->telefono=$request->get('telefono');
        $clientes->nota=$request->get('nota');
        $clientes->update();
        return Redirect::to('clientes');
    }

    public function destroy($id_cliente) // eliminar un objeto y sus datos
    {
        $clientes=Clientes::findOrFail($id_cliente);
        $clientes->condicion='0';  
        $clientes->update();
        return Redirect::to('clientes');
    }
}
