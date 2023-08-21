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
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `Firm_Name` varchar(1200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Product_Name` varchar(1200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Image` varchar(1200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Features` varchar(1200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `Discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`Firm_Name`, `Product_Name`, `Image`, `Features`, `Price`, `Discount`) VALUES
('SPECTEC TECHNO PROJECTS PRIVATE LIMITED\r\n', 'Oil expeller machine ', 'https://img.kompass.com/sys-master-images/h27/h3a/9785002688542/oil-expeller-machine-500x500-jpg', 'We are one of the most well-distinguished companies in the market that are into offering  Oil Expeller Machine.\r\nExpeller pressing (also called  oil pressing) is a mechanical method for extracting oil from raw materials. The raw materials are squeezed under high pressure in a single step. When used for the extraction of food oils, typical raw materials are nuts, seeds and algae, which are supplied to the press in a continuous feed. As the raw material is pressed, friction causes it to heat. In the case of harder nuts (which require higher pressures) the material can exceed temperatures of 120 °F (49 °C).\r\n', 23000, 10),
('abc', 'xyz', 'https://thumbs.dreamstime.com/b/tractor-modern-agriculture-equipment-6423931.jpg', 'good product', 5600, 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
