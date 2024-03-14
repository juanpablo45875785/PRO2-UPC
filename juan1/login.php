<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon"  href="iconos/usua.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="estili.css" rel="stylesheet" type="text/css" />
</head>

<style>
    .center {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
</style>

<body background="iconos/fondo2.jpg">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <div class="center">
        <form method="post" action="comprobar.php">
            <h1 align="center" style="color: #ffdd90">LOGIN JUAN PABLO</h1>
            <br>
            <br>
            <br>
            <div>
                <label align="center">Ingrese su correo electronico</label>
                <br>
                <br>
                <input type="email" class="form-control" name="email" id="1">
            </div>
            <br>
            <br>
            <div>
                <label align="center">Ingrese su contraseña</label>
                <br>
                <br>
                <input name="password" class="form-control" type="password">
            </div>
            <br>
            <br>
            <button type="submit" value="enviar" class="btn btn-primary me-md-2">ENTRAR</button>
            <a href='Registrar.php' class=" btn btn-danger">REGISTRARSE</a>

        </form>
    </div>

    
</body>

</html>