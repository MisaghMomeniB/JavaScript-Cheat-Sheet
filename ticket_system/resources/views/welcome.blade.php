<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <title>صفحه لندینگ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;
        }
        .glass {
            backdrop-filter: blur(14px) saturate(180%);
            -webkit-backdrop-filter: blur(14px) saturate(180%);
            background-color: rgba(255, 255, 255, 0.15);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>
<body class="flex flex-col min-h-screen">

<!-- Navbar -->
<nav class="glass w-full px-6 py-4 flex justify-between items-center shadow-lg fixed top-0 left-0 right-0 z-50">
    <div class="text-white font-bold text-xl">MisaghMomeniB</div>
    <div class="space-x-4 space-x-reverse">
        <a href="/login" class="text-white px-4 py-2 rounded-md bg-white bg-opacity-20 hover:bg-opacity-40 transition">ورود</a>
        <a href="/register" class="text-white px-4 py-2 rounded-md bg-white bg-opacity-20 hover:bg-opacity-40 transition">ثبت نام</a>
    </div>
</nav>

<!-- Spacer to prevent content hiding behind fixed navbar -->
<div class="h-16"></div>

<!-- Optional: Centered content or hero could be here -->

</body>
</html>
