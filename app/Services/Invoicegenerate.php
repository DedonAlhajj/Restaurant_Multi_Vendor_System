<?php

namespace App\services;


use App\Models\Invoice;
use App\Models\Restaurant;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Services\CartService;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Invoicegenerate
{
    public function generateInvoice(Order $order)
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
        // dd($data);
        $pdf = PDF::loadView('customer.invoices.invoice-download', $data );
        // تحديد مسار حفظ ملف PDF
        $pdfPath = 'invoices/' . $invoiceNumber . '.pdf';
        
       
        Storage::disk('public')->put($pdfPath, $pdf->output());
        // $pdf->save(storage_path('public/' . $pdfPath));

        // حفظ معلومات الفاتورة في قاعدة البيانات
        Invoice::create([
            'order_id' => $order->id,
            'invoice_number' => $invoiceNumber,
            'pdf_path' => $pdfPath,
        ]);
        return response()->download(storage_path('app/public/' .  $pdfPath));

    }

    //<a href="{{ asset('storage/' . $invoice->pdf_path) }}" target="_blank">Download Invoice</a>

}
