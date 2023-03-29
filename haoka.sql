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

 Date: 28/03/2023 22:46:22
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
INSERT INTO `admin` VALUES ('1', 'admin', '123456');

-- ----------------------------
-- Table structure for kefu
-- ----------------------------
DROP TABLE IF EXISTS `kefu`;
CREATE TABLE `kefu`  (
  `kefu` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `qrcode` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kfwx` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ontime` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kefu
-- ----------------------------
INSERT INTO `kefu` VALUES ('kefu', 'http://haoka.zeyiwl.cn/img/wx.png', 'Ds-5G666888', '周一至周六上午08:30至12:00，下午14:00至20:30，其它时间不一定时刻在线，会抽出时间上线处理，请大家耐心等待！谢谢！');

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
  `xuhao` int(11) NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of list
-- ----------------------------

-- ----------------------------
-- Table structure for sort
-- ----------------------------
DROP TABLE IF EXISTS `sort`;
CREATE TABLE `sort`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yys` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '运营商名称',
  `yysabbr` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '字母缩写',
  `sortid` int(11) NOT NULL COMMENT '序号',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sort
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
