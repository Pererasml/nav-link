<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Navbar - Borabo Lawrence</title>
    @vite('resources/css/app.css')
</head>
<body>

    @include('navbar')

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
