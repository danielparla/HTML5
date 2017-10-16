<!DOCTYPE html>
<html>
<body>
    
<?php 
    
    
$archivo= fopen ("C:/xampp/htdocs/daniel/HTML/Ejercicios/pass.txt", "r");
    
    fread($archivo, filesize($archivo));
    
    
?>     

</body>
</html>