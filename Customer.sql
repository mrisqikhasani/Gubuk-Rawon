-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 16, 2024 at 09:56 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21870825_gubuk_rawon`
--

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `customerID` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phoneNumber` varchar(13) DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`customerID`, `name`, `email`, `phoneNumber`, `address`) VALUES
(1, 'tamu', NULL, NULL, NULL),
(2, 'Putri Cahya Maulina', 'putricahyamaulina@gmail.com', '08561163076', 'Jl. R. Sanim Villa Putra Mandiri 4 No. A8 Rt01/011, Kelurahan Tanah Baru, Kecamatan Beji, Kota Depok, Jawa Barat'),
(3, 'abdul aziz s', 'aziizmuhamad1@gmail.com', '081290998011', 'villa putra mandiri no.04, Kelurahan Tanah Baru, Kecamatan Beji, Kota Depok, Jawa Barat'),
(4, NULL, NULL, NULL, ', Kelurahan , Kecamatan , Kota , Jawa Barat'),
(5, 'Deny Ismiati', 'deniismiaty@gmail.com', '085776273769', 'Jl. R. Sanim, Perum Mulya Asri Blok D6, Kelurahan Tanah Baru, Kecamatan Beji, Kota Depok, Jawa Barat'),
(6, 'Ibu Sintya Aminah', 'shintyaamh@gmail.com', '085631163078', 'Jl. Anyelir Raya No.67 Rt03/10, Kelurahan Depok Jaya, Kecamatan Pancoran Mas, Kota Depok, Jawa Barat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`customerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
