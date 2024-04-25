<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
// use Barryvdh\DomPDF\PDF;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Orderline;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    public function generateInvoice($orderId)
    {
        $order = Order::findOrFail($orderId);
        $data = ['order' => $order];
        $pdf = Pdf::loadView('client.generate-invoice', $data);
        $date = Carbon::now()->format('d-m-y');
        $fileName = 'invoice-' . $order->id . '-' . $date . '.pdf';
    
        return $pdf->download($fileName);
    }
    




    public function displayInvoice($orderId)
    {
        try {
            $order = Order::findOrFail($orderId);
            return view('client.generate-invoice', compact('order'));
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
    
    
    
    
    
}
