-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 05, 2018 at 01:12 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dashbord`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatdata`
--

CREATE TABLE `chatdata` (
  `id` int(100) NOT NULL,
  `data` varchar(100) NOT NULL,
  `chart_type` enum('BAR_CHAT','PIE_CHAT','AREA_CHAT','LINE_CHAT') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chatdata`
--

INSERT INTO `chatdata` (`id`, `data`, `chart_type`) VALUES
(1, 'ehr', 'PIE_CHAT'),
(2, 'audi', 'PIE_CHAT'),
(3, 'audi', 'BAR_CHAT'),
(4, 'audi', 'BAR_CHAT'),
(5, 'time', 'BAR_CHAT'),
(6, 'audi', 'AREA_CHAT'),
(7, 'audi', 'LINE_CHAT'),
(8, 'audi', 'LINE_CHAT'),
(9, 'enhan', 'BAR_CHAT'),
(10, 'audi', 'PIE_CHAT'),
(11, 'audi', 'PIE_CHAT'),
(12, 'audi', 'AREA_CHAT'),
(13, 'audi', 'BAR_CHAT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatdata`
--
ALTER TABLE `chatdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatdata`
--
ALTER TABLE `chatdata`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
