<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
    
<?php 
    session_start();
    $dni=$_SESSION["usuario"];
    
    echo verSaldo($dni);
    header ("http://localhost/Daniel/html/Ejercicios/bancoCliente.html")
    
    
?>     

</body>
</html>