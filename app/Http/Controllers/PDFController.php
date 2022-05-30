<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class PDFController extends Controller
{
    public function getInventario()
    {
        $inventario = Inventario::all();
       
        return view ('inventariopdf', compact('inventario'));
    }

    public function generatePDF(){
        
        $inventario = Inventario::all();
        $pdf = PDF::loadView('inventariopdf', compact('inventario'));
        return $pdf-> stream('Inventario.pdf');
    }
}
