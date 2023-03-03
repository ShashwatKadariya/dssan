<!DOCTYPE html>
<html lang="en-NP">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('images/logo/deerlogo.png') }}" type="image/x-icon">
    <title>DSSAN</title>
    @vite('resources/css/app.css')
    <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
    <script src="{{ asset('js/user.js') }}" defer></script>
    <script src="{{ asset('js/number-rush.js') }}"></script>
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

        /* css check */
        * {
            /* border: 1px solid red; */
        }
    </style>
</head>

<body class="min-h-screen flex flex-col font-sans">
    <script>
        AOS.init();
    </script>
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
