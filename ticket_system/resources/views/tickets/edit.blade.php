<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>ویرایش وضعیت تیکت</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(135deg, #00c6ff, #0072ff);
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
    <h1 class="text-3xl font-bold mb-6 text-center">ویرایش وضعیت تیکت</h1>

    <form method="POST" action="/tickets/{{ $ticket->id }}" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block mb-1">عنوان:</label>
            <input type="text" value="{{ $ticket->title }}" disabled class="w-full p-2 rounded bg-white bg-opacity-10 border border-white border-opacity-30 text-white opacity-60 cursor-not-allowed" />
        </div>

        <div>
            <label class="block mb-1">وضعیت:</label>
            <select name="status" class="w-full p-2 rounded bg-white bg-opacity-10 border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-white text-white">
                <option value="open" @if($ticket->status == 'open') selected @endif>باز</option>
                <option value="in_progress" @if($ticket->status == 'in_progress') selected @endif>در حال بررسی</option>
                <option value="closed" @if($ticket->status == 'closed') selected @endif>بسته</option>
            </select>
            @error('status') <div class="text-red-300 mt-1 text-sm">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="w-full py-2 px-4 bg-white bg-opacity-20 hover:bg-opacity-30 transition rounded text-white font-semibold">ذخیره</button>
    </form>

    <div class="mt-4 text-center">
        <a href="/tickets" class="text-white underline hover:text-blue-200 transition">بازگشت</a>
    </div>
</div>

</body>
</html>
