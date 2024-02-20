<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('admin.includes.link')
</head>
<style>
    .bg{
background-color: white !important;
    }
</style>
<body>
    <!-- Your page content here -->

    <div>
        @include('admin.includes.sidebar')
    </div>

    <header>
        @include('admin.includes.header')
    </header>

    <div class="bg">
        @yield('content')
    </div>

    {{-- <footer>
        @include('admin.includes.footer')
    </footer> --}}
</body>
</html>
