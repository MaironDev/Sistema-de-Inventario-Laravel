<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'inventario';

    protected $fillable = ['cantidad_producto','nombre_producto','codigo_producto','fecha_producto','valor_producto','valor_total'];
	
}
