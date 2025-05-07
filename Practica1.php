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


//     class Pets{    
//         public $name;
//         public $color;
        
//         function get_pets(){
//             $conexion = file_get_contents("../PHP/datos.json");
//             $pets = json_decode($conexion, true);
//             foreach($pets as $pet){
//                 return($pet);
//             }
//         }
//         function set_pets(){
//             $pets["name"]= "gato";
//             $pets["type"]= "gato";
//             $jsonActualizado = json_encode($pets);
//             file_put_contents("../PHP/datos.json", $jsonActualizado);
//             echo $jsonActualizado; 
//         }
        
// }

    // GET
    $conexion = file_get_contents("../PHP/datos.json");
    
    $pets = json_decode($conexion, true);
    // foreach($pets as $key => $value){
    //     echo $key . " => " . $value; 
    // }
    foreach($pets as $pet){
        print_r($pet);
    }
    // $obj = json_decode($pets);
    echo $pets["Galletas"];
    echo $pets->Galletas;

    //SET

    $array [] = array(
        "name" => "manchas",
        "type" => "gato"
    );
    $pets =array_merge($pets, $array);
    
    $jsonActualizado = json_encode($pets);
    file_put_contents("../PHP/datos.json", $jsonActualizado);
    echo $jsonActualizado;

    


?>