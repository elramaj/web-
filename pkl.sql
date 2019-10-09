-- Adminer 4.7.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `timeline`;
CREATE TABLE `timeline` (
  `id_timeline` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `isi_timeline` text NOT NULL,
  PRIMARY KEY (`id_timeline`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `timeline_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'default.svg',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `photo`) VALUES
(1,	'elsa',	'elsa.grow@nse-computer.com',	'$2y$10$yV0LlH6b0JWWaQ0apl6e/u5YrGDHJfbxkcrl95v0BNs0OCgEU0nK2',	'Elsa',	'default.svg'),
(2,	'sadsad',	'sadsad@sadsad.sadsad',	'$2y$10$H9M4khDqySi7grlUPDZbq.EgL5KE5hH41jlFuefz1dXLfaOmZYPjW',	'sadsad',	'default.svg'),
(3,	'aliyasa',	'herlianali@yahoo.co.id',	'$2y$10$lf9pljLfe6ctd1hgscBI.OIdsl0VMw95QGhBON/L46I7icGr3ZeUO',	'herlian',	'default.svg');

-- 2019-10-09 07:11:35
