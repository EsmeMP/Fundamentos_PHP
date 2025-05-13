<?php
require_once "conexion.php";
require_once "pets.php";

header('Content-Type: application/json');

$response = Pets::get();
echo json_encode($response);
?>