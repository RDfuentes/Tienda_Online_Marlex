@extends('layouts.app')
@section('content')
    <div class="col-lg-12">
        <div class="col-lg-12"> <br>
            <h3 class="text-center">Editar Cliente: {{$clientes->nombre}}</h3> <!-- parametro para llamar el nombre a editar-->
            @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
                </ul>
            </div>
            @endif

            <!-- envio de dos parametros-->              <!-- tomar en cuenta el cache de laravel para las rutas-->
            {!!Form::model($clientes,['method'=>'PATCH','route'=>['clientes.update',$clientes->id_cliente]])!!} <!-- hacemos uso de la funcion edit y update del controlador-->
            {{Form::token()}}

            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="codigo_raiz"></label>
                        <input type="number" name="codigo_raiz" class="form-control" value="{{$clientes->codigo_raiz}}" placeholder="Codigo Cliente" id="">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="codigo_reciente"></label>
                        <input type="number" name="codigo_reciente" class="form-control" value="{{$clientes->codigo_reciente}}" placeholder="Codigo Cliente" id="">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="nombre"></label>
                        <input type="text" name="nombre" class="form-control" value="{{$clientes->nombre}}" placeholder="Nombre Cliente" id="">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="apellido"></label>
                        <input type="text" name="apellido" class="form-control"  value="{{$clientes->apellido}}" placeholder="Apellido Cliente" id="">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="telefono"></label>
                        <input type="number" name="telefono" class="form-control" value="{{$clientes->telefono}}" placeholder="Telefono Cliente" id="">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="nota"></label>
                        <input type="text" name="nota" class="form-control" value="{{$clientes->nota}}" placeholder="Telefono Cliente" id="">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <a class="btn btn-danger" href="{{ url('/clientes') }}">Cancelar</a>
            </div>

            {!!Form::close()!!}

        </div>
    </div>
@endsection
