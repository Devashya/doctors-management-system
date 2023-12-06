-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 06:25 AM
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
-- Database: `dms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(10) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `u_name`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `a_id` int(10) NOT NULL,
  `p_id` int(50) NOT NULL,
  `d_id` int(11) NOT NULL,
  `p_name` varchar(250) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `major` varchar(250) DEFAULT NULL,
  `f_name` varchar(50) DEFAULT NULL,
  `l_name` varchar(50) NOT NULL,
  `a_date` date DEFAULT NULL,
  `status` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`a_id`, `p_id`, `d_id`, `p_name`, `phone`, `email`, `date`, `time`, `major`, `f_name`, `l_name`, `a_date`, `status`) VALUES
(1, 2, 1, 'Umesh Nair', 8901234567, ' umesh@gmail.com ', '2023-12-04', '23:03:30', 'Neurologist', 'Devashya', 'Patel', '2023-12-28', 'Approved'),
(2, 2, 1, 'Umesh Nair', 8901234567, 'umesh@gmail.com', '2023-12-05', '00:36:00', 'Dermatologist', 'Heli', 'Patel', '2023-12-24', 'Pending'),
(4, 1, 21, 'Dev Patel', 1234567890, 'dev@gmail.com', '2023-12-05', '00:44:16', 'Pathologist', 'Shruti', 'Patel', '2023-12-18', 'Pending'),
(5, 1, 13, 'Dev Patel', 1234567890, 'dev@gmail.com', '2023-12-05', '01:04:21', 'Neurology', 'Krutik', 'Dave', '2024-01-10', 'Rejected'),
(6, 1, 11, 'Dev Patel', 1234567890, 'dev@gmail.com', '2023-12-05', '17:05:47', 'Family medicine', 'Het', 'Panchal', '2024-01-09', 'Rejected'),
(7, 1, 10, 'Dev Patel', 1234567890, 'dev@gmail.com', '2023-12-05', '22:49:37', 'General practitioner', 'Keyur', 'Patel', '2023-12-22', 'Approved'),
(8, 1, 11, 'Dev Patel', 1234567890, 'dev@gmail.com', '2023-12-05', '23:56:52', 'Family medicine', 'Het', 'Panchal', '2023-12-23', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `d_id` int(11) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `major` varchar(30) NOT NULL,
  `z_code` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`d_id`, `f_name`, `l_name`, `email`, `password`, `gender`, `city`, `major`, `z_code`) VALUES
(1, 'Devashya', 'Patel', 'dev@gmail.com', 'dev', 'Male', 'Garden city', 'Neurologist', '11801'),
(4, 'Raj', 'Patel', 'raj@gmail.com', 'raj', 'Male', 'Hicksville', 'Surgeon', '11345'),
(6, 'Smit', 'Raval', ' smit@gmail.com ', 'smit', 'Male', 'Levittown', 'Pediatrician', '11740'),
(8, 'Ritu', 'Bhatt', 'ritu@gmail.com', 'ritu', 'Female', 'Valley spring', 'Pathologist', '11802'),
(9, 'Jainil', 'Patel', 'jainil@gmail.com', 'jainil', 'Male', 'Ronkonkoma', 'Orthopaedist', '11803'),
(10, 'Keyur', 'Patel', 'keyur@gmail.com', 'keyur', 'Male', 'Hempstead', 'General practitioner', '11808'),
(11, 'Het', 'Panchal', 'het@gmail.com', 'het', 'Male', 'Huntington', 'Family medicine', '11805'),
(13, 'Krutik', 'Dave', 'Krutik@gmail.com', 'krutik', 'Male', 'Deer park', 'Neurology', '11530'),
(14, 'Heli', 'Patel', 'heli@gmail.com', 'heli', 'Female', 'Westbury', 'Dermatologist', '11552'),
(21, 'Shruti', 'Patel', 'shruti@gmail.com', 'shruti', 'Female', 'East meadow', 'Pathologist', '11890'),
(23, 'Umesh', 'Nair', 'umesh@gmail.com', 'umesh', 'Male', 'New York', 'Internal Medicine', '11367'),
(24, 'Kevin', 'Peter', ' kevin@gmail.com ', '', 'Male', 'Garden City', 'Neurologist', '11801');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `p_id` int(10) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `p_name`, `phone`, `password`, `email`, `city`) VALUES
(1, 'Dev Patel', '1234567890', '1234', 'dev@gmail.com', 'Garden city'),
(2, 'Umesh Nair', '8901234567', '8901', 'umesh@gmail.com', 'Brentwood');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `d_id` (`d_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `doctor` (`d_id`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `patient` (`p_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
