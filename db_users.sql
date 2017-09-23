/*
MySQL Data Transfer
Source Host: localhost
Source Database: db_users
Target Host: localhost
Target Database: db_users
Date: 9/23/2017 3:48:36 PM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for uuser
-- ----------------------------
DROP TABLE IF EXISTS `uuser`;
CREATE TABLE `uuser` (
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `uuser` VALUES ('admin', 'admin');
INSERT INTO `uuser` VALUES ('asd', '123');
INSERT INTO `uuser` VALUES ('asdasda', 'sadsadas');
INSERT INTO `uuser` VALUES ('efra', '1234');
INSERT INTO `uuser` VALUES ('gian', '1234');
INSERT INTO `uuser` VALUES ('romuel', 'casugay');
INSERT INTO `uuser` VALUES ('user', '1234');
INSERT INTO `uuser` VALUES ('user1', 'user');
