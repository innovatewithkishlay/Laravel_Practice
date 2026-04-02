<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        This is my header, Here I will have Home, About, Login, Logout
    </header>

    <img src="{{ asset('images/image.png') }}" alt="">

    @yield('childdata')

    <footer>
        ©2026 All rights reserved by Kishlay Kumar
    </footer>
</body>
</html>