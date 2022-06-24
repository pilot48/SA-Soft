-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2022 at 10:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sa_soft`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `u_id` int(11) NOT NULL,
  `emp_ID` varchar(6) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postal` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`u_id`, `emp_ID`, `firstname`, `lastname`, `contact`, `email`, `dob`, `address`, `city`, `postal`, `country`, `skill`, `year`, `level`) VALUES
(5, 'GZ2147', 'Mandla Pilot', 'Nkuna', '0797588808', 'info@enelodevelopment.co.za', '2022-06-22', '1 Tshamahansi, Stand 605', 'Giyani', '2001', 'South Africa', 'HTML', '6', 'Biginner'),
(6, 'DA1493', 'Themba', 'Mathonsi', '0797588808', 'info@enelodevelopment.co.za', '2022-06-23', '1 Tshamahansi, Stand 605', 'Giyani', '555', 'South Africa', 'HTML', '6', 'Biginner'),
(8, 'KI287', 'Basan', 'Makaringe', '078522696', 'info@enelodevelopment.co.za', '2022-06-21', '1 Tshamahansi, Stand 605', 'Giyani', '555', 'South Africa', 'A+', '9', 'Expect'),
(9, 'WC1567', 'Vannesa', 'tshinakaho', '058555685', 'mandla@enelodevelopment.co.za', '2022-06-16', '1 Tshamahansi, Stand 605', 'Malamulele', '2568', 'South Africa', 'HTML', '', ''),
(10, 'FM2052', 'Thembani', 'Hlakati', '0115856696', '', '1990-02-25', '124 Tsamahansi', 'Harare', '88998', 'Zimbambe', 'A+', '3', 'Biginner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `emp_ID` (`emp_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
