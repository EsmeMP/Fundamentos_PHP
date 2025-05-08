<?php
class Conexion{
 function ConexionBD(){
    $host = 'localhost';
    $dbname = 'pets_bd';
    $username = 'root';
    $password = '';
    
    try{
        $conexion = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
        echo ("Conexion correcta");
    }
    catch(PDOException $exp){
        echo ("No se ha logrado conectar a la DB, error $exp");
    }
    return $conexion;
 }
}

?>