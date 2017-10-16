<!DOCTYPE html>
<html>
<body>
    
<?php 

$numero_leido1= $_POST["numero1"];
$numero_leido2= $_POST["numero2"];
    

    
    
if ($numero_leido2>$numero_leido1){
    echo "El número ".$numero_leido2." es mayor.";
}

elseif($numero_leido1>$numero_leido2){
    echo "El número ".$numero_leido1." es mayor";
}
else{
    echo "Ambos son iguales";}
?>
  

</body>
</html>