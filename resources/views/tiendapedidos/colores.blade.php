<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>COLORES</title>
    <!-- Styles -->
    <link href="{{ asset('./css/app.css') }}" rel="stylesheet">  
</head>

</section>
<!-- FUNCION QUE SIRVE PARA MOSTRAR LA TABLA, AL PRECIONAR EL BOTON BOTON " MOSTRAR RESULTADOS " -->
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    $("#hide1").on('click', function() {
        $("#element1").hide();
        return false;
    });
 
    $("#show1").on('click', function() {
        $("#element1").show();
        return false;
    });
});
</script>

<script type="text/javascript">
$(document).ready(function(){
    $("#hide2").on('click', function() {
        $("#element2").hide();
        return false;
    });
 
    $("#show2").on('click', function() {
        $("#element2").show();
        return false;
    });
});
</script>

<script type="text/javascript">
$(document).ready(function(){
    $("#hide3").on('click', function() {
        $("#element3").hide();
        return false;
    });
 
    $("#show3").on('click', function() {
        $("#element3").show();
        return false;
    });
});
</script>

<script type="text/javascript">
$(document).ready(function(){
    $("#hide4").on('click', function() {
        $("#element4").hide();
        return false;
    });
 
    $("#show4").on('click', function() {
        $("#element4").show();
        return false;
    });
});
</script>

<script type="text/javascript">
$(document).ready(function(){
    $("#hide5").on('click', function() {
        $("#element5").hide();
        return false;
    });
 
    $("#show5").on('click', function() {
        $("#element5").show();
        return false;
    });
});
</script>
<section>

<body>

<section><br>

    <div class="container">
        <div>
            <a class="btn btn-block"  style="background-color:#00C851; color:white;" href="{{ url('pedidosnuevos/create') }}">REALIZAR PEDIDO</a>
        </div><br><br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3 class="text-center" style="color:#9C9C9C">COLORES MARLEX</h3>
            </div>
        </div>
    </div><br> 

    <div class="col-lg-12">
        <div class="row">

                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <div class="text-center">
                        <img src="{{asset('images/calidad.png')}}" style='width:7cm; height:7.5cm' alt="">
                        </div><br>
                    </div>
                </div>             

                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                <div class="form-group">
                    <div class="text-center">
                        <div class="text-center">
                            <button class="btn" style="background-color:#37474f ; color:white; width:10cm; height:1cm;" id="show1">CASIMIRES DE NOVATEX - FRANCO</button>
                            </div><br>


                            <section id="element1" style="display:none">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/colores-carton/1.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">FRANCO GRIS</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/colores-carton/2.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">FRANCO AZUL</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/colores-carton/3.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">FRANCO GRIS AZUL</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/colores-carton/4.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">FRANCO SIPSON</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row justify-content-center">
                                    <div class="form-group">
                                        <button class="btn btn-danger btn-block"  id="hide1">OCULTAR</button><br><br>
                                    </div>
                                </div> 
                            </section>


                            <div class="text-center">
                                <button class="btn" style="background-color:#455a64; color:white; width:10cm; height:1cm;" id="show2">CASIMIRES DE NOVATEX - NOVATEX</button>
                            </div><br>


                            <section id="element2" style="display:none">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/colores-carton/5.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">BN NEGRO LINEAS</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/colores-carton/6.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">BN SIPSON LINEAS</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/colores-carton/7.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">BN CAFE CLARO LIENAS</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/colores-carton/8.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">BN GRIS OBSCURO LINEAS</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/colores-carton/9.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">BN GRIS MEDIO LIENAS</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/colores-carton/10.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">BN GRIS CLARO LINEAS</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/colores-carton/11.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">BN GRIS OBSCURO LISO</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/colores-carton/12.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">BN VERDE LISO</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row justify-content-center">
                                    <div class="form-group">
                                        <button class="btn btn-danger btn-block"  id="hide2">OCULTAR</button><br><br>
                                    </div>
                                </div> 
                            </section>


                            <div class="text-center">
                                <button class="btn" style="background-color:#78909c; color:white; width:10cm; height:1cm;" id="show3">CASIMIRES DE NOVATEX - FRANCO</button>
                            </div><br>
                                
                            <section id="element3" style="display:none">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/colores-carton/13.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">TUXEDO AZUL</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/colores-carton/14.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">TUXEDO GRIS VERDE</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/colores-carton/15.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">LB AZUL CLARO</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/colores-carton/16.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">LB NEGRO LISO</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/colores-carton/17.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">LB GRIS MEDIO</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/colores-carton/18.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">LB VERDE CLARO</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/colores-carton/19.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">LB CAQUI OBSCURO</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/colores-carton/20.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">LB CAFE OBSCURO</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row justify-content-center">
                                    <div class="form-group">
                                        <button class="btn btn-danger btn-block"  id="hide3">OCULTAR</button><br><br>
                                    </div>
                                </div> 
                            </section>

                            <div class="text-center">
                                <button class="btn" style="background-color:#455a64; color:white; width:10cm; height:1cm;" id="show4">CASIMIRES DE NOVATEX - NOVATEX</button>
                            </div><br>

                            <section id="element4" style="display:none">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-it/21.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">NEGRO PRINGAS</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-it/22.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">GRIS JASPIADO PRINGAS</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-it/23.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">CANELA JASPIADO</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-it/24.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">VERDE JASPIADO</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-it/25.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">NEGRO LINEA GRUESA</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-it/26.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">VERDE CUADRITOS</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-it/27.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">GRIS JASPIADO LISO</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-it/28.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">OXFORD OBSCURO LISO</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-it/29.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">GRIS PERLA</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-it/30.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">NEGRO LISO</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-it/31.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">GRIS MEDIO JASPIADO</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-it/32.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">GRIS CUADROS GRANDES</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-it/33.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">AZUL CUADROS GRANDES</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-it/34.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">GRIS MEDIO</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-it/35.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">GRIS JASPIADO</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-it/36.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">CAFE MIL CUADROS</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-it/37.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">VERDE JASPIADO LISO</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 160.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row justify-content-center">
                                    <div class="form-group">
                                        <button class="btn btn-danger btn-block"  id="hide4">OCULTAR</button><br><br>
                                    </div>
                                </div> 
                            </section>

                            <div class="text-center">
                                <button class="btn" style="background-color:#37474f ; color:white; width:10cm; height:1cm;" id="show5">CASIMIRES ITALIANOS</button>
                            </div><br>

                            <section id="element5" style="display:none">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-cf/38.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">AZUL LINEAS</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 180.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-cf/39.jpg')}}"  style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">NEGRO LINEAS</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 180.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-cf/40.jpg')}}"  style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">NEGRO OBSCURO LINEAS</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 180.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-cf/41.jpg')}}"  style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">OXFORD NEGRO</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 180.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-cf/42.jpg')}}"  style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">NEGRO LINEA GRIS</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 180.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-cf/43.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">SIPSON LINEA GRIS</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 180.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-cf/44.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">GRIS OBSCURO LINEAS</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 180.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-cf/45.jpg')}}"  style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">SIPSON LINEA</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 180.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-cf/46.jpg')}}"  style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">GRIS MEDIO LINEAS</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 180.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-cf/47.jpg')}}"  style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">NEGRO LINEA CELESTE</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 180.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-cf/48.jpg')}}"  style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">AZUL LISO</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 180.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-cf/49.jpg')}}"  style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">NEGRO LISO</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 180.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-cf/50.jpg')}}"  style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">GRIS LISO</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 180.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-cf/51.jpg')}}"  style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">AZUL RAYADO</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 180.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-cf/52.jpg')}}"  style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">NEGRO CUADRITOS</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 180.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-cf/53.jpg')}}"  style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">GRIS MEDIO CUADRITOS</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 180.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-cf/54.jpg')}}"  style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">CAQUI CUADRITOS</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 180.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-cf/55.jpg')}}"  style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">NEGRO MIL CUADROS</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 180.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-cf/56.jpg')}}"  style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">AZUL MEDIO LINEAS</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 180.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-cf/57.jpg')}}" style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">SIPSON CUADRITOS</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 180.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-cf/58.jpg')}}"  style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">GRIS MEDIO LISO</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 180.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-3 col-md-3 col-xs-12">
                                            <div class="form-group">
                                                <div class="text-center">
                                                <img src="{{asset('images/mostrario-cf/59.jpg')}}"  style='width:5cm; height:5cm' alt="">
                                                </div>
                                                <div class="text-center">
                                                    <h6 style="line-height:25px">AZUL PAVO</h6>
                                                    <h5 style="color:red; line-height:0px">Q. 180.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row justify-content-center">
                                    <div class="form-group">
                                        <button class="btn btn-danger btn-block"  id="hide5">OCULTAR</button><br>
                                    </div>
                                </div> 
                            </section>
                        </div>
                    </div>
                </div>
            
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <div class="text-center">
                        <img src="{{asset('images/elegancia1.png')}}" style='width:7cm; height:7.5cm' alt="">
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>


<section>
<div class="container">
    <div>
    <a class="btn btn-block" style="background-color:#ff4444; color:white;" href="{{ url('tiendapedidos') }}">REGRESAR</a>
    </div>
</div>
</section>

<br>
</body>
</html>

