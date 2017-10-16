<!DOCTYPE html>
<html>
<body>
    
<?php 

$fechaArrayLeida= $_POST["fecha"];

$fechaArrayFinal= explode(" de ", $fechaArrayLeida);
    
$dia= $fechaArrayFinal[0];
$mes= $fechaArrayFinal[1];
$mesComparar="";
$anyo= $fechaArrayFinal[2];
    
$comparacion=0;
    
$ok=true;
    
$meses30=["Abril","abril","Junio","junio","Septiembre","septiembre","Noviembre","noviembre"];
    
$meses31=["Enero","enero","Marzo","marzo","Mayo","mayo","julio","Julio","Agosto","agosto","Octubre","octubre","Diciembre","diciembre"];
    
if(strcmp($mes, "Febrero")==0 || strcmp($mes, "febrero")==0){
    if($dia<1 || $dia>28){
    echo "El dia ".$dia." no está comprendido entre 1 y 28<br>";
    $ok=false; 
    }
}
else{    
    foreach($meses30 as $mesComparar){
    if(strcmp($mes, $mesComparar)==0){
        $comparacion=1;
        } 
    }
    
    foreach($meses31 as $mesComparar){
    if(strcmp($mes, $mesComparar)==0){
        $comparacion=2;
        } 
    }
    
    if($comparacion==1){
        if($dia<1 || $dia>30){
         echo "El dia ".$dia." no está comprendido entre 1 y 30<br>";
         $ok=false; 
        }
    }
    if($comparacion==2){
        if($dia<1 || $dia>31){
         echo "El dia ".$dia." no está comprendido entre 1 y 31<br>";
         $ok=false; 
        }
    }
    if($comparacion==0){
        echo "El mes ".$mes." no está bien escrito o no es correcto<br>";
        $ok=false;}
}
    

    
if($anyo<1900 || $anyo>2017){
    echo "El año ".$anyo." debe estar comprendido entre 1900 y 2017";
    $ok=false;
}
    

    
  if($ok==true){
     echo "La fecha es correcta";
  }  
    
?>
  

</body>
</html>