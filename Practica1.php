<?php
include_once("conexion.php");
$conexion = new Conexion();
$conexion->ConexionBD();
class Pets{    
        public $name;
        public $type;
        public $age;
        public $race;


        function __construct($name, $type, $age, $race )
        {
            $this->name = $name;
            $this->type = $type;
            $this->age = $age;
            $this->race = $race;
        }
        
        function get(){
            // Se requiere obtener datos de la base de datos sql 
            $response['nombre'][] = 'ok'; // ok, error
            $response['raza'][]   = 'Se agrego correctamtente';
            return $response; 
        }


        function set($nombre, $raza){
           // return $this->type . "\n";
           // Se requiere agregar los parametros en la base de datos sql 
           $response['status'] = 'ok'; // ok, error
           $response['answer'] = 'Se agrego correctamtente';
           $response['code']   = 200;

           return $response;
        } 
}   


        
// $pet1 = new Pets("Galletas", "Gato");
// echo $pet1->get_name();
// echo $pet1->get_type();
// $pet2 = new Pets("Mailo", "Perro");

// function petArray($pet){
//     return[
//         "name" => $pet->name,
//         "type" => $pet->type
//     ];
// }
// $conexion = "../PHP/datos.json";


// //Crear conexion de sql

// if(file_exists($conexion)){
//     $contenido = file_get_contents($conexion);
//     $arreglo = json_decode($contenido, true);
// }
// else{
//     $arreglo = [];
// }

// $arreglo[] = petArray($pet2);
// $jsonActualizado = json_encode($arreglo);
// file_put_contents($conexion, $jsonActualizado);
// print_r($jsonActualizado);


// ?>
