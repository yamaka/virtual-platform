<!-- Modal -->
<div class="modal fade" id="observationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			{!! Form::open(['url' => 'observation']) !!}
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Crear una Observacion para el afiliado {{ $affiliate->identity_card}} </h4>
			</div>
			<div class="modal-body">

				{!! Form::token() !!}
				{!! Form::label('observation_type_id', 'Tipo', ['']) !!}

				<div class="form-group">

					{!! Form::select('observation_type_id', $observations_types, '', ['class' => 'col-md-2 combobox form-control','required' => 'required']) !!}

				</div>
				{!! Form::label('message', 'Mensaje:', []) !!}
				@if(isset($ObservationType))
				{!! Form::textarea('message', '', ['class'=>'form-control','required' => 'required']) !!}
					@else
					{!! Form::textarea('message', null, ['class'=>'form-control']) !!}
				@endif
				{!! Form::hidden('affiliate_id', $affiliate->id) !!}
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
						{!! Form::submit('Guardar Observacion!',['class'=>"btn btn-primary"]) !!}
			</div>
						{!! Form::close() !!}
		</div>
	</div>
</div>