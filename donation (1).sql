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
-- Database: `donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(50) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `dofbirth` varchar(255) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `nic` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `pnumber` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `medicalnumber` varchar(255) DEFAULT NULL,
  `special` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `otherquali` varchar(255) DEFAULT NULL,
  `available_hours` varchar(255) DEFAULT NULL,
  `locations` varchar(255) DEFAULT NULL,
  `workplace` varchar(255) DEFAULT NULL,
  `profilepic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `dofbirth`, `gender`, `nic`, `address`, `pnumber`, `email`, `password`, `medicalnumber`, `special`, `experience`, `otherquali`, `available_hours`, `locations`, `workplace`, `profilepic`) VALUES
(9, 'Vehan Rajintha', '2024-10-18', 'male', '1234567889', '8/200 siddhamulla piliyandala', '0713910419', 'IT23646360@my.sliit.lk', '123', '123456', 'Cardiology', 'nothing', 'bla bla', 'morning', 'location1', 'Piliyandala', 'uploads/66fe62cea19944.97315107.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
