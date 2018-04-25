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

 Date: 04/24/2018 22:14:03 PM
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `product`
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `productId` int(3) NOT NULL AUTO_INCREMENT,
  `productName` varchar(20) DEFAULT NULL,
  `productIcon` varchar(30) DEFAULT NULL,
  `productPicture` varchar(30) DEFAULT NULL,
  `Attachment` varchar(30) DEFAULT NULL,
  `groupID` int(3) DEFAULT NULL,
  `parentID` int(3) DEFAULT NULL,
  `isHot` varchar(1) DEFAULT NULL,
  `producttypeid` int(3) DEFAULT NULL,
  `del_flg` char(1) DEFAULT NULL,
  `productSn` int(10) DEFAULT NULL,
  `productDesc` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`productId`),
  KEY `groupID` (`groupID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;
