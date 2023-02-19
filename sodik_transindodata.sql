-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2023 at 12:23 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sodik_transindodata`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(255) NOT NULL,
  `id_ticket` varchar(255) NOT NULL,
  `name_order` varchar(150) NOT NULL,
  `email_order` varchar(200) NOT NULL,
  `birth_order` varchar(50) NOT NULL,
  `hp_order` varchar(50) NOT NULL,
  `address_order` text NOT NULL,
  `type_artist_order` varchar(50) NOT NULL,
  `type_ticket_order` varchar(50) NOT NULL,
  `count_ticket_order` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `id_ticket`, `name_order`, `email_order`, `birth_order`, `hp_order`, `address_order`, `type_artist_order`, `type_ticket_order`, `count_ticket_order`) VALUES
(1, '5r14ZdmebcqV0VhF58J8dh3wt', 'Tubagus Ahmad Sodik', 'hrd@instagram.com', '2023-02-14', '08123456789', 'Indonesia', 'Black Pink', 'VVIP', '2'),
(3, 'IiaKQVccXUkiNilpWXG8jzF2y', 'Example 1', 'example@gmail.com', '2023-02-14', '08123456789', 'Indonesia', 'Black Pink', 'VIP A', '1'),
(4, 'l4LmU7CUbcAl9L1ccB8e6xtXB', 'Example 2', 'example@gmail.com', '2023-02-15', '08123456789', 'Indonesia', 'NCT Dream', 'PINK A', '1');

-- --------------------------------------------------------

--
-- Table structure for table `order_expired`
--

CREATE TABLE `order_expired` (
  `id_expired` int(255) NOT NULL,
  `order_expired` varchar(255) NOT NULL,
  `active_expired` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_expired`
--

INSERT INTO `order_expired` (`id_expired`, `order_expired`, `active_expired`) VALUES
(1, '5r14ZdmebcqV0VhF58J8dh3wt', 2),
(2, 'IiaKQVccXUkiNilpWXG8jzF2y', 0),
(3, 'l4LmU7CUbcAl9L1ccB8e6xtXB', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verify_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` enum('1','2') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `verify_key`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Tubagus Ahmad Sodik', 'tb.sodik@gmail.com', '$2y$10$TKB/8GxCAc0rNlJ1kqnJWubwqEqK0S/IqtCoSgD0IHso.wOwt7BPG', 'STAF', '364Rmyw5x6qaVCWzruZ9JfRE2f08DLZp7DceLrTk', '1', '2023-02-14 16:23:35', '2023-02-14 16:23:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `order_expired`
--
ALTER TABLE `order_expired`
  ADD PRIMARY KEY (`id_expired`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_expired`
--
ALTER TABLE `order_expired`
  MODIFY `id_expired` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
