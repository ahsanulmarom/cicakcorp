-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2017 at 09:58 PM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cicak`
--

-- --------------------------------------------------------

--
-- Table structure for table `jualan_review`
--

CREATE TABLE IF NOT EXISTS `jualan_review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) DEFAULT NULL,
  `jid` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `jualan_review`
--

INSERT INTO `jualan_review` (`id`, `path`, `jid`) VALUES
(13, 'uploads/JUALAN_NOTHUMB_0_MWA123.jpeg', 'MWA123'),
(14, 'uploads/JUALAN_NOTHUMB_1_MWA123.jpeg', 'MWA123'),
(15, 'uploads/JUALAN_NOTHUMB_0_23WER.jpg', '23WER'),
(16, 'uploads/JUALAN_NOTHUMB_1_23WER.jpeg', '23WER'),
(22, 'uploads/JUALAN_NOTHUMB_0_3ASE.jpeg', '3ASE'),
(23, 'uploads/JUALAN_NOTHUMB_1_3ASE.jpeg', '3ASE');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
