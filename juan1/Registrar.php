
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="estili.css" rel="stylesheet" type="text/css" />
    <link rel="icon"  href="iconos/usua.png">
    <style>
        
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body background="iconos/fondo9.jpg">
    <div class="center">
        <form  method="post" action="RegistrarUsuario.php">
            <h1 style="color:  yellow ;">REGISTRO DE USUARIOS</h1>
            <label>Nombre</label>
            <br>
            <input type="text" name="nombre" id="nombre" >
            <br>
            <br>
            <label>Carnet</label>
            <br>
            <input type="text" name="carnet" id="carnet" >
            <br>
            <br>
            <label>Correo electrónico</label>
            <br>
            <input type="email" name="email" id="email" >
            <br>
            <br>
            <label>Contraseña</label>
            <br>
            <input name="password" type="password" id="password" >
            <br>
            <br>
            <button type="submit" value="enviar" class="btn btn-primary me-md-2">REGISTRAR DATOS</button>
            <a href='logout.php' class="btn btn-primary me-md-2">SALIR</a>
        </form>
    </div>
</body>

</html>
