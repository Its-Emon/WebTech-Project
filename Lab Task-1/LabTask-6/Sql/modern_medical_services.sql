-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 07:57 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modern medical services`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `did` int(20) NOT NULL,
  `docid` int(35) NOT NULL,
  `dname` varchar(60) NOT NULL,
  `demail` varchar(60) NOT NULL,
  `ddegree` varchar(50) NOT NULL,
  `dusername` varchar(65) NOT NULL,
  `dpassword` varchar(70) NOT NULL,
  `dspec` varchar(75) NOT NULL,
  `dcomment` varchar(500) NOT NULL,
  `daddress` varchar(120) NOT NULL,
  `dphone` int(11) NOT NULL,
  `dnationality` varchar(20) NOT NULL,
  `dnidno` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hid` int(11) NOT NULL,
  `hname` varchar(50) NOT NULL,
  `husername` varchar(55) NOT NULL,
  `hpassword` varchar(45) NOT NULL,
  `hemail` varchar(40) NOT NULL,
  `hlocation` varchar(65) NOT NULL,
  `hosid` int(35) NOT NULL,
  `hicuseatno` int(15) NOT NULL,
  `hoswno` int(10) NOT NULL,
  `hosnoseat` int(20) NOT NULL,
  `hcabinno` int(10) NOT NULL,
  `hoxav` varchar(7) NOT NULL,
  `hedate` date NOT NULL,
  `hphone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pid` int(11) NOT NULL,
  `pname` varchar(40) NOT NULL,
  `pemail` varchar(50) NOT NULL,
  `pphone` int(11) NOT NULL,
  `pdob` date NOT NULL,
  `paddress` varchar(60) NOT NULL,
  `pusername` varchar(45) NOT NULL,
  `ppassword` varchar(42) NOT NULL,
  `pgender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `sid` int(15) NOT NULL,
  `sname` varchar(40) NOT NULL,
  `semail` varchar(50) NOT NULL,
  `susername` varchar(40) NOT NULL,
  `spassword` varchar(45) NOT NULL,
  `sphone` text NOT NULL,
  `saddress` varchar(100) NOT NULL,
  `simage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`sid`, `sname`, `semail`, `susername`, `spassword`, `sphone`, `saddress`, `simage`) VALUES
(1, 'Emon Tushar', 'emon@gmail.com', 'emon tushar', '@#1234556788', '1515298367', 'khilkhet,Dhaka', ''),
(2, 'fer dicchi', 'fer@gmail.com', 'fer tushar', '12345678@#', '01515298367', 'Uttara Dhaka', 'pic.png'),
(3, 'emon emon', 'emon@gmail.cpm', 'emon emon', '12345678@#', '01515298367', 'nikunjo khilkhet', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`),
  ADD UNIQUE KEY `docid` (`docid`,`demail`,`dphone`,`dnidno`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hid`),
  ADD UNIQUE KEY `hemail` (`hemail`,`hosid`,`hphone`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `pemail` (`pemail`,`pphone`,`pusername`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `semail` (`semail`,`susername`,`sphone`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `sid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
