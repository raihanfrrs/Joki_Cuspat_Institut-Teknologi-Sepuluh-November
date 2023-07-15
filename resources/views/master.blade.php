<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
        {{-- icon website --}}
        <link rel="icon" type="image/x-icon" href="{{ asset('asset/logo-cuspat/Logo/lingkaran.png') }}">

        {{-- tailwindcss & flowbite  --}}
        
        @viteReactRefresh
        @vite('resources/js/app.jsx')
        @vite(['resources/css/app.css','resources/js/app.js'])
        <title>cuspat @yield('title')</title>
        @yield('setup')
   </head>

   <body class="antialiased">
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="resources/js/showPassword.js"></script>
    </body>
</html>
