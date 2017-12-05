-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 05, 2017 at 04:15 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dgm3790`
--

-- --------------------------------------------------------

--
-- Table structure for table `todo_list_users`
--

CREATE TABLE `todo_list_users` (
  `id` int(2) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todo_list_users`
--

INSERT INTO `todo_list_users` (`id`, `username`, `password`, `email`) VALUES
(3, 'zrenicaplumb', 'password', 'zrenicaplumb@gmail.com'),
(4, 'zrenicaplumb', 'password', 'zrenicaplumb@gmail.com'),
(5, 'bob', 'johnsonpass', ''),
(6, 'rick', 'jonez', 'rickjonez@gmail.com'),
(7, 'james', 'pass123', 'jamesdavis@gmail.com'),
(8, 'tom', 'brady', 'bob@gmail.com'),
(9, 'jim', 'raynor', 'asdasd@gmail.com'),
(10, 'las', 'vegas', 'sdfsdf@gmail.com'),
(11, 'babe', 'ruth', 'gafag@gmail.com'),
(12, 'tim', 'tanner', 'aeovne@gmail.com'),
(13, 'morty', 'smith', 'fafaffaf@gmail.com'),
(14, 'frog', 'licker', 'ddd@gmail.com'),
(15, 'bill', 'password', 'billgates@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todo_list_users`
--
ALTER TABLE `todo_list_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todo_list_users`
--
ALTER TABLE `todo_list_users`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
