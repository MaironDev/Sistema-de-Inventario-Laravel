<?php

namespace Database\Factories;

use App\Models\Proveedore;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProveedoreFactory extends Factory
{
    protected $model = Proveedore::class;

    public function definition()
    {
        return [
			'nombre_proveedor' => $this->faker->name,
			'codigo_proveedor' => $this->faker->name,
			'direccion_proveedor' => $this->faker->name,
			'fecha_proveedor' => $this->faker->name,
			'estado_proveedor' => $this->faker->name,
        ];
    }
}
