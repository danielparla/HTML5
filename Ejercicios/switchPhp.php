<!DOCTYPE html>
<html>
<body>
    
<?php 

$num1= $_POST["numero1"];
$num2= $_POST["numero2"];
$opcion= $_POST["opera"];
$resultado=0;
switch($opcion){
    case "suma": $resultado= $num1+$num2;
        break;
    case "resta": $resultado= $num1-$num2;
        break;
    case "multiplicacion": $resultado= $num1*$num2;
        break;
    case "division": $resultado= $num1/$num2;
        break;
}
    echo "El resultado es ".$resultado;
    
      
?>
  

</body>
</html>