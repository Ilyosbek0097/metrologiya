-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 24, 2022 at 03:00 PM
-- Server version: 8.0.19
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metrologiya`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2022_03_24_052408_create_shablons_table', 2);

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
-- Table structure for table `shablons`
--

CREATE TABLE `shablons` (
  `id` bigint UNSIGNED NOT NULL,
  `xizmat_nomi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tartib_raqami` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amal_qilish_muddati` date NOT NULL,
  `etalonlar_nomi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `xujjat_belgilanishi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metrologik_xizmat_nomi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `xizmat_egasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tayyorlovchi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `import_mamlakat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parametrlari_nomi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomlanishi_zavod_raqami` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `normativ_hujjat_nomi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `turining_tarifi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qiyoslovchi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sanasi` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shablons`
--

INSERT INTO `shablons` (`id`, `xizmat_nomi`, `tartib_raqami`, `amal_qilish_muddati`, `etalonlar_nomi`, `xujjat_belgilanishi`, `metrologik_xizmat_nomi`, `xizmat_egasi`, `tayyorlovchi`, `import_mamlakat`, `parametrlari_nomi`, `nomlanishi_zavod_raqami`, `normativ_hujjat_nomi`, `turining_tarifi`, `qiyoslovchi`, `sanasi`, `created_at`, `updated_at`) VALUES
(1, 'O‘zbekiston milliy metrologiya instituti davlat muassasasi', '529097-2022', '2023-03-11', 'Ko\'p funksiyali kalibrator MC-6; Yuk porshenli manometr МП-0.4', 'O\'z DSt 8.089-2020 “Mexanik , yarim avtomat va avtomat va avtomat noinvaziv arterial bosim o’lchagichlari” Qiyoslash uslubiyati', 'O‘zMMI DM Qo\'qon filiali', '\"FIRDAVS HEALTHY DENTAL\" MCHJ', '-', 'ROSSIYA', 'O\'lchash ko\'lami 0÷300 mmHg; shkala bolinmasi 2mmHg; ± 3mmHg', 'Sfigmomanometr Адъютор № 01202834', 'O\'z DSt 8.089-2020 “Mexanik , yarim avtomat va avtomat va avtomat noinvaziv arterial bosim o’lchagichlari” Qiyoslash uslubiyati', '-', 'MUXIDINOV XAYRILLO BURXONDINOVICH', '2021-03-11', '2022-03-24 02:31:31', '2022-03-24 02:31:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) DEFAULT NULL,
  `favoriteColor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `favoriteColor`, `picture`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User', 'user@yandex.ru', 1, 'green', 'UIMG_20220324623c18f018acb.jpg', NULL, '$2y$10$Tf/nOuKeRX3J3IYqCE5a7u5mcTpXEc8cIcZkG0fwE5XKHqxCgxd.G', NULL, '2022-03-24 00:22:21', '2022-03-24 02:08:32');

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
-- Indexes for table `shablons`
--
ALTER TABLE `shablons`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shablons`
--
ALTER TABLE `shablons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
