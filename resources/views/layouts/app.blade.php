<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Laravel')</title>
    <meta name="description" content="@yield('meta_description', 'Default description')">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        {{-- 🌐 Language Switch --}}
        <div style="margin-bottom: 20px;">
            <a href="{{ url('lang/en') }}">English</a> | 
            <a href="{{ url('lang/ar') }}">العربية</a>
        </div>

        {{-- Page Content --}}
        @yield('content')
    </div>
</body>
</html>
