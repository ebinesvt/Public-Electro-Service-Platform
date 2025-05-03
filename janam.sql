-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2019 at 07:36 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `janam`
--

-- --------------------------------------------------------

--
-- Table structure for table `complanits`
--

CREATE TABLE `complanits` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `complaint` varchar(500) NOT NULL,
  `com_against` varchar(500) NOT NULL,
  `com_siveriry` varchar(500) NOT NULL,
  `com_area` varchar(500) NOT NULL,
  `com_desc` varchar(500) NOT NULL,
  `staff_id` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complanits`
--

INSERT INTO `complanits` (`id`, `uid`, `complaint`, `com_against`, `com_siveriry`, `com_area`, `com_desc`, `staff_id`, `status`) VALUES
(1, 6, 'dsfgdfhfgh', 'hgfhfghfg', 'Low', 'pqnchayath', 'gfhfghfghgf', 2, 1),
(2, 6, 'dgdfgff', 'hfghfghghfh', 'medium', 'muncipality', 'fdghfhfgh', 0, 0),
(3, 7, 'dsfgdfhfgh', 'hgfhfghfg', 'Low', 'panchayath', 'sdfsdf', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `uid` int(11) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `uid`, `role`) VALUES
(1, 'akshaya@gmail.com', '123', 6, 'user'),
(2, 'admin@gmail.com', 'admin', 0, 'admin'),
(4, 'renjith@gmail.com', '123', 2, 'staff'),
(5, 'jayasudhamohan@gmail.com', '123', 7, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(2000) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `profile` varchar(1000) DEFAULT NULL,
  `ph` varchar(20) NOT NULL,
  `address` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `first_name`, `last_name`, `email`, `password`, `profile`, `ph`, `address`) VALUES
(6, 'Akshaya Renjith 123', 'Xavier', 'akshaya@gmail.com', '123', 'l7.jpg', '9876543211', 'fdsfgdfg'),
(7, 'jaya', 'mohan', 'jayasudhamohan@gmail.com', '123', 'ernakulam.jpg', '9876543211', 'Arya ,Near Palarivattom');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `area` varchar(2000) NOT NULL,
  `designation` varchar(500) NOT NULL,
  `place` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `profile` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `area`, `designation`, `place`, `email`, `password`, `profile`) VALUES
(2, 'Renjith', 'panchayath', 'Officer', 'Kakkanad', 'renjith@gmail.com', '123', 'login.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complanits`
--
ALTER TABLE `complanits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complanits`
--
ALTER TABLE `complanits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
