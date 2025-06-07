<!DOCTYPE html>
<html lang="fa">
<head>
    <style>
        @font-face {
            font-family: 'vazir';
            src: url("{{ storage_path('fonts/Vazirmatn-bold.ttf') }}") format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        body {
            font-family: 'vazir', sans-serif;
            direction: rtl;
            text-align: right;
            font-size: 12pt;
        }
    </style>
    <meta charset="UTF-8">
    <title>فاکتور</title>
</head>
<body>
<h1>فاکتور شماره {{ $invoice->id }}</h1>
<p>مشتری: {{ $invoice->store }}</p>
<p>تاریخ: {{ $invoice->date }}</p>
<p>دسته‌بندی: {{ $invoice->category->name ?? '---' }}</p>
<p>مبلغ: {{ number_format($invoice->price) }} ریال </p>
</body>
</html>
