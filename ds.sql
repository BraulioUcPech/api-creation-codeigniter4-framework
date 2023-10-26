


USE  API;




SELECT * FROM datos_temperatura;


CREATE TABLE datos_temperatura (
    id INT AUTO_INCREMENT PRIMARY KEY,
    temperatura DOUBLE NOT NULL,
    fecha DATETIME NOT NULL
);

INSERT INTO datos_temperatura (temperatura, fecha) VALUES
(22.5, '2023-10-10 08:30:00'),
(23.0, '2023-10-10 09:15:00'),
(21.8, '2023-10-10 10:00:00'),
(24.2, '2023-10-10 10:45:00'),
(22.9, '2023-10-10 11:30:00');
