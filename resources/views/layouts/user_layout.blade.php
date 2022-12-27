<!DOCTYPE html>
<html lang="en-NP">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DSSAN</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body>
    <livewire:nav-bar />

    <div class="main">
        @yield('content')
    </div>

    <livewire:social-icons />
    <livewire:footer />

    @livewireScripts
</body>

</html>
