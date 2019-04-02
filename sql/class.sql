/*
Navicat MySQL Data Transfer

Source Server         : 本地数据库
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : z_stumanage

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-07-10 03:16:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for class
-- ----------------------------
DROP TABLE IF EXISTS `class`;
CREATE TABLE `class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classname` varchar(50) NOT NULL,
  `room` varchar(10) DEFAULT '203',
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `classname` (`classname`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of class
-- ----------------------------
INSERT INTO `class` VALUES ('1', '黑马24期', '105', '100');
INSERT INTO `class` VALUES ('2', '黑马25期', '101', '89');
INSERT INTO `class` VALUES ('3', '黑马26期', '103', '90');
INSERT INTO `class` VALUES ('4', '黑马27期', '104', '70');
INSERT INTO `class` VALUES ('5', '黑马28期', '102', '88');
