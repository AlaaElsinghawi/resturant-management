-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2019 at 11:37 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resturant`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--
-- Error reading structure for table resturant.comments: #1932 - Table 'resturant.comments' doesn't exist in engine
-- Error reading data for table resturant.comments: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `resturant`.`comments`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `title`, `description`, `status`, `image`, `price`, `menu_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'rice', 'rice goods', 1, '1558972065imagejpg', NULL, 1, 1, '2019-05-27 13:47:45', '2019-05-27 13:47:45'),
(2, 'Vegtables\'s', 'this item contens vetamins', 1, '1558997401imagejpg', NULL, 1, 1, '2019-05-27 20:50:01', '2019-05-27 20:50:01'),
(6, 'Pepsi', 'Pepsi is a carbonated soft drink manufactured by PepsiCo. Originally created and developed in 1893', 1, '1558999134imagejpg', NULL, 3, 1, '2019-05-27 21:18:54', '2019-05-27 21:18:54'),
(7, 'sea foods', 'eafood is any form of sea life', 1, '1559000715imagejpg', NULL, 1, 1, '2019-05-27 21:45:15', '2019-05-27 21:45:15'),
(8, 'slada', 'salad dish', 1, '1559000791imagejpg', NULL, 1, 1, '2019-05-27 21:46:32', '2019-05-27 21:46:32'),
(9, 'Beef', 'Beef. When most people think of red meat, they probably imagine beef. ...', 1, '1559000952imagepng', NULL, 1, 1, '2019-05-27 21:49:12', '2019-05-27 21:49:12');

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`id`, `title`, `description`, `status`, `image`, `price`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'Checkien\'s', 'Cheikens Food very usefulfor all member family', 1, '1558972325.jpg', '120.00', 1, '2019-05-27 13:52:05', '2019-05-27 13:52:05'),
(7, 'Pepsi', 'Pepsi is a carbonated soft drink manufactured by PepsiCo. Originally created and developed in 1893', 1, '1558999210.jpg', '5.00', 1, '2019-05-27 21:20:10', '2019-05-27 21:20:10'),
(10, '1.2 Litre Thumbs Up', 'We are one of the leading Wholesale Traders of Fruit Juices, Cold Drink, Mineral Water, Kingfisher Soda, etc. Our efficient supply', 1, '1558999548.jpg', '20.00', 1, '2019-05-27 21:25:48', '2019-05-27 21:25:48'),
(11, '7up 1.5 Litre x 6pcs Case', 'Soft Drinks\r\nFruit Juices & Instant Drinks\r\nHealthy & Flavored Milk Drinks\r\nSports & Energy Drinks', 1, '1558999855.jpg', '150.00', 1, '2019-05-27 21:30:55', '2019-05-27 21:30:55'),
(12, 'Fruit and Vegetable Juice', 'Fruits and vegetables are “juicy foods” that consist mostly of water, but they also provide a variety of vitamins,', 1, '1559000063.jpg', '250.00', 1, '2019-05-27 21:34:23', '2019-05-27 21:34:23'),
(13, 'FANTA Soft Drink', 'FANTA Soft Drink Can Pineapple (6 x 300ml) FANTA \r\nSoft Drink Can Pineapple \r\n(6 x 300ml)', 1, '1559000227.jpg', '70.00', 1, '2019-05-27 21:37:07', '2019-05-27 21:37:07'),
(14, 'Juices Sweeteded Naturally', 'Add to your meal a healthy recommended vitamin c , in addition to a good taste of fruit that makes you fresh.', 1, '1559000375.jpg', '120.00', 1, '2019-05-27 21:39:35', '2019-05-27 21:39:35'),
(15, 'SEA FOOD', 'Seafood is any form of sea life regarded as food by humans, prominently including fish and shellfish. Shellfish include various species of molluscs', 1, '1559000843.jpg', '200.00', 1, '2019-05-27 21:47:23', '2019-05-27 21:47:23'),
(16, 'Meals Beef', 'From hearty beef stew to the best-ever burger recipe, take a look at our most tender, juicy and flavourful beef recipes', 1, '1559001144.jpg', '130.00', 1, '2019-05-27 21:52:24', '2019-05-27 21:52:24'),
(17, 'BURGER', 'Fast food brands are leading a weird form of socially aware online branding, and Burger King is doing it again.', 1, '1559001397.jpg', '75.00', 1, '2019-05-27 21:56:37', '2019-05-27 21:56:37'),
(19, 'One-Pot Chicken Fajita Pasta', 'This savory one-pot dish equates to minimal cleanup, 30 minutes of total time, and one happy, stuffed family.', 1, '1559001736.png', '35.00', 1, '2019-05-27 22:02:16', '2019-05-27 22:02:16'),
(20, 'Roast Pork with Winter Veggies', 'Tomatoes and fennel seeds flavor this pork dish, while sweet potatoes and white beans add color and crunch to Swiss chard', 1, '1559001921.jpg', '80.00', 1, '2019-05-27 22:05:21', '2019-05-27 22:05:21');

-- --------------------------------------------------------

--
-- Table structure for table `meal_item`
--

CREATE TABLE `meal_item` (
  `id` int(10) UNSIGNED NOT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meal_id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meal_item`
--

INSERT INTO `meal_item` (`id`, `discount`, `meal_id`, `item_id`, `created_at`, `updated_at`) VALUES
(1, '1', 3, 1, '2019-05-27 13:52:05', '2019-05-27 13:52:05'),
(3, '0', 7, 6, '2019-05-27 21:20:10', '2019-05-27 21:20:10'),
(4, '0', 10, 6, '2019-05-27 21:25:48', '2019-05-27 21:25:48'),
(5, '0', 11, 6, '2019-05-27 21:30:55', '2019-05-27 21:30:55'),
(6, '1', 12, 6, '2019-05-27 21:34:23', '2019-05-27 21:34:23'),
(7, '0', 13, 6, '2019-05-27 21:37:07', '2019-05-27 21:37:07'),
(8, '2', 14, 6, '2019-05-27 21:39:35', '2019-05-27 21:39:35'),
(9, '0', 15, 7, '2019-05-27 21:47:23', '2019-05-27 21:47:23'),
(10, '1', 15, 8, '2019-05-27 21:47:23', '2019-05-27 21:47:23'),
(11, '0', 16, 1, '2019-05-27 21:52:24', '2019-05-27 21:52:24'),
(12, '0', 16, 9, '2019-05-27 21:52:25', '2019-05-27 21:52:25'),
(13, '0', 17, 8, '2019-05-27 21:56:37', '2019-05-27 21:56:37'),
(14, '0', 17, 9, '2019-05-27 21:56:37', '2019-05-27 21:56:37'),
(15, '1', 17, 6, '2019-05-27 21:56:37', '2019-05-27 21:56:37'),
(16, '0', 19, 1, '2019-05-27 22:02:16', '2019-05-27 22:02:16'),
(17, '1', 19, 8, '2019-05-27 22:02:16', '2019-05-27 22:02:16'),
(18, '1', 20, 8, '2019-05-27 22:05:21', '2019-05-27 22:05:21'),
(19, '1', 20, 9, '2019-05-27 22:05:21', '2019-05-27 22:05:21');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `type`, `description`, `status`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'foods', 'Food', 'foods for all', 1, '1558972003imagejpg', 1, '2019-05-27 13:46:44', '2019-05-27 13:46:44'),
(2, ' hot Drinks', 'hot Drink', 'Display all Drinks  hot and very cheaper will be fine for You', 1, '1558997229imagejpg', 1, '2019-05-27 20:47:10', '2019-05-27 20:47:10'),
(3, 'col Drinks', 'col drink', 'Display coll drinks and good for all member familes', 1, '1558997308imagejpg', 1, '2019-05-27 20:48:28', '2019-05-27 20:48:28'),
(17, 'روايه الرجل العنكبوتي', 'Food', 'mmmmmmmmmmmmmmmmmmmmmm', 1, '1559289795imagejpg', 1, '2019-05-31 06:03:15', '2019-05-31 06:03:15');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_06_26_000000_create_shopping_cart_table', 1),
(4, '2019_03_06_171921_create_menu', 1),
(5, '2019_03_06_172417_create_item', 1),
(6, '2019_03_06_172617_create_meals', 1),
(7, '2019_03_06_172715_create_customer', 1),
(8, '2019_03_06_172825_create_order', 1),
(9, '2019_03_06_173124_create_comment', 1),
(10, '2019_03_06_193116_create_meal_item', 1),
(11, '2019_03_06_193210_create_order_item', 1),
(12, '2019_03_06_193333_create_order_meal', 1),
(13, '2019_03_06_200017_create_order_user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `cashIn` decimal(8,2) NOT NULL,
  `payment` decimal(8,2) NOT NULL,
  `change` decimal(8,2) NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_meal`
--

CREATE TABLE `order_meal` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `meal_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_user`
--

CREATE TABLE `order_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'normal',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ali Mohammed', 'ali@yahoo.com', NULL, '$2y$10$t/O8MhNfGkhcT0zT2uCphOV.cK6ofz0CgPijxr8Cu7Ax1cSOI85GC', 'admin', 'Z9N4OvMvVpIjmxTASvLA1gkhK0C7kwvNxSzM6Bj5F970nJCy6KEqAkdCji6B', '2019-05-27 13:38:56', '2019-05-27 13:38:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `items_title_unique` (`title`),
  ADD KEY `items_menu_id_foreign` (`menu_id`),
  ADD KEY `items_user_id_foreign` (`user_id`);

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `meals_title_unique` (`title`),
  ADD KEY `meals_user_id_foreign` (`user_id`);

--
-- Indexes for table `meal_item`
--
ALTER TABLE `meal_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `meal_item_meal_id_foreign` (`meal_id`),
  ADD KEY `meal_item_item_id_foreign` (`item_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_title_unique` (`title`),
  ADD KEY `menus_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_item_order_id_foreign` (`order_id`),
  ADD KEY `order_item_item_id_foreign` (`item_id`);

--
-- Indexes for table `order_meal`
--
ALTER TABLE `order_meal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_meal_order_id_foreign` (`order_id`),
  ADD KEY `order_meal_meal_id_foreign` (`meal_id`);

--
-- Indexes for table `order_user`
--
ALTER TABLE `order_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_user_order_id_foreign` (`order_id`),
  ADD KEY `order_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`id`,`instance`);

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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `meal_item`
--
ALTER TABLE `meal_item`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_meal`
--
ALTER TABLE `order_meal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_user`
--
ALTER TABLE `order_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`),
  ADD CONSTRAINT `items_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `meals`
--
ALTER TABLE `meals`
  ADD CONSTRAINT `meals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `meal_item`
--
ALTER TABLE `meal_item`
  ADD CONSTRAINT `meal_item_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `meal_item_meal_id_foreign` FOREIGN KEY (`meal_id`) REFERENCES `meals` (`id`);

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `order_item_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `order_item_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `order_meal`
--
ALTER TABLE `order_meal`
  ADD CONSTRAINT `order_meal_meal_id_foreign` FOREIGN KEY (`meal_id`) REFERENCES `meals` (`id`),
  ADD CONSTRAINT `order_meal_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `order_user`
--
ALTER TABLE `order_user`
  ADD CONSTRAINT `order_user_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
