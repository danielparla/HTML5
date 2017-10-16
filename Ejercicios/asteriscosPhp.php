<!DOCTYPE html>
<html>
<body>
    
<?php 

$num= $_POST["numero"];


echo "Has introducido el número: ".$num."<br><br>";
    
    for($i=0; $i<$num; $i++){
        for($j=0; $j<$num; $j++){
            echo "#     ";
        }
        echo "<br>";
    }
       
?>
  

</body>
</html>