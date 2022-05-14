<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedore extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'proveedores';

    protected $fillable = ['nombre_proveedor','codigo_proveedor','direccion_proveedor','fecha_proveedor','estado_proveedor'];
	
}
