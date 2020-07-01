@extends ('layouts.app') 
@section ('content')
   
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <br>
                <h3 class="text-center">PEDIDOS NUEVOS <br></h3>
                @include('pedidosnuevos.search') <br>
            </div>
        </div>
    </div>

   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover"> <!-- hacer la tabla responsive-->
                <thead class="text-center">
                    <th>No</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Fecha</th>
                    <th>Talla</th>
                    <th>Largo</th>
                    <th>Color</th>
                    <th>Estilo</th>
                    <th>Nota</th>
                    <th>Opciones</th>
                </thead>

                @foreach ($nuevos as $nue)
                <tr class="text-center">
                    <td>{{$nue->id_cliente}}</td>
                    <td>{{$nue->nombre}}</td>
                    <td>{{$nue->apellido}}</td>
                    <td>{{$nue->direccion}}</td>
                    <td>{{$nue->telinmediato}}</td>
                    <td>{{$nue->fecha}}</td>
                    <td>{{$nue->talla}}</td>
                    <td>{{$nue->largo}}</td>
                    <td>{{$nue->color}}</td>
                    <td>{{$nue->estilo}}</td>
                    <td>{{$nue->nota}}</td>
                    <td>
                        <a href="{{URL::action('ClienteNuevoController@edit',$nue->id_cliente)}}"><button class="btn btn-primary">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$nue->id_cliente}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                    </td>
                </tr>
                <!-- incluimos al modal.blade.php (se hace antes de culminar el foreach)-->
                @include('pedidosnuevos.modal')
                @endforeach
            </table>
        </div>
        {{$nuevos->render()}}
   </div>
@endsection  