<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>ثبت نام</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(135deg, #43cea2, #185a9d);
        }

        .glass {
            backdrop-filter: blur(16px) saturate(180%);
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            background-color: rgba(255, 255, 255, 0.15);
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center px-4">

<div class="glass p-8 max-w-md w-full text-white shadow-xl">
    <h1 class="text-3xl font-bold mb-6 text-center">ثبت نام</h1>
    <form method="POST" action="/register" class="space-y-4">
        @csrf

        <div>
            <label class="block mb-1">نام:</label>
            <input type="text" name="name" value="{{ old('name') }}" class="w-full p-2 rounded bg-white bg-opacity-10 border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-white text-white placeholder:text-white" placeholder="نام کامل">
            @error('name') <div class="text-red-300 mt-1 text-sm">{{ $message }}</div> @enderror
        </div>

        <div>
            <label class="block mb-1">ایمیل:</label>
            <input type="email" name="email" value="{{ old('email') }}" class="w-full p-2 rounded bg-white bg-opacity-10 border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-white text-white placeholder:text-white" placeholder="ایمیل">
            @error('email') <div class="text-red-300 mt-1 text-sm">{{ $message }}</div> @enderror
        </div>

        <div>
            <label class="block mb-1">رمز عبور:</label>
            <input type="password" name="password" class="w-full p-2 rounded bg-white bg-opacity-10 border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-white text-white placeholder:text-white" placeholder="رمز عبور">
            @error('password') <div class="text-red-300 mt-1 text-sm">{{ $message }}</div> @enderror
        </div>

        <div>
            <label class="block mb-1">تکرار رمز عبور:</label>
            <input type="password" name="password_confirmation" class="w-full p-2 rounded bg-white bg-opacity-10 border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-white text-white placeholder:text-white" placeholder="تکرار رمز عبور">
        </div>

        <button type="submit" class="w-full py-2 px-4 bg-white bg-opacity-20 hover:bg-opacity-30 transition rounded text-white font-semibold">ثبت نام</button>
    </form>

    <div class="mt-4 text-center">
        <a href="/login" class="text-white underline hover:text-green-200 transition">ورود</a>
    </div>
</div>

</body>
</html>
