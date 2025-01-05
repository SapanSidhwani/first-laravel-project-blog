<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Bye Blog')</title>
</head>

<body>
    <header>
        <h1>My Blog</h1>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>Copyright &copy; 2025. All rights reserved.</p>
    </footer>
</body>

</html>