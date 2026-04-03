<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <a href="/home">Home</a>
        <a href="/login">Login</a>
        <a href="/about">About</a>  
        <a href="/logout">Logout</a>
    </header>
    @yield('content')
    <hr>
    <footer>
        @yield('footer')
    </footer>
</body>
</html>