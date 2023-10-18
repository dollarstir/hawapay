-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 15, 2023 at 12:20 AM
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
(10, 'Frederick', 'Ennin', NULL, NULL, NULL, 'kpin463@gmail.com', NULL, NULL, NULL, NULL, NULL, 1, 1, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$nnGhUxbWNaybrtmYOkow7OYaIB95/KDRju6z4IRmpbXHjbiKKCf6C', NULL, '2023-10-15 00:05:53', '2023-10-15 00:05:53', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email_verification`
--
ALTER TABLE `email_verification`
  ADD PRIMARY KEY (`emv_id`);

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
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
