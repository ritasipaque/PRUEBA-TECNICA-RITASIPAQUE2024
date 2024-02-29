create database prueba;
USE prueba;


CREATE TABLE `usuarios` (
  `codigo` BIGINT NOT NULL,
  `usuario` VARCHAR(10) COLLATE utf8_spanish_ci NOT NULL,
  `password` VARCHAR(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`codigo`)
 
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `prueba`.`usuarios` (`codigo`, `usuario`, `password`) VALUES ('20242902', 'rsipaque', '12345');

CREATE TABLE cuentas (
  id int PRIMARY KEY AUTO_INCREMENT,
  id_usuario int NOT NULL, 
  nombre varchar(100) NOT NULL,
  estado enum('Activa','Inactiva') NOT NULL,  
  tipo enum('Propia','Debito','Credito') NOT NULL  
);