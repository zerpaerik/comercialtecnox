@extends('layouts.app')

@section('content')
<br>
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-users"></i>
					<span><strong>Agregar Llamada</strong></span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content">
				<h4 class="page-header"></h4>
				<form class="form-horizontal" role="form" method="post" action="llamados/create">
					{{ csrf_field() }}
					<div class="form-group">
						<label class="col-sm-1 control-label">Cliente</label>
						<div class="col-sm-3">
							<select class="form-control" name="cliente">
							@foreach($clientes as $lab)
							<option value="{{$lab->id}}">{{$lab->nombre}},{{$lab->apellido}}</option>
							@endforeach
						</select>
						</div>	
						<label class="col-sm-1 control-label">Factible?</label>
						<div class="col-sm-3">
							<select class="form-control" name="factible">
								<option value="Si">Si</option>
							    <option value="No">No</option>
							</select>
						</div>
						<label class="col-sm-1 control-label">Respuesta</label>
						<div class="col-sm-3">
							<input type="textarea" class="form-control" name="respuesta" placeholder="Respuesta del Cliente" data-toggle="tooltip" data-placement="bottom" title="Respuesta del Cliente">
						</div>
						<label class="col-sm-1 control-label">Estatus</label>
						<div class="col-sm-3">
							<select class="form-control" name="estatus">
								<option value="1">Contrata</option>
							    <option value="2">No Contrata</option>
							    <option value="3">Volver a Llamar</option>
							    <option value="4">Pendiente</option>
							    <option value="5">Finalizar</option>
							</select>
						</div>
								
						<br>
						<input type="button" onclick="form.submit()" style="margin-left:15px; margin-top: 20px;" class="col-sm-2 btn btn-primary" value="Agregar">

						<a href="{{route('llamados.index')}}" style="margin-left:15px; margin-top: 20px;" class="col-sm-2 btn btn-danger">Volver</a>
					</div>			
				</form>	
			</div>
		</div>
	</div>
</div>
@endsection