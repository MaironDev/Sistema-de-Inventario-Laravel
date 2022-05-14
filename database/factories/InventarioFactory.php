<?php

namespace Database\Factories;

use App\Models\Inventario;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class InventarioFactory extends Factory
{
    protected $model = Inventario::class;

    public function definition()
    {
        return [
			'cantidad_producto' => $this->faker->name,
			'nombre_producto' => $this->faker->name,
			'codigo_producto' => $this->faker->name,
			'fecha_producto' => $this->faker->name,
			'valor_producto' => $this->faker->name,
			'valor_total' => $this->faker->name,
        ];
    }
}
