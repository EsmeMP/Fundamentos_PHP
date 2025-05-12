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
    $mascotas = []; 
    if ($db) {
        $sql = "SELECT * FROM pets";
        $resultado = $db->query($sql);

        if ($resultado && $resultado->rowCount() > 0) {
            foreach ($resultado as $fila) {
                $mascotas[] = [
                    "id" => $fila['id'],
                    "name" => $fila['Name'],
                    "type" => $fila['Type'],
                    "age" => $fila['Age'],
                    "race" => $fila['Race']
                ];
            }
            return [
                "status" => "ok",
                "answer" => "Datos obtenidos exitosamente",
                "code" => "200",
                "data" => $mascotas 
            ];
        } else {
            return [
                "status" => "ok",
                "answer" => "Aún no hay datos",
                "code" => "204",
                "data" => []
            ];
        }
    } else {
        return [
            "status" => "error",
            "answer" => "Error de conexión",
            "code" => "500",
            "data" => []
        ];
    }
}

    public function guardarJson(){
        $archivo  = __DIR__ . '/datos.json';
        $datos = [];
            $petJson =[
                "name" => $this-> name,
                "type" => $this-> type,
                "age" => $this-> age,
                "race" => $this-> race,
            ];

            if(file_exists($archivo)){
                $json = file_get_contents($archivo);
                $datos= json_decode($json, true);
            }

            $datos[]= $petJson;

            $guardado = file_put_contents($archivo, json_encode($datos, JSON_PRETTY_PRINT));
            
            if($guardado !== false){
                return[
                    "status" => "ok",
                    "answer" => "Datos agregado a JSON",
                    "code" => "200",
                ];
            }
            else{
                return[
                    "status" => "error",
                    "answer" => "No se pudo agregar a JSON",
                    "code" => "500",
                ];
            }
    }
}
?>

