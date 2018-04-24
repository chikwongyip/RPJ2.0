/*
 Navicat Premium Data Transfer

 Source Server         : Mysql
 Source Server Type    : MySQL
 Source Server Version : 50721
 Source Host           : localhost
 Source Database       : RPJ

 Target Server Type    : MySQL
 Target Server Version : 50721
 File Encoding         : utf-8

 Date: 04/24/2018 20:26:31 PM
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `productGroup`
-- ----------------------------
DROP TABLE IF EXISTS `productGroup`;
CREATE TABLE `productGroup` (
  `groupId` int(3) NOT NULL,
  `groupName` varchar(20) DEFAULT NULL,
  `groupDesc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`groupId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;
