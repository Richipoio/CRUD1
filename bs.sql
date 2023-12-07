CREATE DATABASE crud_demo;
USE crud_demo;

CREATE TABLE usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telefono VARCHAR(15) NOT NULL
);

USE crud_demo;

-- Insertar 10 datos de ejemplo
INSERT INTO usuarios (nombre, email, telefono) VALUES
    ('Juan Pérez', 'juan@example.com', '123-456-7890'),
    ('María Gómez', 'maria@example.com', '987-654-3210'),
    ('Carlos Rodríguez', 'carlos@example.com', '555-123-4567'),
    ('Ana Martínez', 'ana@example.com', '333-555-7777'),
    ('Pedro Sánchez', 'pedro@example.com', '111-222-3333'),
    ('Laura González', 'laura@example.com', '444-888-9999'),
    ('Roberto López', 'roberto@example.com', '666-999-1111'),
    ('Isabel Castro', 'isabel@example.com', '222-444-6666'),
    ('Francisco Ruiz', 'francisco@example.com', '888-111-4444'),
    ('Carmen Jiménez', 'carmen@example.com', '777-000-5555');
