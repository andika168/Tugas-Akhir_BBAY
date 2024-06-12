-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 02:53 PM
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
-- Database: `db-bbay`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `nama`, `photo`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Penyaluran Donasi BBAY', 'kegiatan/1714240884_Dokumentasi BBAY 3.jpg', 'Kegiatan Penyaluran donasi untuk program Bahagia Bersama Anak Yatim Part 60', '2024-04-25 08:36:25', '2024-04-27 18:01:24'),
(3, 'Penyaluran Donasi', 'kegiatan/1714241224_BBAY Part 61.jpg', 'Kegiatan Penyaluran donasi untuk program Bahagia Bersama Anak Yatim Part 61', '2024-04-25 16:44:09', '2024-04-27 18:07:04'),
(5, 'Penyaluran Donasi', 'kegiatan/1714241291_BBAY 62.jpg', 'Kegiatan Penyaluran donasi untuk program Bahagia Bersama Anak Yatim Part 62', '2024-04-25 16:54:24', '2024-04-27 18:08:11'),
(15, 'Penyaluran Donasi', 'kegiatan/1714241464_BBAY 63.jpg', 'Kegiatan Penyaluran donasi untuk program Bahagia Bersama Anak Yatim Part 63', '2024-04-27 18:11:04', '2024-04-27 18:11:04'),
(16, 'Pemberian Donasi', 'kegiatan/1714241498_BBAY 64.jpg', 'Kegiatan Penyaluran donasi untuk program Bahagia Bersama Anak Yatim Part 64', '2024-04-27 18:11:38', '2024-04-27 18:11:38');

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_trx` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jumlah` bigint(20) UNSIGNED NOT NULL,
  `keterangan` text NOT NULL,
  `bukti` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'CREATED',
  `remarks` text DEFAULT NULL,
  `dirubah_oleh` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`id`, `id_trx`, `nama`, `jumlah`, `keterangan`, `bukti`, `jenis`, `status`, `remarks`, `dirubah_oleh`, `created_at`, `updated_at`) VALUES
(16, 'DONE-1714238786', 'Hamba Allah', 100000, 'Donasi DONASI BBAY PART 65', 'bukti_donasi/1714238786_bukti transfer 1.jpeg', 'Pemasukan', 'VERIFIED', NULL, NULL, '2024-04-27 17:26:26', '2024-04-27 17:38:56'),
(17, 'DONE-1714238907', 'Giman', 150000, 'Donasi DONASI BBAY PART 65', 'bukti_donasi/1714238907_bukti donasi 2.jpeg', 'Pemasukan', 'VERIFIED', NULL, NULL, '2024-04-27 17:28:27', '2024-04-27 17:38:57'),
(18, 'DONE-1714239039', 'Andrean', 50000, 'Donasi DONASI BBAY PART 65', 'bukti_donasi/1714239039_bukti donasi 3.jpeg', 'Pemasukan', 'VERIFIED', NULL, NULL, '2024-04-27 17:30:39', '2024-04-27 17:38:59'),
(19, 'DONE-1714239060', 'M. Iqbal', 30000, 'Donasi DONASI BBAY PART 65', 'bukti_donasi/1714239060_Bukti Donasi 4.jpeg', 'Pemasukan', 'VERIFIED', NULL, NULL, '2024-04-27 17:31:00', '2024-04-27 17:39:01'),
(20, 'DONE-1714239088', 'Ustadz Nur Ahmad', 600000, 'Donasi DONASI BBAY PART 65', 'bukti_donasi/1714239088_Bukti Donasi 5.jpeg', 'Pemasukan', 'VERIFIED', NULL, NULL, '2024-04-27 17:31:28', '2024-04-27 17:39:02'),
(21, 'DONE-1714239172', 'Jamil', 100000, 'Donasi DONASI BBAY PART 65', 'bukti_donasi/1714239172_bukti donasi 6.jpeg', 'Pemasukan', 'VERIFIED', NULL, NULL, '2024-04-27 17:32:52', '2024-04-27 17:39:05'),
(22, 'DONE-1714239205', 'Ustad', 1000000, 'Donasi DONASI BBAY PART 65', 'bukti_donasi/1714239205_bukti donasi 7.jpeg', 'Pemasukan', 'REJECTED', NULL, NULL, '2024-04-27 17:33:25', '2024-05-01 09:20:04'),
(23, 'DONE-1714239234', 'Ustadz Nur Ahmad', 180000, 'Donasi DONASI BBAY PART 65', 'bukti_donasi/1714239234_bukti donasi 8.jpeg', 'Pemasukan', 'REJECTED', NULL, NULL, '2024-04-27 17:33:54', '2024-05-01 09:20:45'),
(24, 'DONE-1714239403', 'Wanadi', 300000, 'Donasi DONASI BBAY PART 65', 'bukti_donasi/1714239403_bukti donasi 9.jpeg', 'Pemasukan', 'VERIFIED', 'Testing remarks', 5, '2024-04-27 17:36:43', '2024-05-07 23:02:55'),
(25, 'DONE-1714239424', 'Ustadz Nur Ahmad', 200000, 'Donasi DONASI BBAY PART 65', 'bukti_donasi/1714239424_Bukti donasi 10.jpeg', 'Pemasukan', 'VERIFIED', 'Jumlah sebelumnya berbeda dengan bukti transaksi, telah disesuaikan', 5, '2024-04-27 17:37:04', '2024-05-12 13:26:53'),
(26, 'OUT-1714239519', 'Ben', 100000, 'Contoh pengeluaran', 'bukti_pengeluaran/1714239519.jpg', 'Pengeluaran', 'REJECTED', NULL, NULL, '2024-04-27 17:38:39', '2024-05-01 05:21:11'),
(27, 'OUT-1714239592', 'Bendahara', 50000, 'Contoh pengeluaran (2)', 'bukti_pengeluaran/1714239592.jpg', 'Pengeluaran', 'REJECTED', NULL, NULL, '2024-04-27 17:39:52', '2024-05-21 09:22:57'),
(28, 'OUT-1714553542', 'Andika', 20000, 'Beli ayam', 'bukti_pengeluaran/1714553542.jpg', 'Pengeluaran', 'REJECTED', NULL, NULL, '2024-05-01 08:52:22', '2024-05-21 09:22:17'),
(29, 'OUT-1714553579', 'Andika', 20000, 'Beli ayam', 'bukti_pengeluaran/1714553579.jpg', 'Pengeluaran', 'REJECTED', NULL, NULL, '2024-05-01 08:52:59', '2024-05-21 09:22:41'),
(30, 'OUT-1714554421', 'Andika', 50000, 'test pengeluaran', 'bukti_pengeluaran/1714554421.png', 'Pengeluaran', 'REJECTED', NULL, NULL, '2024-05-01 09:07:01', '2024-05-21 09:22:28'),
(31, 'OUT-1715519955', 'Bendahara', 500000, 'Pembelian Air Minum', 'bukti_pengeluaran/1715519955.jpg', 'Pengeluaran', 'REJECTED', NULL, NULL, '2024-05-12 13:19:15', '2024-05-21 09:22:08'),
(32, 'DONE-1716092220', NULL, 150000, 'Donasi DONASI BBAY PART 65', 'bukti_donasi/1716092220_bukti donasi 2.jpeg', 'Pemasukan', 'REJECTED', 'Kesalahan input nominal', 5, '2024-05-19 04:17:00', '2024-05-19 10:01:37'),
(33, 'DONE-1716181723', 'Aan', 10000, 'Donasi DONASI BBAY PART 65', 'bukti_donasi/1716181723_bukti transfer 1.jpeg', 'Pemasukan', 'VERIFIED', 'Jumlah tidak sesuai dengan bukti transfer', 5, '2024-05-20 05:08:43', '2024-05-20 08:46:27'),
(37, 'OUT-1716276673', 'Bendahara', 20000, 'Beli Buah', 'bukti_pengeluaran/1716276673.jpg', 'Pengeluaran', 'REJECTED', NULL, NULL, '2024-05-21 07:31:13', '2024-05-21 09:21:33'),
(38, 'OUT-1716279133', 'Bendahara', 1000000, 'Testing', 'bukti_pengeluaran/1716279133.jpg', 'Pengeluaran', 'REJECTED', NULL, NULL, '2024-05-21 08:12:13', '2024-05-21 08:13:59'),
(39, 'OUT-1716279327', 'Bendahara', 1000000, 'testing pengeluaran', 'bukti_pengeluaran/1716279327.jpg', 'Pengeluaran', 'REJECTED', NULL, NULL, '2024-05-21 08:15:27', '2024-05-21 08:17:36'),
(40, 'OUT-1716279480', 'bendahara', 1000000, 'Testing', 'bukti_pengeluaran/1716279480.jpg', 'Pengeluaran', 'REJECTED', NULL, NULL, '2024-05-21 08:18:00', '2024-05-21 08:20:34'),
(41, 'OUT-1716279655', 'Bendahara', 1000000, 'testing', 'bukti_pengeluaran/1716279655.jpg', 'Pengeluaran', 'REJECTED', NULL, NULL, '2024-05-21 08:20:55', '2024-05-21 08:24:04'),
(42, 'OUT-1716279961', 'bendahara', 1000000, 'Testing', 'bukti_pengeluaran/1716279961.jpg', 'Pengeluaran', 'REJECTED', NULL, NULL, '2024-05-21 08:26:01', '2024-05-21 08:30:38'),
(43, 'OUT-1716280254', 'Bendahara', 1000000, 'testing', 'bukti_pengeluaran/1716280254.jpg', 'Pengeluaran', 'REJECTED', NULL, NULL, '2024-05-21 08:30:54', '2024-05-21 08:32:20'),
(44, 'OUT-1716280360', 'bendahara', 100000, 'testt', 'bukti_pengeluaran/1716280360.jpg', 'Pengeluaran', 'REJECTED', NULL, NULL, '2024-05-21 08:32:40', '2024-05-21 09:21:24'),
(45, 'DONE-1716280439', 'andika', 100000, 'Donasi DONASI BBAY PART 65', 'bukti_donasi/1716280439_bukti donasi 2.jpeg', 'Pemasukan', 'CREATED', 'Salah input jumlah', 7, '2024-05-21 08:33:59', '2024-05-21 08:34:47'),
(46, 'OUT-1716281889', 'Bendahara', 1000000, 'testing', 'bukti_pengeluaran/1716281889.jpg', 'Pengeluaran', 'REJECTED', NULL, NULL, '2024-05-21 08:58:09', '2024-05-21 09:07:12'),
(47, 'OUT-1716282877', 'bendahara', 1000000, 'Testing', 'bukti_pengeluaran/1716282877.jpg', 'Pengeluaran', 'REJECTED', NULL, NULL, '2024-05-21 09:14:37', '2024-05-21 09:14:57'),
(48, 'OUT-1716283469', 'Bendahara', 760000, 'Beli Buah', 'bukti_pengeluaran/1716283469.jpg', 'Pengeluaran', 'VERIFIED', NULL, NULL, '2024-05-21 09:24:29', '2024-05-21 09:24:29');

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
(3, '2024_04_20_050450_create_tabel_laporankeuangan', 1),
(4, '2024_04_24_190215_create_fotodokumentasi_table', 2),
(5, '2024_04_25_142634_create_activities_table', 3),
(6, '2024_04_25_142634_create_activitiy_table', 4),
(7, '2024_05_01_165858_add_remarks_in_keuangan_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('XLwgHUkHGzLZI0b6WipIQ6JYEJFzmgrRhrKX27m1', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZVhaSkFZZjgxT2s1Wlk1RTBxSkg5d2RFdER4M2VnUmVta2VWMG4zMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wZW5nZWx1YXJhbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo3O30=', 1716284427);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Table untuk admin';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `password`, `created_at`, `updated_at`) VALUES
(5, 'admin', 'Admin', '$2y$12$Gisow6MrXhj.Nv/bpdt3b.7m3eiehB3FPJR.t2E1B2Z8BHvgBd4Ey', '2024-04-27 06:26:03', '2024-04-27 21:08:37'),
(7, 'admin2', 'Bendahara', '$2y$12$nNnQbgLYp8YGg9kINfAedOtiXmcWUjK/L5Ed0QGi4ybVPahHE0/.2', '2024-05-19 09:45:27', '2024-05-19 16:45:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keuangan_id_trx_index` (`id_trx`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
