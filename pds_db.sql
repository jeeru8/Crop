-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2019 at 07:03 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pds_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `id` int(11) NOT NULL,
  `username` varchar(199) NOT NULL,
  `fullname` varchar(199) NOT NULL,
  `password` varchar(199) NOT NULL,
  `confirm_password` varchar(199) NOT NULL,
  `group_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`id`, `username`, `fullname`, `password`, `confirm_password`, `group_id`) VALUES
(1, 'control@admin', 'PEST CONTROL ADMIN', '679ac50877a06c32f4781a21313ae46f', 'pestcontroladmin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `log_files`
--

CREATE TABLE `log_files` (
  `id` int(11) NOT NULL,
  `name` varchar(199) NOT NULL,
  `title` varchar(199) NOT NULL,
  `description` text NOT NULL,
  `files_docs` varchar(199) NOT NULL,
  `files_path` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_files`
--

INSERT INTO `log_files` (`id`, `name`, `title`, `description`, `files_docs`, `files_path`) VALUES
(1, 'TEST', 'TEST', 'TEST', 'GLOBE.txt', 'upload_docs/GLOBE.txt');

-- --------------------------------------------------------

--
-- Table structure for table `log_reports`
--

CREATE TABLE `log_reports` (
  `id` int(11) NOT NULL,
  `name` varchar(199) NOT NULL,
  `title` varchar(199) NOT NULL,
  `description` text NOT NULL,
  `files_docs` varchar(199) NOT NULL,
  `files_path` varchar(199) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_reports`
--

INSERT INTO `log_reports` (`id`, `name`, `title`, `description`, `files_docs`, `files_path`, `date`) VALUES
(1, 'TEST', 'TEST', 'TEST', '', '', '2019-03-11 07:58:19');

-- --------------------------------------------------------

--
-- Table structure for table `pest_all`
--

CREATE TABLE `pest_all` (
  `id` int(11) NOT NULL,
  `pest_1` varchar(199) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pest_all`
--

INSERT INTO `pest_all` (`id`, `pest_1`, `date`) VALUES
(1, 'RAT', '2019-03-28 02:55:04'),
(2, 'RAT', '2019-03-28 02:55:04');

-- --------------------------------------------------------

--
-- Table structure for table `pest_detection`
--

CREATE TABLE `pest_detection` (
  `id` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pest_detection`
--

INSERT INTO `pest_detection` (`id`, `value`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pest_spray`
--

CREATE TABLE `pest_spray` (
  `id` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pest_spray`
--

INSERT INTO `pest_spray` (`id`, `value`) VALUES
(1, 7000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_files`
--
ALTER TABLE `log_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_reports`
--
ALTER TABLE `log_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pest_all`
--
ALTER TABLE `pest_all`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pest_detection`
--
ALTER TABLE `pest_detection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pest_spray`
--
ALTER TABLE `pest_spray`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log_files`
--
ALTER TABLE `log_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log_reports`
--
ALTER TABLE `log_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pest_all`
--
ALTER TABLE `pest_all`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pest_detection`
--
ALTER TABLE `pest_detection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pest_spray`
--
ALTER TABLE `pest_spray`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
