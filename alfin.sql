-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 12:38 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alfin`
--

-- --------------------------------------------------------

--
-- Table structure for table `my_users`
--

CREATE TABLE `my_users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email_addr` varchar(255) NOT NULL,
  `users_pwd` varchar(255) NOT NULL,
  `signupDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_users`
--

INSERT INTO `my_users` (`id`, `fname`, `lname`, `email_addr`, `users_pwd`, `signupDate`) VALUES
(15, 'hamza ', ' hamza', 'hamza@gamil.com ', ' hamza ', '2019-11-28 07:26:42'),
(16, '	hamza	hamza	hamza@gamil.com	hamza ', ' 	hamza	hamza	hamza@gamil.com	hamza', 'hugycsd@yfsdg.d ', ' 	hamza	hamza	hamza@gamil.com	hamza ', '2019-11-28 07:27:11'),
(17, 'hamza', 'zahid', 'hamza@gmail.com', 'HAMZA ', '2019-11-29 00:42:20'),
(18, 'hamza  5 ', ' hamza 3 ', 'hamza1@gmail.com', ' 123456     ', '2020-01-10 20:07:42'),
(19, 'dyj  ', ' dg ', 'dh@gmail.com', ' dmj   ', '2020-07-10 22:35:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `my_users`
--
ALTER TABLE `my_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `my_users`
--
ALTER TABLE `my_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
