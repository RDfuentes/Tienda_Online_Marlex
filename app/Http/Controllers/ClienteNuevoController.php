<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ClienteNuevo;
use App\Http\Requests\ClienteNuevoFormRequest;
use Illuminate\Support\Facades\Redirect;
use DB;

class ClienteNuevoController extends Controller
{
    public function __construct()
    {

    }
    
    // FUNCION INDEX, MOSTRAR, BUSCAR 
    public function index(Request $request) // cargar un objeto, principal
    {
        if($request)
        {
            $query=trim($request->get('searchText')); // objeto en formulario listado para realizar busquedas
            $nuevos=DB::table('nuevos')
            ->where('id_cliente','LIKE','%'.$query.'%')
            ->orwhere('nombre','LIKE','%'.$query.'%')
            ->orwhere('apellido','LIKE','%'.$query.'%')
            ->orwhere('color','LIKE','%'.$query.'%')
            ->orwhere('estilo','LIKE','%'.$query.'%')
            ->orwhere('nota','LIKE','%'.$query.'%')
            ->orderBy('id_cliente','desc')
            ->paginate(7);
            return view('pedidosnuevos.index',["nuevos"=>$nuevos,"searchText"=>$query]);
        }
    } 

    // FUNCION REGISTRAR NUEVO USUARIO
    public function create() // cargar un objeto y sus datos 
    { 
        return view("pedidosnuevos.create"); // retorna a la vista principal que se ha creado en resource
    } 

    // FUNCION STORE PARA CREAR NUEVO USUARIO
    public function store(ClienteNuevoFormRequest $request) // almacenar un objeto y los datos 
    {
        $nuevos=DB::table('nuevos'); 
        $nuevos=new ClienteNuevo;
        $nuevos->nombre=$request->get('nombre');
        $nuevos->apellido=$request->get('apellido');
        $nuevos->direccion=$request->get('direccion');
        $nuevos->telinmediato=$request->get('telinmediato');
        $nuevos->fecha=$request->get('fecha');
        $nuevos->talla=$request->get('talla');
        $nuevos->largo=$request->get('largo');
        $nuevos->color=$request->get('color');
        $nuevos->estilo=$request->get('estilo');      
        $nuevos->nota=$request->get('nota');
        $nuevos->condicion='1';
        $nuevos->save();
        return Redirect::to('tiendapedidos');
    }

    //FUNCION MOSTRAR VISTA
    public function show($id_cliente) // mostrar un objeto y los datos
    {
        return view("pedidosnuevos.show",["nuevos"=>ClienteNuevo::findOrFail($id_cliente)]);
    }

    //FUNCION PARA LLAMAR AL ID DEL CLIENTE Y MOSTRARLO EN LA VISTA EDIT
    public function edit($id_cliente) // editar un objeto y los datos
    {
        return view("pedidosnuevos.edit",["nuevos"=>ClienteNuevo::findOrFail($id_cliente)]);
    }

    // FUNCION PARA ALMACENAR LOS CLIENTES FRECUENTES
    public function update(ClienteNuevoFormRequest $request,$id_cliente) // guardar un objeto y los datos
    {   
        $nuevos=ClienteNuevo::findOrFail($id_cliente); // duda
        $nuevos->nombre=$request->get('nombre');
        $nuevos->apellido=$request->get('apellido');
        $nuevos->direccion=$request->get('direccion');
        $nuevos->telinmediato=$request->get('telinmediato');
        $nuevos->fecha=$request->get('fecha');
        $nuevos->talla=$request->get('talla');
        $nuevos->largo=$request->get('largo');
        $nuevos->color=$request->get('color');
        $nuevos->estilo=$request->get('estilo');      
        $nuevos->nota=$request->get('nota');
        $nuevos->condicion='1';
        $nuevos->save();
        return Redirect::to('pedidosnuevos');
    }

    // FUNCION ELIMINAR CLIENTE
    public function destroy($id_cliente) // eliminar un objeto y sus datos
    {
        $nuevos=ClienteNuevo::findOrFail($id_cliente);
        $nuevos->condicion='0';
        $nuevos->update();
        return Redirect::to('pedidosnuevos');
    }
}
