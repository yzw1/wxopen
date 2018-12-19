/*
 Navicat Premium Data Transfer

 Source Server         : scrapy
 Source Server Type    : MySQL
 Source Server Version : 50635
 Source Host           : localhost
 Source Database       : open

 Target Server Type    : MySQL
 Target Server Version : 50635
 File Encoding         : utf-8

 Date: 12/19/2018 18:56:03 PM
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `mini_users`
-- ----------------------------
DROP TABLE IF EXISTS `mini_users`;
CREATE TABLE `mini_users` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `MiniName` varchar(30) DEFAULT NULL COMMENT '小程序的名字',
  `AppId` varchar(30) DEFAULT NULL,
  `AppSecret` varchar(255) DEFAULT NULL,
  `ReTime` datetime DEFAULT CURRENT_TIMESTAMP,
  `UpTime` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`UserId`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
--  Records of `mini_users`
-- ----------------------------
BEGIN;
INSERT INTO `mini_users` VALUES ('2', null, null, null, '2018-12-05 14:44:32', '2018-12-05 14:44:32'), ('3', null, null, null, '2018-12-05 14:50:57', '2018-12-05 14:50:57'), ('4', null, null, null, '2018-12-05 15:04:51', '2018-12-05 15:04:51'), ('5', 'sinker', 'wxa683b83e40b8900b', '34a17283e00fc83edec0628d3825048a', '2018-12-05 15:18:24', '2018-12-05 15:18:24'), ('6', 'sinker', 'wxa683b83e40b8900b', '34a17283e00fc83edec0628d3825048a', '2018-12-05 15:20:48', '2018-12-05 15:20:48'), ('7', 'sinker', 'wxa683b83e40b8900b', '34a17283e00fc83edec0628d3825048a', '2018-12-05 15:21:01', '2018-12-05 15:21:01'), ('8', 'sinker', 'wxa683b83e40b8900b', '34a17283e00fc83edec0628d3825048a', '2018-12-05 15:23:20', '2018-12-05 15:23:20'), ('9', 'sinker', 'wxa683b83e40b8900b', '34a17283e00fc83edec0628d3825048a', '2018-12-05 15:28:13', '2018-12-05 15:28:13'), ('10', null, null, null, '2018-12-05 16:41:24', '2018-12-05 16:41:24'), ('11', null, null, null, '2018-12-05 16:44:36', '2018-12-05 16:44:36'), ('12', null, null, null, '2018-12-05 16:46:25', '2018-12-05 16:46:25'), ('13', null, null, null, '2018-12-05 16:52:23', '2018-12-05 16:52:23'), ('14', null, null, null, '2018-12-05 16:54:48', '2018-12-05 16:54:48'), ('15', null, null, null, '2018-12-05 16:55:23', '2018-12-05 16:55:23'), ('16', 'sinker', 'wxa683b83e40b8900b', '34a17283e00fc83edec0628d3825048a', '2018-12-05 17:01:16', '2018-12-05 17:01:16'), ('17', 'sinker', 'wxa683b83e40b8900b', '34a17283e00fc83edec0628d3825048a', '2018-12-05 17:03:12', '2018-12-05 17:03:12'), ('18', null, null, null, '2018-12-05 17:13:07', '2018-12-05 17:13:07'), ('19', 'sinker', 'wxa683b83e40b8900b', '34a17283e00fc83edec0628d3825048a', '2018-12-05 17:13:35', '2018-12-05 17:13:35'), ('20', 'sinker', 'wxa683b83e40b8900b', '34a17283e00fc83edec0628d3825048a', '2018-12-05 17:53:58', '2018-12-05 17:53:58'), ('21', 'sinker', 'wxa683b83e40b8900b', '34a17283e00fc83edec0628d3825048a', '2018-12-05 17:59:05', '2018-12-05 17:59:05');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
