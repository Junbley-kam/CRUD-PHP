<?php
print("Modelo");
class CitasModelo {
    private PDO $conexion;

    public function __construct() {
        global $conexion;
        $this->conexion = $conexion;
    }
// Modelo para consultar Citas en la BD
    public function obtenerCitas(): array {
        $statement = $this->conexion->query("SELECT * FROM citas");
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

// Modelo para agregar Citas en la BD
public function agregarCitas(string $nombre, string $fecha, string $hora, string $descripcion): bool {
    try {
        $statement = $this->conexion->prepare("INSERT INTO citas (nombre_paciente, fecha, hora, descripcion) VALUES (?, ?, ?, ?)");
        return $statement->execute([$nombre, $fecha, $hora, $descripcion]);
    } catch (PDOException $e) {
        exit("Error al agregar el producto: " . $e->getMessage());
    }
}

// Modelo para Eliminar UNA citas en la BD por su ID
public function eliminarCitas(int $id): bool {
    try {
        $statement = $this->conexion->prepare("DELETE FROM citas WHERE id = ?");
        return $statement->execute([$id]);
    } catch (PDOException $e) {
        exit("Error al eliminar el citas: " . $e->getMessage());
    }
}

}
?>