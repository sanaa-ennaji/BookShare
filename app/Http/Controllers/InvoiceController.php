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
    return $pdf->download('invoice-' . $order->id . '-' . $date . '.pdf');
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

       
        return view('client.generate-invoice', ['order' => $order, 'orderItems' => $orderItems]);
    } catch (\Exception $e) {
    
        return response()->json(['error' => $e->getMessage()], 400);
    }
}

}
