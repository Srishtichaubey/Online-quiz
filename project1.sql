-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 11:47 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `second`
--

CREATE TABLE IF NOT EXISTS `second` (
  `id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `col_name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob_no` int(13) NOT NULL,
  `password` varchar(17) NOT NULL,
  `con_pass` varchar(17) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `second`
--

INSERT INTO `second` (`id`, `name`, `gender`, `col_name`, `email`, `mob_no`, `password`, `con_pass`) VALUES
(1, 'srishtic', 'F', 'GGPM', 'srishtic@gmail.com', 2147483647, 'srishtic', 'srishtic'),
(2, 'pratima', 'F', 'GGPM', 'pratima1!@gmail.com', 2147483647, 'pratima', 'pratima'),
(3, 'kriti', 'F', 'GGPM', 'kritikakashyap9450@gmail.com', 2147483647, 'kriti', 'kriti'),
(5, 'Shashank', 'M', 'GGPM', 'hotmail@gmail.com', 2147483647, 'shashank', 'shashank'),
(7, 'srishti', 'female', 'ggpm', 'srishti@gmail.com', 2147483647, 'srishti', 'srishti'),
(8, 'srishti', 'F', 'GGPM', 'srishti@gmail.com', 525174185, 'srishti', 'srishti'),
(9, 'ashtha', 'F', 'NRIPT', 'ashtha@gmail.com', 2147483647, 'ashtha', 'ashtha'),
(10, 'Pratima', 'F', 'GGPM', 'pratima1!@gmail.com', 2147483647, 'pratima', 'pratima');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `second`
--
ALTER TABLE `second`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `second`
--
ALTER TABLE `second`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
