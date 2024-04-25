<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Barryvdh\DomPDF\PDF;
use App\Models\OrderItem;
use App\Models\Orderline;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function generateInvoice($orderId)
    {
        $order = Order::findOrFail($orderId);
       
    $pdf = Pdf::loadView('pdf.invoice', $data);
    return $pdf->download('invoice.pdf');
    }




public function displayInvoice()
{
    try {
      
        $orderId = session('order_id');

        if (!$orderId) {
            throw new \Exception("Order ID not found in session");
        }

        $order = Order::findOrFail($orderId);

      
        $orderItems = Orderline::where('order_id', $orderId)->get();

       
        return view('client.invoice', ['order' => $order, 'orderItems' => $orderItems]);
    } catch (\Exception $e) {
    
        return response()->json(['error' => $e->getMessage()], 400);
    }
}

}
