<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'redes_sociales'
);

if(isset($con)){
    echo "conexion establecida";
}else{
    echo"error de conexion";
}
?>