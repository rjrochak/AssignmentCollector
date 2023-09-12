-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2023 at 10:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignmentcollector`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `first_name`, `last_name`, `email`, `password`, `otp`, `status`) VALUES
(1, 'khilesh ', 'sahu', 'khilesh12@gmail.com', '$2y$10$w9xKhap.c8hmxlpDDdSEB.Pb7AKm9BJ9ezqsqdtEvVMC6J1Dv46sG', '3991', 1),
(3, 'ak', 'sahu', 'techweb029@gmail.com', '$2y$10$g3Tiw0rHWcY9N.9erg3ZPe6/2.RJQkqaBRkieFYsgs4yV2Ce9nszK', '6205', 1);

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`id`, `user_id`, `title`, `file`, `update_at`) VALUES
(1, '333', 'submited', '../public/uploads/connectionfile.png', '2023-09-07 03:11:54'),
(2, '1', 'file', '../public/uploads/phpfil.png', '2023-09-07 03:13:28'),
(3, '3333', 'file', '../public/uploads/phpfil.png', '2023-09-07 03:17:29'),
(4, '1111', 'file', '../public/uploads/connectionfile.png', '2023-09-11 08:09:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `addres` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `file` varchar(255) NOT NULL,
  `atatime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `father_name`, `gender`, `dob`, `email`, `phone`, `course`, `addres`, `pincode`, `password`, `otp`, `status`, `file`, `atatime`) VALUES
(1, 'Rahul ', 'Sadhuram', 'male', '2023-09-05 13:55:15', 'Rahul12@gmail.com', '65324178965', 'IT', 'Torla , Raipur, Chhattisgarh ', '123654', '$2y$10$mvDoOFFGdosINFmFLMacROMlglPKjQ5BAEO8P4ZCg2UsA4Sfc04wO', '5470', 1, 'public/uploads/02.gif', '2023-09-05 13:54:43'),
(2, 'ak', 'sahu', 'male', '2023-09-05 14:13:59', 'ak12@gmail.com', '32145', 'IT', 'tila', '123654', '$2y$10$w0J3ELlIQ1iBt/5r0dFEX.0FXQWN3TF4PEWZI5C/qeXkeIFJZZueq', '9323', 1, 'public/uploads/connectionfile.png', '2023-09-05 14:13:11'),
(4, 'ak', 'sahu', 'male', '2023-09-11 08:08:43', 'techweb029@gmail.com', '213654', 'IT', 'torla', '123', '$2y$10$N6htrnFiRqqSv7Ueg.SwROWCn6mEW45fRXT8AGNF11wUh8FQ5CgzK', '5555', 1, 'public/uploads/connectionfile.png', '2023-09-11 08:08:09'),
(5, ' adarsh tiwari', 'Ramakant tiwari', 'male', '2023-09-11 08:24:42', 'ajadarsh1542@gmail.com', '6263167706', 'IT', 'Raipur ', '492001', '$2y$10$MfvTp/07TUUyO0rEe4hiW.SooTBXpUGJFa/8Fjx95nOnD706G1z7O', '2638', 1, 'public/uploads/phpfil.png', '2023-09-11 08:19:01'),
(6, 'prajjwal', 'Bhojram Sahu', 'male', '2001-07-18 18:30:00', 'prajjwalsahu19@gmail.com', '111111', 'IT', 'Raipur', '11111', '$2y$10$ipZj96XAlfD.vsfqqth9PuTdy9o5ksSvNpdT4RPLRZ9LCc2GxyZ0G', '3235', 0, 'public/uploads/connectionfile.png', '2023-09-11 08:33:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
