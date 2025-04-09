<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Restaurant;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Services\CartService;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    protected function generateInvoice(Order $order)
    {
        // توليد رقم فريد للفاتورة
        $invoiceNumber = 'INV-' . time();

        // إعداد بيانات الفاتورة
        $data = [
            'order' => $order,
            'customer' => $order->customer,
            'items' => $order->orderItems,
            'totalPrice' => $order->total_price,
            'invoiceNumber' => $invoiceNumber,
        ];

        // إنشاء PDF باستخدام مكتبة DomPDF
        $pdf = PDF::loadView('invoices.invoice_template', $data);

        // تحديد مسار حفظ ملف PDF
        $pdfPath = 'invoices/' . $invoiceNumber . '.pdf';
        $pdf->save(storage_path('app/public/' . $pdfPath));

        // حفظ معلومات الفاتورة في قاعدة البيانات
        Invoice::create([
            'order_id' => $order->id,
            'invoice_number' => $invoiceNumber,
            'pdf_path' => $pdfPath,
        ]);
    }

    public function viewInvoice($order_id, $vendor_slug)
    {
        $order = Order::with('orderItems', 'invoice', 'customer')->find($vendor_slug);
        $restaurant = Restaurant::where('id', $order->restaurant_id)->first();

        $data = [
            'order' =>  $order,
            'customer' => $order->customer,
            'items' => $order->orderItems,
            'totalPrice' =>  $order->total_price,
            'invoiceNumber' => $order->invoice->invoice_number,
            'restaurant' => $restaurant,
            'inovice' => $order->invoice

        ];
        return view('customer.invoices.invoice_template', $data);
    }
}
