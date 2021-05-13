-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 13, 2021 at 08:21 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `balance` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `username`, `email`, `balance`) VALUES
(1, 'Jahnvy', 'j@gmail.com', 34100),
(2, 'Anu', 'a@gmail.com', 6000),
(3, 'Sakshi', 's@gmail.com', 20500),
(4, 'Utkarsh', 'U@gmail.com', 60165),
(5, 'Divya', 'd@gmail.com', 40100),
(6, 'ripu', 'R@gmail.com', 20600),
(7, 'dipu', 'pd@gmail.com', 6100),
(8, 'pavan', 'p@gmail.com', 30000),
(9, 'admin', 'Jahnvy214@gmail.com', 315600),
(10, 'k3', 'K@gmail.com', 50000),
(11, 'vicky', 'v@gmail.com', 50300);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `S.no.` int(20) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `balance` int(18) NOT NULL,
  `date and time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`S.no.`, `sender`, `receiver`, `balance`, `date and time`) VALUES
(1, 'jahnvy', 'utkarsh', 250, '0000-00-00'),
(2, 'ripu', 'anu', 120, '2021-05-10'),
(3, 'jahnvy', 'anu', 40, '2021-05-10'),
(4, 'Sakshi ', 'Sakshi ', 100, '2021-05-11'),
(5, 'vicky', 'jahnvy', 6000, '0000-00-00'),
(6, 'Jahnvy ', 'dipu', 100, '2021-05-12'),
(7, 'Jahnvy ', 'ripu', 100, '2021-05-12'),
(8, 'pavan ', '', 20000, '2021-05-12'),
(9, 'admin ', 'Utkarsh', 165, '2021-05-12'),
(10, 'admin ', 'pavan', 30000, '2021-05-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);
ALTER TABLE `form` ADD FULLTEXT KEY `username_2` (`username`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`S.no.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `S.no.` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
