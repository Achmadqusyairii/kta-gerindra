-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for ektagerindra
DROP DATABASE IF EXISTS `ektagerindra`;
CREATE DATABASE IF NOT EXISTS `ektagerindra` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `ektagerindra`;

-- Dumping structure for table ektagerindra.tbl_anggota
DROP TABLE IF EXISTS `tbl_anggota`;
CREATE TABLE IF NOT EXISTS `tbl_anggota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_prov` int(2) NOT NULL,
  `kd_kab` int(2) NOT NULL,
  `kd_kec` int(2) NOT NULL,
  `kd_desa` int(2) NOT NULL,
  `level` int(2) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nik` varchar(255) NOT NULL,
  `no_kta` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table ektagerindra.tbl_desa
DROP TABLE IF EXISTS `tbl_desa`;
CREATE TABLE IF NOT EXISTS `tbl_desa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_prov` int(2) NOT NULL,
  `kd_kab` int(2) NOT NULL,
  `kd_kec` int(2) NOT NULL,
  `kd_desa` int(2) NOT NULL,
  `desa` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table ektagerindra.tbl_jabatan
DROP TABLE IF EXISTS `tbl_jabatan`;
CREATE TABLE IF NOT EXISTS `tbl_jabatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` int(1) NOT NULL,
  `nm_jabatan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table ektagerindra.tbl_kabupatenn
DROP TABLE IF EXISTS `tbl_kabupatenn`;
CREATE TABLE IF NOT EXISTS `tbl_kabupatenn` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_prov` int(2) NOT NULL,
  `kd_kab` int(2) NOT NULL,
  `kabupaten` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table ektagerindra.tbl_kecamatan
DROP TABLE IF EXISTS `tbl_kecamatan`;
CREATE TABLE IF NOT EXISTS `tbl_kecamatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_prov` int(2) NOT NULL,
  `kd_kab` int(2) NOT NULL,
  `kd_kec` int(2) NOT NULL,
  `kecamatan` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table ektagerindra.tbl_provinsi
DROP TABLE IF EXISTS `tbl_provinsi`;
CREATE TABLE IF NOT EXISTS `tbl_provinsi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_prov` int(20) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
