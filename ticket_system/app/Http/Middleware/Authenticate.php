<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * این متد مشخص می‌کنه کاربر در صورت عدم احراز هویت کجا باید هدایت بشه
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login'); // آدرس صفحه لاگین شما
        }
    }
}
