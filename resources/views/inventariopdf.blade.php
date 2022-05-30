<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte PDF</title>
</head>
<body>
    Reporte  PDF
    <h1>Hola {{$name}} este es tu primer PDF.</h1>

    <div class="card-body">
						@include('livewire.inventarios.create')
						@include('livewire.inventarios.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								
								<th>Cantidad </th>
								<th>Nombre Producto</th>
								<th>Codigo Producto</th>
								<th>Fecha Producto</th>
								<th>Valor Producto</th>
								<th>Valor Total</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($inventarios as $row)
							<tr>
			
								<td>{{ $row->cantidad_producto }}</td>
								<td>{{ $row->nombre_producto }}</td>
								<td>{{ $row->codigo_producto }}</td>
								<td>{{ $row->fecha_producto }}</td>
								<td>${{ $row->valor_producto }}</td>
								<td>${{ $row->valor_total }}</td>

								
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $inventarios->links() }}
					</div>
				</div>
</body>
</html>