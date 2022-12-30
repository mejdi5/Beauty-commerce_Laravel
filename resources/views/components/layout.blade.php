<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/navbar.css"/>
        <link rel="stylesheet" href="/css/auth.css"/>
        <link rel="stylesheet" href="/css/slide.css"/>
        <link rel="stylesheet" href="/css/categories.css"/>
        <link rel="stylesheet" href="/css/products.css"/>
        <link rel="stylesheet" href="/css/product.css"/>
        <link rel="stylesheet" href="/css/cart.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="//unpkg.com/alpinejs" defer></script>
        <title>Beauty</title>
        @livewireStyles
    </head>
    <body class="antialiased">

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <x-navbar/>
            @if (session()->has('success'))
               <span class="flash-message" x-data="{show:true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
                    {{session()->get('success')}}
               </span>
            @endif;
        </div>

        <div class="slot" style="overflow:hidden">
            {{ $slot }}
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        @livewireScripts
    </body>
</html>
