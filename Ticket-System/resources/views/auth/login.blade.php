<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>ورود</title>
</head>
<body>
    <h2>ورود به سیستم</h2>

    @if ($errors->any())
        <div style="color: red;">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ url('/login') }}">
        @csrf
        <label>ایمیل:
            <input type="email" name="email" required>
        </label><br>
        <label>رمز عبور:
            <input type="password" name="password" required>
        </label><br>
        <button type="submit">ورود</button>
    </form>
</body>
</html>