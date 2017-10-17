<!DOCTYPE html>
<html>
<body>
    
<?php 
    
$nombre= $_POST["nombre"];
$apellido= $_POST["apellido"];
$dni= $_POST["dni"];
$telefono= $_POST["telefono"];
$pass= $_POST["password"];
$pass2= $_POST["password2"];
$error=0;
$nombreArchivo= "C:/xampp/htdocs/daniel/HTML/Ejercicios/". $dni. ".txt";
$lineas=file("C:/xampp/htdocs/daniel/HTML/Ejercicios/pass.txt");

if(strcmp($pass,$pass2)==0){

    $archivo= fopen($nombreArchivo, "x+");
    
        if($archivo==true){
            fwrite($archivo, $nombre."\r\n");
            fwrite($archivo, $apellido."\r\n");
            fwrite($archivo, $dni."\r\n");
            fwrite($archivo, $telefono."\r\n");

            fclose($archivo);
        }
        elseif($archivo==false){
            $error=1;
        }

elseif(strcmp($pass,$pass2)!=0){
        $error=2;
}
    
if($error==1){
    echo "El nombre de usuario ya existe!";
}
if($error==2){
    echo "Las contraseñas no coinciden!";
}
    
?>     

</body>
</html>