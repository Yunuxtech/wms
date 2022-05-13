-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2022 at 05:04 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wms`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `mesaage` text NOT NULL,
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `userID`, `email`, `subject`, `mesaage`, `createdDate`) VALUES
(1, 5, 'yunusisah123@gmail.com', 'Testing', 'I need to have a session with the admin of the page', '2022-05-13 14:32:16'),
(2, 5, 'yunusisah123@gmail.com', 'Testing', 'Enter your message here', '2022-05-13 14:33:05'),
(3, 5, 'yunusisah123@gmail.com', 'Testing', 'Enter your message here', '2022-05-13 14:33:37');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `request_ID` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `day` varchar(30) NOT NULL,
  `comment` varchar(300) NOT NULL,
  `status` int(11) NOT NULL COMMENT 'Approve = 1, pending = 0, cancel=2',
  `creation_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `user_ID`, `request_ID`, `date`, `time`, `day`, `comment`, `status`, `creation_date`) VALUES
(1, 5, '626CB66E1ADFD', '2022-04-02', '05:09:00', 'Saturday', 'All is cool', 0, '2022-04-30 05:09:18'),
(2, 5, '626D11AA70B92', '2022-04-09', '11:43:00', 'Saturday', 'checking again', 1, '2022-04-30 11:38:34'),
(3, 5, '626D127873B2D', '2022-04-22', '11:41:00', 'Saturday', 'coming from admin', 2, '2022-04-30 11:42:00'),
(4, 5, '627E52288D29F', '2022-05-19', '13:43:00', 'Friday', 'Checking for status', 2, '2022-05-13 13:42:16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullName` varchar(30) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `curentCity` varchar(30) NOT NULL,
  `houseAddress` varchar(200) NOT NULL,
  `updateDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullName`, `userName`, `email`, `phone`, `curentCity`, `houseAddress`, `updateDate`, `password`) VALUES
(5, 'Yunus Isah', 'Yunux', 'yunusisah123@gmail.com', '090332484', 'Lagos', 'No. 12 Rimin gata BUK Road, New Campus', '2022-04-29 17:51:26', '39c63ddb96a31b9610cd976b896ad4f0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
