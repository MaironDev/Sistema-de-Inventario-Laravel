@section('title', __('Proveedores'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4> </h4>
						</div>
						
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						
						@can('proveedores.add')
						<div class="btn btn-large btn-danger" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Agregar Nuevo Proveedor
						</div>
						@endcan
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.proveedores.create')
						@include('livewire.proveedores.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Nombre Proveedor</th>
								<th>Codigo Proveedor</th>
								<th>Direccion Proveedor</th>
								<th>Fecha de Entrega </th>
								<th>Estado Proveedor</th>
								@can('proveedores.edit','proveedores.delete')
								<td>Acciones</td>
								@endcan
							</tr>
						</thead>
						<tbody>
							@foreach($proveedores as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->nombre_proveedor }}</td>
								<td>{{ $row->codigo_proveedor }}</td>
								<td>{{ $row->direccion_proveedor }}</td>
								<td>{{ $row->fecha_proveedor }}</td>
								<td>{{ $row->estado_proveedor }}</td>
								@can('proveedores.edit','proveedores.delete')
								<td width="90">
								
								<div class="btn-group">
								<a class="btn btn-info btn-sm" data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fas fa-pencil-alt"></i></a>
            					<a class="btn btn-danger btn-sm" onclick="confirm('Confirmar eliminar proveedor {{$row->id}}? \nLos proveedores eliminados no se pueden recuperar!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fas fa-trash"></i></a>
								</div>
								@endcan
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $proveedores->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
