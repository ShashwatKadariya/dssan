<!DOCTYPE html>
<html lang="en-NP">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('images/logo/deerlogo.png') }}" type="image/x-icon">
    <title>ADMIN | DSSAN</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script src="{{ asset('js/main.js') }}" defer></script>
    @livewireStyles
</head>

<body class="min-h-screen font-sans bg-gray-100">
    <div>
        @yield('content')
    </div>
    <livewire:delete-confirmation-box />
    <livewire:message-box />
    @livewireScripts
</body>

</html>
