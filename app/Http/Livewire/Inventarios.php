<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Inventario;

class Inventarios extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $cantidad_producto, $nombre_producto, $codigo_producto, $fecha_producto, $valor_producto, $valor_total;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.inventarios.view', [
            'inventarios' => Inventario::latest()
						->orWhere('cantidad_producto', 'LIKE', $keyWord)
						->orWhere('nombre_producto', 'LIKE', $keyWord)
						->orWhere('codigo_producto', 'LIKE', $keyWord)
						->orWhere('fecha_producto', 'LIKE', $keyWord)
						->orWhere('valor_producto', 'LIKE', $keyWord)
						->orWhere('valor_total', 'LIKE', $keyWord)
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
		$this->cantidad_producto = null;
		$this->nombre_producto = null;
		$this->codigo_producto = null;
		$this->fecha_producto = null;
		$this->valor_producto = null;
		$this->valor_total = null;
    }

    public function store()
    {
        $this->validate([
		'cantidad_producto' => 'required',
		'nombre_producto' => 'required',
		'codigo_producto' => 'required',
		'fecha_producto' => 'required',
		'valor_producto' => 'required',
		'valor_total' => 'required',
        ]);

        Inventario::create([ 
			'cantidad_producto' => $this-> cantidad_producto,
			'nombre_producto' => $this-> nombre_producto,
			'codigo_producto' => $this-> codigo_producto,
			'fecha_producto' => $this-> fecha_producto,
			'valor_producto' => $this-> valor_producto,
			'valor_total' => $this-> valor_total
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Pedido Agregado Correctamente.');
    }

    public function edit($id)
    {
        $record = Inventario::findOrFail($id);

        $this->selected_id = $id; 
		$this->cantidad_producto = $record-> cantidad_producto;
		$this->nombre_producto = $record-> nombre_producto;
		$this->codigo_producto = $record-> codigo_producto;
		$this->fecha_producto = $record-> fecha_producto;
		$this->valor_producto = $record-> valor_producto;
		$this->valor_total = $record-> valor_total;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'cantidad_producto' => 'required',
		'nombre_producto' => 'required',
		'codigo_producto' => 'required',
		'fecha_producto' => 'required',
		'valor_producto' => 'required',
		'valor_total' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Inventario::find($this->selected_id);
            $record->update([ 
			'cantidad_producto' => $this-> cantidad_producto,
			'nombre_producto' => $this-> nombre_producto,
			'codigo_producto' => $this-> codigo_producto,
			'fecha_producto' => $this-> fecha_producto,
			'valor_producto' => $this-> valor_producto,
			'valor_total' => $this-> valor_total
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Pedido Actualizado.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Inventario::where('id', $id);
            $record->delete();
        }
        session()->flash('message', 'Registro Eliminado.');
    }
}
