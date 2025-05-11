<?php
class pets{
    public $id;
    public $name;
    public $type;
    public $age;
    public $race;
    public $db;

    function __construct($name, $type, $age, $race)
    {
        $this->name = $name;
        $this->type = $type;
        $this->age = $age;
        $this->race = $race;
        $conexion = new Conexion();
        $this->db = $conexion->ConexionBD();
    }

    function set(){
        if ($this->db) {
            $sql = "INSERT INTO pets (name, type, age, race) VALUES (?, ?, ?, ?)";
            $preparada = $this->db->prepare($sql);
            $preparada->execute([$this->name, $this->type, $this->age, $this->race]);
            return[
                "status" => "ok",
                "answer" => "Se agrego correctamente",
                "code" => "200",
            ];
        }
        else{
        return[
            "status" => "error",
            "answer" => "No se agrego correctamente",
            "code" => "500",
        ];
    }   
}

static function get() {
    $conexion = new Conexion();
    $db = $conexion->ConexionBD();
    if ($db) {
        $sql = "SELECT * FROM pets";
        $resultado = $db->query($sql);
        
        if ($resultado && $resultado->rowCount() > 0) {
            foreach ($resultado as $fila) {
                echo "Id: {$fila['id']} - Nombre: {$fila['Name']} - Tipo: {$fila['Type']} - Edad: {$fila['Age']} - Raza: {$fila['Race']}<br>";
            }
            return [
                    "status" => "ok",
                    "answer" => "Datos obtenidos exitosamente",
                    "code" => "200",
                ];
            }
            else {
                return [
                        "status" => "ok",
                        "answer" => "Aun no hay datos",
                        "code" => "204",
                    ];
                }
            } else {
                return [
                        "status" => "error",
                        "answer" => "Error a conexión",
                        "code" => "500",
                    ];
        }
    }

}
?>

