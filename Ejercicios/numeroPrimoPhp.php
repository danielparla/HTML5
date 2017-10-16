<!DOCTYPE html>
<html>
<body>
    
<?php 

$num= $_POST["numero"];
$divisible=false;
$divisor=[];
    $divi;
    
if($num==1){
    echo "El número ".$num." es primo";
}
    
elseif($num>1){
    
    for($i=1 ; $i<$num ; $i++){

        if($num % $i == 0 && $i != 1) {
            $divisible = true;
            $divisor[$i]=$i;
        
        }
    }
     if($divisible==false){
        echo "El número ".$num." es primo";
     }
     else{echo "El número ".$num." no es primo porque es divisible por: <br> ";
          
          foreach($divisor as $divi){
              
              echo $divi."<br>";
          }
          echo $num;
     
         }
}
      
?>
  

</body>
</html>