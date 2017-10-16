<!DOCTYPE html>
<html>
<body>
    
<?php 

$numArray= $_POST["numero"];
$num=0;
$max=0;
$min=10000;
$suma=0;

echo "Has introducido los siguientes números: <br>";
    foreach($numArray as $num){
        echo $num.",  ";
        
        if($num>$max){
            $max=$num;
        }
        if($num<$min){
            $min=$num;
        }
        $suma=$suma+$num;
    }
    
echo "<br>El número más grande que has escrito es el ".$max.".<br>El número más pequeño es el ".$min.".<br>Y la media es ".$suma/count($numArray).".";
       
?>
  

</body>
</html>