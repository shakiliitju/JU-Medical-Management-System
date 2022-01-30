-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 30, 2022 at 05:48 AM
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
  `Amb_ID` int(11) NOT NULL,
  `Amb_Status` enum('Available','Not Available') NOT NULL,
  `P_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`Amb_ID`),
  UNIQUE KEY `Amb_ID` (`Amb_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ambulence`
--

INSERT INTO `ambulence` (`Amb_ID`, `Amb_Status`, `P_ID`) VALUES
(3, 'Available', NULL),
(2, 'Available', NULL),
(1, 'Available', NULL),
(4, 'Available', NULL),
(5, 'Not Available', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

DROP TABLE IF EXISTS `bed`;
CREATE TABLE IF NOT EXISTS `bed` (
  `Bed_Num` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Bed_Status` enum('Available','Not Available') NOT NULL,
  `P_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`Bed_Num`),
  UNIQUE KEY `Bed_Num` (`Bed_Num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bed`
--

INSERT INTO `bed` (`Bed_Num`, `Date`, `Bed_Status`, `P_ID`) VALUES
(1, '2022-02-05', 'Available', NULL),
(2, '2022-01-22', 'Available', NULL),
(3, '2022-01-22', 'Available', NULL),
(4, '2022-01-30', 'Available', NULL),
(5, '2022-01-31', 'Not Available', NULL),
(6, '2022-01-30', 'Not Available', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `D_ID` int(11) NOT NULL,
  `D_Name` varchar(225) NOT NULL,
  `Gender` enum('Male','Female','Others') NOT NULL,
  `Work_Day` date NOT NULL,
  `Speciality` varchar(225) NOT NULL,
  PRIMARY KEY (`D_ID`),
  UNIQUE KEY `D_ID` (`D_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`D_ID`, `D_Name`, `Gender`, `Work_Day`, `Speciality`) VALUES
(1, 'DR. LIKHAN CHANDRA BALA', 'Male', '2022-01-29', 'Cardiologists'),
(2, 'DR. ASMA SIDDIQA', 'Female', '2022-01-30', 'Pathologists'),
(3, 'DR. MD. ROKONUGGAMAN', 'Male', '2022-01-29', 'Podiatrists'),
(4, 'DR. TOWHID HASSAN SHAH CHOWDHURY', 'Male', '2022-01-30', 'Urologists'),
(5, 'DR. MAHABUBA JANNATH', 'Female', '2022-01-30', 'Eye Specialist'),
(6, 'DR. BIRENDRO KUMAR BISWAS', 'Male', '2022-01-29', 'Urologists'),
(7, 'DR.RIZWANUR RAHMAN', 'Male', '2022-01-29', 'Anaesthetists'),
(8, 'DR. MD. SHAMSUL ALAM KHAN', 'Male', '2022-01-30', 'Critical Care Medicine Specialists'),
(9, 'DR. MAMOTA MALLIKA', 'Female', '2022-01-30', 'Child Specialist');

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
  `M_Code` int(11) NOT NULL,
  `M_Name` varchar(225) NOT NULL,
  `Quantity` int(11) NOT NULL,
  PRIMARY KEY (`M_Code`),
  UNIQUE KEY `M_Code` (`M_Code`),
  UNIQUE KEY `M_Name` (`M_Name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`M_Code`, `M_Name`, `Quantity`) VALUES
(1, 'Napa', 100),
(3, 'Ace', 50),
(2, 'OR-Saline', 50),
(4, 'Deslor', 50),
(5, 'Abaclor', 300),
(6, 'Abetis Plus ', 240),
(7, 'Metro', 30);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `P_ID` int(11) NOT NULL,
  `P_Name` varchar(225) NOT NULL,
  `Gender` enum('Male','Female','Others') NOT NULL,
  `Age` int(11) NOT NULL,
  `P_Type` varchar(225) NOT NULL,
  `A_Date` date NOT NULL,
  PRIMARY KEY (`P_ID`),
  UNIQUE KEY `P_ID` (`P_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`P_ID`, `P_Name`, `Gender`, `Age`, `P_Type`, `A_Date`) VALUES
(2, 'Amit Azim', 'Male', 28, 'Staff', '2022-01-27'),
(1, 'Maruf Ahmed', 'Male', 22, 'Student', '2022-01-30'),
(3, 'Sumaiya Siddika', 'Female', 30, 'Teacher', '2022-01-27'),
(4, 'Ashfaqur Tokee', 'Male', 33, 'Teacher', '2022-01-30'),
(5, 'Shariful Islam', 'Male', 22, 'Student', '2022-01-24');

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
  `S_ID` int(11) NOT NULL,
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
(3, 'MONIRA AKTER', 'Female', '2022-01-29', NULL),
(4, 'MARUFA BEGUM', 'Female', '2022-01-29', NULL),
(5, 'SHAKIL AHMED', 'Male', '2022-01-29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `T_ID` int(11) NOT NULL,
  `T_Name` varchar(255) NOT NULL,
  `T_Price` int(11) NOT NULL,
  PRIMARY KEY (`T_ID`),
  UNIQUE KEY `T_ID` (`T_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`T_ID`, `T_Name`, `T_Price`) VALUES
(1, 'amniocentesis', 100),
(2, 'blood count', 60),
(3, 'enzyme analysis', 150),
(4, 'hematocrit', 200),
(5, 'Blood Test', 0),
(6, 'Covid Test', 50);

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
