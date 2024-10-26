-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2024 at 01:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donor_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(11) NOT NULL,
  `donor_id` varchar(50) NOT NULL,
  `donor_name` varchar(100) NOT NULL,
  `blood_type` varchar(3) NOT NULL,
  `hemoglobin` float NOT NULL,
  `systolic` int(11) NOT NULL,
  `diastolic` int(11) NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `bmi` float NOT NULL,
  `clinical_judgment` text DEFAULT NULL,
  `eligibility` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `donor_id`, `donor_name`, `blood_type`, `hemoglobin`, `systolic`, `diastolic`, `height`, `weight`, `bmi`, `clinical_judgment`, `eligibility`) VALUES
(17, '2334254', 'vehan rajintha', 'B-', 2.7, 100, 75, 160, 27, 10.5, 'bla bla', 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
