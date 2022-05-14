<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Proveedore;

class Proveedores extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre_proveedor, $codigo_proveedor, $direccion_proveedor, $fecha_proveedor, $estado_proveedor;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.proveedores.view', [
            'proveedores' => Proveedore::latest()
						->orWhere('nombre_proveedor', 'LIKE', $keyWord)
						->orWhere('codigo_proveedor', 'LIKE', $keyWord)
						->orWhere('direccion_proveedor', 'LIKE', $keyWord)
						->orWhere('fecha_proveedor', 'LIKE', $keyWord)
						->orWhere('estado_proveedor', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->nombre_proveedor = null;
		$this->codigo_proveedor = null;
		$this->direccion_proveedor = null;
		$this->fecha_proveedor = null;
		$this->estado_proveedor = null;
    }

    public function store()
    {
        $this->validate([
		'nombre_proveedor' => 'required',
		'codigo_proveedor' => 'required',
		'direccion_proveedor' => 'required',
		'fecha_proveedor' => 'required',
		'estado_proveedor' => 'required',
        ]);

        Proveedore::create([ 
			'nombre_proveedor' => $this-> nombre_proveedor,
			'codigo_proveedor' => $this-> codigo_proveedor,
			'direccion_proveedor' => $this-> direccion_proveedor,
			'fecha_proveedor' => $this-> fecha_proveedor,
			'estado_proveedor' => $this-> estado_proveedor
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Proveedor Agregado Exitosamente.');
    }

    public function edit($id)
    {
        $record = Proveedore::findOrFail($id);

        $this->selected_id = $id; 
		$this->nombre_proveedor = $record-> nombre_proveedor;
		$this->codigo_proveedor = $record-> codigo_proveedor;
		$this->direccion_proveedor = $record-> direccion_proveedor;
		$this->fecha_proveedor = $record-> fecha_proveedor;
		$this->estado_proveedor = $record-> estado_proveedor;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'nombre_proveedor' => 'required',
		'codigo_proveedor' => 'required',
		'direccion_proveedor' => 'required',
		'fecha_proveedor' => 'required',
		'estado_proveedor' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Proveedore::find($this->selected_id);
            $record->update([ 
			'nombre_proveedor' => $this-> nombre_proveedor,
			'codigo_proveedor' => $this-> codigo_proveedor,
			'direccion_proveedor' => $this-> direccion_proveedor,
			'fecha_proveedor' => $this-> fecha_proveedor,
			'estado_proveedor' => $this-> estado_proveedor
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Proveedor Actualizado !');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Proveedore::where('id', $id);
            $record->delete();
        }
        session()->flash('message', 'Proveedor Eliminado !');
    }
}
