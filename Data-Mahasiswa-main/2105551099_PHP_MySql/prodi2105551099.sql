/*
SQLyog Trial v13.1.8 (64 bit)
MySQL - 10.4.25-MariaDB : Database - prodi2105551099
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`prodi2105551099` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `prodi2105551099`;

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `NIM` varchar(12) NOT NULL,
  `Namamhs` varchar(200) NOT NULL,
  `Alamatmhs` varchar(200) NOT NULL,
  `Kontakmhs` varchar(200) NOT NULL,
  PRIMARY KEY (`NIM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`NIM`,`Namamhs`,`Alamatmhs`,`Kontakmhs`) values 
('2105551088','Kristina','Jl Blong Poh','081274961196'),
('2105551099','Ni Putu Adnya Puspita Dewi','Jalan Dewi Supraba No 43 Denpasar, Denpasar Utara, Denpasar, Bali','087862114880'),
('2105551100','Gusti Ngurah Satya Bagus Partama','BR.LODPEKEN, DESA KERAMAS, KEC.BLAHBATUH, KAB.GIANYAR','087862114880');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
