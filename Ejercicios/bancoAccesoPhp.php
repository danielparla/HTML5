<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
    
<?php 
    
$usuario1= $_POST["acceso1"];
$pass1= $_POST["pass1"];
$acceso=false;
    
$bDatos = fopen($usuario.".txt", "r") or die("Unable to open file!");
    
    
if( fgets($bDatos)==$pass1 ){
    $acceso=true;
}
    
fclose($myfile);

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