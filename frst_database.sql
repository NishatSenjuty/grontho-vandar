-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2019 at 08:18 AM
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
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_one` int(11) NOT NULL,
  `user_two` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(2555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `size`, `created_at`, `updated_at`) VALUES
(18, 'Recording123.m4a', '267477', '2018-12-02 15:11:04', '2018-12-02 15:11:04'),
(19, 'projectproblem.docx', '309926', '2018-12-02 15:11:15', '2018-12-02 15:11:15'),
(20, 'projectproblem.pdf', '448154', '2018-12-02 15:11:23', '2018-12-02 15:11:23'),
(21, 'New Text Document (2).txt', '0', '2018-12-02 15:11:30', '2018-12-02 15:11:30'),
(22, 'What-Would-You-Do-With-Your-Freedom.jpg', '82478', '2018-12-02 15:11:39', '2018-12-02 15:11:39'),
(23, 'words-of-a-beautiful-life.jpg', '174598', '2018-12-02 15:16:02', '2018-12-02 15:16:02'),
(24, 'brd.jpg', '73512', '2018-12-03 02:45:50', '2018-12-03 02:45:50'),
(25, 'ice.jpg', '70736', '2018-12-03 03:44:04', '2018-12-03 03:44:04'),
(26, 'cow3.jpg', '154224', '2018-12-09 04:02:29', '2018-12-09 04:02:29'),
(27, 'libertad.jpg', '198043', '2018-12-09 04:06:47', '2018-12-09 04:06:47'),
(28, 'ice.jpg', '70736', '2018-12-09 05:22:11', '2018-12-09 05:22:11');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(3, 1, '1b.jpg', NULL, NULL),
(5, 8, 'book.jpg', NULL, NULL),
(6, 7, 'engnr.jpg', NULL, NULL),
(7, 9, 'islm.jpg', NULL, NULL),
(8, 5, 'hiji.png', NULL, NULL),
(9, 6, 'engl.jpg', NULL, NULL),
(10, 10, 'book3.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'hi', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2018_11_10_052428_create_products_table', 2),
(6, '2018_11_25_190413_create_images_table', 3),
(8, '2015_10_05_110622_create_conversations_table', 4),
(10, '2018_12_01_201017_create_files_table', 5),
(11, '2018_12_05_181945_create_messages_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('tamu92@gmail.com', '$2y$10$2JKHfPH7d6f5xzHmG58Ogu/.on43rvEWgB4cYqGLaWv4p40xCMewW', '2018-11-23 23:24:47'),
('tamu.diu.92@gmail.com', '$2y$10$3qcBNuRGjKk2uhuHuhTKiedOQCmEsk8PMQoIIPC373pZUYbXJorVC', '2018-11-24 09:59:44'),
('sanjitaprome@gmail.com', '$2y$10$3mZzB409Ig7aUtwav0L/JOKbr4ywipzvmNK1cqkFKWcInXbKTxNlO', '2018-11-26 03:41:46');

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'prome alam', 'sanjitaprome@gmail.com', NULL, '$2y$10$jG38ixJ6H.BFuKJaqw90.OnUl3zHX5MeH2c2.rqDbHm/Om3Kcib3S', 'fewcD4sX1oVqOTnyrIt5wrMu58d4uEHeQFVATBBzNoy1GnEMEHEmGjpzvYMB', '2018-11-23 23:39:03', '2018-11-24 10:01:39'),
(3, 'Umme Jannaath tamanna', 'tamu.diu.92@gmail.com', NULL, '$2y$10$QbSuvE1HTM8BGPqZP09B/OYjU5uoRAQAjYGljdgBjlcDLSy6gWJfq', 'd17Ckaqrtp1voEwAd6zPWJdeX16wfKwysZZzl7KhRNvWM7EEKKuXQB6VubsH', '2018-11-24 09:58:25', '2018-11-24 09:58:25'),
(7, 'Innaiya islam', 'admin2@gmail.com', NULL, '$2y$10$TeR9jXCmPejTIlDgr4zhMu85IaAwHZ0HwlXTJhCPLB62RUjgfOcn2', 'mlnUPu7uynUEOwLDDeXBgsz2PDOz4nhFI0xNTxcoTbqFJ0Rksx3oepqRiGeM', '2018-12-08 12:57:28', '2018-12-08 12:57:28'),
(8, '123prome', 'sanjitaprome12@gmail.com', NULL, '$2y$10$x7K0.yQGvzhtryWhVkw79e62SbFvi02OJS9/k2tzQPhK66CWJcG9C', '97vc3Tz9b7Upoxr15MlQihaaWfrtHL7nanIpCRldbGBp9BCnVM5uB6dDMpYn', '2018-12-09 05:25:02', '2018-12-09 05:25:02'),
(9, 'munim', 'shuvo@gmail.com', NULL, '$2y$10$JHZd1/jSwhyNeh1zYl/ttOFN8Fh6bbuPxg7Mu1gFvNPPP/3TfKeUS', '0CPwUuFKaXkAstD9OAm8suzEoN3tR4Lk9HYOE27BpqFsNfN5000OolUutcxW', '2018-12-17 05:49:37', '2018-12-17 05:49:37'),
(10, 'munimkhan', 'shahriar.munim@gmail.com', NULL, '$2y$10$j6zSUpWErrXSrsbhXjLSieaPW9v11dB9Bf21dhIViaKDGTnPwa1NO', 'SBgWi25PNCDXCz87Jw47RrRpldNK28PLEck9L1VhmtPUlkJhRAUdez3Tf3Id', '2018-12-17 06:22:07', '2018-12-17 06:22:07');

-- --------------------------------------------------------

--
-- Table structure for table `values`
--

CREATE TABLE `values` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `result` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
