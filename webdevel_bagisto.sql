-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 01, 2021 at 04:01 PM
-- Server version: 5.7.33
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdevel_bagisto`
--

DELIMITER $$
--
-- Functions
--
$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `address_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'null if guest checkout',
  `cart_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'only for cart_addresses',
  `order_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'only for order_addresses',
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_address` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'only for customer_addresses',
  `additional` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `address_type`, `customer_id`, `cart_id`, `order_id`, `first_name`, `last_name`, `gender`, `company_name`, `address1`, `address2`, `postcode`, `city`, `state`, `country`, `email`, `phone`, `vat_id`, `default_address`, `additional`, `created_at`, `updated_at`) VALUES
(1, 'cart_billing', NULL, 1, NULL, 'pega', 'logics', NULL, 'pegalogics', 'sector 16', NULL, '271010', 'nodia', 'UP', 'IN', 'pegalogics@gmail.com', '8417891491', NULL, 0, NULL, '2021-03-23 05:56:44', '2021-03-23 05:56:44'),
(2, 'cart_shipping', NULL, 1, NULL, 'pega', 'logics', NULL, 'pegalogics', 'sector 16', NULL, '271010', 'nodia', 'UP', 'IN', 'pegalogics@gmail.com', '8417891491', NULL, 0, NULL, '2021-03-23 05:56:44', '2021-03-23 05:56:44'),
(3, 'order_shipping', NULL, NULL, 1, 'pega', 'logics', NULL, 'pegalogics', 'sector 16', NULL, '271010', 'nodia', 'UP', 'IN', 'pegalogics@gmail.com', '8417891491', NULL, 0, NULL, '2021-03-23 05:57:08', '2021-03-23 05:57:08'),
(4, 'order_billing', NULL, NULL, 1, 'pega', 'logics', NULL, 'pegalogics', 'sector 16', NULL, '271010', 'nodia', 'UP', 'IN', 'pegalogics@gmail.com', '8417891491', NULL, 0, NULL, '2021-03-23 05:57:08', '2021-03-23 05:57:08');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_token` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `role_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `api_token`, `status`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Example', 'admin@example.com', '$2y$10$a4V9Vbqz.5bAYbli8dYvjelCDhYvP1s8bKNTkDVhMGM7GrSx41N7C', 'UJ6Dxx8rx6X4t48fiSAO0kVQe93rFl2OgTI6nJBTn45pK2BMZMk3fRhEmvWoCcsuJjklZw6gmTlBKOv2', 1, 1, NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19');

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `is_required` tinyint(1) NOT NULL DEFAULT '0',
  `is_unique` tinyint(1) NOT NULL DEFAULT '0',
  `value_per_locale` tinyint(1) NOT NULL DEFAULT '0',
  `value_per_channel` tinyint(1) NOT NULL DEFAULT '0',
  `is_filterable` tinyint(1) NOT NULL DEFAULT '0',
  `is_configurable` tinyint(1) NOT NULL DEFAULT '0',
  `is_user_defined` tinyint(1) NOT NULL DEFAULT '1',
  `is_visible_on_front` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `swatch_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `use_in_flat` tinyint(1) NOT NULL DEFAULT '1',
  `is_comparable` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `code`, `admin_name`, `type`, `validation`, `position`, `is_required`, `is_unique`, `value_per_locale`, `value_per_channel`, `is_filterable`, `is_configurable`, `is_user_defined`, `is_visible_on_front`, `created_at`, `updated_at`, `swatch_type`, `use_in_flat`, `is_comparable`) VALUES
(1, 'sku', 'SKU', 'text', NULL, 1, 1, 1, 0, 0, 0, 0, 0, 0, '2021-03-20 09:44:19', '2021-03-20 09:44:19', NULL, 1, 0),
(2, 'name', 'Name', 'text', NULL, 3, 1, 0, 1, 1, 0, 0, 0, 0, '2021-03-20 09:44:19', '2021-03-20 09:44:19', NULL, 1, 1),
(3, 'url_key', 'URL Key', 'text', NULL, 4, 1, 1, 0, 0, 0, 0, 0, 0, '2021-03-20 09:44:19', '2021-03-20 09:44:19', NULL, 1, 0),
(4, 'tax_category_id', 'Tax Category', 'select', NULL, 5, 0, 0, 0, 1, 0, 0, 0, 0, '2021-03-20 09:44:19', '2021-03-20 09:44:19', NULL, 1, 0),
(5, 'new', 'New', 'boolean', NULL, 6, 0, 0, 0, 0, 0, 0, 0, 0, '2021-03-20 09:44:19', '2021-03-20 09:44:19', NULL, 1, 0),
(6, 'featured', 'Featured', 'boolean', NULL, 7, 0, 0, 0, 0, 0, 0, 0, 0, '2021-03-20 09:44:19', '2021-03-20 09:44:19', NULL, 1, 0),
(7, 'visible_individually', 'Visible Individually', 'boolean', NULL, 9, 1, 0, 0, 0, 0, 0, 0, 0, '2021-03-20 09:44:19', '2021-03-20 09:44:19', NULL, 1, 0),
(8, 'status', 'Status', 'boolean', NULL, 10, 1, 0, 0, 0, 0, 0, 0, 0, '2021-03-20 09:44:19', '2021-03-20 09:44:19', NULL, 1, 0),
(9, 'short_description', 'Short Description', 'textarea', NULL, 11, 1, 0, 1, 1, 0, 0, 0, 0, '2021-03-20 09:44:19', '2021-03-20 09:44:19', NULL, 1, 0),
(10, 'description', 'Description', 'textarea', NULL, 12, 1, 0, 1, 1, 0, 0, 0, 0, '2021-03-20 09:44:19', '2021-03-20 09:44:19', NULL, 1, 1),
(11, 'price', 'Price', 'price', 'decimal', 13, 1, 0, 0, 0, 1, 0, 0, 0, '2021-03-20 09:44:19', '2021-03-20 09:44:19', NULL, 1, 1),
(12, 'cost', 'Cost', 'price', 'decimal', 14, 0, 0, 0, 1, 0, 0, 1, 0, '2021-03-20 09:44:19', '2021-03-20 09:44:19', NULL, 1, 0),
(13, 'special_price', 'Special Price', 'price', 'decimal', 15, 0, 0, 0, 0, 0, 0, 0, 0, '2021-03-20 09:44:19', '2021-03-20 09:44:19', NULL, 1, 0),
(14, 'special_price_from', 'Special Price From', 'date', NULL, 16, 0, 0, 0, 1, 0, 0, 0, 0, '2021-03-20 09:44:19', '2021-03-20 09:44:19', NULL, 1, 0),
(15, 'special_price_to', 'Special Price To', 'date', NULL, 17, 0, 0, 0, 1, 0, 0, 0, 0, '2021-03-20 09:44:19', '2021-03-20 09:44:19', NULL, 1, 0),
(16, 'meta_title', 'Meta Title', 'textarea', NULL, 18, 0, 0, 1, 1, 0, 0, 0, 0, '2021-03-20 09:44:19', '2021-03-20 09:44:19', NULL, 1, 0),
(17, 'meta_keywords', 'Meta Keywords', 'textarea', NULL, 20, 0, 0, 1, 1, 0, 0, 0, 0, '2021-03-20 09:44:19', '2021-03-20 09:44:19', NULL, 1, 0),
(18, 'meta_description', 'Meta Description', 'textarea', NULL, 21, 0, 0, 1, 1, 0, 0, 1, 0, '2021-03-20 09:44:19', '2021-03-20 09:44:19', NULL, 1, 0),
(19, 'width', 'Width', 'text', 'decimal', 22, 0, 0, 0, 0, 0, 0, 1, 0, '2021-03-20 09:44:19', '2021-03-20 09:44:19', NULL, 1, 0),
(20, 'height', 'Height', 'text', 'decimal', 23, 0, 0, 0, 0, 0, 0, 1, 0, '2021-03-20 09:44:19', '2021-03-20 09:44:19', NULL, 1, 0),
(21, 'depth', 'Depth', 'text', 'decimal', 24, 0, 0, 0, 0, 0, 0, 1, 0, '2021-03-20 09:44:19', '2021-03-20 09:44:19', NULL, 1, 0),
(22, 'weight', 'Weight', 'text', 'decimal', 25, 1, 0, 0, 0, 0, 0, 0, 0, '2021-03-20 09:44:19', '2021-03-20 09:44:19', NULL, 1, 0),
(23, 'color', 'Color', 'select', NULL, 26, 0, 0, 0, 0, 1, 1, 1, 0, '2021-03-20 09:44:19', '2021-03-20 09:44:19', NULL, 1, 0),
(24, 'size', 'Size', 'select', NULL, 27, 0, 0, 0, 0, 1, 1, 1, 0, '2021-03-20 09:44:19', '2021-03-20 09:44:19', NULL, 1, 0),
(25, 'brand', 'Brand', 'select', NULL, 28, 0, 0, 0, 0, 1, 0, 1, 1, '2021-03-20 09:44:19', '2021-03-20 09:44:19', NULL, 1, 0),
(26, 'guest_checkout', 'Guest Checkout', 'boolean', NULL, 8, 1, 0, 0, 0, 0, 0, 0, 0, '2021-03-20 09:44:19', '2021-03-20 09:44:19', NULL, 1, 0),
(27, 'product_number', 'Product Number', 'text', NULL, 2, 0, 1, 0, 0, 0, 0, 0, 0, '2021-03-20 09:44:19', '2021-03-20 09:44:19', NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `attribute_families`
--

CREATE TABLE `attribute_families` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `is_user_defined` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `attribute_families`
--

INSERT INTO `attribute_families` (`id`, `code`, `name`, `status`, `is_user_defined`) VALUES
(1, 'default', 'Default', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `attribute_groups`
--

CREATE TABLE `attribute_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `is_user_defined` tinyint(1) NOT NULL DEFAULT '1',
  `attribute_family_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `attribute_groups`
--

INSERT INTO `attribute_groups` (`id`, `name`, `position`, `is_user_defined`, `attribute_family_id`) VALUES
(1, 'General', 1, 0, 1),
(2, 'Description', 2, 0, 1),
(3, 'Meta Description', 3, 0, 1),
(4, 'Price', 4, 0, 1),
(5, 'Shipping', 5, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `attribute_group_mappings`
--

CREATE TABLE `attribute_group_mappings` (
  `attribute_id` int(10) UNSIGNED NOT NULL,
  `attribute_group_id` int(10) UNSIGNED NOT NULL,
  `position` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `attribute_group_mappings`
--

INSERT INTO `attribute_group_mappings` (`attribute_id`, `attribute_group_id`, `position`) VALUES
(1, 1, 1),
(2, 1, 3),
(3, 1, 4),
(4, 1, 5),
(5, 1, 6),
(6, 1, 7),
(7, 1, 8),
(8, 1, 10),
(9, 2, 1),
(10, 2, 2),
(11, 4, 1),
(12, 4, 2),
(13, 4, 3),
(14, 4, 4),
(15, 4, 5),
(16, 3, 1),
(17, 3, 2),
(18, 3, 3),
(19, 5, 1),
(20, 5, 2),
(21, 5, 3),
(22, 5, 4),
(23, 1, 11),
(24, 1, 12),
(25, 1, 13),
(26, 1, 9),
(27, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `attribute_options`
--

CREATE TABLE `attribute_options` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `attribute_id` int(10) UNSIGNED NOT NULL,
  `swatch_value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `attribute_options`
--

INSERT INTO `attribute_options` (`id`, `admin_name`, `sort_order`, `attribute_id`, `swatch_value`) VALUES
(1, 'Red', 1, 23, NULL),
(2, 'Green', 2, 23, NULL),
(3, 'Yellow', 3, 23, NULL),
(4, 'Black', 4, 23, NULL),
(5, 'White', 5, 23, NULL),
(6, 'S', 1, 24, NULL),
(7, 'M', 2, 24, NULL),
(8, 'L', 3, 24, NULL),
(9, 'XL', 4, 24, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attribute_option_translations`
--

CREATE TABLE `attribute_option_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` text COLLATE utf8mb4_unicode_ci,
  `attribute_option_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `attribute_option_translations`
--

INSERT INTO `attribute_option_translations` (`id`, `locale`, `label`, `attribute_option_id`) VALUES
(1, 'en', 'Red', 1),
(2, 'en', 'Green', 2),
(3, 'en', 'Yellow', 3),
(4, 'en', 'Black', 4),
(5, 'en', 'White', 5),
(6, 'en', 'S', 6),
(7, 'en', 'M', 7),
(8, 'en', 'L', 8),
(9, 'en', 'XL', 9);

-- --------------------------------------------------------

--
-- Table structure for table `attribute_translations`
--

CREATE TABLE `attribute_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `attribute_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `attribute_translations`
--

INSERT INTO `attribute_translations` (`id`, `locale`, `name`, `attribute_id`) VALUES
(1, 'en', 'SKU', 1),
(2, 'en', 'Name', 2),
(3, 'en', 'URL Key', 3),
(4, 'en', 'Tax Category', 4),
(5, 'en', 'New', 5),
(6, 'en', 'Featured', 6),
(7, 'en', 'Visible Individually', 7),
(8, 'en', 'Status', 8),
(9, 'en', 'Short Description', 9),
(10, 'en', 'Description', 10),
(11, 'en', 'Price', 11),
(12, 'en', 'Cost', 12),
(13, 'en', 'Special Price', 13),
(14, 'en', 'Special Price From', 14),
(15, 'en', 'Special Price To', 15),
(16, 'en', 'Meta Description', 16),
(17, 'en', 'Meta Keywords', 17),
(18, 'en', 'Meta Description', 18),
(19, 'en', 'Width', 19),
(20, 'en', 'Height', 20),
(21, 'en', 'Depth', 21),
(22, 'en', 'Weight', 22),
(23, 'en', 'Color', 23),
(24, 'en', 'Size', 24),
(25, 'en', 'Brand', 25),
(26, 'en', 'Allow Guest Checkout', 26),
(27, 'en', 'Product Number', 27);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) DEFAULT '0',
  `from` int(11) DEFAULT NULL,
  `to` int(11) DEFAULT NULL,
  `order_item_id` int(10) UNSIGNED DEFAULT NULL,
  `booking_product_event_ticket_id` int(10) UNSIGNED DEFAULT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `booking_products`
--

CREATE TABLE `booking_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) DEFAULT '0',
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_location` tinyint(1) NOT NULL DEFAULT '0',
  `available_every_week` tinyint(1) DEFAULT NULL,
  `available_from` datetime DEFAULT NULL,
  `available_to` datetime DEFAULT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `booking_product_appointment_slots`
--

CREATE TABLE `booking_product_appointment_slots` (
  `id` int(10) UNSIGNED NOT NULL,
  `duration` int(11) DEFAULT NULL,
  `break_time` int(11) DEFAULT NULL,
  `same_slot_all_days` tinyint(1) DEFAULT NULL,
  `slots` json DEFAULT NULL,
  `booking_product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `booking_product_default_slots`
--

CREATE TABLE `booking_product_default_slots` (
  `id` int(10) UNSIGNED NOT NULL,
  `booking_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` int(11) DEFAULT NULL,
  `break_time` int(11) DEFAULT NULL,
  `slots` json DEFAULT NULL,
  `booking_product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `booking_product_event_tickets`
--

CREATE TABLE `booking_product_event_tickets` (
  `id` int(10) UNSIGNED NOT NULL,
  `price` decimal(12,4) DEFAULT '0.0000',
  `qty` int(11) DEFAULT '0',
  `special_price` decimal(12,4) DEFAULT NULL,
  `special_price_from` datetime DEFAULT NULL,
  `special_price_to` datetime DEFAULT NULL,
  `booking_product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `booking_product_event_ticket_translations`
--

CREATE TABLE `booking_product_event_ticket_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `booking_product_event_ticket_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `booking_product_rental_slots`
--

CREATE TABLE `booking_product_rental_slots` (
  `id` int(10) UNSIGNED NOT NULL,
  `renting_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daily_price` decimal(12,4) DEFAULT '0.0000',
  `hourly_price` decimal(12,4) DEFAULT '0.0000',
  `same_slot_all_days` tinyint(1) DEFAULT NULL,
  `slots` json DEFAULT NULL,
  `booking_product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `booking_product_table_slots`
--

CREATE TABLE `booking_product_table_slots` (
  `id` int(10) UNSIGNED NOT NULL,
  `price_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guest_limit` int(11) NOT NULL DEFAULT '0',
  `duration` int(11) NOT NULL,
  `break_time` int(11) NOT NULL,
  `prevent_scheduling_before` int(11) NOT NULL,
  `same_slot_all_days` tinyint(1) DEFAULT NULL,
  `slots` json DEFAULT NULL,
  `booking_product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_gift` tinyint(1) NOT NULL DEFAULT '0',
  `items_count` int(11) DEFAULT NULL,
  `items_qty` decimal(12,4) DEFAULT NULL,
  `exchange_rate` decimal(12,4) DEFAULT NULL,
  `global_currency_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `base_currency_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `channel_currency_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cart_currency_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grand_total` decimal(12,4) DEFAULT '0.0000',
  `base_grand_total` decimal(12,4) DEFAULT '0.0000',
  `sub_total` decimal(12,4) DEFAULT '0.0000',
  `base_sub_total` decimal(12,4) DEFAULT '0.0000',
  `tax_total` decimal(12,4) DEFAULT '0.0000',
  `base_tax_total` decimal(12,4) DEFAULT '0.0000',
  `discount_amount` decimal(12,4) DEFAULT '0.0000',
  `base_discount_amount` decimal(12,4) DEFAULT '0.0000',
  `checkout_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_guest` tinyint(1) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `conversion_time` datetime DEFAULT NULL,
  `customer_id` int(10) UNSIGNED DEFAULT NULL,
  `channel_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `applied_cart_rule_ids` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `customer_email`, `customer_first_name`, `customer_last_name`, `shipping_method`, `coupon_code`, `is_gift`, `items_count`, `items_qty`, `exchange_rate`, `global_currency_code`, `base_currency_code`, `channel_currency_code`, `cart_currency_code`, `grand_total`, `base_grand_total`, `sub_total`, `base_sub_total`, `tax_total`, `base_tax_total`, `discount_amount`, `base_discount_amount`, `checkout_method`, `is_guest`, `is_active`, `conversion_time`, `customer_id`, `channel_id`, `created_at`, `updated_at`, `applied_cart_rule_ids`) VALUES
(1, 'pegalogics@gmail.com', 'pega', 'logics', 'flatrate_flatrate', NULL, 0, 1, 1.0000, NULL, 'USD', 'USD', 'USD', 'USD', 20.0000, 20.0000, 10.0000, 10.0000, 0.0000, 0.0000, 0.0000, 0.0000, NULL, 1, 0, NULL, NULL, 1, '2021-03-23 05:55:01', '2021-03-23 05:57:09', ''),
(2, NULL, NULL, NULL, NULL, NULL, 0, 1, 1.0000, NULL, 'USD', 'USD', 'USD', 'USD', 10.0000, 10.0000, 10.0000, 10.0000, 0.0000, 0.0000, 0.0000, 0.0000, NULL, 1, 1, NULL, NULL, 1, '2021-03-23 06:32:30', '2021-03-23 06:32:31', ''),
(3, NULL, NULL, NULL, NULL, NULL, 0, 1, 1.0000, NULL, 'USD', 'USD', 'USD', 'USD', 10.0000, 10.0000, 10.0000, 10.0000, 0.0000, 0.0000, 0.0000, 0.0000, NULL, 1, 1, NULL, NULL, 1, '2021-03-23 06:58:38', '2021-03-23 06:58:38', ''),
(4, NULL, NULL, NULL, NULL, NULL, 0, 1, 1.0000, NULL, 'USD', 'USD', 'USD', 'USD', 10.0000, 10.0000, 10.0000, 10.0000, 0.0000, 0.0000, 0.0000, 0.0000, NULL, 1, 1, NULL, NULL, 1, '2021-03-23 08:32:25', '2021-03-23 08:32:39', ''),
(5, NULL, NULL, NULL, NULL, NULL, 0, 1, 1.0000, NULL, 'USD', 'USD', 'USD', 'USD', 10.0000, 10.0000, 10.0000, 10.0000, 0.0000, 0.0000, 0.0000, 0.0000, NULL, 1, 1, NULL, NULL, 1, '2021-03-23 09:43:28', '2021-03-23 09:43:33', ''),
(6, NULL, NULL, NULL, NULL, NULL, 0, 1, 1.0000, NULL, 'USD', 'USD', 'USD', 'USD', 10.0000, 10.0000, 10.0000, 10.0000, 0.0000, 0.0000, 0.0000, 0.0000, NULL, 1, 1, NULL, NULL, 1, '2021-03-23 15:00:20', '2021-03-23 15:39:09', ''),
(7, 'prashantsingh2408@gmail.com', 'prashant', 'singh', NULL, NULL, 0, 2, 2.0000, NULL, 'USD', 'USD', 'USD', 'USD', 190.0000, 190.0000, 190.0000, 190.0000, 0.0000, 0.0000, 0.0000, 0.0000, NULL, 0, 1, NULL, 1, 1, '2021-03-25 09:31:40', '2021-03-25 10:14:21', '');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `total_weight` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `base_total_weight` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `price` decimal(12,4) NOT NULL DEFAULT '1.0000',
  `base_price` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `total` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `base_total` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `tax_percent` decimal(12,4) DEFAULT '0.0000',
  `tax_amount` decimal(12,4) DEFAULT '0.0000',
  `base_tax_amount` decimal(12,4) DEFAULT '0.0000',
  `discount_percent` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `discount_amount` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `base_discount_amount` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `additional` json DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `cart_id` int(10) UNSIGNED NOT NULL,
  `tax_category_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `custom_price` decimal(12,4) DEFAULT NULL,
  `applied_cart_rule_ids` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `quantity`, `sku`, `type`, `name`, `coupon_code`, `weight`, `total_weight`, `base_total_weight`, `price`, `base_price`, `total`, `base_total`, `tax_percent`, `tax_amount`, `base_tax_amount`, `discount_percent`, `discount_amount`, `base_discount_amount`, `additional`, `parent_id`, `product_id`, `cart_id`, `tax_category_id`, `created_at`, `updated_at`, `custom_price`, `applied_cart_rule_ids`) VALUES
(1, 1, '1', 'simple', 'product1', NULL, 20.0000, 20.0000, 20.0000, 10.0000, 10.0000, 10.0000, 10.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, '{\"_token\": \"gbtIu2pobdLIbusFG9hwyAjzltXs7zw5wit4ZYPM\", \"quantity\": 1, \"product_id\": \"1\"}', NULL, 1, 1, NULL, '2021-03-23 05:55:02', '2021-03-23 05:57:07', NULL, ''),
(2, 1, '1', 'simple', 'product1', NULL, 20.0000, 20.0000, 20.0000, 10.0000, 10.0000, 10.0000, 10.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, '{\"_token\": \"r2k5EVBdGcSjFSH4omzyYI28Ew0DoFD5BcUcj5ih\", \"quantity\": 1, \"product_id\": \"1\"}', NULL, 1, 2, NULL, '2021-03-23 06:32:31', '2021-03-23 06:32:31', NULL, ''),
(3, 1, '1', 'simple', 'product1', NULL, 20.0000, 20.0000, 20.0000, 10.0000, 10.0000, 10.0000, 10.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, '{\"_token\": \"mEhiIPt6445z5h5zGFhRJKjzBgfKEDdVAftUCvPm\", \"quantity\": 1, \"product_id\": \"1\"}', NULL, 1, 3, NULL, '2021-03-23 06:58:38', '2021-03-23 06:58:38', NULL, ''),
(4, 1, '1', 'simple', 'product1', NULL, 20.0000, 20.0000, 20.0000, 10.0000, 10.0000, 10.0000, 10.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, '{\"_token\": \"TMSpzq9fNTLXiKvonWcOcAPFEPbTWgOm6NMivV50\", \"quantity\": 1, \"product_id\": \"1\"}', NULL, 1, 4, NULL, '2021-03-23 08:32:25', '2021-03-23 08:32:39', NULL, ''),
(5, 1, '1', 'simple', 'product1', NULL, 20.0000, 20.0000, 20.0000, 10.0000, 10.0000, 10.0000, 10.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, '{\"_token\": \"zgQaP5Mm14sHLZQVDTeB6zY8EUw1SFCmXL256nAg\", \"quantity\": 1, \"product_id\": \"1\"}', NULL, 1, 5, NULL, '2021-03-23 09:43:28', '2021-03-23 09:43:33', NULL, ''),
(6, 1, '1', 'simple', 'product1', NULL, 20.0000, 20.0000, 20.0000, 10.0000, 10.0000, 10.0000, 10.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, '{\"_token\": \"41Fd5Ibir8Js5eXyvaMP64PZ9O3odcUGTKasECyz\", \"quantity\": 1, \"product_id\": \"1\"}', NULL, 1, 6, NULL, '2021-03-23 15:00:20', '2021-03-23 15:39:09', NULL, ''),
(7, 1, '1', 'simple', 'product1', NULL, 20.0000, 20.0000, 20.0000, 10.0000, 10.0000, 10.0000, 10.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, '{\"_token\": \"RGg8GkYNbISS4mMFprEcqMZYk0yeOVvfqKIJP6LQ\", \"quantity\": 1, \"product_id\": \"1\"}', NULL, 1, 7, NULL, '2021-03-25 09:31:41', '2021-03-25 10:14:21', NULL, ''),
(8, 1, '89', 'simple', 'inner wear', NULL, 40.0000, 40.0000, 40.0000, 180.0000, 180.0000, 180.0000, 180.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, '{\"_token\": \"RGg8GkYNbISS4mMFprEcqMZYk0yeOVvfqKIJP6LQ\", \"quantity\": \"1\", \"product_id\": \"5\"}', NULL, 5, 7, NULL, '2021-03-25 10:14:08', '2021-03-25 10:14:21', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `cart_item_inventories`
--

CREATE TABLE `cart_item_inventories` (
  `id` int(10) UNSIGNED NOT NULL,
  `qty` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `inventory_source_id` int(10) UNSIGNED DEFAULT NULL,
  `cart_item_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `cart_payment`
--

CREATE TABLE `cart_payment` (
  `id` int(10) UNSIGNED NOT NULL,
  `method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cart_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `cart_payment`
--

INSERT INTO `cart_payment` (`id`, `method`, `method_title`, `cart_id`, `created_at`, `updated_at`) VALUES
(1, 'cashondelivery', NULL, 1, '2021-03-23 05:56:56', '2021-03-23 05:56:56');

-- --------------------------------------------------------

--
-- Table structure for table `cart_rules`
--

CREATE TABLE `cart_rules` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `starts_from` datetime DEFAULT NULL,
  `ends_till` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `coupon_type` int(11) NOT NULL DEFAULT '1',
  `use_auto_generation` tinyint(1) NOT NULL DEFAULT '0',
  `usage_per_customer` int(11) NOT NULL DEFAULT '0',
  `uses_per_coupon` int(11) NOT NULL DEFAULT '0',
  `times_used` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `condition_type` tinyint(1) NOT NULL DEFAULT '1',
  `conditions` json DEFAULT NULL,
  `end_other_rules` tinyint(1) NOT NULL DEFAULT '0',
  `uses_attribute_conditions` tinyint(1) NOT NULL DEFAULT '0',
  `action_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_amount` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `discount_quantity` int(11) NOT NULL DEFAULT '1',
  `discount_step` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `apply_to_shipping` tinyint(1) NOT NULL DEFAULT '0',
  `free_shipping` tinyint(1) NOT NULL DEFAULT '0',
  `sort_order` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `cart_rule_channels`
--

CREATE TABLE `cart_rule_channels` (
  `cart_rule_id` int(10) UNSIGNED NOT NULL,
  `channel_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `cart_rule_coupons`
--

CREATE TABLE `cart_rule_coupons` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usage_limit` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `usage_per_customer` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `times_used` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `type` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `is_primary` tinyint(1) NOT NULL DEFAULT '0',
  `expired_at` date DEFAULT NULL,
  `cart_rule_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `cart_rule_coupon_usage`
--

CREATE TABLE `cart_rule_coupon_usage` (
  `id` int(10) UNSIGNED NOT NULL,
  `times_used` int(11) NOT NULL DEFAULT '0',
  `cart_rule_coupon_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `cart_rule_customers`
--

CREATE TABLE `cart_rule_customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `times_used` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `cart_rule_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `cart_rule_customer_groups`
--

CREATE TABLE `cart_rule_customer_groups` (
  `cart_rule_id` int(10) UNSIGNED NOT NULL,
  `customer_group_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `cart_rule_translations`
--

CREATE TABLE `cart_rule_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` text COLLATE utf8mb4_unicode_ci,
  `cart_rule_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `cart_shipping_rates`
--

CREATE TABLE `cart_shipping_rates` (
  `id` int(10) UNSIGNED NOT NULL,
  `carrier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carrier_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT '0',
  `base_price` double DEFAULT '0',
  `cart_address_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `discount_amount` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `base_discount_amount` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `is_calculate_tax` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `cart_shipping_rates`
--

INSERT INTO `cart_shipping_rates` (`id`, `carrier`, `carrier_title`, `method`, `method_title`, `method_description`, `price`, `base_price`, `cart_address_id`, `created_at`, `updated_at`, `discount_amount`, `base_discount_amount`, `is_calculate_tax`) VALUES
(1, 'flatrate', 'Flat Rate', 'flatrate_flatrate', 'Flat Rate', 'Flat Rate Shipping', 10, 10, 2, '2021-03-23 05:56:44', '2021-03-23 05:57:07', 0.0000, 0.0000, 1),
(2, 'free', 'Free Shipping', 'free_free', 'Free Shipping', 'Free Shipping', 0, 0, 2, '2021-03-23 05:56:44', '2021-03-23 05:56:44', 0.0000, 0.0000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `catalog_rules`
--

CREATE TABLE `catalog_rules` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `starts_from` date DEFAULT NULL,
  `ends_till` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `condition_type` tinyint(1) NOT NULL DEFAULT '1',
  `conditions` json DEFAULT NULL,
  `end_other_rules` tinyint(1) NOT NULL DEFAULT '0',
  `action_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_amount` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `sort_order` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `catalog_rules`
--

INSERT INTO `catalog_rules` (`id`, `name`, `description`, `starts_from`, `ends_till`, `status`, `condition_type`, `conditions`, `end_other_rules`, `action_type`, `discount_amount`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'Catalog Rule', 'Description Catelog rule', '2021-03-23', '2021-03-31', 1, 1, NULL, 0, 'by_percent', 0.0000, 0, '2021-03-23 05:41:41', '2021-03-23 05:41:41');

-- --------------------------------------------------------

--
-- Table structure for table `catalog_rule_channels`
--

CREATE TABLE `catalog_rule_channels` (
  `catalog_rule_id` int(10) UNSIGNED NOT NULL,
  `channel_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `catalog_rule_channels`
--

INSERT INTO `catalog_rule_channels` (`catalog_rule_id`, `channel_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `catalog_rule_customer_groups`
--

CREATE TABLE `catalog_rule_customer_groups` (
  `catalog_rule_id` int(10) UNSIGNED NOT NULL,
  `customer_group_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `catalog_rule_customer_groups`
--

INSERT INTO `catalog_rule_customer_groups` (`catalog_rule_id`, `customer_group_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `catalog_rule_products`
--

CREATE TABLE `catalog_rule_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `starts_from` datetime DEFAULT NULL,
  `ends_till` datetime DEFAULT NULL,
  `end_other_rules` tinyint(1) NOT NULL DEFAULT '0',
  `action_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_amount` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `sort_order` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `product_id` int(10) UNSIGNED NOT NULL,
  `customer_group_id` int(10) UNSIGNED NOT NULL,
  `catalog_rule_id` int(10) UNSIGNED NOT NULL,
  `channel_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `catalog_rule_product_prices`
--

CREATE TABLE `catalog_rule_product_prices` (
  `id` int(10) UNSIGNED NOT NULL,
  `price` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `rule_date` date NOT NULL,
  `starts_from` datetime DEFAULT NULL,
  `ends_till` datetime DEFAULT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `customer_group_id` int(10) UNSIGNED NOT NULL,
  `catalog_rule_id` int(10) UNSIGNED NOT NULL,
  `channel_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `position` int(11) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `_lft` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `_rgt` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `display_mode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'products_and_description',
  `category_icon_path` text COLLATE utf8mb4_unicode_ci,
  `additional` json DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `position`, `image`, `status`, `_lft`, `_rgt`, `parent_id`, `created_at`, `updated_at`, `display_mode`, `category_icon_path`, `additional`) VALUES
(1, 1, NULL, 1, 1, 36, NULL, '2021-03-20 09:44:17', '2021-03-20 09:44:17', 'products_and_description', NULL, NULL),
(2, 2, NULL, 1, 14, 15, 1, '2021-03-20 12:30:22', '2021-03-22 05:32:43', 'products_and_description', NULL, NULL),
(3, 3, NULL, 1, 16, 19, 1, '2021-03-22 05:31:37', '2021-03-22 05:35:36', 'products_and_description', NULL, NULL),
(4, 4, NULL, 1, 20, 21, 1, '2021-03-22 05:44:12', '2021-03-22 05:44:12', 'products_and_description', NULL, NULL),
(5, 5, NULL, 1, 22, 23, 1, '2021-03-22 06:59:06', '2021-03-22 06:59:06', 'products_and_description', NULL, NULL),
(6, 6, NULL, 1, 24, 25, 1, '2021-03-22 07:00:03', '2021-03-22 07:00:03', 'products_and_description', NULL, NULL),
(7, 6, NULL, 1, 26, 27, 1, '2021-03-22 07:08:34', '2021-03-22 07:08:34', 'products_and_description', NULL, NULL),
(8, 51, NULL, 0, 28, 29, 1, '2021-03-22 09:27:36', '2021-03-22 10:00:22', 'products_and_description', NULL, NULL),
(9, 52, NULL, 0, 30, 31, 1, '2021-03-22 10:01:48', '2021-03-22 10:07:37', 'products_and_description', NULL, NULL),
(10, 53, NULL, 0, 32, 33, 1, '2021-03-22 10:05:55', '2021-03-22 10:07:48', 'products_and_description', NULL, NULL),
(11, 11, NULL, 1, 17, 18, 3, '2021-03-22 12:08:30', '2021-03-22 12:08:30', 'products_and_description', NULL, NULL),
(12, 10, NULL, 1, 34, 35, 1, '2021-03-25 09:36:35', '2021-03-25 09:36:35', 'products_and_description', NULL, NULL);

--
-- Triggers `categories`
--
DELIMITER $$
CREATE TRIGGER `trig_categories_insert` AFTER INSERT ON `categories` FOR EACH ROW BEGIN
                            DECLARE urlPath VARCHAR(255);
            DECLARE localeCode VARCHAR(255);
            DECLARE done INT;
            DECLARE curs CURSOR FOR (SELECT category_translations.locale
                    FROM category_translations
                    WHERE category_id = NEW.id);
            DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;


            IF EXISTS (
                SELECT *
                FROM category_translations
                WHERE category_id = NEW.id
            )
            THEN

                OPEN curs;

            	SET done = 0;
                REPEAT
                	FETCH curs INTO localeCode;

                    SELECT get_url_path_of_category(NEW.id, localeCode) INTO urlPath;

                    IF NEW.parent_id IS NULL
                    THEN
                        SET urlPath = '';
                    END IF;

                    UPDATE category_translations
                    SET url_path = urlPath
                    WHERE
                        category_translations.category_id = NEW.id
                        AND category_translations.locale = localeCode;

                UNTIL done END REPEAT;

                CLOSE curs;

            END IF;
            END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trig_categories_update` AFTER UPDATE ON `categories` FOR EACH ROW BEGIN
                            DECLARE urlPath VARCHAR(255);
            DECLARE localeCode VARCHAR(255);
            DECLARE done INT;
            DECLARE curs CURSOR FOR (SELECT category_translations.locale
                    FROM category_translations
                    WHERE category_id = NEW.id);
            DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;


            IF EXISTS (
                SELECT *
                FROM category_translations
                WHERE category_id = NEW.id
            )
            THEN

                OPEN curs;

            	SET done = 0;
                REPEAT
                	FETCH curs INTO localeCode;

                    SELECT get_url_path_of_category(NEW.id, localeCode) INTO urlPath;

                    IF NEW.parent_id IS NULL
                    THEN
                        SET urlPath = '';
                    END IF;

                    UPDATE category_translations
                    SET url_path = urlPath
                    WHERE
                        category_translations.category_id = NEW.id
                        AND category_translations.locale = localeCode;

                UNTIL done END REPEAT;

                CLOSE curs;

            END IF;
            END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `category_filterable_attributes`
--

CREATE TABLE `category_filterable_attributes` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `attribute_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `category_filterable_attributes`
--

INSERT INTO `category_filterable_attributes` (`category_id`, `attribute_id`) VALUES
(2, 11),
(3, 11),
(4, 11),
(5, 11),
(6, 11),
(7, 11),
(8, 11),
(9, 11),
(10, 11),
(11, 11),
(12, 11);

-- --------------------------------------------------------

--
-- Table structure for table `category_translations`
--

CREATE TABLE `category_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `meta_title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `category_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale_id` int(10) UNSIGNED DEFAULT NULL,
  `url_path` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'maintained by database triggers'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `category_translations`
--

INSERT INTO `category_translations` (`id`, `name`, `slug`, `description`, `meta_title`, `meta_description`, `meta_keywords`, `category_id`, `locale`, `locale_id`, `url_path`) VALUES
(1, 'Root', 'root', 'Root', '', '', '', 1, 'en', NULL, ''),
(2, 'Home', 'home', '<p>des</p>', '', '', '', 2, 'en', 1, 'home'),
(3, 'Home', 'home', '<p>des</p>', '', '', '', 2, 'fr', 2, 'home'),
(4, 'Home', 'home', '<p>des</p>', '', '', '', 2, 'nl', 3, 'home'),
(5, 'Home', 'home', '<p>des</p>', '', '', '', 2, 'tr', 4, 'home'),
(6, 'Home', 'home', '<p>des</p>', '', '', '', 2, 'es', 5, 'home'),
(7, 'Vegetable', 'vegetable', '<p>Vegetable</p>', '', '', '', 3, 'en', 1, 'vegetable'),
(8, 'Vegetable', 'vegetable', '<p>Vegetable</p>', '', '', '', 3, 'fr', 2, 'vegetable'),
(9, 'Vegetable', 'vegetable', '<p>Vegetable</p>', '', '', '', 3, 'nl', 3, 'vegetable'),
(10, 'Vegetable', 'vegetable', '<p>Vegetable</p>', '', '', '', 3, 'tr', 4, 'vegetable'),
(11, 'Vegetable', 'vegetable', '<p>Vegetable</p>', '', '', '', 3, 'es', 5, 'vegetable'),
(12, 'Fruits', 'fruits', '<p>Fruits</p>', '', '', '', 4, 'en', 1, 'fruits'),
(13, 'Fruites', 'fruits', '<p>Fruites</p>', '', '', '', 4, 'fr', 2, 'fruits'),
(14, 'Fruites', 'fruits', '<p>Fruites</p>', '', '', '', 4, 'nl', 3, 'fruits'),
(15, 'Fruites', 'fruits', '<p>Fruites</p>', '', '', '', 4, 'tr', 4, 'fruits'),
(16, 'Fruites', 'fruits', '<p>Fruites</p>', '', '', '', 4, 'es', 5, 'fruits'),
(17, 'Household', 'household', '<p>des</p>', '', '', '', 5, 'en', 1, 'household'),
(18, 'Household', 'household', '<p>des</p>', '', '', '', 5, 'fr', 2, 'household'),
(19, 'Household', 'household', '<p>des</p>', '', '', '', 5, 'nl', 3, 'household'),
(20, 'Household', 'household', '<p>des</p>', '', '', '', 5, 'tr', 4, 'household'),
(21, 'Household', 'household', '<p>des</p>', '', '', '', 5, 'es', 5, 'household'),
(22, 'Personal Care', 'personal-care', '<p>Personal Care</p>', '', '', '', 6, 'en', 1, 'personal-care'),
(23, 'Personal Care', 'personal-care', '<p>Personal Care</p>', '', '', '', 6, 'fr', 2, 'personal-care'),
(24, 'Personal Care', 'personal-care', '<p>Personal Care</p>', '', '', '', 6, 'nl', 3, 'personal-care'),
(25, 'Personal Care', 'personal-care', '<p>Personal Care</p>', '', '', '', 6, 'tr', 4, 'personal-care'),
(26, 'Personal Care', 'personal-care', '<p>Personal Care</p>', '', '', '', 6, 'es', 5, 'personal-care'),
(27, 'Biscuits', 'biscuits', '<p>Biscuites</p>', '', '', '', 7, 'en', 1, 'biscuits'),
(28, 'Biscuits', 'biscuits', '<p>Biscuites</p>', '', '', '', 7, 'fr', 2, 'biscuits'),
(29, 'Biscuits', 'biscuits', '<p>Biscuites</p>', '', '', '', 7, 'nl', 3, 'biscuits'),
(30, 'Biscuits', 'biscuits', '<p>Biscuites</p>', '', '', '', 7, 'tr', 4, 'biscuits'),
(31, 'Biscuits', 'biscuits', '<p>Biscuites</p>', '', '', '', 7, 'es', 5, 'biscuits'),
(32, 'Show by Brands', 'show-by-brands', '<p>describtion</p>', '', '', '', 8, 'en', 1, 'show-by-brands'),
(33, 'Show by Brands', 'show-by-brands', '<p>describtion</p>', '', '', '', 8, 'fr', 2, 'show-by-brands'),
(34, 'Show by Brands', 'show-by-brands', '<p>describtion</p>', '', '', '', 8, 'nl', 3, 'show-by-brands'),
(35, 'Show by Brands', 'show-by-brands', '<p>describtion</p>', '', '', '', 8, 'tr', 4, 'show-by-brands'),
(36, 'Show by Brands', 'show-by-brands', '<p>describtion</p>', '', '', '', 8, 'es', 5, 'show-by-brands'),
(37, 'Show by Category', 'show-by-category', '<p>Show by Category Description</p>', '', '', '', 9, 'en', 1, 'show-by-category'),
(38, 'Show by Category', 'show-by-category', '<p>Show by Category Description</p>', '', '', '', 9, 'fr', 2, 'show-by-category'),
(39, 'Show by Category', 'show-by-category', '<p>Show by Category Description</p>', '', '', '', 9, 'nl', 3, 'show-by-category'),
(40, 'Show by Category', 'show-by-category', '<p>Show by Category Description</p>', '', '', '', 9, 'tr', 4, 'show-by-category'),
(41, 'Show by Category', 'show-by-category', '<p>Show by Category Description</p>', '', '', '', 9, 'es', 5, 'show-by-category'),
(42, 'Oil And Masala', 'oil-and-masala', '<p>Oil and Masala description</p>', '', '', '', 10, 'en', 1, 'oil-and-masala'),
(43, 'Oil And Masala', 'oil-and-masala', '<p>Oil and Masala description</p>', '', '', '', 10, 'fr', 2, 'oil-and-masala'),
(44, 'Oil And Masala', 'oil-and-masala', '<p>Oil and Masala description</p>', '', '', '', 10, 'nl', 3, 'oil-and-masala'),
(45, 'Oil And Masala', 'oil-and-masala', '<p>Oil and Masala description</p>', '', '', '', 10, 'tr', 4, 'oil-and-masala'),
(46, 'Oil And Masala', 'oil-and-masala', '<p>Oil and Masala description</p>', '', '', '', 10, 'es', 5, 'oil-and-masala'),
(47, 'Fresh Vetetable', 'fresh-vetetable', '<p>Buy Fresh Vegetable</p>', '', '', '', 11, 'en', 1, 'vegetable/fresh-vetetable'),
(48, 'Fresh Vetetable', 'fresh-vetetable', '<p>Buy Fresh Vegetable</p>', '', '', '', 11, 'fr', 2, 'vegetable/fresh-vetetable'),
(49, 'Fresh Vetetable', 'fresh-vetetable', '<p>Buy Fresh Vegetable</p>', '', '', '', 11, 'nl', 3, 'vegetable/fresh-vetetable'),
(50, 'Fresh Vetetable', 'fresh-vetetable', '<p>Buy Fresh Vegetable</p>', '', '', '', 11, 'tr', 4, 'vegetable/fresh-vetetable'),
(51, 'Fresh Vetetable', 'fresh-vetetable', '<p>Buy Fresh Vegetable</p>', '', '', '', 11, 'es', 5, 'vegetable/fresh-vetetable'),
(52, 'aachar', 'aachar', '<p>sdfs</p>', '', '', '', 12, 'en', 1, 'aachar'),
(53, 'aachar', 'aachar', '<p>sdfs</p>', '', '', '', 12, 'fr', 2, 'aachar'),
(54, 'aachar', 'aachar', '<p>sdfs</p>', '', '', '', 12, 'nl', 3, 'aachar'),
(55, 'aachar', 'aachar', '<p>sdfs</p>', '', '', '', 12, 'tr', 4, 'aachar'),
(56, 'aachar', 'aachar', '<p>sdfs</p>', '', '', '', 12, 'es', 5, 'aachar');

--
-- Triggers `category_translations`
--
DELIMITER $$
CREATE TRIGGER `trig_category_translations_insert` BEFORE INSERT ON `category_translations` FOR EACH ROW BEGIN
                            DECLARE parentUrlPath varchar(255);
            DECLARE urlPath varchar(255);

            IF NOT EXISTS (
                SELECT id
                FROM categories
                WHERE
                    id = NEW.category_id
                    AND parent_id IS NULL
            )
            THEN

                SELECT
                    GROUP_CONCAT(parent_translations.slug SEPARATOR '/') INTO parentUrlPath
                FROM
                    categories AS node,
                    categories AS parent
                    JOIN category_translations AS parent_translations ON parent.id = parent_translations.category_id
                WHERE
                    node._lft >= parent._lft
                    AND node._rgt <= parent._rgt
                    AND node.id = (SELECT parent_id FROM categories WHERE id = NEW.category_id)
                    AND node.parent_id IS NOT NULL
                    AND parent.parent_id IS NOT NULL
                    AND parent_translations.locale = NEW.locale
                GROUP BY
                    node.id;

                IF parentUrlPath IS NULL
                THEN
                    SET urlPath = NEW.slug;
                ELSE
                    SET urlPath = concat(parentUrlPath, '/', NEW.slug);
                END IF;

                SET NEW.url_path = urlPath;

            END IF;
            END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trig_category_translations_update` BEFORE UPDATE ON `category_translations` FOR EACH ROW BEGIN
                            DECLARE parentUrlPath varchar(255);
            DECLARE urlPath varchar(255);

            IF NOT EXISTS (
                SELECT id
                FROM categories
                WHERE
                    id = NEW.category_id
                    AND parent_id IS NULL
            )
            THEN

                SELECT
                    GROUP_CONCAT(parent_translations.slug SEPARATOR '/') INTO parentUrlPath
                FROM
                    categories AS node,
                    categories AS parent
                    JOIN category_translations AS parent_translations ON parent.id = parent_translations.category_id
                WHERE
                    node._lft >= parent._lft
                    AND node._rgt <= parent._rgt
                    AND node.id = (SELECT parent_id FROM categories WHERE id = NEW.category_id)
                    AND node.parent_id IS NOT NULL
                    AND parent.parent_id IS NOT NULL
                    AND parent_translations.locale = NEW.locale
                GROUP BY
                    node.id;

                IF parentUrlPath IS NULL
                THEN
                    SET urlPath = NEW.slug;
                ELSE
                    SET urlPath = concat(parentUrlPath, '/', NEW.slug);
                END IF;

                SET NEW.url_path = urlPath;

            END IF;
            END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `channels`
--

CREATE TABLE `channels` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timezone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theme` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hostname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_maintenance_on` tinyint(1) NOT NULL DEFAULT '0',
  `allowed_ips` text COLLATE utf8mb4_unicode_ci,
  `default_locale_id` int(10) UNSIGNED NOT NULL,
  `base_currency_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `root_category_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `channels`
--

INSERT INTO `channels` (`id`, `code`, `timezone`, `theme`, `hostname`, `logo`, `favicon`, `is_maintenance_on`, `allowed_ips`, `default_locale_id`, `base_currency_id`, `created_at`, `updated_at`, `root_category_id`) VALUES
(1, 'default', NULL, 'velocity', 'http://localhost', NULL, NULL, 0, '', 1, 1, NULL, '2021-03-23 12:21:08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `channel_currencies`
--

CREATE TABLE `channel_currencies` (
  `channel_id` int(10) UNSIGNED NOT NULL,
  `currency_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `channel_currencies`
--

INSERT INTO `channel_currencies` (`channel_id`, `currency_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `channel_inventory_sources`
--

CREATE TABLE `channel_inventory_sources` (
  `channel_id` int(10) UNSIGNED NOT NULL,
  `inventory_source_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `channel_inventory_sources`
--

INSERT INTO `channel_inventory_sources` (`channel_id`, `inventory_source_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `channel_locales`
--

CREATE TABLE `channel_locales` (
  `channel_id` int(10) UNSIGNED NOT NULL,
  `locale_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `channel_locales`
--

INSERT INTO `channel_locales` (`channel_id`, `locale_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `channel_translations`
--

CREATE TABLE `channel_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `channel_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `home_page_content` text COLLATE utf8mb4_unicode_ci,
  `footer_content` text COLLATE utf8mb4_unicode_ci,
  `maintenance_mode_text` text COLLATE utf8mb4_unicode_ci,
  `home_seo` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `channel_translations`
--

INSERT INTO `channel_translations` (`id`, `channel_id`, `locale`, `name`, `description`, `home_page_content`, `footer_content`, `maintenance_mode_text`, `home_seo`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'Default', '', '<p>@include(\"shop::home.slider\") @include(\"shop::home.featured-products\") @include(\"shop::home.new-products\")</p>\r\n<div class=\"banner-container\">\r\n<div class=\"left-banner\"><img src=\"http://localhost/themes/default/assets/images/1.webp\" data-src=\"http://localhost/themes/default/assets/images/1.webp\" class=\"lazyload\" alt=\"test\" width=\"720\" height=\"720\" /></div>\r\n<div class=\"right-banner\"><img src=\"http://localhost/themes/default/assets/images/2.webp\" data-src=\"http://localhost/themes/default/assets/images/2.webp\" class=\"lazyload\" alt=\"test\" width=\"460\" height=\"330\" /> <img src=\"http://localhost/themes/default/assets/images/3.webp\" data-src=\"http://localhost/themes/default/assets/images/3.webp\" class=\"lazyload\" alt=\"test\" width=\"460\" height=\"330\" /></div>\r\n</div>', '<div class=\"list-container\"><span class=\"list-heading\">Quick Links</span>\r\n<ul class=\"list-group\">\r\n<li><a href=\"@php echo route(\'shop.cms.page\', \'about-us\') @endphp\">About Us</a></li>\r\n<li><a href=\"@php echo route(\'shop.cms.page\', \'return-policy\') @endphp\">Return Policy</a></li>\r\n<li><a href=\"@php echo route(\'shop.cms.page\', \'refund-policy\') @endphp\">Refund Policy</a></li>\r\n<li><a href=\"@php echo route(\'shop.cms.page\', \'terms-conditions\') @endphp\">Terms and conditions</a></li>\r\n<li><a href=\"@php echo route(\'shop.cms.page\', \'terms-of-use\') @endphp\">Terms of Use</a></li>\r\n<li><a href=\"@php echo route(\'shop.cms.page\', \'contact-us\') @endphp\">Contact Us</a></li>\r\n</ul>\r\n</div>\r\n<div class=\"list-container\"><span class=\"list-heading\">Connect With Us</span>\r\n<ul class=\"list-group\">\r\n<li><a href=\"#\"><span class=\"icon icon-facebook\"></span>Facebook </a></li>\r\n<li><a href=\"#\"><span class=\"icon icon-twitter\"></span> Twitter </a></li>\r\n<li><a href=\"#\"><span class=\"icon icon-instagram\"></span> Instagram </a></li>\r\n<li><a href=\"#\"> <span class=\"icon icon-google-plus\"></span>Google+ </a></li>\r\n<li><a href=\"#\"> <span class=\"icon icon-linkedin\"></span>LinkedIn </a></li>\r\n</ul>\r\n</div>', '', '{\"meta_title\": \"Grocery Income\", \"meta_keywords\": \"store meta keyword\", \"meta_description\": \"store meta description\"}', NULL, '2021-03-23 12:21:08'),
(2, 1, 'fr', 'Default', NULL, '\n                    <p>@include(\"shop::home.slider\") @include(\"shop::home.featured-products\") @include(\"shop::home.new-products\")</p>\n                        <div class=\"banner-container\">\n                        <div class=\"left-banner\">\n                            <img src=http://localhost/themes/default/assets/images/1.webp data-src=http://localhost/themes/default/assets/images/1.webp class=\"lazyload\" alt=\"test\" width=\"720\" height=\"720\" />\n                        </div>\n                        <div class=\"right-banner\">\n                            <img src=http://localhost/themes/default/assets/images/2.webp data-src=http://localhost/themes/default/assets/images/2.webp class=\"lazyload\" alt=\"test\" width=\"460\" height=\"330\" />\n                            <img src=http://localhost/themes/default/assets/images/3.webp data-src=http://localhost/themes/default/assets/images/3.webp  class=\"lazyload\" alt=\"test\" width=\"460\" height=\"330\" />\n                        </div>\n                    </div>\n                ', '\n                    <div class=\"list-container\">\n                        <span class=\"list-heading\">Quick Links</span>\n                        <ul class=\"list-group\">\n                            <li><a href=\"@php echo route(\'shop.cms.page\', \'about-us\') @endphp\">About Us</a></li>\n                            <li><a href=\"@php echo route(\'shop.cms.page\', \'return-policy\') @endphp\">Return Policy</a></li>\n                            <li><a href=\"@php echo route(\'shop.cms.page\', \'refund-policy\') @endphp\">Refund Policy</a></li>\n                            <li><a href=\"@php echo route(\'shop.cms.page\', \'terms-conditions\') @endphp\">Terms and conditions</a></li>\n                            <li><a href=\"@php echo route(\'shop.cms.page\', \'terms-of-use\') @endphp\">Terms of Use</a></li><li><a href=\"@php echo route(\'shop.cms.page\', \'contact-us\') @endphp\">Contact Us</a></li>\n                        </ul>\n                    </div>\n                    <div class=\"list-container\">\n                        <span class=\"list-heading\">Connect With Us</span>\n                            <ul class=\"list-group\">\n                                <li><a href=\"#\"><span class=\"icon icon-facebook\"></span>Facebook </a></li>\n                                <li><a href=\"#\"><span class=\"icon icon-twitter\"></span> Twitter </a></li>\n                                <li><a href=\"#\"><span class=\"icon icon-instagram\"></span> Instagram </a></li>\n                                <li><a href=\"#\"> <span class=\"icon icon-google-plus\"></span>Google+ </a></li>\n                                <li><a href=\"#\"> <span class=\"icon icon-linkedin\"></span>LinkedIn </a></li>\n                            </ul>\n                        </div>\n                ', NULL, '{\"meta_title\": \"Demo store\", \"meta_keywords\": \"Demo store meta keyword\", \"meta_description\": \"Demo store meta description\"}', NULL, NULL),
(3, 1, 'nl', 'Default', NULL, '\n                    <p>@include(\"shop::home.slider\") @include(\"shop::home.featured-products\") @include(\"shop::home.new-products\")</p>\n                        <div class=\"banner-container\">\n                        <div class=\"left-banner\">\n                            <img src=http://localhost/themes/default/assets/images/1.webp data-src=http://localhost/themes/default/assets/images/1.webp class=\"lazyload\" alt=\"test\" width=\"720\" height=\"720\" />\n                        </div>\n                        <div class=\"right-banner\">\n                            <img src=http://localhost/themes/default/assets/images/2.webp data-src=http://localhost/themes/default/assets/images/2.webp class=\"lazyload\" alt=\"test\" width=\"460\" height=\"330\" />\n                            <img src=http://localhost/themes/default/assets/images/3.webp data-src=http://localhost/themes/default/assets/images/3.webp  class=\"lazyload\" alt=\"test\" width=\"460\" height=\"330\" />\n                        </div>\n                    </div>\n                ', '\n                    <div class=\"list-container\">\n                        <span class=\"list-heading\">Quick Links</span>\n                        <ul class=\"list-group\">\n                            <li><a href=\"@php echo route(\'shop.cms.page\', \'about-us\') @endphp\">About Us</a></li>\n                            <li><a href=\"@php echo route(\'shop.cms.page\', \'return-policy\') @endphp\">Return Policy</a></li>\n                            <li><a href=\"@php echo route(\'shop.cms.page\', \'refund-policy\') @endphp\">Refund Policy</a></li>\n                            <li><a href=\"@php echo route(\'shop.cms.page\', \'terms-conditions\') @endphp\">Terms and conditions</a></li>\n                            <li><a href=\"@php echo route(\'shop.cms.page\', \'terms-of-use\') @endphp\">Terms of Use</a></li><li><a href=\"@php echo route(\'shop.cms.page\', \'contact-us\') @endphp\">Contact Us</a></li>\n                        </ul>\n                    </div>\n                    <div class=\"list-container\">\n                        <span class=\"list-heading\">Connect With Us</span>\n                            <ul class=\"list-group\">\n                                <li><a href=\"#\"><span class=\"icon icon-facebook\"></span>Facebook </a></li>\n                                <li><a href=\"#\"><span class=\"icon icon-twitter\"></span> Twitter </a></li>\n                                <li><a href=\"#\"><span class=\"icon icon-instagram\"></span> Instagram </a></li>\n                                <li><a href=\"#\"> <span class=\"icon icon-google-plus\"></span>Google+ </a></li>\n                                <li><a href=\"#\"> <span class=\"icon icon-linkedin\"></span>LinkedIn </a></li>\n                            </ul>\n                        </div>\n                ', NULL, '{\"meta_title\": \"Demo store\", \"meta_keywords\": \"Demo store meta keyword\", \"meta_description\": \"Demo store meta description\"}', NULL, NULL),
(4, 1, 'tr', 'Default', NULL, '\n                    <p>@include(\"shop::home.slider\") @include(\"shop::home.featured-products\") @include(\"shop::home.new-products\")</p>\n                        <div class=\"banner-container\">\n                        <div class=\"left-banner\">\n                            <img src=http://localhost/themes/default/assets/images/1.webp data-src=http://localhost/themes/default/assets/images/1.webp class=\"lazyload\" alt=\"test\" width=\"720\" height=\"720\" />\n                        </div>\n                        <div class=\"right-banner\">\n                            <img src=http://localhost/themes/default/assets/images/2.webp data-src=http://localhost/themes/default/assets/images/2.webp class=\"lazyload\" alt=\"test\" width=\"460\" height=\"330\" />\n                            <img src=http://localhost/themes/default/assets/images/3.webp data-src=http://localhost/themes/default/assets/images/3.webp  class=\"lazyload\" alt=\"test\" width=\"460\" height=\"330\" />\n                        </div>\n                    </div>\n                ', '\n                    <div class=\"list-container\">\n                        <span class=\"list-heading\">Quick Links</span>\n                        <ul class=\"list-group\">\n                            <li><a href=\"@php echo route(\'shop.cms.page\', \'about-us\') @endphp\">About Us</a></li>\n                            <li><a href=\"@php echo route(\'shop.cms.page\', \'return-policy\') @endphp\">Return Policy</a></li>\n                            <li><a href=\"@php echo route(\'shop.cms.page\', \'refund-policy\') @endphp\">Refund Policy</a></li>\n                            <li><a href=\"@php echo route(\'shop.cms.page\', \'terms-conditions\') @endphp\">Terms and conditions</a></li>\n                            <li><a href=\"@php echo route(\'shop.cms.page\', \'terms-of-use\') @endphp\">Terms of Use</a></li><li><a href=\"@php echo route(\'shop.cms.page\', \'contact-us\') @endphp\">Contact Us</a></li>\n                        </ul>\n                    </div>\n                    <div class=\"list-container\">\n                        <span class=\"list-heading\">Connect With Us</span>\n                            <ul class=\"list-group\">\n                                <li><a href=\"#\"><span class=\"icon icon-facebook\"></span>Facebook </a></li>\n                                <li><a href=\"#\"><span class=\"icon icon-twitter\"></span> Twitter </a></li>\n                                <li><a href=\"#\"><span class=\"icon icon-instagram\"></span> Instagram </a></li>\n                                <li><a href=\"#\"> <span class=\"icon icon-google-plus\"></span>Google+ </a></li>\n                                <li><a href=\"#\"> <span class=\"icon icon-linkedin\"></span>LinkedIn </a></li>\n                            </ul>\n                        </div>\n                ', NULL, '{\"meta_title\": \"Demo store\", \"meta_keywords\": \"Demo store meta keyword\", \"meta_description\": \"Demo store meta description\"}', NULL, NULL),
(5, 1, 'es', 'Default', NULL, '\n                    <p>@include(\"shop::home.slider\") @include(\"shop::home.featured-products\") @include(\"shop::home.new-products\")</p>\n                        <div class=\"banner-container\">\n                        <div class=\"left-banner\">\n                            <img src=http://localhost/themes/default/assets/images/1.webp data-src=http://localhost/themes/default/assets/images/1.webp class=\"lazyload\" alt=\"test\" width=\"720\" height=\"720\" />\n                        </div>\n                        <div class=\"right-banner\">\n                            <img src=http://localhost/themes/default/assets/images/2.webp data-src=http://localhost/themes/default/assets/images/2.webp class=\"lazyload\" alt=\"test\" width=\"460\" height=\"330\" />\n                            <img src=http://localhost/themes/default/assets/images/3.webp data-src=http://localhost/themes/default/assets/images/3.webp  class=\"lazyload\" alt=\"test\" width=\"460\" height=\"330\" />\n                        </div>\n                    </div>\n                ', '\n                    <div class=\"list-container\">\n                        <span class=\"list-heading\">Quick Links</span>\n                        <ul class=\"list-group\">\n                            <li><a href=\"@php echo route(\'shop.cms.page\', \'about-us\') @endphp\">About Us</a></li>\n                            <li><a href=\"@php echo route(\'shop.cms.page\', \'return-policy\') @endphp\">Return Policy</a></li>\n                            <li><a href=\"@php echo route(\'shop.cms.page\', \'refund-policy\') @endphp\">Refund Policy</a></li>\n                            <li><a href=\"@php echo route(\'shop.cms.page\', \'terms-conditions\') @endphp\">Terms and conditions</a></li>\n                            <li><a href=\"@php echo route(\'shop.cms.page\', \'terms-of-use\') @endphp\">Terms of Use</a></li><li><a href=\"@php echo route(\'shop.cms.page\', \'contact-us\') @endphp\">Contact Us</a></li>\n                        </ul>\n                    </div>\n                    <div class=\"list-container\">\n                        <span class=\"list-heading\">Connect With Us</span>\n                            <ul class=\"list-group\">\n                                <li><a href=\"#\"><span class=\"icon icon-facebook\"></span>Facebook </a></li>\n                                <li><a href=\"#\"><span class=\"icon icon-twitter\"></span> Twitter </a></li>\n                                <li><a href=\"#\"><span class=\"icon icon-instagram\"></span> Instagram </a></li>\n                                <li><a href=\"#\"> <span class=\"icon icon-google-plus\"></span>Google+ </a></li>\n                                <li><a href=\"#\"> <span class=\"icon icon-linkedin\"></span>LinkedIn </a></li>\n                            </ul>\n                        </div>\n                ', NULL, '{\"meta_title\": \"Demo store\", \"meta_keywords\": \"Demo store meta keyword\", \"meta_description\": \"Demo store meta description\"}', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_pages`
--

CREATE TABLE `cms_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `layout` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `cms_pages`
--

INSERT INTO `cms_pages` (`id`, `layout`, `created_at`, `updated_at`) VALUES
(1, NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19'),
(2, NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19'),
(3, NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19'),
(4, NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19'),
(5, NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19'),
(6, NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19'),
(7, NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19'),
(8, NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19'),
(9, NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19'),
(10, NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19'),
(11, NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19'),
(12, NULL, '2021-03-22 09:08:10', '2021-03-22 09:08:10');

-- --------------------------------------------------------

--
-- Table structure for table `cms_page_channels`
--

CREATE TABLE `cms_page_channels` (
  `cms_page_id` int(10) UNSIGNED NOT NULL,
  `channel_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `cms_page_channels`
--

INSERT INTO `cms_page_channels` (`cms_page_id`, `channel_id`) VALUES
(1, 1),
(7, 1),
(11, 1),
(12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cms_page_translations`
--

CREATE TABLE `cms_page_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `html_content` longtext COLLATE utf8mb4_unicode_ci,
  `meta_title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cms_page_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `cms_page_translations`
--

INSERT INTO `cms_page_translations` (`id`, `page_title`, `url_key`, `html_content`, `meta_title`, `meta_description`, `meta_keywords`, `locale`, `cms_page_id`) VALUES
(1, 'About Us', 'about-us', '<div class=\"static-container\">\r\n<div class=\"mb-5\">\r\n<p>You can edit it from pagalogics admin CMS</p>\r\n<p>http://bagisto.webdevelopmentagency.in/admin/cms/edit/</p>\r\n</div>\r\n</div>', 'about us', '', 'aboutus', 'en', 1),
(2, 'Return Policy', 'return-policy', '<div class=\"static-container\"><div class=\"mb-5\">Return policy page content</div></div>', 'return policy', '', 'return, policy', 'en', 2),
(3, 'Refund Policy', 'refund-policy', '<div class=\"static-container\"><div class=\"mb-5\">Refund policy page content</div></div>', 'Refund policy', '', 'refund, policy', 'en', 3),
(4, 'Terms & Conditions', 'terms-conditions', '<div class=\"static-container\"><div class=\"mb-5\">Terms & conditions page content</div></div>', 'Terms & Conditions', '', 'term, conditions', 'en', 4),
(5, 'Terms of use', 'terms-of-use', '<div class=\"static-container\"><div class=\"mb-5\">Terms of use page content</div></div>', 'Terms of use', '', 'term, use', 'en', 5),
(6, 'Contact Us', 'contact-us', '<div class=\"static-container\"><div class=\"mb-5\">Contact us page content</div></div>', 'Contact Us', '', 'contact, us', 'en', 6),
(7, 'Customer Service', 'cutomer-service', '<div class=\"static-container\">\r\n<div class=\"mb-5\">Customer service page contentgkghkhhhkhkj</div>\r\n</div>', 'Customer Service', '', 'customer, service', 'en', 7),
(8, 'What\'s New', 'whats-new', '<div class=\"static-container\"><div class=\"mb-5\">What\'s New page content</div></div>', 'What\'s New', '', 'new', 'en', 8),
(9, 'Payment Policy', 'payment-policy', '<div class=\"static-container\"><div class=\"mb-5\">Payment Policy page content</div></div>', 'Payment Policy', '', 'payment, policy', 'en', 9),
(10, 'Shipping Policy', 'shipping-policy', '<div class=\"static-container\"><div class=\"mb-5\">Shipping Policy  page content</div></div>', 'Shipping Policy', '', 'shipping, policy', 'en', 10),
(11, 'Privacy Policy', 'privacy-policy', '<div class=\"static-container\">\r\n<div class=\"mb-5\">\r\n<p>You can edit it from pagalogics admin CMS</p>\r\n<p>http://bagisto.webdevelopmentagency.in/admin/cms/edit/</p>\r\n</div>\r\n</div>', 'Privacy Policy', '', 'privacy, policy', 'en', 11),
(12, 'Terms of use ', 'termofuse', '<p>You can edit it from pagalogics admin CMS</p>\r\n<p>http://bagisto.webdevelopmentagency.in/admin/cms/edit/</p>', '', '', '', 'en', 12),
(13, 'Terms of use ', 'termofuse', '<p>Add form admin panel</p>', '', '', '', 'fr', 12),
(14, 'Terms of use ', 'termofuse', '<p>Add form admin panel</p>', '', '', '', 'nl', 12),
(15, 'Terms of use ', 'termofuse', '<p>Add form admin panel</p>', '', '', '', 'tr', 12),
(16, 'Terms of use ', 'termofuse', '<p>Add form admin panel</p>', '', '', '', 'es', 12);

-- --------------------------------------------------------

--
-- Table structure for table `core_config`
--

CREATE TABLE `core_config` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `channel_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `core_config`
--

INSERT INTO `core_config` (`id`, `code`, `value`, `channel_code`, `locale_code`, `created_at`, `updated_at`) VALUES
(1, 'catalog.products.guest-checkout.allow-guest-checkout', '1', NULL, NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19'),
(2, 'emails.general.notifications.emails.general.notifications.verification', '1', NULL, NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19'),
(3, 'emails.general.notifications.emails.general.notifications.registration', '1', NULL, NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19'),
(4, 'emails.general.notifications.emails.general.notifications.customer', '1', NULL, NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19'),
(5, 'emails.general.notifications.emails.general.notifications.new-order', '1', NULL, NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19'),
(6, 'emails.general.notifications.emails.general.notifications.new-admin', '1', NULL, NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19'),
(7, 'emails.general.notifications.emails.general.notifications.new-invoice', '1', NULL, NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19'),
(8, 'emails.general.notifications.emails.general.notifications.new-refund', '1', NULL, NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19'),
(9, 'emails.general.notifications.emails.general.notifications.new-shipment', '1', NULL, NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19'),
(10, 'emails.general.notifications.emails.general.notifications.new-inventory-source', '1', NULL, NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19'),
(11, 'emails.general.notifications.emails.general.notifications.cancel-order', '1', NULL, NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19'),
(12, 'catalog.products.homepage.out_of_stock_items', '1', NULL, NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19'),
(13, 'customer.settings.social_login.enable_facebook', '1', 'default', NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19'),
(14, 'customer.settings.social_login.enable_twitter', '1', 'default', NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19'),
(15, 'customer.settings.social_login.enable_google', '1', 'default', NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19'),
(16, 'customer.settings.social_login.enable_linkedin', '1', 'default', NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19'),
(17, 'customer.settings.social_login.enable_github', '1', 'default', NULL, '2021-03-20 09:44:19', '2021-03-20 09:44:19'),
(18, 'general.content.shop.compare_option', '1', 'default', 'en', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(19, 'general.content.shop.compare_option', '1', 'default', 'fr', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(20, 'general.content.shop.compare_option', '1', 'default', 'ar', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(21, 'general.content.shop.compare_option', '1', 'default', 'de', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(22, 'general.content.shop.compare_option', '1', 'default', 'es', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(23, 'general.content.shop.compare_option', '1', 'default', 'fa', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(24, 'general.content.shop.compare_option', '1', 'default', 'it', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(25, 'general.content.shop.compare_option', '1', 'default', 'ja', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(26, 'general.content.shop.compare_option', '1', 'default', 'nl', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(27, 'general.content.shop.compare_option', '1', 'default', 'pl', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(28, 'general.content.shop.compare_option', '1', 'default', 'pt_BR', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(29, 'general.content.shop.compare_option', '1', 'default', 'tr', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(30, 'general.content.shop.wishlist_option', '1', 'default', 'en', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(31, 'general.content.shop.wishlist_option', '1', 'default', 'fr', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(32, 'general.content.shop.wishlist_option', '1', 'default', 'ar', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(33, 'general.content.shop.wishlist_option', '1', 'default', 'de', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(34, 'general.content.shop.wishlist_option', '1', 'default', 'es', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(35, 'general.content.shop.wishlist_option', '1', 'default', 'fa', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(36, 'general.content.shop.wishlist_option', '1', 'default', 'it', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(37, 'general.content.shop.wishlist_option', '1', 'default', 'ja', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(38, 'general.content.shop.wishlist_option', '1', 'default', 'nl', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(39, 'general.content.shop.wishlist_option', '1', 'default', 'pl', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(40, 'general.content.shop.wishlist_option', '1', 'default', 'pt_BR', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(41, 'general.content.shop.wishlist_option', '1', 'default', 'tr', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(42, 'general.content.shop.image_search', '1', 'default', 'en', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(43, 'general.content.shop.image_search', '1', 'default', 'fr', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(44, 'general.content.shop.image_search', '1', 'default', 'ar', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(45, 'general.content.shop.image_search', '1', 'default', 'de', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(46, 'general.content.shop.image_search', '1', 'default', 'es', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(47, 'general.content.shop.image_search', '1', 'default', 'fa', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(48, 'general.content.shop.image_search', '1', 'default', 'it', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(49, 'general.content.shop.image_search', '1', 'default', 'ja', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(50, 'general.content.shop.image_search', '1', 'default', 'nl', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(51, 'general.content.shop.image_search', '1', 'default', 'pl', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(52, 'general.content.shop.image_search', '1', 'default', 'pt_BR', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(53, 'general.content.shop.image_search', '1', 'default', 'tr', '2021-03-20 09:44:20', '2021-03-20 09:44:20'),
(56, 'general.content.footer.footer_content', 'Copyright 2021 Income Grocery. All rights reserved | Powered by PegaLogics    ', 'default', 'en', '2021-03-20 11:59:12', '2021-03-23 12:29:31'),
(57, 'general.content.footer.footer_toggle', '1', 'default', 'en', '2021-03-20 11:59:12', '2021-03-20 12:15:00'),
(58, 'general.content.custom_scripts.custom_css', '', 'default', NULL, '2021-03-20 11:59:12', '2021-03-20 11:59:12'),
(59, 'general.content.custom_scripts.custom_javascript', '', 'default', NULL, '2021-03-20 11:59:12', '2021-03-20 11:59:12'),
(60, 'general.general.locale_options.weight_unit', 'kgs', 'default', NULL, '2021-03-22 02:17:47', '2021-03-23 12:38:33'),
(61, 'general.general.email_settings.sender_name', 'pegalogics@gmail.com', 'default', NULL, '2021-03-22 02:17:47', '2021-03-22 02:17:47'),
(62, 'general.general.email_settings.shop_email_from', 'pegalogics@gmail.com', 'default', NULL, '2021-03-22 02:17:47', '2021-03-22 02:17:47'),
(63, 'general.general.email_settings.admin_name', 'Admin', 'default', NULL, '2021-03-22 02:17:47', '2021-03-22 02:17:47'),
(64, 'general.general.email_settings.admin_email', 'pegalogics@gmail.com', 'default', NULL, '2021-03-22 02:17:47', '2021-03-22 02:17:47'),
(65, 'sales.paymentmethods.paypal_smart_button.title', 'PayPal Smart Button', NULL, 'en', '2021-03-22 12:33:17', '2021-03-22 12:33:17'),
(66, 'sales.paymentmethods.paypal_smart_button.description', 'PayPal', NULL, 'en', '2021-03-22 12:33:17', '2021-03-22 12:33:17'),
(67, 'sales.paymentmethods.paypal_smart_button.client_id', 'sb', NULL, NULL, '2021-03-22 12:33:17', '2021-03-22 12:33:17'),
(68, 'sales.paymentmethods.paypal_smart_button.client_secret', '', NULL, NULL, '2021-03-22 12:33:17', '2021-03-22 12:33:17'),
(69, 'sales.paymentmethods.paypal_smart_button.accepted_currencies', '', NULL, NULL, '2021-03-22 12:33:17', '2021-03-22 12:33:17'),
(70, 'sales.paymentmethods.paypal_smart_button.active', '0', NULL, 'en', '2021-03-22 12:33:17', '2021-03-22 12:33:17'),
(71, 'sales.paymentmethods.paypal_smart_button.sandbox', '1', NULL, 'en', '2021-03-22 12:33:17', '2021-03-22 12:33:17'),
(72, 'sales.paymentmethods.paypal_smart_button.sort', '1', NULL, NULL, '2021-03-22 12:33:17', '2021-03-22 12:33:17'),
(73, 'sales.paymentmethods.cashondelivery.title', 'Cash On Delivery', NULL, 'en', '2021-03-22 12:33:17', '2021-03-22 12:33:17'),
(74, 'sales.paymentmethods.cashondelivery.description', 'Cash On Delivery', NULL, 'en', '2021-03-22 12:33:17', '2021-03-22 12:33:17'),
(75, 'sales.paymentmethods.cashondelivery.active', '1', NULL, 'en', '2021-03-22 12:33:17', '2021-03-22 12:33:17'),
(76, 'sales.paymentmethods.cashondelivery.instructions', '', NULL, 'en', '2021-03-22 12:33:17', '2021-03-22 12:33:17'),
(77, 'sales.paymentmethods.cashondelivery.sort', '1', NULL, NULL, '2021-03-22 12:33:17', '2021-03-22 12:33:17'),
(78, 'sales.paymentmethods.moneytransfer.title', 'Money Transfer', NULL, 'en', '2021-03-22 12:33:17', '2021-03-22 12:33:17'),
(79, 'sales.paymentmethods.moneytransfer.description', 'Money Transfer', NULL, 'en', '2021-03-22 12:33:17', '2021-03-22 12:33:17'),
(80, 'sales.paymentmethods.moneytransfer.active', '1', NULL, 'en', '2021-03-22 12:33:17', '2021-03-22 12:33:17'),
(81, 'sales.paymentmethods.moneytransfer.mailing_address', '', NULL, 'en', '2021-03-22 12:33:17', '2021-03-22 12:33:17'),
(82, 'sales.paymentmethods.moneytransfer.sort', '2', NULL, NULL, '2021-03-22 12:33:17', '2021-03-22 12:33:17'),
(83, 'sales.paymentmethods.paypal_standard.title', 'PayPal Standard', NULL, 'en', '2021-03-22 12:33:17', '2021-03-22 12:33:17'),
(84, 'sales.paymentmethods.paypal_standard.description', 'PayPal Standard', NULL, 'en', '2021-03-22 12:33:17', '2021-03-22 12:33:17'),
(85, 'sales.paymentmethods.paypal_standard.business_account', 'test@webkul.com', NULL, NULL, '2021-03-22 12:33:17', '2021-03-22 12:33:17'),
(86, 'sales.paymentmethods.paypal_standard.active', '0', NULL, 'en', '2021-03-22 12:33:17', '2021-03-22 12:33:37'),
(87, 'sales.paymentmethods.paypal_standard.sandbox', '1', NULL, 'en', '2021-03-22 12:33:17', '2021-03-22 12:33:17'),
(88, 'sales.paymentmethods.paypal_standard.sort', '3', NULL, NULL, '2021-03-22 12:33:17', '2021-03-22 12:33:17'),
(89, 'general.design.admin_logo.logo_image', 'configuration/GUI7D8GTzpCA265DVsbZ5bbyUccOoEJPj56CLrz1.png', 'default', NULL, '2021-03-22 13:01:38', '2021-03-22 13:01:38'),
(90, 'general.design.admin_logo.favicon', 'configuration/VqRFZ22N0GbFmmHT5nqikSR4sOEvFyapfXnf2TqD.png', 'default', NULL, '2021-03-22 13:01:38', '2021-03-22 13:01:38'),
(91, 'catalog.rich_snippets.products.enable', '1', NULL, NULL, '2021-03-23 05:38:26', '2021-03-23 05:38:26'),
(92, 'catalog.rich_snippets.products.show_sku', '1', NULL, NULL, '2021-03-23 05:38:26', '2021-03-23 05:38:26'),
(93, 'catalog.rich_snippets.products.show_weight', '1', NULL, NULL, '2021-03-23 05:38:26', '2021-03-23 05:38:26'),
(94, 'catalog.rich_snippets.products.show_categories', '1', NULL, NULL, '2021-03-23 05:38:26', '2021-03-23 05:38:26'),
(95, 'catalog.rich_snippets.products.show_images', '1', NULL, NULL, '2021-03-23 05:38:26', '2021-03-23 05:38:26'),
(96, 'catalog.rich_snippets.products.show_reviews', '1', NULL, NULL, '2021-03-23 05:38:26', '2021-03-23 05:38:26'),
(97, 'catalog.rich_snippets.products.show_ratings', '1', NULL, NULL, '2021-03-23 05:38:26', '2021-03-23 05:38:26'),
(98, 'catalog.rich_snippets.products.show_offers', '1', NULL, NULL, '2021-03-23 05:38:26', '2021-03-23 05:38:26'),
(99, 'catalog.rich_snippets.categories.enable', '1', NULL, NULL, '2021-03-23 05:38:26', '2021-03-23 05:38:26'),
(100, 'catalog.rich_snippets.categories.show_search_input_field', '1', NULL, NULL, '2021-03-23 05:38:26', '2021-03-23 05:38:26'),
(101, 'catalog.products.homepage.no_of_new_product_homepage', '', NULL, NULL, '2021-03-23 05:39:29', '2021-03-23 05:39:29'),
(102, 'catalog.products.homepage.no_of_featured_product_homepage', '', NULL, NULL, '2021-03-23 05:39:29', '2021-03-23 05:39:29'),
(103, 'catalog.products.storefront.mode', 'grid', 'default', NULL, '2021-03-23 05:39:29', '2021-03-23 05:39:29'),
(104, 'catalog.products.storefront.products_per_page', '', 'default', NULL, '2021-03-23 05:39:29', '2021-03-23 05:39:29'),
(105, 'catalog.products.storefront.sort_by', 'name-desc', 'default', NULL, '2021-03-23 05:39:29', '2021-03-23 05:39:29'),
(106, 'catalog.products.storefront.buy_now_button_display', '1', NULL, NULL, '2021-03-23 05:39:29', '2021-03-23 05:39:51'),
(107, 'catalog.products.review.guest_review', '1', NULL, NULL, '2021-03-23 05:39:29', '2021-03-23 05:39:51'),
(108, 'catalog.products.attribute.image_attribute_upload_size', '', NULL, NULL, '2021-03-23 05:39:29', '2021-03-23 05:39:29'),
(109, 'catalog.products.attribute.file_attribute_upload_size', '', NULL, NULL, '2021-03-23 05:39:29', '2021-03-23 05:39:29'),
(110, 'catalog.products.social_share.enabled', '1', NULL, NULL, '2021-03-23 05:39:29', '2021-03-23 05:39:29'),
(111, 'catalog.products.social_share.facebook', '1', NULL, NULL, '2021-03-23 05:39:29', '2021-03-23 05:39:29'),
(112, 'catalog.products.social_share.twitter', '1', NULL, NULL, '2021-03-23 05:39:29', '2021-03-23 05:39:29'),
(113, 'catalog.products.social_share.pinterest', '1', NULL, NULL, '2021-03-23 05:39:29', '2021-03-23 05:39:29'),
(114, 'catalog.products.social_share.whatsapp', '1', NULL, NULL, '2021-03-23 05:39:29', '2021-03-23 05:39:29'),
(115, 'catalog.products.social_share.linkedin', '1', NULL, NULL, '2021-03-23 05:39:29', '2021-03-23 05:39:29'),
(116, 'catalog.products.social_share.email', '1', NULL, NULL, '2021-03-23 05:39:29', '2021-03-23 05:39:29'),
(117, 'catalog.products.social_share.share_message', '', NULL, NULL, '2021-03-23 05:39:29', '2021-03-23 05:39:29');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AX', 'Åland Islands'),
(3, 'AL', 'Albania'),
(4, 'DZ', 'Algeria'),
(5, 'AS', 'American Samoa'),
(6, 'AD', 'Andorra'),
(7, 'AO', 'Angola'),
(8, 'AI', 'Anguilla'),
(9, 'AQ', 'Antarctica'),
(10, 'AG', 'Antigua & Barbuda'),
(11, 'AR', 'Argentina'),
(12, 'AM', 'Armenia'),
(13, 'AW', 'Aruba'),
(14, 'AC', 'Ascension Island'),
(15, 'AU', 'Australia'),
(16, 'AT', 'Austria'),
(17, 'AZ', 'Azerbaijan'),
(18, 'BS', 'Bahamas'),
(19, 'BH', 'Bahrain'),
(20, 'BD', 'Bangladesh'),
(21, 'BB', 'Barbados'),
(22, 'BY', 'Belarus'),
(23, 'BE', 'Belgium'),
(24, 'BZ', 'Belize'),
(25, 'BJ', 'Benin'),
(26, 'BM', 'Bermuda'),
(27, 'BT', 'Bhutan'),
(28, 'BO', 'Bolivia'),
(29, 'BA', 'Bosnia & Herzegovina'),
(30, 'BW', 'Botswana'),
(31, 'BR', 'Brazil'),
(32, 'IO', 'British Indian Ocean Territory'),
(33, 'VG', 'British Virgin Islands'),
(34, 'BN', 'Brunei'),
(35, 'BG', 'Bulgaria'),
(36, 'BF', 'Burkina Faso'),
(37, 'BI', 'Burundi'),
(38, 'KH', 'Cambodia'),
(39, 'CM', 'Cameroon'),
(40, 'CA', 'Canada'),
(41, 'IC', 'Canary Islands'),
(42, 'CV', 'Cape Verde'),
(43, 'BQ', 'Caribbean Netherlands'),
(44, 'KY', 'Cayman Islands'),
(45, 'CF', 'Central African Republic'),
(46, 'EA', 'Ceuta & Melilla'),
(47, 'TD', 'Chad'),
(48, 'CL', 'Chile'),
(49, 'CN', 'China'),
(50, 'CX', 'Christmas Island'),
(51, 'CC', 'Cocos (Keeling) Islands'),
(52, 'CO', 'Colombia'),
(53, 'KM', 'Comoros'),
(54, 'CG', 'Congo - Brazzaville'),
(55, 'CD', 'Congo - Kinshasa'),
(56, 'CK', 'Cook Islands'),
(57, 'CR', 'Costa Rica'),
(58, 'CI', 'Côte d’Ivoire'),
(59, 'HR', 'Croatia'),
(60, 'CU', 'Cuba'),
(61, 'CW', 'Curaçao'),
(62, 'CY', 'Cyprus'),
(63, 'CZ', 'Czechia'),
(64, 'DK', 'Denmark'),
(65, 'DG', 'Diego Garcia'),
(66, 'DJ', 'Djibouti'),
(67, 'DM', 'Dominica'),
(68, 'DO', 'Dominican Republic'),
(69, 'EC', 'Ecuador'),
(70, 'EG', 'Egypt'),
(71, 'SV', 'El Salvador'),
(72, 'GQ', 'Equatorial Guinea'),
(73, 'ER', 'Eritrea'),
(74, 'EE', 'Estonia'),
(75, 'ET', 'Ethiopia'),
(76, 'EZ', 'Eurozone'),
(77, 'FK', 'Falkland Islands'),
(78, 'FO', 'Faroe Islands'),
(79, 'FJ', 'Fiji'),
(80, 'FI', 'Finland'),
(81, 'FR', 'France'),
(82, 'GF', 'French Guiana'),
(83, 'PF', 'French Polynesia'),
(84, 'TF', 'French Southern Territories'),
(85, 'GA', 'Gabon'),
(86, 'GM', 'Gambia'),
(87, 'GE', 'Georgia'),
(88, 'DE', 'Germany'),
(89, 'GH', 'Ghana'),
(90, 'GI', 'Gibraltar'),
(91, 'GR', 'Greece'),
(92, 'GL', 'Greenland'),
(93, 'GD', 'Grenada'),
(94, 'GP', 'Guadeloupe'),
(95, 'GU', 'Guam'),
(96, 'GT', 'Guatemala'),
(97, 'GG', 'Guernsey'),
(98, 'GN', 'Guinea'),
(99, 'GW', 'Guinea-Bissau'),
(100, 'GY', 'Guyana'),
(101, 'HT', 'Haiti'),
(102, 'HN', 'Honduras'),
(103, 'HK', 'Hong Kong SAR China'),
(104, 'HU', 'Hungary'),
(105, 'IS', 'Iceland'),
(106, 'IN', 'India'),
(107, 'ID', 'Indonesia'),
(108, 'IR', 'Iran'),
(109, 'IQ', 'Iraq'),
(110, 'IE', 'Ireland'),
(111, 'IM', 'Isle of Man'),
(112, 'IL', 'Israel'),
(113, 'IT', 'Italy'),
(114, 'JM', 'Jamaica'),
(115, 'JP', 'Japan'),
(116, 'JE', 'Jersey'),
(117, 'JO', 'Jordan'),
(118, 'KZ', 'Kazakhstan'),
(119, 'KE', 'Kenya'),
(120, 'KI', 'Kiribati'),
(121, 'XK', 'Kosovo'),
(122, 'KW', 'Kuwait'),
(123, 'KG', 'Kyrgyzstan'),
(124, 'LA', 'Laos'),
(125, 'LV', 'Latvia'),
(126, 'LB', 'Lebanon'),
(127, 'LS', 'Lesotho'),
(128, 'LR', 'Liberia'),
(129, 'LY', 'Libya'),
(130, 'LI', 'Liechtenstein'),
(131, 'LT', 'Lithuania'),
(132, 'LU', 'Luxembourg'),
(133, 'MO', 'Macau SAR China'),
(134, 'MK', 'Macedonia'),
(135, 'MG', 'Madagascar'),
(136, 'MW', 'Malawi'),
(137, 'MY', 'Malaysia'),
(138, 'MV', 'Maldives'),
(139, 'ML', 'Mali'),
(140, 'MT', 'Malta'),
(141, 'MH', 'Marshall Islands'),
(142, 'MQ', 'Martinique'),
(143, 'MR', 'Mauritania'),
(144, 'MU', 'Mauritius'),
(145, 'YT', 'Mayotte'),
(146, 'MX', 'Mexico'),
(147, 'FM', 'Micronesia'),
(148, 'MD', 'Moldova'),
(149, 'MC', 'Monaco'),
(150, 'MN', 'Mongolia'),
(151, 'ME', 'Montenegro'),
(152, 'MS', 'Montserrat'),
(153, 'MA', 'Morocco'),
(154, 'MZ', 'Mozambique'),
(155, 'MM', 'Myanmar (Burma)'),
(156, 'NA', 'Namibia'),
(157, 'NR', 'Nauru'),
(158, 'NP', 'Nepal'),
(159, 'NL', 'Netherlands'),
(160, 'NC', 'New Caledonia'),
(161, 'NZ', 'New Zealand'),
(162, 'NI', 'Nicaragua'),
(163, 'NE', 'Niger'),
(164, 'NG', 'Nigeria'),
(165, 'NU', 'Niue'),
(166, 'NF', 'Norfolk Island'),
(167, 'KP', 'North Korea'),
(168, 'MP', 'Northern Mariana Islands'),
(169, 'NO', 'Norway'),
(170, 'OM', 'Oman'),
(171, 'PK', 'Pakistan'),
(172, 'PW', 'Palau'),
(173, 'PS', 'Palestinian Territories'),
(174, 'PA', 'Panama'),
(175, 'PG', 'Papua New Guinea'),
(176, 'PY', 'Paraguay'),
(177, 'PE', 'Peru'),
(178, 'PH', 'Philippines'),
(179, 'PN', 'Pitcairn Islands'),
(180, 'PL', 'Poland'),
(181, 'PT', 'Portugal'),
(182, 'PR', 'Puerto Rico'),
(183, 'QA', 'Qatar'),
(184, 'RE', 'Réunion'),
(185, 'RO', 'Romania'),
(186, 'RU', 'Russia'),
(187, 'RW', 'Rwanda'),
(188, 'WS', 'Samoa'),
(189, 'SM', 'San Marino'),
(190, 'ST', 'São Tomé & Príncipe'),
(191, 'SA', 'Saudi Arabia'),
(192, 'SN', 'Senegal'),
(193, 'RS', 'Serbia'),
(194, 'SC', 'Seychelles'),
(195, 'SL', 'Sierra Leone'),
(196, 'SG', 'Singapore'),
(197, 'SX', 'Sint Maarten'),
(198, 'SK', 'Slovakia'),
(199, 'SI', 'Slovenia'),
(200, 'SB', 'Solomon Islands'),
(201, 'SO', 'Somalia'),
(202, 'ZA', 'South Africa'),
(203, 'GS', 'South Georgia & South Sandwich Islands'),
(204, 'KR', 'South Korea'),
(205, 'SS', 'South Sudan'),
(206, 'ES', 'Spain'),
(207, 'LK', 'Sri Lanka'),
(208, 'BL', 'St. Barthélemy'),
(209, 'SH', 'St. Helena'),
(210, 'KN', 'St. Kitts & Nevis'),
(211, 'LC', 'St. Lucia'),
(212, 'MF', 'St. Martin'),
(213, 'PM', 'St. Pierre & Miquelon'),
(214, 'VC', 'St. Vincent & Grenadines'),
(215, 'SD', 'Sudan'),
(216, 'SR', 'Suriname'),
(217, 'SJ', 'Svalbard & Jan Mayen'),
(218, 'SZ', 'Swaziland'),
(219, 'SE', 'Sweden'),
(220, 'CH', 'Switzerland'),
(221, 'SY', 'Syria'),
(222, 'TW', 'Taiwan'),
(223, 'TJ', 'Tajikistan'),
(224, 'TZ', 'Tanzania'),
(225, 'TH', 'Thailand'),
(226, 'TL', 'Timor-Leste'),
(227, 'TG', 'Togo'),
(228, 'TK', 'Tokelau'),
(229, 'TO', 'Tonga'),
(230, 'TT', 'Trinidad & Tobago'),
(231, 'TA', 'Tristan da Cunha'),
(232, 'TN', 'Tunisia'),
(233, 'TR', 'Turkey'),
(234, 'TM', 'Turkmenistan'),
(235, 'TC', 'Turks & Caicos Islands'),
(236, 'TV', 'Tuvalu'),
(237, 'UM', 'U.S. Outlying Islands'),
(238, 'VI', 'U.S. Virgin Islands'),
(239, 'UG', 'Uganda'),
(240, 'UA', 'Ukraine'),
(241, 'AE', 'United Arab Emirates'),
(242, 'GB', 'United Kingdom'),
(243, 'UN', 'United Nations'),
(244, 'US', 'United States'),
(245, 'UY', 'Uruguay'),
(246, 'UZ', 'Uzbekistan'),
(247, 'VU', 'Vanuatu'),
(248, 'VA', 'Vatican City'),
(249, 'VE', 'Venezuela'),
(250, 'VN', 'Vietnam'),
(251, 'WF', 'Wallis & Futuna'),
(252, 'EH', 'Western Sahara'),
(253, 'YE', 'Yemen'),
(254, 'ZM', 'Zambia'),
(255, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `country_states`
--

CREATE TABLE `country_states` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `country_states`
--

INSERT INTO `country_states` (`id`, `country_code`, `code`, `default_name`, `country_id`) VALUES
(1, 'US', 'AL', 'Alabama', 244),
(2, 'US', 'AK', 'Alaska', 244),
(3, 'US', 'AS', 'American Samoa', 244),
(4, 'US', 'AZ', 'Arizona', 244),
(5, 'US', 'AR', 'Arkansas', 244),
(6, 'US', 'AE', 'Armed Forces Africa', 244),
(7, 'US', 'AA', 'Armed Forces Americas', 244),
(8, 'US', 'AE', 'Armed Forces Canada', 244),
(9, 'US', 'AE', 'Armed Forces Europe', 244),
(10, 'US', 'AE', 'Armed Forces Middle East', 244),
(11, 'US', 'AP', 'Armed Forces Pacific', 244),
(12, 'US', 'CA', 'California', 244),
(13, 'US', 'CO', 'Colorado', 244),
(14, 'US', 'CT', 'Connecticut', 244),
(15, 'US', 'DE', 'Delaware', 244),
(16, 'US', 'DC', 'District of Columbia', 244),
(17, 'US', 'FM', 'Federated States Of Micronesia', 244),
(18, 'US', 'FL', 'Florida', 244),
(19, 'US', 'GA', 'Georgia', 244),
(20, 'US', 'GU', 'Guam', 244),
(21, 'US', 'HI', 'Hawaii', 244),
(22, 'US', 'ID', 'Idaho', 244),
(23, 'US', 'IL', 'Illinois', 244),
(24, 'US', 'IN', 'Indiana', 244),
(25, 'US', 'IA', 'Iowa', 244),
(26, 'US', 'KS', 'Kansas', 244),
(27, 'US', 'KY', 'Kentucky', 244),
(28, 'US', 'LA', 'Louisiana', 244),
(29, 'US', 'ME', 'Maine', 244),
(30, 'US', 'MH', 'Marshall Islands', 244),
(31, 'US', 'MD', 'Maryland', 244),
(32, 'US', 'MA', 'Massachusetts', 244),
(33, 'US', 'MI', 'Michigan', 244),
(34, 'US', 'MN', 'Minnesota', 244),
(35, 'US', 'MS', 'Mississippi', 244),
(36, 'US', 'MO', 'Missouri', 244),
(37, 'US', 'MT', 'Montana', 244),
(38, 'US', 'NE', 'Nebraska', 244),
(39, 'US', 'NV', 'Nevada', 244),
(40, 'US', 'NH', 'New Hampshire', 244),
(41, 'US', 'NJ', 'New Jersey', 244),
(42, 'US', 'NM', 'New Mexico', 244),
(43, 'US', 'NY', 'New York', 244),
(44, 'US', 'NC', 'North Carolina', 244),
(45, 'US', 'ND', 'North Dakota', 244),
(46, 'US', 'MP', 'Northern Mariana Islands', 244),
(47, 'US', 'OH', 'Ohio', 244),
(48, 'US', 'OK', 'Oklahoma', 244),
(49, 'US', 'OR', 'Oregon', 244),
(50, 'US', 'PW', 'Palau', 244),
(51, 'US', 'PA', 'Pennsylvania', 244),
(52, 'US', 'PR', 'Puerto Rico', 244),
(53, 'US', 'RI', 'Rhode Island', 244),
(54, 'US', 'SC', 'South Carolina', 244),
(55, 'US', 'SD', 'South Dakota', 244),
(56, 'US', 'TN', 'Tennessee', 244),
(57, 'US', 'TX', 'Texas', 244),
(58, 'US', 'UT', 'Utah', 244),
(59, 'US', 'VT', 'Vermont', 244),
(60, 'US', 'VI', 'Virgin Islands', 244),
(61, 'US', 'VA', 'Virginia', 244),
(62, 'US', 'WA', 'Washington', 244),
(63, 'US', 'WV', 'West Virginia', 244),
(64, 'US', 'WI', 'Wisconsin', 244),
(65, 'US', 'WY', 'Wyoming', 244),
(66, 'CA', 'AB', 'Alberta', 40),
(67, 'CA', 'BC', 'British Columbia', 40),
(68, 'CA', 'MB', 'Manitoba', 40),
(69, 'CA', 'NL', 'Newfoundland and Labrador', 40),
(70, 'CA', 'NB', 'New Brunswick', 40),
(71, 'CA', 'NS', 'Nova Scotia', 40),
(72, 'CA', 'NT', 'Northwest Territories', 40),
(73, 'CA', 'NU', 'Nunavut', 40),
(74, 'CA', 'ON', 'Ontario', 40),
(75, 'CA', 'PE', 'Prince Edward Island', 40),
(76, 'CA', 'QC', 'Quebec', 40),
(77, 'CA', 'SK', 'Saskatchewan', 40),
(78, 'CA', 'YT', 'Yukon Territory', 40),
(79, 'DE', 'NDS', 'Niedersachsen', 88),
(80, 'DE', 'BAW', 'Baden-Württemberg', 88),
(81, 'DE', 'BAY', 'Bayern', 88),
(82, 'DE', 'BER', 'Berlin', 88),
(83, 'DE', 'BRG', 'Brandenburg', 88),
(84, 'DE', 'BRE', 'Bremen', 88),
(85, 'DE', 'HAM', 'Hamburg', 88),
(86, 'DE', 'HES', 'Hessen', 88),
(87, 'DE', 'MEC', 'Mecklenburg-Vorpommern', 88),
(88, 'DE', 'NRW', 'Nordrhein-Westfalen', 88),
(89, 'DE', 'RHE', 'Rheinland-Pfalz', 88),
(90, 'DE', 'SAR', 'Saarland', 88),
(91, 'DE', 'SAS', 'Sachsen', 88),
(92, 'DE', 'SAC', 'Sachsen-Anhalt', 88),
(93, 'DE', 'SCN', 'Schleswig-Holstein', 88),
(94, 'DE', 'THE', 'Thüringen', 88),
(95, 'AT', 'WI', 'Wien', 16),
(96, 'AT', 'NO', 'Niederösterreich', 16),
(97, 'AT', 'OO', 'Oberösterreich', 16),
(98, 'AT', 'SB', 'Salzburg', 16),
(99, 'AT', 'KN', 'Kärnten', 16),
(100, 'AT', 'ST', 'Steiermark', 16),
(101, 'AT', 'TI', 'Tirol', 16),
(102, 'AT', 'BL', 'Burgenland', 16),
(103, 'AT', 'VB', 'Vorarlberg', 16),
(104, 'CH', 'AG', 'Aargau', 220),
(105, 'CH', 'AI', 'Appenzell Innerrhoden', 220),
(106, 'CH', 'AR', 'Appenzell Ausserrhoden', 220),
(107, 'CH', 'BE', 'Bern', 220),
(108, 'CH', 'BL', 'Basel-Landschaft', 220),
(109, 'CH', 'BS', 'Basel-Stadt', 220),
(110, 'CH', 'FR', 'Freiburg', 220),
(111, 'CH', 'GE', 'Genf', 220),
(112, 'CH', 'GL', 'Glarus', 220),
(113, 'CH', 'GR', 'Graubünden', 220),
(114, 'CH', 'JU', 'Jura', 220),
(115, 'CH', 'LU', 'Luzern', 220),
(116, 'CH', 'NE', 'Neuenburg', 220),
(117, 'CH', 'NW', 'Nidwalden', 220),
(118, 'CH', 'OW', 'Obwalden', 220),
(119, 'CH', 'SG', 'St. Gallen', 220),
(120, 'CH', 'SH', 'Schaffhausen', 220),
(121, 'CH', 'SO', 'Solothurn', 220),
(122, 'CH', 'SZ', 'Schwyz', 220),
(123, 'CH', 'TG', 'Thurgau', 220),
(124, 'CH', 'TI', 'Tessin', 220),
(125, 'CH', 'UR', 'Uri', 220),
(126, 'CH', 'VD', 'Waadt', 220),
(127, 'CH', 'VS', 'Wallis', 220),
(128, 'CH', 'ZG', 'Zug', 220),
(129, 'CH', 'ZH', 'Zürich', 220),
(130, 'ES', 'A Coruсa', 'A Coruña', 206),
(131, 'ES', 'Alava', 'Alava', 206),
(132, 'ES', 'Albacete', 'Albacete', 206),
(133, 'ES', 'Alicante', 'Alicante', 206),
(134, 'ES', 'Almeria', 'Almeria', 206),
(135, 'ES', 'Asturias', 'Asturias', 206),
(136, 'ES', 'Avila', 'Avila', 206),
(137, 'ES', 'Badajoz', 'Badajoz', 206),
(138, 'ES', 'Baleares', 'Baleares', 206),
(139, 'ES', 'Barcelona', 'Barcelona', 206),
(140, 'ES', 'Burgos', 'Burgos', 206),
(141, 'ES', 'Caceres', 'Caceres', 206),
(142, 'ES', 'Cadiz', 'Cadiz', 206),
(143, 'ES', 'Cantabria', 'Cantabria', 206),
(144, 'ES', 'Castellon', 'Castellon', 206),
(145, 'ES', 'Ceuta', 'Ceuta', 206),
(146, 'ES', 'Ciudad Real', 'Ciudad Real', 206),
(147, 'ES', 'Cordoba', 'Cordoba', 206),
(148, 'ES', 'Cuenca', 'Cuenca', 206),
(149, 'ES', 'Girona', 'Girona', 206),
(150, 'ES', 'Granada', 'Granada', 206),
(151, 'ES', 'Guadalajara', 'Guadalajara', 206),
(152, 'ES', 'Guipuzcoa', 'Guipuzcoa', 206),
(153, 'ES', 'Huelva', 'Huelva', 206),
(154, 'ES', 'Huesca', 'Huesca', 206),
(155, 'ES', 'Jaen', 'Jaen', 206),
(156, 'ES', 'La Rioja', 'La Rioja', 206),
(157, 'ES', 'Las Palmas', 'Las Palmas', 206),
(158, 'ES', 'Leon', 'Leon', 206),
(159, 'ES', 'Lleida', 'Lleida', 206),
(160, 'ES', 'Lugo', 'Lugo', 206),
(161, 'ES', 'Madrid', 'Madrid', 206),
(162, 'ES', 'Malaga', 'Malaga', 206),
(163, 'ES', 'Melilla', 'Melilla', 206),
(164, 'ES', 'Murcia', 'Murcia', 206),
(165, 'ES', 'Navarra', 'Navarra', 206),
(166, 'ES', 'Ourense', 'Ourense', 206),
(167, 'ES', 'Palencia', 'Palencia', 206),
(168, 'ES', 'Pontevedra', 'Pontevedra', 206),
(169, 'ES', 'Salamanca', 'Salamanca', 206),
(170, 'ES', 'Santa Cruz de Tenerife', 'Santa Cruz de Tenerife', 206),
(171, 'ES', 'Segovia', 'Segovia', 206),
(172, 'ES', 'Sevilla', 'Sevilla', 206),
(173, 'ES', 'Soria', 'Soria', 206),
(174, 'ES', 'Tarragona', 'Tarragona', 206),
(175, 'ES', 'Teruel', 'Teruel', 206),
(176, 'ES', 'Toledo', 'Toledo', 206),
(177, 'ES', 'Valencia', 'Valencia', 206),
(178, 'ES', 'Valladolid', 'Valladolid', 206),
(179, 'ES', 'Vizcaya', 'Vizcaya', 206),
(180, 'ES', 'Zamora', 'Zamora', 206),
(181, 'ES', 'Zaragoza', 'Zaragoza', 206),
(182, 'FR', '1', 'Ain', 81),
(183, 'FR', '2', 'Aisne', 81),
(184, 'FR', '3', 'Allier', 81),
(185, 'FR', '4', 'Alpes-de-Haute-Provence', 81),
(186, 'FR', '5', 'Hautes-Alpes', 81),
(187, 'FR', '6', 'Alpes-Maritimes', 81),
(188, 'FR', '7', 'Ardèche', 81),
(189, 'FR', '8', 'Ardennes', 81),
(190, 'FR', '9', 'Ariège', 81),
(191, 'FR', '10', 'Aube', 81),
(192, 'FR', '11', 'Aude', 81),
(193, 'FR', '12', 'Aveyron', 81),
(194, 'FR', '13', 'Bouches-du-Rhône', 81),
(195, 'FR', '14', 'Calvados', 81),
(196, 'FR', '15', 'Cantal', 81),
(197, 'FR', '16', 'Charente', 81),
(198, 'FR', '17', 'Charente-Maritime', 81),
(199, 'FR', '18', 'Cher', 81),
(200, 'FR', '19', 'Corrèze', 81),
(201, 'FR', '2A', 'Corse-du-Sud', 81),
(202, 'FR', '2B', 'Haute-Corse', 81),
(203, 'FR', '21', 'Côte-d\'Or', 81),
(204, 'FR', '22', 'Côtes-d\'Armor', 81),
(205, 'FR', '23', 'Creuse', 81),
(206, 'FR', '24', 'Dordogne', 81),
(207, 'FR', '25', 'Doubs', 81),
(208, 'FR', '26', 'Drôme', 81),
(209, 'FR', '27', 'Eure', 81),
(210, 'FR', '28', 'Eure-et-Loir', 81),
(211, 'FR', '29', 'Finistère', 81),
(212, 'FR', '30', 'Gard', 81),
(213, 'FR', '31', 'Haute-Garonne', 81),
(214, 'FR', '32', 'Gers', 81),
(215, 'FR', '33', 'Gironde', 81),
(216, 'FR', '34', 'Hérault', 81),
(217, 'FR', '35', 'Ille-et-Vilaine', 81),
(218, 'FR', '36', 'Indre', 81),
(219, 'FR', '37', 'Indre-et-Loire', 81),
(220, 'FR', '38', 'Isère', 81),
(221, 'FR', '39', 'Jura', 81),
(222, 'FR', '40', 'Landes', 81),
(223, 'FR', '41', 'Loir-et-Cher', 81),
(224, 'FR', '42', 'Loire', 81),
(225, 'FR', '43', 'Haute-Loire', 81),
(226, 'FR', '44', 'Loire-Atlantique', 81),
(227, 'FR', '45', 'Loiret', 81),
(228, 'FR', '46', 'Lot', 81),
(229, 'FR', '47', 'Lot-et-Garonne', 81),
(230, 'FR', '48', 'Lozère', 81),
(231, 'FR', '49', 'Maine-et-Loire', 81),
(232, 'FR', '50', 'Manche', 81),
(233, 'FR', '51', 'Marne', 81),
(234, 'FR', '52', 'Haute-Marne', 81),
(235, 'FR', '53', 'Mayenne', 81),
(236, 'FR', '54', 'Meurthe-et-Moselle', 81),
(237, 'FR', '55', 'Meuse', 81),
(238, 'FR', '56', 'Morbihan', 81),
(239, 'FR', '57', 'Moselle', 81),
(240, 'FR', '58', 'Nièvre', 81),
(241, 'FR', '59', 'Nord', 81),
(242, 'FR', '60', 'Oise', 81),
(243, 'FR', '61', 'Orne', 81),
(244, 'FR', '62', 'Pas-de-Calais', 81),
(245, 'FR', '63', 'Puy-de-Dôme', 81),
(246, 'FR', '64', 'Pyrénées-Atlantiques', 81),
(247, 'FR', '65', 'Hautes-Pyrénées', 81),
(248, 'FR', '66', 'Pyrénées-Orientales', 81),
(249, 'FR', '67', 'Bas-Rhin', 81),
(250, 'FR', '68', 'Haut-Rhin', 81),
(251, 'FR', '69', 'Rhône', 81),
(252, 'FR', '70', 'Haute-Saône', 81),
(253, 'FR', '71', 'Saône-et-Loire', 81),
(254, 'FR', '72', 'Sarthe', 81),
(255, 'FR', '73', 'Savoie', 81),
(256, 'FR', '74', 'Haute-Savoie', 81),
(257, 'FR', '75', 'Paris', 81),
(258, 'FR', '76', 'Seine-Maritime', 81),
(259, 'FR', '77', 'Seine-et-Marne', 81),
(260, 'FR', '78', 'Yvelines', 81),
(261, 'FR', '79', 'Deux-Sèvres', 81),
(262, 'FR', '80', 'Somme', 81),
(263, 'FR', '81', 'Tarn', 81),
(264, 'FR', '82', 'Tarn-et-Garonne', 81),
(265, 'FR', '83', 'Var', 81),
(266, 'FR', '84', 'Vaucluse', 81),
(267, 'FR', '85', 'Vendée', 81),
(268, 'FR', '86', 'Vienne', 81),
(269, 'FR', '87', 'Haute-Vienne', 81),
(270, 'FR', '88', 'Vosges', 81),
(271, 'FR', '89', 'Yonne', 81),
(272, 'FR', '90', 'Territoire-de-Belfort', 81),
(273, 'FR', '91', 'Essonne', 81),
(274, 'FR', '92', 'Hauts-de-Seine', 81),
(275, 'FR', '93', 'Seine-Saint-Denis', 81),
(276, 'FR', '94', 'Val-de-Marne', 81),
(277, 'FR', '95', 'Val-d\'Oise', 81),
(278, 'RO', 'AB', 'Alba', 185),
(279, 'RO', 'AR', 'Arad', 185),
(280, 'RO', 'AG', 'Argeş', 185),
(281, 'RO', 'BC', 'Bacău', 185),
(282, 'RO', 'BH', 'Bihor', 185),
(283, 'RO', 'BN', 'Bistriţa-Năsăud', 185),
(284, 'RO', 'BT', 'Botoşani', 185),
(285, 'RO', 'BV', 'Braşov', 185),
(286, 'RO', 'BR', 'Brăila', 185),
(287, 'RO', 'B', 'Bucureşti', 185),
(288, 'RO', 'BZ', 'Buzău', 185),
(289, 'RO', 'CS', 'Caraş-Severin', 185),
(290, 'RO', 'CL', 'Călăraşi', 185),
(291, 'RO', 'CJ', 'Cluj', 185),
(292, 'RO', 'CT', 'Constanţa', 185),
(293, 'RO', 'CV', 'Covasna', 185),
(294, 'RO', 'DB', 'Dâmboviţa', 185),
(295, 'RO', 'DJ', 'Dolj', 185),
(296, 'RO', 'GL', 'Galaţi', 185),
(297, 'RO', 'GR', 'Giurgiu', 185),
(298, 'RO', 'GJ', 'Gorj', 185),
(299, 'RO', 'HR', 'Harghita', 185),
(300, 'RO', 'HD', 'Hunedoara', 185),
(301, 'RO', 'IL', 'Ialomiţa', 185),
(302, 'RO', 'IS', 'Iaşi', 185),
(303, 'RO', 'IF', 'Ilfov', 185),
(304, 'RO', 'MM', 'Maramureş', 185),
(305, 'RO', 'MH', 'Mehedinţi', 185),
(306, 'RO', 'MS', 'Mureş', 185),
(307, 'RO', 'NT', 'Neamţ', 185),
(308, 'RO', 'OT', 'Olt', 185),
(309, 'RO', 'PH', 'Prahova', 185),
(310, 'RO', 'SM', 'Satu-Mare', 185),
(311, 'RO', 'SJ', 'Sălaj', 185),
(312, 'RO', 'SB', 'Sibiu', 185),
(313, 'RO', 'SV', 'Suceava', 185),
(314, 'RO', 'TR', 'Teleorman', 185),
(315, 'RO', 'TM', 'Timiş', 185),
(316, 'RO', 'TL', 'Tulcea', 185),
(317, 'RO', 'VS', 'Vaslui', 185),
(318, 'RO', 'VL', 'Vâlcea', 185),
(319, 'RO', 'VN', 'Vrancea', 185),
(320, 'FI', 'Lappi', 'Lappi', 80),
(321, 'FI', 'Pohjois-Pohjanmaa', 'Pohjois-Pohjanmaa', 80),
(322, 'FI', 'Kainuu', 'Kainuu', 80),
(323, 'FI', 'Pohjois-Karjala', 'Pohjois-Karjala', 80),
(324, 'FI', 'Pohjois-Savo', 'Pohjois-Savo', 80),
(325, 'FI', 'Etelä-Savo', 'Etelä-Savo', 80),
(326, 'FI', 'Etelä-Pohjanmaa', 'Etelä-Pohjanmaa', 80),
(327, 'FI', 'Pohjanmaa', 'Pohjanmaa', 80),
(328, 'FI', 'Pirkanmaa', 'Pirkanmaa', 80),
(329, 'FI', 'Satakunta', 'Satakunta', 80),
(330, 'FI', 'Keski-Pohjanmaa', 'Keski-Pohjanmaa', 80),
(331, 'FI', 'Keski-Suomi', 'Keski-Suomi', 80),
(332, 'FI', 'Varsinais-Suomi', 'Varsinais-Suomi', 80),
(333, 'FI', 'Etelä-Karjala', 'Etelä-Karjala', 80),
(334, 'FI', 'Päijät-Häme', 'Päijät-Häme', 80),
(335, 'FI', 'Kanta-Häme', 'Kanta-Häme', 80),
(336, 'FI', 'Uusimaa', 'Uusimaa', 80),
(337, 'FI', 'Itä-Uusimaa', 'Itä-Uusimaa', 80),
(338, 'FI', 'Kymenlaakso', 'Kymenlaakso', 80),
(339, 'FI', 'Ahvenanmaa', 'Ahvenanmaa', 80),
(340, 'EE', 'EE-37', 'Harjumaa', 74),
(341, 'EE', 'EE-39', 'Hiiumaa', 74),
(342, 'EE', 'EE-44', 'Ida-Virumaa', 74),
(343, 'EE', 'EE-49', 'Jõgevamaa', 74),
(344, 'EE', 'EE-51', 'Järvamaa', 74),
(345, 'EE', 'EE-57', 'Läänemaa', 74),
(346, 'EE', 'EE-59', 'Lääne-Virumaa', 74),
(347, 'EE', 'EE-65', 'Põlvamaa', 74),
(348, 'EE', 'EE-67', 'Pärnumaa', 74),
(349, 'EE', 'EE-70', 'Raplamaa', 74),
(350, 'EE', 'EE-74', 'Saaremaa', 74),
(351, 'EE', 'EE-78', 'Tartumaa', 74),
(352, 'EE', 'EE-82', 'Valgamaa', 74),
(353, 'EE', 'EE-84', 'Viljandimaa', 74),
(354, 'EE', 'EE-86', 'Võrumaa', 74),
(355, 'LV', 'LV-DGV', 'Daugavpils', 125),
(356, 'LV', 'LV-JEL', 'Jelgava', 125),
(357, 'LV', 'Jēkabpils', 'Jēkabpils', 125),
(358, 'LV', 'LV-JUR', 'Jūrmala', 125),
(359, 'LV', 'LV-LPX', 'Liepāja', 125),
(360, 'LV', 'LV-LE', 'Liepājas novads', 125),
(361, 'LV', 'LV-REZ', 'Rēzekne', 125),
(362, 'LV', 'LV-RIX', 'Rīga', 125),
(363, 'LV', 'LV-RI', 'Rīgas novads', 125),
(364, 'LV', 'Valmiera', 'Valmiera', 125),
(365, 'LV', 'LV-VEN', 'Ventspils', 125),
(366, 'LV', 'Aglonas novads', 'Aglonas novads', 125),
(367, 'LV', 'LV-AI', 'Aizkraukles novads', 125),
(368, 'LV', 'Aizputes novads', 'Aizputes novads', 125),
(369, 'LV', 'Aknīstes novads', 'Aknīstes novads', 125),
(370, 'LV', 'Alojas novads', 'Alojas novads', 125),
(371, 'LV', 'Alsungas novads', 'Alsungas novads', 125),
(372, 'LV', 'LV-AL', 'Alūksnes novads', 125),
(373, 'LV', 'Amatas novads', 'Amatas novads', 125),
(374, 'LV', 'Apes novads', 'Apes novads', 125),
(375, 'LV', 'Auces novads', 'Auces novads', 125),
(376, 'LV', 'Babītes novads', 'Babītes novads', 125),
(377, 'LV', 'Baldones novads', 'Baldones novads', 125),
(378, 'LV', 'Baltinavas novads', 'Baltinavas novads', 125),
(379, 'LV', 'LV-BL', 'Balvu novads', 125),
(380, 'LV', 'LV-BU', 'Bauskas novads', 125),
(381, 'LV', 'Beverīnas novads', 'Beverīnas novads', 125),
(382, 'LV', 'Brocēnu novads', 'Brocēnu novads', 125),
(383, 'LV', 'Burtnieku novads', 'Burtnieku novads', 125),
(384, 'LV', 'Carnikavas novads', 'Carnikavas novads', 125),
(385, 'LV', 'Cesvaines novads', 'Cesvaines novads', 125),
(386, 'LV', 'Ciblas novads', 'Ciblas novads', 125),
(387, 'LV', 'LV-CE', 'Cēsu novads', 125),
(388, 'LV', 'Dagdas novads', 'Dagdas novads', 125),
(389, 'LV', 'LV-DA', 'Daugavpils novads', 125),
(390, 'LV', 'LV-DO', 'Dobeles novads', 125),
(391, 'LV', 'Dundagas novads', 'Dundagas novads', 125),
(392, 'LV', 'Durbes novads', 'Durbes novads', 125),
(393, 'LV', 'Engures novads', 'Engures novads', 125),
(394, 'LV', 'Garkalnes novads', 'Garkalnes novads', 125),
(395, 'LV', 'Grobiņas novads', 'Grobiņas novads', 125),
(396, 'LV', 'LV-GU', 'Gulbenes novads', 125),
(397, 'LV', 'Iecavas novads', 'Iecavas novads', 125),
(398, 'LV', 'Ikšķiles novads', 'Ikšķiles novads', 125),
(399, 'LV', 'Ilūkstes novads', 'Ilūkstes novads', 125),
(400, 'LV', 'Inčukalna novads', 'Inčukalna novads', 125),
(401, 'LV', 'Jaunjelgavas novads', 'Jaunjelgavas novads', 125),
(402, 'LV', 'Jaunpiebalgas novads', 'Jaunpiebalgas novads', 125),
(403, 'LV', 'Jaunpils novads', 'Jaunpils novads', 125),
(404, 'LV', 'LV-JL', 'Jelgavas novads', 125),
(405, 'LV', 'LV-JK', 'Jēkabpils novads', 125),
(406, 'LV', 'Kandavas novads', 'Kandavas novads', 125),
(407, 'LV', 'Kokneses novads', 'Kokneses novads', 125),
(408, 'LV', 'Krimuldas novads', 'Krimuldas novads', 125),
(409, 'LV', 'Krustpils novads', 'Krustpils novads', 125),
(410, 'LV', 'LV-KR', 'Krāslavas novads', 125),
(411, 'LV', 'LV-KU', 'Kuldīgas novads', 125),
(412, 'LV', 'Kārsavas novads', 'Kārsavas novads', 125),
(413, 'LV', 'Lielvārdes novads', 'Lielvārdes novads', 125),
(414, 'LV', 'LV-LM', 'Limbažu novads', 125),
(415, 'LV', 'Lubānas novads', 'Lubānas novads', 125),
(416, 'LV', 'LV-LU', 'Ludzas novads', 125),
(417, 'LV', 'Līgatnes novads', 'Līgatnes novads', 125),
(418, 'LV', 'Līvānu novads', 'Līvānu novads', 125),
(419, 'LV', 'LV-MA', 'Madonas novads', 125),
(420, 'LV', 'Mazsalacas novads', 'Mazsalacas novads', 125),
(421, 'LV', 'Mālpils novads', 'Mālpils novads', 125),
(422, 'LV', 'Mārupes novads', 'Mārupes novads', 125),
(423, 'LV', 'Naukšēnu novads', 'Naukšēnu novads', 125),
(424, 'LV', 'Neretas novads', 'Neretas novads', 125),
(425, 'LV', 'Nīcas novads', 'Nīcas novads', 125),
(426, 'LV', 'LV-OG', 'Ogres novads', 125),
(427, 'LV', 'Olaines novads', 'Olaines novads', 125),
(428, 'LV', 'Ozolnieku novads', 'Ozolnieku novads', 125),
(429, 'LV', 'LV-PR', 'Preiļu novads', 125),
(430, 'LV', 'Priekules novads', 'Priekules novads', 125),
(431, 'LV', 'Priekuļu novads', 'Priekuļu novads', 125),
(432, 'LV', 'Pārgaujas novads', 'Pārgaujas novads', 125),
(433, 'LV', 'Pāvilostas novads', 'Pāvilostas novads', 125),
(434, 'LV', 'Pļaviņu novads', 'Pļaviņu novads', 125),
(435, 'LV', 'Raunas novads', 'Raunas novads', 125),
(436, 'LV', 'Riebiņu novads', 'Riebiņu novads', 125),
(437, 'LV', 'Rojas novads', 'Rojas novads', 125),
(438, 'LV', 'Ropažu novads', 'Ropažu novads', 125),
(439, 'LV', 'Rucavas novads', 'Rucavas novads', 125),
(440, 'LV', 'Rugāju novads', 'Rugāju novads', 125),
(441, 'LV', 'Rundāles novads', 'Rundāles novads', 125),
(442, 'LV', 'LV-RE', 'Rēzeknes novads', 125),
(443, 'LV', 'Rūjienas novads', 'Rūjienas novads', 125),
(444, 'LV', 'Salacgrīvas novads', 'Salacgrīvas novads', 125),
(445, 'LV', 'Salas novads', 'Salas novads', 125),
(446, 'LV', 'Salaspils novads', 'Salaspils novads', 125),
(447, 'LV', 'LV-SA', 'Saldus novads', 125),
(448, 'LV', 'Saulkrastu novads', 'Saulkrastu novads', 125),
(449, 'LV', 'Siguldas novads', 'Siguldas novads', 125),
(450, 'LV', 'Skrundas novads', 'Skrundas novads', 125),
(451, 'LV', 'Skrīveru novads', 'Skrīveru novads', 125),
(452, 'LV', 'Smiltenes novads', 'Smiltenes novads', 125),
(453, 'LV', 'Stopiņu novads', 'Stopiņu novads', 125),
(454, 'LV', 'Strenču novads', 'Strenču novads', 125),
(455, 'LV', 'Sējas novads', 'Sējas novads', 125),
(456, 'LV', 'LV-TA', 'Talsu novads', 125),
(457, 'LV', 'LV-TU', 'Tukuma novads', 125),
(458, 'LV', 'Tērvetes novads', 'Tērvetes novads', 125),
(459, 'LV', 'Vaiņodes novads', 'Vaiņodes novads', 125),
(460, 'LV', 'LV-VK', 'Valkas novads', 125),
(461, 'LV', 'LV-VM', 'Valmieras novads', 125),
(462, 'LV', 'Varakļānu novads', 'Varakļānu novads', 125),
(463, 'LV', 'Vecpiebalgas novads', 'Vecpiebalgas novads', 125),
(464, 'LV', 'Vecumnieku novads', 'Vecumnieku novads', 125),
(465, 'LV', 'LV-VE', 'Ventspils novads', 125),
(466, 'LV', 'Viesītes novads', 'Viesītes novads', 125),
(467, 'LV', 'Viļakas novads', 'Viļakas novads', 125),
(468, 'LV', 'Viļānu novads', 'Viļānu novads', 125),
(469, 'LV', 'Vārkavas novads', 'Vārkavas novads', 125),
(470, 'LV', 'Zilupes novads', 'Zilupes novads', 125),
(471, 'LV', 'Ādažu novads', 'Ādažu novads', 125),
(472, 'LV', 'Ērgļu novads', 'Ērgļu novads', 125),
(473, 'LV', 'Ķeguma novads', 'Ķeguma novads', 125),
(474, 'LV', 'Ķekavas novads', 'Ķekavas novads', 125),
(475, 'LT', 'LT-AL', 'Alytaus Apskritis', 131),
(476, 'LT', 'LT-KU', 'Kauno Apskritis', 131),
(477, 'LT', 'LT-KL', 'Klaipėdos Apskritis', 131),
(478, 'LT', 'LT-MR', 'Marijampolės Apskritis', 131),
(479, 'LT', 'LT-PN', 'Panevėžio Apskritis', 131),
(480, 'LT', 'LT-SA', 'Šiaulių Apskritis', 131),
(481, 'LT', 'LT-TA', 'Tauragės Apskritis', 131),
(482, 'LT', 'LT-TE', 'Telšių Apskritis', 131),
(483, 'LT', 'LT-UT', 'Utenos Apskritis', 131),
(484, 'LT', 'LT-VL', 'Vilniaus Apskritis', 131),
(485, 'BR', 'AC', 'Acre', 31),
(486, 'BR', 'AL', 'Alagoas', 31),
(487, 'BR', 'AP', 'Amapá', 31),
(488, 'BR', 'AM', 'Amazonas', 31),
(489, 'BR', 'BA', 'Bahia', 31),
(490, 'BR', 'CE', 'Ceará', 31),
(491, 'BR', 'ES', 'Espírito Santo', 31),
(492, 'BR', 'GO', 'Goiás', 31),
(493, 'BR', 'MA', 'Maranhão', 31),
(494, 'BR', 'MT', 'Mato Grosso', 31),
(495, 'BR', 'MS', 'Mato Grosso do Sul', 31),
(496, 'BR', 'MG', 'Minas Gerais', 31),
(497, 'BR', 'PA', 'Pará', 31),
(498, 'BR', 'PB', 'Paraíba', 31),
(499, 'BR', 'PR', 'Paraná', 31),
(500, 'BR', 'PE', 'Pernambuco', 31),
(501, 'BR', 'PI', 'Piauí', 31),
(502, 'BR', 'RJ', 'Rio de Janeiro', 31),
(503, 'BR', 'RN', 'Rio Grande do Norte', 31),
(504, 'BR', 'RS', 'Rio Grande do Sul', 31),
(505, 'BR', 'RO', 'Rondônia', 31),
(506, 'BR', 'RR', 'Roraima', 31),
(507, 'BR', 'SC', 'Santa Catarina', 31),
(508, 'BR', 'SP', 'São Paulo', 31),
(509, 'BR', 'SE', 'Sergipe', 31),
(510, 'BR', 'TO', 'Tocantins', 31),
(511, 'BR', 'DF', 'Distrito Federal', 31),
(512, 'HR', 'HR-01', 'Zagrebačka županija', 59),
(513, 'HR', 'HR-02', 'Krapinsko-zagorska županija', 59),
(514, 'HR', 'HR-03', 'Sisačko-moslavačka županija', 59),
(515, 'HR', 'HR-04', 'Karlovačka županija', 59),
(516, 'HR', 'HR-05', 'Varaždinska županija', 59),
(517, 'HR', 'HR-06', 'Koprivničko-križevačka županija', 59),
(518, 'HR', 'HR-07', 'Bjelovarsko-bilogorska županija', 59),
(519, 'HR', 'HR-08', 'Primorsko-goranska županija', 59),
(520, 'HR', 'HR-09', 'Ličko-senjska županija', 59),
(521, 'HR', 'HR-10', 'Virovitičko-podravska županija', 59),
(522, 'HR', 'HR-11', 'Požeško-slavonska županija', 59),
(523, 'HR', 'HR-12', 'Brodsko-posavska županija', 59),
(524, 'HR', 'HR-13', 'Zadarska županija', 59),
(525, 'HR', 'HR-14', 'Osječko-baranjska županija', 59),
(526, 'HR', 'HR-15', 'Šibensko-kninska županija', 59),
(527, 'HR', 'HR-16', 'Vukovarsko-srijemska županija', 59),
(528, 'HR', 'HR-17', 'Splitsko-dalmatinska županija', 59),
(529, 'HR', 'HR-18', 'Istarska županija', 59),
(530, 'HR', 'HR-19', 'Dubrovačko-neretvanska županija', 59),
(531, 'HR', 'HR-20', 'Međimurska županija', 59),
(532, 'HR', 'HR-21', 'Grad Zagreb', 59),
(533, 'IN', 'AN', 'Andaman and Nicobar Islands', 106),
(534, 'IN', 'AP', 'Andhra Pradesh', 106),
(535, 'IN', 'AR', 'Arunachal Pradesh', 106),
(536, 'IN', 'AS', 'Assam', 106),
(537, 'IN', 'BR', 'Bihar', 106),
(538, 'IN', 'CH', 'Chandigarh', 106),
(539, 'IN', 'CT', 'Chhattisgarh', 106),
(540, 'IN', 'DN', 'Dadra and Nagar Haveli', 106),
(541, 'IN', 'DD', 'Daman and Diu', 106),
(542, 'IN', 'DL', 'Delhi', 106),
(543, 'IN', 'GA', 'Goa', 106),
(544, 'IN', 'GJ', 'Gujarat', 106),
(545, 'IN', 'HR', 'Haryana', 106),
(546, 'IN', 'HP', 'Himachal Pradesh', 106),
(547, 'IN', 'JK', 'Jammu and Kashmir', 106),
(548, 'IN', 'JH', 'Jharkhand', 106),
(549, 'IN', 'KA', 'Karnataka', 106),
(550, 'IN', 'KL', 'Kerala', 106),
(551, 'IN', 'LD', 'Lakshadweep', 106),
(552, 'IN', 'MP', 'Madhya Pradesh', 106),
(553, 'IN', 'MH', 'Maharashtra', 106),
(554, 'IN', 'MN', 'Manipur', 106),
(555, 'IN', 'ML', 'Meghalaya', 106),
(556, 'IN', 'MZ', 'Mizoram', 106),
(557, 'IN', 'NL', 'Nagaland', 106),
(558, 'IN', 'OR', 'Odisha', 106),
(559, 'IN', 'PY', 'Puducherry', 106),
(560, 'IN', 'PB', 'Punjab', 106),
(561, 'IN', 'RJ', 'Rajasthan', 106),
(562, 'IN', 'SK', 'Sikkim', 106),
(563, 'IN', 'TN', 'Tamil Nadu', 106),
(564, 'IN', 'TG', 'Telangana', 106),
(565, 'IN', 'TR', 'Tripura', 106),
(566, 'IN', 'UP', 'Uttar Pradesh', 106),
(567, 'IN', 'UT', 'Uttarakhand', 106),
(568, 'IN', 'WB', 'West Bengal', 106),
(569, 'PY', 'PY-16', 'Alto Paraguay', 176),
(570, 'PY', 'PY-10', 'Alto Paraná', 176),
(571, 'PY', 'PY-13', 'Amambay', 176),
(572, 'PY', 'PY-ASU', 'Asunción', 176),
(573, 'PY', 'PY-19', 'Boquerón', 176),
(574, 'PY', 'PY-5', 'Caaguazú', 176),
(575, 'PY', 'PY-6', 'Caazapá', 176),
(576, 'PY', 'PY-14', 'Canindeyú', 176),
(577, 'PY', 'PY-11', 'Central', 176),
(578, 'PY', 'PY-1', 'Concepción', 176),
(579, 'PY', 'PY-3', 'Cordillera', 176),
(580, 'PY', 'PY-4', 'Guairá', 176),
(581, 'PY', 'PY-7', 'Itapúa', 176),
(582, 'PY', 'PY-8', 'Misiones', 176),
(583, 'PY', 'PY-9', 'Paraguarí', 176),
(584, 'PY', 'PY-15', 'Presidente Hayes', 176),
(585, 'PY', 'PY-2', 'San Pedro', 176),
(586, 'PY', 'PY-12', 'Ñeembucú', 176);

-- --------------------------------------------------------

--
-- Table structure for table `country_state_translations`
--

CREATE TABLE `country_state_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default_name` text COLLATE utf8mb4_unicode_ci,
  `country_state_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `country_state_translations`
--

INSERT INTO `country_state_translations` (`id`, `locale`, `default_name`, `country_state_id`) VALUES
(1, 'ar', 'ألاباما', 1),
(2, 'ar', 'ألاسكا', 2),
(3, 'ar', 'ساموا الأمريكية', 3),
(4, 'ar', 'أريزونا', 4),
(5, 'ar', 'أركنساس', 5),
(6, 'ar', 'القوات المسلحة أفريقيا', 6),
(7, 'ar', 'القوات المسلحة الأمريكية', 7),
(8, 'ar', 'القوات المسلحة الكندية', 8),
(9, 'ar', 'القوات المسلحة أوروبا', 9),
(10, 'ar', 'القوات المسلحة الشرق الأوسط', 10),
(11, 'ar', 'القوات المسلحة في المحيط الهادئ', 11),
(12, 'ar', 'كاليفورنيا', 12),
(13, 'ar', 'كولورادو', 13),
(14, 'ar', 'كونيتيكت', 14),
(15, 'ar', 'ديلاوير', 15),
(16, 'ar', 'مقاطعة كولومبيا', 16),
(17, 'ar', 'ولايات ميكرونيزيا الموحدة', 17),
(18, 'ar', 'فلوريدا', 18),
(19, 'ar', 'جورجيا', 19),
(20, 'ar', 'غوام', 20),
(21, 'ar', 'هاواي', 21),
(22, 'ar', 'ايداهو', 22),
(23, 'ar', 'إلينوي', 23),
(24, 'ar', 'إنديانا', 24),
(25, 'ar', 'أيوا', 25),
(26, 'ar', 'كانساس', 26),
(27, 'ar', 'كنتاكي', 27),
(28, 'ar', 'لويزيانا', 28),
(29, 'ar', 'مين', 29),
(30, 'ar', 'جزر مارشال', 30),
(31, 'ar', 'ماريلاند', 31),
(32, 'ar', 'ماساتشوستس', 32),
(33, 'ar', 'ميشيغان', 33),
(34, 'ar', 'مينيسوتا', 34),
(35, 'ar', 'ميسيسيبي', 35),
(36, 'ar', 'ميسوري', 36),
(37, 'ar', 'مونتانا', 37),
(38, 'ar', 'نبراسكا', 38),
(39, 'ar', 'نيفادا', 39),
(40, 'ar', 'نيو هامبشاير', 40),
(41, 'ar', 'نيو جيرسي', 41),
(42, 'ar', 'المكسيك جديدة', 42),
(43, 'ar', 'نيويورك', 43),
(44, 'ar', 'شمال كارولينا', 44),
(45, 'ar', 'شمال داكوتا', 45),
(46, 'ar', 'جزر مريانا الشمالية', 46),
(47, 'ar', 'أوهايو', 47),
(48, 'ar', 'أوكلاهوما', 48),
(49, 'ar', 'ولاية أوريغون', 49),
(50, 'ar', 'بالاو', 50),
(51, 'ar', 'بنسلفانيا', 51),
(52, 'ar', 'بورتوريكو', 52),
(53, 'ar', 'جزيرة رود', 53),
(54, 'ar', 'كارولينا الجنوبية', 54),
(55, 'ar', 'جنوب داكوتا', 55),
(56, 'ar', 'تينيسي', 56),
(57, 'ar', 'تكساس', 57),
(58, 'ar', 'يوتا', 58),
(59, 'ar', 'فيرمونت', 59),
(60, 'ar', 'جزر فيرجن', 60),
(61, 'ar', 'فرجينيا', 61),
(62, 'ar', 'واشنطن', 62),
(63, 'ar', 'فرجينيا الغربية', 63),
(64, 'ar', 'ولاية ويسكونسن', 64),
(65, 'ar', 'وايومنغ', 65),
(66, 'ar', 'ألبرتا', 66),
(67, 'ar', 'كولومبيا البريطانية', 67),
(68, 'ar', 'مانيتوبا', 68),
(69, 'ar', 'نيوفاوندلاند ولابرادور', 69),
(70, 'ar', 'برونزيك جديد', 70),
(71, 'ar', 'مقاطعة نفوفا سكوشيا', 71),
(72, 'ar', 'الاقاليم الشمالية الغربية', 72),
(73, 'ar', 'نونافوت', 73),
(74, 'ar', 'أونتاريو', 74),
(75, 'ar', 'جزيرة الأمير ادوارد', 75),
(76, 'ar', 'كيبيك', 76),
(77, 'ar', 'ساسكاتشوان', 77),
(78, 'ar', 'إقليم يوكون', 78),
(79, 'ar', 'Niedersachsen', 79),
(80, 'ar', 'بادن فورتمبيرغ', 80),
(81, 'ar', 'بايرن ميونيخ', 81),
(82, 'ar', 'برلين', 82),
(83, 'ar', 'براندنبورغ', 83),
(84, 'ar', 'بريمن', 84),
(85, 'ar', 'هامبورغ', 85),
(86, 'ar', 'هيسن', 86),
(87, 'ar', 'مكلنبورغ-فوربومرن', 87),
(88, 'ar', 'نوردراين فيستفالن', 88),
(89, 'ar', 'راينلاند-بفالز', 89),
(90, 'ar', 'سارلاند', 90),
(91, 'ar', 'ساكسن', 91),
(92, 'ar', 'سكسونيا أنهالت', 92),
(93, 'ar', 'شليسفيغ هولشتاين', 93),
(94, 'ar', 'تورنغن', 94),
(95, 'ar', 'فيينا', 95),
(96, 'ar', 'النمسا السفلى', 96),
(97, 'ar', 'النمسا العليا', 97),
(98, 'ar', 'سالزبورغ', 98),
(99, 'ar', 'Каринтия', 99),
(100, 'ar', 'STEIERMARK', 100),
(101, 'ar', 'تيرول', 101),
(102, 'ar', 'بورغنلاند', 102),
(103, 'ar', 'فورارلبرغ', 103),
(104, 'ar', 'أرجاو', 104),
(105, 'ar', 'Appenzell Innerrhoden', 105),
(106, 'ar', 'أبنزل أوسيرهودن', 106),
(107, 'ar', 'برن', 107),
(108, 'ar', 'كانتون ريف بازل', 108),
(109, 'ar', 'بازل شتات', 109),
(110, 'ar', 'فرايبورغ', 110),
(111, 'ar', 'Genf', 111),
(112, 'ar', 'جلاروس', 112),
(113, 'ar', 'غراوبوندن', 113),
(114, 'ar', 'العصر الجوارسي أو الجوري', 114),
(115, 'ar', 'لوزيرن', 115),
(116, 'ar', 'في Neuenburg', 116),
(117, 'ar', 'نيدوالدن', 117),
(118, 'ar', 'أوبوالدن', 118),
(119, 'ar', 'سانت غالن', 119),
(120, 'ar', 'شافهاوزن', 120),
(121, 'ar', 'سولوتورن', 121),
(122, 'ar', 'شفيتس', 122),
(123, 'ar', 'ثورجو', 123),
(124, 'ar', 'تيتشينو', 124),
(125, 'ar', 'أوري', 125),
(126, 'ar', 'وادت', 126),
(127, 'ar', 'اليس', 127),
(128, 'ar', 'زوغ', 128),
(129, 'ar', 'زيورخ', 129),
(130, 'ar', 'Corunha', 130),
(131, 'ar', 'ألافا', 131),
(132, 'ar', 'الباسيتي', 132),
(133, 'ar', 'اليكانتي', 133),
(134, 'ar', 'الميريا', 134),
(135, 'ar', 'أستورياس', 135),
(136, 'ar', 'أفيلا', 136),
(137, 'ar', 'بطليوس', 137),
(138, 'ar', 'البليار', 138),
(139, 'ar', 'برشلونة', 139),
(140, 'ar', 'برغش', 140),
(141, 'ar', 'كاسيريس', 141),
(142, 'ar', 'كاديز', 142),
(143, 'ar', 'كانتابريا', 143),
(144, 'ar', 'كاستيلون', 144),
(145, 'ar', 'سبتة', 145),
(146, 'ar', 'سيوداد ريال', 146),
(147, 'ar', 'قرطبة', 147),
(148, 'ar', 'كوينكا', 148),
(149, 'ar', 'جيرونا', 149),
(150, 'ar', 'غرناطة', 150),
(151, 'ar', 'غوادالاخارا', 151),
(152, 'ar', 'بجويبوزكوا', 152),
(153, 'ar', 'هويلفا', 153),
(154, 'ar', 'هويسكا', 154),
(155, 'ar', 'خاين', 155),
(156, 'ar', 'لاريوخا', 156),
(157, 'ar', 'لاس بالماس', 157),
(158, 'ar', 'ليون', 158),
(159, 'ar', 'يدا', 159),
(160, 'ar', 'لوغو', 160),
(161, 'ar', 'مدريد', 161),
(162, 'ar', 'ملقة', 162),
(163, 'ar', 'مليلية', 163),
(164, 'ar', 'مورسيا', 164),
(165, 'ar', 'نافارا', 165),
(166, 'ar', 'أورينس', 166),
(167, 'ar', 'بلنسية', 167),
(168, 'ar', 'بونتيفيدرا', 168),
(169, 'ar', 'سالامانكا', 169),
(170, 'ar', 'سانتا كروز دي تينيريفي', 170),
(171, 'ar', 'سيغوفيا', 171),
(172, 'ar', 'اشبيلية', 172),
(173, 'ar', 'سوريا', 173),
(174, 'ar', 'تاراغونا', 174),
(175, 'ar', 'تيرويل', 175),
(176, 'ar', 'توليدو', 176),
(177, 'ar', 'فالنسيا', 177),
(178, 'ar', 'بلد الوليد', 178),
(179, 'ar', 'فيزكايا', 179),
(180, 'ar', 'زامورا', 180),
(181, 'ar', 'سرقسطة', 181),
(182, 'ar', 'عين', 182),
(183, 'ar', 'أيسن', 183),
(184, 'ar', 'اليي', 184),
(185, 'ar', 'ألب البروفنس العليا', 185),
(186, 'ar', 'أوتس ألب', 186),
(187, 'ar', 'ألب ماريتيم', 187),
(188, 'ar', 'ARDECHE', 188),
(189, 'ar', 'Ardennes', 189),
(190, 'ar', 'آردن', 190),
(191, 'ar', 'أوب', 191),
(192, 'ar', 'اود', 192),
(193, 'ar', 'أفيرون', 193),
(194, 'ar', 'بوكاس دو رون', 194),
(195, 'ar', 'كالفادوس', 195),
(196, 'ar', 'كانتال', 196),
(197, 'ar', 'شارانت', 197),
(198, 'ar', 'سيين إت مارن', 198),
(199, 'ar', 'شير', 199),
(200, 'ar', 'كوريز', 200),
(201, 'ar', 'سود كورس-دو-', 201),
(202, 'ar', 'هوت كورس', 202),
(203, 'ar', 'كوستا دوركوريز', 203),
(204, 'ar', 'كوتس دورمور', 204),
(205, 'ar', 'كروز', 205),
(206, 'ar', 'دوردوني', 206),
(207, 'ar', 'دوبس', 207),
(208, 'ar', 'DrômeFinistère', 208),
(209, 'ar', 'أور', 209),
(210, 'ar', 'أور ولوار', 210),
(211, 'ar', 'فينيستير', 211),
(212, 'ar', 'جارد', 212),
(213, 'ar', 'هوت غارون', 213),
(214, 'ar', 'الخيام', 214),
(215, 'ar', 'جيروند', 215),
(216, 'ar', 'هيرولت', 216),
(217, 'ar', 'إيل وفيلان', 217),
(218, 'ar', 'إندر', 218),
(219, 'ar', 'أندر ولوار', 219),
(220, 'ar', 'إيسر', 220),
(221, 'ar', 'العصر الجوارسي أو الجوري', 221),
(222, 'ar', 'اندز', 222),
(223, 'ar', 'لوار وشير', 223),
(224, 'ar', 'لوار', 224),
(225, 'ar', 'هوت-لوار', 225),
(226, 'ar', 'وار أتلانتيك', 226),
(227, 'ar', 'لورا', 227),
(228, 'ar', 'كثيرا', 228),
(229, 'ar', 'الكثير غارون', 229),
(230, 'ar', 'لوزر', 230),
(231, 'ar', 'مين-إي-لوار', 231),
(232, 'ar', 'المانش', 232),
(233, 'ar', 'مارن', 233),
(234, 'ar', 'هوت مارن', 234),
(235, 'ar', 'مايين', 235),
(236, 'ar', 'مورت وموزيل', 236),
(237, 'ar', 'ميوز', 237),
(238, 'ar', 'موربيهان', 238),
(239, 'ar', 'موسيل', 239),
(240, 'ar', 'نيفر', 240),
(241, 'ar', 'نورد', 241),
(242, 'ar', 'إيل دو فرانس', 242),
(243, 'ar', 'أورن', 243),
(244, 'ar', 'با-دو-كاليه', 244),
(245, 'ar', 'بوي دي دوم', 245),
(246, 'ar', 'البرانيس ​​الأطلسية', 246),
(247, 'ar', 'أوتس-بيرينيهs', 247),
(248, 'ar', 'بيرينيه-أورينتال', 248),
(249, 'ar', 'بس رين', 249),
(250, 'ar', 'أوت رين', 250),
(251, 'ar', 'رون [3]', 251),
(252, 'ar', 'هوت-سون', 252),
(253, 'ar', 'سون ولوار', 253),
(254, 'ar', 'سارت', 254),
(255, 'ar', 'سافوا', 255),
(256, 'ar', 'هاوت سافوي', 256),
(257, 'ar', 'باريس', 257),
(258, 'ar', 'سين البحرية', 258),
(259, 'ar', 'سيين إت مارن', 259),
(260, 'ar', 'إيفلين', 260),
(261, 'ar', 'دوكس سفرس', 261),
(262, 'ar', 'السوم', 262),
(263, 'ar', 'تارن', 263),
(264, 'ar', 'تارن وغارون', 264),
(265, 'ar', 'فار', 265),
(266, 'ar', 'فوكلوز', 266),
(267, 'ar', 'تارن', 267),
(268, 'ar', 'فيين', 268),
(269, 'ar', 'هوت فيين', 269),
(270, 'ar', 'الفوج', 270),
(271, 'ar', 'يون', 271),
(272, 'ar', 'تيريتوير-دي-بلفور', 272),
(273, 'ar', 'إيسون', 273),
(274, 'ar', 'هوت دو سين', 274),
(275, 'ar', 'سين سان دوني', 275),
(276, 'ar', 'فال دو مارن', 276),
(277, 'ar', 'فال دواز', 277),
(278, 'ar', 'ألبا', 278),
(279, 'ar', 'اراد', 279),
(280, 'ar', 'ARGES', 280),
(281, 'ar', 'باكاو', 281),
(282, 'ar', 'بيهور', 282),
(283, 'ar', 'بيستريتا ناسود', 283),
(284, 'ar', 'بوتوساني', 284),
(285, 'ar', 'براشوف', 285),
(286, 'ar', 'برايلا', 286),
(287, 'ar', 'بوخارست', 287),
(288, 'ar', 'بوزاو', 288),
(289, 'ar', 'كاراس سيفيرين', 289),
(290, 'ar', 'كالاراسي', 290),
(291, 'ar', 'كلوج', 291),
(292, 'ar', 'كونستانتا', 292),
(293, 'ar', 'كوفاسنا', 293),
(294, 'ar', 'دامبوفيتا', 294),
(295, 'ar', 'دولج', 295),
(296, 'ar', 'جالاتي', 296),
(297, 'ar', 'Giurgiu', 297),
(298, 'ar', 'غيورغيو', 298),
(299, 'ar', 'هارغيتا', 299),
(300, 'ar', 'هونيدوارا', 300),
(301, 'ar', 'ايالوميتا', 301),
(302, 'ar', 'ياشي', 302),
(303, 'ar', 'إيلفوف', 303),
(304, 'ar', 'مارامريس', 304),
(305, 'ar', 'MEHEDINTI', 305),
(306, 'ar', 'موريس', 306),
(307, 'ar', 'نيامتس', 307),
(308, 'ar', 'أولت', 308),
(309, 'ar', 'براهوفا', 309),
(310, 'ar', 'ساتو ماري', 310),
(311, 'ar', 'سالاج', 311),
(312, 'ar', 'سيبيو', 312),
(313, 'ar', 'سوسيفا', 313),
(314, 'ar', 'تيليورمان', 314),
(315, 'ar', 'تيم هو', 315),
(316, 'ar', 'تولسيا', 316),
(317, 'ar', 'فاسلوي', 317),
(318, 'ar', 'فالسيا', 318),
(319, 'ar', 'فرانتشا', 319),
(320, 'ar', 'Lappi', 320),
(321, 'ar', 'Pohjois-Pohjanmaa', 321),
(322, 'ar', 'كاينو', 322),
(323, 'ar', 'Pohjois-كارجالا', 323),
(324, 'ar', 'Pohjois-سافو', 324),
(325, 'ar', 'Etelä-سافو', 325),
(326, 'ar', 'Etelä-Pohjanmaa', 326),
(327, 'ar', 'Pohjanmaa', 327),
(328, 'ar', 'بيركنما', 328),
(329, 'ar', 'ساتا كونتا', 329),
(330, 'ar', 'كسكي-Pohjanmaa', 330),
(331, 'ar', 'كسكي-سومي', 331),
(332, 'ar', 'Varsinais-سومي', 332),
(333, 'ar', 'Etelä-كارجالا', 333),
(334, 'ar', 'Päijät-Häme', 334),
(335, 'ar', 'كانتا-HAME', 335),
(336, 'ar', 'أوسيما', 336),
(337, 'ar', 'أوسيما', 337),
(338, 'ar', 'كومنلاكسو', 338),
(339, 'ar', 'Ahvenanmaa', 339),
(340, 'ar', 'Harjumaa', 340),
(341, 'ar', 'هيوما', 341),
(342, 'ar', 'المؤسسة الدولية للتنمية فيروما', 342),
(343, 'ar', 'جوغفما', 343),
(344, 'ar', 'يارفا', 344),
(345, 'ar', 'انيما', 345),
(346, 'ar', 'اني فيريوما', 346),
(347, 'ar', 'بولفاما', 347),
(348, 'ar', 'بارنوما', 348),
(349, 'ar', 'Raplamaa', 349),
(350, 'ar', 'Saaremaa', 350),
(351, 'ar', 'Tartumaa', 351),
(352, 'ar', 'Valgamaa', 352),
(353, 'ar', 'Viljandimaa', 353),
(354, 'ar', 'روايات Salacgr novvas', 354),
(355, 'ar', 'داوجافبيلس', 355),
(356, 'ar', 'يلغافا', 356),
(357, 'ar', 'يكاب', 357),
(358, 'ar', 'يورمال', 358),
(359, 'ar', 'يابايا', 359),
(360, 'ar', 'ليباج أبريس', 360),
(361, 'ar', 'ريزكن', 361),
(362, 'ar', 'ريغا', 362),
(363, 'ar', 'مقاطعة ريغا', 363),
(364, 'ar', 'فالميرا', 364),
(365, 'ar', 'فنتسبيلز', 365),
(366, 'ar', 'روايات Aglonas', 366),
(367, 'ar', 'Aizkraukles novads', 367),
(368, 'ar', 'Aizkraukles novads', 368),
(369, 'ar', 'Aknīstes novads', 369),
(370, 'ar', 'Alojas novads', 370),
(371, 'ar', 'روايات Alsungas', 371),
(372, 'ar', 'ألكسنس أبريز', 372),
(373, 'ar', 'روايات أماتاس', 373),
(374, 'ar', 'قرود الروايات', 374),
(375, 'ar', 'روايات أوسيس', 375),
(376, 'ar', 'بابيت الروايات', 376),
(377, 'ar', 'Baldones الروايات', 377),
(378, 'ar', 'بالتينافاس الروايات', 378),
(379, 'ar', 'روايات بالفو', 379),
(380, 'ar', 'Bauskas الروايات', 380),
(381, 'ar', 'Beverīnas novads', 381),
(382, 'ar', 'Novads Brocēnu', 382),
(383, 'ar', 'Novads Burtnieku', 383),
(384, 'ar', 'Carnikavas novads', 384),
(385, 'ar', 'Cesvaines novads', 385),
(386, 'ar', 'Ciblas novads', 386),
(387, 'ar', 'تسو أبريس', 387),
(388, 'ar', 'Dagdas novads', 388),
(389, 'ar', 'Daugavpils novads', 389),
(390, 'ar', 'روايات دوبيليس', 390),
(391, 'ar', 'ديربيس الروايات', 391),
(392, 'ar', 'ديربيس الروايات', 392),
(393, 'ar', 'يشرك الروايات', 393),
(394, 'ar', 'Garkalnes novads', 394),
(395, 'ar', 'Grobiņas novads', 395),
(396, 'ar', 'غولبينيس الروايات', 396),
(397, 'ar', 'إيكافاس روايات', 397),
(398, 'ar', 'Ikškiles novads', 398),
(399, 'ar', 'Ilūkstes novads', 399),
(400, 'ar', 'روايات Inčukalna', 400),
(401, 'ar', 'Jaunjelgavas novads', 401),
(402, 'ar', 'Jaunpiebalgas novads', 402),
(403, 'ar', 'روايات Jaunpiebalgas', 403),
(404, 'ar', 'Jelgavas novads', 404),
(405, 'ar', 'جيكابيلس أبريز', 405),
(406, 'ar', 'روايات كاندافاس', 406),
(407, 'ar', 'Kokneses الروايات', 407),
(408, 'ar', 'Krimuldas novads', 408),
(409, 'ar', 'Krustpils الروايات', 409),
(410, 'ar', 'Krāslavas Apriņķis', 410),
(411, 'ar', 'كولدوغاس أبريز', 411),
(412, 'ar', 'Kārsavas novads', 412),
(413, 'ar', 'روايات ييلفاريس', 413),
(414, 'ar', 'ليمباو أبريز', 414),
(415, 'ar', 'روايات لباناس', 415),
(416, 'ar', 'روايات لودزاس', 416),
(417, 'ar', 'مقاطعة ليجاتني', 417),
(418, 'ar', 'مقاطعة ليفاني', 418),
(419, 'ar', 'مادونا روايات', 419),
(420, 'ar', 'Mazsalacas novads', 420),
(421, 'ar', 'روايات مالبلز', 421),
(422, 'ar', 'Mārupes novads', 422),
(423, 'ar', 'نوفاو نوكشنو', 423),
(424, 'ar', 'روايات نيريتاس', 424),
(425, 'ar', 'روايات نيكاس', 425),
(426, 'ar', 'أغنام الروايات', 426),
(427, 'ar', 'أولينيس الروايات', 427),
(428, 'ar', 'روايات Ozolnieku', 428),
(429, 'ar', 'بريسيو أبرييس', 429),
(430, 'ar', 'Priekules الروايات', 430),
(431, 'ar', 'كوندادو دي بريكوي', 431),
(432, 'ar', 'Pärgaujas novads', 432),
(433, 'ar', 'روايات بافيلوستاس', 433),
(434, 'ar', 'بلافيناس مقاطعة', 434),
(435, 'ar', 'روناس روايات', 435),
(436, 'ar', 'Riebiņu novads', 436),
(437, 'ar', 'روجاس روايات', 437),
(438, 'ar', 'Novads روباو', 438),
(439, 'ar', 'روكافاس روايات', 439),
(440, 'ar', 'روغاجو روايات', 440),
(441, 'ar', 'رندلس الروايات', 441),
(442, 'ar', 'Radzeknes novads', 442),
(443, 'ar', 'Rūjienas novads', 443),
(444, 'ar', 'بلدية سالاسغريفا', 444),
(445, 'ar', 'روايات سالاس', 445),
(446, 'ar', 'Salaspils novads', 446),
(447, 'ar', 'روايات سالدوس', 447),
(448, 'ar', 'Novuls Saulkrastu', 448),
(449, 'ar', 'سيغولداس روايات', 449),
(450, 'ar', 'Skrundas novads', 450),
(451, 'ar', 'مقاطعة Skrīveri', 451),
(452, 'ar', 'يبتسم الروايات', 452),
(453, 'ar', 'روايات Stopiņu', 453),
(454, 'ar', 'روايات Stren novu', 454),
(455, 'ar', 'سجاس روايات', 455),
(456, 'ar', 'روايات تالسو', 456),
(457, 'ar', 'توكوما الروايات', 457),
(458, 'ar', 'Tērvetes novads', 458),
(459, 'ar', 'Vaiņodes novads', 459),
(460, 'ar', 'فالكاس الروايات', 460),
(461, 'ar', 'فالميراس الروايات', 461),
(462, 'ar', 'مقاطعة فاكلاني', 462),
(463, 'ar', 'Vecpiebalgas novads', 463),
(464, 'ar', 'روايات Vecumnieku', 464),
(465, 'ar', 'فنتسبيلس الروايات', 465),
(466, 'ar', 'Viesītes Novads', 466),
(467, 'ar', 'Viļakas novads', 467),
(468, 'ar', 'روايات فيناو', 468),
(469, 'ar', 'Vārkavas novads', 469),
(470, 'ar', 'روايات زيلوبس', 470),
(471, 'ar', 'مقاطعة أدازي', 471),
(472, 'ar', 'مقاطعة Erglu', 472),
(473, 'ar', 'مقاطعة كيغمس', 473),
(474, 'ar', 'مقاطعة كيكافا', 474),
(475, 'ar', 'Alytaus Apskritis', 475),
(476, 'ar', 'كاونو ابكريتيس', 476),
(477, 'ar', 'Klaipėdos apskritis', 477),
(478, 'ar', 'Marijampol\'s apskritis', 478),
(479, 'ar', 'Panevėžio apskritis', 479),
(480, 'ar', 'uliaulių apskritis', 480),
(481, 'ar', 'Taurag\'s apskritis', 481),
(482, 'ar', 'Telšių apskritis', 482),
(483, 'ar', 'Utenos apskritis', 483),
(484, 'ar', 'فيلنياوس ابكريتيس', 484),
(485, 'ar', 'فدان', 485),
(486, 'ar', 'ألاغواس', 486),
(487, 'ar', 'أمابا', 487),
(488, 'ar', 'أمازوناس', 488),
(489, 'ar', 'باهيا', 489),
(490, 'ar', 'سيارا', 490),
(491, 'ar', 'إسبيريتو سانتو', 491),
(492, 'ar', 'غوياس', 492),
(493, 'ar', 'مارانهاو', 493),
(494, 'ar', 'ماتو جروسو', 494),
(495, 'ar', 'ماتو جروسو دو سول', 495),
(496, 'ar', 'ميناس جريس', 496),
(497, 'ar', 'بارا', 497),
(498, 'ar', 'بارايبا', 498),
(499, 'ar', 'بارانا', 499),
(500, 'ar', 'بيرنامبوكو', 500),
(501, 'ar', 'بياوي', 501),
(502, 'ar', 'ريو دي جانيرو', 502),
(503, 'ar', 'ريو غراندي دو نورتي', 503),
(504, 'ar', 'ريو غراندي دو سول', 504),
(505, 'ar', 'روندونيا', 505),
(506, 'ar', 'رورايما', 506),
(507, 'ar', 'سانتا كاتارينا', 507),
(508, 'ar', 'ساو باولو', 508),
(509, 'ar', 'سيرغيبي', 509),
(510, 'ar', 'توكانتينز', 510),
(511, 'ar', 'وفي مقاطعة الاتحادية', 511),
(512, 'ar', 'Zagrebačka زوبانيا', 512),
(513, 'ar', 'Krapinsko-zagorska زوبانيا', 513),
(514, 'ar', 'Sisačko-moslavačka زوبانيا', 514),
(515, 'ar', 'كارلوفيتش شوبانيا', 515),
(516, 'ar', 'فارادينسكا زوبانيجا', 516),
(517, 'ar', 'Koprivničko-križevačka زوبانيجا', 517),
(518, 'ar', 'بيلوفارسكو-بيلوجورسكا', 518),
(519, 'ar', 'بريمورسكو غورانسكا سوبانيا', 519),
(520, 'ar', 'ليكو سينيسكا زوبانيا', 520),
(521, 'ar', 'Virovitičko-podravska زوبانيا', 521),
(522, 'ar', 'Požeško-slavonska županija', 522),
(523, 'ar', 'Brodsko-posavska županija', 523),
(524, 'ar', 'زادارسكا زوبانيجا', 524),
(525, 'ar', 'Osječko-baranjska županija', 525),
(526, 'ar', 'شيبنسكو-كنينسكا سوبانيا', 526),
(527, 'ar', 'Virovitičko-podravska زوبانيا', 527),
(528, 'ar', 'Splitsko-dalmatinska زوبانيا', 528),
(529, 'ar', 'Istarska زوبانيا', 529),
(530, 'ar', 'Dubrovačko-neretvanska زوبانيا', 530),
(531, 'ar', 'Međimurska زوبانيا', 531),
(532, 'ar', 'غراد زغرب', 532),
(533, 'ar', 'جزر أندامان ونيكوبار', 533),
(534, 'ar', 'ولاية اندرا براديش', 534),
(535, 'ar', 'اروناتشال براديش', 535),
(536, 'ar', 'أسام', 536),
(537, 'ar', 'بيهار', 537),
(538, 'ar', 'شانديغار', 538),
(539, 'ar', 'تشهاتيسجاره', 539),
(540, 'ar', 'دادرا ونجار هافيلي', 540),
(541, 'ar', 'دامان وديو', 541),
(542, 'ar', 'دلهي', 542),
(543, 'ar', 'غوا', 543),
(544, 'ar', 'غوجارات', 544),
(545, 'ar', 'هاريانا', 545),
(546, 'ar', 'هيماشال براديش', 546),
(547, 'ar', 'جامو وكشمير', 547),
(548, 'ar', 'جهارخاند', 548),
(549, 'ar', 'كارناتاكا', 549),
(550, 'ar', 'ولاية كيرالا', 550),
(551, 'ar', 'اكشادويب', 551),
(552, 'ar', 'ماديا براديش', 552),
(553, 'ar', 'ماهاراشترا', 553),
(554, 'ar', 'مانيبور', 554),
(555, 'ar', 'ميغالايا', 555),
(556, 'ar', 'ميزورام', 556),
(557, 'ar', 'ناجالاند', 557),
(558, 'ar', 'أوديشا', 558),
(559, 'ar', 'بودوتشيري', 559),
(560, 'ar', 'البنجاب', 560),
(561, 'ar', 'راجستان', 561),
(562, 'ar', 'سيكيم', 562),
(563, 'ar', 'تاميل نادو', 563),
(564, 'ar', 'تيلانجانا', 564),
(565, 'ar', 'تريبورا', 565),
(566, 'ar', 'ولاية اوتار براديش', 566),
(567, 'ar', 'أوتارانتشال', 567),
(568, 'ar', 'البنغال الغربية', 568),
(569, 'es', 'Alabama', 1),
(570, 'es', 'Alaska', 2),
(571, 'es', 'American Samoa', 3),
(572, 'es', 'Arizona', 4),
(573, 'es', 'Arkansas', 5),
(574, 'es', 'Armed Forces Africa', 6),
(575, 'es', 'Armed Forces Americas', 7),
(576, 'es', 'Armed Forces Canada', 8),
(577, 'es', 'Armed Forces Europe', 9),
(578, 'es', 'Armed Forces Middle East', 10),
(579, 'es', 'Armed Forces Pacific', 11),
(580, 'es', 'California', 12),
(581, 'es', 'Colorado', 13),
(582, 'es', 'Connecticut', 14),
(583, 'es', 'Delaware', 15),
(584, 'es', 'District of Columbia', 16),
(585, 'es', 'Federated States Of Micronesia', 17),
(586, 'es', 'Florida', 18),
(587, 'es', 'Georgia', 19),
(588, 'es', 'Guam', 20),
(589, 'es', 'Hawaii', 21),
(590, 'es', 'Idaho', 22),
(591, 'es', 'Illinois', 23),
(592, 'es', 'Indiana', 24),
(593, 'es', 'Iowa', 25),
(594, 'es', 'Kansas', 26),
(595, 'es', 'Kentucky', 27),
(596, 'es', 'Louisiana', 28),
(597, 'es', 'Maine', 29),
(598, 'es', 'Marshall Islands', 30),
(599, 'es', 'Maryland', 31),
(600, 'es', 'Massachusetts', 32),
(601, 'es', 'Michigan', 33),
(602, 'es', 'Minnesota', 34),
(603, 'es', 'Mississippi', 35),
(604, 'es', 'Missouri', 36),
(605, 'es', 'Montana', 37),
(606, 'es', 'Nebraska', 38),
(607, 'es', 'Nevada', 39),
(608, 'es', 'New Hampshire', 40),
(609, 'es', 'New Jersey', 41),
(610, 'es', 'New Mexico', 42),
(611, 'es', 'New York', 43),
(612, 'es', 'North Carolina', 44),
(613, 'es', 'North Dakota', 45),
(614, 'es', 'Northern Mariana Islands', 46),
(615, 'es', 'Ohio', 47),
(616, 'es', 'Oklahoma', 48),
(617, 'es', 'Oregon', 49),
(618, 'es', 'Palau', 50),
(619, 'es', 'Pennsylvania', 51),
(620, 'es', 'Puerto Rico', 52),
(621, 'es', 'Rhode Island', 53),
(622, 'es', 'South Carolina', 54),
(623, 'es', 'South Dakota', 55),
(624, 'es', 'Tennessee', 56),
(625, 'es', 'Texas', 57),
(626, 'es', 'Utah', 58),
(627, 'es', 'Vermont', 59),
(628, 'es', 'Virgin Islands', 60),
(629, 'es', 'Virginia', 61),
(630, 'es', 'Washington', 62),
(631, 'es', 'West Virginia', 63),
(632, 'es', 'Wisconsin', 64),
(633, 'es', 'Wyoming', 65),
(634, 'es', 'Alberta', 66),
(635, 'es', 'British Columbia', 67),
(636, 'es', 'Manitoba', 68),
(637, 'es', 'Newfoundland and Labrador', 69),
(638, 'es', 'New Brunswick', 70),
(639, 'es', 'Nova Scotia', 71),
(640, 'es', 'Northwest Territories', 72),
(641, 'es', 'Nunavut', 73),
(642, 'es', 'Ontario', 74),
(643, 'es', 'Prince Edward Island', 75),
(644, 'es', 'Quebec', 76),
(645, 'es', 'Saskatchewan', 77),
(646, 'es', 'Yukon Territory', 78),
(647, 'es', 'Niedersachsen', 79),
(648, 'es', 'Baden-Württemberg', 80),
(649, 'es', 'Bayern', 81),
(650, 'es', 'Berlin', 82),
(651, 'es', 'Brandenburg', 83),
(652, 'es', 'Bremen', 84),
(653, 'es', 'Hamburg', 85),
(654, 'es', 'Hessen', 86),
(655, 'es', 'Mecklenburg-Vorpommern', 87),
(656, 'es', 'Nordrhein-Westfalen', 88),
(657, 'es', 'Rheinland-Pfalz', 89),
(658, 'es', 'Saarland', 90),
(659, 'es', 'Sachsen', 91),
(660, 'es', 'Sachsen-Anhalt', 92),
(661, 'es', 'Schleswig-Holstein', 93),
(662, 'es', 'Thüringen', 94),
(663, 'es', 'Wien', 95),
(664, 'es', 'Niederösterreich', 96),
(665, 'es', 'Oberösterreich', 97),
(666, 'es', 'Salzburg', 98),
(667, 'es', 'Kärnten', 99),
(668, 'es', 'Steiermark', 100),
(669, 'es', 'Tirol', 101),
(670, 'es', 'Burgenland', 102),
(671, 'es', 'Vorarlberg', 103),
(672, 'es', 'Aargau', 104),
(673, 'es', 'Appenzell Innerrhoden', 105),
(674, 'es', 'Appenzell Ausserrhoden', 106),
(675, 'es', 'Bern', 107),
(676, 'es', 'Basel-Landschaft', 108),
(677, 'es', 'Basel-Stadt', 109),
(678, 'es', 'Freiburg', 110),
(679, 'es', 'Genf', 111),
(680, 'es', 'Glarus', 112),
(681, 'es', 'Graubünden', 113),
(682, 'es', 'Jura', 114),
(683, 'es', 'Luzern', 115),
(684, 'es', 'Neuenburg', 116),
(685, 'es', 'Nidwalden', 117),
(686, 'es', 'Obwalden', 118),
(687, 'es', 'St. Gallen', 119),
(688, 'es', 'Schaffhausen', 120),
(689, 'es', 'Solothurn', 121),
(690, 'es', 'Schwyz', 122),
(691, 'es', 'Thurgau', 123),
(692, 'es', 'Tessin', 124),
(693, 'es', 'Uri', 125),
(694, 'es', 'Waadt', 126),
(695, 'es', 'Wallis', 127),
(696, 'es', 'Zug', 128),
(697, 'es', 'Zürich', 129),
(698, 'es', 'La Coruña', 130),
(699, 'es', 'Álava', 131),
(700, 'es', 'Albacete', 132),
(701, 'es', 'Alicante', 133),
(702, 'es', 'Almería', 134),
(703, 'es', 'Asturias', 135),
(704, 'es', 'Ávila', 136),
(705, 'es', 'Badajoz', 137),
(706, 'es', 'Baleares', 138),
(707, 'es', 'Barcelona', 139),
(708, 'es', 'Burgos', 140),
(709, 'es', 'Cáceres', 141),
(710, 'es', 'Cádiz', 142),
(711, 'es', 'Cantabria', 143),
(712, 'es', 'Castellón', 144),
(713, 'es', 'Ceuta', 145),
(714, 'es', 'Ciudad Real', 146),
(715, 'es', 'Córdoba', 147),
(716, 'es', 'Cuenca', 148),
(717, 'es', 'Gerona', 149),
(718, 'es', 'Granada', 150),
(719, 'es', 'Guadalajara', 151),
(720, 'es', 'Guipúzcoa', 152),
(721, 'es', 'Huelva', 153),
(722, 'es', 'Huesca', 154),
(723, 'es', 'Jaén', 155),
(724, 'es', 'La Rioja', 156),
(725, 'es', 'Las Palmas', 157),
(726, 'es', 'León', 158),
(727, 'es', 'Lérida', 159),
(728, 'es', 'Lugo', 160),
(729, 'es', 'Madrid', 161),
(730, 'es', 'Málaga', 162),
(731, 'es', 'Melilla', 163),
(732, 'es', 'Murcia', 164),
(733, 'es', 'Navarra', 165),
(734, 'es', 'Orense', 166),
(735, 'es', 'Palencia', 167),
(736, 'es', 'Pontevedra', 168),
(737, 'es', 'Salamanca', 169),
(738, 'es', 'Santa Cruz de Tenerife', 170),
(739, 'es', 'Segovia', 171),
(740, 'es', 'Sevilla', 172),
(741, 'es', 'Soria', 173),
(742, 'es', 'Tarragona', 174),
(743, 'es', 'Teruel', 175),
(744, 'es', 'Toledo', 176),
(745, 'es', 'Valencia', 177),
(746, 'es', 'Valladolid', 178),
(747, 'es', 'Vizcaya', 179),
(748, 'es', 'Zamora', 180),
(749, 'es', 'Zaragoza', 181),
(750, 'es', 'Ain', 182),
(751, 'es', 'Aisne', 183),
(752, 'es', 'Allier', 184),
(753, 'es', 'Alpes-de-Haute-Provence', 185),
(754, 'es', 'Hautes-Alpes', 186),
(755, 'es', 'Alpes-Maritimes', 187),
(756, 'es', 'Ardèche', 188),
(757, 'es', 'Ardennes', 189),
(758, 'es', 'Ariège', 190),
(759, 'es', 'Aube', 191),
(760, 'es', 'Aude', 192),
(761, 'es', 'Aveyron', 193),
(762, 'es', 'Bouches-du-Rhône', 194),
(763, 'es', 'Calvados', 195),
(764, 'es', 'Cantal', 196),
(765, 'es', 'Charente', 197),
(766, 'es', 'Charente-Maritime', 198),
(767, 'es', 'Cher', 199),
(768, 'es', 'Corrèze', 200),
(769, 'es', 'Corse-du-Sud', 201),
(770, 'es', 'Haute-Corse', 202),
(771, 'es', 'Côte-d\'Or', 203),
(772, 'es', 'Côtes-d\'Armor', 204),
(773, 'es', 'Creuse', 205),
(774, 'es', 'Dordogne', 206),
(775, 'es', 'Doubs', 207),
(776, 'es', 'Drôme', 208),
(777, 'es', 'Eure', 209),
(778, 'es', 'Eure-et-Loir', 210),
(779, 'es', 'Finistère', 211),
(780, 'es', 'Gard', 212),
(781, 'es', 'Haute-Garonne', 213),
(782, 'es', 'Gers', 214),
(783, 'es', 'Gironde', 215),
(784, 'es', 'Hérault', 216),
(785, 'es', 'Ille-et-Vilaine', 217),
(786, 'es', 'Indre', 218),
(787, 'es', 'Indre-et-Loire', 219),
(788, 'es', 'Isère', 220),
(789, 'es', 'Jura', 221),
(790, 'es', 'Landes', 222),
(791, 'es', 'Loir-et-Cher', 223),
(792, 'es', 'Loire', 224),
(793, 'es', 'Haute-Loire', 225),
(794, 'es', 'Loire-Atlantique', 226),
(795, 'es', 'Loiret', 227),
(796, 'es', 'Lot', 228),
(797, 'es', 'Lot-et-Garonne', 229),
(798, 'es', 'Lozère', 230),
(799, 'es', 'Maine-et-Loire', 231),
(800, 'es', 'Manche', 232),
(801, 'es', 'Marne', 233),
(802, 'es', 'Haute-Marne', 234),
(803, 'es', 'Mayenne', 235),
(804, 'es', 'Meurthe-et-Moselle', 236),
(805, 'es', 'Meuse', 237),
(806, 'es', 'Morbihan', 238),
(807, 'es', 'Moselle', 239),
(808, 'es', 'Nièvre', 240),
(809, 'es', 'Nord', 241),
(810, 'es', 'Oise', 242),
(811, 'es', 'Orne', 243),
(812, 'es', 'Pas-de-Calais', 244),
(813, 'es', 'Puy-de-Dôme', 245),
(814, 'es', 'Pyrénées-Atlantiques', 246),
(815, 'es', 'Hautes-Pyrénées', 247),
(816, 'es', 'Pyrénées-Orientales', 248),
(817, 'es', 'Bas-Rhin', 249),
(818, 'es', 'Haut-Rhin', 250),
(819, 'es', 'Rhône', 251),
(820, 'es', 'Haute-Saône', 252),
(821, 'es', 'Saône-et-Loire', 253),
(822, 'es', 'Sarthe', 254),
(823, 'es', 'Savoie', 255),
(824, 'es', 'Haute-Savoie', 256),
(825, 'es', 'Paris', 257),
(826, 'es', 'Seine-Maritime', 258),
(827, 'es', 'Seine-et-Marne', 259),
(828, 'es', 'Yvelines', 260),
(829, 'es', 'Deux-Sèvres', 261),
(830, 'es', 'Somme', 262),
(831, 'es', 'Tarn', 263),
(832, 'es', 'Tarn-et-Garonne', 264),
(833, 'es', 'Var', 265),
(834, 'es', 'Vaucluse', 266),
(835, 'es', 'Vendée', 267),
(836, 'es', 'Vienne', 268),
(837, 'es', 'Haute-Vienne', 269),
(838, 'es', 'Vosges', 270),
(839, 'es', 'Yonne', 271),
(840, 'es', 'Territoire-de-Belfort', 272),
(841, 'es', 'Essonne', 273),
(842, 'es', 'Hauts-de-Seine', 274),
(843, 'es', 'Seine-Saint-Denis', 275),
(844, 'es', 'Val-de-Marne', 276),
(845, 'es', 'Val-d\'Oise', 277),
(846, 'es', 'Alba', 278),
(847, 'es', 'Arad', 279),
(848, 'es', 'Argeş', 280),
(849, 'es', 'Bacău', 281),
(850, 'es', 'Bihor', 282),
(851, 'es', 'Bistriţa-Năsăud', 283),
(852, 'es', 'Botoşani', 284),
(853, 'es', 'Braşov', 285),
(854, 'es', 'Brăila', 286),
(855, 'es', 'Bucureşti', 287),
(856, 'es', 'Buzău', 288),
(857, 'es', 'Caraş-Severin', 289),
(858, 'es', 'Călăraşi', 290),
(859, 'es', 'Cluj', 291),
(860, 'es', 'Constanţa', 292),
(861, 'es', 'Covasna', 293),
(862, 'es', 'Dâmboviţa', 294),
(863, 'es', 'Dolj', 295),
(864, 'es', 'Galaţi', 296),
(865, 'es', 'Giurgiu', 297),
(866, 'es', 'Gorj', 298),
(867, 'es', 'Harghita', 299),
(868, 'es', 'Hunedoara', 300),
(869, 'es', 'Ialomiţa', 301),
(870, 'es', 'Iaşi', 302),
(871, 'es', 'Ilfov', 303),
(872, 'es', 'Maramureş', 304),
(873, 'es', 'Mehedinţi', 305),
(874, 'es', 'Mureş', 306),
(875, 'es', 'Neamţ', 307),
(876, 'es', 'Olt', 308),
(877, 'es', 'Prahova', 309),
(878, 'es', 'Satu-Mare', 310),
(879, 'es', 'Sălaj', 311),
(880, 'es', 'Sibiu', 312),
(881, 'es', 'Suceava', 313),
(882, 'es', 'Teleorman', 314),
(883, 'es', 'Timiş', 315),
(884, 'es', 'Tulcea', 316),
(885, 'es', 'Vaslui', 317),
(886, 'es', 'Vâlcea', 318),
(887, 'es', 'Vrancea', 319),
(888, 'es', 'Lappi', 320),
(889, 'es', 'Pohjois-Pohjanmaa', 321),
(890, 'es', 'Kainuu', 322),
(891, 'es', 'Pohjois-Karjala', 323),
(892, 'es', 'Pohjois-Savo', 324),
(893, 'es', 'Etelä-Savo', 325),
(894, 'es', 'Etelä-Pohjanmaa', 326),
(895, 'es', 'Pohjanmaa', 327),
(896, 'es', 'Pirkanmaa', 328),
(897, 'es', 'Satakunta', 329),
(898, 'es', 'Keski-Pohjanmaa', 330),
(899, 'es', 'Keski-Suomi', 331),
(900, 'es', 'Varsinais-Suomi', 332),
(901, 'es', 'Etelä-Karjala', 333),
(902, 'es', 'Päijät-Häme', 334),
(903, 'es', 'Kanta-Häme', 335),
(904, 'es', 'Uusimaa', 336),
(905, 'es', 'Itä-Uusimaa', 337),
(906, 'es', 'Kymenlaakso', 338),
(907, 'es', 'Ahvenanmaa', 339),
(908, 'es', 'Harjumaa', 340),
(909, 'es', 'Hiiumaa', 341),
(910, 'es', 'country_state_ida-Virumaa', 342),
(911, 'es', 'Jõgevamaa', 343),
(912, 'es', 'Järvamaa', 344),
(913, 'es', 'Läänemaa', 345),
(914, 'es', 'Lääne-Virumaa', 346),
(915, 'es', 'Põlvamaa', 347),
(916, 'es', 'Pärnumaa', 348),
(917, 'es', 'Raplamaa', 349),
(918, 'es', 'Saaremaa', 350),
(919, 'es', 'Tartumaa', 351),
(920, 'es', 'Valgamaa', 352),
(921, 'es', 'Viljandimaa', 353),
(922, 'es', 'Võrumaa', 354),
(923, 'es', 'Daugavpils', 355),
(924, 'es', 'Jelgava', 356),
(925, 'es', 'Jēkabpils', 357),
(926, 'es', 'Jūrmala', 358),
(927, 'es', 'Liepāja', 359),
(928, 'es', 'Liepājas novads', 360),
(929, 'es', 'Rēzekne', 361),
(930, 'es', 'Rīga', 362),
(931, 'es', 'Rīgas novads', 363),
(932, 'es', 'Valmiera', 364),
(933, 'es', 'Ventspils', 365),
(934, 'es', 'Aglonas novads', 366),
(935, 'es', 'Aizkraukles novads', 367),
(936, 'es', 'Aizputes novads', 368),
(937, 'es', 'Aknīstes novads', 369),
(938, 'es', 'Alojas novads', 370),
(939, 'es', 'Alsungas novads', 371),
(940, 'es', 'Alūksnes novads', 372),
(941, 'es', 'Amatas novads', 373),
(942, 'es', 'Apes novads', 374),
(943, 'es', 'Auces novads', 375),
(944, 'es', 'Babītes novads', 376),
(945, 'es', 'Baldones novads', 377),
(946, 'es', 'Baltinavas novads', 378),
(947, 'es', 'Balvu novads', 379),
(948, 'es', 'Bauskas novads', 380),
(949, 'es', 'Beverīnas novads', 381),
(950, 'es', 'Brocēnu novads', 382),
(951, 'es', 'Burtnieku novads', 383),
(952, 'es', 'Carnikavas novads', 384),
(953, 'es', 'Cesvaines novads', 385),
(954, 'es', 'Ciblas novads', 386),
(955, 'es', 'Cēsu novads', 387),
(956, 'es', 'Dagdas novads', 388),
(957, 'es', 'Daugavpils novads', 389),
(958, 'es', 'Dobeles novads', 390),
(959, 'es', 'Dundagas novads', 391),
(960, 'es', 'Durbes novads', 392),
(961, 'es', 'Engures novads', 393),
(962, 'es', 'Garkalnes novads', 394),
(963, 'es', 'Grobiņas novads', 395),
(964, 'es', 'Gulbenes novads', 396),
(965, 'es', 'Iecavas novads', 397),
(966, 'es', 'Ikšķiles novads', 398),
(967, 'es', 'Ilūkstes novads', 399),
(968, 'es', 'Inčukalna novads', 400),
(969, 'es', 'Jaunjelgavas novads', 401),
(970, 'es', 'Jaunpiebalgas novads', 402),
(971, 'es', 'Jaunpils novads', 403),
(972, 'es', 'Jelgavas novads', 404),
(973, 'es', 'Jēkabpils novads', 405),
(974, 'es', 'Kandavas novads', 406),
(975, 'es', 'Kokneses novads', 407),
(976, 'es', 'Krimuldas novads', 408),
(977, 'es', 'Krustpils novads', 409),
(978, 'es', 'Krāslavas novads', 410),
(979, 'es', 'Kuldīgas novads', 411),
(980, 'es', 'Kārsavas novads', 412),
(981, 'es', 'Lielvārdes novads', 413),
(982, 'es', 'Limbažu novads', 414),
(983, 'es', 'Lubānas novads', 415),
(984, 'es', 'Ludzas novads', 416),
(985, 'es', 'Līgatnes novads', 417),
(986, 'es', 'Līvānu novads', 418),
(987, 'es', 'Madonas novads', 419),
(988, 'es', 'Mazsalacas novads', 420),
(989, 'es', 'Mālpils novads', 421),
(990, 'es', 'Mārupes novads', 422),
(991, 'es', 'Naukšēnu novads', 423),
(992, 'es', 'Neretas novads', 424),
(993, 'es', 'Nīcas novads', 425),
(994, 'es', 'Ogres novads', 426),
(995, 'es', 'Olaines novads', 427),
(996, 'es', 'Ozolnieku novads', 428),
(997, 'es', 'Preiļu novads', 429),
(998, 'es', 'Priekules novads', 430),
(999, 'es', 'Priekuļu novads', 431),
(1000, 'es', 'Pārgaujas novads', 432),
(1001, 'es', 'Pāvilostas novads', 433),
(1002, 'es', 'Pļaviņu novads', 434),
(1003, 'es', 'Raunas novads', 435),
(1004, 'es', 'Riebiņu novads', 436),
(1005, 'es', 'Rojas novads', 437),
(1006, 'es', 'Ropažu novads', 438),
(1007, 'es', 'Rucavas novads', 439),
(1008, 'es', 'Rugāju novads', 440),
(1009, 'es', 'Rundāles novads', 441),
(1010, 'es', 'Rēzeknes novads', 442),
(1011, 'es', 'Rūjienas novads', 443),
(1012, 'es', 'Salacgrīvas novads', 444),
(1013, 'es', 'Salas novads', 445),
(1014, 'es', 'Salaspils novads', 446),
(1015, 'es', 'Saldus novads', 447),
(1016, 'es', 'Saulkrastu novads', 448),
(1017, 'es', 'Siguldas novads', 449),
(1018, 'es', 'Skrundas novads', 450),
(1019, 'es', 'Skrīveru novads', 451),
(1020, 'es', 'Smiltenes novads', 452),
(1021, 'es', 'Stopiņu novads', 453),
(1022, 'es', 'Strenču novads', 454),
(1023, 'es', 'Sējas novads', 455),
(1024, 'es', 'Talsu novads', 456),
(1025, 'es', 'Tukuma novads', 457),
(1026, 'es', 'Tērvetes novads', 458),
(1027, 'es', 'Vaiņodes novads', 459),
(1028, 'es', 'Valkas novads', 460),
(1029, 'es', 'Valmieras novads', 461),
(1030, 'es', 'Varakļānu novads', 462),
(1031, 'es', 'Vecpiebalgas novads', 463),
(1032, 'es', 'Vecumnieku novads', 464),
(1033, 'es', 'Ventspils novads', 465),
(1034, 'es', 'Viesītes novads', 466),
(1035, 'es', 'Viļakas novads', 467),
(1036, 'es', 'Viļānu novads', 468),
(1037, 'es', 'Vārkavas novads', 469),
(1038, 'es', 'Zilupes novads', 470),
(1039, 'es', 'Ādažu novads', 471),
(1040, 'es', 'Ērgļu novads', 472),
(1041, 'es', 'Ķeguma novads', 473),
(1042, 'es', 'Ķekavas novads', 474),
(1043, 'es', 'Alytaus Apskritis', 475),
(1044, 'es', 'Kauno Apskritis', 476),
(1045, 'es', 'Klaipėdos Apskritis', 477),
(1046, 'es', 'Marijampolės Apskritis', 478),
(1047, 'es', 'Panevėžio Apskritis', 479),
(1048, 'es', 'Šiaulių Apskritis', 480),
(1049, 'es', 'Tauragės Apskritis', 481),
(1050, 'es', 'Telšių Apskritis', 482),
(1051, 'es', 'Utenos Apskritis', 483),
(1052, 'es', 'Vilniaus Apskritis', 484),
(1053, 'es', 'Acre', 485),
(1054, 'es', 'Alagoas', 486),
(1055, 'es', 'Amapá', 487),
(1056, 'es', 'Amazonas', 488),
(1057, 'es', 'Bahía', 489),
(1058, 'es', 'Ceará', 490),
(1059, 'es', 'Espíritu Santo', 491),
(1060, 'es', 'Goiás', 492),
(1061, 'es', 'Maranhão', 493),
(1062, 'es', 'Mato Grosso', 494),
(1063, 'es', 'Mato Grosso del Sur', 495),
(1064, 'es', 'Minas Gerais', 496),
(1065, 'es', 'Pará', 497),
(1066, 'es', 'Paraíba', 498),
(1067, 'es', 'Paraná', 499),
(1068, 'es', 'Pernambuco', 500),
(1069, 'es', 'Piauí', 501),
(1070, 'es', 'Río de Janeiro', 502),
(1071, 'es', 'Río Grande del Norte', 503),
(1072, 'es', 'Río Grande del Sur', 504),
(1073, 'es', 'Rondônia', 505),
(1074, 'es', 'Roraima', 506),
(1075, 'es', 'Santa Catarina', 507),
(1076, 'es', 'São Paulo', 508),
(1077, 'es', 'Sergipe', 509),
(1078, 'es', 'Tocantins', 510),
(1079, 'es', 'Distrito Federal', 511),
(1080, 'es', 'Zagrebačka županija', 512),
(1081, 'es', 'Krapinsko-zagorska županija', 513),
(1082, 'es', 'Sisačko-moslavačka županija', 514),
(1083, 'es', 'Karlovačka županija', 515),
(1084, 'es', 'Varaždinska županija', 516),
(1085, 'es', 'Koprivničko-križevačka županija', 517),
(1086, 'es', 'Bjelovarsko-bilogorska županija', 518),
(1087, 'es', 'Primorsko-goranska županija', 519),
(1088, 'es', 'Ličko-senjska županija', 520),
(1089, 'es', 'Virovitičko-podravska županija', 521),
(1090, 'es', 'Požeško-slavonska županija', 522),
(1091, 'es', 'Brodsko-posavska županija', 523),
(1092, 'es', 'Zadarska županija', 524),
(1093, 'es', 'Osječko-baranjska županija', 525),
(1094, 'es', 'Šibensko-kninska županija', 526),
(1095, 'es', 'Vukovarsko-srijemska županija', 527),
(1096, 'es', 'Splitsko-dalmatinska županija', 528),
(1097, 'es', 'Istarska županija', 529),
(1098, 'es', 'Dubrovačko-neretvanska županija', 530),
(1099, 'es', 'Međimurska županija', 531),
(1100, 'es', 'Grad Zagreb', 532),
(1101, 'es', 'Andaman and Nicobar Islands', 533),
(1102, 'es', 'Andhra Pradesh', 534),
(1103, 'es', 'Arunachal Pradesh', 535),
(1104, 'es', 'Assam', 536),
(1105, 'es', 'Bihar', 537),
(1106, 'es', 'Chandigarh', 538),
(1107, 'es', 'Chhattisgarh', 539),
(1108, 'es', 'Dadra and Nagar Haveli', 540),
(1109, 'es', 'Daman and Diu', 541),
(1110, 'es', 'Delhi', 542),
(1111, 'es', 'Goa', 543),
(1112, 'es', 'Gujarat', 544),
(1113, 'es', 'Haryana', 545),
(1114, 'es', 'Himachal Pradesh', 546),
(1115, 'es', 'Jammu and Kashmir', 547),
(1116, 'es', 'Jharkhand', 548),
(1117, 'es', 'Karnataka', 549),
(1118, 'es', 'Kerala', 550),
(1119, 'es', 'Lakshadweep', 551),
(1120, 'es', 'Madhya Pradesh', 552),
(1121, 'es', 'Maharashtra', 553),
(1122, 'es', 'Manipur', 554),
(1123, 'es', 'Meghalaya', 555),
(1124, 'es', 'Mizoram', 556),
(1125, 'es', 'Nagaland', 557),
(1126, 'es', 'Odisha', 558),
(1127, 'es', 'Puducherry', 559),
(1128, 'es', 'Punjab', 560),
(1129, 'es', 'Rajasthan', 561),
(1130, 'es', 'Sikkim', 562),
(1131, 'es', 'Tamil Nadu', 563),
(1132, 'es', 'Telangana', 564),
(1133, 'es', 'Tripura', 565),
(1134, 'es', 'Uttar Pradesh', 566),
(1135, 'es', 'Uttarakhand', 567),
(1136, 'es', 'West Bengal', 568),
(1137, 'es', 'Alto Paraguay', 569),
(1138, 'es', 'Alto Paraná', 570),
(1139, 'es', 'Amambay', 571),
(1140, 'es', 'Asunción', 572),
(1141, 'es', 'Boquerón', 573),
(1142, 'es', 'Caaguazú', 574),
(1143, 'es', 'Caazapá', 575),
(1144, 'es', 'Canindeyú', 576),
(1145, 'es', 'Central', 577),
(1146, 'es', 'Concepción', 578),
(1147, 'es', 'Cordillera', 579),
(1148, 'es', 'Guairá', 580),
(1149, 'es', 'Itapúa', 581),
(1150, 'es', 'Misiones', 582),
(1151, 'es', 'Paraguarí', 583),
(1152, 'es', 'Presidente Hayes', 584),
(1153, 'es', 'San Pedro', 585),
(1154, 'es', 'Ñeembucú', 586),
(1155, 'fa', 'آلاباما', 1),
(1156, 'fa', 'آلاسکا', 2),
(1157, 'fa', 'ساموآ آمریکایی', 3),
(1158, 'fa', 'آریزونا', 4),
(1159, 'fa', 'آرکانزاس', 5),
(1160, 'fa', 'نیروهای مسلح آفریقا', 6),
(1161, 'fa', 'Armed Forces America', 7),
(1162, 'fa', 'نیروهای مسلح کانادا', 8),
(1163, 'fa', 'نیروهای مسلح اروپا', 9),
(1164, 'fa', 'نیروهای مسلح خاورمیانه', 10),
(1165, 'fa', 'نیروهای مسلح اقیانوس آرام', 11),
(1166, 'fa', 'کالیفرنیا', 12),
(1167, 'fa', 'کلرادو', 13),
(1168, 'fa', 'کانکتیکات', 14),
(1169, 'fa', 'دلاور', 15),
(1170, 'fa', 'منطقه کلمبیا', 16),
(1171, 'fa', 'ایالات فدرال میکرونزی', 17),
(1172, 'fa', 'فلوریدا', 18),
(1173, 'fa', 'جورجیا', 19),
(1174, 'fa', 'گوام', 20),
(1175, 'fa', 'هاوایی', 21),
(1176, 'fa', 'آیداهو', 22),
(1177, 'fa', 'ایلینویز', 23),
(1178, 'fa', 'ایندیانا', 24),
(1179, 'fa', 'آیووا', 25),
(1180, 'fa', 'کانزاس', 26),
(1181, 'fa', 'کنتاکی', 27),
(1182, 'fa', 'لوئیزیانا', 28),
(1183, 'fa', 'ماین', 29),
(1184, 'fa', 'مای', 30),
(1185, 'fa', 'مریلند', 31),
(1186, 'fa', ' ', 32),
(1187, 'fa', 'میشیگان', 33),
(1188, 'fa', 'مینه سوتا', 34),
(1189, 'fa', 'می سی سی پی', 35),
(1190, 'fa', 'میسوری', 36),
(1191, 'fa', 'مونتانا', 37),
(1192, 'fa', 'نبراسکا', 38),
(1193, 'fa', 'نواد', 39),
(1194, 'fa', 'نیوهمپشایر', 40),
(1195, 'fa', 'نیوجرسی', 41),
(1196, 'fa', 'نیومکزیکو', 42),
(1197, 'fa', 'نیویورک', 43),
(1198, 'fa', 'کارولینای شمالی', 44),
(1199, 'fa', 'داکوتای شمالی', 45),
(1200, 'fa', 'جزایر ماریانای شمالی', 46),
(1201, 'fa', 'اوهایو', 47),
(1202, 'fa', 'اوکلاهما', 48),
(1203, 'fa', 'اورگان', 49),
(1204, 'fa', 'پالائو', 50),
(1205, 'fa', 'پنسیلوانیا', 51),
(1206, 'fa', 'پورتوریکو', 52),
(1207, 'fa', 'رود آیلند', 53),
(1208, 'fa', 'کارولینای جنوبی', 54),
(1209, 'fa', 'داکوتای جنوبی', 55),
(1210, 'fa', 'تنسی', 56),
(1211, 'fa', 'تگزاس', 57),
(1212, 'fa', 'یوتا', 58),
(1213, 'fa', 'ورمونت', 59),
(1214, 'fa', 'جزایر ویرجین', 60),
(1215, 'fa', 'ویرجینیا', 61),
(1216, 'fa', 'واشنگتن', 62),
(1217, 'fa', 'ویرجینیای غربی', 63),
(1218, 'fa', 'ویسکانسین', 64),
(1219, 'fa', 'وایومینگ', 65),
(1220, 'fa', 'آلبرتا', 66),
(1221, 'fa', 'بریتیش کلمبیا', 67),
(1222, 'fa', 'مانیتوبا', 68),
(1223, 'fa', 'نیوفاندلند و لابرادور', 69),
(1224, 'fa', 'نیوبرانزویک', 70),
(1225, 'fa', 'نوا اسکوشیا', 71),
(1226, 'fa', 'سرزمینهای شمال غربی', 72),
(1227, 'fa', 'نوناووت', 73),
(1228, 'fa', 'انتاریو', 74),
(1229, 'fa', 'جزیره پرنس ادوارد', 75),
(1230, 'fa', 'کبک', 76),
(1231, 'fa', 'ساسکاتچوان', 77),
(1232, 'fa', 'قلمرو یوکان', 78),
(1233, 'fa', 'نیدرزاکسن', 79),
(1234, 'fa', 'بادن-وورتمبرگ', 80),
(1235, 'fa', 'بایرن', 81),
(1236, 'fa', 'برلین', 82),
(1237, 'fa', 'براندنبورگ', 83),
(1238, 'fa', 'برمن', 84),
(1239, 'fa', 'هامبور', 85),
(1240, 'fa', 'هسن', 86),
(1241, 'fa', 'مکلنبورگ-وورپومرن', 87),
(1242, 'fa', 'نوردراین-وستفالن', 88),
(1243, 'fa', 'راینلاند-پلاتینات', 89),
(1244, 'fa', 'سارلند', 90),
(1245, 'fa', 'ساچسن', 91),
(1246, 'fa', 'ساچسن-آنهالت', 92),
(1247, 'fa', 'شلسویگ-هولشتاین', 93),
(1248, 'fa', 'تورینگی', 94),
(1249, 'fa', 'وین', 95),
(1250, 'fa', 'اتریش پایین', 96),
(1251, 'fa', 'اتریش فوقانی', 97),
(1252, 'fa', 'سالزبورگ', 98),
(1253, 'fa', 'کارنتا', 99),
(1254, 'fa', 'Steiermar', 100),
(1255, 'fa', 'تیرول', 101),
(1256, 'fa', 'بورگنلن', 102),
(1257, 'fa', 'Vorarlber', 103),
(1258, 'fa', 'آرگ', 104),
(1259, 'fa', '', 105),
(1260, 'fa', 'اپنزلسرهودن', 106),
(1261, 'fa', 'بر', 107),
(1262, 'fa', 'بازل-لندشفت', 108),
(1263, 'fa', 'بازل استاد', 109),
(1264, 'fa', 'فرایبورگ', 110),
(1265, 'fa', 'گنف', 111),
(1266, 'fa', 'گلاروس', 112),
(1267, 'fa', 'Graubünde', 113),
(1268, 'fa', 'ژورا', 114),
(1269, 'fa', 'لوزرن', 115),
(1270, 'fa', 'نوینبور', 116),
(1271, 'fa', 'نیدالد', 117),
(1272, 'fa', 'اوبولدن', 118),
(1273, 'fa', 'سنت گالن', 119),
(1274, 'fa', 'شافهاوز', 120),
(1275, 'fa', 'سولوتور', 121),
(1276, 'fa', 'شووی', 122),
(1277, 'fa', 'تورگاو', 123),
(1278, 'fa', 'تسسی', 124),
(1279, 'fa', 'اوری', 125),
(1280, 'fa', 'وادت', 126),
(1281, 'fa', 'والی', 127),
(1282, 'fa', 'ز', 128),
(1283, 'fa', 'زوریخ', 129),
(1284, 'fa', 'کورونا', 130),
(1285, 'fa', 'آلاوا', 131),
(1286, 'fa', 'آلبوم', 132),
(1287, 'fa', 'آلیکانت', 133),
(1288, 'fa', 'آلمریا', 134),
(1289, 'fa', 'آستوریا', 135),
(1290, 'fa', 'آویلا', 136),
(1291, 'fa', 'باداژوز', 137),
(1292, 'fa', 'ضرب و شتم', 138),
(1293, 'fa', 'بارسلون', 139),
(1294, 'fa', 'بورگو', 140),
(1295, 'fa', 'کاسر', 141),
(1296, 'fa', 'کادی', 142),
(1297, 'fa', 'کانتابریا', 143),
(1298, 'fa', 'کاستلون', 144),
(1299, 'fa', 'سوت', 145),
(1300, 'fa', 'سیوداد واقعی', 146),
(1301, 'fa', 'کوردوب', 147),
(1302, 'fa', 'Cuenc', 148),
(1303, 'fa', 'جیرون', 149),
(1304, 'fa', 'گراناد', 150),
(1305, 'fa', 'گوادالاجار', 151),
(1306, 'fa', 'Guipuzcoa', 152),
(1307, 'fa', 'هولوا', 153),
(1308, 'fa', 'هوسک', 154),
(1309, 'fa', 'جی', 155),
(1310, 'fa', 'لا ریوجا', 156),
(1311, 'fa', 'لاس پالماس', 157),
(1312, 'fa', 'لئو', 158),
(1313, 'fa', 'Lleid', 159),
(1314, 'fa', 'لوگ', 160),
(1315, 'fa', 'مادری', 161),
(1316, 'fa', 'مالاگ', 162),
(1317, 'fa', 'ملیلی', 163),
(1318, 'fa', 'مورسیا', 164),
(1319, 'fa', 'ناوار', 165),
(1320, 'fa', 'اورنس', 166),
(1321, 'fa', 'پالنسی', 167),
(1322, 'fa', 'پونتوودر', 168),
(1323, 'fa', 'سالامانک', 169),
(1324, 'fa', 'سانتا کروز د تنریفه', 170),
(1325, 'fa', 'سوگویا', 171),
(1326, 'fa', 'سوی', 172),
(1327, 'fa', 'سوریا', 173),
(1328, 'fa', 'تاراگونا', 174),
(1329, 'fa', 'ترئو', 175),
(1330, 'fa', 'تولدو', 176),
(1331, 'fa', 'والنسیا', 177),
(1332, 'fa', 'والادولی', 178),
(1333, 'fa', 'ویزکایا', 179),
(1334, 'fa', 'زامور', 180),
(1335, 'fa', 'ساراگوز', 181),
(1336, 'fa', 'عی', 182),
(1337, 'fa', 'آیز', 183),
(1338, 'fa', 'آلی', 184),
(1339, 'fa', 'آلپ-دو-هاوت-پرووانس', 185),
(1340, 'fa', 'هاوتس آلپ', 186),
(1341, 'fa', 'Alpes-Maritime', 187),
(1342, 'fa', 'اردچه', 188),
(1343, 'fa', 'آرد', 189),
(1344, 'fa', 'محاصر', 190),
(1345, 'fa', 'آبه', 191),
(1346, 'fa', 'Aud', 192),
(1347, 'fa', 'آویرون', 193),
(1348, 'fa', 'BOCAS DO Rhône', 194),
(1349, 'fa', 'نوعی عرق', 195),
(1350, 'fa', 'کانتینال', 196),
(1351, 'fa', 'چارنت', 197),
(1352, 'fa', 'چارنت-دریایی', 198),
(1353, 'fa', 'چ', 199),
(1354, 'fa', 'کور', 200),
(1355, 'fa', 'کرس دو ساد', 201),
(1356, 'fa', 'هاوت کورس', 202),
(1357, 'fa', 'کوستا دورکرز', 203),
(1358, 'fa', 'تخت دارمور', 204),
(1359, 'fa', 'درهم', 205),
(1360, 'fa', 'دوردگن', 206),
(1361, 'fa', 'دوب', 207),
(1362, 'fa', 'تعریف اول', 208),
(1363, 'fa', 'یور', 209),
(1364, 'fa', 'Eure-et-Loi', 210),
(1365, 'fa', 'فمینیست', 211),
(1366, 'fa', 'باغ', 212),
(1367, 'fa', 'اوت-گارون', 213),
(1368, 'fa', 'گر', 214),
(1369, 'fa', 'جیروند', 215),
(1370, 'fa', 'هیر', 216),
(1371, 'fa', 'هشدار داده می شود', 217),
(1372, 'fa', 'ایندور', 218),
(1373, 'fa', 'Indre-et-Loir', 219),
(1374, 'fa', 'ایزر', 220),
(1375, 'fa', 'یور', 221),
(1376, 'fa', 'لندز', 222),
(1377, 'fa', 'Loir-et-Che', 223),
(1378, 'fa', 'وام گرفتن', 224),
(1379, 'fa', 'Haute-Loir', 225),
(1380, 'fa', 'Loire-Atlantiqu', 226),
(1381, 'fa', 'لیرت', 227),
(1382, 'fa', 'لوط', 228),
(1383, 'fa', 'لوت و گارون', 229),
(1384, 'fa', 'لوزر', 230),
(1385, 'fa', 'ماین et-Loire', 231),
(1386, 'fa', 'مانچ', 232),
(1387, 'fa', 'مارن', 233),
(1388, 'fa', 'هاوت-مارن', 234),
(1389, 'fa', 'مایین', 235),
(1390, 'fa', 'مورته-et-Moselle', 236),
(1391, 'fa', 'مسخره کردن', 237),
(1392, 'fa', 'موربیان', 238),
(1393, 'fa', 'موزل', 239),
(1394, 'fa', 'Nièvr', 240),
(1395, 'fa', 'نورد', 241),
(1396, 'fa', 'اوی', 242),
(1397, 'fa', 'ارن', 243),
(1398, 'fa', 'پاس-کاله', 244),
(1399, 'fa', 'Puy-de-Dôm', 245),
(1400, 'fa', 'Pyrénées-Atlantiques', 246),
(1401, 'fa', 'Hautes-Pyrénée', 247),
(1402, 'fa', 'Pyrénées-Orientales', 248),
(1403, 'fa', 'بس راین', 249),
(1404, 'fa', 'هاوت-رین', 250),
(1405, 'fa', 'رو', 251),
(1406, 'fa', 'Haute-Saône', 252),
(1407, 'fa', 'Saône-et-Loire', 253),
(1408, 'fa', 'سارته', 254),
(1409, 'fa', 'ساووی', 255),
(1410, 'fa', 'هاو-ساووی', 256),
(1411, 'fa', 'پاری', 257),
(1412, 'fa', 'Seine-Maritime', 258),
(1413, 'fa', 'Seine-et-Marn', 259),
(1414, 'fa', 'ایولینز', 260),
(1415, 'fa', 'Deux-Sèvres', 261),
(1416, 'fa', 'سمی', 262),
(1417, 'fa', 'ضعف', 263),
(1418, 'fa', 'Tarn-et-Garonne', 264),
(1419, 'fa', 'وار', 265),
(1420, 'fa', 'ووکلوز', 266),
(1421, 'fa', 'وندیه', 267),
(1422, 'fa', 'وین', 268),
(1423, 'fa', 'هاوت-وین', 269),
(1424, 'fa', 'رأی دادن', 270),
(1425, 'fa', 'یون', 271),
(1426, 'fa', 'سرزمین-دو-بلفورت', 272),
(1427, 'fa', 'اسون', 273),
(1428, 'fa', 'هاوتز دی سی', 274),
(1429, 'fa', 'Seine-Saint-Deni', 275),
(1430, 'fa', 'والد مارن', 276),
(1431, 'fa', 'Val-d\'Ois', 277),
(1432, 'fa', 'آلبا', 278),
(1433, 'fa', 'آرا', 279),
(1434, 'fa', 'Argeș', 280),
(1435, 'fa', 'باکو', 281),
(1436, 'fa', 'بیهور', 282),
(1437, 'fa', 'بیستریا-نسوود', 283),
(1438, 'fa', 'بوتانی', 284),
(1439, 'fa', 'برازوف', 285),
(1440, 'fa', 'Brăila', 286),
(1441, 'fa', 'București', 287),
(1442, 'fa', 'بوز', 288),
(1443, 'fa', 'کارا- Severin', 289),
(1444, 'fa', 'کالیراسی', 290),
(1445, 'fa', 'كلوژ', 291),
(1446, 'fa', 'کنستانس', 292),
(1447, 'fa', 'کواسنا', 293),
(1448, 'fa', 'Dâmbovița', 294),
(1449, 'fa', 'دال', 295),
(1450, 'fa', 'گالشی', 296),
(1451, 'fa', 'جورجیو', 297),
(1452, 'fa', 'گور', 298),
(1453, 'fa', 'هارگیتا', 299),
(1454, 'fa', 'هوندهار', 300),
(1455, 'fa', 'ایالومیشا', 301),
(1456, 'fa', 'Iași', 302),
(1457, 'fa', 'Ilfo', 303),
(1458, 'fa', 'Maramureș', 304),
(1459, 'fa', 'Mehedinți', 305),
(1460, 'fa', 'Mureș', 306),
(1461, 'fa', 'Neamț', 307),
(1462, 'fa', 'اولت', 308),
(1463, 'fa', 'پرهوا', 309),
(1464, 'fa', 'ستو ماره', 310),
(1465, 'fa', 'سلاج', 311),
(1466, 'fa', 'سیبیو', 312),
(1467, 'fa', 'سوساو', 313),
(1468, 'fa', 'تلورمان', 314),
(1469, 'fa', 'تیمیچ', 315),
(1470, 'fa', 'تولسا', 316),
(1471, 'fa', 'واسلوئی', 317),
(1472, 'fa', 'Vâlcea', 318),
(1473, 'fa', 'ورانسا', 319),
(1474, 'fa', 'لاپی', 320),
(1475, 'fa', 'Pohjois-Pohjanmaa', 321),
(1476, 'fa', 'کائینو', 322),
(1477, 'fa', 'Pohjois-Karjala', 323),
(1478, 'fa', 'Pohjois-Savo', 324),
(1479, 'fa', 'اتل-ساوو', 325),
(1480, 'fa', 'کسکی-پوهانما', 326),
(1481, 'fa', 'Pohjanmaa', 327),
(1482, 'fa', 'پیرکانما', 328),
(1483, 'fa', 'ساتاکونتا', 329),
(1484, 'fa', 'کسکی-پوهانما', 330),
(1485, 'fa', 'کسکی-سوومی', 331),
(1486, 'fa', 'Varsinais-Suomi', 332),
(1487, 'fa', 'اتلی کرجالا', 333),
(1488, 'fa', 'Päijät-HAM', 334),
(1489, 'fa', 'کانتا-هوم', 335),
(1490, 'fa', 'یوسیما', 336),
(1491, 'fa', 'اوسیم', 337),
(1492, 'fa', 'کیمنلاکو', 338),
(1493, 'fa', 'آونوانما', 339),
(1494, 'fa', 'هارژوم', 340),
(1495, 'fa', 'سلا', 341),
(1496, 'fa', 'آیدا-ویروما', 342),
(1497, 'fa', 'Jõgevamaa', 343),
(1498, 'fa', 'جوروماا', 344),
(1499, 'fa', 'لونما', 345),
(1500, 'fa', 'لون-ویروما', 346),
(1501, 'fa', 'پالوماا', 347),
(1502, 'fa', 'پورنوما', 348),
(1503, 'fa', 'Raplama', 349),
(1504, 'fa', 'ساارما', 350),
(1505, 'fa', 'تارتوما', 351),
(1506, 'fa', 'والگام', 352),
(1507, 'fa', 'ویلجاندیم', 353),
(1508, 'fa', 'Võrumaa', 354),
(1509, 'fa', 'داگاوپیل', 355),
(1510, 'fa', 'جلگاو', 356),
(1511, 'fa', 'جکابیل', 357),
(1512, 'fa', 'جرمل', 358),
(1513, 'fa', 'لیپجا', 359),
(1514, 'fa', 'شهرستان لیپاج', 360),
(1515, 'fa', 'روژن', 361),
(1516, 'fa', 'راگ', 362),
(1517, 'fa', 'شهرستان ریگ', 363),
(1518, 'fa', 'والمییرا', 364),
(1519, 'fa', 'Ventspils', 365),
(1520, 'fa', 'آگلوناس نوادا', 366),
(1521, 'fa', 'تازه کاران آیزکرایکلس', 367),
(1522, 'fa', 'تازه واردان', 368),
(1523, 'fa', 'شهرستا', 369),
(1524, 'fa', 'نوازندگان آلوجاس', 370),
(1525, 'fa', 'تازه های آلسونگاس', 371),
(1526, 'fa', 'شهرستان آلوکس', 372),
(1527, 'fa', 'تازه کاران آماتاس', 373),
(1528, 'fa', 'میمون های تازه', 374),
(1529, 'fa', 'نوادا را آویز می کند', 375),
(1530, 'fa', 'شهرستان بابی', 376),
(1531, 'fa', 'Baldones novad', 377),
(1532, 'fa', 'نوین های بالتیناوا', 378),
(1533, 'fa', 'Balvu novad', 379),
(1534, 'fa', 'نوازندگان باسکاس', 380),
(1535, 'fa', 'شهرستان بورین', 381),
(1536, 'fa', 'شهرستان بروچن', 382),
(1537, 'fa', 'بوردنیکو نوآوران', 383),
(1538, 'fa', 'تازه کارنیکاوا', 384),
(1539, 'fa', 'نوازان سزوینس', 385),
(1540, 'fa', 'نوادگان Cibla', 386),
(1541, 'fa', 'شهرستان Cesis', 387),
(1542, 'fa', 'تازه های داگدا', 388),
(1543, 'fa', 'داوگاوپیلز نوادا', 389),
(1544, 'fa', 'دابل نوادی', 390),
(1545, 'fa', 'تازه کارهای دنداگاس', 391),
(1546, 'fa', 'نوباد دوربس', 392),
(1547, 'fa', 'مشغول تازه کارها است', 393),
(1548, 'fa', 'گرکالنس نواد', 394),
(1549, 'fa', 'یا شهرستان گروبی', 395),
(1550, 'fa', 'تازه های گلبنس', 396),
(1551, 'fa', 'Iecavas novads', 397),
(1552, 'fa', 'شهرستان ایسکل', 398),
(1553, 'fa', 'ایالت ایلکست', 399),
(1554, 'fa', 'کنددو د اینچوکالن', 400),
(1555, 'fa', 'نوجواد Jaunjelgavas', 401),
(1556, 'fa', 'تازه های Jaunpiebalgas', 402),
(1557, 'fa', 'شهرستان جونپیلس', 403),
(1558, 'fa', 'شهرستان جگلو', 404),
(1559, 'fa', 'شهرستان جکابیل', 405),
(1560, 'fa', 'شهرستان کنداوا', 406),
(1561, 'fa', 'شهرستان کوکنز', 407),
(1562, 'fa', 'شهرستان کریمولد', 408),
(1563, 'fa', 'شهرستان کرستپیل', 409),
(1564, 'fa', 'شهرستان کراسلاو', 410),
(1565, 'fa', 'کاندادو د کلدیگا', 411),
(1566, 'fa', 'کاندادو د کارساوا', 412),
(1567, 'fa', 'شهرستان لیولوارد', 413),
(1568, 'fa', 'شهرستان لیمباشی', 414),
(1569, 'fa', 'ای ولسوالی لوبون', 415),
(1570, 'fa', 'شهرستان لودزا', 416),
(1571, 'fa', 'شهرستان لیگات', 417),
(1572, 'fa', 'شهرستان لیوانی', 418),
(1573, 'fa', 'شهرستان مادونا', 419),
(1574, 'fa', 'شهرستان مازسال', 420),
(1575, 'fa', 'شهرستان مالپیلس', 421),
(1576, 'fa', 'شهرستان Mārupe', 422),
(1577, 'fa', 'ا کنددو د نوکشنی', 423),
(1578, 'fa', 'کاملاً یک شهرستان', 424),
(1579, 'fa', 'شهرستان نیکا', 425),
(1580, 'fa', 'شهرستان اوگر', 426),
(1581, 'fa', 'شهرستان اولین', 427),
(1582, 'fa', 'شهرستان اوزولنیکی', 428),
(1583, 'fa', 'شهرستان پرلیلی', 429),
(1584, 'fa', 'شهرستان Priekule', 430),
(1585, 'fa', 'Condado de Priekuļi', 431),
(1586, 'fa', 'شهرستان در حال حرکت', 432),
(1587, 'fa', 'شهرستان پاویلوستا', 433),
(1588, 'fa', 'شهرستان Plavinas', 4),
(1589, 'fa', 'شهرستان راونا', 435),
(1590, 'fa', 'شهرستان ریبیشی', 436),
(1591, 'fa', 'شهرستان روجا', 437),
(1592, 'fa', 'شهرستان روپازی', 438),
(1593, 'fa', 'شهرستان روساوا', 439),
(1594, 'fa', 'شهرستان روگی', 440),
(1595, 'fa', 'شهرستان راندل', 441),
(1596, 'fa', 'شهرستان ریزکن', 442),
(1597, 'fa', 'شهرستان روژینا', 443),
(1598, 'fa', 'شهرداری Salacgriva', 444),
(1599, 'fa', 'منطقه جزیره', 445),
(1600, 'fa', 'شهرستان Salaspils', 446),
(1601, 'fa', 'شهرستان سالدوس', 447),
(1602, 'fa', 'شهرستان ساولکرستی', 448),
(1603, 'fa', 'شهرستان سیگولدا', 449),
(1604, 'fa', 'شهرستان Skrunda', 450),
(1605, 'fa', 'شهرستان Skrīveri', 451),
(1606, 'fa', 'شهرستان Smiltene', 452),
(1607, 'fa', 'شهرستان ایستینی', 453),
(1608, 'fa', 'شهرستان استرنشی', 454),
(1609, 'fa', 'منطقه کاشت', 455),
(1610, 'fa', 'شهرستان تالسی', 456),
(1611, 'fa', 'توکومس', 457),
(1612, 'fa', 'شهرستان تورت', 458),
(1613, 'fa', 'یا شهرستان وایودود', 459),
(1614, 'fa', 'شهرستان والکا', 460),
(1615, 'fa', 'شهرستان Valmiera', 461),
(1616, 'fa', 'شهرستان وارکانی', 462),
(1617, 'fa', 'شهرستان Vecpiebalga', 463),
(1618, 'fa', 'شهرستان وکومنیکی', 464),
(1619, 'fa', 'شهرستان ونتسپیل', 465),
(1620, 'fa', 'کنددو د بازدید', 466),
(1621, 'fa', 'شهرستان ویلاکا', 467),
(1622, 'fa', 'شهرستان ویلانی', 468),
(1623, 'fa', 'شهرستان واركاوا', 469),
(1624, 'fa', 'شهرستان زیلوپ', 470),
(1625, 'fa', 'شهرستان آدازی', 471),
(1626, 'fa', 'شهرستان ارگلو', 472),
(1627, 'fa', 'شهرستان کگومس', 473),
(1628, 'fa', 'شهرستان ککاوا', 474),
(1629, 'fa', 'شهرستان Alytus', 475),
(1630, 'fa', 'شهرستان Kaunas', 476),
(1631, 'fa', 'شهرستان کلایپدا', 477),
(1632, 'fa', 'شهرستان ماریجامپولی', 478),
(1633, 'fa', 'شهرستان پانویسیز', 479),
(1634, 'fa', 'شهرستان سیاولیا', 480),
(1635, 'fa', 'شهرستان تاجیج', 481),
(1636, 'fa', 'شهرستان تلشیا', 482),
(1637, 'fa', 'شهرستان اوتنا', 483),
(1638, 'fa', 'شهرستان ویلنیوس', 484),
(1639, 'fa', 'جریب', 485);
INSERT INTO `country_state_translations` (`id`, `locale`, `default_name`, `country_state_id`) VALUES
(1640, 'fa', 'حالت', 486),
(1641, 'fa', 'آمپá', 487),
(1642, 'fa', 'آمازون', 488),
(1643, 'fa', 'باهی', 489),
(1644, 'fa', 'سارا', 490),
(1645, 'fa', 'روح القدس', 491),
(1646, 'fa', 'برو', 492),
(1647, 'fa', 'مارانهائ', 493),
(1648, 'fa', 'ماتو گروسو', 494),
(1649, 'fa', 'Mato Grosso do Sul', 495),
(1650, 'fa', 'ایالت میناس گرایس', 496),
(1651, 'fa', 'پار', 497),
(1652, 'fa', 'حالت', 498),
(1653, 'fa', 'پارانا', 499),
(1654, 'fa', 'حال', 500),
(1655, 'fa', 'پیازو', 501),
(1656, 'fa', 'ریو دوژانیرو', 502),
(1657, 'fa', 'ریو گراند دو نورته', 503),
(1658, 'fa', 'ریو گراند دو سول', 504),
(1659, 'fa', 'Rondôni', 505),
(1660, 'fa', 'Roraim', 506),
(1661, 'fa', 'سانتا کاتارینا', 507),
(1662, 'fa', 'پ', 508),
(1663, 'fa', 'Sergip', 509),
(1664, 'fa', 'توکانتین', 510),
(1665, 'fa', 'منطقه فدرال', 511),
(1666, 'fa', 'شهرستان زاگرب', 512),
(1667, 'fa', 'Condado de Krapina-Zagorj', 513),
(1668, 'fa', 'شهرستان سیساک-موسلاوینا', 514),
(1669, 'fa', 'شهرستان کارلوواک', 515),
(1670, 'fa', 'شهرداری واراžدین', 516),
(1671, 'fa', 'Condo de Koprivnica-Križevci', 517),
(1672, 'fa', 'محل سکونت د بیلوار-بلوگورا', 518),
(1673, 'fa', 'Condado de Primorje-Gorski kotar', 519),
(1674, 'fa', 'شهرستان لیکا-سنج', 520),
(1675, 'fa', 'Condado de Virovitica-Podravina', 521),
(1676, 'fa', 'شهرستان پوژگا-اسلاونیا', 522),
(1677, 'fa', 'Condado de Brod-Posavina', 523),
(1678, 'fa', 'شهرستان زجر', 524),
(1679, 'fa', 'Condado de Osijek-Baranja', 525),
(1680, 'fa', 'Condo de Sibenik-Knin', 526),
(1681, 'fa', 'Condado de Vukovar-Srijem', 527),
(1682, 'fa', 'شهرستان اسپلیت-Dalmatia', 528),
(1683, 'fa', 'شهرستان ایستیا', 529),
(1684, 'fa', 'Condado de Dubrovnik-Neretva', 530),
(1685, 'fa', 'شهرستان Međimurje', 531),
(1686, 'fa', 'شهر زاگرب', 532),
(1687, 'fa', 'جزایر آندامان و نیکوبار', 533),
(1688, 'fa', 'آندرا پرادش', 534),
(1689, 'fa', 'آروناچال پرادش', 535),
(1690, 'fa', 'آسام', 536),
(1691, 'fa', 'Biha', 537),
(1692, 'fa', 'چاندیگار', 538),
(1693, 'fa', 'چاتیسگار', 539),
(1694, 'fa', 'دادرا و نگار هاولی', 540),
(1695, 'fa', 'دامان و دیو', 541),
(1696, 'fa', 'دهلی', 542),
(1697, 'fa', 'گوا', 543),
(1698, 'fa', 'گجرات', 544),
(1699, 'fa', 'هاریانا', 545),
(1700, 'fa', 'هیماچال پرادش', 546),
(1701, 'fa', 'جامو و کشمیر', 547),
(1702, 'fa', 'جهخند', 548),
(1703, 'fa', 'کارناتاکا', 549),
(1704, 'fa', 'کرال', 550),
(1705, 'fa', 'لاکشادوپ', 551),
(1706, 'fa', 'مادیا پرادش', 552),
(1707, 'fa', 'ماهاراشترا', 553),
(1708, 'fa', 'مانی پور', 554),
(1709, 'fa', 'مگالایا', 555),
(1710, 'fa', 'مزورام', 556),
(1711, 'fa', 'ناگلند', 557),
(1712, 'fa', 'ادیشا', 558),
(1713, 'fa', 'میناکاری', 559),
(1714, 'fa', 'پنجا', 560),
(1715, 'fa', 'راجستان', 561),
(1716, 'fa', 'سیکیم', 562),
(1717, 'fa', 'تامیل نادو', 563),
(1718, 'fa', 'تلنگانا', 564),
(1719, 'fa', 'تریپورا', 565),
(1720, 'fa', 'اوتار پرادش', 566),
(1721, 'fa', 'اوتاراکند', 567),
(1722, 'fa', 'بنگال غرب', 568),
(1723, 'pt_BR', 'Alabama', 1),
(1724, 'pt_BR', 'Alaska', 2),
(1725, 'pt_BR', 'Samoa Americana', 3),
(1726, 'pt_BR', 'Arizona', 4),
(1727, 'pt_BR', 'Arkansas', 5),
(1728, 'pt_BR', 'Forças Armadas da África', 6),
(1729, 'pt_BR', 'Forças Armadas das Américas', 7),
(1730, 'pt_BR', 'Forças Armadas do Canadá', 8),
(1731, 'pt_BR', 'Forças Armadas da Europa', 9),
(1732, 'pt_BR', 'Forças Armadas do Oriente Médio', 10),
(1733, 'pt_BR', 'Forças Armadas do Pacífico', 11),
(1734, 'pt_BR', 'California', 12),
(1735, 'pt_BR', 'Colorado', 13),
(1736, 'pt_BR', 'Connecticut', 14),
(1737, 'pt_BR', 'Delaware', 15),
(1738, 'pt_BR', 'Distrito de Columbia', 16),
(1739, 'pt_BR', 'Estados Federados da Micronésia', 17),
(1740, 'pt_BR', 'Florida', 18),
(1741, 'pt_BR', 'Geórgia', 19),
(1742, 'pt_BR', 'Guam', 20),
(1743, 'pt_BR', 'Havaí', 21),
(1744, 'pt_BR', 'Idaho', 22),
(1745, 'pt_BR', 'Illinois', 23),
(1746, 'pt_BR', 'Indiana', 24),
(1747, 'pt_BR', 'Iowa', 25),
(1748, 'pt_BR', 'Kansas', 26),
(1749, 'pt_BR', 'Kentucky', 27),
(1750, 'pt_BR', 'Louisiana', 28),
(1751, 'pt_BR', 'Maine', 29),
(1752, 'pt_BR', 'Ilhas Marshall', 30),
(1753, 'pt_BR', 'Maryland', 31),
(1754, 'pt_BR', 'Massachusetts', 32),
(1755, 'pt_BR', 'Michigan', 33),
(1756, 'pt_BR', 'Minnesota', 34),
(1757, 'pt_BR', 'Mississippi', 35),
(1758, 'pt_BR', 'Missouri', 36),
(1759, 'pt_BR', 'Montana', 37),
(1760, 'pt_BR', 'Nebraska', 38),
(1761, 'pt_BR', 'Nevada', 39),
(1762, 'pt_BR', 'New Hampshire', 40),
(1763, 'pt_BR', 'Nova Jersey', 41),
(1764, 'pt_BR', 'Novo México', 42),
(1765, 'pt_BR', 'Nova York', 43),
(1766, 'pt_BR', 'Carolina do Norte', 44),
(1767, 'pt_BR', 'Dakota do Norte', 45),
(1768, 'pt_BR', 'Ilhas Marianas do Norte', 46),
(1769, 'pt_BR', 'Ohio', 47),
(1770, 'pt_BR', 'Oklahoma', 48),
(1771, 'pt_BR', 'Oregon', 4),
(1772, 'pt_BR', 'Palau', 50),
(1773, 'pt_BR', 'Pensilvânia', 51),
(1774, 'pt_BR', 'Porto Rico', 52),
(1775, 'pt_BR', 'Rhode Island', 53),
(1776, 'pt_BR', 'Carolina do Sul', 54),
(1777, 'pt_BR', 'Dakota do Sul', 55),
(1778, 'pt_BR', 'Tennessee', 56),
(1779, 'pt_BR', 'Texas', 57),
(1780, 'pt_BR', 'Utah', 58),
(1781, 'pt_BR', 'Vermont', 59),
(1782, 'pt_BR', 'Ilhas Virgens', 60),
(1783, 'pt_BR', 'Virginia', 61),
(1784, 'pt_BR', 'Washington', 62),
(1785, 'pt_BR', 'West Virginia', 63),
(1786, 'pt_BR', 'Wisconsin', 64),
(1787, 'pt_BR', 'Wyoming', 65),
(1788, 'pt_BR', 'Alberta', 66),
(1789, 'pt_BR', 'Colúmbia Britânica', 67),
(1790, 'pt_BR', 'Manitoba', 68),
(1791, 'pt_BR', 'Terra Nova e Labrador', 69),
(1792, 'pt_BR', 'New Brunswick', 70),
(1793, 'pt_BR', 'Nova Escócia', 7),
(1794, 'pt_BR', 'Territórios do Noroeste', 72),
(1795, 'pt_BR', 'Nunavut', 73),
(1796, 'pt_BR', 'Ontario', 74),
(1797, 'pt_BR', 'Ilha do Príncipe Eduardo', 75),
(1798, 'pt_BR', 'Quebec', 76),
(1799, 'pt_BR', 'Saskatchewan', 77),
(1800, 'pt_BR', 'Território yukon', 78),
(1801, 'pt_BR', 'Niedersachsen', 79),
(1802, 'pt_BR', 'Baden-Wurttemberg', 80),
(1803, 'pt_BR', 'Bayern', 81),
(1804, 'pt_BR', 'Berlim', 82),
(1805, 'pt_BR', 'Brandenburg', 83),
(1806, 'pt_BR', 'Bremen', 84),
(1807, 'pt_BR', 'Hamburgo', 85),
(1808, 'pt_BR', 'Hessen', 86),
(1809, 'pt_BR', 'Mecklenburg-Vorpommern', 87),
(1810, 'pt_BR', 'Nordrhein-Westfalen', 88),
(1811, 'pt_BR', 'Renânia-Palatinado', 8),
(1812, 'pt_BR', 'Sarre', 90),
(1813, 'pt_BR', 'Sachsen', 91),
(1814, 'pt_BR', 'Sachsen-Anhalt', 92),
(1815, 'pt_BR', 'Schleswig-Holstein', 93),
(1816, 'pt_BR', 'Turíngia', 94),
(1817, 'pt_BR', 'Viena', 95),
(1818, 'pt_BR', 'Baixa Áustria', 96),
(1819, 'pt_BR', 'Oberösterreich', 97),
(1820, 'pt_BR', 'Salzburg', 98),
(1821, 'pt_BR', 'Caríntia', 99),
(1822, 'pt_BR', 'Steiermark', 100),
(1823, 'pt_BR', 'Tirol', 101),
(1824, 'pt_BR', 'Burgenland', 102),
(1825, 'pt_BR', 'Vorarlberg', 103),
(1826, 'pt_BR', 'Aargau', 104),
(1827, 'pt_BR', 'Appenzell Innerrhoden', 105),
(1828, 'pt_BR', 'Appenzell Ausserrhoden', 106),
(1829, 'pt_BR', 'Bern', 107),
(1830, 'pt_BR', 'Basel-Landschaft', 108),
(1831, 'pt_BR', 'Basel-Stadt', 109),
(1832, 'pt_BR', 'Freiburg', 110),
(1833, 'pt_BR', 'Genf', 111),
(1834, 'pt_BR', 'Glarus', 112),
(1835, 'pt_BR', 'Grisons', 113),
(1836, 'pt_BR', 'Jura', 114),
(1837, 'pt_BR', 'Luzern', 115),
(1838, 'pt_BR', 'Neuenburg', 116),
(1839, 'pt_BR', 'Nidwalden', 117),
(1840, 'pt_BR', 'Obwalden', 118),
(1841, 'pt_BR', 'St. Gallen', 119),
(1842, 'pt_BR', 'Schaffhausen', 120),
(1843, 'pt_BR', 'Solothurn', 121),
(1844, 'pt_BR', 'Schwyz', 122),
(1845, 'pt_BR', 'Thurgau', 123),
(1846, 'pt_BR', 'Tessin', 124),
(1847, 'pt_BR', 'Uri', 125),
(1848, 'pt_BR', 'Waadt', 126),
(1849, 'pt_BR', 'Wallis', 127),
(1850, 'pt_BR', 'Zug', 128),
(1851, 'pt_BR', 'Zurique', 129),
(1852, 'pt_BR', 'Corunha', 130),
(1853, 'pt_BR', 'Álava', 131),
(1854, 'pt_BR', 'Albacete', 132),
(1855, 'pt_BR', 'Alicante', 133),
(1856, 'pt_BR', 'Almeria', 134),
(1857, 'pt_BR', 'Astúrias', 135),
(1858, 'pt_BR', 'Avila', 136),
(1859, 'pt_BR', 'Badajoz', 137),
(1860, 'pt_BR', 'Baleares', 138),
(1861, 'pt_BR', 'Barcelona', 139),
(1862, 'pt_BR', 'Burgos', 140),
(1863, 'pt_BR', 'Caceres', 141),
(1864, 'pt_BR', 'Cadiz', 142),
(1865, 'pt_BR', 'Cantábria', 143),
(1866, 'pt_BR', 'Castellon', 144),
(1867, 'pt_BR', 'Ceuta', 145),
(1868, 'pt_BR', 'Ciudad Real', 146),
(1869, 'pt_BR', 'Cordoba', 147),
(1870, 'pt_BR', 'Cuenca', 148),
(1871, 'pt_BR', 'Girona', 149),
(1872, 'pt_BR', 'Granada', 150),
(1873, 'pt_BR', 'Guadalajara', 151),
(1874, 'pt_BR', 'Guipuzcoa', 152),
(1875, 'pt_BR', 'Huelva', 153),
(1876, 'pt_BR', 'Huesca', 154),
(1877, 'pt_BR', 'Jaen', 155),
(1878, 'pt_BR', 'La Rioja', 156),
(1879, 'pt_BR', 'Las Palmas', 157),
(1880, 'pt_BR', 'Leon', 158),
(1881, 'pt_BR', 'Lleida', 159),
(1882, 'pt_BR', 'Lugo', 160),
(1883, 'pt_BR', 'Madri', 161),
(1884, 'pt_BR', 'Málaga', 162),
(1885, 'pt_BR', 'Melilla', 163),
(1886, 'pt_BR', 'Murcia', 164),
(1887, 'pt_BR', 'Navarra', 165),
(1888, 'pt_BR', 'Ourense', 166),
(1889, 'pt_BR', 'Palencia', 167),
(1890, 'pt_BR', 'Pontevedra', 168),
(1891, 'pt_BR', 'Salamanca', 169),
(1892, 'pt_BR', 'Santa Cruz de Tenerife', 170),
(1893, 'pt_BR', 'Segovia', 171),
(1894, 'pt_BR', 'Sevilla', 172),
(1895, 'pt_BR', 'Soria', 173),
(1896, 'pt_BR', 'Tarragona', 174),
(1897, 'pt_BR', 'Teruel', 175),
(1898, 'pt_BR', 'Toledo', 176),
(1899, 'pt_BR', 'Valencia', 177),
(1900, 'pt_BR', 'Valladolid', 178),
(1901, 'pt_BR', 'Vizcaya', 179),
(1902, 'pt_BR', 'Zamora', 180),
(1903, 'pt_BR', 'Zaragoza', 181),
(1904, 'pt_BR', 'Ain', 182),
(1905, 'pt_BR', 'Aisne', 183),
(1906, 'pt_BR', 'Allier', 184),
(1907, 'pt_BR', 'Alpes da Alta Provença', 185),
(1908, 'pt_BR', 'Altos Alpes', 186),
(1909, 'pt_BR', 'Alpes-Maritimes', 187),
(1910, 'pt_BR', 'Ardèche', 188),
(1911, 'pt_BR', 'Ardennes', 189),
(1912, 'pt_BR', 'Ariege', 190),
(1913, 'pt_BR', 'Aube', 191),
(1914, 'pt_BR', 'Aude', 192),
(1915, 'pt_BR', 'Aveyron', 193),
(1916, 'pt_BR', 'BOCAS DO Rhône', 194),
(1917, 'pt_BR', 'Calvados', 195),
(1918, 'pt_BR', 'Cantal', 196),
(1919, 'pt_BR', 'Charente', 197),
(1920, 'pt_BR', 'Charente-Maritime', 198),
(1921, 'pt_BR', 'Cher', 199),
(1922, 'pt_BR', 'Corrèze', 200),
(1923, 'pt_BR', 'Corse-du-Sud', 201),
(1924, 'pt_BR', 'Alta Córsega', 202),
(1925, 'pt_BR', 'Costa d\'OrCorrèze', 203),
(1926, 'pt_BR', 'Cotes d\'Armor', 204),
(1927, 'pt_BR', 'Creuse', 205),
(1928, 'pt_BR', 'Dordogne', 206),
(1929, 'pt_BR', 'Doubs', 207),
(1930, 'pt_BR', 'DrômeFinistère', 208),
(1931, 'pt_BR', 'Eure', 209),
(1932, 'pt_BR', 'Eure-et-Loir', 210),
(1933, 'pt_BR', 'Finistère', 211),
(1934, 'pt_BR', 'Gard', 212),
(1935, 'pt_BR', 'Haute-Garonne', 213),
(1936, 'pt_BR', 'Gers', 214),
(1937, 'pt_BR', 'Gironde', 215),
(1938, 'pt_BR', 'Hérault', 216),
(1939, 'pt_BR', 'Ille-et-Vilaine', 217),
(1940, 'pt_BR', 'Indre', 218),
(1941, 'pt_BR', 'Indre-et-Loire', 219),
(1942, 'pt_BR', 'Isère', 220),
(1943, 'pt_BR', 'Jura', 221),
(1944, 'pt_BR', 'Landes', 222),
(1945, 'pt_BR', 'Loir-et-Cher', 223),
(1946, 'pt_BR', 'Loire', 224),
(1947, 'pt_BR', 'Haute-Loire', 22),
(1948, 'pt_BR', 'Loire-Atlantique', 226),
(1949, 'pt_BR', 'Loiret', 227),
(1950, 'pt_BR', 'Lot', 228),
(1951, 'pt_BR', 'Lot e Garona', 229),
(1952, 'pt_BR', 'Lozère', 230),
(1953, 'pt_BR', 'Maine-et-Loire', 231),
(1954, 'pt_BR', 'Manche', 232),
(1955, 'pt_BR', 'Marne', 233),
(1956, 'pt_BR', 'Haute-Marne', 234),
(1957, 'pt_BR', 'Mayenne', 235),
(1958, 'pt_BR', 'Meurthe-et-Moselle', 236),
(1959, 'pt_BR', 'Meuse', 237),
(1960, 'pt_BR', 'Morbihan', 238),
(1961, 'pt_BR', 'Moselle', 239),
(1962, 'pt_BR', 'Nièvre', 240),
(1963, 'pt_BR', 'Nord', 241),
(1964, 'pt_BR', 'Oise', 242),
(1965, 'pt_BR', 'Orne', 243),
(1966, 'pt_BR', 'Pas-de-Calais', 244),
(1967, 'pt_BR', 'Puy-de-Dôme', 24),
(1968, 'pt_BR', 'Pirineus Atlânticos', 246),
(1969, 'pt_BR', 'Hautes-Pyrénées', 247),
(1970, 'pt_BR', 'Pirineus Orientais', 248),
(1971, 'pt_BR', 'Bas-Rhin', 249),
(1972, 'pt_BR', 'Alto Reno', 250),
(1973, 'pt_BR', 'Rhône', 251),
(1974, 'pt_BR', 'Haute-Saône', 252),
(1975, 'pt_BR', 'Saône-et-Loire', 253),
(1976, 'pt_BR', 'Sarthe', 25),
(1977, 'pt_BR', 'Savoie', 255),
(1978, 'pt_BR', 'Alta Sabóia', 256),
(1979, 'pt_BR', 'Paris', 257),
(1980, 'pt_BR', 'Seine-Maritime', 258),
(1981, 'pt_BR', 'Seine-et-Marne', 259),
(1982, 'pt_BR', 'Yvelines', 260),
(1983, 'pt_BR', 'Deux-Sèvres', 261),
(1984, 'pt_BR', 'Somme', 262),
(1985, 'pt_BR', 'Tarn', 263),
(1986, 'pt_BR', 'Tarn-et-Garonne', 264),
(1987, 'pt_BR', 'Var', 265),
(1988, 'pt_BR', 'Vaucluse', 266),
(1989, 'pt_BR', 'Compradora', 267),
(1990, 'pt_BR', 'Vienne', 268),
(1991, 'pt_BR', 'Haute-Vienne', 269),
(1992, 'pt_BR', 'Vosges', 270),
(1993, 'pt_BR', 'Yonne', 271),
(1994, 'pt_BR', 'Território de Belfort', 272),
(1995, 'pt_BR', 'Essonne', 273),
(1996, 'pt_BR', 'Altos do Sena', 274),
(1997, 'pt_BR', 'Seine-Saint-Denis', 275),
(1998, 'pt_BR', 'Val-de-Marne', 276),
(1999, 'pt_BR', 'Val-d\'Oise', 277),
(2000, 'pt_BR', 'Alba', 278),
(2001, 'pt_BR', 'Arad', 279),
(2002, 'pt_BR', 'Arges', 280),
(2003, 'pt_BR', 'Bacau', 281),
(2004, 'pt_BR', 'Bihor', 282),
(2005, 'pt_BR', 'Bistrita-Nasaud', 283),
(2006, 'pt_BR', 'Botosani', 284),
(2007, 'pt_BR', 'Brașov', 285),
(2008, 'pt_BR', 'Braila', 286),
(2009, 'pt_BR', 'Bucareste', 287),
(2010, 'pt_BR', 'Buzau', 288),
(2011, 'pt_BR', 'Caras-Severin', 289),
(2012, 'pt_BR', 'Călărași', 290),
(2013, 'pt_BR', 'Cluj', 291),
(2014, 'pt_BR', 'Constanta', 292),
(2015, 'pt_BR', 'Covasna', 29),
(2016, 'pt_BR', 'Dambovita', 294),
(2017, 'pt_BR', 'Dolj', 295),
(2018, 'pt_BR', 'Galati', 296),
(2019, 'pt_BR', 'Giurgiu', 297),
(2020, 'pt_BR', 'Gorj', 298),
(2021, 'pt_BR', 'Harghita', 299),
(2022, 'pt_BR', 'Hunedoara', 300),
(2023, 'pt_BR', 'Ialomita', 301),
(2024, 'pt_BR', 'Iasi', 302),
(2025, 'pt_BR', 'Ilfov', 303),
(2026, 'pt_BR', 'Maramures', 304),
(2027, 'pt_BR', 'Maramures', 305),
(2028, 'pt_BR', 'Mures', 306),
(2029, 'pt_BR', 'alemão', 307),
(2030, 'pt_BR', 'Olt', 308),
(2031, 'pt_BR', 'Prahova', 309),
(2032, 'pt_BR', 'Satu-Mare', 310),
(2033, 'pt_BR', 'Salaj', 311),
(2034, 'pt_BR', 'Sibiu', 312),
(2035, 'pt_BR', 'Suceava', 313),
(2036, 'pt_BR', 'Teleorman', 314),
(2037, 'pt_BR', 'Timis', 315),
(2038, 'pt_BR', 'Tulcea', 316),
(2039, 'pt_BR', 'Vaslui', 317),
(2040, 'pt_BR', 'dale', 318),
(2041, 'pt_BR', 'Vrancea', 319),
(2042, 'pt_BR', 'Lappi', 320),
(2043, 'pt_BR', 'Pohjois-Pohjanmaa', 321),
(2044, 'pt_BR', 'Kainuu', 322),
(2045, 'pt_BR', 'Pohjois-Karjala', 323),
(2046, 'pt_BR', 'Pohjois-Savo', 324),
(2047, 'pt_BR', 'Sul Savo', 325),
(2048, 'pt_BR', 'Ostrobothnia do sul', 326),
(2049, 'pt_BR', 'Pohjanmaa', 327),
(2050, 'pt_BR', 'Pirkanmaa', 328),
(2051, 'pt_BR', 'Satakunta', 329),
(2052, 'pt_BR', 'Keski-Pohjanmaa', 330),
(2053, 'pt_BR', 'Keski-Suomi', 331),
(2054, 'pt_BR', 'Varsinais-Suomi', 332),
(2055, 'pt_BR', 'Carélia do Sul', 333),
(2056, 'pt_BR', 'Päijät-Häme', 334),
(2057, 'pt_BR', 'Kanta-Häme', 335),
(2058, 'pt_BR', 'Uusimaa', 336),
(2059, 'pt_BR', 'Uusimaa', 337),
(2060, 'pt_BR', 'Kymenlaakso', 338),
(2061, 'pt_BR', 'Ahvenanmaa', 339),
(2062, 'pt_BR', 'Harjumaa', 340),
(2063, 'pt_BR', 'Hiiumaa', 341),
(2064, 'pt_BR', 'Ida-Virumaa', 342),
(2065, 'pt_BR', 'Condado de Jõgeva', 343),
(2066, 'pt_BR', 'Condado de Järva', 344),
(2067, 'pt_BR', 'Läänemaa', 345),
(2068, 'pt_BR', 'Condado de Lääne-Viru', 346),
(2069, 'pt_BR', 'Condado de Põlva', 347),
(2070, 'pt_BR', 'Condado de Pärnu', 348),
(2071, 'pt_BR', 'Raplamaa', 349),
(2072, 'pt_BR', 'Saaremaa', 350),
(2073, 'pt_BR', 'Tartumaa', 351),
(2074, 'pt_BR', 'Valgamaa', 352),
(2075, 'pt_BR', 'Viljandimaa', 353),
(2076, 'pt_BR', 'Võrumaa', 354),
(2077, 'pt_BR', 'Daugavpils', 355),
(2078, 'pt_BR', 'Jelgava', 356),
(2079, 'pt_BR', 'Jekabpils', 357),
(2080, 'pt_BR', 'Jurmala', 358),
(2081, 'pt_BR', 'Liepaja', 359),
(2082, 'pt_BR', 'Liepaja County', 360),
(2083, 'pt_BR', 'Rezekne', 361),
(2084, 'pt_BR', 'Riga', 362),
(2085, 'pt_BR', 'Condado de Riga', 363),
(2086, 'pt_BR', 'Valmiera', 364),
(2087, 'pt_BR', 'Ventspils', 365),
(2088, 'pt_BR', 'Aglonas novads', 366),
(2089, 'pt_BR', 'Aizkraukles novads', 367),
(2090, 'pt_BR', 'Aizputes novads', 368),
(2091, 'pt_BR', 'Condado de Akniste', 369),
(2092, 'pt_BR', 'Alojas novads', 370),
(2093, 'pt_BR', 'Alsungas novads', 371),
(2094, 'pt_BR', 'Aluksne County', 372),
(2095, 'pt_BR', 'Amatas novads', 373),
(2096, 'pt_BR', 'Macacos novads', 374),
(2097, 'pt_BR', 'Auces novads', 375),
(2098, 'pt_BR', 'Babītes novads', 376),
(2099, 'pt_BR', 'Baldones novads', 377),
(2100, 'pt_BR', 'Baltinavas novads', 378),
(2101, 'pt_BR', 'Balvu novads', 379),
(2102, 'pt_BR', 'Bauskas novads', 380),
(2103, 'pt_BR', 'Condado de Beverina', 381),
(2104, 'pt_BR', 'Condado de Broceni', 382),
(2105, 'pt_BR', 'Burtnieku novads', 383),
(2106, 'pt_BR', 'Carnikavas novads', 384),
(2107, 'pt_BR', 'Cesvaines novads', 385),
(2108, 'pt_BR', 'Ciblas novads', 386),
(2109, 'pt_BR', 'Cesis county', 387),
(2110, 'pt_BR', 'Dagdas novads', 388),
(2111, 'pt_BR', 'Daugavpils novads', 389),
(2112, 'pt_BR', 'Dobeles novads', 390),
(2113, 'pt_BR', 'Dundagas novads', 391),
(2114, 'pt_BR', 'Durbes novads', 392),
(2115, 'pt_BR', 'Engad novads', 393),
(2116, 'pt_BR', 'Garkalnes novads', 394),
(2117, 'pt_BR', 'O condado de Grobiņa', 395),
(2118, 'pt_BR', 'Gulbenes novads', 396),
(2119, 'pt_BR', 'Iecavas novads', 397),
(2120, 'pt_BR', 'Ikskile county', 398),
(2121, 'pt_BR', 'Ilūkste county', 399),
(2122, 'pt_BR', 'Condado de Inčukalns', 400),
(2123, 'pt_BR', 'Jaunjelgavas novads', 401),
(2124, 'pt_BR', 'Jaunpiebalgas novads', 402),
(2125, 'pt_BR', 'Jaunpils novads', 403),
(2126, 'pt_BR', 'Jelgavas novads', 404),
(2127, 'pt_BR', 'Jekabpils county', 405),
(2128, 'pt_BR', 'Kandavas novads', 406),
(2129, 'pt_BR', 'Kokneses novads', 407),
(2130, 'pt_BR', 'Krimuldas novads', 408),
(2131, 'pt_BR', 'Krustpils novads', 409),
(2132, 'pt_BR', 'Condado de Kraslava', 410),
(2133, 'pt_BR', 'Condado de Kuldīga', 411),
(2134, 'pt_BR', 'Condado de Kārsava', 412),
(2135, 'pt_BR', 'Condado de Lielvarde', 413),
(2136, 'pt_BR', 'Condado de Limbaži', 414),
(2137, 'pt_BR', 'O distrito de Lubāna', 415),
(2138, 'pt_BR', 'Ludzas novads', 416),
(2139, 'pt_BR', 'Ligatne county', 417),
(2140, 'pt_BR', 'Livani county', 418),
(2141, 'pt_BR', 'Madonas novads', 419),
(2142, 'pt_BR', 'Mazsalacas novads', 420),
(2143, 'pt_BR', 'Mālpils county', 421),
(2144, 'pt_BR', 'Mārupe county', 422),
(2145, 'pt_BR', 'O condado de Naukšēni', 423),
(2146, 'pt_BR', 'Neretas novads', 424),
(2147, 'pt_BR', 'Nīca county', 425),
(2148, 'pt_BR', 'Ogres novads', 426),
(2149, 'pt_BR', 'Olaines novads', 427),
(2150, 'pt_BR', 'Ozolnieku novads', 428),
(2151, 'pt_BR', 'Preiļi county', 429),
(2152, 'pt_BR', 'Priekules novads', 430),
(2153, 'pt_BR', 'Condado de Priekuļi', 431),
(2154, 'pt_BR', 'Moving county', 432),
(2155, 'pt_BR', 'Condado de Pavilosta', 433),
(2156, 'pt_BR', 'Condado de Plavinas', 434),
(2157, 'pt_BR', 'Raunas novads', 435),
(2158, 'pt_BR', 'Condado de Riebiņi', 436),
(2159, 'pt_BR', 'Rojas novads', 437),
(2160, 'pt_BR', 'Ropazi county', 438),
(2161, 'pt_BR', 'Rucavas novads', 439),
(2162, 'pt_BR', 'Rugāji county', 440),
(2163, 'pt_BR', 'Rundāle county', 441),
(2164, 'pt_BR', 'Rezekne county', 442),
(2165, 'pt_BR', 'Rūjiena county', 443),
(2166, 'pt_BR', 'O município de Salacgriva', 444),
(2167, 'pt_BR', 'Salas novads', 445),
(2168, 'pt_BR', 'Salaspils novads', 446),
(2169, 'pt_BR', 'Saldus novads', 447),
(2170, 'pt_BR', 'Saulkrastu novads', 448),
(2171, 'pt_BR', 'Siguldas novads', 449),
(2172, 'pt_BR', 'Skrundas novads', 450),
(2173, 'pt_BR', 'Skrīveri county', 451),
(2174, 'pt_BR', 'Smiltenes novads', 452),
(2175, 'pt_BR', 'Condado de Stopini', 453),
(2176, 'pt_BR', 'Condado de Strenči', 454),
(2177, 'pt_BR', 'Região de semeadura', 455),
(2178, 'pt_BR', 'Talsu novads', 456),
(2179, 'pt_BR', 'Tukuma novads', 457),
(2180, 'pt_BR', 'Condado de Tērvete', 458),
(2181, 'pt_BR', 'O condado de Vaiņode', 459),
(2182, 'pt_BR', 'Valkas novads', 460),
(2183, 'pt_BR', 'Valmieras novads', 461),
(2184, 'pt_BR', 'Varaklani county', 462),
(2185, 'pt_BR', 'Vecpiebalgas novads', 463),
(2186, 'pt_BR', 'Vecumnieku novads', 464),
(2187, 'pt_BR', 'Ventspils novads', 465),
(2188, 'pt_BR', 'Condado de Viesite', 466),
(2189, 'pt_BR', 'Condado de Vilaka', 467),
(2190, 'pt_BR', 'Vilani county', 468),
(2191, 'pt_BR', 'Condado de Varkava', 469),
(2192, 'pt_BR', 'Zilupes novads', 470),
(2193, 'pt_BR', 'Adazi county', 471),
(2194, 'pt_BR', 'Erglu county', 472),
(2195, 'pt_BR', 'Kegums county', 473),
(2196, 'pt_BR', 'Kekava county', 474),
(2197, 'pt_BR', 'Alytaus Apskritis', 475),
(2198, 'pt_BR', 'Kauno Apskritis', 476),
(2199, 'pt_BR', 'Condado de Klaipeda', 477),
(2200, 'pt_BR', 'Marijampolė county', 478),
(2201, 'pt_BR', 'Panevezys county', 479),
(2202, 'pt_BR', 'Siauliai county', 480),
(2203, 'pt_BR', 'Taurage county', 481),
(2204, 'pt_BR', 'Telšiai county', 482),
(2205, 'pt_BR', 'Utenos Apskritis', 483),
(2206, 'pt_BR', 'Vilniaus Apskritis', 484),
(2207, 'pt_BR', 'Acre', 485),
(2208, 'pt_BR', 'Alagoas', 486),
(2209, 'pt_BR', 'Amapá', 487),
(2210, 'pt_BR', 'Amazonas', 488),
(2211, 'pt_BR', 'Bahia', 489),
(2212, 'pt_BR', 'Ceará', 490),
(2213, 'pt_BR', 'Espírito Santo', 491),
(2214, 'pt_BR', 'Goiás', 492),
(2215, 'pt_BR', 'Maranhão', 493),
(2216, 'pt_BR', 'Mato Grosso', 494),
(2217, 'pt_BR', 'Mato Grosso do Sul', 495),
(2218, 'pt_BR', 'Minas Gerais', 496),
(2219, 'pt_BR', 'Pará', 497),
(2220, 'pt_BR', 'Paraíba', 498),
(2221, 'pt_BR', 'Paraná', 499),
(2222, 'pt_BR', 'Pernambuco', 500),
(2223, 'pt_BR', 'Piauí', 501),
(2224, 'pt_BR', 'Rio de Janeiro', 502),
(2225, 'pt_BR', 'Rio Grande do Norte', 503),
(2226, 'pt_BR', 'Rio Grande do Sul', 504),
(2227, 'pt_BR', 'Rondônia', 505),
(2228, 'pt_BR', 'Roraima', 506),
(2229, 'pt_BR', 'Santa Catarina', 507),
(2230, 'pt_BR', 'São Paulo', 508),
(2231, 'pt_BR', 'Sergipe', 509),
(2232, 'pt_BR', 'Tocantins', 510),
(2233, 'pt_BR', 'Distrito Federal', 511),
(2234, 'pt_BR', 'Condado de Zagreb', 512),
(2235, 'pt_BR', 'Condado de Krapina-Zagorje', 513),
(2236, 'pt_BR', 'Condado de Sisak-Moslavina', 514),
(2237, 'pt_BR', 'Condado de Karlovac', 515),
(2238, 'pt_BR', 'Concelho de Varaždin', 516),
(2239, 'pt_BR', 'Condado de Koprivnica-Križevci', 517),
(2240, 'pt_BR', 'Condado de Bjelovar-Bilogora', 518),
(2241, 'pt_BR', 'Condado de Primorje-Gorski kotar', 519),
(2242, 'pt_BR', 'Condado de Lika-Senj', 520),
(2243, 'pt_BR', 'Condado de Virovitica-Podravina', 521),
(2244, 'pt_BR', 'Condado de Požega-Slavonia', 522),
(2245, 'pt_BR', 'Condado de Brod-Posavina', 523),
(2246, 'pt_BR', 'Condado de Zadar', 524),
(2247, 'pt_BR', 'Condado de Osijek-Baranja', 525),
(2248, 'pt_BR', 'Condado de Šibenik-Knin', 526),
(2249, 'pt_BR', 'Condado de Vukovar-Srijem', 527),
(2250, 'pt_BR', 'Condado de Split-Dalmácia', 528),
(2251, 'pt_BR', 'Condado de Ístria', 529),
(2252, 'pt_BR', 'Condado de Dubrovnik-Neretva', 530),
(2253, 'pt_BR', 'Međimurska županija', 531),
(2254, 'pt_BR', 'Grad Zagreb', 532),
(2255, 'pt_BR', 'Ilhas Andaman e Nicobar', 533),
(2256, 'pt_BR', 'Andhra Pradesh', 534),
(2257, 'pt_BR', 'Arunachal Pradesh', 535),
(2258, 'pt_BR', 'Assam', 536),
(2259, 'pt_BR', 'Bihar', 537),
(2260, 'pt_BR', 'Chandigarh', 538),
(2261, 'pt_BR', 'Chhattisgarh', 539),
(2262, 'pt_BR', 'Dadra e Nagar Haveli', 540),
(2263, 'pt_BR', 'Daman e Diu', 541),
(2264, 'pt_BR', 'Delhi', 542),
(2265, 'pt_BR', 'Goa', 543),
(2266, 'pt_BR', 'Gujarat', 544),
(2267, 'pt_BR', 'Haryana', 545),
(2268, 'pt_BR', 'Himachal Pradesh', 546),
(2269, 'pt_BR', 'Jammu e Caxemira', 547),
(2270, 'pt_BR', 'Jharkhand', 548),
(2271, 'pt_BR', 'Karnataka', 549),
(2272, 'pt_BR', 'Kerala', 550),
(2273, 'pt_BR', 'Lakshadweep', 551),
(2274, 'pt_BR', 'Madhya Pradesh', 552),
(2275, 'pt_BR', 'Maharashtra', 553),
(2276, 'pt_BR', 'Manipur', 554),
(2277, 'pt_BR', 'Meghalaya', 555),
(2278, 'pt_BR', 'Mizoram', 556),
(2279, 'pt_BR', 'Nagaland', 557),
(2280, 'pt_BR', 'Odisha', 558),
(2281, 'pt_BR', 'Puducherry', 559),
(2282, 'pt_BR', 'Punjab', 560),
(2283, 'pt_BR', 'Rajasthan', 561),
(2284, 'pt_BR', 'Sikkim', 562),
(2285, 'pt_BR', 'Tamil Nadu', 563),
(2286, 'pt_BR', 'Telangana', 564),
(2287, 'pt_BR', 'Tripura', 565),
(2288, 'pt_BR', 'Uttar Pradesh', 566),
(2289, 'pt_BR', 'Uttarakhand', 567),
(2290, 'pt_BR', 'Bengala Ocidental', 568);

-- --------------------------------------------------------

--
-- Table structure for table `country_translations`
--

CREATE TABLE `country_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `country_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `country_translations`
--

INSERT INTO `country_translations` (`id`, `locale`, `name`, `country_id`) VALUES
(1, 'ar', 'أفغانستان', 1),
(2, 'ar', 'جزر آلاند', 2),
(3, 'ar', 'ألبانيا', 3),
(4, 'ar', 'الجزائر', 4),
(5, 'ar', 'ساموا الأمريكية', 5),
(6, 'ar', 'أندورا', 6),
(7, 'ar', 'أنغولا', 7),
(8, 'ar', 'أنغيلا', 8),
(9, 'ar', 'القارة القطبية الجنوبية', 9),
(10, 'ar', 'أنتيغوا وبربودا', 10),
(11, 'ar', 'الأرجنتين', 11),
(12, 'ar', 'أرمينيا', 12),
(13, 'ar', 'أروبا', 13),
(14, 'ar', 'جزيرة الصعود', 14),
(15, 'ar', 'أستراليا', 15),
(16, 'ar', 'النمسا', 16),
(17, 'ar', 'أذربيجان', 17),
(18, 'ar', 'الباهاما', 18),
(19, 'ar', 'البحرين', 19),
(20, 'ar', 'بنغلاديش', 20),
(21, 'ar', 'بربادوس', 21),
(22, 'ar', 'روسيا البيضاء', 22),
(23, 'ar', 'بلجيكا', 23),
(24, 'ar', 'بليز', 24),
(25, 'ar', 'بنين', 25),
(26, 'ar', 'برمودا', 26),
(27, 'ar', 'بوتان', 27),
(28, 'ar', 'بوليفيا', 28),
(29, 'ar', 'البوسنة والهرسك', 29),
(30, 'ar', 'بوتسوانا', 30),
(31, 'ar', 'البرازيل', 31),
(32, 'ar', 'إقليم المحيط البريطاني الهندي', 32),
(33, 'ar', 'جزر فيرجن البريطانية', 33),
(34, 'ar', 'بروناي', 34),
(35, 'ar', 'بلغاريا', 35),
(36, 'ar', 'بوركينا فاسو', 36),
(37, 'ar', 'بوروندي', 37),
(38, 'ar', 'كمبوديا', 38),
(39, 'ar', 'الكاميرون', 39),
(40, 'ar', 'كندا', 40),
(41, 'ar', 'جزر الكناري', 41),
(42, 'ar', 'الرأس الأخضر', 42),
(43, 'ar', 'الكاريبي هولندا', 43),
(44, 'ar', 'جزر كايمان', 44),
(45, 'ar', 'جمهورية افريقيا الوسطى', 45),
(46, 'ar', 'سبتة ومليلية', 46),
(47, 'ar', 'تشاد', 47),
(48, 'ar', 'تشيلي', 48),
(49, 'ar', 'الصين', 49),
(50, 'ar', 'جزيرة الكريسماس', 50),
(51, 'ar', 'جزر كوكوس (كيلينغ)', 51),
(52, 'ar', 'كولومبيا', 52),
(53, 'ar', 'جزر القمر', 53),
(54, 'ar', 'الكونغو - برازافيل', 54),
(55, 'ar', 'الكونغو - كينشاسا', 55),
(56, 'ar', 'جزر كوك', 56),
(57, 'ar', 'كوستاريكا', 57),
(58, 'ar', 'ساحل العاج', 58),
(59, 'ar', 'كرواتيا', 59),
(60, 'ar', 'كوبا', 60),
(61, 'ar', 'كوراساو', 61),
(62, 'ar', 'قبرص', 62),
(63, 'ar', 'التشيك', 63),
(64, 'ar', 'الدنمارك', 64),
(65, 'ar', 'دييغو غارسيا', 65),
(66, 'ar', 'جيبوتي', 66),
(67, 'ar', 'دومينيكا', 67),
(68, 'ar', 'جمهورية الدومنيكان', 68),
(69, 'ar', 'الإكوادور', 69),
(70, 'ar', 'مصر', 70),
(71, 'ar', 'السلفادور', 71),
(72, 'ar', 'غينيا الإستوائية', 72),
(73, 'ar', 'إريتريا', 73),
(74, 'ar', 'استونيا', 74),
(75, 'ar', 'أثيوبيا', 75),
(76, 'ar', 'منطقة اليورو', 76),
(77, 'ar', 'جزر فوكلاند', 77),
(78, 'ar', 'جزر فاروس', 78),
(79, 'ar', 'فيجي', 79),
(80, 'ar', 'فنلندا', 80),
(81, 'ar', 'فرنسا', 81),
(82, 'ar', 'غيانا الفرنسية', 82),
(83, 'ar', 'بولينيزيا الفرنسية', 83),
(84, 'ar', 'المناطق الجنوبية لفرنسا', 84),
(85, 'ar', 'الغابون', 85),
(86, 'ar', 'غامبيا', 86),
(87, 'ar', 'جورجيا', 87),
(88, 'ar', 'ألمانيا', 88),
(89, 'ar', 'غانا', 89),
(90, 'ar', 'جبل طارق', 90),
(91, 'ar', 'اليونان', 91),
(92, 'ar', 'الأرض الخضراء', 92),
(93, 'ar', 'غرينادا', 93),
(94, 'ar', 'جوادلوب', 94),
(95, 'ar', 'غوام', 95),
(96, 'ar', 'غواتيمالا', 96),
(97, 'ar', 'غيرنسي', 97),
(98, 'ar', 'غينيا', 98),
(99, 'ar', 'غينيا بيساو', 99),
(100, 'ar', 'غيانا', 100),
(101, 'ar', 'هايتي', 101),
(102, 'ar', 'هندوراس', 102),
(103, 'ar', 'هونج كونج SAR الصين', 103),
(104, 'ar', 'هنغاريا', 104),
(105, 'ar', 'أيسلندا', 105),
(106, 'ar', 'الهند', 106),
(107, 'ar', 'إندونيسيا', 107),
(108, 'ar', 'إيران', 108),
(109, 'ar', 'العراق', 109),
(110, 'ar', 'أيرلندا', 110),
(111, 'ar', 'جزيرة آيل أوف مان', 111),
(112, 'ar', 'إسرائيل', 112),
(113, 'ar', 'إيطاليا', 113),
(114, 'ar', 'جامايكا', 114),
(115, 'ar', 'اليابان', 115),
(116, 'ar', 'جيرسي', 116),
(117, 'ar', 'الأردن', 117),
(118, 'ar', 'كازاخستان', 118),
(119, 'ar', 'كينيا', 119),
(120, 'ar', 'كيريباس', 120),
(121, 'ar', 'كوسوفو', 121),
(122, 'ar', 'الكويت', 122),
(123, 'ar', 'قرغيزستان', 123),
(124, 'ar', 'لاوس', 124),
(125, 'ar', 'لاتفيا', 125),
(126, 'ar', 'لبنان', 126),
(127, 'ar', 'ليسوتو', 127),
(128, 'ar', 'ليبيريا', 128),
(129, 'ar', 'ليبيا', 129),
(130, 'ar', 'ليختنشتاين', 130),
(131, 'ar', 'ليتوانيا', 131),
(132, 'ar', 'لوكسمبورغ', 132),
(133, 'ar', 'ماكاو SAR الصين', 133),
(134, 'ar', 'مقدونيا', 134),
(135, 'ar', 'مدغشقر', 135),
(136, 'ar', 'مالاوي', 136),
(137, 'ar', 'ماليزيا', 137),
(138, 'ar', 'جزر المالديف', 138),
(139, 'ar', 'مالي', 139),
(140, 'ar', 'مالطا', 140),
(141, 'ar', 'جزر مارشال', 141),
(142, 'ar', 'مارتينيك', 142),
(143, 'ar', 'موريتانيا', 143),
(144, 'ar', 'موريشيوس', 144),
(145, 'ar', 'ضائع', 145),
(146, 'ar', 'المكسيك', 146),
(147, 'ar', 'ميكرونيزيا', 147),
(148, 'ar', 'مولدوفا', 148),
(149, 'ar', 'موناكو', 149),
(150, 'ar', 'منغوليا', 150),
(151, 'ar', 'الجبل الأسود', 151),
(152, 'ar', 'مونتسيرات', 152),
(153, 'ar', 'المغرب', 153),
(154, 'ar', 'موزمبيق', 154),
(155, 'ar', 'ميانمار (بورما)', 155),
(156, 'ar', 'ناميبيا', 156),
(157, 'ar', 'ناورو', 157),
(158, 'ar', 'نيبال', 158),
(159, 'ar', 'نيبال', 159),
(160, 'ar', 'كاليدونيا الجديدة', 160),
(161, 'ar', 'نيوزيلاندا', 161),
(162, 'ar', 'نيكاراغوا', 162),
(163, 'ar', 'النيجر', 163),
(164, 'ar', 'نيجيريا', 164),
(165, 'ar', 'نيوي', 165),
(166, 'ar', 'جزيرة نورفولك', 166),
(167, 'ar', 'كوريا الشماليه', 167),
(168, 'ar', 'جزر مريانا الشمالية', 168),
(169, 'ar', 'النرويج', 169),
(170, 'ar', 'سلطنة عمان', 170),
(171, 'ar', 'باكستان', 171),
(172, 'ar', 'بالاو', 172),
(173, 'ar', 'الاراضي الفلسطينية', 173),
(174, 'ar', 'بناما', 174),
(175, 'ar', 'بابوا غينيا الجديدة', 175),
(176, 'ar', 'باراغواي', 176),
(177, 'ar', 'بيرو', 177),
(178, 'ar', 'الفلبين', 178),
(179, 'ar', 'جزر بيتكيرن', 179),
(180, 'ar', 'بولندا', 180),
(181, 'ar', 'البرتغال', 181),
(182, 'ar', 'بورتوريكو', 182),
(183, 'ar', 'دولة قطر', 183),
(184, 'ar', 'جمع شمل', 184),
(185, 'ar', 'رومانيا', 185),
(186, 'ar', 'روسيا', 186),
(187, 'ar', 'رواندا', 187),
(188, 'ar', 'ساموا', 188),
(189, 'ar', 'سان مارينو', 189),
(190, 'ar', 'سانت كيتس ونيفيس', 190),
(191, 'ar', 'المملكة العربية السعودية', 191),
(192, 'ar', 'السنغال', 192),
(193, 'ar', 'صربيا', 193),
(194, 'ar', 'سيشيل', 194),
(195, 'ar', 'سيراليون', 195),
(196, 'ar', 'سنغافورة', 196),
(197, 'ar', 'سينت مارتن', 197),
(198, 'ar', 'سلوفاكيا', 198),
(199, 'ar', 'سلوفينيا', 199),
(200, 'ar', 'جزر سليمان', 200),
(201, 'ar', 'الصومال', 201),
(202, 'ar', 'جنوب أفريقيا', 202),
(203, 'ar', 'جورجيا الجنوبية وجزر ساندويتش الجنوبية', 203),
(204, 'ar', 'كوريا الجنوبية', 204),
(205, 'ar', 'جنوب السودان', 205),
(206, 'ar', 'إسبانيا', 206),
(207, 'ar', 'سيريلانكا', 207),
(208, 'ar', 'سانت بارتيليمي', 208),
(209, 'ar', 'سانت هيلانة', 209),
(210, 'ar', 'سانت كيتس ونيفيس', 210),
(211, 'ar', 'شارع لوسيا', 211),
(212, 'ar', 'سانت مارتن', 212),
(213, 'ar', 'سانت بيير وميكلون', 213),
(214, 'ar', 'سانت فنسنت وجزر غرينادين', 214),
(215, 'ar', 'السودان', 215),
(216, 'ar', 'سورينام', 216),
(217, 'ar', 'سفالبارد وجان ماين', 217),
(218, 'ar', 'سوازيلاند', 218),
(219, 'ar', 'السويد', 219),
(220, 'ar', 'سويسرا', 220),
(221, 'ar', 'سوريا', 221),
(222, 'ar', 'تايوان', 222),
(223, 'ar', 'طاجيكستان', 223),
(224, 'ar', 'تنزانيا', 224),
(225, 'ar', 'تايلاند', 225),
(226, 'ar', 'تيمور', 226),
(227, 'ar', 'توجو', 227),
(228, 'ar', 'توكيلاو', 228),
(229, 'ar', 'تونغا', 229),
(230, 'ar', 'ترينيداد وتوباغو', 230),
(231, 'ar', 'تريستان دا كونها', 231),
(232, 'ar', 'تونس', 232),
(233, 'ar', 'ديك رومي', 233),
(234, 'ar', 'تركمانستان', 234),
(235, 'ar', 'جزر تركس وكايكوس', 235),
(236, 'ar', 'توفالو', 236),
(237, 'ar', 'جزر الولايات المتحدة البعيدة', 237),
(238, 'ar', 'جزر فيرجن الأمريكية', 238),
(239, 'ar', 'أوغندا', 239),
(240, 'ar', 'أوكرانيا', 240),
(241, 'ar', 'الإمارات العربية المتحدة', 241),
(242, 'ar', 'المملكة المتحدة', 242),
(243, 'ar', 'الأمم المتحدة', 243),
(244, 'ar', 'الولايات المتحدة الأمريكية', 244),
(245, 'ar', 'أوروغواي', 245),
(246, 'ar', 'أوزبكستان', 246),
(247, 'ar', 'فانواتو', 247),
(248, 'ar', 'مدينة الفاتيكان', 248),
(249, 'ar', 'فنزويلا', 249),
(250, 'ar', 'فيتنام', 250),
(251, 'ar', 'واليس وفوتونا', 251),
(252, 'ar', 'الصحراء الغربية', 252),
(253, 'ar', 'اليمن', 253),
(254, 'ar', 'زامبيا', 254),
(255, 'ar', 'زيمبابوي', 255),
(256, 'es', 'Afganistán', 1),
(257, 'es', 'Islas Åland', 2),
(258, 'es', 'Albania', 3),
(259, 'es', 'Argelia', 4),
(260, 'es', 'Samoa Americana', 5),
(261, 'es', 'Andorra', 6),
(262, 'es', 'Angola', 7),
(263, 'es', 'Anguila', 8),
(264, 'es', 'Antártida', 9),
(265, 'es', 'Antigua y Barbuda', 10),
(266, 'es', 'Argentina', 11),
(267, 'es', 'Armenia', 12),
(268, 'es', 'Aruba', 13),
(269, 'es', 'Isla Ascensión', 14),
(270, 'es', 'Australia', 15),
(271, 'es', 'Austria', 16),
(272, 'es', 'Azerbaiyán', 17),
(273, 'es', 'Bahamas', 18),
(274, 'es', 'Bahrein', 19),
(275, 'es', 'Bangladesh', 20),
(276, 'es', 'Barbados', 21),
(277, 'es', 'Bielorrusia', 22),
(278, 'es', 'Bélgica', 23),
(279, 'es', 'Belice', 24),
(280, 'es', 'Benín', 25),
(281, 'es', 'Islas Bermudas', 26),
(282, 'es', 'Bhután', 27),
(283, 'es', 'Bolivia', 28),
(284, 'es', 'Bosnia y Herzegovina', 29),
(285, 'es', 'Botsuana', 30),
(286, 'es', 'Brasil', 31),
(287, 'es', 'Territorio Británico del Océano índico', 32),
(288, 'es', 'Islas Vírgenes Británicas', 33),
(289, 'es', 'Brunéi', 34),
(290, 'es', 'Bulgaria', 35),
(291, 'es', 'Burkina Faso', 36),
(292, 'es', 'Burundi', 37),
(293, 'es', 'Camboya', 38),
(294, 'es', 'Camerún', 39),
(295, 'es', 'Canadá', 40),
(296, 'es', 'Islas Canarias', 41),
(297, 'es', 'Cabo Verde', 42),
(298, 'es', 'Caribe Neerlandés', 43),
(299, 'es', 'Islas Caimán', 44),
(300, 'es', 'República Centroafricana', 45),
(301, 'es', 'Ceuta y Melilla', 46),
(302, 'es', 'Chad', 47),
(303, 'es', 'Chile', 48),
(304, 'es', 'China', 49),
(305, 'es', 'Isla de Navidad', 50),
(306, 'es', 'Islas Cocos', 51),
(307, 'es', 'Colombia', 52),
(308, 'es', 'Comoras', 53),
(309, 'es', 'República del Congo', 54),
(310, 'es', 'República Democrática del Congo', 55),
(311, 'es', 'Islas Cook', 56),
(312, 'es', 'Costa Rica', 57),
(313, 'es', 'Costa de Marfil', 58),
(314, 'es', 'Croacia', 59),
(315, 'es', 'Cuba', 60),
(316, 'es', 'Curazao', 61),
(317, 'es', 'Chipre', 62),
(318, 'es', 'República Checa', 63),
(319, 'es', 'Dinamarca', 64),
(320, 'es', 'Diego García', 65),
(321, 'es', 'Yibuti', 66),
(322, 'es', 'Dominica', 67),
(323, 'es', 'República Dominicana', 68),
(324, 'es', 'Ecuador', 69),
(325, 'es', 'Egipto', 70),
(326, 'es', 'El Salvador', 71),
(327, 'es', 'Guinea Ecuatorial', 72),
(328, 'es', 'Eritrea', 73),
(329, 'es', 'Estonia', 74),
(330, 'es', 'Etiopía', 75),
(331, 'es', 'Europa', 76),
(332, 'es', 'Islas Malvinas', 77),
(333, 'es', 'Islas Feroe', 78),
(334, 'es', 'Fiyi', 79),
(335, 'es', 'Finlandia', 80),
(336, 'es', 'Francia', 81),
(337, 'es', 'Guayana Francesa', 82),
(338, 'es', 'Polinesia Francesa', 83),
(339, 'es', 'Territorios Australes y Antárticas Franceses', 84),
(340, 'es', 'Gabón', 85),
(341, 'es', 'Gambia', 86),
(342, 'es', 'Georgia', 87),
(343, 'es', 'Alemania', 88),
(344, 'es', 'Ghana', 89),
(345, 'es', 'Gibraltar', 90),
(346, 'es', 'Grecia', 91),
(347, 'es', 'Groenlandia', 92),
(348, 'es', 'Granada', 93),
(349, 'es', 'Guadalupe', 94),
(350, 'es', 'Guam', 95),
(351, 'es', 'Guatemala', 96),
(352, 'es', 'Guernsey', 97),
(353, 'es', 'Guinea', 98),
(354, 'es', 'Guinea-Bisáu', 99),
(355, 'es', 'Guyana', 100),
(356, 'es', 'Haití', 101),
(357, 'es', 'Honduras', 102),
(358, 'es', 'Hong Kong', 103),
(359, 'es', 'Hungría', 104),
(360, 'es', 'Islandia', 105),
(361, 'es', 'India', 106),
(362, 'es', 'Indonesia', 107),
(363, 'es', 'Irán', 108),
(364, 'es', 'Irak', 109),
(365, 'es', 'Irlanda', 110),
(366, 'es', 'Isla de Man', 111),
(367, 'es', 'Israel', 112),
(368, 'es', 'Italia', 113),
(369, 'es', 'Jamaica', 114),
(370, 'es', 'Japón', 115),
(371, 'es', 'Jersey', 116),
(372, 'es', 'Jordania', 117),
(373, 'es', 'Kazajistán', 118),
(374, 'es', 'Kenia', 119),
(375, 'es', 'Kiribati', 120),
(376, 'es', 'Kosovo', 121),
(377, 'es', 'Kuwait', 122),
(378, 'es', 'Kirguistán', 123),
(379, 'es', 'Laos', 124),
(380, 'es', 'Letonia', 125),
(381, 'es', 'Líbano', 126),
(382, 'es', 'Lesoto', 127),
(383, 'es', 'Liberia', 128),
(384, 'es', 'Libia', 129),
(385, 'es', 'Liechtenstein', 130),
(386, 'es', 'Lituania', 131),
(387, 'es', 'Luxemburgo', 132),
(388, 'es', 'Macao', 133),
(389, 'es', 'Macedonia', 134),
(390, 'es', 'Madagascar', 135),
(391, 'es', 'Malaui', 136),
(392, 'es', 'Malasia', 137),
(393, 'es', 'Maldivas', 138),
(394, 'es', 'Malí', 139),
(395, 'es', 'Malta', 140),
(396, 'es', 'Islas Marshall', 141),
(397, 'es', 'Martinica', 142),
(398, 'es', 'Mauritania', 143),
(399, 'es', 'Mauricio', 144),
(400, 'es', 'Mayotte', 145),
(401, 'es', 'México', 146),
(402, 'es', 'Micronesia', 147),
(403, 'es', 'Moldavia', 148),
(404, 'es', 'Mónaco', 149),
(405, 'es', 'Mongolia', 150),
(406, 'es', 'Montenegro', 151),
(407, 'es', 'Montserrat', 152),
(408, 'es', 'Marruecos', 153),
(409, 'es', 'Mozambique', 154),
(410, 'es', 'Birmania', 155),
(411, 'es', 'Namibia', 156),
(412, 'es', 'Nauru', 157),
(413, 'es', 'Nepal', 158),
(414, 'es', 'Holanda', 159),
(415, 'es', 'Nueva Caledonia', 160),
(416, 'es', 'Nueva Zelanda', 161),
(417, 'es', 'Nicaragua', 162),
(418, 'es', 'Níger', 163),
(419, 'es', 'Nigeria', 164),
(420, 'es', 'Niue', 165),
(421, 'es', 'Isla Norfolk', 166),
(422, 'es', 'Corea del Norte', 167),
(423, 'es', 'Islas Marianas del Norte', 168),
(424, 'es', 'Noruega', 169),
(425, 'es', 'Omán', 170),
(426, 'es', 'Pakistán', 171),
(427, 'es', 'Palaos', 172),
(428, 'es', 'Palestina', 173),
(429, 'es', 'Panamá', 174),
(430, 'es', 'Papúa Nueva Guinea', 175),
(431, 'es', 'Paraguay', 176),
(432, 'es', 'Perú', 177),
(433, 'es', 'Filipinas', 178),
(434, 'es', 'Islas Pitcairn', 179),
(435, 'es', 'Polonia', 180),
(436, 'es', 'Portugal', 181),
(437, 'es', 'Puerto Rico', 182),
(438, 'es', 'Catar', 183),
(439, 'es', 'Reunión', 184),
(440, 'es', 'Rumania', 185),
(441, 'es', 'Rusia', 186),
(442, 'es', 'Ruanda', 187),
(443, 'es', 'Samoa', 188),
(444, 'es', 'San Marino', 189),
(445, 'es', 'Santo Tomé y Príncipe', 190),
(446, 'es', 'Arabia Saudita', 191),
(447, 'es', 'Senegal', 192),
(448, 'es', 'Serbia', 193),
(449, 'es', 'Seychelles', 194),
(450, 'es', 'Sierra Leona', 195),
(451, 'es', 'Singapur', 196),
(452, 'es', 'San Martín', 197),
(453, 'es', 'Eslovaquia', 198),
(454, 'es', 'Eslovenia', 199),
(455, 'es', 'Islas Salomón', 200),
(456, 'es', 'Somalia', 201),
(457, 'es', 'Sudáfrica', 202),
(458, 'es', 'Islas Georgias del Sur y Sandwich del Sur', 203),
(459, 'es', 'Corea del Sur', 204),
(460, 'es', 'Sudán del Sur', 205),
(461, 'es', 'España', 206),
(462, 'es', 'Sri Lanka', 207),
(463, 'es', 'San Bartolomé', 208),
(464, 'es', 'Santa Elena', 209),
(465, 'es', 'San Cristóbal y Nieves', 210),
(466, 'es', 'Santa Lucía', 211),
(467, 'es', 'San Martín', 212),
(468, 'es', 'San Pedro y Miquelón', 213),
(469, 'es', 'San Vicente y las Granadinas', 214),
(470, 'es', 'Sudán', 215),
(471, 'es', 'Surinam', 216),
(472, 'es', 'Svalbard y Jan Mayen', 217),
(473, 'es', 'Suazilandia', 218),
(474, 'es', 'Suecia', 219),
(475, 'es', 'Suiza', 220),
(476, 'es', 'Siri', 221),
(477, 'es', 'Taiwán', 222),
(478, 'es', 'Tayikistán', 223),
(479, 'es', 'Tanzania', 224),
(480, 'es', 'Tailandia', 225),
(481, 'es', 'Timor Oriental', 226),
(482, 'es', 'Togo', 227),
(483, 'es', 'Tokelau', 228),
(484, 'es', 'Tonga', 229),
(485, 'es', 'Trinidad y Tobago', 230),
(486, 'es', 'Tristán de Acuña', 231),
(487, 'es', 'Túnez', 232),
(488, 'es', 'Turquía', 233),
(489, 'es', 'Turkmenistán', 234),
(490, 'es', 'Islas Turcas y Caicos', 235),
(491, 'es', 'Tuvalu', 236),
(492, 'es', 'Islas Ultramarinas Menores de los Estados Unidos', 237),
(493, 'es', 'Islas Vírgenes de los Estados Unidos', 238),
(494, 'es', 'Uganda', 239),
(495, 'es', 'Ucrania', 240),
(496, 'es', 'Emiratos árabes Unidos', 241),
(497, 'es', 'Reino Unido', 242),
(498, 'es', 'Naciones Unidas', 243),
(499, 'es', 'Estados Unidos', 244),
(500, 'es', 'Uruguay', 245),
(501, 'es', 'Uzbekistán', 246),
(502, 'es', 'Vanuatu', 247),
(503, 'es', 'Ciudad del Vaticano', 248),
(504, 'es', 'Venezuela', 249),
(505, 'es', 'Vietnam', 250),
(506, 'es', 'Wallis y Futuna', 251),
(507, 'es', 'Sahara Occidental', 252),
(508, 'es', 'Yemen', 253),
(509, 'es', 'Zambia', 254),
(510, 'es', 'Zimbabue', 255),
(511, 'fa', 'افغانستان', 1),
(512, 'fa', 'جزایر الند', 2),
(513, 'fa', 'آلبانی', 3),
(514, 'fa', 'الجزایر', 4),
(515, 'fa', 'ساموآ آمریکایی', 5),
(516, 'fa', 'آندورا', 6),
(517, 'fa', 'آنگولا', 7),
(518, 'fa', 'آنگولا', 8),
(519, 'fa', 'جنوبگان', 9),
(520, 'fa', 'آنتیگوا و باربودا', 10),
(521, 'fa', 'آرژانتین', 11),
(522, 'fa', 'ارمنستان', 12),
(523, 'fa', 'آروبا', 13),
(524, 'fa', 'جزیره صعود', 14),
(525, 'fa', 'استرالیا', 15),
(526, 'fa', 'اتریش', 16),
(527, 'fa', 'آذربایجان', 17),
(528, 'fa', 'باهاما', 18),
(529, 'fa', 'بحرین', 19),
(530, 'fa', 'بنگلادش', 20),
(531, 'fa', 'باربادوس', 21),
(532, 'fa', 'بلاروس', 22),
(533, 'fa', 'بلژیک', 23),
(534, 'fa', 'بلژیک', 24),
(535, 'fa', 'بنین', 25),
(536, 'fa', 'برمودا', 26),
(537, 'fa', 'بوتان', 27),
(538, 'fa', 'بولیوی', 28),
(539, 'fa', 'بوسنی و هرزگوین', 29),
(540, 'fa', 'بوتسوانا', 30),
(541, 'fa', 'برزیل', 31),
(542, 'fa', 'قلمرو اقیانوس هند انگلیس', 32),
(543, 'fa', 'جزایر ویرجین انگلیس', 33),
(544, 'fa', 'برونئی', 34),
(545, 'fa', 'بلغارستان', 35),
(546, 'fa', 'بورکینا فاسو', 36),
(547, 'fa', 'بوروندی', 37),
(548, 'fa', 'کامبوج', 38),
(549, 'fa', 'کامرون', 39),
(550, 'fa', 'کانادا', 40),
(551, 'fa', 'جزایر قناری', 41),
(552, 'fa', 'کیپ ورد', 42),
(553, 'fa', 'کارائیب هلند', 43),
(554, 'fa', 'Cayman Islands', 44),
(555, 'fa', 'جمهوری آفریقای مرکزی', 45),
(556, 'fa', 'سوتا و ملیلا', 46),
(557, 'fa', 'چاد', 47),
(558, 'fa', 'شیلی', 48),
(559, 'fa', 'چین', 49),
(560, 'fa', 'جزیره کریسمس', 50),
(561, 'fa', 'جزایر کوکو (Keeling)', 51),
(562, 'fa', 'کلمبیا', 52),
(563, 'fa', 'کومور', 53),
(564, 'fa', 'کنگو - برزاویل', 54),
(565, 'fa', 'کنگو - کینشاسا', 55),
(566, 'fa', 'جزایر کوک', 56),
(567, 'fa', 'کاستاریکا', 57),
(568, 'fa', 'ساحل عاج', 58),
(569, 'fa', 'کرواسی', 59),
(570, 'fa', 'کوبا', 60),
(571, 'fa', 'کوراسائو', 61),
(572, 'fa', 'قبرس', 62),
(573, 'fa', 'چک', 63),
(574, 'fa', 'دانمارک', 64),
(575, 'fa', 'دیگو گارسیا', 65),
(576, 'fa', 'جیبوتی', 66),
(577, 'fa', 'دومینیکا', 67),
(578, 'fa', 'جمهوری دومینیکن', 68),
(579, 'fa', 'اکوادور', 69),
(580, 'fa', 'مصر', 70),
(581, 'fa', 'السالوادور', 71),
(582, 'fa', 'گینه استوایی', 72),
(583, 'fa', 'اریتره', 73),
(584, 'fa', 'استونی', 74),
(585, 'fa', 'اتیوپی', 75),
(586, 'fa', 'منطقه یورو', 76),
(587, 'fa', 'جزایر فالکلند', 77),
(588, 'fa', 'جزایر فارو', 78),
(589, 'fa', 'فیجی', 79),
(590, 'fa', 'فنلاند', 80),
(591, 'fa', 'فرانسه', 81),
(592, 'fa', 'گویان فرانسه', 82),
(593, 'fa', 'پلی‌نزی فرانسه', 83),
(594, 'fa', 'سرزمین های جنوبی فرانسه', 84),
(595, 'fa', 'گابن', 85),
(596, 'fa', 'گامبیا', 86),
(597, 'fa', 'جورجیا', 87),
(598, 'fa', 'آلمان', 88),
(599, 'fa', 'غنا', 89),
(600, 'fa', 'جبل الطارق', 90),
(601, 'fa', 'یونان', 91),
(602, 'fa', 'گرینلند', 92),
(603, 'fa', 'گرنادا', 93),
(604, 'fa', 'گوادلوپ', 94),
(605, 'fa', 'گوام', 95),
(606, 'fa', 'گواتمالا', 96),
(607, 'fa', 'گورنسی', 97),
(608, 'fa', 'گینه', 98),
(609, 'fa', 'گینه بیسائو', 99),
(610, 'fa', 'گویان', 100),
(611, 'fa', 'هائیتی', 101),
(612, 'fa', 'هندوراس', 102),
(613, 'fa', 'هنگ کنگ SAR چین', 103),
(614, 'fa', 'مجارستان', 104),
(615, 'fa', 'ایسلند', 105),
(616, 'fa', 'هند', 106),
(617, 'fa', 'اندونزی', 107),
(618, 'fa', 'ایران', 108),
(619, 'fa', 'عراق', 109),
(620, 'fa', 'ایرلند', 110),
(621, 'fa', 'جزیره من', 111),
(622, 'fa', 'اسرائيل', 112),
(623, 'fa', 'ایتالیا', 113),
(624, 'fa', 'جامائیکا', 114),
(625, 'fa', 'ژاپن', 115),
(626, 'fa', 'پیراهن ورزشی', 116),
(627, 'fa', 'اردن', 117),
(628, 'fa', 'قزاقستان', 118),
(629, 'fa', 'کنیا', 119),
(630, 'fa', 'کیریباتی', 120),
(631, 'fa', 'کوزوو', 121),
(632, 'fa', 'کویت', 122),
(633, 'fa', 'قرقیزستان', 123),
(634, 'fa', 'لائوس', 124),
(635, 'fa', 'لتونی', 125),
(636, 'fa', 'لبنان', 126),
(637, 'fa', 'لسوتو', 127),
(638, 'fa', 'لیبریا', 128),
(639, 'fa', 'لیبی', 129),
(640, 'fa', 'لیختن اشتاین', 130),
(641, 'fa', 'لیتوانی', 131),
(642, 'fa', 'لوکزامبورگ', 132),
(643, 'fa', 'ماکائو SAR چین', 133),
(644, 'fa', 'مقدونیه', 134),
(645, 'fa', 'ماداگاسکار', 135),
(646, 'fa', 'مالاوی', 136),
(647, 'fa', 'مالزی', 137),
(648, 'fa', 'مالدیو', 138),
(649, 'fa', 'مالی', 139),
(650, 'fa', 'مالت', 140),
(651, 'fa', 'جزایر مارشال', 141),
(652, 'fa', 'مارتینیک', 142),
(653, 'fa', 'موریتانی', 143),
(654, 'fa', 'موریس', 144),
(655, 'fa', 'گمشده', 145),
(656, 'fa', 'مکزیک', 146),
(657, 'fa', 'میکرونزی', 147),
(658, 'fa', 'مولداوی', 148),
(659, 'fa', 'موناکو', 149),
(660, 'fa', 'مغولستان', 150),
(661, 'fa', 'مونته نگرو', 151),
(662, 'fa', 'مونتسرات', 152),
(663, 'fa', 'مراکش', 153),
(664, 'fa', 'موزامبیک', 154),
(665, 'fa', 'میانمار (برمه)', 155),
(666, 'fa', 'ناميبيا', 156),
(667, 'fa', 'نائورو', 157),
(668, 'fa', 'نپال', 158),
(669, 'fa', 'هلند', 159),
(670, 'fa', 'کالدونیای جدید', 160),
(671, 'fa', 'نیوزلند', 161),
(672, 'fa', 'نیکاراگوئه', 162),
(673, 'fa', 'نیجر', 163),
(674, 'fa', 'نیجریه', 164),
(675, 'fa', 'نیو', 165),
(676, 'fa', 'جزیره نورفولک', 166),
(677, 'fa', 'کره شمالی', 167),
(678, 'fa', 'جزایر ماریانای شمالی', 168),
(679, 'fa', 'نروژ', 169),
(680, 'fa', 'عمان', 170),
(681, 'fa', 'پاکستان', 171),
(682, 'fa', 'پالائو', 172),
(683, 'fa', 'سرزمین های فلسطینی', 173),
(684, 'fa', 'پاناما', 174),
(685, 'fa', 'پاپوا گینه نو', 175),
(686, 'fa', 'پاراگوئه', 176),
(687, 'fa', 'پرو', 177),
(688, 'fa', 'فیلیپین', 178),
(689, 'fa', 'جزایر پیکریرن', 179),
(690, 'fa', 'لهستان', 180),
(691, 'fa', 'کشور پرتغال', 181),
(692, 'fa', 'پورتوریکو', 182),
(693, 'fa', 'قطر', 183),
(694, 'fa', 'تجدید دیدار', 184),
(695, 'fa', 'رومانی', 185),
(696, 'fa', 'روسیه', 186),
(697, 'fa', 'رواندا', 187),
(698, 'fa', 'ساموآ', 188),
(699, 'fa', 'سان مارینو', 189),
(700, 'fa', 'سنت کیتس و نوویس', 190),
(701, 'fa', 'عربستان سعودی', 191),
(702, 'fa', 'سنگال', 192),
(703, 'fa', 'صربستان', 193),
(704, 'fa', 'سیشل', 194),
(705, 'fa', 'سیرالئون', 195),
(706, 'fa', 'سنگاپور', 196),
(707, 'fa', 'سینت ماارتن', 197),
(708, 'fa', 'اسلواکی', 198),
(709, 'fa', 'اسلوونی', 199),
(710, 'fa', 'جزایر سلیمان', 200),
(711, 'fa', 'سومالی', 201),
(712, 'fa', 'آفریقای جنوبی', 202),
(713, 'fa', 'جزایر جورجیا جنوبی و جزایر ساندویچ جنوبی', 203),
(714, 'fa', 'کره جنوبی', 204),
(715, 'fa', 'سودان جنوبی', 205),
(716, 'fa', 'اسپانیا', 206),
(717, 'fa', 'سری لانکا', 207),
(718, 'fa', 'سنت بارتلی', 208),
(719, 'fa', 'سنت هلنا', 209),
(720, 'fa', 'سنت کیتز و نوویس', 210),
(721, 'fa', 'سنت لوسیا', 211),
(722, 'fa', 'سنت مارتین', 212),
(723, 'fa', 'سنت پیر و میکلون', 213),
(724, 'fa', 'سنت وینسنت و گرنادینها', 214),
(725, 'fa', 'سودان', 215),
(726, 'fa', 'سورینام', 216),
(727, 'fa', 'اسوالبارد و جان ماین', 217),
(728, 'fa', 'سوازیلند', 218),
(729, 'fa', 'سوئد', 219),
(730, 'fa', 'سوئیس', 220),
(731, 'fa', 'سوریه', 221),
(732, 'fa', 'تایوان', 222),
(733, 'fa', 'تاجیکستان', 223),
(734, 'fa', 'تانزانیا', 224),
(735, 'fa', 'تایلند', 225),
(736, 'fa', 'تیمور-لست', 226),
(737, 'fa', 'رفتن', 227),
(738, 'fa', 'توکلو', 228),
(739, 'fa', 'تونگا', 229),
(740, 'fa', 'ترینیداد و توباگو', 230),
(741, 'fa', 'تریستان دا کانونا', 231),
(742, 'fa', 'تونس', 232),
(743, 'fa', 'بوقلمون', 233),
(744, 'fa', 'ترکمنستان', 234),
(745, 'fa', 'جزایر تورکس و کایکوس', 235),
(746, 'fa', 'تووالو', 236),
(747, 'fa', 'جزایر دور افتاده ایالات متحده آمریکا', 237),
(748, 'fa', 'جزایر ویرجین ایالات متحده', 238),
(749, 'fa', 'اوگاندا', 239),
(750, 'fa', 'اوکراین', 240),
(751, 'fa', 'امارات متحده عربی', 241),
(752, 'fa', 'انگلستان', 242),
(753, 'fa', 'سازمان ملل', 243),
(754, 'fa', 'ایالات متحده', 244),
(755, 'fa', 'اروگوئه', 245),
(756, 'fa', 'ازبکستان', 246),
(757, 'fa', 'وانواتو', 247),
(758, 'fa', 'شهر واتیکان', 248),
(759, 'fa', 'ونزوئلا', 249),
(760, 'fa', 'ویتنام', 250),
(761, 'fa', 'والیس و فوتونا', 251),
(762, 'fa', 'صحرای غربی', 252),
(763, 'fa', 'یمن', 253),
(764, 'fa', 'زامبیا', 254),
(765, 'fa', 'زیمبابوه', 255),
(766, 'pt_BR', 'Afeganistão', 1),
(767, 'pt_BR', 'Ilhas Åland', 2),
(768, 'pt_BR', 'Albânia', 3),
(769, 'pt_BR', 'Argélia', 4),
(770, 'pt_BR', 'Samoa Americana', 5),
(771, 'pt_BR', 'Andorra', 6),
(772, 'pt_BR', 'Angola', 7),
(773, 'pt_BR', 'Angola', 8),
(774, 'pt_BR', 'Antártico', 9),
(775, 'pt_BR', 'Antígua e Barbuda', 10),
(776, 'pt_BR', 'Argentina', 11),
(777, 'pt_BR', 'Armênia', 12),
(778, 'pt_BR', 'Aruba', 13),
(779, 'pt_BR', 'Ilha de escalada', 14),
(780, 'pt_BR', 'Austrália', 15),
(781, 'pt_BR', 'Áustria', 16),
(782, 'pt_BR', 'Azerbaijão', 17),
(783, 'pt_BR', 'Bahamas', 18),
(784, 'pt_BR', 'Bahrain', 19),
(785, 'pt_BR', 'Bangladesh', 20),
(786, 'pt_BR', 'Barbados', 21),
(787, 'pt_BR', 'Bielorrússia', 22),
(788, 'pt_BR', 'Bélgica', 23),
(789, 'pt_BR', 'Bélgica', 24),
(790, 'pt_BR', 'Benin', 25),
(791, 'pt_BR', 'Bermuda', 26),
(792, 'pt_BR', 'Butão', 27),
(793, 'pt_BR', 'Bolívia', 28),
(794, 'pt_BR', 'Bósnia e Herzegovina', 29),
(795, 'pt_BR', 'Botsuana', 30),
(796, 'pt_BR', 'Brasil', 31),
(797, 'pt_BR', 'Território Britânico do Oceano Índico', 32),
(798, 'pt_BR', 'Ilhas Virgens Britânicas', 33),
(799, 'pt_BR', 'Brunei', 34),
(800, 'pt_BR', 'Bulgária', 35),
(801, 'pt_BR', 'Burkina Faso', 36),
(802, 'pt_BR', 'Burundi', 37),
(803, 'pt_BR', 'Camboja', 38),
(804, 'pt_BR', 'Camarões', 39),
(805, 'pt_BR', 'Canadá', 40),
(806, 'pt_BR', 'Ilhas Canárias', 41),
(807, 'pt_BR', 'Cabo Verde', 42),
(808, 'pt_BR', 'Holanda do Caribe', 43),
(809, 'pt_BR', 'Ilhas Cayman', 44),
(810, 'pt_BR', 'República Centro-Africana', 45),
(811, 'pt_BR', 'Ceuta e Melilla', 46),
(812, 'pt_BR', 'Chade', 47),
(813, 'pt_BR', 'Chile', 48),
(814, 'pt_BR', 'China', 49),
(815, 'pt_BR', 'Ilha Christmas', 50),
(816, 'pt_BR', 'Ilhas Cocos (Keeling)', 51),
(817, 'pt_BR', 'Colômbia', 52),
(818, 'pt_BR', 'Comores', 53),
(819, 'pt_BR', 'Congo - Brazzaville', 54),
(820, 'pt_BR', 'Congo - Kinshasa', 55),
(821, 'pt_BR', 'Ilhas Cook', 56),
(822, 'pt_BR', 'Costa Rica', 57),
(823, 'pt_BR', 'Costa do Marfim', 58),
(824, 'pt_BR', 'Croácia', 59),
(825, 'pt_BR', 'Cuba', 60),
(826, 'pt_BR', 'Curaçao', 61),
(827, 'pt_BR', 'Chipre', 62),
(828, 'pt_BR', 'Czechia', 63),
(829, 'pt_BR', 'Dinamarca', 64),
(830, 'pt_BR', 'Diego Garcia', 65),
(831, 'pt_BR', 'Djibuti', 66),
(832, 'pt_BR', 'Dominica', 67),
(833, 'pt_BR', 'República Dominicana', 68),
(834, 'pt_BR', 'Equador', 69),
(835, 'pt_BR', 'Egito', 70),
(836, 'pt_BR', 'El Salvador', 71),
(837, 'pt_BR', 'Guiné Equatorial', 72),
(838, 'pt_BR', 'Eritreia', 73),
(839, 'pt_BR', 'Estônia', 74),
(840, 'pt_BR', 'Etiópia', 75),
(841, 'pt_BR', 'Zona Euro', 76),
(842, 'pt_BR', 'Ilhas Malvinas', 77),
(843, 'pt_BR', 'Ilhas Faroe', 78),
(844, 'pt_BR', 'Fiji', 79),
(845, 'pt_BR', 'Finlândia', 80),
(846, 'pt_BR', 'França', 81),
(847, 'pt_BR', 'Guiana Francesa', 82),
(848, 'pt_BR', 'Polinésia Francesa', 83),
(849, 'pt_BR', 'Territórios Franceses do Sul', 84),
(850, 'pt_BR', 'Gabão', 85),
(851, 'pt_BR', 'Gâmbia', 86),
(852, 'pt_BR', 'Geórgia', 87),
(853, 'pt_BR', 'Alemanha', 88),
(854, 'pt_BR', 'Gana', 89),
(855, 'pt_BR', 'Gibraltar', 90),
(856, 'pt_BR', 'Grécia', 91),
(857, 'pt_BR', 'Gronelândia', 92),
(858, 'pt_BR', 'Granada', 93),
(859, 'pt_BR', 'Guadalupe', 94),
(860, 'pt_BR', 'Guam', 95),
(861, 'pt_BR', 'Guatemala', 96),
(862, 'pt_BR', 'Guernsey', 97),
(863, 'pt_BR', 'Guiné', 98),
(864, 'pt_BR', 'Guiné-Bissau', 99),
(865, 'pt_BR', 'Guiana', 100),
(866, 'pt_BR', 'Haiti', 101),
(867, 'pt_BR', 'Honduras', 102),
(868, 'pt_BR', 'Região Administrativa Especial de Hong Kong, China', 103),
(869, 'pt_BR', 'Hungria', 104),
(870, 'pt_BR', 'Islândia', 105),
(871, 'pt_BR', 'Índia', 106),
(872, 'pt_BR', 'Indonésia', 107),
(873, 'pt_BR', 'Irã', 108),
(874, 'pt_BR', 'Iraque', 109),
(875, 'pt_BR', 'Irlanda', 110),
(876, 'pt_BR', 'Ilha de Man', 111),
(877, 'pt_BR', 'Israel', 112),
(878, 'pt_BR', 'Itália', 113),
(879, 'pt_BR', 'Jamaica', 114),
(880, 'pt_BR', 'Japão', 115),
(881, 'pt_BR', 'Jersey', 116),
(882, 'pt_BR', 'Jordânia', 117),
(883, 'pt_BR', 'Cazaquistão', 118),
(884, 'pt_BR', 'Quênia', 119),
(885, 'pt_BR', 'Quiribati', 120),
(886, 'pt_BR', 'Kosovo', 121),
(887, 'pt_BR', 'Kuwait', 122),
(888, 'pt_BR', 'Quirguistão', 123),
(889, 'pt_BR', 'Laos', 124),
(890, 'pt_BR', 'Letônia', 125),
(891, 'pt_BR', 'Líbano', 126),
(892, 'pt_BR', 'Lesoto', 127),
(893, 'pt_BR', 'Libéria', 128),
(894, 'pt_BR', 'Líbia', 129),
(895, 'pt_BR', 'Liechtenstein', 130),
(896, 'pt_BR', 'Lituânia', 131),
(897, 'pt_BR', 'Luxemburgo', 132),
(898, 'pt_BR', 'Macau SAR China', 133),
(899, 'pt_BR', 'Macedônia', 134),
(900, 'pt_BR', 'Madagascar', 135),
(901, 'pt_BR', 'Malawi', 136),
(902, 'pt_BR', 'Malásia', 137),
(903, 'pt_BR', 'Maldivas', 138),
(904, 'pt_BR', 'Mali', 139),
(905, 'pt_BR', 'Malta', 140),
(906, 'pt_BR', 'Ilhas Marshall', 141),
(907, 'pt_BR', 'Martinica', 142),
(908, 'pt_BR', 'Mauritânia', 143),
(909, 'pt_BR', 'Maurício', 144),
(910, 'pt_BR', 'Maiote', 145),
(911, 'pt_BR', 'México', 146),
(912, 'pt_BR', 'Micronésia', 147),
(913, 'pt_BR', 'Moldávia', 148),
(914, 'pt_BR', 'Mônaco', 149),
(915, 'pt_BR', 'Mongólia', 150),
(916, 'pt_BR', 'Montenegro', 151),
(917, 'pt_BR', 'Montserrat', 152),
(918, 'pt_BR', 'Marrocos', 153),
(919, 'pt_BR', 'Moçambique', 154),
(920, 'pt_BR', 'Mianmar (Birmânia)', 155),
(921, 'pt_BR', 'Namíbia', 156),
(922, 'pt_BR', 'Nauru', 157),
(923, 'pt_BR', 'Nepal', 158),
(924, 'pt_BR', 'Holanda', 159),
(925, 'pt_BR', 'Nova Caledônia', 160),
(926, 'pt_BR', 'Nova Zelândia', 161),
(927, 'pt_BR', 'Nicarágua', 162),
(928, 'pt_BR', 'Níger', 163),
(929, 'pt_BR', 'Nigéria', 164),
(930, 'pt_BR', 'Niue', 165),
(931, 'pt_BR', 'Ilha Norfolk', 166),
(932, 'pt_BR', 'Coréia do Norte', 167),
(933, 'pt_BR', 'Ilhas Marianas do Norte', 168),
(934, 'pt_BR', 'Noruega', 169),
(935, 'pt_BR', 'Omã', 170),
(936, 'pt_BR', 'Paquistão', 171),
(937, 'pt_BR', 'Palau', 172),
(938, 'pt_BR', 'Territórios Palestinos', 173),
(939, 'pt_BR', 'Panamá', 174),
(940, 'pt_BR', 'Papua Nova Guiné', 175),
(941, 'pt_BR', 'Paraguai', 176),
(942, 'pt_BR', 'Peru', 177),
(943, 'pt_BR', 'Filipinas', 178),
(944, 'pt_BR', 'Ilhas Pitcairn', 179),
(945, 'pt_BR', 'Polônia', 180),
(946, 'pt_BR', 'Portugal', 181),
(947, 'pt_BR', 'Porto Rico', 182),
(948, 'pt_BR', 'Catar', 183),
(949, 'pt_BR', 'Reunião', 184),
(950, 'pt_BR', 'Romênia', 185),
(951, 'pt_BR', 'Rússia', 186),
(952, 'pt_BR', 'Ruanda', 187),
(953, 'pt_BR', 'Samoa', 188),
(954, 'pt_BR', 'São Marinho', 189),
(955, 'pt_BR', 'São Cristóvão e Nevis', 190),
(956, 'pt_BR', 'Arábia Saudita', 191),
(957, 'pt_BR', 'Senegal', 192),
(958, 'pt_BR', 'Sérvia', 193),
(959, 'pt_BR', 'Seychelles', 194),
(960, 'pt_BR', 'Serra Leoa', 195),
(961, 'pt_BR', 'Cingapura', 196),
(962, 'pt_BR', 'São Martinho', 197),
(963, 'pt_BR', 'Eslováquia', 198),
(964, 'pt_BR', 'Eslovênia', 199),
(965, 'pt_BR', 'Ilhas Salomão', 200),
(966, 'pt_BR', 'Somália', 201),
(967, 'pt_BR', 'África do Sul', 202),
(968, 'pt_BR', 'Ilhas Geórgia do Sul e Sandwich do Sul', 203),
(969, 'pt_BR', 'Coréia do Sul', 204),
(970, 'pt_BR', 'Sudão do Sul', 205),
(971, 'pt_BR', 'Espanha', 206),
(972, 'pt_BR', 'Sri Lanka', 207),
(973, 'pt_BR', 'São Bartolomeu', 208),
(974, 'pt_BR', 'Santa Helena', 209),
(975, 'pt_BR', 'São Cristóvão e Nevis', 210),
(976, 'pt_BR', 'Santa Lúcia', 211),
(977, 'pt_BR', 'São Martinho', 212),
(978, 'pt_BR', 'São Pedro e Miquelon', 213),
(979, 'pt_BR', 'São Vicente e Granadinas', 214),
(980, 'pt_BR', 'Sudão', 215),
(981, 'pt_BR', 'Suriname', 216),
(982, 'pt_BR', 'Svalbard e Jan Mayen', 217),
(983, 'pt_BR', 'Suazilândia', 218),
(984, 'pt_BR', 'Suécia', 219),
(985, 'pt_BR', 'Suíça', 220),
(986, 'pt_BR', 'Síria', 221),
(987, 'pt_BR', 'Taiwan', 222),
(988, 'pt_BR', 'Tajiquistão', 223),
(989, 'pt_BR', 'Tanzânia', 224),
(990, 'pt_BR', 'Tailândia', 225),
(991, 'pt_BR', 'Timor-Leste', 226),
(992, 'pt_BR', 'Togo', 227),
(993, 'pt_BR', 'Tokelau', 228),
(994, 'pt_BR', 'Tonga', 229),
(995, 'pt_BR', 'Trinidad e Tobago', 230),
(996, 'pt_BR', 'Tristan da Cunha', 231),
(997, 'pt_BR', 'Tunísia', 232),
(998, 'pt_BR', 'Turquia', 233),
(999, 'pt_BR', 'Turquemenistão', 234),
(1000, 'pt_BR', 'Ilhas Turks e Caicos', 235),
(1001, 'pt_BR', 'Tuvalu', 236),
(1002, 'pt_BR', 'Ilhas periféricas dos EUA', 237),
(1003, 'pt_BR', 'Ilhas Virgens dos EUA', 238),
(1004, 'pt_BR', 'Uganda', 239),
(1005, 'pt_BR', 'Ucrânia', 240),
(1006, 'pt_BR', 'Emirados Árabes Unidos', 241),
(1007, 'pt_BR', 'Reino Unido', 242),
(1008, 'pt_BR', 'Nações Unidas', 243),
(1009, 'pt_BR', 'Estados Unidos', 244),
(1010, 'pt_BR', 'Uruguai', 245),
(1011, 'pt_BR', 'Uzbequistão', 246),
(1012, 'pt_BR', 'Vanuatu', 247),
(1013, 'pt_BR', 'Cidade do Vaticano', 248),
(1014, 'pt_BR', 'Venezuela', 249),
(1015, 'pt_BR', 'Vietnã', 250),
(1016, 'pt_BR', 'Wallis e Futuna', 251),
(1017, 'pt_BR', 'Saara Ocidental', 252),
(1018, 'pt_BR', 'Iêmen', 253),
(1019, 'pt_BR', 'Zâmbia', 254),
(1020, 'pt_BR', 'Zimbábue', 255);

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `symbol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `code`, `name`, `created_at`, `updated_at`, `symbol`) VALUES
(1, 'USD', 'US Dollar', NULL, NULL, '$'),
(2, 'EUR', 'Euro', NULL, NULL, '€');

-- --------------------------------------------------------

--
-- Table structure for table `currency_exchange_rates`
--

CREATE TABLE `currency_exchange_rates` (
  `id` int(10) UNSIGNED NOT NULL,
  `rate` decimal(24,12) NOT NULL,
  `target_currency` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_token` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_group_id` int(10) UNSIGNED DEFAULT NULL,
  `subscribed_to_news_letter` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT '0',
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `gender`, `date_of_birth`, `email`, `status`, `password`, `api_token`, `customer_group_id`, `subscribed_to_news_letter`, `remember_token`, `created_at`, `updated_at`, `is_verified`, `token`, `notes`, `phone`) VALUES
(1, 'prashant', 'singh', NULL, NULL, 'prashantsingh2408@gmail.com', 1, '$2y$10$j08KOJyqnJeIiLKhN0CpJe89foQx8sZTAMxoPsFRRvaTtnfdR/oru', 'DnZflaERPoFnxI6ci4S4zddKR32oeM8IuiOfFBIpOJR3YwnRbQsttauLA4tLRz7WdOhWRamJxdyDV7DP', 2, 0, NULL, '2021-03-22 09:03:36', '2021-03-22 09:03:36', 1, '5cd144a22f8803a411c6912b2b3af29c', NULL, NULL),
(2, 'Md Imtiyaz ', 'Alam', NULL, NULL, 'imz@gmail.com', 1, '$2y$10$7YoXgdUklxXC4pys3hpFy.pXKvaDUL78c34osG0vwtix96MtuziEy', 'mfhqIa7TEuAsM6RqYJcafkqzdRoOU8c0I3BGbiiX6RNJ9doF32Shn7QSdu1h9avGNkL42zgmmQveJ8VF', 2, 0, NULL, '2021-03-23 05:44:36', '2021-03-23 05:44:36', 1, 'bfccbb9c9e0ec0c92aead8afec3922b0', NULL, NULL),
(3, 'Lokesh', 'Dewangan', NULL, NULL, 'lokesh@pegalogics.comm', 1, '$2y$10$VVsfB8cPHdw4mh0yOjJJCuCZsFnYYRyWx6KfX2WpAe1CXEj6ogpnG', 'KHAg95GJNyyN81DooIBznrO9WyXBWW4sM7BoZpGQUrEWJhrVLbymHt9zDAiHhrA4OzRRSUUwLWH0c42N', 2, 0, NULL, '2021-03-31 09:31:26', '2021-03-31 09:31:26', 1, 'cd6e6e0fc14215a298d73912621717d1', NULL, NULL),
(4, 'Lokesh', 'Dewangan', NULL, NULL, 'lokeshdewangan500@gmail.com', 1, '$2y$10$H69RQcTPR6j7xkJKczh8jODaC8sN00Cn8Dljopsi0ppjN0i333uLy', 'p7VBkTymoNPBvCdkyOy7jiMl8UxfO4RwM75qu4C3V7v0KS1XOlhKLPV6tl39THdKNeLPFIUBdkNrdPCQ', 2, 0, NULL, '2021-03-31 10:46:34', '2021-03-31 10:46:34', 1, '412c388c9627c27c20830cc9da6544f4', NULL, NULL),
(5, 'prasahnt', 'fdddsdsd', NULL, NULL, 'john@example.com', 1, '$2y$10$6AwrP3AvINODZDfcMY65LOsvXkxZ550UqKWydWHCRwlstC6nG9/0u', NULL, 2, 0, NULL, '2021-04-01 05:22:17', '2021-04-01 05:22:17', 1, NULL, NULL, NULL),
(6, 'prasahnt', 'fdddsdsd', NULL, NULL, 'john@exam1ple.com', 1, '$2y$10$MUVNLZtkn6FBIaYK53RMeOujnE7ZAPD8Jk/9xPFJddoqCgds3JCV2', NULL, 2, 0, NULL, '2021-04-01 05:23:44', '2021-04-01 05:23:44', 1, NULL, NULL, NULL),
(7, 'prasahntKK', 'fdddsdsdKK', NULL, NULL, 'john@exa8m1ple.com', 1, '$2y$10$5sil00BhSOowg4wiBwAoMu0c46.6aqKs2pf0CB92t5Rl3CqKrxok.', NULL, 2, 0, NULL, '2021-04-01 05:55:18', '2021-04-01 05:55:18', 1, NULL, NULL, NULL),
(8, 'prashant', 'singh', NULL, NULL, 'pasa1111@gmail.com', 1, 'password123', NULL, NULL, 0, NULL, '2021-04-01 07:44:15', '2021-04-01 07:44:15', 0, NULL, NULL, '9984499465'),
(9, 'prashant', 'singh', NULL, NULL, 'pasa11111@gmail.com', 1, 'password123', NULL, NULL, 0, NULL, '2021-04-01 07:44:33', '2021-04-01 07:44:33', 0, NULL, NULL, '9984499465'),
(10, 'prashant', 'singh', NULL, NULL, 'prashant12@gmail.com', 1, 'password', NULL, NULL, 0, NULL, '2021-04-01 07:48:30', '2021-04-01 07:48:30', 0, NULL, NULL, '9984499465');

-- --------------------------------------------------------

--
-- Table structure for table `customer_groups`
--

CREATE TABLE `customer_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_user_defined` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `customer_groups`
--

INSERT INTO `customer_groups` (`id`, `name`, `is_user_defined`, `created_at`, `updated_at`, `code`) VALUES
(1, 'Guest', 0, NULL, NULL, 'guest'),
(2, 'General', 0, NULL, NULL, 'general'),
(3, 'Wholesale', 0, NULL, NULL, 'wholesale');

-- --------------------------------------------------------

--
-- Table structure for table `customer_password_resets`
--

CREATE TABLE `customer_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `customer_social_accounts`
--

CREATE TABLE `customer_social_accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `provider_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `downloadable_link_purchased`
--

CREATE TABLE `downloadable_link_purchased` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `download_bought` int(11) NOT NULL DEFAULT '0',
  `download_used` int(11) NOT NULL DEFAULT '0',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `order_item_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `download_canceled` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_sources`
--

CREATE TABLE `inventory_sources` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `contact_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL DEFAULT '0',
  `latitude` decimal(10,5) DEFAULT NULL,
  `longitude` decimal(10,5) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `inventory_sources`
--

INSERT INTO `inventory_sources` (`id`, `code`, `name`, `description`, `contact_name`, `contact_email`, `contact_number`, `contact_fax`, `country`, `state`, `city`, `street`, `postcode`, `priority`, `latitude`, `longitude`, `status`, `created_at`, `updated_at`) VALUES
(1, 'default', 'Default', NULL, 'Detroit Warehouse', 'warehouse@example.com', '1234567899', NULL, 'US', 'MI', 'Detroit', '12th Street', '48127', 0, NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `increment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_sent` tinyint(1) NOT NULL DEFAULT '0',
  `total_qty` int(11) DEFAULT NULL,
  `base_currency_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `channel_currency_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_currency_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_total` decimal(12,4) DEFAULT '0.0000',
  `base_sub_total` decimal(12,4) DEFAULT '0.0000',
  `grand_total` decimal(12,4) DEFAULT '0.0000',
  `base_grand_total` decimal(12,4) DEFAULT '0.0000',
  `shipping_amount` decimal(12,4) DEFAULT '0.0000',
  `base_shipping_amount` decimal(12,4) DEFAULT '0.0000',
  `tax_amount` decimal(12,4) DEFAULT '0.0000',
  `base_tax_amount` decimal(12,4) DEFAULT '0.0000',
  `discount_amount` decimal(12,4) DEFAULT '0.0000',
  `base_discount_amount` decimal(12,4) DEFAULT '0.0000',
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `order_address_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_items`
--

CREATE TABLE `invoice_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `base_price` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `total` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `base_total` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `tax_amount` decimal(12,4) DEFAULT '0.0000',
  `base_tax_amount` decimal(12,4) DEFAULT '0.0000',
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `product_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_item_id` int(10) UNSIGNED DEFAULT NULL,
  `invoice_id` int(10) UNSIGNED DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `additional` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `discount_percent` decimal(12,4) DEFAULT '0.0000',
  `discount_amount` decimal(12,4) DEFAULT '0.0000',
  `base_discount_amount` decimal(12,4) DEFAULT '0.0000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `locales`
--

CREATE TABLE `locales` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `direction` enum('ltr','rtl') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ltr',
  `locale_image` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `locales`
--

INSERT INTO `locales` (`id`, `code`, `name`, `created_at`, `updated_at`, `direction`, `locale_image`) VALUES
(1, 'en', 'English', NULL, NULL, 'ltr', NULL),
(2, 'fr', 'French', NULL, NULL, 'ltr', NULL),
(3, 'nl', 'Dutch', NULL, NULL, 'ltr', NULL),
(4, 'tr', 'Türkçe', NULL, NULL, 'ltr', NULL),
(5, 'es', 'Español', NULL, NULL, 'ltr', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `marketing_campaigns`
--

CREATE TABLE `marketing_campaigns` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spooling` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `channel_id` int(10) UNSIGNED DEFAULT NULL,
  `customer_group_id` int(10) UNSIGNED DEFAULT NULL,
  `marketing_template_id` int(10) UNSIGNED DEFAULT NULL,
  `marketing_event_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `marketing_events`
--

CREATE TABLE `marketing_events` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `marketing_events`
--

INSERT INTO `marketing_events` (`id`, `name`, `description`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Birthday', 'Birthday', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `marketing_templates`
--

CREATE TABLE `marketing_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_admin_password_resets_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2018_06_12_111907_create_admins_table', 1),
(5, '2018_06_13_055341_create_roles_table', 1),
(6, '2018_07_05_130148_create_attributes_table', 1),
(7, '2018_07_05_132854_create_attribute_translations_table', 1),
(8, '2018_07_05_135150_create_attribute_families_table', 1),
(9, '2018_07_05_135152_create_attribute_groups_table', 1),
(10, '2018_07_05_140832_create_attribute_options_table', 1),
(11, '2018_07_05_140856_create_attribute_option_translations_table', 1),
(12, '2018_07_05_142820_create_categories_table', 1),
(13, '2018_07_10_055143_create_locales_table', 1),
(14, '2018_07_20_054426_create_countries_table', 1),
(15, '2018_07_20_054502_create_currencies_table', 1),
(16, '2018_07_20_054542_create_currency_exchange_rates_table', 1),
(17, '2018_07_20_064849_create_channels_table', 1),
(18, '2018_07_21_142836_create_category_translations_table', 1),
(19, '2018_07_23_110040_create_inventory_sources_table', 1),
(20, '2018_07_24_082635_create_customer_groups_table', 1),
(21, '2018_07_24_082930_create_customers_table', 1),
(22, '2018_07_24_083025_create_customer_addresses_table', 1),
(23, '2018_07_27_065727_create_products_table', 1),
(24, '2018_07_27_070011_create_product_attribute_values_table', 1),
(25, '2018_07_27_092623_create_product_reviews_table', 1),
(26, '2018_07_27_113941_create_product_images_table', 1),
(27, '2018_07_27_113956_create_product_inventories_table', 1),
(28, '2018_08_03_114203_create_sliders_table', 1),
(29, '2018_08_30_064755_create_tax_categories_table', 1),
(30, '2018_08_30_065042_create_tax_rates_table', 1),
(31, '2018_08_30_065840_create_tax_mappings_table', 1),
(32, '2018_09_05_150444_create_cart_table', 1),
(33, '2018_09_05_150915_create_cart_items_table', 1),
(34, '2018_09_11_064045_customer_password_resets', 1),
(35, '2018_09_19_092845_create_cart_address', 1),
(36, '2018_09_19_093453_create_cart_payment', 1),
(37, '2018_09_19_093508_create_cart_shipping_rates_table', 1),
(38, '2018_09_20_060658_create_core_config_table', 1),
(39, '2018_09_27_113154_create_orders_table', 1),
(40, '2018_09_27_113207_create_order_items_table', 1),
(41, '2018_09_27_113405_create_order_address_table', 1),
(42, '2018_09_27_115022_create_shipments_table', 1),
(43, '2018_09_27_115029_create_shipment_items_table', 1),
(44, '2018_09_27_115135_create_invoices_table', 1),
(45, '2018_09_27_115144_create_invoice_items_table', 1),
(46, '2018_10_01_095504_create_order_payment_table', 1),
(47, '2018_10_03_025230_create_wishlist_table', 1),
(48, '2018_10_12_101803_create_country_translations_table', 1),
(49, '2018_10_12_101913_create_country_states_table', 1),
(50, '2018_10_12_101923_create_country_state_translations_table', 1),
(51, '2018_11_15_153257_alter_order_table', 1),
(52, '2018_11_15_163729_alter_invoice_table', 1),
(53, '2018_11_16_173504_create_subscribers_list_table', 1),
(54, '2018_11_17_165758_add_is_verified_column_in_customers_table', 1),
(55, '2018_11_21_144411_create_cart_item_inventories_table', 1),
(56, '2018_11_26_110500_change_gender_column_in_customers_table', 1),
(57, '2018_11_27_174449_change_content_column_in_sliders_table', 1),
(58, '2018_12_05_132625_drop_foreign_key_core_config_table', 1),
(59, '2018_12_05_132629_alter_core_config_table', 1),
(60, '2018_12_06_185202_create_product_flat_table', 1),
(61, '2018_12_21_101307_alter_channels_table', 1),
(62, '2018_12_24_123812_create_channel_inventory_sources_table', 1),
(63, '2018_12_24_184402_alter_shipments_table', 1),
(64, '2018_12_26_165327_create_product_ordered_inventories_table', 1),
(65, '2018_12_31_161114_alter_channels_category_table', 1),
(66, '2019_01_11_122452_add_vendor_id_column_in_product_inventories_table', 1),
(67, '2019_01_25_124522_add_updated_at_column_in_product_flat_table', 1),
(68, '2019_01_29_123053_add_min_price_and_max_price_column_in_product_flat_table', 1),
(69, '2019_01_31_164117_update_value_column_type_to_text_in_core_config_table', 1),
(70, '2019_02_21_145238_alter_product_reviews_table', 1),
(71, '2019_02_21_152709_add_swatch_type_column_in_attributes_table', 1),
(72, '2019_02_21_153035_alter_customer_id_in_product_reviews_table', 1),
(73, '2019_02_21_153851_add_swatch_value_columns_in_attribute_options_table', 1),
(74, '2019_03_15_123337_add_display_mode_column_in_categories_table', 1),
(75, '2019_03_28_103658_add_notes_column_in_customers_table', 1),
(76, '2019_04_24_155820_alter_product_flat_table', 1),
(77, '2019_05_13_024320_remove_tables', 1),
(78, '2019_05_13_024321_create_cart_rules_table', 1),
(79, '2019_05_13_024322_create_cart_rule_channels_table', 1),
(80, '2019_05_13_024323_create_cart_rule_customer_groups_table', 1),
(81, '2019_05_13_024324_create_cart_rule_translations_table', 1),
(82, '2019_05_13_024325_create_cart_rule_customers_table', 1),
(83, '2019_05_13_024326_create_cart_rule_coupons_table', 1),
(84, '2019_05_13_024327_create_cart_rule_coupon_usage_table', 1),
(85, '2019_05_22_165833_update_zipcode_column_type_to_varchar_in_cart_address_table', 1),
(86, '2019_05_23_113407_add_remaining_column_in_product_flat_table', 1),
(87, '2019_05_23_155520_add_discount_columns_in_invoice_items_table', 1),
(88, '2019_05_23_184029_rename_discount_columns_in_cart_table', 1),
(89, '2019_06_04_114009_add_phone_column_in_customers_table', 1),
(90, '2019_06_06_195905_update_custom_price_to_nullable_in_cart_items', 1),
(91, '2019_06_15_183412_add_code_column_in_customer_groups_table', 1),
(92, '2019_06_17_180258_create_product_downloadable_samples_table', 1),
(93, '2019_06_17_180314_create_product_downloadable_sample_translations_table', 1),
(94, '2019_06_17_180325_create_product_downloadable_links_table', 1),
(95, '2019_06_17_180346_create_product_downloadable_link_translations_table', 1),
(96, '2019_06_19_162817_remove_unique_in_phone_column_in_customers_table', 1),
(97, '2019_06_21_130512_update_weight_column_deafult_value_in_cart_items_table', 1),
(98, '2019_06_21_202249_create_downloadable_link_purchased_table', 1),
(99, '2019_07_02_180307_create_booking_products_table', 1),
(100, '2019_07_05_114157_add_symbol_column_in_currencies_table', 1),
(101, '2019_07_05_154415_create_booking_product_default_slots_table', 1),
(102, '2019_07_05_154429_create_booking_product_appointment_slots_table', 1),
(103, '2019_07_05_154440_create_booking_product_event_tickets_table', 1),
(104, '2019_07_05_154451_create_booking_product_rental_slots_table', 1),
(105, '2019_07_05_154502_create_booking_product_table_slots_table', 1),
(106, '2019_07_11_151210_add_locale_id_in_category_translations', 1),
(107, '2019_07_23_033128_alter_locales_table', 1),
(108, '2019_07_23_174708_create_velocity_contents_table', 1),
(109, '2019_07_23_175212_create_velocity_contents_translations_table', 1),
(110, '2019_07_29_142734_add_use_in_flat_column_in_attributes_table', 1),
(111, '2019_07_30_153530_create_cms_pages_table', 1),
(112, '2019_07_31_143339_create_category_filterable_attributes_table', 1),
(113, '2019_08_02_105320_create_product_grouped_products_table', 1),
(114, '2019_08_12_184925_add_additional_cloumn_in_wishlist_table', 1),
(115, '2019_08_20_170510_create_product_bundle_options_table', 1),
(116, '2019_08_20_170520_create_product_bundle_option_translations_table', 1),
(117, '2019_08_20_170528_create_product_bundle_option_products_table', 1),
(118, '2019_08_21_123707_add_seo_column_in_channels_table', 1),
(119, '2019_09_11_184511_create_refunds_table', 1),
(120, '2019_09_11_184519_create_refund_items_table', 1),
(121, '2019_09_26_163950_remove_channel_id_from_customers_table', 1),
(122, '2019_10_03_105451_change_rate_column_in_currency_exchange_rates_table', 1),
(123, '2019_10_21_105136_order_brands', 1),
(124, '2019_10_24_173358_change_postcode_column_type_in_order_address_table', 1),
(125, '2019_10_24_173437_change_postcode_column_type_in_cart_address_table', 1),
(126, '2019_10_24_173507_change_postcode_column_type_in_customer_addresses_table', 1),
(127, '2019_11_21_194541_add_column_url_path_to_category_translations', 1),
(128, '2019_11_21_194608_add_stored_function_to_get_url_path_of_category', 1),
(129, '2019_11_21_194627_add_trigger_to_category_translations', 1),
(130, '2019_11_21_194648_add_url_path_to_existing_category_translations', 1),
(131, '2019_11_21_194703_add_trigger_to_categories', 1),
(132, '2019_11_25_171136_add_applied_cart_rule_ids_column_in_cart_table', 1),
(133, '2019_11_25_171208_add_applied_cart_rule_ids_column_in_cart_items_table', 1),
(134, '2019_11_30_124437_add_applied_cart_rule_ids_column_in_orders_table', 1),
(135, '2019_11_30_165644_add_discount_columns_in_cart_shipping_rates_table', 1),
(136, '2019_12_03_175253_create_remove_catalog_rule_tables', 1),
(137, '2019_12_03_184613_create_catalog_rules_table', 1),
(138, '2019_12_03_184651_create_catalog_rule_channels_table', 1),
(139, '2019_12_03_184732_create_catalog_rule_customer_groups_table', 1),
(140, '2019_12_06_101110_create_catalog_rule_products_table', 1),
(141, '2019_12_06_110507_create_catalog_rule_product_prices_table', 1),
(142, '2019_12_30_155256_create_velocity_meta_data', 1),
(143, '2020_01_02_201029_add_api_token_columns', 1),
(144, '2020_01_06_173505_alter_trigger_category_translations', 1),
(145, '2020_01_06_173524_alter_stored_function_url_path_category', 1),
(146, '2020_01_06_195305_alter_trigger_on_categories', 1),
(147, '2020_01_09_154851_add_shipping_discount_columns_in_orders_table', 1),
(148, '2020_01_09_202815_add_inventory_source_name_column_in_shipments_table', 1),
(149, '2020_01_10_122226_update_velocity_meta_data', 1),
(150, '2020_01_10_151902_customer_address_improvements', 1),
(151, '2020_01_13_131431_alter_float_value_column_type_in_product_attribute_values_table', 1),
(152, '2020_01_13_155803_add_velocity_locale_icon', 1),
(153, '2020_01_13_192149_add_category_velocity_meta_data', 1),
(154, '2020_01_14_191854_create_cms_page_translations_table', 1),
(155, '2020_01_14_192206_remove_columns_from_cms_pages_table', 1),
(156, '2020_01_15_130209_create_cms_page_channels_table', 1),
(157, '2020_01_15_145637_add_product_policy', 1),
(158, '2020_01_15_152121_add_banner_link', 1),
(159, '2020_01_28_102422_add_new_column_and_rename_name_column_in_customer_addresses_table', 1),
(160, '2020_01_29_124748_alter_name_column_in_country_state_translations_table', 1),
(161, '2020_02_18_165639_create_bookings_table', 1),
(162, '2020_02_21_121201_create_booking_product_event_ticket_translations_table', 1),
(163, '2020_02_24_190025_add_is_comparable_column_in_attributes_table', 1),
(164, '2020_02_25_181902_propagate_company_name', 1),
(165, '2020_02_26_163908_change_column_type_in_cart_rules_table', 1),
(166, '2020_02_28_105104_fix_order_columns', 1),
(167, '2020_02_28_111958_create_customer_compare_products_table', 1),
(168, '2020_03_23_201431_alter_booking_products_table', 1),
(169, '2020_04_13_224524_add_locale_in_sliders_table', 1),
(170, '2020_04_16_130351_remove_channel_from_tax_category', 1),
(171, '2020_04_16_185147_add_table_addresses', 1),
(172, '2020_05_06_171638_create_order_comments_table', 1),
(173, '2020_05_21_171500_create_product_customer_group_prices_table', 1),
(174, '2020_06_08_161708_add_sale_prices_to_booking_product_event_tickets', 1),
(175, '2020_06_10_201453_add_locale_velocity_meta_data', 1),
(176, '2020_06_25_162154_create_customer_social_accounts_table', 1),
(177, '2020_06_25_162340_change_email_password_columns_in_customers_table', 1),
(178, '2020_06_30_163510_remove_unique_name_in_tax_categories_table', 1),
(179, '2020_07_31_142021_update_cms_page_translations_table_field_html_content', 1),
(180, '2020_08_01_132239_add_header_content_count_velocity_meta_data_table', 1),
(181, '2020_08_12_114128_removing_foriegn_key', 1),
(182, '2020_08_17_104228_add_channel_to_velocity_meta_data_table', 1),
(183, '2020_09_07_120413_add_unique_index_to_increment_id_in_orders_table', 1),
(184, '2020_09_07_195157_add_additional_to_category', 1),
(185, '2020_11_10_174816_add_product_number_column_in_product_flat_table', 1),
(186, '2020_11_19_112228_create_product_videos_table', 1),
(187, '2020_11_20_105353_add_columns_in_channels_table', 1),
(188, '2020_11_26_141455_create_marketing_templates_table', 1),
(189, '2020_11_26_150534_create_marketing_events_table', 1),
(190, '2020_11_26_150644_create_marketing_campaigns_table', 1),
(191, '2020_12_18_122826_add_is_tax_calculation_column_to_cart_shipping_rates_table', 1),
(192, '2020_12_21_000200_create_channel_translations_table', 1),
(193, '2020_12_21_140151_remove_columns_from_channels_table', 1),
(194, '2020_12_24_131004_add_customer_id_column_in_subscribers_list_table', 1),
(195, '2020_12_27_121950_create_jobs_table', 1),
(196, '2021_02_03_104907_add_adittional_data_to_order_payment_table', 1),
(197, '2021_02_04_150033_add_download_canceled_column_in_downloadable_link_purchased_table', 1),
(198, '2021_03_11_212124_create_order_transactions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `increment_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `channel_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_guest` tinyint(1) DEFAULT NULL,
  `customer_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_vat_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_gift` tinyint(1) NOT NULL DEFAULT '0',
  `total_item_count` int(11) DEFAULT NULL,
  `total_qty_ordered` int(11) DEFAULT NULL,
  `base_currency_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `channel_currency_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_currency_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grand_total` decimal(12,4) DEFAULT '0.0000',
  `base_grand_total` decimal(12,4) DEFAULT '0.0000',
  `grand_total_invoiced` decimal(12,4) DEFAULT '0.0000',
  `base_grand_total_invoiced` decimal(12,4) DEFAULT '0.0000',
  `grand_total_refunded` decimal(12,4) DEFAULT '0.0000',
  `base_grand_total_refunded` decimal(12,4) DEFAULT '0.0000',
  `sub_total` decimal(12,4) DEFAULT '0.0000',
  `base_sub_total` decimal(12,4) DEFAULT '0.0000',
  `sub_total_invoiced` decimal(12,4) DEFAULT '0.0000',
  `base_sub_total_invoiced` decimal(12,4) DEFAULT '0.0000',
  `sub_total_refunded` decimal(12,4) DEFAULT '0.0000',
  `base_sub_total_refunded` decimal(12,4) DEFAULT '0.0000',
  `discount_percent` decimal(12,4) DEFAULT '0.0000',
  `discount_amount` decimal(12,4) DEFAULT '0.0000',
  `base_discount_amount` decimal(12,4) DEFAULT '0.0000',
  `discount_invoiced` decimal(12,4) DEFAULT '0.0000',
  `base_discount_invoiced` decimal(12,4) DEFAULT '0.0000',
  `discount_refunded` decimal(12,4) DEFAULT '0.0000',
  `base_discount_refunded` decimal(12,4) DEFAULT '0.0000',
  `tax_amount` decimal(12,4) DEFAULT '0.0000',
  `base_tax_amount` decimal(12,4) DEFAULT '0.0000',
  `tax_amount_invoiced` decimal(12,4) DEFAULT '0.0000',
  `base_tax_amount_invoiced` decimal(12,4) DEFAULT '0.0000',
  `tax_amount_refunded` decimal(12,4) DEFAULT '0.0000',
  `base_tax_amount_refunded` decimal(12,4) DEFAULT '0.0000',
  `shipping_amount` decimal(12,4) DEFAULT '0.0000',
  `base_shipping_amount` decimal(12,4) DEFAULT '0.0000',
  `shipping_invoiced` decimal(12,4) DEFAULT '0.0000',
  `base_shipping_invoiced` decimal(12,4) DEFAULT '0.0000',
  `shipping_refunded` decimal(12,4) DEFAULT '0.0000',
  `base_shipping_refunded` decimal(12,4) DEFAULT '0.0000',
  `customer_id` int(10) UNSIGNED DEFAULT NULL,
  `customer_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `channel_id` int(10) UNSIGNED DEFAULT NULL,
  `channel_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cart_id` int(11) DEFAULT NULL,
  `applied_cart_rule_ids` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_discount_amount` decimal(12,4) DEFAULT '0.0000',
  `base_shipping_discount_amount` decimal(12,4) DEFAULT '0.0000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `increment_id`, `status`, `channel_name`, `is_guest`, `customer_email`, `customer_first_name`, `customer_last_name`, `customer_company_name`, `customer_vat_id`, `shipping_method`, `shipping_title`, `shipping_description`, `coupon_code`, `is_gift`, `total_item_count`, `total_qty_ordered`, `base_currency_code`, `channel_currency_code`, `order_currency_code`, `grand_total`, `base_grand_total`, `grand_total_invoiced`, `base_grand_total_invoiced`, `grand_total_refunded`, `base_grand_total_refunded`, `sub_total`, `base_sub_total`, `sub_total_invoiced`, `base_sub_total_invoiced`, `sub_total_refunded`, `base_sub_total_refunded`, `discount_percent`, `discount_amount`, `base_discount_amount`, `discount_invoiced`, `base_discount_invoiced`, `discount_refunded`, `base_discount_refunded`, `tax_amount`, `base_tax_amount`, `tax_amount_invoiced`, `base_tax_amount_invoiced`, `tax_amount_refunded`, `base_tax_amount_refunded`, `shipping_amount`, `base_shipping_amount`, `shipping_invoiced`, `base_shipping_invoiced`, `shipping_refunded`, `base_shipping_refunded`, `customer_id`, `customer_type`, `channel_id`, `channel_type`, `created_at`, `updated_at`, `cart_id`, `applied_cart_rule_ids`, `shipping_discount_amount`, `base_shipping_discount_amount`) VALUES
(1, '1', 'pending', 'Default', 1, 'pegalogics@gmail.com', 'pega', 'logics', NULL, NULL, 'flatrate_flatrate', 'Flat Rate - Flat Rate', 'Flat Rate Shipping', NULL, 0, 1, 1, 'USD', 'USD', 'USD', 20.0000, 20.0000, 0.0000, 0.0000, 0.0000, 0.0000, 10.0000, 10.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 10.0000, 10.0000, 0.0000, 0.0000, 0.0000, 0.0000, NULL, NULL, 1, 'Webkul\\Core\\Models\\Channel', '2021-03-23 05:57:08', '2021-03-23 05:57:08', 1, '', 0.0000, 0.0000);

-- --------------------------------------------------------

--
-- Table structure for table `order_brands`
--

CREATE TABLE `order_brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `order_item_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `brand` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `order_brands`
--

INSERT INTO `order_brands` (`id`, `order_id`, `order_item_id`, `product_id`, `brand`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, NULL, '2021-03-23 05:57:09', '2021-03-23 05:57:09');

-- --------------------------------------------------------

--
-- Table structure for table `order_comments`
--

CREATE TABLE `order_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_notified` tinyint(1) NOT NULL DEFAULT '0',
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` decimal(12,4) DEFAULT '0.0000',
  `total_weight` decimal(12,4) DEFAULT '0.0000',
  `qty_ordered` int(11) DEFAULT '0',
  `qty_shipped` int(11) DEFAULT '0',
  `qty_invoiced` int(11) DEFAULT '0',
  `qty_canceled` int(11) DEFAULT '0',
  `qty_refunded` int(11) DEFAULT '0',
  `price` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `base_price` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `total` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `base_total` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `total_invoiced` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `base_total_invoiced` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `amount_refunded` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `base_amount_refunded` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `discount_percent` decimal(12,4) DEFAULT '0.0000',
  `discount_amount` decimal(12,4) DEFAULT '0.0000',
  `base_discount_amount` decimal(12,4) DEFAULT '0.0000',
  `discount_invoiced` decimal(12,4) DEFAULT '0.0000',
  `base_discount_invoiced` decimal(12,4) DEFAULT '0.0000',
  `discount_refunded` decimal(12,4) DEFAULT '0.0000',
  `base_discount_refunded` decimal(12,4) DEFAULT '0.0000',
  `tax_percent` decimal(12,4) DEFAULT '0.0000',
  `tax_amount` decimal(12,4) DEFAULT '0.0000',
  `base_tax_amount` decimal(12,4) DEFAULT '0.0000',
  `tax_amount_invoiced` decimal(12,4) DEFAULT '0.0000',
  `base_tax_amount_invoiced` decimal(12,4) DEFAULT '0.0000',
  `tax_amount_refunded` decimal(12,4) DEFAULT '0.0000',
  `base_tax_amount_refunded` decimal(12,4) DEFAULT '0.0000',
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `product_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `additional` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `sku`, `type`, `name`, `coupon_code`, `weight`, `total_weight`, `qty_ordered`, `qty_shipped`, `qty_invoiced`, `qty_canceled`, `qty_refunded`, `price`, `base_price`, `total`, `base_total`, `total_invoiced`, `base_total_invoiced`, `amount_refunded`, `base_amount_refunded`, `discount_percent`, `discount_amount`, `base_discount_amount`, `discount_invoiced`, `base_discount_invoiced`, `discount_refunded`, `base_discount_refunded`, `tax_percent`, `tax_amount`, `base_tax_amount`, `tax_amount_invoiced`, `base_tax_amount_invoiced`, `tax_amount_refunded`, `base_tax_amount_refunded`, `product_id`, `product_type`, `order_id`, `parent_id`, `additional`, `created_at`, `updated_at`) VALUES
(1, '1', 'simple', 'product1', NULL, 20.0000, 20.0000, 1, 0, 0, 0, 0, 10.0000, 10.0000, 10.0000, 10.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 1, 'Webkul\\Product\\Models\\Product', 1, NULL, '{\"_token\": \"gbtIu2pobdLIbusFG9hwyAjzltXs7zw5wit4ZYPM\", \"locale\": \"en\", \"quantity\": 1, \"product_id\": \"1\"}', '2021-03-23 05:57:08', '2021-03-23 05:57:08');

-- --------------------------------------------------------

--
-- Table structure for table `order_payment`
--

CREATE TABLE `order_payment` (
  `id` int(10) UNSIGNED NOT NULL,
  `method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `additional` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `order_payment`
--

INSERT INTO `order_payment` (`id`, `method`, `method_title`, `order_id`, `additional`, `created_at`, `updated_at`) VALUES
(1, 'cashondelivery', NULL, 1, NULL, '2021-03-23 05:57:08', '2021-03-23 05:57:08');

-- --------------------------------------------------------

--
-- Table structure for table `order_transactions`
--

CREATE TABLE `order_transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` json DEFAULT NULL,
  `invoice_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `attribute_family_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `type`, `created_at`, `updated_at`, `parent_id`, `attribute_family_id`) VALUES
(1, '1', 'simple', '2021-03-22 05:28:07', '2021-03-22 05:28:07', NULL, 1),
(2, '2', 'simple', '2021-03-22 10:36:46', '2021-03-22 10:36:46', NULL, 1),
(3, '3', 'simple', '2021-03-23 11:55:01', '2021-03-23 11:55:01', NULL, 1),
(4, '88', 'simple', '2021-03-25 09:37:05', '2021-03-25 09:37:05', NULL, 1),
(5, '89', 'simple', '2021-03-25 10:08:19', '2021-03-25 10:08:19', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_attribute_values`
--

CREATE TABLE `product_attribute_values` (
  `id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `channel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_value` text COLLATE utf8mb4_unicode_ci,
  `boolean_value` tinyint(1) DEFAULT NULL,
  `integer_value` int(11) DEFAULT NULL,
  `float_value` decimal(12,4) DEFAULT NULL,
  `datetime_value` datetime DEFAULT NULL,
  `date_value` date DEFAULT NULL,
  `json_value` json DEFAULT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `attribute_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `product_attribute_values`
--

INSERT INTO `product_attribute_values` (`id`, `locale`, `channel`, `text_value`, `boolean_value`, `integer_value`, `float_value`, `datetime_value`, `date_value`, `json_value`, `product_id`, `attribute_id`) VALUES
(1, 'en', 'default', '<p>product 1 descrition</p>', NULL, NULL, NULL, NULL, NULL, NULL, 1, 9),
(2, 'en', 'default', '<p>product 1 descrition</p>', NULL, NULL, NULL, NULL, NULL, NULL, 1, 10),
(3, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1),
(4, 'en', 'default', 'product1', NULL, NULL, NULL, NULL, NULL, NULL, 1, 2),
(5, NULL, NULL, 'product1', NULL, NULL, NULL, NULL, NULL, NULL, 1, 3),
(6, NULL, 'default', NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, 4),
(7, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 5),
(8, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 6),
(9, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 7),
(10, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 8),
(11, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, 23),
(12, NULL, NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, 1, 24),
(13, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 26),
(14, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, 1, 27),
(15, 'en', 'default', 'Meta Title sectioin', NULL, NULL, NULL, NULL, NULL, NULL, 1, 16),
(16, 'en', 'default', 'meta keywords section', NULL, NULL, NULL, NULL, NULL, NULL, 1, 17),
(17, 'en', 'default', 'Meta description section', NULL, NULL, NULL, NULL, NULL, NULL, 1, 18),
(18, NULL, NULL, NULL, NULL, NULL, 10.0000, NULL, NULL, NULL, 1, 11),
(19, NULL, 'default', NULL, NULL, NULL, 20.0000, NULL, NULL, NULL, 1, 12),
(20, NULL, NULL, NULL, NULL, NULL, 5.0000, NULL, NULL, NULL, 1, 13),
(21, NULL, 'default', NULL, NULL, NULL, NULL, NULL, '2021-03-11', NULL, 1, 14),
(22, NULL, 'default', NULL, NULL, NULL, NULL, NULL, '2021-03-20', NULL, 1, 15),
(23, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 19),
(24, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 20),
(25, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 21),
(26, NULL, NULL, '20', NULL, NULL, NULL, NULL, NULL, NULL, 1, 22),
(27, 'en', 'default', '<p>product 1 description</p>', NULL, NULL, NULL, NULL, NULL, NULL, 3, 9),
(28, 'en', 'default', '<p>product 1 description</p>', NULL, NULL, NULL, NULL, NULL, NULL, 3, 10),
(29, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, 3, 1),
(30, 'en', 'default', 'product 3', NULL, NULL, NULL, NULL, NULL, NULL, 3, 2),
(31, NULL, NULL, 'product-3', NULL, NULL, NULL, NULL, NULL, NULL, 3, 3),
(32, NULL, 'default', NULL, NULL, 0, NULL, NULL, NULL, NULL, 3, 4),
(33, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 3, 5),
(34, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 3, 6),
(35, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 3, 7),
(36, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 3, 8),
(37, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 3, 23),
(38, NULL, NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, 3, 24),
(39, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 3, 26),
(40, NULL, NULL, 'product 3', NULL, NULL, NULL, NULL, NULL, NULL, 3, 27),
(41, 'en', 'default', '', NULL, NULL, NULL, NULL, NULL, NULL, 3, 16),
(42, 'en', 'default', '', NULL, NULL, NULL, NULL, NULL, NULL, 3, 17),
(43, 'en', 'default', '', NULL, NULL, NULL, NULL, NULL, NULL, 3, 18),
(44, NULL, NULL, NULL, NULL, NULL, 50.0000, NULL, NULL, NULL, 3, 11),
(45, NULL, 'default', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 12),
(46, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 13),
(47, NULL, 'default', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 14),
(48, NULL, 'default', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 15),
(49, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 3, 19),
(50, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 3, 20),
(51, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 3, 21),
(52, NULL, NULL, '20', NULL, NULL, NULL, NULL, NULL, NULL, 3, 22),
(53, 'en', 'default', '<p>des</p>', NULL, NULL, NULL, NULL, NULL, NULL, 4, 9),
(54, 'en', 'default', '<p>des</p>', NULL, NULL, NULL, NULL, NULL, NULL, 4, 10),
(55, NULL, NULL, '88', NULL, NULL, NULL, NULL, NULL, NULL, 4, 1),
(56, 'en', 'default', 'tiptop', NULL, NULL, NULL, NULL, NULL, NULL, 4, 2),
(57, NULL, NULL, 'tiptop', NULL, NULL, NULL, NULL, NULL, NULL, 4, 3),
(58, NULL, 'default', NULL, NULL, 0, NULL, NULL, NULL, NULL, 4, 4),
(59, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 4, 5),
(60, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 4, 6),
(61, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 4, 7),
(62, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 4, 8),
(63, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 4, 23),
(64, NULL, NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, 4, 24),
(65, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, 4, 26),
(66, NULL, NULL, 'tiptop', NULL, NULL, NULL, NULL, NULL, NULL, 4, 27),
(67, 'en', 'default', '', NULL, NULL, NULL, NULL, NULL, NULL, 4, 16),
(68, 'en', 'default', '', NULL, NULL, NULL, NULL, NULL, NULL, 4, 17),
(69, 'en', 'default', '', NULL, NULL, NULL, NULL, NULL, NULL, 4, 18),
(70, NULL, NULL, NULL, NULL, NULL, 40.0000, NULL, NULL, NULL, 4, 11),
(71, NULL, 'default', NULL, NULL, NULL, 40.0000, NULL, NULL, NULL, 4, 12),
(72, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 13),
(73, NULL, 'default', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 14),
(74, NULL, 'default', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 15),
(75, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 4, 19),
(76, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 4, 20),
(77, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 4, 21),
(78, NULL, NULL, '8', NULL, NULL, NULL, NULL, NULL, NULL, 4, 22),
(79, 'en', 'default', '<p>brand</p>', NULL, NULL, NULL, NULL, NULL, NULL, 5, 9),
(80, 'en', 'default', '<p>jockey</p>', NULL, NULL, NULL, NULL, NULL, NULL, 5, 10),
(81, NULL, NULL, '89', NULL, NULL, NULL, NULL, NULL, NULL, 5, 1),
(82, 'en', 'default', 'inner wear', NULL, NULL, NULL, NULL, NULL, NULL, 5, 2),
(83, NULL, NULL, 'inner-wear', NULL, NULL, NULL, NULL, NULL, NULL, 5, 3),
(84, NULL, 'default', NULL, NULL, 0, NULL, NULL, NULL, NULL, 5, 4),
(85, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 5, 5),
(86, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 5, 6),
(87, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 5, 7),
(88, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 5, 8),
(89, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 5, 23),
(90, NULL, NULL, NULL, NULL, 8, NULL, NULL, NULL, NULL, 5, 24),
(91, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 5, 26),
(92, NULL, NULL, 'jockey ', NULL, NULL, NULL, NULL, NULL, NULL, 5, 27),
(93, 'en', 'default', '', NULL, NULL, NULL, NULL, NULL, NULL, 5, 16),
(94, 'en', 'default', '', NULL, NULL, NULL, NULL, NULL, NULL, 5, 17),
(95, 'en', 'default', '', NULL, NULL, NULL, NULL, NULL, NULL, 5, 18),
(96, NULL, NULL, NULL, NULL, NULL, 180.0000, NULL, NULL, NULL, 5, 11),
(97, NULL, 'default', NULL, NULL, NULL, 180.0000, NULL, NULL, NULL, 5, 12),
(98, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 13),
(99, NULL, 'default', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 14),
(100, NULL, 'default', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 15),
(101, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 5, 19),
(102, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 5, 20),
(103, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 5, 21),
(104, NULL, NULL, '40', NULL, NULL, NULL, NULL, NULL, NULL, 5, 22);

-- --------------------------------------------------------

--
-- Table structure for table `product_bundle_options`
--

CREATE TABLE `product_bundle_options` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_required` tinyint(1) NOT NULL DEFAULT '1',
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `product_bundle_option_products`
--

CREATE TABLE `product_bundle_option_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '0',
  `is_user_defined` tinyint(1) NOT NULL DEFAULT '1',
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `product_bundle_option_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `product_bundle_option_translations`
--

CREATE TABLE `product_bundle_option_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` text COLLATE utf8mb4_unicode_ci,
  `product_bundle_option_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`product_id`, `category_id`) VALUES
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(4, 12),
(4, 1),
(5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `product_cross_sells`
--

CREATE TABLE `product_cross_sells` (
  `parent_id` int(10) UNSIGNED NOT NULL,
  `child_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `product_customer_group_prices`
--

CREATE TABLE `product_customer_group_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '0',
  `value_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `product_id` int(10) UNSIGNED NOT NULL,
  `customer_group_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `product_downloadable_links`
--

CREATE TABLE `product_downloadable_links` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `sample_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_file_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `downloads` int(11) NOT NULL DEFAULT '0',
  `sort_order` int(11) DEFAULT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `product_downloadable_link_translations`
--

CREATE TABLE `product_downloadable_link_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `product_downloadable_link_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `product_downloadable_samples`
--

CREATE TABLE `product_downloadable_samples` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `product_downloadable_sample_translations`
--

CREATE TABLE `product_downloadable_sample_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `product_downloadable_sample_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `product_flat`
--

CREATE TABLE `product_flat` (
  `id` int(10) UNSIGNED NOT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `url_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new` tinyint(1) DEFAULT NULL,
  `featured` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(12,4) DEFAULT NULL,
  `cost` decimal(12,4) DEFAULT NULL,
  `special_price` decimal(12,4) DEFAULT NULL,
  `special_price_from` date DEFAULT NULL,
  `special_price_to` date DEFAULT NULL,
  `weight` decimal(12,4) DEFAULT NULL,
  `color` int(11) DEFAULT NULL,
  `color_label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `size_label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `channel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `visible_individually` tinyint(1) DEFAULT NULL,
  `min_price` decimal(12,4) DEFAULT NULL,
  `max_price` decimal(12,4) DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `meta_title` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `width` decimal(12,4) DEFAULT NULL,
  `height` decimal(12,4) DEFAULT NULL,
  `depth` decimal(12,4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `product_flat`
--

INSERT INTO `product_flat` (`id`, `sku`, `product_number`, `name`, `description`, `url_key`, `new`, `featured`, `status`, `thumbnail`, `price`, `cost`, `special_price`, `special_price_from`, `special_price_to`, `weight`, `color`, `color_label`, `size`, `size_label`, `created_at`, `locale`, `channel`, `product_id`, `updated_at`, `parent_id`, `visible_individually`, `min_price`, `max_price`, `short_description`, `meta_title`, `meta_keywords`, `meta_description`, `width`, `height`, `depth`) VALUES
(1, '1', '1', 'product1', '<p>product 1 descrition</p>', 'product1', 1, 1, 1, NULL, 10.0000, 20.0000, 5.0000, '2021-03-11', '2021-03-20', 20.0000, 1, 'Red', 6, 'S', '2021-03-22 10:58:07', 'en', 'default', 1, '2021-03-22 10:58:07', NULL, 1, 10.0000, 10.0000, '<p>product 1 descrition</p>', 'Meta Title sectioin', 'meta keywords section', 'Meta description section', 0.0000, 0.0000, 0.0000),
(2, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-22 16:06:46', 'en', 'default', 2, '2021-03-22 16:06:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '3', 'product 3', 'product 3', '<p>product 1 description</p>', 'product-3', 0, 0, 1, NULL, 50.0000, NULL, NULL, NULL, NULL, 20.0000, 1, 'Red', 6, 'S', '2021-03-23 17:25:01', 'en', 'default', 3, '2021-03-23 17:25:01', NULL, 0, 50.0000, 50.0000, '<p>product 1 description</p>', '', '', '', 0.0000, 0.0000, 0.0000),
(4, '88', 'tiptop', 'tiptop', '<p>des</p>', 'tiptop', 1, 1, 1, NULL, 40.0000, 40.0000, NULL, NULL, NULL, 8.0000, 1, 'Red', 6, 'S', '2021-03-25 15:07:05', 'en', 'default', 4, '2021-03-25 15:07:05', NULL, 1, 40.0000, 40.0000, '<p>des</p>', '', '', '', 0.0000, 0.0000, 0.0000),
(5, '89', 'jockey ', 'inner wear', '<p>jockey</p>', 'inner-wear', 1, 1, 1, NULL, 180.0000, 180.0000, NULL, NULL, NULL, 40.0000, 1, 'Red', 8, 'L', '2021-03-25 15:38:19', 'en', 'default', 5, '2021-03-25 15:38:19', NULL, 1, 180.0000, 180.0000, '<p>brand</p>', '', '', '', 0.0000, 0.0000, 0.0000);

-- --------------------------------------------------------

--
-- Table structure for table `product_grouped_products`
--

CREATE TABLE `product_grouped_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '0',
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `product_id` int(10) UNSIGNED NOT NULL,
  `associated_product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `type`, `path`, `product_id`) VALUES
(2, NULL, 'product/1/Qm7OspkwspfnYmamRPFwLAoyWPmddJ5L1adNdgmW.jpg', 1),
(3, NULL, 'product/4/tMgHubLOOCtitOIpTcH2DOccceJB5npfHbuCzqN1.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `product_inventories`
--

CREATE TABLE `product_inventories` (
  `id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '0',
  `product_id` int(10) UNSIGNED NOT NULL,
  `inventory_source_id` int(10) UNSIGNED NOT NULL,
  `vendor_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `product_inventories`
--

INSERT INTO `product_inventories` (`id`, `qty`, `product_id`, `inventory_source_id`, `vendor_id`) VALUES
(1, 10, 1, 1, 0),
(2, 50, 3, 1, 0),
(3, 0, 4, 1, 0),
(4, 1, 5, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_ordered_inventories`
--

CREATE TABLE `product_ordered_inventories` (
  `id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '0',
  `product_id` int(10) UNSIGNED NOT NULL,
  `channel_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `product_ordered_inventories`
--

INSERT INTO `product_ordered_inventories` (`id`, `qty`, `product_id`, `channel_id`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_relations`
--

CREATE TABLE `product_relations` (
  `parent_id` int(10) UNSIGNED NOT NULL,
  `child_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `product_super_attributes`
--

CREATE TABLE `product_super_attributes` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `attribute_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `product_up_sells`
--

CREATE TABLE `product_up_sells` (
  `parent_id` int(10) UNSIGNED NOT NULL,
  `child_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `product_videos`
--

CREATE TABLE `product_videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `refunds`
--

CREATE TABLE `refunds` (
  `id` int(10) UNSIGNED NOT NULL,
  `increment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_sent` tinyint(1) NOT NULL DEFAULT '0',
  `total_qty` int(11) DEFAULT NULL,
  `base_currency_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `channel_currency_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_currency_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adjustment_refund` decimal(12,4) DEFAULT '0.0000',
  `base_adjustment_refund` decimal(12,4) DEFAULT '0.0000',
  `adjustment_fee` decimal(12,4) DEFAULT '0.0000',
  `base_adjustment_fee` decimal(12,4) DEFAULT '0.0000',
  `sub_total` decimal(12,4) DEFAULT '0.0000',
  `base_sub_total` decimal(12,4) DEFAULT '0.0000',
  `grand_total` decimal(12,4) DEFAULT '0.0000',
  `base_grand_total` decimal(12,4) DEFAULT '0.0000',
  `shipping_amount` decimal(12,4) DEFAULT '0.0000',
  `base_shipping_amount` decimal(12,4) DEFAULT '0.0000',
  `tax_amount` decimal(12,4) DEFAULT '0.0000',
  `base_tax_amount` decimal(12,4) DEFAULT '0.0000',
  `discount_percent` decimal(12,4) DEFAULT '0.0000',
  `discount_amount` decimal(12,4) DEFAULT '0.0000',
  `base_discount_amount` decimal(12,4) DEFAULT '0.0000',
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `refund_items`
--

CREATE TABLE `refund_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `base_price` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `total` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `base_total` decimal(12,4) NOT NULL DEFAULT '0.0000',
  `tax_amount` decimal(12,4) DEFAULT '0.0000',
  `base_tax_amount` decimal(12,4) DEFAULT '0.0000',
  `discount_percent` decimal(12,4) DEFAULT '0.0000',
  `discount_amount` decimal(12,4) DEFAULT '0.0000',
  `base_discount_amount` decimal(12,4) DEFAULT '0.0000',
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `product_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_item_id` int(10) UNSIGNED DEFAULT NULL,
  `refund_id` int(10) UNSIGNED DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `additional` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permission_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `permission_type`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'Administrator role', 'all', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipments`
--

CREATE TABLE `shipments` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_qty` int(11) DEFAULT NULL,
  `total_weight` int(11) DEFAULT NULL,
  `carrier_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carrier_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `track_number` text COLLATE utf8mb4_unicode_ci,
  `email_sent` tinyint(1) NOT NULL DEFAULT '0',
  `customer_id` int(10) UNSIGNED DEFAULT NULL,
  `customer_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `order_address_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `inventory_source_id` int(10) UNSIGNED DEFAULT NULL,
  `inventory_source_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `shipment_items`
--

CREATE TABLE `shipment_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `price` decimal(12,4) DEFAULT '0.0000',
  `base_price` decimal(12,4) DEFAULT '0.0000',
  `total` decimal(12,4) DEFAULT '0.0000',
  `base_total` decimal(12,4) DEFAULT '0.0000',
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `product_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_item_id` int(10) UNSIGNED DEFAULT NULL,
  `shipment_id` int(10) UNSIGNED NOT NULL,
  `additional` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `channel_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slider_path` text COLLATE utf8mb4_unicode_ci,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `path`, `content`, `channel_id`, `created_at`, `updated_at`, `slider_path`, `locale`) VALUES
(1, 'shopslider1', 'slider_images/Default/R0o7NhymNV8gqXZJDHmqilBvJJDwv2MKJXU02aZj.jpg', '', 1, '2021-03-22 00:51:34', '2021-03-23 12:40:28', '', 'en'),
(2, 'shopslider2', 'slider_images/Default/1zzWJmYlFNIK4vUWphHTRBFwVkzuj5cwMz5oQb1k.jpg', '', 1, '2021-03-22 01:06:05', '2021-03-23 12:40:43', '', 'en'),
(3, 'shopslider3', 'slider_images/Default/g1cSEAEQTSeWraxZZJR1ziFFpMxo77udNpdVayVl.jpg', '', 1, '2021-03-22 01:28:27', '2021-03-23 12:42:24', '', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers_list`
--

CREATE TABLE `subscribers_list` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_subscribed` tinyint(1) NOT NULL DEFAULT '0',
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `channel_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customer_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tax_categories`
--

CREATE TABLE `tax_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tax_categories_tax_rates`
--

CREATE TABLE `tax_categories_tax_rates` (
  `id` int(10) UNSIGNED NOT NULL,
  `tax_category_id` int(10) UNSIGNED NOT NULL,
  `tax_rate_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tax_rates`
--

CREATE TABLE `tax_rates` (
  `id` int(10) UNSIGNED NOT NULL,
  `identifier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_zip` tinyint(1) NOT NULL DEFAULT '0',
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_from` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_rate` decimal(12,4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `velocity_contents`
--

CREATE TABLE `velocity_contents` (
  `id` int(10) UNSIGNED NOT NULL,
  `content_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `velocity_contents`
--

INSERT INTO `velocity_contents` (`id`, `content_type`, `position`, `status`, `created_at`, `updated_at`) VALUES
(1, 'category', 1, 1, '2021-03-22 05:40:29', '2021-03-22 05:40:29'),
(2, 'category', 2, 1, '2021-03-22 05:41:28', '2021-03-22 05:41:28'),
(3, 'category', 3, 1, '2021-03-22 05:46:56', '2021-03-22 05:46:56'),
(4, 'category', 4, 1, '2021-03-22 07:06:32', '2021-03-22 07:06:32'),
(5, 'category', 5, 1, '2021-03-22 07:07:41', '2021-03-22 07:07:41'),
(6, 'category', 6, 1, '2021-03-22 07:09:17', '2021-03-22 07:09:17');

-- --------------------------------------------------------

--
-- Table structure for table `velocity_contents_translations`
--

CREATE TABLE `velocity_contents_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `content_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom_heading` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_link` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_target` tinyint(1) NOT NULL DEFAULT '0',
  `catalog_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `products` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `velocity_contents_translations`
--

INSERT INTO `velocity_contents_translations` (`id`, `content_id`, `title`, `custom_title`, `custom_heading`, `page_link`, `link_target`, `catalog_type`, `products`, `description`, `locale`, `created_at`, `updated_at`) VALUES
(1, 1, 'Home', NULL, NULL, 'home', 0, NULL, NULL, NULL, 'en', NULL, NULL),
(2, 1, 'Home', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'fr', NULL, NULL),
(3, 1, 'Home', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'nl', NULL, NULL),
(4, 1, 'Home', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'tr', NULL, NULL),
(5, 1, 'Home', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'es', NULL, NULL),
(6, 2, 'Vegetable', NULL, NULL, 'vegetable', 0, NULL, NULL, NULL, 'en', NULL, NULL),
(7, 2, 'Vegetable', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'fr', NULL, NULL),
(8, 2, 'Vegetable', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'nl', NULL, NULL),
(9, 2, 'Vegetable', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'tr', NULL, NULL),
(10, 2, 'Vegetable', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'es', NULL, NULL),
(11, 3, 'Fruits', NULL, NULL, 'fruits', 0, NULL, NULL, NULL, 'en', NULL, NULL),
(12, 3, 'Fruites', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'fr', NULL, NULL),
(13, 3, 'Fruites', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'nl', NULL, NULL),
(14, 3, 'Fruites', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'tr', NULL, NULL),
(15, 3, 'Fruites', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'es', NULL, NULL),
(16, 4, 'Household', NULL, NULL, 'household', 0, NULL, NULL, NULL, 'en', NULL, NULL),
(17, 4, 'Household', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'fr', NULL, NULL),
(18, 4, 'Household', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'nl', NULL, NULL),
(19, 4, 'Household', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'tr', NULL, NULL),
(20, 4, 'Household', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'es', NULL, NULL),
(21, 5, 'Personal Care', NULL, NULL, 'personal-care', 0, NULL, NULL, NULL, 'en', NULL, NULL),
(22, 5, 'Personal Care', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'fr', NULL, NULL),
(23, 5, 'Personal Care', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'nl', NULL, NULL),
(24, 5, 'Personal Care', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'tr', NULL, NULL),
(25, 5, 'Personal Care', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'es', NULL, NULL),
(26, 6, 'Biscuits', NULL, NULL, 'biscuits', 0, NULL, NULL, NULL, 'en', NULL, NULL),
(27, 6, 'Biscuits', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'fr', NULL, NULL),
(28, 6, 'Biscuits', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'nl', NULL, NULL),
(29, 6, 'Biscuits', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'tr', NULL, NULL),
(30, 6, 'Biscuits', NULL, NULL, NULL, 0, NULL, NULL, NULL, 'es', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `velocity_customer_compare_products`
--

CREATE TABLE `velocity_customer_compare_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_flat_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `velocity_meta_data`
--

CREATE TABLE `velocity_meta_data` (
  `id` int(10) UNSIGNED NOT NULL,
  `home_page_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_left_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_middle_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider` tinyint(1) NOT NULL DEFAULT '0',
  `advertisement` json DEFAULT NULL,
  `sidebar_category_count` int(11) NOT NULL DEFAULT '9',
  `featured_product_count` int(11) NOT NULL DEFAULT '10',
  `new_products_count` int(11) NOT NULL DEFAULT '10',
  `subscription_bar_content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_view_images` json DEFAULT NULL,
  `product_policy` text COLLATE utf8mb4_unicode_ci,
  `locale` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `channel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `header_content_count` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `velocity_meta_data`
--

INSERT INTO `velocity_meta_data` (`id`, `home_page_content`, `footer_left_content`, `footer_middle_content`, `slider`, `advertisement`, `sidebar_category_count`, `featured_product_count`, `new_products_count`, `subscription_bar_content`, `created_at`, `updated_at`, `product_view_images`, `product_policy`, `locale`, `channel`, `header_content_count`) VALUES
(1, '<p>@include(\'shop::home.category\', [\'category\' => \'show-by-category\'])</p>\r\n<p>@include(\'shop::home.advertisements.advertisement-three\')</p>\r\n<p>@include(\'shop::home.featured-products\')</p>\r\n<p>@include(\'shop::home.category\', [\'category\' => \'show-by-brands\'])</p>\r\n<p>@include(\'shop::home.advertisements.advertisement-four\')&nbsp;</p>\r\n<p>@include(\'shop::home.new-products\')</p>\r\n<p>@include(\'shop::home.product-policy\')</p>\r\n<p></p>\r\n<p></p>\r\n<p></p>\r\n<p></p>\r\n<p></p>\r\n<p></p>\r\n<p></p>\r\n<p></p>', '', '<p></p>\r\n<!--<div class=\"col-sm-7 col-lg-3\">\r\n<div class=\"single-widget\">\r\n<h2>About Shop</h2>\r\n<ul class=\"list-unstyle\">\r\n<li><a href=\"#\">Company Information</a></li>\r\n<li><a href=\"#\">Careers</a></li>\r\n<li><a href=\"#\">Store Location</a></li>\r\n<li><a href=\"#\">Copyright</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"col-sm-7 col-lg-3\">\r\n<div class=\"single-widget\">\r\n<h2>Grocery Income</h2>\r\n<address>ABC Street, XYZ Building<br /> Sector 3, Noida - 201301</address><a><i class=\"fa fa-phone\"></i> 123-456-7890</a><br /> <a><i class=\"fa fa-envelope\"></i> Email@gmail.com</a></div>\r\n</div>\r\n-->\r\n<div class=\"col-lg-6 col-md-12 col-sm-12 no-padding\">\r\n<ul type=\"none\">\r\n<li><a href=\"{!! url(\'page/about-us\') !!}\">About Us</a></li>\r\n<li><a href=\"{!! url(\'page/cutomer-service\') !!}\">Customer Service</a></li>\r\n<li><a href=\"{!! url(\'page/whats-new\') !!}\">What&rsquo;s New</a></li>\r\n<li><a href=\"{!! url(\'page/contact-us\') !!}\">Contact Us </a></li>\r\n</ul>\r\n</div>\r\n<div class=\"col-lg-6 col-md-12 col-sm-12 no-padding\">\r\n<ul type=\"none\">\r\n<li><a href=\"{!! url(\'page/return-policy\') !!}\"> Order and Returns </a></li>\r\n<li><a href=\"{!! url(\'page/payment-policy\') !!}\"> Payment Policy </a></li>\r\n<li><a href=\"{!! url(\'page/shipping-policy\') !!}\"> Shipping Policy</a></li>\r\n<li><a href=\"{!! url(\'page/privacy-policy\') !!}\"> Privacy and Cookies Policy </a></li>\r\n</ul>\r\n</div>\r\n<p></p>', 1, '{\"2\": {\"1\": \"velocity/images/lG4BVFWUTYB9FlzjaDL062LltD7ljctsQA2YjTlV.jpg\", \"2\": \"velocity/images/MkElJxczhyhMuWNBzIVavbwQsAgGten4wrUAzj2K.jpg\"}, \"3\": {\"5\": \"velocity/images/4IO3vmAVtw2vB1Wq6R7KVWqpRwdhZkekfSQVSmnH.jpg\", \"6\": \"velocity/images/IYaYPIWHQzZQNmAV7xC6Efh5hJthZwmO0IcOmoVG.jpg\", \"7\": \"velocity/images/SKzx8zo5OL4KQb07KL2iespN71pFmLxrBEwcQN08.jpg\"}, \"4\": {\"4\": \"velocity/images/ma5Rnco7v2KrUHz3YKE7RX2ZrXSm5fRctCttzo30.jpg\", \"5\": \"velocity/images/ECnrULPYnG6aCaHuJ93X0DcZ9L6XgKCb70njEl96.jpg\", \"6\": \"velocity/images/CDYdWLnoY2Hf5qXc7u8b5ImJ7qzUjYcmMK3rAhdc.jpg\", \"7\": \"velocity/images/jVbo3QEIOr9fiean3tHg7KQ2UlxAENe6eHR62mDM.jpg\"}}', 9, 10, 10, '', NULL, '2021-03-23 12:33:47', NULL, '<div class=\"row col-12 remove-padding-margin\">\r\n<div class=\"col-lg-4 col-sm-12 product-policy-wrapper\">\r\n<div class=\"card\">\r\n<div class=\"policy\">\r\n<div class=\"left\"><i class=\"rango-van-ship fs40\"></i></div>\r\n<div class=\"right\"><span class=\"font-setting fs20\">Free Shipping on Order $20 or More</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-4 col-sm-12 product-policy-wrapper\">\r\n<div class=\"card\">\r\n<div class=\"policy\">\r\n<div class=\"left\"><i class=\"rango-exchnage fs40\"></i></div>\r\n<div class=\"right\"><span class=\"font-setting fs20\">Product Replace &amp; Return Available </span></div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-4 col-sm-12 product-policy-wrapper\">\r\n<div class=\"card\">\r\n<div class=\"policy\">\r\n<div class=\"left\"><i class=\"rango-exchnage fs40\"></i></div>\r\n<div class=\"right\"><span class=\"font-setting fs20\">Product Exchange and EMI Available </span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'en', 'default', '8');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(10) UNSIGNED NOT NULL,
  `channel_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `item_options` json DEFAULT NULL,
  `moved_to_cart` date DEFAULT NULL,
  `shared` tinyint(1) DEFAULT NULL,
  `time_of_moving` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `additional` json DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_customer_id_foreign` (`customer_id`),
  ADD KEY `addresses_cart_id_foreign` (`cart_id`),
  ADD KEY `addresses_order_id_foreign` (`order_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_api_token_unique` (`api_token`);

--
-- Indexes for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD KEY `admin_password_resets_email_index` (`email`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attributes_code_unique` (`code`);

--
-- Indexes for table `attribute_families`
--
ALTER TABLE `attribute_families`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attribute_groups`
--
ALTER TABLE `attribute_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attribute_groups_attribute_family_id_name_unique` (`attribute_family_id`,`name`);

--
-- Indexes for table `attribute_group_mappings`
--
ALTER TABLE `attribute_group_mappings`
  ADD PRIMARY KEY (`attribute_id`,`attribute_group_id`),
  ADD KEY `attribute_group_mappings_attribute_group_id_foreign` (`attribute_group_id`);

--
-- Indexes for table `attribute_options`
--
ALTER TABLE `attribute_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_options_attribute_id_foreign` (`attribute_id`);

--
-- Indexes for table `attribute_option_translations`
--
ALTER TABLE `attribute_option_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attribute_option_translations_attribute_option_id_locale_unique` (`attribute_option_id`,`locale`);

--
-- Indexes for table `attribute_translations`
--
ALTER TABLE `attribute_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attribute_translations_attribute_id_locale_unique` (`attribute_id`,`locale`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_order_id_foreign` (`order_id`),
  ADD KEY `bookings_product_id_foreign` (`product_id`);

--
-- Indexes for table `booking_products`
--
ALTER TABLE `booking_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `booking_product_appointment_slots`
--
ALTER TABLE `booking_product_appointment_slots`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_product_appointment_slots_booking_product_id_foreign` (`booking_product_id`);

--
-- Indexes for table `booking_product_default_slots`
--
ALTER TABLE `booking_product_default_slots`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_product_default_slots_booking_product_id_foreign` (`booking_product_id`);

--
-- Indexes for table `booking_product_event_tickets`
--
ALTER TABLE `booking_product_event_tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_product_event_tickets_booking_product_id_foreign` (`booking_product_id`);

--
-- Indexes for table `booking_product_event_ticket_translations`
--
ALTER TABLE `booking_product_event_ticket_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `booking_product_event_ticket_translations_locale_unique` (`booking_product_event_ticket_id`,`locale`);

--
-- Indexes for table `booking_product_rental_slots`
--
ALTER TABLE `booking_product_rental_slots`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_product_rental_slots_booking_product_id_foreign` (`booking_product_id`);

--
-- Indexes for table `booking_product_table_slots`
--
ALTER TABLE `booking_product_table_slots`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_product_table_slots_booking_product_id_foreign` (`booking_product_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_customer_id_foreign` (`customer_id`),
  ADD KEY `cart_channel_id_foreign` (`channel_id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_items_product_id_foreign` (`product_id`),
  ADD KEY `cart_items_cart_id_foreign` (`cart_id`),
  ADD KEY `cart_items_tax_category_id_foreign` (`tax_category_id`),
  ADD KEY `cart_items_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `cart_item_inventories`
--
ALTER TABLE `cart_item_inventories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_payment`
--
ALTER TABLE `cart_payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_payment_cart_id_foreign` (`cart_id`);

--
-- Indexes for table `cart_rules`
--
ALTER TABLE `cart_rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_rule_channels`
--
ALTER TABLE `cart_rule_channels`
  ADD PRIMARY KEY (`cart_rule_id`,`channel_id`),
  ADD KEY `cart_rule_channels_channel_id_foreign` (`channel_id`);

--
-- Indexes for table `cart_rule_coupons`
--
ALTER TABLE `cart_rule_coupons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_rule_coupons_cart_rule_id_foreign` (`cart_rule_id`);

--
-- Indexes for table `cart_rule_coupon_usage`
--
ALTER TABLE `cart_rule_coupon_usage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_rule_coupon_usage_cart_rule_coupon_id_foreign` (`cart_rule_coupon_id`),
  ADD KEY `cart_rule_coupon_usage_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `cart_rule_customers`
--
ALTER TABLE `cart_rule_customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_rule_customers_cart_rule_id_foreign` (`cart_rule_id`),
  ADD KEY `cart_rule_customers_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `cart_rule_customer_groups`
--
ALTER TABLE `cart_rule_customer_groups`
  ADD PRIMARY KEY (`cart_rule_id`,`customer_group_id`),
  ADD KEY `cart_rule_customer_groups_customer_group_id_foreign` (`customer_group_id`);

--
-- Indexes for table `cart_rule_translations`
--
ALTER TABLE `cart_rule_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cart_rule_translations_cart_rule_id_locale_unique` (`cart_rule_id`,`locale`);

--
-- Indexes for table `cart_shipping_rates`
--
ALTER TABLE `cart_shipping_rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_shipping_rates_cart_address_id_foreign` (`cart_address_id`);

--
-- Indexes for table `catalog_rules`
--
ALTER TABLE `catalog_rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catalog_rule_channels`
--
ALTER TABLE `catalog_rule_channels`
  ADD PRIMARY KEY (`catalog_rule_id`,`channel_id`),
  ADD KEY `catalog_rule_channels_channel_id_foreign` (`channel_id`);

--
-- Indexes for table `catalog_rule_customer_groups`
--
ALTER TABLE `catalog_rule_customer_groups`
  ADD PRIMARY KEY (`catalog_rule_id`,`customer_group_id`),
  ADD KEY `catalog_rule_customer_groups_customer_group_id_foreign` (`customer_group_id`);

--
-- Indexes for table `catalog_rule_products`
--
ALTER TABLE `catalog_rule_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catalog_rule_products_product_id_foreign` (`product_id`),
  ADD KEY `catalog_rule_products_customer_group_id_foreign` (`customer_group_id`),
  ADD KEY `catalog_rule_products_catalog_rule_id_foreign` (`catalog_rule_id`),
  ADD KEY `catalog_rule_products_channel_id_foreign` (`channel_id`);

--
-- Indexes for table `catalog_rule_product_prices`
--
ALTER TABLE `catalog_rule_product_prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catalog_rule_product_prices_product_id_foreign` (`product_id`),
  ADD KEY `catalog_rule_product_prices_customer_group_id_foreign` (`customer_group_id`),
  ADD KEY `catalog_rule_product_prices_catalog_rule_id_foreign` (`catalog_rule_id`),
  ADD KEY `catalog_rule_product_prices_channel_id_foreign` (`channel_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories__lft__rgt_parent_id_index` (`_lft`,`_rgt`,`parent_id`);

--
-- Indexes for table `category_filterable_attributes`
--
ALTER TABLE `category_filterable_attributes`
  ADD KEY `category_filterable_attributes_category_id_foreign` (`category_id`),
  ADD KEY `category_filterable_attributes_attribute_id_foreign` (`attribute_id`);

--
-- Indexes for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_translations_category_id_slug_locale_unique` (`category_id`,`slug`,`locale`),
  ADD KEY `category_translations_locale_id_foreign` (`locale_id`);

--
-- Indexes for table `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `channels_default_locale_id_foreign` (`default_locale_id`),
  ADD KEY `channels_base_currency_id_foreign` (`base_currency_id`),
  ADD KEY `channels_root_category_id_foreign` (`root_category_id`);

--
-- Indexes for table `channel_currencies`
--
ALTER TABLE `channel_currencies`
  ADD PRIMARY KEY (`channel_id`,`currency_id`),
  ADD KEY `channel_currencies_currency_id_foreign` (`currency_id`);

--
-- Indexes for table `channel_inventory_sources`
--
ALTER TABLE `channel_inventory_sources`
  ADD UNIQUE KEY `channel_inventory_sources_channel_id_inventory_source_id_unique` (`channel_id`,`inventory_source_id`),
  ADD KEY `channel_inventory_sources_inventory_source_id_foreign` (`inventory_source_id`);

--
-- Indexes for table `channel_locales`
--
ALTER TABLE `channel_locales`
  ADD PRIMARY KEY (`channel_id`,`locale_id`),
  ADD KEY `channel_locales_locale_id_foreign` (`locale_id`);

--
-- Indexes for table `channel_translations`
--
ALTER TABLE `channel_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `channel_translations_channel_id_locale_unique` (`channel_id`,`locale`),
  ADD KEY `channel_translations_locale_index` (`locale`);

--
-- Indexes for table `cms_pages`
--
ALTER TABLE `cms_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_page_channels`
--
ALTER TABLE `cms_page_channels`
  ADD UNIQUE KEY `cms_page_channels_cms_page_id_channel_id_unique` (`cms_page_id`,`channel_id`),
  ADD KEY `cms_page_channels_channel_id_foreign` (`channel_id`);

--
-- Indexes for table `cms_page_translations`
--
ALTER TABLE `cms_page_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cms_page_translations_cms_page_id_url_key_locale_unique` (`cms_page_id`,`url_key`,`locale`);

--
-- Indexes for table `core_config`
--
ALTER TABLE `core_config`
  ADD PRIMARY KEY (`id`),
  ADD KEY `core_config_channel_id_foreign` (`channel_code`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_states`
--
ALTER TABLE `country_states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_states_country_id_foreign` (`country_id`);

--
-- Indexes for table `country_state_translations`
--
ALTER TABLE `country_state_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_state_translations_country_state_id_foreign` (`country_state_id`);

--
-- Indexes for table `country_translations`
--
ALTER TABLE `country_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_translations_country_id_foreign` (`country_id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency_exchange_rates`
--
ALTER TABLE `currency_exchange_rates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `currency_exchange_rates_target_currency_unique` (`target_currency`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`),
  ADD UNIQUE KEY `customers_api_token_unique` (`api_token`),
  ADD KEY `customers_customer_group_id_foreign` (`customer_group_id`);

--
-- Indexes for table `customer_groups`
--
ALTER TABLE `customer_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_groups_code_unique` (`code`);

--
-- Indexes for table `customer_password_resets`
--
ALTER TABLE `customer_password_resets`
  ADD KEY `customer_password_resets_email_index` (`email`);

--
-- Indexes for table `customer_social_accounts`
--
ALTER TABLE `customer_social_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_social_accounts_provider_id_unique` (`provider_id`),
  ADD KEY `customer_social_accounts_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `downloadable_link_purchased`
--
ALTER TABLE `downloadable_link_purchased`
  ADD PRIMARY KEY (`id`),
  ADD KEY `downloadable_link_purchased_customer_id_foreign` (`customer_id`),
  ADD KEY `downloadable_link_purchased_order_id_foreign` (`order_id`),
  ADD KEY `downloadable_link_purchased_order_item_id_foreign` (`order_item_id`);

--
-- Indexes for table `inventory_sources`
--
ALTER TABLE `inventory_sources`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `inventory_sources_code_unique` (`code`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_order_id_foreign` (`order_id`),
  ADD KEY `invoices_order_address_id_foreign` (`order_address_id`);

--
-- Indexes for table `invoice_items`
--
ALTER TABLE `invoice_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_items_invoice_id_foreign` (`invoice_id`),
  ADD KEY `invoice_items_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `locales`
--
ALTER TABLE `locales`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `locales_code_unique` (`code`);

--
-- Indexes for table `marketing_campaigns`
--
ALTER TABLE `marketing_campaigns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `marketing_campaigns_channel_id_foreign` (`channel_id`),
  ADD KEY `marketing_campaigns_customer_group_id_foreign` (`customer_group_id`),
  ADD KEY `marketing_campaigns_marketing_template_id_foreign` (`marketing_template_id`),
  ADD KEY `marketing_campaigns_marketing_event_id_foreign` (`marketing_event_id`);

--
-- Indexes for table `marketing_events`
--
ALTER TABLE `marketing_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketing_templates`
--
ALTER TABLE `marketing_templates`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_increment_id_unique` (`increment_id`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`),
  ADD KEY `orders_channel_id_foreign` (`channel_id`);

--
-- Indexes for table `order_brands`
--
ALTER TABLE `order_brands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_brands_order_id_foreign` (`order_id`),
  ADD KEY `order_brands_order_item_id_foreign` (`order_item_id`),
  ADD KEY `order_brands_product_id_foreign` (`product_id`),
  ADD KEY `order_brands_brand_foreign` (`brand`);

--
-- Indexes for table `order_comments`
--
ALTER TABLE `order_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_comments_order_id_foreign` (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `order_payment`
--
ALTER TABLE `order_payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_payment_order_id_foreign` (`order_id`);

--
-- Indexes for table `order_transactions`
--
ALTER TABLE `order_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_transactions_order_id_foreign` (`order_id`);

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
  ADD UNIQUE KEY `products_sku_unique` (`sku`),
  ADD KEY `products_attribute_family_id_foreign` (`attribute_family_id`),
  ADD KEY `products_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `product_attribute_values`
--
ALTER TABLE `product_attribute_values`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `chanel_locale_attribute_value_index_unique` (`channel`,`locale`,`attribute_id`,`product_id`),
  ADD KEY `product_attribute_values_product_id_foreign` (`product_id`),
  ADD KEY `product_attribute_values_attribute_id_foreign` (`attribute_id`);

--
-- Indexes for table `product_bundle_options`
--
ALTER TABLE `product_bundle_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_bundle_options_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_bundle_option_products`
--
ALTER TABLE `product_bundle_option_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_bundle_option_products_product_bundle_option_id_foreign` (`product_bundle_option_id`),
  ADD KEY `product_bundle_option_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_bundle_option_translations`
--
ALTER TABLE `product_bundle_option_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_bundle_option_translations_option_id_locale_unique` (`product_bundle_option_id`,`locale`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD KEY `product_categories_product_id_foreign` (`product_id`),
  ADD KEY `product_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_cross_sells`
--
ALTER TABLE `product_cross_sells`
  ADD KEY `product_cross_sells_parent_id_foreign` (`parent_id`),
  ADD KEY `product_cross_sells_child_id_foreign` (`child_id`);

--
-- Indexes for table `product_customer_group_prices`
--
ALTER TABLE `product_customer_group_prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_customer_group_prices_product_id_foreign` (`product_id`),
  ADD KEY `product_customer_group_prices_customer_group_id_foreign` (`customer_group_id`);

--
-- Indexes for table `product_downloadable_links`
--
ALTER TABLE `product_downloadable_links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_downloadable_links_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_downloadable_link_translations`
--
ALTER TABLE `product_downloadable_link_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `link_translations_link_id_foreign` (`product_downloadable_link_id`);

--
-- Indexes for table `product_downloadable_samples`
--
ALTER TABLE `product_downloadable_samples`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_downloadable_samples_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_downloadable_sample_translations`
--
ALTER TABLE `product_downloadable_sample_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sample_translations_sample_id_foreign` (`product_downloadable_sample_id`);

--
-- Indexes for table `product_flat`
--
ALTER TABLE `product_flat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_flat_unique_index` (`product_id`,`channel`,`locale`),
  ADD KEY `product_flat_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `product_grouped_products`
--
ALTER TABLE `product_grouped_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_grouped_products_product_id_foreign` (`product_id`),
  ADD KEY `product_grouped_products_associated_product_id_foreign` (`associated_product_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_inventories`
--
ALTER TABLE `product_inventories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_source_vendor_index_unique` (`product_id`,`inventory_source_id`,`vendor_id`),
  ADD KEY `product_inventories_inventory_source_id_foreign` (`inventory_source_id`);

--
-- Indexes for table `product_ordered_inventories`
--
ALTER TABLE `product_ordered_inventories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_ordered_inventories_product_id_channel_id_unique` (`product_id`,`channel_id`),
  ADD KEY `product_ordered_inventories_channel_id_foreign` (`channel_id`);

--
-- Indexes for table `product_relations`
--
ALTER TABLE `product_relations`
  ADD KEY `product_relations_parent_id_foreign` (`parent_id`),
  ADD KEY `product_relations_child_id_foreign` (`child_id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_reviews_product_id_foreign` (`product_id`),
  ADD KEY `product_reviews_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `product_super_attributes`
--
ALTER TABLE `product_super_attributes`
  ADD KEY `product_super_attributes_product_id_foreign` (`product_id`),
  ADD KEY `product_super_attributes_attribute_id_foreign` (`attribute_id`);

--
-- Indexes for table `product_up_sells`
--
ALTER TABLE `product_up_sells`
  ADD KEY `product_up_sells_parent_id_foreign` (`parent_id`),
  ADD KEY `product_up_sells_child_id_foreign` (`child_id`);

--
-- Indexes for table `product_videos`
--
ALTER TABLE `product_videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_videos_product_id_foreign` (`product_id`);

--
-- Indexes for table `refunds`
--
ALTER TABLE `refunds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `refunds_order_id_foreign` (`order_id`);

--
-- Indexes for table `refund_items`
--
ALTER TABLE `refund_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `refund_items_order_item_id_foreign` (`order_item_id`),
  ADD KEY `refund_items_refund_id_foreign` (`refund_id`),
  ADD KEY `refund_items_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipments`
--
ALTER TABLE `shipments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shipments_order_id_foreign` (`order_id`),
  ADD KEY `shipments_inventory_source_id_foreign` (`inventory_source_id`),
  ADD KEY `shipments_order_address_id_foreign` (`order_address_id`);

--
-- Indexes for table `shipment_items`
--
ALTER TABLE `shipment_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shipment_items_shipment_id_foreign` (`shipment_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliders_channel_id_foreign` (`channel_id`);

--
-- Indexes for table `subscribers_list`
--
ALTER TABLE `subscribers_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscribers_list_channel_id_foreign` (`channel_id`),
  ADD KEY `subscribers_list_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `tax_categories`
--
ALTER TABLE `tax_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tax_categories_code_unique` (`code`);

--
-- Indexes for table `tax_categories_tax_rates`
--
ALTER TABLE `tax_categories_tax_rates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tax_map_index_unique` (`tax_category_id`,`tax_rate_id`),
  ADD KEY `tax_categories_tax_rates_tax_rate_id_foreign` (`tax_rate_id`);

--
-- Indexes for table `tax_rates`
--
ALTER TABLE `tax_rates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tax_rates_identifier_unique` (`identifier`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `velocity_contents`
--
ALTER TABLE `velocity_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `velocity_contents_translations`
--
ALTER TABLE `velocity_contents_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `velocity_contents_translations_content_id_foreign` (`content_id`);

--
-- Indexes for table `velocity_customer_compare_products`
--
ALTER TABLE `velocity_customer_compare_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `velocity_customer_compare_products_product_flat_id_foreign` (`product_flat_id`),
  ADD KEY `velocity_customer_compare_products_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `velocity_meta_data`
--
ALTER TABLE `velocity_meta_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlist_channel_id_foreign` (`channel_id`),
  ADD KEY `wishlist_product_id_foreign` (`product_id`),
  ADD KEY `wishlist_customer_id_foreign` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `attribute_families`
--
ALTER TABLE `attribute_families`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attribute_groups`
--
ALTER TABLE `attribute_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `attribute_options`
--
ALTER TABLE `attribute_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `attribute_option_translations`
--
ALTER TABLE `attribute_option_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `attribute_translations`
--
ALTER TABLE `attribute_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_products`
--
ALTER TABLE `booking_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_product_appointment_slots`
--
ALTER TABLE `booking_product_appointment_slots`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_product_default_slots`
--
ALTER TABLE `booking_product_default_slots`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_product_event_tickets`
--
ALTER TABLE `booking_product_event_tickets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_product_event_ticket_translations`
--
ALTER TABLE `booking_product_event_ticket_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_product_rental_slots`
--
ALTER TABLE `booking_product_rental_slots`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_product_table_slots`
--
ALTER TABLE `booking_product_table_slots`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart_item_inventories`
--
ALTER TABLE `cart_item_inventories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart_payment`
--
ALTER TABLE `cart_payment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart_rules`
--
ALTER TABLE `cart_rules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart_rule_coupons`
--
ALTER TABLE `cart_rule_coupons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart_rule_coupon_usage`
--
ALTER TABLE `cart_rule_coupon_usage`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart_rule_customers`
--
ALTER TABLE `cart_rule_customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart_rule_translations`
--
ALTER TABLE `cart_rule_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart_shipping_rates`
--
ALTER TABLE `cart_shipping_rates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `catalog_rules`
--
ALTER TABLE `catalog_rules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catalog_rule_products`
--
ALTER TABLE `catalog_rule_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catalog_rule_product_prices`
--
ALTER TABLE `catalog_rule_product_prices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `category_translations`
--
ALTER TABLE `category_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `channels`
--
ALTER TABLE `channels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `channel_translations`
--
ALTER TABLE `channel_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cms_pages`
--
ALTER TABLE `cms_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cms_page_translations`
--
ALTER TABLE `cms_page_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `core_config`
--
ALTER TABLE `core_config`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;

--
-- AUTO_INCREMENT for table `country_states`
--
ALTER TABLE `country_states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=587;

--
-- AUTO_INCREMENT for table `country_state_translations`
--
ALTER TABLE `country_state_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2291;

--
-- AUTO_INCREMENT for table `country_translations`
--
ALTER TABLE `country_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1021;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `currency_exchange_rates`
--
ALTER TABLE `currency_exchange_rates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer_groups`
--
ALTER TABLE `customer_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_social_accounts`
--
ALTER TABLE `customer_social_accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `downloadable_link_purchased`
--
ALTER TABLE `downloadable_link_purchased`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory_sources`
--
ALTER TABLE `inventory_sources`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice_items`
--
ALTER TABLE `invoice_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locales`
--
ALTER TABLE `locales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `marketing_campaigns`
--
ALTER TABLE `marketing_campaigns`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marketing_events`
--
ALTER TABLE `marketing_events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `marketing_templates`
--
ALTER TABLE `marketing_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_brands`
--
ALTER TABLE `order_brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_comments`
--
ALTER TABLE `order_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_payment`
--
ALTER TABLE `order_payment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_transactions`
--
ALTER TABLE `order_transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_attribute_values`
--
ALTER TABLE `product_attribute_values`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `product_bundle_options`
--
ALTER TABLE `product_bundle_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_bundle_option_products`
--
ALTER TABLE `product_bundle_option_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_bundle_option_translations`
--
ALTER TABLE `product_bundle_option_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_customer_group_prices`
--
ALTER TABLE `product_customer_group_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_downloadable_links`
--
ALTER TABLE `product_downloadable_links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_downloadable_link_translations`
--
ALTER TABLE `product_downloadable_link_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_downloadable_samples`
--
ALTER TABLE `product_downloadable_samples`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_downloadable_sample_translations`
--
ALTER TABLE `product_downloadable_sample_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_flat`
--
ALTER TABLE `product_flat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_grouped_products`
--
ALTER TABLE `product_grouped_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_inventories`
--
ALTER TABLE `product_inventories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_ordered_inventories`
--
ALTER TABLE `product_ordered_inventories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_videos`
--
ALTER TABLE `product_videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `refunds`
--
ALTER TABLE `refunds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `refund_items`
--
ALTER TABLE `refund_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipments`
--
ALTER TABLE `shipments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipment_items`
--
ALTER TABLE `shipment_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribers_list`
--
ALTER TABLE `subscribers_list`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax_categories`
--
ALTER TABLE `tax_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax_categories_tax_rates`
--
ALTER TABLE `tax_categories_tax_rates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax_rates`
--
ALTER TABLE `tax_rates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `velocity_contents`
--
ALTER TABLE `velocity_contents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `velocity_contents_translations`
--
ALTER TABLE `velocity_contents_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `velocity_customer_compare_products`
--
ALTER TABLE `velocity_customer_compare_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `velocity_meta_data`
--
ALTER TABLE `velocity_meta_data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `addresses_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `addresses_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `attribute_groups`
--
ALTER TABLE `attribute_groups`
  ADD CONSTRAINT `attribute_groups_attribute_family_id_foreign` FOREIGN KEY (`attribute_family_id`) REFERENCES `attribute_families` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `attribute_group_mappings`
--
ALTER TABLE `attribute_group_mappings`
  ADD CONSTRAINT `attribute_group_mappings_attribute_group_id_foreign` FOREIGN KEY (`attribute_group_id`) REFERENCES `attribute_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attribute_group_mappings_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `attribute_options`
--
ALTER TABLE `attribute_options`
  ADD CONSTRAINT `attribute_options_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `attribute_option_translations`
--
ALTER TABLE `attribute_option_translations`
  ADD CONSTRAINT `attribute_option_translations_attribute_option_id_foreign` FOREIGN KEY (`attribute_option_id`) REFERENCES `attribute_options` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `attribute_translations`
--
ALTER TABLE `attribute_translations`
  ADD CONSTRAINT `attribute_translations_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `booking_products`
--
ALTER TABLE `booking_products`
  ADD CONSTRAINT `booking_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `booking_product_appointment_slots`
--
ALTER TABLE `booking_product_appointment_slots`
  ADD CONSTRAINT `booking_product_appointment_slots_booking_product_id_foreign` FOREIGN KEY (`booking_product_id`) REFERENCES `booking_products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `booking_product_default_slots`
--
ALTER TABLE `booking_product_default_slots`
  ADD CONSTRAINT `booking_product_default_slots_booking_product_id_foreign` FOREIGN KEY (`booking_product_id`) REFERENCES `booking_products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `booking_product_event_tickets`
--
ALTER TABLE `booking_product_event_tickets`
  ADD CONSTRAINT `booking_product_event_tickets_booking_product_id_foreign` FOREIGN KEY (`booking_product_id`) REFERENCES `booking_products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `booking_product_event_ticket_translations`
--
ALTER TABLE `booking_product_event_ticket_translations`
  ADD CONSTRAINT `booking_product_event_ticket_translations_locale_foreign` FOREIGN KEY (`booking_product_event_ticket_id`) REFERENCES `booking_product_event_tickets` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `booking_product_rental_slots`
--
ALTER TABLE `booking_product_rental_slots`
  ADD CONSTRAINT `booking_product_rental_slots_booking_product_id_foreign` FOREIGN KEY (`booking_product_id`) REFERENCES `booking_products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `booking_product_table_slots`
--
ALTER TABLE `booking_product_table_slots`
  ADD CONSTRAINT `booking_product_table_slots_booking_product_id_foreign` FOREIGN KEY (`booking_product_id`) REFERENCES `booking_products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_channel_id_foreign` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_items_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `cart_items` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_items_tax_category_id_foreign` FOREIGN KEY (`tax_category_id`) REFERENCES `tax_categories` (`id`);

--
-- Constraints for table `cart_payment`
--
ALTER TABLE `cart_payment`
  ADD CONSTRAINT `cart_payment_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cart_rule_channels`
--
ALTER TABLE `cart_rule_channels`
  ADD CONSTRAINT `cart_rule_channels_cart_rule_id_foreign` FOREIGN KEY (`cart_rule_id`) REFERENCES `cart_rules` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_rule_channels_channel_id_foreign` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cart_rule_coupons`
--
ALTER TABLE `cart_rule_coupons`
  ADD CONSTRAINT `cart_rule_coupons_cart_rule_id_foreign` FOREIGN KEY (`cart_rule_id`) REFERENCES `cart_rules` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cart_rule_coupon_usage`
--
ALTER TABLE `cart_rule_coupon_usage`
  ADD CONSTRAINT `cart_rule_coupon_usage_cart_rule_coupon_id_foreign` FOREIGN KEY (`cart_rule_coupon_id`) REFERENCES `cart_rule_coupons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_rule_coupon_usage_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cart_rule_customers`
--
ALTER TABLE `cart_rule_customers`
  ADD CONSTRAINT `cart_rule_customers_cart_rule_id_foreign` FOREIGN KEY (`cart_rule_id`) REFERENCES `cart_rules` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_rule_customers_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cart_rule_customer_groups`
--
ALTER TABLE `cart_rule_customer_groups`
  ADD CONSTRAINT `cart_rule_customer_groups_cart_rule_id_foreign` FOREIGN KEY (`cart_rule_id`) REFERENCES `cart_rules` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_rule_customer_groups_customer_group_id_foreign` FOREIGN KEY (`customer_group_id`) REFERENCES `customer_groups` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cart_rule_translations`
--
ALTER TABLE `cart_rule_translations`
  ADD CONSTRAINT `cart_rule_translations_cart_rule_id_foreign` FOREIGN KEY (`cart_rule_id`) REFERENCES `cart_rules` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cart_shipping_rates`
--
ALTER TABLE `cart_shipping_rates`
  ADD CONSTRAINT `cart_shipping_rates_cart_address_id_foreign` FOREIGN KEY (`cart_address_id`) REFERENCES `addresses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `catalog_rule_channels`
--
ALTER TABLE `catalog_rule_channels`
  ADD CONSTRAINT `catalog_rule_channels_catalog_rule_id_foreign` FOREIGN KEY (`catalog_rule_id`) REFERENCES `catalog_rules` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `catalog_rule_channels_channel_id_foreign` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `catalog_rule_customer_groups`
--
ALTER TABLE `catalog_rule_customer_groups`
  ADD CONSTRAINT `catalog_rule_customer_groups_catalog_rule_id_foreign` FOREIGN KEY (`catalog_rule_id`) REFERENCES `catalog_rules` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `catalog_rule_customer_groups_customer_group_id_foreign` FOREIGN KEY (`customer_group_id`) REFERENCES `customer_groups` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `catalog_rule_products`
--
ALTER TABLE `catalog_rule_products`
  ADD CONSTRAINT `catalog_rule_products_catalog_rule_id_foreign` FOREIGN KEY (`catalog_rule_id`) REFERENCES `catalog_rules` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `catalog_rule_products_channel_id_foreign` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `catalog_rule_products_customer_group_id_foreign` FOREIGN KEY (`customer_group_id`) REFERENCES `customer_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `catalog_rule_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `catalog_rule_product_prices`
--
ALTER TABLE `catalog_rule_product_prices`
  ADD CONSTRAINT `catalog_rule_product_prices_catalog_rule_id_foreign` FOREIGN KEY (`catalog_rule_id`) REFERENCES `catalog_rules` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `catalog_rule_product_prices_channel_id_foreign` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `catalog_rule_product_prices_customer_group_id_foreign` FOREIGN KEY (`customer_group_id`) REFERENCES `customer_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `catalog_rule_product_prices_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_filterable_attributes`
--
ALTER TABLE `category_filterable_attributes`
  ADD CONSTRAINT `category_filterable_attributes_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_filterable_attributes_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD CONSTRAINT `category_translations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_translations_locale_id_foreign` FOREIGN KEY (`locale_id`) REFERENCES `locales` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `channels`
--
ALTER TABLE `channels`
  ADD CONSTRAINT `channels_base_currency_id_foreign` FOREIGN KEY (`base_currency_id`) REFERENCES `currencies` (`id`),
  ADD CONSTRAINT `channels_default_locale_id_foreign` FOREIGN KEY (`default_locale_id`) REFERENCES `locales` (`id`),
  ADD CONSTRAINT `channels_root_category_id_foreign` FOREIGN KEY (`root_category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `channel_currencies`
--
ALTER TABLE `channel_currencies`
  ADD CONSTRAINT `channel_currencies_channel_id_foreign` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `channel_currencies_currency_id_foreign` FOREIGN KEY (`currency_id`) REFERENCES `currencies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `channel_inventory_sources`
--
ALTER TABLE `channel_inventory_sources`
  ADD CONSTRAINT `channel_inventory_sources_channel_id_foreign` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `channel_inventory_sources_inventory_source_id_foreign` FOREIGN KEY (`inventory_source_id`) REFERENCES `inventory_sources` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `channel_locales`
--
ALTER TABLE `channel_locales`
  ADD CONSTRAINT `channel_locales_channel_id_foreign` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `channel_locales_locale_id_foreign` FOREIGN KEY (`locale_id`) REFERENCES `locales` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `channel_translations`
--
ALTER TABLE `channel_translations`
  ADD CONSTRAINT `channel_translations_channel_id_foreign` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cms_page_channels`
--
ALTER TABLE `cms_page_channels`
  ADD CONSTRAINT `cms_page_channels_channel_id_foreign` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cms_page_channels_cms_page_id_foreign` FOREIGN KEY (`cms_page_id`) REFERENCES `cms_pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cms_page_translations`
--
ALTER TABLE `cms_page_translations`
  ADD CONSTRAINT `cms_page_translations_cms_page_id_foreign` FOREIGN KEY (`cms_page_id`) REFERENCES `cms_pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `country_states`
--
ALTER TABLE `country_states`
  ADD CONSTRAINT `country_states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `country_state_translations`
--
ALTER TABLE `country_state_translations`
  ADD CONSTRAINT `country_state_translations_country_state_id_foreign` FOREIGN KEY (`country_state_id`) REFERENCES `country_states` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `country_translations`
--
ALTER TABLE `country_translations`
  ADD CONSTRAINT `country_translations_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `currency_exchange_rates`
--
ALTER TABLE `currency_exchange_rates`
  ADD CONSTRAINT `currency_exchange_rates_target_currency_foreign` FOREIGN KEY (`target_currency`) REFERENCES `currencies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_customer_group_id_foreign` FOREIGN KEY (`customer_group_id`) REFERENCES `customer_groups` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `customer_social_accounts`
--
ALTER TABLE `customer_social_accounts`
  ADD CONSTRAINT `customer_social_accounts_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `downloadable_link_purchased`
--
ALTER TABLE `downloadable_link_purchased`
  ADD CONSTRAINT `downloadable_link_purchased_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `downloadable_link_purchased_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `downloadable_link_purchased_order_item_id_foreign` FOREIGN KEY (`order_item_id`) REFERENCES `order_items` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `invoice_items`
--
ALTER TABLE `invoice_items`
  ADD CONSTRAINT `invoice_items_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `invoice_items_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `invoice_items` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `marketing_campaigns`
--
ALTER TABLE `marketing_campaigns`
  ADD CONSTRAINT `marketing_campaigns_channel_id_foreign` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `marketing_campaigns_customer_group_id_foreign` FOREIGN KEY (`customer_group_id`) REFERENCES `customer_groups` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `marketing_campaigns_marketing_event_id_foreign` FOREIGN KEY (`marketing_event_id`) REFERENCES `marketing_events` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `marketing_campaigns_marketing_template_id_foreign` FOREIGN KEY (`marketing_template_id`) REFERENCES `marketing_templates` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_channel_id_foreign` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `order_brands`
--
ALTER TABLE `order_brands`
  ADD CONSTRAINT `order_brands_brand_foreign` FOREIGN KEY (`brand`) REFERENCES `attribute_options` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_brands_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_brands_order_item_id_foreign` FOREIGN KEY (`order_item_id`) REFERENCES `order_items` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_brands_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_comments`
--
ALTER TABLE `order_comments`
  ADD CONSTRAINT `order_comments_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `order_items` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_payment`
--
ALTER TABLE `order_payment`
  ADD CONSTRAINT `order_payment_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_transactions`
--
ALTER TABLE `order_transactions`
  ADD CONSTRAINT `order_transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_attribute_family_id_foreign` FOREIGN KEY (`attribute_family_id`) REFERENCES `attribute_families` (`id`),
  ADD CONSTRAINT `products_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_attribute_values`
--
ALTER TABLE `product_attribute_values`
  ADD CONSTRAINT `product_attribute_values_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_attribute_values_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_bundle_options`
--
ALTER TABLE `product_bundle_options`
  ADD CONSTRAINT `product_bundle_options_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_bundle_option_products`
--
ALTER TABLE `product_bundle_option_products`
  ADD CONSTRAINT `product_bundle_option_products_product_bundle_option_id_foreign` FOREIGN KEY (`product_bundle_option_id`) REFERENCES `product_bundle_options` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_bundle_option_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_bundle_option_translations`
--
ALTER TABLE `product_bundle_option_translations`
  ADD CONSTRAINT `product_bundle_option_translations_option_id_foreign` FOREIGN KEY (`product_bundle_option_id`) REFERENCES `product_bundle_options` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `product_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_categories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_cross_sells`
--
ALTER TABLE `product_cross_sells`
  ADD CONSTRAINT `product_cross_sells_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_cross_sells_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_customer_group_prices`
--
ALTER TABLE `product_customer_group_prices`
  ADD CONSTRAINT `product_customer_group_prices_customer_group_id_foreign` FOREIGN KEY (`customer_group_id`) REFERENCES `customer_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_customer_group_prices_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_downloadable_links`
--
ALTER TABLE `product_downloadable_links`
  ADD CONSTRAINT `product_downloadable_links_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_downloadable_link_translations`
--
ALTER TABLE `product_downloadable_link_translations`
  ADD CONSTRAINT `link_translations_link_id_foreign` FOREIGN KEY (`product_downloadable_link_id`) REFERENCES `product_downloadable_links` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_downloadable_samples`
--
ALTER TABLE `product_downloadable_samples`
  ADD CONSTRAINT `product_downloadable_samples_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_downloadable_sample_translations`
--
ALTER TABLE `product_downloadable_sample_translations`
  ADD CONSTRAINT `sample_translations_sample_id_foreign` FOREIGN KEY (`product_downloadable_sample_id`) REFERENCES `product_downloadable_samples` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_flat`
--
ALTER TABLE `product_flat`
  ADD CONSTRAINT `product_flat_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `product_flat` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_flat_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_grouped_products`
--
ALTER TABLE `product_grouped_products`
  ADD CONSTRAINT `product_grouped_products_associated_product_id_foreign` FOREIGN KEY (`associated_product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_grouped_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_inventories`
--
ALTER TABLE `product_inventories`
  ADD CONSTRAINT `product_inventories_inventory_source_id_foreign` FOREIGN KEY (`inventory_source_id`) REFERENCES `inventory_sources` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_inventories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_ordered_inventories`
--
ALTER TABLE `product_ordered_inventories`
  ADD CONSTRAINT `product_ordered_inventories_channel_id_foreign` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_ordered_inventories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_relations`
--
ALTER TABLE `product_relations`
  ADD CONSTRAINT `product_relations_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_relations_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD CONSTRAINT `product_reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_super_attributes`
--
ALTER TABLE `product_super_attributes`
  ADD CONSTRAINT `product_super_attributes_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`),
  ADD CONSTRAINT `product_super_attributes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_up_sells`
--
ALTER TABLE `product_up_sells`
  ADD CONSTRAINT `product_up_sells_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_up_sells_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_videos`
--
ALTER TABLE `product_videos`
  ADD CONSTRAINT `product_videos_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `refunds`
--
ALTER TABLE `refunds`
  ADD CONSTRAINT `refunds_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `refund_items`
--
ALTER TABLE `refund_items`
  ADD CONSTRAINT `refund_items_order_item_id_foreign` FOREIGN KEY (`order_item_id`) REFERENCES `order_items` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `refund_items_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `refund_items` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `refund_items_refund_id_foreign` FOREIGN KEY (`refund_id`) REFERENCES `refunds` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shipments`
--
ALTER TABLE `shipments`
  ADD CONSTRAINT `shipments_inventory_source_id_foreign` FOREIGN KEY (`inventory_source_id`) REFERENCES `inventory_sources` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `shipments_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shipment_items`
--
ALTER TABLE `shipment_items`
  ADD CONSTRAINT `shipment_items_shipment_id_foreign` FOREIGN KEY (`shipment_id`) REFERENCES `shipments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sliders`
--
ALTER TABLE `sliders`
  ADD CONSTRAINT `sliders_channel_id_foreign` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subscribers_list`
--
ALTER TABLE `subscribers_list`
  ADD CONSTRAINT `subscribers_list_channel_id_foreign` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subscribers_list_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `tax_categories_tax_rates`
--
ALTER TABLE `tax_categories_tax_rates`
  ADD CONSTRAINT `tax_categories_tax_rates_tax_category_id_foreign` FOREIGN KEY (`tax_category_id`) REFERENCES `tax_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tax_categories_tax_rates_tax_rate_id_foreign` FOREIGN KEY (`tax_rate_id`) REFERENCES `tax_rates` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `velocity_contents_translations`
--
ALTER TABLE `velocity_contents_translations`
  ADD CONSTRAINT `velocity_contents_translations_content_id_foreign` FOREIGN KEY (`content_id`) REFERENCES `velocity_contents` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `velocity_customer_compare_products`
--
ALTER TABLE `velocity_customer_compare_products`
  ADD CONSTRAINT `velocity_customer_compare_products_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `velocity_customer_compare_products_product_flat_id_foreign` FOREIGN KEY (`product_flat_id`) REFERENCES `product_flat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_channel_id_foreign` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlist_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlist_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
