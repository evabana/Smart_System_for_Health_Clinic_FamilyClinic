-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 06:15 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartclinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES
(1, 'admin', 'admin1234', '15-06-2021 05:15:03 PM');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `doctorSpecialization` varchar(255) DEFAULT NULL,
  `doctorId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `consultancyFees` int(11) DEFAULT NULL,
  `appointmentDate` varchar(255) DEFAULT NULL,
  `appointmentTime` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `userStatus` int(11) DEFAULT NULL,
  `doctorStatus` int(11) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `doctorSpecialization`, `doctorId`, `userId`, `consultancyFees`, `appointmentDate`, `appointmentTime`, `postingDate`, `userStatus`, `doctorStatus`, `updationDate`) VALUES
(7, 'Gynecologist/Obstetrician', 10, 8, 400, '2021-06-20', '9:30 AM', '2021-06-16 03:39:06', 1, 1, NULL),
(8, 'Gynecologist/Obstetrician', 10, 8, 400, '2021-06-21', '3:15 PM', '2021-06-20 09:16:49', 1, 1, NULL),
(9, 'Gynecologist/Obstetrician', 10, 9, 400, '2021-06-21', '3:15 PM', '2021-06-20 09:19:31', 1, 1, NULL),
(10, 'Dentist', 15, 8, 300, '2021-07-14', '10:00 AM', '2021-07-02 04:12:29', 1, 1, NULL),
(11, 'Gynecologist/Obstetrician', 10, 16, 400, '2021-07-03', '11:45 AM', '2021-07-02 04:47:03', 1, 1, NULL),
(12, 'Homeopath', 11, 16, 550, '2021-07-03', '8:00 PM', '2021-07-02 13:50:50', 1, 1, NULL),
(13, 'Gynecologist/Obstetrician', 10, 8, 400, '2021-07-12', '3:45 PM', '2021-07-07 12:49:00', 1, 0, '2021-07-07 12:50:15'),
(14, 'Homeopath', 11, 17, 550, '2021-07-08', '1:00 PM', '2021-07-07 13:12:25', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL,
  `doctorName` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `docFees` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `docEmail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `specilization`, `doctorName`, `address`, `docFees`, `contactno`, `docEmail`, `password`, `creationDate`, `updationDate`) VALUES
(10, 'Gynecologist/Obstetrician', 'Suman Thapa', 'Kathmandu', '400', 9840069707, 'doctor1@doctor.com', '45f678b147fdf275c35b60bac2360984', '2021-06-15 10:51:19', '2021-07-06 09:35:06'),
(11, 'Homeopath', 'Eva Shakya', 'Kathmandu', '550', 9856483387, 'doctor2@doctor.com', '3b02a6fdd669efe9083cc84d15e5699b', '2021-06-15 11:05:52', '2021-07-02 04:52:04'),
(12, 'Dermatologist', 'Sunil Shakya', 'Kathmandu', '300', 9823456678, 'doctor3@doctor.com', 'c5771df124ed6073ae4e2d09b2b20ac0', '2021-06-15 11:07:24', NULL),
(13, 'Homeopath', 'Sahja Basnet', 'Kathmandu', '300', 9876536623, 'doctor4@doctor.com', 'd9dd5a031723455173d4336914b17f2b', '2021-06-15 11:08:57', NULL),
(14, 'Ayurveda', 'Rikita Maharjan', 'Kathmandu', '400', 9864453465, 'doctor5@doctor.com', '83b8e9d7a4fa853010993f6dd6ff55a9', '2021-06-15 11:17:49', NULL),
(15, 'Dentist', 'Lakash Maharjan', 'Kathmandu', '300', 9867753627, 'doctor6@doctor.com', '892eb7c3d25846caee80d4f37746b6b4', '2021-06-15 11:24:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctorslog`
--

CREATE TABLE `doctorslog` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorslog`
--

INSERT INTO `doctorslog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(20, 10, 'doctor1@doctor.com', 0x3a3a3100000000000000000000000000, '2021-06-16 03:46:46', '16-06-2021 09:19:53 AM', 1),
(21, 10, 'doctor1@doctor.com', 0x3a3a3100000000000000000000000000, '2021-06-20 09:20:11', '20-06-2021 02:50:44 PM', 1),
(22, 10, 'doctor1@doctor.com', 0x3a3a3100000000000000000000000000, '2021-06-28 03:24:06', '28-06-2021 08:54:15 AM', 1),
(23, 10, 'doctor1@doctor.com', 0x3a3a3100000000000000000000000000, '2021-06-28 03:43:59', '28-06-2021 09:14:15 AM', 1),
(24, 10, 'doctor1@doctor.com', 0x3a3a3100000000000000000000000000, '2021-06-28 04:17:45', '28-06-2021 09:48:01 AM', 1),
(25, 10, 'doctor1@doctor.com', 0x3a3a3100000000000000000000000000, '2021-07-02 04:08:09', '02-07-2021 09:40:57 AM', 1),
(26, 10, 'doctor1@doctor.com', 0x3a3a3100000000000000000000000000, '2021-07-02 04:47:38', '02-07-2021 10:20:36 AM', 1),
(27, 10, 'doctor1@doctor.com', 0x3a3a3100000000000000000000000000, '2021-07-02 11:23:48', '02-07-2021 05:31:33 PM', 1),
(28, 10, 'doctor1@doctor.com', 0x3a3a3100000000000000000000000000, '2021-07-06 09:17:51', NULL, 1),
(29, 10, 'doctor1@doctor.com', 0x3a3a3100000000000000000000000000, '2021-07-06 09:17:52', '06-07-2021 02:48:26 PM', 1),
(30, 10, 'doctor1@doctor.com', 0x3a3a3100000000000000000000000000, '2021-07-06 09:28:28', '06-07-2021 03:01:20 PM', 1),
(31, 10, 'doctor1@doctor.com', 0x3a3a3100000000000000000000000000, '2021-07-06 09:32:19', '06-07-2021 03:02:23 PM', 1),
(32, 10, 'doctor1@doctor.com', 0x3a3a3100000000000000000000000000, '2021-07-06 09:34:44', '06-07-2021 03:05:16 PM', 1),
(33, 10, 'doctor1@doctor.com', 0x3a3a3100000000000000000000000000, '2021-07-06 09:35:54', '06-07-2021 03:05:58 PM', 1),
(34, 10, 'doctor1@doctor.com', 0x3a3a3100000000000000000000000000, '2021-07-07 12:49:55', '07-07-2021 06:22:20 PM', 1),
(35, 11, 'doctor2@doctor.com', 0x3a3a3100000000000000000000000000, '2021-07-07 13:14:43', NULL, 1),
(36, 10, 'doctor1@doctor.com', 0x3a3a3100000000000000000000000000, '2021-07-07 18:01:05', '07-07-2021 11:32:28 PM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecilization`
--

CREATE TABLE `doctorspecilization` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorspecilization`
--

INSERT INTO `doctorspecilization` (`id`, `specilization`, `creationDate`, `updationDate`) VALUES
(1, 'Gynecologist/Obstetrician', '2021-06-14 06:37:25', '2021-06-15 11:35:16'),
(2, 'General Physician', '2021-06-14 06:38:12', '2021-06-15 11:35:58'),
(3, 'Dermatologist', '2021-06-01 06:38:48', '2021-06-14 12:33:48'),
(4, 'Homeopath', '2021-06-14 06:39:26', '2021-06-15 11:37:14'),
(5, 'Ayurveda', '2021-06-14 06:39:51', '2021-06-15 11:38:15'),
(6, 'Dentist', '2021-06-15 06:40:08', '2021-06-15 11:39:01'),
(7, 'Ear-Nose-Throat (Ent) Specialist', '2021-06-15 06:41:18', '2021-06-15 11:40:10'),
(10, 'Bones Specialist dem', '2021-06-15 08:07:53', '2021-07-02 04:04:50'),
(13, 'Dermatologist', '2021-06-15 11:42:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactus`
--

CREATE TABLE `tblcontactus` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(12) DEFAULT NULL,
  `message` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `AdminRemark` mediumtext DEFAULT NULL,
  `LastupdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `IsRead` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactus`
--

INSERT INTO `tblcontactus` (`id`, `fullname`, `email`, `contactno`, `message`, `PostingDate`, `AdminRemark`, `LastupdationDate`, `IsRead`) VALUES
(1, 'test user', 'test@gmail.com', 987887676786, 'How do get an appointment?', '2021-06-04 19:03:08', 'register and make an appointment', '2021-06-05 12:55:23', 1),
(2, 'Anuj kumar', 'arjun@gmail.com', 9878898789, 'hello', '2021-06-07 13:06:50', 'hii', '2021-07-02 04:53:30', 1),
(4, 'Test', 'test3@gmail.com', 9999999999, ' helloo', '2021-07-02 12:32:13', 'hi\r\n', '2021-07-02 13:53:31', 1),
(5, 'eva', 'eva@gmail.com', 9999999999, ' hi', '2021-07-07 12:47:45', 'hello', '2021-07-07 12:54:32', 1),
(6, 'Cyrus Evans', 'nomiqy@mailinator.com', 0, 'Lorem sed illum fac', '2021-07-07 13:30:44', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblmedicalhistory`
--

CREATE TABLE `tblmedicalhistory` (
  `ID` int(10) NOT NULL,
  `PatientID` int(10) DEFAULT NULL,
  `BloodPressure` varchar(200) DEFAULT NULL,
  `BloodSugar` varchar(200) NOT NULL,
  `Weight` varchar(100) DEFAULT NULL,
  `Temperature` varchar(200) DEFAULT NULL,
  `MedicalPres` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmedicalhistory`
--

INSERT INTO `tblmedicalhistory` (`ID`, `PatientID`, `BloodPressure`, `BloodSugar`, `Weight`, `Temperature`, `MedicalPres`, `CreationDate`) VALUES
(8, 6, '90/120', 'normal', '78', '100', 'take rest', '2021-06-16 03:49:42'),
(9, 6, 'null', 'null', '78', '100', 'tack care', '2021-07-02 04:09:45'),
(10, 7, 'null', 'null', 'null', '100', 'test rest ', '2021-07-02 04:49:53'),
(11, 6, 'null', 'null', 'null', '100', 'take pills\r\n', '2021-07-07 12:51:38');

-- --------------------------------------------------------

--
-- Table structure for table `tblpatient`
--

CREATE TABLE `tblpatient` (
  `ID` int(10) NOT NULL,
  `Docid` int(10) DEFAULT NULL,
  `PatientName` varchar(200) DEFAULT NULL,
  `PatientContno` bigint(10) DEFAULT NULL,
  `PatientEmail` varchar(200) DEFAULT NULL,
  `PatientGender` varchar(50) DEFAULT NULL,
  `PatientAdd` mediumtext DEFAULT NULL,
  `PatientAge` int(10) DEFAULT NULL,
  `PatientMedhis` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpatient`
--

INSERT INTO `tblpatient` (`ID`, `Docid`, `PatientName`, `PatientContno`, `PatientEmail`, `PatientGender`, `PatientAdd`, `PatientAge`, `PatientMedhis`, `CreationDate`, `UpdationDate`) VALUES
(6, 10, 'Test', 9999999999, 'User1@user.com', 'Male', 'Test', 45, 'High blood pressure', '2021-06-16 03:48:10', '2021-06-16 03:48:41'),
(7, 10, 'test3', 9999999999, 'test3@gmail.com', 'female', 'kathmandu', 45, 'no ', '2021-07-02 04:49:11', NULL),
(8, 11, 'suman', 9860047546, 'suman@gmail.com', 'male', 'test', 23, 'high pressure', '2021-07-07 13:15:34', NULL),
(9, 1, 'Test', 9999999999, 'test@gmail.com', 'female', 'test', 23, 'Null', '2021-07-07 13:39:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(24, 2, 'Test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-06-11 17:04:49', NULL, 1),
(25, 2, 'Test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-06-13 12:39:04', '13-06-2021 06:43:11 PM', 1),
(26, 8, 'user1@user.com', 0x3a3a3100000000000000000000000000, '2021-06-16 03:38:18', '16-06-2021 09:09:23 AM', 1),
(27, NULL, 'Test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-06-20 09:15:48', NULL, 0),
(28, 8, 'user1@user.com', 0x3a3a3100000000000000000000000000, '2021-06-20 09:16:08', '20-06-2021 02:46:56 PM', 1),
(29, NULL, 'Test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-06-20 09:17:12', NULL, 0),
(30, 9, 'user2@user.com', 0x3a3a3100000000000000000000000000, '2021-06-20 09:19:10', '20-06-2021 02:49:54 PM', 1),
(31, 8, 'user1@user.com', 0x3a3a3100000000000000000000000000, '2021-06-27 08:27:25', '27-06-2021 01:59:55 PM', 1),
(32, 8, 'user1@user.com', 0x3a3a3100000000000000000000000000, '2021-06-28 03:24:49', '28-06-2021 09:08:31 AM', 1),
(33, NULL, 'user2@user.com', 0x3a3a3100000000000000000000000000, '2021-06-28 03:45:22', NULL, 0),
(34, 9, 'user2@user.com', 0x3a3a3100000000000000000000000000, '2021-06-28 03:45:35', NULL, 1),
(35, 8, 'user1@user.com', 0x3a3a3100000000000000000000000000, '2021-07-02 04:11:25', '02-07-2021 09:43:12 AM', 1),
(36, 16, 'test3@gmail.com', 0x3a3a3100000000000000000000000000, '2021-07-02 04:45:38', '02-07-2021 10:17:21 AM', 1),
(37, NULL, 'Test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-07-02 12:30:16', NULL, 0),
(38, NULL, 'Test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-07-02 12:30:33', NULL, 0),
(39, 16, 'test3@gmail.com', 0x3a3a3100000000000000000000000000, '2021-07-02 12:31:24', '02-07-2021 06:01:38 PM', 1),
(40, 16, 'test3@gmail.com', 0x3a3a3100000000000000000000000000, '2021-07-02 12:32:42', '02-07-2021 07:17:54 PM', 1),
(41, 16, 'test3@gmail.com', 0x3a3a3100000000000000000000000000, '2021-07-02 13:49:52', '02-07-2021 07:21:47 PM', 1),
(42, NULL, 'Test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-07-07 05:50:16', NULL, 0),
(43, NULL, 'eva@gmail.com', 0x3a3a3100000000000000000000000000, '2021-07-07 05:51:48', NULL, 0),
(44, NULL, 'Test@gmail.com', 0x3a3a3100000000000000000000000000, '2021-07-07 05:52:01', NULL, 0),
(45, 8, 'user1@user.com', 0x3a3a3100000000000000000000000000, '2021-07-07 05:52:20', NULL, 1),
(46, 8, 'user1@user.com', 0x3a3a3100000000000000000000000000, '2021-07-07 12:48:14', '07-07-2021 06:19:39 PM', 1),
(47, 17, 'suman@gmail.com', 0x3a3a3100000000000000000000000000, '2021-07-07 13:11:23', NULL, 1),
(48, NULL, 'doctor3@doctor.com', 0x3a3a3100000000000000000000000000, '2021-07-07 13:13:02', NULL, 0),
(49, NULL, 'doctor3@doctor.com', 0x3a3a3100000000000000000000000000, '2021-07-07 13:13:16', NULL, 0),
(50, NULL, 'doctor2@doctor.com', 0x3a3a3100000000000000000000000000, '2021-07-07 13:13:33', NULL, 0),
(51, NULL, 'doctor2@doctor.com', 0x3a3a3100000000000000000000000000, '2021-07-07 13:14:05', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `address`, `city`, `gender`, `email`, `password`, `regDate`, `updationDate`) VALUES
(8, 'Test', 'Test', 'Test', 'female', 'User1@user.com', 'b5b73fae0d87d8b4e2573105f8fbe7bc', '2021-06-16 03:37:48', NULL),
(9, 'useer2', 'Test', 'Test', '', 'User2@user.com', '631ae4267a25e66583c5490adea3eff0', '2021-06-20 09:18:19', NULL),
(16, 'Joel Kirby', 'kathmandu', 'kathmandu', 'female', 'test3@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2021-07-02 04:45:18', '2021-07-02 04:46:00'),
(17, 'suman', 'test', 'test', 'male', 'suman@gmail.com', 'c9012985286da9fa1faf42d0f48b84e1', '2021-07-07 13:10:42', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorslog`
--
ALTER TABLE `doctorslog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmedicalhistory`
--
ALTER TABLE `tblmedicalhistory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpatient`
--
ALTER TABLE `tblpatient`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `doctorslog`
--
ALTER TABLE `doctorslog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblmedicalhistory`
--
ALTER TABLE `tblmedicalhistory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblpatient`
--
ALTER TABLE `tblpatient`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
