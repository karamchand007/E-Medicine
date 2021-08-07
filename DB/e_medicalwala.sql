-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2018 at 12:03 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e_medicalwala`
--
CREATE DATABASE IF NOT EXISTS `e_medicalwala` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `e_medicalwala`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `username`, `password`) VALUES
('Shashi Shekhar Suman', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `sl` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `medicine` varchar(40) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`sl`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`sl`, `name`, `email`, `phone`, `address`, `medicine`, `quantity`, `amount`, `status`) VALUES
(1, 'Shyam Sundar Pradhan', 'shyam.nscs@gmail.com', '9835012978', 'Ravi Steel, Pandra Ranchi', 'Nemesulide', '4', '960', '');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `sl` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(49) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `message` varchar(40) NOT NULL,
  PRIMARY KEY (`sl`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE IF NOT EXISTS `medicine` (
  `sl` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `price` varchar(50) NOT NULL,
  `quan` varchar(30) NOT NULL,
  `type` varchar(40) NOT NULL,
  `img` varchar(30) NOT NULL,
  PRIMARY KEY (`sl`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`sl`, `name`, `price`, `quan`, `type`, `img`) VALUES
(1, 'Dulconlax', '130', '10', 'Depression', '3.jpg'),
(2, 'Nemesulide', '240', '', 'Pain', '11.png'),
(3, 'Loratadine', '300', '30', 'Skin Care', '2.jpg'),
(4, 'Aspirin', '100', '20', 'Pain', '4.jpg'),
(5, 'Pantonix', '350', '70', 'Pain', '5.jpg'),
(6, 'Acetram', '300', '30', 'Pain', '10.jpg'),
(7, 'Aspirin 100mg', '600', '200', 'Pain', '12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `sl` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` varchar(90) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`sl`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`sl`, `name`, `email`, `phone`, `address`, `password`) VALUES
(1, 'Shyam Sundar Pradhan', 'shyam.nscs@gmail.com', '9835012978', 'Ravi Steel, Pandra Ranchi', 'deb76d');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
