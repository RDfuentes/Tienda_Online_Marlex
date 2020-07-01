@extends('layouts.app')
@section('content')
    <div class="col-lg-12">
        <div class="col-lg-12"> <br>
            <h3 class="text-center">Nuevo Cliente</h3>
            @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
                </ul>
            </div>
            @endif

            {!!Form::open(array('url'=>'clientes','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}

            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="codigo_raiz"></label>
                        <input type="number" name="codigo_raiz" class="form-control" placeholder="Codigo Original Cliente" id="">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="codigo_reciente"></label>
                        <input type="number" name="codigo_reciente" class="form-control" placeholder="Codigo Reciente Cliente" id="">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6col-xs-12">
                    <div class="form-group">
                        <label for="nombre"></label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre Cliente" id="">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6col-xs-12">
                    <div class="form-group">
                        <label for="apellido"></label>
                        <input type="text" name="apellido" class="form-control" placeholder="Apellido Cliente" id="">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6col-xs-12">
                    <div class="form-group">
                        <label for="telefono"></label>
                        <input type="number" name="telefono" class="form-control" placeholder="Telefono Cliente" id="">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6col-xs-12">
                    <div class="form-group">
                        <label for="nota"></label>
                        <input type="text" name="nota" class="form-control" placeholder="Notas" id="">
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
