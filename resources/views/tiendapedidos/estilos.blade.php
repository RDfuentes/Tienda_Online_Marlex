<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ESTILOS</title>
    <!-- Styles -->
    <link href="{{ asset('./css/app.css') }}" rel="stylesheet">  
</head>
<body>

<section><br>
<div class="container">
    <div class="row justify-content-center">
        <a class="btn btn-danger" href="{{ url('pedidosnuevos/create') }}">Realizar Pedido</a>
        <div class="col-md-12"><br>
            <h3 class="text-center" style="color:#9C9C9C">ESTILOS MARLEX</h3>
            <p class="text-center">Seleccione el estilo de preferencia</p>
        </div>
     </div>
</div>
</section>


<p class="btn btn-dark btn-block">PANTALON CON PALETONES</p><br><br>

<section>
    <div class="col-lg-12">
        <div class="row">

                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <div class="text-center">
                        <img src="{{asset('images/calidad.png')}}" style='width:9cm; height:10cm' alt="">
                        </div>
                        <div class="text-center">
                            <h6 style="line-height:25px">CON PALETONES</h6>
                            <h5 style="color:red; line-height:0px">CLASICO</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <div class="text-center">
                        <img src="{{asset('images/calidad.png')}}" style='width:9cm; height:10cm' alt="">
                        </div>
                        <div class="text-center">
                            <h6 style="line-height:25px">CON PALETONES</h6>
                            <h5 style="color:red; line-height:0px">SLIM</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <div class="text-center">
                        <img src="{{asset('images/calidad.png')}}" style='width:9cm; height:10cm' alt="">
                        </div>
                        <div class="text-center">
                            <h6 style="line-height:25px">CON PALETONES</h6>
                            <h5 style="color:red; line-height:0px">SLIM FIT</h5>
                        </div>
                    </div>
                </div>
        </div><br>
    </div>
</section>

<p class="btn btn-dark btn-block">PANTALON SIN PALETONES</p><br><br>

<section>
    <div class="col-lg-12">
        <div class="row">

                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <div class="text-center">
                        <img src="{{asset('images/calidad.png')}}" style='width:9cm; height:10cm' alt="">
                        </div>
                        <div class="text-center">
                            <h6 style="line-height:25px">SIN PALETONES</h6>
                            <h5 style="color:red; line-height:0px">CLASICO</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <div class="text-center">
                        <img src="{{asset('images/calidad.png')}}" style='width:9cm; height:10cm' alt="">
                        </div>
                        <div class="text-center">
                            <h6 style="line-height:25px">SIN PALETONES</h6>
                            <h5 style="color:red; line-height:0px">SLIM</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <div class="text-center">
                        <img src="{{asset('images/calidad.png')}}" style='width:9cm; height:10cm' alt="">
                        </div>
                        <div class="text-center">
                            <h6 style="line-height:25px">SIN PALETONES</h6>
                            <h5 style="color:red; line-height:0px">SLIM FIT</h5>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>


<br><br><br>
</body>
</html>

