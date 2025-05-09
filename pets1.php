<?php
class pets{
    public $pet_id;
    public $datos;
    public $datos2;

    function __construct($pet_id, $datos, $datos2,)
    {
        $this->name = $pet_id;
        $this->type = $datos;
        $this->age = $datos2;
        $conexion = new Conexion();
        $this->db = $conexion->ConexionBD();
    }

    function set(){
        if ($this->db) {
            $sql = "INSERT INTO pets (Pet_id, Datos, Datos2) VALUES (?, ?, ?)";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$this->pet_id, $this->datos, $this->datos2]);
            echo "Mascota guardada correctamente";
        }
        else{
            echo"No se pudo conectar a la bd";
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
                    echo "Pet_id: {$fila['Pet_id']}";
                    $datos=json_decode($fila['Datos'], true);
                    $datos2=json_decode($fila['Datos2'], true);
                    if ($datos){
                        foreach ($datos as $dato){
                            foreach($dato as $clave => $valor){
                                echo "$clave: $valor";
                            }
                        }
                    }
                    if ($datos2){
                        foreach ($datos2 as $dato){
                            foreach($dato as $clave => $valor){
                                echo "$clave: $valor";
                            }
                        }
                    }
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


