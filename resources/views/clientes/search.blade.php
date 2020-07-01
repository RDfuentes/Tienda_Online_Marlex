{!! Form::open(array('url'=>'clientes','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="col-lg-12 col-md-8 col-sm-8 col-xs-8" >
    <div class="input-group">
        <input type="text" name="searchText"  class="form-control" placeholder="Buscar cliente" value="{{$searchText}}">
        <span class="input-group-btn">
            <button type="submit" class="btn btn-primary"> Buscar</button>
        </span>
    </div>
</div>
{{Form::close()}}