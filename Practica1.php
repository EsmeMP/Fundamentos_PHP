<?php
include_once("conexion.php");
$conexion = new Conexion();
$conexion->ConexionBD();

// require_once 'pets.php';

// $mascota = new Pets("Max", "Perro", 3, "Labrador");
// $mascota->set();

// echo "<hr><h3>Mascotas registradas:</h3>";
// Pets::get();

// -----
require_once "conexion.php";
require_once "pets1.php";

$datos1 = [ ["name" => "Galletas"] ];
$datos2 = [ ["type" => "Gato"], ["age" => 2], ["race" => "Siames"] ];

$pet = new pets(1, $datos1, $datos2);
$pet->set();

echo "Mascotas registradas: ";
pets::get();


// class Pets{    
//         public $name;
//         public $type;
//         public $age;
//         public $race;


//         function __construct($name, $type, $age, $race )
//         {
//             $this->name = $name;
//             $this->type = $type;
//             $this->age = $age;
//             $this->race = $race;
//         }
//         //imprimir en otro script
//         // respose["clave"]["valor"]
//         function get(){
//             // Se requiere obtener datos de la base de datos sql 
//             $response['nombre'][] = 'ok'; // ok, error
//             $response['raza'][]   = 'Se agrego correctamtente';
//             return $response; 
//         }


//         function set($nombre, $raza){
//            // return $this->type . "\n";
//            // Se requiere agregar los parametros en la base de datos sql 
//            $response['status'] = 'ok'; // ok, error
//            $response['answer'] = 'Se agrego correctamtente';
//            $response['code']   = 200;

//            return $response;
//         } 
// }   


// ?>

