<?php
    // $json ='{"Galletas":"Gato", "Mailo":"Perro"}';
    // var_dump(json_decode($json));

    // //Sirve para obtener la ruta del archivo
    // $conexion = file_get_contents("../PHP/datos.json");
    // $mascotas = json_decode($conexion, true);

    // //Imprimir los datos
    // foreach($mascotas as $mascota){
    //     print_r($mascota);
    // }

    // $json = '{"Name":"Galletas", "Type":"Gato"}';
    
    // $pets = json_decode($json, true);
    // foreach($pets as $key => $value){
    //     echo $key . "=>" . $value. "\n";
    // }
    
    class Pets{    
        public $name;
        public $type;


        function __construct($name, $type)
        {
            $this->name = $name;
            $this->type = $type;
        }
        
        function get_name(){
            return $this->name . "\n";
        }
        function get_type(){
            return $this->type . "\n";
        } 
        
        

        function set($nombre, $raza){
           // return $this->type . "\n";
           // Se requiere retorna 
        } 
}   
        
$pet1 = new Pets("Galletas", "Gato");
echo $pet1->get_name();
echo $pet1->get_type();
$pet2 = new Pets("Mailo", "Perro");

function petArray($pet){
    return[
        "name" => $pet->name,
        "type" => $pet->type
    ];
}
$conexion = "../PHP/datos.json";


//Crear conexion de sql

if(file_exists($conexion)){
    $contenido = file_get_contents($conexion);
    $arreglo = json_decode($contenido, true);
}
else{
    $arreglo = [];
}

$arreglo[] = petArray($pet2);
$jsonActualizado = json_encode($arreglo);
file_put_contents($conexion, $jsonActualizado);
print_r($jsonActualizado);


?>
