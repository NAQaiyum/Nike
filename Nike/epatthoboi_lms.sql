-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
-- Generation Time: May 11, 2024 at 02:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epatthoboi_lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `limit` double DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `subtitle`, `thumbnail`, `cover`, `code`, `limit`, `start`, `end`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Overcoming Barriers', NULL, 'uploads/course/2041869987Overcoming Barriers.jpg', 'uploads/slider/151193715lms-1.1.jpg', 'vOWBxj', NULL, NULL, NULL, 1, '2024-04-28 00:45:36', '2024-04-30 11:47:06'),
(5, 'Building Skills', NULL, 'uploads/course/216876255Building Skills.jpg', NULL, '1PHrg7', NULL, NULL, NULL, 1, '2024-04-28 00:47:12', '2024-04-30 11:48:35'),
(6, 'Fitting to the Role', NULL, 'uploads/course/1127982420Fitting to the Role.png', NULL, 'aNFqDu', NULL, NULL, NULL, 1, '2024-04-28 00:51:27', '2024-04-30 11:50:28');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `div_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `title_bn` varchar(255) DEFAULT NULL,
  `short` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `div_id`, `image`, `title_en`, `title_bn`, `short`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'Comilla', 'কুমিল্লা', 'null', NULL, NULL),
(2, 1, NULL, 'Feni', 'ফেনী', 'null', NULL, NULL),
(3, 1, NULL, 'Brahmanbaria', 'ব্রাহ্মণবাড়িয়া', 'null', NULL, NULL),
(4, 1, NULL, 'Rangamati', 'রাঙ্গামাটি', 'null', NULL, NULL),
(5, 1, NULL, 'Noakhali', 'নোয়াখালী', 'null', NULL, NULL),
(6, 1, NULL, 'Chandpur', 'চাঁদপুর', 'null', NULL, NULL),
(7, 1, NULL, 'Lakshmipur', 'লক্ষ্মীপুর', 'null', NULL, NULL),
(8, 1, NULL, 'Chattogram', 'চট্টগ্রাম', 'null', NULL, NULL),
(9, 1, NULL, 'Coxsbazar', 'কক্সবাজার', 'null', NULL, NULL),
(10, 1, NULL, 'Khagrachhari', 'খাগড়াছড়ি', 'null', NULL, NULL),
(11, 1, NULL, 'Bandarban', 'বান্দরবান', 'null', NULL, NULL),
(12, 2, NULL, 'Sirajganj', 'সিরাজগঞ্জ', 'null', NULL, NULL),
(13, 2, NULL, 'Pabna', 'পাবনা', 'null', NULL, NULL),
(14, 2, NULL, 'Bogura', 'বগুড়া', 'null', NULL, NULL),
(15, 2, NULL, 'Rajshahi', 'রাজশাহী', 'null', NULL, NULL),
(16, 2, NULL, 'Natore', 'নাটোর', 'null', NULL, NULL),
(17, 2, NULL, 'Joypurhat', 'জয়পুরহাট', 'null', NULL, NULL),
(18, 2, NULL, 'Chapainawabganj', 'চাঁপাইনবাবগঞ্জ', 'null', NULL, NULL),
(19, 2, NULL, 'Naogaon', 'নওগাঁ', 'null', NULL, NULL),
(20, 3, NULL, 'Jashore', 'যশোর', 'null', NULL, NULL),
(21, 3, NULL, 'Satkhira', 'সাতক্ষীরা', 'null', NULL, NULL),
(22, 3, NULL, 'Meherpur', 'মেহেরপুর', 'null', NULL, NULL),
(23, 3, NULL, 'Narail', 'নড়াইল', 'null', NULL, NULL),
(24, 3, NULL, 'Chuadanga', 'চুয়াডাঙ্গা', 'null', NULL, NULL),
(25, 3, NULL, 'Kushtia', 'কুষ্টিয়া', 'null', NULL, NULL),
(26, 3, NULL, 'Magura', 'মাগুরা', 'null', NULL, NULL),
(27, 3, NULL, 'Khulna', 'খুলনা', 'null', NULL, NULL),
(28, 3, NULL, 'Bagerhat', 'বাগেরহাট', 'null', NULL, NULL),
(29, 3, NULL, 'Jhenaidah', 'ঝিনাইদহ', 'null', NULL, NULL),
(30, 4, NULL, 'Jhalakathi', 'ঝালকাঠি', 'null', NULL, NULL),
(31, 4, NULL, 'Patuakhali', 'পটুয়াখালী', 'null', NULL, NULL),
(32, 4, NULL, 'Pirojpur', 'পিরোজপুর', 'null', NULL, NULL),
(33, 4, NULL, 'Barisal', 'বরিশাল', 'null', NULL, NULL),
(34, 4, NULL, 'Bhola', 'ভোলা', 'null', NULL, NULL),
(35, 4, NULL, 'Barguna', 'বরগুনা', 'null', NULL, NULL),
(36, 5, NULL, 'Sylhet', 'সিলেট', 'null', NULL, NULL),
(37, 5, NULL, 'Moulvibazar', 'মৌলভীবাজার', 'null', NULL, NULL),
(38, 5, NULL, 'Habiganj', 'হবিগঞ্জ', 'null', NULL, NULL),
(39, 5, NULL, 'Sunamganj', 'সুনামগঞ্জ', 'null', NULL, NULL),
(40, 6, NULL, 'Narsingdi', 'নরসিংদী', 'null', NULL, NULL),
(41, 6, NULL, 'Gazipur', 'গাজীপুর', 'null', NULL, NULL),
(42, 6, NULL, 'Shariatpur', 'শরীয়তপুর', 'null', NULL, NULL),
(43, 6, NULL, 'Narayanganj', 'নারায়ণগঞ্জ', 'null', NULL, NULL),
(44, 6, NULL, 'Tangail', 'টাঙ্গাইল', 'null', NULL, NULL),
(45, 6, NULL, 'Kishoreganj', 'কিশোরগঞ্জ', 'null', NULL, NULL),
(46, 6, NULL, 'Manikganj', 'মানিকগঞ্জ', 'null', NULL, NULL),
(47, 6, NULL, 'Dhaka', 'ঢাকা', 'null', NULL, NULL),
(48, 6, NULL, 'Munshiganj', 'মুন্সিগঞ্জ', 'null', NULL, NULL),
(49, 6, NULL, 'Rajbari', 'রাজবাড়ী', 'null', NULL, NULL),
(50, 6, NULL, 'Madaripur', 'মাদারীপুর', 'null', NULL, NULL),
(51, 6, NULL, 'Gopalganj', 'গোপালগঞ্জ', 'null', NULL, NULL),
(52, 6, NULL, 'Faridpur', 'ফরিদপুর', 'null', NULL, NULL),
(53, 7, NULL, 'Panchagarh', 'পঞ্চগড়', 'null', NULL, NULL),
(54, 7, NULL, 'Dinajpur', 'দিনাজপুর', 'null', NULL, NULL),
(55, 7, NULL, 'Lalmonirhat', 'লালমনিরহাট', 'null', NULL, NULL),
(56, 7, NULL, 'Nilphamari', 'নীলফামারী', 'null', NULL, NULL),
(57, 7, NULL, 'Gaibandha', 'গাইবান্ধা', 'null', NULL, NULL),
(58, 7, NULL, 'Thakurgaon', 'ঠাকুরগাঁও', 'null', NULL, NULL),
(59, 7, NULL, 'Rangpur', 'রংপুর', 'null', NULL, NULL),
(60, 7, NULL, 'Kurigram', 'কুড়িগ্রাম', 'null', NULL, NULL),
(61, 8, NULL, 'Sherpur', 'শেরপুর', 'null', NULL, NULL),
(62, 8, NULL, 'Mymensingh', 'ময়মনসিংহ', 'null', NULL, NULL),
(63, 8, NULL, 'Jamalpur', 'জামালপুর', 'null', NULL, NULL),
(64, 8, NULL, 'Netrokona', 'নেত্রকোণা', 'null', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `title_bn` varchar(255) DEFAULT NULL,
  `short` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `image`, `title_en`, `title_bn`, `short`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Chattagram', 'চট্টগ্রাম', 'CTG', NULL, NULL),
(2, NULL, 'Rajshahi', 'রাজশাহী', 'RAJ', NULL, NULL),
(3, NULL, 'Khulna', 'খুলনা', 'KHU', NULL, NULL),
(4, NULL, 'Barisal', 'বরিশাল', 'BAR', NULL, NULL),
(5, NULL, 'Sylhet', 'সিলেট', 'SYL', NULL, NULL),
(6, NULL, 'Dhaka', 'ঢাকা', 'DHA', NULL, NULL),
(7, NULL, 'Rangpur', 'রংপুর', 'RAN', NULL, NULL),
(8, NULL, 'Mymensingh', 'ময়মনসিংহ', 'MYM', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_04_26_192406_create_permission_tables', 2),
(7, '2024_04_27_052410_create_students_table', 2),
(10, '2024_04_27_082242_add_new_col_to_students_table', 2),
(13, '2024_04_27_075048_create_divisions_table', 3),
(14, '2024_04_27_075056_create_districts_table', 3),
(15, '2024_04_27_164431_create_courses_table', 4),
(16, '2024_04_27_195808_create_teachers_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `dist_id` bigint(20) UNSIGNED DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `institution` varchar(255) DEFAULT NULL,
  `institution_reg_no` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `nid` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `reg_type` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user_id`, `first_name`, `last_name`, `email`, `phone`, `address`, `dist_id`, `gender`, `institution`, `institution_reg_no`, `image`, `nid`, `location`, `reg_type`, `level`, `created_at`, `updated_at`) VALUES
(1, 6, 'student', '', 'student@epatthoboi.com', '', 'Dhaka', 47, 'male', 'sgsfg', 'dsgsdgsd', NULL, '19966115254000783', '', '1', '1', '2024-04-27 15:25:53', '2024-04-27 15:25:53'),
(2, 7, 'Meshkatozzaman', 'Bhuiyan', 'meshkat_cse@yahoo.com', '01685871382', 'Elite Barbershop', 18, 'male', ',mfsdf', 'jhbhmb', NULL, '3282346869', '', '1', '1', '2024-04-27 15:44:35', '2024-04-27 15:44:35');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `institution` varchar(255) DEFAULT NULL,
  `institution_reg_no` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `nid` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `reg_type` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) DEFAULT 1 COMMENT '1->employee, 2->admin, 3->superadmin',
  `status` int(11) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@epatthoboi.com', NULL, '$2y$10$SR0AU8KT5FaWWD3wACShdObQd3drOBNQ0mraGVPi5bQTId6G49nkm', 3, 1, NULL, NULL, NULL),
(2, 'Nayeem', 'nayeem@gmail.com', NULL, '$2y$12$AvYbyf5CuzoFjP11kQCphO8.eRQMooZkC5Vx5/HzPNBzM/kluMCny', 1, NULL, NULL, '2024-04-27 14:21:07', '2024-04-27 14:21:07'),
(4, 'Meshkatozzaman', 'meshkatcse4@gmail.com', NULL, '$2y$12$BVjY7TkLFgoPG5LkBJ7xZ.CcdPjbTyFGv51uAzkj6hJ7bRMJ1Rm6q', 1, NULL, NULL, '2024-04-27 14:23:34', '2024-04-27 14:23:34'),
(5, 'Nayeem', 'qaiyum.1416@gmail.com', NULL, '$2y$12$vAQ9TfWcSQ2YFy3XISrag.RJCc54.Na20GsBGaUA0ievFGTQJCjDq', 1, NULL, NULL, '2024-04-27 14:24:14', '2024-04-27 14:24:14'),
(6, 'student', 'student@epatthoboi.com', NULL, '$2y$12$EP5VIXoRJ3WLISl1GCigNuWOnL5AcVerke0doGKVX.eTYN2ou9EVG', 1, NULL, NULL, '2024-04-27 15:25:53', '2024-04-27 15:25:53'),
(7, 'Meshkatozzaman', 'meshkat_cse@yahoo.com', NULL, '$2y$12$7jueAnLKmwAsUL68IVU15eNrHPa6ZRiax1hRwK.Vt1/O1wR8VdxGS', 1, NULL, NULL, '2024-04-27 15:44:35', '2024-04-27 15:44:35'),
(8, 'Nayeem', 'teacher@epatthoboi.com', NULL, '$2y$12$4WezR7ZnFDKoJsXXnet1m.bZ4HHeVuSqTyaVcRgHk2DQXR4z1LMvu', 2, NULL, NULL, '2024-04-28 01:25:08', '2024-04-28 01:25:08'),
(9, 'superadmin', 'superadmin@nike.com', NULL, '$2y$10$gZVmy9UKld.cY7gCtpR/HOEWsd14tHHp4obY3Na5DHtqZ.AMXIZBe', 3, NULL, NULL, NULL, NULL),
(10, 'nikeadmin', 'admin@nike.com', NULL, '$2y$10$gZVmy9UKld.cY7gCtpR/HOEWsd14tHHp4obY3Na5DHtqZ.AMXIZBe', 2, NULL, NULL, NULL, NULL),
(11, 'employee', 'employee@nike.com', NULL, '$2y$10$gZVmy9UKld.cY7gCtpR/HOEWsd14tHHp4obY3Na5DHtqZ.AMXIZBe', 1, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districts_div_id_foreign` (`div_id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_user_id_foreign` (`user_id`),
  ADD KEY `students_dist_id_foreign` (`dist_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teachers_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_div_id_foreign` FOREIGN KEY (`div_id`) REFERENCES `divisions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_dist_id_foreign` FOREIGN KEY (`dist_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `students_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
