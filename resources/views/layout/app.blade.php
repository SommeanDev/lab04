<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-900 w-full h-full flex-column content-center">
    @include('layout.header')
    <div class="max-w-full">
        @yield('appcontents')
    </div>
    @include('layout.footer')
</body>
</html>
