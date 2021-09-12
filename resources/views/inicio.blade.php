<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <title>Inicio</title>
</head>
<body>
    <h1>Ya rifaste</h1>
    <br>
    <a href="{{route('cerrar.sesion')}}">cerrar sesion</a>
</body>
</html>
