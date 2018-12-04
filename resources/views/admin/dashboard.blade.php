<head>
    @include('admin.layouts.admin-head')
</head>
<body>
@include('admin.layouts.admin-header')
@include('admin.layouts.left-bar')
<div class="container">
    @yield('content')
</div>
@yield('footer')
</body>

