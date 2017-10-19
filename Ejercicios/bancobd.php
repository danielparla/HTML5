<?php

// Creamos las variables con los datos de conexión
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "banco";


function conectar(){
// Creamos el objeto de conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Comprobamos si ha conectado correctamente
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    return $conn;
}

// Indicamos el nombre, la contraseña, el dni y la dirección.
// Devuelve 0 si se ha creado correctamente o 1 si ha habido algún fallo.
function insertarUsuario($nombre, $pass, $dni, $direc){
 
    //Obtenemos el objeto de conexión
    $conn = conectar();
    
    // creamos la consulta SQL que vamos a ejecutar
    $sql = "INSERT INTO clientes (nombre, direccion, dni, password, saldo)
    VALUES ('".$nombre."', '".$direc."', '".$dni."', '".$pass."', 0)";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        return 0;
    } else {
        $conn->close();
        return 1;
    }
}

// Indicamos el nombre y la contraseña.
// Devuelve 0 si es correcto,
// Devuelve 1 si la contraseña no coincide,
// Devuelve 2 si el usuario no existe.
function comprobarPassword($nombre, $pass){
    $devol=0;
    //Obtenemos el objeto de conexión
    $conn = conectar();
    
    // creamos la consulta SQL que vamos a ejecutar
    $sql = "SELECT password FROM clientes WHERE dni LIKE '".$dni."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row["password"] == $pass){
            $devol=0;
        }else{
            $devol=1;
        }
    } else {
        $devol=2;
    }
    return $devol;
}

// Indicamos el dni.
// Devuelve el saldo si está todo correcto,
// Devuelve -1 si ha habido algún error.
function verSaldo($dni){
    $devol=0;
    
    //Obtenemos el objeto de conexión
    $conn = conectar();
    
    // creamos la consulta SQL que vamos a ejecutar
    $sql = "SELECT saldo FROM clientes WHERE dni LIKE '".$dni."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $devol=$row["saldo"];
         
    } else {
        $devol=-1;
    }
    return $devol;
}


// Indicamos el dni y el dinero a ingresar
// Devuelve el nuevo saldo si está todo correcto,
// Devuelve -1 si ha habido algún error.
function ingresarSaldo($dni, $saldo){
    $devol=0;
    
    //Obtenemos el objeto de conexión
    $conn = conectar();
    
    // creamos la consulta SQL que vamos a ejecutar
    $sql = "UPDATE clientes SET saldo=".$saldo."+ (SELECT saldo FROM clientes WHERE dni LIKE '".$dni."') WHERE dni LIKE '".$dni."'";
    
    if ($conn->query($sql) === TRUE) {
        $sql = "SELECT saldo FROM clientes WHERE dni LIKE '".$dni."'";
        $result = $conn->query($sql);

        $row = $result->fetch_assoc();
        $devol=$row["saldo"];
    }else{
        $devol=-1;
    }
    return $devol;
}

// Indicamos el dni y el dinero a ingresar
// Devuelve el nuevo saldo si está todo correcto,
// Devuelve -1 si ha habido algún error.
function sacarDinero($dni, $saldo){
    $devol=0;
    
    //Obtenemos el objeto de conexión
    $conn = conectar();
    
    // creamos la consulta SQL que vamos a ejecutar
    $sql = "UPDATE clientes SET saldo=(SELECT saldo FROM clientes WHERE dni LIKE '".$dni."')-".$saldo."  WHERE dni LIKE '".$dni."'";
    
    if ($conn->query($sql) === TRUE) {
        $sql = "SELECT saldo FROM clientes WHERE dni LIKE '".$dni."'";
        $result = $conn->query($sql);

        $row = $result->fetch_assoc();
        $devol=$row["saldo"];
    }else{
        $devol=-1;
    }
    return $devol;
}

?>