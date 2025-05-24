{{-- resources/views/admin/dashboard.blade.php --}}
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>داشبورد ادمین</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .logout-btn {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>داشبورد ادمین</h1>

    @if($tickets->isEmpty())
        <p>تیکتی وجود ندارد.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>شناسه</th>
                    <th>کاربر</th>
                    <th>موضوع</th>
                    <th>وضعیت</th>
                    <th>ایجاد شده</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tickets as $ticket)
                    <tr>
                        <td>{{ $ticket->id }}</td>
                        <td>{{ $ticket->user->name ?? 'بدون کاربر' }}</td>
                        <td>
                            <a href="{{ route('tickets.show', $ticket->id) }}">
                                {{ $ticket->subject }}
                            </a>
                        </td>
                        <td>{{ $ticket->status }}</td>
                        <td>{{ $ticket->created_at->diffForHumans() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <form method="POST" action="{{ route('logout') }}" class="logout-btn">
        @csrf
        <button type="submit">خروج از سیستم</button>
    </form>
</body>
</html>
    