<!DOCTYPE html>
<html>
<body>
  
<form id="myForm" action="http://localhost/Daniel/html/Ejercicios/switchServer.php" method="post">
  Introduce dos números y elige una opción:<br>
    <input type="text" name="numero1" id="textNum1">
  <br>
    <input type="text" name="numero2" id="textNum2">
  <br>

    <input type="radio" name="opera" value="suma" checked> Suma<br>
    <input type="radio" name="opera" value="resta"> Resta<br>
    <input type="radio" name="opera" value="multiplicacion"> Multiplicacion<br>
    <input type="radio" name="opera" value="division"> Division<br>
    
    <input type="submit" value="Comprobar">
</form>

</body>
</html>