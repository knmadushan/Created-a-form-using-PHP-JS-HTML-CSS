-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 04:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `travel_agency`
--

CREATE TABLE `travel_agency` (
  `Date` date NOT NULL,
  `Destination` varchar(30) NOT NULL,
  `Budget` int(11) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Trip` varchar(30) NOT NULL,
  `Service` varchar(30) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travel_agency`
--

INSERT INTO `travel_agency` (`Date`, `Destination`, `Budget`, `City`, `Trip`, `Service`, `ID`) VALUES
('2022-11-16', 'Ampara', 300, 'Mattala', '  Business   ', ' rent Car  ', 26),
('2022-11-16', 'Colombo', 200, 'Kfjkjfkjfkf', 'sdfsdf', 'sdfsdf', 27);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `travel_agency`
--
ALTER TABLE `travel_agency`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `travel_agency`
--
ALTER TABLE `travel_agency`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
