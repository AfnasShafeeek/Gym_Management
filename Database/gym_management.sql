-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 08:48 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_details`
--

CREATE TABLE `client_details` (
  `id` varchar(6) NOT NULL,
  `name` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `phone` int(12) NOT NULL,
  `age` int(2) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `fee` int(10) NOT NULL,
  `time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_details`
--

INSERT INTO `client_details` (`id`, `name`, `user_name`, `mail`, `password`, `phone`, `age`, `address`, `gender`, `fee`, `time`) VALUES
('CLT 1', 'Afnas ', 'afnas', 'afnas@gmail.com', 'afnas', 123456789, 20, 'THAZHATHANGADI HOUSE', 'Male', 3800, 'evening');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` varchar(10) NOT NULL,
  `complaint` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `complaint`) VALUES
('CLT 1', 'jhjghjghjghjghjghjghjghjghjghjhj'),
('CLT 1', 'please do anything against my complaint fast please');

-- --------------------------------------------------------

--
-- Table structure for table `trainer_details`
--

CREATE TABLE `trainer_details` (
  `id` varchar(6) NOT NULL,
  `name` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `mail` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` int(15) NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `wage` int(10) NOT NULL,
  `acc_num` int(25) NOT NULL,
  `time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer_details`
--

INSERT INTO `trainer_details` (`id`, `name`, `user_name`, `mail`, `password`, `phone`, `age`, `address`, `gender`, `wage`, `acc_num`, `time`) VALUES
('TRN 1', 'ghfgfgf', 'ghf', 'gugvgjgu@gmail.com', '1235465', 41851555, 15, 'gfcfgvchvfghjgtgyufrrtftytifgfgttfgtfgkjtgiufur564', 'Male', 120000, 1212121212, 'morning');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_details`
--
ALTER TABLE `client_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer_details`
--
ALTER TABLE `trainer_details`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
