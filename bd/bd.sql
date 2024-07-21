-- Crear base de datos
CREATE DATABASE IF NOT EXISTS citas_medicas;
USE citas_medicas;

-- Crear tabla citas
CREATE TABLE IF NOT EXISTS citas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_paciente VARCHAR(100) NOT NULL,
    fecha DATE NOT NULL,
    hora TIME NOT NULL,
    descripcion TEXT
);

-- Insertar datos de prueba en la tabla citas
INSERT INTO citas (nombre_paciente, fecha, hora, descripcion) VALUES 
('Juan Pérez', '2023-07-15', '10:00:00', 'Consulta general'),
('María López', '2023-07-16', '11:30:00', 'Revisión anual'),
('Carlos García', '2023-07-17', '14:00:00', 'Chequeo de rutina');