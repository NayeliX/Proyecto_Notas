<?php
$host="localhost";
    $db="notasjma";
    $usuario="root";
    $contrasenia="";

    try {
        $conexion = new PDO("mysql:host=$host;dbname=$db",$usuario,$contrasenia);
        if($conexion){
            echo "Conectado a sistema";
        }
    } catch (Exception $ex) {
        echo $ex -> getMessage();
    }
?>