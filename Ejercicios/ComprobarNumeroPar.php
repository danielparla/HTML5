<!DOCTYPE html>
<html>
<body>
<script>
    function comprobarNumero(){
        var num = document.getElementById("textNum").value;
        if (isNaN(num)){
            alert("Debes introducir un número");
            //no envies 
        }else{
            document.getElementById("myForm").submit();
        }
    }
    
</script>
<form id="myForm" action="http://localhost/Daniel/html/NumeroPar1.php" method="post">
  Introduce un número y te diré si es par o impar:<br>
  <input type="text" name="numero" id="textNum">
  <br>
  <br>
  <input type="submit" value="Comprobar" onclick="comprobarNumero()">
</form> 

</body>
</html>