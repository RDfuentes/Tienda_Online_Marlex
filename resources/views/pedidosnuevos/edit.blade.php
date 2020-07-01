@extends('layouts.app')
@section('content')
    <div class="col-lg-12">
        <div class="col-lg-12"> <br>
            <h3 class="text-center">Editar Cliente: {{$nuevos->nombre}}</h3> <!-- parametro para llamar el nombre a editar-->
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
            {!!Form::model($nuevos,['method'=>'PATCH','route'=>['pedidosnuevos.update',$nuevos->id_cliente]])!!} <!-- hacemos uso de la funcion edit y update del controlador-->
            {{Form::token()}}

            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" readonly="readonly" class="form-control" value="{{$nuevos->nombre}}" id="" autofocus>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" readonly="readonly" class="form-control"  value="{{$nuevos->apellido}}" id="">
                    </div>
                </div>

            </div><br>

            <h4 class="text-center" style="color: #d5303e">CAMPOS IMPORTANTES DEL PEDIDO</h4> <!-- parametro para llamar el nombre a editar-->

            <br>
            <div class="row">
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <label for="Direccion">Direccion de residencia</label>
                        <input type="text" name="direccion" readonly="readonly"  class="form-control" value="{{$nuevos->direccion}}"  id="" >
                    </div>
                </div>

                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <label for="telinmediato">Telefono de contacto inmediato</label>
                        <input type="number" name="telinmediato" readonly="readonly"  class="form-control" value="{{$nuevos->telinmediato}}"  id="" >
                    </div>
                </div>

                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <label for="fecha">Fecha de entrega</label>
                        <input type="text" name="fecha" readonly="readonly"  class="form-control" value="{{$nuevos->fecha}}"  id="" >
                    </div>
                </div>

                <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                    <div class="form-group">
                        <label for="talla">Talla de pantalon</label>
                        <input type="text" name="talla" readonly="readonly"  class="form-control" value="{{$nuevos->talla}}"  id="" >
                    </div>
                </div>

                <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                    <div class="form-group">
                        <label for="largo">Largo de pantalon</label>
                        <input type="number" name="largo" readonly="readonly" class="form-control" value="{{$nuevos->largo}}"  id="">
                    </div>
                </div>

                <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                    <div class="form-group">
                        <label for="color">Color de pantalon</label>
                        <input type="text" name="color" readonly="readonly" class="form-control" value="{{$nuevos->color}}"  id="" >
                    </div>
                </div>

                <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                    <div class="form-group">
                        <label for="estilo">Color de pantalon</label>
                        <input type="text" name="estilo" readonly="readonly" class="form-control" value="{{$nuevos->estilo}}" id="" >
                    </div>
                </div>

                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                    <div class="form-group">
                        <label for="nota">Observaciones</label>
                        <input type="text" name="nota"  class="form-control" value="{{$nuevos->nota}}" id="">
                    </div>
                </div>
            </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <a class="btn btn-danger" href="{{ url('/pedidosnuevos') }}">Cancelar</a>
                </div>
            {!!Form::close()!!}

        </div>
    </div>
@endsection
