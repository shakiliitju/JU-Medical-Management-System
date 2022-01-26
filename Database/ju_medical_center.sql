-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 25, 2022 at 04:40 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ju_medical_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambulence`
--

DROP TABLE IF EXISTS `ambulence`;
CREATE TABLE IF NOT EXISTS `ambulence` (
  `Amb_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Amb_Status` enum('Available','Not Available') NOT NULL,
  `P_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`Amb_ID`),
  UNIQUE KEY `Amb_ID` (`Amb_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ambulence`
--

INSERT INTO `ambulence` (`Amb_ID`, `Amb_Status`, `P_ID`) VALUES
(1, 'Available', NULL),
(2, 'Not Available', NULL),
(3, 'Not Available', NULL),
(4, 'Available', NULL),
(5, 'Available', NULL),
(6, 'Not Available', NULL),
(7, 'Available', NULL),
(8, 'Available', NULL),
(9, 'Not Available', NULL),
(10, 'Available', NULL),
(11, 'Not Available', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

DROP TABLE IF EXISTS `bed`;
CREATE TABLE IF NOT EXISTS `bed` (
  `Bed_Num` int(11) NOT NULL AUTO_INCREMENT,
  `Bed_Status` enum('Available','Not Available') NOT NULL,
  `P_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`Bed_Num`),
  UNIQUE KEY `Bed_Num` (`Bed_Num`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bed`
--

INSERT INTO `bed` (`Bed_Num`, `Bed_Status`, `P_ID`) VALUES
(1, 'Available', NULL),
(2, 'Available', NULL),
(3, 'Not Available', NULL),
(4, 'Not Available', NULL),
(5, 'Not Available', NULL),
(6, 'Available', NULL),
(7, 'Not Available', NULL),
(8, 'Not Available', NULL),
(9, 'Not Available', NULL),
(10, 'Not Available', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `D_ID` int(11) NOT NULL AUTO_INCREMENT,
  `D_Name` varchar(225) NOT NULL,
  `Gender` enum('Male','Female','Others') NOT NULL,
  `Work_Day` date NOT NULL,
  `Speciality` varchar(225) NOT NULL,
  PRIMARY KEY (`D_ID`),
  UNIQUE KEY `D_ID` (`D_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`D_ID`, `D_Name`, `Gender`, `Work_Day`, `Speciality`) VALUES
(6, 'DR. LIKHAN CHANDRA BALA', 'Male', '2022-01-25', 'Cardiologists'),
(7, 'DR. ASMA SIDDIQA', 'Female', '2022-01-26', 'Pathologists'),
(8, 'DR. MD. ROKONUGGAMAN', 'Male', '2022-01-25', 'Podiatrists'),
(9, 'DR. TOWHID HASSAN SHAH CHOWDHURY', 'Male', '2022-01-26', 'Urologists'),
(10, 'DR. MAHABUBA JANNATH', 'Male', '2022-01-26', 'Critical Care Medicine Specialists'),
(11, 'DR. BIRENDRO KUMAR BISWAS', 'Male', '2022-01-25', 'Dermatologists'),
(12, 'DR.RIZWANUR RAHMAN', 'Male', '2022-01-26', 'Gastroenterologists'),
(13, 'DR. MD. SHAMSUL ALAM KHAN (LITON)', 'Male', '2022-01-25', 'Neurologists'),
(14, 'DR. MAMOTA MALLIKA', 'Female', '2022-01-25', 'Anesthesiologists');

-- --------------------------------------------------------

--
-- Table structure for table `doc_patient`
--

DROP TABLE IF EXISTS `doc_patient`;
CREATE TABLE IF NOT EXISTS `doc_patient` (
  `D_ID` int(11) NOT NULL,
  `P_ID` int(11) NOT NULL,
  PRIMARY KEY (`D_ID`),
  UNIQUE KEY `D_ID` (`D_ID`),
  UNIQUE KEY `P_ID` (`P_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doc_staff`
--

DROP TABLE IF EXISTS `doc_staff`;
CREATE TABLE IF NOT EXISTS `doc_staff` (
  `D_ID` int(11) NOT NULL,
  `S_ID` int(11) NOT NULL,
  PRIMARY KEY (`D_ID`),
  UNIQUE KEY `D_ID` (`D_ID`),
  UNIQUE KEY `S_ID` (`S_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

DROP TABLE IF EXISTS `medicine`;
CREATE TABLE IF NOT EXISTS `medicine` (
  `M_Code` int(11) NOT NULL AUTO_INCREMENT,
  `Quantity` int(11) NOT NULL,
  PRIMARY KEY (`M_Code`),
  UNIQUE KEY `M_Code` (`M_Code`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`M_Code`, `Quantity`) VALUES
(1, 100),
(2, 2),
(3, 45),
(4, 58),
(5, 34),
(6, 56),
(7, 5),
(8, 123),
(9, 678),
(10, 34);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `P_ID` int(11) NOT NULL AUTO_INCREMENT,
  `P_Name` varchar(225) NOT NULL,
  `Gender` enum('Male','Female','Others') NOT NULL,
  `Age` int(11) NOT NULL,
  `P_Type` varchar(225) NOT NULL,
  PRIMARY KEY (`P_ID`),
  UNIQUE KEY `P_ID` (`P_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`P_ID`, `P_Name`, `Gender`, `Age`, `P_Type`) VALUES
(3, 'Tokee', 'Male', 22, 'Student'),
(10, 'sumiya', 'Female', 21, 'Student'),
(9, 'Tokee', 'Male', 55, 'Teacher'),
(6, 'sharif', 'Male', 22, 'Student'),
(8, 'Amit', 'Male', 20, 'Student'),
(11, 'Amit Azim', 'Male', 22, 'Student'),
(12, 'Amit Azim', 'Male', 22, 'Student'),
(13, 'Shakil', 'Male', 32, 'Staff'),
(14, 'MAruf', 'Female', 43, 'Student'),
(15, 'MAruf', 'Female', 43, 'Student'),
(16, 'Monir', 'Female', 16, 'Student'),
(17, 'Monir Hossain', 'Male', 21, 'Student'),
(18, 'Maruf Ahmed', 'Male', 25, 'Student'),
(19, 'Maruf Ahmed', 'Male', 25, 'Student'),
(20, 'Sumaiya Siddika', 'Female', 33, 'Teacher'),
(21, 'Ashfaqur Tokee', 'Male', 28, 'Staff'),
(22, 'Shakil Ahmed', 'Male', 40, 'Teacher'),
(23, 'Sidratul Afrida', 'Female', 20, 'Staff'),
(24, 'Sidratul Afrida', 'Female', 20, 'Staff'),
(25, 'Marufa Akter', 'Female', 26, 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `patient_recieves`
--

DROP TABLE IF EXISTS `patient_recieves`;
CREATE TABLE IF NOT EXISTS `patient_recieves` (
  `P_ID` int(11) NOT NULL,
  `M_Code` int(11) NOT NULL,
  PRIMARY KEY (`P_ID`),
  UNIQUE KEY `P_ID` (`P_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_takes_test`
--

DROP TABLE IF EXISTS `patient_takes_test`;
CREATE TABLE IF NOT EXISTS `patient_takes_test` (
  `P_ID` int(11) NOT NULL,
  `T_ID` int(11) NOT NULL,
  PRIMARY KEY (`P_ID`),
  UNIQUE KEY `P_ID` (`P_ID`),
  UNIQUE KEY `T_ID` (`T_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `S_ID` int(11) NOT NULL AUTO_INCREMENT,
  `S_Name` varchar(225) NOT NULL,
  `Gender` enum('Male','Female','Others') NOT NULL,
  `Work_Day` date NOT NULL,
  `T_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`S_ID`),
  UNIQUE KEY `S_ID` (`S_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`S_ID`, `S_Name`, `Gender`, `Work_Day`, `T_ID`) VALUES
(1, 'KHONDOKER JAHANGIR ALAM', 'Male', '2022-01-26', NULL),
(2, 'MD. MOTIAR RAHMAN', 'Male', '2022-01-26', NULL),
(3, 'Shakila ', 'Female', '2022-01-25', NULL),
(4, 'Shakila ', 'Female', '2022-01-25', NULL),
(5, 'Monira Akter', 'Male', '2022-01-26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `T_ID` int(11) NOT NULL AUTO_INCREMENT,
  `T_Name` varchar(225) NOT NULL,
  PRIMARY KEY (`T_ID`),
  UNIQUE KEY `T_ID` (`T_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`T_ID`, `T_Name`) VALUES
(1, 'amniocentesis'),
(2, 'blood count'),
(3, 'enzyme analysis'),
(4, 'hematocrit'),
(5, 'serological test'),
(6, 'cholecystography'),
(7, 'brain scanning '),
(8, 'toxicology test'),
(9, 'thoracentesis'),
(10, 'syphilis test'),
(11, 'pregnancy test');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(4, 'shakil', 'fbf832bc8d7e746434993cec0061a682', 'Md. Shakil Hossain'),
(5, 'tokee', 'e72b6570017e99a7c63f473c62f7c149', 'Asfakur Rahman Tokee'),
(6, 'sharif', '585a097e7ec1f2ba93c7d066d6f7fc5e', 'Md. Shariful Islam'),
(7, 'amit', '0cb1eb413b8f7cee17701a37a1d74dc3', 'Amit Azim Amit');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
