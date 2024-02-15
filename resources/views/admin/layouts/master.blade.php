<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('admin.includes.link')
</head>
<body>
    <!-- Your page content here -->

    <div>
        @include('admin.includes.sidebar')
    </div>

    <header>
        @include('admin.includes.header')
    </header>

    <div>
        @yield('content')
    </div>

    {{-- <footer>
        @include('admin.includes.footer')
    </footer> --}}
</body>
</html>
