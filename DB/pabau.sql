-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2024 at 02:34 AM
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
-- Database: `pabau`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Makes Work Fun'),
(2, 'Team Player'),
(3, 'Culture Champion'),
(4, 'Difference Maker');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`) VALUES
(14, 'Danielle Dennis', 'Riggs', 'cihac@mailinator.com', '$2y$10$mVRK2/yaU5cvn4pjqLc5VOoX4/4FgDst7R3Yj9FUTq0Re8VSbP/sK'),
(15, 'Elijah Taylor', 'Cole', 'fyceciz@mailinator.com', '$2y$10$Yb0niw.wVtsUh8wO7Vzs0uLqjGiN.439kNmgCqKgM1akDBtni8Aya'),
(16, 'Sarah Hardy', 'Bright', 'qygo@mailinator.com', '$2y$10$7eEf7kclO3Ooa3BE8FVhPuTtoajYS2KqTH9F.9NkskHxjL6pqaqwa'),
(17, 'Christen Jennings', 'Joyner', 'zycof@mailinator.com', '$2y$10$8qRM1sCwm92a5majMJuxw.cf5zzZdTLDHDL5QY2CDJq2YuxZyJ1SO'),
(18, 'Miriam Weaver', 'Crane', 'nyjosyd@mailinator.com', '$2y$10$3WzVJmdIONyyD/s.ByXEQee4hdQE/uiCIlWUg/cprSVpt/JauGPVu'),
(19, 'Aristotle Barton', 'Coffey', 'pegicitojo@mailinator.com', '$2y$10$PlOFI35LGYywIA8p440PMOGNPQZAiaOTj4P7/hmmqCpY7cvsW4XP6'),
(21, 'Admin', 'admin', 'admin@admin.com', '$2y$10$asVgTeEr5ISEfCSrVK4YRuB/AQczP3vBmS4Is8oZ9J8d1mOIvo33u');

-- --------------------------------------------------------

--
-- Table structure for table `user_vote`
--

CREATE TABLE `user_vote` (
  `id` bigint(255) NOT NULL,
  `voter_id` bigint(255) NOT NULL,
  `nominee_id` bigint(255) NOT NULL,
  `category_id` bigint(255) NOT NULL,
  `comment` text NOT NULL,
  `time_stamp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_vote`
--

INSERT INTO `user_vote` (`id`, `voter_id`, `nominee_id`, `category_id`, `comment`, `time_stamp`) VALUES
(12, 14, 15, 1, 'test comment', '2024-11-27 15:50'),
(13, 14, 16, 2, 'test comment', '2024-11-27 15:51'),
(14, 14, 17, 3, 'test comment', '2024-11-27 15:52'),
(15, 14, 18, 4, 'test comment', '2024-11-27 15:53'),
(16, 15, 14, 1, 'test comment', '2024-11-27 15:54'),
(17, 15, 16, 2, 'test comment', '2024-11-27 15:55'),
(18, 15, 17, 3, 'test comment', '2024-11-27 15:56'),
(19, 15, 18, 4, 'test comment', '2024-11-27 15:57'),
(20, 16, 14, 1, 'test comment', '2024-11-27 15:58'),
(21, 16, 15, 2, 'test comment', '2024-11-27 15:59'),
(22, 16, 17, 3, 'test comment', '2024-11-27 16:00'),
(23, 16, 18, 4, 'test comment', '2024-11-27 16:01'),
(24, 17, 14, 1, 'test comment', '2024-11-27 16:02'),
(25, 17, 15, 2, 'test comment', '2024-11-27 16:03'),
(26, 17, 16, 3, 'test comment', '2024-11-27 16:04'),
(27, 17, 18, 4, 'test comment', '2024-11-27 16:05'),
(28, 18, 14, 1, 'test comment', '2024-11-27 16:06'),
(29, 18, 15, 2, 'test comment', '2024-11-27 16:07'),
(30, 18, 16, 3, 'test comment', '2024-11-27 16:08'),
(31, 18, 17, 4, 'test comment', '2024-11-27 16:09'),
(32, 19, 14, 1, 'test comment', '2024-11-27 16:10'),
(33, 19, 15, 2, 'test comment', '2024-11-27 16:11'),
(34, 19, 16, 3, 'test comment', '2024-11-27 16:12'),
(35, 19, 17, 4, 'test comment', '2024-11-27 16:13'),
(36, 19, 18, 1, 'test comment', '2024-11-27 16:14'),
(42, 14, 19, 3, 'test comment', '2024-11-27 16:20'),
(43, 15, 19, 4, 'test comment', '2024-11-27 16:21'),
(44, 16, 19, 1, 'test comment', '2024-11-27 16:22'),
(45, 17, 19, 2, 'test comment', '2024-11-27 16:23'),
(46, 18, 19, 3, 'test comment', '2024-11-27 16:24'),
(53, 19, 14, 2, 'test comment', '2024-11-27 16:31'),
(55, 14, 21, 1, 'test comment', '2024-11-27 15:50'),
(56, 15, 21, 1, 'test comment', '2024-11-27 15:51'),
(57, 16, 21, 1, 'test comment', '2024-11-27 15:52'),
(58, 17, 21, 1, 'test comment', '2024-11-27 15:53'),
(59, 18, 21, 1, 'test comment', '2024-11-27 15:54'),
(60, 19, 21, 1, 'test comment', '2024-11-27 15:55'),
(62, 14, 21, 1, 'test comment', '2024-11-27 15:57'),
(63, 15, 21, 1, 'test comment', '2024-11-27 15:58'),
(64, 16, 21, 1, 'test comment', '2024-11-27 15:59'),
(65, 14, 21, 2, 'test comment', '2024-11-27 16:00'),
(66, 15, 21, 2, 'test comment', '2024-11-27 16:01'),
(67, 16, 21, 2, 'test comment', '2024-11-27 16:02'),
(68, 17, 21, 2, 'test comment', '2024-11-27 16:03'),
(69, 18, 21, 2, 'test comment', '2024-11-27 16:04'),
(70, 19, 21, 2, 'test comment', '2024-11-27 16:05'),
(72, 14, 21, 2, 'test comment', '2024-11-27 16:07'),
(73, 15, 21, 2, 'test comment', '2024-11-27 16:08'),
(74, 16, 21, 2, 'test comment', '2024-11-27 16:09'),
(75, 14, 21, 3, 'test comment', '2024-11-27 16:10'),
(76, 15, 21, 3, 'test comment', '2024-11-27 16:11'),
(77, 16, 21, 3, 'test comment', '2024-11-27 16:12'),
(78, 17, 21, 3, 'test comment', '2024-11-27 16:13'),
(79, 18, 21, 3, 'test comment', '2024-11-27 16:14'),
(80, 19, 21, 3, 'test comment', '2024-11-27 16:15'),
(82, 14, 21, 3, 'test comment', '2024-11-27 16:17'),
(83, 15, 21, 3, 'test comment', '2024-11-27 16:18'),
(84, 16, 21, 3, 'test comment', '2024-11-27 16:19'),
(85, 14, 21, 4, 'test comment', '2024-11-27 16:20'),
(86, 15, 21, 4, 'test comment', '2024-11-27 16:21'),
(87, 16, 21, 4, 'test comment', '2024-11-27 16:22'),
(88, 17, 21, 4, 'test comment', '2024-11-27 16:23'),
(89, 18, 21, 4, 'test comment', '2024-11-27 16:24'),
(90, 19, 21, 4, 'test comment', '2024-11-27 16:25'),
(92, 14, 21, 4, 'test comment', '2024-11-27 16:27'),
(93, 15, 21, 4, 'test comment', '2024-11-27 16:28'),
(94, 16, 21, 4, 'test comment', '2024-11-27 16:29'),
(128, 21, 19, 3, 'test', '2024-11-28 02:13:09'),
(129, 21, 17, 4, 'test', '2024-11-28 02:13:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_vote`
--
ALTER TABLE `user_vote`
  ADD PRIMARY KEY (`id`),
  ADD KEY `voter_fk` (`voter_id`),
  ADD KEY `nominee_fk` (`nominee_id`),
  ADD KEY `category_fk` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_vote`
--
ALTER TABLE `user_vote`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_vote`
--
ALTER TABLE `user_vote`
  ADD CONSTRAINT `category_fk` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nominee_fk` FOREIGN KEY (`nominee_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `voter_fk` FOREIGN KEY (`voter_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
