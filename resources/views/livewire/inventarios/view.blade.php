@section('title', __('Inventarios'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4></h4>
						</div>
						
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						@can('inventario.add')
						<div class="btn btn-large btn-danger" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Nuevo Pedido
						</div>
						@endcan
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.inventarios.create')
						@include('livewire.inventarios.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<!-- <td>#</td>  -->
								<th>Cantidad </th>
								<th>Nombre Producto</th>
								<th>Codigo Producto</th>
								<th>Fecha Producto</th>
								<th>Valor Producto</th>
								<th>Valor Total</th>
								@can('inventario.edit','inventario.delete')
								<td>Acciones</td>
								@endcan
							</tr>
						</thead>
						<tbody>
							@foreach($inventarios as $row)
							<tr>
								<!-- <td>{{ $loop->iteration }}</td>  -->
								<td>{{ $row->cantidad_producto }}</td>
								<td>{{ $row->nombre_producto }}</td>
								<td>{{ $row->codigo_producto }}</td>
								<td>{{ $row->fecha_producto }}</td>
								<td>${{ $row->valor_producto }}</td>
								<td>${{ $row->valor_total }}</td>

								@can('inventario.edit','inventario.delete')
								<td width="10">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Accion
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Editar </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete Inventario id {{$row->id}}? \nDeleted Inventarios cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Borrar </a>   
									</div>
								</div>
								@endcan
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $inventarios->links() }}
					</div>
				</div>
			</div>
			<a  class="btn btn-primary btn-sm" href="{{route('descargarpdf')}}" >{{__('Generar Reporte')}}</a>
		</div>
	</div>
</div>
