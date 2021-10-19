-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2018 at 11:26 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cookies`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `User_id` varchar(40) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `User_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`User_id`, `Password`, `User_type`) VALUES
('rocksuchindrakumar@gmail.com', '9092', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `orderrr`
--

CREATE TABLE `orderrr` (
  `Order_id` int(11) NOT NULL,
  `Order_date` varchar(20) NOT NULL,
  `P_Name` varchar(30) NOT NULL,
  `P_Quantity` varchar(10) NOT NULL,
  `P_price` varchar(10) NOT NULL,
  `C_id` varchar(60) NOT NULL,
  `C_Name` varchar(100) NOT NULL,
  `C_Address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `OTP_NO` varchar(10) NOT NULL,
  `User_id` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `C_id` varchar(40) NOT NULL,
  `C_Name` varchar(40) NOT NULL,
  `P_Name` varchar(40) NOT NULL,
  `P_Quantity` varchar(10) NOT NULL,
  `P_Price` varchar(10) NOT NULL,
  `Payment_Status` varchar(20) NOT NULL,
  `Payment_Date` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`C_id`, `C_Name`, `P_Name`, `P_Quantity`, `P_Price`, `Payment_Status`, `Payment_Date`) VALUES
('ashu@gmail.com', 'Promod', 'patara', '400', '3600000', 'paid', '2018/05/12');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `P_id` int(11) NOT NULL,
  `P_Name` varchar(50) NOT NULL,
  `P_Price` varchar(10) NOT NULL,
  `Ingredient` varchar(100) NOT NULL,
  `P_Img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `F_Name` varchar(100) NOT NULL,
  `Contact` varchar(13) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `User_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`F_Name`, `Contact`, `Address`, `city`, `User_id`) VALUES
('suchindra_kumar', '7752908164', 'shivrajpur', 'Kanpur', 'rocksuchindrakumar@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `orderrr`
--
ALTER TABLE `orderrr`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`P_id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderrr`
--
ALTER TABLE `orderrr`
  MODIFY `Order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `P_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
