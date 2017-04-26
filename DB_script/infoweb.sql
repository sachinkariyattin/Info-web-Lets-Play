-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2017 at 10:27 PM
-- Server version: 5.7.18-log
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infoweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `User_ID` varchar(20) NOT NULL,
  `Event_ID` varchar(20) NOT NULL,
  `Comment` varchar(200) NOT NULL,
  `Comment_ID` int(200) NOT NULL,
  `Date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`User_ID`, `Event_ID`, `Comment`, `Comment_ID`, `Date`) VALUES
('Prashanth Bhat', '1', 'Hey\r\nPrashant here', 6, '2017-04-26 08:18:06pm'),
('Prashanth Bhat', '1', 'Prahsant user', 7, '2017-04-26 08:23:30pm'),
('Prashanth Bhat', '1', 'hey\r\nprashant here', 8, '2017-04-26 08:40:47pm'),
('Prashanth Bhat', '1', 'Posted by Prashanth', 11, '2017-04-26 09:18:13pm'),
('Prashanth Bhat', '1', 'Prashanth me\r\nlets seeposting again', 13, '2017-04-26 09:20:38pm'),
('Prashanth Bhat', '1', 'Prashanth posting from Join Event after leaving once', 14, '2017-04-26 09:21:36pm'),
('Prashanth Bhat', '1', 'Checking order by', 15, '2017-04-26 09:26:20pm'),
('Prashanth Bhat', '1', 'order by from view details', 16, '2017-04-26 09:26:39pm'),
('Prashanth Bhat', '2', 'Prashanth joins and comments on new event rite away', 19, '2017-04-26 09:29:55pm'),
('skariyat@indiana.edu', '1', 'sas', 3, '2017-04-26 07:58:54pm'),
('skariyat@indiana.edu', '1', 'hi\r\n', 4, '2017-04-26 08:00:42pm'),
('skariyat@indiana.edu', '1', 'Hello event 1', 5, '2017-04-26 08:17:17pm'),
('skariyat@indiana.edu', '1', 'I think its working', 9, '2017-04-26 08:42:47pm'),
('skariyat@indiana.edu', '1', 'This time its working', 10, '2017-04-26 09:06:54pm'),
('skariyat@indiana.edu', '1', 'Ok\r\nSachin posting here', 12, '2017-04-26 09:19:32pm'),
('skariyat@indiana.edu', '1', 'order by from owner', 17, '2017-04-26 09:27:03pm'),
('skariyat@indiana.edu', '2', 'Ok\r\nThis is new event\r\nposted by Sachin', 18, '2017-04-26 09:29:20pm');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `Event_ID` varchar(20) NOT NULL,
  `User_ID` varchar(20) NOT NULL,
  `Game_Type` varchar(20) DEFAULT NULL,
  `Location` varchar(20) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` varchar(20) DEFAULT NULL,
  `Player_ID` varchar(20) NOT NULL,
  `Players_Reqd` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Event_ID`, `User_ID`, `Game_Type`, `Location`, `Date`, `Time`, `Player_ID`, `Players_Reqd`) VALUES
('1', 'skariyat@indiana.edu', 'Cricket', 'SRSC', '2017-04-29', '13:00:00', 'skariyat@indiana.edu', 10),
('1', 'skariyat@indiana.edu', 'Cricket', 'SRSC', '2017-04-29', '13:00:00', 'Prashanth Bhat', 10),
('2', 'skariyat@indiana.edu', 'kabbaddi', 'SRSC', '2017-04-29', '01:00:00', 'skariyat@indiana.edu', 10),
('2', 'skariyat@indiana.edu', 'kabbaddi', 'SRSC', '2017-04-29', '01:00:00', 'Prashanth Bhat', 10);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback` varchar(200) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `feedback`, `name`, `email`, `phone`) VALUES
(3, 'asas', 'Sachin Kariyattin', 'skariyat@indiana.edu', '8123692497'),
(5, 'as', 'Sachin Kariyattin', 'skariyat@indiana.edu', '8123692497');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `Game_ID` int(11) NOT NULL,
  `Name` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`Game_ID`, `Name`) VALUES
(1, 'Tennis'),
(2, 'Cricket'),
(3, 'Badminton'),
(4, 'wresling'),
(5, 'carrom'),
(6, 'kabbaddi'),
(7, 'tested');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `Location_ID` int(11) NOT NULL,
  `Name` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`Location_ID`, `Name`) VALUES
(1, 'SRSC'),
(2, 'Stadium'),
(3, 'Basketball court'),
(4, 'HC basketball court');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `User_id` varchar(40) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`User_id`, `Password`) VALUES
('Admin', 'password'),
('abc', '123'),
('pqr', '456'),
('mno', '789'),
('xyz', '2233');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(30) NOT NULL,
  `first_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `password` varchar(24) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `contact` decimal(10,0) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `userbio` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `password`, `address`, `email`, `contact`, `dob`, `userbio`) VALUES
('Sachin', 'Sachin', 'Kariyattin', 'abc123', '561 W Amaryllis Dr.', 'skariyat@indiana.edu', '8123692497', '1992-09-13', 'asas'),
('Prashanth Bhat', 'Prashanth', 'Bhat', 'abc123', '561 W Amaryllis Dr.', 'abc@gmail.com', '8123692497', '1990-12-01', 'xx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`User_ID`,`Event_ID`,`Comment_ID`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`Event_ID`,`User_ID`,`Player_ID`),
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `Player_ID` (`Player_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`Game_ID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`Location_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `Game_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `Location_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
