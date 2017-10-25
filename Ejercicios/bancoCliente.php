<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
    <header>
        <header>
        <title>CHUCHE BANK</title>
        <h1>CHUCHE BANK</h1>
    </header>
    <nav>
        <ul>
            <input name="navInicio" id="btnNavInicio" class="btn" type="button" value="Inicio">
            <input name="navRegistro" id="btnNavRegistro" class="btn" type="button" value="Registro">
            <input name="NavAcceso" id="btnNavAcceso" class="btn" type="button" value="Acceso">
        </ul>
    </nav>
    <div>
        <h2>¿Qué desea hacer hoy?</h2>
   
    <form action="bancoIngresoPhp.php" method="post">
        Ingresar dinero:<br>
            <input type=number name="ingreso">
            <br>
            <input type="submit" value="Ingresar">
    </form>
    
        Ver saldo:<br>
        
        <?php 
            require_once("bancobd.php");
        
            session_start();
            $dni=$_SESSION["usuario"];

            $saldo=verSaldo($dni);
            print $saldo;
        ?>
       
    <form action="bancoSustraerPhp.php" method="post">
        Sacar dinero:<br>
            <input type=number name="sacar">
    <br>
        <input type="submit" value="Sacar">
    </form>
    <input type="button" src="bancoIndex.html" value="INICIO">
    </div>

</body>
</html>