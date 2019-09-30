-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2019 at 04:20 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent_dress`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `product_category_id`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Polo', 2, '1568473212.jpg', '2019-09-14 09:00:12', '2019-09-14 09:00:12'),
(2, 'tlec', 2, '1568476278.jpg', '2019-09-14 09:51:18', '2019-09-14 09:51:18');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `country_id`, `city`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dhaka', '2019-09-16 15:38:46', '2019-09-16 15:38:46'),
(2, 1, 'Comilla', '2019-09-16 15:38:46', '2019-09-16 15:38:46'),
(3, 1, 'Chittagong', '2019-09-16 15:38:46', '2019-09-16 15:38:46'),
(4, 2, 'Delhi', '2019-09-16 15:38:46', '2019-09-16 15:38:46'),
(5, 2, 'Kalkutta', '2019-09-16 15:38:47', '2019-09-16 15:38:47'),
(6, 2, 'Mombai', '2019-09-16 15:38:47', '2019-09-16 15:38:47'),
(7, 3, 'New York', '2019-09-16 15:38:47', '2019-09-16 15:38:47'),
(8, 3, 'Washington DC', '2019-09-16 15:38:47', '2019-09-16 15:38:47'),
(9, 3, 'San Fransisco', '2019-09-16 15:38:47', '2019-09-16 15:38:47');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `commentable_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentable_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commented_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commented_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '1',
  `rate` double(15,8) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `commentable_id`, `commentable_type`, `commented_id`, `commented_type`, `comment`, `approved`, `rate`, `created_at`, `updated_at`) VALUES
(1, '2', 'App\\Product', '3', 'App\\User', 'his ring looks really elegant and dainty!! Love it!! This is really a pretty ring. get all kinds of compliments, I normally wear an 8 on my ring finger, so I orderd the size 10 for my pointer finger. perfect fit. I bought the clad & it is awesome', 1, 5.00000000, '2019-09-17 13:06:28', '2019-09-17 13:06:28');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Bangladesh', '2019-09-16 15:38:46', '2019-09-16 15:38:46'),
(2, 'India', '2019-09-16 15:38:46', '2019-09-16 15:38:46'),
(3, 'America', '2019-09-16 15:38:46', '2019-09-16 15:38:46');

-- --------------------------------------------------------

--
-- Table structure for table `customer_queries`
--

CREATE TABLE `customer_queries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_queries`
--

INSERT INTO `customer_queries` (`id`, `title`, `user_id`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'habijabi', 1, 'dsfgdnv', '/images/1568725272_cste2.jpg', '2019-09-17 07:01:12', '2019-09-17 07:01:12');

-- --------------------------------------------------------

--
-- Table structure for table `customer_query_replies`
--

CREATE TABLE `customer_query_replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reply` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_query_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_query_replies`
--

INSERT INTO `customer_query_replies` (`id`, `reply`, `customer_query_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'sdfghn', 1, 1, '2019-09-17 07:44:12', '2019-09-17 07:44:12');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faq_category_id` int(11) NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci,
  `upvoke` int(11) DEFAULT NULL,
  `downvoke` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq_categories`
--

CREATE TABLE `faq_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `type`, `image`, `type_id`, `created_at`, `updated_at`) VALUES
(1, 'App\\Product', '1568542363.png', 1, '2019-09-15 04:12:43', '2019-09-15 04:12:43'),
(5, 'App\\Product', '1568561707.jpg', 3, '2019-09-15 09:35:07', '2019-09-15 09:35:07'),
(6, 'App\\Product', '1568561707.jpg', 3, '2019-09-15 09:35:07', '2019-09-15 09:35:07'),
(7, 'App\\Product', '1568561707.jpg', 3, '2019-09-15 09:35:07', '2019-09-15 09:35:07'),
(9, 'App\\Product', '1568568579.jpg', 2, '2019-09-15 11:29:39', '2019-09-15 11:29:39'),
(10, 'App\\Product', '1568568579.jpg', 2, '2019-09-15 11:29:39', '2019-09-15 11:29:39'),
(11, 'App\\User', '1568794962.jpg', 4, '2019-09-18 02:22:42', '2019-09-18 02:22:42'),
(12, 'App\\User', '1568809178.jpg', 1, '2019-09-18 06:19:38', '2019-09-18 06:19:38');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transection_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `paypal_fee` double NOT NULL,
  `tax` double NOT NULL,
  `currencty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `title`, `payer_name`, `payer_email`, `transection_id`, `invoice_id`, `price`, `paypal_fee`, `tax`, `currencty`, `payment_method`, `paid`, `created_at`, `updated_at`) VALUES
(1, 'product purchase#15687895806007', 'Abu Saleh Matul', 'saleh.matul@gmail.com', '1568808576', '15687895806007', 388, 0, 0, 'USD', 'paypal', 1, '2019-09-18 06:09:36', '2019-09-18 06:09:36'),
(2, 'product purchase#15687895806007', 'Abu Saleh Matul', 'saleh.matul@gmail.com', '1568808763', '15687895806007', 388, 0, 0, 'USD', 'paypal', 1, '2019-09-18 06:12:43', '2019-09-18 06:12:43'),
(3, 'product purchase#1568791651332', 'Abu Saleh Matul', 'saleh.matul@gmail.com', '1568808763', '1568791651332', 381, 0, 0, 'USD', 'paypal', 1, '2019-09-18 06:12:43', '2019-09-18 06:12:43'),
(4, 'product purchase#1568791655837', 'Abu Saleh Matul', 'saleh.matul@gmail.com', '1568808763', '1568791655837', 400, 0, 0, 'USD', 'paypal', 1, '2019-09-18 06:12:43', '2019-09-18 06:12:43'),
(5, 'product purchase#1568797888393', 'Abu Saleh Matul', 'saleh.matul@gmail.com', '1568808763', '1568797888393', 381, 0, 0, 'USD', 'paypal', 1, '2019-09-18 06:12:43', '2019-09-18 06:12:43'),
(6, 'product purchase#15688040276316', 'Abu Saleh Matul', 'saleh.matul@gmail.com', '1568808763', '15688040276316', 388, 0, 0, 'USD', 'paypal', 1, '2019-09-18 06:12:43', '2019-09-18 06:12:43');

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
(3, '2019_09_11_192249_create_countries_table', 1),
(4, '2019_09_11_192322_create_cities_table', 1),
(5, '2019_09_13_103206_create_comments_table', 2),
(6, '2019_09_13_144956_create_site_settings_table', 3),
(7, '2019_09_13_145227_create_images_table', 3),
(8, '2019_09_13_145258_create_faqs_table', 3),
(9, '2019_09_13_145328_create_user_traffic_table', 3),
(10, '2019_09_13_145402_create_products_table', 3),
(11, '2019_09_13_145421_create_invoices_table', 3),
(12, '2019_09_13_145503_create_brands_table', 3),
(13, '2019_09_13_145530_create_product_categories_table', 3),
(14, '2019_09_14_113240_create_faq_categories_table', 3),
(15, '2019_09_15_112442_add_quantity', 4),
(16, '2019_09_16_133803_create_views_table', 5),
(17, '2019_09_16_150741_add_height', 6),
(18, '2019_09_13_194359_create_events_table', 7),
(19, '2019_09_16_160945_create_views_table', 8),
(20, '2019_09_17_160321_create_orders_table', 9),
(21, '2019_09_17_160427_order_setting', 10),
(22, '2019_09_18_085858_create_user_cards_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_batch` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `tax` double NOT NULL DEFAULT '0',
  `over_date_comission` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `order_batch`, `quantity`, `total_amount`, `start_date`, `end_date`, `tax`, `over_date_comission`, `created_at`, `updated_at`) VALUES
(1, 2, 3, '15687454508604', 2, 400, '2019-09-17', '2019-10-17', 0.3, NULL, '2019-09-17 12:37:30', '2019-09-17 12:37:30'),
(2, 35, 3, '15687457318898', 1, 381, '2019-09-17', '2019-10-17', 0.3, NULL, '2019-09-17 12:42:11', '2019-09-17 12:42:11'),
(3, 30, 4, '15687895806007', 1, 388, '2019-09-18', '2019-10-19', 0.3, NULL, '2019-09-18 00:53:00', '2019-09-18 00:53:00'),
(4, 35, 4, '1568791651332', 1, 381, '2019-09-18', '2019-10-18', 0.3, NULL, '2019-09-18 01:27:31', '2019-09-18 01:27:31'),
(5, 27, 4, '1568791655837', 1, 400, '2019-09-18', '2019-10-18', 0.3, NULL, '2019-09-18 01:27:35', '2019-09-18 01:27:35'),
(6, 35, 4, '1568797888393', 1, 381, '2019-09-18', '2019-10-18', 0.3, NULL, '2019-09-18 03:11:28', '2019-09-18 03:11:28'),
(7, 30, 4, '15688040276316', 1, 388, '2019-09-18', '2019-10-18', 0.3, NULL, '2019-09-18 04:53:47', '2019-09-18 04:53:47');

-- --------------------------------------------------------

--
-- Table structure for table `orders_settings`
--

CREATE TABLE `orders_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_range` int(11) NOT NULL DEFAULT '30',
  `tax_comission` double NOT NULL DEFAULT '0.3',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders_settings`
--

INSERT INTO `orders_settings` (`id`, `date_range`, `tax_comission`, `created_at`, `updated_at`) VALUES
(1, 30, 0.3, NULL, NULL);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` double NOT NULL,
  `unique_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_by` int(11) NOT NULL,
  `last_rent` date DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0:inactive,1:active',
  `availability` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0:not,1:yes',
  `category_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `highlight` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `description`, `price`, `unique_code`, `added_by`, `last_rent`, `status`, `availability`, `category_id`, `brand_id`, `created_at`, `updated_at`, `quantity`, `highlight`) VALUES
(2, 'Okla', 'All my solution that I tried or solved with c++ .. problem that been solved had an extension (.sol) . and which are not being solved or a causal raw source code of 1st attempt has (.tried) ..', 39, '#951161', 1, NULL, 1, 1, 2, 1, '2019-09-15 09:34:46', '2019-09-15 11:27:25', 23, 1),
(4, 'Dr. Francisco Herman Sr.', 'Qui ea rem vel. Nam distinctio explicabo quidem quae et. Omnis dolores et velit iste. Sunt doloremque necessitatibus molestiae.', 351, '#f4OpS', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:25', '2019-09-16 13:46:25', 30, 1),
(5, 'Ellis Dickinson', 'Odit praesentium consequuntur deserunt est. Ullam accusamus est quaerat. Nam id nemo quia totam vel. Id possimus qui doloremque id dolores illo. Sunt velit eligendi impedit esse quibusdam.', 89, '#SOFSj', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:26', '2019-09-16 13:46:26', 30, 1),
(7, 'Prof. Arely Robel', 'Omnis inventore molestiae non et. Facilis commodi dicta culpa repellendus. Molestiae ea sint saepe quaerat sunt sit.', 365, '#2XfYH', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:26', '2019-09-16 13:46:26', 30, 1),
(8, 'Casimer Cormier', 'Laborum et hic porro natus sed ipsum. Vitae sit nisi doloribus nam minima ducimus. Voluptas qui quidem qui velit aliquid quidem in. Deserunt odit libero iure deserunt totam est cumque.', 9, '#4Medc', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:26', '2019-09-16 13:46:26', 30, 1),
(9, 'Laurel Bernhard', 'Fugiat eos consectetur consequatur soluta. Id earum quos ratione est nemo animi. Eveniet aliquam molestiae id sint laudantium nam.', 290, '#fJEsU', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:26', '2019-09-16 13:46:26', 30, 1),
(10, 'Ms. Rebeka Ferry', 'Ut molestias sit eius ut sint laborum. Hic voluptas voluptas sint ea. Sit fugit dolores molestiae voluptas qui quo corporis. Quo voluptatibus aliquid deserunt sed soluta labore accusantium.', 58, '#KT9yP', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:26', '2019-09-16 13:46:26', 30, 1),
(11, 'Vergie Howell', 'Omnis nihil est porro. Accusamus placeat eum fugit dolorum omnis. Id odio eaque aut quo distinctio ipsum. Nemo dolor velit omnis praesentium.', 347, '#jEcV7', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:26', '2019-09-16 13:46:26', 30, 1),
(12, 'Mae Murphy', 'Id ipsum quidem ab aut. Alias sunt hic animi vel earum voluptatum illum. Illo non non eos doloribus. Quia corrupti autem dolorem.', 316, '#ws1N1', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:26', '2019-09-16 13:46:26', 30, 1),
(13, 'Prof. Heloise Ortiz PhD', 'Quo laboriosam rem inventore porro atque cum culpa eligendi. Nihil quod omnis totam ratione blanditiis eos assumenda odio. Doloribus temporibus et harum.', 78, '#gkZkN', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:27', '2019-09-16 13:46:27', 30, 1),
(14, 'Lauriane Bradtke', 'Hic itaque molestiae sed. Quia illo nemo tenetur sint.', 198, '#CEbuI', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:27', '2019-09-16 13:46:27', 30, 1),
(15, 'Mr. Domenick Kshlerin', 'Qui aut aut temporibus cupiditate. Nihil iste maxime nesciunt fuga. Saepe quis maiores laboriosam non tempora sit. Provident laudantium dolor ut.', 334, '#uBSnw', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:27', '2019-09-16 13:46:27', 30, 1),
(16, 'Keaton Reynolds', 'Eligendi ut sed architecto ut. Inventore ipsa deserunt odit ab. Reiciendis laudantium laborum cum deserunt quibusdam.', 13, '#RuOv8', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:27', '2019-09-16 13:46:27', 30, 1),
(17, 'Kianna Parker', 'Sint eos aut dolorum rerum voluptatem. Magnam ut quam deserunt doloribus. Aut aliquid architecto neque ut ut. Ducimus perspiciatis voluptas nesciunt eum totam asperiores labore.', 42, '#uZXLL', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:27', '2019-09-16 13:46:27', 30, 1),
(18, 'Fanny Corkery', 'Tempore molestiae similique qui magni. Itaque enim ipsam aperiam. Consequatur facilis officia quaerat enim iste.', 360, '#RXPLP', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:27', '2019-09-16 13:46:27', 30, 1),
(19, 'Dr. Nelson Sawayn', 'Voluptas animi consectetur eligendi numquam. Recusandae eveniet qui sunt non aliquam. Itaque eum possimus sit et amet.', 1, '#ofzoQ', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:27', '2019-09-16 13:46:27', 30, 1),
(20, 'Mohamed Bechtelar', 'Quae sunt provident aliquid aspernatur aperiam dolorem sunt a. Mollitia voluptas non eveniet facere.', 147, '#2rDiA', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:27', '2019-09-16 13:46:27', 30, 1),
(21, 'Elna Kling IV', 'Exercitationem et voluptatem officia. Laudantium qui sed voluptatibus. Ullam ex similique est officia unde laborum quibusdam. Ab et numquam sunt. Quia unde eaque magnam.', 265, '#VNOG3', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:27', '2019-09-16 13:46:27', 30, 1),
(22, 'Raphael Zieme Sr.', 'Facere beatae nam quo consequuntur alias ea. Cumque officiis eum voluptas doloribus accusamus sit. Aspernatur molestiae natus nihil ipsam nam sed exercitationem.', 337, '#9uj9c', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:27', '2019-09-16 13:46:27', 30, 1),
(23, 'Harry Hane', 'Debitis repellat et recusandae consequatur aut mollitia. Ipsum cumque optio enim perspiciatis. Sed amet nisi deserunt sit.', 340, '#4BDcY', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:27', '2019-09-16 13:46:27', 30, 1),
(24, 'Carli Zemlak', 'Quas sed possimus atque alias officiis dolorem rerum. Quo ut dolore quo non qui aut modi. Ullam natus illum quibusdam aut ipsa. Rerum commodi perspiciatis mollitia explicabo quia.', 252, '#U9NtO', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:27', '2019-09-16 13:46:27', 30, 1),
(25, 'Zella Thiel PhD', 'Unde dolor aliquid iure rerum ipsum omnis. Sit sint eos quas officia atque quidem nihil. Dolorum temporibus sint quasi accusamus cumque sint. Aut et officia et exercitationem ad nobis autem mollitia.', 367, '#qU3t4', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:27', '2019-09-16 13:46:27', 30, 1),
(26, 'Laurence Yundt', 'Eius a voluptatem dolore. Ut magnam ab cupiditate libero ad dicta. Beatae velit facilis aperiam nisi. Earum animi ducimus laboriosam blanditiis suscipit.', 220, '#1NJ3F', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:27', '2019-09-16 13:46:27', 30, 1),
(27, 'Lavonne Cronin', 'Earum tempore accusamus eligendi et quia. Expedita quo culpa repudiandae aliquam laborum. Adipisci dicta deserunt nisi provident adipisci voluptas. Sint tempora omnis enim deserunt.', 399, '#mqo1j', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:27', '2019-09-16 13:46:27', 30, 1),
(28, 'Ms. Callie Mosciski III', 'Occaecati est libero harum quia enim autem sequi impedit. Debitis exercitationem ducimus facere aliquam molestiae sint quos. Quam ut necessitatibus quis voluptas sapiente voluptatem.', 93, '#wsz6E', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:27', '2019-09-16 13:46:27', 30, 1),
(29, 'Viva Sanford', 'Vel voluptas laboriosam ea minus iusto beatae. Saepe sit sit non rem sit explicabo. Reiciendis occaecati dicta voluptatem.', 39, '#y6EP6', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:27', '2019-09-16 13:46:27', 30, 1),
(30, 'Dr. Virginie Schmeler', 'Ut est eum eveniet ab ipsam maxime maxime consectetur. Deserunt veniam rerum atque repellendus. Et minus aut rerum nulla.', 387, '#gjlHc', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:27', '2019-09-16 13:46:27', 30, 1),
(31, 'Mrs. Lauretta Prosacco DDS', 'Ut tempora ut quod eum. Dolores sed iure non. Vel optio dolor accusantium odit. Incidunt recusandae eligendi voluptatum eum sunt officia.', 87, '#fNgbl', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:27', '2019-09-16 13:46:27', 30, 1),
(32, 'Finn Lehner', 'Voluptatum officiis nesciunt quibusdam. Aut odit velit aperiam quos. Animi voluptates in illo et. Quasi sed repellendus sit.', 235, '#C7lqw', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:27', '2019-09-16 13:46:27', 30, 1),
(33, 'Hilton Dare', 'Aliquid qui minima ad quo possimus culpa quisquam. Nemo et nobis debitis natus. Ut quo placeat fuga rerum adipisci rem qui at. Ex sit explicabo architecto.', 93, '#u3KlK', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:27', '2019-09-16 13:46:27', 30, 1),
(34, 'Ms. Janis Hodkiewicz', 'Recusandae quia ipsam provident perspiciatis est perspiciatis reiciendis. Autem amet consequatur consequatur alias quia.', 44, '#tLE6m', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:27', '2019-09-16 13:46:27', 30, 1),
(35, 'Dr. Stephan Gerhold', 'Facilis amet numquam consectetur. Quae sit sequi ex quo. Sint eum dolor aut fuga. Consequatur a nam enim. Fuga officiis ab voluptates accusamus dignissimos qui reiciendis eius.', 380, '#xH5By', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:27', '2019-09-16 13:46:27', 30, 1),
(36, 'Anthony Padberg', 'Aliquid consectetur rerum excepturi sint et non. Ut nulla perspiciatis dolor qui reprehenderit vero. Non vero esse qui qui. Aut omnis et sapiente quia assumenda ipsum adipisci.', 217, '#f1v8U', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:28', '2019-09-16 13:46:28', 30, 1),
(37, 'Jaida Schaefer', 'Est nobis ullam optio rem voluptas. Qui est neque aut doloribus. Molestiae quam illo et ab totam autem. Rerum eveniet facilis unde et ut aut saepe.', 147, '#stPWf', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:28', '2019-09-16 13:46:28', 30, 1),
(38, 'Deron Pfannerstill', 'Ut debitis suscipit et ratione sed est laudantium. Laudantium quaerat aut quisquam repudiandae iure eius et aut. Est reiciendis ut sit officiis consectetur.', 238, '#5Ywh9', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:28', '2019-09-16 13:46:28', 30, 1),
(39, 'Dr. Katelin Harber III', 'Impedit tempore porro perferendis ut soluta ipsa mollitia. Blanditiis in illo perferendis perspiciatis. Autem repudiandae repellendus incidunt dolorem autem dolor. Ut vel dolore sint nostrum.', 337, '#y6CZT', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:28', '2019-09-16 13:46:28', 30, 1),
(40, 'Miss Madelyn Grimes V', 'Quis repudiandae sit veniam. Est enim sit occaecati quaerat omnis dolor. Corrupti quam doloribus eos aut. Quibusdam velit vel magnam eos est qui soluta.', 201, '#mMKVw', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:28', '2019-09-16 13:46:28', 30, 1),
(41, 'Gladyce Rowe', 'Occaecati officiis aut id aut ipsa inventore cumque. Totam id quasi nam a. Temporibus magnam illo minima sit dignissimos. Ullam magnam eaque ullam ut voluptatum cum.', 400, '#klsQN', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:28', '2019-09-16 13:46:28', 30, 1),
(42, 'Wilfred Ondricka', 'Non modi aliquid quia. Magnam quidem quia qui eum in. Illum doloremque odio qui vero eos. Impedit occaecati deleniti alias ratione. Aut sed voluptatem sunt eaque ut quo qui.', 346, '#vHOv2', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:28', '2019-09-16 13:46:28', 30, 1),
(43, 'Rozella Blick', 'Est praesentium sed fuga eum soluta ad consequuntur. Officiis est nihil voluptates beatae. Omnis libero nihil doloremque cum. Rem expedita iste repellat non.', 80, '#cbmR5', 1, NULL, 1, 1, 2, 1, '2019-09-16 13:46:28', '2019-09-16 13:46:28', 30, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `category_name`, `icon`, `created_at`, `updated_at`) VALUES
(2, 'Tshirt', '1568473161.png', '2019-09-14 08:59:21', '2019-09-14 08:59:21'),
(3, 'Pant', '1568476327.jpg', '2019-09-14 09:52:07', '2019-09-14 09:52:07');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `w_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'laravel',
  `w_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w_about` text COLLATE utf8mb4_unicode_ci,
  `w_mission` text COLLATE utf8mb4_unicode_ci,
  `w_facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w_youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w_twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `w_name`, `w_email`, `w_address`, `w_phone`, `w_logo`, `w_image`, `w_about`, `w_mission`, `w_facebook`, `w_youtube`, `w_twitter`, `copyright`, `created_at`, `updated_at`) VALUES
(1, 'Rent a costume', 'rent@rent.com', 'https://www.rent.com', '123456789', '/images/1568665955_246x0w.jpg', '/images/1568665956_767ed4f1f412f0830d91b4498bd14865 (1) copy.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem </p><p>Ipsum passages, </p><p><img src=\"data:image/jpeg;base64,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\" data-filename=\"0N0srAVN_400x400.jpg\" style=\"width: 400px;\"><br></p><p>and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'https://www.fb.com', 'https://www.youtube.com', 'https://www.twitter.com', 'Matul', '2019-09-17 05:46:37', '2019-09-17 12:22:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_super_admin` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone`, `ip`, `country_id`, `city_id`, `image`, `gender`, `status`, `is_super_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin1', 'admin1@rent.com', NULL, '1234', NULL, 1, 3, NULL, 'female', '1', 1, '$2y$10$QUrThkcX2tVW.YPG8ckoMuFcG4fi0Td7UpPAJMv5vBN1nZXl7ibPm', NULL, '2019-09-13 04:41:52', '2019-09-17 14:16:36'),
(2, 'Admin2', 'admin2@rent.com', NULL, '1234', NULL, 2, 5, NULL, 'male', '1', 1, '$2y$10$C8iiMOtHc0I/HzyZss5Lfeakt25z54yON/9741NgGO.VZ3K1qTok2', NULL, '2019-09-13 04:41:52', '2019-09-17 14:16:38'),
(3, 'Ziamti', 'matul@yahoo.com', NULL, '098987865', NULL, 2, 3, NULL, 'Male', '1', 0, '$2y$10$ex6zI/iuNMiWUw4JCrGiBekLyFj/B2RcepvlMIGH1WTxQ/5rWg70K', NULL, '2019-09-16 15:39:46', '2019-09-17 14:16:32'),
(4, 'My user', 'demo@gmail.com', NULL, '78787654300', NULL, 1, 1, NULL, 'Male', '1', 0, '$2y$10$sbj5OaIisE2fKYA14VE2nOW1mjnKtUt..e/F1VCl/8j1J.R6KHmIK', NULL, '2019-09-18 00:44:33', '2019-09-18 02:13:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_cards`
--

CREATE TABLE `user_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_cards`
--

INSERT INTO `user_cards` (`id`, `user_id`, `total_amount`, `created_at`, `updated_at`) VALUES
(1, 4, 44442506, NULL, '2019-09-18 06:12:43');

-- --------------------------------------------------------

--
-- Table structure for table `user_traffic`
--

CREATE TABLE `user_traffic` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` int(10) UNSIGNED NOT NULL,
  `viewable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewable_id` bigint(20) UNSIGNED NOT NULL,
  `visitor` text COLLATE utf8mb4_unicode_ci,
  `collection` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viewed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_commentable_id_commentable_type_index` (`commentable_id`,`commentable_type`),
  ADD KEY `comments_commented_id_commented_type_index` (`commented_id`,`commented_type`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_queries`
--
ALTER TABLE `customer_queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_query_replies`
--
ALTER TABLE `customer_query_replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_categories`
--
ALTER TABLE `faq_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_settings`
--
ALTER TABLE `orders_settings`
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
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_cards`
--
ALTER TABLE `user_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_traffic`
--
ALTER TABLE `user_traffic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `views_viewable_type_viewable_id_index` (`viewable_type`,`viewable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_queries`
--
ALTER TABLE `customer_queries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_query_replies`
--
ALTER TABLE `customer_query_replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq_categories`
--
ALTER TABLE `faq_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders_settings`
--
ALTER TABLE `orders_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_cards`
--
ALTER TABLE `user_cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_traffic`
--
ALTER TABLE `user_traffic`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
