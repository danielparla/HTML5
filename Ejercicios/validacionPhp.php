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
    
$nombreArchivoPass= "C:/xampp/htdocs/daniel/HTML/Ejercicios/pass.txt";
$nombreArchivo= "C:/xampp/htdocs/daniel/HTML/Ejercicios/". $dni. ".txt";
    
$archivo = fopen(
    $nombreArchivo, "w");
    fwrite($archivo, $nombre."\r\n");
    fwrite($archivo, $apellido."\r\n");
    fwrite($archivo, $dni."\r\n");
    fwrite($archivo, $telefono."\r\n");
    fwrite($archivo, $correo."\r\n");
    fwrite($archivo, $sexo."\r\n");
    
    fclose($archivo);
    
$archivoPass= fopen($nombreArchivoPass, "a");
    fwrite($archivoPass, $cuenta." ç ".$pass."\r\n");
    fclose($archivoPass);

//TODO comparar contraseña 1 contraseña2
//TODO comprobar que no exista usuario
    
echo "Guardado";
    
    
    
?>     

</body>
</html>