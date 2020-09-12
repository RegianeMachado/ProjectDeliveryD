-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.11-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para delivery_direto
CREATE DATABASE IF NOT EXISTS `delivery_direto` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `delivery_direto`;

-- Copiando estrutura para tabela delivery_direto.cities_register
CREATE TABLE IF NOT EXISTS `cities_register` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cityName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cities_register_cityName_unique` (`cityName`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela delivery_direto.cities_register: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `cities_register` DISABLE KEYS */;
INSERT INTO `cities_register` (`id`, `cityName`, `latitude`, `longitude`) VALUES
	(18, 'a', '-23.543797', '-46.634158'),
	(19, 'b', '-22.910086', '-47.059311'),
	(20, 'c', '-23.500147', '-47.458557'),
	(21, 'd', '-23.188704 ', '-46.884137'),
	(22, 'e', '-22.124055', '-51.386076'),
	(23, 'f', '-20.427292', '-51.343513'),
	(24, 'g', '-21.177986', '-47.810823'),
	(25, 'h', '-23.932337', '-46.330097'),
	(26, 'i', '-23.184146 ', '-45.887737'),
	(27, 'j', '-23.115557', '-46.548272'),
	(28, 'k', '-21.996022', '-47.431006'),
	(29, 'l', '-22.010785', '-47.890079'),
	(30, 'm', '-22.977390', '-49.868635'),
	(31, 'n', '-20.420253', '-49.975181'),
	(32, 'o', '-21.138111', '-48.974366'),
	(33, 'p', '-20.554312 ', '-48.571846'),
	(34, 'q', '-20.535479 ', '-47.399258'),
	(35, 'r', '-21.789480', '-48.176770'),
	(36, 's', '-22.245826', '-49.968522');
/*!40000 ALTER TABLE `cities_register` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
