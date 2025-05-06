<?php
    // $json ='{"Galletas":"Gato", "Mailo":"Perro"}';
    // var_dump(json_decode($json));

    //Sirve para obtener la ruta del archivo
    $conexion = file_get_contents("../PHP/datos.json");
    $mascotas = json_decode($conexion, true);

    //Imprimir los datos
    foreach($mascotas as $mascota){
        print_r($mascota);
    }


class Mascota{
    //Propiedades
    public $name;
    public $type;
    //Metodos
    function set_name($name){
        $this->name =$name;
    }
    function get_name(){
        return $this->name;
    }
}
$cat = new Mascota();
$cat->set_name('Gatito');
echo $cat->get_name();

?>