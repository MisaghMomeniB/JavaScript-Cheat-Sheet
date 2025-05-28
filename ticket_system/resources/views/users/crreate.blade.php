@extends('layouts.app')

@section('content')
    <h1>افزودن کاربر جدید</h1>

    @if ($errors->any())
        <div style="color: red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label>نام کاربری:</label>
        <input type="text" name="username" value="{{ old('username') }}" required><br><br>

        <label>شماره تلفن:</label>
        <input type="text" name="phone_number" value="{{ old('phone_number') }}" required><br><br>

        <label>رمز عبور:</label>
        <input type="password" name="password" required><br><br>

        <button type="submit">ثبت</button>
    </form>

    <a href="{{ route('users.index') }}">بازگشت</a>
@endsection
