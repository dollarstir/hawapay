-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 18, 2023 at 02:17 AM
-- Server version: 10.6.12-MariaDB-0ubuntu0.22.04.1
-- PHP Version: 8.1.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tuantem`
--

-- --------------------------------------------------------

--
-- Table structure for table `email_verification`
--

CREATE TABLE `email_verification` (
  `emv_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `verification_code` text DEFAULT NULL,
  `exp_date` text DEFAULT NULL,
  `signature` text DEFAULT NULL,
  `date_created` varchar(100) DEFAULT NULL,
  `date_updated` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `email_verification`
--

INSERT INTO `email_verification` (`emv_id`, `uid`, `verification_code`, `exp_date`, `signature`, `date_created`, `date_updated`) VALUES
(3, 10, '0f3b8486c7c07ff11841c0c706a59590', '1697300296', NULL, '2023-10-15 00:05:53', '2023-10-15 00:05:53');

-- --------------------------------------------------------

--
-- Table structure for table `sms_verification`
--

CREATE TABLE `sms_verification` (
  `smv_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `verification_code` varchar(100) DEFAULT NULL,
  `exp_date` text DEFAULT NULL,
  `date_created` varchar(100) DEFAULT NULL,
  `date_updated` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sms_verification`
--

INSERT INTO `sms_verification` (`smv_id`, `uid`, `verification_code`, `exp_date`, `date_created`, `date_updated`) VALUES
(1, 10, '403359', '1697467698', '2023-10-16 22:43:18', '2023-10-16 22:43:18'),
(2, 10, '366763', '1697468730', '2023-10-16 23:00:30', '2023-10-16 23:00:30'),
(3, 10, '269532', '1697468953', '2023-10-16 23:04:13', '2023-10-16 23:04:13'),
(4, 10, '631091', '1697469013', '2023-10-16 23:05:13', '2023-10-16 23:05:13'),
(5, 10, '923879', '1697469128', '2023-10-16 23:07:08', '2023-10-16 23:07:08'),
(6, 10, '138690', '1697469353', '2023-10-16 23:10:53', '2023-10-16 23:10:53'),
(7, 10, '946412', '1697469465', '2023-10-16 23:12:45', '2023-10-16 23:12:45'),
(8, 10, '846790', '1697469653', '2023-10-16 23:15:53', '2023-10-16 23:15:53'),
(9, 10, '295195', '1697469729', '2023-10-16 23:17:09', '2023-10-16 23:17:09'),
(10, 10, '736411', '1697469807', '2023-10-16 23:18:27', '2023-10-16 23:18:27'),
(11, 10, '193690', '1697469888', '2023-10-16 23:19:48', '2023-10-16 23:19:48'),
(12, 10, '955442', '1697469954', '2023-10-16 23:20:54', '2023-10-16 23:20:54'),
(13, 10, '362433', '1697470043', '2023-10-16 23:22:23', '2023-10-16 23:22:23'),
(14, 10, '590485', '1697470112', '2023-10-16 23:23:32', '2023-10-16 23:23:32'),
(15, 10, '590514', '1697470137', '2023-10-16 23:23:57', '2023-10-16 23:23:57'),
(16, 10, '292194', '1697470193', '2023-10-16 23:24:53', '2023-10-16 23:24:53'),
(17, 10, '844036', '1697470236', '2023-10-16 23:25:36', '2023-10-16 23:25:36'),
(18, 10, '556884', '1697470270', '2023-10-16 23:26:10', '2023-10-16 23:26:10'),
(19, 10, '899835', '1697470392', '2023-10-16 23:28:12', '2023-10-16 23:28:12'),
(20, 10, '722727', '1697470517', '2023-10-16 23:30:17', '2023-10-16 23:30:17'),
(21, 10, '811575', '1697470640', '2023-10-16 23:32:20', '2023-10-16 23:32:20'),
(22, 10, '399535', '1697470705', '2023-10-16 23:33:25', '2023-10-16 23:33:25'),
(23, 10, '860192', '1697472396', '2023-10-17 00:01:36', '2023-10-17 00:01:36'),
(24, 10, '113741', '1697474744', '2023-10-17 00:40:44', '2023-10-17 00:40:44'),
(25, 10, '802208', '1697475681', '2023-10-17 01:00:58', '2023-10-17 01:00:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `uid` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `primary_number` varchar(20) DEFAULT NULL,
  `secondary_number` varchar(20) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(30) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `address2` text DEFAULT NULL,
  `gps_address` varchar(50) DEFAULT NULL,
  `account_status` int(11) NOT NULL COMMENT '-1:disabled  0:inactive\r\n1: Active/notverified  2: active/verified ',
  `account_type` int(11) NOT NULL COMMENT '1: customer\r\n2: Admin',
  `email_verified` varchar(3) DEFAULT NULL,
  `primary_verified` varchar(3) DEFAULT NULL,
  `secondary_verified` varchar(3) DEFAULT NULL,
  `auth_type` int(11) DEFAULT NULL COMMENT '1:Goole Authenticator\r\n2: sms_verification',
  `google_auth` varchar(3) DEFAULT NULL,
  `sms_auth` varchar(3) DEFAULT NULL,
  `id_verified` varchar(3) DEFAULT NULL,
  `daily_limit` varchar(50) DEFAULT NULL,
  `referral_code` text DEFAULT NULL,
  `agent` int(11) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `user_ip` text DEFAULT NULL,
  `date_created` varchar(100) DEFAULT NULL,
  `date_updated` varchar(100) DEFAULT NULL,
  `wallet1` double NOT NULL DEFAULT 0,
  `wallet2` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`uid`, `first_name`, `last_name`, `dob`, `primary_number`, `secondary_number`, `email`, `country`, `city`, `address`, `address2`, `gps_address`, `account_status`, `account_type`, `email_verified`, `primary_verified`, `secondary_verified`, `auth_type`, `google_auth`, `sms_auth`, `id_verified`, `daily_limit`, `referral_code`, `agent`, `password`, `user_ip`, `date_created`, `date_updated`, `wallet1`, `wallet2`) VALUES
(10, 'Frederick', 'Ennin', NULL, '0556676471', NULL, 'kpin463@gmail.com', NULL, NULL, NULL, NULL, NULL, 1, 1, '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$nnGhUxbWNaybrtmYOkow7OYaIB95/KDRju6z4IRmpbXHjbiKKCf6C', NULL, '2023-10-15 00:05:53', '2023-10-15 00:05:53', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email_verification`
--
ALTER TABLE `email_verification`
  ADD PRIMARY KEY (`emv_id`);

--
-- Indexes for table `sms_verification`
--
ALTER TABLE `sms_verification`
  ADD PRIMARY KEY (`smv_id`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `email_verification`
--
ALTER TABLE `email_verification`
  MODIFY `emv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sms_verification`
--
ALTER TABLE `sms_verification`
  MODIFY `smv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
