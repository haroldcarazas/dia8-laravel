<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTER</title>
</head>

<body>
    <h1>REGISTER</h1>

    <form action="{{ route('register-store') }}" method="POST">
        @csrf

        <label>Nombre:</label>
        <input type="text" name="nombre">

        <br>

        <label>Correo:</label>
        <input type="email" name="email">

        <br>

        <label>Contraseña:</label>
        <input type="password" name="password">

        <br>

        <button type="submit">Registrar</button>
    </form>
</body>

</html>
