<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Actualizar Proveedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="nombre_proveedor"></label>
                <input wire:model="nombre_proveedor" type="text" class="form-control" id="nombre_proveedor" placeholder="Nombre Proveedor">@error('nombre_proveedor') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="codigo_proveedor"></label>
                <input wire:model="codigo_proveedor" type="text" class="form-control" id="codigo_proveedor" placeholder="Codigo Proveedor">@error('codigo_proveedor') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="direccion_proveedor"></label>
                <input wire:model="direccion_proveedor" type="text" class="form-control" id="direccion_proveedor" placeholder="Direccion Proveedor">@error('direccion_proveedor') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="fecha_proveedor"></label>
                <input wire:model="fecha_proveedor" type="text" class="form-control" id="fecha_proveedor" placeholder="Fecha Proveedor">@error('fecha_proveedor') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="estado_proveedor"></label>
                <input wire:model="estado_proveedor" type="text" class="form-control" id="estado_proveedor" placeholder="Estado Proveedor">@error('estado_proveedor') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Actualizar</button>
            </div>
       </div>
    </div>
</div>
