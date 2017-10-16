<!DOCTYPE html>
<html>
<body>
    
<?php

$nombres=["Marta","Pedro","Roberto","Martín","Mario","Pepe","María"];
$nombre;
$nombreArray=[];
$x=0;
$z=1;
    
$nombresM=[];
    
    foreach ($nombres as $nombre){
        
         if($nombre[0]=="M"){
             $nombresM[$x]=$nombre;
             $x++;
         }
        
    }
    
    foreach ($nombresM as $nombre){
        echo $nombre;
        
        if($z<count($nombresM)){
            echo ", ";
            $z++;
        }
        elseif($z==count($nombresM)) {echo ".";}
    }
    
?>

</body>
</html>

    