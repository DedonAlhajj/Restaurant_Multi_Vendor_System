<!DOCTYPE html>
<html lang="ar">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="UTF-8">
    <title>فاتورة</title>
    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif; /* استخدم الخط العربي هنا */
            direction: rtl; /* اجعل اتجاه النص من اليمين إلى اليسار */
            padding: 0;
        }
        h1 {
            font-size: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: right; /* اجعل النص داخل الخلايا متجه لليمين */
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>فاتورة رقم: {{ $invoiceNumber }}</h1>
    <p>رقم الطلب: {{ $order->id }}</p>
    <p>العميل: {{ $customer->name }}</p>

    <h2>تفاصيل الطلب</h2>
    <table>
        <thead>
            <tr>
                <th>المنتج</th>
                <th>الكمية</th>
                <th>السعر</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr>
                <td>{{ $item->foodItem->name }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <p>السعر الإجمالي: {{ $totalPrice }}</p>
</body>
</html>