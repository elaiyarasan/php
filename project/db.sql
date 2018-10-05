-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 05, 2018 at 01:01 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `id` int(11) DEFAULT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `mobilenumber` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `dob` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`id`, `firstname`, `lastname`, `mobilenumber`, `email`, `password`, `dob`) VALUES
(1, 'a', 'b', '423432423', 'a@gmail.com', '1', '1996-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `firstname` varchar(11) DEFAULT NULL,
  `lastname` varchar(11) DEFAULT NULL,
  `mobile_number` bigint(10) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `dob` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `firstname`, `lastname`, `mobile_number`, `email`, `password`, `dob`) VALUES
(3, 'a', 'b', 423432423, 'a@gmail.com', '1', '2018-10-05'),
(4, 'Elaiyarasan', 'M', 3, 'sa@gmail.com', '1', '2018-10-05'),
(5, '', '', 0, '', '', '2018-10-05'),
(6, '', '', 0, '', '', '2018-10-05'),
(8, '', '', 0, '', '', '2018-10-05'),
(9, '', '', 0, '', '', '2018-10-05'),
(10, '', '', 0, '', '', '2018-10-05'),
(11, 'rohit', 'sharma', 6753737218, 'rohit45@gmail.com', 'rohit', '2018-10-05'),
(12, '', '', 0, '', '', '2018-10-05'),
(14, '', '', 0, '', '', '2018-10-05'),
(29, '', '', 0, '', '', '2018-10-05'),
(30, 'a', 'a', 123, 'milayarasan@gmail.co', 'a', '2018-10-05'),
(32, 'Rohit', 'Elaiy', 7502287117, 'milayarasan@gmail.co', '123', '1996-04-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
