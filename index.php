<?php
    session_start();

    if (isset($_SESSION['usuario'])) {
        header("location: bienvenida.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Contraseñas</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/styleIndex.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>

    <!-- Formulario -->
    <div class="formulario">

        <form action="php/inicioSesionUsuario.php" method="POST" class="formulario-ingreso">
            <i class="fa-solid fa-circle-user"></i>
            <input class="usuario-input" type="text" name="usuarioInicio" placeholder="Usuario" required>
            <input class="usuario-input" type="password" name="contrasenaInicio" placeholder="Contraseña" required>

            <div class="opciones-01">
                <label class="recuerdame"><input type="checkbox" name="">Recuerdame</label>
                <a href="#">Olvidaste tu contraseña?</a>
            </div>

            <input type="submit" class="boton" value="INICIAR SESION">

            <div class="opciones-02">
                <p>No está registrado? <a href="#">Crear una cuenta</a></p>
            </div>

        </form>

        <form action="php/RegistroUsuario.php" method="POST" class="formulario-registro">
            <i class="fa-solid fa-user-plus"></i>
            <input type="text" class="usuario-input" placeholder="Nombre" name="nombre" required>
            <input type="email" class="usuario-input" placeholder="Correo Electrónico" name="correo" required>
            <input type="text" class="usuario-input" placeholder="Usuario" name="usuario" required>
            <input type="password" name="contrasena" class="usuario-input" placeholder="Contraseña" required>

            <input type="submit" name="" class="boton" value="REGISTRARSE">

            <div class="opciones-02">
                <p>Ya está registrado? <a href="#">Iniciar Sesion</a></p>
            </div>

        </form>

    </div>

    <script type="text/javascript">
        $(".opciones-02").click(function() {
            $('form').animate({
                height: "toggle",
                opacity: "toggle"
            }, "slow");
        });
    </script>

</body>

</html>