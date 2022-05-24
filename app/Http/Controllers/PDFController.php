<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF as PDF; 

class PDFController extends Controller{

	public function getPDF(){
		$pdf = \App::make('dompdf.wrapper');
		$pdf = PDF::loadView('inventario');
		return $pdf->stream('prueba.pdf');
	}
}
