<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="./Practica1.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="name" value=""><br>
      
        <label>Tipo:</label>
        <input type="text" name="type" value=""><br>
      
        <label>Edad:</label>
        <input type="number" name="age" value=""><br>
      
        <label>Raza:</label>
        <input type="text" name="race" value=""><br>
      
        <input type="submit" value="Guardar">
      </form>
      
</body>
</html>

<?php
// $conexion = new Conexion();
// $conexion->ConexionBD();

require_once "conexion.php";
require_once 'pets.php';

// $mascota = new Pets("Max", "Perro", 3, "Labrador");
// $mascota->set();

// echo "<hr><h3>Mascotas registradas:</h3>";
// Pets::get();
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['name'] ?? '';
    $type = $_POST['type'] ?? '';
    $age = $_POST['age'] ?? '';
    $race = $_POST['race'] ?? '';
    if($name && $type && $age && $race){
        $pet = new pets($name, $type, $age, $race);
        $response = $pet->set();
        echo ("$response");
        $response = $pet->get();
        echo ("$response");
    }
    else{
        echo "Datos no enviados a formulario";
    }
}
else{
    echo ("No");
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
