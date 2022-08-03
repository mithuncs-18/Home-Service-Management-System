-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 02:41 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `workdetails`
--

CREATE TABLE `workdetails` (
  `Cid` int(100) NOT NULL,
  `Name` text NOT NULL,
  `Address` text NOT NULL,
  `Problem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workdetails`
--

INSERT INTO `workdetails` (`Cid`, `Name`, `Address`, `Problem`) VALUES
(1, 'Mithun', 'Dhanmondi', 'Electrical'),
(3, 'Anik', 'Mirpur', 'Cleaning'),
(4, 'Asad', 'Badda', 'Mechanic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `workdetails`
--
ALTER TABLE `workdetails`
  ADD PRIMARY KEY (`Cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `workdetails`
--
ALTER TABLE `workdetails`
  MODIFY `Cid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
