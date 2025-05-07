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
        
}   
$pet1 = new Pets("Galletas", "Gato");
echo $pet1->get_name();
echo $pet1->get_type();
$pet2 = new Pets("Mailo", "Perro");


$arreglo = [];
    foreach($pet1 as $key => &$value){
        $arreglo[$key] = $value;
        // var_dump($arreglo);
        // print_r(json_encode($arreglo));

        $jsonActualizado = json_encode($arreglo);
        file_put_contents("../PHP/datos.json", $jsonActualizado);
    }



//     class Pets{    
//         public $name;
//         public $type;
        
//         public function __construct($name, $type)
//         {
//             $this->name = $name;
//             $this->type = $type;
//         }
        
//         function get_name(){
//             $conexion = file_get_contents("../PHP/datos.json");
//             $pets = json_decode($conexion, true);
//             echo $pets ["name"];
//         }


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



    


?>