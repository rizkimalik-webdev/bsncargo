/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50733
 Source Host           : localhost:3306
 Source Schema         : bsncargo

 Target Server Type    : MySQL
 Target Server Version : 50733
 File Encoding         : 65001

 Date: 11/11/2021 12:13:39
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for abouts
-- ----------------------------
DROP TABLE IF EXISTS `abouts`;
CREATE TABLE `abouts`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `sub_purpose` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `visi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `misi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of abouts
-- ----------------------------
INSERT INTO `abouts` VALUES (1, 1, NULL, 'Ut quod provident e\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Harum, rem. Ea mollitia ratione eum, fugit fugiat veniam veritatis deleniti numquam dolorem impedit obcaecati nihil aliquam amet placeat in maxime vitae.', 'Ipsum ut esse accusa\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Harum, rem. Ea mollitia ratione eum, fugit fugiat veniam veritatis deleniti numquam dolorem impedit obcaecati nihil aliquam amet placeat in maxime vitae.', NULL, NULL, '2021-11-01 17:03:46');

-- ----------------------------
-- Table structure for clients
-- ----------------------------
DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `client` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of clients
-- ----------------------------
INSERT INTO `clients` VALUES (3, 'Cum blanditiis', 'Unde eaque sit veniam laborum Consequatur verita', '1635787734_client.png', '2021-11-01 17:28:54', '2021-11-01 17:28:54');
INSERT INTO `clients` VALUES (4, 'Inventore aliquam', 'Tempor voluptatum magna rem molestiae', '1635787745_client.png', '2021-11-01 17:29:05', '2021-11-01 17:29:05');
INSERT INTO `clients` VALUES (5, 'Harum et1', 'Facilis quia molestiae vel non temporibus', '1635789717_client.png', '2021-11-01 17:29:18', '2021-11-01 18:01:57');

-- ----------------------------
-- Table structure for companies
-- ----------------------------
DROP TABLE IF EXISTS `companies`;
CREATE TABLE `companies`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `company` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `telp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `whatsapp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of companies
-- ----------------------------
INSERT INTO `companies` VALUES (1, 'PT BINTANG SAMUDERA NUSWANTORO', 'Perusahaan di Bidang cargo logistic, termurah di jakarta selatan', '021-021031021', 'info@bsncargo.com', 'bsncargo_logistic', 'bsncargo', '1234567890', 'bsn_cargo', 'Jakarta Selatan', 'Graha Mampang, \r\nJl. Mampang Prpt. Raya No.KAV.100, RT.2/RW.1, Kota Jakarta Selatan.', 'bsncargo.png', '2021-10-30 17:13:44', '2021-11-04 13:38:52');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for faqs
-- ----------------------------
DROP TABLE IF EXISTS `faqs`;
CREATE TABLE `faqs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of faqs
-- ----------------------------
INSERT INTO `faqs` VALUES (1, 'Dolorem', 'Blanditiis aute et nasda 321', 'syarat_ketentuan', '2021-10-31 14:13:23', '2021-10-31 14:45:11');
INSERT INTO `faqs` VALUES (3, 'Eum recusandae Sint', 'Pariatur Maiores vi', 'syarat_ketentuan', '2021-10-31 14:13:55', '2021-10-31 14:13:55');
INSERT INTO `faqs` VALUES (4, 'Qui sit labore sequ', 'This is the first item\'s accordion body. It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It\'s also worth noting that just about any HTML can go within the .accordion-body, though the transition does limit overflow.', 'syarat_ketentuan', '2021-10-31 14:25:42', '2021-10-31 14:25:42');
INSERT INTO `faqs` VALUES (5, 'Deleniti soluta face 131', 'Ut praesentium aut q 123', 'bisnis_jasa', '2021-10-31 14:53:25', '2021-10-31 14:55:30');
INSERT INTO `faqs` VALUES (6, 'Ut ipsam incidunt v', 'In error soluta ut i', 'bisnis_jasa', '2021-10-31 14:55:15', '2021-10-31 14:55:15');
INSERT INTO `faqs` VALUES (7, 'Consequatur pariatu', 'Consequatur assumen', 'bisnis_jasa', '2021-10-31 14:55:22', '2021-10-31 14:55:22');
INSERT INTO `faqs` VALUES (8, 'Nisi fuga Ut perspi', 'Dolore vel dolores v', 'bisnis_jasa', '2021-10-31 14:55:36', '2021-10-31 14:55:36');

-- ----------------------------
-- Table structure for galleries
-- ----------------------------
DROP TABLE IF EXISTS `galleries`;
CREATE TABLE `galleries`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of galleries
-- ----------------------------
INSERT INTO `galleries` VALUES (2, 'Sit quia ipsam in laboris incididunt perferendis c', 'Quo tempore in harum dolorum et qui labore numqua', 'T1g0HKvH71ISXNHKhglNmqwsuhbFlkE4g2aFVVZT.png', '2021-11-02 17:16:44', '2021-11-02 17:16:44');
INSERT INTO `galleries` VALUES (4, 'Ex omnis deleniti eius facilis velit veritatis qu', 'Nulla voluptas rerum maxime ut mollitia ut', 'Fd30ORP1AHums9ZwKo3zrKGHV8p1sVQ8vh2OLqtz.png', '2021-11-02 17:17:33', '2021-11-02 17:17:33');
INSERT INTO `galleries` VALUES (5, 'Obcaecati aut ad iste molestiae deserunt elit et', 'Eius aut voluptatum doloremque dolorem deserunt qu', 'CxJzQI2bK0aTbhZg4IN6pnMKs7slKewiYkgM2oQz.png', '2021-11-02 17:41:24', '2021-11-02 17:41:24');
INSERT INTO `galleries` VALUES (6, 'Qui enim amet nesciunt aliqua Autem ea distinct', 'Totam ut error nulla facilis magna reiciendis quo', 'Ez7kcNlbJLHPKAHR2Vt3C4owDPOd7hlh9R5yVDrC.png', '2021-11-02 17:41:34', '2021-11-02 17:41:34');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (5, '2021_10_28_160907_uploads', 1);
INSERT INTO `migrations` VALUES (6, '2021_10_28_170456_create_sliders_table', 1);
INSERT INTO `migrations` VALUES (7, '2021_10_28_171030_create_companies_table', 1);
INSERT INTO `migrations` VALUES (8, '2021_10_28_172245_create_services_table', 1);
INSERT INTO `migrations` VALUES (9, '2021_10_28_172427_create_partners_table', 1);
INSERT INTO `migrations` VALUES (10, '2021_10_28_172616_create_galleries_table', 1);
INSERT INTO `migrations` VALUES (11, '2021_10_28_173541_create_abouts_table', 1);
INSERT INTO `migrations` VALUES (12, '2021_10_28_173909_create_faqs_table', 1);
INSERT INTO `migrations` VALUES (13, '2021_10_31_165821_create_clients_table', 2);

-- ----------------------------
-- Table structure for partners
-- ----------------------------
DROP TABLE IF EXISTS `partners`;
CREATE TABLE `partners`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `partner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of partners
-- ----------------------------
INSERT INTO `partners` VALUES (3, 'Quos quo 1', 'Et eu incididunt iusto est voluptatem laborum poss 1', '1635699109_partner.png', '2021-10-31 16:51:49', '2021-10-31 16:55:34');
INSERT INTO `partners` VALUES (4, 'Eaque sed', 'Blanditiis et adipisci quibusdam eaque aspernatur', '1635699124_partner.png', '2021-10-31 16:52:04', '2021-10-31 16:52:04');
INSERT INTO `partners` VALUES (5, 'Harum dolor', 'Soluta fuga Voluptatum in praesentium odio blandi', '1635699321_partner.png', '2021-10-31 16:55:21', '2021-10-31 16:55:21');
INSERT INTO `partners` VALUES (6, 'Deserunt ea dolor', 'Rerum sequi necessit', '1635786591_partner.png', '2021-11-01 17:09:51', '2021-11-01 17:09:51');
INSERT INTO `partners` VALUES (7, 'Rerum repudiandae', 'Cum commodi dolor corrupti dolore sit dolore max', '1635786603_partner.png', '2021-11-01 17:10:03', '2021-11-01 17:10:03');
INSERT INTO `partners` VALUES (8, 'Repellendus Irure', 'Fugit ut et aut asperiores nostrud blanditiis dol', '1635786621_partner.png', '2021-11-01 17:10:21', '2021-11-01 17:10:21');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for services
-- ----------------------------
DROP TABLE IF EXISTS `services`;
CREATE TABLE `services`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `service` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of services
-- ----------------------------
INSERT INTO `services` VALUES (1, 'Cargo Darat', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia', 'truck.png', '2021-10-30 15:32:14', '2021-10-30 15:59:01');
INSERT INTO `services` VALUES (2, 'Cargo Laut', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia', 'ship.png', '2021-10-30 15:48:23', '2021-10-30 15:59:08');
INSERT INTO `services` VALUES (3, 'Cargo Udara', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia', 'plane.png', '2021-10-30 15:48:55', '2021-10-30 15:59:12');
INSERT INTO `services` VALUES (5, 'Jasa Forklift', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?', 'forklift.png', '2021-10-30 16:03:01', '2021-10-30 16:03:01');
INSERT INTO `services` VALUES (6, 'Package Barang', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?', 'shipping.png', '2021-10-30 16:03:27', '2021-10-30 16:03:27');

-- ----------------------------
-- Table structure for sliders
-- ----------------------------
DROP TABLE IF EXISTS `sliders`;
CREATE TABLE `sliders`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sliders
-- ----------------------------
INSERT INTO `sliders` VALUES (3, 'Tarif Kompetitif', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis quidem pariatur soluta ipsa doloribus modi enim dolor quasi ex beatae minus est hic, eius architecto odio cumque eligendi laudantium a aliquam ipsam rem culpa doloremque. Fuga nobis laudantium error possimus magnam nesciunt.', 'pPbsxqsPiPCJfjG19de8kvBhRDLkThbs3NjOkDhs.png', '2021-10-30 06:18:38', '2021-10-30 14:16:55');
INSERT INTO `sliders` VALUES (4, 'Pengiriman Cepat', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis quidem pariatur soluta ipsa doloribus modi enim dolor quasi ex beatae minus est hic, eius architecto odio cumque eligendi laudantium a aliquam ipsam rem culpa doloremque. Fuga nobis laudantium error possimus magnam nesciunt...', 'sUpdFczhoUAYOiCwUgMbPhcmCdhUXKls2Lz1qvCK.png', '2021-10-30 07:29:12', '2021-11-04 13:07:12');
INSERT INTO `sliders` VALUES (6, 'Layanan Cepat', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis quidem pariatur soluta ipsa doloribus modi enim dolor quasi ex beatae minus est hic, eius architecto odio cumque eligendi laudantium a aliquam ipsam rem culpa doloremque. Fuga nobis laudantium error possimus magnam nesciunt.', 'yNMJzP3fF5pms23Z3R1r8ZNi4F023SGgZKUMFQzH.png', '2021-10-30 09:46:12', '2021-10-30 14:17:25');

-- ----------------------------
-- Table structure for uploads
-- ----------------------------
DROP TABLE IF EXISTS `uploads`;
CREATE TABLE `uploads`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_username_unique`(`username`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (3, 'administartor', 'admin', 'admin@bsncargo.com', NULL, '$2y$10$HWnBf1zR7JsDUjc8HlukKOfL9SJ0ZWngEJsI/BcXUrcPDJMHS2oYW', NULL, NULL, '2021-10-29 17:38:43', '2021-10-29 17:38:43');

SET FOREIGN_KEY_CHECKS = 1;
