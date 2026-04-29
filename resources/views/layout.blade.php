<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TStauber Dev</title>

    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">

    @vite(['resources/scss/main.scss'])
</head>
<body>
    @include('components.navbar')

    @yield('content')

    @include('components.footer')
</body>
</html>