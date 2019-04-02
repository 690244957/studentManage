/*
Navicat MySQL Data Transfer

Source Server         : 本地数据库
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : z_stumanage

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-06-03 01:06:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for stu
-- ----------------------------
DROP TABLE IF EXISTS `stu`;
CREATE TABLE `stu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `tel` char(11) DEFAULT NULL,
  `sex` char(10) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `classid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of stu
-- ----------------------------
INSERT INTO `stu` VALUES ('1', '小丽', '丽丽', '18', '12312312323', 'm', null, '1');
INSERT INTO `stu` VALUES ('2', '大鹏鹏', '鹏哥', '20', '15751776666', 'm', null, '3');
