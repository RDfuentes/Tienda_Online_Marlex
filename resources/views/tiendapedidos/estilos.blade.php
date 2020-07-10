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
        <div>
            <a class="btn btn-block"  style="background-color:#00C851; color:white;" href="{{ url('pedidosnuevos/create') }}">REALIZAR PEDIDO</a>
        </div><br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3 class="text-center" style="color:#9C9C9C">COLORES MARLEX</h3>
            </div>
        </div>
    </div><br>
</section>


<p class="btn btn-dark btn-block">PANTALÓN CON PALETONES</p><br>

<section>
    <div class="col-lg-12">
        <div class="row">

                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <div class="text-center">
                        <img src="{{asset('images/estilos/1.png')}}" style='width:9cm; height:10cm' alt="">
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
                        <img src="{{asset('images/estilos/2.png')}}" style='width:9cm; height:10cm' alt="">
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
                        <img src="{{asset('images/estilos/3.png')}}" style='width:9cm; height:10cm' alt="">
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

<p class="btn btn-dark btn-block">PANTALÓN SIN PALETONES</p><br><br>

<section>
    <div class="col-lg-12">
        <div class="row">

                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <div class="text-center">
                        <img src="{{asset('images/estilos/4.png')}}" style='width:9cm; height:10cm' alt="">
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
                        <img src="{{asset('images/estilos/5.png')}}" style='width:9cm; height:10cm' alt="">
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
                        <img src="{{asset('images/estilos/6.png')}}" style='width:9cm; height:10cm' alt="">
                        </div>
                        <div class="text-center">
                            <h6 style="line-height:25px">SIN PALETONES</h6>
                            <h5 style="color:red; line-height:0px">SLIM FIT</h5>
                        </div>
                    </div>
                </div>
        </div>
    </div><br><br>
</section>

<section>
    <div class="container">
        <div>
        <a class="btn btn-block" style="background-color:#ff4444; color:white;" href="{{ url('tiendapedidos') }}">REGRESAR</a>
        </div>
    </div>
</section>


<br><br><br>
</body>
</html>

