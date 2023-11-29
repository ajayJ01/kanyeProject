-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 12:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `quoteusers`
--

CREATE TABLE `quoteusers` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quoteusers`
--

INSERT INTO `quoteusers` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'sandeep', 'sandeep@gmail.com', '$2y$12$KtiaciIGE3Syx9L1ob5zXePjZnaP39kp55L4rzuXyPhPu9LlmiKVO', '2023-11-29 11:20:56', '2023-11-29 11:20:56'),
(2, 'Xander Crona', 'bjenkins@gmail.com', '$2y$04$ckt8bVnpigZVia15mUFSweXh8M5cnvafkhRcN5BjzsUYWeeOc4FYm', '2023-11-29 11:21:43', '2023-11-29 11:21:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quoteusers`
--
ALTER TABLE `quoteusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quoteusers`
--
ALTER TABLE `quoteusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
