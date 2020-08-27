-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 03, 2020 at 10:11 AM
-- Server version: 10.3.22-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saachsor_uploads`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `hash`, `active`) VALUES
(17, 'Mogale', 'Moseri', 'saachs.org@gmail.com', '$2y$10$T68Sl4tW.49jVjG.HJ.9K.16ka4BiPh2cuq6EL9Fxj47uybaoRjyW', 'a5bfc9e07964f8dddeb95fc584cd965d', 1),
(18, 'Mogale', 'Moseri', 'chotompona@gmail.com', '$2y$10$0hE5ugbnZaEu5CuDxFdxp.b0AEOUzDNxjNFGZG3VoUxHtc.dlmWyW', 'c3e878e27f52e2a57ace4d9a76fd9acf', 1),
(20, 'Mathibedi', 'Kgarose', 'mathibedikgarose85@gmail.com', '$2y$10$fyj6JubA27Jjg1oAI9vUTu/5MzDWadP6zthNQhra5nSnyfOatAaUC', 'c361bc7b2c033a83d663b8d9fb4be56e', 1),
(21, 'Mogale', 'Moseri', 'tmanmoseri@gmail.com', '$2y$10$Xi/pDvtHfTQ1bwYRy7QRYe0MuXQ0ivMvmKfFRhL2nbgzqQgEeYrwS', 'e70611883d2760c8bbafb4acb29e3446', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
