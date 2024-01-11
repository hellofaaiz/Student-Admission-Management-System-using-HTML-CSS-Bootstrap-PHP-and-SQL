-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2023 at 09:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration_details`
--

CREATE TABLE `registration_details` (
  `SL_NO` int(25) NOT NULL,
  `Full_name` varchar(15) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `User_name` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `C_Password` varchar(25) NOT NULL,
  `Acc_Type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration_details`
--

INSERT INTO `registration_details` (`SL_NO`, `Full_name`, `Email`, `User_name`, `Password`, `C_Password`, `Acc_Type`) VALUES
(1, 'dhdf', 'hjsdgashf@gmail.com', 'sasafkdhsa@gmai', '4568', 'fgjgfjf', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `ID` int(25) NOT NULL,
  `First_Name` varchar(25) NOT NULL,
  `Surename` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Mobile` varchar(25) NOT NULL,
  `Gender` varchar(25) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Address` varchar(25) NOT NULL,
  `Nationality` varchar(20) NOT NULL,
  `City` varchar(10) NOT NULL,
  `Postal` varchar(20) NOT NULL,
  `Country` varchar(25) NOT NULL,
  `Department` varchar(25) NOT NULL,
  `Shift` varchar(20) NOT NULL,
  `Season` varchar(20) NOT NULL,
  accept varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `User_ID` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration_details`
--
ALTER TABLE `registration_details`
  ADD PRIMARY KEY (`SL_NO`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration_details`
--
ALTER TABLE `registration_details`
  MODIFY `SL_NO` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
