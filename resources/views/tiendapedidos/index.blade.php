@extends('layouts.admin')
@section('content')

<script src="https://code.jquery.com/jquery-3.2.1.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    $("#clientefrecuente").on('click', function() {
        $("#mostrarclientefrecuente").show();
        return false;
    });
});
</script>


<section>
    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
        <div class="text-center">
            <h2 style="color:#9C9C9C"> M A R L E X </h2> 
        </div>
    </div>

    <p class="text-center">Le invitamos a observar nuestro catálogo de colores y estilos</p>
    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <a href="/colores" class="btn btn-success btn-block" autofocus> COLORES MARLEX</a>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <a href="/estilos" class="btn btn-dark btn-block" autofocus> ESTILOS MARLEX</a><br>
                </div>
            </div>
        </div>
    </div> 
</section>

<section>
    <div class="col-lg-12">
        <div class="row">

                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <div class="text-center">
                        <img src="{{asset('images/calidad.png')}}" style='width:9cm; height:9cm' alt="">
                        </div>
                    </div>
                </div>                

                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                <div class="form-group">
                        <div class="text-center"><br>
                        <a href="pedi2nue/create"><button autofocus class="btn btn-link btn btn-block"><img src="{{asset('images/nuevopedido.png')}}" style='width:7cm; height:7cm'></button></a>
                        </div>
                    </div>
                </div>
            
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <div class="text-center">
                        <img src="{{asset('images/elegancia1.png')}}" style='width:9cm; height:9cm' alt="">
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>

<a href="https://api.whatsapp.com/send?phone=50254657630&text=Marlex&nbsp;la&nbsp;Casa&nbsp;del&nbsp;Pantalon" target="_blank" class="appWhatsapp">
<img src="{{asset('images/whatsapp.png')}}" alt="whatsapp">
</a>

<style>
.appWhatsapp{
    position: fixed;
    right: 26px;
    bottom: 100px;
    width: 60px;
    z-index:1000;
}

.appWhatsapp img{
    width: 100%;
    heigth:auto;
}
</style>


<!--
<section>
    <div class="col-lg-12">
        <div class="row">

                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <div class="form-group">
                        <div class="text-center">
                        <a href="tiendapedidos/create"><button autofocus class="btn btn-link btn btn-block"><img src="{{asset('images/pedidos.png')}}" style='width:10cm; height:2cm'></button></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <div class="text-center">
                        <img src="{{asset('images/calidad.png')}}" style='width:10cm; height:9cm' alt="">
                        </div>
                    </div>
                </div>   

                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <div class="text-center">
                        <img src="{{asset('images/elegancia.png')}}" style='width:10cm; height:9cm' alt="">
                        </div>
                    </div>
                </div>                
                
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <div class="text-center">
                        <img src="{{asset('images/buenservicio.png')}}" style='width:10cm; height:9cm' alt="">
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>
-->            
    
@endsection
