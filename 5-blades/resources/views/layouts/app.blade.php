<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body>
<!-- Navbar -->
@include('layouts.partials.navbar')

@yield('content')

<!-- Footer -->
@include('layouts.partials.footer')
</body>
</html>
