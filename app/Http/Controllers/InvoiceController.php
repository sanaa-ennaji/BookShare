<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function Invoice()
    {
        $pdf = PDF::loadView('invoice_pdf');

        return $pdf->download('itcodestuff.pdf');
    }
}
