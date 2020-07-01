<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-delete-{{$clien->id_cliente}}">
	{{Form::Open(array('action'=>array('ClientesController@destroy',$clien->id_cliente),'method'=>'delete'))}}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" 
				aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Eliminar Producto</h4> 
			</div>
			<div class="modal-body">
				<p>Confirme si desea Eliminar el producto</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-danger">Confirmar</button>
			</div>
		</div>
	</div>
	{{Form::Close()}}
</div>