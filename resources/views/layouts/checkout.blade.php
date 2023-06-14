<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- Penambahan style sebelum style --}}
    @stack('prepend-style')
    {{-- Style --}}
    @include('includes.style')
    {{-- Jika ada penambahan di bagian style gunakan stack --}}
    @stack('addon-style')

</head>
<body>
    <!-- Bagian Navbar -->
    @include('includes.navbar-alternate')

    {{-- Bagian Main --}}
    @yield('content')

    <!-- Bagian Footer -->
    @include('includes.footer')

    {{-- Penambahan script sebelum script --}}
    @stack('prepend-script')
    {{-- Script --}}
    @include('includes.script')
    {{-- Jika ada penambahan di bagian script gunakan stack --}}
    @stack('addon-script')

</body>
</html>