<!DOCTYPE html>
<html>
<head>
    <title>CRUD de Citas</title>
</head>
<body>
    <h3>CRUD de Citas</h3>
    <a href="index.php?accion=modalAdd">Agregar Citas ➕📁</a>
    <input type="text" id="inputBusqueda" placeholder="Buscar por nombre" onkeyup="filtrarCitas()">

    <table class="table" border="1" >
    <table class="table" border="1" id="tablaCitas">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del paciente</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($citas as $citas): ?>
                <tr>
                    <td><?= $citas['id'] ?></td>
                    <td><?= $citas['nombre_paciente'] ?></td>
                    <td><?= $citas['fecha'] ?></td>
                    <td><?= $citas['hora'] ?></td>
                    <td><?= $citas['descripcion'] ?></td>
                    <td>
                    <a href="index.php?accion=eliminarCitas&id=<?= $citas['id'] ?>">🚮</a>
                </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script src="./Publico/script.js"></script>
</body>
</html>