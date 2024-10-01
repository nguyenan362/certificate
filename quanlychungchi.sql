-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2024 at 07:00 PM
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
-- Database: `quanlychungchi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `certificateName` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `validityPeriod` int(11) DEFAULT NULL,
  `certificateHash` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `course_id`, `certificateName`, `description`, `validityPeriod`, `certificateHash`, `created_at`, `updated_at`) VALUES
(26, 16, 'HTML', 'Mô tả', 360, '25f9e794323b453885f5181f1b624d0b', '2024-09-29 09:53:32', '2024-09-29 09:53:32'),
(27, 16, 'CSS', 'Mô tả', 360, '25f9e794323b453885f5181f1b624d0b', '2024-09-29 09:53:39', '2024-09-29 09:53:39'),
(28, 16, 'JS', 'Mô tả', 360, '25f9e794323b453885f5181f1b624d0b', '2024-09-29 09:53:48', '2024-09-29 09:53:48'),
(29, 16, 'React', 'Mô tả', 360, '25f9e794323b453885f5181f1b624d0b', '2024-09-29 09:54:04', '2024-09-29 09:54:04'),
(30, 16, 'Laravel', 'Mô tả', 360, '25f9e794323b453885f5181f1b624d0b', '2024-09-29 09:54:26', '2024-09-29 09:54:26'),
(31, 16, 'Django', 'Mô tả', 360, '25f9e794323b453885f5181f1b624d0b', '2024-09-29 09:54:35', '2024-09-29 09:54:35'),
(32, 19, 'topic1', 'Mô tả', 360, '25f9e794323b453885f5181f1b624d0b', '2024-09-29 09:54:48', '2024-09-29 09:54:48'),
(33, 19, 'topic2', 'Mô tả', 360, '25f9e794323b453885f5181f1b624d0b', '2024-09-29 09:54:55', '2024-09-29 09:54:55'),
(34, 19, 'topic3', 'Mô tả', 360, '25f9e794323b453885f5181f1b624d0b', '2024-09-29 09:55:15', '2024-09-29 09:55:15'),
(35, 19, 'topic4', 'Mô tả', 360, '25f9e794323b453885f5181f1b624d0b', '2024-09-29 09:55:25', '2024-09-29 09:55:25'),
(36, 19, 'topic5', 'Mô tả', 360, '25f9e794323b453885f5181f1b624d0b', '2024-09-29 09:55:40', '2024-09-29 09:55:40'),
(37, 19, 'topic6', 'Mô tả', 360, '25f9e794323b453885f5181f1b624d0b', '2024-09-29 09:55:50', '2024-09-29 09:55:50'),
(38, 20, 'Toeic', 'Mô tả', 360, '25f9e794323b453885f5181f1b624d0b', '2024-09-29 09:56:01', '2024-09-29 09:56:01'),
(39, 20, 'Ielts', 'Mô tả', 360, '25f9e794323b453885f5181f1b624d0b', '2024-09-29 09:56:11', '2024-09-29 09:56:11'),
(40, 20, 'Toefl', 'Mô tả', 360, '25f9e794323b453885f5181f1b624d0b', '2024-09-29 09:56:47', '2024-09-29 09:56:47'),
(41, 22, 'N1', 'Mô tả', 360, '25f9e794323b453885f5181f1b624d0b', '2024-09-29 09:56:57', '2024-09-29 09:56:57'),
(42, 22, 'N2', 'Mô tả', 360, '25f9e794323b453885f5181f1b624d0b', '2024-09-29 09:57:12', '2024-09-29 09:57:12'),
(43, 21, 'HSK1', 'Mô tả', 360, '25f9e794323b453885f5181f1b624d0b', '2024-09-29 09:57:21', '2024-09-29 09:57:21'),
(44, 18, 'Word', 'Mô tả', 360, '25f9e794323b453885f5181f1b624d0b', '2024-09-29 09:57:34', '2024-09-29 09:57:34'),
(45, 17, 'Quản trị dự án', 'Mô tả', 360, '25f9e794323b453885f5181f1b624d0b', '2024-09-29 09:58:02', '2024-09-29 09:58:02');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `courseName` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `courseName`, `description`, `duration`, `created_at`, `updated_at`) VALUES
(16, 'Công nghệ thông tin', 'Mô tả', 360, '2024-09-29 09:51:38', '2024-09-29 09:51:38'),
(17, 'Kinh Doanh', 'Mô tả', 360, '2024-09-29 09:51:52', '2024-09-29 09:51:52'),
(18, 'Tin học văn phòng', 'Mô tả', 360, '2024-09-29 09:52:13', '2024-09-29 09:52:13'),
(19, 'Tiếng Hàn', 'Mô tả', 360, '2024-09-29 09:52:23', '2024-09-29 09:52:23'),
(20, 'Tiếng Anh', 'Mô tả', 360, '2024-09-29 09:52:31', '2024-09-29 09:52:31'),
(21, 'Tiếng Trung', 'Mô tả', 360, '2024-09-29 09:52:53', '2024-09-29 09:52:53'),
(22, 'Tiếng Nhật', 'Mô tả', 360, '2024-09-29 09:53:10', '2024-09-29 09:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `course_certificates`
--

CREATE TABLE `course_certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `certificate_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_06_07_011652_create_google_id', 1),
(5, '2024_06_19_011550_create_personal_access_tokens_table', 1),
(6, '2024_09_26_123505_create_all_tables', 1),
(7, '2024_09_27_070249_add_course_id_to_certificates_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('TcH1QskpXblzJUTeAI0KK9tNAxqkvomYbshorllY', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSnk2cElSR1lLUnAycTVUVXN0SVFUOVpRMUt5ZlVRNjhQb0VZenFyZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9teS1jZXJ0aWZpY2F0ZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1727629166);

-- --------------------------------------------------------

--
-- Table structure for table `upload_certificates`
--

CREATE TABLE `upload_certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `certificate_id` bigint(20) UNSIGNED NOT NULL,
  `issueDate` date DEFAULT NULL,
  `expiryDate` date DEFAULT NULL,
  `certificateNumber` varchar(255) DEFAULT NULL,
  `uploadedHash` varchar(255) DEFAULT NULL,
  `verificationStatus` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upload_certificates`
--

INSERT INTO `upload_certificates` (`id`, `user_id`, `certificate_id`, `issueDate`, `expiryDate`, `certificateNumber`, `uploadedHash`, `verificationStatus`, `created_at`, `updated_at`) VALUES
(16, 2, 26, '2024-09-29', '2025-09-29', '1', '25f9e794323b453885f5181f1b624d0b', 'Confirmed', '2024-09-29 09:59:18', '2024-09-29 09:59:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `google_id`) VALUES
(1, 'ADMIN', 'admin@example.com', 1, NULL, '$2y$12$Th2yARCIVzWI6t2JTE54zOyV00y3VVoYoxImrRY3onLMaht2lHi6O', NULL, '2024-09-26 23:54:17', '2024-09-26 23:54:17', NULL),
(2, 'Trần Duy Bim', 'tranduybim@gmail.com', 0, NULL, '$2y$12$PrQ4ebS.Yan8nADDVbvBduBCD7mvidZbV65IDqzuTGivDtznTWUvK', NULL, '2024-09-27 00:09:33', '2024-09-27 00:09:33', NULL),
(4, 'Phong', 'phongvu@gmail.com', 0, NULL, '$2y$12$t4pEIJ4PGIMhZaZ85NI25.DTpUK.IF1OZZFMzA2dUHvEHnEzCXHha', NULL, '2024-09-28 22:36:12', '2024-09-28 22:36:12', NULL),
(5, 'Kiên', 'kien@gmail.com', 0, NULL, '$2y$12$fiKtnR/2CtqxVUD2WOlF6OXjxdKxdwl8xZ8XpgMJ2GjIuvEQrCu.u', NULL, '2024-09-28 22:37:58', '2024-09-28 22:37:58', NULL),
(6, 'Duy Bim', 'tranduybim2906@gmail.com', 0, NULL, '$2y$12$8RZmOgY85Hfj70fSoiMxeuyRMBmzUMb/mgvXT8Iy.N81Rzh76aGYW', NULL, '2024-09-29 09:48:54', '2024-09-29 09:48:54', '112939219154688804607');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `certificates_course_id_foreign` (`course_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_certificates`
--
ALTER TABLE `course_certificates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_certificates_course_id_certificate_id_unique` (`course_id`,`certificate_id`),
  ADD KEY `course_certificates_certificate_id_foreign` (`certificate_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `upload_certificates`
--
ALTER TABLE `upload_certificates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `upload_certificates_user_id_foreign` (`user_id`),
  ADD KEY `upload_certificates_certificate_id_foreign` (`certificate_id`);

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
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `course_certificates`
--
ALTER TABLE `course_certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upload_certificates`
--
ALTER TABLE `upload_certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `certificates`
--
ALTER TABLE `certificates`
  ADD CONSTRAINT `certificates_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_certificates`
--
ALTER TABLE `course_certificates`
  ADD CONSTRAINT `course_certificates_certificate_id_foreign` FOREIGN KEY (`certificate_id`) REFERENCES `certificates` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_certificates_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `upload_certificates`
--
ALTER TABLE `upload_certificates`
  ADD CONSTRAINT `upload_certificates_certificate_id_foreign` FOREIGN KEY (`certificate_id`) REFERENCES `certificates` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `upload_certificates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
