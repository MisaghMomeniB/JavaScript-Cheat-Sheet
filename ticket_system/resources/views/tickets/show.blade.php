<!DOCTYPE html>
<html>
<head>
    <title>جزئیات تیکت</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>{{ $ticket->title }}</h1>
        <p><strong>وضعیت:</strong> {{ $ticket->status }}</p>
        <p><strong>توضیحات:</strong> {{ $ticket->description }}</p>
        <h3>پاسخ‌ها</h3>
        @foreach ($ticket->replies as $reply)
            <div class="card mb-2">
                <div class="card-body">
                    <p>{{ $reply->message }}</p>
                    <small>ارسال شده توسط: {{ $reply->user->name }} در {{ $reply->created_at }}</small>
                </div>
            </div>
        @endforeach
        <form action="{{ route('tickets.reply', $ticket) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="message">پاسخ جدید</label>
                <textarea name="message" id="message" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">ارسال پاسخ</button>
        </form>
    </div>
</body>
</html>