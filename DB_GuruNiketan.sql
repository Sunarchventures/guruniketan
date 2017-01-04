-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2016 at 11:53 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `DB_GuruNiketan`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_login`
--

CREATE TABLE IF NOT EXISTS `table_login` (
  `reg_id` char(11) NOT NULL,
  `reg_type` varchar(15) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pwd` varchar(200) NOT NULL,
  PRIMARY KEY (`reg_id`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_registration`
--

CREATE TABLE IF NOT EXISTS `table_registration` (
  `reg_id` char(11) NOT NULL,
  `reg_type` varchar(15) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pwd` varchar(200) NOT NULL,
  `user_contact` int(11) NOT NULL,
  `user_firstname` varchar(15) NOT NULL,
  `user_middlename` varchar(15) NOT NULL,
  `user_lastname` varchar(15) NOT NULL,
  `user_city` varchar(15) NOT NULL,
  `user_state` varchar(15) NOT NULL,
  `user_country` varchar(15) NOT NULL,
  `user_pin` int(6) NOT NULL,
  PRIMARY KEY (`reg_id`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_registration`
--

INSERT INTO `table_registration` (`reg_id`, `reg_type`, `user_email`, `user_pwd`, `user_contact`, `user_firstname`, `user_middlename`, `user_lastname`, `user_city`, `user_state`, `user_country`, `user_pin`) VALUES
('1', '1', 'ashishmchawla@gmail.com', 'ashish', 0, '', '', '', '', '', '', 0),
('2', '1', 'chawla.ashish29@gmai,com', 'ashish', 0, '', '', '', '', '', '', 0),
('3', '2', 'hey@ashchawla.com', 'ashish123', 0, '', '', '', '', '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
