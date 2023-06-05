create database salud_sexual;
use salud_sexual;
CREATE TABLE `usuarios` (
  `nombreCompleto` varchar(100) NOT NULL,
  `correoElectronico` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL
);

SELECT * FROM usuarios;
