<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود به سیستم</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.fontcdn.ir/Font/Persian/Vazir/Vazir.css" rel="stylesheet">
    <style>
        body {
            font-family: Vazir, sans-serif;
        }
        [dir="rtl"] .form-input {
            text-align: right;
        }
    </style>
</head>
<body class="bg-gray-100 font-Vazir">
<div class="min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-gray-800">ورود به حساب کاربری</h1>
            <p class="text-gray-600 mt-2">لطفاً اطلاعات خود را وارد کنید</p>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-gray-700 mb-2">آدرس ایمیل</label>
                <input type="email" id="email" name="email" class="form-input w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="example@example.com" required>
                @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="block text-gray-700 mb-2">رمز عبور</label>
                <input type="password" id="password" name="password" class="form-input w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="********" required>
                @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center">
                    <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="remember" class="mr-2 block text-gray-700">مرا به خاطر بسپار</label>
                </div>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-200">
                ورود
            </button>

            <div class="mt-4 text-center">
                <p class="text-gray-600">حساب کاربری ندارید؟
                    <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-800">ثبت‌نام کنید</a>
                </p>
            </div>
        </form>
    </div>
</div>
</body>
</html>
