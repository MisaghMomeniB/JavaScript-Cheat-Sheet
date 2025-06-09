<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تیکت‌ها</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(135deg, #8360c3, #2ebf91);
        }

        .glass {
            backdrop-filter: blur(16px) saturate(180%);
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            background-color: rgba(255, 255, 255, 0.15);
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        table {
            direction: rtl;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col items-center justify-start px-4 py-10 text-white">

<div class="glass w-full max-w-5xl p-6 shadow-xl">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">تیکت‌ها</h1>
        <div class="space-x-4 space-x-reverse">
            <a href="/tickets/create" class="inline-block px-4 py-2 bg-white bg-opacity-20 hover:bg-opacity-30 rounded transition">ایجاد تیکت جدید</a>
            <a href="/logout" class="inline-block px-4 py-2 bg-red-400 bg-opacity-30 hover:bg-opacity-50 rounded transition">خروج</a>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-sm text-white text-right border border-white border-opacity-30 rounded overflow-hidden">
            <thead class="bg-white bg-opacity-10 text-white">
            <tr>
                <th class="p-3 border-b border-white border-opacity-20">عنوان</th>
                @if($role == 'admin')
                    <th class="p-3 border-b border-white border-opacity-20">کاربر</th>
                @endif
                <th class="p-3 border-b border-white border-opacity-20">وضعیت</th>
                @if($role == 'admin')
                    <th class="p-3 border-b border-white border-opacity-20">ویرایش</th>
                @endif
            </tr>
            </thead>
            <tbody class="divide-y divide-white divide-opacity-20">
            @foreach($tickets as $ticket)
                <tr class="hover:bg-white hover:bg-opacity-10 transition">
                    <td class="p-3">{{ $ticket->title }}</td>
                    @if($role == 'admin')
                        <td class="p-3">{{ $ticket->user->name }}</td>
                    @endif
                    <td class="p-3">
                        @if($ticket->status == 'open')
                            <span class="text-green-300">باز</span>
                        @elseif($ticket->status == 'in_progress')
                            <span class="text-yellow-300">در حال بررسی</span>
                        @else
                            <span class="text-red-300">بسته</span>
                        @endif
                    </td>
                    @if($role == 'admin')
                        <td class="p-3">
                            <a href="/tickets/{{ $ticket->id }}/edit" class="underline hover:text-purple-200">ویرایش</a>
                        </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $tickets->links() }}
    </div>
</div>

</body>
</html>
