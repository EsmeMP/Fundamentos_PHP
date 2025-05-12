<?php
require_once "conexion.php";
require_once "pets.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $type = $_POST['type'] ?? '';
    $age  = $_POST['age'] ?? '';
    $race = $_POST['race'] ?? '';

    if ($name && $type && $age && $race) {
        $pet = new Pets($name, $type, $age, $race);
        
        $dbResponse    = $pet->set();           
        $jsonResponse  = $pet->guardarJson(); 

        header('Content-Type: application/json');
        echo json_encode([
            "base_de_datos" => $dbResponse,
            "archivo_json"  => $jsonResponse
        ]);
    } else {
        header('Content-Type: application/json');
        echo json_encode(["error" => "Faltan datos en el formulario"]);
    }
} else {
    header('Content-Type: application/json');
    echo json_encode(["error" => "No es una peticion de tipo POST"]);
}


// ------------- Agregar datos manualmente
// require_once "conexion.php";
// require_once "pets1.php";

// $datos = [
//     "name" => "Galletas",
//     "type" => "Gato",
//     "age" => 9,
//     "race" => "Naranjoso"
// ];

// $pet = new pets($datos);
// $response = $pet->set();
// echo json_encode($response, JSON_PRETTY_PRINT);

// echo "Mascotas registradas ";
// $response = pets::get();
// echo json_encode($response, JSON_PRETTY_PRINT);
//-----------------------------------------
//---------------------JSON mediante la web
// require_once "conexion.php";
// require_once "pets.php";

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $datos = $_POST['datos'];

//     $pet = new pets($datos);
//     $response = $pet->set();
//     echo json_encode($response, JSON_PRETTY_PRINT);

//     $response = pets::get();
//     echo json_encode($response, JSON_PRETTY_PRINT);
// } else {
//     echo "No se recibieron datos ";
// }


// ?>
