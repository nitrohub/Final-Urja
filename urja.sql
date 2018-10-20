-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2018 at 06:05 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urja`
--

-- --------------------------------------------------------

--
-- Table structure for table `admini`
--

CREATE TABLE `admini` (
  `Aid` int(11) NOT NULL,
  `AdName` varchar(255) NOT NULL,
  `A_username` varchar(255) NOT NULL,
  `A_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admini`
--

INSERT INTO `admini` (`Aid`, `AdName`, `A_username`, `A_password`) VALUES
(2, 'Nitesh', 'Nitesh.hebbare@gmail.com', 'Maltesh21998'),
(3, 'Admin', 'NewAdmin@gmail.com', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `C_name` varchar(255) NOT NULL,
  `C_address` varchar(255) NOT NULL,
  `C_contact_no.` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `college_fest`
--

CREATE TABLE `college_fest` (
  `Fest_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `E_id` int(11) NOT NULL,
  `E_name` varchar(255) NOT NULL,
  `E_organiser` varchar(255) NOT NULL,
  `E_Type` varchar(255) NOT NULL,
  `E_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`E_id`, `E_name`, `E_organiser`, `E_Type`, `E_desc`) VALUES
(1, 'Finding Nemo', 'Student Council', 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `L_id` int(11) NOT NULL,
  `L_role_id` int(11) NOT NULL,
  `L_username` varchar(255) NOT NULL,
  `L_password` varchar(255) NOT NULL,
  `S_id` int(11) NOT NULL,
  `P_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Pay_id` int(11) NOT NULL,
  `Pay_type` varchar(255) NOT NULL,
  `R_no` int(11) NOT NULL,
  `S_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Pay_id`, `Pay_type`, `R_no`, `S_id`) VALUES
(1, '', 0, 0),
(70, '', 0, 0),
(71, '', 0, 0),
(72, '', 0, 0),
(73, '', 0, 0),
(74, '', 0, 0),
(75, '', 0, 0),
(76, '', 0, 0),
(77, '', 0, 0),
(78, '', 0, 0),
(79, '', 0, 0),
(80, '', 0, 0),
(81, '', 0, 0),
(82, '', 0, 0),
(83, '', 0, 0),
(84, '', 0, 0),
(85, '', 0, 0),
(86, '', 0, 0),
(87, '', 0, 0),
(88, '', 0, 0),
(89, '', 0, 0),
(90, '', 0, 0),
(91, '', 0, 0),
(92, '', 0, 0),
(93, '', 0, 0),
(94, '', 0, 0),
(95, '', 0, 0),
(96, '', 0, 0),
(97, '', 0, 0),
(98, '', 0, 0),
(99, '', 0, 0),
(100, '', 0, 0),
(101, '', 0, 0),
(102, '', 0, 0),
(103, '', 0, 0),
(104, '', 0, 0),
(105, '', 0, 0),
(106, '', 0, 0),
(107, '', 0, 0),
(108, '', 0, 0),
(109, '', 0, 0),
(110, '', 0, 0),
(111, '', 0, 0),
(112, '', 0, 0),
(113, '', 0, 0),
(114, '', 0, 0),
(115, '', 0, 0),
(116, '', 0, 0),
(117, '', 0, 0),
(118, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `P_id` int(11) NOT NULL,
  `P_name` varchar(255) NOT NULL,
  `P_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `R_no` int(11) NOT NULL,
  `R_details` varchar(255) NOT NULL,
  `E_id` int(11) NOT NULL,
  `Ename` varchar(200) NOT NULL,
  `Payment` varchar(20) NOT NULL,
  `S_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `Role_id` int(11) NOT NULL,
  `Role_name` varchar(255) NOT NULL,
  `Role_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `S_id` varchar(255) NOT NULL,
  `S_name` varchar(255) NOT NULL,
  `S_type` varchar(255) NOT NULL,
  `Role_id` int(11) NOT NULL,
  `Pm_id` int(11) NOT NULL,
  `S_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`S_id`, `S_name`, `S_type`, `Role_id`, `Pm_id`, `S_pass`) VALUES
('New@gmail.com', 'new', '', 0, 0, 'N@123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admini`
--
ALTER TABLE `admini`
  ADD PRIMARY KEY (`Aid`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`C_name`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`E_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`L_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Pay_id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`P_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`R_no`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`Role_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`S_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admini`
--
ALTER TABLE `admini`
  MODIFY `Aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `E_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `L_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `P_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `R_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `Role_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
