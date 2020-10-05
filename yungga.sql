-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2020 at 11:38 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yungga`
--

-- --------------------------------------------------------

--
-- Table structure for table `mis_adjustments`
--

CREATE TABLE `mis_adjustments` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `requestor` varchar(1000) NOT NULL,
  `concerned_problem` text NOT NULL,
  `requested_solution` text NOT NULL,
  `approved_by` varchar(1000) NOT NULL,
  `accepted_by` varchar(1000) NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mis_adjustments`
--

INSERT INTO `mis_adjustments` (`id`, `date`, `requestor`, `concerned_problem`, `requested_solution`, `approved_by`, `accepted_by`, `status`) VALUES
(1, '2020-10-05', 'Cendrick Trilles', 'dsvsdcdscdsvds vds sd vds', 'dsv dsv dsf dsf', 'Reynan Jardin', 'Marvin Lucas', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mis_adjustments`
--
ALTER TABLE `mis_adjustments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mis_adjustments`
--
ALTER TABLE `mis_adjustments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
