-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2018 at 05:40 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `live c8`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentid` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `time_created` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentid`, `userName`, `comment`, `time_created`) VALUES
(53, 'Minhaz001', 'Hey', '2018-07-28 13:50:45.976583'),
(54, 'Minhaz001', 'Sup my man ?', '2018-07-28 13:55:57.619045'),
(55, 'Minhaz001', 'ok ?', '2018-07-28 14:06:37.002877'),
(56, 'Raisul001', 'Ok !! See Ya Later', '2018-07-28 14:07:03.793942'),
(57, 'Raisul001', 'de', '2018-07-28 14:32:43.345282'),
(58, 'Raisul001', 'ok!', '2018-07-28 14:32:51.800007'),
(59, 'Raisul001', ';;', '2018-07-28 14:33:22.535613'),
(60, 'Raisul001', '45', '2018-07-28 14:33:39.713548'),
(61, 'Raisul001', 'lgj', '2018-07-28 14:34:05.468756'),
(62, 'Raisul001', 'dsds', '2018-07-28 14:34:27.491653'),
(63, 'Raisul001', 'hello ?', '2018-07-28 14:53:51.256872'),
(64, 'jahin001', 'Hey', '2018-07-28 14:53:57.755670'),
(65, 'Raisul001', 'my name is Raisul', '2018-07-28 14:54:39.951737'),
(66, 'jahin001', 'My name is Jahin', '2018-07-28 14:55:21.309399'),
(67, 'Raisul001', 'tiktok', '2018-07-28 14:57:32.091544'),
(68, 'Raisul001', 'Buy man !', '2018-07-28 15:36:55.081344');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userName` varchar(50) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userName`, `firstName`, `lastName`, `email`, `password`, `gender`) VALUES
('jahin001', 'Ashadul', 'Haque', 'jahin@gmail.com', 'MTIzNDU2Nzg=', 'M'),
('Liza001', 'Tamanna', 'Liza', 'liza@gmail.com', 'MTIzNDU2Nzg=', 'F'),
('Minhaz001', 'Minhaz', 'Uddin', 'minhaz@gmail.com', 'MTIzNDU2Nzg=', 'M'),
('Raisul001', 'Raisul', 'Islam', 'ri@gmail.com', 'MTIzNDU2Nzg=', 'M'),
('Sajid001', 'Sajid', 'Sarkar', 'sarkar@gmail.com', 'MTIzNDU2Nzg=', 'M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
