-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2023 at 08:32 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmer_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `farmer_reg_details`
--

CREATE TABLE `farmer_reg_details` (
  `name` varchar(1200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `contact` char(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `address` varchar(1200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gender` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(1200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(1200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `designation` varchar(1200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmer_reg_details`
--

INSERT INTO `farmer_reg_details` (`name`, `contact`, `address`, `gender`, `email`, `password`, `designation`) VALUES
('abc', '876756894', 'new delhi', 'Male', 'abc@gmail.com', '1234', 'Farmer'),
('aman', '7584884849', 'delhi', 'Male', 'aman@gmail.com', 'tttt', 'Contributor'),
('amit', '8675774322', 'rani bagh ', 'Male', 'amit@gmail.com', 'amit56', 'Contributor'),
('dhruvi', '8787654443', 'gurugram', 'Female', 'dhruvi@gmail.com', 'dhruvi', 'Contributor'),
('Riya Goel', '9873101106', 'WZ-85 SRI NAGAR', 'Female', 'riyagoel192@gmail.com', 'riya1234', 'Farmer'),
('riya', '9873101106', 'delhi', 'Female', 'surbhi@gmail.com', 'surbhi', 'Farmer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmer_reg_details`
--
ALTER TABLE `farmer_reg_details`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
