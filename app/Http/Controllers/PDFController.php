<?php

namespace App\Http\Controllers;

use App\Models\User;
use PDF;

// use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function generatePDF()
    {
        return view('pdf', [
            'data' => User::all(),
        ]);
    }

    // Generate PDF
    public function createPDF()
    {
        $data = User::all();

    	$pdf = PDF::loadview('cetak-pdf',['data'=>$data]);

        // return $pdf->stream(); // Menampilkan dulu
    	return $pdf->download('laporan-pdf'); //Langsung download
    }

}
