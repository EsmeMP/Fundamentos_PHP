<?php
    $json ='{"Galletas":"Gato", "Mailo":"Perro"}';
    var_dump(json_decode($json));

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