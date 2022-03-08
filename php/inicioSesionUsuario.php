<?php
session_start();

include 'ConexionBD.php';

    $usuario = $_POST['usuarioInicio'];
    $contrasena = $_POST['contrasenaInicio'];

    $contrasena = hash('sha512', $contrasena);
    
    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' and contrasena = '$contrasena' ");

    if (mysqli_num_rows($validar_login) > 0) {
        $_SESSION['usuario'] = $usuario;
        header("location: ../bienvenida.php");
        exit();
    } else {
        echo '
            <script>
                alert("El usuario no está registrado. Por favor verifique los datos ingresados");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

?>