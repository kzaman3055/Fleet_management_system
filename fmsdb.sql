-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 24, 2021 at 04:41 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adddriver`
--

CREATE TABLE `adddriver` (
  `did` int(11) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `dcno` varchar(50) NOT NULL,
  `daddress` varchar(50) NOT NULL,
  `dnid` varchar(50) NOT NULL,
  `regno` varchar(50) NOT NULL,
  `startingdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adddriver`
--

INSERT INTO `adddriver` (`did`, `dname`, `dcno`, `daddress`, `dnid`, `regno`, `startingdate`) VALUES
(1, 'Abdul ali', '123456	', 'x dhaka', '123456', '1', '2021-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `addmechanic`
--

CREATE TABLE `addmechanic` (
  `mid` int(50) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `mcno` varchar(100) NOT NULL,
  `maddress` varchar(100) NOT NULL,
  `hub` varchar(100) DEFAULT NULL,
  `mnid` varchar(100) NOT NULL,
  `speciality` longtext DEFAULT NULL,
  `startingdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addmechanic`
--

INSERT INTO `addmechanic` (`mid`, `mname`, `mcno`, `maddress`, `hub`, `mnid`, `speciality`, `startingdate`) VALUES
(1, 'rony', '123456	', 'gazipur', 'x', '123456', 'x', '2021-10-22');

-- --------------------------------------------------------

--
-- Table structure for table `addvehicle`
--

CREATE TABLE `addvehicle` (
  `ID` int(100) NOT NULL,
  `catename` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `buildyr` int(100) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `prdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addvehicle`
--

INSERT INTO `addvehicle` (`ID`, `catename`, `brand`, `model`, `buildyr`, `regno`, `color`, `prdate`) VALUES
(8, 'Two Wheeler Vehicle	', 'suzuki', 'xp', 2021, '2', 'black', '2021-10-07'),
(10, 'Two Wheeler Vehicle', 'x', 's', 2021, '1', 'e', '2021-10-21'),
(12, 'Two Wheeler Vehicle', 'xtyhg', 'jgf', 2000, '3', 'blue', '2021-10-23'),
(13, 'Four Wheeler Vehicle', 'x', 'x', 2020, '22', 'b', '2022-02-10'),
(14, 'Four Stroke Vehicle', 'Mahindra', 'x2020', 2020, 'D457', 'Greeen', '2021-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `dlog`
--

CREATE TABLE `dlog` (
  `ID` int(11) NOT NULL,
  `dnid` varchar(100) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `route` varchar(50) DEFAULT NULL,
  `startduty` timestamp NOT NULL DEFAULT current_timestamp(),
  `endduty` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dlog`
--

INSERT INTO `dlog` (`ID`, `dnid`, `regno`, `route`, `startduty`, `endduty`) VALUES
(5, '123456', '1', '1520', '2021-10-10 14:05:25', '2021-10-22 14:05:25'),
(6, '123456', '1', 'x55', '2021-10-22 15:18:35', '2021-10-23 15:18:35'),
(7, '123456', '1', 'Dhaka to mymensingh', '2021-10-22 15:24:30', '2021-10-22 16:24:30'),
(8, '123456', '1', 'x25', '2021-10-22 18:20:02', '2021-10-22 19:20:02');

-- --------------------------------------------------------

--
-- Table structure for table `slog`
--

CREATE TABLE `slog` (
  `ID` int(100) NOT NULL,
  `mnid` varchar(100) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `problem` longtext NOT NULL,
  `cost` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `ordate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deldate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slog`
--

INSERT INTO `slog` (`ID`, `mnid`, `regno`, `problem`, `cost`, `status`, `ordate`, `deldate`) VALUES
(4, '123456', '2', 'Engine not start', '1500', 'Delivered', '2021-10-22 18:15:49', '2021-10-22 18:15:49'),
(5, '123456', '2', 'tire', '50', 'Delivered', '2021-10-23 08:31:45', '2021-10-23 08:31:45');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `ID` int(11) NOT NULL,
  `slist` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`ID`, `slist`) VALUES
(1, 'On Prgress'),
(2, 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) NOT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(120) NOT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 7898799798, 'tester1@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2019-07-04 23:38:23'),
(6, 'xaman', 'xaman', 123456, 'x@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-10-22 09:45:58');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `ID` int(10) NOT NULL,
  `VehicleCat` varchar(120) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`ID`, `VehicleCat`, `CreationDate`) VALUES
(1, 'Four Wheeler Vehicle', '2019-07-05 11:06:50'),
(2, 'Two Wheeler Vehicle', '2019-07-05 11:07:09'),
(10, 'Four Stroke Vehicle', '2021-10-23 15:23:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adddriver`
--
ALTER TABLE `adddriver`
  ADD PRIMARY KEY (`did`),
  ADD UNIQUE KEY `dnid` (`dnid`);

--
-- Indexes for table `addmechanic`
--
ALTER TABLE `addmechanic`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `addvehicle`
--
ALTER TABLE `addvehicle`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `regno` (`regno`);

--
-- Indexes for table `dlog`
--
ALTER TABLE `dlog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `slog`
--
ALTER TABLE `slog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adddriver`
--
ALTER TABLE `adddriver`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `addmechanic`
--
ALTER TABLE `addmechanic`
  MODIFY `mid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `addvehicle`
--
ALTER TABLE `addvehicle`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `dlog`
--
ALTER TABLE `dlog`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slog`
--
ALTER TABLE `slog`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
