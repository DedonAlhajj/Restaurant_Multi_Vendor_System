<?php

namespace Database\Seeders;

use App\Models\Invoice;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InvoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Invoice::create([
            'order_id' => 1, // First order
            'invoice_number' => 'INV-1001',
            'pdf_path' => 'invoices/inv-1001.pdf',
        ]);

        Invoice::create([
            'order_id' => 2, // Second order
            'invoice_number' => 'INV-1002',
            'pdf_path' => 'invoices/inv-1002.pdf',
        ]);
    }
}
