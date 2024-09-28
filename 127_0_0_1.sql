-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2024 at 06:39 AM
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
-- Database: `webdatabase`
--
CREATE DATABASE IF NOT EXISTS `webdatabase` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `webdatabase`;

-- --------------------------------------------------------

--
-- Table structure for table `alerts`
--

CREATE TABLE `alerts` (
  `id` int(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `web_url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alerts`
--

INSERT INTO `alerts` (`id`, `email`, `web_url`, `created_at`) VALUES
(1, 'sbhumi92083@gmail.com', 'http://ecommerce-app-ten-blue.vercel.app', '2024-09-26 17:28:48'),
(2, 'sbhumi92083@gmail.com', 'www.google.com', '2024-09-26 17:31:58'),
(3, 'sahu92083@gmail.com', 'www.google.com', '2024-09-26 17:35:05'),
(4, 'sahu92083@gmail.com', 'www.google.com', '2024-09-26 17:38:42'),
(5, 'sahu92083@gmail.com', 'www.google.com', '2024-09-26 17:41:48'),
(6, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-26 17:42:34'),
(7, 'sbhumi92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-26 17:47:06'),
(8, 'sbhumi92083@gmail.com', 'www.google.com', '2024-09-26 17:51:54'),
(9, 'sbhumi92083@gmail.com', 'www.google.com', '2024-09-26 17:52:57'),
(10, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-26 18:01:26'),
(11, 'sbhumi92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-26 18:07:16'),
(12, 'sahu92083@gmail.com', 'www.google.com', '2024-09-26 18:11:56'),
(13, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-26 18:12:27'),
(14, 'sbhumi92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-26 18:14:53'),
(15, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-26 18:24:00'),
(16, 'sahu92083@gmail.com', 'https://sourceforge.net/projects/xampp/', '2024-09-26 18:24:34'),
(17, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-26 18:25:07'),
(18, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-26 18:31:16'),
(19, 'sahubhumika1234@gmail.com', 'www.instagram.com', '2024-09-26 18:40:27'),
(20, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-26 18:48:50'),
(21, 'sahubhumi@gmail.com', 'https://www.example.com/404-not-found', '2024-09-26 18:51:48'),
(22, 'sahu92083@gmail.com', 'https://www.cana.com/en_in/help/ign-up-log-in/', '2024-09-26 18:54:23'),
(23, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-26 19:05:57'),
(24, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 01:43:52'),
(25, 'sbhumi92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 01:50:09'),
(26, 'sbhumi92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 01:50:34'),
(27, 'sbhumi92083@gmail.com', 'http://www.thatssiteisdown.com ', '2024-09-27 01:58:35'),
(28, 'sbhumi92083@gmail.com', 'www.google.com', '2024-09-27 02:02:14'),
(29, 'sahu92083@gmail.com', 'www.google.com', '2024-09-27 03:48:45'),
(30, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 04:35:33'),
(31, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 04:36:56'),
(32, 'sbhumi92083@gmail.com', 'https://sourceforge.net/projects/xampp/', '2024-09-27 04:39:18'),
(33, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 04:46:12'),
(34, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 04:48:33'),
(35, 'sbhumi92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 04:58:07'),
(36, 'brenuja19@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 05:07:50'),
(37, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 06:45:07'),
(38, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 06:46:47'),
(39, 'sbhumi92083@gmail.com', 'http://ecommerce-app-ten-blue.vercel.app', '2024-09-27 07:10:36'),
(40, 'sbhumi92083@gmail.com', 'http://ecommerce-app-ten-blue.vercel.app', '2024-09-27 07:11:44'),
(41, 'sbhumi92083@gmail.com', 'http://ecommerce-app-ten-blue.vercel.app', '2024-09-27 07:12:10'),
(42, 'sbhumi92083@gmail.com', 'www.google.com', '2024-09-27 07:16:31'),
(43, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 07:32:40'),
(44, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 07:32:43'),
(45, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 07:32:52'),
(46, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 07:34:40'),
(47, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 07:34:43'),
(48, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 07:51:39'),
(49, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 07:54:30'),
(50, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 08:07:40'),
(51, 'sahu92083@gmail.com', 'https://sourceforge.net/projects/xampp/', '2024-09-27 08:08:35'),
(52, 'sahu92083@gmail.com', 'www.google.com', '2024-09-27 08:08:55'),
(53, 'sahu92083@gmail.com', 'https://sourceforge.net/projects/xampp/', '2024-09-27 08:09:50'),
(54, 'sahu92083@gmail.com', 'https://www.canva.com/en_in/help/sign-up-log-in/', '2024-09-27 08:10:32'),
(55, 'sbhumi92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 08:19:17'),
(56, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 10:04:38'),
(57, 'sbhumi92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 10:05:03'),
(58, 'sahu92083@gmail.com', 'http://ecommerce-app-ten-blue.vercel.app', '2024-09-27 10:14:58'),
(59, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 10:15:15'),
(60, 'sbhumi92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 10:15:58'),
(61, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 10:18:51'),
(62, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 10:20:57'),
(63, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 10:33:32'),
(64, 'sahu92083@gmail.com', 'http://ecommerce-app-ten-blue.vercel.app', '2024-09-27 11:27:19'),
(65, 'sbhumi92083@gmail.com', 'https://sourceforge.net/projects/xampp/', '2024-09-27 11:28:45'),
(66, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 12:08:32'),
(67, 'sahu92083@gmail.com', 'www.google.com', '2024-09-27 12:15:52'),
(68, 'sahu92083@gmail.com', 'http://ecommerce-app-ten-blue.vercel.app', '2024-09-27 12:31:45'),
(69, 'sahu92083@gmail.com', 'http://ecommerce-app-ten-blue.vercel.app', '2024-09-27 12:33:45'),
(70, 'sahu92083@gmail.com', 'www.google.com', '2024-09-27 12:35:53'),
(71, 'sahu92083@gmail.com', 'http://ecommerce-app-ten-blue.vercel.app', '2024-09-27 12:49:01'),
(72, 'sahu92083@gmail.com', 'http://ecommerce-app-ten-blue.vercel.app', '2024-09-27 12:49:55'),
(73, 'sahu92083@gmail.com', 'www.google.com', '2024-09-27 12:51:47'),
(74, 'sahu92083@gmail.com', 'https://sourceforge.net/projects/xampp/', '2024-09-27 13:09:06'),
(75, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 16:09:58'),
(76, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 16:36:43'),
(77, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 16:52:41'),
(78, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 16:54:06'),
(79, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 17:35:58'),
(80, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 17:36:06'),
(81, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 18:37:27'),
(82, 'sahu92083@gmail.com', 'http://ecommerce-app-ten-blue.vercel.app', '2024-09-27 18:38:25'),
(83, 'sahu92083@gmail.com', 'www.google.com', '2024-09-27 18:38:40'),
(84, 'sahu92083@gmail.com', 'https://ecommerce-app-ten-blue.vercel.app/', '2024-09-27 18:39:21'),
(85, 'sahu92083@gmail.com', 'www.google.com', '2024-09-27 18:39:43'),
(86, 'sahu92083@gmail.com', 'https://chatgpt.com/', '2024-09-27 18:40:11'),
(87, 'sahu92083@gmail.com', 'https://fonts.google.com/', '2024-09-27 18:41:06'),
(88, 'sahu92083@gmail.com', 'https://www.cssmatic.com/box-shadow', '2024-09-27 18:42:25'),
(89, 'renuja2003@gmail.com', 'http://example.thiswebsitedoesnotexist.com', '2024-09-27 18:46:15'),
(90, 'renuja2003@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 18:47:07'),
(91, 'renujab2003@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 18:48:18'),
(92, 'brenuja19@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 18:51:14'),
(93, 'brenuja19@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 18:57:41'),
(94, 'brenuja19@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 19:00:12'),
(95, 'brenuja19@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 19:03:10'),
(96, 'brenuja19@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 19:05:30'),
(97, 'brenuja19@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 19:06:33'),
(98, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 19:07:23'),
(99, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 19:12:32'),
(100, 'sahu92083@gmail.com', 'www.google.com', '2024-09-27 19:13:04'),
(101, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 19:19:16'),
(102, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 20:00:56'),
(103, 'sahu92083@gmail.com', 'www.google.com', '2024-09-27 20:11:23'),
(104, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 20:12:52'),
(105, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 20:14:16'),
(106, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-27 20:24:04'),
(107, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-28 01:15:07'),
(108, 'sahu92083@gmail.com', 'www.google.com', '2024-09-28 01:31:05'),
(109, 'sahu92083@gmail.com', 'www.google.com', '2024-09-28 01:41:10'),
(110, 'sahu92083@gmail.com', 'https://www.example.com/404-not-found', '2024-09-28 01:41:33'),
(111, 'sahu92083@gmail.com', 'www.google.com', '2024-09-28 03:12:49'),
(112, 'sahu92083@gmail.com', 'https://www.canva.com/en_in/help/sign-up-log-in/', '2024-09-28 03:16:49'),
(113, 'sahu92083@gmail.com', 'https://www.canva.com/en_in/help/sign-up-log-in/', '2024-09-28 03:18:35'),
(114, 'sbhumi92083@gmail.com', 'www.google.com', '2024-09-28 04:20:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alerts`
--
ALTER TABLE `alerts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alerts`
--
ALTER TABLE `alerts`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
