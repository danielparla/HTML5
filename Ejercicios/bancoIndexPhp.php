<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
    
<?php 
    require_once("bancobd.php");//importa el archivo php para usar sus funciones
    
$nombre=$_POST["nombre"]." ".$_POST["apellido"];
$dni=$_POST["dni"];
$direc=$_POST["direction"];
$pass=$_POST["password"];
$pass2=$_POST["password2"];
$error=0;

if($pass==$pass2){
    insertarUsuario($nombre, $pass, $dni, $direc);
}
elseif($pass!=$pass2){$error=1;}
    


    
?>     

</body>
</html>