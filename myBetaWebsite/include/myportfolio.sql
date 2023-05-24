-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 24, 2023 at 05:58 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regaone_gen`
--

-- --------------------------------------------------------

--
-- Table structure for table `myportfolio`
--

CREATE TABLE `myportfolio` (
  `id` int(7) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `site` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `phone` text NOT NULL,
  `linkedin` text NOT NULL,
  `blogger` text NOT NULL,
  `github` text NOT NULL,
  `instagram` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `myportfolio`
--

INSERT INTO `myportfolio` (`id`, `username`, `email`, `password`, `title`, `site`, `location`, `phone`, `linkedin`, `blogger`, `github`, `instagram`) VALUES
(77721, 'Salar Salarov', 'ssalarov@mail.pk', 'd8ea661e12d2d8328600719f1fdd3624', 'FrontEnd Developer', 'salarsalarov.com', 'Baku, Azerbaijan Republic', '+994706720282', 'https://www.linkedin.com/in/salar-ayub-621930264/', 'https://bit.ly/3IA5bTk', 'https://github.com/SalarAyyub', 'https://www.instagram.com/salarayyub/');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
