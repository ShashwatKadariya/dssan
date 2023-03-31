<!DOCTYPE html>
<html lang="en-NP">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('images/logo/deerlogo.png') }}" type="image/x-icon">
    <title>ADMIN | DSSAN</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/super-build/ckeditor.js"></script>
    <script src="{{ asset('js/admin.js') }}" defer></script>
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

<body class="min-h-screen bg-gray-100">
    <div>
        @yield('content')
    </div>
    @include('components.delete-confirmation-box')
    @include('components.message-box')
</body>

</html>
