-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 26, 2021 at 07:26 PM
-- Server version: 10.5.13-MariaDB-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bsnx5419_bsncargo`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `sub_purpose` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `misi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `company_id`, `sub_purpose`, `visi`, `misi`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'Menjadi Perusahaan Logistik yang bersinergi agar dapat mengedepankan kepuasan dan kepentingan Pelanggan melalui pelayanan terbaik', 'Menjadi salah satu solusi bagi dunia logistik di Indonesia, dengan menggabungkan kemampuan perusahaan yang saling bersinergi, sehingga kehadiran kami tidak hanya memberikan solusi bagi pelanggan tapi juga memberikan keuntungan kepada pelanggan dan juga dunia logistik dalam meningkatkan perekonomian Indonesia', NULL, NULL, '2021-11-24 00:08:28');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client`, `description`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Cum blanditiis', 'Unde eaque sit veniam laborum Consequatur verita', '1635787734_client.png', '2021-11-01 10:28:54', '2021-11-01 10:28:54'),
(4, 'Inventore aliquam', 'Tempor voluptatum magna rem molestiae', '1635787745_client.png', '2021-11-01 10:29:05', '2021-11-01 10:29:05'),
(5, 'Harum et1', 'Facilis quia molestiae vel non temporibus', '1635789717_client.png', '2021-11-01 10:29:18', '2021-11-01 11:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company`, `detail`, `telp`, `email`, `twitter`, `facebook`, `whatsapp`, `instagram`, `city`, `address`, `image`, `created_at`, `updated_at`) VALUES
(1, 'PT BINTANG SAMUDERA NUSWANTORO', 'Perusahaan di Bidang cargo logistic, termurah di jakarta selatan', '+6285714753816', 'info@bsncargo.com', 'bsncargo_logistic', 'bsncargo', '+6281298819922', 'bsn_cargo', 'Jakarta Selatan', 'Graha Mampang, \r\nJl. Mampang Prapatan Raya No.KAV.100, RT.2/RW.1, Kota Jakarta Selatan.', 'bsncargo.png', '2021-10-30 10:13:44', '2021-11-23 21:31:35');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `driver_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_telp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `description`, `type`, `created_at`, `updated_at`) VALUES
(1, 'In amet sint corrupti error at', 'Architecto dolor suscipit quo culpa est eaque dol', 'syarat_ketentuan', '2021-10-31 07:13:23', '2021-11-13 05:09:11'),
(3, 'Eum recusandae Sint', 'Pariatur Maiores vi', 'syarat_ketentuan', '2021-10-31 07:13:55', '2021-10-31 07:13:55'),
(4, 'Qui sit labore sequ', 'This is the first item\'s accordion body. It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It\'s also worth noting that just about any HTML can go within the .accordion-body, though the transition does limit overflow.', 'syarat_ketentuan', '2021-10-31 07:25:42', '2021-10-31 07:25:42'),
(5, 'Deleniti soluta face 131', 'Ut praesentium aut q 123', 'bisnis_jasa', '2021-10-31 07:53:25', '2021-10-31 07:55:30'),
(6, 'Ut ipsam incidunt v', 'In error soluta ut i', 'bisnis_jasa', '2021-10-31 07:55:15', '2021-10-31 07:55:15'),
(7, 'Consequatur pariatu', 'Consequatur assumen', 'bisnis_jasa', '2021-10-31 07:55:22', '2021-10-31 07:55:22'),
(8, 'Nisi fuga Ut perspi', 'Dolore vel dolores v', 'bisnis_jasa', '2021-10-31 07:55:36', '2021-10-31 07:55:36');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Sit quia ipsam in laboris incididunt perferendis c', 'Quo tempore in harum dolorum et qui labore numqua', 'T1g0HKvH71ISXNHKhglNmqwsuhbFlkE4g2aFVVZT.png', '2021-11-02 10:16:44', '2021-11-02 10:16:44'),
(4, 'Ex omnis deleniti eius facilis velit veritatis qu', 'Nulla voluptas rerum maxime ut mollitia ut', 'Fd30ORP1AHums9ZwKo3zrKGHV8p1sVQ8vh2OLqtz.png', '2021-11-02 10:17:33', '2021-11-02 10:17:33'),
(5, 'Obcaecati aut ad iste molestiae deserunt elit et', 'Eius aut voluptatum doloremque dolorem deserunt qu', 'CxJzQI2bK0aTbhZg4IN6pnMKs7slKewiYkgM2oQz.png', '2021-11-02 10:41:24', '2021-11-02 10:41:24');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_28_160907_uploads', 1),
(6, '2021_10_28_170456_create_sliders_table', 1),
(7, '2021_10_28_171030_create_companies_table', 1),
(8, '2021_10_28_172245_create_services_table', 1),
(9, '2021_10_28_172427_create_partners_table', 1),
(10, '2021_10_28_172616_create_galleries_table', 1),
(11, '2021_10_28_173541_create_abouts_table', 1),
(12, '2021_10_28_173909_create_faqs_table', 1),
(13, '2021_10_31_165821_create_clients_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `partner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `partner`, `description`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Eaque sed', 'Blanditiis et adipisci quibusdam eaque aspernatur', '1635699124_partner.png', '2021-10-31 09:52:04', '2021-10-31 09:52:04'),
(5, 'Harum dolor', 'Soluta fuga Voluptatum in praesentium odio blandi', '1635699321_partner.png', '2021-10-31 09:55:21', '2021-10-31 09:55:21'),
(6, 'Deserunt ea dolor', 'Rerum sequi necessit', '1635786591_partner.png', '2021-11-01 10:09:51', '2021-11-01 10:09:51'),
(7, 'Rerum repudiandae', 'Cum commodi dolor corrupti dolore sit dolore max', '1635786603_partner.png', '2021-11-01 10:10:03', '2021-11-01 10:10:03'),
(8, 'Repellendus Irure', 'Fugit ut et aut asperiores nostrud blanditiis dol', '1635786621_partner.png', '2021-11-01 10:10:21', '2021-11-01 10:10:21');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_slug`, `product_name`, `created_at`, `updated_at`) VALUES
(1, 'eiusmod-qui-ipsum-d', 'Eiusmod qui ipsum d', '2021-12-15 15:34:29', '2021-12-15 15:34:29'),
(2, 'a-molestias-iusto-qu', 'A molestias iusto qu', '2021-12-15 16:05:41', '2021-12-15 16:05:41'),
(3, 'assumenda-eius-ipsum', 'Assumenda eius ipsum', '2021-12-22 13:43:57', '2021-12-22 13:43:57'),
(4, 'eiusmod-veniam-mole', 'Eiusmod veniam mole', '2021-12-22 13:52:21', '2021-12-22 13:52:21');

-- --------------------------------------------------------

--
-- Table structure for table `receivers`
--

CREATE TABLE `receivers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `receiver_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_telp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `receivers`
--

INSERT INTO `receivers` (`id`, `receiver_name`, `receiver_telp`, `receiver_city`, `receiver_address`, `created_at`, `updated_at`) VALUES
(1, 'Zenia Coffey', '37', 'Non qui impedit vol', 'Cumque occaecat sit', '2021-12-15 15:25:12', '2021-12-15 15:25:12'),
(2, 'Rhea Nguyen', '58', 'Et quis eligendi occ', 'Consequatur iste lab', '2021-12-15 15:34:29', '2021-12-15 15:34:29'),
(3, 'Yolanda Porter', '96', 'Adipisci qui perspic', 'Voluptatibus volupta', '2021-12-15 16:05:41', '2021-12-15 16:05:41'),
(4, 'Freya Snider', '96', 'Natus aperiam in vel', 'Doloremque voluptate', '2021-12-22 13:43:57', '2021-12-22 13:43:57'),
(5, 'Madaline Terry', '28', 'Et fuga Magni corpo', 'Debitis saepe fugiat', '2021-12-22 13:52:21', '2021-12-22 13:52:21');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Cargo Darat', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia', 'truck.png', '2021-10-30 08:32:14', '2021-10-30 08:59:01'),
(2, 'Cargo Laut', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia', 'ship.png', '2021-10-30 08:48:23', '2021-10-30 08:59:08'),
(3, 'Cargo Udara', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia', 'plane.png', '2021-10-30 08:48:55', '2021-10-30 08:59:12'),
(5, 'Jasa Forklift', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?', 'forklift.png', '2021-10-30 09:03:01', '2021-10-30 09:03:01'),
(6, 'Package Barang', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?', 'shipping.png', '2021-10-30 09:03:27', '2021-10-30 09:03:27');

-- --------------------------------------------------------

--
-- Table structure for table `service_type`
--

CREATE TABLE `service_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` int(11) NOT NULL,
  `service_type_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `service_type`
--

INSERT INTO `service_type` (`id`, `service_id`, `service_type_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Express', NULL, NULL),
(2, 1, 'Reguler', NULL, NULL),
(3, 1, 'Charter', NULL, NULL),
(4, 2, 'Express', NULL, NULL),
(5, 2, 'Reguler', NULL, NULL),
(6, 3, 'Express', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipments`
--

CREATE TABLE `shipments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logistic_id` int(11) NOT NULL,
  `no_invoice` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `shipper_id` int(11) DEFAULT NULL,
  `origin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `unit` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `driver` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_truck` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_invoice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `shipments`
--

INSERT INTO `shipments` (`id`, `logistic_id`, `no_invoice`, `service`, `service_type`, `receiver_id`, `shipper_id`, `origin`, `destination`, `datetime`, `description`, `product`, `amount`, `unit`, `driver`, `no_truck`, `file_invoice`, `created_at`, `updated_at`) VALUES
(2, 1, '68', 'cargo-udara', 'reguler', 2, 2, 'Laborum et amet nat', 'Et quis eligendi occ', '2011-08-06 17:00:00', 'Quisquam ex quia cup', 'eiusmod-qui-ipsum-d', 20, 'Kg', 'Numquam accusantium', 'Aliquam eum ipsum no', '', '2021-12-15 15:34:29', '2021-12-15 15:34:29'),
(3, 1, '6676', 'cargo-laut', 'express', 3, 3, 'Nulla beatae in dese', 'Adipisci qui perspic', '2007-03-18 17:00:00', 'Harum nostrum odio m', 'a-molestias-iusto-qu', 79, 'Unit', 'Officia enim est qu', 'Cumque aut officiis', '', '2021-12-15 16:05:41', '2021-12-15 16:05:41'),
(4, 1, '65000000', 'cargo-darat', 'charter', 4, 4, 'Minim reiciendis off', 'Natus aperiam in vel', '2021-12-22 14:00:00', 'Est quia eum deseru', 'assumenda-eius-ipsum', 89, 'Box', 'Voluptatem ut verita', 'Ab hic labore aperia', '', '2021-12-22 13:43:57', '2021-12-22 13:43:57'),
(5, 1, '970009', 'cargo-darat', 'charter', 5, 5, 'Eligendi cillum et a', 'Et fuga Magni corpo', '2021-12-22 13:52:00', 'Aut voluptatem Tota', 'eiusmod-veniam-mole', 65, 'Box', 'Magnam laborum liber', 'Qui reprehenderit ut', '', '2021-12-22 13:52:22', '2021-12-22 13:52:22');

-- --------------------------------------------------------

--
-- Table structure for table `shipment_tracking`
--

CREATE TABLE `shipment_tracking` (
  `id` bigint(20) NOT NULL,
  `no_invoice` varchar(50) NOT NULL,
  `datetime` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `shipment_tracking`
--

INSERT INTO `shipment_tracking` (`id`, `no_invoice`, `datetime`, `status`, `description`, `created_at`, `updated_at`) VALUES
(2, '68', '2021-12-15 22:34:29', 'CANCEL', 'Quisquam ex quia cup', '2021-12-15 22:34:29', '2021-12-15 22:34:29'),
(3, '6676', '2021-12-15 23:05:41', 'PICK-UP', 'Harum nostrum odio m', '2021-12-15 23:05:41', '2021-12-15 23:05:41'),
(5, '6676', '2021-12-16 00:40:30', 'ON-DELIVERY', 'sedang dikirim', '2021-12-16 00:40:30', '2021-12-16 00:40:30'),
(6, '6676', '2021-12-16 00:47:43', 'RECEIVED', 'terkirim', '2021-12-16 00:47:43', '2021-12-16 00:47:43'),
(7, '68', '2021-12-16 00:49:58', 'RE-DELIVERY', 'kirim ulang', '2021-12-16 00:49:58', '2021-12-16 00:49:58'),
(8, '65000000', '2021-12-22 20:43:57', 'PICK-UP', 'Est quia eum deseru', '2021-12-22 20:43:57', '2021-12-22 20:43:57'),
(9, '970009', '2021-12-22 20:52:00', 'PICK-UP', 'Aut voluptatem Tota', '2021-12-22 20:52:21', '2021-12-22 20:52:21'),
(10, '65000000', '2021-12-22 20:55:00', 'ON-DELIVERY', 'sedang perjalanan', '2021-12-22 20:55:00', '2021-12-22 20:55:00');

-- --------------------------------------------------------

--
-- Table structure for table `shippers`
--

CREATE TABLE `shippers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipper_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipper_telp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipper_city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipper_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `shippers`
--

INSERT INTO `shippers` (`id`, `shipper_name`, `shipper_telp`, `shipper_city`, `shipper_address`, `created_at`, `updated_at`) VALUES
(1, 'Josiah Dotson', '12', 'Labore non reiciendi', 'In reiciendis autem', '2021-12-15 15:25:12', '2021-12-15 15:25:12'),
(2, 'Calvin Wagner', '93', 'Laborum et amet nat', 'Quia provident qui', '2021-12-15 15:34:29', '2021-12-15 15:34:29'),
(3, 'Carson Hyde', '100', 'Nulla beatae in dese', 'Eos dolore cupidatat', '2021-12-15 16:05:41', '2021-12-15 16:05:41'),
(4, 'Cathleen Burch', '38', 'Minim reiciendis off', 'Qui ut cumque elit', '2021-12-22 13:43:57', '2021-12-22 13:43:57'),
(5, 'Cadman Mcguire', '55', 'Eligendi cillum et a', 'Esse praesentium con', '2021-12-22 13:52:21', '2021-12-22 13:52:21');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Pengiriman Cepat', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis quidem pariatur soluta ipsa doloribus modi enim dolor quasi ex beatae minus est hic, eius architecto odio cumque eligendi laudantium a aliquam ipsam rem culpa doloremque. Fuga nobis laudantium error possimus magnam nesciunt.', 'sUpdFczhoUAYOiCwUgMbPhcmCdhUXKls2Lz1qvCK.png', '2021-10-30 00:29:12', '2021-10-30 07:17:55'),
(6, 'Layanan Cepat', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis quidem pariatur soluta ipsa doloribus modi enim dolor quasi ex beatae minus est hic, eius architecto odio cumque eligendi laudantium a aliquam ipsam rem culpa doloremque. Fuga nobis laudantium error possimus magnam nesciunt.', 'yNMJzP3fF5pms23Z3R1r8ZNi4F023SGgZKUMFQzH.png', '2021-10-30 02:46:12', '2021-10-30 07:17:25');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status_name`, `created_at`, `updated_at`) VALUES
(1, 'PICK-UP', NULL, NULL),
(2, 'ON-DELIVERY', NULL, NULL),
(3, 'RECEIVED', NULL, NULL),
(4, 'CANCEL', NULL, NULL),
(5, 'RE-DELIVERY', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trucks`
--

CREATE TABLE `trucks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_truck` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(11) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `detail` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `unit`, `detail`) VALUES
(1, 'Kg', 'Kilogram'),
(2, 'Lt', 'Liter'),
(3, 'Unit', 'Unit'),
(4, 'Box', 'Box');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'administartor', 'admin', 'admin@bsncargo.com', NULL, '$2y$10$HWnBf1zR7JsDUjc8HlukKOfL9SJ0ZWngEJsI/BcXUrcPDJMHS2oYW', NULL, NULL, '2021-10-29 10:38:43', '2021-10-29 10:38:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `receivers`
--
ALTER TABLE `receivers`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_type`
--
ALTER TABLE `service_type`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `shipments`
--
ALTER TABLE `shipments`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `no_invoice` (`no_invoice`) USING BTREE;

--
-- Indexes for table `shipment_tracking`
--
ALTER TABLE `shipment_tracking`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `shippers`
--
ALTER TABLE `shippers`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `trucks`
--
ALTER TABLE `trucks`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `receivers`
--
ALTER TABLE `receivers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service_type`
--
ALTER TABLE `service_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shipments`
--
ALTER TABLE `shipments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shipment_tracking`
--
ALTER TABLE `shipment_tracking`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `shippers`
--
ALTER TABLE `shippers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trucks`
--
ALTER TABLE `trucks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
