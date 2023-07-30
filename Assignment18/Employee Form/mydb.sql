-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 05:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;
--
-- Database: `mydb`
--

-- --------------------------------------------------------
--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `e_id` int(3) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) DEFAULT NULL,
  `mob` int(10) DEFAULT NULL,
  `desg` varchar(10) DEFAULT NULL,
  `dept` varchar(10) DEFAULT NULL,
  `sal` int(10) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;
--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (
    `e_id`,
    `fname`,
    `lname`,
    `mob`,
    `desg`,
    `dept`,
    `sal`
  )
VALUES (
    4,
    'Mayank',
    'Sharma',
    98552255,
    'Tester',
    'IT',
    100000
  ),
  (
    8,
    'Suraj',
    'Shinde',
    4564645,
    'sdas',
    'abcc',
    100
  ),
  (
    6,
    'Varad',
    'Gaikwad',
    98552255,
    'Tester',
    'IT',
    100000
  );
--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
ADD PRIMARY KEY (`fname`),
  ADD UNIQUE KEY `UNIQUE` (`e_id`) USING BTREE;
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
MODIFY `e_id` int(3) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 9;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;
-- app.component.html