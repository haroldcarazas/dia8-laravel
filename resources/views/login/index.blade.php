<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
</head>

<body>
    <h1>LOGIN</h1>

    <form action="{{ route('loggea') }}" method="POST">
        @csrf

        <label>Correo:</label>
        <input type="email" name="email">

        <br>

        <label>Contraseña:</label>
        <input type="password" name="password">

        <br>

        <button type="submit">Login</button>
    </form>
</body>

</html>
