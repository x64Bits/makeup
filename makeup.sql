/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50720
Source Host           : 127.0.0.1:3306
Source Database       : makeup

Target Server Type    : MYSQL
Target Server Version : 50720
File Encoding         : 65001

Date: 2018-04-12 19:34:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('13', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('14', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('15', '2018_03_30_001856_create_products_table', '1');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_code_unique` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'RIMEL', 'RIMEL+ DELINEADOR COLOSAL X12', 'OTRAS', 'Y076', '60.000,00', 'public/c6NfjsCstEG2UJsTG2maIgcPlJ1hlbOYeEXdPo35.jpeg', '2018-04-12 18:16:22', '2018-04-12 18:16:22');
INSERT INTO `products` VALUES ('2', 'SOMBRA', 'SOMBRA ZOEVA X10', 'OTRAS', 'M570', '14.000,00', 'public/RffDzsvTaJrf7GznEsbapFlDQumiwUhTVulQ4AzS.jpeg', '2018-04-12 18:25:29', '2018-04-12 18:25:29');
INSERT INTO `products` VALUES ('3', 'ACEITE', 'ACEITE FARSALI', 'OTRAS', 'S103', '10.000,00', 'public/CDekS9hM99lrwxgTkqp2MvmLIyO2yeUoGAXtbVCI.jpeg', '2018-04-12 18:25:56', '2018-04-12 18:25:56');
INSERT INTO `products` VALUES ('4', 'BASE', 'BASE BB HAN RUI X24', 'OTRAS', 'Y003', '50.000,00', 'public/224QTie0dXafuOnLbXFzHPH0cmu4WcxXR8Q5Oqll.jpeg', '2018-04-12 18:27:12', '2018-04-12 18:27:12');
INSERT INTO `products` VALUES ('5', 'LABIAL', 'LABIAL DOSE OF COLORS X12', 'DOSE OF COLORS', 'M646', '50.000,00', 'public/jA0l9z903akAngv91PWlJ6Pqitqja9jy2ZtfWues.jpeg', '2018-04-12 18:27:45', '2018-04-12 18:27:45');
INSERT INTO `products` VALUES ('6', 'RUBOR', 'RUBOR CLINIQUE X3', 'CLINIQUE', '1547', '6.000,00', 'public/j3gXsIBdxLVeWwRmBRzJoazVKgRglGW3aRFWlX2a.jpeg', '2018-04-12 23:26:20', '2018-04-12 23:26:20');
INSERT INTO `products` VALUES ('7', 'POLVO', 'POLVO CON BASE CLINIQUE', 'CLINIQUE', '239', '8.500,00', 'public/TaP531AWKpD6OBVorhA68shu08l6Eh1VsoIosdnv.jpeg', '2018-04-12 23:26:53', '2018-04-12 23:26:53');
INSERT INTO `products` VALUES ('8', 'PINCEL', 'PINCEL PARA CEJA CLINIQUE', 'CLINIQUE', 'S041', '3.000,00', 'public/uM65xQCVJLIVHNXv3D7jcuN4H2DC3Jg59YbOAotq.jpeg', '2018-04-12 23:27:49', '2018-04-12 23:27:49');
INSERT INTO `products` VALUES ('9', 'KIT', 'KIT ANASTASIA X10', 'ANASTASIA', 'S167', '120.000,00', 'public/Oqm5tdm2msiKwDgRi7pL8F7I2V9vE8mEQ4Av4BR4.jpeg', '2018-04-12 23:28:48', '2018-04-12 23:28:48');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'ignacio', 'elcontra11@outlook.com', '$2y$10$S7zP64/i3LRm52x.lkWb8Of8KcyDe1zHdko0l6Mv33WQxxW0EDP46', 'LCK2PeC8cNh40L58EewQVlidrgUrRPiYjpqNGhQD0QEbW8FovgGSgct4QZth', '2018-04-12 06:21:13', '2018-04-12 06:21:13');
