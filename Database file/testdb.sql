-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.8-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for testdb
CREATE DATABASE IF NOT EXISTS `testdb` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `testdb`;


-- Dumping structure for table testdb.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `empid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `isadmin` smallint(5) NOT NULL DEFAULT 0 COMMENT '1-Admin,0-Not Admin',
  `displayflag` smallint(5) NOT NULL COMMENT '1-Active,0-Inactive',
  `accesstoken` varchar(255) NOT NULL,
  `createby` int(11) NOT NULL,
  `createdatetime` datetime NOT NULL,
  `updateby` int(11) DEFAULT NULL,
  `updatedatetime` datetime DEFAULT NULL,
  `usertype` enum('2','1') DEFAULT NULL,
  PRIMARY KEY (`empid`)
) ENGINE=InnoDB AUTO_INCREMENT=314 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table testdb.employees: ~1 rows (approximately)
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` (`empid`, `name`, `email`, `password`, `isadmin`, `displayflag`, `accesstoken`, `createby`, `createdatetime`, `updateby`, `updatedatetime`, `usertype`) VALUES
	(1, 'user', 'user@user.com', '$2y$08$V1pyTHA4dzI2amtJRThnYeOgcxttXUcFoJQ8RN6INFTgHaAVoy0gm', 1, 1, '$2y$08$MVZCb1U4aGx0cWNMK0habebn5oi5dHvK8Ds5YGeLDbsPFYoaAkZ3u', 219, '2019-02-13 16:02:47', 219, '2019-11-07 02:15:53', '1');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
