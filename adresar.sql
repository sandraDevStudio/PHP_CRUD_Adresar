-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2024 at 01:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adresar`
--

-- --------------------------------------------------------

--
-- Table structure for table `adresar`
--

CREATE TABLE `adresar` (
  `ID` int(11) NOT NULL,
  `IME` varchar(50) NOT NULL,
  `PREZIME` varchar(50) NOT NULL,
  `GRAD` varchar(30) NOT NULL,
  `ADRESA` varchar(50) NOT NULL,
  `TELEFON` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adresar`
--

INSERT INTO `adresar` (`ID`, `IME`, `PREZIME`, `GRAD`, `ADRESA`, `TELEFON`) VALUES
(1, 'Marko', 'Marković', 'Kraljevo', 'Miloša Obilića 2', '601234567'),
(2, 'Goran', 'Jakovljević', 'Beograd', 'Marka Oreškovića 5', '602345678'),
(3, 'Ivana', 'Mladenović', 'Novi Sad', 'Nemanjina 3', '0604567891'),
(4, 'Jovan', 'Jovanović', 'Kruševac', 'Palih boraca 25', '0605678912'),
(5, 'Kristijan', 'Kostić', 'Beograd', 'Vojvode Stepe 1', '0609876543'),
(6, 'Kristina', 'Marković', 'Niš', 'Železnička 23', '0614567894'),
(7, 'Aleksandra', 'Jovanović', 'Kraljevo', 'Vladimira Tomanovića 5', '0606678912'),
(8, 'Marija', 'Marinković', 'Bajina Bašta', 'Nova 5', '0625467895'),
(9, 'Milica', 'Jovanović', 'Beograd', 'Mileševska 23', '0635467894');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adresar`
--
ALTER TABLE `adresar`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adresar`
--
ALTER TABLE `adresar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
