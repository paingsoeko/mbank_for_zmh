-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 09, 2023 at 09:39 AM
-- Server version: 8.0.34-0ubuntu0.22.04.1
-- PHP Version: 8.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mybank`
--

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `id` int NOT NULL,
  `is_first_login` tinyint(1) NOT NULL DEFAULT '1',
  `email` text NOT NULL,
  `password` text NOT NULL,
  `name` varchar(111) NOT NULL,
  `balance` varchar(111) NOT NULL,
  `cnic` varchar(111) NOT NULL,
  `number` varchar(111) NOT NULL,
  `city` varchar(111) NOT NULL,
  `address` varchar(111) NOT NULL,
  `source` varchar(111) NOT NULL,
  `accountNo` varchar(111) NOT NULL,
  `branch` varchar(111) NOT NULL,
  `accountType` varchar(111) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`id`, `is_first_login`, `email`, `password`, `name`, `balance`, `cnic`, `number`, `city`, `address`, `source`, `accountNo`, `branch`, `accountType`, `date`) VALUES
(2, 1, 'some2@gmail.com', '$2y$10$YDdTFL9Vmsu2Xymrud0iwOM/Djvpdp5HOQCzZ.AmOyhMtXBjEMuXW', 'Gwat Gwat', '16800', '3210375555343', '03356910260', 'Islamabad', 'Some where in isb', 'Programmer', '10054777', '1', 'Saving', '2017-12-14 04:50:06'),
(6, 1, 'realx4rd@gmail.com', '$2y$10$fcBn6hqFf8F/.jCY7iBiTetaeowrtRxS.HYgGHnlvYuedJOzT7DSS', 'Maung Htay', '234234', '3240338834902', '03356910260', 'Taunsa', 'Dera Ghazi Khan', 'Govt. job', '1513410739', '1', 'saving', '2017-12-16 07:52:40'),
(7, 1, 'minkhant@gmail.com', '$2y$10$cQyk2QAdxWGhCd9gDV0VAuU2kxeh2EKzpTwfjDO7r0fhEj5myRgXG', 'Min Khant', '12121', '3240338834902', '03356910260', 'Taunsa', 'Dera Ghazi Khan', 'Govt. job', '1513410837', '1', 'current', '2017-12-16 07:54:18'),
(10, 0, 'some@gmail.com', '$2y$10$3C87ECmClfDMgIWz4DIL4uHL.D3JkQZINppu2yhWiqzzoXf.jKeMq', 'Kopaing', '9000', '3210375555426', '03356910260', 'Islamabad', 'Some where in isb', 'Programmer', '1005469', '1', 'Current', '2017-12-14 05:50:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
