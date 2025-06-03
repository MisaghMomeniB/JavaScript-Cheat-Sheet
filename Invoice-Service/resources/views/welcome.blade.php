<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>داشبورد مدیریت</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans text-gray-800">
    <div class="flex h-screen">
        <!-- نوار کناری -->
        <aside class="w-64 bg-white shadow-md">
            <div class="p-4 border-b border-gray-200">
                <h1 class="text-xl font-bold text-center text-indigo-600">پنل مدیریت</h1>
            </div>
            <nav class="mt-6">
                <div class="px-4 py-3 flex items-center text-indigo-600 bg-indigo-50 border-r-4 border-indigo-600">
                    <i class="fas fa-home ml-3"></i>
                    <span>داشبورد</span>
                </div>
                <div class="px-4 py-3 flex items-center text-gray-600 hover:text-indigo-600 hover:bg-indigo-50">
                    <i class="fas fa-users ml-3"></i>
                    <span>کاربران</span>
                </div>
                <div class="px-4 py-3 flex items-center text-gray-600 hover:text-indigo-600 hover:bg-indigo-50">
                    <i class="fas fa-box ml-3"></i>
                    <span>محصولات</span>
                </div>
                <div class="px-4 py-3 flex items-center text-gray-600 hover:text-indigo-600 hover:bg-indigo-50">
                    <i class="fas fa-chart-bar ml-3"></i>
                    <span>آمارها</span>
                </div>
                <div class="px-4 py-3 flex items-center text-gray-600 hover:text-indigo-600 hover:bg-indigo-50">
                    <i class="fas fa-cog ml-3"></i>
                    <span>تنظیمات</span>
                </div>
            </nav>
        </aside>

        <!-- محتوای اصلی -->
        <main class="flex-1 overflow-y-auto">
            <!-- هدر -->
            <header class="bg-white shadow-sm p-4 flex justify-between items-center">
                <h2 class="text-lg font-semibold">داشبورد</h2>
                <div class="flex items-center space-x-4 space-x-reverse">
                    <div class="relative">
                        <i class="fas fa-bell text-gray-500"></i>
                        <span class="absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                    </div>
                    <div class="flex items-center">
                        <img src="https://via.placeholder.com/40" alt="پروفایل" class="w-8 h-8 rounded-full">
                        <span class="mr-2">مدیر سیستم</span>
                    </div>
                </div>
            </header>

            <!-- محتوا -->
            <div class="p-6">
                <!-- کارت‌های آماری -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                    <div class="bg-white p-6 rounded-lg shadow-sm border-r-4 border-blue-500">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-gray-500">تعداد کاربران</p>
                                <h3 class="text-2xl font-bold mt-1">1,245</h3>
                            </div>
                            <div class="bg-blue-100 p-3 rounded-full text-blue-600">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm border-r-4 border-green-500">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-gray-500">محصولات</p>
                                <h3 class="text-2xl font-bold mt-1">568</h3>
                            </div>
                            <div class="bg-green-100 p-3 rounded-full text-green-600">
                                <i class="fas fa-box"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm border-r-4 border-yellow-500">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-gray-500">سفارشات</p>
                                <h3 class="text-2xl font-bold mt-1">2,340</h3>
                            </div>
                            <div class="bg-yellow-100 p-3 rounded-full text-yellow-600">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm border-r-4 border-purple-500">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-gray-500">درآمد</p>
                                <h3 class="text-2xl font-bold mt-1">۱۲,۵۰۰,۰۰۰ تومان</h3>
                            </div>
                            <div class="bg-purple-100 p-3 rounded-full text-purple-600">
                                <i class="fas fa-wallet"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- نمودار و جدول -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="font-semibold">آمار بازدید هفتگی</h3>
                            <select class="border border-gray-300 rounded px-3 py-1 text-sm">
                                <option>هفته جاری</option>
                                <option>هفته گذشته</option>
                            </select>
                        </div>
                        <div class="h-64 bg-gray-100 rounded flex items-center justify-center">
                            [نمودار اینجا قرار می‌گیرد]
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <h3 class="font-semibold mb-4">آخرین سفارشات</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">شماره سفارش</th>
                                        <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">مبلغ</th>
                                        <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">وضعیت</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm">#ORD-1234</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm">۱,۲۵۰,۰۰۰ تومان</td>
                                        <td class="px-4 py-3 whitespace-nowrap"><span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">تکمیل شده</span></td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm">#ORD-1233</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm">۸۵۰,۰۰۰ تومان</td>
                                        <td class="px-4 py-3 whitespace-nowrap"><span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800">در حال پردازش</span></td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm">#ORD-1232</td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm">۲,۴۵۰,۰۰۰ تومان</td>
                                        <td class="px-4 py-3 whitespace-nowrap"><span class="px-2 py-1 text-xs rounded-full bg-red-100 text-red-800">لغو شده</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>