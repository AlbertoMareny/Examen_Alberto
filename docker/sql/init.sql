CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;

CREATE TABLE IF NOT EXISTS coches (
    id INT AUTO_INCREMENT PRIMARY KEY,
    marca VARCHAR(50),
    modelo VARCHAR(50)
);

INSERT INTO coches (marca, modelo) VALUES 
('Toyota', 'Corolla'),
('Seat', 'Ibiza'),
('Tesla', 'Model 3'),
('Ford', 'Mustang');
