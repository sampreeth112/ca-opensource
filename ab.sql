-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2020 at 09:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ab`
--

-- --------------------------------------------------------

--
-- Table structure for table `flats`
--

CREATE TABLE `flats` (
  `id` int(11) NOT NULL,
  `ownername` varchar(50) NOT NULL,
  `mobileno` bigint(20) NOT NULL,
  `flattype` varchar(50) NOT NULL,
  `fulladdress` varchar(300) NOT NULL,
  `area` varchar(50) NOT NULL,
  `rent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flats`
--

INSERT INTO `flats` (`id`, `ownername`, `mobileno`, `flattype`, `fulladdress`, `area`, `rent`) VALUES
(1, 'abhilash', 9505123217, '3BHK', 'near mini social point,opposite to yadav food point, law gate', 'law gate', 10000),
(2, 'gaurav bhalla', 9991009995, '2bhk', 'near arora super market, law gate', 'law gate', 14000),
(3, 'gaurav bhalla', 9991009995, '1bhk', 'near arora super market, law gate', 'law gate', 7000),
(4, 'gaurav bhalla', 9991009995, '3bhk', 'near arora super market, law gate', 'law gate', 16000),
(5, 'arora', 9991009995, '3bhk', 'near arora super market, chaheru', 'chaheru', 16000),
(6, 'ram', 9955009995, '2bhk', 'near arora super market, chaheru', 'chaheru', 16000),
(7, 'raj', 8955009995, '1bhk', 'near arora super market, chaheru', 'chaheru', 6000),
(8, 'raj', 8955009995, '1bhk', 'near arora super market, deep nagar', 'deep nagar', 6000),
(9, 'raj', 8955009995, '2bhk', 'near arora super market, deep nagar', 'deep nagar', 14000),
(10, 'raj', 8955009995, '3bhk', 'near arora super market, deep nagar', 'deep nagar', 14000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flats`
--
ALTER TABLE `flats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flats`
--
ALTER TABLE `flats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
