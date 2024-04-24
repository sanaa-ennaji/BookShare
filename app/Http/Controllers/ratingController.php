<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ratingController extends Controller
{
 
    public function download() {
        $pdf = Pdf::loadView('pdf');
     
        return $pdf->download();
    }
}
