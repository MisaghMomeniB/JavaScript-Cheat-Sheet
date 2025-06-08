<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.fontcdn.ir/Font/Persian/Vazir/Vazir.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>ثبت فاکتور</title>
    <style>
        [dir="rtl"] .form-input {
            text-align: right;
        }
    </style>
</head>
<body class="font-Vazir bg-gray-50">
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">ثبت فاکتور جدید</h1>

        <form method="POST" action="{{ route('invoices.store') }}" class="space-y-4">
            @csrf
            <!-- تاریخ -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="date" class="block text-sm font-medium text-gray-700 mb-1">تاریخ</label>
                    <input type="date" id="date" name="date"
                           class="form-input w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>

                <!-- فروشگاه -->
                <div>
                    <label for="store" class="block text-sm font-medium text-gray-700 mb-1">فروشگاه</label>
                    <input type="text" id="store" name="store"
                           class="form-input w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>
            </div>

            <!-- دسته بندی -->
            <div>
                <label for="category_id" class="block text-sm font-medium text-gray-700 mb-1">دسته بندی</label>
                <select id="category_id" name="category_id"
                        class="form-input w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">انتخاب کنید</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- قیمت -->
            <div>
                <label for="price" class="block text-sm font-medium text-gray-700 mb-1">قیمت</label>
                <div class="relative">
                    <input type="number" id="price" name="price" placeholder="ریال"
                           class="form-input w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 pl-12" />
                    <span class="absolute left-3 top-2 text-gray-500">ریال</span>
                </div>
                {{-- Rial Change to Toman --}}
                <p id="toman-display" class="text-sm text-green-600 mt-2" ></p>
            </div>

            <!-- توضیحات -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">توضیحات</label>
                <textarea id="description" name="description" rows="3"
                          class="form-input w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <!-- دکمه‌ها -->
            <div class="flex justify-end space-x-4 space-x-reverse pt-4">
                <button type="button"
                        class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    انصراف
                </button>
                <button type="submit"
                        class="px-4 py-2 border border-transparent rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    ثبت فاکتور
                </button>
            </div>
        </form>

    </div>
</div>

@if(session('invoice_pdf'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            Swal.fire({
                title: 'فاکتور ثبت شد!',
                text: 'برای دانلود',
                icon: 'success',
                showCancelButton: true,
                confirmButtonText: 'مشاهده فاکتور',
                cancelButtonText: 'بستن',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.open('{{ session('invoice_pdf') }}', '_blank');
                }
            });
        });
    </script>
@endif

{{-- <script>
    document.addEventListener("DOMContentLoaded", function () {
        const priceInput = document.getElementById("price");
        const tomanDisplay = document.getElementById("toman-display");

        priceInput.addEventListener("input", function () {
            const rial = parseInt(priceInput.value, 10);
            if (!isNaN(rial)) {
                const toman = rial / 10;
                tomanDisplay.textContent = "" + toman.toLocaleString() + " تومان";
            } else {
                tomanDisplay.textContent = "تومان: --";
            }
        });
    });
</script> --}}

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const priceInput = document.getElementById("price");
        const tomanDisplay = document.getElementById("toman-display");

        priceInput.addEventListener("input", function () {
            const rial = parseInt(priceInput.value, 10);
            if (!isNaN(rial)) {
                const toman = Math.floor(rial / 10);
                const tomanText = numberToPersianWords(toman);
                tomanDisplay.textContent = "" + tomanText + " تومان";
            } else {
                tomanDisplay.textContent = "";
            }
        });

        // تابع تبدیل عدد به حروف فارسی
        function numberToPersianWords(num) {
            const yekan = ["", "یک", "دو", "سه", "چهار", "پنج", "شش", "هفت", "هشت", "نه"];
            const dahgan = ["", "ده", "بیست", "سی", "چهل", "پنجاه", "شصت", "هفتاد", "هشتاد", "نود"];
            const dah = ["ده", "یازده", "دوازده", "سیزده", "چهارده", "پانزده", "شانزده", "هفده", "هجده", "نوزده"];
            const sadgan = ["", "صد", "دویست", "سیصد", "چهارصد", "پانصد", "ششصد", "هفتصد", "هشتصد", "نهصد"];
            const basex = ["", "هزار", "میلیون", "میلیارد"];

            if (num === 0) return "صفر";

            const parts = [];
            let section = 0;

            while (num > 0) {
                let part = num % 1000;
                if (part !== 0) {
                    let str = "";
                    let s = Math.floor(part / 100);
                    let d = Math.floor((part % 100) / 10);
                    let y = part % 10;

                    if (s > 0) str += sadgan[s] + " ";
                    if (d === 1 && y > 0) {
                        str += (s > 0 ? "و " : "") + dah[y] + " ";
                    } else {
                        if (d > 0) str += (s > 0 ? "و " : "") + dahgan[d] + " ";
                        if (y > 0) str += ((s > 0 || d > 0) ? "و " : "") + yekan[y] + " ";
                    }

                    parts.unshift(str.trim() + (basex[section] ? " " + basex[section] : ""));
                }
                section++;
                num = Math.floor(num / 1000);
            }

            return parts.join(" و ");
        }
    });
</script>


</body>
</html>
