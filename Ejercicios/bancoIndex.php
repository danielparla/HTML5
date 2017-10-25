<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bancoEstiloFinal.css"> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>BANKeye</title>
    
</head>    
<body onload="carga()" >
    <header>
        
        <right><quote>Miramos por ti</quote></right>
    </header>
    <nav>
        <ul>
            <input name="navInicio" id="btnNavInicio" class="btn" type="button" value="Inicio">
            <input name="navRegistro" id="btnNavRegistro" class="btn" type="button" value="Registro">
            <input name="NavAcceso" id="btnNavAcceso" class="btn" type="button" value="Acceso">
        </ul>
    </nav>
    
    <section>
        <form id="sectionRegistro" action="http://localhost/Daniel/html/Ejercicios/bancoIndexPhp.php" method="post">
            <br><br>Nombre:<br>
                <input type="text" name="nombre" required>
            <br><br>
            Apellido:<br>
                <input type="text" name="apellido" required>
            <br><br>
            Dni:<br>
                <input type="password" name="dni" required placeholder="La letra debe ir en mayúscula">
            <br><br> 
            Dirección:<br>
                 <input type="text" name="direction" required>
            <br><br>
            Contraseña:<br>
                <input id="pass1" type="password" name="password" required>
            <br><br>
            Repita contraseña:<br>
                <input id="pass2" type="password" name="password2" required>
            <br><br><br>
        <input class="btn" id="enviarUsu" type="submit" value="Enviar" src="bancoIndex.html">
        <input class="btn" type="reset" value="Borrar datos">

        </form>
        
        <form id="sectionAcceso" action="http://localhost/Daniel/html/Ejercicios/bancoAccesoPhp.php" method="post">
<br><br>
            Dni:<br>
            <input type="password" name="dni" required placeholder="sin simbolos">
                <br> <br>

            Contraseña:<br>
            <input type="password" name="pass1" required>
                <br><br><br>
        
            <input class="btn" type="submit" value="Enviar" >
            <input class="btn" type="reset" value="Borrar datos">
            </form>
        <div id="cliente">
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
    </section>
    
    
        
  <script src="bancoIndexJs.js"></script>
    
   
    
</body>
<footer>
    <br><br><br><br><br><br><br><br><br><quote>BANKeye. "Miramos por ti..."</quote>
</footer>
</html>