<link rel="stylesheet" href="publico/estilos.css">

<?php 

require_once 'configuracion/conexion.php';
require_once 'controladores/CitasControlador.php';

$controladorCitas = new CitasControlador();

// Acciones GET
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $accion = $_GET['accion'] ?? '';

    switch ($accion) {
        case 'modalAdd':
            include './vistas/modaladdcitas.php';
            break;

        case 'eliminarCitas':
                if (isset($_GET['id'])) {
                    $controladorCitas->eliminarCitas($_GET['id']);
                }
            break;
    }

    $controladorCitas->mostrarCitas();
}

// Acciones POST
elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
    $accion = $_POST['accion'] ?? '';

    switch ($accion) {
        case 'agregar_citas':
            $controladorCitas->agregarCitas();
            break;

    }

     header("Location: index.php");
    exit();
}

// Redireccionamiento por defecto
else {
    header("Location: index.php");
    exit();
}

?>