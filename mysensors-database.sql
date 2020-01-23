-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.30-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table mysensors.reports
CREATE TABLE IF NOT EXISTS `reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sensor_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_reports_sensors` (`sensor_id`),
  CONSTRAINT `FK_reports_sensors` FOREIGN KEY (`sensor_id`) REFERENCES `sensors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Dumping data for table mysensors.reports: ~7 rows (approximately)
/*!40000 ALTER TABLE `reports` DISABLE KEYS */;
INSERT INTO `reports` (`id`, `value`, `timestamp`, `sensor_id`) VALUES
	(3, 23, '2020-01-23 10:11:18', 2),
	(5, 20, '2020-01-23 10:13:30', 6),
	(6, 32, '2020-01-23 10:13:45', 1),
	(7, 23, '2020-01-23 10:14:43', 1),
	(8, 10, '2020-01-23 10:15:01', 1),
	(10, 123, '2020-01-23 16:52:48', 1),
	(11, 999, '2020-01-23 16:55:23', 1);
/*!40000 ALTER TABLE `reports` ENABLE KEYS */;

-- Dumping structure for table mysensors.sensors
CREATE TABLE IF NOT EXISTS `sensors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Dumping data for table mysensors.sensors: ~4 rows (approximately)
/*!40000 ALTER TABLE `sensors` DISABLE KEYS */;
INSERT INTO `sensors` (`id`, `name`, `unit`) VALUES
	(1, 'temperature', 'Celsius'),
	(2, 'pressure', 'Pa'),
	(6, 'Sound', 'DB'),
	(9, 'humidity', 'Percent');
/*!40000 ALTER TABLE `sensors` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
