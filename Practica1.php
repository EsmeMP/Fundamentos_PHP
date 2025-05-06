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


// class Pets{    
//     public static $conexion = file_get_contents("../PHP/datos.json");
//     public static $pets = json_decode($conexion, true);
//     //Metodos
//     public function get_data($pets){
//         foreach($pets as $pet){
//             print_r($pet);
//         }
//     }
//     function set_data(){

//     }

// }

    $conexion = file_get_contents("../PHP/datos.json");
    
    $pets = json_decode($conexion, true);
    // $obj = json_decode($pets);
    foreach($pets as $pet){
        print_r($pet);
    }

    $pets["name"]= "gato";
    $pets["type"]= "gato";
    $jsonActualizado = json_encode($pets);
    echo $jsonActualizado;



?>