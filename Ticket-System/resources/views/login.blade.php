<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود به سیستم | صفحه لاگین</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/fonts.css" rel="stylesheet" type="text/css" />
    <style>
        .glass-effect {
            background: rgba(30, 30, 30, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(255, 215, 0, 0.2);
        }
        .golden-text {
            background: linear-gradient(45deg, #D4AF37, #F9D423, #D4AF37);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .input-focus:focus {
            box-shadow: 0 0 0 2px rgba(212, 175, 55, 0.5);
        }
    </style>
</head>
<body class="bg-gray-900 text-gray-100 font-vazir min-h-screen flex items-center justify-center bg-[url('https://images.unsplash.com/photo-1519681393784-d120267933ba?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80')] bg-cover bg-center">
    <div class="glass-effect p-8 w-full max-w-md mx-4">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold mb-2 golden-text">خوش آمدید</h1>
            <p class="text-gray-300">لطفا برای ورود به سیستم اطلاعات خود را وارد کنید</p>
        </div>

        <form class="space-y-6">
            <div>
                <label for="username" class="block text-sm font-medium text-gray-300 mb-1">نام کاربری</label>
                <input 
                    type="text" 
                    id="username" 
                    class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none input-focus text-gray-200 placeholder-gray-500 transition-all"
                    placeholder="نام کاربری خود را وارد کنید"
                    autocomplete="username">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-300 mb-1">رمز عبور</label>
                <input 
                    type="password" 
                    id="password" 
                    class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none input-focus text-gray-200 placeholder-gray-500 transition-all"
                    placeholder="رمز عبور خود را وارد کنید"
                    autocomplete="current-password">
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input 
                        id="remember-me" 
                        type="checkbox" 
                        class="h-4 w-4 text-yellow-600 focus:ring-yellow-500 border-gray-600 rounded bg-gray-700">
                    <label for="remember-me" class="mr-2 block text-sm text-gray-300">مرا به خاطر بسپار</label>
                </div>

                <a href="#" class="text-sm text-yellow-400 hover:text-yellow-300 transition-colors">رمز عبور را فراموش کرده‌اید؟</a>
            </div>

            <button 
                type="submit" 
                class="w-full py-3 px-4 bg-gradient-to-r from-yellow-600 to-yellow-700 hover:from-yellow-700 hover:to-yellow-800 text-white font-bold rounded-lg transition-all duration-300 shadow-lg hover:shadow-yellow-900/30 flex items-center justify-center">
                <span>ورود به سیستم</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                </svg>
            </button>
        </form>

        <div class="mt-6 text-center">
            <p class="text-gray-400">حساب کاربری ندارید؟ 
                <a href="#" class="text-yellow-400 hover:text-yellow-300 font-medium transition-colors">ثبت نام کنید</a>
            </p>
        </div>
    </div>
</body>
</html>