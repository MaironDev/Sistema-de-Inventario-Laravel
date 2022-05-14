<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Agregar Nuevo Inventario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form>
            <div class="form-group">
                <label for="cantidad_producto"></label>
                <input wire:model="cantidad_producto" type="text" class="form-control" id="cantidad_producto" placeholder="Cantidad">@error('cantidad_producto') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="nombre_producto"></label>
                <input wire:model="nombre_producto" type="text" class="form-control" id="nombre_producto" placeholder="Nombre Producto">@error('nombre_producto') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="codigo_producto"></label>
                <input wire:model="codigo_producto" type="text" class="form-control" id="codigo_producto" placeholder="Codigo Producto">@error('codigo_producto') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="fecha_producto"></label>
                <input wire:model="fecha_producto" type="text" class="form-control" id="fecha_producto" placeholder="Fecha De Recepcion">@error('fecha_producto') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="valor_producto"></label>
                <input wire:model="valor_producto" type="text" class="form-control" id="valor_producto" placeholder="Valor del Producto">@error('valor_producto') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="valor_total"></label>
                <input wire:model="valor_total" type="text" class="form-control" id="valor_total" placeholder="Valor Total">@error('valor_total') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Cancelar</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Agregar</button>
            </div>
        </div>
    </div>
</div>
