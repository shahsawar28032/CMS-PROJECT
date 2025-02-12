-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2024 at 07:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `F_NAME` varchar(20) NOT NULL,
  `L_NAME` varchar(15) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `ROLE` varchar(10) NOT NULL,
  `DOB` varchar(15) NOT NULL,
  `ADDRESS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `F_NAME`, `L_NAME`, `EMAIL`, `PASSWORD`, `GENDER`, `ROLE`, `DOB`, `ADDRESS`) VALUES
(68, 'shahsawar', 'khan', 'shah@gmail.com', '123', 'Male', 'Admin', '2002-08-08', 'karachi'),
(69, 'ijaz', 'ahmed', 'Ijaz@gmail.com', '321', 'Male', 'Normal', '2002-03-02', 'karachi pakistan'),
(70, 'Nouman', 'burki', 'nouman@gmail.com', '222', 'Male', 'Normal', '1999-02-02', 'lalabad landhi'),
(71, 'Anwar', 'afridi', 'a@gmail.com', '22222', 'Male', 'Normal', '2000-02-02', 'islamabad'),
(72, 'Naima', 'arfan', 'naima233@gmail.com', '233', 'Female', 'Normal', '2007-03-04', 'lahore pakistan'),
(73, 'fatma', 'abas', 'ffffffff@gmail.com', 'ffffff', 'Female', 'Admin', '2002-06-07', 'landhi korangi'),
(74, 'Imtiyaz', 'khan', 'Imtiyaz123@gmail.com', '234', 'Male', 'Normal', '1999-08-08', 'peshawar'),
(75, 'Umair', 'malik', 'uuu@gmail.com', 'uuuuu', 'Male', 'Normal', '1991-04-09', 'lalabad karachi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
