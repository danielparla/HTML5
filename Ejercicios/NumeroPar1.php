<!DOCTYPE html>
<html>
<body>
    
<?php 

$numero_leido= $_POST["numero"];
    
    
if ($numero_leido%2==0){
    echo "El número ".$numero_leido." es par.";
}
elseif ($numero_leido%2!=0){
    echo "El número".$numero_leido." es impar.";}
else{
    echo "Debe introducir un número";
}
?>
  

</body>
</html>