<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
    <title>
        @yield('title')
    </title>
</head>
<body>
    {{-- nav --}}
    @include('partials.nav')

    {{-- header --}}
    @include('partials.header')

    {{-- content section --}}
    @yield('content')

    {{-- footer --}}
    @include('partials.footer')

    {{-- footer-script --}}
    @include('partials.footer-script')
</body>
</html>