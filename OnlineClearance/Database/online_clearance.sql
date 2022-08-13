-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 12:12 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_clearance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `Password`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `clearance`
--

CREATE TABLE `clearance` (
  `index number` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(50) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `Name`, `status`) VALUES
(1, 'Campus Accountant', 'Rejected'),
(2, 'Campus Librarian ', 'Accepted'),
(3, 'Computer Laboratory', 'under process'),
(4, 'Laboratory', 'under process'),
(5, 'Senior Hall Tutor', 'under process'),
(6, 'Campus Sports coach', 'under process'),
(7, 'Dean in Charge', 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(255) NOT NULL,
  `department_id` int(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `department_id`, `date`, `status`) VALUES
(1, 1, '2022-07-25 23:14:47', 'Reject'),
(2, 2, '2022-07-25 21:38:36', 'under process'),
(3, 3, '2022-07-25 21:38:37', 'pending'),
(4, 4, '2022-07-25 21:38:37', 'Under Procees'),
(5, 5, '2022-07-25 21:38:37', 'pending'),
(6, 6, '2022-07-25 21:38:37', 'pending'),
(7, 7, '2022-07-25 21:38:37', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `Index Number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`username`, `password`, `fullname`, `Index Number`) VALUES
('maxwell', '1234', 'Apegiwine Maxwell', 'fms/001/18'),
('bransford', '1234', 'Boahene Bransford', 'fms/002/18'),
('kobby', '1234', 'Edmond Addo', 'fms/003/18'),
('kakape', '1234', 'Omari Stephen', 'fms/004/18'),
('bismark', '1234', 'Owusu Bismark', 'fms/005/18'),
('deborah', '1234', 'Deborah Attah', 'fms/006/18'),
('Francis', '1234', 'Yacham Francis', 'fms/007/18');

-- --------------------------------------------------------

--
-- Table structure for table `student-clearance-info`
--

CREATE TABLE `student-clearance-info` (
  `index number` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_clearance_info`
--

CREATE TABLE `student_clearance_info` (
  `id` int(11) NOT NULL,
  `index_number` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `programme` varchar(50) NOT NULL,
  `date_created` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_clearance_info`
--

INSERT INTO `student_clearance_info` (`id`, `index_number`, `name`, `gender`, `programme`, `date_created`) VALUES
(1, 'sjdnfjsf', 'jskdjnfksjdf', 'on', 'nmsnd fsdf', '2022-08-19'),
(2, 'dfsfwf', 'sdfsdfsd', '', 'sdfsdf', '2022-08-18'),
(3, 'dfsdfssdf', 'sdfsdfs', 'on', 'sdfsdf', '2022-08-16'),
(4, 'wemw,em', 'sdsds', '', 'sdsdsd', '2022-08-17'),
(5, 'sdfsdfsd', 'sdfsfsdfds', '', 'sdfsdf', '2022-08-22'),
(6, 'sasas', 'asas', 'on', '', '2022-09-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_clearance_info`
--
ALTER TABLE `student_clearance_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_clearance_info`
--
ALTER TABLE `student_clearance_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
