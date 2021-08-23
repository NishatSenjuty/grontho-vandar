-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2019 at 08:49 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frst_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `catagory_id` int(11) NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `offer_price` int(11) DEFAULT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `catagory_id`, `author`, `title`, `description`, `slug`, `price`, `quantity`, `offer_price`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 'Science', 'This book include ........', 'science', 100, 1, NULL, 1, '2018-11-24 14:19:15', '2018-11-24 14:19:15'),
(5, 1, '1', 'হিজিবিজি', 'হুমায়ুন আহমেদ\r\nবাংলা একাডেমি', 'Hijibiji', 200, 1, NULL, 1, '2018-11-24 14:41:34', '2018-11-24 14:41:34'),
(6, 1, '1', 'English', 'English literature book', 'english', 230, 1, NULL, 1, '2018-11-25 14:05:44', '2018-11-25 14:05:44'),
(7, 1, '1', 'Engineering', 'This is a enguiineering book', 'engineering', 200, 2, NULL, 1, '2018-11-25 14:50:28', '2018-11-25 14:50:28'),
(8, 1, '1', 'Business Studies', 'blah blah blah..........................................', 'business-studies', 1000, 1, NULL, 1, '2018-11-25 15:31:11', '2018-11-25 15:31:11'),
(9, 1, '1', 'Islamic', 'jjjsass', 'islamic', 250, 1, NULL, 1, '2018-11-25 15:55:47', '2018-11-25 15:55:47'),
(10, 1, '1', 'English', 'ghskdsjkfhdsjkhfjdkgh', 'english', 200, 1, NULL, 1, '2018-12-09 05:53:55', '2018-12-09 05:53:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
