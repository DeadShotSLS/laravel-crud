<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @include('auth.Includes.css')
</head>
<body>
    @include('auth.Includes.navbar')
    @yield('welcome-body')
</body>
</html>
