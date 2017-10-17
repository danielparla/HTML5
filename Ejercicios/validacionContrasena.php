<!DOCTYPE html>
<html>
<body>
    
<?php 
    
$usuario1= $_POST["acceso1"];
$pass1= $_POST["pass1"];
$acceso=false;
    
$line;    
$lineas= file ("C:/xampp/htdocs/daniel/HTML/Ejercicios/pass.txt");
    
foreach($lineas as $line){
    if(strncmp($usuario1." ç ".$pass1,
             $line,count($line))==0){
        $acceso=true;
    }
}
    if($acceso==true){
        echo "Acceso Permitido";
        
    }
    elseif($acceso==false){
        echo "ACCESO DENEGADO";}
    
    //TODO Mostrar los datos del usuario
?>     

</body>
</html>