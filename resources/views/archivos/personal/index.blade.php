@extends('layouts.app')

@section('content')

<body>
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-linux"></i>
					<span>Archivos/Personal</span>
				    <a href="{{route('personal.create')}}" class="btn btn-success">Agregar</a>

				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content no-padding">
				<table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-3">
					<thead>
						<tr>
							<th>Id</th>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>DNI</th>
							<th>Telefono</th>
							<th>Direcciòn</th>
							<th>E-mail</th>
							<th>Cargo</th>
							<th>Registrado Por:</th>
							<th>Acciones:</th>


						</tr>
					</thead>
					<tbody>
					@foreach($personal as $p)					
						<tr>
						<td>{{$p->id}}</td>
						<td>{{$p->name}}</td>
						<td>{{$p->apellido}}</td>
						<td>{{$p->dni}}</td>
						<td>{{$p->phone}}</td>
						<td>{{$p->address}}</td>
						<td>{{$p->email}}</td>
						<td>{{$p->cargo}}</td>
						<td>{{$p->user}}</td>
						<td>
						<a href="personal-edit-{{$p->id}}" class="btn btn-primary">Editar</a>
						<a href="personal-delete-{{$p->id}}" class="btn btn-danger"  onclick="return confirm('¿Desea Eliminar este registro?')">Eliminar</a>

						</td>
						</tr>
						
				    @endforeach
					</tbody>
					<tfoot>
						<tr>
							<th>Id</th>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>DNI</th>
							<th>Telefono</th>
							<th>Direcciòn</th>
							<th>E-mail</th>
							<th>Cargo</th>
							<th>Registrado Por:</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>

</body>



<script src="{{url('/tema/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{url('/tema/plugins/jquery-ui/jquery-ui.min.js')}}"></script>




<script type="text/javascript">
// Run Datables plugin and create 3 variants of settings
function AllTables(){
	TestTable1();
	TestTable2();
	TestTable3();
	LoadSelect2Script(MakeSelect2);
}
function MakeSelect2(){
	$('select').select2();
	$('.dataTables_filter').each(function(){
		$(this).find('label input[type=text]').attr('placeholder', 'Search');
	});
}
$(document).ready(function() {
	// Load Datatables and run plugin on tables 
	LoadDataTablesScripts(AllTables);
	// Add Drag-n-Drop feature
	WinMove();
});
</script>
@endsection
