-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 24, 2018 at 07:58 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teliki`
--

-- --------------------------------------------------------

--
-- Table structure for table `teliki`
--

CREATE TABLE `teliki` (
  `TITLE` text CHARACTER SET utf8 NOT NULL,
  `NUMBERS` int(11) NOT NULL,
  `EMAIL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teliki`
--

INSERT INTO `teliki` (`TITLE`, `NUMBERS`, `EMAIL`) VALUES
('Οι Λύκοι Της Κάλα', 17, 'Test@buyer.com'),
('Ο Τελευταίος Πιστολέρο', 2, 'Test@buyer.com'),
('Το Κάλεσμα Των Τριών', 4, 'Test@buyer.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
