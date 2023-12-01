-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 02:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(80) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `image`, `updated_at`, `created_at`) VALUES
(1, 'How to prepare a delicious gluten free sushi', 'Creating the perfect burger and pizza is an art, combining ingredients, techniques, and passion to craft dishes that truly delight the palate. Today, we\'ll unveil some closely guarded secrets and insider tips for mastering these beloved staples of the culinary world.\n\n1- Quality Beef: The heart of a perfect burger is top-notch beef. Opt for fresh, high-quality ground beef with a fat content of about 20% for the juiciest, most flavorful results.\n\n2- Seasoning: Simplicity is key here. A generous pinch of salt and black pepper just before cooking will enhance the beef\'s natural flavors without overshadowing them.\n\n3- Don’t Overwork the Meat: When forming your patties, be gentle. Overworking the meat can lead to dense, tough burgers. You want a patty that\'s firm enough to hold together, but not compressed.\n\n4- Cooking: High heat is crucial. Whether you\'re grilling or pan-searing, make sure your cooking surface is hot enough to form a nice crust on the patty, sealing in those delicious juices.\n\n5- Resting: Allow your cooked burgers to rest for a few minutes before serving. This lets the juices redistribute throughout the patty, ensuring a moist and flavorful bite.', 'uploads/1700857901_item_.png', '2023-11-24 18:31:41', '2023-11-24 18:31:41'),
(2, 'Exclusive baking lessons from the pastry king', 'Creating the perfect burger and pizza is an art, combining ingredients, techniques, and passion to craft dishes that truly delight the palate. Today, we\'ll unveil some closely guarded secrets and insider tips for mastering these beloved staples of the culinary world.\r\n\r\n1- Quality Beef: The heart of a perfect burger is top-notch beef. Opt for fresh, high-quality ground beef with a fat content of about 20% for the juiciest, most flavorful results.\r\n2- Seasoning: Simplicity is key here. A generous pinch of salt and black pepper just before cooking will enhance the beef\'s natural flavors without overshadowing them.\r\n3- Don’t Overwork the Meat: When forming your patties, be gentle. Overworking the meat can lead to dense, tough burgers. You want a patty that\'s firm enough to hold together, but not compressed.\r\n4- Cooking: High heat is crucial. Whether you\'re grilling or pan-searing, make sure your cooking surface is hot enough to form a nice crust on the patty, sealing in those delicious juices.\r\n5- Resting: Allow your cooked burgers to rest for a few minutes before serving. This lets the juices redistribute throughout the patty, ensuring a moist and flavorful bite.', 'uploads/1700858069_item_.png', '2023-11-24 18:34:29', '2023-11-24 18:34:29'),
(3, 'How to prepare the perfect fries in an air fryer', 'Creating the perfect burger and pizza is an art, combining ingredients, techniques, and passion to craft dishes that truly delight the palate. Today, we\'ll unveil some closely guarded secrets and insider tips for mastering these beloved staples of the culinary world.\r\n\r\n1- Quality Beef: The heart of a perfect burger is top-notch beef. Opt for fresh, high-quality ground beef with a fat content of about 20% for the juiciest, most flavorful results.\r\n2- Seasoning: Simplicity is key here. A generous pinch of salt and black pepper just before cooking will enhance the beef\'s natural flavors without overshadowing them.\r\n3- Don’t Overwork the Meat: When forming your patties, be gentle. Overworking the meat can lead to dense, tough burgers. You want a patty that\'s firm enough to hold together, but not compressed.\r\n4- Cooking: High heat is crucial. Whether you\'re grilling or pan-searing, make sure your cooking surface is hot enough to form a nice crust on the patty, sealing in those delicious juices.\r\n5- Resting: Allow your cooked burgers to rest for a few minutes before serving. This lets the juices redistribute throughout the patty, ensuring a moist and flavorful bite.', 'uploads/1700858096_item_.png', '2023-11-24 18:34:56', '2023-11-24 18:34:56'),
(4, 'How to prepare delicious chicken tenders', 'Creating the perfect burger and pizza is an art, combining ingredients, techniques, and passion to craft dishes that truly delight the palate. Today, we\'ll unveil some closely guarded secrets and insider tips for mastering these beloved staples of the culinary world.\r\n\r\n1- Quality Beef: The heart of a perfect burger is top-notch beef. Opt for fresh, high-quality ground beef with a fat content of about 20% for the juiciest, most flavorful results.\r\n2- Seasoning: Simplicity is key here. A generous pinch of salt and black pepper just before cooking will enhance the beef\'s natural flavors without overshadowing them.\r\n3- Don’t Overwork the Meat: When forming your patties, be gentle. Overworking the meat can lead to dense, tough burgers. You want a patty that\'s firm enough to hold together, but not compressed.\r\n4- Cooking: High heat is crucial. Whether you\'re grilling or pan-searing, make sure your cooking surface is hot enough to form a nice crust on the patty, sealing in those delicious juices.\r\n5- Resting: Allow your cooked burgers to rest for a few minutes before serving. This lets the juices redistribute throughout the patty, ensuring a moist and flavorful bite.', 'uploads/1700858127_item_.png', '2023-11-24 18:35:27', '2023-11-24 18:35:27'),
(5, '5 great cooking gadgets you can buy to save time', 'Creating the perfect burger and pizza is an art, combining ingredients, techniques, and passion to craft dishes that truly delight the palate. Today, we\'ll unveil some closely guarded secrets and insider tips for mastering these beloved staples of the culinary world.\r\n\r\n1- Quality Beef: The heart of a perfect burger is top-notch beef. Opt for fresh, high-quality ground beef with a fat content of about 20% for the juiciest, most flavorful results.\r\n2- Seasoning: Simplicity is key here. A generous pinch of salt and black pepper just before cooking will enhance the beef\'s natural flavors without overshadowing them.\r\n3- Don’t Overwork the Meat: When forming your patties, be gentle. Overworking the meat can lead to dense, tough burgers. You want a patty that\'s firm enough to hold together, but not compressed.\r\n4- Cooking: High heat is crucial. Whether you\'re grilling or pan-searing, make sure your cooking surface is hot enough to form a nice crust on the patty, sealing in those delicious juices.\r\n5- Resting: Allow your cooked burgers to rest for a few minutes before serving. This lets the juices redistribute throughout the patty, ensuring a moist and flavorful bite.', 'uploads/1700858152_item_.png', '2023-11-24 18:35:52', '2023-11-24 18:35:52'),
(6, 'The secret tips & tricks to prepare a perfect burger', 'Creating the perfect burger and pizza is an art, combining ingredients, techniques, and passion to craft dishes that truly delight the palate. Today, we\'ll unveil some closely guarded secrets and insider tips for mastering these beloved staples of the culinary world.\r\n\r\n1- Quality Beef: The heart of a perfect burger is top-notch beef. Opt for fresh, high-quality ground beef with a fat content of about 20% for the juiciest, most flavorful results.\r\n2- Seasoning: Simplicity is key here. A generous pinch of salt and black pepper just before cooking will enhance the beef\'s natural flavors without overshadowing them.\r\n3- Don’t Overwork the Meat: When forming your patties, be gentle. Overworking the meat can lead to dense, tough burgers. You want a patty that\'s firm enough to hold together, but not compressed.\r\n4- Cooking: High heat is crucial. Whether you\'re grilling or pan-searing, make sure your cooking surface is hot enough to form a nice crust on the patty, sealing in those delicious juices.\r\n5- Resting: Allow your cooked burgers to rest for a few minutes before serving. This lets the juices redistribute throughout the patty, ensuring a moist and flavorful bite.', 'uploads/1700858258_item_.png', '2023-11-24 18:37:38', '2023-11-24 18:37:38'),
(7, '7 delicious cheesecake recipes you can prepare', 'Creating the perfect burger and pizza is an art, combining ingredients, techniques, and passion to craft dishes that truly delight the palate. Today, we\'ll unveil some closely guarded secrets and insider tips for mastering these beloved staples of the culinary world.\r\n\r\n1- Quality Beef: The heart of a perfect burger is top-notch beef. Opt for fresh, high-quality ground beef with a fat content of about 20% for the juiciest, most flavorful results.\r\n2- Seasoning: Simplicity is key here. A generous pinch of salt and black pepper just before cooking will enhance the beef\'s natural flavors without overshadowing them.\r\n3- Don’t Overwork the Meat: When forming your patties, be gentle. Overworking the meat can lead to dense, tough burgers. You want a patty that\'s firm enough to hold together, but not compressed.\r\n4- Cooking: High heat is crucial. Whether you\'re grilling or pan-searing, make sure your cooking surface is hot enough to form a nice crust on the patty, sealing in those delicious juices.\r\n5- Resting: Allow your cooked burgers to rest for a few minutes before serving. This lets the juices redistribute throughout the patty, ensuring a moist and flavorful bite.', 'uploads/1700858335_item_.png', '2023-11-24 18:38:55', '2023-11-24 18:38:55'),
(8, '5 great pizza restaurants you should visit this city', 'Creating the perfect burger and pizza is an art, combining ingredients, techniques, and passion to craft dishes that truly delight the palate. Today, we\'ll unveil some closely guarded secrets and insider tips for mastering these beloved staples of the culinary world.\r\n\r\n1- Quality Beef: The heart of a perfect burger is top-notch beef. Opt for fresh, high-quality ground beef with a fat content of about 20% for the juiciest, most flavorful results.\r\n2- Seasoning: Simplicity is key here. A generous pinch of salt and black pepper just before cooking will enhance the beef\'s natural flavors without overshadowing them.\r\n3- Don’t Overwork the Meat: When forming your patties, be gentle. Overworking the meat can lead to dense, tough burgers. You want a patty that\'s firm enough to hold together, but not compressed.\r\n4- Cooking: High heat is crucial. Whether you\'re grilling or pan-searing, make sure your cooking surface is hot enough to form a nice crust on the patty, sealing in those delicious juices.\r\n5- Resting: Allow your cooked burgers to rest for a few minutes before serving. This lets the juices redistribute throughout the patty, ensuring a moist and flavorful bite.', 'uploads/1700858380_item_.png', '2023-11-24 18:39:40', '2023-11-24 18:39:40'),
(9, '5 great cooking gadgets you can buy to save time', 'Creating the perfect burger and pizza is an art, combining ingredients, techniques, and passion to craft dishes that truly delight the palate. Today, we\'ll unveil some closely guarded secrets and insider tips for mastering these beloved staples of the culinary world.\r\n\r\n1- Quality Beef: The heart of a perfect burger is top-notch beef. Opt for fresh, high-quality ground beef with a fat content of about 20% for the juiciest, most flavorful results.\r\n2- Seasoning: Simplicity is key here. A generous pinch of salt and black pepper just before cooking will enhance the beef\'s natural flavors without overshadowing them.\r\n3- Don’t Overwork the Meat: When forming your patties, be gentle. Overworking the meat can lead to dense, tough burgers. You want a patty that\'s firm enough to hold together, but not compressed.\r\n4- Cooking: High heat is crucial. Whether you\'re grilling or pan-searing, make sure your cooking surface is hot enough to form a nice crust on the patty, sealing in those delicious juices.\r\n5- Resting: Allow your cooked burgers to rest for a few minutes before serving. This lets the juices redistribute throughout the patty, ensuring a moist and flavorful bite.', 'uploads/1700858419_item_.png', '2023-11-24 18:40:20', '2023-11-24 18:40:20'),
(10, 'How to prepare a delicious gluten free wraps', 'Creating the perfect burger and pizza is an art, combining ingredients, techniques, and passion to craft dishes that truly delight the palate. Today, we\'ll unveil some closely guarded secrets and insider tips for mastering these beloved staples of the culinary world.\r\n\r\n1- Quality Beef: The heart of a perfect burger is top-notch beef. Opt for fresh, high-quality ground beef with a fat content of about 20% for the juiciest, most flavorful results.\r\n2- Seasoning: Simplicity is key here. A generous pinch of salt and black pepper just before cooking will enhance the beef\'s natural flavors without overshadowing them.\r\n3- Don’t Overwork the Meat: When forming your patties, be gentle. Overworking the meat can lead to dense, tough burgers. You want a patty that\'s firm enough to hold together, but not compressed.\r\n4- Cooking: High heat is crucial. Whether you\'re grilling or pan-searing, make sure your cooking surface is hot enough to form a nice crust on the patty, sealing in those delicious juices.\r\n5- Resting: Allow your cooked burgers to rest for a few minutes before serving. This lets the juices redistribute throughout the patty, ensuring a moist and flavorful bite.', 'uploads/1700858464_item_.png', '2023-11-24 18:41:04', '2023-11-24 18:41:04'),
(11, 'Top 20 simple and quick desserts for kids', 'Creating the perfect burger and pizza is an art, combining ingredients, techniques, and passion to craft dishes that truly delight the palate. Today, we\'ll unveil some closely guarded secrets and insider tips for mastering these beloved staples of the culinary world.\r\n\r\n1- Quality Beef: The heart of a perfect burger is top-notch beef. Opt for fresh, high-quality ground beef with a fat content of about 20% for the juiciest, most flavorful results.\r\n2- Seasoning: Simplicity is key here. A generous pinch of salt and black pepper just before cooking will enhance the beef\'s natural flavors without overshadowing them.\r\n3- Don’t Overwork the Meat: When forming your patties, be gentle. Overworking the meat can lead to dense, tough burgers. You want a patty that\'s firm enough to hold together, but not compressed.\r\n4- Cooking: High heat is crucial. Whether you\'re grilling or pan-searing, make sure your cooking surface is hot enough to form a nice crust on the patty, sealing in those delicious juices.\r\n5- Resting: Allow your cooked burgers to rest for a few minutes before serving. This lets the juices redistribute throughout the patty, ensuring a moist and flavorful bite.', 'uploads/1700858507_item_.png', '2023-11-24 18:41:47', '2023-11-24 18:41:47'),
(12, 'How to prepare a delicious ramen noodles', 'Creating the perfect burger and pizza is an art, combining ingredients, techniques, and passion to craft dishes that truly delight the palate. Today, we\'ll unveil some closely guarded secrets and insider tips for mastering these beloved staples of the culinary world.\r\n\r\n1- Quality Beef: The heart of a perfect burger is top-notch beef. Opt for fresh, high-quality ground beef with a fat content of about 20% for the juiciest, most flavorful results.\r\n2- Seasoning: Simplicity is key here. A generous pinch of salt and black pepper just before cooking will enhance the beef\'s natural flavors without overshadowing them.\r\n3- Don’t Overwork the Meat: When forming your patties, be gentle. Overworking the meat can lead to dense, tough burgers. You want a patty that\'s firm enough to hold together, but not compressed.\r\n4- Cooking: High heat is crucial. Whether you\'re grilling or pan-searing, make sure your cooking surface is hot enough to form a nice crust on the patty, sealing in those delicious juices.\r\n5- Resting: Allow your cooked burgers to rest for a few minutes before serving. This lets the juices redistribute throughout the patty, ensuring a moist and flavorful bite.', 'uploads/1700858560_item_.png', '2023-11-24 18:42:40', '2023-11-24 18:42:40');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `total` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(10) NOT NULL DEFAULT 'Waiting'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `date`, `time`, `name`, `phone`, `total`, `user_id`, `updated_at`, `created_at`, `status`) VALUES
(2, '2023-11-25', '01:27:00', 'Malak', '01022039241', 1, 1, '2023-11-24 22:07:26', '2023-11-24 21:29:36', 'Accepted'),
(3, '2023-11-25', '01:35:00', 'Malak', '01022039241', 3, 1, '2023-11-24 22:10:36', '2023-11-24 21:35:27', 'Rejected'),
(4, '2023-11-25', '01:44:00', 'Mint Lemonade', '01022039241', 5, 1, '2023-11-24 21:44:19', '2023-11-24 21:44:19', 'Waiting'),
(5, '2023-11-25', '02:11:00', 'sara mohamad', '01022039241', 4, 2, '2023-11-24 22:14:32', '2023-11-24 22:11:18', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `updated_at`, `created_at`) VALUES
(1, 'Malak', 'malak@gmail.com', 'message', 'loremloremloremlorem', '2023-11-23 20:24:59', '2023-11-23 20:24:59');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `description`, `updated_at`, `created_at`, `image`) VALUES
(1, 'Fried Eggs', '9.99', 'Made with eggs, lettuce, salt, oil and other ingredients.', '2023-11-23 09:38:39', '2023-11-23 09:57:10', 'uploads/1700739519_product_.png'),
(2, 'Hawaiian Pizza', '15.99', 'Made with eggs, lettuce, salt, oil and other ingredients.', '2023-11-23 09:38:18', '2023-11-23 09:57:46', 'uploads/1700739498_product_.png'),
(3, 'Martinez Cocktail', '7.50', 'Made with eggs, lettuce, salt, oil and other ingredients.', '2023-11-23 09:37:55', '2023-11-23 10:03:41', 'uploads/1700739475_product_.png'),
(6, 'Mint Lemonade', '5.89', 'Made with eggs, lettuce, salt, oil and other ingredients.', '2023-11-23 09:43:17', '2023-11-23 09:43:17', 'uploads/1700739797_item_.png'),
(7, 'Butterscotch Cake', '20.99', 'Made with eggs, lettuce, salt, oil and other ingredients.', '2023-11-23 09:48:30', '2023-11-23 09:48:30', 'uploads/1700740110_item_.png'),
(8, 'Chocolate Icecream', '18.05', 'Made with chocolate, milk, syrup, and other ingredients.', '2023-11-23 09:50:12', '2023-11-23 09:50:12', 'uploads/1700740212_item_.png'),
(9, 'Cheese Burger', '12.55', 'Made with meat, cheese, lettuce, and other ingredients.', '2023-11-23 09:52:29', '2023-11-23 09:52:29', 'uploads/1700740349_item_.png'),
(10, 'Classic Waffles', '12.99', 'Made with milk, egg, flour, toppings, and other ingredients.', '2023-11-23 09:53:54', '2023-11-23 09:53:54', 'uploads/1700740434_item_.png');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_23_093607_create_items_table', 2),
(6, '2023_11_23_110503_create_users_table', 3),
(7, '2023_11_23_112321_add_image_to_items_table', 4),
(8, '2023_11_23_133711_create_users_table', 5),
(9, '2023_11_23_134634_create_users_table', 6),
(10, '2023_11_23_135031_create_users_table', 7),
(12, '2023_11_23_221419_create_contacts_table', 9),
(13, '2023_11_24_194855_create_blogs_table', 10),
(14, '2023_11_23_202334_create_books_table', 11),
(15, '2023_11_24_235758_add_status_to_books_table', 12);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `image` varchar(200) NOT NULL DEFAULT 'uploads/default-profile.jpg',
  `age` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `gender` enum('Male','Female','NA') NOT NULL DEFAULT 'NA',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `image`, `age`, `birthdate`, `address`, `phone`, `gender`, `updated_at`, `created_at`) VALUES
(1, 'Malak', 'malak@gmail.com', '$2y$12$tzlcBJFVcXdZESu/Qv3Iw.znPSt8iR6wQXrE3G.8aczop/zJzhsd.', 'admin', 'uploads/default-profile.jpg', '21', '2003-02-23', 'Egypt, Cairo, Rehab', '01022039241', 'Female', '2023-11-23 11:51:28', '2023-11-23 11:51:28'),
(2, 'Sara', 'sara@gmail.com', '$2y$12$K25y2o01c.OFKr4xdDxeauw2vk8Z5BYu.GXym12aY.S6eN.oU6BgW', 'user', 'uploads/default-profile.jpg', NULL, NULL, NULL, NULL, 'NA', '2023-11-23 12:28:04', '2023-11-23 12:28:04'),
(3, 'Mohamed', 'mohamed@gmail.com', '$2y$12$6h.kwZevIZTf3uYM.ga0zeZFraD2WSAF9nYHGFPFPHJgtUVZO6GnC', 'user', 'uploads/default-profile.jpg', NULL, NULL, NULL, NULL, 'NA', '2023-11-28 13:26:22', '2023-11-28 13:26:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_user_id_foreign` (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
