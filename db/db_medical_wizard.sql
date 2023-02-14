-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.27 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_medical_wizard
CREATE DATABASE IF NOT EXISTS `db_medical_wizard` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_medical_wizard`;

-- Dumping structure for table db_medical_wizard.tbl_patient_details
CREATE TABLE IF NOT EXISTS `tbl_patient_details` (
  `patientNumber` int NOT NULL,
  `firstName` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lastName` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mobile` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `addressLine_01` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `addressLine_02` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`patientNumber`),
  KEY `firstName` (`firstName`),
  KEY `mobile` (`mobile`),
  KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 ROW_FORMAT=DYNAMIC;

-- Dumping data for table db_medical_wizard.tbl_patient_details: ~2 rows (approximately)
INSERT IGNORE INTO `tbl_patient_details` (`patientNumber`, `firstName`, `lastName`, `email`, `mobile`, `addressLine_01`, `addressLine_02`, `description`) VALUES
	(10, 'kasun', 'wanigasekara', 'kasunw@gmail.com', '94712124683', 'no.123', 'kandy', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).'),
	(20, 'navodi', 'perera', 'navop@gmail.com', '94712124683', 'no.321', 'colombo', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.');

-- Dumping structure for table db_medical_wizard.tbl_patient_images
CREATE TABLE IF NOT EXISTS `tbl_patient_images` (
  `patientNumber` int NOT NULL,
  `imagePath` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  KEY `FK_tbl_patient_images_tbl_patient_details` (`patientNumber`),
  CONSTRAINT `FK_tbl_patient_images_tbl_patient_details` FOREIGN KEY (`patientNumber`) REFERENCES `tbl_patient_details` (`patientNumber`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 ROW_FORMAT=DYNAMIC;

-- Dumping data for table db_medical_wizard.tbl_patient_images: ~6 rows (approximately)
INSERT IGNORE INTO `tbl_patient_images` (`patientNumber`, `imagePath`) VALUES
	(10, 'img/6.jpg'),
	(10, 'img/5.jpg'),
	(10, 'img/4.jpg'),
	(20, 'img/3.jpg'),
	(20, 'img/2.jpg'),
	(20, 'img/1.jpg');

-- Dumping structure for table db_medical_wizard.tbl_users
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `userName` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  KEY `Index 1` (`email`),
  KEY `userName` (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table db_medical_wizard.tbl_users: ~2 rows (approximately)
INSERT IGNORE INTO `tbl_users` (`userName`, `email`, `password`) VALUES
	('admin', 'admin@email.com', '$2y$10$Swwa1fvYmrn23p9YK3vJvuzQR3bNrSyIez/Ob78m21gQuTgos6aeG'),
	('user', 'user@email.com', '$2y$10$SrCy.twNniQBjECMIS1eA..DeToX537KnmS0UUAdMkmvUGh7iiiba');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
