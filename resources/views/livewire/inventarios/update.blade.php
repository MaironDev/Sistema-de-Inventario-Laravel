<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Actualizar Inventario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
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
                <input wire:model="fecha_producto" type="text" class="form-control" id="fecha_producto" placeholder="Fecha de Recepcion">@error('fecha_producto') <span class="error text-danger">{{ $message }}</span> @enderror
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
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Actualizar</button>
            </div>
       </div>
    </div>
</div>
