/*
 Navicat Premium Data Transfer

 Source Server         : crud_php
 Source Server Type    : MySQL
 Source Server Version : 100432 (10.4.32-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : tienda_avam

 Target Server Type    : MySQL
 Target Server Version : 100432 (10.4.32-MariaDB)
 File Encoding         : 65001

 Date: 27/05/2024 23:05:28
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for contactos
-- ----------------------------
DROP TABLE IF EXISTS `contactos`;
CREATE TABLE `contactos`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombreapellido` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `correoelectronico` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telefono` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contrasena` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mensaje` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contacto` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `horario` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `novedades` tinyint(1) NOT NULL,
  `privacidad` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of contactos
-- ----------------------------
INSERT INTO `contactos` VALUES (1, 'Margarita Miranda', 'mita072010.mmd@gmail.com', '3209336639', 'Lupita', 'Asesoramiento', 'email', 'Tarde', 1, 1);
INSERT INTO `contactos` VALUES (2, 'Avril Pulido', 'avril@hotmail.com', '3209336658', 'Avrilsita', 'Comprar', 'whatsapp', 'Noche', 1, 1);
INSERT INTO `contactos` VALUES (3, 'Maria Miranda', 'mariamiranda@gmail.com', '3209036668', 'margarita', 'Compras y asesoramiento', 'email', 'Tarde', 1, 1);
INSERT INTO `contactos` VALUES (4, 'Valeria Pulido', 'vale@gmail.com', '3516977896', 'avril', 'asesoramiento', 'email', 'Noche', 1, 1);

SET FOREIGN_KEY_CHECKS = 1;
