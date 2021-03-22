-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 22, 2021 at 09:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assign`
--

-- --------------------------------------------------------

--
-- Table structure for table `alls`
--

CREATE TABLE `alls` (
  `role` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alls`
--

INSERT INTO `alls` (`role`, `full_name`, `username`, `email`, `password`, `city`, `country`, `phone`, `company_name`, `user_type`) VALUES
('admin', 'jamy', 'nabil', 'jamy', '1234', 'asdfa', 'sda', 'asda', 'asds', 'active'),
('admin', 'jamy', 'jamy', 'asfa', '1234', 'dfasf', 'sfsa', 'sfsa', 'sfa', 'active'),
('coustomers', 'DFAFASFA', 'sadasfafaf', 'jamy@gmail.com', '12345678', 'asdasdad', 'ffsffsf', '123456789098', 'ffasfsfsfsf', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
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
(3, '2019_08_19_000000_create_failed_jobs_table', 2),
(4, '2021_03_02_195043_create_physical_store_channels_table', 2),
(5, '2021_03_03_062002_create_products_table', 3);

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
-- Table structure for table `physical_store_channels`
--

CREATE TABLE `physical_store_channels` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` int(200) NOT NULL,
  `quantity` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_sold` datetime NOT NULL,
  `payment_type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `physical_store_channels`
--

INSERT INTO `physical_store_channels` (`id`, `customer_name`, `address`, `phone`, `product_id`, `product_name`, `unit_price`, `quantity`, `total_price`, `date_sold`, `payment_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'jamy', '22nod road', '0195119231', 'erwerwe4234124', 'gaming laptop', 85000, '1', '85000', '2021-03-03 00:00:00', 'cash', 'paid', '2021-03-01 03:50:15', '2021-03-01 03:50:15'),
(2, 'foysal', '22nod road', '0195119231', 'erwerwf32534124', 'gaming laptop', 80000, '1', '80000', '2021-03-03 00:00:00', 'cash', 'paid', '2021-03-01 03:50:15', '2021-03-01 03:50:15'),
(3, 'nabil', '22nod road', '0195119231', 'erwerf542534124', 'gaming laptop', 80000, '1', '80000', '2021-03-03 00:00:00', 'cash', 'paid', '2021-03-01 03:50:15', '2021-03-01 03:50:15'),
(4, 'sasxa', 'asxas', '01925625', 'sjabshbxsa656', 'game', 6600, '1', '6600', '2021-02-01 21:48:26', 'cash', 'sold', '2021-01-01 15:48:26', '2021-03-03 15:48:26'),
(5, 'maliha', '22nod road', '0195119231', 'erwerwe4234124', 'gaming laptop', 85000, '1', '85000', '2021-03-03 00:00:00', 'cash', 'paid', '2021-03-07 13:37:31', '2021-03-07 13:37:31'),
(6, 'dsa', '22nod road', '0195119231', 'erwerwf32534124', 'gaming laptop', 80000, '1', '80000', '2021-03-03 00:00:00', 'cash', 'paid', '2021-03-07 13:37:31', '2021-03-07 13:37:31'),
(7, 'dsa2', '22nod road', '0195119231', 'erwerf542534124', 'gaming laptop', 80000, '1', '80000', '2021-03-03 00:00:00', 'cash', 'paid', '2021-03-07 13:37:31', '2021-03-07 13:37:31'),
(8, 'dsa1', 'asxas', '01925625', 'sjabshbxsa656', 'game', 6600, '1', '6600', '2021-02-01 21:48:26', 'cash', 'sold', '2021-03-07 13:37:32', '2021-03-07 13:37:32'),
(9, 'test 1', '22nod road', '0195119231', 'erwerwe4234124', 'gaming laptop', 85000, '1', '85000', '2021-03-03 00:00:00', 'cash', 'paid', '2021-03-07 13:38:37', '2021-03-07 13:38:37'),
(10, 'test 2', '22nod road', '0195119231', 'erwerwf32534124', 'gaming laptop', 80000, '1', '80000', '2021-03-03 00:00:00', 'cash', 'paid', '2021-03-07 13:38:37', '2021-03-07 13:38:37'),
(11, 'test 3', '22nod road', '0195119231', 'erwerf542534124', 'gaming laptop', 80000, '1', '80000', '2021-03-03 00:00:00', 'cash', 'paid', '2021-03-07 13:38:37', '2021-03-07 13:38:37'),
(12, 'test 4', 'asxas', '01925625', 'sjabshbxsa656', 'game', 6600, '1', '6600', '2021-02-01 21:48:26', 'cash', 'sold', '2021-03-07 13:38:37', '2021-03-07 13:38:37'),
(13, 'Test 5', '22nod road', '0195119231', 'erwerwe4234124', 'gaming laptop', 85000, '1', '85000', '2021-03-03 00:00:00', 'cash', 'paid', '2021-03-18 14:13:00', '2021-03-18 14:13:00'),
(14, 'Test 6', '22nod road', '0195119231', 'erwerwf32534124', 'gaming laptop', 80000, '1', '80000', '2021-03-03 00:00:00', 'cash', 'paid', '2021-03-18 14:13:00', '2021-03-18 14:13:00'),
(15, 'Test 5', '22nod road', '0195119231', 'erwerwe4234124', 'gaming laptop', 85000, '1', '85000', '2021-03-03 00:00:00', 'cash', 'paid', '2021-03-18 22:37:05', '2021-03-18 22:37:05'),
(16, 'Test 6', '22nod road', '0195119231', 'erwerwf32534124', 'gaming laptop', 80000, '1', '80000', '2021-03-03 00:00:00', 'cash', 'paid', '2021-03-18 22:37:05', '2021-03-18 22:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `category`, `unit_price`, `status`, `created_at`, `updated_at`) VALUES
(5, 'gaming laptop', 'laptop', '12342', 'upcoming', '2021-03-10 15:02:15', '2021-03-05 15:02:15'),
(6, 'gaming laptop', 'laptop', '12342', 'existing', '2021-03-10 15:02:15', '2021-03-05 15:02:15'),
(7, 'testfa', 'Laptop', '12312', 'existing', '2021-03-05 11:09:16', '2021-03-05 11:09:16'),
(8, 'Rog GAming Series', 'Laptop', '123124', 'existing', '2021-03-05 11:10:14', '2021-03-05 11:10:14'),
(9, 'Mac Book', 'Laptop', '1231231', 'upcoming', '2021-03-05 11:10:41', '2021-03-05 11:10:41');

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
-- Indexes for table `physical_store_channels`
--
ALTER TABLE `physical_store_channels`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `physical_store_channels`
--
ALTER TABLE `physical_store_channels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
