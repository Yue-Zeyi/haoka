/*
 Navicat Premium Data Transfer

 Source Server         : MySql5.7
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : haoka

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 22/03/2023 15:24:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', 'admin');

-- ----------------------------
-- Table structure for list
-- ----------------------------
DROP TABLE IF EXISTS `list`;
CREATE TABLE `list`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jieshao` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `zhutu` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ltime` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `yys` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of list
-- ----------------------------
INSERT INTO `list` VALUES (1, '电信星辰卡', '9元180G哈哈哈as啊大家阿斯达卡省的去啊哇顶起1', 'https://haokaapi.lot-ml.com/upload/ProductUpDateImage/20230315/92ddc56c4d444ae5985cf44aa068890a.jpg', '长期套餐', '中国电信', 'https://haokawx.lot-ml.com/h5order/index?pudID=62&userid=3443');
INSERT INTO `list` VALUES (2, '电信天星卡', '19员200G', 'https://haokaapi.lot-ml.com/upload/ProductUpDateImage/20230315/92ddc56c4d444ae5985cf44aa068890a.jpg', '长期套餐', '中国电信', '123');
INSERT INTO `list` VALUES (3, '电信天星卡', '19员200G', 'https://haokaapi.lot-ml.com/upload/ProductUpDateImage/20230315/92ddc56c4d444ae5985cf44aa068890a.jpg', '长期套餐', '中国联通', '123');
INSERT INTO `list` VALUES (5, '电信神卡', '牛逼的电信神卡', 'https://haokaapi.lot-ml.com/upload/ProductUpDateImage/20230316/0d1d5f53be954d0dbd9fc1f006818b86.jpg', '长期有效', '中国移动', 'qweqwe');
INSERT INTO `list` VALUES (6, '联通牛逼卡', '超级牛逼', 'https://haokaapi.lot-ml.com/upload/ProductUpDateImage/20230316/0d1d5f53be954d0dbd9fc1f006818b86.jpg', '两年套餐', '中国联通', 'https://haokawx.lot-ml.com/h5order/index?pudID=62&userid=3443');

SET FOREIGN_KEY_CHECKS = 1;
