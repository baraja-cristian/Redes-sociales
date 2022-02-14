<?php
session_start();
include ("conexion.php");

if(isset($_POST['btn-active'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $consulta = "SELECT * FROM  usuarios_login WHERE email='$email' && password='$password'";

    $resultado = mysqli_query($conn, $consulta);

    $fila = mysqli_num_rows($resultado);

    if($fila > 0){
        header ("location:../panel.php");
    }else{
        $_SESSION['datosErroneos']="Datos incorrectos";
        header ("location:../index.php");
    }
}
?>