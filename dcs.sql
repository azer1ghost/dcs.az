-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 23 Ağu 2020, 19:43:16
-- Sunucu sürümü: 5.7.30
-- PHP Sürümü: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `dcs`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2020-08-19 04:01:40', '2020-08-19 04:01:40'),
(2, NULL, 1, 'Category 2', 'category-2', '2020-08-19 04:01:40', '2020-08-19 04:01:40');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(31, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, '{}', 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 0, 0, 1, 1, 1, 1, '{}', 5),
(48, 6, 'body', 'rich_text_box', 'Body', 0, 0, 1, 1, 1, 1, '{}', 6),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"validation\":{\"rule\":\"unique:pages,slug\"}}', 7),
(50, 6, 'meta_description', 'text', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 8),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 0, 0, 1, 1, 1, 1, '{}', 9),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 10),
(53, 6, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 11),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 12),
(55, 6, 'image', 'media_picker', 'Page Image', 0, 0, 0, 1, 1, 1, '{}', 13),
(56, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 9, 'locale', 'select_dropdown', 'Locale', 1, 1, 1, 1, 1, 1, '{}', 3),
(58, 9, 'namespace', 'text', 'Namespace', 1, 0, 0, 0, 0, 0, '{}', 4),
(59, 9, 'group', 'text', 'Group', 1, 1, 1, 1, 1, 1, '{}', 5),
(60, 9, 'item', 'text', 'Item', 1, 1, 1, 1, 1, 1, '{}', 6),
(61, 9, 'text', 'text', 'Text', 1, 1, 1, 1, 1, 1, '{}', 7),
(62, 9, 'unstable', 'text', 'Unstable', 1, 0, 1, 0, 0, 0, '{}', 8),
(63, 9, 'locked', 'text', 'Locked', 1, 0, 0, 0, 0, 0, '{}', 9),
(64, 9, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 10),
(65, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 11),
(66, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(67, 10, 'locale', 'text', 'Locale', 1, 1, 1, 1, 1, 1, '{}', 2),
(68, 10, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 3),
(69, 10, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, '{}', 4),
(70, 10, 'updated_at', 'timestamp', 'Updated At', 0, 1, 1, 0, 0, 0, '{}', 5),
(71, 10, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 6),
(72, 9, 'translator_translation_belongsto_translator_language_relationship', 'relationship', 'translator_languages', 0, 1, 1, 1, 1, 1, '{\"model\":\"Waavi\\\\Translation\\\\Models\\\\Language\",\"table\":\"translator_languages\",\"type\":\"belongsTo\",\"column\":\"locale\",\"key\":\"locale\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 2),
(85, 12, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(86, 12, 'image', 'media_picker', 'Image', 0, 0, 1, 1, 1, 1, '{}', 2),
(87, 12, 'main_text', 'text_area', 'Main Text', 0, 1, 1, 1, 1, 1, '{}', 3),
(88, 12, 'banner_text', 'text_area', 'Banner Text', 0, 0, 1, 1, 1, 1, '{}', 4),
(89, 12, 'button_text', 'text', 'Button Text', 0, 0, 0, 0, 0, 0, '{}', 5),
(90, 12, 'button_link', 'text', 'Button Link', 0, 0, 1, 1, 1, 1, '{}', 6),
(92, 12, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 8),
(93, 12, 'created_at', 'timestamp', 'Created At', 0, 1, 0, 0, 0, 0, '{}', 9),
(94, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
(95, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(96, 13, 'icon', 'text', 'Icon', 0, 0, 1, 1, 1, 1, '{}', 2),
(97, 13, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 3),
(98, 13, 'text', 'text_area', 'Text', 0, 0, 1, 1, 1, 1, '{}', 4),
(99, 13, 'link', 'text', 'Link', 0, 0, 1, 1, 1, 1, '{}', 5),
(100, 13, 'created_at', 'timestamp', 'Created At', 0, 1, 0, 0, 0, 0, '{}', 6),
(101, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(102, 13, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 8),
(103, 13, 'order', 'text', 'Order', 0, 1, 0, 0, 0, 0, '{}', 9),
(104, 12, 'order', 'number', 'Order', 0, 1, 1, 0, 0, 0, '{}', 7),
(105, 14, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(107, 14, 'key', 'text', 'Key', 0, 1, 1, 0, 0, 0, '{}', 3),
(108, 14, 'text', 'text_area', 'Text', 0, 1, 1, 1, 1, 1, '{}', 4),
(109, 15, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(110, 15, 'uptitile', 'text', 'Uptitile', 0, 0, 1, 1, 1, 1, '{}', 2),
(111, 15, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 3),
(112, 15, 'text', 'text_area', 'Text', 0, 1, 1, 1, 1, 1, '{}', 4),
(113, 15, 'btn_text', 'text', 'Btn Text', 0, 0, 1, 1, 1, 1, '{}', 5),
(114, 15, 'btn_url', 'text', 'Btn Url', 0, 0, 1, 1, 1, 1, '{}', 6),
(115, 15, 'img_1', 'media_picker', 'Img 1', 0, 0, 1, 1, 1, 1, '{\"base_path\":\"\\/works\\/\"}', 7),
(116, 15, 'img_2', 'media_picker', 'Img 2', 0, 0, 1, 1, 1, 1, '{\"base_path\":\"\\/works\\/\"}', 9),
(117, 15, 'img_3', 'media_picker', 'Img 3', 0, 0, 1, 1, 1, 1, '{\"base_path\":\"\\/works\\/\"}', 11),
(118, 15, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 13),
(119, 15, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 14),
(120, 15, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 15),
(121, 15, 'status', 'text', 'Status', 0, 0, 0, 0, 0, 0, '{}', 16),
(122, 15, 'img_title1', 'text', 'Img Title 1', 0, 0, 1, 1, 1, 1, '{}', 8),
(123, 15, 'img_title2', 'text', 'Img Title 2', 0, 0, 1, 1, 1, 1, '{}', 10),
(124, 15, 'img_title3', 'text', 'Img Title 3', 0, 0, 1, 1, 1, 1, '{}', 12),
(125, 16, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(126, 16, 'icon', 'text', 'Icon', 0, 0, 1, 1, 1, 1, '{}', 2),
(127, 16, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 3),
(128, 16, 'link', 'text', 'Link', 0, 0, 1, 1, 1, 1, '{}', 4),
(129, 16, 'order', 'text', 'Order', 0, 1, 0, 0, 0, 0, '{}', 5),
(130, 16, 'created_at', 'timestamp', 'Created At', 0, 1, 0, 0, 0, 0, '{}', 6),
(131, 16, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(132, 14, 'group', 'text', 'Group', 0, 1, 1, 0, 0, 0, '{}', 2),
(133, 14, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 5),
(134, 14, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(135, 18, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(136, 18, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 2),
(137, 18, 'url', 'text', 'Url', 0, 0, 1, 1, 1, 1, '{}', 3),
(138, 18, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 4),
(139, 18, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2020-08-19 04:01:26', '2020-08-19 04:01:26'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2020-08-19 04:01:26', '2020-08-19 04:01:26'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2020-08-19 04:01:26', '2020-08-19 04:01:26'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2020-08-19 04:01:40', '2020-08-19 04:01:40'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-08-19 04:01:41', '2020-08-22 14:54:00'),
(9, 'translator_translations', 'translations', 'Translations', 'Translations', 'voyager-file-text', 'Waavi\\Translation\\Models\\Translation', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-08-19 05:13:43', '2020-08-19 05:18:27'),
(10, 'translator_languages', 'translator-languages', 'Language', 'Translator Languages', NULL, 'Waavi\\Translation\\Models\\Language', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-08-19 05:16:21', '2020-08-19 05:16:21'),
(12, 'sliders', 'site-slider', 'Slider', 'Slider', NULL, 'App\\Models\\Sliders', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"order\",\"order_display_column\":\"main_text\",\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-08-22 16:11:47', '2020-08-23 03:23:48'),
(13, 'ourservices', 'ourservices', 'Our Services', 'Our Services', 'voyager-certificate', 'App\\Models\\Ourservice', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"order\",\"order_display_column\":\"title\",\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-08-23 02:29:38', '2020-08-23 03:22:50'),
(14, 'statictexts', 'statictexts', 'Statictext', 'Statictexts', NULL, 'App\\Models\\Statictext', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-08-23 04:11:17', '2020-08-23 14:36:43'),
(15, 'works', 'works', 'Work', 'Works', 'voyager-info-circled', 'App\\Models\\Works', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-08-23 13:33:06', '2020-08-23 13:52:23'),
(16, 'socials', 'socials', 'Social', 'Socials', NULL, 'App\\Models\\Social', NULL, NULL, NULL, 1, 0, '{\"order_column\":\"order\",\"order_display_column\":\"name\",\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-08-23 14:17:30', '2020-08-23 14:20:21'),
(18, 'usefullinks', 'usefullinks', 'Useful links', 'Useful links', 'voyager-code', 'App\\Models\\Usefullink', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-08-23 14:44:02', '2020-08-23 14:44:02');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-08-19 04:01:26', '2020-08-19 04:01:26'),
(2, 'site', '2020-08-19 06:31:30', '2020-08-19 06:31:30');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2020-08-19 04:01:26', '2020-08-19 04:01:26', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 4, '2020-08-19 04:01:26', '2020-08-23 15:04:57', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, 5, 1, '2020-08-19 04:01:26', '2020-08-23 15:06:21', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 5, '2020-08-19 04:01:26', '2020-08-23 15:06:21', 'voyager.roles.index', NULL),
(5, 1, 'Parameters +', '', '_self', 'voyager-tools', '#000000', NULL, 12, '2020-08-19 04:01:26', '2020-08-23 15:08:02', NULL, ''),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 5, '2020-08-19 04:01:26', '2020-08-23 15:06:21', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 8, '2020-08-19 04:01:26', '2020-08-23 15:06:21', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, NULL, 8, '2020-08-19 04:01:26', '2020-08-23 15:06:21', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 7, '2020-08-19 04:01:26', '2020-08-23 15:06:21', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, 5, 2, '2020-08-19 04:01:26', '2020-08-23 15:06:21', 'voyager.settings.index', NULL),
(11, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 9, '2020-08-19 04:01:27', '2020-08-23 15:06:21', 'voyager.hooks', NULL),
(12, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 7, '2020-08-19 04:01:40', '2020-08-23 15:06:21', 'voyager.categories.index', NULL),
(13, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 6, '2020-08-19 04:01:41', '2020-08-23 15:06:21', 'voyager.posts.index', NULL),
(14, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 2, '2020-08-19 04:01:41', '2020-08-23 15:04:45', 'voyager.pages.index', NULL),
(15, 1, 'Translations', '', '_self', 'voyager-file-text', NULL, NULL, 13, '2020-08-19 05:13:43', '2020-08-23 15:06:21', 'voyager.translations.index', NULL),
(16, 1, 'Translator Languages', '', '_self', NULL, NULL, NULL, 14, '2020-08-19 05:16:21', '2020-08-23 15:06:21', 'voyager.translator-languages.index', NULL),
(17, 2, 'Əsas', '', '_self', NULL, '#000000', NULL, 1, '2020-08-19 06:35:18', '2020-08-21 17:43:02', 'Homepage', 'null'),
(18, 1, 'Menu', 'http://dcs.dev.com/en/admin/menus/2/builder', '_self', 'voyager-list-add', '#000000', NULL, 3, '2020-08-19 06:48:43', '2020-08-23 15:04:57', NULL, ''),
(19, 2, 'Haqqımızda', '', '_self', NULL, '#000000', NULL, 2, '2020-08-21 14:51:36', '2020-08-23 07:23:41', 'Page', '{\"slug\":\"about\"}'),
(20, 2, 'Azerbaycan', '', '_self', NULL, '#000000', NULL, 3, '2020-08-21 17:42:57', '2020-08-23 07:23:41', 'Page', '{\"slug\":\"azerbaijan\"}'),
(22, 1, 'Slider', '', '_self', 'voyager-photo', '#000000', NULL, 9, '2020-08-22 16:11:47', '2020-08-23 15:06:21', 'voyager.site-slider.index', 'null'),
(23, 1, 'Our Services', '', '_self', 'voyager-certificate', NULL, NULL, 10, '2020-08-23 02:29:38', '2020-08-23 15:06:21', 'voyager.ourservices.index', NULL),
(24, 1, 'Statictexts', '', '_self', 'voyager-font', '#000000', 5, 3, '2020-08-23 04:11:17', '2020-08-23 15:06:21', 'voyager.statictexts.index', 'null'),
(25, 1, 'Features', '', '_self', 'voyager-info-circled', '#000000', NULL, 11, '2020-08-23 13:33:06', '2020-08-23 15:08:37', 'voyager.works.index', 'null'),
(26, 1, 'Socials', '', '_self', 'voyager-tag', '#000000', 5, 4, '2020-08-23 14:17:30', '2020-08-23 15:06:21', 'voyager.socials.index', 'null'),
(27, 1, 'Useful links', '', '_self', 'voyager-code', NULL, 5, 6, '2020-08-23 14:44:02', '2020-08-23 15:06:21', 'voyager.usefullinks.index', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2016_01_01_000000_create_pages_table', 2),
(25, '2016_01_01_000000_create_posts_table', 2),
(26, '2016_02_15_204651_create_categories_table', 2),
(27, '2017_04_11_000000_alter_post_nullable_fields_table', 2),
(28, '2013_07_25_145943_create_languages_table', 3),
(29, '2013_07_25_145958_create_translations_table', 3),
(30, '2016_06_02_124154_increase_locale_length', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ourservices`
--

CREATE TABLE `ourservices` (
  `id` int(10) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'javascript:void(0)',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `ourservices`
--

INSERT INTO `ourservices` (`id`, `icon`, `title`, `text`, `link`, `created_at`, `updated_at`, `deleted_at`, `order`) VALUES
(1, 'fa fa-bar-chart', 'All the loans', 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.', '#', '2020-08-23 02:51:17', '2020-08-23 03:44:38', NULL, 4),
(2, 'fa fa-calendar-check-o', 'Easy and fast answer', 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.', '#', '2020-08-23 02:53:10', '2020-08-23 03:44:38', NULL, 5),
(3, 'fa fa-get-pocket', 'No additional papers', 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.', '', '2020-08-23 03:24:43', '2020-08-23 03:59:17', NULL, 6),
(4, 'fa fa-area-chart', 'Good investments', 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.', '', '2020-08-23 03:39:43', '2020-08-23 03:44:38', NULL, 2),
(5, 'fa fa-briefcase', 'Secure financial services', 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.', '#', '2020-08-23 03:43:22', '2020-08-23 03:44:38', NULL, 1),
(6, 'fa fa-cc-visa', 'Accumulation goals', 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.', '#', '2020-08-23 03:44:26', '2020-08-23 03:44:38', NULL, 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Haqqımızda', 'Hang the jib grog grog', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/14.jpg', 'about', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2020-08-19 04:01:41', '2020-08-23 05:15:12'),
(2, 2, 'Azərbaycan', 'ada', '<p>asd</p>', NULL, 'azerbaijan', NULL, NULL, 'ACTIVE', '2020-08-21 18:39:56', '2020-08-22 14:34:36');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2020-08-19 04:01:26', '2020-08-19 04:01:26'),
(2, 'browse_bread', NULL, '2020-08-19 04:01:26', '2020-08-19 04:01:26'),
(3, 'browse_database', NULL, '2020-08-19 04:01:26', '2020-08-19 04:01:26'),
(4, 'browse_media', NULL, '2020-08-19 04:01:26', '2020-08-19 04:01:26'),
(5, 'browse_compass', NULL, '2020-08-19 04:01:26', '2020-08-19 04:01:26'),
(6, 'browse_menus', 'menus', '2020-08-19 04:01:26', '2020-08-19 04:01:26'),
(7, 'read_menus', 'menus', '2020-08-19 04:01:26', '2020-08-19 04:01:26'),
(8, 'edit_menus', 'menus', '2020-08-19 04:01:26', '2020-08-19 04:01:26'),
(9, 'add_menus', 'menus', '2020-08-19 04:01:26', '2020-08-19 04:01:26'),
(10, 'delete_menus', 'menus', '2020-08-19 04:01:26', '2020-08-19 04:01:26'),
(11, 'browse_roles', 'roles', '2020-08-19 04:01:26', '2020-08-19 04:01:26'),
(12, 'read_roles', 'roles', '2020-08-19 04:01:26', '2020-08-19 04:01:26'),
(13, 'edit_roles', 'roles', '2020-08-19 04:01:26', '2020-08-19 04:01:26'),
(14, 'add_roles', 'roles', '2020-08-19 04:01:26', '2020-08-19 04:01:26'),
(15, 'delete_roles', 'roles', '2020-08-19 04:01:27', '2020-08-19 04:01:27'),
(16, 'browse_users', 'users', '2020-08-19 04:01:27', '2020-08-19 04:01:27'),
(17, 'read_users', 'users', '2020-08-19 04:01:27', '2020-08-19 04:01:27'),
(18, 'edit_users', 'users', '2020-08-19 04:01:27', '2020-08-19 04:01:27'),
(19, 'add_users', 'users', '2020-08-19 04:01:27', '2020-08-19 04:01:27'),
(20, 'delete_users', 'users', '2020-08-19 04:01:27', '2020-08-19 04:01:27'),
(21, 'browse_settings', 'settings', '2020-08-19 04:01:27', '2020-08-19 04:01:27'),
(22, 'read_settings', 'settings', '2020-08-19 04:01:27', '2020-08-19 04:01:27'),
(23, 'edit_settings', 'settings', '2020-08-19 04:01:27', '2020-08-19 04:01:27'),
(24, 'add_settings', 'settings', '2020-08-19 04:01:27', '2020-08-19 04:01:27'),
(25, 'delete_settings', 'settings', '2020-08-19 04:01:27', '2020-08-19 04:01:27'),
(26, 'browse_hooks', NULL, '2020-08-19 04:01:27', '2020-08-19 04:01:27'),
(27, 'browse_categories', 'categories', '2020-08-19 04:01:40', '2020-08-19 04:01:40'),
(28, 'read_categories', 'categories', '2020-08-19 04:01:40', '2020-08-19 04:01:40'),
(29, 'edit_categories', 'categories', '2020-08-19 04:01:40', '2020-08-19 04:01:40'),
(30, 'add_categories', 'categories', '2020-08-19 04:01:40', '2020-08-19 04:01:40'),
(31, 'delete_categories', 'categories', '2020-08-19 04:01:40', '2020-08-19 04:01:40'),
(32, 'browse_posts', 'posts', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(33, 'read_posts', 'posts', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(34, 'edit_posts', 'posts', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(35, 'add_posts', 'posts', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(36, 'delete_posts', 'posts', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(37, 'browse_pages', 'pages', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(38, 'read_pages', 'pages', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(39, 'edit_pages', 'pages', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(40, 'add_pages', 'pages', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(41, 'delete_pages', 'pages', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(42, 'browse_translator_translations', 'translator_translations', '2020-08-19 05:13:43', '2020-08-19 05:13:43'),
(43, 'read_translator_translations', 'translator_translations', '2020-08-19 05:13:43', '2020-08-19 05:13:43'),
(44, 'edit_translator_translations', 'translator_translations', '2020-08-19 05:13:43', '2020-08-19 05:13:43'),
(45, 'add_translator_translations', 'translator_translations', '2020-08-19 05:13:43', '2020-08-19 05:13:43'),
(46, 'delete_translator_translations', 'translator_translations', '2020-08-19 05:13:43', '2020-08-19 05:13:43'),
(47, 'browse_translator_languages', 'translator_languages', '2020-08-19 05:16:21', '2020-08-19 05:16:21'),
(48, 'read_translator_languages', 'translator_languages', '2020-08-19 05:16:21', '2020-08-19 05:16:21'),
(49, 'edit_translator_languages', 'translator_languages', '2020-08-19 05:16:21', '2020-08-19 05:16:21'),
(50, 'add_translator_languages', 'translator_languages', '2020-08-19 05:16:21', '2020-08-19 05:16:21'),
(51, 'delete_translator_languages', 'translator_languages', '2020-08-19 05:16:21', '2020-08-19 05:16:21'),
(57, 'browse_sliders', 'sliders', '2020-08-22 16:11:47', '2020-08-22 16:11:47'),
(58, 'read_sliders', 'sliders', '2020-08-22 16:11:47', '2020-08-22 16:11:47'),
(59, 'edit_sliders', 'sliders', '2020-08-22 16:11:47', '2020-08-22 16:11:47'),
(60, 'add_sliders', 'sliders', '2020-08-22 16:11:47', '2020-08-22 16:11:47'),
(61, 'delete_sliders', 'sliders', '2020-08-22 16:11:47', '2020-08-22 16:11:47'),
(62, 'browse_ourservices', 'ourservices', '2020-08-23 02:31:12', '2020-08-23 02:31:12'),
(63, 'read_ourservices', 'ourservices', '2020-08-23 02:31:12', '2020-08-23 02:31:12'),
(64, 'edit_ourservices', 'ourservices', '2020-08-23 02:31:12', '2020-08-23 02:31:12'),
(65, 'add_ourservices', 'ourservices', '2020-08-23 02:31:12', '2020-08-23 02:31:12'),
(66, 'delete_ourservices', 'ourservices', '2020-08-23 02:31:12', '2020-08-23 02:31:12'),
(67, 'browse_statictexts', 'statictexts', '2020-08-23 04:11:17', '2020-08-23 04:11:17'),
(68, 'read_statictexts', 'statictexts', '2020-08-23 04:11:17', '2020-08-23 04:11:17'),
(69, 'edit_statictexts', 'statictexts', '2020-08-23 04:11:17', '2020-08-23 04:11:17'),
(70, 'add_statictexts', 'statictexts', '2020-08-23 04:11:17', '2020-08-23 04:11:17'),
(71, 'delete_statictexts', 'statictexts', '2020-08-23 04:11:17', '2020-08-23 04:11:17'),
(72, 'browse_works', 'works', '2020-08-23 13:33:06', '2020-08-23 13:33:06'),
(73, 'read_works', 'works', '2020-08-23 13:33:06', '2020-08-23 13:33:06'),
(74, 'edit_works', 'works', '2020-08-23 13:33:06', '2020-08-23 13:33:06'),
(75, 'add_works', 'works', '2020-08-23 13:33:06', '2020-08-23 13:33:06'),
(76, 'delete_works', 'works', '2020-08-23 13:33:06', '2020-08-23 13:33:06'),
(77, 'browse_socials', 'socials', '2020-08-23 14:17:30', '2020-08-23 14:17:30'),
(78, 'read_socials', 'socials', '2020-08-23 14:17:30', '2020-08-23 14:17:30'),
(79, 'edit_socials', 'socials', '2020-08-23 14:17:30', '2020-08-23 14:17:30'),
(80, 'add_socials', 'socials', '2020-08-23 14:17:30', '2020-08-23 14:17:30'),
(81, 'delete_socials', 'socials', '2020-08-23 14:17:30', '2020-08-23 14:17:30'),
(82, 'browse_usefullinks', 'usefullinks', '2020-08-23 14:44:02', '2020-08-23 14:44:02'),
(83, 'read_usefullinks', 'usefullinks', '2020-08-23 14:44:02', '2020-08-23 14:44:02'),
(84, 'edit_usefullinks', 'usefullinks', '2020-08-23 14:44:02', '2020-08-23 14:44:02'),
(85, 'add_usefullinks', 'usefullinks', '2020-08-23 14:44:02', '2020-08-23 14:44:02'),
(86, 'delete_usefullinks', 'usefullinks', '2020-08-23 14:44:02', '2020-08-23 14:44:02');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(16, 2),
(17, 1),
(17, 2),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(21, 2),
(22, 1),
(22, 2),
(23, 1),
(23, 2),
(24, 1),
(25, 1),
(26, 1),
(37, 1),
(37, 2),
(38, 1),
(38, 2),
(39, 1),
(39, 2),
(40, 1),
(40, 2),
(41, 1),
(41, 2),
(57, 1),
(57, 2),
(58, 1),
(58, 2),
(59, 1),
(59, 2),
(60, 1),
(60, 2),
(61, 1),
(61, 2),
(62, 1),
(62, 2),
(63, 1),
(63, 2),
(64, 1),
(64, 2),
(65, 1),
(65, 2),
(66, 1),
(66, 2),
(67, 1),
(67, 2),
(68, 1),
(68, 2),
(69, 1),
(69, 2),
(70, 1),
(71, 1),
(72, 1),
(72, 2),
(73, 1),
(73, 2),
(74, 1),
(74, 2),
(77, 1),
(77, 2),
(78, 1),
(78, 2),
(79, 1),
(79, 2),
(80, 1),
(80, 2),
(81, 1),
(81, 2),
(82, 1),
(82, 2),
(83, 1),
(83, 2),
(84, 1),
(84, 2),
(85, 1),
(85, 2),
(86, 1),
(86, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'developer', 'Developer', '2020-08-19 04:01:26', '2020-08-19 04:04:35'),
(2, 'admin', 'Admin', '2020-08-19 04:01:26', '2020-08-19 04:05:52');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'DCS', '', 'text', 2, 'Site'),
(2, 'site.description', 'Site Description', 'Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,consecteturadipisicing elit.', '', 'text', 3, 'Site'),
(3, 'site.logo', 'Site Logo', 'settings\\August2020\\s1abqSqPopqmED83BthK.png', '', 'image', 4, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 7, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', 'settings\\August2020\\cduzfX0ccTTHsJ8488P4.jpg', '', 'image', 5, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Redactive apps. Easly edit your web site', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', 'settings\\August2020\\X4n5sPeUpWbVQ8nTNGxj.png', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin'),
(11, 'site.keywords', 'Keywords', NULL, NULL, 'text_area', 8, 'Site'),
(13, 'site.favicon', 'Favicon', '', '{\r\n    \"resize\": {\r\n        \"width\": \"32\",\r\n        \"height\": \"32\"\r\n    },\r\n    \"quality\" : \"100%\",\r\n    \"upsize\" : true\r\n}', 'image', 9, 'Site'),
(14, 'site.number', 'Number', '+994 70 623 62 58', NULL, 'text', 6, 'Site'),
(15, 'site.email', 'Contact email', 'office@yourfirm.com', NULL, 'text', 10, 'Site'),
(16, 'site.adress', 'Adress', '25 th Street Avenue, Los Angeles, CA', NULL, 'text', 12, 'Site'),
(17, 'site.googlemap', 'Google map coordiante', 'https://www.google.com/maps/place/%C5%9Ea%C4%9Fan,+Azerbaijan/@40.4893259,50.1295005,17z/data=!3m1!4b1!4m5!3m4!1s0x40305f1cb3127949:0x7469ed22d96674ac!8m2!3d40.4893218!4d50.1316892', NULL, 'text', 13, 'Site'),
(18, 'site.company_name', 'Company name', 'Redactive Apps', NULL, 'text', 1, 'Site'),
(19, 'site.phone', 'Phone', '+994 12 459 95 73', NULL, 'text', 11, 'Site'),
(21, 'admin.title', 'Admin Title', 'Redactive Apps', NULL, 'text', 14, 'Admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_text` text COLLATE utf8mb4_unicode_ci,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `main_text`, `banner_text`, `button_text`, `button_link`, `order`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'site-slider/1.jpg', 'Get your <span>loan</span> now', 'Vestibulum eu vehicula elit, nec elementum orci. Praesent aliquet ves tibulum tempus. Pellentesque posuere pharetra turpis, eget finibus erat porta placerat.', 'Discover', '#', 1, NULL, '2020-08-22 16:16:17', '2020-08-23 07:37:53'),
(2, 'site-slider/5.jpg', 'Vestibulum eu vehicula elit, nec ', 'Vestibulum eu vehicula elit, nec elementum orci. Praesent aliquet ves tibulum tempus. Pellentesque posuere pharetra turpis, eget finibus erat porta placerat.', 'test', '#', 2, NULL, '2020-08-22 16:20:37', '2020-08-23 07:37:53');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `socials`
--

CREATE TABLE `socials` (
  `id` int(10) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `socials`
--

INSERT INTO `socials` (`id`, `icon`, `name`, `link`, `order`, `created_at`, `updated_at`) VALUES
(1, 'fa fa-facebook', 'Facebook', '#', 1, '2020-08-23 14:19:49', '2020-08-23 14:19:49'),
(2, 'fa fa-twitter', 'Twitter', '#', 2, '2020-08-23 14:20:49', '2020-08-23 14:22:27'),
(3, 'fa fa-google-plus', 'Google Plus', '#', 3, '2020-08-23 14:21:20', '2020-08-23 14:22:27'),
(4, 'fa fa-linkedin', 'Linkedin', '#', 5, '2020-08-23 14:21:47', '2020-08-23 14:30:58'),
(5, 'fa fa-instagram', 'Instagram', '#', 4, '2020-08-23 14:22:14', '2020-08-23 14:30:58');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `statictexts`
--

CREATE TABLE `statictexts` (
  `id` int(10) UNSIGNED NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `statictexts`
--

INSERT INTO `statictexts` (`id`, `group`, `key`, `text`, `created_at`, `updated_at`) VALUES
(1, 'homepage', 'services.title', 'Xidmətlərimiz', '2020-08-23 04:14:27', '2020-08-23 04:14:27'),
(2, 'homepage', 'services.uptitle', 'Göz gəzdirin', '2020-08-23 04:21:58', '2020-08-23 04:26:45'),
(3, 'footer', 'services', 'Xidmətlərimiz', '2020-08-23 06:47:07', '2020-08-23 06:47:07'),
(4, 'footer', 'social.networks', 'Sosial şəbəkələrdə bizi izləyin!', '2020-08-23 06:50:22', '2020-08-23 07:32:58'),
(5, 'footer', 'contact', 'Əlaqə', '2020-08-23 07:57:04', '2020-08-23 07:57:04'),
(6, 'footer', 'usefull', 'Yararlı linklər', '2020-08-23 07:58:11', '2020-08-23 07:58:11');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(22, 'menu_items', 'title', 13, 'pt', 'Publicações', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(24, 'menu_items', 'title', 12, 'pt', 'Categorias', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(25, 'menu_items', 'title', 14, 'pt', 'Páginas', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2020-08-19 04:01:41', '2020-08-19 04:01:41'),
(31, 'data_rows', 'display_name', 56, 'en', 'Id', '2020-08-19 05:18:27', '2020-08-19 05:18:27'),
(32, 'data_rows', 'display_name', 57, 'en', 'Locale', '2020-08-19 05:18:27', '2020-08-19 05:18:27'),
(33, 'data_rows', 'display_name', 58, 'en', 'Namespace', '2020-08-19 05:18:27', '2020-08-19 05:18:27'),
(34, 'data_rows', 'display_name', 59, 'en', 'Group', '2020-08-19 05:18:27', '2020-08-19 05:18:27'),
(35, 'data_rows', 'display_name', 60, 'en', 'Item', '2020-08-19 05:18:27', '2020-08-19 05:18:27'),
(36, 'data_rows', 'display_name', 61, 'en', 'Text', '2020-08-19 05:18:27', '2020-08-19 05:18:27'),
(37, 'data_rows', 'display_name', 62, 'en', 'Unstable', '2020-08-19 05:18:27', '2020-08-19 05:18:27'),
(38, 'data_rows', 'display_name', 63, 'en', 'Locked', '2020-08-19 05:18:27', '2020-08-19 05:18:27'),
(39, 'data_rows', 'display_name', 64, 'en', 'Created At', '2020-08-19 05:18:27', '2020-08-19 05:18:27'),
(40, 'data_rows', 'display_name', 65, 'en', 'Updated At', '2020-08-19 05:18:27', '2020-08-19 05:18:27'),
(41, 'data_rows', 'display_name', 72, 'en', 'translator_languages', '2020-08-19 05:18:27', '2020-08-19 05:18:27'),
(42, 'data_types', 'display_name_singular', 9, 'en', 'Translations', '2020-08-19 05:18:27', '2020-08-19 05:18:27'),
(43, 'data_types', 'display_name_plural', 9, 'en', 'Translations', '2020-08-19 05:18:27', '2020-08-19 05:18:27'),
(44, 'menu_items', 'title', 17, 'en', 'Main', '2020-08-19 06:35:18', '2020-08-19 06:35:18'),
(45, 'menu_items', 'title', 17, 'ru', 'Oсновной', '2020-08-19 06:35:18', '2020-08-19 06:35:18'),
(46, 'data_rows', 'display_name', 44, 'en', 'ID', '2020-08-19 06:39:28', '2020-08-19 06:39:28'),
(47, 'data_rows', 'display_name', 45, 'en', 'Author', '2020-08-19 06:39:28', '2020-08-19 06:39:28'),
(48, 'data_rows', 'display_name', 46, 'en', 'Title', '2020-08-19 06:39:28', '2020-08-19 06:39:28'),
(49, 'data_rows', 'display_name', 47, 'en', 'Excerpt', '2020-08-19 06:39:28', '2020-08-19 06:39:28'),
(50, 'data_rows', 'display_name', 48, 'en', 'Body', '2020-08-19 06:39:28', '2020-08-19 06:39:28'),
(51, 'data_rows', 'display_name', 55, 'en', 'Page Image', '2020-08-19 06:39:28', '2020-08-19 06:39:28'),
(52, 'data_rows', 'display_name', 49, 'en', 'Slug', '2020-08-19 06:39:28', '2020-08-19 06:39:28'),
(53, 'data_rows', 'display_name', 50, 'en', 'Meta Description', '2020-08-19 06:39:28', '2020-08-19 06:39:28'),
(54, 'data_rows', 'display_name', 51, 'en', 'Meta Keywords', '2020-08-19 06:39:28', '2020-08-19 06:39:28'),
(55, 'data_rows', 'display_name', 52, 'en', 'Status', '2020-08-19 06:39:28', '2020-08-19 06:39:28'),
(56, 'data_rows', 'display_name', 53, 'en', 'Created At', '2020-08-19 06:39:28', '2020-08-19 06:39:28'),
(57, 'data_rows', 'display_name', 54, 'en', 'Updated At', '2020-08-19 06:39:28', '2020-08-19 06:39:28'),
(58, 'data_types', 'display_name_singular', 6, 'en', 'Page', '2020-08-19 06:39:28', '2020-08-19 06:39:28'),
(59, 'data_types', 'display_name_plural', 6, 'en', 'Pages', '2020-08-19 06:39:28', '2020-08-19 06:39:28'),
(60, 'pages', 'title', 1, 'en', 'about', '2020-08-19 06:41:05', '2020-08-21 16:46:57'),
(61, 'pages', 'body', 1, 'en', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2020-08-19 06:41:05', '2020-08-21 16:46:57'),
(62, 'pages', 'slug', 1, 'en', 'about', '2020-08-19 06:41:05', '2020-08-21 17:10:26'),
(63, 'data_rows', 'display_name', 44, 'ru', 'ID', '2020-08-19 06:42:21', '2020-08-19 06:42:21'),
(64, 'data_rows', 'display_name', 45, 'ru', 'Author', '2020-08-19 06:42:21', '2020-08-19 06:42:21'),
(65, 'data_rows', 'display_name', 46, 'ru', 'Title', '2020-08-19 06:42:22', '2020-08-19 06:42:22'),
(66, 'data_rows', 'display_name', 47, 'ru', 'Excerpt', '2020-08-19 06:42:22', '2020-08-19 06:42:22'),
(67, 'data_rows', 'display_name', 48, 'ru', 'Body', '2020-08-19 06:42:22', '2020-08-19 06:42:22'),
(68, 'data_rows', 'display_name', 55, 'ru', 'Page Image', '2020-08-19 06:42:22', '2020-08-19 06:42:22'),
(69, 'data_rows', 'display_name', 49, 'ru', 'Slug', '2020-08-19 06:42:22', '2020-08-19 06:42:22'),
(70, 'data_rows', 'display_name', 50, 'ru', 'Meta Description', '2020-08-19 06:42:22', '2020-08-19 06:42:22'),
(71, 'data_rows', 'display_name', 51, 'ru', 'Meta Keywords', '2020-08-19 06:42:22', '2020-08-19 06:42:22'),
(72, 'data_rows', 'display_name', 52, 'ru', 'Status', '2020-08-19 06:42:22', '2020-08-19 06:42:22'),
(73, 'data_rows', 'display_name', 53, 'ru', 'Created At', '2020-08-19 06:42:22', '2020-08-19 06:42:22'),
(74, 'data_rows', 'display_name', 54, 'ru', 'Updated At', '2020-08-19 06:42:22', '2020-08-19 06:42:22'),
(75, 'data_types', 'display_name_singular', 6, 'ru', 'Page', '2020-08-19 06:42:22', '2020-08-19 06:42:22'),
(76, 'data_types', 'display_name_plural', 6, 'ru', 'Pages', '2020-08-19 06:42:22', '2020-08-19 06:42:22'),
(77, 'menu_items', 'title', 18, 'en', 'Menu', '2020-08-19 06:49:08', '2020-08-19 06:49:08'),
(78, 'menu_items', 'title', 19, 'ru', 'Около', '2020-08-21 14:51:36', '2020-08-21 15:30:28'),
(79, 'menu_items', 'title', 19, 'en', 'About', '2020-08-21 15:30:28', '2020-08-21 15:30:28'),
(80, 'pages', 'title', 1, 'ru', 'ruscax', '2020-08-21 16:46:57', '2020-08-21 16:46:57'),
(81, 'pages', 'body', 1, 'ru', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2020-08-21 16:46:57', '2020-08-21 16:46:57'),
(82, 'pages', 'slug', 1, 'ru', 'hello-world', '2020-08-21 16:46:57', '2020-08-21 16:46:57'),
(83, 'data_rows', 'display_name', 73, 'en', 'Id', '2020-08-21 18:13:23', '2020-08-21 18:13:23'),
(84, 'data_rows', 'display_name', 74, 'en', 'Menu Id', '2020-08-21 18:13:23', '2020-08-21 18:13:23'),
(85, 'data_rows', 'display_name', 75, 'en', 'Title', '2020-08-21 18:13:23', '2020-08-21 18:13:23'),
(86, 'data_rows', 'display_name', 76, 'en', 'Url', '2020-08-21 18:13:23', '2020-08-21 18:13:23'),
(87, 'data_rows', 'display_name', 77, 'en', 'Target', '2020-08-21 18:13:23', '2020-08-21 18:13:23'),
(88, 'data_rows', 'display_name', 78, 'en', 'Icon Class', '2020-08-21 18:13:23', '2020-08-21 18:13:23'),
(89, 'data_rows', 'display_name', 79, 'en', 'Color', '2020-08-21 18:13:23', '2020-08-21 18:13:23'),
(90, 'data_rows', 'display_name', 80, 'en', 'Parent Id', '2020-08-21 18:13:23', '2020-08-21 18:13:23'),
(91, 'data_rows', 'display_name', 81, 'en', 'Order', '2020-08-21 18:13:23', '2020-08-21 18:13:23'),
(92, 'data_rows', 'display_name', 82, 'en', 'Created At', '2020-08-21 18:13:23', '2020-08-21 18:13:23'),
(93, 'data_rows', 'display_name', 83, 'en', 'Updated At', '2020-08-21 18:13:23', '2020-08-21 18:13:23'),
(94, 'data_rows', 'display_name', 84, 'en', 'Route', '2020-08-21 18:13:23', '2020-08-21 18:13:23'),
(95, 'data_rows', 'display_name', 85, 'en', 'Parameters', '2020-08-21 18:13:23', '2020-08-21 18:13:23'),
(98, 'data_rows', 'display_name', 73, 'ru', 'Id', '2020-08-21 18:25:39', '2020-08-21 18:25:39'),
(99, 'data_rows', 'display_name', 74, 'ru', 'Menu Id', '2020-08-21 18:25:39', '2020-08-21 18:25:39'),
(100, 'data_rows', 'display_name', 75, 'ru', 'Title', '2020-08-21 18:25:39', '2020-08-21 18:25:39'),
(101, 'data_rows', 'display_name', 76, 'ru', 'Url', '2020-08-21 18:25:39', '2020-08-21 18:25:39'),
(102, 'data_rows', 'display_name', 77, 'ru', 'Target', '2020-08-21 18:25:39', '2020-08-21 18:25:39'),
(103, 'data_rows', 'display_name', 78, 'ru', 'Icon Class', '2020-08-21 18:25:39', '2020-08-21 18:25:39'),
(104, 'data_rows', 'display_name', 79, 'ru', 'Color', '2020-08-21 18:25:39', '2020-08-21 18:25:39'),
(105, 'data_rows', 'display_name', 80, 'ru', 'Parent Id', '2020-08-21 18:25:39', '2020-08-21 18:25:39'),
(106, 'data_rows', 'display_name', 81, 'ru', 'Order', '2020-08-21 18:25:39', '2020-08-21 18:25:39'),
(107, 'data_rows', 'display_name', 82, 'ru', 'Created At', '2020-08-21 18:25:39', '2020-08-21 18:25:39'),
(108, 'data_rows', 'display_name', 83, 'ru', 'Updated At', '2020-08-21 18:25:39', '2020-08-21 18:25:39'),
(109, 'data_rows', 'display_name', 84, 'ru', 'Route', '2020-08-21 18:25:39', '2020-08-21 18:25:39'),
(110, 'data_rows', 'display_name', 85, 'ru', 'Parameters', '2020-08-21 18:25:39', '2020-08-21 18:25:39'),
(111, 'menu_items', 'title', 20, 'en', 'Azerbaijan', '2020-08-22 01:54:46', '2020-08-22 11:31:58'),
(112, 'menu_items', 'title', 20, 'ru', 'Azerbaycan-rus', '2020-08-22 01:56:56', '2020-08-22 11:31:58'),
(116, 'pages', 'title', 2, 'en', 'Azerbaijan', '2020-08-22 04:44:59', '2020-08-22 05:28:52'),
(117, 'pages', 'body', 2, 'en', '<p>asd</p>', '2020-08-22 04:44:59', '2020-08-22 04:44:59'),
(118, 'pages', 'title', 2, 'ru', 'Азербайкан', '2020-08-22 05:28:52', '2020-08-22 05:28:52'),
(119, 'pages', 'body', 2, 'ru', '<p>asd</p>', '2020-08-22 05:28:52', '2020-08-22 05:28:52'),
(124, 'menu_items', 'title', 21, 'en', 'Slider', '2020-08-22 16:05:08', '2020-08-22 16:05:08'),
(125, 'menu_items', 'title', 21, 'ru', 'Slider', '2020-08-22 16:05:08', '2020-08-22 16:05:08'),
(126, 'menu_items', 'title', 22, 'en', 'Slider', '2020-08-22 16:13:35', '2020-08-22 16:13:35'),
(127, 'data_rows', 'display_name', 86, 'en', 'Image', '2020-08-22 16:17:17', '2020-08-22 16:17:17'),
(128, 'data_rows', 'display_name', 87, 'en', 'Main Text', '2020-08-22 16:17:17', '2020-08-22 16:17:17'),
(129, 'data_rows', 'display_name', 88, 'en', 'Banner Text', '2020-08-22 16:17:17', '2020-08-22 16:17:17'),
(130, 'data_rows', 'display_name', 89, 'en', 'Button Text', '2020-08-22 16:17:17', '2020-08-22 16:17:17'),
(131, 'data_rows', 'display_name', 90, 'en', 'Button Link', '2020-08-22 16:17:17', '2020-08-22 16:17:17'),
(132, 'data_rows', 'display_name', 91, 'en', 'Ordering', '2020-08-22 16:17:17', '2020-08-22 16:17:17'),
(133, 'data_rows', 'display_name', 92, 'en', 'Deleted At', '2020-08-22 16:17:17', '2020-08-22 16:17:17'),
(134, 'data_rows', 'display_name', 93, 'en', 'Created At', '2020-08-22 16:17:17', '2020-08-22 16:17:17'),
(135, 'data_rows', 'display_name', 94, 'en', 'Updated At', '2020-08-22 16:17:17', '2020-08-22 16:17:17'),
(136, 'data_types', 'display_name_singular', 12, 'en', 'Slider', '2020-08-22 16:17:17', '2020-08-22 16:17:17'),
(137, 'data_types', 'display_name_plural', 12, 'en', 'Slider', '2020-08-22 16:17:17', '2020-08-22 16:17:17'),
(138, 'data_rows', 'display_name', 86, 'ru', 'Image', '2020-08-22 16:18:38', '2020-08-22 16:18:38'),
(139, 'data_rows', 'display_name', 87, 'ru', 'Main Text', '2020-08-22 16:18:38', '2020-08-22 16:18:38'),
(140, 'data_rows', 'display_name', 88, 'ru', 'Banner Text', '2020-08-22 16:18:38', '2020-08-22 16:18:38'),
(141, 'data_rows', 'display_name', 89, 'ru', 'Button Text', '2020-08-22 16:18:38', '2020-08-22 16:18:38'),
(142, 'data_rows', 'display_name', 90, 'ru', 'Button Link', '2020-08-22 16:18:38', '2020-08-22 16:18:38'),
(143, 'data_rows', 'display_name', 91, 'ru', 'Ordering', '2020-08-22 16:18:38', '2020-08-22 16:18:38'),
(144, 'data_rows', 'display_name', 92, 'ru', 'Deleted At', '2020-08-22 16:18:38', '2020-08-22 16:18:38'),
(145, 'data_rows', 'display_name', 93, 'ru', 'Created At', '2020-08-22 16:18:38', '2020-08-22 16:18:38'),
(146, 'data_rows', 'display_name', 94, 'ru', 'Updated At', '2020-08-22 16:18:38', '2020-08-22 16:18:38'),
(147, 'data_types', 'display_name_singular', 12, 'ru', 'Slider', '2020-08-22 16:18:38', '2020-08-22 16:18:38'),
(148, 'data_types', 'display_name_plural', 12, 'ru', 'Slider', '2020-08-22 16:18:38', '2020-08-22 16:18:38'),
(149, 'sliders', 'main_text', 2, 'en', 'Vestibulum eu vehicula elit, nec ', '2020-08-22 16:31:52', '2020-08-22 16:31:52'),
(150, 'sliders', 'banner_text', 2, 'en', 'Vestibulum eu vehicula elit, nec elementum orci. Praesent aliquet ves tibulum tempus. Pellentesque posuere pharetra turpis, eget finibus erat porta placerat.', '2020-08-22 16:31:52', '2020-08-22 16:31:52'),
(151, 'sliders', 'button_text', 2, 'en', 'test', '2020-08-22 16:31:52', '2020-08-22 16:31:52'),
(152, 'sliders', 'button_link', 2, 'en', '#', '2020-08-22 16:31:52', '2020-08-22 16:31:52'),
(153, 'sliders', 'main_text', 1, 'en', 'Get your <span>loan</span> now', '2020-08-22 16:32:03', '2020-08-22 16:32:03'),
(154, 'sliders', 'banner_text', 1, 'en', 'Vestibulum eu vehicula elit, nec elementum orci. Praesent aliquet ves tibulum tempus. Pellentesque posuere pharetra turpis, eget finibus erat porta placerat.', '2020-08-22 16:32:03', '2020-08-22 16:32:03'),
(155, 'sliders', 'button_text', 1, 'en', 'Discover', '2020-08-22 16:32:03', '2020-08-22 16:32:03'),
(156, 'sliders', 'button_link', 1, 'en', '#', '2020-08-22 16:32:03', '2020-08-22 16:32:03'),
(157, 'sliders', 'main_text', 2, 'ru', 'Vestibulum eu vehicula elit, nec ', '2020-08-22 16:32:55', '2020-08-22 16:32:55'),
(158, 'sliders', 'banner_text', 2, 'ru', 'Vestibulum eu vehicula elit, nec elementum orci. Praesent aliquet ves tibulum tempus. Pellentesque posuere pharetra turpis, eget finibus erat porta placerat.', '2020-08-22 16:32:55', '2020-08-22 16:32:55'),
(159, 'sliders', 'button_text', 2, 'ru', 'test', '2020-08-22 16:32:55', '2020-08-22 16:32:55'),
(160, 'sliders', 'button_link', 2, 'ru', '#', '2020-08-22 16:32:55', '2020-08-22 16:32:55'),
(161, 'sliders', 'main_text', 1, 'ru', 'Get your <span>loan</span> now', '2020-08-22 16:33:06', '2020-08-22 16:33:06'),
(162, 'sliders', 'banner_text', 1, 'ru', 'Vestibulum eu vehicula elit, nec elementum orci. Praesent aliquet ves tibulum tempus. Pellentesque posuere pharetra turpis, eget finibus erat porta placerat.', '2020-08-22 16:33:06', '2020-08-22 16:33:06'),
(163, 'sliders', 'button_text', 1, 'ru', 'Discover', '2020-08-22 16:33:06', '2020-08-22 16:33:06'),
(164, 'sliders', 'button_link', 1, 'ru', '#', '2020-08-22 16:33:06', '2020-08-22 16:33:06'),
(165, 'data_rows', 'display_name', 95, 'en', 'Id', '2020-08-23 02:31:12', '2020-08-23 02:31:12'),
(166, 'data_rows', 'display_name', 96, 'en', 'Icon', '2020-08-23 02:31:12', '2020-08-23 02:31:12'),
(167, 'data_rows', 'display_name', 97, 'en', 'Title', '2020-08-23 02:31:12', '2020-08-23 02:31:12'),
(168, 'data_rows', 'display_name', 98, 'en', 'Text', '2020-08-23 02:31:12', '2020-08-23 02:31:12'),
(169, 'data_rows', 'display_name', 99, 'en', 'Link', '2020-08-23 02:31:12', '2020-08-23 02:31:12'),
(170, 'data_rows', 'display_name', 100, 'en', 'Created At', '2020-08-23 02:31:12', '2020-08-23 02:31:12'),
(171, 'data_rows', 'display_name', 101, 'en', 'Updated At', '2020-08-23 02:31:12', '2020-08-23 02:31:12'),
(172, 'data_rows', 'display_name', 102, 'en', 'Deleted At', '2020-08-23 02:31:12', '2020-08-23 02:31:12'),
(173, 'data_types', 'display_name_singular', 13, 'en', 'Our Services', '2020-08-23 02:31:12', '2020-08-23 02:31:12'),
(174, 'data_types', 'display_name_plural', 13, 'en', 'Our Services', '2020-08-23 02:31:12', '2020-08-23 02:31:12'),
(175, 'data_rows', 'display_name', 95, 'ru', 'Id', '2020-08-23 02:50:27', '2020-08-23 02:50:27'),
(176, 'data_rows', 'display_name', 96, 'ru', 'Icon', '2020-08-23 02:50:27', '2020-08-23 02:50:27'),
(177, 'data_rows', 'display_name', 97, 'ru', 'Title', '2020-08-23 02:50:27', '2020-08-23 02:50:27'),
(178, 'data_rows', 'display_name', 98, 'ru', 'Text', '2020-08-23 02:50:27', '2020-08-23 02:50:27'),
(179, 'data_rows', 'display_name', 99, 'ru', 'Link', '2020-08-23 02:50:27', '2020-08-23 02:50:27'),
(180, 'data_rows', 'display_name', 100, 'ru', 'Created At', '2020-08-23 02:50:27', '2020-08-23 02:50:27'),
(181, 'data_rows', 'display_name', 101, 'ru', 'Updated At', '2020-08-23 02:50:27', '2020-08-23 02:50:27'),
(182, 'data_rows', 'display_name', 102, 'ru', 'Deleted At', '2020-08-23 02:50:27', '2020-08-23 02:50:27'),
(183, 'data_rows', 'display_name', 103, 'en', 'Order', '2020-08-23 02:50:27', '2020-08-23 02:50:27'),
(184, 'data_types', 'display_name_singular', 13, 'ru', 'Our Services', '2020-08-23 02:50:27', '2020-08-23 02:50:27'),
(185, 'data_types', 'display_name_plural', 13, 'ru', 'Our Services', '2020-08-23 02:50:27', '2020-08-23 02:50:27'),
(186, 'ourservices', 'title', 1, 'en', 'All the loans', '2020-08-23 02:51:17', '2020-08-23 02:51:17'),
(187, 'ourservices', 'title', 1, 'ru', 'All the loans', '2020-08-23 02:51:17', '2020-08-23 02:51:17'),
(188, 'ourservices', 'text', 1, 'en', 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.', '2020-08-23 02:51:17', '2020-08-23 02:51:17'),
(189, 'ourservices', 'text', 1, 'ru', 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.', '2020-08-23 02:51:17', '2020-08-23 02:51:17'),
(190, 'ourservices', 'link', 1, 'en', '#', '2020-08-23 02:51:17', '2020-08-23 02:51:17'),
(191, 'ourservices', 'link', 1, 'ru', '#', '2020-08-23 02:51:17', '2020-08-23 02:51:17'),
(192, 'ourservices', 'title', 2, 'en', 'Easy and fast answer', '2020-08-23 02:53:10', '2020-08-23 02:53:10'),
(193, 'ourservices', 'title', 2, 'ru', 'Easy and fast answer', '2020-08-23 02:53:10', '2020-08-23 02:53:10'),
(194, 'ourservices', 'text', 2, 'en', 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.', '2020-08-23 02:53:10', '2020-08-23 02:53:10'),
(195, 'ourservices', 'text', 2, 'ru', 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.', '2020-08-23 02:53:10', '2020-08-23 02:53:10'),
(196, 'ourservices', 'link', 2, 'en', '#', '2020-08-23 02:53:10', '2020-08-23 02:53:10'),
(197, 'ourservices', 'link', 2, 'ru', '#', '2020-08-23 02:53:10', '2020-08-23 02:53:10'),
(198, 'data_rows', 'display_name', 104, 'en', 'Order', '2020-08-23 03:13:29', '2020-08-23 03:13:29'),
(199, 'data_rows', 'display_name', 104, 'ru', 'Order', '2020-08-23 03:14:23', '2020-08-23 03:14:23'),
(200, 'data_rows', 'display_name', 103, 'ru', 'Order', '2020-08-23 03:22:50', '2020-08-23 03:22:50'),
(201, 'ourservices', 'title', 3, 'ru', 'No additional papers', '2020-08-23 03:24:43', '2020-08-23 03:24:43'),
(202, 'ourservices', 'text', 3, 'en', 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.', '2020-08-23 03:24:43', '2020-08-23 03:24:43'),
(203, 'ourservices', 'text', 3, 'ru', 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.', '2020-08-23 03:24:43', '2020-08-23 03:24:43'),
(204, 'ourservices', 'title', 4, 'en', 'Good investments', '2020-08-23 03:39:43', '2020-08-23 03:39:43'),
(205, 'ourservices', 'title', 4, 'ru', 'Good investments', '2020-08-23 03:39:43', '2020-08-23 03:39:43'),
(206, 'ourservices', 'text', 4, 'en', 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.', '2020-08-23 03:39:43', '2020-08-23 03:39:43'),
(207, 'ourservices', 'text', 4, 'ru', 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.', '2020-08-23 03:39:43', '2020-08-23 03:39:43'),
(208, 'ourservices', 'title', 5, 'en', 'Secure financial services', '2020-08-23 03:43:48', '2020-08-23 03:43:48'),
(209, 'ourservices', 'title', 5, 'ru', 'Secure financial services', '2020-08-23 03:43:48', '2020-08-23 03:43:48'),
(210, 'ourservices', 'text', 5, 'en', 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.', '2020-08-23 03:43:48', '2020-08-23 03:43:48'),
(211, 'ourservices', 'text', 5, 'ru', 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.', '2020-08-23 03:43:48', '2020-08-23 03:43:48'),
(212, 'ourservices', 'link', 5, 'en', '#', '2020-08-23 03:43:48', '2020-08-23 03:43:48'),
(213, 'ourservices', 'title', 3, 'en', 'No additional papers', '2020-08-23 03:59:17', '2020-08-23 03:59:17'),
(214, 'ourservices', 'link', 3, 'ru', '#', '2020-08-23 03:59:17', '2020-08-23 03:59:17'),
(215, 'ourservices', 'title', 6, 'en', 'Accumulation goals', '2020-08-23 03:59:54', '2020-08-23 03:59:54'),
(216, 'ourservices', 'title', 6, 'ru', 'Accumulation goals', '2020-08-23 03:59:54', '2020-08-23 03:59:54'),
(217, 'ourservices', 'text', 6, 'en', 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.', '2020-08-23 03:59:54', '2020-08-23 03:59:54'),
(218, 'ourservices', 'text', 6, 'ru', 'Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem.', '2020-08-23 03:59:54', '2020-08-23 03:59:54'),
(219, 'ourservices', 'link', 6, 'en', '#', '2020-08-23 03:59:54', '2020-08-23 03:59:54'),
(220, 'ourservices', 'link', 6, 'ru', '#', '2020-08-23 03:59:54', '2020-08-23 03:59:54'),
(221, 'statictexts', 'text', 1, 'en', 'Our services', '2020-08-23 04:14:27', '2020-08-23 04:14:27'),
(222, 'statictexts', 'text', 1, 'ru', 'Наши сервисы', '2020-08-23 04:14:27', '2020-08-23 04:14:27'),
(223, 'statictexts', 'text', 2, 'en', 'TAKE LOOK AT OUR', '2020-08-23 04:26:45', '2020-08-23 04:26:45'),
(224, 'statictexts', 'text', 2, 'ru', 'ПОСМОТРЕТЬ НАШИ', '2020-08-23 04:26:45', '2020-08-23 04:26:45'),
(225, 'statictexts', 'text', 3, 'en', 'Our services', '2020-08-23 06:47:07', '2020-08-23 06:47:07'),
(226, 'statictexts', 'text', 3, 'ru', 'Наши сервисы', '2020-08-23 06:47:07', '2020-08-23 06:47:07'),
(227, 'statictexts', 'text', 4, 'en', 'Get connected with us on social networks!', '2020-08-23 06:50:22', '2020-08-23 06:50:22'),
(228, 'statictexts', 'text', 4, 'ru', 'Присоединяйтесь к нам в социальных сетях!', '2020-08-23 06:50:22', '2020-08-23 07:32:58'),
(229, 'statictexts', 'text', 5, 'en', 'Contact', '2020-08-23 07:57:04', '2020-08-23 07:57:04'),
(230, 'statictexts', 'text', 5, 'ru', 'Kонтакт', '2020-08-23 07:57:04', '2020-08-23 07:57:04'),
(231, 'statictexts', 'text', 6, 'en', 'USEFUL LINKS', '2020-08-23 07:58:11', '2020-08-23 07:58:11'),
(232, 'statictexts', 'text', 6, 'ru', 'ПОЛЕЗНЫЕ ССЫЛКИ', '2020-08-23 07:58:11', '2020-08-23 07:58:11'),
(233, 'works', 'title', 1, 'en', 'Our Loans', '2020-08-23 13:37:57', '2020-08-23 13:37:57'),
(234, 'works', 'text', 1, 'en', 'In vitae nisi aliquam, scelerisque leo a, volutpat sem. Viva mus rutrum dui fermentum eros hendrerit.', '2020-08-23 13:37:57', '2020-08-23 13:37:57'),
(235, 'works', 'btn_text', 1, 'en', 'Discover', '2020-08-23 13:37:57', '2020-08-23 13:37:57'),
(236, 'works', 'btn_url', 1, 'en', '#', '2020-08-23 13:37:57', '2020-08-23 13:37:57'),
(237, 'data_rows', 'display_name', 109, 'en', 'Id', '2020-08-23 13:40:22', '2020-08-23 13:40:22'),
(238, 'data_rows', 'display_name', 110, 'en', 'Uptitile', '2020-08-23 13:40:22', '2020-08-23 13:40:22'),
(239, 'data_rows', 'display_name', 111, 'en', 'Title', '2020-08-23 13:40:22', '2020-08-23 13:40:22'),
(240, 'data_rows', 'display_name', 112, 'en', 'Text', '2020-08-23 13:40:22', '2020-08-23 13:40:22'),
(241, 'data_rows', 'display_name', 113, 'en', 'Btn Text', '2020-08-23 13:40:22', '2020-08-23 13:40:22'),
(242, 'data_rows', 'display_name', 114, 'en', 'Btn Url', '2020-08-23 13:40:22', '2020-08-23 13:40:22'),
(243, 'data_rows', 'display_name', 115, 'en', 'Img 1', '2020-08-23 13:40:22', '2020-08-23 13:40:22'),
(244, 'data_rows', 'display_name', 116, 'en', 'Img 2', '2020-08-23 13:40:22', '2020-08-23 13:40:22'),
(245, 'data_rows', 'display_name', 117, 'en', 'Img 3', '2020-08-23 13:40:22', '2020-08-23 13:40:22'),
(246, 'data_rows', 'display_name', 118, 'en', 'Created At', '2020-08-23 13:40:22', '2020-08-23 13:40:22'),
(247, 'data_rows', 'display_name', 119, 'en', 'Updated At', '2020-08-23 13:40:22', '2020-08-23 13:40:22'),
(248, 'data_rows', 'display_name', 120, 'en', 'Deleted At', '2020-08-23 13:40:22', '2020-08-23 13:40:22'),
(249, 'data_rows', 'display_name', 121, 'en', 'Status', '2020-08-23 13:40:22', '2020-08-23 13:40:22'),
(250, 'data_types', 'display_name_singular', 15, 'en', 'Work', '2020-08-23 13:40:22', '2020-08-23 13:40:22'),
(251, 'data_types', 'display_name_plural', 15, 'en', 'Works', '2020-08-23 13:40:22', '2020-08-23 13:40:22'),
(252, 'data_rows', 'display_name', 109, 'ru', 'Id', '2020-08-23 13:41:11', '2020-08-23 13:41:11'),
(253, 'data_rows', 'display_name', 110, 'ru', 'Uptitile', '2020-08-23 13:41:11', '2020-08-23 13:41:11'),
(254, 'data_rows', 'display_name', 111, 'ru', 'Title', '2020-08-23 13:41:11', '2020-08-23 13:41:11'),
(255, 'data_rows', 'display_name', 112, 'ru', 'Text', '2020-08-23 13:41:11', '2020-08-23 13:41:11'),
(256, 'data_rows', 'display_name', 113, 'ru', 'Btn Text', '2020-08-23 13:41:11', '2020-08-23 13:41:11'),
(257, 'data_rows', 'display_name', 114, 'ru', 'Btn Url', '2020-08-23 13:41:11', '2020-08-23 13:41:11'),
(258, 'data_rows', 'display_name', 115, 'ru', 'Img 1', '2020-08-23 13:41:11', '2020-08-23 13:41:11'),
(259, 'data_rows', 'display_name', 116, 'ru', 'Img 2', '2020-08-23 13:41:11', '2020-08-23 13:41:11'),
(260, 'data_rows', 'display_name', 117, 'ru', 'Img 3', '2020-08-23 13:41:11', '2020-08-23 13:41:11'),
(261, 'data_rows', 'display_name', 118, 'ru', 'Created At', '2020-08-23 13:41:11', '2020-08-23 13:41:11'),
(262, 'data_rows', 'display_name', 119, 'ru', 'Updated At', '2020-08-23 13:41:11', '2020-08-23 13:41:11'),
(263, 'data_rows', 'display_name', 120, 'ru', 'Deleted At', '2020-08-23 13:41:11', '2020-08-23 13:41:11'),
(264, 'data_rows', 'display_name', 121, 'ru', 'Status', '2020-08-23 13:41:11', '2020-08-23 13:41:11'),
(265, 'data_types', 'display_name_singular', 15, 'ru', 'Work', '2020-08-23 13:41:11', '2020-08-23 13:41:11'),
(266, 'data_types', 'display_name_plural', 15, 'ru', 'Works', '2020-08-23 13:41:11', '2020-08-23 13:41:11'),
(267, 'works', 'title', 1, 'ru', 'Our Loans', '2020-08-23 13:41:40', '2020-08-23 13:41:40'),
(268, 'works', 'text', 1, 'ru', 'In vitae nisi aliquam, scelerisque leo a, volutpat sem. Viva mus rutrum dui fermentum eros hendrerit.', '2020-08-23 13:41:40', '2020-08-23 13:41:40'),
(269, 'works', 'btn_text', 1, 'ru', 'Discover', '2020-08-23 13:41:40', '2020-08-23 13:41:40'),
(270, 'works', 'btn_url', 1, 'ru', '#', '2020-08-23 13:41:40', '2020-08-23 13:41:40'),
(271, 'menu_items', 'title', 24, 'en', 'Statictexts', '2020-08-23 13:44:52', '2020-08-23 13:44:52'),
(272, 'works', 'img_title1', 1, 'en', 'We take care of you', '2020-08-23 13:54:40', '2020-08-23 13:54:40'),
(273, 'works', 'img_title1', 1, 'ru', 'We take care of you', '2020-08-23 13:54:40', '2020-08-23 13:54:40'),
(274, 'works', 'img_title2', 1, 'en', 'No documents needed', '2020-08-23 13:54:40', '2020-08-23 13:54:40'),
(275, 'works', 'img_title2', 1, 'ru', 'No documents needed', '2020-08-23 13:54:40', '2020-08-23 13:54:40'),
(276, 'works', 'img_title3', 1, 'en', 'Fast &amp; easy loans', '2020-08-23 13:54:40', '2020-08-23 13:54:40'),
(277, 'works', 'img_title3', 1, 'ru', 'Fast &amp; easy loans', '2020-08-23 13:54:40', '2020-08-23 13:54:40'),
(278, 'menu_items', 'title', 26, 'en', 'Socials', '2020-08-23 14:19:08', '2020-08-23 14:19:08'),
(279, 'data_rows', 'display_name', 125, 'en', 'Id', '2020-08-23 14:20:21', '2020-08-23 14:20:21'),
(280, 'data_rows', 'display_name', 126, 'en', 'Icon', '2020-08-23 14:20:21', '2020-08-23 14:20:21'),
(281, 'data_rows', 'display_name', 127, 'en', 'Name', '2020-08-23 14:20:21', '2020-08-23 14:20:21'),
(282, 'data_rows', 'display_name', 128, 'en', 'Link', '2020-08-23 14:20:21', '2020-08-23 14:20:21'),
(283, 'data_rows', 'display_name', 129, 'en', 'Order', '2020-08-23 14:20:21', '2020-08-23 14:20:21'),
(284, 'data_rows', 'display_name', 130, 'en', 'Created At', '2020-08-23 14:20:21', '2020-08-23 14:20:21'),
(285, 'data_rows', 'display_name', 131, 'en', 'Updated At', '2020-08-23 14:20:21', '2020-08-23 14:20:21'),
(286, 'data_types', 'display_name_singular', 16, 'en', 'Social', '2020-08-23 14:20:21', '2020-08-23 14:20:21'),
(287, 'data_types', 'display_name_plural', 16, 'en', 'Socials', '2020-08-23 14:20:21', '2020-08-23 14:20:21'),
(288, 'data_rows', 'display_name', 105, 'en', 'Id', '2020-08-23 14:33:55', '2020-08-23 14:33:55'),
(289, 'data_rows', 'display_name', 107, 'en', 'Key', '2020-08-23 14:33:55', '2020-08-23 14:33:55'),
(290, 'data_rows', 'display_name', 108, 'en', 'Text', '2020-08-23 14:33:55', '2020-08-23 14:33:55'),
(291, 'data_types', 'display_name_singular', 14, 'en', 'Statictext', '2020-08-23 14:33:55', '2020-08-23 14:33:55'),
(292, 'data_types', 'display_name_plural', 14, 'en', 'Statictexts', '2020-08-23 14:33:55', '2020-08-23 14:33:55'),
(293, 'data_rows', 'display_name', 105, 'ru', 'Id', '2020-08-23 14:34:20', '2020-08-23 14:34:20'),
(294, 'data_rows', 'display_name', 132, 'en', 'Group', '2020-08-23 14:34:20', '2020-08-23 14:34:20'),
(295, 'data_rows', 'display_name', 107, 'ru', 'Key', '2020-08-23 14:34:20', '2020-08-23 14:34:20'),
(296, 'data_rows', 'display_name', 108, 'ru', 'Text', '2020-08-23 14:34:20', '2020-08-23 14:34:20'),
(297, 'data_rows', 'display_name', 133, 'en', 'Created At', '2020-08-23 14:34:20', '2020-08-23 14:34:20'),
(298, 'data_rows', 'display_name', 134, 'en', 'Updated At', '2020-08-23 14:34:20', '2020-08-23 14:34:20'),
(299, 'data_types', 'display_name_singular', 14, 'ru', 'Statictext', '2020-08-23 14:34:20', '2020-08-23 14:34:20'),
(300, 'data_types', 'display_name_plural', 14, 'ru', 'Statictexts', '2020-08-23 14:34:20', '2020-08-23 14:34:20'),
(301, 'data_rows', 'display_name', 132, 'ru', 'Group', '2020-08-23 14:36:43', '2020-08-23 14:36:43'),
(302, 'data_rows', 'display_name', 133, 'ru', 'Created At', '2020-08-23 14:36:43', '2020-08-23 14:36:43'),
(303, 'data_rows', 'display_name', 134, 'ru', 'Updated At', '2020-08-23 14:36:43', '2020-08-23 14:36:43'),
(304, 'usefullinks', 'title', 4, 'en', 'Help', '2020-08-23 14:54:50', '2020-08-23 14:54:50'),
(305, 'usefullinks', 'title', 4, 'ru', 'Help', '2020-08-23 14:55:03', '2020-08-23 14:55:03'),
(306, 'usefullinks', 'title', 3, 'en', 'Shipping Rates', '2020-08-23 14:56:53', '2020-08-23 14:56:53'),
(307, 'usefullinks', 'title', 2, 'en', 'Become an Affiliate', '2020-08-23 14:57:01', '2020-08-23 14:57:01'),
(308, 'usefullinks', 'title', 1, 'en', 'Your Account', '2020-08-23 14:57:11', '2020-08-23 14:57:11'),
(309, 'menu_items', 'title', 5, 'en', 'Parameters +', '2020-08-23 15:08:02', '2020-08-23 15:08:02'),
(310, 'menu_items', 'title', 5, 'ru', 'Parameters +', '2020-08-23 15:08:02', '2020-08-23 15:08:02'),
(311, 'menu_items', 'title', 25, 'en', 'Features', '2020-08-23 15:08:37', '2020-08-23 15:08:37'),
(312, 'menu_items', 'title', 25, 'ru', 'Features', '2020-08-23 15:08:37', '2020-08-23 15:08:37');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `translator_languages`
--

CREATE TABLE `translator_languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `translator_languages`
--

INSERT INTO `translator_languages` (`id`, `locale`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'az', 'Azərbaycan', NULL, '2020-08-21 16:29:11', NULL),
(2, 'en', 'English', NULL, '2020-08-21 16:29:20', NULL),
(3, 'ru', 'Pусский', NULL, '2020-08-21 16:29:48', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `translator_translations`
--

CREATE TABLE `translator_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namespace` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '*',
  `group` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `unstable` tinyint(1) NOT NULL DEFAULT '0',
  `locked` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `usefullinks`
--

CREATE TABLE `usefullinks` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `usefullinks`
--

INSERT INTO `usefullinks` (`id`, `title`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Your Account', '#', '2020-08-23 14:46:15', '2020-08-23 14:46:15'),
(2, 'Become an Affiliate', '#', '2020-08-23 14:46:24', '2020-08-23 14:46:24'),
(3, 'Shipping Rates', '#', '2020-08-23 14:46:44', '2020-08-23 14:46:44'),
(4, 'Help', '#', '2020-08-23 14:46:53', '2020-08-23 14:55:03');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Azer Mamedov', 'mamedovazer124@gmail.com', 'users\\August2020\\1UKbnnqoWvXln5tRLIDG.jpg', NULL, '$2y$10$YN4pV/knVc9jO9LWb47oUOWO8JqeYfL.Uj9Fbec/wvGVfJ/MY8RtK', '1kxzh3bPkbjkdH0o1TDswAjDWzo06XGLMpy0svpqFSUjfRb41hX7uFlBAKIk', '{\"locale\":\"en\"}', '2020-08-19 04:01:41', '2020-08-19 05:02:02'),
(2, 2, 'Admin user', 'azermamedov124@gmail.com', 'users/default.png', NULL, '$2y$10$SVEMvwOhxUwUFOwJBIED/eRm/nZVxZSp/RKvCKbu/d9Ux4uw8fsWe', NULL, '{\"locale\":\"en\"}', '2020-08-19 06:36:42', '2020-08-19 06:56:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `works`
--

CREATE TABLE `works` (
  `id` int(10) UNSIGNED NOT NULL,
  `uptitile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_url` text COLLATE utf8mb4_unicode_ci,
  `img_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `img_title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `works`
--

INSERT INTO `works` (`id`, `uptitile`, `title`, `text`, `btn_text`, `btn_url`, `img_1`, `img_2`, `img_3`, `created_at`, `updated_at`, `deleted_at`, `status`, `img_title1`, `img_title2`, `img_title3`) VALUES
(1, 'TAKE LOOK AT OUR', 'Our Loans', 'In vitae nisi aliquam, scelerisque leo a, volutpat sem. Viva mus rutrum dui fermentum eros hendrerit.', 'Discover', '#', 'works/3.jpg', 'works/4.jpg', 'works/2.jpg', '2020-08-23 13:37:57', '2020-08-23 14:03:18', NULL, 'active', 'We take care of you', 'No documents needed', 'Fast &amp; easy loans');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Tablo için indeksler `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Tablo için indeksler `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Tablo için indeksler `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ourservices`
--
ALTER TABLE `ourservices`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Tablo için indeksler `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Tablo için indeksler `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Tablo için indeksler `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Tablo için indeksler `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `statictexts`
--
ALTER TABLE `statictexts`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Tablo için indeksler `translator_languages`
--
ALTER TABLE `translator_languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translator_languages_locale_unique` (`locale`),
  ADD UNIQUE KEY `translator_languages_name_unique` (`name`);

--
-- Tablo için indeksler `translator_translations`
--
ALTER TABLE `translator_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translator_translations_locale_namespace_group_item_unique` (`locale`,`namespace`,`group`,`item`);

--
-- Tablo için indeksler `usefullinks`
--
ALTER TABLE `usefullinks`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Tablo için indeksler `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- Tablo için indeksler `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- Tablo için AUTO_INCREMENT değeri `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Tablo için AUTO_INCREMENT değeri `ourservices`
--
ALTER TABLE `ourservices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- Tablo için AUTO_INCREMENT değeri `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Tablo için AUTO_INCREMENT değeri `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `statictexts`
--
ALTER TABLE `statictexts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

--
-- Tablo için AUTO_INCREMENT değeri `translator_languages`
--
ALTER TABLE `translator_languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `translator_translations`
--
ALTER TABLE `translator_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `usefullinks`
--
ALTER TABLE `usefullinks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `works`
--
ALTER TABLE `works`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `translator_translations`
--
ALTER TABLE `translator_translations`
  ADD CONSTRAINT `translator_translations_locale_foreign` FOREIGN KEY (`locale`) REFERENCES `translator_languages` (`locale`);

--
-- Tablo kısıtlamaları `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Tablo kısıtlamaları `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
