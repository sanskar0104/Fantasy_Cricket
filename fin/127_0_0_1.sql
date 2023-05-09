-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 10, 2021 at 03:28 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reeg`
--
CREATE DATABASE IF NOT EXISTS `reeg` DEFAULT CHARACTER SET hp8 COLLATE hp8_english_ci;
USE `reeg`;

-- --------------------------------------------------------

--
-- Table structure for table `regi`
--

DROP TABLE IF EXISTS `regi`;
CREATE TABLE IF NOT EXISTS `regi` (
  `userName` varchar(15) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `eMail` varchar(50) NOT NULL,
  `passWord` varchar(15) NOT NULL,
  PRIMARY KEY (`userName`),
  UNIQUE KEY `eMail` (`eMail`)
) ENGINE=MyISAM DEFAULT CHARSET=hp8;

--
-- Dumping data for table `regi`
--

INSERT INTO `regi` (`userName`, `fullName`, `eMail`, `passWord`) VALUES
('nir', 'Nirvan Reddy', 'nir@gmail.com', 'nir'),
('wefs', 'Nirvan Reddy', 'bkkvarun24@gmail.com', 'nirvan007'),
('rpr', 'prany', 'r', 'r'),
('pr1234', 'Nirvan Reddy', '1234', '1234'),
('1', '1', '1', '1'),
('Pranay', 'rpr', 'rpr', 'rpr'),
('rp', 'Nirvan Reddy', '123', '537'),
('rp12', 'Nirvan Reddy', 'z', 'z'),
('4', '4', '4', '4'),
('5', '5', '5', '5'),
('6', '6', '6', '6'),
('7', '7', '7', '7'),
('2', '2', '2', '2'),
('10', '10', '10', '10'),
('w', 'w', 'w', 'w'),
('q', 'q', 'q', 'q'),
('u', 'u', 'u', 'u'),
('e', 'e', 'e', 'e'),
('f', 'f', 'f', 'f'),
('s', 's', 's', 's'),
('j', 'j', 'j', 'j'),
('rohit', 'K Rohith', 'krohith@gmail.com', 'K');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
