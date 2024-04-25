<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Barryvdh\DomPDF\PDF;
use App\Models\OrderItem;
use App\Models\Orderline;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    // public function Invoice()
    // {
    //     $pdf = PDF::loadView('invoice_pdf');

    //     return $pdf->download('itcodestuff.pdf');
    // }




public function displayInvoice()
{
    try {
      
        $orderId = session('order_id');

        if (!$orderId) {
            throw new \Exception("Order ID not found in session");
        }

        $order = Order::findOrFail($orderId);

      
        $orderItems = Orderline::where('order_id', $orderId)->get();

       
        return view('invoice', ['order' => $order, 'orderItems' => $orderItems]);
    } catch (\Exception $e) {
    
        return response()->json(['error' => $e->getMessage()], 400);
    }
}

}
