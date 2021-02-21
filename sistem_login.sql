-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2021 at 01:12 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblm_users`
--

CREATE TABLE `tblm_users` (
  `id` int(11) NOT NULL,
  `nama` varchar(21) NOT NULL,
  `email` varchar(21) NOT NULL,
  `noHp` char(21) NOT NULL,
  `password` varchar(21) NOT NULL,
  `level` int(11) NOT NULL,
  `foto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblm_users`
--

INSERT INTO `tblm_users` (`id`, `nama`, `email`, `noHp`, `password`, `level`, `foto`) VALUES
(1, 'ss', 'a@gmail.com', '00', '1212', 3, 0),
(2, 'Hasan', 'hasan@gmail.com', '089987654567', 'Bismillah1234', 3, 0),
(3, 'asa', 'asa@gmail.com', '0900', 'Bismillah', 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblm_users`
--
ALTER TABLE `tblm_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblm_users`
--
ALTER TABLE `tblm_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
