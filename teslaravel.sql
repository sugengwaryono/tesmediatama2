-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2022 at 07:34 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teslaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_05_17_215512_create_cities_table', 1),
('2016_05_17_222223_create_merek_table', 1),
('2016_05_17_230359_create_tipe_table', 1),
('2016_05_18_190008_create_design_table', 1),
('2016_05_18_200434_create_spesifikasi_mobil_baru_table', 1),
('2016_05_19_015753_create_dimensi_table', 1),
('2016_05_19_021804_create_mesin_table', 1),
('2016_05_19_022620_create_transmisi_table', 1),
('2016_05_19_022934_create_kaki_table', 1),
('2016_05_21_114656_create_feature_interior_exterior_table', 1),
('2016_05_21_173529_create_feature_keamanan_kelengkapan_table', 1),
('2016_05_21_221320_create_galleries_table', 1),
('2016_05_22_073612_create_categories_table', 1),
('2016_05_23_140922_create_posts_table', 1),
('2016_05_24_034625_create_sosial_media_table', 1),
('2016_06_01_111546_create_slot_mobil_baru_table', 1),
('2016_06_03_050955_create_price_mobil_baru_table', 1),
('2016_06_04_101505_create_jobs_table', 1),
('2016_06_04_101604_create_failed_jobs_table', 1),
('2016_06_06_080314_create_harga_slot_table', 1),
('2016_06_07_052656_create_banks_table', 1),
('2016_06_07_055641_create_deposit_table', 1),
('2016_06_07_144346_create_rekening_tujuan_table', 1),
('2016_06_08_121547_create_cash_books_table', 1),
('2016_06_13_202847_create_mobil_bekas_table', 1),
('2016_07_21_152534_create_request_admins_table', 1),
('2016_09_13_182736_create_feature_interior_texts_table', 1),
('2016_09_13_212805_create_keamanan_texts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `post_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `post_foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no-foto.png',
  `post_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'draft',
  `post_tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request_admins`
--

CREATE TABLE `request_admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `notes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video_id` int(11) NOT NULL,
  `acc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sisa_waktu` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `request_admins`
--

INSERT INTO `request_admins` (`id`, `user_id`, `notes`, `video_id`, `acc`, `created_at`, `updated_at`, `sisa_waktu`) VALUES
(1, 2, 'tes', 1, NULL, '2022-07-30 14:38:34', '2022-07-30 14:38:34', 0),
(2, 2, 'ss', 2, '1', '2022-07-30 14:41:45', '2022-07-30 14:41:45', 0),
(3, 2, '1', 3, NULL, '2022-07-30 14:44:35', '2022-07-30 14:44:35', 0),
(4, 2, 'dadr', 2, NULL, '2022-07-30 14:52:31', '2022-07-30 14:52:31', 0),
(5, 2, 'mohon diterima', 1, NULL, '2022-07-31 04:33:48', '2022-07-31 04:33:48', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `balance` decimal(15,2) NOT NULL DEFAULT '0.00',
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no-foto.png',
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_info` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user',
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `confirmation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `username`, `facebook_id`, `balance`, `foto`, `address`, `phone`, `website`, `user_info`, `role`, `confirmed`, `confirmation_code`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Otomotif', 'admin@gmail.com', '$2a$12$S6vq6w04etxbN6i7KnSR7uIgLv6yKDTxPFuTlO0qmsZRYs3UIUEIu', 'admin', NULL, '0.00', 'no-foto.png', NULL, '082155000851', NULL, NULL, 'admin', 1, NULL, 'DNjFK6ymBwRMh1ayJkahqXKelkFzibfz5v0JU80bY2Z6FSjOkszrKzqCEakC', NULL, '2022-07-31 05:19:29'),
(2, 'Sugeng Waryono', 'sugengwaryono@gmail.com', '$2y$10$2yvaysHOxWnBzXQbxftrveJoYSp7tYXWUnihnoKPIlvAVEGawOqsu', 'Sugeng', NULL, '0.00', 'no-foto.png', 'jl. saksake no 5', '083865290500', 'heregedek.come', NULL, 'user', 1, NULL, 'QxhLTiC75V2vdRcjT0LeWVCJuOqRobQpkQwTdDhUvT4fmnsSOsIyCWDZQySV', '2022-07-29 08:28:29', '2022-07-31 05:20:15'),
(3, 'galuh', 'galuhputri@gmail.com', '$2y$10$cdQOcyWOSk3koAvpLD63tuLGv/9doRWIOtWAImTaf9sCQHp7HDAv.', 'galuh', NULL, '0.00', 'no-foto.png', 'advava', '0917166', NULL, NULL, 'user', 1, NULL, NULL, '2022-07-30 12:46:04', '2022-07-30 12:56:54');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(1, 'video12', 'https://www.youtube.com/embed/tgbNymZ7vqY', '2022-07-30 12:16:11', '2022-07-30 05:51:26'),
(2, 'video1', 'https://www.youtube.com/embed/sop-9cn9kvs', '2022-07-30 12:53:03', '2022-07-30 12:53:03'),
(3, 'video3', 'https://www.youtube.com/embed/LVueE0wTuv8', '2022-07-30 12:56:26', '2022-07-30 12:56:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_post_slug_unique` (`post_slug`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indexes for table `request_admins`
--
ALTER TABLE `request_admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `request_admins_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_facebook_id_unique` (`facebook_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `request_admins`
--
ALTER TABLE `request_admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
