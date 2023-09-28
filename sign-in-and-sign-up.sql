-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2023 at 02:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sign-in-and-sign-up`
--

-- --------------------------------------------------------

--
-- Table structure for table `sign-up`
--

CREATE TABLE `sign-up` (
  `Name` varchar(30) NOT NULL,
  `E_mail` varchar(30) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign-up`
--

INSERT INTO `sign-up` (`Name`, `E_mail`, `Password`) VALUES
('harish', 'harish@gmail.com', '$2y$10$jwqFU5nsV9gPoA1xagH1luUOxcklbT85PrtxSSD2HOD7bQTqOefh6'),
('aa', 'test@example', '$2y$10$63KdTUzKukzIMLEIz3Or.uIJ4IHlj3vGSNGdoWZTyo4hue4qfuL4C'),
('sana', 'thejas174@gmail.com', '$2y$10$AyEfIGWfG4mLtPGoF99CRuUiM0Ru7R139lmw5S0pKtXYBE9t.qz9a'),
('thejas', 'thejas17@gmail.com', '$2y$10$V6w4vtnr695it0pgDvEyqeTAgtoTjck.YBZ0kSUxjgUJ28NC6qYce'),
('Thejas', 'thejas1@gmail.com', '$2y$10$6S3wiDvw5ki2vlxqusLicOLAxkxJBkl0fmO4hZxDZuCI35evBbcwq'),
('Thejas', 'thejas@gmail.com', '$2y$10$.Svs1s.QZ.Qe7xbw31EIVueCS/N0TT2zfYaO.Gbu0aOy4RfIRWA.a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sign-up`
--
ALTER TABLE `sign-up`
  ADD PRIMARY KEY (`E_mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
