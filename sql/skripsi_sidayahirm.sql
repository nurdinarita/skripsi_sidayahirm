-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 04:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi_sidayahirm`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `judulkitab`
--

CREATE TABLE `judulkitab` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_kitab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `judulkitab`
--

INSERT INTO `judulkitab` (`id`, `judul_kitab`, `created_at`, `updated_at`) VALUES
(2, 'Bajuri, Ianah, Matammimah, Kailani', '2022-03-21 09:39:56', '2022-03-21 09:41:07'),
(3, 'Matan Taqrib, Jarumiyah, Dhammon', '2022-03-21 09:47:12', '2022-03-21 09:47:12'),
(4, 'Safinatun Naja, Jarumiyah, Dhammon', '2022-03-21 09:47:44', '2022-03-21 09:47:44'),
(5, 'Al-Quran, Bidayatul Mustafid, Dalail Khairat', '2022-03-21 09:48:07', '2022-03-21 09:48:07'),
(6, 'Al-quran,Bidayatul mustafid', '2022-03-21 09:48:24', '2022-03-21 09:48:24');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `kelas`, `created_at`, `updated_at`) VALUES
(4, '4', '2022-03-21 07:35:54', '2022-03-21 07:35:54'),
(5, '5', '2022-03-21 07:36:05', '2022-03-21 07:36:05'),
(6, '6', '2022-03-21 07:36:14', '2022-03-21 07:36:14'),
(7, '7', '2022-03-21 07:36:26', '2022-03-21 07:36:26'),
(8, '8', '2022-03-21 07:36:35', '2022-03-21 07:36:35'),
(9, '9', '2022-03-21 07:36:44', '2022-03-21 07:36:44'),
(10, '11', '2022-03-21 07:36:53', '2022-04-11 09:09:54'),
(15, '1', '2022-04-11 09:11:26', '2022-04-11 09:11:26');

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
(48, '2022_03_15_155358_create_mapel_table', 1),
(59, '2014_10_12_000000_create_users_table', 2),
(60, '2014_10_12_100000_create_password_resets_table', 2),
(61, '2019_08_19_000000_create_failed_jobs_table', 2),
(62, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(63, '2022_03_15_155251_create_santri_table', 2),
(64, '2022_03_15_155345_create_pendidik_table', 2),
(65, '2022_03_15_155411_create_kelas_table', 2),
(66, '2022_03_21_031515_create_pelajaran_table', 2),
(67, '2022_03_21_153243_create_judulkitab_table', 3);

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
-- Table structure for table `pelajaran`
--

CREATE TABLE `pelajaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kelas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hari` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_kitab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelajaran`
--

INSERT INTO `pelajaran` (`id`, `id_kelas`, `hari`, `mapel`, `judul_kitab`, `created_at`, `updated_at`) VALUES
(4, '1', 'Selasa', 'Al-quran,tajwid', 'Al-quran,Bidayatul mustafid', '2022-03-21 07:39:59', '2022-03-21 07:39:59'),
(5, '2', 'Selasa', 'Fiqh, Nahwu, Sharaf', 'Al-Quran, Bidayatul Mustafid, Dalail Khairat', '2022-03-21 07:43:50', '2022-03-21 07:43:50'),
(6, '1', 'Rabu', 'Al-Quran, Tajwid, Dalail Khairat', 'Al-Quran, Bidayatul Mustafid, Dalail Khairat', '2022-03-21 07:44:45', '2022-03-21 07:44:45'),
(7, '1', 'Senin', 'Fiqh, Nahwu, Sharaf', 'Matan Taqrib, Jarumiyah, Dhammon, dll.', '2022-03-21 07:51:15', '2022-03-21 07:51:15'),
(8, '1', 'Selasa', 'Fiqh, Nahwu, Sharaf', 'Safinatun Naja, Jarumiyah, Dhammon, dll.', '2022-03-21 07:51:45', '2022-03-21 07:51:45'),
(9, '6', 'Selasa', 'Fiqh, Nahwu, Sharaf', 'Matan Taqrib, Jarumiyah, Dhammon, dll.', '2022-04-11 09:12:45', '2022-04-11 09:12:45');

-- --------------------------------------------------------

--
-- Table structure for table `pendidik`
--

CREATE TABLE `pendidik` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan_terakhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `riwayat_pendidikan_terakhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_judul_kitab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_masuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mukim_tidak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`id`, `nik`, `nama`, `gender`, `tanggal_lahir`, `tempat_lahir`, `alamat`, `nama_ayah`, `nama_ibu`, `tahun_masuk`, `mukim_tidak`, `provinsi`, `kabupaten`, `created_at`, `updated_at`) VALUES
(1, '1106092901080001', 'Raja Syakil', 'Laki-laki', '2008-01-29', 'Aceh Besar', 'Neuheun', 'Nafli', 'Herawati', '2016', 'tidak', 'Aceh', 'Aceh Besar', '2022-03-21 08:03:01', '2022-03-21 08:03:01'),
(2, '1106090106080001', 'Sahibur Izari', 'Laki-laki', '2008-06-01', 'Aceh Besar', 'Neuheun', 'Idris', 'Rahmawati', '2016', 'tidak', 'Aceh', 'Aceh Besar', '2022-03-21 08:04:35', '2022-03-21 08:04:35'),
(3, '1106092207090001', 'Abral Huda', 'Laki-laki', '2009-07-22', 'Aceh Besar', 'Neuheun', 'Muhammad Nur', 'Ervina', '2016', 'tidak', 'Aceh', 'Aceh Besar', '2022-03-21 08:05:33', '2022-03-21 08:05:33'),
(4, '1106092711090001', 'M. Ghifari', 'Laki-laki', '2009-11-27', 'Neuheun', 'Neuheun', 'Fazlun Yunus', 'Nuraini', '2016', 'tidak', 'Aceh', 'Aceh Besar', '2022-03-21 08:06:43', '2022-03-21 08:06:43'),
(5, '1106092212050002', 'Misbahul Firdaus', 'Laki-laki', '2006-12-22', 'Neuheun', 'Neuheun', 'Alm. Bukhari', 'Suarni', '2016', 'Tidak', 'Aceh', 'Aceh Besar', '2022-04-11 08:36:40', '2022-04-11 08:36:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dara Fona', 'rizkadarafonna071@gmail.com', 'admin', NULL, '$2y$10$yvyog2pB.EX2SzNSYNdW4.LXsEDvpA5RTAYzC2DjTDdvYCuJZi8IW', 'IosTEZFuXsgp5kjTLqfqQaQ8TN5ctAGZWLi4k9vEOs39vxCLOub2kYDv5MZr', '2022-03-22 07:23:32', '2022-03-24 07:13:42'),
(6, 'Yusnaidi', 'yusnaidi@gmail.com', 'Pimpinan', NULL, '$2y$10$h/mwiIfJNZLZEadJNXhy7uZCM7qHNDkzPhBocjfk524naCutDze2S', NULL, NULL, NULL),
(7, 'Salmiadi', 'salmiadi@gmail.com', 'Pengajar', NULL, '$2y$10$1odl0lVaL.YcqHKa8/fuI.RoX8XZCy9GKM2ThLPgmFASOjDC39eou', NULL, NULL, NULL),
(8, 'Sri', 'srimulyasari@gmail.com', 'Pengajar', NULL, '$2y$10$SJRT3f.6MYrftiIvnMO4K.gKeiG2Oq673Y96reYUxz.xkNv81hcT2', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `judulkitab`
--
ALTER TABLE `judulkitab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kelas_kelas_unique` (`kelas`);

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
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidik`
--
ALTER TABLE `pendidik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pendidik_nik_unique` (`nik`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `santri_nik_unique` (`nik`);

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
-- AUTO_INCREMENT for table `judulkitab`
--
ALTER TABLE `judulkitab`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `pelajaran`
--
ALTER TABLE `pelajaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pendidik`
--
ALTER TABLE `pendidik`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `santri`
--
ALTER TABLE `santri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
