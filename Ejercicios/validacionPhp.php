<!DOCTYPE html>
<html>
<body>
    
<?php 
    
$nombre= $_POST["nombre"];
$apellido= $_POST["apellido"];
$dni= $_POST["dni"];
$telefono= $_POST["telefono"];
$correo= $_POST["correo"];
$sexo= $_POST["sexo"];
$cuenta= $_POST["cuenta"];
$pass= $_POST["password"];
$pass2= $_POST["password2"];
    $error=0;
    
$nombreArchivoPass= "C:/xampp/htdocs/daniel/HTML/Ejercicios/pass.txt";
$nombreArchivo= "C:/xampp/htdocs/daniel/HTML/Ejercicios/". $dni. ".txt";
$lineas=file("C:/xampp/htdocs/daniel/HTML/Ejercicios/pass.txt");
    
foreach($lineas as $line){
    if(strncmp($cuenta,$line,count($cuenta))==0){
        $error=1;
    }
}

if(strcmp($pass,$pass2)==0){

    $archivo = fopen(
        $nombreArchivo, "w");
        fwrite($archivo, $nombre."\r\n");
        fwrite($archivo, $apellido."\r\n");
        fwrite($archivo, $dni."\r\n");
        fwrite($archivo, $telefono."\r\n");
        fwrite($archivo, $correo."\r\n");
        fwrite($archivo, $sexo."\r\n");

        fclose($archivo);

    $archivoPass= fopen($nombreArchivoPass, "a+");
        fwrite($archivoPass, $cuenta." ç ".$pass."\r\n");
        fclose($archivoPass);
}
    elseif(strcmp($pass,$pass2)!=0){
        $error=2;
    }
    
if($error==0){
    echo "Guardado";
    header('Location: "http://localhost/Daniel/html/Ejercicios/accesoIndex.html');
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