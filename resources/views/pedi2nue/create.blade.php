@extends('layouts.admin')
@section('content')

    <script>
      function soloLetras(e)
        {
           key = e.keyCode || e.which;
           tecla = String.fromCharCode(key).toLowerCase();
           letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
           especiales = "8-37-39-46";

           tecla_especial = false
           for(var i in especiales){
                if(key == especiales[i]){
                    tecla_especial = true;
                    break;
                }
            }

            if(letras.indexOf(tecla)==-1 && !tecla_especial){
                return false;
            }
        }
    </script>


    <div class="col-lg-12">
        <div class="col-lg-12">
            <h3 class="text-center" style="color:#9C9C9C" >GRACIAS POR SU PREFERENCIA</h3>
            @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
                </ul>
            </div>
            @endif

            {!!Form::open(array('url'=>'pedi2nue','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}

            <p class="text-center">Los campos con asterisco (<strong style="color:red">*</strong>) son obligatorios para realizar su pedido</p>
            
            <!--
            <p class="text-center">Antes de realizar su pedido le invitamos a observar nuestro catálogo de colores y estilos</p>
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
            -->

            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="nombre">Nombres <strong style="color:red">*</strong></label>
                        <input type="text" name="nombre" onkeypress="return soloLetras(event)"  class="form-control"  placeholder="Nombres" id="" autofocus required >
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="apellido">Apellidos <strong style="color:red">*</strong></label>
                        <input type="text" name="apellido" onkeypress="return soloLetras(event)"  class="form-control" placeholder="Apellidos" id="" required>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <label for="Direccion">Dirección de residencia <strong style="color:red">*</strong></label>
                        <input type="text" name="direccion" class="form-control" placeholder="Dirección" id="" required>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <label for="telinmediato">Teléfono de contacto inmediato <strong style="color:red">*</strong></label>
                        <input type="number" name="telinmediato" class="form-control"  placeholder="XXXX-XXXX" id="" required>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <label for="fecha">Fecha de entrega <strong style="color:red">*</strong></label>
                        <input type="date" name="fecha" class="form-control" max="<?php echo date('Y-m-d',strtotime(date("Y-m-d", time()) . "+7 days")); ?>" min="<?php echo date('Y-m-d',strtotime(date("Y-m-d", time()) . "-7")); ?>"  id="" required >
                    </div>
                </div>

                <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                    <div class="form-group">
                        <label>Talla de Pantalón <strong style="color:red">*</strong></label>
                        <select name="talla" class="form-control" id="" >
                        <option >Seleccione una talla</option>
                        <option value="1">Talla 1</option>
                        <option value="2">Talla 2</option>
                        <option value="4">Talla 4</option>
                        <option value="6">Talla 6</option>
                        <option value="8">Talla 8</option>
                        <option value="10">Talla 10</option>
                        <option value="12">Talla 12</option>
                        <option value="25">Talla 25</option>
                        <option value="26">Talla 26</option>
                        <option value="27">Talla 27</option>
                        <option value="28">Talla 28</option>
                        <option value="29">Talla 29</option>
                        <option value="30">Talla 30</option>
                        <option value="31">Talla 31</option>
                        <option value="32">Talla 32</option>
                        <option value="33">Talla 33</option>
                        <option value="34">Talla 34</option>
                        <option value="35">Talla 35</option>
                        <option value="36">Talla 36</option>
                        <option value="37">Talla 37</option>
                        <option value="38">Talla 38</option>
                        <option value="39">Talla 39</option>
                        <option value="40">Talla 40</option>
                        <option value="41">Talla 41</option>
                        <option value="42">Talla 42</option>
                        <option value="43">Talla 43</option>
                        <option value="44">Talla 44</option>
                        </select>
                        <!--<input type="number" name="talla" class="form-control" placeholder="<< contorno de cintura >>" id="">-->
                    </div>
                </div>

                <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                    <div class="form-group">
                        <label for="largo">Largo de Pantalón</label>
                        <input type="number" name="largo" class="form-control" placeholder="Cintura hasta el talon del pie" id="">
                    </div>
                </div>

                <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                    <div class="form-group">
                        <label for="color">Color del Pantalón <strong style="color:red">*</strong> <a href="/colores" target="_blank"><strong>Ver colores</strong></a></label>
                        <input type="text" name="color" class="form-control" onkeypress="return soloLetras(event)"  placeholder="Ingrese el color de preferencia" id="" required>
                    </div>       
                </div>


                <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                    <div class="form-group">
                        <label>Estilo del Pantalón <strong style="color:red">*</strong> <a href="/estilos" target="_blank"><strong style="color:red">Ver estilos</strong></a></label>
                        <select name="estilo" class="form-control" id="" required >
                        <option >Seleccione el Estilo</option>
                        <option value="Con paletones Clásico">1. Con paletones Clásico</option>
                        <option value="Con paletones Slim">2. Con paletones Slim</option>
                        <option value="Sin paletones Clásico" style="color: #d5303e">3. Sin paletones Clásico</option>
                        <option value="Sin paletones Slim" style="color: #d5303e">4. Sin paletones Slim</option>
                        <option value="Sin paletones Slim Fit" style="color: #d5303e">5. Sin paletones Slim Fit</option>
                        </select>
                        <!--<input type="number" name="talla" class="form-control" placeholder="<< contorno de cintura >>" id="">-->
                    </div>
                </div>

                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                    <div class="form-group">
                        <label for="nota">Observaciones</label>
                        <input type="text" name="nota" class="form-control" placeholder="Observaciones del pedido" id="">
                    </div>
                </div>
            </div>

            <script language="JavaScript">
            function confirmacion()
            {
                if (confirm('CONFIRME SI DESEA REALIZAR EL PEDIDO'))
                {
                    document.tuformulario.submit()
                }
            }
            </script>

            <div class="form-group">
                <button class="btn btn-success" onclick="confirmacion()"  type="submit">Realizar Pedido</button>
                <a class="btn btn-danger" href="{{ url('/tiendapedidos') }}">Cancelar</a>
            </div>
            {!!Form::close()!!}

        </div>
    </div>
@endsection
