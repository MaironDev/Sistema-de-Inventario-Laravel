<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use App\Http\Livewire\Inventarios;

class PDFController extends Controller
{
    public function getInventario()
    {
        $inventarios = Inventario::all();
       
        return view ('inventariopdf', compact('inventario'));
    }

    public function generatePDF(){
        
        $inventarios = Inventario::all();
        $pdf = PDF::loadView('inventariopdf', compact('inventario'));
        return $pdf-> stream('Inventario.pdf');
    }
}
