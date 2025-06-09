<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>ورود</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
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
    <h1 class="text-3xl font-bold mb-6 text-center">ورود</h1>
    <form method="POST" action="/login" class="space-y-4">
        @csrf

        <div>
            <label class="block mb-1">ایمیل:</label>
            <input type="email" name="email" value="{{ old('email') }}" class="w-full p-2 rounded bg-white bg-opacity-10 border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-white focus:bg-opacity-20 text-white placeholder:text-white" placeholder="ایمیل خود را وارد کنید">
            @error('email') <div class="text-red-300 mt-1 text-sm">{{ $message }}</div> @enderror
        </div>

        <div>
            <label class="block mb-1">رمز عبور:</label>
            <input type="password" name="password" class="w-full p-2 rounded bg-white bg-opacity-10 border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-white focus:bg-opacity-20 text-white placeholder:text-white" placeholder="رمز عبور را وارد کنید">
            @error('password') <div class="text-red-300 mt-1 text-sm">{{ $message }}</div> @enderror
        </div>

        @if($errors->any())
            <div class="text-red-400 text-sm bg-white bg-opacity-10 p-2 rounded">
                {{ $errors->first() }}
            </div>
        @endif

        <button type="submit" class="w-full py-2 px-4 bg-white bg-opacity-20 hover:bg-opacity-30 transition rounded text-white font-semibold">ورود</button>
    </form>

    <div class="mt-4 text-center">
        <a href="/register" class="text-white underline hover:text-purple-200 transition">ثبت‌نام</a>
    </div>
</div>

</body>
</html>
