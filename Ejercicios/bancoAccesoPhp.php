<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
    
<?php 

    require_once("bancobd.php");//importa el archivo php para usar sus funciones
    
$dni= $_POST["dni"];
$pass1= $_POST["pass1"];
    
$acceso=comprobarPassword($dni, $pass1);
    
    
    switch($acceso){
            case(0): $acceso=0;
            break;
            case(1): echo "La contraseña no coincide";
            break;
            case(2): echo "El usuario no existe";
            break;
    }
    
if($acceso==0){
    
    session_start();
    $_SESSION["usuario"]=$dni;
    
    header ("location: http://localhost/Daniel/html/Ejercicios/bancoCliente.php");
    //redirijo a la pagina del cliente. la session viaja con el enlace
    
   
}
  
    
   
?>     

</body>
</html>