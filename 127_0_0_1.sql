-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2024 at 09:18 AM
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
-- Database: `bbsdb`
--
CREATE DATABASE IF NOT EXISTS `bbsdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bbsdb`;

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(11) NOT NULL,
  `AdminName` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `AdminuserName` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp(),
  `UserType` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `AdminuserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`, `UserType`) VALUES
(2, 'Admin', 'admin', 8956565656, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2024-08-31 18:30:00', 1),
(7, 'แลนโด้', 'user2', 7894561236, 'meenu@gmail.com', '7e58d63b60197ceb55a1c487989a3720', '2024-09-25 05:57:24', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblboat`
--

CREATE TABLE `tblboat` (
  `ID` int(5) NOT NULL,
  `BoatName` varchar(250) DEFAULT NULL,
  `Image` varchar(250) DEFAULT NULL,
  `Size` varchar(100) DEFAULT NULL,
  `Capacity` varchar(100) DEFAULT NULL,
  `Source` varchar(250) DEFAULT NULL,
  `Destination` varchar(250) DEFAULT NULL,
  `Route` varchar(250) DEFAULT NULL,
  `Price` decimal(10,0) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `AddedBy` int(5) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblboat`
--

INSERT INTO `tblboat` (`ID`, `BoatName`, `Image`, `Size`, `Capacity`, `Source`, `Destination`, `Route`, `Price`, `Description`, `AddedBy`, `CreationDate`) VALUES
(1, 'เนือพาย', 'c60bd504b634cc78521eafd8f5f1a6f81727332523.jpg', 'Small', '1-2', 'โลก', 'นรก', 'อดีตนาย ก', 80, 'Test2', 2, '2024-09-25 06:31:44'),
(2, 'เรือยนต์', '660abd2c2a99e6da52e3dd00b6ae07b11727416540.jpg', 'Small', '1-4', 'อยุธยา', 'ไต้หวัน', 'ลาว', 100, 'Test', 2, '2024-09-25 06:34:28'),
(3, 'เรือยนต์เทอโบ', '26bfbf1fb11a6a2b31928abc063dc0181727416632.jpg', 'Medium', '1-8', 'เสนา', 'เชียงกง', 'โรงพยาบาลศรีทันยา', 250, 'Test', 2, '2024-09-25 06:35:33'),
(4, 'เรือยนต์ซูปเปอร์ชาร์จ', '7ac5bd980dbbc68164693cad0e43fbfd1727416688.jpg', 'Large', '1-15', 'เชียงใหม่', 'เมกา (บางนา)', 'ทะเลแสนงาม ', 110, 'Test', 2, '2024-09-25 06:36:33'),
(5, 'เรือ V8', '983e18b7880ce3f7f39bed9aab911b341727416755.jpg', 'Large', '1-20', 'วัด1', 'วัด3', 'ผ่านวัด2', 120, 'Bazare Motor Boat is run through motor having capacity 1-20 persons', 2, '2024-09-26 04:55:19'),
(6, 'เรือ V10', '660abd2c2a99e6da52e3dd00b6ae07b11727416787.jpg', 'Small', '1-6', 'ไทย', 'เมกา', 'เรือดำนำที่ระเบิด', 200, '<br />\r\n<b>Warning</b>:  Undefined array key \"Description\" in <b>C:xampphtdocs2024bsadminedit-boat.php</b> on line <b>156</b><br />\r\n', 2, '2024-09-26 05:34:22'),
(7, 'เรือ V12', '7ac5bd980dbbc68164693cad0e43fbfd1727330194.jpg', 'Large', '1-10', 'กรุงเทพ', 'สปา อิตตาลี่', 'ฟอร์ด มอเตอร์', 150, '<br />\r\n<b>Warning</b>:  Undefined array key \"Description\" in <b>C:xampphtdocs2024bsadminedit-boat.php</b> on line <b>156</b><br />\r\n', 2, '2024-09-26 05:35:12'),
(8, 'เรือ V16', 'd41d8cd98f00b204e9800998ecf8427e1727332206', 'Small', '1-4', 'สวรรค์ ชั่น1', 'สวรรค์ชั้น3', 'สวรรค์ชั้น2', 100, '<br />\r\n<b>Warning</b>:  Undefined array key \"Description\" in <b>C:xampphtdocs2024bsadminedit-boat.php</b> on line <b>156</b><br />\r\n', 2, '2024-09-26 06:30:06'),
(9, 'เรือ J', 'd41d8cd98f00b204e9800998ecf8427e1727415693', 'Large', '1-5', 'อยุธยา2', 'กลางเสนา', 'ร้านไอ้อู้ม', 2000, 'เรือแรงจากดินแดงญี่ปุ่น', 2, '2024-09-27 05:41:33'),
(10, 'เรือ w16', 'd41d8cd98f00b204e9800998ecf8427e1727759143', 'Medium', '1-4', 'ปัตตานี', 'ลำปาง', 'ของดีภาคกลาง', 100, 'hand boat hand boat hand boat hand boat hand boat hand boat', 2, '2024-10-01 05:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `tblbookings`
--

CREATE TABLE `tblbookings` (
  `ID` int(5) NOT NULL,
  `BoatID` int(10) DEFAULT NULL,
  `BookingNumber` bigint(12) DEFAULT NULL,
  `FullName` varchar(250) DEFAULT NULL,
  `EmailId` varchar(250) DEFAULT NULL,
  `PhoneNumber` bigint(12) DEFAULT NULL,
  `BookingDateFrom` varchar(250) DEFAULT NULL,
  `BookingDateTo` varchar(250) DEFAULT NULL,
  `BookingTime` varchar(100) DEFAULT NULL,
  `NumnerofPeople` int(5) DEFAULT NULL,
  `Notes` mediumtext DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `AdminRemark` varchar(250) DEFAULT NULL,
  `BookingStatus` varchar(250) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblbookings`
--

INSERT INTO `tblbookings` (`ID`, `BoatID`, `BookingNumber`, `FullName`, `EmailId`, `PhoneNumber`, `BookingDateFrom`, `BookingDateTo`, `BookingTime`, `NumnerofPeople`, `Notes`, `postingDate`, `AdminRemark`, `BookingStatus`, `UpdationDate`) VALUES
(1, 4, 2147483647, 'Anuj kumar', 'anujk@gmail.com', 1233211230, '2024-10-15', '2024-10-17', '10:00', 5, 'NA', '2024-10-08 17:14:58', 'sss', 'Rejected', '2024-12-14 04:46:18'),
(2, 2, 2147483647, 'Garima', 'garima123@gmail.com', 1231231230, '2024-11-01', '2024-11-05', '11:30', 4, 'NA', '2024-10-11 14:57:50', 'pass', 'Accepted', '2024-12-14 02:48:32'),
(4, 6, 5811679355, 'John ', 'john12@gmail.com', 4566541230, '2024-11-08', '2024-11-09', '10:30', 4, 'NA', '2024-10-14 15:11:02', 'Booking Appoved', 'Accepted', '2024-10-14 15:11:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblboat`
--
ALTER TABLE `tblboat`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblbookings`
--
ALTER TABLE `tblbookings`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `bid` (`BoatID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblboat`
--
ALTER TABLE `tblboat`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblbookings`
--
ALTER TABLE `tblbookings`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblbookings`
--
ALTER TABLE `tblbookings`
  ADD CONSTRAINT `bid` FOREIGN KEY (`BoatID`) REFERENCES `tblboat` (`ID`);
--
-- Database: `dbproject267`
--
CREATE DATABASE IF NOT EXISTS `dbproject267` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbproject267`;

-- --------------------------------------------------------

--
-- Table structure for table `tbbook`
--

CREATE TABLE `tbbook` (
  `bookid` int(11) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `booktypeid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbbook`
--

INSERT INTO `tbbook` (`bookid`, `bookname`, `author`, `price`, `stock`, `booktypeid`) VALUES
(1, 'เรื่องแรก', 'พรรคไท', 0, 0, 1),
(2, 'เรื่องสอง', 'ไท', 499, 50, 1),
(3, '2475 นักเขียนผีแห่งสยาม', 'สะอาด ', 450, 100, 2),
(4, 'Yoru ni Kakeru วิ่งสู่ค่ำคืน รวมนิยาย YOASOBI', 'Hoshino Mayo / Ishiki Souta / Shinano / Minakami Kanami', 270, 10, 6),
(5, 'เรื่องสาม', 'สามสหาย', 799, 50, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbbooktype`
--

CREATE TABLE `tbbooktype` (
  `booktypeid` int(11) NOT NULL,
  `booktypename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbbooktype`
--

INSERT INTO `tbbooktype` (`booktypeid`, `booktypename`) VALUES
(1, 'test1'),
(2, 'การ์ตูน'),
(6, 'นิยาย');

-- --------------------------------------------------------

--
-- Table structure for table `tbroom`
--

CREATE TABLE `tbroom` (
  `roomid` int(11) NOT NULL,
  `roomname` varchar(50) NOT NULL,
  `detail` text NOT NULL,
  `roomtypeid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbroom`
--

INSERT INTO `tbroom` (`roomid`, `roomname`, `detail`, `roomtypeid`) VALUES
(1, '101', 'เตียงเดียว มีทีวี ห้องน้ำในตัว มีเเอร์', 1),
(2, '201', 'เตียงคู่ มีทีวี ห้องน้ำในตัว มีเเอร์', 2),
(3, '104', 'เตียงเดียว มีทีวี ห้องน้ำในตัว มีเเอร์', 1),
(4, '305', 'ห้องขนาดใหญ่กว่าปกติ มีเตียงคู่ มีอ่างอาบน้ำ มีทีวี มีแอร์', 3),
(5, '307', 'ห้องขนาดใหญ่กว่าปกติ มีเตียงคู่ มีอ่างอาบน้ำ มีทีวี มีแอร์', 3),
(6, '401', 'ห้องขนาดใหญ่กว่าปกติ มีเตียงคู่ มีอ่างอาบน้ำจากุชชี่ มีทีวี มีแอร์กรองอากาส', 4),
(8, '131', 'ห้องดีๆ', 1),
(10, '444', 'Good Room', 4),
(11, '888', 'Ruay', 4),
(12, '555', 'Room', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbroomtype`
--

CREATE TABLE `tbroomtype` (
  `roomtypeid` int(11) NOT NULL,
  `roomtypename` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbroomtype`
--

INSERT INTO `tbroomtype` (`roomtypeid`, `roomtypename`, `price`) VALUES
(1, 'ห้องเดี่ยว ', 250),
(2, 'ห้องพักมาตรฐานเตียงเดี่ยวขนาดใหญ่', 450),
(3, 'ห้องจูเนียร์สวีท', 1500),
(4, 'ห้องเอ็กเซ็กคูทีฟสวีท', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `tbstudent`
--

CREATE TABLE `tbstudent` (
  `stdid` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbstudent`
--

INSERT INTO `tbstudent` (`stdid`, `firstname`, `lastname`, `email`, `address`) VALUES
(1, ' สรันดร์', 'มั่นคง', '', '93/11 หมู่ 7 อ.เสนา จ.พระนครศรีอยุธยา 13110'),
(2, 'มาวิน', 'มาแว่บ', '', '55 หมู่ 6 อ.บางบาล จ.อยุธยา'),
(3, 'นาริน', 'คงมั้น', '', '9/11 หมู่ 5 อ.พระนครศรีอยุธยา จ.พระนครศรีอยุธยา'),
(4, 'องค์รักษ์', 'เทพดี', '', '1 หมู่ 1 อ.พระนครศรีอยุธยา จ.พระนครศรีอยุยา'),
(5, 'นารัน', 'รัค', '', '2 หมู่ 1 จังหวัด กรุงเทพมหานคร'),
(8, 'Audsanun', 'Sermsuk', 'Serm.s@email.com', '12/123 จ.อยุธยา'),
(9, 'Audsanun', 'Sermsuk', 'Serm.s@email.com', '99/999 จ.อยุธยา'),
(10, 'กำ', 'ของฉัน', 'mywane@gmail.com', '12/123 จ.อยุธยา'),
(11, 'dee', 'ddeeee', 'sddd@gmail.com', '12/122 dee'),
(12, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`id`, `firstname`, `lastname`, `username`, `password`) VALUES
(1, 'squee', 'dan', '', 'qwer'),
(2, 'squeed', 'danda', '', 'qwer'),
(3, 'squeed', 'dan', 'danda', 'qwert'),
(4, 'Speedy', 'Gorzared', 'SpeedyPizza', 'a384b6463fc216a5f8ecb6670f86456a'),
(5, 'Speedy', 'Gorzared', 'SpeedyPizza2', 'a384b6463fc216a5f8ecb6670f86456a'),
(6, 'Nname', 'Plastname', 'a02', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `emailAddress` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `fullName`, `emailAddress`, `city`, `country`, `created_at`) VALUES
(1, 'Test', 'Dawe@dmail.com', 'Ayuth', '9bbb6f9af1dee5d039d27682dea6aaf3', '0000-00-00 00:00:00'),
(2, 'Test2', 'Dawe2@dmail.com', 'Ayuth', '9bbb6f9af1dee5d039d27682dea6aaf3', '0000-00-00 00:00:00'),
(3, 'test3', 'dtkjfslf@rmutsb.ac.th', 'Ayuthaya', 'dkfjs;f', '0000-00-00 00:00:00'),
(4, 'Test', '222@mail.ac', 'Ayuthaya', 'Ayuthaya', '2024-12-06 14:32:02'),
(5, 'Test', 'Dawe@dmail.com', 'Ayuth', 'THai', '2024-12-06 14:48:25'),
(6, 'Test2', 'Dawe@dmail.com', 'det', 'dkfjs;f', '2024-12-06 14:50:25'),
(7, 'dadad', 'dawdaw@ff.com', 'det', 'engusa', '2024-12-06 14:51:11'),
(8, 'Elong Must', 'Xiaomi@chinese.cn', 'Chinease', 'Chinease', '2024-12-06 14:56:00'),
(9, 'Elong Must', 'Xiaomi2@chinese.cn', 'Chinease', 'Chinease', '2024-12-06 15:29:28'),
(10, 'Test23', 'Dawe2@dmail.com', 'det', 'dkfjs;f', '2024-12-06 15:31:40'),
(11, 'test3', 'Dawe2@dmail.com', 'Ayuth', 'THai', '2024-12-06 15:31:55'),
(12, 'test34', 'Dawe2@dmail.com', 'det', 'THai', '2024-12-06 15:32:20'),
(13, 'Test22', 'Dawe2@dmail.com', 'Chinease', 'dkfjs;f', '2024-12-06 15:32:58'),
(14, 'Test', 'Dawe@dmail.com', 'Ayuth', 'Chinease', '2024-12-06 15:33:48'),
(15, 'Test', 'dtkjfslf@rmutsb.ac.th', 'Ayuth', '???', '2024-12-06 15:46:16'),
(16, 'dav', 'Dawe@dmail.com', 'Ayuth', 'THai', '2024-12-06 17:18:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbbook`
--
ALTER TABLE `tbbook`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `tbbooktype`
--
ALTER TABLE `tbbooktype`
  ADD PRIMARY KEY (`booktypeid`);

--
-- Indexes for table `tbroom`
--
ALTER TABLE `tbroom`
  ADD PRIMARY KEY (`roomid`);

--
-- Indexes for table `tbroomtype`
--
ALTER TABLE `tbroomtype`
  ADD PRIMARY KEY (`roomtypeid`);

--
-- Indexes for table `tbstudent`
--
ALTER TABLE `tbstudent`
  ADD PRIMARY KEY (`stdid`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbbook`
--
ALTER TABLE `tbbook`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbbooktype`
--
ALTER TABLE `tbbooktype`
  MODIFY `booktypeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbroom`
--
ALTER TABLE `tbroom`
  MODIFY `roomid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbroomtype`
--
ALTER TABLE `tbroomtype`
  MODIFY `roomtypeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbstudent`
--
ALTER TABLE `tbstudent`
  MODIFY `stdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
