<div id="modalAgregarCita" class="modal" style="display:block;">
    <div class="modal-content">
        <span class="close" onclick="cerrarModal()">&times;</span>
        <h2>Agregar Cita Médica</h2>
        <form id="formulario-cita" method="post" action="index.php">
            <input type="hidden" name="accion" value="agregar_citas">
            <label for="nombre">Nombre del Paciente:</label><br>
            <input type="text" id="nombre" name="nombre" required><br>
            <label for="fecha">Fecha:</label><br>
            <input type="date" id="fecha" name="fecha" required><br>
            <label for="hora">Hora:</label><br>
            <input type="time" id="hora" name="hora" required><br>
            <label for="descripcion">Descripción:</label><br>
            <textarea id="descripcion" name="descripcion" required></textarea><br>
            <button type="submit">Agregar</button>
        </form>
    </div>
</div>
<script>
    // Función para cerrar el modal
    function cerrarModal() {
        document.getElementById('modalAgregarCita').style.display = 'none';
    }
</script>