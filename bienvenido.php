<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Por favor debes iniciar sessión");
                window.location ="index.php";
            </script>
        ';
        //header("location: index.php");
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesi.css">
    <title>Bienvenid@  -  este proyecto</title>
</head>
<body>
    <h1>Bienvenido a este proyecto</h1>
    <h3>usando estos lenguajes y herramientas de programación</h3>
    <a href="php/cerrar_sesion.php">cerrar sesión</a>
    <div class= "HTML">HTML</div>
    <div class= "CSS">CSS</div >
    <div class= "javascript">javaScript</div>
    
</body>
</html>