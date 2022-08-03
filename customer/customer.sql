-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 11:28 AM
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
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `C_id` int(100) NOT NULL,
  `Firstname` text NOT NULL,
  `Lastname` text NOT NULL,
  `Email` text NOT NULL,
  `Phone` text NOT NULL,
  `Password` text NOT NULL,
  `Address` text NOT NULL,
  `Gender` text NOT NULL,
  `AvailableTime` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C_id`, `Firstname`, `Lastname`, `Email`, `Phone`, `Password`, `Address`, `Gender`, `AvailableTime`) VALUES
(12, 'Mdxcvxc', 'Shanto', 'pdark599@gmail.com', '01137563277', '0123456', 'fdfsdfdf', 'female', '01:55'),
(13, 'Md', 'limo', 'lnelyrbinhd@gmail.com', '01753980988', '01234567', 'fdfsdfdf', 'male', '04:09'),
(14, 'M', 'Shanto', 'abc@gmail.com', '0122424242', 'xcvxcvxcvx', 'fdfsdfdf', 'male', '03:30'),
(15, 'Md', 'Shanto', 'pdar7599@gmail.com', '0122424242', '01234567', 'fdfsdfdf', 'male', '13:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`C_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `C_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
