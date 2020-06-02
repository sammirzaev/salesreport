-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2020 at 09:19 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `report`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Branding', '2020-02-07 10:23:13', '2020-02-07 17:59:37'),
(5, 'Media and Marketing', '2020-02-07 17:59:52', '2020-02-07 17:59:52'),
(6, 'SEO Optimization', '2020-02-07 18:00:13', '2020-02-07 18:00:19'),
(7, 'Web Development', '2020-02-07 18:01:08', '2020-02-07 18:01:08'),
(9, 'Media Solutions', '2020-02-07 18:03:53', '2020-02-08 09:45:43');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `industry` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phnumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seller` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `status_id`, `category_id`, `date`, `company`, `industry`, `address`, `website`, `fullName`, `position`, `email`, `phnumber`, `subject`, `description`, `seller`, `created_at`, `updated_at`) VALUES
(1, 4, 1, '01/10/2020', 'Bla Bla', 'beauty saloon', 'Abu Dhbai Bla bla address', 'blabla.com', 'John Doe', 'Director', 'bla@ex.com', '+9715558888', 'Need to make brand logo', 'Please kindly help me about branding my logo', 'Sam', '2020-02-16 09:20:47', '2020-02-27 04:02:48'),
(2, 3, 5, '01/09/2020', 'ffffffffff', 'ffffffffffff', 'fffffffffff', 'ffffffffffff', 'fffffffffff', 'ffffffffffff', 'jon@ex.com', '+9715558888', 'Need to make brand logo', 'ssssssssssssssss', 'Sam', '2020-02-17 08:24:07', '2020-02-27 04:02:59'),
(3, 6, 6, '02/12/2020', 'Bla Bla', 'beauty saloon', 'Hamdan Street', 'blabla.com', 'John Doe', 'Director', 'jon@ex.com', '+9715558888', 'Need to make brand logo', 'sasdasdsa', 'website', '2020-02-18 06:34:32', '2020-02-24 01:44:48'),
(4, 3, 1, '02/13/2020', 'Bla Bla', 'beauty saloon', 'alksjdksajdsad', 'blabla.com', 'John Doe', 'ffffffffffff', 'fan@gon.ci', '+9715558888', 'Need to make brand logo', 'ASASDASD', 'website', '2020-02-18 12:54:28', '2020-02-24 01:44:28'),
(5, 3, 5, '02/15/2020', 'Something Cool', 'beauty saloon', 'Hamdan Street', 'blabla.com', 'John Does', 'Director', 's.mirzayev@9yards.ae', '024445566', 'Need to make brand logo', 'fffffdddddddeeeeeeerrrrrrrrr', 'website', '2020-02-19 12:53:37', '2020-02-24 01:44:38'),
(7, 5, 9, '02/16/2020', 'Fire', 'Extenguisher', 'Dubai', 'eaxafire.ae', 'Jhon Wick', 'Director', 'jon.wick@fire.com', '+9715558899', 'Media Subject', 'Web Requester i need my website high traffic', 'Website', '2020-02-26 05:06:30', '2020-02-26 05:06:30'),
(8, 4, 7, '02/26/2020', 'aksjdkajdaksjd', 'sdkjfskdfjlksd', 'dsjfsdjfksjdf', 'LAKSLAKSDLAKSD', 'LDKFLKFLK', 'LXKLXKFD', 'sdk@sldk.ae', '5645646464', 'sdfjsdkfjsdf', 'skdjfskdjfsdjflkdsjflkdjflsdfjsdf', 'Sam', '2020-02-26 08:23:28', '2020-02-26 05:09:31'),
(9, 4, 5, '02/27/2020', ';asld;asd', 'asdasdasd', 'asdasdasd', 'asdsadas', 'dasdasdsa', 'dasdsadasdasd', 'fan@gon.ci', '3565656565', 'asdasdasd', 'asdasdasdsadasdsa', 'website', '2020-02-27 05:10:49', '2020-02-26 05:10:49');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2020_02_06_045628_create_roles_table', 1),
(13, '2020_02_07_215315_create-table-categories', 2),
(16, '2020_02_09_080957_create_statuses_table', 3),
(17, '2020_02_09_081244_create_inquries_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'administrator', '2020-02-07 13:13:23', '2020-02-07 10:26:12'),
(2, 'editor', '2020-02-06 13:13:32', '2020-02-07 12:16:34');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Completed', '2020-01-10 02:18:29', '2020-01-10 02:18:29'),
(4, 'Pending', '2020-01-10 02:18:35', '2020-02-10 02:18:35'),
(5, 'Rejected', '2020-02-10 02:18:44', '2020-02-10 02:18:44'),
(6, 'In Process', '2020-02-17 06:13:27', '2020-01-17 06:13:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `is_active`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Sam Mirzayev', 's.mirzayev@9yards.ae', NULL, '$2y$10$uqU9CQnuGkxR89W65IY71O8tKjEPC.NBkBxYk9JKqvVu3TugevYLS', 'f11H1uxwj8VXtDmUF6A8M1X3Y3gBV2TXsVLaTcDCp2yGIHX1pwRopDJ8YPB9', '2020-02-06 08:11:57', '2020-03-02 01:15:22'),
(8, 2, 1, 'Grace Hiponia', 'g.hiponia@9yards.ae', NULL, '$2y$10$.9zBMHoGZLAvTwCDx3xAYONXPvVL3OJ4PFKxzePyWuH5J965fwQie', NULL, '2020-02-27 05:33:37', '2020-02-27 05:33:37'),
(9, 2, 1, 'Admin', 'admin@9yards.ae', NULL, '$2y$10$9vwR83CEr3zSEqkGwV7xE.LY0lQuT5UDaDg2nJgYzY8t88h3JpX9q', 'gh0Gs9MAkKoIP0sd8qtkPj1AFnYr9MPaJA0EXWRLsOJrMmhQKdx90P3q3Ep1', '2020-02-27 05:34:57', '2020-03-02 01:15:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inquiries_status_id_index` (`status_id`),
  ADD KEY `inquiries_category_id_index` (`category_id`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
