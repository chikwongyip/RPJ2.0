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

 Date: 04/24/2018 20:26:00 PM
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `company`
-- ----------------------------
DROP TABLE IF EXISTS `company`;
CREATE TABLE `company` (
  `comID` int(2) NOT NULL,
  `comName` varchar(20) DEFAULT NULL,
  `comAddress` varchar(100) DEFAULT NULL,
  `comEmail` varchar(20) DEFAULT NULL,
  `comPhone` varchar(15) DEFAULT NULL,
  `comCode` varchar(50) DEFAULT NULL,
  `comEnglish` varchar(30) DEFAULT NULL,
  `combrief` varchar(1000) DEFAULT NULL,
  `pictureUrl` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`comID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;
