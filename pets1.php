<?php
class pets{
    public $pet_id;
    public $datos;
    public $db;

    function __construct($datos_array)
    {
        $this->datos = json_encode($datos_array);
        $conexion = new Conexion();
        $this->db = $conexion->ConexionBD();
    }

    function set(){
        if ($this->db) {
            $sql = "INSERT INTO pets (datos) VALUES (?)";
            $preparada = $this->db->prepare($sql);
            $preparada->execute([$this->datos]);
            
            return [
                "status" => "ok",
                "answer" => "Se agrego correctamente",
                "code" => 200 
            ];
        }
        else{
            return[
                "status" => "error",
                "answer" => "No se pudo agregar correctamente",
                "code" => 500 
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
                $pets = [];
                foreach ($resultado as $fila) {
                    // echo "Pet_id: {$fila['Pet_id']}";
                    $datos=json_decode($fila['Datos'], true);
                    
                    foreach($datos as $clave => $valor){
                        echo "$clave: $valor";
                    }
                }
                return[
                    "status" => "ok",
                    "answer" => "Pets: $pets",
                    "code" => 200
                    
                ];
            } else {
                return[
                    "status" => "ok",
                    "answer" => "No hay mascotas",
                    "code" => 204 
                ];
            }
        } else {
            return[
                "status" => "error",
                "answer" => "Error conexion",
                "code" => 500 
            ];
        }
    }
    
}
?>