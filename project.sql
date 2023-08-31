-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 11:46 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `F_Name` varchar(30) NOT NULL,
  `M_Name` varchar(30) NOT NULL,
  `L_Name` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `Age` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`F_Name`, `M_Name`, `L_Name`, `Password`, `Email`, `Phone`, `Gender`, `Age`) VALUES
('Abdulaziz', 'Hamad', 'AlAbduljabar', '391101265', '391101265@s.mu.edu.sa', '0507260768', 'Male', '21'),
('Bandar', 'Khalid', 'Alyahya', '391101290', '391101290@s.mu.edu.sa', '0538817776', 'Male', '21'),
('Abdulmalik', 'Ibrahim', 'Alobaid', '391101269', '391101269@s.mu.edu.sa', '0560526831', 'Male', '21'),
('ahmed', 'ahmed', 'ahmed', 'ahmed', 'ahmed@gmail.com', '0500500500', 'Male', '30'),
('ali', 'ali', 'ali', 'ali', 'ali@hotmail.com', '0550550550', 'Male', '40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
