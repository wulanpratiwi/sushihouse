-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 12:49 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akses` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `akses`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 'admin@gmail.com', NULL, '$2y$10$ki3EMGipoCQJqaGnBz6dH.i8EiOprL1VdlX/m54GVhH0o33SC18Z.', 'ADMIN', NULL, '2020-04-13 10:49:47', '2020-04-13 10:49:47'),
(4, 'Adam', 'adam.026114@gmail.com', NULL, '$2y$10$OgA/yi4GG9Tn/bPGLKsmgue5G8BZKN8xIJ4Duhev3QNM61Hw6IXsm', 'MEMBER', NULL, '2020-04-14 00:18:28', '2020-04-14 00:18:28'),
(5, 'sasa', 'sasa@gmail.com', NULL, '$2y$10$iNrgqdlvotUOgaCXsw4DQOREu0NT/QZkvtNCjaYtFqkwi3GrpO9xW', 'MEMBER', NULL, '2020-04-14 05:41:17', '2020-04-14 05:41:17'),
(6, 'arya', 'arya@gmail.com', NULL, '$2y$10$HPOk8Y2bTT5gkybo37ijduXbR2FZqJiFrtE9liGzsE8hozLMUC1Si', 'akses', NULL, '2020-04-14 05:41:56', '2020-04-14 05:41:56'),
(7, 'arif', 'arif@gmail.com', NULL, '$2y$10$puCc3lyV.xiH5jdemnI5e.G6MqjYDURUdGbEKBjXS7ThQHj7qW7x6', 'ADMIN', NULL, '2020-04-14 05:43:09', '2020-04-14 05:43:09'),
(8, 'Ayu Lestari', 'ayu@gmail.com', NULL, '$2y$10$6KfchgEI1EPuaIHSgrPpSOQxzUGm8H.1fbTa0V7nH.nRrw4yDsrKW', 'MEMBER', NULL, '2020-04-15 03:45:50', '2020-04-15 03:45:50'),
(9, 'andi', 'andi123@gmail.com', NULL, '$2y$10$j0W0M7uSbcMxZHh4GGO7U.MnrCnA/4exXP892CQaih14o5nFF2r4q', 'MEMBER', NULL, '2020-04-16 00:49:02', '2020-04-16 00:49:02'),
(10, 'angga', 'angga@gmail.com', NULL, '$2y$10$1IaeFgMNWXTHO8uHquf90.tCIlC1zdVTdT23P7EHuCX5DiOGct/Ne', 'MEMBER', NULL, '2020-04-16 01:03:51', '2020-04-16 01:03:51'),
(11, 'nita', 'nita@gmail.com', NULL, '$2y$10$9gMiEGFQISjiHc3Nci4IbOzHn/r9.6SG.S2Z.IX95590agfoEq8RK', 'MEMBER', NULL, '2020-04-16 01:07:27', '2020-04-16 01:07:27'),
(12, 'Muhammad Firman', 'firman123@gmail.com', NULL, '$2y$10$aWVZGMNmjCTCv8WN5Z9FNedQUHWjSV43M80vUnykHemgdR0d7LerS', 'MEMBER', NULL, '2020-04-16 03:52:51', '2020-04-16 03:52:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
