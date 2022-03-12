<?php

    session_start();

    if (!isset($_SESSION['usuario'])) {
        echo '
            <script>
                alert("Por favor inicia sesion");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>