<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>داشبورد</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100">
<div class="flex h-screen">
    <!-- سایدبار -->
    <div class="bg-blue-800 text-white w-64 flex-shrink-0">
        <div class="p-4">
            <h1 class="text-xl font-bold">پنل مدیریت</h1>
            <p class="text-blue-200 text-sm">خوش آمدید، {{ auth()->user()->name }}</p>
        </div>
        <nav class="mt-6">
            <a href="#" class="block py-2 px-4 bg-blue-700 text-white"><i class="fas fa-home ml-2"></i> پیشخوان</a>
            <a href="#" class="block py-2 px-4 hover:bg-blue-700 text-white"><i class="fas fa-user ml-2"></i> پروفایل</a>
            <a href="#" class="block py-2 px-4 hover:bg-blue-700 text-white"><i class="fas fa-envelope ml-2"></i> پیام‌ها</a>
            <a href="#" class="block py-2 px-4 hover:bg-blue-700 text-white"><i class="fas fa-cog ml-2"></i> تنظیمات</a>
            <a href="#" class="block py-2 px-4 hover:bg-blue-700 text-white"><i class="fas fa-chart-bar ml-2"></i> آمارها</a>
        </nav>
    </div>

    <!-- محتوای اصلی -->
    <div class="flex-1 overflow-auto">
        <!-- نوار بالایی -->
        <header class="bg-white shadow-sm">
            <div class="flex justify-between items-center p-4">
                <div>
                    <h2 class="text-xl font-semibold text-gray-800">پیشخوان</h2>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <i class="fas fa-bell text-gray-600"></i>
                        <span class="absolute -top-1 -right-1 h-3 w-3 bg-red-500 rounded-full"></span>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-gray-600 hover:text-blue-600"><i class="fas fa-sign-out-alt ml-1"></i> خروج</button>
                    </form>
                </div>
            </div>
        </header>

        <!-- محتوا -->
        <main class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- کارت‌های آماری -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center">
                        <div class="p-3 bg-blue-100 rounded-full text-blue-600">
                            <i class="fas fa-users text-xl"></i>
                        </div>
                        <div class="mr-4">
                            <h3 class="text-gray-500">کاربران</h3>
                            <p class="text-2xl font-bold">1,234</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center">
                        <div class="p-3 bg-green-100 rounded-full text-green-600">
                            <i class="fas fa-shopping-cart text-xl"></i>
                        </div>
                        <div class="mr-4">
                            <h3 class="text-gray-500">سفارشات</h3>
                            <p class="text-2xl font-bold">567</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-center">
                        <div class="p-3 bg-purple-100 rounded-full text-purple-600">
                            <i class="fas fa-chart-line text-xl"></i>
                        </div>
                        <div class="mr-4">
                            <h3 class="text-gray-500">درآمد</h3>
                            <p class="text-2xl font-bold">12,345,000 تومان</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- جدول آخرین فعالیت‌ها -->
            <div class="mt-8 bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-4">آخرین فعالیت‌ها</h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                        <tr>
                            <th class="px-4 py-2 text-right">#</th>
                            <th class="px-4 py-2 text-right">کاربر</th>
                            <th class="px-4 py-2 text-right">فعالیت</th>
                            <th class="px-4 py-2 text-right">زمان</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-4 py-2">1</td>
                            <td class="px-4 py-2">علی محمدی</td>
                            <td class="px-4 py-2">ثبت سفارش جدید</td>
                            <td class="px-4 py-2">2 ساعت پیش</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">2</td>
                            <td class="px-4 py-2">فاطمه احمدی</td>
                            <td class="px-4 py-2">تغییر رمز عبور</td>
                            <td class="px-4 py-2">5 ساعت پیش</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">3</td>
                            <td class="px-4 py-2">محمد رضایی</td>
                            <td class="px-4 py-2">ارسال پیام</td>
                            <td class="px-4 py-2">1 روز پیش</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html>
