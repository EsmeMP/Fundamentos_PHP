<?php
class pets{
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
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$this->name, $this->type, $this->age, $this->race]);
            echo "Mascota guardada correctamente.<br>";
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
                    echo "Nombre: {$fila['Name']} - Tipo: {$fila['Type']} - Edad: {$fila['Age']} - Raza: {$fila['Race']}<br>";
                }
            } else {
                echo "No hay mascotas registradas";
            }
        } else {
            echo "No se pudo conectar a la BD";
        }
    }
    

}
?>

