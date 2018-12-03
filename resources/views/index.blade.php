<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
</head>
<body>
    @include('layouts.header')
<div class="container">
    @yield('content')
</div>
    @yield('footer')
</body>
</html>
