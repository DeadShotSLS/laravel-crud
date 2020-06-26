-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2020 at 04:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-crud`
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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_06_24_150910_create_products_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'aaaaaaaaaaaaaa', 'giuubuiobioub bfdfd fdgdhdtg hvuoyvcds uyvo8yuyvfsdf uhhvuoifc', 3200, 'img/product/15931383881-post.JPG', 1, '2020-06-25 02:45:53', '2020-06-25 20:56:28'),
(4, 'fdiugiugiugvf', 'kijkbiupiu9pu ihboyyv uoyhvuyvy  uviutf', 2400, 'img/product/15930729691-post.jpg', 1, '2020-06-25 02:46:09', '2020-06-25 02:46:09'),
(5, 'dafoihoubgf', 'jbihfdv iubiodfc ib8iuiuygfsc uiyyv8oygsefd uyvo87sd7f', 2200, 'img/product/15930729931-post.JPG', 1, '2020-06-25 02:46:33', '2020-06-25 02:46:33'),
(6, 'gfbkjboiub0[iobg', 'fduig8u9g', 85656, 'img/product/15930730071-post.JPG', 1, '2020-06-25 02:46:47', '2020-06-25 02:46:47'),
(7, 'ghnjyfjgyj', 'hjghyjk gfjhbhjids jhvuoyv', 3200, 'img/product/15931058412-post.jpg', 2, '2020-06-25 11:54:01', '2020-06-25 11:54:01'),
(8, 'go;jnoiunpgh', 'fgiubuipbprgv', 3200, 'img/product/15931058542-post.jpg', 2, '2020-06-25 11:54:14', '2020-06-25 11:54:14'),
(9, 'efirgiubf', 'fdbhoijhgbd iuboyibvfc uhvuyv', 65201, 'img/product/15931058672-post.jpg', 2, '2020-06-25 11:54:27', '2020-06-25 11:54:27'),
(10, 'fuhvpouhbptebf', 'rfgviuhipurfhg cyfvyiuvc jhvouyv', 2200, 'img/product/15931058842-post.jpg', 2, '2020-06-25 11:54:44', '2020-06-25 11:54:44'),
(11, 'teejgvknpoubpf', 'dsvfiuygi rs dsfgerwsgv', 65201, 'img/product/15931058982-post.JPG', 2, '2020-06-25 11:54:58', '2020-06-25 11:54:58'),
(12, 'teejgvknpoubpf', 'dsvfiuygi rs dsfgerwsgv', 65201, 'img/product/15931060232-post.JPG', 2, '2020-06-25 11:57:03', '2020-06-25 11:57:03'),
(13, 'fiudbgiubgfdigv', 'sdfvkjhioyvbfdsd', 2200, 'img/product/15931061853-post.jpg', 3, '2020-06-25 11:59:45', '2020-06-25 11:59:45'),
(14, 'regdfih;fd', 'vibvi;bdf', 65201, 'img/product/15931061973-post.JPG', 3, '2020-06-25 11:59:57', '2020-06-25 11:59:57'),
(15, 'fhmjghmgm', 'gfjnfrnj jnfgmjgfhm gmnfhm', 2200, 'img/product/15931062093-post.JPG', 3, '2020-06-25 12:00:09', '2020-06-25 12:00:09'),
(16, 'nfgmgh,m', 'hjmhgm hj hyjghy f fyjhfjh', 2400, 'img/product/15931062223-post.jpg', 3, '2020-06-25 12:00:22', '2020-06-25 12:00:22'),
(17, 'bvnmghmgh', 'hjngyhjn fhjnghmj hjnghhgm', 3000, 'img/product/15931062343-post.jpg', 3, '2020-06-25 12:00:34', '2020-06-25 12:00:34'),
(18, 'gf jmghmjgh', 'hgjghm fgjnytj jhgnghmghm', 2400, 'img/product/15931062463-post.jpg', 3, '2020-06-25 12:00:46', '2020-06-25 12:00:46'),
(19, 'gfjfjmgh mj', 'jmtghyjmk fgjnghyjm hgjghjmkgh', 2400, 'img/product/15931062603-post.JPG', 3, '2020-06-25 12:01:00', '2020-06-25 12:01:00'),
(20, 'hjnnghmghm', 'gvnhfgnj fgnmnghm gfnmnm', 3000, 'img/product/15931062743-post.jpg', 3, '2020-06-25 12:01:14', '2020-06-25 12:01:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'saman', 'saman@gmail.com', NULL, '$2y$10$vZl6vZNGW2yCZSVTQmrrWegX29YqHV/mmN9fVCTfTJOBOCcqM3MNG', NULL, '2020-06-25 02:01:45', '2020-06-25 02:01:45'),
(2, 'sameera', 'sameera@gmail.com', NULL, '$2y$10$mGQO1su6ngHyHMKTRLcqOe93xxJhZFHcwoExImrFHlc4oYXTIF0B.', NULL, '2020-06-25 11:52:31', '2020-06-25 11:52:31'),
(3, 'sunil', 'sunil@gmail.com', NULL, '$2y$10$RxJPNtwvGYE9NOnXdLGvL.ysb590D7A6w8Jx0RTY5QBWXyatd7WsO', NULL, '2020-06-25 11:59:11', '2020-06-25 11:59:11');

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_index` (`user_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
