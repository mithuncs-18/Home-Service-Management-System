-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2021 at 08:37 PM
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
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `M_id` int(100) NOT NULL,
  `Fullname` text NOT NULL,
  `Email` text NOT NULL,
  `Phone` text NOT NULL,
  `Password` text NOT NULL,
  `Dob` text NOT NULL,
  `Address` text NOT NULL,
  `Gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`M_id`, `Fullname`, `Email`, `Phone`, `Password`, `Dob`, `Address`, `Gender`) VALUES
(6, 'wwwwe', 'mithunchanda1999@gmail.com', '01789034490', '89034490', '', 'sssss', 'female'),
(7, 'wdsgxskcdk', 'shihabahmedsk@gmail.com', '2021-08-10', '34553462733', '', 'sdfgjuru', 'male'),
(8, 'wdsgxskcdk', 'shihabahmedsk@gmail.com', '2021-08-10', '34553462733', '', 'sdfgjuru', 'female'),
(9, 'wdsgxskcdk', '19-39575-1@student.aiub.edu', '34553462733', '2021-08-10', '', 'sdfgjuru', 'male'),
(10, 'md karim', 'shihabahmedsk@gmail.com', '34553462733', '2021-08-10', '', 'sdfgjuru', 'male'),
(11, 'Password', 'shihabahmedsk@gmail.com', '34553462733', '2021-08-10', '', 'sdfgjuru', 'male'),
(12, 'sssssssssss', 'abc@gmail.com', '0122424242', '2021-08-04', 'asdasdasd', 'fdfsdfdf', 'male'),
(13, 'aaaaaacccccc', 'pdark599@gmail.com', '0122424242', 'vsdfdsfsdfs', '2021-08-09', 'sdfsfsf', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`M_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `M_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
