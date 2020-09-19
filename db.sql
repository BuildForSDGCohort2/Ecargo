-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 29, 2020 at 08:26 PM
-- Server version: 5.7.27-log
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


--

-- --------------------------------------------------------

--
-- Table structure for table `backend_access_log`
--

CREATE TABLE `backend_access_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `backend_users`
--

CREATE TABLE `backend_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activation_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persist_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `is_activated` tinyint(1) NOT NULL DEFAULT '0',
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `is_superuser` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `backend_users`
--

INSERT INTO `backend_users` (`id`, `first_name`, `last_name`, `login`, `email`, `password`, `activation_code`, `persist_code`, `reset_password_code`, `permissions`, `is_activated`, `role_id`, `activated_at`, `last_login`, `created_at`, `updated_at`, `deleted_at`, `is_superuser`) VALUES
(1, 'Spotlayer', 'Team', 'spotlayer', 'support@spotlayer.com', '$2y$10$NNuJRvqFga7oSURZHcRC4e.ZiEoWpp62DeQMGcneEW4aiMU8FJwYK', NULL, '$2y$10$le4amZ9CGODdXuLrXZAgKe/WqtRGO5G4U/uZNxCTzNTIWoN93gV9C', NULL, '', 1, 2, NULL, '2020-05-18 22:39:07', '2019-11-24 20:18:28', '2020-05-18 22:39:07', NULL, 1),
(2, 'Spotlayer', 'Team', 'admin', 'admin@spotlayer.com', '$2y$10$24Vp8O3Y1fy1WtHCLzFqaOFIXOPhx31A/bmSnCL/J7SngtBMO9SYW', NULL, '$2y$10$wBwGYs73W8.Pwop9D3LIU.RoJhzc94GrxvKD441U5NSfTDW9I/Aiy', NULL, '', 0, 2, NULL, '2020-05-20 16:38:10', '2020-04-15 16:18:39', '2020-05-20 16:38:10', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `backend_users_groups`
--

CREATE TABLE `backend_users_groups` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_group_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `backend_users_groups`
--

INSERT INTO `backend_users_groups` (`user_id`, `user_group_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `backend_user_groups`
--

CREATE TABLE `backend_user_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `is_new_user_default` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `backend_user_groups`
--

INSERT INTO `backend_user_groups` (`id`, `name`, `created_at`, `updated_at`, `code`, `description`, `is_new_user_default`) VALUES
(1, 'Owners', '2019-11-24 20:18:27', '2019-11-24 20:18:27', 'owners', 'Default group for website owners.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `backend_user_preferences`
--

CREATE TABLE `backend_user_preferences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `namespace` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `backend_user_roles`
--

CREATE TABLE `backend_user_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `is_system` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `backend_user_roles`
--

INSERT INTO `backend_user_roles` (`id`, `name`, `code`, `description`, `permissions`, `is_system`, `created_at`, `updated_at`) VALUES
(1, 'Publisher', 'publisher', 'Site editor with access to publishing tools.', '', 1, '2019-11-24 20:18:27', '2019-11-24 20:18:27'),
(2, 'Developer', 'developer', 'Site administrator with access to developer tools.', '', 1, '2019-11-24 20:18:27', '2019-11-24 20:18:27');

-- --------------------------------------------------------

--
-- Table structure for table `backend_user_throttle`
--

CREATE TABLE `backend_user_throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `suspended_at` timestamp NULL DEFAULT NULL,
  `is_banned` tinyint(1) NOT NULL DEFAULT '0',
  `banned_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `backend_user_throttle`
--

INSERT INTO `backend_user_throttle` (`id`, `user_id`, `ip_address`, `attempts`, `last_attempt_at`, `is_suspended`, `suspended_at`, `is_banned`, `banned_at`) VALUES
(1, 1, '::1', 0, NULL, 0, NULL, 0, NULL),
(2, 1, '41.34.48.131', 0, NULL, 0, NULL, 0, NULL),
(3, 1, '197.62.115.70', 0, NULL, 0, NULL, 0, NULL),
(4, 1, '197.62.121.117', 0, NULL, 0, NULL, 0, NULL),
(5, 1, '197.62.121.83', 0, NULL, 0, NULL, 0, NULL),
(6, 1, '162.158.62.47', 0, NULL, 0, NULL, 0, NULL),
(7, 1, '108.162.229.242', 0, NULL, 0, NULL, 0, NULL),
(8, 1, '141.101.69.65', 0, NULL, 0, NULL, 0, NULL),
(9, 1, '108.162.229.14', 0, NULL, 0, NULL, 0, NULL),
(10, 1, '196.53.0.157', 0, NULL, 0, NULL, 0, NULL),
(11, 1, '197.62.207.45', 0, NULL, 0, NULL, 0, NULL),
(12, 2, '197.62.207.45', 0, NULL, 0, NULL, 0, NULL),
(13, 2, '80.83.21.177', 0, NULL, 0, NULL, 0, NULL),
(14, 2, '80.83.21.241', 0, NULL, 0, NULL, 0, NULL),
(15, 2, '80.83.21.190', 0, NULL, 0, NULL, 0, NULL),
(16, 2, '80.83.21.188', 0, NULL, 0, NULL, 0, NULL),
(17, 2, '80.83.21.71', 0, NULL, 0, NULL, 0, NULL),
(18, 1, '63.246.128.65', 0, NULL, 0, NULL, 0, NULL),
(19, 2, '80.83.21.117', 0, NULL, 0, NULL, 0, NULL),
(20, 2, '80.83.21.253', 0, NULL, 0, NULL, 0, NULL),
(21, 2, '80.83.21.85', 0, NULL, 0, NULL, 0, NULL),
(22, 1, '196.53.0.251', 0, NULL, 0, NULL, 0, NULL),
(23, 1, '104.243.212.49', 0, NULL, 0, NULL, 0, NULL),
(24, 1, '197.62.182.211', 0, NULL, 0, NULL, 0, NULL),
(25, 2, '188.43.136.32', 4, '2020-05-12 04:30:19', 0, NULL, 0, NULL),
(26, 1, '185.161.190.219', 0, NULL, 0, NULL, 0, NULL),
(27, 2, '94.187.52.83', 0, NULL, 0, NULL, 0, NULL),
(28, 2, '94.187.53.91', 0, NULL, 0, NULL, 0, NULL),
(29, 2, '80.83.21.83', 0, NULL, 0, NULL, 0, NULL),
(30, 1, '185.161.190.131', 0, NULL, 0, NULL, 0, NULL),
(31, 1, '102.185.248.11', 0, NULL, 0, NULL, 0, NULL),
(32, 2, '80.83.21.100', 0, NULL, 0, NULL, 0, NULL),
(33, 2, '80.83.21.5', 0, NULL, 0, NULL, 0, NULL),
(34, 2, '194.126.21.13', 0, NULL, 0, NULL, 0, NULL),
(35, 2, '80.83.21.21', 0, NULL, 0, NULL, 0, NULL),
(36, 2, '80.83.21.239', 0, NULL, 0, NULL, 0, NULL),
(37, 2, '80.83.21.91', 0, NULL, 0, NULL, 0, NULL),
(38, 2, '80.83.21.236', 0, NULL, 0, NULL, 0, NULL),
(39, 1, '196.53.0.35', 0, NULL, 0, NULL, 0, NULL),
(40, 2, '80.83.21.160', 0, NULL, 0, NULL, 0, NULL),
(41, 2, '94.187.52.115', 0, NULL, 0, NULL, 0, NULL),
(42, 2, '80.83.21.17', 0, NULL, 0, NULL, 0, NULL),
(43, 2, '80.83.21.112', 0, NULL, 0, NULL, 0, NULL),
(44, 2, '80.83.21.173', 0, NULL, 0, NULL, 0, NULL),
(45, 2, '94.187.55.221', 0, NULL, 0, NULL, 0, NULL),
(46, 2, '80.83.21.242', 0, NULL, 0, NULL, 0, NULL),
(47, 2, '94.187.55.201', 0, NULL, 0, NULL, 0, NULL),
(48, 2, '80.83.21.75', 0, NULL, 0, NULL, 0, NULL),
(49, 1, '197.62.192.216', 0, NULL, 0, NULL, 0, NULL),
(50, 2, '80.83.21.79', 0, NULL, 0, NULL, 0, NULL),
(51, 2, '80.83.21.98', 0, NULL, 0, NULL, 0, NULL),
(52, 2, '80.83.21.146', 0, NULL, 0, NULL, 0, NULL),
(53, 2, '80.83.21.129', 0, NULL, 0, NULL, 0, NULL),
(54, 2, '80.83.21.234', 0, NULL, 0, NULL, 0, NULL),
(55, 2, '80.83.21.187', 0, NULL, 0, NULL, 0, NULL),
(56, 2, '80.83.21.26', 0, NULL, 0, NULL, 0, NULL),
(57, 2, '80.83.21.19', 0, NULL, 0, NULL, 0, NULL),
(58, 2, '157.32.8.123', 1, '2020-06-21 13:38:48', 0, NULL, 0, NULL),
(65, 2, '80.83.21.77', 0, NULL, 0, NULL, 0, NULL),
(66, 1, '197.62.124.111', 0, NULL, 0, NULL, 0, NULL),
(67, 2, '80.83.21.247', 0, NULL, 0, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_theme_data`
--

CREATE TABLE `cms_theme_data` (
  `id` int(10) UNSIGNED NOT NULL,
  `theme` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_theme_logs`
--

CREATE TABLE `cms_theme_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_template` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `old_content` longtext COLLATE utf8mb4_unicode_ci,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_theme_templates`
--

CREATE TABLE `cms_theme_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` int(10) UNSIGNED NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deferred_bindings`
--

CREATE TABLE `deferred_bindings` (
  `id` int(10) UNSIGNED NOT NULL,
  `master_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `master_field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slave_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slave_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_bind` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deferred_bindings`
--

INSERT INTO `deferred_bindings` (`id`, `master_type`, `master_field`, `slave_type`, `slave_id`, `session_key`, `is_bind`, `created_at`, `updated_at`) VALUES
(1, 'RainLab\\Translate\\Models\\MessageImport', 'import_file', 'System\\Models\\File', '25', '4bGCfDvwccAjDG5SoB0ElvgliT4mZSoLPaOPEFIx', 1, '2020-05-18 22:42:41', '2020-05-18 22:42:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci,
  `failed_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jacob_logbook_logs`
--

CREATE TABLE `jacob_logbook_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `backend_user_id` int(10) UNSIGNED DEFAULT NULL,
  `changes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
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
(1, '2013_10_01_000001_Db_Deferred_Bindings', 1),
(2, '2013_10_01_000002_Db_System_Files', 1),
(3, '2013_10_01_000003_Db_System_Plugin_Versions', 1),
(4, '2013_10_01_000004_Db_System_Plugin_History', 1),
(5, '2013_10_01_000005_Db_System_Settings', 1),
(6, '2013_10_01_000006_Db_System_Parameters', 1),
(7, '2013_10_01_000007_Db_System_Add_Disabled_Flag', 1),
(8, '2013_10_01_000008_Db_System_Mail_Templates', 1),
(9, '2013_10_01_000009_Db_System_Mail_Layouts', 1),
(10, '2014_10_01_000010_Db_Jobs', 1),
(11, '2014_10_01_000011_Db_System_Event_Logs', 1),
(12, '2014_10_01_000012_Db_System_Request_Logs', 1),
(13, '2014_10_01_000013_Db_System_Sessions', 1),
(14, '2015_10_01_000014_Db_System_Mail_Layout_Rename', 1),
(15, '2015_10_01_000015_Db_System_Add_Frozen_Flag', 1),
(16, '2015_10_01_000016_Db_Cache', 1),
(17, '2015_10_01_000017_Db_System_Revisions', 1),
(18, '2015_10_01_000018_Db_FailedJobs', 1),
(19, '2016_10_01_000019_Db_System_Plugin_History_Detail_Text', 1),
(20, '2016_10_01_000020_Db_System_Timestamp_Fix', 1),
(21, '2017_08_04_121309_Db_Deferred_Bindings_Add_Index_Session', 1),
(22, '2017_10_01_000021_Db_System_Sessions_Update', 1),
(23, '2017_10_01_000022_Db_Jobs_FailedJobs_Update', 1),
(24, '2017_10_01_000023_Db_System_Mail_Partials', 1),
(25, '2017_10_23_000024_Db_System_Mail_Layouts_Add_Options_Field', 1),
(26, '2013_10_01_000001_Db_Backend_Users', 2),
(27, '2013_10_01_000002_Db_Backend_User_Groups', 2),
(28, '2013_10_01_000003_Db_Backend_Users_Groups', 2),
(29, '2013_10_01_000004_Db_Backend_User_Throttle', 2),
(30, '2014_01_04_000005_Db_Backend_User_Preferences', 2),
(31, '2014_10_01_000006_Db_Backend_Access_Log', 2),
(32, '2014_10_01_000007_Db_Backend_Add_Description_Field', 2),
(33, '2015_10_01_000008_Db_Backend_Add_Superuser_Flag', 2),
(34, '2016_10_01_000009_Db_Backend_Timestamp_Fix', 2),
(35, '2017_10_01_000010_Db_Backend_User_Roles', 2),
(36, '2018_12_16_000011_Db_Backend_Add_Deleted_At', 2),
(37, '2014_10_01_000001_Db_Cms_Theme_Data', 3),
(38, '2016_10_01_000002_Db_Cms_Timestamp_Fix', 3),
(39, '2017_10_01_000003_Db_Cms_Theme_Logs', 3),
(40, '2018_11_01_000001_Db_Cms_Theme_Templates', 3);

-- --------------------------------------------------------

--
-- Table structure for table `raccoon_geolocation_ip_info_locations`
--

CREATE TABLE `raccoon_geolocation_ip_info_locations` (
  `ip` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_code` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` decimal(8,5) NOT NULL DEFAULT '0.00000',
  `longitude` decimal(8,5) NOT NULL DEFAULT '0.00000',
  `timezone` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_location_countries`
--

CREATE TABLE `rainlab_location_countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `is_enabled` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_pinned` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rainlab_location_countries`
--

INSERT INTO `rainlab_location_countries` (`id`, `is_enabled`, `name`, `code`, `is_pinned`) VALUES
(257, 1, 'viet nam', 'tunisie', 0),
(258, 1, 'United Arab Emirates', 'united-arab-emirates', 0),
(259, 1, 'Nigeria', 'nigeria', 0),
(260, 1, 'Albania', 'albania', 0),
(261, 1, 'JORDAN', 'jordan', 0),
(262, 1, 'Indonesia', 'indonesia', 0),
(263, 1, 'haiti', 'haiti', 0),
(264, 1, 'Pakistan', 'pakistan', 0),
(265, 1, 'Myanmar', 'myanmar', 0),
(266, 1, 'Hong Kong', 'hong-kong', 0),
(267, 1, 'China', 'china', 0),
(268, 1, 'Sudan', 'sudan', 0),
(269, 1, 'india', 'india', 0),
(270, 1, 'Malaysia', 'malaysia', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_location_states`
--

CREATE TABLE `rainlab_location_states` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rainlab_location_states`
--

INSERT INTO `rainlab_location_states` (`id`, `country_id`, `name`, `code`) VALUES
(1, 4, 'Alabama', 'AL'),
(2, 4, 'Alaska', 'AK'),
(3, 4, 'American Samoa', 'AS'),
(4, 4, 'Arizona', 'AZ'),
(5, 4, 'Arkansas', 'AR'),
(6, 4, 'California', 'CA'),
(7, 4, 'Colorado', 'CO'),
(8, 4, 'Connecticut', 'CT'),
(9, 4, 'Delaware', 'DE'),
(10, 4, 'Dist. of Columbia', 'DC'),
(11, 4, 'Florida', 'FL'),
(12, 4, 'Georgia', 'GA'),
(13, 4, 'Guam', 'GU'),
(14, 4, 'Hawaii', 'HI'),
(15, 4, 'Idaho', 'ID'),
(16, 4, 'Illinois', 'IL'),
(17, 4, 'Indiana', 'IN'),
(18, 4, 'Iowa', 'IA'),
(19, 4, 'Kansas', 'KS'),
(20, 4, 'Kentucky', 'KY'),
(21, 4, 'Louisiana', 'LA'),
(22, 4, 'Maine', 'ME'),
(23, 4, 'Maryland', 'MD'),
(24, 4, 'Marshall Islands', 'MH'),
(25, 4, 'Massachusetts', 'MA'),
(26, 4, 'Michigan', 'MI'),
(27, 4, 'Micronesia', 'FM'),
(28, 4, 'Minnesota', 'MN'),
(29, 4, 'Mississippi', 'MS'),
(30, 4, 'Missouri', 'MO'),
(31, 4, 'Montana', 'MT'),
(32, 4, 'Nebraska', 'NE'),
(33, 4, 'Nevada', 'NV'),
(34, 4, 'New Hampshire', 'NH'),
(35, 4, 'New Jersey', 'NJ'),
(36, 4, 'New Mexico', 'NM'),
(37, 4, 'New York', 'NY'),
(38, 4, 'North Carolina', 'NC'),
(39, 4, 'North Dakota', 'ND'),
(40, 4, 'Northern Marianas', 'MP'),
(41, 4, 'Ohio', 'OH'),
(42, 4, 'Oklahoma', 'OK'),
(43, 4, 'Oregon', 'OR'),
(44, 4, 'Palau', 'PW'),
(45, 4, 'Pennsylvania', 'PA'),
(46, 4, 'Puerto Rico', 'PR'),
(47, 4, 'Rhode Island', 'RI'),
(48, 4, 'South Carolina', 'SC'),
(49, 4, 'South Dakota', 'SD'),
(50, 4, 'Tennessee', 'TN'),
(51, 4, 'Texas', 'TX'),
(52, 4, 'Utah', 'UT'),
(53, 4, 'Vermont', 'VT'),
(54, 4, 'Virginia', 'VA'),
(55, 4, 'Virgin Islands', 'VI'),
(56, 4, 'Washington', 'WA'),
(57, 4, 'West Virginia', 'WV'),
(58, 4, 'Wisconsin', 'WI'),
(59, 4, 'Wyoming', 'WY'),
(60, 35, 'Acre', 'AC'),
(61, 35, 'Alagoas', 'AL'),
(62, 35, 'Amapá', 'AP'),
(63, 35, 'Amazonas', 'AM'),
(64, 35, 'Bahia', 'BA'),
(65, 35, 'Ceará', 'CE'),
(66, 35, 'Distrito Federal', 'DF'),
(67, 35, 'Espírito Santo', 'ES'),
(68, 35, 'Goiás', 'GO'),
(69, 35, 'Maranhão', 'MA'),
(70, 35, 'Mato Grosso', 'MT'),
(71, 35, 'Mato Grosso do Sul', 'MS'),
(72, 35, 'Minas Gerais', 'MG'),
(73, 35, 'Pará', 'PA'),
(74, 35, 'Paraíba', 'PB'),
(75, 35, 'Paraná', 'PR'),
(76, 35, 'Pernambuco', 'PE'),
(77, 35, 'Piauí', 'PI'),
(78, 35, 'Rio de Janeiro', 'RJ'),
(79, 35, 'Rio Grande do Norte', 'RN'),
(80, 35, 'Rio Grande do Sul', 'RS'),
(81, 35, 'Rondônia', 'RO'),
(82, 35, 'Roraima', 'RR'),
(83, 35, 'Santa Catarina', 'SC'),
(84, 35, 'São Paulo', 'SP'),
(85, 35, 'Sergipe', 'SE'),
(86, 35, 'Tocantins', 'TO'),
(87, 2, 'Alberta', 'AB'),
(88, 2, 'British Columbia', 'BC'),
(89, 2, 'Manitoba', 'MB'),
(90, 2, 'New Brunswick', 'NB'),
(91, 2, 'Newfoundland and Labrador', 'NL'),
(92, 2, 'Northwest Territories', 'NT'),
(93, 2, 'Nova Scotia', 'NS'),
(94, 2, 'Nunavut', 'NU'),
(95, 2, 'Ontario', 'ON'),
(96, 2, 'Prince Edward Island', 'PE'),
(97, 2, 'Quebec', 'QC'),
(98, 2, 'Saskatchewan', 'SK'),
(99, 2, 'Yukon', 'YT'),
(100, 217, 'Aargau', 'AG'),
(101, 217, 'Appenzell Innerrhoden', 'AI'),
(102, 217, 'Appenzell Ausserrhoden', 'AR'),
(103, 217, 'Bern', 'BE'),
(104, 217, 'Basel-Landschaft', 'BL'),
(105, 217, 'Basel-Stadt', 'BS'),
(106, 217, 'Fribourg', 'FR'),
(107, 217, 'Genève', 'GE'),
(108, 217, 'Glarus', 'GL'),
(109, 217, 'Graubünden', 'GR'),
(110, 217, 'Jura', 'JU'),
(111, 217, 'Luzern', 'LU'),
(112, 217, 'Neuchâtel', 'NE'),
(113, 217, 'Nidwalden', 'NW'),
(114, 217, 'Obwalden', 'OW'),
(115, 217, 'St. Gallen', 'SG'),
(116, 217, 'Solothurn', 'SO'),
(117, 217, 'Schwyz', 'SZ'),
(118, 217, 'Thurgau', 'TG'),
(119, 217, 'Ticino', 'TI'),
(120, 217, 'Uri', 'UR'),
(121, 217, 'Vaud', 'VD'),
(122, 217, 'Valais', 'VS'),
(123, 217, 'Zug', 'ZG'),
(124, 217, 'Zürich', 'ZH'),
(125, 1, 'New South Wales', 'NSW'),
(126, 1, 'Queensland', 'QLD'),
(127, 1, 'South Australia', 'SA'),
(128, 1, 'Tasmania', 'TAS'),
(129, 1, 'Victoria', 'VIC'),
(130, 1, 'Western Australia', 'WA'),
(131, 1, 'Northern Territory', 'NT'),
(132, 1, 'Australian Capital Territory', 'ACT'),
(133, 85, 'Baden-Württemberg', 'BW'),
(134, 85, 'Bayern', 'BY'),
(135, 85, 'Berlin', 'BE'),
(136, 85, 'Brandenburg', 'BB'),
(137, 85, 'Bremen', 'HB'),
(138, 85, 'Hamburg', 'HH'),
(139, 85, 'Hessen', 'HE'),
(140, 85, 'Mecklenburg-Vorpommern', 'MV'),
(141, 85, 'Niedersachsen', 'NI'),
(142, 85, 'Nordrhein-Westfalen', 'NW'),
(143, 85, 'Rheinland-Pfalz', 'RP'),
(144, 85, 'Saarland', 'SL'),
(145, 85, 'Sachsen', 'SN'),
(146, 85, 'Sachsen-Anhalt', 'ST'),
(147, 85, 'Schleswig-Holstein', 'SH'),
(148, 85, 'Thüringen', 'TH'),
(149, 72, 'Harju', 'HA'),
(150, 72, 'Hiiu', 'HI'),
(151, 72, 'Ida-Viru', 'IV'),
(152, 72, 'Jõgeva', 'JR'),
(153, 72, 'Järva', 'JN'),
(154, 72, 'Lääne', 'LN'),
(155, 72, 'Lääne-Viru', 'LV'),
(156, 72, 'Põlva', 'PL'),
(157, 72, 'Pärnu', 'PR'),
(158, 72, 'Rapla', 'RA'),
(159, 72, 'Saare', 'SA'),
(160, 72, 'Tartu', 'TA'),
(161, 72, 'Valga', 'VG'),
(162, 72, 'Viljandi', 'VD'),
(163, 72, 'Võru', 'VR'),
(164, 109, 'Dublin', 'D'),
(165, 109, 'Wicklow', 'WW'),
(166, 109, 'Wexford', 'WX'),
(167, 109, 'Carlow', 'CW'),
(168, 109, 'Kildare', 'KE'),
(169, 109, 'Meath', 'MH'),
(170, 109, 'Louth', 'LH'),
(171, 109, 'Monaghan', 'MN'),
(172, 109, 'Cavan', 'CN'),
(173, 109, 'Longford', 'LD'),
(174, 109, 'Westmeath', 'WH'),
(175, 109, 'Offaly', 'OY'),
(176, 109, 'Laois', 'LS'),
(177, 109, 'Kilkenny', 'KK'),
(178, 109, 'Waterford', 'WD'),
(179, 109, 'Cork', 'C'),
(180, 109, 'Kerry', 'KY'),
(181, 109, 'Limerick', 'LK'),
(182, 109, 'North Tipperary', 'TN'),
(183, 109, 'South Tipperary', 'TS'),
(184, 109, 'Clare', 'CE'),
(185, 109, 'Galway', 'G'),
(186, 109, 'Mayo', 'MO'),
(187, 109, 'Roscommon', 'RN'),
(188, 109, 'Sligo', 'SO'),
(189, 109, 'Leitrim', 'LM'),
(190, 109, 'Donegal', 'DL'),
(191, 159, 'Drenthe', 'DR'),
(192, 159, 'Flevoland', 'FL'),
(193, 159, 'Friesland', 'FR'),
(194, 159, 'Gelderland', 'GE'),
(195, 159, 'Groningen', 'GR'),
(196, 159, 'Limburg', 'LI'),
(197, 159, 'Noord-Brabant', 'NB'),
(198, 159, 'Noord-Holland', 'NH'),
(199, 159, 'Overijssel', 'OV'),
(200, 159, 'Utrecht', 'UT'),
(201, 159, 'Zeeland', 'ZE'),
(202, 159, 'Zuid-Holland', 'ZH'),
(203, 3, 'Aberdeenshire', 'ABE'),
(204, 3, 'Anglesey', 'ALY'),
(205, 3, 'Angus', 'ANG'),
(206, 3, 'Argyll', 'ARG'),
(207, 3, 'Ayrshire', 'AYR'),
(208, 3, 'Banffshire', 'BAN'),
(209, 3, 'Bedfordshire', 'BED'),
(210, 3, 'Berkshire', 'BER'),
(211, 3, 'Berwickshire', 'BWS'),
(212, 3, 'Brecknockshire', 'BRE'),
(213, 3, 'Buckinghamshire', 'BUC'),
(214, 3, 'Bute', 'BUT'),
(215, 3, 'Caernarfonshire', 'CAE'),
(216, 3, 'Caithness', 'CAI'),
(217, 3, 'Cambridgeshire', 'CAM'),
(218, 3, 'Cardiganshire', 'CAR'),
(219, 3, 'Carmarthenshire', 'CMS'),
(220, 3, 'Cheshire', 'CHE'),
(221, 3, 'Clackmannanshire', 'CLA'),
(222, 3, 'Cleveland', 'CLE'),
(223, 3, 'Cornwall', 'COR'),
(224, 3, 'Cromartyshire', 'CRO'),
(225, 3, 'Cumberland', 'CBR'),
(226, 3, 'Cumbria', 'CUM'),
(227, 3, 'Denbighshire', 'DEN'),
(228, 3, 'Derbyshire', 'DER'),
(229, 3, 'Devon', 'DEV'),
(230, 3, 'Dorset', 'DOR'),
(231, 3, 'Dumbartonshire', 'DBS'),
(232, 3, 'Dumfriesshire', 'DUM'),
(233, 3, 'Durham', 'DUR'),
(234, 3, 'East Lothian', 'ELO'),
(235, 3, 'Essex', 'ESS'),
(236, 3, 'Flintshire', 'FLI'),
(237, 3, 'Fife', 'FIF'),
(238, 3, 'Glamorgan', 'GLA'),
(239, 3, 'Gloucestershire', 'GLO'),
(240, 3, 'Hampshire', 'HAM'),
(241, 3, 'Herefordshire', 'HER'),
(242, 3, 'Hertfordshire', 'HTF'),
(243, 3, 'Huntingdonshire', 'HUN'),
(244, 3, 'Inverness', 'INV'),
(245, 3, 'Kent', 'KEN'),
(246, 3, 'Kincardineshire', 'KCD'),
(247, 3, 'Kinross-shire', 'KIN'),
(248, 3, 'Kirkcudbrightshire', 'KIR'),
(249, 3, 'Lanarkshire', 'LKS'),
(250, 3, 'Lancashire', 'LAN'),
(251, 3, 'Leicestershire', 'LEI'),
(252, 3, 'Lincolnshire', 'LIN'),
(253, 3, 'London', 'LON'),
(254, 3, 'Manchester', 'MAN'),
(255, 3, 'Merionethshire', 'MER'),
(256, 3, 'Merseyside', 'MSY'),
(257, 3, 'Middlesex', 'MDX'),
(258, 3, 'Midlands', 'MID'),
(259, 3, 'Midlothian', 'MLT'),
(260, 3, 'Monmouthshire', 'MON'),
(261, 3, 'Montgomeryshire', 'MGY'),
(262, 3, 'Moray', 'MOR'),
(263, 3, 'Nairnshire', 'NAI'),
(264, 3, 'Norfolk', 'NOR'),
(265, 3, 'Northamptonshire', 'NMP'),
(266, 3, 'Northumberland', 'NUM'),
(267, 3, 'Nottinghamshire', 'NOT'),
(268, 3, 'Orkney', 'ORK'),
(269, 3, 'Oxfordshire', 'OXF'),
(270, 3, 'Peebleshire', 'PEE'),
(271, 3, 'Pembrokeshire', 'PEM'),
(272, 3, 'Perthshire', 'PER'),
(273, 3, 'Radnorshire', 'RAD'),
(274, 3, 'Renfrewshire', 'REN'),
(275, 3, 'Ross & Cromarty', 'ROS'),
(276, 3, 'Roxburghshire', 'ROX'),
(277, 3, 'Rutland', 'RUT'),
(278, 3, 'Selkirkshire', 'SEL'),
(279, 3, 'Shetland', 'SHE'),
(280, 3, 'Shropshire', 'SHR'),
(281, 3, 'Somerset', 'SOM'),
(282, 3, 'Staffordshire', 'STA'),
(283, 3, 'Stirlingshire', 'STI'),
(284, 3, 'Suffolk', 'SUF'),
(285, 3, 'Surrey', 'SUR'),
(286, 3, 'Sussex', 'SUS'),
(287, 3, 'Sutherland', 'SUT'),
(288, 3, 'Tyne & Wear', 'TYN'),
(289, 3, 'Warwickshire', 'WAR'),
(290, 3, 'West Lothian', 'WLO'),
(291, 3, 'Westmorland', 'WES'),
(292, 3, 'Wigtownshire', 'WIG'),
(293, 3, 'Wiltshire', 'WIL'),
(294, 3, 'Worcestershire', 'WOR'),
(295, 3, 'Yorkshire', 'YOR'),
(296, 184, 'Alba', 'AB'),
(297, 184, 'Arad', 'AR'),
(298, 184, 'Arges', 'AG'),
(299, 184, 'Bacău', 'BC'),
(300, 184, 'Bihor', 'BH'),
(301, 184, 'Bistrita - Nasaud Bistrita', 'BN'),
(302, 184, 'Botosani', 'BT'),
(303, 184, 'Brasov', 'BV'),
(304, 184, 'Braila', 'BR'),
(305, 184, 'Bucuresti', 'B'),
(306, 184, 'Buzau', 'BZ'),
(307, 184, 'Caras - Severin', 'CS'),
(308, 184, 'Calarasi', 'CL'),
(309, 184, 'Cluj', 'CJ'),
(310, 184, 'Constanta', 'CT'),
(311, 184, 'Covasna Sfantu Gheorghe', 'CV'),
(312, 184, 'Dambovita', 'DB'),
(313, 184, 'Dolj', 'DJ'),
(314, 184, 'Galati', 'GL'),
(315, 184, 'Giurgiu', 'GR'),
(316, 184, 'Gorj', 'GJ'),
(317, 184, 'Harghita', 'HR'),
(318, 184, 'Hunedoara', 'HD'),
(319, 184, 'Ialomita', 'IL'),
(320, 184, 'Iasi', 'IS'),
(321, 184, 'Ilfov', 'IF'),
(322, 184, 'Maramures', 'MM'),
(323, 184, 'Mehedinti', 'MH'),
(324, 184, 'Mures', 'MS'),
(325, 184, 'Neamt', 'NT'),
(326, 184, 'Olt', 'OT'),
(327, 184, 'Prahova Ploiesti', 'PH'),
(328, 184, 'Satu Mare', 'SM'),
(329, 184, 'Salaj', 'SJ'),
(330, 184, 'Sibiu', 'SB'),
(331, 184, 'Suceava', 'SV'),
(332, 184, 'Teleorman', 'TR'),
(333, 184, 'Timis', 'TM'),
(334, 184, 'Tulcea', 'TL'),
(335, 184, 'Vaslui', 'VS'),
(336, 184, 'Valcea', 'VL'),
(337, 184, 'Vrancea', 'VN'),
(338, 103, 'Budapest', 'BUD'),
(339, 103, 'Baranya', 'BAR'),
(340, 103, 'Bács-Kiskun', 'BKM'),
(341, 103, 'Békés', 'BEK'),
(342, 103, 'Borsod-Abaúj-Zemplén', 'BAZ'),
(343, 103, 'Csongrád', 'CSO'),
(344, 103, 'Fejér', 'FEJ'),
(345, 103, 'Győr-Moson-Sopron', 'GMS'),
(346, 103, 'Hajdú-Bihar', 'HBM'),
(347, 103, 'Heves', 'HEV'),
(348, 103, 'Jász-Nagykun-Szolnok', 'JNS'),
(349, 103, 'Komárom-Esztergom', 'KEM'),
(350, 103, 'Nógrád', 'NOG'),
(351, 103, 'Pest', 'PES'),
(352, 103, 'Somogy', 'SOM'),
(353, 103, 'Szabolcs-Szatmár-Bereg', 'SSB'),
(354, 103, 'Tolna', 'TOL'),
(355, 103, 'Vas', 'VAS'),
(356, 103, 'Veszprém', 'VES'),
(357, 103, 'Zala', 'ZAL'),
(358, 105, 'Andhra Pradesh', 'AP'),
(359, 105, 'Arunachal Pradesh', 'AR'),
(360, 105, 'Assam', 'AS'),
(361, 105, 'Bihar', 'BR'),
(362, 105, 'Chhattisgarh', 'CT'),
(363, 105, 'Goa', 'GA'),
(364, 105, 'Gujarat', 'GJ'),
(365, 105, 'Haryana', 'HR'),
(366, 105, 'Himachal Pradesh', 'HP'),
(367, 105, 'Jammu and Kashmir', 'JK'),
(368, 105, 'Jharkhand', 'JH'),
(369, 105, 'Karnataka', 'KA'),
(370, 105, 'Kerala', 'KL'),
(371, 105, 'Madhya Pradesh', 'MP'),
(372, 105, 'Maharashtra', 'MH'),
(373, 105, 'Manipur', 'MN'),
(374, 105, 'Meghalaya', 'ML'),
(375, 105, 'Mizoram', 'MZ'),
(376, 105, 'Nagaland', 'NL'),
(377, 105, 'Odisha', 'OR'),
(378, 105, 'Punjab', 'PB'),
(379, 105, 'Rajasthan', 'RJ'),
(380, 105, 'Sikkim', 'SK'),
(381, 105, 'Tamil Nadu', 'TN'),
(382, 105, 'Telangana', 'TG'),
(383, 105, 'Tripura', 'TR'),
(384, 105, 'Uttarakhand', 'UT'),
(385, 105, 'Uttar Pradesh', 'UP'),
(386, 105, 'West Bengal', 'WB'),
(387, 105, 'Andaman and Nicobar Islands', 'AN'),
(388, 105, 'Chandigarh', 'CH'),
(389, 105, 'Dadra and Nagar Haveli', 'DN'),
(390, 105, 'Daman and Diu', 'DD'),
(391, 105, 'Delhi', 'DL'),
(392, 105, 'Lakshadweep', 'LD'),
(393, 105, 'Puducherry', 'PY'),
(394, 78, 'Auvergne-Rhône-Alpes', 'ARA'),
(395, 78, 'Bourgogne-Franche-Comté', 'BFC'),
(396, 78, 'Bretagne', 'BZH'),
(397, 78, 'Centre–Val-de-Loire', 'CVL'),
(398, 78, 'Corse', 'COR'),
(399, 78, 'Guadeloupe', 'GP'),
(400, 78, 'Guyane', 'GF'),
(401, 78, 'Grand-Est', 'GE'),
(402, 78, 'Hauts-de-France', 'HF'),
(403, 78, 'Île-de-France', 'IDF'),
(404, 78, 'Martinique', 'MQ'),
(405, 78, 'Mayotte', 'YT'),
(406, 78, 'Normandie', 'NOR'),
(407, 78, 'Pays-de-la-Loire', 'PL'),
(408, 78, 'Nouvelle-Aquitaine', 'NA'),
(409, 78, 'Occitanie', 'OCC'),
(410, 78, 'Provence-Alpes-Côte-d\'Azur', 'PACA'),
(411, 78, 'Réunion', 'RE'),
(412, 161, 'Northland', 'NTL'),
(413, 161, 'Auckland', 'AUK'),
(414, 161, 'Waikato', 'WKO'),
(415, 161, 'Bay of Plenty', 'BOP'),
(416, 161, 'Gisborne', 'GIS'),
(417, 161, 'Hawke\'s Bay', 'HKB'),
(418, 161, 'Taranaki', 'TKI'),
(419, 161, 'Manawatu-Wanganui', 'MWT'),
(420, 161, 'Wellington', 'WGN'),
(421, 161, 'Tasman', 'TAS'),
(422, 161, 'Nelson', 'NSN'),
(423, 161, 'Marlborough', 'MBH'),
(424, 161, 'West Coast', 'WTC'),
(425, 161, 'Canterbury', 'CAN'),
(426, 161, 'Otago Otago', 'OTA'),
(427, 161, 'Southland', 'STL'),
(428, 210, 'A Coruña (gl) [La Coruña]', 'ES-C'),
(429, 210, 'Araba (eu)', 'ES-VI'),
(430, 210, 'Albacete', 'ES-AB'),
(431, 210, 'Alacant (ca)', 'ES-A'),
(432, 210, 'Almería', 'ES-AL'),
(433, 210, 'Asturias', 'ES-O'),
(434, 210, 'Ávila', 'ES-AV'),
(435, 210, 'Badajoz', 'ES-BA'),
(436, 210, 'Balears (ca) [Baleares]', 'ES-PM'),
(437, 210, 'Barcelona [Barcelona]', 'ES-B'),
(438, 210, 'Burgos', 'ES-BU'),
(439, 210, 'Cáceres', 'ES-CC'),
(440, 210, 'Cádiz', 'ES-CA'),
(441, 210, 'Cantabria', 'ES-S'),
(442, 210, 'Castelló (ca)', 'ES-CS'),
(443, 210, 'Ciudad Real', 'ES-CR'),
(444, 210, 'Córdoba', 'ES-CO'),
(445, 210, 'Cuenca', 'ES-CU'),
(446, 210, 'Girona (ca) [Gerona]', 'ES-GI'),
(447, 210, 'Granada', 'ES-GR'),
(448, 210, 'Guadalajara', 'ES-GU'),
(449, 210, 'Gipuzkoa (eu)', 'ES-SS'),
(450, 210, 'Huelva', 'ES-H'),
(451, 210, 'Huesca', 'ES-HU'),
(452, 210, 'Jaén', 'ES-J'),
(453, 210, 'La Rioja', 'ES-LO'),
(454, 210, 'Las Palmas', 'ES-GC'),
(455, 210, 'León', 'ES-LE'),
(456, 210, 'Lleida (ca) [Lérida]', 'ES-L'),
(457, 210, 'Lugo (gl) [Lugo]', 'ES-LU'),
(458, 210, 'Madrid', 'ES-M'),
(459, 210, 'Málaga', 'ES-MA'),
(460, 210, 'Murcia', 'ES-MU'),
(461, 210, 'Nafarroa (eu)', 'ES-NA'),
(462, 210, 'Ourense (gl) [Orense]', 'ES-OR'),
(463, 210, 'Palencia', 'ES-P'),
(464, 210, 'Pontevedra (gl) [Pontevedra]', 'ES-PO'),
(465, 210, 'Salamanca', 'ES-SA'),
(466, 210, 'Santa Cruz de Tenerife', 'ES-TF'),
(467, 210, 'Segovia', 'ES-SG'),
(468, 210, 'Sevilla', 'ES-SE'),
(469, 210, 'Soria', 'ES-SO'),
(470, 210, 'Tarragona (ca) [Tarragona]', 'ES-T'),
(471, 210, 'Teruel', 'ES-TE'),
(472, 210, 'Toledo', 'ES-TO'),
(473, 210, 'València (ca)', 'ES-V'),
(474, 210, 'Valladolid', 'ES-VA'),
(475, 210, 'Bizkaia (eu)', 'ES-BI'),
(476, 210, 'Zamora', 'ES-ZA'),
(477, 210, 'Zaragoza', 'ES-Z'),
(478, 146, 'Aguascalientes', 'MX-AGU'),
(479, 146, 'Baja California', 'MX-BCN'),
(480, 146, 'Baja California Sur', 'MX-BCS'),
(481, 146, 'Campeche', 'MX-CAM'),
(482, 146, 'Chiapas', 'MX-CHP'),
(483, 146, 'Chihuahua', 'MX-CHH'),
(484, 146, 'Coahuila', 'MX-COA'),
(485, 146, 'Colima', 'MX-COL'),
(486, 146, 'Ciudad de México', 'MX-CMX​'),
(487, 146, 'Durango', 'MX-DUR'),
(488, 146, 'Guanajuato', 'MX-GUA'),
(489, 146, 'Guerrero', 'MX-GRO'),
(490, 146, 'Hidalgo', 'MX-HID'),
(491, 146, 'Jalisco', 'MX-JAL'),
(492, 146, 'Estado de México', 'MX-MEX'),
(493, 146, 'Michoacán', 'MX-MIC'),
(494, 146, 'Morelos', 'MX-MOR'),
(495, 146, 'Nayarit', 'MX-NAY'),
(496, 146, 'Nuevo León', 'MX-NLE'),
(497, 146, 'Oaxaca', 'MX-OAX'),
(498, 146, 'Puebla', 'MX-PUE'),
(499, 146, 'Querétaro', 'MX-QUE'),
(500, 146, 'Quintana Roo', 'MX-ROO'),
(501, 146, 'San Luis Potosí', 'MX-SLP'),
(502, 146, 'Sinaloa', 'MX-SIN'),
(503, 146, 'Sonora', 'MX-SON'),
(504, 146, 'Tabasco', 'MX-TAB'),
(505, 146, 'Tamaulipas', 'MX-TAM'),
(506, 146, 'Tlaxcala', 'MX-TLA'),
(507, 146, 'Veracruz', 'MX-VER'),
(508, 146, 'Yucatán', 'MX-YUC'),
(509, 146, 'Zacatecas', 'MX-ZAC'),
(510, 15, 'Buenos Aires', 'BA'),
(511, 15, 'Catamarca', 'CA'),
(512, 15, 'Chaco', 'CH'),
(513, 15, 'Chubut', 'CT'),
(514, 15, 'Córdoba', 'CB'),
(515, 15, 'Corrientes', 'CR'),
(516, 15, 'Entre Ríos', 'ER'),
(517, 15, 'Formosa', 'FO'),
(518, 15, 'Jujuy', 'JY'),
(519, 15, 'La Pampa', 'LP'),
(520, 15, 'La Rioja', 'LR'),
(521, 15, 'Mendoza', 'MZ'),
(522, 15, 'Misiones', 'MI'),
(523, 15, 'Neuquén', 'NQ'),
(524, 15, 'Río Negro', 'RN'),
(525, 15, 'Salta', 'SA'),
(526, 15, 'San Juan', 'SJ'),
(527, 15, 'San Luis', 'SL'),
(528, 15, 'Santa Cruz', 'SC'),
(529, 15, 'Santa Fe', 'SF'),
(530, 15, 'Santiago del Estero', 'SE'),
(531, 15, 'Tierra del Fuego', 'TF'),
(532, 15, 'Tucumán', 'TU'),
(533, 112, 'Agrigento', 'AG'),
(534, 112, 'Alessandria', 'AL'),
(535, 112, 'Ancona', 'AN'),
(536, 112, 'Aosta', 'AO'),
(537, 112, 'Arezzo', 'AR'),
(538, 112, 'Ascoli Piceno', 'AP'),
(539, 112, 'Asti', 'AT'),
(540, 112, 'Avellino', 'AV'),
(541, 112, 'Bari', 'BA'),
(542, 112, 'Belluno', 'BL'),
(543, 112, 'Benevento', 'BN'),
(544, 112, 'Bergamo', 'BG'),
(545, 112, 'Biella', 'BI'),
(546, 112, 'Bologna', 'BO'),
(547, 112, 'Bolzano', 'BZ'),
(548, 112, 'Brescia', 'BS'),
(549, 112, 'Brindisi', 'BR'),
(550, 112, 'Cagliari', 'CA'),
(551, 112, 'Caltanissetta', 'CL'),
(552, 112, 'Campobasso', 'CB'),
(553, 112, 'Caserta', 'CE'),
(554, 112, 'Catania', 'CT'),
(555, 112, 'Catanzaro', 'CZ'),
(556, 112, 'Chieti', 'CH'),
(557, 112, 'Como', 'CO'),
(558, 112, 'Cosenza', 'CS'),
(559, 112, 'Cremona', 'CR'),
(560, 112, 'Crotone', 'KR'),
(561, 112, 'Cuneo', 'CN'),
(562, 112, 'Enna', 'EN'),
(563, 112, 'Ferrara', 'FE'),
(564, 112, 'Firenze', 'FI'),
(565, 112, 'Foggia', 'FG'),
(566, 112, 'Forli\'-Cesena', 'FO'),
(567, 112, 'Frosinone', 'FR'),
(568, 112, 'Genova', 'GE'),
(569, 112, 'Gorizia', 'GO'),
(570, 112, 'Grosseto', 'GR'),
(571, 112, 'Imperia', 'IM'),
(572, 112, 'Isernia', 'IS'),
(573, 112, 'La Spezia', 'SP'),
(574, 112, 'L\'Aquila', 'AQ'),
(575, 112, 'Latina', 'LT'),
(576, 112, 'Lecce', 'LE'),
(577, 112, 'Lecco', 'LC'),
(578, 112, 'Livorno', 'LI'),
(579, 112, 'Lodi', 'LO'),
(580, 112, 'Lucca', 'LU'),
(581, 112, 'Macerata', 'MC'),
(582, 112, 'Mantova', 'MN'),
(583, 112, 'Massa-Carrara', 'MS'),
(584, 112, 'Matera', 'MT'),
(585, 112, 'Messina', 'ME'),
(586, 112, 'Milano', 'MI'),
(587, 112, 'Modena', 'MO'),
(588, 112, 'Napoli', 'NA'),
(589, 112, 'Novara', 'NO'),
(590, 112, 'Nuoro', 'NU'),
(591, 112, 'Oristano', 'OR'),
(592, 112, 'Padova', 'PD'),
(593, 112, 'Palermo', 'PA'),
(594, 112, 'Parma', 'PR'),
(595, 112, 'Pavia', 'PV'),
(596, 112, 'Perugia', 'PG'),
(597, 112, 'Pesaro e Urbino', 'PS'),
(598, 112, 'Pescara', 'PE'),
(599, 112, 'Piacenza', 'PC'),
(600, 112, 'Pisa', 'PI'),
(601, 112, 'Pistoia', 'PT'),
(602, 112, 'Pordenone', 'PN'),
(603, 112, 'Potenza', 'PZ'),
(604, 112, 'Prato', 'PO'),
(605, 112, 'Ragusa', 'RG'),
(606, 112, 'Ravenna', 'RA'),
(607, 112, 'Reggio di Calabria', 'RC'),
(608, 112, 'Reggio nell\'Emilia', 'RE'),
(609, 112, 'Rieti', 'RI'),
(610, 112, 'Rimini', 'RN'),
(611, 112, 'Roma', 'RM'),
(612, 112, 'Rovigo', 'RO'),
(613, 112, 'Salerno', 'SA'),
(614, 112, 'Sassari', 'SS'),
(615, 112, 'Savona', 'SV'),
(616, 112, 'Siena', 'SI'),
(617, 112, 'Siracusa', 'SR'),
(618, 112, 'Sondrio', 'SO'),
(619, 112, 'Taranto', 'TA'),
(620, 112, 'Teramo', 'TE'),
(621, 112, 'Terni', 'TR'),
(622, 112, 'Torino', 'TO'),
(623, 112, 'Trapani', 'TP'),
(624, 112, 'Trento', 'TN'),
(625, 112, 'Treviso', 'TV'),
(626, 112, 'Trieste', 'TS'),
(627, 112, 'Udine', 'UD'),
(628, 112, 'Varese', 'VA'),
(629, 112, 'Venezia', 'VE'),
(630, 112, 'Verbano-Cusio-Ossola', 'VB'),
(631, 112, 'Vercelli', 'VC'),
(632, 112, 'Verona', 'VR'),
(633, 112, 'Vibo Valentia', 'VV'),
(634, 112, 'Vicenza', 'VI'),
(635, 112, 'Viterbo', 'VT'),
(636, 68, 'Cairo', 'alkahr'),
(637, 68, 'Giza', 'aljyz'),
(638, 68, 'Alexandria', 'alaskndry'),
(639, 68, 'Al-Gharbia', 'alghrby'),
(640, 68, 'Al-Menofia', 'almnofy'),
(641, 68, 'Aswan', 'asoan'),
(642, 249, 'California', 'california'),
(643, 249, 'Florida', 'florida'),
(644, 249, 'Texas', 'texas'),
(645, 250, 'Coast', 'coast'),
(646, 250, 'North Eastern', 'north-eastern'),
(647, 250, 'Eastern', 'eastern'),
(648, 250, 'Central', 'central'),
(649, 250, 'Rift Valley', 'rift-valley'),
(650, 250, 'Western', 'western'),
(651, 250, 'Nyanza', 'nyanza'),
(652, 250, 'Nairobi', 'nairobi'),
(653, 253, 'Lagunes', 'abidjan'),
(654, 253, 'Gbêkê', 'gbeke'),
(655, 253, 'Haut-Sassandra', 'haut-sassandra'),
(656, 253, 'Bélier', 'belier'),
(657, 253, 'Bas-Sassandra', 'bas-sassandra'),
(658, 253, 'Lôh-Djiboua', 'loh-djiboua'),
(659, 253, 'Poro', 'poro'),
(660, 253, 'Moyen-Comoé', 'moyen-comoe'),
(661, 253, 'Tonkpi', 'tonkpi'),
(662, 253, 'Gôh', 'goh'),
(663, 253, 'Nawa', 'nawa'),
(664, 253, 'Agnéby-Tiassa', 'agneby-tiassa'),
(665, 253, 'Lagunes', 'lagunes'),
(666, 253, 'Sud-Comoé', 'sud-comoe'),
(667, 253, 'Marahoué', 'marahoue'),
(668, 253, 'Haut-Sassandra', 'haut-sassandra'),
(669, 253, 'Marahoué', 'marahoue'),
(670, 253, 'Hambol', 'hambol'),
(671, 253, 'Mé', 'me'),
(672, 253, 'Béré', 'bere'),
(673, 253, 'Gontougo', 'gontougo'),
(674, 253, 'Gôh (ex-Fromager)', 'goh-ex-fromager'),
(675, 253, 'Tchologo', 'tchologo'),
(676, 253, 'N\'Zi', 'nzi'),
(677, 253, 'Denguélé', 'denguele'),
(678, 253, 'Guémon', 'guemon'),
(679, 253, 'Dix-Huit Montagnes', 'dix-huit-montagnes'),
(680, 253, 'Savanes', 'savanes'),
(681, 253, 'Moyen-Cavally', 'moyen-cavally'),
(682, 253, 'Moyen-Comoé', 'moyen-comoe'),
(683, 253, 'N\'zi-Comoé', 'nzi-comoe'),
(684, 253, 'Haut-Sassandra', 'haut-sassandra'),
(685, 253, 'Marahoué', 'marahoue'),
(686, 253, 'Lacs', 'lacs'),
(687, 253, 'Agnéby', 'agneby'),
(688, 253, 'Lôh-Djiboua', 'loh-djiboua'),
(689, 254, 'California Testing', 'california-testing'),
(694, 257, 'Alexandria', 'mizoram'),
(695, 257, 'Cairo', 'meghalaya'),
(696, 260, 'Tirane', 'tirane'),
(697, 261, 'IRBID', 'irbid'),
(698, 259, 'Lagos', 'lagos'),
(699, 262, 'jakarta', 'jakarta'),
(700, 263, 'Ouest', 'ouest'),
(701, 264, 'Punjab', 'punjab'),
(702, 261, 'Amman', 'amman'),
(703, 266, 'Kowloon', 'kln'),
(704, 267, 'Hong Kong', 'hong-kong'),
(705, 268, 'Khartoum', 'khartoum'),
(706, 269, 'haryana', 'haryana');

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_notify_notifications`
--

CREATE TABLE `rainlab_notify_notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` int(10) UNSIGNED NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `data` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_notify_notification_rules`
--

CREATE TABLE `rainlab_notify_notification_rules` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `config_data` mediumtext COLLATE utf8mb4_unicode_ci,
  `condition_data` mediumtext COLLATE utf8mb4_unicode_ci,
  `is_enabled` tinyint(1) NOT NULL DEFAULT '0',
  `is_custom` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rainlab_notify_notification_rules`
--

INSERT INTO `rainlab_notify_notification_rules` (`id`, `name`, `code`, `class_name`, `description`, `config_data`, `condition_data`, `is_enabled`, `is_custom`, `created_at`, `updated_at`) VALUES
(1, 'Send welcome email to user', 'welcome_email', 'RainLab\\User\\NotifyRules\\UserRegisteredEvent', '', NULL, NULL, 0, 0, '2019-11-25 23:11:44', '2020-01-14 13:21:03');

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_notify_rule_actions`
--

CREATE TABLE `rainlab_notify_rule_actions` (
  `id` int(10) UNSIGNED NOT NULL,
  `class_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `config_data` mediumtext COLLATE utf8mb4_unicode_ci,
  `rule_host_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rainlab_notify_rule_actions`
--

INSERT INTO `rainlab_notify_rule_actions` (`id`, `class_name`, `config_data`, `rule_host_id`, `created_at`, `updated_at`) VALUES
(1, 'RainLab\\Notify\\NotifyRules\\SendMailTemplateAction', '{\"mail_template\":\"rainlab.user::welcome\",\"send_to_mode\":\"user\"}', 1, '2019-11-25 23:11:44', '2019-11-25 23:11:44');

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_notify_rule_conditions`
--

CREATE TABLE `rainlab_notify_rule_conditions` (
  `id` int(10) UNSIGNED NOT NULL,
  `class_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `config_data` mediumtext COLLATE utf8mb4_unicode_ci,
  `condition_control_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rule_host_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rule_host_id` int(10) UNSIGNED DEFAULT NULL,
  `rule_parent_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rainlab_notify_rule_conditions`
--

INSERT INTO `rainlab_notify_rule_conditions` (`id`, `class_name`, `config_data`, `condition_control_type`, `rule_host_type`, `rule_host_id`, `rule_parent_id`, `created_at`, `updated_at`) VALUES
(1, 'RainLab\\Notify\\Classes\\CompoundCondition', '{\"condition_type\":\"0\",\"condition\":\"true\"}', NULL, 'any', 1, NULL, '2020-01-14 13:20:58', '2020-01-14 13:21:03');

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_translate_attributes`
--

CREATE TABLE `rainlab_translate_attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attribute_data` mediumtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rainlab_translate_attributes`
--

INSERT INTO `rainlab_translate_attributes` (`id`, `locale`, `model_id`, `model_type`, `attribute_data`) VALUES
(1, 'en', '5', 'Responsiv\\Currency\\Models\\Currency', '{\"name\":\"Egyptian Pound\",\"currency_symbol\":\"EGP\"}'),
(2, 'en', '1', 'Spot\\Shipment\\Models\\Office', '{\"name\":\"6 October Branch\"}'),
(3, 'en', '68', 'RainLab\\Location\\Models\\Country', '{\"name\":\"Egypt\"}'),
(4, 'en', '2', 'Spot\\Shipment\\Models\\Office', '{\"name\":\"Masr Elgdida Branch\"}'),
(5, 'en', '3', 'Spot\\Shipment\\Models\\Office', '{\"name\":\"Alexandria Branch\"}'),
(6, 'en', '4', 'Spot\\Shipment\\Models\\Office', '{\"name\":\"Tanta Branch\"}'),
(7, 'en', '1', 'Spot\\Shipment\\Models\\Packaging', '{\"name\":\"Roll\"}'),
(8, 'en', '2', 'Spot\\Shipment\\Models\\Packaging', '{\"name\":\"Documents\"}'),
(9, 'en', '3', 'Spot\\Shipment\\Models\\Packaging', '{\"name\":\"Package\"}'),
(10, 'en', '2', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"Received\"}'),
(11, 'en', '1', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"Pending\"}'),
(12, 'en', '3', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"Approved\"}'),
(13, 'en', '4', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"Refused\"}'),
(14, 'en', '1', 'Spot\\Shipment\\Models\\DeliveryTime', '{\"name\":\"1-2 Days\"}'),
(15, 'en', '636', 'RainLab\\Location\\Models\\State', '{\"name\":\"Cairo\"}'),
(16, 'en', '2', 'Vdomah\\Roles\\Models\\Role', '{\"name\":\"Supervisor\"}'),
(17, 'en', '4', 'Vdomah\\Roles\\Models\\Role', '{\"name\":\"Employee\"}'),
(18, 'en', '3', 'Vdomah\\Roles\\Models\\Role', '{\"name\":\"Department Manager\"}'),
(19, 'en', '5', 'Vdomah\\Roles\\Models\\Role', '{\"name\":\"Client\"}'),
(20, 'en', '6', 'Vdomah\\Roles\\Models\\Role', '{\"name\":\"Branch Manager\"}'),
(21, 'en', '1', 'Vdomah\\Roles\\Models\\Role', '{\"name\":\"Administration\"}'),
(22, 'en', '2', 'Spot\\Shipment\\Models\\DeliveryTime', '{\"name\":\"2-3 Days\"}'),
(23, 'en', '7', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"تم التسليم للمستلم\"}'),
(24, 'ar', '4', 'Vdomah\\Roles\\Models\\Role', '{\"name\":\"موظف\"}'),
(25, 'tr', '4', 'Vdomah\\Roles\\Models\\Role', '{\"name\":\"\"}'),
(26, 'ar', '2', 'Vdomah\\Roles\\Models\\Role', '{\"name\":\"مشرف عام\"}'),
(27, 'tr', '2', 'Vdomah\\Roles\\Models\\Role', '{\"name\":\"\"}'),
(28, 'ar', '5', 'Vdomah\\Roles\\Models\\Role', '{\"name\":\"عميل\"}'),
(29, 'tr', '5', 'Vdomah\\Roles\\Models\\Role', '{\"name\":\"\"}'),
(30, 'ar', '1', 'Vdomah\\Roles\\Models\\Role', '{\"name\":\"مدير عام\"}'),
(31, 'tr', '1', 'Vdomah\\Roles\\Models\\Role', '{\"name\":\"\"}'),
(32, 'ar', '6', 'Vdomah\\Roles\\Models\\Role', '{\"name\":\"مدير فرع\"}'),
(33, 'tr', '6', 'Vdomah\\Roles\\Models\\Role', '{\"name\":\"\"}'),
(34, 'ar', '3', 'Vdomah\\Roles\\Models\\Role', '{\"name\":\"مدير قسم\"}'),
(35, 'tr', '3', 'Vdomah\\Roles\\Models\\Role', '{\"name\":\"\"}'),
(36, 'ar', '249', 'RainLab\\Location\\Models\\Country', '{\"name\":\"الولايات المتحدة الأمريكية\"}'),
(37, 'ar', '68', 'RainLab\\Location\\Models\\Country', '{\"name\":\"مصر\"}'),
(38, 'tr', '68', 'RainLab\\Location\\Models\\Country', '{\"name\":\"مصر\"}'),
(39, 'ar', '641', 'RainLab\\Location\\Models\\State', '{\"name\":\"أسوان\"}'),
(40, 'ar', '640', 'RainLab\\Location\\Models\\State', '{\"name\":\"المنوفية\"}'),
(41, 'ar', '639', 'RainLab\\Location\\Models\\State', '{\"name\":\"الغربية\"}'),
(42, 'ar', '638', 'RainLab\\Location\\Models\\State', '{\"name\":\"الأسكندرية\"}'),
(43, 'ar', '637', 'RainLab\\Location\\Models\\State', '{\"name\":\"الجيزة\"}'),
(44, 'ar', '636', 'RainLab\\Location\\Models\\State', '{\"name\":\"القاهرة\"}'),
(45, 'ar', '4', 'Spot\\Shipment\\Models\\City', '{\"name\":\"طنطا\"}'),
(46, 'ar', '3', 'Spot\\Shipment\\Models\\City', '{\"name\":\"كرموس\"}'),
(47, 'ar', '2', 'Spot\\Shipment\\Models\\City', '{\"name\":\"مصر الجديدة\"}'),
(48, 'ar', '1', 'Spot\\Shipment\\Models\\City', '{\"name\":\"٦ أكتوبر\"}'),
(49, 'ar', '642', 'RainLab\\Location\\Models\\State', '{\"name\":\"كاليفورنيا\"}'),
(50, 'ar', '643', 'RainLab\\Location\\Models\\State', '{\"name\":\"فلوريدا\"}'),
(51, 'ar', '644', 'RainLab\\Location\\Models\\State', '{\"name\":\"تكساس\"}'),
(52, 'ar', '5', 'Spot\\Shipment\\Models\\City', '{\"name\":\"أديلانتو\"}'),
(53, 'ar', '6', 'Spot\\Shipment\\Models\\City', '{\"name\":\"اجورا هيلز\"}'),
(54, 'ar', '7', 'Spot\\Shipment\\Models\\City', '{\"name\":\"ألاميدا\"}'),
(55, 'ar', '8', 'Spot\\Shipment\\Models\\City', '{\"name\":\"ميامي\"}'),
(56, 'ar', '9', 'Spot\\Shipment\\Models\\City', '{\"name\":\"هوستن\"}'),
(57, 'ar', '1', 'Spot\\Shipment\\Models\\Area', '{\"name\":\"وسط ميامي\"}'),
(58, 'ar', '2', 'Spot\\Shipment\\Models\\Area', '{\"name\":\"مفتاح بيسكاين\"}'),
(59, 'ar', '1', 'Spot\\Shipment\\Models\\DeliveryTime', '{\"name\":\"١-٢ يوم\"}'),
(60, 'ar', '2', 'Spot\\Shipment\\Models\\DeliveryTime', '{\"name\":\"٢-٣ يوم\"}'),
(61, 'ar', '1', 'Spot\\Shipment\\Models\\Courier', '{\"name\":\"أرامكس\"}'),
(62, 'ar', '2', 'Spot\\Shipment\\Models\\Courier', '{\"name\":\"البريد المصري\"}'),
(63, 'ar', '1', 'Spot\\Shipment\\Models\\Mode', '{\"name\":\"أفتراضي\"}'),
(64, 'ar', '2', 'Spot\\Shipment\\Models\\Mode', '{\"name\":\"نظام شركات\"}'),
(65, 'ar', '2', 'Spot\\Shipment\\Models\\Office', '{\"name\":\"الفرع الرئيسي2\"}'),
(66, 'ar', '1', 'Spot\\Shipment\\Models\\Packaging', '{\"name\":\"كرتونة صغيرة\"}'),
(67, 'ar', '3', 'Spot\\Shipment\\Models\\Packaging', '{\"name\":\"كرتونة كبيرة\"}'),
(68, 'ar', '2', 'Spot\\Shipment\\Models\\Packaging', '{\"name\":\"مستندات\"}'),
(69, 'ar', '1', 'Spot\\Shipment\\Models\\Category', '{\"name\":\"Clothes\"}'),
(70, 'ar', '2', 'Spot\\Shipment\\Models\\Category', '{\"name\":\"أثاث\"}'),
(71, 'ar', '3', 'Spot\\Shipment\\Models\\Category', '{\"name\":\"ألكترونيات\"}'),
(72, 'ar', '4', 'Spot\\Shipment\\Models\\Category', '{\"name\":\"ملابس\"}'),
(73, 'ar', '1', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"مُعلقة\"}'),
(74, 'ar', '10', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"وُردتّ للعميل\"}'),
(75, 'ar', '9', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"تم التوريد للشركة\"}'),
(76, 'ar', '8', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"تم تسليم التوريد للسائق\"}'),
(77, 'ar', '7', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"أُستلمت\"}'),
(78, 'ar', '6', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"خزنت بالمخزن\"}'),
(79, 'ar', '5', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"تم التسليم للسائق\"}'),
(80, 'ar', '4', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"مرفوضة\"}'),
(81, 'ar', '3', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"مقبولة\"}'),
(82, 'ar', '2', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"تم الاستلام\"}'),
(83, 'ar', '3', 'Spot\\Shipment\\Models\\Mode', '{\"name\":\"Ecommerce\"}'),
(84, 'es', '3', 'Spot\\Shipment\\Models\\Mode', '{\"name\":\"Ecommerce\"}'),
(85, 'ar', '6', 'Spot\\Shipment\\Models\\Mode', '{\"name\":\"eCommerce drop at Hub\"}'),
(86, 'es', '6', 'Spot\\Shipment\\Models\\Mode', '{\"name\":\"eCommerce drop at Hub\"}'),
(87, 'ar', '5', 'Spot\\Shipment\\Models\\Mode', '{\"name\":\"Customer Pickup at Hub\"}'),
(88, 'es', '5', 'Spot\\Shipment\\Models\\Mode', '{\"name\":\"Customer Pickup at Hub\"}'),
(89, 'ar', '4', 'Spot\\Shipment\\Models\\Mode', '{\"name\":\"Customer Drop at Hub\"}'),
(90, 'es', '4', 'Spot\\Shipment\\Models\\Mode', '{\"name\":\"Customer Drop at Hub\"}'),
(91, 'en', '1', 'Spot\\Shipment\\Models\\Courier', '{\"name\":\"İzmir Şubesi\"}'),
(92, 'en', '6', 'Spot\\Shipment\\Models\\Office', '{\"name\":\"Erzurum Şubesi\"}'),
(93, 'en', '7', 'Spot\\Shipment\\Models\\Packaging', '{\"name\":\"Large package\"}'),
(94, 'en', '5', 'Spot\\Shipment\\Models\\Packaging', '{\"name\":\"1 - 3 Kg\"}'),
(95, 'en', '6', 'Spot\\Shipment\\Models\\Packaging', '{\"name\":\"3 - 5 Kg\"}'),
(96, 'TR', '253', 'RainLab\\Location\\Models\\Country', '{\"name\":\"United Arab Emirates\"}'),
(97, 'ar', '253', 'RainLab\\Location\\Models\\Country', '{\"name\":\"الأمارات\"}'),
(98, 'TR', '653', 'RainLab\\Location\\Models\\State', '{\"name\":\"Dubai\"}'),
(99, 'ar', '653', 'RainLab\\Location\\Models\\State', '{\"name\":\"دبي\"}'),
(100, 'TR', '1', 'Spot\\Shipment\\Models\\Office', '{\"name\":\"Main Branch\"}'),
(101, 'ar', '1', 'Spot\\Shipment\\Models\\Office', '{\"name\":\"الفرع الرئيسي\"}'),
(102, 'TR', '2', 'Spot\\Shipment\\Models\\Treasury', '{\"name\":\"Main Treasury\"}'),
(103, 'ar', '2', 'Spot\\Shipment\\Models\\Treasury', '{\"name\":\"Main Treasury\"}'),
(104, 'TR', '1', 'Spot\\Shipment\\Models\\DeliveryTime', '{\"name\":\"1-2 Gün\"}'),
(105, 'TR', '1', 'Spot\\Shipment\\Models\\Courier', '{\"name\":\"Aramex\"}'),
(106, 'TR', '1', 'Spot\\Shipment\\Models\\Mode', '{\"name\":\"Standart\"}'),
(107, 'TR', '5', 'Spot\\Shipment\\Models\\Packaging', '{\"name\":\"Less than 1 kg\"}'),
(108, 'ar', '5', 'Spot\\Shipment\\Models\\Packaging', '{\"name\":\"أقل من ١ كجم\"}'),
(109, 'TR', '7', 'Spot\\Shipment\\Models\\Packaging', '{\"name\":\"3 - 5 Kg\"}'),
(110, 'ar', '7', 'Spot\\Shipment\\Models\\Packaging', '{\"name\":\"3 - 5 Kg\"}'),
(111, 'TR', '6', 'Spot\\Shipment\\Models\\Packaging', '{\"name\":\"1 - 3 Kg\"}'),
(112, 'ar', '6', 'Spot\\Shipment\\Models\\Packaging', '{\"name\":\"1 - 3 Kg\"}'),
(113, 'TR', '1', 'Spot\\Shipment\\Models\\Category', '{\"name\":\"Clothes\"}'),
(114, 'TR', '2', 'Spot\\Shipment\\Models\\DeliveryTime', '{\"name\":\"2-3 Days\"}'),
(115, 'TR', '25', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"Delivered to receiver\"}'),
(116, 'ar', '25', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"Delivered to receiver\"}'),
(117, 'ar', '255', 'RainLab\\Location\\Models\\Country', '{\"name\":\"مصر\"}'),
(118, 'en', '2', 'Spot\\Shipment\\Models\\Courier', '{\"name\":\"Fedex\"}'),
(119, 'en', '256', 'RainLab\\Location\\Models\\Country', '{\"name\":\"Tunisie\"}'),
(120, 'en', '257', 'RainLab\\Location\\Models\\Country', '{\"name\":\"Tunisie\"}'),
(121, 'en', '690', 'RainLab\\Location\\Models\\State', '{\"name\":\"Ariana\"}'),
(122, 'en', '691', 'RainLab\\Location\\Models\\State', '{\"name\":\"Beja\"}'),
(123, 'en', '692', 'RainLab\\Location\\Models\\State', '{\"name\":\"Ben Arous\"}'),
(124, 'en', '693', 'RainLab\\Location\\Models\\State', '{\"name\":\"Gafsa\"}'),
(125, 'en', '43', 'Spot\\Shipment\\Models\\City', '{\"name\":\"Gafsa centre\"}'),
(126, 'en', '1', 'Spot\\Shipment\\Models\\Mode', '{\"name\":\"Standard\"}'),
(127, 'en', '26', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"Return request\"}'),
(128, 'ar', '257', 'RainLab\\Location\\Models\\Country', '{\"name\":\"Egypt\"}'),
(129, 'ar', '2', 'Spot\\Shipment\\Models\\Car', '{\"name\":\"test\",\"description\":\"tsetest\"}'),
(130, 'ar', '3', 'Spot\\Shipment\\Models\\Car', '{\"name\":\"test\",\"description\":\"tsetest\"}'),
(131, 'ar', '1', 'spot\\Container\\Models\\Location', '{\"name\":\"JOST\",\"location_desc\":\"test\"}'),
(132, 'ar', '7', 'spot\\Container\\Models\\Status', '{\"name\":\"حفظ\",\"description\":\"خاصة بالعميل \"}'),
(133, 'ar', '1', 'spot\\Container\\Models\\Reasonarrival', '{\"name\":\"Unloading\",\"reason_desc\":\"توقفت\"}'),
(134, 'ar', '13', 'spot\\Container\\Models\\Destination', '{\"name\":\"test\"}'),
(135, 'ar', '5', 'spot\\Container\\Models\\Destination', '{\"name\":\"spain\"}'),
(136, 'ar', '2', 'spot\\Container\\Models\\Location', '{\"name\":\"Other..\"}'),
(137, 'ar', '8', 'spot\\Container\\Models\\Status', '{\"name\":\"حفظ\"}'),
(138, 'ar', '2', 'spot\\Container\\Models\\Reasonarrival', '{\"name\":\"Custom Stop\"}'),
(139, 'ar', '5', 'spot\\Container\\Models\\Size', '{\"name\":\"55\"}'),
(140, 'en', '261', 'RainLab\\Location\\Models\\Country', '{\"name\":\"JORDAN\"}'),
(141, 'en', '697', 'RainLab\\Location\\Models\\State', '{\"name\":\"IRBID\"}'),
(142, 'en', '47', 'Spot\\Shipment\\Models\\City', '{\"name\":\"IRBID\"}'),
(143, 'en', '3', 'Spot\\Shipment\\Models\\Courier', '{\"name\":\"DHL\"}'),
(144, 'en', '32', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"Registered..\",\"description\":\"\"}'),
(145, 'en', '33', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"Fully Loaded\",\"description\":\"\"}'),
(146, 'en', '34', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"Destroyed\",\"description\":\"\"}'),
(147, 'en', '35', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"Exported\",\"description\":\"\"}'),
(148, 'en', '36', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"Blocked\",\"description\":\"\"}'),
(149, 'en', '37', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"Loaded\",\"description\":\"\"}'),
(150, 'en', '38', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"Loaded\",\"description\":\"\"}'),
(151, 'en', '39', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"Loaded\",\"description\":\"\"}'),
(152, 'en', '40', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"Loaded\",\"description\":\"\"}'),
(153, 'en', '41', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"load\",\"description\":\"\"}'),
(154, 'ar', '41', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"Loaded\"}'),
(155, 'ar', '42', 'Spot\\Shipment\\Models\\Status', '{\"name\":\"Loaded\"}'),
(156, 'ar', '6', 'Spot\\Shipment\\Models\\Car', '{\"name\":\"test car\",\"description\":\"test\"}'),
(157, 'ar', '1', 'spot\\Shipment\\Models\\Label', '{\"name\":\"Yusuf\"}'),
(158, 'ar', '14', 'spot\\Container\\Models\\Destination', '{\"name\":\"Lebanon\"}'),
(159, 'en', '264', 'RainLab\\Location\\Models\\Country', '{\"name\":\"Pakistan\"}'),
(160, 'en', '701', 'RainLab\\Location\\Models\\State', '{\"name\":\"Punjab\"}'),
(161, 'en', '5', 'Spot\\Shipment\\Models\\Car', '{\"name\":\"PWM Cruise\",\"description\":\"\"}'),
(162, 'en', '702', 'RainLab\\Location\\Models\\State', '{\"name\":\"Amman\"}'),
(163, 'en', '51', 'Spot\\Shipment\\Models\\City', '{\"name\":\"Amman\"}'),
(164, 'en', '265', 'RainLab\\Location\\Models\\Country', '{\"name\":\"Myanmar\"}'),
(165, 'en', '8', 'Responsiv\\Currency\\Models\\Currency', '{\"name\":\"\",\"currency_symbol\":\"\"}'),
(166, 'ar', '703', 'RainLab\\Location\\Models\\State', '{\"name\":\"KLN\"}'),
(167, 'en', '4', 'Spot\\Shipment\\Models\\Courier', '{\"name\":\"AMPak\"}'),
(168, 'en', '3', 'Spot\\Shipment\\Models\\Mode', '{\"name\":\"Train\"}'),
(169, 'ar', '268', 'RainLab\\Location\\Models\\Country', '{\"name\":\"السودان\"}'),
(170, 'ar', '705', 'RainLab\\Location\\Models\\State', '{\"name\":\"الخرطوم\"}'),
(171, 'ar', '53', 'Spot\\Shipment\\Models\\City', '{\"name\":\"الخرطوم\"}'),
(172, 'ar', '54', 'Spot\\Shipment\\Models\\City', '{\"name\":\"بحري\"}'),
(173, 'ar', '12', 'Responsiv\\Currency\\Models\\Currency', '{\"name\":\"جنيه سوداني \",\"currency_symbol\":\"ج.س\"}'),
(174, 'CN', '1', 'spot\\Container\\Models\\Location', '{\"name\":\"JOST\"}'),
(175, 'CN', '1', 'Spot\\Shipment\\Models\\Mode', '{\"name\":\"By Road\"}'),
(176, 'CN', '2', 'Spot\\Shipment\\Models\\Mode', '{\"name\":\"By Air\"}'),
(177, 'CN', '3', 'Spot\\Shipment\\Models\\Mode', '{\"name\":\"Train\"}'),
(178, 'ar', '19', 'Responsiv\\Currency\\Models\\Currency', '{\"name\":\"الجنيه المصري\",\"currency_symbol\":\"\"}'),
(179, 'ar', '8', 'Responsiv\\Currency\\Models\\Currency', '{\"name\":\"\",\"currency_symbol\":\"\"}'),
(180, 'ar', '706', 'RainLab\\Location\\Models\\State', '{\"name\":\"India\"}'),
(181, 'ar', '55', 'Spot\\Shipment\\Models\\City', '{\"name\":\"Gurgaon\"}');

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_translate_indexes`
--

CREATE TABLE `rainlab_translate_indexes` (
  `id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_translate_locales`
--

CREATE TABLE `rainlab_translate_locales` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `is_enabled` tinyint(1) NOT NULL DEFAULT '0',
  `sort_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rainlab_translate_locales`
--

INSERT INTO `rainlab_translate_locales` (`id`, `code`, `name`, `is_default`, `is_enabled`, `sort_order`) VALUES
(1, 'en', 'English', 1, 1, 2),
(11, 'ar', 'Arabic', 0, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_translate_messages`
--

CREATE TABLE `rainlab_translate_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_data` mediumtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rainlab_translate_messages`
--

INSERT INTO `rainlab_translate_messages` (`id`, `code`, `message_data`) VALUES
(1, 'not.allowed', '{\"x\":\"not_allowed\",\"en\":\"Not Allowed\",\"ar\":\"\\u063a\\u064a\\u0631 \\u0645\\u0633\\u0645\\u0648\\u062d\"}'),
(2, 'created.successfully', '{\"x\":\"created_successfully\",\"en\":\"Created Successfully\",\"ar\":\"\\u062a\\u0645 \\u0627\\u0644\\u0623\\u0636\\u0627\\u0641\\u0629 \\u0628\\u0646\\u062c\\u0627\\u062d\"}'),
(3, 'updated.successfully', '{\"x\":\"updated_successfully\",\"en\":\"Updated Successfully\",\"ar\":\"\\u062a\\u0645 \\u0627\\u0644\\u062a\\u062d\\u062f\\u064a\\u062b \\u0628\\u0646\\u062c\\u0627\\u062d\"}'),
(4, 'no.records.found', '{\"x\":\"no_records_found\",\"en\":\"No records found\",\"ar\":\"\\u0644\\u0645 \\u064a\\u062a\\u0645 \\u0625\\u064a\\u062c\\u0627\\u062f \\u0623\\u064a \\u0646\\u062a\\u0627\\u0626\\u062c\"}'),
(5, 'orders', '{\"x\":\"orders\",\"en\":\"Orders\",\"ar\":\"\\u0627\\u0644\\u0634\\u062d\\u0646\\u0627\\u062a\"}'),
(6, 'users', '{\"x\":\"users\",\"en\":\"Users\",\"ar\":\"\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645\\u064a\\u0646\"}'),
(7, 'invoices', '{\"x\":\"invoices\",\"en\":\"Invoices\",\"ar\":\"\\u0641\\u0648\\u0627\\u062a\\u064a\\u0631\"}'),
(8, 'create.database.backup', '{\"x\":\"create_database_backup\",\"en\":\"Create Database Backup\",\"ar\":\"\\u0625\\u0646\\u0634\\u0627\\u0621 \\u0646\\u0633\\u062e\\u0629 \\u0623\\u062d\\u062a\\u064a\\u0627\\u0637\\u064a\\u0629 \\u0644\\u0642\\u0627\\u0639\\u062f\\u0629 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a\"}'),
(9, 'create.files.backup', '{\"x\":\"create_files_backup\",\"en\":\"Create Files Backup\",\"ar\":\"\\u0625\\u0646\\u0634\\u0627\\u0621 \\u0646\\u0633\\u062e\\u0629 \\u0623\\u062d\\u062a\\u064a\\u0627\\u0637\\u064a\\u0629 \\u0644\\u0644\\u0645\\u0644\\u0641\\u0627\\u062a\"}'),
(10, 'create.system.backup', '{\"x\":\"create_system_backup\",\"en\":\"Create Whole System Backup\",\"ar\":\"\\u0625\\u0646\\u0634\\u0627\\u0621 \\u0646\\u0633\\u062e\\u0629 \\u0623\\u062d\\u062a\\u064a\\u0627\\u0637\\u064a\\u0629 \\u0644\\u0643\\u0627\\u0645\\u0644 \\u0627\\u0644\\u0646\\u0638\\u0627\\u0645\"}'),
(11, 'shipment.requests', '{\"x\":\"shipment_requests\",\"en\":\"Shipments Requests\",\"ar\":\"\\u0634\\u062d\\u0646\\u0627\\u062a \\u062c\\u062f\\u064a\\u062f\\u0629\"}'),
(12, 'shipment.saved', '{\"x\":\"shipment_saved\",\"en\":\"Saved Shipments\",\"ar\":\"\\u0634\\u062d\\u0646\\u0627\\u062a \\u0645\\u062d\\u0641\\u0648\\u0638\\u0629\"}'),
(13, 'shipments.approved', '{\"x\":\"shipments_approved\",\"en\":\"Approved Shipments\",\"ar\":\"\\u0634\\u062d\\u0646\\u0627\\u062a \\u0645\\u0642\\u0628\\u0648\\u0644\\u0629\"}'),
(14, 'shipments.processing', '{\"x\":\"shipments_processing\",\"en\":\"Processing Shipments\",\"ar\":\"\\u0634\\u062d\\u0646\\u0627\\u062a \\u062c\\u0627\\u0631\\u064a \\u0627\\u0644\\u0639\\u0645\\u0644 \\u0639\\u0644\\u064a\\u0647\\u0627\"}'),
(15, 'shipments.manifest', '{\"x\":\"shipments_manifest\",\"en\":\"Manifest\",\"ar\":\"\\u062e\\u0637\\u0648\\u0637 \\u0633\\u064a\\u0631 \\u0627\\u0644\\u0639\\u0645\\u0644\"}'),
(16, 'shipments.all', '{\"x\":\"shipments_all\",\"en\":\"All Shipments\",\"ar\":\"\\u062c\\u0645\\u064a\\u0639 \\u0627\\u0644\\u0634\\u062d\\u0646\\u0627\\u062a\"}'),
(17, 'prepaid', '{\"x\":\"prepaid\",\"en\":\"Prepaid\",\"ar\":\"\\u0645\\u064f\\u0633\\u0628\\u0642 \\u0627\\u0644\\u062f\\u0641\\u0639\"}'),
(18, 'postpaid', '{\"x\":\"postpaid\",\"en\":\"Postpaid\",\"ar\":\"\\u0645\\u0624\\u062c\\u0644 \\u0627\\u0644\\u062f\\u0641\\u0639\"}'),
(19, 'add.new', '{\"x\":\"add_new\",\"en\":\"Add New\",\"ar\":\"\\u0623\\u0636\\u0641 \\u062c\\u062f\\u064a\\u062f\"}'),
(20, 'add.manifest', '{\"x\":\"add_manifest\",\"en\":\"Add New Manifest\",\"ar\":\"\\u0627\\u0636\\u0641 \\u062e\\u0637 \\u0633\\u064a\\u0631\"}'),
(21, 'mobile.already.registered', '{\"x\":\"mobile_already_registered\",\"en\":\"This mobile is already registered\",\"ar\":\"\\u0631\\u0642\\u0645 \\u0627\\u0644\\u062c\\u0648\\u0627\\u0644\\/\\u0627\\u0644\\u0645\\u0648\\u0628\\u0627\\u064a\\u0644 \\u0645\\u064f\\u0633\\u062c\\u0644 \\u0645\\u064f\\u0633\\u0628\\u0642\\u0627\\u064b\"}'),
(22, 'username.already.registered', '{\"x\":\"username_already_registered\",\"en\":\"This username is already registered\",\"ar\":\"\\u0627\\u0633\\u0645 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645 \\u0645\\u064f\\u0633\\u062c\\u0644 \\u0645\\u064f\\u0633\\u0628\\u0642\\u0627\\u064b\"}'),
(23, 'email.already.registered', '{\"x\":\"email_already_registered\",\"en\":\"This email is already registered\",\"ar\":\"\\u0627\\u0644\\u0628\\u0631\\u064a\\u062f \\u0627\\u0644\\u0625\\u0644\\u0643\\u062a\\u0631\\u0648\\u0646\\u064a \\u0645\\u064f\\u0633\\u062c\\u0644 \\u0645\\u064f\\u0633\\u0628\\u0642\\u0627\\u064b\"}'),
(24, 'another.order.with.the.same.numbers', '{\"x\":\"another_order_with_the_same_numbers\",\"en\":\"Another order with the same numbers\",\"ar\":\"\\u064a\\u0648\\u062c\\u062f \\u0634\\u062d\\u0646\\u0629 \\u0633\\u0627\\u0628\\u0642 \\u0628\\u0646\\u0641\\u0633 \\u0631\\u0642\\u0645 \\u0627\\u0644\\u0645\\u062a\\u0627\\u0628\\u0639\\u0629\"}'),
(25, 'best.regards', '{\"x\":\"best_regards\",\"en\":\"Best Regards\",\"ar\":\"\\u062e\\u0627\\u0644\\u0635 \\u0627\\u0644\\u062a\\u062d\\u064a\\u0627\\u062a\"}'),
(26, 'footer.email.msg', '{\"x\":\"footer_email_msg\",\"en\":\"You are receiving this email because you have visited our site or asked us about the regular newsletter. Make sure our messages get to your Inbox (and not your bulk or junk folders)\",\"ar\":\"\\u0623\\u0646\\u062a \\u062a\\u062a\\u0644\\u0642\\u0649 \\u0647\\u0630\\u0627 \\u0627\\u0644\\u0628\\u0631\\u064a\\u062f \\u0627\\u0644\\u0625\\u0644\\u0643\\u062a\\u0631\\u0648\\u0646\\u064a \\u0644\\u0623\\u0646\\u0643 \\u0632\\u0631\\u062a \\u0645\\u0648\\u0642\\u0639\\u0646\\u0627 \\u0623\\u0648 \\u0633\\u0623\\u0644\\u062a\\u0646\\u0627 \\u0639\\u0646 \\u0627\\u0644\\u0631\\u0633\\u0627\\u0644\\u0629 \\u0627\\u0644\\u0625\\u062e\\u0628\\u0627\\u0631\\u064a\\u0629 \\u0627\\u0644\\u0639\\u0627\\u062f\\u064a\\u0629. \\u062a\\u0623\\u0643\\u062f \\u0645\\u0646 \\u0648\\u0635\\u0648\\u0644 \\u0631\\u0633\\u0627\\u0626\\u0644\\u0646\\u0627 \\u0625\\u0644\\u0649 \\u0627\\u0644\\u0628\\u0631\\u064a\\u062f \\u0627\\u0644\\u0648\\u0627\\u0631\\u062f (\\u0648\\u0644\\u064a\\u0633 \\u0645\\u062c\\u0644\\u062f\\u0627\\u062a \\u0627\\u0644\\u0628\\u0631\\u064a\\u062f \\u063a\\u064a\\u0631 \\u0627\\u0644\\u0647\\u0627\\u0645 \\u0623\\u0648 \\u063a\\u064a\\u0631 \\u0627\\u0644\\u0647\\u0627\\u0645)\"}'),
(27, 'rights.reserved', '{\"x\":\"rights_reserved\",\"en\":\"All Rights Reserved\",\"ar\":\"\\u062c\\u0645\\u064a\\u0639 \\u0627\\u0644\\u062d\\u0642\\u0648\\u0642 \\u0645\\u062d\\u0641\\u0648\\u0638\\u0629\"}'),
(28, 'please.add', '{\"x\":\"please_add\",\"en\":\"Please add\",\"ar\":\"\\u0623\\u0636\\u0641 \\u0645\\u0646 \\u0641\\u0636\\u0644\\u0643\"}'),
(29, 'to.contacts', '{\"x\":\"to_contacts\",\"en\":\"to your contacts\",\"ar\":\"\\u0644\\u0642\\u0627\\u0626\\u0645\\u0629 \\u0639\\u0645\\u0644\\u0627\\u0626\\u0643\"}'),
(30, 'dear', '{\"x\":\"dear\",\"en\":\"Dear\",\"ar\":\"\\u0639\\u0632\\u064a\\u0632\\u064a\"}'),
(31, 'new.shipments', '{\"x\":\"new_shipments\",\"en\":\"There is a new shipment, please check it\",\"ar\":\"\\u064a\\u0648\\u062c\\u062f \\u0634\\u062d\\u0646\\u0629 \\u062c\\u062f\\u064a\\u062f\\u060c \\u0645\\u0646 \\u0641\\u0636\\u0644\\u0643 \\u0642\\u0645 \\u0628\\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647\"}'),
(32, 'approved.shipment', '{\"x\":\"approved_shipment\",\"en\":\"There is an Approved shipment, please check it\",\"ar\":\"\\u064a\\u0648\\u062c\\u062f \\u0634\\u062d\\u0646\\u0629 \\u062a\\u0645 \\u0627\\u0644\\u0645\\u0648\\u0627\\u0641\\u0642\\u0629 \\u0639\\u0644\\u064a\\u0647\\u060c \\u0645\\u0646 \\u0641\\u0636\\u0644\\u0643 \\u0642\\u0645 \\u0628\\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647\"}'),
(33, 'refused.shipment', '{\"x\":\"refused_shipment\",\"en\":\"The shipment has been refused, please check it\",\"ar\":\"\\u062a\\u0645 \\u0631\\u0641\\u0636 \\u0627\\u0644\\u0634\\u062d\\u0646\\u0629\\u060c \\u064a\\u0631\\u062c\\u0649 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647\"}'),
(34, 'postponed.shipment', '{\"x\":\"postponed_shipment\",\"en\":\"The shipment has been postponed, please check it\",\"ar\":\"\\u062a\\u0645 \\u062a\\u0623\\u062c\\u064a\\u0644 \\u0627\\u0644\\u0634\\u062d\\u0646\\u0629\\u060c \\u064a\\u0631\\u062c\\u0649 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647\"}'),
(35, 'transfered.shipment', '{\"x\":\"transfered_shipment\",\"en\":\"The shipment has been transfered\",\"ar\":\"\\u062a\\u0645 \\u0646\\u0642\\u0644 \\u0627\\u0644\\u0634\\u062d\\u0646\\u0629 \\u0644\\u0641\\u0631\\u0639 \"}'),
(36, 'assign.shipment', '{\"x\":\"assign_shipment\",\"en\":\"The shipment has been assigned, please check it\",\"ar\":\"\\u062a\\u0645 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0645\\u0648\\u0638\\u0641 \\u0644\\u0644\\u0634\\u062d\\u0646\\u0629\\u060c \\u064a\\u0631\\u062c\\u0649 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647\"}'),
(37, 'driver.received', '{\"x\":\"driver_received\",\"en\":\"The shipment has been received by the driver, please check it\",\"ar\":\"\\u062a\\u0645 \\u062a\\u0633\\u0644\\u064a\\u0645 \\u0627\\u0644\\u0634\\u062d\\u0646\\u0629 \\u0644\\u0644\\u0633\\u0627\\u0626\\u0642\\u060c \\u064a\\u0631\\u062c\\u0649 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647\"}'),
(38, 'discards.request', '{\"x\":\"discards_request\",\"en\":\"The shipment has been requested as discards, please check it\",\"ar\":\"\\u062a\\u0645 \\u0634\\u062d\\u0646\\u0629 \\u0627\\u0631\\u062c\\u0627\\u0639 \\u0644\\u0644\\u0634\\u062d\\u0646\\u0629\\u060c \\u064a\\u0631\\u062c\\u0649 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647\"}'),
(39, 'received', '{\"x\":\"received\",\"en\":\"Received\",\"ar\":\"\\u062a\\u0645 \\u0627\\u0633\\u062a\\u0644\\u0627\\u0645 \\u0627\\u0644\\u0634\\u062d\\u0646\\u0629\\u060c \\u064a\\u0631\\u062c\\u0649 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647\"}'),
(40, 'manifest.assigned', '{\"x\":\"manifest_assigned\",\"en\":\"The shipment has been added to manifest, please check it\",\"ar\":\"\\u062a\\u0645 \\u0627\\u0644\\u0623\\u0636\\u0627\\u0641\\u0629 \\u0644\\u062e\\u0637 \\u0633\\u064a\\u0631\"}'),
(41, 'discards.driver.received', '{\"x\":\"discards_driver_received\",\"en\":\"The discards has been received by the driver, please check it\",\"ar\":\"\\u062a\\u0645 \\u062a\\u0633\\u0644\\u064a\\u0645 \\u0645\\u0631\\u062a\\u062c\\u0639\\u0627\\u062a \\u0644\\u0644\\u0633\\u0627\\u0626\\u0642\\u060c \\u064a\\u0631\\u062c\\u0649 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647\"}'),
(42, 'stock.saved', '{\"x\":\"stock_saved\",\"en\":\"The shipment has been saved on stock, please check it\",\"ar\":\"\\u062a\\u0645 \\u062d\\u0641\\u0638 \\u0627\\u0644\\u0634\\u062d\\u0646\\u0629 \\u0628\\u0627\\u0644\\u0645\\u062e\\u0632\\u0646\\u060c \\u064a\\u0631\\u062c\\u0649 \\u0627\\u0644\\u0645\\u0631\\u0627\\u062c\\u0639\\u0629\"}'),
(43, 'delivered', '{\"x\":\"delivered\",\"en\":\"Delivered shipments\",\"ar\":\"\\u0634\\u064f\\u062d\\u0646\\u0627\\u062a \\u0645\\u064f\\u0633\\u0644\\u0645\\u0629\"}'),
(44, 'returned', '{\"x\":\"returned\",\"en\":\"The shipment has been returned, please check it\",\"ar\":\"\\u062a\\u0645 \\u062a\\u0633\\u0644\\u064a\\u0645 \\u0627\\u0631\\u062c\\u0627\\u0639 \\u0627\\u0644\\u0634\\u062d\\u0646\\u0629\"}'),
(45, 'new.account', '{\"x\":\"new_account\",\"en\":\"Your account has been created successfully\",\"ar\":\"\\u062a\\u0645 \\u0625\\u0646\\u0634\\u0627\\u0621 \\u062d\\u0633\\u0627\\u0628\\u0643 \\u0628\\u0646\\u062c\\u0627\\u062d\"}'),
(46, 'receiver.request', '{\"x\":\"receiver_request\",\"en\":\"Receiver request\",\"ar\":\"\\u0634\\u062d\\u0646\\u0629 \\u0627\\u0644\\u0645\\u064f\\u0633\\u062a\\u0644\\u0645\"}'),
(47, 'receiver.evade', '{\"x\":\"receiver_evade\",\"en\":\"Receiver evade\",\"ar\":\"\\u062a\\u0647\\u0631\\u064f\\u0628 \\u0627\\u0644\\u0645\\u064f\\u0633\\u062a\\u0644\\u0645\"}'),
(48, 'sender.request', '{\"x\":\"sender_request\",\"en\":\"Sender request\",\"ar\":\"\\u0634\\u062d\\u0646\\u0629 \\u0627\\u0644\\u0631\\u0627\\u0633\\u0644\"}'),
(49, 'mark.all.readed', '{\"x\":\"mark_all_readed\",\"en\":\"Mark all as read\",\"ar\":\"\\u062a\\u062d\\u062f\\u064a\\u062f \\u0627\\u0644\\u0643\\u0644 \\u0643\\u0645\\u0642\\u0631\\u0648\\u0621\"}'),
(50, 'shipment.view', '{\"x\":\"shipment_view\",\"en\":\"View Shipment\",\"ar\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629\"}'),
(51, 'multiple.add', '{\"x\":\"multiple_add\",\"en\":\"Add Multiples\",\"ar\":\"\\u0623\\u0636\\u0641 \\u0639\\u062f\\u062f\"}'),
(52, 'payment.for', '{\"x\":\"payment_for\",\"en\":\"payment for\",\"ar\":\"\\u0627\\u0644\\u062f\\u0641\\u0639\\u0629 \\u0644\\u0640\"}'),
(53, 'for', '{\"x\":\"for\",\"en\":\"For\",\"ar\":\"\\u0644\\u0640\"}'),
(54, 'movement.type', '{\"x\":\"movement_type\",\"en\":\"movement type\",\"ar\":\"\\u0646\\u0648\\u0639 \\u0627\\u0644\\u062d\\u0631\\u0643\\u0629\"}'),
(55, 'description', '{\"x\":\"description\",\"en\":\"description\",\"ar\":\"\\u0627\\u0644\\u0648\\u0635\\u0641\"}'),
(56, 'amount', '{\"x\":\"amount\",\"en\":\"amount\",\"ar\":\"\\u0627\\u0644\\u0642\\u064a\\u0645\\u0629\"}'),
(57, 'status', '{\"x\":\"status\",\"en\":\"status\",\"ar\":\"\\u0627\\u0644\\u062d\\u0627\\u0644\\u0629\"}'),
(58, 'date', '{\"x\":\"date\",\"en\":\"date\",\"ar\":\"\\u0627\\u0644\\u062a\\u0627\\u0631\\u064a\\u062e\"}'),
(59, 'shipment', '{\"x\":\"shipment\",\"en\":\"shipment\",\"ar\":\"\\u0627\\u0644\\u0634\\u062d\\u0646\\u0629\"}'),
(60, 'user', '{\"x\":\"user\",\"en\":\"user\",\"ar\":\"\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645\"}'),
(61, 'branch', '{\"x\":\"branch\",\"en\":\"branch\",\"ar\":\"\\u0641\\u0631\\u0639\"}'),
(62, 'withdrawl', '{\"x\":\"withdrawl\",\"en\":\"withdrawl\",\"ar\":\"\\u0633\\u062d\\u0628\"}'),
(63, 'deposit', '{\"x\":\"deposit\",\"en\":\"deposit\",\"ar\":\"\\u0627\\u064a\\u062f\\u0627\\u0639\"}'),
(64, 'deduction.wallet', '{\"x\":\"deduction_wallet\",\"en\":\"deduction from the wallet\",\"ar\":\"\\u062e\\u0635\\u0645 \\u0645\\u0646 \\u0627\\u0644\\u0645\\u062d\\u0641\\u0638\\u0629\"}'),
(65, 'addition.wallet', '{\"x\":\"addition_wallet\",\"en\":\"add to wallet\",\"ar\":\"\\u0627\\u0636\\u0627\\u0641\\u0629 \\u0644\\u0644\\u0645\\u062d\\u0641\\u0638\\u0629\"}'),
(66, 'deduction.commission', '{\"x\":\"deduction_commission\",\"en\":\"deduction of commission balance\",\"ar\":\"\\u062e\\u0635\\u0645 \\u0645\\u0646 \\u0631\\u0635\\u064a\\u062f \\u0627\\u0644\\u0639\\u0645\\u0648\\u0644\\u0627\\u062a\"}'),
(67, 'addition.commission', '{\"x\":\"addition_commission\",\"en\":\"add to the commission balance\",\"ar\":\"\\u0627\\u0636\\u0627\\u0641\\u0629 \\u0644\\u0631\\u0635\\u064a\\u062f \\u0627\\u0644\\u0639\\u0645\\u0648\\u0644\\u0627\\u062a\"}'),
(68, 'deduction.packages', '{\"x\":\"deduction_packages\",\"en\":\"deduction from the balance of packages\",\"ar\":\"\\u062e\\u0635\\u0645 \\u0645\\u0646 \\u0631\\u0635\\u064a\\u062f \\u0627\\u0644\\u0637\\u0631\\u0648\\u062f\"}'),
(69, 'addition.packages', '{\"x\":\"addition_packages\",\"en\":\"add  to the balance of packages\",\"ar\":\"\\u0627\\u0636\\u0627\\u0641\\u0629 \\u0644\\u0631\\u0635\\u064a\\u062f \\u0627\\u0644\\u0637\\u0631\\u0648\\u062f\"}'),
(70, '404', '{\"x\":404,\"en\":\"This page is not found, please check the right link\",\"ar\":\"\\u0635\\u0641\\u062d\\u0629 \\u063a\\u064a\\u0631 \\u0645\\u0648\\u062c\\u0648\\u062f\\u0629\\u060c \\u062a\\u0623\\u0643\\u062f \\u0645\\u0646 \\u062f\\u062e\\u0648\\u0644\\u0643 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0635\\u0641\\u062d\\u0629 \\u0627\\u0644\\u0635\\u062d\\u064a\\u062d\\u0629\"}'),
(71, 'print.orders', '{\"x\":\"print_orders\",\"en\":\"Print Employee Orders\",\"ar\":\"\\u0637\\u0628\\u0627\\u0639\\u0629 \\u0623\\u0648\\u0627\\u0645\\u0631 \\u0645\\u0648\\u0638\\u0641\"}'),
(72, 'print', '{\"x\":\"print\",\"en\":\"Print\",\"ar\":\"\\u0637\\u0628\\u0627\\u0639\\u0629\"}'),
(73, 'export.excel', '{\"x\":\"export_excel\",\"en\":\"Export Excel\",\"ar\":\"\\u062a\\u062d\\u0645\\u064a\\u0644 Excel\"}'),
(74, 'employee', '{\"x\":\"employee\",\"en\":\"Employee\",\"ar\":\"\\u0627\\u0644\\u0645\\u0648\\u0638\\u0641\"}'),
(75, 'shipments.assigned', '{\"x\":\"shipments_assigned\",\"en\":\"Assigned Shipments\",\"ar\":\"\\u0627\\u0644\\u0634\\u062d\\u0646\\u0627\\u062a \\u0627\\u0644\\u0645\\u064f\\u0639\\u064a\\u0646\\u0629\"}'),
(76, 'manifest.view', '{\"x\":\"manifest_view\",\"en\":\"Manifest View\",\"ar\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u062e\\u0637 \\u0627\\u0644\\u0633\\u064a\\u0631\"}'),
(77, 'manage.departmeents', '{\"x\":\"manage_departmeents\",\"en\":\"Manage Departmeents\",\"ar\":\"\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0623\\u0642\\u0633\\u0627\\u0645\"}'),
(78, 'by', '{\"x\":\"by\",\"en\":\"by\",\"ar\":\"\\u0628\\u0648\\u0627\\u0633\\u0637\\u0629\"}'),
(79, 'shipments.delayed.reports', '{\"x\":\"shipments_delayed_reports\",\"en\":\"Shipments Delayed Reports\",\"ar\":\"\\u062a\\u0642\\u0627\\u0631\\u064a\\u0631 \\u0627\\u0644\\u0634\\u062d\\u0646\\u0627\\u062a \\u0627\\u0644\\u0645\\u062a\\u0623\\u062e\\u0631\\u0629\"}'),
(80, 'shipments.delivered.reports', '{\"x\":\"shipments_delivered_reports\",\"en\":\"Shipments Delivered Reports\",\"ar\":\"\\u062a\\u0642\\u0627\\u0631\\u064a\\u0631 \\u0627\\u0644\\u0634\\u062d\\u0646\\u0627\\u062a \\u0627\\u0644\\u0645\\u064f\\u0633\\u0644\\u0645\\u0629\"}'),
(81, 'transactions.deposited.reports', '{\"x\":\"transactions_deposited_reports\",\"en\":\"Transactions Deposited Reports\",\"ar\":\"\\u062a\\u0642\\u0627\\u0631\\u064a\\u0631 \\u0627\\u0644\\u0625\\u064a\\u062f\\u0627\\u0639\\u0627\\u062a \\u0627\\u0644\\u0645\\u0627\\u0644\\u064a\\u0629\"}'),
(82, 'transactions.withdrwal.reports', '{\"x\":\"transactions_withdrwal_reports\",\"en\":\"Transactions _withdrwal Reports\",\"ar\":\"\\u062a\\u0642\\u0627\\u0631\\u064a\\u0631 \\u0627\\u0644\\u0645\\u0633\\u062d\\u0648\\u0628\\u0627\\u062a \\u0627\\u0644\\u0645\\u0627\\u0644\\u064a\\u0629\"}'),
(83, 'id', '{\"x\":\"id\",\"en\":\"ID\",\"ar\":\"ID\"}'),
(84, 'to', '{\"x\":\"to\",\"en\":\"to\"}'),
(85, 'created.on', '{\"x\":\"created_on\",\"en\":\"Created on\",\"ar\":\"\\u062a\\u0627\\u0631\\u064a\\u062e \\u0627\\u0644\\u0625\\u0636\\u0627\\u0641\\u0629\"}'),
(86, 'payment', '{\"x\":\"payment\",\"en\":\"Payment\",\"ar\":\"\\u0637\\u0631\\u064a\\u0642\\u0629 \\u0627\\u0644\\u062f\\u0641\\u0639\"}'),
(87, 'sender.details', '{\"x\":\"sender_details\",\"en\":\"Sender details\",\"ar\":\"\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0627\\u0644\\u0645\\u064f\\u0631\\u0633\\u0644\"}'),
(88, 'area', '{\"x\":\"area\",\"en\":\"Area\",\"ar\":\"\\u0627\\u0644\\u0645\\u0646\\u0637\\u0642\\u0629\"}'),
(89, 'office', '{\"x\":\"office\",\"en\":\"Office\",\"ar\":\"\\u0627\\u0644\\u0645\\u0643\\u062a\\u0628\"}'),
(90, 'mobile', '{\"x\":\"mobile\",\"en\":\"Mobile\",\"ar\":\"\\u0631\\u0642\\u0645 \\u0627\\u0644\\u0645\\u0648\\u0628\\u0627\\u064a\\u0644\\/\\u0627\\u0644\\u062c\\u0648\\u0627\\u0644\"}'),
(91, 'deduction.from.the.wallet', '{\"x\":\"deduction_from_the_wallet\",\"en\":\"Deduction from the wallet\",\"ar\":\"\\u062e\\u0635\\u0645 \\u0645\\u0646 \\u0627\\u0644\\u0645\\u062d\\u0641\\u0638\\u0629\"}'),
(92, 'add.to.wallet', '{\"x\":\"add_to_wallet\",\"en\":\"Add to wallet\",\"ar\":\"\\u0623\\u0636\\u0627\\u0641\\u0629 \\u0644\\u0644\\u0645\\u062d\\u0641\\u0638\\u0629\"}'),
(93, 'deduction.of.commission.balance', '{\"x\":\"deduction_of_commission_balance\",\"en\":\"deduction of commission balance\",\"ar\":\"\\u062e\\u0635\\u0645 \\u0645\\u0646 \\u0631\\u0635\\u064a\\u062f \\u0627\\u0644\\u0639\\u0645\\u0648\\u0644\\u0629\"}'),
(94, 'add.to.the.commission.balance', '{\"x\":\"add_to_the_commission_balance\",\"en\":\"add to the commission balance\",\"ar\":\"\\u0623\\u0636\\u0627\\u0641\\u0629 \\u0644\\u0631\\u0635\\u064a\\u062f \\u0627\\u0644\\u0639\\u0645\\u0648\\u0644\\u0629\"}'),
(95, 'deduction.from.the.balance.of.packages', '{\"x\":\"deduction_from_the_balance_of_packages\",\"en\":\"deduction from the balance of packages\",\"ar\":\"\\u062e\\u0635\\u0645 \\u0645\\u0646 \\u0631\\u0635\\u064a\\u062f \\u0627\\u0644\\u0634\\u062d\\u0646\\u0627\\u062a\"}'),
(96, 'add.to.the.balance.of.packages', '{\"x\":\"add_to_the_balance_of_packages\",\"en\":\"add to the balance of packages\",\"ar\":\"\\u0623\\u0636\\u0627\\u0641\\u0629 \\u0644\\u0631\\u0635\\u064a\\u062f \\u0627\\u0644\\u0634\\u062d\\u0646\\u0627\\u062a\"}'),
(97, 'pending', '{\"x\":\"pending\",\"en\":\"pending\",\"ar\":\"\\u0645\\u064c\\u0639\\u0644\\u0642\\u0629\"}'),
(98, 'canceled', '{\"x\":\"canceled\",\"en\":\"canceled\",\"ar\":\"\\u0645\\u064f\\u0644\\u063a\\u0627\\u0629\"}'),
(99, 'paid', '{\"x\":\"paid\",\"en\":\"paid\",\"ar\":\"\\u062f\\u064c\\u0641\\u0639\\u062a\"}'),
(100, 'delayed', '{\"x\":\"delayed\",\"en\":\"delayed\",\"ar\":\"\\u0645\\u064f\\u062a\\u0623\\u062e\\u0631\\u0629\"}'),
(101, 'movement', '{\"x\":\"movement\",\"en\":\"Movement\",\"ar\":\"\\u0627\\u0644\\u062d\\u0631\\u0643\\u0629\"}'),
(102, 'type', '{\"x\":\"type\",\"en\":\"Type\",\"ar\":\"\\u0627\\u0644\\u0646\\u0648\\u0639\"}'),
(103, 'client', '{\"x\":\"client\",\"en\":\"Client\",\"ar\":\"\\u0639\\u0645\\u064a\\u0644\"}'),
(104, 'treasury', '{\"x\":\"treasury\",\"en\":\"Treasury\",\"ar\":\"\\u062e\\u0632\\u064a\\u0646\\u0629\"}'),
(105, 'update.shipment', '{\"x\":\"update_shipment\",\"en\":\"Update Shipment\",\"ar\":\"\\u062a\\u0639\\u062f\\u064a\\u0644 \\u0634\\u062d\\u0646\\u0629\"}'),
(106, 'return.discards', '{\"x\":\"return_discards\",\"en\":\"Return Discards\",\"ar\":\"\\u0625\\u0631\\u062c\\u0627\\u0639 \\u0627\\u0644\\u0645\\u0642\\u0627\\u0628\\u0644\"}'),
(107, 'send.all', '{\"x\":\"send_all\",\"en\":\"Send All\",\"ar\":\"\\u0625\\u0631\\u0633\\u0644 \\u0627\\u0644\\u0643\\u0644\"}'),
(108, 'shipments.with.driver', '{\"x\":\"shipments_with_driver\",\"en\":\"Shipments Delivered To Driver\",\"ar\":\"\\u0627\\u0644\\u0634\\u062d\\u0646\\u0627\\u062a \\u0627\\u0644\\u0645\\u064f\\u0633\\u0644\\u0645\\u0629 \\u0644\\u0644\\u0643\\u0627\\u0628\\u062a\\u0646\"}'),
(109, 'postponed.shipments', '{\"x\":\"postponed_shipments\",\"en\":\"Postponed Shipments\",\"ar\":\"\\u0634\\u062d\\u0646\\u0627\\u062a \\u0645\\u0624\\u062c\\u0644\\u0629\"}'),
(110, 'supplied.shipments', '{\"x\":\"supplied_shipments\",\"en\":\"Supplied Shipments\",\"ar\":\"\\u0634\\u062d\\u0646\\u0627\\u062a \\u0645\\u0648\\u0631\\u062f\\u0629\"}'),
(111, 'delivered.shipments', '{\"x\":\"delivered_shipments\",\"en\":\"Delivered Shipments\",\"ar\":\"\\u0634\\u062d\\u0646\\u0627\\u062a \\u0645\\u0633\\u0644\\u0645\\u0629\"}'),
(112, 'new.note', '{\"x\":\"new_note\",\"en\":\"New notes has been added on shipment\",\"ar\":\"\\u0644\\u0642\\u062f \\u062a\\u0645 \\u0623\\u0636\\u0627\\u0641\\u0629 \\u0645\\u0644\\u0627\\u062d\\u0638\\u0627\\u062a \\u062c\\u062f\\u064a\\u062f\\u0629 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0634\\u062d\\u0646\\u0629\"}'),
(113, 'pickup', '{\"x\":\"pickup\",\"en\":\"Pickup\",\"ar\":\"\\u0627\\u0633\\u062a\\u0644\\u0627\\u0645\"}'),
(114, 'saved.successfully', '{\"x\":\"saved_successfully\",\"en\":\"Saved Successfully\",\"ar\":\"\\u062a\\u0645 \\u062d\\u0641\\u0638 \\u0627\\u0644\\u0634\\u062d\\u0646\\u0629 \\u0628\\u062d\\u0633\\u0627\\u0628\\u0643 \\u0628\\u0646\\u062c\\u0627\\u062d\"}'),
(115, 'send', '{\"x\":\"send\",\"en\":\"Send\",\"ar\":\"\\u062a\\u0633\\u0644\\u064a\\u0645\"}'),
(116, 'sign.in', '{\"x\":\"Sign In\"}'),
(117, 'username', '{\"x\":\"Username\"}'),
(118, 'password', '{\"x\":\"Password\"}'),
(119, 'remember.me', '{\"x\":\"Remember me\"}'),
(120, 'forget.password', '{\"x\":\"Forget Password ?\"}'),
(121, 'dont.have.an.account.yet', '{\"x\":\"Don\'t have an account yet ?\"}'),
(122, 'sign.up', '{\"x\":\"Sign Up!\"}'),
(123, 'you.have.tracking.number', '{\"x\":\"You have tracking number ?\"}'),
(124, 'track.shipment', '{\"x\":\"Track shipment\"}'),
(125, 'enter.your.details.to.create.your.account', '{\"x\":\"Enter your details to create your account\"}'),
(126, 'full.name', '{\"x\":\"Full Name\"}'),
(127, 'email', '{\"x\":\"Email\"}'),
(128, 'enter.your.username', '{\"x\":\"Enter your username\"}'),
(129, 'choose.a.password', '{\"x\":\"Choose a Password\"}'),
(130, 'confirm.password', '{\"x\":\"Confirm Password\"}'),
(131, 'i.agree.the', '{\"x\":\"I Agree the\"}'),
(132, 'terms.and.conditions', '{\"x\":\"terms and conditions\"}'),
(133, 'cancel', '{\"x\":\"Cancel\"}'),
(134, 'forgotten.password', '{\"x\":\"Forgotten Password ?\"}'),
(135, 'enter.your.email.to.reset.your.password', '{\"x\":\"Enter your email to reset your password\"}'),
(136, 'request', '{\"x\":\"Request\"}'),
(137, 'or', '{\"x\":\"OR\"}'),
(138, 'admin', '{\"x\":\"Admin\"}'),
(139, 'login.as', '{\"x\":\"Login as\"}'),
(140, 'driver', '{\"x\":\"Driver\"}'),
(141, 'dont.agree', '{\"x\":\"Don\'t Agree\"}'),
(142, 'agree', '{\"x\":\"Agree\"}'),
(143, 'this.field.is.required', '{\"x\":\"This field is required!\"}'),
(144, 'correct.you.are.being.redirect', '{\"x\":\"Correct, you are being redirect\"}'),
(145, 'cool.password.recovery.instruction.has.been.sent.to.your.email', '{\"x\":\"Cool! Password recovery instruction has been sent to your email\"}'),
(146, 'login', '{\"x\":\"Login\"}'),
(147, 'cargo.pro.courier.system', '{\"x\":\"Cargo Pro - Courier System\"}'),
(148, 'easycost.effectivereliabletrackableconvenient', '{\"x\":\"Easy,Cost-effective,Reliable,Trackable,Convenient\"}'),
(149, 'good.service.is.our.goal', '{\"x\":\"Good Service is our goal\"}'),
(150, 'edit', '{\"x\":\"Edit\"}'),
(151, 'approved.list', '{\"x\":\"Approved List\"}'),
(152, 'in.stock.list', '{\"x\":\"In Stock List\"}'),
(153, 'delivered.list', '{\"x\":\"Delivered List\"}'),
(154, 'new.shipment.request', '{\"x\":\"New Shipment Request\"}'),
(155, 'view', '{\"x\":\"View\"}'),
(156, 'summary', '{\"x\":\"Summary\"}'),
(157, 'statistical.summary', '{\"x\":\"Statistical summary\"}'),
(158, 'last.month.summary', '{\"x\":\"Last Month Summary\"}'),
(159, 'consolidated.list', '{\"x\":\"Consolidated List\"}'),
(160, 'all.shipments', '{\"x\":\"All Shipments\"}'),
(161, 'delayed.shipments', '{\"x\":\"Delayed Shipments\"}'),
(162, 'pre.alert.to.approve', '{\"x\":\"Pre Alert to Approve\"}'),
(163, 'pickup.list', '{\"x\":\"Pickup List\"}'),
(164, 'new.customers', '{\"x\":\"New Customers\"}'),
(165, 'pending.payments', '{\"x\":\"Pending Payments\"}'),
(166, 'current.month.sales', '{\"x\":\"Current Month Sales\"}'),
(167, 'delayed.shipping.percentage', '{\"x\":\"Delayed Shipping Percentage\"}'),
(168, 'latest.shipments', '{\"x\":\"Latest shipments\"}'),
(169, 'please.wait', '{\"x\":\"Please wait\"}'),
(170, 'first', '{\"x\":\"First\"}'),
(171, 'previous', '{\"x\":\"Previous\"}'),
(172, 'next', '{\"x\":\"Next\"}'),
(173, 'last', '{\"x\":\"Last\"}'),
(174, 'more.pages', '{\"x\":\"More pages\"}'),
(175, 'page.number', '{\"x\":\"Page number\"}'),
(176, 'select.page.size', '{\"x\":\"Select page size\"}'),
(177, 'displaying', '{\"x\":\"Displaying\"}'),
(178, 'of', '{\"x\":\"of\"}'),
(179, 'records', '{\"x\":\"records\"}'),
(180, 'tracking', '{\"x\":\"Tracking\"}'),
(181, 'shipment.details', '{\"x\":\"Shipment Details\"}'),
(182, 'sender', '{\"x\":\"Sender\"}'),
(183, 'from', '{\"x\":\"From\"}'),
(184, 'receiver', '{\"x\":\"Receiver\"}'),
(185, 'saved', '{\"x\":\"Saved\"}'),
(186, 'returning.discards', '{\"x\":\"Returning Discards\"}'),
(187, 'supplied', '{\"x\":\"Supplied\"}'),
(188, 'actions', '{\"x\":\"Actions\"}'),
(189, 'view.shipment', '{\"x\":\"View Shipment\"}'),
(190, 'edit.shipment', '{\"x\":\"Edit Shipment\"}'),
(191, 'print.shipment', '{\"x\":\"Print Shipment\"}'),
(192, 'print.label', '{\"x\":\"Print Label\"}'),
(193, 'update.status', '{\"x\":\"Update Status\"}'),
(194, 'mark.as.delivered', '{\"x\":\"Mark as delivered\"}'),
(195, 'delete.shipment', '{\"x\":\"Delete Shipment\"}'),
(196, 'are.you.sure.to.delete.this.item', '{\"x\":\"Are you sure to delete this item ?\"}'),
(197, 'yes.delete', '{\"x\":\"Yes, delete!\"}'),
(198, 'no.cancel', '{\"x\":\"No, cancel\"}'),
(199, 'deleted', '{\"x\":\"Deleted!\"}'),
(200, 'your.selected.record.has.been.deleted', '{\"x\":\"Your selected record has been deleted! :(\"}'),
(201, 'ok', '{\"x\":\"OK\"}'),
(202, 'cancelled', '{\"x\":\"Cancelled\"}'),
(203, 'you.selected.record.has.not.been.deleted', '{\"x\":\"You selected record has not been deleted! :)\"}'),
(204, 'view.all.shipments', '{\"x\":\"View All Shipments\"}'),
(205, 'january', '{\"x\":\"January\"}'),
(206, 'february', '{\"x\":\"February\"}'),
(207, 'march', '{\"x\":\"March\"}'),
(208, 'april', '{\"x\":\"April\"}'),
(209, 'may', '{\"x\":\"May\"}'),
(210, 'june', '{\"x\":\"June\"}'),
(211, 'july', '{\"x\":\"July\"}'),
(212, 'august', '{\"x\":\"August\"}'),
(213, 'september', '{\"x\":\"September\"}'),
(214, 'october', '{\"x\":\"October\"}'),
(215, 'november', '{\"x\":\"November\"}'),
(216, 'december', '{\"x\":\"December\"}'),
(217, 'today', '{\"x\":\"Today\"}'),
(218, 'yesterday', '{\"x\":\"Yesterday\"}'),
(219, 'apply', '{\"x\":\"Apply\"}'),
(220, 'custom', '{\"x\":\"Custom\"}'),
(221, 'su', '{\"x\":\"Su\"}'),
(222, 'mo', '{\"x\":\"Mo\"}'),
(223, 'tu', '{\"x\":\"Tu\"}'),
(224, 'we', '{\"x\":\"We\"}'),
(225, 'th', '{\"x\":\"Th\"}'),
(226, 'fr', '{\"x\":\"Fr\"}'),
(227, 'sa', '{\"x\":\"Sa\"}'),
(228, 'last.7.days', '{\"x\":\"Last 7 Days\"}'),
(229, 'last.30.days', '{\"x\":\"Last 30 Days\"}'),
(230, 'this.month', '{\"x\":\"This Month\"}'),
(231, 'last.month', '{\"x\":\"Last Month\"}'),
(232, 'month', '{\"x\":\"Month\"}'),
(233, 'value', '{\"x\":\"Value\"}'),
(234, 'dashboard', '{\"x\":\"Dashboard\",\"ar\":\"\\u0644\\u0648\\u062d\\u0629 \\u0627\\u0644\\u062a\\u062d\\u0643\\u0645\"}'),
(235, 'welcome.back', '{\"x\":\"Welcome back\"}'),
(236, 'add.shipment', '{\"x\":\"Add Shipment\",\"ar\":\"\\u0623\\u0636\\u0641 \\u0634\\u062d\\u0646\\u0629\"}'),
(237, 'shipments.list', '{\"x\":\"Shipments List\"}'),
(238, 'new.requests', '{\"x\":\"New Requests\"}'),
(239, 'approved', '{\"x\":\"Approved\"}'),
(240, 'assigned', '{\"x\":\"Assigned\"}'),
(241, 'delivered.to.driver', '{\"x\":\"Delivered To Driver\"}'),
(242, 'in.stock', '{\"x\":\"In Stock\"}'),
(243, 'postponed', '{\"x\":\"Postponed\"}'),
(244, 'customers.list', '{\"x\":\"Customers List\"}'),
(245, 'employees.list', '{\"x\":\"Employees List\"}'),
(246, 'transactions', '{\"x\":\"Transactions\"}'),
(247, 'reports', '{\"x\":\"Reports\"}'),
(248, 'deposited.transactions', '{\"x\":\"Deposited Transactions\"}'),
(249, 'withdrawn.transactions', '{\"x\":\"Withdrawn Transactions\"}'),
(250, 'settings', '{\"x\":\"Settings\"}'),
(251, 'quick.search', '{\"x\":\"quick search\"}'),
(252, 'notifications', '{\"x\":\"Notifications\"}'),
(253, 'new', '{\"x\":\"new\"}'),
(254, 'تم.تأجيل.الشحنة.يرجى.مراجعته', '{\"x\":\"\\u062a\\u0645 \\u062a\\u0623\\u062c\\u064a\\u0644 \\u0627\\u0644\\u0634\\u062d\\u0646\\u0629\\u060c \\u064a\\u0631\\u062c\\u0649 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647\"}'),
(255, 'لقد.تم.أضافة.ملاحظات.جديدة.على.الشحنة', '{\"x\":\"\\u0644\\u0642\\u062f \\u062a\\u0645 \\u0623\\u0636\\u0627\\u0641\\u0629 \\u0645\\u0644\\u0627\\u062d\\u0638\\u0627\\u062a \\u062c\\u062f\\u064a\\u062f\\u0629 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0634\\u062d\\u0646\\u0629\"}'),
(256, 'the.shipment.has.been.transfered.to.main2', '{\"x\":\"The shipment has been transfered to main2\"}'),
(257, 'new.notes.has.been.added.on.shipment', '{\"x\":\"New notes has been added on shipment\"}'),
(258, 'there.is.an.approved.shipment.please.check.it', '{\"x\":\"There is an Approved shipment, please check it\"}'),
(259, 'the.shipment.has.been.delivered.please.check.it', '{\"x\":\"The shipment has been delivered, please check it\",\"ar\":\"\\u062a\\u0645 \\u062a\\u0633\\u0644\\u064a\\u0645 \\u0627\\u0644\\u0634\\u062d\\u0646\\u0629\"}'),
(260, 'the.shipment.has.been.received.please.check.it', '{\"x\":\"The shipment has been received, please check it\"}'),
(261, 'the.shipment.has.been.assigned.please.check.it', '{\"x\":\"The shipment has been assigned, please check it\"}'),
(262, 'view.all.notifications', '{\"x\":\"View all notifications\"}'),
(263, 'hi', '{\"x\":\"Hi\"}'),
(264, 'messages', '{\"x\":\"messages\"}'),
(265, 'my.profile', '{\"x\":\"My Profile\"}'),
(266, 'account.settings.and.more', '{\"x\":\"Account settings and more\"}'),
(267, 'customers.messages.from.website', '{\"x\":\"Customers messages from website\"}'),
(268, 'my.notifications', '{\"x\":\"My Notifications\"}'),
(269, 'all.pervious.notifications', '{\"x\":\"all pervious notifications\"}'),
(270, 'my.tasks', '{\"x\":\"My Tasks\"}'),
(271, 'latest.tasks.and.requests', '{\"x\":\"latest tasks and requests\"}'),
(272, 'billing', '{\"x\":\"Billing\"}'),
(273, 'billing.statements', '{\"x\":\"billing & statements\"}'),
(274, 'sign.out', '{\"x\":\"Sign Out\"}'),
(275, 'upgrade.plan', '{\"x\":\"Upgrade Plan\"}'),
(276, 'overview.on.your.system', '{\"x\":\"Overview on your system\"}'),
(277, 'select.dashboard.daterange', '{\"x\":\"Select dashboard daterange\"}'),
(278, 'please.be.aware.that.data.will.be.replaced.on.this.demo.every.6.hours.so.that.every.one.can.test.this.demo.as.he.needs.without.corrupting.the.data', '{\"x\":\"Please be aware that data will be replaced on this demo every 6 hours so that every one can test this demo as he needs without corrupting the data.\"}'),
(279, 'powered.by.spotlayer', '{\"x\":\"Powered By Spotlayer\"}'),
(280, 'support', '{\"x\":\"Support\"}'),
(281, 'loading', '{\"x\":\"Loading ...\"}'),
(282, 'please.enter.a.valid.date', '{\"x\":\"Please enter a valid date\"}'),
(283, 'nothing.selected', '{\"x\":\"Nothing selected\"}'),
(284, 'sunday', '{\"x\":\"Sunday\"}'),
(285, 'monday', '{\"x\":\"Monday\"}'),
(286, 'tuesday', '{\"x\":\"Tuesday\"}'),
(287, 'wednesday', '{\"x\":\"Wednesday\"}'),
(288, 'thursday', '{\"x\":\"Thursday\"}'),
(289, 'friday', '{\"x\":\"Friday\"}'),
(290, 'saturday', '{\"x\":\"Saturday\"}'),
(291, 'sun', '{\"x\":\"Sun\"}'),
(292, 'mon', '{\"x\":\"Mon\"}'),
(293, 'tue', '{\"x\":\"Tue\"}'),
(294, 'wed', '{\"x\":\"Wed\"}'),
(295, 'thu', '{\"x\":\"Thu\"}'),
(296, 'fri', '{\"x\":\"Fri\"}'),
(297, 'sat', '{\"x\":\"Sat\"}'),
(298, 'jan', '{\"x\":\"Jan\"}'),
(299, 'feb', '{\"x\":\"Feb\"}'),
(300, 'mar', '{\"x\":\"Mar\"}'),
(301, 'apr', '{\"x\":\"Apr\"}'),
(302, 'jun', '{\"x\":\"Jun\"}'),
(303, 'jul', '{\"x\":\"Jul\"}'),
(304, 'aug', '{\"x\":\"Aug\"}'),
(305, 'sep', '{\"x\":\"Sep\"}'),
(306, 'oct', '{\"x\":\"Oct\"}'),
(307, 'nov', '{\"x\":\"Nov\"}'),
(308, 'dec', '{\"x\":\"Dec\"}'),
(309, 'clear', '{\"x\":\"Clear\"}'),
(310, 'connection.error.pleae.try.again.later', '{\"x\":\"Connection error. Pleae try again later\"}'),
(311, 'shipment.information', '{\"x\":\"Shipment information\"}'),
(312, 'oh.snap.change.a.few.things.up.and.try.submitting.again', '{\"x\":\"Oh snap! Change a few things up and try submitting again\"}'),
(313, 'shipment.type', '{\"x\":\"Shipment Type\"}'),
(314, 'for.door.to.door.delivery', '{\"x\":\"For door to door delivery\"}'),
(315, 'drop.off', '{\"x\":\"Drop off\"}'),
(316, 'for.delivery.package.from.office.directly', '{\"x\":\"For delivery package from office directly\"}'),
(317, 'package.type', '{\"x\":\"Package Type\"}'),
(318, 'shipping.date', '{\"x\":\"Shipping Date\"}'),
(319, 'sender.information', '{\"x\":\"Sender information\"}'),
(320, 'choose.or.add.a.new.client.that.will.send.the.package', '{\"x\":\"Choose or add a new client that will send the package\"}'),
(321, 'sender.address', '{\"x\":\"Sender Address\"}'),
(322, 'client.address', '{\"x\":\"Client Address\"}'),
(323, 'please.select.sender.first', '{\"x\":\"Please select sender first\"}'),
(324, 'add.a.new.client', '{\"x\":\"Add a new client\"}'),
(325, 'client.name', '{\"x\":\"Client Name\"}'),
(326, 'gender', '{\"x\":\"Gender\"}'),
(327, 'male', '{\"x\":\"Male\"}'),
(328, 'female', '{\"x\":\"Female\"}'),
(329, 'address', '{\"x\":\"Address\"}'),
(330, 'country', '{\"x\":\"Country\"}'),
(331, 'postal.code', '{\"x\":\"Postal Code\"}'),
(332, 'state.region', '{\"x\":\"State \\/ Region\"}'),
(333, 'please.select.country.first', '{\"x\":\"Please select country first\"}'),
(334, 'city', '{\"x\":\"City\"}'),
(335, 'please.select.state.first', '{\"x\":\"Please select state first\"}'),
(336, 'county', '{\"x\":\"County\"}'),
(337, 'please.select.city.first', '{\"x\":\"Please select city first\"}'),
(338, 'street.address', '{\"x\":\"Street Address\"}'),
(339, 'google.map', '{\"x\":\"Google Map\"}'),
(340, 'change.the.pin.to.select.the.right.location', '{\"x\":\"Change the pin to select the right location\"}'),
(341, 'connect.client', '{\"x\":\"Connect client\"}'),
(342, 'create.an.account.for.the.client', '{\"x\":\"create an account for the client\"}'),
(343, 'save', '{\"x\":\"Save\"}'),
(344, 'add.a.new.client.address', '{\"x\":\"Add a new client address\"}'),
(345, 'payment.type', '{\"x\":\"Payment Type\"}'),
(346, 'record.receiver.information', '{\"x\":\"Record receiver information ?\"}'),
(347, 'yes', '{\"x\":\"Yes\"}'),
(348, 'no', '{\"x\":\"No\"}'),
(349, 'receiver.information', '{\"x\":\"Receiver information\"}'),
(350, 'choose.or.add.a.new.client.that.will.receive.the.package', '{\"x\":\"Choose or add a new client that will receive the package\"}'),
(351, 'receiver.address', '{\"x\":\"Receiver Address\"}'),
(352, 'please.select.receiver.first', '{\"x\":\"Please select receiver first\"}'),
(353, 'return.package.cost', '{\"x\":\"Return package cost\"}'),
(354, 'package.cost', '{\"x\":\"Package Cost\"}'),
(355, 'return.shipment.cost', '{\"x\":\"Return Shipment Cost\"}'),
(356, 'return.package.fees.responsiable', '{\"x\":\"Return package fees responsiable\"}'),
(357, 'package.content', '{\"x\":\"Package Content\"}'),
(358, 'category', '{\"x\":\"Category\"}'),
(359, 'quantity', '{\"x\":\"Quantity\"}'),
(360, 'weight', '{\"x\":\"Weight\"}'),
(361, 'kg', '{\"x\":\"Kg\"}'),
(362, 'dimensions', '{\"x\":\"Dimensions\"}'),
(363, 'length', '{\"x\":\"Length\"}'),
(364, 'width', '{\"x\":\"Width\"}'),
(365, 'height', '{\"x\":\"Height\"}'),
(366, 'cm', '{\"x\":\"cm\"}'),
(367, 'delete', '{\"x\":\"Delete\"}'),
(368, 'add.item', '{\"x\":\"Add Item\"}'),
(369, 'order.number', '{\"x\":\"Order Number\"}'),
(370, 'tax', '{\"x\":\"Tax\"}'),
(371, 'duty', '{\"x\":\"Duty\"}'),
(372, 'insurance', '{\"x\":\"Insurance\"}'),
(373, 'shipping.mode', '{\"x\":\"Shipping Mode\"}'),
(374, 'customs.value', '{\"x\":\"Customs Value\"}'),
(375, 'courier.company', '{\"x\":\"Courier Company\"}'),
(376, 'shipping.fee', '{\"x\":\"Shipping Fee\"}'),
(377, 'delivery.time', '{\"x\":\"Delivery Time\"}'),
(378, 'delivery.status', '{\"x\":\"Delivery Status\"}'),
(379, 'assign.employee', '{\"x\":\"Assign Employee\",\"ar\":\"\\u062f\\u062d\\u0648\\u0644 \\u0627\\u0644\"}'),
(380, 'this.mean.that.your.shipment.request.will.not.be.sent.to.the.company.it.will.be.just.saved.in.your.account.as.a.draft.so.you.can.edit.it.or.give.you.the.ability.to.add.all.your.shipments.and.then.send.them.all.to.the.company.at.once', '{\"x\":\"This mean that your shipment request will not be sent to the company, it will be just saved in your account as a draft so you can edit it or give you the ability to add all your shipments and then send them all to the company at once\"}'),
(381, 'yes.just.save.it.as.a.draft', '{\"x\":\"Yes, Just save it as a draft\"}'),
(382, 'processing.please.wait', '{\"x\":\"Processing, please wait\"}'),
(383, 'error', '{\"x\":\"Error!\"}'),
(384, 'select', '{\"x\":\"Select\"}'),
(385, 'there.is.an.error.while.searching', '{\"x\":\"There is an error while searching\"}'),
(386, 'you.must.enter.less.characters', '{\"x\":\"You must enter less characters\"}'),
(387, 'you.must.enter.more.characters', '{\"x\":\"You must enter more characters\"}'),
(388, 'loading.more', '{\"x\":\"Loading More\"}'),
(389, 'maximum.element.has.been.selected', '{\"x\":\"Maximum element has been selected\"}'),
(390, 'no.result.found', '{\"x\":\"No result found\"}'),
(391, 'searching', '{\"x\":\"Searching\"}'),
(392, 'search.for.client', '{\"x\":\"Search for client\"}'),
(393, 'create.new.shipment', '{\"x\":\"Create New Shipment\"}'),
(394, 'shipments', '{\"x\":\"Shipments\"}'),
(395, 'close', '{\"x\":\"Close\"}'),
(396, 'progress', '{\"x\":\"Progress\"}'),
(397, 'saved.shipments', '{\"x\":\"Saved Shipments\"}'),
(398, 'تم.تعيين.موظف.للشحنة.يرجى.مراجعته', '{\"x\":\"\\u062a\\u0645 \\u062a\\u0639\\u064a\\u064a\\u0646 \\u0645\\u0648\\u0638\\u0641 \\u0644\\u0644\\u0634\\u062d\\u0646\\u0629\\u060c \\u064a\\u0631\\u062c\\u0649 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647\"}'),
(399, 'تم.نقل.الشحنة.لفرع.الفرع.الرئيسي', '{\"x\":\"\\u062a\\u0645 \\u0646\\u0642\\u0644 \\u0627\\u0644\\u0634\\u062d\\u0646\\u0629 \\u0644\\u0641\\u0631\\u0639    \\u0627\\u0644\\u0641\\u0631\\u0639 \\u0627\\u0644\\u0631\\u0626\\u064a\\u0633\\u064a\"}'),
(400, 'يوجد.شحنة.تم.الموافقة.عليه.من.فضلك.قم.بمراجعته', '{\"x\":\"\\u064a\\u0648\\u062c\\u062f \\u0634\\u062d\\u0646\\u0629 \\u062a\\u0645 \\u0627\\u0644\\u0645\\u0648\\u0627\\u0641\\u0642\\u0629 \\u0639\\u0644\\u064a\\u0647\\u060c \\u0645\\u0646 \\u0641\\u0636\\u0644\\u0643 \\u0642\\u0645 \\u0628\\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647\"}'),
(401, 'تم.تسليم.الشحنة', '{\"x\":\"\\u062a\\u0645 \\u062a\\u0633\\u0644\\u064a\\u0645 \\u0627\\u0644\\u0634\\u062d\\u0646\\u0629\"}'),
(402, 'تم.استلام.الشحنة.يرجى.مراجعته', '{\"x\":\"\\u062a\\u0645 \\u0627\\u0633\\u062a\\u0644\\u0627\\u0645 \\u0627\\u0644\\u0634\\u062d\\u0646\\u0629\\u060c \\u064a\\u0631\\u062c\\u0649 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647\"}'),
(403, 'the.shipment.has.been.postponed.please.check.it', '{\"x\":\"The shipment has been postponed, please check it\"}'),
(404, 'the.shipment.has.been.received.by.the.driver.please.check.it', '{\"x\":\"The shipment has been received by the driver, please check it\"}'),
(405, 'order.actions', '{\"x\":\"Order Actions\"}'),
(406, 'notes', '{\"x\":\"Notes\"}'),
(407, 'package.receive.date', '{\"x\":\"Package Receive Date\"}'),
(408, 'package.expected.delievery.date', '{\"x\":\"Package Expected Delievery Date\"}'),
(409, 'order.details', '{\"x\":\"Order Details\"}'),
(410, 'receive', '{\"x\":\"Receive\"}'),
(411, 'channel', '{\"x\":\"Channel\"}'),
(412, 'backend', '{\"x\":\"backend\"}'),
(413, 'currency', '{\"x\":\"Currency\"}'),
(414, 'paymentitems.details', '{\"x\":\"Payment&Items Details\"}'),
(415, 'total.requested.from.the.receiver', '{\"x\":\"Total Requested From The Receiver\"}'),
(416, 'the.actual.cost.will.be.calculated.when.we.receive.the.package', '{\"x\":\"The actual cost will be calculated when we receive the package\"}'),
(417, 'not.confirmed.yet', '{\"x\":\"Not confirmed yet\"}'),
(418, 'the.correct.fees.will.be.applied.after.selecting.the.receiver.address', '{\"x\":\"The correct fees will be applied after selecting the receiver address\"}'),
(419, 'total.requested.from.you', '{\"x\":\"Total Requested From You\"}'),
(420, 'total.received', '{\"x\":\"Total received\"}'),
(421, 'total.remaining', '{\"x\":\"Total remaining\"}'),
(422, 'name', '{\"x\":\"Name\"}'),
(423, 'street', '{\"x\":\"Street\"}'),
(424, 'state', '{\"x\":\"State\"}'),
(425, 'latest.updates', '{\"x\":\"Latest Updates\"}'),
(426, 'no.activities.found', '{\"x\":\"No activities found\"}'),
(427, 'write.your.notes', '{\"x\":\"Write your notes\"}'),
(428, 'add.note', '{\"x\":\"Add note\"}'),
(429, 'theres.no.notes.yet', '{\"x\":\"There\'s no notes yet\"}'),
(430, 'order.tasks', '{\"x\":\"Order Tasks\"}'),
(431, 'new.task', '{\"x\":\"New Task\"}'),
(432, 'no.tasks.found', '{\"x\":\"No tasks found\"}'),
(433, 'no.employees.cover.that.shipment.area.so.here.are.all.the.employees.to.choose.from', '{\"x\":\"No employees cover that shipment area, so here are all the employees to choose from\"}'),
(434, 'to.who', '{\"x\":\"To who?\"}'),
(435, 'assign', '{\"x\":\"Assign\"}'),
(436, 'assign.manifest', '{\"x\":\"Assign Manifest\"}'),
(437, 'to.which.manifest', '{\"x\":\"To which manifest?\"}'),
(438, 'transfer.to.office', '{\"x\":\"Transfer to office\"}'),
(439, 'to.which.office', '{\"x\":\"To which office?\"}'),
(440, 'transfer', '{\"x\":\"Transfer\"}'),
(441, 'postpone', '{\"x\":\"Postpone\"}'),
(442, 'to.date', '{\"x\":\"To Date\"}'),
(443, 'reason', '{\"x\":\"Reason\"}'),
(444, 'refuse', '{\"x\":\"Refuse\"}'),
(445, 'transfer.as.discards', '{\"x\":\"Transfer as discards\"}'),
(446, 'discard', '{\"x\":\"Discard\"}'),
(447, 'courier.cost', '{\"x\":\"Courier Cost\"}'),
(448, 'confirm', '{\"x\":\"Confirm\"}'),
(449, 'deliver', '{\"x\":\"Deliver\"}'),
(450, 'go.to', '{\"x\":\"Go to\"}'),
(451, 'the.total.cost.of.courier.fees.is', '{\"x\":\"The total cost of courier fees is\"}'),
(452, 'the.total.requested.from.sender.is', '{\"x\":\"The total requested from sender is\"}'),
(453, 'the.total.requested.from.receiver.is', '{\"x\":\"The total requested from receiver is\"}'),
(454, 'yes.confirm', '{\"x\":\"Yes, confirm!\"}'),
(455, 'no.change.something', '{\"x\":\"No, change something\"}'),
(456, 'are.you.sure.to.delete', '{\"x\":\"Are you sure to delete\"}'),
(457, 'your.selected.records.have.been.deleted', '{\"x\":\"Your selected records have been deleted! :(\"}'),
(458, 'you.selected.records.have.not.been.deleted', '{\"x\":\"You selected records have not been deleted! :)\"}'),
(459, 'view.shipment.61', '{\"x\":\"View Shipment #61\"}'),
(460, 'save.as.draft', '{\"x\":\"Save as draft\"}'),
(461, 'track.your.shipment', '{\"x\":\"Track your shipment\"}'),
(462, 'type.your.full.tracking.number.here', '{\"x\":\"Type your full tracking number here\"}'),
(463, 'type.your.full.tracking.number.to.get.the.tracking.data', '{\"x\":\"Type your full tracking number to get the tracking data\"}'),
(464, 'shipment.tracking', '{\"x\":\"Shipment Tracking\"}'),
(465, 'assigned.shipments', '{\"x\":\"Assigned Shipments\"}'),
(466, 'manifest.information', '{\"x\":\"Manifest information\"}'),
(467, 'assign.to.specifc.car', '{\"x\":\"Assign to specifc car?\"}'),
(468, 'car', '{\"x\":\"Car\"}'),
(469, 'print.employee.orders', '{\"x\":\"Print Employee Orders\"}'),
(470, 'edit.shipments.statuses', '{\"x\":\"Edit Shipments Statuses\"}'),
(471, 'update', '{\"x\":\"Update\"}'),
(472, 'assign.shipments.to', '{\"x\":\"Assign Shipments to \"}'),
(473, 'print.shipments.label', '{\"x\":\"Print Shipments Label \"}'),
(474, 'responsiable', '{\"x\":\"Responsiable\"}'),
(475, 'no.of.orders', '{\"x\":\"No. Of Orders\"}'),
(476, 'are.you.sure.to.update', '{\"x\":\"Are you sure to update\"}'),
(477, 'selected.records.status.to', '{\"x\":\"selected records status to\"}'),
(478, 'yes.update', '{\"x\":\"Yes, update\"}'),
(479, 'your.selected.records.statuses.have.been.updated', '{\"x\":\"Your selected records statuses have been updated\"}'),
(480, 'you.selected.records.statuses.have.not.been.updated', '{\"x\":\"You selected records statuses have not been updated\"}'),
(481, 'selected.records', '{\"x\":\"selected records ?\"}'),
(482, 'are.you.sure.you.want.to.send.all', '{\"x\":\"Are you sure you want to send all\"}'),
(483, 'selected.records.to.the.company', '{\"x\":\"selected records to the company?\"}'),
(484, 'sent.successfully', '{\"x\":\"Sent Successfully!\"}'),
(485, 'your.selected.records.have.been.sent.to.the.company', '{\"x\":\"Your selected records have been sent to the company!\"}'),
(486, 'your.shipments.not.sent.and.they.still.just.on.your.account', '{\"x\":\"Your shipments not sent, and they still just on your account! :)\"}'),
(487, 'are.you.sure.you.want.to.create.new.manifest.with', '{\"x\":\"Are you sure you want to create new manifest with\"}'),
(488, 'your.manifest.not.created', '{\"x\":\"Your manifest not created! :)\"}'),
(489, 'selected.records.status', '{\"x\":\"selected records status \"}'),
(490, 'are.you.sure.to.assign', '{\"x\":\"Are you sure to assign\"}'),
(491, 'selected.records.to.employee', '{\"x\":\"selected records to employee \"}'),
(492, 'yes.assign', '{\"x\":\"Yes, assign\"}'),
(493, 'total', '{\"x\":\"Total\"}'),
(494, 'shipments.requests', '{\"x\":\"Shipments Requests\"}'),
(495, 'approved.shipments', '{\"x\":\"Approved Shipments\"}'),
(496, 'shipments.delivered.to.driver', '{\"x\":\"Shipments Delivered To Driver\"}'),
(497, 'manifest', '{\"x\":\"Manifest\"}'),
(498, 'filter.by', '{\"x\":\"Filter By\"}'),
(499, 'only.show', '{\"x\":\"Only show\"}'),
(500, 'selected', '{\"x\":\"Selected\"}'),
(501, 'selected.actions', '{\"x\":\"Selected Actions\"}'),
(502, 'delete.all', '{\"x\":\"Delete All\"}'),
(503, 'delivered.responsiabality', '{\"x\":\"Delivered Responsiabality\"}'),
(504, 'delivered.by', '{\"x\":\"Delivered By\"}'),
(505, 'received.by', '{\"x\":\"Received By\"}'),
(506, 'receiver.id.copy', '{\"x\":\"Receiver ID Copy\"}'),
(507, 'receiver.signature', '{\"x\":\"Receiver Signature\"}'),
(508, 'activity.delivered', '{\"x\":\"activity_delivered\"}'),
(509, 'pm', '{\"x\":\"pm\"}'),
(510, 'activity.transfered', '{\"x\":\"activity_transfered\"}'),
(511, 'am', '{\"x\":\"am\"}'),
(512, 'activity.accepted', '{\"x\":\"activity_accepted\"}'),
(513, 'activity.created', '{\"x\":\"activity_created\"}'),
(514, 'view.shipment.57', '{\"x\":\"View Shipment #57\"}'),
(515, 'system.configuration', '{\"x\":\"System Configuration\"}'),
(516, 'setup.company', '{\"x\":\"Setup Company\"}'),
(517, 'taxes.and.fees', '{\"x\":\"Taxes and fees\"}'),
(518, 'tracking.and.invoice', '{\"x\":\"Tracking and Invoice\"}'),
(519, 'definitions', '{\"x\":\"Definitions\"}'),
(520, 'branches', '{\"x\":\"Branches\"}'),
(521, 'delivery.times', '{\"x\":\"Delivery Times\"}'),
(522, 'payment.methods', '{\"x\":\"Payment Methods\"}'),
(523, 'packaging.type', '{\"x\":\"Packaging Type\"}'),
(524, 'statuses', '{\"x\":\"Statuses\"}'),
(525, 'item.categories', '{\"x\":\"Item Categories\"}'),
(526, 'cars', '{\"x\":\"Cars\"}'),
(527, 'container', '{\"x\":\"Container\"}'),
(528, 'lines', '{\"x\":\"Lines\"}'),
(529, 'incoterms', '{\"x\":\"Incoterms\"}'),
(530, 'places', '{\"x\":\"Places\"}'),
(531, 'countries', '{\"x\":\"Countries\"}'),
(532, 'states', '{\"x\":\"States\"}'),
(533, 'cities', '{\"x\":\"Cities\"}'),
(534, 'areas', '{\"x\":\"Areas\"}'),
(535, 'components', '{\"x\":\"Components\"}'),
(536, 'sms.setup', '{\"x\":\"SMS Setup\"}'),
(537, 'call.verify', '{\"x\":\"Call Verify\"}'),
(538, 'live.chat', '{\"x\":\"Live Chat\"}'),
(539, 'google.apis', '{\"x\":\"Google APIs\"}'),
(540, 'payment.gateways', '{\"x\":\"Payment Gateways\"}'),
(541, 'templates', '{\"x\":\"Templates\"}'),
(542, 'email.templates', '{\"x\":\"Email Templates\"}'),
(543, 'sms.templates', '{\"x\":\"SMS Templates\"}'),
(544, 'website.management', '{\"x\":\"Website Management\"}'),
(545, 'website.plugins', '{\"x\":\"Website Plugins\"}'),
(546, 'website.builder', '{\"x\":\"Website Builder\"}'),
(547, 'employees', '{\"x\":\"Employees\"}'),
(548, 'departments', '{\"x\":\"Departments\"}'),
(549, 'localizations', '{\"x\":\"Localizations\"}'),
(550, 'languages', '{\"x\":\"Languages\"}'),
(551, 'translate', '{\"x\":\"Translate\"}'),
(552, 'currencies', '{\"x\":\"Currencies\"}'),
(553, 'data.backup', '{\"x\":\"Data Backup\"}'),
(554, 'general', '{\"x\":\"General\"}');
INSERT INTO `rainlab_translate_messages` (`id`, `code`, `message_data`) VALUES
(555, 'default.language', '{\"x\":\"Default Language\"}'),
(556, 'timezone', '{\"x\":\"TimeZone\"}'),
(557, 'eniwetok.kwajalein', '{\"x\":\"Eniwetok, Kwajalein\"}'),
(558, 'midway.island.samoa', '{\"x\":\"Midway Island, Samoa\"}'),
(559, 'hawaii', '{\"x\":\"Hawaii\"}'),
(560, 'taiohae', '{\"x\":\"Taiohae\"}'),
(561, 'alaska', '{\"x\":\"Alaska\"}'),
(562, 'pacific.time.us.amp.canada', '{\"x\":\"Pacific Time (US &amp; Canada)\"}'),
(563, 'mountain.time.us.amp.canada', '{\"x\":\"Mountain Time (US &amp; Canada)\"}'),
(564, 'central.time.us.amp.canada.mexico.city', '{\"x\":\"Central Time (US &amp; Canada), Mexico City\"}'),
(565, 'eastern.time.us.amp.canada.bogota.lima', '{\"x\":\"Eastern Time (US &amp; Canada), Bogota, Lima\"}'),
(566, 'caracas', '{\"x\":\"Caracas\"}'),
(567, 'atlantic.time.canada.caracas.la.paz', '{\"x\":\"Atlantic Time (Canada), Caracas, La Paz\"}'),
(568, 'newfoundland', '{\"x\":\"Newfoundland\"}'),
(569, 'brazil.buenos.aires.georgetown', '{\"x\":\"Brazil, Buenos Aires, Georgetown\"}'),
(570, 'mid.atlantic', '{\"x\":\"Mid-Atlantic\"}'),
(571, 'azores.cape.verde.islands', '{\"x\":\"Azores, Cape Verde Islands\"}'),
(572, 'brussels.copenhagen.madrid.paris', '{\"x\":\"Brussels, Copenhagen, Madrid, Paris\"}'),
(573, 'cairo.kaliningrad.south.africa', '{\"x\":\"Cairo, Kaliningrad, South Africa\"}'),
(574, 'baghdad.riyadh.moscow.st.petersburg', '{\"x\":\"Baghdad, Riyadh, Moscow, St. Petersburg\"}'),
(575, 'tehran', '{\"x\":\"Tehran\"}'),
(576, 'abu.dhabi.muscat.baku.tbilisi', '{\"x\":\"Abu Dhabi, Muscat, Baku, Tbilisi\"}'),
(577, 'kabul', '{\"x\":\"Kabul\"}'),
(578, 'ekaterinburg.islamabad.karachi.tashkent', '{\"x\":\"Ekaterinburg, Islamabad, Karachi, Tashkent\"}'),
(579, 'bombay.calcutta.madras.new.delhi', '{\"x\":\"Bombay, Calcutta, Madras, New Delhi\"}'),
(580, 'kathmandu.pokhara', '{\"x\":\"Kathmandu, Pokhara\"}'),
(581, 'almaty.dhaka.colombo', '{\"x\":\"Almaty, Dhaka, Colombo\"}'),
(582, 'yangon.mandalay', '{\"x\":\"Yangon, Mandalay\"}'),
(583, 'bangkok.hanoi.jakarta', '{\"x\":\"Bangkok, Hanoi, Jakarta\"}'),
(584, 'beijing.perth.singapore.hong.kong', '{\"x\":\"Beijing, Perth, Singapore, Hong Kong\"}'),
(585, 'eucla', '{\"x\":\"Eucla\"}'),
(586, 'tokyo.seoul.osaka.sapporo.yakutsk', '{\"x\":\"Tokyo, Seoul, Osaka, Sapporo, Yakutsk\"}'),
(587, 'adelaide.darwin', '{\"x\":\"Adelaide, Darwin\"}'),
(588, 'eastern.australia.guam.vladivostok', '{\"x\":\"Eastern Australia, Guam, Vladivostok\"}'),
(589, 'lord.howe.island', '{\"x\":\"Lord Howe Island\"}'),
(590, 'magadan.solomon.islands.new.caledonia', '{\"x\":\"Magadan, Solomon Islands, New Caledonia\"}'),
(591, 'norfolk.island', '{\"x\":\"Norfolk Island\"}'),
(592, 'auckland.wellington.fiji.kamchatka', '{\"x\":\"Auckland, Wellington, Fiji, Kamchatka\"}'),
(593, 'chatham.islands', '{\"x\":\"Chatham Islands\"}'),
(594, 'apia.nukualofa', '{\"x\":\"Apia, Nukualofa\"}'),
(595, 'line.islands.tokelau', '{\"x\":\"Line Islands, Tokelau\"}'),
(596, 'date.format', '{\"x\":\"Date Format\"}'),
(597, 'place.symbol.before.number', '{\"x\":\"Place symbol before number\"}'),
(598, 'place.symbol.with.space', '{\"x\":\"Place symbol with space\"}'),
(599, 'decimal.point', '{\"x\":\"Decimal Point\"}'),
(600, 'character.to.use.as.decimal.point', '{\"x\":\"Character to use as decimal point\"}'),
(601, 'thousand.separator', '{\"x\":\"Thousand Separator\"}'),
(602, 'character.to.separate.thousands', '{\"x\":\"Character to separate thousands\"}'),
(603, 'number.of.fraction.digits', '{\"x\":\"Number of fraction digits\"}'),
(604, 'create.customer.with.every.new.shipment', '{\"x\":\"Create Customer With Every New Shipment\"}'),
(605, 'add.shipment.form', '{\"x\":\"Add Shipment Form\"}'),
(606, 'simple', '{\"x\":\"Simple\"}'),
(607, 'advance', '{\"x\":\"Advance\"}'),
(608, 'update.shipment.form', '{\"x\":\"Update Shipment Form\"}'),
(609, 'label.print.template', '{\"x\":\"Label Print Template\"}'),
(610, 'google.settings', '{\"x\":\"Google - Settings\"}'),
(611, 'google.maps', '{\"x\":\"Google Maps\"}'),
(612, 'key', '{\"x\":\"Key\"}'),
(613, 'not.allowed.to.change.it.in.demo', '{\"x\":\"Not allowed to change it in demo.\"}'),
(614, 'recaptcha', '{\"x\":\"Recaptcha\"}'),
(615, 'states.settings', '{\"x\":\"States - Settings\"}'),
(616, 'place', '{\"x\":\"Place\"}'),
(617, 'invoice.settings', '{\"x\":\"Invoice - Settings\"}'),
(618, 'shipment.prefix', '{\"x\":\"Shipment Prefix\"}'),
(619, 'shipment.number.of.digits.in.the.tracking', '{\"x\":\"Shipment Number of digits in the tracking\"}'),
(620, 'example', '{\"x\":\"EXAMPLE\"}'),
(621, 'container.prefix', '{\"x\":\"Container Prefix\"}'),
(622, 'container.number.of.digits.in.the.tracking', '{\"x\":\"Container Number of digits in the tracking\"}'),
(623, 'default.delivery.time', '{\"x\":\"Default Delivery Time\"}'),
(624, 'default.status.time', '{\"x\":\"Default Status Time\"}'),
(625, 'default.tracking.id', '{\"x\":\"Default Tracking ID\"}'),
(626, 'the.id.that.will.be.shown.on.your.print.label.so.you.can.detect.by.the.id.from.and.where.this.shipment.will.go.through', '{\"x\":\"The id that will be shown on your print label so you can detect by the id from and where this shipment will go through\"}'),
(627, 'invoice', '{\"x\":\"Invoice\"}'),
(628, 'default.invoice.terms', '{\"x\":\"Default Invoice Terms\"}'),
(629, 'invoice.company.signing', '{\"x\":\"Invoice Company Signing\"}'),
(630, 'invoice.customer.signing', '{\"x\":\"Invoice Customer Signing\"}'),
(631, 'general.settings', '{\"x\":\"General - Settings\"}'),
(632, 'payment.settings', '{\"x\":\"Payment - Settings\"}'),
(633, 'online.payment', '{\"x\":\"Online Payment\"}'),
(634, 'enable.online.payment', '{\"x\":\"Enable online payment\"}'),
(635, 'payment.gateway', '{\"x\":\"Payment Gateway\"}'),
(636, 'paystack', '{\"x\":\"Paystack\"}'),
(637, 'paystack.public.key', '{\"x\":\"Paystack public key\"}'),
(638, 'paystack.secret.key', '{\"x\":\"Paystack secret key\"}'),
(639, 'company.settings', '{\"x\":\"Company - Settings\"}'),
(640, 'website.name', '{\"x\":\"Website Name\"}'),
(641, 'website.charset', '{\"x\":\"Website charset\"}'),
(642, 'website.description', '{\"x\":\"Website Description\"}'),
(643, 'website.keywords', '{\"x\":\"Website Keywords\"}'),
(644, 'seprate.with.comma', '{\"x\":\"Seprate with comma\"}'),
(645, 'primary.email', '{\"x\":\"Primary Email\"}'),
(646, 'this.is.the.main.email.notices.will.be.sent.to.it.is.also.used.as.the.from.email.when.emailing.other.automatic.emails', '{\"x\":\"This is the main email notices will be sent to. It is also used as the from email when emailing other automatic emails\"}'),
(647, 'tax.identification.number', '{\"x\":\"Tax Identification Number\"}'),
(648, 'company.phone', '{\"x\":\"Company Phone\"}'),
(649, 'phone', '{\"x\":\"Phone\"}'),
(650, 'company.phone.2', '{\"x\":\"Company Phone 2\"}'),
(651, 'company.phone.3', '{\"x\":\"Company Phone 3\"}'),
(652, 'facebook', '{\"x\":\"Facebook\"}'),
(653, 'twitter', '{\"x\":\"Twitter\"}'),
(654, 'instagram', '{\"x\":\"Instagram\"}'),
(655, 'company.official.address', '{\"x\":\"Company Official Address\"}'),
(656, 'eight.county', '{\"x\":\"Eight County\"}'),
(657, 'naser.city', '{\"x\":\"Naser City\"}'),
(658, 'cairo', '{\"x\":\"Cairo\"}'),
(659, '796001', '{\"x\":\"796001\"}'),
(660, 'egypt', '{\"x\":\"Egypt\"}'),
(661, 'company.logo', '{\"x\":\"Company Logo\"}'),
(662, 'perfered.size', '{\"x\":\"Perfered Size\"}'),
(663, 'mobile.logo', '{\"x\":\"Mobile Logo\"}'),
(664, 'max.height', '{\"x\":\"Max Height\"}'),
(665, 'company.favicon', '{\"x\":\"Company Favicon\"}'),
(666, 'size', '{\"x\":\"Size\"}'),
(667, 'info', '{\"x\":\"Info\"}'),
(668, 'receiver.details', '{\"x\":\"Receiver Details\"}'),
(669, 'view.shipment.63', '{\"x\":\"View Shipment #63\"}'),
(670, 'edit.status', '{\"x\":\"Edit Status\"}'),
(671, 'print.shipments', '{\"x\":\"Print Shipments\"}'),
(672, 'add.new.manifest', '{\"x\":\"Add New Manifest\"}'),
(673, 'add.multiples', '{\"x\":\"Add Multiples\"}'),
(674, 'accept', '{\"x\":\"Accept\"}'),
(675, 'shipping.cost', '{\"x\":\"Shipping Cost\"}'),
(676, 'total.requested.from.the.sender', '{\"x\":\"Total Requested From The Sender\"}'),
(677, 'transfer.to.branch', '{\"x\":\"Transfer To Branch\"}'),
(678, 'save.in.stock', '{\"x\":\"Save in stock\"}'),
(679, 'product.name', '{\"x\":\"Product Name\"}'),
(680, 'wallet', '{\"x\":\"Wallet\"}'),
(681, 'clients', '{\"x\":\"Clients\"}'),
(682, 'zip', '{\"x\":\"ZIP\"}'),
(683, 'shipment.print', '{\"x\":\"Shipment Print\"}'),
(684, 'all.caught.up', '{\"x\":\"All caught up!\"}'),
(685, 'no.new.notifications', '{\"x\":\"No new notifications.\"}'),
(686, 'change.assigned.employee', '{\"x\":\"Change Assigned Employee\"}'),
(687, 'delieveried', '{\"x\":\"Delieveried\"}'),
(688, 'assigned.to', '{\"x\":\"Assigned To\"}'),
(689, 'activity.postponed.shipment', '{\"x\":\"activity_postponed_shipment\"}'),
(690, 'activity.new.note', '{\"x\":\"activity_new_note\"}'),
(691, 'activity.updated', '{\"x\":\"activity_updated\"}'),
(692, 'you', '{\"x\":\"You\"}'),
(693, 'view.shipment.24', '{\"x\":\"View Shipment #24\"}'),
(694, 'complete.the.form.to.update.this.shipment', '{\"x\":\"Complete the form to update this shipment!\"}'),
(695, 'sender.location', '{\"x\":\"Sender Location\"}'),
(696, 'correct.sender.location.in.google.map.for.easy.access.next.time', '{\"x\":\"Correct sender location in google map for easy access next time\"}'),
(697, 'are.you.sure', '{\"x\":\"Are you sure?\"}'),
(698, 'this.action.cannot.be.undo.and.will.be.recorded.by.your.username.and.time.for.administration.review', '{\"x\":\"This action cannot be undo, and will be recorded by your username and time for administration review\"}'),
(699, 'nothing.updated', '{\"x\":\"Nothing updated! :)\"}'),
(700, 'view.shipment.58', '{\"x\":\"View Shipment #58\"}'),
(701, 'profile.overview', '{\"x\":\"Profile Overview\"}'),
(702, 'personal.information', '{\"x\":\"Personal Information\"}'),
(703, 'change.password', '{\"x\":\"Change Password\"}'),
(704, 'there.is.a.new.shipment.please.check.it', '{\"x\":\"There is a new shipment, please check it\"}'),
(705, 'view.shipment.62', '{\"x\":\"View Shipment #62\"}'),
(706, 'view.shipment.64', '{\"x\":\"View Shipment #64\"}'),
(707, 'receiver.location', '{\"x\":\"Receiver Location\"}'),
(708, 'correct.receiver.location.in.google.map.for.easy.access.next.time', '{\"x\":\"Correct receiver location in google map for easy access next time\"}'),
(709, 'activity.driver.received', '{\"x\":\"activity_driver_received\"}'),
(710, 'bill.to', '{\"x\":\"Bill to\"}'),
(711, 'invoice.no', '{\"x\":\"Invoice No\"}'),
(712, 'sub.total', '{\"x\":\"Sub Total\"}'),
(713, 'grand.total', '{\"x\":\"Grand total\"}'),
(714, 'terms', '{\"x\":\"TERMS\"}'),
(715, 'company', '{\"x\":\"Company\"}'),
(716, 'customer', '{\"x\":\"Customer\"}'),
(717, 'printed.by', '{\"x\":\"Printed By\"}'),
(718, 'shipments.print', '{\"x\":\"Shipments Print\"}'),
(719, 'created.date', '{\"x\":\"Created Date\"}'),
(720, 'last.updated.date', '{\"x\":\"Last Updated Date\"}'),
(721, 'shipping.details', '{\"x\":\"Shipping Details\"}'),
(722, 'manifest.view.1', '{\"x\":\"Manifest View #1\"}'),
(723, 'edit.client', '{\"x\":\"Edit Client\"}'),
(724, 'addresses', '{\"x\":\"Addresses\"}'),
(725, 'map', '{\"x\":\"Map\"}'),
(726, 'client.view', '{\"x\":\"Client View\"}'),
(727, 'view.shipment.51', '{\"x\":\"View Shipment #51\"}'),
(728, 'شحنات.جديدة', '{\"x\":\"\\u0634\\u062d\\u0646\\u0627\\u062a \\u062c\\u062f\\u064a\\u062f\\u0629\"}'),
(729, 'إرسل.الكل', '{\"x\":\"\\u0625\\u0631\\u0633\\u0644 \\u0627\\u0644\\u0643\\u0644\"}'),
(730, 'أضف.جديد', '{\"x\":\"\\u0623\\u0636\\u0641 \\u062c\\u062f\\u064a\\u062f\"}'),
(731, 'activity.received', '{\"x\":\"activity_received\"}'),
(732, 'activity.assigned', '{\"x\":\"activity_assigned\"}'),
(733, 'view.shipment.28', '{\"x\":\"View Shipment #28\"}'),
(734, 'view.shipment.66', '{\"x\":\"View Shipment #66\"}'),
(735, 'view.shipment.42', '{\"x\":\"View Shipment #42\"}'),
(736, 'please.check.the.tracking.number.again.and.type.the.full.number.with.its.prefix.correctly.and.try.again', '{\"x\":\"Please check the tracking number again and type the full number with its prefix correctly and try again\"}'),
(737, 'date.range', '{\"x\":\"Date range\"}'),
(738, 'select.date.range', '{\"x\":\"Select date range\"}'),
(739, 'reset', '{\"x\":\"Reset\"}'),
(740, 'pickup.cost', '{\"x\":\"Pickup Cost\"}'),
(741, 'areas.settings', '{\"x\":\"Areas - Settings\"}'),
(742, 'statuses.settings', '{\"x\":\"Statuses - Settings\"}'),
(743, 'deliver.shipment', '{\"x\":\"Deliver Shipment\"}'),
(744, 'complete.the.form.to.confirm.the.delivery.of.this.shipment', '{\"x\":\"Complete the form to confirm the delivery of this shipment!\"}'),
(745, 'person.who.receives', '{\"x\":\"Person who receives\"}'),
(746, 'upload.or.capture.the.front.of.the.receiver.id.copy.for.confirmation', '{\"x\":\"Upload or capture the front of the Receiver ID copy for confirmation\"}'),
(747, 'draw.receiver.signature', '{\"x\":\"Draw receiver signature\"}'),
(748, 'undo', '{\"x\":\"Undo\"}'),
(749, 'you.can.use.your.mouse.to.draw.it.or.if.you.using.your.mobile.then.you.can.use.the.touch.screen.to.write.it.by.your.finger', '{\"x\":\"You can use your mouse to draw it, or if you using your mobile then you can use the touch screen to write it by your finger\"}'),
(750, 'confirm.deliver', '{\"x\":\"Confirm Deliver\"}'),
(751, 'reach.the.sender.by.mobile', '{\"x\":\"Reach The Sender By Mobile\"}'),
(752, 'for.more.quick.decisions.you.can.call.the.sender.mobile.number.from.here', '{\"x\":\"For more quick decisions you can call the sender mobile number from here\"}'),
(753, 'make.call', '{\"x\":\"Make Call\"}'),
(754, 'reach.the.receiver.by.mobile', '{\"x\":\"Reach The Receiver By Mobile\"}'),
(755, 'for.more.quick.decisions.you.can.call.the.receiver.mobile.number.from.here', '{\"x\":\"For more quick decisions you can call the receiver mobile number from here\"}'),
(756, 'press.upload.after.selecting.or.capture.the.copy', '{\"x\":\"Press Upload after selecting or capture the copy\"}'),
(757, 'file.name', '{\"x\":\"file name\"}'),
(758, 'caption', '{\"x\":\"Caption\"}'),
(759, 'describe.what.the.image.is.about', '{\"x\":\"describe what the image is about\"}'),
(760, 'this.action.will.make.the.responsible.for.the.delivery.is.you.for.administration.review', '{\"x\":\"This action will make the responsible for the delivery is you for administration review\"}'),
(761, 'covered.areas', '{\"x\":\"Covered Areas\"}'),
(762, 'no.new.notifications.found', '{\"x\":\"No new notifications found\"}'),
(763, 'update.your.personal.informaiton', '{\"x\":\"update your personal informaiton\"}'),
(764, 'avatar', '{\"x\":\"Avatar\"}'),
(765, 'only.fill.it.if.you.need.to.change.your.password', '{\"x\":\"Only fill it if you need to change your password\"}'),
(766, 'password.confirmation', '{\"x\":\"Password Confirmation\"}'),
(767, 'mobile.number', '{\"x\":\"Mobile Number\"}'),
(768, 'phone.number', '{\"x\":\"Phone Number\"}'),
(769, 'your.covered.areas.that.you.can.deliver.from.or.to', '{\"x\":\"Your covered areas that you can deliver from or to\"}'),
(770, 'please.be.aware.that.you.will.be.assigned.to.those.places.orders', '{\"x\":\"Please be aware that you will be assigned to those places orders\"}'),
(771, 'place.type', '{\"x\":\"Place Type\"}'),
(772, 'add.another.place', '{\"x\":\"Add Another Place\"}'),
(773, 'transaction.details', '{\"x\":\"Transaction Details\"}'),
(774, 'courier.fee', '{\"x\":\"Courier fee\"}'),
(775, 'transaction.view', '{\"x\":\"Transaction View\"}'),
(776, 'role', '{\"x\":\"Role\"}'),
(777, 'default.address', '{\"x\":\"Default Address\"}'),
(778, 'add.another.address', '{\"x\":\"Add Another Address\"}'),
(779, 'create.new.client', '{\"x\":\"Create New Client\"}'),
(780, 'إدارة.الأقسام', '{\"x\":\"\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0623\\u0642\\u0633\\u0627\\u0645\"}'),
(781, 'create.new.employee', '{\"x\":\"Create New Employee\"}'),
(782, 'is.supervisor', '{\"x\":\"Is Supervisor?\"}'),
(783, 'check.if.you.need.this.user.see.every.data.in.the.modules.that.he.has.permission.on.inside.his.branch', '{\"x\":\"Check if you need this user see every data in the modules that he has permission on inside his branch\"}'),
(784, 'is.a.driver', '{\"x\":\"Is a Driver?\"}'),
(785, 'check.if.you.need.this.user.to.be.assigned.to.a.car.you.can.assign.it.later.from.cars.definition.page', '{\"x\":\"Check if you need this user to be assigned to a car, you can assign it later from cars definition page\"}'),
(786, 'permissions', '{\"x\":\"Permissions\"}'),
(787, 'create', '{\"x\":\"Create\"}'),
(788, 'select.all', '{\"x\":\"Select All\"}'),
(789, 'read', '{\"x\":\"Read\"}'),
(790, 'workorder', '{\"x\":\"Workorder\"}'),
(791, 'ability.to.manage.the.work.orders', '{\"x\":\"Ability to manage the work orders\"}'),
(792, 'all', '{\"x\":\"All\"}'),
(793, 'setting', '{\"x\":\"Setting\"}'),
(794, 'ability.to.manage.system.configuration', '{\"x\":\"Ability to manage system configuration\"}'),
(795, 'ability.to.manage.lanaguages', '{\"x\":\"Ability to manage lanaguages\"}'),
(796, 'ability.to.manage.departmentsgroups', '{\"x\":\"Ability to manage departments\\/groups\"}'),
(797, 'ability.to.manage.employees', '{\"x\":\"Ability to manage employees\"}'),
(798, 'backups', '{\"x\":\"Backups\"}'),
(799, 'ability.to.manage.backups', '{\"x\":\"Ability to manage backups\"}'),
(800, 'ability.to.manage.manifest', '{\"x\":\"Ability to manage manifest\"}'),
(801, 'ability.to.assign.employees.and.drivers.to.orders', '{\"x\":\"Ability to assign employees and drivers to orders\"}'),
(802, 'ability.to.manage.clients', '{\"x\":\"Ability to manage clients\"}'),
(803, 'ability.to.manage.statuses', '{\"x\":\"Ability to manage statuses\"}'),
(804, 'ability.to.manage.areas', '{\"x\":\"Ability to manage areas\"}'),
(805, 'fees', '{\"x\":\"Fees\"}'),
(806, 'ability.to.manage.fees', '{\"x\":\"Ability to manage fees\"}'),
(807, 'ability.to.manage.currencies', '{\"x\":\"Ability to manage currencies\"}'),
(808, 'packaging', '{\"x\":\"Packaging\"}'),
(809, 'ability.to.manage.packaging', '{\"x\":\"Ability to manage packaging\"}'),
(810, 'ability.to.manage.countries', '{\"x\":\"Ability to manage countries\"}'),
(811, 'ability.to.manage.states', '{\"x\":\"Ability to manage states\"}'),
(812, 'ability.to.manage.cities', '{\"x\":\"Ability to manage cities\"}'),
(813, 'ability.to.manage.branches', '{\"x\":\"Ability to manage branches\"}'),
(814, 'ability.to.manage.cars', '{\"x\":\"Ability to manage cars\"}'),
(815, 'ability.to.manage.transactions', '{\"x\":\"Ability to manage transactions\"}'),
(816, 'ability.to.manage.reports', '{\"x\":\"Ability to manage reports\"}'),
(817, 'ability.to.manage.client.messages', '{\"x\":\"Ability to manage client messages\"}'),
(818, 'ability.to.manage.products.categories', '{\"x\":\"Ability to manage products categories\"}'),
(819, 'couriers', '{\"x\":\"Couriers\"}'),
(820, 'ability.to.manage.couriers', '{\"x\":\"Ability to manage couriers\"}'),
(821, 'shipping', '{\"x\":\"Shipping\"}'),
(822, 'ability.to.manage.shipping.modes', '{\"x\":\"Ability to manage shipping modes\"}'),
(823, 'ability.to.manage.treasury', '{\"x\":\"Ability to manage treasury\"}'),
(824, 'ability.to.manage.delivery.times', '{\"x\":\"Ability to manage delivery times\"}'),
(825, 'fees.settings', '{\"x\":\"Fees - Settings\"}'),
(826, 'taxes', '{\"x\":\"Taxes\"}'),
(827, 'tax.percentage', '{\"x\":\"Tax Percentage\"}'),
(828, 'shipping.insurance.percentage', '{\"x\":\"Shipping Insurance Percentage\"}'),
(829, 'default.fees', '{\"x\":\"Default Fees\"}'),
(830, 'the.default.cost.to.deliver.the.package', '{\"x\":\"The default cost to deliver the package\"}'),
(831, 'the.default.cost.to.receive.the.package.from.the.sender', '{\"x\":\"The default cost to receive the package from the sender\"}'),
(832, 'delivery.back.cost.by.sender', '{\"x\":\"Delivery back cost by sender\"}'),
(833, 'the.default.cost.to.return.the.package.fees.to.the.sender', '{\"x\":\"The default cost to return the package fees to the sender\"}'),
(834, 'delivery.back.cost.by.receiver', '{\"x\":\"Delivery back cost by receiver\"}'),
(835, 'fees.by.places', '{\"x\":\"Fees by places\"}'),
(836, 'add.new.fees', '{\"x\":\"Add New Fees\"}'),
(837, 'branches.settings', '{\"x\":\"Branches - Settings\"}'),
(838, 'deliverytimes.settings', '{\"x\":\"Deliverytimes - Settings\"}'),
(839, 'departments.settings', '{\"x\":\"Departments - Settings\"}'),
(840, 'code', '{\"x\":\"Code\"}'),
(841, 'view.shipment.5', '{\"x\":\"View Shipment #5\"}'),
(842, 'countries.settings', '{\"x\":\"Countries - Settings\"}'),
(843, 'shipping.settings', '{\"x\":\"Shipping - Settings\"}'),
(844, 'packaging.settings', '{\"x\":\"Packaging - Settings\"}'),
(845, 'sms.settings', '{\"x\":\"Sms - Settings\"}'),
(846, 'sms', '{\"x\":\"SMS\"}'),
(847, 'enable.sms', '{\"x\":\"Enable SMS\"}'),
(848, 'sms.provider', '{\"x\":\"SMS Provider\"}'),
(849, 'sid', '{\"x\":\"SID\"}'),
(850, 'token', '{\"x\":\"Token\"}'),
(851, 'app.id', '{\"x\":\"App ID\"}'),
(852, 'app.password', '{\"x\":\"App Password\"}'),
(853, 'sms.type', '{\"x\":\"SMS Type\"}'),
(854, 'encoding', '{\"x\":\"encoding\"}'),
(855, 'sender.id', '{\"x\":\"Sender ID\"}'),
(856, 'create.new.status', '{\"x\":\"Create New Status\"}'),
(857, 'color', '{\"x\":\"Color\"}'),
(858, 'dark.color', '{\"x\":\"Dark Color\"}'),
(859, 'brand.color', '{\"x\":\"Brand Color\"}'),
(860, 'primary.color', '{\"x\":\"Primary Color\"}'),
(861, 'info.color', '{\"x\":\"Info Color\"}'),
(862, 'danger.color', '{\"x\":\"Danger Color\"}'),
(863, 'warning.color', '{\"x\":\"Warning Color\"}'),
(864, 'success.color', '{\"x\":\"Success Color\"}'),
(865, 'status.equals', '{\"x\":\"Status Equals\"}'),
(866, 'null', '{\"x\":\"Null\"}'),
(867, 'refused', '{\"x\":\"Refused\"}'),
(868, 'courier.company.received', '{\"x\":\"Courier company received\"}'),
(869, 'delivered.to.receiver', '{\"x\":\"Delivered to receiver\"}'),
(870, 'return.request', '{\"x\":\"Return request\"}'),
(871, 'delivery.of.discards.to.the.driver', '{\"x\":\"Delivery of discards to the driver\"}'),
(872, 'supply.in.stock', '{\"x\":\"Supply in stock\"}'),
(873, 'returned.successfully', '{\"x\":\"Returned successfully\"}'),
(874, 'the.status.means.what', '{\"x\":\"The status means what\"}'),
(875, 'treasury.settings', '{\"x\":\"Treasury - Settings\"}'),
(876, 'balance', '{\"x\":\"Balance\"}'),
(877, 'couriers.settings', '{\"x\":\"Couriers - Settings\"}'),
(878, 'view.shipment.65', '{\"x\":\"View Shipment #65\"}'),
(879, 'update.department', '{\"x\":\"Update Department\"}'),
(880, 'shipments.import', '{\"x\":\"Shipments import\"}'),
(881, 'browse.excel.file', '{\"x\":\"Browse Excel File\"}'),
(882, 'import.new.shipments', '{\"x\":\"Import New Shipments\"}'),
(883, 'مشاهدة.شحنة.66', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #66\"}'),
(884, 'إدارة.الطلبات', '{\"x\":\"\\u0625\\u062f\\u0627\\u0631\\u0629 \\u0627\\u0644\\u0637\\u0644\\u0628\\u0627\\u062a\"}'),
(885, 'مشاهدة.شحنة.64', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #64\"}'),
(886, 'شحنات.محفوظة', '{\"x\":\"\\u0634\\u062d\\u0646\\u0627\\u062a \\u0645\\u062d\\u0641\\u0648\\u0638\\u0629\"}'),
(887, 'مشاهدة.شحنة.57', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #57\"}'),
(888, 'view.shipment.59', '{\"x\":\"View Shipment #59\"}'),
(889, 'تسجيل.الدخول', '{\"x\":\"\\u062a\\u0633\\u062c\\u064a\\u0644 \\u0627\\u0644\\u062f\\u062e\\u0648\\u0644\"}'),
(890, 'جميع.الشحنات', '{\"x\":\"\\u062c\\u0645\\u064a\\u0639 \\u0627\\u0644\\u0634\\u062d\\u0646\\u0627\\u062a\"}'),
(891, 'اضف.خط.سير', '{\"x\":\"\\u0627\\u0636\\u0641 \\u062e\\u0637 \\u0633\\u064a\\u0631\"}'),
(892, 'أضف.عدد', '{\"x\":\"\\u0623\\u0636\\u0641 \\u0639\\u062f\\u062f\"}'),
(893, 'طباعة.أوامر.موظف', '{\"x\":\"\\u0637\\u0628\\u0627\\u0639\\u0629 \\u0623\\u0648\\u0627\\u0645\\u0631 \\u0645\\u0648\\u0638\\u0641\"}'),
(894, 'create.new.country', '{\"x\":\"Create New Country\"}'),
(895, 'view.shipment.67', '{\"x\":\"View Shipment #67\"}'),
(896, 'شحنات.مسلمة', '{\"x\":\"\\u0634\\u062d\\u0646\\u0627\\u062a \\u0645\\u0633\\u0644\\u0645\\u0629\"}'),
(897, 'update.employee', '{\"x\":\"Update Employee\"}'),
(898, 'check.if.you.need.this.user.see.every.data.in.the.modules.that.he.has.permission.on', '{\"x\":\"Check if you need this user see every data in the modules that he has permission on\"}'),
(899, 'view.shipment.68', '{\"x\":\"View Shipment #68\"}'),
(900, 'notification', '{\"x\":\"Notification\"}'),
(901, 'readed', '{\"x\":\"Readed\"}'),
(902, 'are.you.sure.to.mark.all.notifications.as.readed', '{\"x\":\"Are you sure to mark all notifications as readed?\"}'),
(903, 'all.notifications.has.been.marked.as.read', '{\"x\":\"All notifications has been marked as read!\"}'),
(904, 'all.notifications', '{\"x\":\"All Notifications\"}'),
(905, 'review.all.your.notifications', '{\"x\":\"Review all your notifications\"}'),
(906, 'mark.all.as.read', '{\"x\":\"Mark all as read\"}'),
(907, 'view.shipment.69', '{\"x\":\"View Shipment #69\"}'),
(908, 'مشاهدة.شحنة.69', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #69\"}'),
(909, 'notifications.settings', '{\"x\":\"Notifications - Settings\"}'),
(910, 'enable.live.notification', '{\"x\":\"Enable Live Notification\"}'),
(911, 'live.notification.provider', '{\"x\":\"Live Notification Provider\"}'),
(912, 'secret', '{\"x\":\"Secret\"}'),
(913, 'cluster', '{\"x\":\"Cluster\"}'),
(914, 'push.notifications', '{\"x\":\"Push Notifications\"}'),
(915, 'enable.push.notification', '{\"x\":\"Enable Push Notification\"}'),
(916, 'push.notification.provider', '{\"x\":\"Push Notification Provider\"}'),
(917, 'customer.app.key', '{\"x\":\"Customer App Key\"}'),
(918, 'employee.app.key', '{\"x\":\"Employee App Key\"}'),
(919, 'notifications.responsibility', '{\"x\":\"Notifications Responsibility\"}'),
(920, 'new.shipments.notifications', '{\"x\":\"New Shipments Notifications\"}'),
(921, 'system.administrators', '{\"x\":\"System Administrators\"}'),
(922, 'supervisors', '{\"x\":\"Supervisors\"}'),
(923, 'departments.moderators', '{\"x\":\"Departments Moderators\"}'),
(924, 'departments.employees', '{\"x\":\"Departments Employees\"}'),
(925, 'choose.the.departments', '{\"x\":\"Choose the departments\"}'),
(926, 'choose.the.employees', '{\"x\":\"Choose the employees\"}'),
(927, 'new.shipments.note.notifications', '{\"x\":\"New Shipments Note Notifications\"}'),
(928, 'responsible', '{\"x\":\"Responsible\"}'),
(929, 'update.shipments.notifications', '{\"x\":\"Update Shipments Notifications\"}'),
(930, 'approved.shipments.notifications', '{\"x\":\"Approved Shipments Notifications\"}'),
(931, 'refused.shipments.notifications', '{\"x\":\"Refused Shipments Notifications\"}'),
(932, 'postponed.shipments.notifications', '{\"x\":\"Postponed Shipments Notifications\"}'),
(933, 'transfered.shipments.notifications', '{\"x\":\"Transfered Shipments Notifications\"}'),
(934, 'assigned.shipments.notifications', '{\"x\":\"Assigned Shipments Notifications\"}'),
(935, 'driver.received.notifications', '{\"x\":\"Driver Received Notifications\"}'),
(936, 'discards.request.notifications', '{\"x\":\"Discards Request Notifications\"}'),
(937, 'received.notifications', '{\"x\":\"Received Notifications\"}'),
(938, 'manifest.notifications', '{\"x\":\"Manifest Notifications\"}'),
(939, 'saved.in.stock.notifications', '{\"x\":\"Saved in stock Notifications\"}'),
(940, 'returned.notifications', '{\"x\":\"Returned Notifications\"}'),
(941, 'delivered.notifications', '{\"x\":\"Delivered Notifications\"}'),
(942, 'return.discards.notifications', '{\"x\":\"Return Discards Notifications\"}'),
(943, 'employees.settings', '{\"x\":\"Employees - Settings\"}'),
(944, 'return.courier.cost', '{\"x\":\"Return Courier Cost\"}'),
(945, 'activity.stock.saved', '{\"x\":\"activity_stock_saved\"}'),
(946, 'view.shipment.32', '{\"x\":\"View Shipment #32\"}'),
(947, 'view.shipment.56', '{\"x\":\"View Shipment #56\"}'),
(948, 'view.shipment.54', '{\"x\":\"View Shipment #54\"}'),
(949, 'مشاهدة.الطلب', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0627\\u0644\\u0637\\u0644\\u0628\"}'),
(950, 'الشحنات.المسلمة.للكابتن', '{\"x\":\"\\u0627\\u0644\\u0634\\u062d\\u0646\\u0627\\u062a \\u0627\\u0644\\u0645\\u064f\\u0633\\u0644\\u0645\\u0629 \\u0644\\u0644\\u0643\\u0627\\u0628\\u062a\\u0646\"}'),
(951, 'cities.settings', '{\"x\":\"Cities - Settings\"}'),
(952, 'your.addresses.that.you.will.ship.from.or.to', '{\"x\":\"Your addresses that you will ship from or to\"}'),
(953, 'please.be.aware.that.your.addresses.pin.on.google.maps.is.always.very.urgent.for.fast.and.accurate.deliver.for.your.shipments', '{\"x\":\"Please be aware that your addresses pin on google maps is always very urgent for fast and accurate deliver for your shipments\"}'),
(954, 'payment.with', '{\"x\":\"Payment With\"}'),
(955, 'cars.settings', '{\"x\":\"Cars - Settings\"}'),
(956, 'update.client', '{\"x\":\"Update Client\"}'),
(957, 'containers', '{\"x\":\"Containers\"}'),
(958, 'all.containers', '{\"x\":\"All Containers\"}'),
(959, 'blocked.containers', '{\"x\":\"Blocked Containers\"}'),
(960, 'registered.containers', '{\"x\":\"Registered Containers\"}'),
(961, 'loaded.containers', '{\"x\":\"Loaded Containers\"}'),
(962, 'released.containers', '{\"x\":\"Released Containers\"}'),
(963, 'registered', '{\"x\":\"Registered\"}'),
(964, 'loaded', '{\"x\":\"Loaded\"}'),
(965, 'released', '{\"x\":\"Released\"}'),
(966, 'blocked', '{\"x\":\"Blocked\"}'),
(967, 'edit.containers.statuses', '{\"x\":\"Edit Containers Statuses\"}'),
(968, 'container.details', '{\"x\":\"Container Details\"}'),
(969, 'cc', '{\"x\":\"Cc\"}'),
(970, 'view.container', '{\"x\":\"View container\"}'),
(971, 'edit.container', '{\"x\":\"Edit Container\"}'),
(972, 'print.container', '{\"x\":\"Print Container\"}'),
(973, 'delete.container', '{\"x\":\"Delete Container\"}'),
(974, 'languages.settings', '{\"x\":\"Languages - Settings\"}'),
(975, 'enabled', '{\"x\":\"Enabled\"}'),
(976, 'default', '{\"x\":\"Default\"}'),
(977, 'view.shipment.70', '{\"x\":\"View Shipment #70\"}'),
(978, 'create.new.container', '{\"x\":\"Create New Container\"}'),
(979, 'other', '{\"x\":\"Other\"}'),
(980, 'create.new.transaction', '{\"x\":\"Create New Transaction\"}'),
(981, 'categories.settings', '{\"x\":\"Categories - Settings\"}'),
(982, 'create.car', '{\"x\":\"Create Car\"}'),
(983, 'enable', '{\"x\":\"Enable\"}'),
(984, 'container.detail', '{\"x\":\"Container detail\"}'),
(985, 'container.number', '{\"x\":\"Container Number\"}'),
(986, 'bol', '{\"x\":\"BOL\"}'),
(987, 'locense.palate', '{\"x\":\"Locense Palate\"}'),
(988, 'number.of.boxes', '{\"x\":\"Number of boxes\"}'),
(989, 'number.of.pallets', '{\"x\":\"Number of pallets\"}'),
(990, 'location.type', '{\"x\":\"Location Type\"}'),
(991, 'jost', '{\"x\":\"JOST\"}'),
(992, 'transport.company', '{\"x\":\"Transport Company\"}'),
(993, 'destination', '{\"x\":\"Destination\"}'),
(994, 'choose.or.add.a.new.customer.that.will.send.the.package', '{\"x\":\"Choose or add a new Customer that will send the package\"}'),
(995, 'customer.address', '{\"x\":\"Customer Address\"}'),
(996, 'please.select.customer.first', '{\"x\":\"Please select Customer first\"}'),
(997, 'add.a.new.customer', '{\"x\":\"Add a new Customer\"}'),
(998, 'customer.name', '{\"x\":\"Customer Name\"}'),
(999, 'email.address', '{\"x\":\"Email Address\"}'),
(1000, 'vat.number', '{\"x\":\"Vat Number\"}'),
(1001, 'budget', '{\"x\":\"Budget\"}'),
(1002, 'number', '{\"x\":\"Number\"}'),
(1003, 'box', '{\"x\":\"Box\"}'),
(1004, 'language', '{\"x\":\"Language\"}'),
(1005, 'custom.clearance', '{\"x\":\"Custom Clearance\"}'),
(1006, 'fiscal.representation', '{\"x\":\"Fiscal Representation\"}'),
(1007, 'invoice.payment.term', '{\"x\":\"Invoice Payment Term\"}'),
(1008, 'day', '{\"x\":\"day\"}'),
(1009, 'handling.price.per.kg', '{\"x\":\"Handling Price per Kg\"}'),
(1010, 'does.this.customer.pay.storage.fee', '{\"x\":\"Does this customer pay storage fee?\"}'),
(1011, 'storage.costs.after.24.hours', '{\"x\":\"Storage Costs after 24 Hours\"}'),
(1012, 'storage.costs.after.48.hours', '{\"x\":\"Storage Costs after 48 Hours\"}'),
(1013, 'container.info', '{\"x\":\"Container Info\"}'),
(1014, 't1', '{\"x\":\"T1\"}'),
(1015, 'dp', '{\"x\":\"DP\"}'),
(1016, 'inspection.port', '{\"x\":\"Inspection Port\"}'),
(1017, 'eta.port', '{\"x\":\"ETA-Port\"}'),
(1018, 'eta.lgg', '{\"x\":\"ETA-LGG\"}'),
(1019, 'container.size', '{\"x\":\"Container Size\"}'),
(1020, '20.ft', '{\"x\":\"20 ft\",\"ar\":\"20 \\u0642\\u062f\\u0645\"}'),
(1021, '40.ft', '{\"x\":\"40 ft\",\"ar\":\"40 \\u0642\\u062f\\u0645\"}'),
(1022, '45.ft', '{\"x\":\"45 ft\",\"ar\":\"45 \"}'),
(1023, 'reason.for.arrival', '{\"x\":\"Reason for arrival\"}'),
(1024, 'unloading', '{\"x\":\"Unloading\"}'),
(1025, 'cutom.stop', '{\"x\":\"Cutom Stop\"}'),
(1026, 'view.shipment.60', '{\"x\":\"View Shipment #60\"}'),
(1027, 'view.shipment.73', '{\"x\":\"View Shipment #73\"}'),
(1028, 'license.palate', '{\"x\":\"License Palate\"}'),
(1029, 'view.shipment.74', '{\"x\":\"View Shipment #74\"}'),
(1030, 'delyed', '{\"x\":\"Delyed\"}'),
(1031, 'is.it.paid', '{\"x\":\"Is it paid ?\"}'),
(1032, 'create.new.fees', '{\"x\":\"Create New Fees\"}'),
(1033, 'fees.type', '{\"x\":\"Fees Type\"}'),
(1034, 'from.country', '{\"x\":\"From Country\"}'),
(1035, 'to.country', '{\"x\":\"To Country\"}'),
(1036, 'from.state', '{\"x\":\"From State\"}'),
(1037, 'to.state', '{\"x\":\"To State\"}'),
(1038, 'from.city', '{\"x\":\"From City\"}'),
(1039, 'to.city', '{\"x\":\"To City\"}'),
(1040, 'from.area', '{\"x\":\"From Area\"}'),
(1041, 'to.area', '{\"x\":\"To Area\"}'),
(1042, 'delivery.cost', '{\"x\":\"Delivery cost\"}'),
(1043, 'view.shipment.75', '{\"x\":\"View Shipment #75\"}'),
(1044, 'view.shipment.78', '{\"x\":\"View Shipment #78\"}'),
(1045, 'ability.to.manage.containers', '{\"x\":\"Ability to manage containers\"}'),
(1046, 'view.shipment.77', '{\"x\":\"View Shipment #77\"}'),
(1047, 'view.shipment.30', '{\"x\":\"View Shipment #30\"}'),
(1048, 'currencies.settings', '{\"x\":\"Currencies - Settings\"}'),
(1049, 'view.shipment.76', '{\"x\":\"View Shipment #76\"}'),
(1050, 'the.shipment.has.been.saved.on.stock.please.check.it', '{\"x\":\"The shipment has been saved on stock, please check it\"}'),
(1051, 'view.shipment.71', '{\"x\":\"View Shipment #71\"}'),
(1052, 'translate.settings', '{\"x\":\"Translate - Settings\"}'),
(1053, 'display', '{\"x\":\"Display\"}'),
(1054, 'no.data.available.in.table', '{\"x\":\"No data available in table\"}'),
(1055, 'showing', '{\"x\":\"Showing\"}'),
(1056, 'entries', '{\"x\":\"entries\"}'),
(1057, 'processing', '{\"x\":\"Processing\"}'),
(1058, 'search', '{\"x\":\"Search\"}'),
(1059, 'filtered.from', '{\"x\":\"filtered from\"}'),
(1060, 'total.entries', '{\"x\":\"total entries\"}'),
(1061, 'مشاهدة.شحنة.78', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #78\"}'),
(1062, 'يوجد.شحنة.جديد.من.فضلك.قم.بمراجعته', '{\"x\":\"\\u064a\\u0648\\u062c\\u062f \\u0634\\u062d\\u0646\\u0629 \\u062c\\u062f\\u064a\\u062f\\u060c \\u0645\\u0646 \\u0641\\u0636\\u0644\\u0643 \\u0642\\u0645 \\u0628\\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647\"}'),
(1063, 'activity.saved', '{\"x\":\"activity_saved\"}'),
(1064, 'view.shipment.79', '{\"x\":\"View Shipment #79\"}'),
(1065, 'lines.settings', '{\"x\":\"Lines - Settings\"}'),
(1066, 'reason.of.arrival', '{\"x\":\"Reason of Arrival\"}'),
(1067, 'view.shipment.49', '{\"x\":\"View Shipment #49\"}'),
(1068, 'backup.settings', '{\"x\":\"Backup - Settings\"}'),
(1069, 'kb', '{\"x\":\"KB\"}'),
(1070, 'this.feature.is.not.allowed.in.demo', '{\"x\":\"This feature is not allowed in demo\"}'),
(1071, 'create.whole.system.backup', '{\"x\":\"Create Whole System Backup\"}'),
(1072, 'view.shipment.80', '{\"x\":\"View Shipment #80\"}'),
(1073, 'edit.employee', '{\"x\":\"Edit Employee\"}'),
(1074, 'packages.balance', '{\"x\":\"Packages Balance\"}'),
(1075, 'employee.view', '{\"x\":\"Employee View\"}'),
(1076, 'update.currency', '{\"x\":\"Update Currency\"}'),
(1077, 'currency.symbol', '{\"x\":\"Currency Symbol\"}'),
(1078, 'create.currency', '{\"x\":\"Create Currency\"}'),
(1079, 'update.courier', '{\"x\":\"Update Courier\"}'),
(1080, 'update.branch', '{\"x\":\"Update Branch\"}'),
(1081, 'mobile.2', '{\"x\":\"Mobile 2\"}'),
(1082, 'mobile.3', '{\"x\":\"Mobile 3\"}'),
(1083, 'manager', '{\"x\":\"Manager\"}'),
(1084, 'is.the.responsilble.for.receiving.transfers.orders.not.the.manager', '{\"x\":\"Is the responsilble for receiving transfers orders not the manager?\"}'),
(1085, 'activity.postponed', '{\"x\":\"activity_postponed\"}'),
(1086, 'view.shipment.14', '{\"x\":\"View Shipment #14\"}'),
(1087, 'save.sender.details', '{\"x\":\"Save Sender Details\"}'),
(1088, 'shipment.print.template', '{\"x\":\"Shipment Print Template\"}'),
(1089, 'destination.settings', '{\"x\":\"Destination - Settings\"}'),
(1090, 'location.settings', '{\"x\":\"Location - Settings\"}'),
(1091, 'create.destination', '{\"x\":\"Create Destination\"}'),
(1092, 'الشحنات.المعينة', '{\"x\":\"\\u0627\\u0644\\u0634\\u062d\\u0646\\u0627\\u062a \\u0627\\u0644\\u0645\\u064f\\u0639\\u064a\\u0646\\u0629\"}'),
(1093, 'مشاهدة.شحنة.77', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #77\"}'),
(1094, 'تقارير.الشحنات.المسلمة', '{\"x\":\"\\u062a\\u0642\\u0627\\u0631\\u064a\\u0631 \\u0627\\u0644\\u0634\\u062d\\u0646\\u0627\\u062a \\u0627\\u0644\\u0645\\u064f\\u0633\\u0644\\u0645\\u0629\"}'),
(1095, 'طباعة', '{\"x\":\"\\u0637\\u0628\\u0627\\u0639\\u0629\"}'),
(1096, 'تحميل.excel', '{\"x\":\"\\u062a\\u062d\\u0645\\u064a\\u0644 Excel\"}'),
(1097, 'report.print', '{\"x\":\"Report Print\"}'),
(1098, 'ability.to.manage.destination', '{\"x\":\"Ability to manage destination\"}'),
(1099, 'location', '{\"x\":\"Location\"}'),
(1100, 'ability.to.manage.location', '{\"x\":\"ability to manage location\"}'),
(1101, 'ability.to.manage.size', '{\"x\":\"Ability to manage Size\"}'),
(1102, 'ability.to.manage.reason.of.arrival', '{\"x\":\"Ability to manage reason of arrival\"}'),
(1103, 'status.container', '{\"x\":\"Status Container\"}'),
(1104, 'ability.to.manage.status.container', '{\"x\":\"Ability to manage status container\"}'),
(1105, 'create.new.language', '{\"x\":\"Create New Language\"}'),
(1106, 'disabled.languages.will.not.be.available.in.the.front.end', '{\"x\":\"Disabled languages will not be available in the front-end\"}'),
(1107, 'the.default.language.represents.the.content.before.translation', '{\"x\":\"The default language represents the content before translation\"}'),
(1108, 'مشاهدة.شحنة.80', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #80\"}'),
(1109, 'package.fee', '{\"x\":\"Package fee\"}'),
(1110, 'مشاهدة.شحنة.74', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #74\"}'),
(1111, 'view.shipment.81', '{\"x\":\"View Shipment #81\"}'),
(1112, 'مشاهدة.شحنة.83', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #83\"}'),
(1113, 'view.shipment.83', '{\"x\":\"View Shipment #83\"}'),
(1114, 'change.manifest', '{\"x\":\"Change Manifest\"}'),
(1115, 'activity.manifest.assigned', '{\"x\":\"activity_manifest_assigned\"}'),
(1116, 'the.shipment.has.been.added.to.manifest.please.check.it', '{\"x\":\"The shipment has been added to manifest, please check it\"}'),
(1117, 'view.shipment.82', '{\"x\":\"View Shipment #82\"}'),
(1118, 'create.new.state', '{\"x\":\"Create New State\"}'),
(1119, 'create.new.area', '{\"x\":\"Create New Area\"}'),
(1120, 'select.it.first', '{\"x\":\"Select it first\"}'),
(1121, 'create.new.city', '{\"x\":\"Create New City\"}'),
(1122, 'view.shipment.36', '{\"x\":\"View Shipment #36\"}'),
(1123, 'view.shipment.34', '{\"x\":\"View Shipment #34\"}'),
(1124, 'view.shipment.21', '{\"x\":\"View Shipment #21\"}'),
(1125, 'create.new.department', '{\"x\":\"Create New Department\"}'),
(1126, 'update.category', '{\"x\":\"Update Category\"}'),
(1127, 'view.shipment.1', '{\"x\":\"View Shipment #1\"}'),
(1128, 'create.courier', '{\"x\":\"Create Courier\"}'),
(1129, 'employee.tracking', '{\"x\":\"Employee Tracking\"}'),
(1130, 'last.updated.location.time', '{\"x\":\"Last updated location time\"}'),
(1131, 'not.updated.yet', '{\"x\":\"Not updated yet\"}'),
(1132, 'view.shipment.84', '{\"x\":\"View Shipment #84\"}'),
(1133, 'update.fees', '{\"x\":\"Update Fees\"}'),
(1134, 'update.treasury', '{\"x\":\"Update treasury\"}'),
(1135, 'update.shipping', '{\"x\":\"Update Shipping\"}'),
(1136, 'update.package', '{\"x\":\"Update Package\"}'),
(1137, 'view.shipment.85', '{\"x\":\"View Shipment #85\"}'),
(1138, 'view.shipment.86', '{\"x\":\"View Shipment #86\"}'),
(1139, 'view.shipment.87', '{\"x\":\"View Shipment #87\"}'),
(1140, 'view.shipment.88', '{\"x\":\"View Shipment #88\"}'),
(1141, 'view.shipment.89', '{\"x\":\"View Shipment #89\"}'),
(1142, 'create.location', '{\"x\":\"Create Location\"}'),
(1143, 'statuscontainer.settings', '{\"x\":\"Statuscontainer - Settings\"}'),
(1144, 'view.shipment.90', '{\"x\":\"View Shipment #90\"}'),
(1145, 'view.shipment.91', '{\"x\":\"View Shipment #91\"}'),
(1146, 'reasonarrival.settings', '{\"x\":\"Reasonarrival - Settings\"}'),
(1147, 'create.reason', '{\"x\":\"Create Reason\"}'),
(1148, 'size.settings', '{\"x\":\"Size - Settings\"}'),
(1149, 'create.size', '{\"x\":\"Create Size\"}'),
(1150, 'update.destination', '{\"x\":\"Update Destination\"}'),
(1151, 'update.car', '{\"x\":\"Update Car\"}'),
(1152, 'view.shipment.92', '{\"x\":\"View Shipment #92\"}'),
(1153, 'view.shipment.94', '{\"x\":\"View Shipment #94\"}'),
(1154, 'view.shipment.95', '{\"x\":\"View Shipment #95\"}'),
(1155, 'view.shipment.97', '{\"x\":\"View Shipment #97\"}'),
(1156, 'view.shipment.98', '{\"x\":\"View Shipment #98\"}'),
(1157, 'view.shipment.99', '{\"x\":\"View Shipment #99\"}'),
(1158, 'view.shipment.101', '{\"x\":\"View Shipment #101\"}'),
(1159, 'return.package.fee', '{\"x\":\"Return package fee\"}'),
(1160, 'view.shipment.2', '{\"x\":\"View Shipment #2\"}'),
(1161, 'view.shipment.93', '{\"x\":\"View Shipment #93\"}'),
(1162, 'view.shipment.100', '{\"x\":\"View Shipment #100\"}'),
(1163, 'manifest.print', '{\"x\":\"Manifest Print\"}'),
(1164, 'view.shipment.102', '{\"x\":\"View Shipment #102\"}'),
(1165, 'container.view', '{\"x\":\"Container View\"}'),
(1166, 'view.container.3', '{\"x\":\"View Container #3\"}'),
(1167, 'view.shipment.96', '{\"x\":\"View Shipment #96\"}'),
(1168, 'loaded.date', '{\"x\":\"Loaded Date\"}'),
(1169, 'inspect.port', '{\"x\":\"Inspect Port\"}'),
(1170, 'create.branch', '{\"x\":\"Create Branch\"}'),
(1171, 'create.delivery.time', '{\"x\":\"Create Delivery Time\"}'),
(1172, 'count.hours', '{\"x\":\"Count hours\"}'),
(1173, 'create.category', '{\"x\":\"Create Category\"}'),
(1174, 'update.container', '{\"x\":\"Update Container\"}'),
(1175, 'view.shipment.103', '{\"x\":\"View Shipment #103\"}'),
(1176, 'view.shipment.105', '{\"x\":\"View Shipment #105\"}'),
(1177, 'شحنات.مقبولة', '{\"x\":\"\\u0634\\u062d\\u0646\\u0627\\u062a \\u0645\\u0642\\u0628\\u0648\\u0644\\u0629\"}'),
(1178, 'view.shipment.104', '{\"x\":\"View Shipment #104\"}'),
(1179, 'مشاهدة.شحنة.105', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #105\"}'),
(1180, 'releaed', '{\"x\":\"Releaed\"}'),
(1181, 'the.shipment.has.been.transfered.to.masr.elgdida.branch', '{\"x\":\"The shipment has been transfered to Masr Elgdida Branch\"}'),
(1182, 'مشاهدة.شحنة.100', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #100\"}'),
(1183, 'مشاهدة.شحنة.103', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #103\"}'),
(1184, 'تعديل.شحنة', '{\"x\":\"\\u062a\\u0639\\u062f\\u064a\\u0644 \\u0634\\u062d\\u0646\\u0629\"}'),
(1185, 'مشاهدة.شحنة.98', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #98\"}'),
(1186, 'container.print', '{\"x\":\"Container Print\"}'),
(1187, 'view.container.2', '{\"x\":\"View Container #2\"}'),
(1188, 'price.per.kg', '{\"x\":\"Price per Kg\"}'),
(1189, 'مشاهدة.شحنة.76', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #76\"}'),
(1190, 'the.requested.amount.of.the.sender.was.deducted.from.the.return', '{\"x\":\"The requested amount of the sender was deducted from the return\"}'),
(1191, 'view.shipment.106', '{\"x\":\"View Shipment #106\"}'),
(1192, 'مشاهدة.شحنة.102', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #102\"}'),
(1193, 'تحديد.الكل.كمقروء', '{\"x\":\"\\u062a\\u062d\\u062f\\u064a\\u062f \\u0627\\u0644\\u0643\\u0644 \\u0643\\u0645\\u0642\\u0631\\u0648\\u0621\"}'),
(1194, 'مشاهدة.شحنة.107', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #107\"}'),
(1195, 'view.shipment.107', '{\"x\":\"View Shipment #107\"}'),
(1196, 'مشاهدة.شحنة.87', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #87\"}'),
(1197, 'مشاهدة.شحنة.90', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #90\"}'),
(1198, 'شحنات.مؤجلة', '{\"x\":\"\\u0634\\u062d\\u0646\\u0627\\u062a \\u0645\\u0624\\u062c\\u0644\\u0629\"}'),
(1199, 'view.shipment.108', '{\"x\":\"View Shipment #108\"}'),
(1200, 'transactions.withdrawl.reports', '{\"x\":\"Transactions Withdrawl Reports\"}'),
(1201, 'view.shipment.110', '{\"x\":\"View Shipment #110\"}'),
(1202, 'activity.released', '{\"x\":\"activity_Released\"}'),
(1203, 'view.shipment.109', '{\"x\":\"View Shipment #109\"}'),
(1204, 'مشاهدة.شحنة.95', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #95\"}'),
(1205, 'instock.statuses', '{\"x\":\"InStock Statuses\"}'),
(1206, 'incustom.statuses', '{\"x\":\"InCustom Statuses\"}'),
(1207, 'partially.loaded', '{\"x\":\"Partially Loaded\"}'),
(1208, 'registered.note.received', '{\"x\":\"Registered Note Received\"}'),
(1209, 'stockstatuses.settings', '{\"x\":\"Stockstatuses - Settings\"}'),
(1210, 'fully.loaded', '{\"x\":\"Fully Loaded\"}'),
(1211, 'customstatuses.settings', '{\"x\":\"Customstatuses - Settings\"}'),
(1212, 'destroyed', '{\"x\":\"Destroyed\"}'),
(1213, 'exported', '{\"x\":\"Exported\"}'),
(1214, 'this.param.type.settings', '{\"x\":\"This.param.type - Settings\"}'),
(1215, 'type.settings', '{\"x\":\":type - Settings\"}'),
(1216, 'shipments.settings', '{\"x\":\"Shipments - Settings\"}'),
(1217, 'مشاهدة.شحنة.97', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #97\"}'),
(1218, 'view.shipment.112', '{\"x\":\"View Shipment #112\"}'),
(1219, 'view.shipment.111', '{\"x\":\"View Shipment #111\"}'),
(1220, 'view.shipment.113', '{\"x\":\"View Shipment #113\"}'),
(1221, 'transaction.id', '{\"x\":\"Transaction ID\"}'),
(1222, 'transaction.date', '{\"x\":\"Transaction date\"}'),
(1223, 'transaction.print', '{\"x\":\"Transaction Print\"}'),
(1224, 'in.custom', '{\"x\":\"In Custom\"}'),
(1225, 'treasury.view', '{\"x\":\"Treasury View\"}'),
(1226, 'view.shipment.114', '{\"x\":\"View Shipment #114\"}'),
(1227, 'the.shipment.has.been.transfered.to.main.branch', '{\"x\":\"The shipment has been transfered to Main Branch\"}'),
(1228, 'مشاهدة.شحنة.112', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #112\"}'),
(1229, 'view.shipment.115', '{\"x\":\"View Shipment #115\"}'),
(1230, 'view.shipment.116', '{\"x\":\"View Shipment #116\"}'),
(1231, 'view.shipment.117', '{\"x\":\"View Shipment #117\"}'),
(1232, 'view.shipment.118', '{\"x\":\"View Shipment #118\"}'),
(1233, 'view.shipment.119', '{\"x\":\"View Shipment #119\"}'),
(1234, 'view.shipment.53', '{\"x\":\"View Shipment #53\"}'),
(1235, 'مشاهدة.شحنة.118', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #118\"}'),
(1236, 'view.shipment.122', '{\"x\":\"View Shipment #122\"}'),
(1237, 'view.shipment.125', '{\"x\":\"View Shipment #125\"}'),
(1238, 'مشاهدة.شحنة.71', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #71\"}'),
(1239, 'view.shipment.124', '{\"x\":\"View Shipment #124\"}'),
(1240, 'view.shipment.130', '{\"x\":\"View Shipment #130\"}'),
(1241, 'view.shipment.123', '{\"x\":\"View Shipment #123\"}'),
(1242, 'view.shipment.131', '{\"x\":\"View Shipment #131\"}'),
(1243, 'مشاهدة.شحنة.1', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #1\"}'),
(1244, 'view.shipment.129', '{\"x\":\"View Shipment #129\"}'),
(1245, 'update.country', '{\"x\":\"Update Country\"}'),
(1246, 'view.shipment.132', '{\"x\":\"View Shipment #132\"}'),
(1247, 'view.shipment.133', '{\"x\":\"View Shipment #133\"}'),
(1248, 'view.shipment.134', '{\"x\":\"View Shipment #134\"}'),
(1249, 'view.shipment.137', '{\"x\":\"View Shipment #137\"}'),
(1250, 'view.shipment.136', '{\"x\":\"View Shipment #136\"}'),
(1251, 'view.shipment.126', '{\"x\":\"View Shipment #126\"}'),
(1252, 'view.shipment.138', '{\"x\":\"View Shipment #138\"}'),
(1253, 'مشاهدة.شحنة.138', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #138\"}'),
(1254, 'مشاهدة.شحنة.117', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #117\"}'),
(1255, 'manifest.view.2', '{\"x\":\"Manifest View #2\"}'),
(1256, 'view.shipment.135', '{\"x\":\"View Shipment #135\"}'),
(1257, 'license.plate', '{\"x\":\"License Plate\"}'),
(1258, 'transport.date', '{\"x\":\"Transport Date\"}'),
(1259, 'labels', '{\"x\":\"Labels\"}'),
(1260, 'ground.handler', '{\"x\":\"Ground Handler\"}'),
(1261, 'breakdown', '{\"x\":\"Breakdown\"}'),
(1262, 'labels.settings', '{\"x\":\"Labels - Settings\"}'),
(1263, 'handler.settings', '{\"x\":\"Handler - Settings\"}'),
(1264, 'break.settings', '{\"x\":\"Break - Settings\"}'),
(1265, 'view.shipment.141', '{\"x\":\"View Shipment #141\"}'),
(1266, 'مشاهدة.شحنة.139', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #139\"}'),
(1267, 'create.label', '{\"x\":\"Create Label\"}'),
(1268, 'update.label', '{\"x\":\"Update Label\"}'),
(1269, 'create.ground.handler', '{\"x\":\"Create Ground Handler\"}'),
(1270, 'create.breakdown', '{\"x\":\"Create Breakdown\"}'),
(1271, 'view.shipment.143', '{\"x\":\"View Shipment #143\"}'),
(1272, 'ability.to.manage.labels', '{\"x\":\"Ability to manage Labels\"}'),
(1273, 'ability.to.manage.ground.handler', '{\"x\":\"Ability to manage Ground Handler\"}'),
(1274, 'ability.to.manage.breakdown', '{\"x\":\"Ability to manage Breakdown\"}'),
(1275, 'view.shipment.140', '{\"x\":\"View Shipment #140\"}'),
(1276, 'customer.information', '{\"x\":\"Customer information\"}'),
(1277, 'linked.user', '{\"x\":\"Linked User\"}'),
(1278, 'invoice.information', '{\"x\":\"Invoice information\"}'),
(1279, 'invoice.address', '{\"x\":\"Invoice Address\"}'),
(1280, 'email.contact', '{\"x\":\"Email Contact\"}'),
(1281, 'view.shipment.139', '{\"x\":\"View Shipment #139\"}'),
(1282, 'view.shipment.144', '{\"x\":\"View Shipment #144\"}'),
(1283, 'customs', '{\"x\":\"Customs\"}'),
(1284, 'add.another.contact.address', '{\"x\":\"Add Another Contact Address\"}'),
(1285, 'مشاهدة.شحنة.143', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #143\"}'),
(1286, 'view.shipment.146', '{\"x\":\"View Shipment #146\"}');
INSERT INTO `rainlab_translate_messages` (`id`, `code`, `message_data`) VALUES
(1287, 'مشاهدة.شحنة.135', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #135\"}'),
(1288, 'مشاهدة.شحنة.146', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #146\"}'),
(1289, 'كل.الإشعارات', '{\"x\":\"\\u0643\\u0644 \\u0627\\u0644\\u0625\\u0634\\u0639\\u0627\\u0631\\u0627\\u062a\"}'),
(1290, 'مراجعة.جميع.إشعاراتك', '{\"x\":\"\\u0645\\u0631\\u0627\\u062c\\u0639\\u0629 \\u062c\\u0645\\u064a\\u0639 \\u0625\\u0634\\u0639\\u0627\\u0631\\u0627\\u062a\\u0643\"}'),
(1291, 'view.shipment.145', '{\"x\":\"View Shipment #145\"}'),
(1292, 'view.shipment.33', '{\"x\":\"View Shipment #33\"}'),
(1293, 'no.orders.for.this.employee.on.that.date', '{\"x\":\"No orders for this employee on that date\"}'),
(1294, 'view.shipment.148', '{\"x\":\"View Shipment #148\"}'),
(1295, 'مشاهدة.شحنة.148', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #148\"}'),
(1296, 'تقارير.الإيداعات.المالية', '{\"x\":\"\\u062a\\u0642\\u0627\\u0631\\u064a\\u0631 \\u0627\\u0644\\u0625\\u064a\\u062f\\u0627\\u0639\\u0627\\u062a \\u0627\\u0644\\u0645\\u0627\\u0644\\u064a\\u0629\"}'),
(1297, 'view.shipment.142', '{\"x\":\"View Shipment #142\"}'),
(1298, 'view.shipment.149', '{\"x\":\"View Shipment #149\"}'),
(1299, 'contact.addresses', '{\"x\":\"Contact Addresses\"}'),
(1300, 'view.shipment.150', '{\"x\":\"View Shipment #150\"}'),
(1301, 'view.shipment.152', '{\"x\":\"View Shipment #152\"}'),
(1302, 'مشاهدة.شحنة.152', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #152\"}'),
(1303, 'view.shipment.147', '{\"x\":\"View Shipment #147\"}'),
(1304, 'activity.loaded', '{\"x\":\"activity_loaded\"}'),
(1305, 'activity.refused', '{\"x\":\"activity_refused\"}'),
(1306, 'view.shipment.3', '{\"x\":\"View Shipment #3\"}'),
(1307, 'view.shipment.154', '{\"x\":\"View Shipment #154\"}'),
(1308, 'normal', '{\"x\":\"Normal\"}'),
(1309, 'مشاهدة.شحنة.73', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #73\"}'),
(1310, 'مشاهدة.شحنة.142', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #142\"}'),
(1311, 'إنشاء.نسخة.أحتياطية.لقاعدة.البيانات', '{\"x\":\"\\u0625\\u0646\\u0634\\u0627\\u0621 \\u0646\\u0633\\u062e\\u0629 \\u0623\\u062d\\u062a\\u064a\\u0627\\u0637\\u064a\\u0629 \\u0644\\u0642\\u0627\\u0639\\u062f\\u0629 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a\"}'),
(1312, 'إنشاء.نسخة.أحتياطية.للملفات', '{\"x\":\"\\u0625\\u0646\\u0634\\u0627\\u0621 \\u0646\\u0633\\u062e\\u0629 \\u0623\\u062d\\u062a\\u064a\\u0627\\u0637\\u064a\\u0629 \\u0644\\u0644\\u0645\\u0644\\u0641\\u0627\\u062a\"}'),
(1313, 'إنشاء.نسخة.أحتياطية.لكامل.النظام', '{\"x\":\"\\u0625\\u0646\\u0634\\u0627\\u0621 \\u0646\\u0633\\u062e\\u0629 \\u0623\\u062d\\u062a\\u064a\\u0627\\u0637\\u064a\\u0629 \\u0644\\u0643\\u0627\\u0645\\u0644 \\u0627\\u0644\\u0646\\u0638\\u0627\\u0645\"}'),
(1314, 'مشاهدة.شحنة.114', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #114\"}'),
(1315, 'the.shipment.has.been.transfered.to.6.october.branch', '{\"x\":\"The shipment has been transfered to 6 October Branch\"}'),
(1316, 'مشاهدة.شحنة.130', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #130\"}'),
(1317, 'details', '{\"x\":\"Details\"}'),
(1318, 'airwaybill', '{\"x\":\"Airwaybill\"}'),
(1319, 'boxes', '{\"x\":\"Boxes\"}'),
(1320, 'pallets', '{\"x\":\"Pallets\"}'),
(1321, 'transfer.to.jost', '{\"x\":\"Transfer to JOST\"}'),
(1322, 'extra.info', '{\"x\":\"Extra Info\"}'),
(1323, 'label', '{\"x\":\"Label\"}'),
(1324, 'pre.alert.received', '{\"x\":\"Pre alert received\"}'),
(1325, 'released.note.received', '{\"x\":\"Released note received\"}'),
(1326, 'remarks', '{\"x\":\"Remarks\"}'),
(1327, 'write.your.remarks', '{\"x\":\"Write your remarks\"}'),
(1328, 'released.note', '{\"x\":\"Released Note\"}'),
(1329, 'view.shipment.151', '{\"x\":\"View Shipment #151\"}'),
(1330, 'destinations', '{\"x\":\"Destinations\"}'),
(1331, 'price', '{\"x\":\"Price\"}'),
(1332, 'subtotal', '{\"x\":\"Subtotal\"}'),
(1333, 'add.another.destination', '{\"x\":\"Add Another Destination\"}'),
(1334, 'history', '{\"x\":\"History\"}'),
(1335, 'view.shipment.155', '{\"x\":\"View Shipment #155\"}'),
(1336, 'مشاهدة.شحنة.154', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #154\"}'),
(1337, 'مشاهدة.شحنة.14', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #14\"}'),
(1338, 'view.shipment.156', '{\"x\":\"View Shipment #156\"}'),
(1339, 'مشاهدة.شحنة.156', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #156\"}'),
(1340, 'view.shipment.158', '{\"x\":\"View Shipment #158\"}'),
(1341, 'view.shipment.160', '{\"x\":\"View Shipment #160\"}'),
(1342, 'update.city', '{\"x\":\"Update City\"}'),
(1343, 'view.container.4', '{\"x\":\"View Container #4\"}'),
(1344, 'payment.details', '{\"x\":\"Payment Details\"}'),
(1345, 'view.shipment.159', '{\"x\":\"View Shipment #159\"}'),
(1346, 'مشاهدة.شحنة.150', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #150\"}'),
(1347, 'مشاهدة.شحنة.149', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #149\"}'),
(1348, 'تقارير.الشحنات.المتأخرة', '{\"x\":\"\\u062a\\u0642\\u0627\\u0631\\u064a\\u0631 \\u0627\\u0644\\u0634\\u062d\\u0646\\u0627\\u062a \\u0627\\u0644\\u0645\\u062a\\u0623\\u062e\\u0631\\u0629\"}'),
(1349, 'view.shipment.161', '{\"x\":\"View Shipment #161\"}'),
(1350, 'view.shipment.162', '{\"x\":\"View Shipment #162\"}'),
(1351, 'مشاهدة.شحنة.162', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #162\"}'),
(1352, 'view.shipment.163', '{\"x\":\"View Shipment #163\"}'),
(1353, 'view.shipment.164', '{\"x\":\"View Shipment #164\"}'),
(1354, 'view.shipment.165', '{\"x\":\"View Shipment #165\"}'),
(1355, 'view.shipment.166', '{\"x\":\"View Shipment #166\"}'),
(1356, 'view.shipment.167', '{\"x\":\"View Shipment #167\"}'),
(1357, 'view.shipment.168', '{\"x\":\"View Shipment #168\"}'),
(1358, 'view.shipment.169', '{\"x\":\"View Shipment #169\"}'),
(1359, 'view.shipment.171', '{\"x\":\"View Shipment #171\"}'),
(1360, 'view.shipment.172', '{\"x\":\"View Shipment #172\"}'),
(1361, 'view.shipment.174', '{\"x\":\"View Shipment #174\"}'),
(1362, 'view.shipment.177', '{\"x\":\"View Shipment #177\"}'),
(1363, 'view.shipment.173', '{\"x\":\"View Shipment #173\"}'),
(1364, 'view.shipment.178', '{\"x\":\"View Shipment #178\"}'),
(1365, 'received.date', '{\"x\":\"Received Date\"}'),
(1366, 'tranfer.to.jost', '{\"x\":\"Tranfer to Jost\"}'),
(1367, 'fisacl.representaion', '{\"x\":\"Fisacl Representaion\"}'),
(1368, 'stock', '{\"x\":\"Stock\"}'),
(1369, 'add.shipments', '{\"x\":\"Add Shipments\"}'),
(1370, 'shipment.content', '{\"x\":\"Shipment Content\"}'),
(1371, 'view.shipment.181', '{\"x\":\"View Shipment #181\"}'),
(1372, 'view.shipment.184', '{\"x\":\"View Shipment #184\"}'),
(1373, 'containers.list', '{\"x\":\"Containers List\"}'),
(1374, 'new.request', '{\"x\":\"New Request\"}'),
(1375, 'مشاهدة.شحنة.184', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #184\"}'),
(1376, 'view.shipment.182', '{\"x\":\"View Shipment #182\"}'),
(1377, 'view.shipment.183', '{\"x\":\"View Shipment #183\"}'),
(1378, 'update.state', '{\"x\":\"Update State\"}'),
(1379, 'view.shipment.185', '{\"x\":\"View Shipment #185\"}'),
(1380, 'update.delivery.time', '{\"x\":\"Update Delivery Time\"}'),
(1381, 'view.shipment.186', '{\"x\":\"View Shipment #186\"}'),
(1382, 'مشاهدة.شحنة.186', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #186\"}'),
(1383, 'view.shipment.187', '{\"x\":\"View Shipment #187\"}'),
(1384, 'view.shipment.176', '{\"x\":\"View Shipment #176\"}'),
(1385, 'view.shipment.188', '{\"x\":\"View Shipment #188\"}'),
(1386, '', '{\"x\":\"\"}'),
(1387, 'view.shipment.190', '{\"x\":\"View Shipment #190\"}'),
(1388, 'مشاهدة.شحنة.190', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #190\"}'),
(1389, 'view.shipment.191', '{\"x\":\"View Shipment #191\"}'),
(1390, 'eghl', '{\"x\":\"eGHL\"}'),
(1391, 'service.id', '{\"x\":\"Service ID\"}'),
(1392, 'merchant.password', '{\"x\":\"Merchant Password\"}'),
(1393, 'sender.and.receiver.can.see.the.online.payment.option.if.they.have.to.pay.something.they.can.pay.it.online', '{\"x\":\"Sender and receiver can see the online payment option if they have to pay something they can pay it online\"}'),
(1394, 'thank.you', '{\"x\":\"Thank you!\"}'),
(1395, 'your.payment.is.successfully.paid.you.will.be.redirect.rightnow.please.wait', '{\"x\":\"Your payment is successfully paid! You will be redirect rightnow, please wait\"}'),
(1396, 'closed', '{\"x\":\"Closed!\"}'),
(1397, 'you.did.not.pay.the.requested.payment', '{\"x\":\"You did not pay the requested payment! :(\"}'),
(1398, 'create.shipping', '{\"x\":\"Create Shipping\"}'),
(1399, 'مشاهدة.شحنة.191', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #191\"}'),
(1400, 'مشاهدة.شحنة.164', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #164\"}'),
(1401, 'view.shipment.192', '{\"x\":\"View Shipment #192\"}'),
(1402, 'pay', '{\"x\":\"Pay\"}'),
(1403, 'eghl.payment', '{\"x\":\"eGHL Payment\"}'),
(1404, 'payment.id', '{\"x\":\"Payment ID\"}'),
(1405, 'currency.code', '{\"x\":\"Currency Code\"}'),
(1406, 'مشاهدة.شحنة.192', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #192\"}'),
(1407, 'view.shipment.193', '{\"x\":\"View Shipment #193\"}'),
(1408, 'view.shipment.194', '{\"x\":\"View Shipment #194\"}'),
(1409, 'view.shipment.195', '{\"x\":\"View Shipment #195\"}'),
(1410, 'مشاهدة.شحنة.195', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #195\"}'),
(1411, 'create.package', '{\"x\":\"Create Package\"}'),
(1412, 'view.shipment.196', '{\"x\":\"View Shipment #196\"}'),
(1413, 'view.shipment.197', '{\"x\":\"View Shipment #197\"}'),
(1414, 'view.shipment.198', '{\"x\":\"View Shipment #198\"}'),
(1415, 'update.area', '{\"x\":\"Update Area\"}'),
(1416, 'view.shipment.199', '{\"x\":\"View Shipment #199\"}'),
(1417, 'view.shipment.200', '{\"x\":\"View Shipment #200\"}'),
(1418, 'view.shipment.201', '{\"x\":\"View Shipment #201\"}'),
(1419, 'view.shipment.204', '{\"x\":\"View Shipment #204\"}'),
(1420, 'view.shipment.205', '{\"x\":\"View Shipment #205\"}'),
(1421, 'view.shipment.206', '{\"x\":\"View Shipment #206\"}'),
(1422, 'مشاهدة.شحنة.206', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #206\"}'),
(1423, 'view.shipment.202', '{\"x\":\"View Shipment #202\"}'),
(1424, 'مشاهدة.شحنة.205', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #205\"}'),
(1425, 'create.treasury', '{\"x\":\"Create treasury\"}'),
(1426, 'view.shipment.203', '{\"x\":\"View Shipment #203\"}'),
(1427, 'view.shipment.207', '{\"x\":\"View Shipment #207\"}'),
(1428, 'مشاهدة.شحنة.207', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #207\"}'),
(1429, 'view.shipment.208', '{\"x\":\"View Shipment #208\"}'),
(1430, 'مشاهدة.شحنة.208', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #208\"}'),
(1431, 'view.shipment.209', '{\"x\":\"View Shipment #209\"}'),
(1432, 'مشاهدة.شحنة.210', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #210\"}'),
(1433, 'view.shipment.210', '{\"x\":\"View Shipment #210\"}'),
(1434, 'view.shipment.211', '{\"x\":\"View Shipment #211\"}'),
(1435, 'view.shipment.212', '{\"x\":\"View Shipment #212\"}'),
(1436, 'مشاهدة.شحنة.212', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #212\"}'),
(1437, 'مشاهدة.شحنة.211', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #211\"}'),
(1438, 'تم.الأضافة.لخط.سير', '{\"x\":\"\\u062a\\u0645 \\u0627\\u0644\\u0623\\u0636\\u0627\\u0641\\u0629 \\u0644\\u062e\\u0637 \\u0633\\u064a\\u0631\"}'),
(1439, 'مشاهدة.شحنة.209', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #209\"}'),
(1440, 'view.shipment.214', '{\"x\":\"View Shipment #214\"}'),
(1441, 'view.shipment.213', '{\"x\":\"View Shipment #213\"}'),
(1442, 'view.shipment.216', '{\"x\":\"View Shipment #216\"}'),
(1443, 'view.shipment.217', '{\"x\":\"View Shipment #217\"}'),
(1444, 'تقارير.المسحوبات.المالية', '{\"x\":\"\\u062a\\u0642\\u0627\\u0631\\u064a\\u0631 \\u0627\\u0644\\u0645\\u0633\\u062d\\u0648\\u0628\\u0627\\u062a \\u0627\\u0644\\u0645\\u0627\\u0644\\u064a\\u0629\"}'),
(1445, 'view.shipment.218', '{\"x\":\"View Shipment #218\"}'),
(1446, 'view.shipment.219', '{\"x\":\"View Shipment #219\"}'),
(1447, 'مشاهدة.شحنة.214', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #214\"}'),
(1448, 'مشاهدة.شحنة.204', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #204\"}'),
(1449, 'مشاهدة.شحنة.219', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #219\"}'),
(1450, 'view.shipment.220', '{\"x\":\"View Shipment #220\"}'),
(1451, 'manifest.view.5', '{\"x\":\"Manifest View #5\"}'),
(1452, 'view.shipment.221', '{\"x\":\"View Shipment #221\"}'),
(1453, 'view.shipment.222', '{\"x\":\"View Shipment #222\"}'),
(1454, 'no.orders.found', '{\"x\":\"No orders found\"}'),
(1455, 'view.shipment.224', '{\"x\":\"View Shipment #224\"}'),
(1456, 'view.shipment.225', '{\"x\":\"View Shipment #225\"}'),
(1457, 'view.shipment.223', '{\"x\":\"View Shipment #223\"}'),
(1458, 'view.shipment.226', '{\"x\":\"View Shipment #226\"}'),
(1459, 'view.shipment.227', '{\"x\":\"View Shipment #227\"}'),
(1460, 'view.shipment.228', '{\"x\":\"View Shipment #228\"}'),
(1461, 'view.shipment.229', '{\"x\":\"View Shipment #229\"}'),
(1462, 'view.shipment.230', '{\"x\":\"View Shipment #230\"}'),
(1463, 'view.shipment.231', '{\"x\":\"View Shipment #231\"}'),
(1464, 'view.shipment.232', '{\"x\":\"View Shipment #232\"}'),
(1465, 'view.shipment.233', '{\"x\":\"View Shipment #233\"}'),
(1466, 'view.shipment.234', '{\"x\":\"View Shipment #234\"}'),
(1467, 'view.shipment.235', '{\"x\":\"View Shipment #235\"}'),
(1468, 'مشاهدة.شحنة.235', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #235\"}'),
(1469, 'شحنات.موردة', '{\"x\":\"\\u0634\\u062d\\u0646\\u0627\\u062a \\u0645\\u0648\\u0631\\u062f\\u0629\"}'),
(1470, 'view.shipment.236', '{\"x\":\"View Shipment #236\"}'),
(1471, 'view.shipment.238', '{\"x\":\"View Shipment #238\"}'),
(1472, 'view.shipment.237', '{\"x\":\"View Shipment #237\"}'),
(1473, 'view.shipment.241', '{\"x\":\"View Shipment #241\"}'),
(1474, 'view.shipment.242', '{\"x\":\"View Shipment #242\"}'),
(1475, 'view.shipment.243', '{\"x\":\"View Shipment #243\"}'),
(1476, 'view.shipment.244', '{\"x\":\"View Shipment #244\"}'),
(1477, 'view.shipment.245', '{\"x\":\"View Shipment #245\"}'),
(1478, 'manifest.view.6', '{\"x\":\"Manifest View #6\"}'),
(1479, 'view.shipment.246', '{\"x\":\"View Shipment #246\"}'),
(1480, 'view.shipment.247', '{\"x\":\"View Shipment #247\"}'),
(1481, 'view.shipment.248', '{\"x\":\"View Shipment #248\"}'),
(1482, 'view.shipment.249', '{\"x\":\"View Shipment #249\"}'),
(1483, 'view.shipment.250', '{\"x\":\"View Shipment #250\"}'),
(1484, 'view.shipment.252', '{\"x\":\"View Shipment #252\"}'),
(1485, 'view.shipment.253', '{\"x\":\"View Shipment #253\"}'),
(1486, 'view.shipment.254', '{\"x\":\"View Shipment #254\"}'),
(1487, 'view.shipment.255', '{\"x\":\"View Shipment #255\"}'),
(1488, 'مشاهدة.شحنة.255', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #255\"}'),
(1489, 'view.shipment.256', '{\"x\":\"View Shipment #256\"}'),
(1490, 'view.shipment.257', '{\"x\":\"View Shipment #257\"}'),
(1491, 'view.shipment.258', '{\"x\":\"View Shipment #258\"}'),
(1492, 'view.shipment.259', '{\"x\":\"View Shipment #259\"}'),
(1493, 'مشاهدة.شحنة.259', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #259\"}'),
(1494, 'تم.تسليم.الشحنة.للسائق.يرجى.مراجعته', '{\"x\":\"\\u062a\\u0645 \\u062a\\u0633\\u0644\\u064a\\u0645 \\u0627\\u0644\\u0634\\u062d\\u0646\\u0629 \\u0644\\u0644\\u0633\\u0627\\u0626\\u0642\\u060c \\u064a\\u0631\\u062c\\u0649 \\u0645\\u0631\\u0627\\u062c\\u0639\\u062a\\u0647\"}'),
(1495, 'view.shipment.260', '{\"x\":\"View Shipment #260\"}'),
(1496, 'view.shipment.263', '{\"x\":\"View Shipment #263\"}'),
(1497, 'مشاهدة.شحنة.263', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #263\"}'),
(1498, 'view.shipment.262', '{\"x\":\"View Shipment #262\"}'),
(1499, 'view.shipment.264', '{\"x\":\"View Shipment #264\"}'),
(1500, 'view.shipment.261', '{\"x\":\"View Shipment #261\"}'),
(1501, 'shipping.declaration', '{\"x\":\"Shipping Declaration\"}'),
(1502, 'crbt.delivery', '{\"x\":\"CRBT delivery\"}'),
(1503, 'recipient', '{\"x\":\"Recipient\"}'),
(1504, 'barcode', '{\"x\":\"barcode\"}'),
(1505, 'sector', '{\"x\":\"Sector\"}'),
(1506, 'product', '{\"x\":\"Product\"}'),
(1507, 'bottom.return', '{\"x\":\"Bottom return\"}'),
(1508, 'cmd.number', '{\"x\":\"CMD number\"}'),
(1509, 'comment', '{\"x\":\"Comment\"}'),
(1510, 'no.content.added', '{\"x\":\"No content added\"}'),
(1511, 'view.shipment.265', '{\"x\":\"View Shipment #265\"}'),
(1512, 'payphone', '{\"x\":\"PayPhone\"}'),
(1513, 'paypal', '{\"x\":\"PayPal\"}'),
(1514, 'client.id', '{\"x\":\"Client ID\"}'),
(1515, 'kora', '{\"x\":\"Kora\"}'),
(1516, 'view.shipment.266', '{\"x\":\"View Shipment #266\"}'),
(1517, 'view.shipment.276', '{\"x\":\"View Shipment #276\"}'),
(1518, 'view.shipment.251', '{\"x\":\"View Shipment #251\"}'),
(1519, 'مشاهدة.شحنة.283', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #283\"}'),
(1520, 'مشاهدة.شحنة.260', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #260\"}'),
(1521, 'view.shipment.284', '{\"x\":\"View Shipment #284\"}'),
(1522, 'view.shipment.285', '{\"x\":\"View Shipment #285\"}'),
(1523, 'مشاهدة.شحنة.284', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #284\"}'),
(1524, 'مشاهدة.شحنة.223', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #223\"}'),
(1525, 'view.shipment.283', '{\"x\":\"View Shipment #283\"}'),
(1526, 'view.shipment.286', '{\"x\":\"View Shipment #286\"}'),
(1527, 'view.shipment.289', '{\"x\":\"View Shipment #289\"}'),
(1528, 'view.shipment.282', '{\"x\":\"View Shipment #282\"}'),
(1529, 'مشاهدة.شحنة.216', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #216\"}'),
(1530, 'view.shipment.290', '{\"x\":\"View Shipment #290\"}'),
(1531, 'view.shipment.291', '{\"x\":\"View Shipment #291\"}'),
(1532, 'view.shipment.31', '{\"x\":\"View Shipment #31\"}'),
(1533, 'sender.name', '{\"x\":\"Sender Name\"}'),
(1534, 'shipping.type', '{\"x\":\"Shipping Type\"}'),
(1535, 'product.price', '{\"x\":\"Product price\"}'),
(1536, 'مشاهدة.شحنة.238', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #238\"}'),
(1537, 'مشاهدة.شحنة.289', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #289\"}'),
(1538, 'manifest.view.4', '{\"x\":\"Manifest View #4\"}'),
(1539, 'view.shipment.322', '{\"x\":\"View Shipment #322\"}'),
(1540, 'simple.form.demo', '{\"x\":\"Simple Form Demo\"}'),
(1541, 'normal.form.demo', '{\"x\":\"Normal Form Demo\"}'),
(1542, 'click.here.to.view.simple.form.demo', '{\"x\":\"Click here to view Simple Form Demo\"}'),
(1543, 'click.here.to.view.normal.form.demo', '{\"x\":\"Click here to view Normal Form Demo\"}'),
(1544, 'click.here.to.view.simple.print.template', '{\"x\":\"Click here to view Simple Print Template\"}'),
(1545, 'click.here.to.view.advanced.print.template', '{\"x\":\"Click here to view Advanced Print Template\"}'),
(1546, 'the.tracking.number.you.entered.is.wrong.please.check.it.again.and.type.the.full.number.with.its.prefix', '{\"x\":\"The tracking number you entered is wrong, please check it again and type the full number with its prefix\"}'),
(1547, 'eg', '{\"x\":\"eg\"}'),
(1548, 'sender.origin', '{\"x\":\"SENDER \\/ ORIGIN\"}'),
(1549, 'recipient.destination', '{\"x\":\"RECIPIENT \\/ DESTINATION\"}'),
(1550, 'estimated.delivery.date', '{\"x\":\"ESTIMATED DELIVERY DATE\"}'),
(1551, 'for.delivery.package.from.branch.directly', '{\"x\":\"For delivery package from branch directly\"}'),
(1552, 'yes.if.you.need.to.return.money.from.the.receiver.to.sender.after.delivery', '{\"x\":\"Yes if you need to return money from the receiver to sender after delivery\"}'),
(1553, 'amount.that.will.be.returned.to.the.sender.from.the.receiver', '{\"x\":\"Amount that will be returned to the sender from the receiver\"}'),
(1554, 'view.shipment.323', '{\"x\":\"View Shipment #323\"}'),
(1555, 'view.shipment.324', '{\"x\":\"View Shipment #324\"}'),
(1556, 'view.shipment.325', '{\"x\":\"View Shipment #325\"}'),
(1557, 'view.shipment.326', '{\"x\":\"View Shipment #326\"}'),
(1558, 'view.shipment.327', '{\"x\":\"View Shipment #327\"}'),
(1559, 'view.shipment.328', '{\"x\":\"View Shipment #328\"}'),
(1560, 'view.shipment.329', '{\"x\":\"View Shipment #329\"}'),
(1561, 'view.shipment.330', '{\"x\":\"View Shipment #330\"}'),
(1562, 'view.shipment.331', '{\"x\":\"View Shipment #331\"}'),
(1563, 'مشاهدة.شحنة.331', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #331\"}'),
(1564, 'view.shipment.332', '{\"x\":\"View Shipment #332\"}'),
(1565, 'view.shipment.335', '{\"x\":\"View Shipment #335\"}'),
(1566, 'view.shipment.337', '{\"x\":\"View Shipment #337\"}'),
(1567, 'view.shipment.338', '{\"x\":\"View Shipment #338\"}'),
(1568, 'مشاهدة.شحنة.328', '{\"x\":\"\\u0645\\u0634\\u0627\\u0647\\u062f\\u0629 \\u0634\\u062d\\u0646\\u0629 #328\"}');

-- --------------------------------------------------------

--
-- Table structure for table `rainlab_user_mail_blockers`
--

CREATE TABLE `rainlab_user_mail_blockers` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `responsiv_currency_currencies`
--

CREATE TABLE `responsiv_currency_currencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_symbol` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `decimal_point` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thousand_separator` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_symbol_before` tinyint(1) NOT NULL DEFAULT '1',
  `with_space` tinyint(4) NOT NULL DEFAULT '0',
  `is_enabled` tinyint(1) NOT NULL DEFAULT '0',
  `is_primary` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `initbiz_money_fraction_digits` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `responsiv_currency_currencies`
--

INSERT INTO `responsiv_currency_currencies` (`id`, `name`, `currency_code`, `currency_symbol`, `decimal_point`, `thousand_separator`, `place_symbol_before`, `with_space`, `is_enabled`, `is_primary`, `created_at`, `updated_at`, `initbiz_money_fraction_digits`) VALUES
(8, 'USD', 'USD', '$', '.', ',', 1, 0, 1, 1, '2020-04-25 15:14:43', '2020-04-25 16:11:32', 2),
(19, 'Egyptian Pound', 'egp', 'ج.م.', '.', ',', 1, 1, 1, 0, '2020-06-25 18:36:15', '2020-06-25 18:36:15', 2);

-- --------------------------------------------------------

--
-- Table structure for table `responsiv_currency_exchange_converters`
--

CREATE TABLE `responsiv_currency_exchange_converters` (
  `id` int(10) UNSIGNED NOT NULL,
  `class_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refresh_interval` int(11) NOT NULL DEFAULT '24',
  `config_data` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `responsiv_currency_exchange_rates`
--

CREATE TABLE `responsiv_currency_exchange_rates` (
  `id` int(10) UNSIGNED NOT NULL,
  `from_currency` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_currency` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` decimal(15,8) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `responsiv_pay_invoices`
--

CREATE TABLE `responsiv_pay_invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `template_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `user_ip` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_addr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_id` int(10) UNSIGNED DEFAULT NULL,
  `country_id` int(10) UNSIGNED DEFAULT NULL,
  `total` decimal(15,2) NOT NULL DEFAULT '0.00',
  `subtotal` decimal(15,2) NOT NULL DEFAULT '0.00',
  `discount` decimal(15,2) NOT NULL DEFAULT '0.00',
  `tax` decimal(15,2) NOT NULL DEFAULT '0.00',
  `tax_discount` decimal(15,2) NOT NULL DEFAULT '0.00',
  `is_tax_exempt` tinyint(1) NOT NULL DEFAULT '0',
  `tax_data` text COLLATE utf8mb4_unicode_ci,
  `payment_method_id` int(10) UNSIGNED DEFAULT NULL,
  `processed_at` timestamp NULL DEFAULT NULL,
  `status_id` int(10) UNSIGNED DEFAULT NULL,
  `status_updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `sent_at` timestamp NULL DEFAULT NULL,
  `due_at` timestamp NULL DEFAULT NULL,
  `hash` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `related_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `related_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_page` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_throwaway` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `responsiv_pay_invoice_items`
--

CREATE TABLE `responsiv_pay_invoice_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `invoice_id` int(10) UNSIGNED DEFAULT NULL,
  `tax_class_id` int(10) UNSIGNED DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `price` decimal(15,2) NOT NULL DEFAULT '0.00',
  `total` decimal(15,2) NOT NULL DEFAULT '0.00',
  `discount` decimal(15,2) DEFAULT '0.00',
  `subtotal` decimal(15,2) NOT NULL DEFAULT '0.00',
  `is_tax_exempt` tinyint(1) NOT NULL DEFAULT '0',
  `tax` decimal(15,2) NOT NULL DEFAULT '0.00',
  `tax_discount` decimal(15,2) NOT NULL DEFAULT '0.00',
  `sort_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `related_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `related_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `responsiv_pay_invoice_logs`
--

CREATE TABLE `responsiv_pay_invoice_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `invoice_id` int(10) UNSIGNED DEFAULT NULL,
  `payment_method_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_success` tinyint(1) NOT NULL DEFAULT '0',
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raw_response` text COLLATE utf8mb4_unicode_ci,
  `request_data` text COLLATE utf8mb4_unicode_ci,
  `response_data` text COLLATE utf8mb4_unicode_ci,
  `admin_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `responsiv_pay_invoice_statuses`
--

CREATE TABLE `responsiv_pay_invoice_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_enabled` tinyint(1) NOT NULL DEFAULT '0',
  `notify_user` tinyint(1) NOT NULL DEFAULT '0',
  `notify_template` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `responsiv_pay_invoice_statuses`
--

INSERT INTO `responsiv_pay_invoice_statuses` (`id`, `name`, `code`, `is_enabled`, `notify_user`, `notify_template`) VALUES
(1, 'Draft', 'draft', 1, 0, NULL),
(2, 'Approved', 'approved', 1, 0, NULL),
(3, 'Paid', 'paid', 1, 0, NULL),
(4, 'Void', 'void', 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `responsiv_pay_invoice_status_logs`
--

CREATE TABLE `responsiv_pay_invoice_status_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `invoice_id` int(10) UNSIGNED DEFAULT NULL,
  `status_id` int(10) UNSIGNED DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `admin_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `responsiv_pay_invoice_templates`
--

CREATE TABLE `responsiv_pay_invoice_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_html` text COLLATE utf8mb4_unicode_ci,
  `content_css` text COLLATE utf8mb4_unicode_ci,
  `syntax_data` text COLLATE utf8mb4_unicode_ci,
  `syntax_fields` text COLLATE utf8mb4_unicode_ci,
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `responsiv_pay_invoice_templates`
--

INSERT INTO `responsiv_pay_invoice_templates` (`id`, `name`, `code`, `content_html`, `content_css`, `syntax_data`, `syntax_fields`, `is_default`, `created_at`, `updated_at`) VALUES
(1, 'Default template', 'default', NULL, NULL, '{\"company_logo\":\"http:\\/\\/octobercms.com\\/themes\\/website\\/assets\\/images\\/logo.png\",\"company_name\":\"Acme Incorporated\",\"company_address\":\"695 Shoehorn Ave\\nSweet Darling Station\\nPitt Bottom, NSW 2022\\nAustralia\",\"company_registration\":\"ABN: 45 123 456 789\",\"payment_advice\":\"Please send full amount to via any of our accepted Payment methods\"}', '{\"company_logo\":{\"label\":\"Company Logo\",\"span\":\"right\",\"default\":\"http:\\/\\/octobercms.com\\/themes\\/website\\/assets\\/images\\/logo.png\",\"type\":\"fileupload\"},\"company_name\":{\"label\":\"Company Name\",\"span\":\"left\",\"default\":\"Acme Incorporated\",\"type\":\"text\"},\"company_address\":{\"label\":\"Address details\",\"size\":\"small\",\"comment\":\"Enter the complete contact details as it should appear on the invoice\",\"default\":\"695 Shoehorn Ave\\nSweet Darling Station\\nPitt Bottom, NSW 2022\\nAustralia\",\"type\":\"textarea\"},\"company_registration\":{\"label\":\"Company Registration Number\",\"span\":\"left\",\"default\":\"ABN: 45 123 456 789\",\"type\":\"text\"},\"payment_advice\":{\"label\":\"Payment advice\",\"size\":\"small\",\"default\":\"Please send full amount to via any of our accepted Payment methods\",\"type\":\"textarea\"}}', 1, '2019-11-24 20:41:11', '2019-11-24 20:41:11');

-- --------------------------------------------------------

--
-- Table structure for table `responsiv_pay_methods`
--

CREATE TABLE `responsiv_pay_methods` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `config_data` text COLLATE utf8mb4_unicode_ci,
  `is_enabled` tinyint(1) NOT NULL DEFAULT '0',
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `responsiv_pay_methods_countries`
--

CREATE TABLE `responsiv_pay_methods_countries` (
  `payment_method_id` int(10) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `responsiv_pay_taxes`
--

CREATE TABLE `responsiv_pay_taxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `rates` mediumtext COLLATE utf8mb4_unicode_ci,
  `code` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `responsiv_pay_user_profiles`
--

CREATE TABLE `responsiv_pay_user_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `payment_method_id` int(10) UNSIGNED DEFAULT NULL,
  `vendor_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_data` text COLLATE utf8mb4_unicode_ci,
  `card_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_last_four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_primary` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci,
  `last_activity` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spot_container_customer`
--

CREATE TABLE `spot_container_customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vat_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `budget` int(11) NOT NULL,
  `street` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `postcode` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `box` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clearance` int(11) NOT NULL,
  `payment_term` int(11) NOT NULL,
  `fiscal_representation` int(11) NOT NULL,
  `storage_fee` int(11) NOT NULL,
  `cost_24` int(11) NOT NULL,
  `cost_48` int(11) NOT NULL,
  `kg_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spot_container_destination`
--

CREATE TABLE `spot_container_destination` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `desc` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spot_container_destination`
--

INSERT INTO `spot_container_destination` (`id`, `name`, `desc`) VALUES
(5, 'Spain', ''),
(6, 'germany', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `spot_container_detail`
--

CREATE TABLE `spot_container_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `license_palate` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` int(11) NOT NULL,
  `num_box` int(11) NOT NULL,
  `num_pallets` int(11) NOT NULL,
  `container_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spot_container_location`
--

CREATE TABLE `spot_container_location` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `location_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spot_container_location`
--

INSERT INTO `spot_container_location` (`id`, `name`, `location_desc`) VALUES
(1, 'Vincent Logistic', ''),
(2, 'Other..', ''),
(3, 'Depot Frex', '');

-- --------------------------------------------------------

--
-- Table structure for table `spot_container_order`
--

CREATE TABLE `spot_container_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_address_id` int(10) NOT NULL,
  `number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bol` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_type` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `destination` int(10) NOT NULL,
  `reason_for_arrive` int(11) NOT NULL,
  `t1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int(11) NOT NULL,
  `cc` int(11) NOT NULL,
  `eta_port` datetime NOT NULL,
  `eta_lgg` datetime NOT NULL,
  `loading_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `inspected_port` int(11) NOT NULL,
  `dp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested` int(10) NOT NULL DEFAULT '0',
  `barcode` int(11) NOT NULL,
  `custom_clearance` int(10) DEFAULT NULL,
  `fiscal_representation` int(10) DEFAULT NULL,
  `payment_term` int(10) DEFAULT NULL,
  `price_kg` int(10) DEFAULT NULL,
  `storage_fee` tinyint(2) DEFAULT NULL,
  `cost_24` int(10) DEFAULT NULL,
  `cost_48` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spot_container_reason`
--

CREATE TABLE `spot_container_reason` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `reason_desc` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spot_container_reason`
--

INSERT INTO `spot_container_reason` (`id`, `name`, `reason_desc`) VALUES
(1, 'Unloading', ''),
(2, 'Custom Stop', '');

-- --------------------------------------------------------

--
-- Table structure for table `spot_container_size`
--

CREATE TABLE `spot_container_size` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `size_desc` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spot_container_size`
--

INSERT INTO `spot_container_size` (`id`, `name`, `size_desc`) VALUES
(1, '20', NULL),
(2, '40', NULL),
(3, '45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `spot_container_status`
--

CREATE TABLE `spot_container_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `equal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spot_container_status`
--

INSERT INTO `spot_container_status` (`id`, `name`, `color`, `description`, `equal`) VALUES
(1, 'Blocked', 'danger', '', 1),
(2, 'Registered ', 'info', '', 2),
(3, 'loaded', 'primary', '', 3),
(4, 'Released', 'success', '', 4),
(8, 'Saved..', 'brand', '', 100),
(9, 'Pending', 'warning', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `spot_shipment_activity`
--

CREATE TABLE `spot_shipment_activity` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `description` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `lat` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lng` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spot_shipment_address`
--

CREATE TABLE `spot_shipment_address` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `county` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lng` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci,
  `default` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spot_shipment_area`
--

CREATE TABLE `spot_shipment_area` (
  `id` int(10) UNSIGNED NOT NULL,
  `city_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spot_shipment_area`
--

INSERT INTO `spot_shipment_area` (`id`, `city_id`, `name`) VALUES
(3, 3, 'Abobo'),
(4, 3, 'Adjamé'),
(5, 3, 'Williamsville'),
(6, 3, 'Yopougon'),
(7, 3, 'Île Boulay'),
(8, 3, 'Le Plateau'),
(9, 3, 'Attécoubé'),
(10, 3, 'Lokodjro'),
(11, 3, 'Blokosso'),
(12, 3, 'Koumassi'),
(13, 3, 'Marcory'),
(14, 3, 'Biétry et Zone 4'),
(15, 3, 'Port-Bouët'),
(16, 3, 'Vridi'),
(17, 3, 'Treichville'),
(18, 3, 'Anyama'),
(19, 3, 'Bingerville'),
(20, 3, 'Songon'),
(21, 3, 'Brofodoumé'),
(22, 49, 'prapatan'),
(23, 50, 'Delmas'),
(24, 55, 'dlf ph-4');

-- --------------------------------------------------------

--
-- Table structure for table `spot_shipment_break`
--

CREATE TABLE `spot_shipment_break` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `break_desc` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spot_shipment_break`
--

INSERT INTO `spot_shipment_break` (`id`, `name`, `break_desc`) VALUES
(1, 'Breakdown in progress', 'test'),
(2, 'Breakdown in finished', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `spot_shipment_car`
--

CREATE TABLE `spot_shipment_car` (
  `id` int(10) UNSIGNED NOT NULL,
  `license_plate` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination_id` int(10) DEFAULT NULL,
  `transport_id` int(10) DEFAULT NULL,
  `transport_date` date DEFAULT NULL,
  `enable` smallint(6) NOT NULL DEFAULT '1',
  `driver_id` int(11) DEFAULT NULL,
  `responsible_id` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spot_shipment_car`
--

INSERT INTO `spot_shipment_car` (`id`, `license_plate`, `name`, `destination_id`, `transport_id`, `transport_date`, `enable`, `driver_id`, `responsible_id`, `description`) VALUES
(4, '564213-n42', 'KIA', 5, 1, '2020-05-31', 1, NULL, NULL, NULL),
(5, '12369-n64', 'PWM', 6, 2, '2020-05-31', 1, 118, 118, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `spot_shipment_category`
--

CREATE TABLE `spot_shipment_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spot_shipment_category`
--

INSERT INTO `spot_shipment_category` (`id`, `name`, `description`) VALUES
(1, 'Clothes', NULL),
(5, 'Camaras', NULL),
(22, 'Shoes', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `spot_shipment_city`
--

CREATE TABLE `spot_shipment_city` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spot_shipment_city`
--

INSERT INTO `spot_shipment_city` (`id`, `country_id`, `state_id`, `name`) VALUES
(3, 0, 694, 'Sidi Beshr'),
(44, 0, 695, 'Naser City'),
(45, 0, 696, 'Tirane'),
(46, 0, 696, 'Durres'),
(47, 261, 697, 'IRBID'),
(48, 0, 698, 'Ilupeju'),
(49, 0, 699, 'mampang'),
(50, 0, 700, 'Port-au-Prince'),
(51, 261, 702, 'Amman'),
(52, 267, 704, 'Mansoura'),
(53, 268, 705, 'Khartoum'),
(54, 268, 705, 'Bahri'),
(55, 269, 706, 'gurgaon');

-- --------------------------------------------------------

--
-- Table structure for table `spot_shipment_courier`
--

CREATE TABLE `spot_shipment_courier` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spot_shipment_courier`
--

INSERT INTO `spot_shipment_courier` (`id`, `name`, `address`, `phone`) VALUES
(2, 'Fedex', NULL, NULL),
(3, 'DHL', NULL, NULL),
(4, 'AMPak', NULL, NULL),
(5, 'xpressbee', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `spot_shipment_delivery_time`
--

CREATE TABLE `spot_shipment_delivery_time` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spot_shipment_delivery_time`
--

INSERT INTO `spot_shipment_delivery_time` (`id`, `name`, `count`) VALUES
(1, '1 Day', 24),
(2, '4-2 days', 48),
(3, 'time1', 6);

-- --------------------------------------------------------

--
-- Table structure for table `spot_shipment_employee_order`
--

CREATE TABLE `spot_shipment_employee_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spot_shipment_fees`
--

CREATE TABLE `spot_shipment_fees` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` int(11) NOT NULL,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `pickup_cost` decimal(10,0) DEFAULT NULL,
  `delivery_cost` decimal(10,0) DEFAULT NULL,
  `delivery_cost_back_sender` decimal(10,0) DEFAULT NULL,
  `delivery_cost_back_receiver` decimal(10,0) DEFAULT NULL,
  `back_cost_without_delivery_cost` decimal(10,0) DEFAULT NULL,
  `back_cost_sender` decimal(10,0) DEFAULT NULL,
  `back_cost_receiver` decimal(10,0) DEFAULT NULL,
  `partial_back_cost` decimal(10,0) DEFAULT NULL,
  `packaging` smallint(6) DEFAULT NULL,
  `packaging_fees` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spot_shipment_fees`
--

INSERT INTO `spot_shipment_fees` (`id`, `type`, `from`, `to`, `pickup_cost`, `delivery_cost`, `delivery_cost_back_sender`, `delivery_cost_back_receiver`, `back_cost_without_delivery_cost`, `back_cost_sender`, `back_cost_receiver`, `partial_back_cost`, `packaging`, `packaging_fees`) VALUES
(1, 3, 45, 46, '2', '15', '5', '0', NULL, NULL, NULL, NULL, 1, '{\"5\":\"15.00\",\"6\":\"20.00\",\"7\":\"30.00\",\"8\":\"40.00\",\"9\":\"50.00\"}'),
(2, 1, 259, 257, '2', '10', '5', '0', NULL, NULL, NULL, NULL, 0, '{\"5\":\"0.00\",\"6\":\"0.00\",\"7\":\"0.00\",\"8\":\"0.00\",\"9\":\"0.00\"}'),
(3, 3, 55, 55, '2', '10', '5', '0', NULL, NULL, NULL, NULL, 1, '{\"5\":\"0.00\",\"6\":\"0.00\",\"7\":\"0.00\",\"8\":\"0.00\",\"9\":\"0.00\",\"10\":\"0.00\"}');

-- --------------------------------------------------------

--
-- Table structure for table `spot_shipment_handler`
--

CREATE TABLE `spot_shipment_handler` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `handler_desc` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spot_shipment_handler`
--

INSERT INTO `spot_shipment_handler` (`id`, `name`, `handler_desc`) VALUES
(1, 'Swiss', 'test'),
(2, 'Avia', 'test'),
(3, 'BAS', 'test'),
(4, 'Lachs', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `spot_shipment_history`
--

CREATE TABLE `spot_shipment_history` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `assigned_id` int(10) DEFAULT NULL,
  `status_id` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `spot_shipment_item`
--

CREATE TABLE `spot_shipment_item` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `weight` int(11) DEFAULT NULL,
  `num_boxes` int(10) DEFAULT NULL,
  `num_pallets` int(10) DEFAULT NULL,
  `length` int(11) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spot_shipment_label`
--

CREATE TABLE `spot_shipment_label` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `label_desc` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spot_shipment_label`
--

INSERT INTO `spot_shipment_label` (`id`, `name`, `label_desc`) VALUES
(1, 'Yusuf', ''),
(2, 'BeCargo', 'test'),
(3, 'Frau', 'test'),
(4, 'Voltoo', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `spot_shipment_manifest`
--

CREATE TABLE `spot_shipment_manifest` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `car_id` int(11) DEFAULT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `areas` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spot_shipment_mode`
--

CREATE TABLE `spot_shipment_mode` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spot_shipment_mode`
--

INSERT INTO `spot_shipment_mode` (`id`, `name`, `description`) VALUES
(1, '20 Ft Trailer', NULL),
(2, '40 Ft Trailer', NULL),
(3, 'Closed Van', NULL),
(4, 'By Air', NULL),
(5, 'By Sea', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `spot_shipment_notes`
--

CREATE TABLE `spot_shipment_notes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_type` smallint(6) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spot_shipment_office`
--

CREATE TABLE `spot_shipment_office` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` text COLLATE utf8mb4_unicode_ci,
  `county` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lng` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manger_id` int(11) DEFAULT NULL,
  `responsible_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spot_shipment_office`
--

INSERT INTO `spot_shipment_office` (`id`, `name`, `code`, `street`, `county`, `city`, `state`, `zipcode`, `country`, `lat`, `lng`, `url`, `phone`, `mobile`, `mobile_2`, `mobile_3`, `manger_id`, `responsible_id`) VALUES
(1, 'Main Branch', 'MAIN', 'Business Bay Metropolis Tower', NULL, '22', '653', NULL, '253', '25.1849235', '55.2769027', 'https://maps.google.com/?q=The+Metropolis+Tower&amp;ftid=0x3e5f68319169f881:0x69266793dd38e629', '212323131', '+201008115423', '32131313133', '32123131313131', NULL, 1),
(2, 'main2', '202', 'Sharjah - United Arab Emiraes', NULL, NULL, NULL, NULL, NULL, '', '', '', '010206545045', '010211022000', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `spot_shipment_order`
--

CREATE TABLE `spot_shipment_order` (
  `id` int(11) NOT NULL,
  `office_id` int(11) DEFAULT NULL,
  `number` int(50) NOT NULL,
  `type` smallint(6) NOT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `sender_address_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `receiver_address_id` int(11) DEFAULT NULL,
  `sender_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sender_mobile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sender_city` int(10) DEFAULT NULL,
  `sender_sector` int(10) DEFAULT NULL,
  `sender_addr` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receiver_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receiver_mobile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receiver_city` int(10) DEFAULT NULL,
  `receiver_sector` int(10) DEFAULT NULL,
  `receiver_addr` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `packaging_id` int(11) DEFAULT NULL,
  `ship_date` date DEFAULT NULL,
  `receive_date` date DEFAULT NULL,
  `courier_id` int(11) DEFAULT NULL,
  `delivery_time_id` int(11) DEFAULT NULL,
  `delivery_date` date DEFAULT NULL,
  `mode_id` int(11) DEFAULT NULL,
  `status_id` int(11) NOT NULL,
  `tax` int(11) DEFAULT NULL,
  `insurance` int(11) DEFAULT NULL,
  `currency_id` int(11) DEFAULT NULL,
  `payment_type` smallint(6) DEFAULT NULL,
  `customs_value` decimal(10,2) DEFAULT NULL,
  `courier_fee` decimal(10,2) DEFAULT NULL,
  `package_fee` decimal(10,2) DEFAULT NULL,
  `return_package_fee` smallint(6) DEFAULT NULL,
  `return_courier_fee` decimal(10,2) DEFAULT NULL,
  `return_defray` smallint(6) DEFAULT NULL,
  `manifest_id` int(11) DEFAULT NULL,
  `channel` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'backend',
  `assigned_id` int(11) DEFAULT NULL,
  `requested` int(11) DEFAULT '0',
  `barcode` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `esign` text COLLATE utf8mb4_unicode_ci,
  `postponed` tinyint(1) DEFAULT NULL,
  `delivered_by` int(11) DEFAULT NULL,
  `delivered_responsiable` int(11) DEFAULT NULL,
  `received_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `airWayBill` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cc` tinyint(2) DEFAULT NULL,
  `transfer_jost` tinyint(2) DEFAULT NULL,
  `label_id` int(10) DEFAULT NULL,
  `handler_id` int(10) DEFAULT NULL,
  `breakdown_id` int(10) DEFAULT NULL,
  `preAlert_received` timestamp NULL DEFAULT NULL,
  `releasedNote_received` timestamp NULL DEFAULT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci,
  `released_note` text COLLATE utf8mb4_unicode_ci,
  `custom_clearance` int(10) DEFAULT NULL,
  `fiscal_representation` int(10) DEFAULT NULL,
  `payment_term` int(10) DEFAULT NULL,
  `price_kg` int(10) DEFAULT NULL,
  `storage_fee` tinyint(2) DEFAULT NULL,
  `cost_24` int(10) DEFAULT NULL,
  `cost_48` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spot_shipment_packaging`
--

CREATE TABLE `spot_shipment_packaging` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spot_shipment_packaging`
--

INSERT INTO `spot_shipment_packaging` (`id`, `name`, `description`) VALUES
(5, 'Less than 1 kg', NULL),
(6, '1 - 10 Kg', NULL),
(7, '10 - 20 Kgs', NULL),
(8, '20 - 50 Kgs', NULL),
(9, 'Above 50 Kgs', NULL),
(10, 'above 5556', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `spot_shipment_payment`
--

CREATE TABLE `spot_shipment_payment` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` int(11) NOT NULL,
  `for_id` int(11) DEFAULT NULL,
  `movement` int(11) NOT NULL,
  `other` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `amount` decimal(10,2) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `date` date NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `payment_type` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_with` int(11) DEFAULT NULL,
  `payment_method` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `treasury_id` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `spot_shipment_status`
--

CREATE TABLE `spot_shipment_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `color` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spot_shipment_status`
--

INSERT INTO `spot_shipment_status` (`id`, `name`, `description`, `color`, `equal`) VALUES
(19, 'Pending', '', 'warning', 0),
(20, 'Saved', '', 'dark', 100),
(21, 'Approved', '', 'brand', 1),
(22, 'Refused', '', 'danger', 2),
(23, 'Received', '', 'info', 9),
(24, 'Delivered to driver', '', 'brand', 3),
(25, 'Delivered to receiver', '', 'success', 4),
(26, 'Return request', '', 'warning', 5),
(27, 'Delivery of discards to the driver', '', 'brand', 6),
(30, 'Transit to return', '', 'warning', 8),
(31, 'Supplied in stock', '', 'info', 7),
(32, 'Registered', '', 'info', 10),
(33, 'Fully Loaded', '', 'success', 16),
(34, 'Destroyed', '', 'warning', 17),
(35, 'Exported', '', 'brand', 18),
(36, 'Blocked', '', 'danger', 15),
(42, 'Loaded', '', 'brand', 11);

-- --------------------------------------------------------

--
-- Table structure for table `spot_shipment_task`
--

CREATE TABLE `spot_shipment_task` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `due_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spot_shipment_tracking`
--

CREATE TABLE `spot_shipment_tracking` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `lat` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lng` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spot_shipment_treasury`
--

CREATE TABLE `spot_shipment_treasury` (
  `id` int(10) UNSIGNED NOT NULL,
  `default` smallint(6) NOT NULL DEFAULT '0',
  `office_id` int(11) DEFAULT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` decimal(11,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spot_shipment_treasury`
--

INSERT INTO `spot_shipment_treasury` (`id`, `default`, `office_id`, `name`, `balance`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 1, 1, 'Main Treasury', '2176.00', '2020-03-07 11:17:18', '2020-06-28 22:39:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `spot_userpermissions_group_permission`
--

CREATE TABLE `spot_userpermissions_group_permission` (
  `group_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `permission_state` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spot_userpermissions_group_permission`
--

INSERT INTO `spot_userpermissions_group_permission` (`group_id`, `permission_id`, `permission_state`, `created_at`, `updated_at`) VALUES
(1, 1, 'cr', '2020-02-11 22:27:31', '2020-03-07 11:35:22'),
(1, 2, 'crud', '2020-02-11 22:27:31', '2020-03-07 11:35:22'),
(1, 3, 'crud', '2020-02-11 22:27:31', '2020-03-07 11:35:22'),
(1, 4, 'crud', '2020-02-11 22:27:31', '2020-03-07 11:35:22'),
(1, 5, 'crud', '2020-02-11 22:27:31', '2020-03-07 11:35:22'),
(1, 6, 'crud', '2020-02-11 22:27:31', '2020-03-07 11:35:22'),
(1, 7, 'crud', '2020-02-11 22:27:31', '2020-03-07 11:35:22'),
(1, 8, 'crud', '2020-02-11 22:27:31', '2020-03-07 11:35:22'),
(1, 9, 'crud', '2020-02-11 22:27:31', '2020-03-07 11:35:22'),
(1, 10, 'crud', '2020-02-11 22:27:31', '2020-03-07 11:35:22'),
(1, 11, 'crud', '2020-02-11 22:27:31', '2020-03-07 11:35:22'),
(1, 12, 'crud', '2020-02-11 22:27:31', '2020-03-07 11:35:22'),
(1, 13, 'crud', '2020-02-11 22:27:31', '2020-03-07 11:35:22'),
(1, 14, 'crud', '2020-02-11 22:27:31', '2020-03-07 11:35:22'),
(1, 15, 'crud', '2020-02-11 22:27:31', '2020-03-07 11:35:22'),
(1, 16, 'crud', '2020-02-11 22:27:31', '2020-03-07 11:35:22'),
(1, 17, 'crud', '2020-02-11 22:27:31', '2020-03-07 11:35:22'),
(1, 18, 'crud', '2020-02-11 22:27:31', '2020-03-07 11:35:22'),
(1, 19, 'crud', '2020-02-11 22:27:31', '2020-03-07 11:35:22'),
(1, 20, 'crud', '2020-02-11 22:27:31', '2020-03-07 11:35:22'),
(1, 21, 'crud', '2020-02-11 22:27:31', '2020-03-07 11:35:22'),
(1, 22, 'crud', '2020-02-11 22:27:31', '2020-03-07 11:35:22'),
(1, 23, 'crud', '2020-02-11 22:27:31', '2020-03-07 11:35:22'),
(1, 24, 'crud', '2020-02-11 22:27:31', '2020-03-07 11:35:22'),
(1, 25, 'crud', '2020-02-11 22:27:31', '2020-03-07 11:35:22'),
(1, 26, 'crud', '2020-02-11 22:27:31', '2020-03-07 11:35:22'),
(1, 27, 'crud', '2020-02-11 22:27:31', '2020-03-07 11:35:22'),
(2, 1, 'ru', '2020-03-08 00:37:40', '2020-04-25 16:27:06'),
(2, 2, NULL, '2020-03-08 00:37:40', '2020-04-25 16:27:06'),
(2, 3, 'ru', '2020-03-08 00:37:40', '2020-04-25 16:27:06'),
(2, 4, NULL, '2020-03-08 00:37:40', '2020-04-25 16:27:06'),
(2, 5, NULL, '2020-03-08 00:37:40', '2020-04-25 16:27:06'),
(2, 6, NULL, '2020-03-08 00:37:40', '2020-04-25 16:27:06'),
(2, 7, NULL, '2020-03-08 00:37:40', '2020-04-25 16:27:06'),
(2, 8, NULL, '2020-03-08 00:37:40', '2020-04-25 16:27:06'),
(2, 9, NULL, '2020-03-08 00:37:40', '2020-04-25 16:27:06'),
(2, 10, 'ru', '2020-03-08 00:37:40', '2020-04-25 16:27:06'),
(2, 11, 'r', '2020-03-08 00:37:40', '2020-04-25 16:27:06'),
(2, 12, 'r', '2020-03-08 00:37:40', '2020-04-25 16:27:06'),
(2, 13, 'r', '2020-03-08 00:37:40', '2020-04-25 16:27:06'),
(2, 14, 'r', '2020-03-08 00:37:40', '2020-04-25 16:27:06'),
(2, 15, 'r', '2020-03-08 00:37:40', '2020-04-25 16:27:06'),
(2, 16, 'r', '2020-03-08 00:37:40', '2020-04-25 16:27:06'),
(2, 17, 'r', '2020-03-08 00:37:40', '2020-04-25 16:27:06'),
(2, 18, 'r', '2020-03-08 00:37:40', '2020-04-25 16:27:06'),
(2, 19, 'ru', '2020-03-08 00:37:40', '2020-04-25 16:27:06'),
(2, 20, 'r', '2020-03-08 00:37:40', '2020-04-25 16:27:06'),
(2, 21, NULL, '2020-03-08 00:37:40', '2020-04-25 16:27:06'),
(2, 22, 'cru', '2020-03-08 00:37:40', '2020-04-25 16:27:06'),
(2, 23, 'r', '2020-03-08 00:37:40', '2020-04-25 16:27:06'),
(2, 24, 'r', '2020-03-08 00:37:40', '2020-04-25 16:27:06'),
(2, 25, 'r', '2020-03-08 00:37:40', '2020-04-25 16:27:06'),
(2, 26, 'r', '2020-03-08 00:37:40', '2020-04-25 16:27:06'),
(2, 27, 'r', '2020-03-08 00:37:40', '2020-04-25 16:27:06'),
(3, 1, 'crud', '2020-04-17 14:05:53', '2020-06-08 06:56:30'),
(3, 2, 'crud', '2020-04-17 14:05:53', '2020-06-08 06:56:30'),
(3, 3, 'crud', '2020-04-17 14:05:53', '2020-06-08 06:56:30'),
(3, 4, 'crud', '2020-04-17 14:05:53', '2020-06-08 06:56:30'),
(3, 5, 'crud', '2020-04-17 14:05:53', '2020-06-08 06:56:30'),
(3, 6, 'crud', '2020-04-17 14:05:53', '2020-06-08 06:56:30'),
(3, 7, 'crud', '2020-04-17 14:05:53', '2020-06-08 06:56:30'),
(3, 8, 'crud', '2020-04-17 14:05:53', '2020-06-08 06:56:30'),
(3, 9, 'crud', '2020-04-17 14:05:53', '2020-06-08 06:56:30'),
(3, 10, 'crud', '2020-04-17 14:05:53', '2020-06-08 06:56:30'),
(3, 11, 'crud', '2020-04-17 14:05:53', '2020-06-08 06:56:30'),
(3, 12, 'crud', '2020-04-17 14:05:53', '2020-06-08 06:56:30'),
(3, 13, 'crud', '2020-04-17 14:05:53', '2020-06-08 06:56:30'),
(3, 14, 'crud', '2020-04-17 14:05:53', '2020-06-08 06:56:30'),
(3, 15, 'crud', '2020-04-17 14:05:53', '2020-06-08 06:56:30'),
(3, 16, 'crud', '2020-04-17 14:05:53', '2020-06-08 06:56:30'),
(3, 17, 'crud', '2020-04-17 14:05:53', '2020-06-08 06:56:30'),
(3, 18, 'crud', '2020-04-17 14:05:53', '2020-06-08 06:56:30'),
(3, 19, 'crud', '2020-04-17 14:05:53', '2020-06-08 06:56:30'),
(3, 20, 'crud', '2020-04-17 14:05:53', '2020-06-08 06:56:30'),
(3, 21, 'crud', '2020-04-17 14:05:53', '2020-06-08 06:56:30'),
(3, 22, 'crud', '2020-04-17 14:05:53', '2020-06-08 06:56:30'),
(3, 23, 'crud', '2020-04-17 14:05:53', '2020-06-08 06:56:30'),
(3, 24, 'crud', '2020-04-17 14:05:53', '2020-06-08 06:56:30'),
(3, 25, 'crud', '2020-04-17 14:05:53', '2020-06-08 06:56:30'),
(3, 26, 'crud', '2020-04-17 14:05:53', '2020-06-08 06:56:30'),
(3, 27, 'crud', '2020-04-17 14:05:53', '2020-06-08 06:56:30'),
(4, 1, 'cru', '2020-04-17 14:09:23', '2020-04-25 16:27:11'),
(4, 2, 'cru', '2020-04-17 14:09:23', '2020-04-25 16:27:11'),
(4, 3, 'cru', '2020-04-17 14:09:23', '2020-04-25 16:27:11'),
(4, 4, 'r', '2020-04-17 14:09:23', '2020-04-25 16:27:11'),
(4, 5, 'crud', '2020-04-17 14:09:23', '2020-04-25 16:27:11'),
(4, 6, 'crud', '2020-04-17 14:09:23', '2020-04-25 16:27:11'),
(4, 7, 'crud', '2020-04-17 14:09:23', '2020-04-25 16:27:11'),
(4, 8, 'crud', '2020-04-17 14:09:23', '2020-04-25 16:27:11'),
(4, 9, 'crud', '2020-04-17 14:09:23', '2020-04-25 16:27:11'),
(4, 10, 'cru', '2020-04-17 14:09:23', '2020-04-25 16:27:11'),
(4, 11, 'ru', '2020-04-17 14:09:23', '2020-04-25 16:27:11'),
(4, 12, 'crud', '2020-04-17 14:09:23', '2020-04-25 16:27:11'),
(4, 13, 'r', '2020-04-17 14:09:23', '2020-04-25 16:27:11'),
(4, 14, 'crud', '2020-04-17 14:09:23', '2020-04-25 16:27:11'),
(4, 15, 'crud', '2020-04-17 14:09:23', '2020-04-25 16:27:11'),
(4, 16, 'crud', '2020-04-17 14:09:23', '2020-04-25 16:27:11'),
(4, 17, 'crud', '2020-04-17 14:09:23', '2020-04-25 16:27:11'),
(4, 18, 'crud', '2020-04-17 14:09:23', '2020-04-25 16:27:11'),
(4, 19, 'crud', '2020-04-17 14:09:23', '2020-04-25 16:27:11'),
(4, 20, 'crud', '2020-04-17 14:09:23', '2020-04-25 16:27:11'),
(4, 21, 'crud', '2020-04-17 14:09:23', '2020-04-25 16:27:11'),
(4, 22, 'crud', '2020-04-17 14:09:23', '2020-04-25 16:27:11'),
(4, 23, 'crud', '2020-04-17 14:09:23', '2020-04-25 16:27:11'),
(4, 24, 'crud', '2020-04-17 14:09:23', '2020-04-25 16:27:11'),
(4, 25, 'crud', '2020-04-17 14:09:23', '2020-04-25 16:27:11'),
(4, 26, 'crud', '2020-04-17 14:09:23', '2020-04-25 16:27:11'),
(4, 27, 'crud', '2020-04-17 14:09:23', '2020-04-25 16:27:11'),
(5, 1, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 2, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 3, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 4, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 5, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 6, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 7, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 8, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 9, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 10, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 11, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 12, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 13, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 14, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 15, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 16, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 17, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 18, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 19, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 20, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 21, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 22, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 23, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 24, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 25, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 26, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 27, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 28, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 29, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 30, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 31, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 32, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(5, 33, 'ru', '2020-05-25 07:05:53', '2020-05-25 07:05:53'),
(6, 1, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 2, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 3, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 4, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 5, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 6, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 7, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 8, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 9, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 10, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 11, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 12, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 13, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 14, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 15, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 16, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 17, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 18, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 19, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 20, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 21, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 22, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 23, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 24, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 25, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 26, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 27, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 28, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 29, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 30, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 31, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 32, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 33, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 34, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 35, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30'),
(6, 36, 'crud', '2020-06-15 07:53:30', '2020-06-15 07:53:30');

-- --------------------------------------------------------

--
-- Table structure for table `spot_userpermissions_permissions`
--

CREATE TABLE `spot_userpermissions_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'crud'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spot_userpermissions_permissions`
--

INSERT INTO `spot_userpermissions_permissions` (`id`, `code`, `name`, `description`, `created_at`, `updated_at`, `type`) VALUES
(1, 'order', 'Workorder', 'Ability to manage the work orders', '2019-11-24 08:42:01', '2019-11-24 08:42:01', 'crud'),
(2, 'setting', 'Setting', 'Ability to manage system configuration', '2019-11-24 08:42:01', '2019-11-24 08:42:01', 'crud'),
(3, 'languages', 'Languages', 'Ability to manage lanaguages', '2019-11-24 08:42:01', '2019-11-24 08:42:01', 'crud'),
(4, 'departments', 'Departments', 'Ability to manage departments/groups', '2019-11-24 08:42:01', '2019-11-24 08:42:01', 'crud'),
(5, 'employees', 'Employees', 'Ability to manage employees', '2019-11-24 08:42:01', '2019-11-24 08:42:01', 'crud'),
(6, 'backups', 'Backups', 'Ability to manage backups', '2019-11-24 08:42:01', '2019-11-24 08:42:01', 'crud'),
(7, 'manifest', 'Manifest', 'Ability to manage manifest', '2019-11-24 08:42:01', '2019-11-24 08:42:01', 'crud'),
(8, 'assign', 'Assign', 'Ability to assign employees and drivers to orders', '2019-11-24 08:42:01', '2019-11-24 08:42:01', 'crud'),
(9, 'client', 'Client', 'Ability to manage clients', '2019-11-24 08:42:01', '2019-11-24 08:42:01', 'crud'),
(10, 'statuses', 'Statuses', 'Ability to manage statuses', '2019-11-24 08:42:01', '2019-11-24 08:42:01', 'crud'),
(11, 'areas', 'Areas', 'Ability to manage areas', '2019-11-24 08:42:01', '2019-11-24 08:42:01', 'crud'),
(12, 'fees', 'Fees', 'Ability to manage fees', '2019-11-24 08:42:01', '2019-11-24 08:42:01', 'crud'),
(13, 'currencies', 'Currencies', 'Ability to manage currencies', '2019-11-24 08:42:01', '2019-11-24 08:42:01', 'crud'),
(14, 'packaging', 'Packaging', 'Ability to manage packaging', '2019-11-24 08:42:01', '2019-11-24 08:42:01', 'crud'),
(15, 'countries', 'Countries', 'Ability to manage countries', '2019-11-24 08:42:01', '2019-11-24 08:42:01', 'crud'),
(16, 'states', 'States', 'Ability to manage states', '2019-11-24 08:42:01', '2019-11-24 08:42:01', 'crud'),
(17, 'cities', 'Cities', 'Ability to manage cities', '2019-11-24 08:42:01', '2019-11-24 08:42:01', 'crud'),
(18, 'branches', 'Branches', 'Ability to manage branches', '2019-11-24 08:42:01', '2019-11-24 08:42:01', 'crud'),
(19, 'cars', 'Cars', 'Ability to manage cars', '2019-11-24 08:42:01', '2019-11-24 08:42:01', 'crud'),
(20, 'transaction', 'Transactions', 'Ability to manage transactions', '2019-11-24 08:42:01', '2019-11-24 08:42:01', 'crud'),
(21, 'report', 'Reports', 'Ability to manage reports', '2019-11-24 08:42:01', '2019-11-24 08:42:01', 'crud'),
(22, 'message', 'Messages', 'Ability to manage client messages', '2019-11-24 08:42:01', '2019-11-24 08:42:01', 'crud'),
(23, 'category', 'Category', 'Ability to manage products categories', '2019-11-24 08:42:01', '2019-11-24 08:42:01', 'crud'),
(24, 'couriers', 'Couriers', 'Ability to manage couriers', '2019-11-24 08:42:01', '2019-11-24 08:42:01', 'crud'),
(25, 'shipping', 'Shipping', 'Ability to manage shipping modes', '2019-11-24 08:42:01', '2019-11-24 08:42:01', 'crud'),
(26, 'treasury', 'Treasury', 'Ability to manage treasury', '2019-11-24 08:42:01', '2019-11-24 08:42:01', 'crud'),
(27, 'deliverytimes', 'Delivery Times', 'Ability to manage delivery times', '2019-11-24 08:42:01', '2019-11-24 08:42:01', 'crud'),
(28, 'container', 'Container', 'Ability to manage containers', '2020-05-20 16:51:11', '2020-05-20 16:51:11', 'crud'),
(29, 'destination', 'Destination', 'Ability to manage destination', '2020-05-21 18:39:12', '2020-05-21 18:39:12', 'crud'),
(30, 'location', 'Location', 'ability to manage location', '2020-05-21 18:40:18', '2020-05-21 18:40:18', 'crud'),
(31, 'size', 'Size', 'Ability to manage Size', '2020-05-21 18:41:02', '2020-05-21 18:41:02', 'crud'),
(32, 'reasonarrival', 'Reason of Arrival', 'Ability to manage reason of arrival', '2020-05-21 18:42:09', '2020-05-21 18:42:09', 'crud'),
(33, 'statuscontainer', 'Status Container', 'Ability to manage status container', '2020-05-21 18:43:59', '2020-05-21 18:43:59', 'crud'),
(34, 'labels', 'Labels', 'Ability to manage Labels', '2020-05-31 10:51:12', '2020-05-31 10:51:12', 'crud'),
(35, 'handler', 'Ground Handler', 'Ability to manage Ground Handler', '2020-05-31 10:52:31', '2020-05-31 10:53:41', 'crud'),
(36, 'break', 'Breakdown', 'Ability to manage Breakdown', '2020-05-31 10:53:22', '2020-05-31 10:53:22', 'crud');

-- --------------------------------------------------------

--
-- Table structure for table `spot_userpermissions_user_permission`
--

CREATE TABLE `spot_userpermissions_user_permission` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `permission_state` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spot_userpermissions_user_permission`
--

INSERT INTO `spot_userpermissions_user_permission` (`user_id`, `permission_id`, `permission_state`, `created_at`, `updated_at`) VALUES
(1, 1, 'crud', '2019-11-24 20:42:01', '2020-02-12 11:59:24'),
(1, 2, 'crud', '2019-11-24 20:42:01', '2020-02-12 11:59:24'),
(1, 3, 'crud', '2019-11-24 20:42:01', '2020-02-12 11:59:24'),
(1, 4, 'crud', '2019-11-24 20:42:01', '2020-02-12 11:59:24'),
(1, 5, 'crud', '2019-11-24 20:42:01', '2020-02-12 11:59:24'),
(1, 6, 'crud', '2019-11-24 20:42:01', '2020-02-12 11:59:24'),
(1, 7, 'crud', '2019-11-24 20:42:01', '2020-02-12 11:59:24'),
(1, 8, 'crud', '2019-11-24 20:42:01', '2020-02-12 11:59:24'),
(1, 9, 'crud', '2019-11-24 20:42:01', '2020-02-12 11:59:24'),
(1, 10, 'crud', '2019-11-24 20:42:01', '2020-02-12 11:59:24'),
(1, 11, 'crud', '2019-11-24 20:42:01', '2020-02-12 11:59:24'),
(1, 12, 'crud', '2019-11-24 20:42:01', '2020-02-12 11:59:24'),
(1, 13, 'crud', '2019-11-24 20:42:01', '2020-02-12 11:59:24'),
(1, 14, 'crud', '2019-11-24 20:42:01', '2020-02-12 11:59:24'),
(1, 15, 'crud', '2019-11-24 20:42:01', '2020-02-12 11:59:24'),
(1, 16, 'crud', '2019-11-24 20:42:01', '2020-02-12 11:59:24'),
(1, 17, 'crud', '2019-11-24 20:42:01', '2020-02-12 11:59:24'),
(1, 18, 'crud', '2019-11-24 20:42:01', '2020-02-12 11:59:24'),
(1, 19, 'crud', '2019-11-24 20:42:01', '2020-02-12 11:59:24'),
(1, 20, 'crud', '2019-11-24 20:42:01', '2020-02-12 11:59:24'),
(1, 21, 'crud', '2019-11-24 20:42:01', '2020-02-12 11:59:24'),
(1, 22, 'crud', '2019-11-24 20:42:01', '2020-02-12 11:59:24'),
(1, 23, 'crud', '2019-11-24 20:42:01', '2020-02-12 11:59:24'),
(1, 24, 'crud', '2019-11-24 20:42:01', '2020-02-12 11:59:24'),
(1, 25, 'crud', '2019-11-24 20:42:01', '2020-02-12 11:59:24'),
(1, 26, 'crud', '2019-11-24 20:42:01', '2020-02-12 11:59:24'),
(1, 27, 'crud', '2019-11-24 20:42:01', '2020-02-12 11:59:24'),
(1, 28, 'crud', '2020-05-20 16:51:11', '2020-05-20 16:51:11'),
(1, 29, 'crud', '2020-05-21 18:39:12', '2020-05-21 18:39:12'),
(1, 30, 'crud', '2020-05-21 18:40:18', '2020-05-21 18:40:18'),
(1, 31, 'crud', '2020-05-21 18:41:02', '2020-05-21 18:41:02'),
(1, 32, 'crud', '2020-05-21 18:42:09', '2020-05-21 18:42:09'),
(1, 33, 'crud', '2020-05-21 18:43:59', '2020-05-21 18:43:59'),
(1, 34, 'crud', '2020-05-31 10:51:13', '2020-05-31 10:51:13'),
(1, 35, 'crud', '2020-05-31 10:52:31', '2020-05-31 10:52:31'),
(1, 36, 'crud', '2020-05-31 10:53:22', '2020-05-31 10:53:22'),
(8, 1, 'crud', '2020-03-08 00:42:08', '2020-03-14 02:07:07'),
(8, 2, NULL, '2020-03-08 00:42:08', '2020-03-14 02:07:07'),
(8, 3, NULL, '2020-03-08 00:42:08', '2020-03-14 02:07:07'),
(8, 4, NULL, '2020-03-08 00:42:08', '2020-03-14 02:07:07'),
(8, 5, NULL, '2020-03-08 00:42:08', '2020-03-14 02:07:07'),
(8, 6, NULL, '2020-03-08 00:42:08', '2020-03-14 02:07:07'),
(8, 7, NULL, '2020-03-08 00:42:08', '2020-03-14 02:07:07'),
(8, 8, 'crud', '2020-03-08 00:42:08', '2020-03-14 02:07:07'),
(8, 9, 'crud', '2020-03-08 00:42:08', '2020-03-14 02:07:07'),
(8, 10, NULL, '2020-03-08 00:42:08', '2020-03-14 02:07:07'),
(8, 11, NULL, '2020-03-08 00:42:08', '2020-03-14 02:07:07'),
(8, 12, NULL, '2020-03-08 00:42:08', '2020-03-14 02:07:07'),
(8, 13, NULL, '2020-03-08 00:42:08', '2020-03-14 02:07:07'),
(8, 14, NULL, '2020-03-08 00:42:08', '2020-03-14 02:07:07'),
(8, 15, NULL, '2020-03-08 00:42:08', '2020-03-14 02:07:07'),
(8, 16, NULL, '2020-03-08 00:42:08', '2020-03-14 02:07:07'),
(8, 17, NULL, '2020-03-08 00:42:08', '2020-03-14 02:07:07'),
(8, 18, NULL, '2020-03-08 00:42:08', '2020-03-14 02:07:07'),
(8, 19, NULL, '2020-03-08 00:42:08', '2020-03-14 02:07:07'),
(8, 20, NULL, '2020-03-08 00:42:08', '2020-03-14 02:07:07'),
(8, 21, NULL, '2020-03-08 00:42:08', '2020-03-14 02:07:07'),
(8, 22, NULL, '2020-03-08 00:42:08', '2020-03-14 02:07:07'),
(8, 23, NULL, '2020-03-08 00:42:08', '2020-03-14 02:07:07'),
(8, 24, NULL, '2020-03-08 00:42:08', '2020-03-14 02:07:07'),
(8, 25, NULL, '2020-03-08 00:42:08', '2020-03-14 02:07:07'),
(8, 26, NULL, '2020-03-08 00:42:08', '2020-03-14 02:07:07'),
(8, 27, NULL, '2020-03-08 00:42:08', '2020-03-14 02:07:07'),
(8, 28, 'NULL', '2020-05-20 16:51:12', '2020-05-20 16:51:12'),
(8, 29, 'NULL', '2020-05-21 18:39:12', '2020-05-21 18:39:12'),
(8, 30, 'NULL', '2020-05-21 18:40:18', '2020-05-21 18:40:18'),
(8, 31, 'NULL', '2020-05-21 18:41:02', '2020-05-21 18:41:02'),
(8, 32, 'NULL', '2020-05-21 18:42:09', '2020-05-21 18:42:09'),
(8, 33, 'NULL', '2020-05-21 18:43:59', '2020-05-21 18:43:59'),
(8, 34, 'NULL', '2020-05-31 10:51:13', '2020-05-31 10:51:13'),
(8, 35, 'NULL', '2020-05-31 10:52:31', '2020-05-31 10:52:31'),
(8, 36, 'NULL', '2020-05-31 10:53:22', '2020-05-31 10:53:22'),
(9, 1, 'crud', '2020-03-08 00:45:15', '2020-03-08 00:45:15'),
(9, 2, 'NULL', '2020-03-08 00:45:15', '2020-03-08 00:45:15'),
(9, 3, 'NULL', '2020-03-08 00:45:15', '2020-03-08 00:45:15'),
(9, 4, 'NULL', '2020-03-08 00:45:15', '2020-03-08 00:45:15'),
(9, 5, 'NULL', '2020-03-08 00:45:15', '2020-03-08 00:45:15'),
(9, 6, 'NULL', '2020-03-08 00:45:15', '2020-03-08 00:45:15'),
(9, 7, 'NULL', '2020-03-08 00:45:15', '2020-03-08 00:45:15'),
(9, 8, 'NULL', '2020-03-08 00:45:15', '2020-03-08 00:45:15'),
(9, 9, 'NULL', '2020-03-08 00:45:15', '2020-03-08 00:45:15'),
(9, 10, 'NULL', '2020-03-08 00:45:15', '2020-03-08 00:45:15'),
(9, 11, 'c', '2020-03-08 00:45:15', '2020-03-08 00:45:15'),
(9, 12, 'NULL', '2020-03-08 00:45:15', '2020-03-08 00:45:15'),
(9, 13, 'NULL', '2020-03-08 00:45:15', '2020-03-08 00:45:15'),
(9, 14, 'NULL', '2020-03-08 00:45:15', '2020-03-08 00:45:15'),
(9, 15, 'NULL', '2020-03-08 00:45:15', '2020-03-08 00:45:15'),
(9, 16, 'NULL', '2020-03-08 00:45:15', '2020-03-08 00:45:15'),
(9, 17, 'NULL', '2020-03-08 00:45:15', '2020-03-08 00:45:15'),
(9, 18, 'NULL', '2020-03-08 00:45:15', '2020-03-08 00:45:15'),
(9, 19, 'NULL', '2020-03-08 00:45:15', '2020-03-08 00:45:15'),
(9, 20, 'NULL', '2020-03-08 00:45:15', '2020-03-08 00:45:15'),
(9, 21, 'NULL', '2020-03-08 00:45:15', '2020-03-08 00:45:15'),
(9, 22, 'r', '2020-03-08 00:45:15', '2020-03-08 00:45:15'),
(9, 23, 'NULL', '2020-03-08 00:45:15', '2020-03-08 00:45:15'),
(9, 24, 'NULL', '2020-03-08 00:45:15', '2020-03-08 00:45:15'),
(9, 25, 'NULL', '2020-03-08 00:45:15', '2020-03-08 00:45:15'),
(9, 26, 'NULL', '2020-03-08 00:45:15', '2020-03-08 00:45:15'),
(9, 27, 'NULL', '2020-03-08 00:45:15', '2020-03-08 00:45:15'),
(9, 28, 'NULL', '2020-05-20 16:51:12', '2020-05-20 16:51:12'),
(9, 29, 'NULL', '2020-05-21 18:39:12', '2020-05-21 18:39:12'),
(9, 30, 'NULL', '2020-05-21 18:40:18', '2020-05-21 18:40:18'),
(9, 31, 'NULL', '2020-05-21 18:41:02', '2020-05-21 18:41:02'),
(9, 32, 'NULL', '2020-05-21 18:42:09', '2020-05-21 18:42:09'),
(9, 33, 'NULL', '2020-05-21 18:43:59', '2020-05-21 18:43:59'),
(9, 34, 'NULL', '2020-05-31 10:51:13', '2020-05-31 10:51:13'),
(9, 35, 'NULL', '2020-05-31 10:52:31', '2020-05-31 10:52:31'),
(9, 36, 'NULL', '2020-05-31 10:53:22', '2020-05-31 10:53:22'),
(11, 1, 'crud', '2020-03-14 02:06:23', '2020-03-14 02:06:23'),
(11, 2, 'NULL', '2020-03-14 02:06:23', '2020-03-14 02:06:23'),
(11, 3, 'NULL', '2020-03-14 02:06:23', '2020-03-14 02:06:23'),
(11, 4, 'NULL', '2020-03-14 02:06:23', '2020-03-14 02:06:23'),
(11, 5, 'NULL', '2020-03-14 02:06:23', '2020-03-14 02:06:23'),
(11, 6, 'NULL', '2020-03-14 02:06:23', '2020-03-14 02:06:23'),
(11, 7, 'crud', '2020-03-14 02:06:23', '2020-03-14 02:06:23'),
(11, 8, 'crud', '2020-03-14 02:06:23', '2020-03-14 02:06:23'),
(11, 9, 'crud', '2020-03-14 02:06:23', '2020-03-14 02:06:23'),
(11, 10, 'NULL', '2020-03-14 02:06:23', '2020-03-14 02:06:23'),
(11, 11, 'NULL', '2020-03-14 02:06:23', '2020-03-14 02:06:23'),
(11, 12, 'NULL', '2020-03-14 02:06:23', '2020-03-14 02:06:23'),
(11, 13, 'NULL', '2020-03-14 02:06:23', '2020-03-14 02:06:23'),
(11, 14, 'NULL', '2020-03-14 02:06:23', '2020-03-14 02:06:23'),
(11, 15, 'NULL', '2020-03-14 02:06:23', '2020-03-14 02:06:23'),
(11, 16, 'NULL', '2020-03-14 02:06:23', '2020-03-14 02:06:23'),
(11, 17, 'NULL', '2020-03-14 02:06:23', '2020-03-14 02:06:23'),
(11, 18, 'NULL', '2020-03-14 02:06:23', '2020-03-14 02:06:23'),
(11, 19, 'NULL', '2020-03-14 02:06:23', '2020-03-14 02:06:23'),
(11, 20, 'NULL', '2020-03-14 02:06:23', '2020-03-14 02:06:23'),
(11, 21, 'NULL', '2020-03-14 02:06:23', '2020-03-14 02:06:23'),
(11, 22, 'NULL', '2020-03-14 02:06:23', '2020-03-14 02:06:23'),
(11, 23, 'NULL', '2020-03-14 02:06:23', '2020-03-14 02:06:23'),
(11, 24, 'NULL', '2020-03-14 02:06:23', '2020-03-14 02:06:23'),
(11, 25, 'NULL', '2020-03-14 02:06:23', '2020-03-14 02:06:23'),
(11, 26, 'NULL', '2020-03-14 02:06:23', '2020-03-14 02:06:23'),
(11, 27, 'NULL', '2020-03-14 02:06:23', '2020-03-14 02:06:23'),
(11, 28, 'NULL', '2020-05-20 16:51:12', '2020-05-20 16:51:12'),
(11, 29, 'NULL', '2020-05-21 18:39:12', '2020-05-21 18:39:12'),
(11, 30, 'NULL', '2020-05-21 18:40:18', '2020-05-21 18:40:18'),
(11, 31, 'NULL', '2020-05-21 18:41:02', '2020-05-21 18:41:02'),
(11, 32, 'NULL', '2020-05-21 18:42:09', '2020-05-21 18:42:09'),
(11, 33, 'NULL', '2020-05-21 18:43:59', '2020-05-21 18:43:59'),
(11, 34, 'NULL', '2020-05-31 10:51:13', '2020-05-31 10:51:13'),
(11, 35, 'NULL', '2020-05-31 10:52:31', '2020-05-31 10:52:31'),
(11, 36, 'NULL', '2020-05-31 10:53:22', '2020-05-31 10:53:22');

-- --------------------------------------------------------

--
-- Table structure for table `successivesoftware_paypal_orders`
--

CREATE TABLE `successivesoftware_paypal_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `system_event_logs`
--

CREATE TABLE `system_event_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `details` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `system_files`
--

CREATE TABLE `system_files` (
  `id` int(10) UNSIGNED NOT NULL,
  `disk_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` int(11) NOT NULL,
  `content_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_public` tinyint(1) NOT NULL DEFAULT '1',
  `sort_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `system_files`
--

INSERT INTO `system_files` (`id`, `disk_name`, `file_name`, `file_size`, `content_type`, `title`, `description`, `field`, `attachment_id`, `attachment_type`, `is_public`, `sort_order`, `created_at`, `updated_at`) VALUES
(8, '5ddd8a3f510a5987313209.jpg', '1 (1).jpg', 51571, 'image/jpeg', NULL, NULL, 'id_copy', '2', 'Spot\\Shipment\\Models\\Order', 1, 8, '2019-11-26 22:25:35', '2019-11-26 22:25:35'),
(10, '5dde9d7615bb9455148432.jpg', 'cam-1574870333083.jpg', 8003, 'image/jpeg', NULL, NULL, 'id_copy', '3', 'Spot\\Shipment\\Models\\Order', 1, 10, '2019-11-27 17:59:50', '2019-11-27 17:59:50'),
(12, '5e190d2819c42114498074.png', '1.png', 43431, 'image/png', NULL, NULL, 'id_copy', '5', 'Spot\\Shipment\\Models\\Order', 1, 12, '2020-01-10 18:47:52', '2020-01-10 18:47:52'),
(13, '5e9cb866b3f99802037714.png', 'Sans-titre---2.png', 195636, 'image/png', NULL, NULL, 'id_copy', '22', 'Spot\\Shipment\\Models\\Order', 1, 13, '2020-04-19 18:45:26', '2020-04-19 18:45:26'),
(14, '5e9f21caececc500598432.jpg', 'cam-1587487197321.jpg', 50930, 'image/jpeg', NULL, NULL, 'id_copy', '24', 'Spot\\Shipment\\Models\\Order', 1, 14, '2020-04-21 14:39:38', '2020-04-21 14:39:38'),
(15, '5ea4651c1ebdf148380889.jpg', 'FMR2.jpg', 106887, 'image/jpeg', NULL, NULL, 'id_copy', '8', 'Spot\\Shipment\\Models\\Order', 1, 15, '2020-04-25 14:28:12', '2020-04-25 14:28:12'),
(19, '5eb380c6b0be2717185537.jpeg', '509208170.jpeg', 5739, 'image/jpeg', NULL, NULL, 'id_copy', '1', 'Spot\\Shipment\\Models\\Order', 1, 19, '2020-05-07 01:30:14', '2020-05-07 01:30:14'),
(20, '5eb380c6b28ed176205905.jpeg', '953409960.jpeg', 5670, 'image/jpeg', NULL, NULL, 'package_before', '1', 'Spot\\Shipment\\Models\\Order', 1, 20, '2020-05-07 01:30:14', '2020-05-07 01:30:14'),
(22, '5eb3df68be57c411885316.jpg', 'cam-1588846497938.jpg', 39956, 'image/jpeg', NULL, NULL, 'id_copy', '4', 'Spot\\Shipment\\Models\\Order', 1, 22, '2020-05-07 08:14:00', '2020-05-07 08:14:00'),
(24, '5ec28e0441caf194595284.jpg', 'cam-1589808729194.jpg', 90769, 'image/jpeg', NULL, NULL, 'id_copy', '57', 'Spot\\Shipment\\Models\\Order', 1, 24, '2020-05-18 11:30:44', '2020-05-18 11:30:44'),
(25, '5ec32b81e004f198436157.csv', 'export (3).csv', 68918, 'text/plain', NULL, NULL, NULL, NULL, NULL, 0, 25, '2020-05-18 22:42:41', '2020-05-18 22:42:41'),
(26, '5ec538d471e54499950463.jpeg', '1240559438.jpeg', 6, 'text/plain', NULL, NULL, 'id_copy', '69', 'Spot\\Shipment\\Models\\Order', 1, 26, '2020-05-20 12:04:04', '2020-05-20 12:04:04'),
(27, '5ec538d474ceb583100948.jpeg', '520173860.jpeg', 6, 'text/plain', NULL, NULL, 'package_before', '69', 'Spot\\Shipment\\Models\\Order', 1, 27, '2020-05-20 12:04:04', '2020-05-20 12:04:04'),
(30, '5ed17b5d49cc6300544697.jpg', '20191223_080848_mod.jpg', 71977, 'image/jpeg', NULL, NULL, 'avatar', '11', 'RainLab\\User\\Models\\User', 1, 30, '2020-05-29 19:15:09', '2020-05-29 19:15:09'),
(31, '5ed60de57955b609608163.png', 'Trawco-v1-copia-21.png', 1180262, 'image/png', NULL, NULL, 'id_copy', '130', 'Spot\\Shipment\\Models\\Order', 1, 31, '2020-06-02 06:29:25', '2020-06-02 06:29:25'),
(34, '5ee10f4de163e875675435.jpeg', '2065980137.jpeg', 6, 'text/plain', NULL, NULL, 'id_copy', '190', 'Spot\\Shipment\\Models\\Order', 1, 34, '2020-06-10 14:50:21', '2020-06-10 14:50:21'),
(35, '5ee10f4de450d258440372.jpeg', '936901363.jpeg', 6, 'text/plain', NULL, NULL, 'package_before', '190', 'Spot\\Shipment\\Models\\Order', 1, 35, '2020-06-10 14:50:21', '2020-06-10 14:50:21'),
(36, '5eef92ee44df7546890743.jpg', 'cam-1592759192935.jpg', 42056, 'image/jpeg', NULL, NULL, 'id_copy', '191', 'Spot\\Shipment\\Models\\Order', 1, 36, '2020-06-21 15:03:42', '2020-06-21 15:03:42'),
(37, '5eefa1f9bd70f054079162.jpg', 'cam-1592763045045.jpg', 43380, 'image/jpeg', NULL, NULL, 'id_copy', '231', 'Spot\\Shipment\\Models\\Order', 1, 37, '2020-06-21 16:07:53', '2020-06-21 16:07:53'),
(38, '5eefa234b75fe247536640.jpg', 'cam-1592763103504.jpg', 43403, 'image/jpeg', NULL, NULL, 'id_copy', '206', 'Spot\\Shipment\\Models\\Order', 1, 38, '2020-06-21 16:08:52', '2020-06-21 16:08:52'),
(39, '5eefa28630144808829917.jpg', 'cam-1592763184938.jpg', 43169, 'image/jpeg', NULL, NULL, 'id_copy', '224', 'Spot\\Shipment\\Models\\Order', 1, 39, '2020-06-21 16:10:14', '2020-06-21 16:10:14'),
(40, '5eefaceccc576072107626.jpg', 'cam-1592765848192.jpg', 45972, 'image/jpeg', NULL, NULL, 'id_copy', '258', 'Spot\\Shipment\\Models\\Order', 1, 40, '2020-06-21 16:54:36', '2020-06-21 16:54:36'),
(41, '5ef78c0e5dc31752151449.jpg', 'cam-1593281936397.jpg', 2084, 'image/jpeg', NULL, NULL, 'id_copy', '204', 'Spot\\Shipment\\Models\\Order', 1, 41, '2020-06-27 16:12:30', '2020-06-27 16:12:30'),
(42, '5ef7927142be3698055602.jpg', 'cam-1593283571438.jpg', 2084, 'image/jpeg', NULL, NULL, 'id_copy', '289', 'Spot\\Shipment\\Models\\Order', 1, 42, '2020-06-27 16:39:45', '2020-06-27 16:39:45'),
(43, '5ef7948b91bd3774152178.png', 'avatar-homme.png', 3914, 'image/png', NULL, NULL, 'avatar', '1', 'RainLab\\User\\Models\\User', 1, 43, '2020-06-27 16:48:43', '2020-06-27 16:48:43'),
(44, '5efa26c727fe3399693812.jpg', 'cam-1593452418818.jpg', 61881, 'image/jpeg', NULL, NULL, 'id_copy', '325', 'Spot\\Shipment\\Models\\Order', 1, 44, '2020-06-29 15:37:11', '2020-06-29 15:37:11');

-- --------------------------------------------------------

--
-- Table structure for table `system_mail_layouts`
--

CREATE TABLE `system_mail_layouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_html` text COLLATE utf8mb4_unicode_ci,
  `content_text` text COLLATE utf8mb4_unicode_ci,
  `content_css` text COLLATE utf8mb4_unicode_ci,
  `is_locked` tinyint(1) NOT NULL DEFAULT '0',
  `options` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `system_mail_layouts`
--

INSERT INTO `system_mail_layouts` (`id`, `name`, `code`, `content_html`, `content_text`, `content_css`, `is_locked`, `options`, `created_at`, `updated_at`) VALUES
(1, 'Default layout', 'default', '<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n<html xmlns=\"http://www.w3.org/1999/xhtml\">\n<head>\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />\n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\n</head>\n<body>\n    <style type=\"text/css\" media=\"screen\">\n        {{ brandCss|raw }}\n        {{ css|raw }}\n    </style>\n\n    <table class=\"wrapper layout-default\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n\n        <!-- Header -->\n        {% partial \'header\' body %}\n            {{ subject|raw }}\n        {% endpartial %}\n\n        <tr>\n            <td align=\"center\">\n                <table class=\"content\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n                    <!-- Email Body -->\n                    <tr>\n                        <td class=\"body\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n                            <table class=\"inner-body\" align=\"center\" width=\"570\" cellpadding=\"0\" cellspacing=\"0\">\n                                <!-- Body content -->\n                                <tr>\n                                    <td class=\"content-cell\">\n                                        {{ content|raw }}\n                                    </td>\n                                </tr>\n                            </table>\n                        </td>\n                    </tr>\n                </table>\n            </td>\n        </tr>\n\n        <!-- Footer -->\n        {% partial \'footer\' body %}\n            &copy; {{ \"now\"|date(\"Y\") }} {{ appName }}. All rights reserved.\n        {% endpartial %}\n\n    </table>\n\n</body>\n</html>', '{{ content|raw }}', '@media only screen and (max-width: 600px) {\n    .inner-body {\n        width: 100% !important;\n    }\n\n    .footer {\n        width: 100% !important;\n    }\n}\n\n@media only screen and (max-width: 500px) {\n    .button {\n        width: 100% !important;\n    }\n}', 1, NULL, '2019-11-24 20:18:27', '2019-11-24 20:18:27'),
(2, 'System layout', 'system', '<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n<html xmlns=\"http://www.w3.org/1999/xhtml\">\n<head>\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />\n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\n</head>\n<body>\n    <style type=\"text/css\" media=\"screen\">\n        {{ brandCss|raw }}\n        {{ css|raw }}\n    </style>\n\n    <table class=\"wrapper layout-system\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n        <tr>\n            <td align=\"center\">\n                <table class=\"content\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n                    <!-- Email Body -->\n                    <tr>\n                        <td class=\"body\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n                            <table class=\"inner-body\" align=\"center\" width=\"570\" cellpadding=\"0\" cellspacing=\"0\">\n                                <!-- Body content -->\n                                <tr>\n                                    <td class=\"content-cell\">\n                                        {{ content|raw }}\n\n                                        <!-- Subcopy -->\n                                        {% partial \'subcopy\' body %}\n                                            **This is an automatic message. Please do not reply to it.**\n                                        {% endpartial %}\n                                    </td>\n                                </tr>\n                            </table>\n                        </td>\n                    </tr>\n                </table>\n            </td>\n        </tr>\n    </table>\n\n</body>\n</html>', '{{ content|raw }}\n\n\n---\nThis is an automatic message. Please do not reply to it.', '@media only screen and (max-width: 600px) {\n    .inner-body {\n        width: 100% !important;\n    }\n\n    .footer {\n        width: 100% !important;\n    }\n}\n\n@media only screen and (max-width: 500px) {\n    .button {\n        width: 100% !important;\n    }\n}', 1, NULL, '2019-11-24 20:18:27', '2019-11-24 20:18:27'),
(3, 'Spotlayer', 'spotlayer', '<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n<html xmlns=\"http://www.w3.org/1999/xhtml\">\r\n    <head>\r\n        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />\r\n        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\r\n    </head>\r\n    <body>\r\n        <style type=\"text/css\" media=\"screen\">\r\n            {{ brandCss|raw }}\r\n            {{ css|raw }}\r\n        </style>\r\n    \r\n    	<div class=\"es-wrapper-color {% if currentLang == \'ar\' %}rtl{% endif %}\">\r\n    		<!--[if gte mso 9]>\r\n    			<v:background xmlns:v=\"urn:schemas-microsoft-com:vml\" fill=\"t\">\r\n    				<v:fill type=\"tile\" src=\"https://stripo.email/content/guids/CABINET_63fbbc11db6741389cc3292b09a63e6d/images/7711511856111535.png\" color=\"#f6f6f6\" origin=\"0.5, 0\" position=\"0.5,0\"></v:fill>\r\n    			</v:background>\r\n    		<![endif]-->\r\n    		<table class=\"main_table\" background=\"https://stripo.email/content/guids/CABINET_63fbbc11db6741389cc3292b09a63e6d/images/7711511856111535.png\" cellpadding=\"0\" cellspacing=\"0\" class=\"es-wrapper\" width=\"100%\">\r\n    			<tbody>\r\n    				<tr style=\"border-collapse:collapse;\">\r\n    					<td style=\"padding:0;Margin:0;\" valign=\"top\">\r\n    \r\n							<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"es-content\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;\">\r\n								<tbody>\r\n									<tr style=\"border-collapse:collapse;\">\r\n										<td align=\"center\" class=\"es-adaptive\" style=\"padding:0;Margin:0;\">\r\n										<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"es-content-body\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;\" width=\"600\">\r\n											<tbody>\r\n												<tr style=\"border-collapse:collapse;\">\r\n													<td align=\"left\" colspan=\"2\" style=\"padding:10px;Margin:0;background-image:url(https://tlr.stripocdn.email/content/guids/CABINET_63fbbc11db6741389cc3292b09a63e6d/images/7711511856111535.png);background-position:left top;background-repeat:repeat;\"><!--[if mso]><table width=\"580\"><tr><td width=\"280\" valign=\"top\"><![endif]-->\r\n														<p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:12px;font-family:verdana, geneva, sans-serif;line-height:120%;color:#CCCCCC;\">{{site_description}}</p>\r\n														<!--[if mso]></td><td width=\"20\"></td><td width=\"280\" valign=\"top\"><![endif]-->\r\n														<!--[if mso]></td></tr></table><![endif]-->\r\n													</td>\r\n												</tr>\r\n											</tbody>\r\n										</table>\r\n										</td>\r\n									</tr>\r\n								</tbody>\r\n							</table>\r\n\r\n							<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"es-header\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top;\">\r\n								<tbody>\r\n									<tr style=\"border-collapse:collapse;\">\r\n										<td align=\"center\" class=\"es-adaptive\" style=\"padding:0;Margin:0;\">\r\n										<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"es-header-body\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;\" width=\"600\">\r\n											<tbody>\r\n												<tr style=\"border-collapse:collapse;\">\r\n													<td align=\"left\" style=\"padding:15px;Margin:0;\">\r\n													<table cellpadding=\"0\" cellspacing=\"0\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;\" width=\"100%\">\r\n														<tbody>\r\n															<tr style=\"border-collapse:collapse;\">\r\n																<td align=\"center\" style=\"padding:0;Margin:0;\" valign=\"top\" width=\"570\">\r\n																<table cellpadding=\"0\" cellspacing=\"0\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;\" width=\"100%\">\r\n																	<tbody>\r\n																		<tr style=\"border-collapse:collapse;\">\r\n																			<td align=\"center\" class=\"es-m-p0l\" style=\"padding:0;Margin:0;\"><a href=\"{{site_url}}\" target=\"_blank\"><img alt=\"{{site_title}}\" src=\"{{site_logo}}\" style=\"display: block; border: 0px; outline: none; text-decoration: none; width: 90px;\" title=\"{{site_title}}\" /></a><h2 style=\"margin: 8px auto 0!important;text-decoration: none !important;text-align: center !important;\">{{site_title}}</h2></td>\r\n																		</tr>\r\n																	</tbody>\r\n																</table>\r\n																</td>\r\n															</tr>\r\n														</tbody>\r\n													</table>\r\n													</td>\r\n												</tr>\r\n												<tr style=\"border-collapse:collapse;\">\r\n													<td align=\"left\" style=\"padding:0;Margin:0;\">\r\n													<table cellpadding=\"0\" cellspacing=\"0\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;\" width=\"100%\">\r\n														<tbody>\r\n															<tr style=\"border-collapse:collapse;\">\r\n																<td align=\"center\" style=\"padding:0;Margin:0;\" valign=\"top\" width=\"600\">\r\n																<table cellpadding=\"0\" cellspacing=\"0\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;\" width=\"100%\">\r\n																	<tbody>\r\n																		<tr style=\"border-collapse:collapse;\">\r\n																			<td style=\"padding:0;Margin:0;\">\r\n																			<table cellpadding=\"0\" cellspacing=\"0\" class=\"es-menu\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;\" width=\"100%\">\r\n																				<tbody>\r\n																					<tr class=\"links\" style=\"border-collapse:collapse;\">\r\n																						<td align=\"center\" bgcolor=\"#333333\" id=\"esd-menu-id-0\" style=\"Margin:0;padding-left:5px;padding-right:5px;padding-top:12px;padding-bottom:12px;border:0;\" width=\"25.00%\"></td>\r\n																					</tr>\r\n																				</tbody>\r\n																			</table>\r\n																			</td>\r\n																		</tr>\r\n																	</tbody>\r\n																</table>\r\n																</td>\r\n															</tr>\r\n														</tbody>\r\n													</table>\r\n													</td>\r\n												</tr>\r\n											</tbody>\r\n										</table>\r\n										</td>\r\n									</tr>\r\n								</tbody>\r\n							</table>\r\n\r\n							<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"es-content\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;\">\r\n								<tbody>\r\n									<tr style=\"border-collapse:collapse;\">\r\n										<td align=\"center\" style=\"padding:0;Margin:0;\">\r\n										<table align=\"center\" bgcolor=\"#ffffff\" cellpadding=\"0\" cellspacing=\"0\" class=\"es-content-body\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;\" width=\"600\">\r\n											<tbody>\r\n												<tr style=\"border-collapse:collapse;\">\r\n													<td align=\"left\" style=\"Margin:0;padding-top:20px;padding-bottom:20px;padding-left:10px;padding-right:30px;\">\r\n													<table cellpadding=\"0\" cellspacing=\"0\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;\" width=\"100%\">\r\n														<tbody>\r\n															<tr style=\"border-collapse:collapse;\">\r\n																<td align=\"center\" style=\"padding:0;Margin:0;\" valign=\"top\" width=\"540\">\r\n																<table cellpadding=\"0\" cellspacing=\"0\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;\" width=\"100%\">\r\n																	<tbody>\r\n																		<tr style=\"border-collapse:collapse;\">\r\n																			<td class=\"es-m-txt-c\" style=\"padding:0;Margin:0;\">\r\n																				{{ content|raw }}\r\n																			</td>\r\n																		</tr>\r\n																	</tbody>\r\n																</table>\r\n																</td>\r\n															</tr>\r\n														</tbody>\r\n													</table>\r\n													</td>\r\n												</tr>\r\n												<tr style=\"border-collapse:collapse;\">\r\n													<td align=\"left\" style=\"Margin:0;padding-top:10px;padding-bottom:30px;padding-left:30px;padding-right:30px;\"><!--[if mso]><table width=\"540\" cellpadding=\"0\"\r\n				                            cellspacing=\"0\"><tr><td width=\"100\" valign=\"top\"><![endif]-->\r\n													<table align=\"left\" cellpadding=\"0\" cellspacing=\"0\" class=\"es-left\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left;width: 100%\">\r\n														<tbody>\r\n															<tr style=\"border-collapse:collapse;\">\r\n																<td align=\"center\" class=\"es-m-p0r es-m-p20b\" style=\"padding:0;Margin:0;\" valign=\"top\" width=\"100\">\r\n																<table cellpadding=\"0\" cellspacing=\"0\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;\" width=\"100%\">\r\n																	<tbody>\r\n																		<tr style=\"border-collapse:collapse;\">\r\n																			<td align=\"left\" class=\"es-m-txt-c\" style=\"padding:0;Margin:0;\">\r\n																			<p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:verdana, geneva, sans-serif;line-height:150%;color:#666666;\">{{theme_lang.best_regards}},</p>\r\n																			<p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:verdana, geneva, sans-serif;line-height:150%;color:#666666;\">{{site_title}}</p>\r\n																			</td>\r\n																		</tr>\r\n																	</tbody>\r\n																</table>\r\n																</td>\r\n															</tr>\r\n														</tbody>\r\n													</table>\r\n													<!--[if mso]></td><td width=\"20\"></td><td width=\"420\" valign=\"top\"><![endif]-->\r\n													<!--[if mso]></td></tr></table><![endif]--></td>\r\n												</tr>\r\n											</tbody>\r\n										</table>\r\n										</td>\r\n									</tr>\r\n								</tbody>\r\n							</table>\r\n\r\n							<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"es-content footer\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;\">\r\n								<tbody>\r\n									<tr style=\"border-collapse:collapse;\">\r\n									</tr>\r\n									<tr style=\"border-collapse:collapse;\">\r\n										<td align=\"center\" style=\"padding:0;Margin:0;\">\r\n										<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"es-footer-body\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#333333;\" width=\"600\">\r\n											<tbody>\r\n												<tr style=\"border-collapse:collapse;\">\r\n													<td align=\"left\" style=\"Margin:0;padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px;\">\r\n													<table cellpadding=\"0\" cellspacing=\"0\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;\" width=\"100%\">\r\n														<tbody>\r\n															<tr style=\"border-collapse:collapse;\">\r\n																<td align=\"center\" style=\"padding:0;Margin:0;\" valign=\"top\" width=\"560\">\r\n																<table cellpadding=\"0\" cellspacing=\"0\" style=\"mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;\" width=\"100%\">\r\n																	<tbody>\r\n																		<tr style=\"border-collapse:collapse;\">\r\n																			<td align=\"center\" style=\"padding:0;Margin:0;padding-top:5px;padding-bottom:5px;\">\r\n																			<p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:verdana, geneva, sans-serif;line-height:21px;color:#FFFFFF;\">{{site_address}}</p>\r\n																			</td>\r\n																		</tr>\r\n																		<tr style=\"border-collapse:collapse;\">\r\n																			<td align=\"center\" style=\"padding:0;Margin:0;padding-top:5px;padding-bottom:5px;\">\r\n																			<p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:12px;font-family:verdana, geneva, sans-serif;line-height:21px;color:#FFFFFF;\">{{theme_lang.footer_email_msg}}. {{theme_lang.please_add}} <a href=\"mailto:{{site_email}}\" style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:verdana, geneva, sans-serif;font-size:12px;text-decoration:underline;color:#FFFFFF;line-height:21px;\" target=\"_blank\">{{site_email}}</a> {{theme_lang.to_contacts}}!</p>\r\n\r\n																			</td>\r\n																		</tr>\r\n																		<tr style=\"border-collapse:collapse;\">\r\n																			<td align=\"center\" style=\"padding:0;Margin:0;\">\r\n																			<p style=\"Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:verdana, geneva, sans-serif;line-height:150%;color:#FFFFFF;\"><span style=\"font-size:12px;line-height:150%;\">{{site_title}} © {{theme_lang.rights_reserved}}</span></p>\r\n																			</td>\r\n																		</tr>\r\n																	</tbody>\r\n																</table>\r\n																</td>\r\n															</tr>\r\n														</tbody>\r\n													</table>\r\n													</td>\r\n												</tr>\r\n											</tbody>\r\n										</table>\r\n										</td>\r\n									</tr>\r\n								</tbody>\r\n							</table>\r\n						\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n		</div>\r\n	</body>\r\n</html>', '', '', 0, '{\"disable_auto_inline_css\":\"0\"}', '2019-11-26 17:30:28', '2020-04-25 20:03:28');

-- --------------------------------------------------------

--
-- Table structure for table `system_mail_partials`
--

CREATE TABLE `system_mail_partials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_html` text COLLATE utf8mb4_unicode_ci,
  `content_text` text COLLATE utf8mb4_unicode_ci,
  `is_custom` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `system_mail_partials`
--

INSERT INTO `system_mail_partials` (`id`, `name`, `code`, `content_html`, `content_text`, `is_custom`, `created_at`, `updated_at`) VALUES
(1, 'Header', 'header', '<tr>\n    <td class=\"header\">\n        {% if url %}\n            <a href=\"{{ url }}\">\n                {{ body }}\n            </a>\n        {% else %}\n            <span>\n                {{ body }}\n            </span>\n        {% endif %}\n    </td>\n</tr>', '*** {{ body|trim }} <{{ url }}>', 0, '2019-11-26 17:28:37', '2019-11-26 17:28:37'),
(2, 'Footer', 'footer', '<tr>\n    <td>\n        <table class=\"footer\" align=\"center\" width=\"570\" cellpadding=\"0\" cellspacing=\"0\">\n            <tr>\n                <td class=\"content-cell\" align=\"center\">\n                    {{ body|md_safe }}\n                </td>\n            </tr>\n        </table>\n    </td>\n</tr>', '-------------------\n{{ body|trim }}', 0, '2019-11-26 17:28:37', '2019-11-26 17:28:37'),
(3, 'Button', 'button', '<table class=\"action\" align=\"center\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n    <tr>\n        <td align=\"center\">\n            <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                <tr>\n                    <td align=\"center\">\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                            <tr>\n                                <td>\n                                    <a href=\"{{ url }}\" class=\"button button-{{ type ?: \'primary\' }}\" target=\"_blank\">\n                                        {{ body }}\n                                    </a>\n                                </td>\n                            </tr>\n                        </table>\n                    </td>\n                </tr>\n            </table>\n        </td>\n    </tr>\n</table>', '{{ body|trim }} <{{ url }}>', 0, '2019-11-26 17:28:37', '2019-11-26 17:28:37'),
(4, 'Panel', 'panel', '<table class=\"panel\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n    <tr>\n        <td class=\"panel-content\">\n            <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n                <tr>\n                    <td class=\"panel-item\">\n                        {{ body|md_safe }}\n                    </td>\n                </tr>\n            </table>\n        </td>\n    </tr>\n</table>', '{{ body|trim }}', 0, '2019-11-26 17:28:37', '2019-11-26 17:28:37'),
(5, 'Table', 'table', '<div class=\"table\">\n    {{ body|md_safe }}\n</div>', '{{ body|trim }}', 0, '2019-11-26 17:28:37', '2019-11-26 17:28:37'),
(6, 'Subcopy', 'subcopy', '<table class=\"subcopy\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n    <tr>\n        <td>\n            {{ body|md_safe }}\n        </td>\n    </tr>\n</table>', '-----\n{{ body|trim }}', 0, '2019-11-26 17:28:37', '2019-11-26 17:28:37'),
(7, 'Promotion', 'promotion', '<table class=\"promotion\" align=\"center\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n    <tr>\n        <td align=\"center\">\n            {{ body|md_safe }}\n        </td>\n    </tr>\n</table>', '{{ body|trim }}', 0, '2019-11-26 17:28:37', '2019-11-26 17:28:37');

-- --------------------------------------------------------

--
-- Table structure for table `system_mail_templates`
--

CREATE TABLE `system_mail_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `content_html` text COLLATE utf8mb4_unicode_ci,
  `content_text` text COLLATE utf8mb4_unicode_ci,
  `layout_id` int(11) DEFAULT NULL,
  `is_custom` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `system_mail_templates`
--

INSERT INTO `system_mail_templates` (`id`, `code`, `subject`, `description`, `content_html`, `content_text`, `layout_id`, `is_custom`, `created_at`, `updated_at`) VALUES
(1, 'zainab.simplecontact::mail.reply', NULL, NULL, NULL, NULL, 1, 0, '2019-11-26 17:28:37', '2019-11-26 17:28:37'),
(2, 'zainab.simplecontact::mail.auto-response', NULL, NULL, NULL, NULL, 1, 0, '2019-11-26 17:28:37', '2019-11-26 17:28:37'),
(3, 'zainab.simplecontact::mail.notification', NULL, NULL, NULL, NULL, 1, 0, '2019-11-26 17:28:37', '2019-11-26 17:28:37'),
(4, 'rainlab.user::mail.activate', NULL, 'Activate a new user', NULL, NULL, 1, 0, '2019-11-26 17:28:37', '2019-11-26 17:28:37'),
(5, 'rainlab.user::mail.welcome', NULL, 'User confirmed their account', NULL, NULL, 1, 0, '2019-11-26 17:28:37', '2019-11-26 17:28:37'),
(6, 'rainlab.user::mail.restore', NULL, 'User requests a password reset', NULL, NULL, 1, 0, '2019-11-26 17:28:37', '2019-11-26 17:28:37'),
(7, 'rainlab.user::mail.new_user', NULL, 'Notify admins of a new sign up', NULL, NULL, 2, 0, '2019-11-26 17:28:37', '2019-11-26 17:28:37'),
(8, 'rainlab.user::mail.reactivate', NULL, 'User has reactivated their account', NULL, NULL, 1, 0, '2019-11-26 17:28:37', '2019-11-26 17:28:37'),
(9, 'rainlab.user::mail.invite', NULL, 'Invite a new user to the website', NULL, NULL, 1, 0, '2019-11-26 17:28:37', '2019-11-26 17:28:37'),
(10, 'backend::mail.invite', NULL, 'Invite new admin to the site', NULL, NULL, 2, 0, '2019-11-26 17:28:37', '2019-11-26 17:28:37'),
(11, 'backend::mail.restore', NULL, 'Reset an admin password', NULL, NULL, 2, 0, '2019-11-26 17:28:37', '2019-11-26 17:28:37'),
(13, 'notification', 'Notification', 'The default Template for Notification', '<p><strong>{{ name }}</strong>,</p>\r\n{% if content %}\r\n<p>\r\n    {{content}}\r\n</p>\r\n{% endif %}\r\n{% if link %}\r\n<p>\r\n    <a href=\"{{ link }}\">{{ link }}</a>\r\n</p>\r\n{% endif %}', '', 3, 1, '2019-11-26 17:32:43', '2020-04-25 19:48:10');

-- --------------------------------------------------------

--
-- Table structure for table `system_parameters`
--

CREATE TABLE `system_parameters` (
  `id` int(10) UNSIGNED NOT NULL,
  `namespace` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `system_parameters`
--

INSERT INTO `system_parameters` (`id`, `namespace`, `group`, `item`, `value`) VALUES
(1, 'system', 'update', 'count', '14'),
(2, 'system', 'core', 'hash', '\"7ecf00bd75e60458191bfcdc43dc14e5\"'),
(3, 'system', 'core', 'build', '\"458\"'),
(4, 'system', 'update', 'retry', '1593372847');

-- --------------------------------------------------------

--
-- Table structure for table `system_plugin_history`
--

CREATE TABLE `system_plugin_history` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `system_plugin_history`
--

INSERT INTO `system_plugin_history` (`id`, `code`, `type`, `version`, `detail`, `created_at`) VALUES
(1, 'Spot.Shipment', 'comment', '1.0.1', 'First version of Plugin', '2020-04-21 15:49:34'),
(2, 'Spot.Shipment', 'script', '1.0.27', 'builder_table_create_spot_shipment_container.php', '2020-04-21 15:49:34'),
(3, 'Spot.Shipment', 'comment', '1.0.27', 'Created table spot_shipment_container', '2020-04-21 15:49:34'),
(4, 'Spot.Shipment', 'script', '1.0.28', 'builder_table_delete_spot_shipment_container.php', '2020-04-21 15:49:43'),
(5, 'Spot.Shipment', 'comment', '1.0.28', 'Drop table spot_shipment_container', '2020-04-21 15:49:43'),
(6, 'spot.Container', 'comment', '1.0.1', 'Initialize plugin.', '2020-04-21 19:25:22'),
(7, 'spot.Container', 'script', '1.0.2', 'builder_table_create_spot_container_order.php', '2020-04-21 20:33:53'),
(8, 'spot.Container', 'comment', '1.0.2', 'Created table spot_container_order', '2020-04-21 20:33:53'),
(9, 'spot.Container', 'script', '1.0.3', 'builder_table_create_spot_container_details.php', '2020-04-22 16:16:19'),
(10, 'spot.Container', 'comment', '1.0.3', 'Created table spot_container_details', '2020-04-22 16:16:19'),
(11, 'spot.Container', 'script', '1.0.4', 'builder_table_create_spot_container_statuses.php', '2020-04-22 16:18:50'),
(12, 'spot.Container', 'comment', '1.0.4', 'Created table spot_container_statuses', '2020-04-22 16:18:50'),
(13, 'spot.Container', 'script', '1.0.5', 'builder_table_update_spot_container_status.php', '2020-04-22 16:21:45'),
(14, 'spot.Container', 'comment', '1.0.5', 'Updated table spot_container_statuses', '2020-04-22 16:21:45'),
(15, 'spot.Container', 'script', '1.0.6', 'builder_table_create_spot_container_customer.php', '2020-04-22 16:55:47'),
(16, 'spot.Container', 'comment', '1.0.6', 'Created table spot_container_customer', '2020-04-22 16:55:47'),
(17, 'spot.Container', 'script', '1.0.7', 'builder_table_update_spot_container_detail.php', '2020-04-22 16:56:41'),
(18, 'spot.Container', 'comment', '1.0.7', 'Updated table spot_container_details', '2020-04-22 16:56:41'),
(19, 'spot.Container', 'script', '1.0.8', 'builder_table_update_spot_container_order.php', '2020-04-22 17:05:15'),
(20, 'spot.Container', 'comment', '1.0.8', 'Updated table spot_container_order', '2020-04-22 17:05:15'),
(21, 'spot.Container', 'script', '1.0.9', 'builder_table_update_spot_container_customer.php', '2020-04-22 17:40:04'),
(22, 'spot.Container', 'comment', '1.0.9', 'Updated table spot_container_customer', '2020-04-22 17:40:04'),
(23, 'spot.Container', 'script', '1.0.10', 'builder_table_update_spot_container_customer_2.php', '2020-04-22 17:55:45'),
(24, 'spot.Container', 'comment', '1.0.10', 'Updated table spot_container_customer', '2020-04-22 17:55:45'),
(25, 'spot.Container', 'script', '1.0.11', 'builder_table_update_spot_container_order_2.php', '2020-04-22 18:19:58'),
(26, 'spot.Container', 'comment', '1.0.11', 'Updated table spot_container_order', '2020-04-22 18:19:58'),
(27, 'spot.Container', 'script', '1.0.12', 'builder_table_update_spot_container_detail_2.php', '2020-04-22 18:42:37'),
(28, 'spot.Container', 'comment', '1.0.12', 'Updated table spot_container_detail', '2020-04-22 18:42:37'),
(29, 'Raccoon.GeoLocation', 'script', '1.0.1', 'create_ip_info_locations_table.php', '2020-06-10 17:07:30'),
(30, 'Raccoon.GeoLocation', 'comment', '1.0.1', 'First version of GeoLocation', '2020-06-10 17:07:30'),
(31, 'Raccoon.GeoLocation', 'comment', '1.0.2', 'Fix MaxMind null timezone error', '2020-06-10 17:07:30'),
(32, 'SuccessiveSoftware.Paypal', 'comment', '1.0.1', 'Initialize plugin.', '2020-06-17 16:41:02'),
(33, 'SuccessiveSoftware.Paypal', 'script', '1.0.2', 'create_orders_table.php', '2020-06-17 16:41:03'),
(34, 'SuccessiveSoftware.Paypal', 'comment', '1.0.2', 'Create database tables.', '2020-06-17 16:41:03');

-- --------------------------------------------------------

--
-- Table structure for table `system_plugin_versions`
--

CREATE TABLE `system_plugin_versions` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `is_disabled` tinyint(1) NOT NULL DEFAULT '0',
  `is_frozen` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `system_plugin_versions`
--

INSERT INTO `system_plugin_versions` (`id`, `code`, `version`, `created_at`, `is_disabled`, `is_frozen`) VALUES
(2, 'RainLab.User', '1.5.0', '2019-11-24 20:38:39', 0, 0),
(3, 'Vdomah.JWTAuth', '1.0.7', '2019-11-24 20:38:50', 0, 0),
(4, 'RainLab.Notify', '1.0.2', '2019-11-24 20:38:58', 0, 0),
(5, 'Tiipiik.SmsSender', '1.0.4', '2019-11-24 20:39:11', 0, 0),
(6, 'RainLab.Location', '1.1.5', '2019-11-24 20:39:20', 0, 0),
(7, 'RainLab.UserPlus', '1.1.0', '2019-11-24 20:39:29', 0, 0),
(8, 'Vdomah.Roles', '1.2.5', '2019-11-24 20:39:38', 0, 0),
(9, 'RainLab.Translate', '1.6.2', '2019-11-24 20:39:47', 0, 0),
(10, 'RainLab.Pages', '1.3.1', '2019-11-24 20:40:05', 0, 0),
(11, 'PanaKour.Translate', '1.0.1', '2019-11-24 20:40:05', 0, 0),
(12, 'Mey.Breadcrumbs', '1.0.10', '2019-11-24 20:40:13', 0, 0),
(13, 'Responsiv.Currency', '1.0.4', '2019-11-24 20:40:22', 0, 0),
(14, 'Initbiz.Money', '1.0.8', '2019-11-24 20:40:32', 0, 0),
(15, 'Responsiv.Uploader', '1.0.1', '2019-11-24 20:40:40', 0, 0),
(16, 'Jacob.Logbook', '1.0.3', '2019-11-24 20:40:48', 0, 0),
(17, 'Excodus.TranslateExtended', '1.0.7', '2019-11-24 20:40:56', 0, 0),
(18, 'Responsiv.Pay', '1.1.1', '2019-11-24 20:41:11', 0, 0),
(19, 'Zainab.SimpleContact', '2.0.3', '2019-11-24 20:41:20', 0, 0),
(20, 'Spot.UserPermissions', '1.1.1', '2019-11-24 20:41:49', 0, 0),
(21, 'Spot.TwigExtensions', '1.2.5', '2019-11-24 20:41:55', 0, 0),
(23, 'PanaKour.Backup', '1.0.9', '2019-11-24 20:49:52', 0, 0),
(24, 'Kocholes.BarcodeGenerator', '1.0.2', '2019-11-24 20:50:02', 0, 0),
(30, 'Spot.Shipment', '1.0.28', '2020-04-21 15:49:43', 0, 0),
(34, 'OFFLINE.CORS', '1.0.4', '2019-11-25 20:13:47', 0, 0),
(35, 'OFFLINE.Speedy', '1.0.6', '2019-11-27 07:26:40', 0, 0),
(37, 'RainLab.Builder', '1.0.26', '2020-01-13 01:40:27', 0, 0),
(38, 'spot.Container', '1.0.12', '2020-04-22 18:42:37', 0, 0),
(39, 'Raccoon.GeoLocation', '1.0.2', '2020-06-10 17:07:30', 0, 0),
(40, 'SuccessiveSoftware.Paypal', '1.0.2', '2020-06-17 16:41:03', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `system_request_logs`
--

CREATE TABLE `system_request_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `status_code` int(11) DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referer` text COLLATE utf8mb4_unicode_ci,
  `count` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `system_revisions`
--

CREATE TABLE `system_revisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cast` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_value` text COLLATE utf8mb4_unicode_ci,
  `new_value` text COLLATE utf8mb4_unicode_ci,
  `revisionable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revisionable_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `item` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `item`, `value`) VALUES
(1, 'acme_demo_settings', '{\"language\":\"en\",\"timezone_offset\":\"-08:00\",\"dateformat\":\"m\\/d\\/Y\",\"company\":{\"title\":\"Cargo Pro - Courier System\",\"charset\":\"utf-8\",\"description\":\"Good Service is our goal\",\"keywords\":\"Easy,Cost-effective,Reliable,Trackable,Convenient\",\"primary_email\":\"info@spotlayer.com\",\"tax_number\":\"-\",\"company_phone\":\"+201008115423\",\"company_phone_2\":\"\",\"company_phone_3\":\"\",\"facebook\":\"https:\\/\\/www.facebook.com\\/#\",\"twitter\":\"https:\\/\\/twitter.com\\/#\",\"instagram\":\"http:\\/\\/instagram.com\\/#\",\"address\":\"\",\"lat\":\"25.1849235\",\"lng\":\"55.2769027\",\"county\":\"Eight County\",\"city\":\"Naser City\",\"state\":\"Cairo\",\"postal_code\":\"796001\",\"country\":\"Egypt\"},\"tracking\":{\"prefix_order\":\"REF\",\"numbers_order\":\"6\",\"default_deliverytime\":\"1\",\"default_status\":\"19\",\"default_tracking_id\":\"2\"},\"taxes\":{\"percent\":\"0\",\"insurance\":\"0\"},\"notifications\":{\"live\":1,\"provider\":\"pusher\",\"pusher\":{\"app_id\":\"865316\",\"key\":\"f528799c3805931b4fa0\",\"secret\":\"f0d7684fd5bb96aa0e33\",\"cluster\":\"eu\"},\"responsibility\":{\"new_shipments\":[\"1\",\"6\",\"7\"],\"new_note\":[\"1\",\"2\",\"6\",\"7\",\"8\"],\"update_shipment\":[\"1\"],\"approved_shipment\":[\"1\",\"6\",\"7\"],\"refused_shipment\":[\"1\",\"6\",\"7\"],\"postponed_shipment\":[\"1\",\"6\",\"7\"],\"transfered_shipment\":[\"1\",\"6\",\"7\"],\"assign_shipment\":[\"1\",\"6\",\"7\",\"8\"],\"driver_received\":[\"1\",\"6\",\"7\"],\"discards_request\":[\"1\",\"6\",\"7\"],\"received\":[\"1\",\"6\",\"7\"],\"manifest_assigned\":[\"1\"],\"stock_saved\":[\"1\"],\"returned\":[\"1\",\"6\",\"7\"],\"delivered\":[\"1\",\"6\",\"7\"],\"return_discards\":[\"1\",\"6\",\"7\"]}},\"fees\":{\"delivery_cost\":\"10.00\",\"pickup_cost\":\"1.50\",\"delivery_cost_back_sender\":\"5.00\",\"delivery_cost_back_receiver\":\"0.00\"},\"invoice\":{\"terms\":\"Thanks \",\"signing_company\":\"Company\",\"signing_customer\":\"Customer\"},\"google\":{\"map\":{\"key\":\"AIzaSyCjN-FapLWoOHL6QOnVcwjFmesRdCyUiAc\"},\"recaptcha\":{\"key\":\"6Ld1i7wUAAAAAF7slYbtMkjKa792itRVrLOuno7M\"}},\"payment\":{\"enable\":1,\"gateways\":[\"eGHL\"],\"ServiceID\":\"RZC\",\"merchantPass\":\"Duit@786!\"},\"push_notifications\":{\"push\":1,\"push_provider\":\"fcm\",\"fcm\":{\"customer_key\":\"AIzaSyCSTysQdLQpcprMFlKqWLRpIyKcpHKRHg4\",\"employee_key\":\"AIzaSyA9x2-KK43d899lSGlcwE0W9qcm9YS6afQ\"},\"responsibility\":{\"new_shipments\":[\"1\",\"6\",\"7\"],\"new_note\":[\"1\",\"2\",\"6\",\"7\",\"8\"],\"update_shipment\":[\"1\"],\"approved_shipment\":[\"1\",\"6\",\"7\"],\"refused_shipment\":[\"1\",\"6\",\"7\"],\"postponed_shipment\":[\"1\",\"6\",\"7\"],\"transfered_shipment\":[\"1\",\"6\",\"7\"],\"assign_shipment\":[\"1\",\"6\",\"7\",\"8\"],\"driver_received\":[\"1\",\"6\",\"7\"],\"discards_request\":[\"1\",\"6\",\"7\"],\"received\":[\"1\",\"6\",\"7\"],\"manifest_assigned\":[\"1\"],\"stock_saved\":[\"1\"],\"returned\":[\"1\",\"6\",\"7\"],\"delivered\":[\"1\",\"6\",\"7\"],\"return_discards\":[\"1\",\"6\",\"7\"]}},\"addShipmentForm\":\"add_form_advance\",\"updateShipmentForm\":\"update_form_advance\",\"printTemplate\":\"print_template_advance\",\"addUserSHipment\":\"1\"}'),
(2, 'user_settings', '{\"require_activation\":\"1\",\"activate_mode\":\"auto\",\"use_throttle\":\"1\",\"block_persistence\":\"0\",\"allow_registration\":\"1\",\"login_attribute\":\"username\",\"remember_login\":\"ask\",\"min_password_length\":\"6\"}'),
(3, 'panakour_backup_settings', '{\"include_files\":[{\"path\":\"themes\"},{\"path\":\"plugins\"}],\"exclude_files\":[{\"path\":\"vendor\"},{\"path\":\"plugins\\/rainlab\"}],\"maximum_execution_time\":\"30\"}'),
(8, 'user_settings', '{\"require_activation\":\"1\",\"activate_mode\":\"auto\",\"use_throttle\":\"1\",\"block_persistence\":\"0\",\"allow_registration\":\"1\",\"login_attribute\":\"username\",\"remember_login\":\"ask\",\"min_password_length\":\"6\"}'),
(9, 'rluders_cors_settings', '{\"supportsCredentials\":\"0\",\"allowedOrigins\":\"*\",\"allowedHeaders\":\"Content-Type X-Requested-With\",\"allowedMethods\":\"*\",\"exposedHeaders\":null,\"maxAge\":\"0\"}'),
(10, 'offline_cors_settings', '{\"supportsCredentials\":\"0\",\"maxAge\":\"86400\",\"allowedOrigins\":[{\"value\":\"*\"}],\"allowedHeaders\":[{\"value\":\"*\"}],\"allowedMethods\":[{\"value\":\"*\"}],\"exposedHeaders\":[{\"value\":\"*\"}]}'),
(11, 'excodus_translateextended_settings', '{\"browser_language_detection\":\"0\",\"prefer_user_session\":\"0\",\"route_prefixing\":\"1\",\"homepage_redirect\":\"1\"}'),
(12, 'tiipiik_smssender_settings', '{\"enable\":\"0\",\"from\":\"+14075054816\",\"gateway\":\"smsala\",\"clickatell_api_id\":\"\",\"smsala_api_id\":\"\",\"smsala_api_password\":\"\",\"smsala_sms_type\":\"T\",\"smsala_encoding\":\"T\",\"smsala_sender_id\":\"ASXPRESS\",\"twilio_sid\":\"\",\"twilio_token\":\"\"}'),
(13, 'offline_speedy_settings', '{\"enable_http2\":\"1\",\"enable_gzip\":\"1\",\"enable_caching\":\"1\",\"enable_domain_sharding\":\"0\",\"enable_domain_sharding_in_debug\":\"0\",\"domain_sharding_cdn\":\"http:\\/\\/cdn.yourwebsite.com\"}'),
(14, 'rainlab_builder_settings', '{\"author_name\":\"Spotlayer\",\"author_namespace\":\"spot\"}'),
(15, 'system_mail_settings', '{\"send_mode\":\"mail\",\"sender_name\":\"Cargo Pro\",\"sender_email\":\"noreply@domain.tld\",\"sendmail_path\":\"\\/usr\\/sbin\\/sendmail -bs\",\"smtp_address\":\"smtp.mailgun.org\",\"smtp_port\":\"587\",\"smtp_user\":\"\",\"smtp_password\":\"\",\"smtp_authorization\":\"0\",\"smtp_encryption\":\"tls\",\"mailgun_domain\":\"\",\"mailgun_secret\":\"\",\"mandrill_secret\":\"\",\"ses_key\":\"\",\"ses_secret\":\"\",\"ses_region\":\"\"}');

-- --------------------------------------------------------

--
-- Table structure for table `tiipiik_smssender_message_histories`
--

CREATE TABLE `tiipiik_smssender_message_histories` (
  `id` int(10) UNSIGNED NOT NULL,
  `from` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_status` int(11) NOT NULL DEFAULT '0',
  `sess_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tiipiik_smssender_message_histories`
--

INSERT INTO `tiipiik_smssender_message_histories` (`id`, `from`, `to`, `message`, `status`, `short_status`, `sess_id`, `created_at`, `updated_at`) VALUES
(1, '+14075054816', '000000', 'There is an Approved shipment, please check it AWB00001', 'F', 1, '0', '2020-03-07 16:18:55', '2020-03-07 16:18:55'),
(2, '+14075054816', '99999', 'There is an Approved shipment, please check it AWB00002', 'F', 1, '0', '2020-03-07 16:27:19', '2020-03-07 16:27:19'),
(3, '+14075054816', '00', 'There is an Approved shipment, please check it AWB00003', 'F', 1, '0', '2020-03-08 00:51:17', '2020-03-08 00:51:17'),
(4, '+14075054816', '1000', 'There is an Approved shipment, please check it AWB00003', 'F', 1, '0', '2020-03-08 00:51:18', '2020-03-08 00:51:18'),
(5, '+14075054816', '00', 'The shipment has been received by the driver, please check it AWB00003', 'F', 1, '0', '2020-03-08 00:54:02', '2020-03-08 00:54:02'),
(6, '+14075054816', '1000', 'The shipment has been received by the driver, please check it AWB00003', 'F', 1, '0', '2020-03-08 00:54:02', '2020-03-08 00:54:02'),
(7, '+14075054816', '00', 'The shipment has been assigned, please check it AWB00003', 'F', 1, '0', '2020-03-08 01:08:43', '2020-03-08 01:08:43'),
(8, '+14075054816', '1000', 'The shipment has been assigned, please check it AWB00003', 'F', 1, '0', '2020-03-08 01:08:44', '2020-03-08 01:08:44'),
(9, '+14075054816', '050', 'The shipment has been assigned, please check it AWB00003', 'F', 1, '0', '2020-03-08 01:08:44', '2020-03-08 01:08:44'),
(10, '+14075054816', '00', 'The shipment has been received by the driver, please check it AWB00003', 'F', 1, '0', '2020-03-08 01:09:59', '2020-03-08 01:09:59'),
(11, '+14075054816', '1000', 'The shipment has been received by the driver, please check it AWB00003', 'F', 1, '0', '2020-03-08 01:09:59', '2020-03-08 01:09:59'),
(12, '+14075054816', '0566540960', 'There is a new shipment, please check it AWB00004', 'F', 1, '0', '2020-03-08 02:19:29', '2020-03-08 02:19:29'),
(13, '+14075054816', '0505699425', 'There is a new shipment, please check it AWB00004', 'F', 1, '0', '2020-03-08 02:19:29', '2020-03-08 02:19:29'),
(14, '+14075054816', '0566540960', 'There is an Approved shipment, please check it AWB00004', 'F', 1, '0', '2020-03-08 02:21:21', '2020-03-08 02:21:21'),
(15, '+14075054816', '0505699425', 'There is an Approved shipment, please check it AWB00004', 'F', 1, '0', '2020-03-08 02:21:22', '2020-03-08 02:21:22'),
(16, '+14075054816', '971566540960', 'There is a new shipment, please check it AWB00005', 'F', 1, '0', '2020-03-08 02:34:40', '2020-03-08 02:34:40'),
(17, '+14075054816', '971505699425', 'There is a new shipment, please check it AWB00005', 'F', 1, '0', '2020-03-08 02:34:41', '2020-03-08 02:34:41'),
(18, '+14075054816', '971566540960', 'There is an Approved shipment, please check it AWB00005', 'F', 1, '0', '2020-03-08 02:35:33', '2020-03-08 02:35:33'),
(19, '+14075054816', '971505699425', 'There is an Approved shipment, please check it AWB00005', 'F', 1, '0', '2020-03-08 02:35:34', '2020-03-08 02:35:34'),
(20, '+14075054816', '971566540960', 'The shipment has been received by the driver, please check it AWB00005', 'F', 1, '0', '2020-03-08 02:37:55', '2020-03-08 02:37:55'),
(21, '+14075054816', '971505699425', 'The shipment has been received by the driver, please check it AWB00005', 'F', 1, '0', '2020-03-08 02:37:55', '2020-03-08 02:37:55'),
(22, '+14075054816', '971566540960', 'New notes has been added on shipment AWB00005', 'F', 1, '0', '2020-03-12 16:07:38', '2020-03-12 16:07:38'),
(23, '+14075054816', '971505699425', 'New notes has been added on shipment AWB00005', 'F', 1, '0', '2020-03-12 16:07:39', '2020-03-12 16:07:39'),
(24, '+14075054816', '050', 'New notes has been added on shipment AWB00005', 'F', 1, '0', '2020-03-12 16:07:39', '2020-03-12 16:07:39'),
(25, '+14075054816', '971566540960', 'New notes has been added on shipment AWB00005', 'F', 1, '0', '2020-03-12 16:10:50', '2020-03-12 16:10:50'),
(26, '+14075054816', '971505699425', 'New notes has been added on shipment AWB00005', 'F', 1, '0', '2020-03-12 16:10:51', '2020-03-12 16:10:51'),
(27, '+14075054816', '050', 'New notes has been added on shipment AWB00005', 'F', 1, '0', '2020-03-12 16:10:51', '2020-03-12 16:10:51'),
(28, '+14075054816', '971566540960', 'New notes has been added on shipment AWB00005', 'F', 1, '0', '2020-03-12 16:13:03', '2020-03-12 16:13:03'),
(29, '+14075054816', '971505699425', 'New notes has been added on shipment AWB00005', 'F', 1, '0', '2020-03-12 16:13:04', '2020-03-12 16:13:04'),
(30, '+14075054816', '050', 'New notes has been added on shipment AWB00005', 'F', 1, '0', '2020-03-12 16:13:04', '2020-03-12 16:13:04'),
(31, '+14075054816', '971566540960', 'New notes has been added on shipment AWB00004', 'F', 1, '0', '2020-03-13 12:06:15', '2020-03-13 12:06:15'),
(32, '+14075054816', '971505699425', 'New notes has been added on shipment AWB00004', 'F', 1, '0', '2020-03-13 12:06:15', '2020-03-13 12:06:15'),
(33, '+14075054816', '050', 'New notes has been added on shipment AWB00004', 'F', 1, '0', '2020-03-13 12:06:16', '2020-03-13 12:06:16'),
(34, '+14075054816', '971505699425', 'There is an Approved shipment, please check it AWB00006', 'F', 1, '0', '2020-03-13 12:08:30', '2020-03-13 12:08:30'),
(35, '+14075054816', '971505699425', 'New notes has been added on shipment AWB00006', 'F', 1, '0', '2020-03-13 12:12:41', '2020-03-13 12:12:41'),
(36, '+14075054816', '971505699425', 'New notes has been added on shipment AWB00006', 'F', 1, '0', '2020-03-13 12:15:34', '2020-03-13 12:15:34'),
(37, '+14075054816', '971505699425', 'New notes has been added on shipment AWB00006', 'F', 1, '0', '2020-03-13 12:16:34', '2020-03-13 12:16:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activation_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persist_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `is_activated` tinyint(1) NOT NULL DEFAULT '0',
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `last_seen` timestamp NULL DEFAULT NULL,
  `is_guest` tinyint(1) NOT NULL DEFAULT '0',
  `is_superuser` tinyint(1) NOT NULL DEFAULT '0',
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_addr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_id` int(10) UNSIGNED DEFAULT NULL,
  `country_id` int(10) UNSIGNED DEFAULT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `area_id` int(11) DEFAULT NULL,
  `manager` text COLLATE utf8mb4_unicode_ci,
  `places` text COLLATE utf8mb4_unicode_ci,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `driver` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `devicetoken` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat_number` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budget` int(100) DEFAULT NULL,
  `box` int(10) DEFAULT NULL,
  `lang_id` int(10) DEFAULT NULL,
  `custom_clearance` int(100) DEFAULT NULL,
  `fiscal_representation` int(50) DEFAULT NULL,
  `payment_term` int(50) DEFAULT NULL,
  `price_kg` int(50) DEFAULT NULL,
  `storage_fee` tinyint(2) DEFAULT NULL,
  `cost_24` int(50) DEFAULT NULL,
  `cost_48` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `activation_code`, `persist_code`, `reset_password_code`, `permissions`, `is_activated`, `activated_at`, `last_login`, `created_at`, `updated_at`, `username`, `surname`, `deleted_at`, `last_seen`, `is_guest`, `is_superuser`, `phone`, `company`, `street_addr`, `city`, `zip`, `state_id`, `country_id`, `mobile`, `role_id`, `city_id`, `area_id`, `manager`, `places`, `gender`, `driver`, `office`, `language`, `devicetoken`, `vat_number`, `budget`, `box`, `lang_id`, `custom_clearance`, `fiscal_representation`, `payment_term`, `price_kg`, `storage_fee`, `cost_24`, `cost_48`) VALUES
(1, 'System Administration', 'info@spotlayer.com', '$2y$10$jQSJ1ExYUxa.JMUPkKWjce/Q5TBazH4hNzdcfqBiK5uX.Oarnd.XO', NULL, '$2y$10$uvru0LzpDdz.9UfqAF5lme3QAutguHppNIRLSMNz9D433NTNAgMzy', NULL, NULL, 1, '2019-11-24 08:42:01', '2020-06-29 16:25:53', '2019-11-24 08:42:01', '2020-06-29 16:25:53', 'admin', 'Courier Administration', NULL, '2020-06-29 16:22:20', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 253, NULL, 1, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Employee', 'employee@spotlayer.com', '$2y$10$EPPRFQ7fROXHMSL6wrxRaukijNZvTBlY0uDGwb0zQu90ryb1zWiea', NULL, '$2y$10$UCp20sNsilrVA0l6JW5kweWbSJ2HhVuSZS1KtCyaJzXzh6gkogpla', NULL, NULL, 1, '2020-03-08 00:42:08', '2020-06-29 15:58:52', '2020-03-08 00:42:08', '2020-06-29 15:58:52', 'employee', NULL, NULL, '2020-06-29 15:58:53', 0, 0, '', NULL, '', NULL, '', 653, 253, '0501542451111', 4, 1, NULL, NULL, NULL, NULL, '0', '1', NULL, '098978b9-9176-4bee-89ca-da8362387b45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Client', 'client@cargopro.com', '$2y$10$jQSJ1ExYUxa.JMUPkKWjce/Q5TBazH4hNzdcfqBiK5uX.Oarnd.XO', NULL, NULL, NULL, NULL, 1, '2019-11-24 08:42:01', '2020-06-29 15:56:00', '2020-03-08 00:45:15', '2020-06-29 15:57:46', 'client', NULL, NULL, '2020-06-29 15:55:59', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '009715661238541', 5, NULL, NULL, NULL, NULL, 'male', NULL, NULL, NULL, 'ec132079-7f7c-4d93-8000-d521179c18e9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Driver', 'driver@spotlaeyr.com', '$2y$10$8VHkZOqMimfCF6EHMZedLOpecBa1IcVa44hj5A029XSNHOJOGCXEm', NULL, NULL, NULL, NULL, 1, '2020-03-14 02:06:23', '2020-06-29 15:57:57', '2020-03-14 02:06:23', '2020-06-29 15:58:42', 'driver', NULL, NULL, '2020-06-29 15:57:57', 0, 0, '', NULL, '', NULL, '', NULL, NULL, '01008112687', 4, NULL, NULL, NULL, NULL, NULL, '1', '1', NULL, 'c4402410-7d80-470a-a0b3-9d6d221a769f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_group_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_contact`
--

CREATE TABLE `user_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE `user_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_throttle`
--

CREATE TABLE `user_throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `suspended_at` timestamp NULL DEFAULT NULL,
  `is_banned` tinyint(1) NOT NULL DEFAULT '0',
  `banned_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_throttle`
--

INSERT INTO `user_throttle` (`id`, `user_id`, `ip_address`, `attempts`, `last_attempt_at`, `is_suspended`, `suspended_at`, `is_banned`, `banned_at`) VALUES
(1, 1, '197.62.168.98', 0, NULL, 0, NULL, 0, NULL),
(2, 1, '190.146.199.169', 0, NULL, 0, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vdomah_roles_permissions`
--

CREATE TABLE `vdomah_roles_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vdomah_roles_roles`
--

CREATE TABLE `vdomah_roles_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vdomah_roles_roles`
--

INSERT INTO `vdomah_roles_roles` (`id`, `name`, `parent_id`, `code`) VALUES
(1, 'General Manager', NULL, 'administration'),
(2, 'Supervisor', 1, 'supervisor'),
(3, 'Department Manager', 2, 'department-manager'),
(4, 'Employee', 3, 'employee'),
(5, 'Client', NULL, 'client'),
(6, 'Branch Manager', 1, 'branch-manager');

-- --------------------------------------------------------

--
-- Table structure for table `zainab_simplecontact_contact`
--

CREATE TABLE `zainab_simplecontact_contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `is_new` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_replied` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backend_access_log`
--
ALTER TABLE `backend_access_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `backend_users`
--
ALTER TABLE `backend_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login_unique` (`login`),
  ADD UNIQUE KEY `email_unique` (`email`),
  ADD KEY `act_code_index` (`activation_code`),
  ADD KEY `reset_code_index` (`reset_password_code`),
  ADD KEY `admin_role_index` (`role_id`);

--
-- Indexes for table `backend_users_groups`
--
ALTER TABLE `backend_users_groups`
  ADD PRIMARY KEY (`user_id`,`user_group_id`);

--
-- Indexes for table `backend_user_groups`
--
ALTER TABLE `backend_user_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_unique` (`name`),
  ADD KEY `code_index` (`code`);

--
-- Indexes for table `backend_user_preferences`
--
ALTER TABLE `backend_user_preferences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_item_index` (`user_id`,`namespace`,`group`,`item`);

--
-- Indexes for table `backend_user_roles`
--
ALTER TABLE `backend_user_roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role_unique` (`name`),
  ADD KEY `role_code_index` (`code`);

--
-- Indexes for table `backend_user_throttle`
--
ALTER TABLE `backend_user_throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `backend_user_throttle_user_id_index` (`user_id`),
  ADD KEY `backend_user_throttle_ip_address_index` (`ip_address`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD UNIQUE KEY `cache_key_unique` (`key`);

--
-- Indexes for table `cms_theme_data`
--
ALTER TABLE `cms_theme_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_theme_data_theme_index` (`theme`);

--
-- Indexes for table `cms_theme_logs`
--
ALTER TABLE `cms_theme_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_theme_logs_type_index` (`type`),
  ADD KEY `cms_theme_logs_theme_index` (`theme`),
  ADD KEY `cms_theme_logs_user_id_index` (`user_id`);

--
-- Indexes for table `cms_theme_templates`
--
ALTER TABLE `cms_theme_templates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_theme_templates_source_index` (`source`),
  ADD KEY `cms_theme_templates_path_index` (`path`);

--
-- Indexes for table `deferred_bindings`
--
ALTER TABLE `deferred_bindings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deferred_bindings_master_type_index` (`master_type`),
  ADD KEY `deferred_bindings_master_field_index` (`master_field`),
  ADD KEY `deferred_bindings_slave_type_index` (`slave_type`),
  ADD KEY `deferred_bindings_slave_id_index` (`slave_id`),
  ADD KEY `deferred_bindings_session_key_index` (`session_key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jacob_logbook_logs`
--
ALTER TABLE `jacob_logbook_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jacob_logbook_logs_model_index` (`model`),
  ADD KEY `jacob_logbook_logs_model_key_index` (`model_key`),
  ADD KEY `jacob_logbook_logs_updated_at_index` (`updated_at`),
  ADD KEY `jacob_logbook_logs_backend_user_id_foreign` (`backend_user_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_reserved_at_index` (`queue`,`reserved_at`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `raccoon_geolocation_ip_info_locations`
--
ALTER TABLE `raccoon_geolocation_ip_info_locations`
  ADD PRIMARY KEY (`ip`);

--
-- Indexes for table `rainlab_location_countries`
--
ALTER TABLE `rainlab_location_countries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rainlab_location_countries_name_index` (`name`);

--
-- Indexes for table `rainlab_location_states`
--
ALTER TABLE `rainlab_location_states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rainlab_location_states_country_id_index` (`country_id`),
  ADD KEY `rainlab_location_states_name_index` (`name`);

--
-- Indexes for table `rainlab_notify_notifications`
--
ALTER TABLE `rainlab_notify_notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rainlab_notify_notifications_notifiable_id_notifiable_type_index` (`notifiable_id`,`notifiable_type`);

--
-- Indexes for table `rainlab_notify_notification_rules`
--
ALTER TABLE `rainlab_notify_notification_rules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rainlab_notify_notification_rules_code_index` (`code`);

--
-- Indexes for table `rainlab_notify_rule_actions`
--
ALTER TABLE `rainlab_notify_rule_actions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rainlab_notify_rule_actions_rule_host_id_index` (`rule_host_id`);

--
-- Indexes for table `rainlab_notify_rule_conditions`
--
ALTER TABLE `rainlab_notify_rule_conditions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `host_rule_id_type` (`rule_host_id`,`rule_host_type`),
  ADD KEY `rainlab_notify_rule_conditions_rule_host_id_index` (`rule_host_id`),
  ADD KEY `rainlab_notify_rule_conditions_rule_parent_id_index` (`rule_parent_id`);

--
-- Indexes for table `rainlab_translate_attributes`
--
ALTER TABLE `rainlab_translate_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rainlab_translate_attributes_locale_index` (`locale`),
  ADD KEY `rainlab_translate_attributes_model_id_index` (`model_id`),
  ADD KEY `rainlab_translate_attributes_model_type_index` (`model_type`);

--
-- Indexes for table `rainlab_translate_indexes`
--
ALTER TABLE `rainlab_translate_indexes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rainlab_translate_indexes_locale_index` (`locale`),
  ADD KEY `rainlab_translate_indexes_model_id_index` (`model_id`),
  ADD KEY `rainlab_translate_indexes_model_type_index` (`model_type`),
  ADD KEY `rainlab_translate_indexes_item_index` (`item`);

--
-- Indexes for table `rainlab_translate_locales`
--
ALTER TABLE `rainlab_translate_locales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rainlab_translate_locales_code_index` (`code`),
  ADD KEY `rainlab_translate_locales_name_index` (`name`);

--
-- Indexes for table `rainlab_translate_messages`
--
ALTER TABLE `rainlab_translate_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rainlab_translate_messages_code_index` (`code`(191));

--
-- Indexes for table `rainlab_user_mail_blockers`
--
ALTER TABLE `rainlab_user_mail_blockers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rainlab_user_mail_blockers_email_index` (`email`),
  ADD KEY `rainlab_user_mail_blockers_template_index` (`template`),
  ADD KEY `rainlab_user_mail_blockers_user_id_index` (`user_id`);

--
-- Indexes for table `responsiv_currency_currencies`
--
ALTER TABLE `responsiv_currency_currencies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `responsiv_currency_currencies_currency_code_index` (`currency_code`);

--
-- Indexes for table `responsiv_currency_exchange_converters`
--
ALTER TABLE `responsiv_currency_exchange_converters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `responsiv_currency_exchange_rates`
--
ALTER TABLE `responsiv_currency_exchange_rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `from_currency_to_currency` (`from_currency`,`to_currency`);

--
-- Indexes for table `responsiv_pay_invoices`
--
ALTER TABLE `responsiv_pay_invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `responsiv_pay_invoices_template_id_index` (`template_id`),
  ADD KEY `responsiv_pay_invoices_user_id_index` (`user_id`),
  ADD KEY `responsiv_pay_invoices_state_id_index` (`state_id`),
  ADD KEY `responsiv_pay_invoices_country_id_index` (`country_id`),
  ADD KEY `responsiv_pay_invoices_payment_method_id_index` (`payment_method_id`),
  ADD KEY `responsiv_pay_invoices_status_id_index` (`status_id`),
  ADD KEY `responsiv_pay_invoices_hash_index` (`hash`),
  ADD KEY `responsiv_pay_invoices_related_id_index` (`related_id`),
  ADD KEY `responsiv_pay_invoices_related_type_index` (`related_type`);

--
-- Indexes for table `responsiv_pay_invoice_items`
--
ALTER TABLE `responsiv_pay_invoice_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `responsiv_pay_invoice_items_invoice_id_index` (`invoice_id`),
  ADD KEY `responsiv_pay_invoice_items_tax_class_id_index` (`tax_class_id`),
  ADD KEY `responsiv_pay_invoice_items_related_id_index` (`related_id`),
  ADD KEY `responsiv_pay_invoice_items_related_type_index` (`related_type`);

--
-- Indexes for table `responsiv_pay_invoice_logs`
--
ALTER TABLE `responsiv_pay_invoice_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `responsiv_pay_invoice_logs_invoice_id_index` (`invoice_id`),
  ADD KEY `responsiv_pay_invoice_logs_admin_id_index` (`admin_id`);

--
-- Indexes for table `responsiv_pay_invoice_statuses`
--
ALTER TABLE `responsiv_pay_invoice_statuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `responsiv_pay_invoice_statuses_code_index` (`code`),
  ADD KEY `responsiv_pay_invoice_statuses_notify_template_index` (`notify_template`);

--
-- Indexes for table `responsiv_pay_invoice_status_logs`
--
ALTER TABLE `responsiv_pay_invoice_status_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `responsiv_pay_invoice_status_logs_invoice_id_index` (`invoice_id`),
  ADD KEY `responsiv_pay_invoice_status_logs_status_id_index` (`status_id`),
  ADD KEY `responsiv_pay_invoice_status_logs_admin_id_index` (`admin_id`);

--
-- Indexes for table `responsiv_pay_invoice_templates`
--
ALTER TABLE `responsiv_pay_invoice_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `responsiv_pay_methods`
--
ALTER TABLE `responsiv_pay_methods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `responsiv_pay_methods_code_index` (`code`);

--
-- Indexes for table `responsiv_pay_methods_countries`
--
ALTER TABLE `responsiv_pay_methods_countries`
  ADD PRIMARY KEY (`payment_method_id`,`country_id`);

--
-- Indexes for table `responsiv_pay_taxes`
--
ALTER TABLE `responsiv_pay_taxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `responsiv_pay_user_profiles`
--
ALTER TABLE `responsiv_pay_user_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `responsiv_pay_user_profiles_user_id_index` (`user_id`),
  ADD KEY `responsiv_pay_user_profiles_payment_method_id_index` (`payment_method_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `spot_container_customer`
--
ALTER TABLE `spot_container_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_container_destination`
--
ALTER TABLE `spot_container_destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_container_detail`
--
ALTER TABLE `spot_container_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_container_location`
--
ALTER TABLE `spot_container_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_container_order`
--
ALTER TABLE `spot_container_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_container_reason`
--
ALTER TABLE `spot_container_reason`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_container_size`
--
ALTER TABLE `spot_container_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_container_status`
--
ALTER TABLE `spot_container_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_shipment_activity`
--
ALTER TABLE `spot_shipment_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_shipment_address`
--
ALTER TABLE `spot_shipment_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_shipment_area`
--
ALTER TABLE `spot_shipment_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_shipment_break`
--
ALTER TABLE `spot_shipment_break`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_shipment_car`
--
ALTER TABLE `spot_shipment_car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_shipment_category`
--
ALTER TABLE `spot_shipment_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_shipment_city`
--
ALTER TABLE `spot_shipment_city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_shipment_courier`
--
ALTER TABLE `spot_shipment_courier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_shipment_delivery_time`
--
ALTER TABLE `spot_shipment_delivery_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_shipment_employee_order`
--
ALTER TABLE `spot_shipment_employee_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_shipment_fees`
--
ALTER TABLE `spot_shipment_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_shipment_handler`
--
ALTER TABLE `spot_shipment_handler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_shipment_history`
--
ALTER TABLE `spot_shipment_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_shipment_item`
--
ALTER TABLE `spot_shipment_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_shipment_label`
--
ALTER TABLE `spot_shipment_label`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_shipment_manifest`
--
ALTER TABLE `spot_shipment_manifest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_shipment_mode`
--
ALTER TABLE `spot_shipment_mode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_shipment_notes`
--
ALTER TABLE `spot_shipment_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_shipment_office`
--
ALTER TABLE `spot_shipment_office`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_shipment_order`
--
ALTER TABLE `spot_shipment_order`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `spot_shipment_order_barcode_unique` (`barcode`);

--
-- Indexes for table `spot_shipment_packaging`
--
ALTER TABLE `spot_shipment_packaging`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_shipment_payment`
--
ALTER TABLE `spot_shipment_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_shipment_status`
--
ALTER TABLE `spot_shipment_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_shipment_task`
--
ALTER TABLE `spot_shipment_task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_shipment_tracking`
--
ALTER TABLE `spot_shipment_tracking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_shipment_treasury`
--
ALTER TABLE `spot_shipment_treasury`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spot_userpermissions_group_permission`
--
ALTER TABLE `spot_userpermissions_group_permission`
  ADD PRIMARY KEY (`group_id`,`permission_id`);

--
-- Indexes for table `spot_userpermissions_permissions`
--
ALTER TABLE `spot_userpermissions_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `spot_userpermissions_permissions_code_unique` (`code`);

--
-- Indexes for table `spot_userpermissions_user_permission`
--
ALTER TABLE `spot_userpermissions_user_permission`
  ADD PRIMARY KEY (`user_id`,`permission_id`);

--
-- Indexes for table `successivesoftware_paypal_orders`
--
ALTER TABLE `successivesoftware_paypal_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_event_logs`
--
ALTER TABLE `system_event_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_event_logs_level_index` (`level`);

--
-- Indexes for table `system_files`
--
ALTER TABLE `system_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_files_field_index` (`field`),
  ADD KEY `system_files_attachment_id_index` (`attachment_id`),
  ADD KEY `system_files_attachment_type_index` (`attachment_type`);

--
-- Indexes for table `system_mail_layouts`
--
ALTER TABLE `system_mail_layouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_mail_partials`
--
ALTER TABLE `system_mail_partials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_mail_templates`
--
ALTER TABLE `system_mail_templates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_mail_templates_layout_id_index` (`layout_id`);

--
-- Indexes for table `system_parameters`
--
ALTER TABLE `system_parameters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_index` (`namespace`,`group`,`item`);

--
-- Indexes for table `system_plugin_history`
--
ALTER TABLE `system_plugin_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_plugin_history_code_index` (`code`),
  ADD KEY `system_plugin_history_type_index` (`type`);

--
-- Indexes for table `system_plugin_versions`
--
ALTER TABLE `system_plugin_versions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_plugin_versions_code_index` (`code`);

--
-- Indexes for table `system_request_logs`
--
ALTER TABLE `system_request_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_revisions`
--
ALTER TABLE `system_revisions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_revisions_revisionable_id_revisionable_type_index` (`revisionable_id`,`revisionable_type`),
  ADD KEY `system_revisions_user_id_index` (`user_id`),
  ADD KEY `system_revisions_field_index` (`field`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_settings_item_index` (`item`);

--
-- Indexes for table `tiipiik_smssender_message_histories`
--
ALTER TABLE `tiipiik_smssender_message_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_login_unique` (`username`),
  ADD KEY `users_activation_code_index` (`activation_code`),
  ADD KEY `users_reset_password_code_index` (`reset_password_code`),
  ADD KEY `users_login_index` (`username`),
  ADD KEY `users_state_id_index` (`state_id`),
  ADD KEY `users_country_id_index` (`country_id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`user_id`,`user_group_id`);

--
-- Indexes for table `user_contact`
--
ALTER TABLE `user_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_groups_code_index` (`code`);

--
-- Indexes for table `user_throttle`
--
ALTER TABLE `user_throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_throttle_user_id_index` (`user_id`),
  ADD KEY `user_throttle_ip_address_index` (`ip_address`);

--
-- Indexes for table `vdomah_roles_permissions`
--
ALTER TABLE `vdomah_roles_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vdomah_roles_roles`
--
ALTER TABLE `vdomah_roles_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zainab_simplecontact_contact`
--
ALTER TABLE `zainab_simplecontact_contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backend_access_log`
--
ALTER TABLE `backend_access_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `backend_users`
--
ALTER TABLE `backend_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `backend_user_groups`
--
ALTER TABLE `backend_user_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `backend_user_preferences`
--
ALTER TABLE `backend_user_preferences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `backend_user_roles`
--
ALTER TABLE `backend_user_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `backend_user_throttle`
--
ALTER TABLE `backend_user_throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `cms_theme_data`
--
ALTER TABLE `cms_theme_data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms_theme_logs`
--
ALTER TABLE `cms_theme_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms_theme_templates`
--
ALTER TABLE `cms_theme_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deferred_bindings`
--
ALTER TABLE `deferred_bindings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jacob_logbook_logs`
--
ALTER TABLE `jacob_logbook_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `rainlab_location_countries`
--
ALTER TABLE `rainlab_location_countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;

--
-- AUTO_INCREMENT for table `rainlab_location_states`
--
ALTER TABLE `rainlab_location_states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=707;

--
-- AUTO_INCREMENT for table `rainlab_notify_notification_rules`
--
ALTER TABLE `rainlab_notify_notification_rules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rainlab_notify_rule_actions`
--
ALTER TABLE `rainlab_notify_rule_actions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rainlab_notify_rule_conditions`
--
ALTER TABLE `rainlab_notify_rule_conditions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rainlab_translate_attributes`
--
ALTER TABLE `rainlab_translate_attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `rainlab_translate_indexes`
--
ALTER TABLE `rainlab_translate_indexes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rainlab_translate_locales`
--
ALTER TABLE `rainlab_translate_locales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rainlab_translate_messages`
--
ALTER TABLE `rainlab_translate_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1569;

--
-- AUTO_INCREMENT for table `rainlab_user_mail_blockers`
--
ALTER TABLE `rainlab_user_mail_blockers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `responsiv_currency_currencies`
--
ALTER TABLE `responsiv_currency_currencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `responsiv_currency_exchange_converters`
--
ALTER TABLE `responsiv_currency_exchange_converters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `responsiv_currency_exchange_rates`
--
ALTER TABLE `responsiv_currency_exchange_rates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `responsiv_pay_invoices`
--
ALTER TABLE `responsiv_pay_invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `responsiv_pay_invoice_items`
--
ALTER TABLE `responsiv_pay_invoice_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `responsiv_pay_invoice_logs`
--
ALTER TABLE `responsiv_pay_invoice_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `responsiv_pay_invoice_statuses`
--
ALTER TABLE `responsiv_pay_invoice_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `responsiv_pay_invoice_status_logs`
--
ALTER TABLE `responsiv_pay_invoice_status_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `responsiv_pay_invoice_templates`
--
ALTER TABLE `responsiv_pay_invoice_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `responsiv_pay_methods`
--
ALTER TABLE `responsiv_pay_methods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `responsiv_pay_taxes`
--
ALTER TABLE `responsiv_pay_taxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `responsiv_pay_user_profiles`
--
ALTER TABLE `responsiv_pay_user_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spot_container_customer`
--
ALTER TABLE `spot_container_customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spot_container_destination`
--
ALTER TABLE `spot_container_destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `spot_container_detail`
--
ALTER TABLE `spot_container_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spot_container_location`
--
ALTER TABLE `spot_container_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `spot_container_order`
--
ALTER TABLE `spot_container_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spot_container_reason`
--
ALTER TABLE `spot_container_reason`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `spot_container_size`
--
ALTER TABLE `spot_container_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `spot_container_status`
--
ALTER TABLE `spot_container_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `spot_shipment_activity`
--
ALTER TABLE `spot_shipment_activity`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spot_shipment_address`
--
ALTER TABLE `spot_shipment_address`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spot_shipment_area`
--
ALTER TABLE `spot_shipment_area`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `spot_shipment_break`
--
ALTER TABLE `spot_shipment_break`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `spot_shipment_car`
--
ALTER TABLE `spot_shipment_car`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `spot_shipment_category`
--
ALTER TABLE `spot_shipment_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `spot_shipment_city`
--
ALTER TABLE `spot_shipment_city`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `spot_shipment_courier`
--
ALTER TABLE `spot_shipment_courier`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `spot_shipment_delivery_time`
--
ALTER TABLE `spot_shipment_delivery_time`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `spot_shipment_employee_order`
--
ALTER TABLE `spot_shipment_employee_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spot_shipment_fees`
--
ALTER TABLE `spot_shipment_fees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `spot_shipment_handler`
--
ALTER TABLE `spot_shipment_handler`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `spot_shipment_history`
--
ALTER TABLE `spot_shipment_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spot_shipment_item`
--
ALTER TABLE `spot_shipment_item`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spot_shipment_label`
--
ALTER TABLE `spot_shipment_label`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `spot_shipment_manifest`
--
ALTER TABLE `spot_shipment_manifest`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spot_shipment_mode`
--
ALTER TABLE `spot_shipment_mode`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `spot_shipment_notes`
--
ALTER TABLE `spot_shipment_notes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spot_shipment_office`
--
ALTER TABLE `spot_shipment_office`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `spot_shipment_order`
--
ALTER TABLE `spot_shipment_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spot_shipment_packaging`
--
ALTER TABLE `spot_shipment_packaging`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `spot_shipment_payment`
--
ALTER TABLE `spot_shipment_payment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spot_shipment_status`
--
ALTER TABLE `spot_shipment_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `spot_shipment_task`
--
ALTER TABLE `spot_shipment_task`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spot_shipment_tracking`
--
ALTER TABLE `spot_shipment_tracking`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spot_shipment_treasury`
--
ALTER TABLE `spot_shipment_treasury`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `spot_userpermissions_permissions`
--
ALTER TABLE `spot_userpermissions_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `successivesoftware_paypal_orders`
--
ALTER TABLE `successivesoftware_paypal_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_event_logs`
--
ALTER TABLE `system_event_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_files`
--
ALTER TABLE `system_files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `system_mail_layouts`
--
ALTER TABLE `system_mail_layouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `system_mail_partials`
--
ALTER TABLE `system_mail_partials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `system_mail_templates`
--
ALTER TABLE `system_mail_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `system_parameters`
--
ALTER TABLE `system_parameters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `system_plugin_history`
--
ALTER TABLE `system_plugin_history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `system_plugin_versions`
--
ALTER TABLE `system_plugin_versions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `system_request_logs`
--
ALTER TABLE `system_request_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_revisions`
--
ALTER TABLE `system_revisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tiipiik_smssender_message_histories`
--
ALTER TABLE `tiipiik_smssender_message_histories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_contact`
--
ALTER TABLE `user_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_throttle`
--
ALTER TABLE `user_throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vdomah_roles_permissions`
--
ALTER TABLE `vdomah_roles_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vdomah_roles_roles`
--
ALTER TABLE `vdomah_roles_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `zainab_simplecontact_contact`
--
ALTER TABLE `zainab_simplecontact_contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
