<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>ایجاد تیکت</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(135deg, #ff9966, #ff5e62);
        }

        .glass {
            backdrop-filter: blur(16px) saturate(180%);
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center px-4">

<div class="glass p-8 max-w-md w-full text-white shadow-xl">
    <h1 class="text-3xl font-bold mb-6 text-center">ایجاد تیکت</h1>

    <form method="POST" action="/tickets" class="space-y-4">
        @csrf

        <div>
            <label class="block mb-1">عنوان:</label>
            <input type="text" name="title" value="{{ old('title') }}" class="w-full p-2 rounded bg-white bg-opacity-10 border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-white text-white placeholder:text-white" placeholder="عنوان تیکت">
            @error('title') <div class="text-red-300 mt-1 text-sm">{{ $message }}</div> @enderror
        </div>

        <div>
            <label class="block mb-1">توضیح:</label>
            <textarea name="description" rows="4" class="w-full p-2 rounded bg-white bg-opacity-10 border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-white text-white placeholder:text-white" placeholder="توضیحات را وارد کنید">{{ old('description') }}</textarea>
            @error('description') <div class="text-red-300 mt-1 text-sm">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="w-full py-2 px-4 bg-white bg-opacity-20 hover:bg-opacity-30 transition rounded text-white font-semibold">ایجاد</button>
    </form>

    <div class="mt-4 text-center">
        <a href="/tickets" class="text-white underline hover:text-orange-200 transition">بازگشت</a>
    </div>
</div>

</body>
</html>
