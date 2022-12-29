<!DOCTYPE html>
<html lang="en-NP">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DSSAN</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script src="{{ asset('js/main.js') }}" defer></script>
    @livewireStyles
</head>

<body class="min-h-screen flex flex-col bg-white dark:bg-black dark:text-white">
    <livewire:nav-bar />

    <div>
        @yield('content')
    </div>

    <livewire:social-icons />
    <livewire:footer />

    @livewireScripts
</body>

</html>
