@extends ('layouts.app') 
@section ('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <br>
                <h3 class="text-center">LISTADO DE CLIENTES REGISTRADOS</br><a href="clientes/create" > <button class="btn btn-success">Nuevo Cliente</button> </a></h3>
                <br>@include('clientes.search') <br>
            </div>
        </div>
    </div>

   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover"> <!-- hacer la tabla responsive-->
                <thead class="text-center">
                    <th>No</th>
                    <th>Codigo_raiz</th>
                    <th>Codigo_reciente</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Nota</th>
                    <th>Condicion</th>
                    <th>Opciones</th>
                </thead>

                @foreach ($clientes as $clien)
                <tr class="text-center">
                    <td>{{$clien->id_cliente}}</td>
                    <td>{{$clien->codigo_raiz}}</td>
                    <td>{{$clien->codigo_reciente}}</td>
                    <td>{{$clien->nombre}}</td>
                    <td>{{$clien->apellido}}</td>
                    <td>{{$clien->telefono}}</td>
                    <td>{{$clien->nota}}</td>
                    <td>{{$clien->condicion}}</td>
                    <td>
                        <a href="{{URL::action('ClientesController@edit',$clien->id_cliente)}}"><button class="btn btn-primary">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$clien->id_cliente}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                    </td>
                </tr>
                <!-- incluimos al modal.blade.php (se hace antes de culminar el foreach)-->
                @include('clientes.modal')
                @endforeach
            </table>
        </div>
        {{$clientes->render()}}
   </div>

@endsection  