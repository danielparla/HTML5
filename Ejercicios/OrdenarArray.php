<!DOCTYPE html>
<html>
<body>
    
<?php 

$array1=[5,52,0,19,84,-35,20,100,-80];
$arrayOrdenado=[];
$numero;
$min=10000000;
$max=-10000000;

foreach($array1 as $numero){
    if($numero<$min){
        $min=$numero;
    }
}  
$arrayOrdenado[0]=$min;
$min=10000000;
       
for($x=1;count($arrayOrdenado)<count($array1);$x++){
    
    for($i=1; $i<count($array1)+1; $i++){
        if($array1[$i-1] > $arrayOrdenado[$x-1] && $array1[$i-1]<$min){
            $min = $array1[$i-1];
        }
    }
    
    $arrayOrdenado[$x] = $min;
    $min = 10000000;
}

foreach($arrayOrdenado as $numero)
{
    echo $numero."<br>";
}

?>

</body>
</html>