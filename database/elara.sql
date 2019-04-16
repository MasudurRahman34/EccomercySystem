-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 06:54 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elara`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `catagory_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `name`, `description`, `image`, `parent_id`, `created_at`, `updated_at`) VALUES
(10, 'face wash', 'face wash', '1543562251.jpg', NULL, '2018-11-28 10:40:22', '2018-11-30 01:17:32'),
(11, 'lipstick', 'lipstick, lipstick, lipstick', '1543556546.jpg', 10, '2018-11-29 23:42:27', '2018-11-29 23:42:27'),
(12, 'Bag', 'Bag, bag bag', '1543565700.jpg', 12, '2018-11-30 01:03:46', '2018-11-30 02:17:46');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2018_11_21_025618_create_features_table', 1),
(6, '2018_11_21_025703_create_product_images_table', 1),
(7, '2018_11_21_025846_create_admins_table', 1),
(9, '2018_11_21_025321_create_brands_table', 2),
(15, '2018_11_21_031017_create_products_table', 3),
(16, '2018_11_21_025213_create_catagories_table', 4),
(18, '2014_10_12_000000_create_users_table', 5);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `price` int(11) NOT NULL,
  `offer_price` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `admin_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `title`, `description`, `slug`, `quantity`, `price`, `offer_price`, `status`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Samsung Galaxy S8', 'Samsung Galaxy S8 Is a Wonderful phone specially designed For high sharpness camera and speedy processor Samsung Galaxy S8 Is a Wonderful phone specially designed For high sharpness camera and speedy processor Samsung Galaxy S8 Is a Wonderful phone specially designed For high sharpness camera and speedy processor Samsung Galaxy S8 Is a Wonderful phone specially designed For high sharpness camera and speedy processor Samsung Galaxy S8 Is a Wonderful phone specially designed For high sharpness camera and speedy processor ', 'Samsung_Galaxy', 10, 80000, NULL, 1, 1, '2018-11-21 18:00:00', '2018-11-21 18:00:00'),
(2, 2, 2, 'Samsung Galaxy S9', 'Samsung Galaxy S9 Is a Wonderful phone specially designed For high sharpness camera and speedy processor Samsung Galaxy S8 Is a Wonderful phone specially designed For high sharpness camera and speedy processor Samsung Galaxy S8 Is a Wonderful phone specially designed For high sharpness camera and speedy processor Samsung Galaxy S8 Is a Wonderful phone specially designed For high sharpness camera and speedy processor Samsung Galaxy S8 Is a Wonderful phone specially designed For high sharpness camera and speedy processor ', 'Samsung_Galaxy', 10, 10000, NULL, 1, 1, '2018-11-21 18:00:00', '2018-11-21 18:00:00'),
(5, 1, 1, 'image new product image', 'image new product image', 'image-new-product-image', 12, 1000, NULL, 0, 1, '2018-11-26 03:20:40', '2018-11-26 03:20:40'),
(8, 1, 1, 'multiple image 3', 'multiple image, multiple image, multiple image', 'multiple-image', 11, 12000, NULL, 0, 1, '2018-11-26 03:39:44', '2018-11-26 04:59:05'),
(9, 1, 1, 'face wash', 'face wash face wash face wash', 'face-wash', 10, 500, NULL, 0, 1, '2018-11-30 06:11:51', '2018-11-30 06:11:51'),
(10, 1, 1, 'shampu', 'shampu,   shampu,  shampu,  shampu,', 'shampu', 10, 122, NULL, 0, 1, '2018-11-30 06:13:03', '2018-11-30 06:13:03'),
(20, 1, 1, 'Green', 'green', 'green', 0, 122342, NULL, 0, 1, '2018-11-30 07:51:59', '2018-11-30 07:51:59');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, 'galaxy.jpg', '2018-11-20 18:00:00', '2018-11-21 18:00:00'),
(2, 2, 'samsung.jpg', '2018-11-21 18:00:00', '2018-11-21 18:00:00'),
(4, 5, '1543224040.jpeg', '2018-11-26 03:20:40', '2018-11-26 03:20:40'),
(6, 8, '1543225184.jpg', '2018-11-26 03:39:44', '2018-11-26 03:39:44'),
(7, 9, '1543579911.jpg', '2018-11-30 06:11:52', '2018-11-30 06:11:52'),
(8, 10, '1543579984.jpg', '2018-11-30 06:13:04', '2018-11-30 06:13:04'),
(9, 20, '1543580068.jpg', '2018-11-30 06:14:28', '2018-11-30 06:14:28'),
(11, 20, '1543585919.jpg', '2018-11-30 07:51:59', '2018-11-30 07:51:59'),
(12, 20, '1543585918.jpg', '2018-11-30 07:51:59', '2018-11-30 07:51:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division_id` int(10) UNSIGNED NOT NULL COMMENT 'Division Table id',
  `district_id` int(10) UNSIGNED NOT NULL COMMENT 'District Table id',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '0' COMMENT '0=inactive',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_no`, `password`, `avatar`, `ip_address`, `shipping_address`, `division_id`, `district_id`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'masud', 'mohammadmasud34@gmail.com', '01750658791', '$2y$10$M50BsCYzxMxNjzTFREXoG.38mpI7nlthxC/2KQ95xn75pWTpCLYkK', NULL, '127.0.0.1', NULL, 1, 1, 0, '3GH3L36d9nWwasRpD2WhJJ3tmPyhFp4EK8dgxRsiLxCTk8z4myQ0d9aPhpAB', '2018-12-07 23:04:07', '2018-12-07 23:04:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_no_unique` (`phone_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
