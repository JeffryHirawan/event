/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50617
Source Host           : 127.0.0.1:3306
Source Database       : event

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-10-28 15:09:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for checkpoint
-- ----------------------------
DROP TABLE IF EXISTS `checkpoint`;
CREATE TABLE `checkpoint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eventid` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of checkpoint
-- ----------------------------
INSERT INTO `checkpoint` VALUES ('1', '6', 'Booth Mobil');
INSERT INTO `checkpoint` VALUES ('2', '6', 'Booth Motor');
INSERT INTO `checkpoint` VALUES ('3', '6', 'Sepeda');
INSERT INTO `checkpoint` VALUES ('5', '6', 'Gerobak');

-- ----------------------------
-- Table structure for checkpoint_visits
-- ----------------------------
DROP TABLE IF EXISTS `checkpoint_visits`;
CREATE TABLE `checkpoint_visits` (
  `guestid` int(11) NOT NULL,
  `cpid` int(11) NOT NULL,
  PRIMARY KEY (`guestid`,`cpid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of checkpoint_visits
-- ----------------------------
INSERT INTO `checkpoint_visits` VALUES ('5', '1');
INSERT INTO `checkpoint_visits` VALUES ('5', '2');
INSERT INTO `checkpoint_visits` VALUES ('6', '1');
INSERT INTO `checkpoint_visits` VALUES ('6', '3');
INSERT INTO `checkpoint_visits` VALUES ('7', '2');
INSERT INTO `checkpoint_visits` VALUES ('8', '2');

-- ----------------------------
-- Table structure for event
-- ----------------------------
DROP TABLE IF EXISTS `event`;
CREATE TABLE `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL DEFAULT '',
  `type` varchar(64) NOT NULL DEFAULT '',
  `mode` enum('Registration','Invitation') DEFAULT 'Registration',
  `pic` int(11) DEFAULT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `status` enum('Upcoming','Ongoing','Finished','Canceled') DEFAULT 'Upcoming',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of event
-- ----------------------------
INSERT INTO `event` VALUES ('5', 'Wedding Test', 'Wedding', 'Invitation', '5', '2015-09-28', '2015-09-28', '08:00:00', '20:00:00', 'Ongoing');
INSERT INTO `event` VALUES ('6', 'The Test Expo', 'Expo', 'Registration', '5', '2015-09-29', '2015-09-30', '09:00:00', '16:30:00', 'Upcoming');
INSERT INTO `event` VALUES ('9', 'Ulang Tahun', 'Party', 'Invitation', '8', '2015-10-15', '2015-10-15', '09:51:49', '20:51:52', 'Upcoming');

-- ----------------------------
-- Table structure for event_attendance
-- ----------------------------
DROP TABLE IF EXISTS `event_attendance`;
CREATE TABLE `event_attendance` (
  `guest_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `enter_time` time DEFAULT NULL,
  `exit_time` time DEFAULT NULL,
  KEY `attendance_guest` (`guest_id`),
  KEY `attendance_event` (`event_id`),
  CONSTRAINT `attendance_event` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`) ON DELETE CASCADE,
  CONSTRAINT `attendance_guest` FOREIGN KEY (`guest_id`) REFERENCES `guest` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of event_attendance
-- ----------------------------

-- ----------------------------
-- Table structure for guest
-- ----------------------------
DROP TABLE IF EXISTS `guest`;
CREATE TABLE `guest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `track_code` varchar(32) NOT NULL,
  `email` varchar(128) NOT NULL,
  `name` varchar(64) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `register_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_id` (`event_id`),
  CONSTRAINT `event_id` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of guest
-- ----------------------------
INSERT INTO `guest` VALUES ('5', '5', 'd8a296467fdbdb43867e2a01b9e5a332', 'christiandi@gmail.com', 'Christiandi', 'Di hutan rimba bernama Jambi', '622210852', '2015-10-07 19:30:47');
INSERT INTO `guest` VALUES ('6', '5', '5f181ec1f6ec9df251c640ce6841a678', 'jevi@hotmail.com', 'Jeffry Hirawan', 'Entah dimana dah nih orang tinggalnya', '6221258212', '2015-10-08 00:34:52');
INSERT INTO `guest` VALUES ('7', '5', 'e5e0387cb478d731143ca31c719f33c1', 'tianmetal@gmail.com', 'Christian Malik', 'BSD pokoknya lah', '62215358190', '2015-10-08 00:37:07');
INSERT INTO `guest` VALUES ('8', '9', '8d45b127c0607e8ac11c25c4aa831868', 'aldo@gmail.com', 'Aldo', 'Dimana ini?', '71934310', '2015-10-12 09:53:47');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(130) NOT NULL,
  `group` enum('User','Operator','Moderator','Administrator') DEFAULT 'User',
  `email` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `flag_user` (`group`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', 'admin', 'User', 'admin@envite.co.id');
INSERT INTO `user` VALUES ('5', 'Budi', 'test', 'Moderator', 'budi@envite.co.id');
INSERT INTO `user` VALUES ('7', 'Anto', 'test', 'Operator', 'anto@envite.co.id');
INSERT INTO `user` VALUES ('8', 'James', 'test', 'Moderator', 'james@envite.co.id');
