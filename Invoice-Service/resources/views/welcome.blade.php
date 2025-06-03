<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شرکت نمونه | راهکارهای نوین فناوری</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IranSans&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'IranSans', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- هدر -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <img src="/logo.png" alt="لوگو شرکت" class="h-10">
                <h1 class="mr-3 text-xl font-bold text-blue-600">شرکت نمونه</h1>
            </div>
            
            <nav class="hidden md:block">
                <ul class="flex space-x-1 space-x-reverse">
                    <li><a href="#home" class="px-3 py-2 hover:text-blue-600">صفحه اصلی</a></li>
                    <li><a href="#features" class="px-3 py-2 hover:text-blue-600">امکانات</a></li>
                    <li><a href="#pricing" class="px-3 py-2 hover:text-blue-600">تعرفه‌ها</a></li>
                    <li><a href="#about" class="px-3 py-2 hover:text-blue-600">درباره ما</a></li>
                    <li><a href="#contact" class="px-3 py-2 hover:text-blue-600">تماس با ما</a></li>
                </ul>
            </nav>
            
            <div>
                <a href="#login" class="px-4 py-2 text-blue-600 hover:bg-blue-50 rounded-md">ورود</a>
                <a href="#register" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">ثبت‌نام</a>
            </div>
            
            <button class="md:hidden text-gray-600">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
    </header>

    <!-- بخش اصلی -->
    <main>
        <!-- هیرو -->
        <section id="home" class="py-16 bg-gradient-to-l from-blue-50 to-white">
            <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">راهکارهای نوین برای کسب‌وکار شما</h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        با استفاده از سرویس‌های ما، کسب‌وکار خود را به سطح جدیدی ببرید. راهکارهای هوشمند و سفارشی‌سازی شده برای نیازهای شما.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="#demo" class="px-6 py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 text-center">
                            درخواست دمو
                        </a>
                        <a href="#learn-more" class="px-6 py-3 border border-blue-600 text-blue-600 rounded-md hover:bg-blue-50 text-center">
                            بیشتر بدانید
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="/images/hero-image.png" alt="تصویر هیرو" class="rounded-lg shadow-md w-full">
                </div>
            </div>
        </section>

        <!-- امکانات -->
        <section id="features" class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold mb-4">امکانات منحصر به فرد</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">با ویژگی‌های بی‌نظیر ما، تجربه‌ای متفاوت از خدمات دیجیتال داشته باشید</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach([
                        ['icon' => 'fas fa-rocket', 'title' => 'راهکارهای سریع', 'desc' => 'سیستم ما با سرعت بالا کار می‌کند و زمان شما را ذخیره می‌کند'],
                        ['icon' => 'fas fa-shield-alt', 'title' => 'امنیت بالا', 'desc' => 'اطلاعات شما با بالاترین سطح امنیتی محافظت می‌شود'],
                        ['icon' => 'fas fa-cogs', 'title' => 'سفارشی‌سازی', 'desc' => 'راهکارهایی کاملاً متناسب با نیازهای کسب‌وکار شما'],
                        ['icon' => 'fas fa-chart-line', 'title' => 'تحلیل داده', 'desc' => 'ابزارهای تحلیلی پیشرفته برای تصمیم‌گیری بهتر'],
                        ['icon' => 'fas fa-headset', 'title' => 'پشتیبانی 24/7', 'desc' => 'پشتیبانی همه‌روزه و در تمام ساعات برای شما'],
                        ['icon' => 'fas fa-mobile-alt', 'title' => 'واکنش‌گرا', 'desc' => 'سازگار با تمام دستگاه‌ها و سایزهای صفحه نمایش'],
                    ] as $feature)
                    <div class="bg-gray-50 p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                        <div class="text-blue-600 mb-4">
                            <i class="{{ $feature['icon'] }} text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">{{ $feature['title'] }}</h3>
                        <p class="text-gray-600">{{ $feature['desc'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- تعرفه‌ها -->
        <section id="pricing" class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold mb-4">پلن‌های قیمت‌گذاری</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">پلن مناسب برای کسب‌وکار خود را انتخاب کنید</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach([
                        ['name' => 'پایه', 'price' => '۹۹,۰۰۰', 'period' => 'ماهانه', 'features' => ['۳ کاربر', '۵ پروژه', '۱۰GB فضای ذخیره‌سازی', 'پشتیبانی ایمیل']],
                        ['name' => 'حرفه‌ای', 'price' => '۲۹۹,۰۰۰', 'period' => 'ماهانه', 'features' => ['۱۰ کاربر', 'بی‌نهایت پروژه', '۵۰GB فضای ذخیره‌سازی', 'پشتیبانی تلفنی'], 'popular' => true],
                        ['name' => 'سازمانی', 'price' => '۴۹۹,۰۰۰', 'period' => 'ماهانه', 'features' => ['بی‌نهایت کاربر', 'بی‌نهایت پروژه', '۲۰۰GB فضای ذخیره‌سازی', 'پشتیبانی اختصاصی']],
                    ] as $plan)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden {{ isset($plan['popular']) ? 'border-2 border-blue-500 transform md:-translate-y-4' : '' }}">
                        @if(isset($plan['popular']))
                        <div class="bg-blue-500 text-white text-center py-1">
                            پرفروش
                        </div>
                        @endif
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">{{ $plan['name'] }}</h3>
                            <div class="mb-6">
                                <span class="text-3xl font-bold">{{ $plan['price'] }}</span>
                                <span class="text-gray-600">تومان</span>
                                <span class="block text-gray-500 text-sm">{{ $plan['period'] }}</span>
                            </div>
                            <ul class="space-y-3 mb-8">
                                @foreach($plan['features'] as $feature)
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 ml-2"></i>
                                    <span>{{ $feature }}</span>
                                </li>
                                @endforeach
                            </ul>
                            <a href="#signup" class="block w-full py-2 text-center rounded-md {{ isset($plan['popular']) ? 'bg-blue-600 text-white hover:bg-blue-700' : 'border border-blue-600 text-blue-600 hover:bg-blue-50' }}">
                                شروع کنید
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- درباره ما -->
        <section id="about" class="py-16 bg-white">
            <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0 md:ml-8">
                    <img src="/images/about-us.jpg" alt="درباره ما" class="rounded-lg shadow-md w-full">
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-2xl md:text-3xl font-bold mb-4">درباره شرکت ما</h2>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        شرکت نمونه با بیش از ۱۰ سال تجربه در زمینه ارائه راهکارهای نرم‌افزاری، همواره در تلاش بوده تا با استفاده از آخرین فناوری‌ها، بهترین خدمات را به مشتریان خود ارائه دهد.
                    </p>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        تیم ما متشکل از متخصصان مجرب در حوزه‌های مختلف فناوری اطلاعات است که با تعهد و تخصص خود، راهکارهای مناسبی برای چالش‌های کسب‌وکار شما ارائه می‌دهند.
                    </p>
                    <a href="#more-about" class="px-6 py-2 border border-blue-600 text-blue-600 rounded-md hover:bg-blue-50 inline-block">
                        بیشتر درباره ما
                    </a>
                </div>
            </div>
        </section>

        <!-- تماس با ما -->
        <section id="contact" class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold mb-4">تماس با ما</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">برای دریافت مشاوره رایگان و اطلاعات بیشتر با ما در تماس باشید</p>
                </div>
                
                <div class="flex flex-col md:flex-row gap-8">
                    <div class="md:w-1/2 bg-white p-6 rounded-lg shadow-sm">
                        <h3 class="text-xl font-semibold mb-4">اطلاعات تماس</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <i class="fas fa-map-marker-alt text-blue-600 mt-1 ml-2"></i>
                                <div>
                                    <h4 class="font-medium">آدرس</h4>
                                    <p class="text-gray-600">تهران، خیابان نمونه، پلاک ۱۲۳</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-phone text-blue-600 mt-1 ml-2"></i>
                                <div>
                                    <h4 class="font-medium">تلفن</h4>
                                    <p class="text-gray-600">۰۲۱-۱۲۳۴۵۶۷۸</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-envelope text-blue-600 mt-1 ml-2"></i>
                                <div>
                                    <h4 class="font-medium">ایمیل</h4>
                                    <p class="text-gray-600">info@sample.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="md:w-1/2 bg-white p-6 rounded-lg shadow-sm">
                        <h3 class="text-xl font-semibold mb-4">فرم تماس</h3>
                        <form>
                            <div class="mb-4">
                                <label for="name" class="block mb-1">نام کامل</label>
                                <input type="text" id="name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block mb-1">ایمیل</label>
                                <input type="email" id="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div class="mb-4">
                                <label for="subject" class="block mb-1">موضوع</label>
                                <input type="text" id="subject" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div class="mb-4">
                                <label for="message" class="block mb-1">پیام</label>
                                <textarea id="message" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                            </div>
                            <button type="submit" class="w-full py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                                ارسال پیام
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- فوتر -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">شرکت نمونه</h3>
                    <p class="text-gray-400">
                        ارائه دهنده راهکارهای نوین فناوری اطلاعات برای کسب‌وکارهای کوچک و بزرگ
                    </p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">لینک‌های سریع</h3>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-white">صفحه اصلی</a></li>
                        <li><a href="#features" class="text-gray-400 hover:text-white">امکانات</a></li>
                        <li><a href="#pricing" class="text-gray-400 hover:text-white">تعرفه‌ها</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-white">درباره ما</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white">تماس با ما</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">خدمات</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">طراحی وب</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">توسعه نرم‌افزار</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">مشاوره فناوری</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">سئو و بازاریابی</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">شبکه‌های اجتماعی</h3>
                    <div class="flex space-x-4 space-x-reverse">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-telegram text-xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram text-xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin text-xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter text-xl"></i></a>
                    </div>
                    <div class="mt-4">
                        <p class="text-gray-400 mb-2">عضویت در خبرنامه</p>
                        <div class="flex">
                            <input type="email" placeholder="ایمیل شما" class="px-3 py-2 bg-gray-700 text-white rounded-r-md focus:outline-none w-full">
                            <button class="px-4 py-2 bg-blue-600 text-white rounded-l-md hover:bg-blue-700">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-6 text-center text-gray-400">
                <p>© ۱۴۰۲ شرکت نمونه. تمام حقوق محفوظ است.</p>
            </div>
        </div>
    </footer>
</body>
</html>