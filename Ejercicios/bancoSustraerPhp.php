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
    $sacar= $_POST["sacar"];
    
    sacarDinero($dni,$sacar);
    header ("location: http://localhost/Daniel/html/Ejercicios/bancoCliente.php");
?>     

</body>
</html>