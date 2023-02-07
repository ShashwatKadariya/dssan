<!DOCTYPE html>
<html lang="en-NP">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DSSAN</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
    <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script src="{{ asset('js/user.js') }}" defer></script>
    @livewireStyles
    <style>
        /* Minimize autofill highlighting */
        input:-webkit-autofill {
            -webkit-text-fill-color: #111827 !important;
            -webkit-box-shadow: 0 0 0 0 #f3f4f6 inset !important;
            background-clip: content-box !important;
        }

        /* scrollbar styling */
        ::-webkit-scrollbar {
            display: none;
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="min-h-screen flex flex-col bg-ui-white">
    <livewire:nav-bar />
    <main>
        @yield('content')
    </main>
    <livewire:feedback-form />
    <livewire:notification-box />
    <livewire:social-icons />
    <livewire:footer />
    @livewireScripts
</body>

</html>
