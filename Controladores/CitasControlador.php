<?php
print("<br>Controlador<br>");

require_once './modelos/CitasModelo.php';

class CitasControlador {
    private CitasModelo $modeloCitas;

    public function __construct() {
        $this->modeloCitas = new CitasModelo();
    }
// Controlador para Mostrar Citas
    public function mostrarCitas() {
        $citas = $this->modeloCitas->obtenerCitas();
        include './vistas/citas_view.php';
    }

// Controlador para Mostrar formulario
    public function mostrarFormularioAgregarCitas(): void {
        include './Vistas/modaladdcitas.php';
    }

// Controlador para adicionar citas
public function agregarCitas(): void {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nombre = $_POST['nombre'];
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $descripcion = $_POST['descripcion'];
        $exito = $this->modeloCitas->agregarCitas($nombre, $fecha, $hora, $descripcion);
        if ($exito) {
            header("Location: index.php");
            exit();
        } else {
            exit("Error al agregar la cita");
        }
    }
}

// Controlador para eliminar producto por su ID
    public function eliminarCitas(int $id): void {
        $exito = $this->modeloCitas->eliminarCitas($id);
        if ($exito) {
            header("Location: index.php");
            exit();
        } else {
            exit("Error al eliminar el cita");
        }
    }

}
?>