-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2023 at 06:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admitted`
--

CREATE TABLE `admitted` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pid` int(22) NOT NULL,
  `cause` varchar(200) NOT NULL,
  `discharge_remark` varchar(255) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admitted`
--

INSERT INTO `admitted` (`id`, `user_id`, `pid`, `cause`, `discharge_remark`, `image`, `created_at`, `updated_at`, `status`) VALUES
(15, 22, 786, 'heartattack', 'He is healed', 'marija-zaric-QMwkGYFDjiE-unsplash1.jpg', '2023-03-24', '2023-03-24 13:39:23', 0),
(16, 21, 275, 'Heart attack', 'he is cured', 'affirm1.jpg', '2023-03-24', '2023-03-24 13:39:37', 0),
(17, 20, 292, 'Fever', 'She is good now', 'affirm.jpg', '2023-03-24', '2023-03-24 13:41:34', 0),
(18, 24, 613, 'inflammation in stomach', '', '', '2023-03-25', '2023-03-25 00:14:51', 1),
(19, 21, 275, 'Heart attack', '', '', '2023-03-25', '2023-03-25 00:46:48', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `fullname`, `email`, `feedback`, `created_at`) VALUES
(1, 'test name', 'test@gmail.com', 'Improvisation', '0000-00-00 00:00:00'),
(2, 'test name', 'test@gmail.com', 'Improvisation', '0000-00-00 00:00:00'),
(3, 'Prabhakar', 'techprabhakarmaurya@gmail.com', 'Improve', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '12345678', '2023-03-10 11:22:07', '2023-03-10 11:22:07');

-- --------------------------------------------------------

--
-- Table structure for table `patient_record`
--

CREATE TABLE `patient_record` (
  `id` int(11) NOT NULL,
  `pid` varchar(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `weight` int(10) NOT NULL,
  `height` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `admitted_on` date NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_record`
--

INSERT INTO `patient_record` (`id`, `pid`, `fullname`, `fathername`, `age`, `gender`, `address`, `weight`, `height`, `description`, `bloodgroup`, `department`, `admitted_on`, `created_at`, `updated_at`) VALUES
(16, '5835614', 'Ram', 'SC Maurya', 124, 'Male', 'test', 78, '45', 'test', '', 'Nuerology', '2023-03-17', '2023-03-17 14:42:16', '0000-00-00 00:00:00'),
(17, '39035', 'test name', 'test father name ', 45, 'Female', 'test add', 78, '1521', 'ghjgvhjg', 'A+', 'Cardiology', '2023-03-17', '2023-03-17 14:43:40', '0000-00-00 00:00:00'),
(18, '429', 'eftef', 'S.C.Maurya', 78, 'Male', 'ghjfjjfgj', 0, '', '75gghghjkhjh', 'unknown', 'General Physician', '2023-03-17', '2023-03-17 14:46:10', '0000-00-00 00:00:00'),
(19, '40', 'test name', 'dssdgf', 78, 'Other', 'jsghslg', 0, '', 'dshjkf', 'A+', 'Cardiology', '2023-03-17', '2023-03-17 14:47:19', '0000-00-00 00:00:00'),
(20, '292', 'Disha Srivastava', 'Sanjai Srivastava', 21, 'Female', 'B1/5 Sector I', 50, '158', 'she has high fever ', 'unknown', 'General Physician', '2023-03-19', '2023-03-19 12:27:30', '0000-00-00 00:00:00'),
(21, '275', 'Aditya', 'Aditya ke papa', 22, 'Male', 'Aditya ka ghar', 55, '160', 'Stomach Ache', 'O-', 'General Physician', '2023-03-22', '2023-03-22 10:32:10', '0000-00-00 00:00:00'),
(22, '786', 'Tuhin Srivastava', 'Aseem Srivatava', 20, 'Male', 'b1/32 Sector H ', 70, '158', 'Kidney Stone', 'B+', 'Nuerology', '2023-03-22', '2023-03-22 13:16:02', '0000-00-00 00:00:00'),
(23, '427', 'Olly ', 'Joy ', 21, 'Female', 'London, UK', 50, '150', 'Headache', 'unknown', 'General Physician', '2023-03-25', '2023-03-25 00:08:17', '0000-00-00 00:00:00'),
(24, '613', 'Oggy', 'BoB', 22, 'Male', 'London, UK', 63, '158', 'Stomach Ache', 'B+', 'General Physician', '2023-03-25', '2023-03-25 00:11:12', '0000-00-00 00:00:00'),
(25, '387', 'Ayush ', 'Sudhir Kumar', 6, 'Male', 'S.S.1/40 Sector A Sitapur Road Yojna Jankipuram, Lucknow', 15, '80', 'High Fever since last three days', 'B+', 'General Physician', '2023-03-25', '2023-03-25 20:51:17', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admitted`
--
ALTER TABLE `admitted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_record`
--
ALTER TABLE `patient_record`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admitted`
--
ALTER TABLE `admitted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient_record`
--
ALTER TABLE `patient_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
