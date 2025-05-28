@extends('layouts.app')

@section('content')
    <h1>لیست کاربران</h1>

    @if(session('success'))
        <div style="color: green">{{ session('success') }}</div>
    @endif

    <a href="{{ route('users.create') }}">+ افزودن کاربر جدید</a>

    <table border="1" cellpadding="8" style="margin-top: 20px">
        <thead>
            <tr>
                <th>شناسه</th>
                <th>نام کاربری</th>
                <th>شماره تلفن</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->phone_number }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}">ویرایش</a> |
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('حذف شود؟')">حذف</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
