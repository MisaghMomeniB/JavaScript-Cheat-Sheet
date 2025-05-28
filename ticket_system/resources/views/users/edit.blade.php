@extends('layouts.app')

@section('content')
    <h1>ویرایش کاربر</h1>

    @if ($errors->any())
        <div style="color: red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>نام کاربری:</label>
        <input type="text" name="username" value="{{ old('username', $user->username) }}" required><br><br>

        <label>شماره تلفن:</label>
        <input type="text" name="phone_number" value="{{ old('phone_number', $user->phone_number) }}" required><br><br>

        <label>رمز عبور جدید (در صورت نیاز):</label>
        <input type="password" name="password"><br><br>

        <button type="submit">ذخیره تغییرات</button>
    </form>

    <a href="{{ route('users.index') }}">بازگشت</a>
@endsection
