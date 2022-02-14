<?php 
include ("php/conexion.php");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#171b34">
    <title>Document</title>
    <link rel="stylesheet" href="css/mis_social.css">
</head>
<body>
    <div class="padre">
        <?php
            $consulta = "SELECT * FROM redes_usuarios";
            $resultado = mysqli_query($conn, $consulta);

            while($fila = mysqli_fetch_array($resultado)) {?>

        <div class="bloque">
            <div class="icono">
                <i class="fa-brands <?php echo $fila['icono']?>"></i>
            </div>
            <div class="red-social">
                <a href="<?php echo $fila['enlace-social']?>"><?php echo $fila['nombre-red-social']?></a>
            </div>
        </div>

        <?php } ?>
        <a href="index.php" class="login">Iniciar seción</a>
    </div>
    <script src="https://kit.fontawesome.com/ececf1495a.js" crossorigin="anonymous"></script>
</body>
</html>