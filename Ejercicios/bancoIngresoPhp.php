<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
    
<?php 
    require_once("bancobd.php");
    session_start();
    
    $dni=$_SESSION["usuario"];
    $ingreso= $_POST["ingreso"];
    
    ingresarSaldo($dni,$ingreso);
    
    header ("location:http://localhost/Daniel/html/Ejercicios/bancoCliente.php");
      
?>     

</body>
</html>