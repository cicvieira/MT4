CREATE DATABASE mt4 DEFAULT CHARACTER SET utf8;
USE mt4;

CREATE TABLE `mt4`.`dispositivos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `hostname` VARCHAR(100) NOT NULL,
  `ip` VARCHAR(15) NOT NULL DEFAULT '0.0.0.0',
  `tipo` ENUM('Servidor', 'Roteador', 'Switch', 'Repetidor') NOT NULL,
  `fabricante` VARCHAR(250),
  PRIMARY KEY (`id`)
);