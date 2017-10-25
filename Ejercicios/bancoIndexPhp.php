<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
    
<?php 
//importa el archivo php para usar sus funciones
    require_once("bancobd.php");
    
//recojo los datos del formulario por metodo post
$nombre=$_POST["nombre"]." ".$_POST["apellido"];
$dni=$_POST["dni"];
$direc=$_POST["direction"];
$pass=$_POST["password"];
$pass2=$_POST["password2"];

//insertamos el usuario en la base de datos por el metodo siguiente
$error=insertarUsuario($nombre, $pass, $dni, $direc);
    
//si insertarUsuario es correcto devuelve 0 y redirijo a la pagina acceso
if($error==0){
header ("location: http://localhost/Daniel/html/Ejercicios/bancoAcceso.html");
}
elseif ($error == 1){
    echo "Hubo un error al registrar al usuario.<br>Por favor, inténtelo de nuevo.";
}
?>     

</body>
</html>