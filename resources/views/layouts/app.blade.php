<!doctype html>
<html class="antialiased" lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @include('layouts.styles')
    @include('layouts.scripts')

    <title>@yield('title')</title>
</head>
<body class="bg-white text-gray-600 font-sans leading-normal text-base tracking-normal flex min-h-screen flex-col">
<div class="wrapper flex flex-1 flex-col">
    @include('layouts.header')
        @yield('content')
    @include('layouts.footer')
</div>

</body>
</html>
