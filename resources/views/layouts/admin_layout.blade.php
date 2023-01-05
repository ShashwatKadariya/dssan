<!DOCTYPE html>
<html lang="en-NP">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DSSAN | admin</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="min-h-screen font-sans">

    <div>
        @yield('content')
    </div>

    @livewireScripts
</body>

</html>
