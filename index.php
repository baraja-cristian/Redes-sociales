<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#033F73">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
        <form action="php/login.php"  method="post"  id="form" >
            <img src="img//Logo-B.svg" alt="">
            <input name="email"  type="email"  id="email" placeholder="Ingrese su correo electrónico" autofocus>
            <input name="password"  type="password"  id="password"  placeholder="Contraseña">
            <input name="btn-active"  type="submit"  id="btn-validar"value="Ingresar">
            <div id="message">
                <?php
                    if(isset($_SESSION['datosErroneos'])) { ?>
                    <span><?=  $_SESSION['datosErroneos'] ?></span>
                    <?php session_unset(); } ?>
            </div>
        </form> 

</body>
</html>