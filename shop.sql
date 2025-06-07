-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2025 at 12:26 AM
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
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cos`
--

CREATE TABLE `cos` (
  `id` int(8) NOT NULL,
  `id_produse` int(8) NOT NULL,
  `id_utilizator` int(8) NOT NULL,
  `marime` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `descriere`
--

CREATE TABLE `descriere` (
  `id_descriere` int(20) NOT NULL,
  `material` varchar(40) NOT NULL,
  `culoare` varchar(40) NOT NULL,
  `stil` varchar(40) NOT NULL,
  `pretIntreg` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `descriere`
--

INSERT INTO `descriere` (`id_descriere`, `material`, `culoare`, `stil`, `pretIntreg`) VALUES
(3, 'bumbac', 'negru', 'casual', 70);

-- --------------------------------------------------------

--
-- Table structure for table `produse`
--

CREATE TABLE `produse` (
  `id_produse` int(40) NOT NULL,
  `caracteristici` varchar(40) NOT NULL,
  `special` int(20) NOT NULL,
  `denumire` varchar(40) NOT NULL,
  `pret` varchar(40) NOT NULL,
  `imagine` varchar(40) NOT NULL,
  `categorie` varchar(40) NOT NULL,
  `hoverImg` varchar(40) NOT NULL,
  `pretIntreg` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produse`
--

INSERT INTO `produse` (`id_produse`, `caracteristici`, `special`, `denumire`, `pret`, `imagine`, `categorie`, `hoverImg`, `pretIntreg`) VALUES
(1, '3', 0, 'bluza Alba', '40', 'bluzaAlba.jpg', 'Bluza', '', 0),
(3, '3', 1, 'Tricou  Negru', '40', 'img1.jpg', 'tricou', 'img11.jpg', 100),
(5, '3', 1, 'Tricou  Alb', '40', 'img2.jpg', 'tricou', 'img22.jpg', 100),
(6, '3', 1, 'Tricou  Dungi', '40', 'img3.jpg', 'tricou', 'img33.jpg', 100),
(7, '3', 1, 'Bluza Albastra', '70', 'img4.jpg', 'Bluza', 'img44.jpg', 150),
(10, '3', 0, 'Bratara M&E', '40', 'bratara.png', 'Bratara', '', 0),
(11, '3', 0, 'CupHolder', '40', 'cupholder.png', 'cupholder', '', 0),
(12, '3', 0, 'Tricou', '40', 'tricouNegru.png', 'tricou', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `utilizatori`
--

CREATE TABLE `utilizatori` (
  `id_utilizator` int(8) NOT NULL,
  `nume` varchar(40) NOT NULL,
  `prenume` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `parola` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilizatori`
--

INSERT INTO `utilizatori` (`id_utilizator`, `nume`, `prenume`, `username`, `email`, `parola`) VALUES
(0, 'Popa', 'Mihai', 'Admin', 'popamihai199@yahoo.com', '$2y$10$zfc7Slu8qcDoSWfi0IY2cO0CmmHMp2Hdw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cos`
--
ALTER TABLE `cos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `descriere`
--
ALTER TABLE `descriere`
  ADD PRIMARY KEY (`id_descriere`);

--
-- Indexes for table `produse`
--
ALTER TABLE `produse`
  ADD PRIMARY KEY (`id_produse`);

--
-- Indexes for table `utilizatori`
--
ALTER TABLE `utilizatori`
  ADD PRIMARY KEY (`id_utilizator`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
