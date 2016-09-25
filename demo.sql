
SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `cat_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(30) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '国内动漫');
INSERT INTO `category` VALUES ('2', '日本动漫');
INSERT INTO `category` VALUES ('3', '日本漫画');

-- ----------------------------
-- Table structure for message
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `msg_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `msg_date` date DEFAULT NULL,
  `title` varchar(30) NOT NULL,
  `content` varchar(200) NOT NULL,
  `company_name` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `postcode` varchar(15) DEFAULT NULL,
  `linkman` varchar(10) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `mobilephone` varchar(15) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `ischeck` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of message
-- ----------------------------

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `pdt_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `content` text,
  `src` char(50) DEFAULT 'images/produce.jpg',
  `views` smallint(6) DEFAULT '0',
  `createdate` date DEFAULT NULL,
  `cat_id` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`pdt_id`),
  KEY `cat_id` (`cat_id`),
  CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('3', '海贼王', '<span style=\"font-size:18px;\">拥有财富、名声、权力，这世界上的一切的男人 “海贼王”哥尔·D·罗杰，在被行刑受死之前说了一句话，让全世界的人都涌向了大海。“想要我的宝藏吗？如果想要的话，那就到海上去找吧，我全部都放在那里。”，世界开始迎接“大海贼时代”的来临。<br /></span><p><span style=\"font-size:18px;\">时值“大海贼时代”，为了寻找传说中海贼王罗杰所留下的大秘宝“ONE PIECE”，无数海贼扬起旗帜，互相争斗。一个叫路飞的少年为了与因救他而断臂的香克斯的约定而出海，在旅途中不断寻找志同道合的伙伴，开始了以成为海贼王为目标的伟大冒险旅程。</span></p><p><span style=\"font-size:18px;\"><br /></span></p><p><span style=\"font-size:18px;\"><img src=\"../upload/day_160924/201609242200213762.jpg\" width=\"500\" alt=\"\" /><br /></span></p>', 'upload/day_160924/201609242200213762.jpg', '18', '2016-09-24', '3');
INSERT INTO `product` VALUES ('4', '秦时明月', '<p><span style=\"font-size:18px;\">该系列灵感来源于温世仁原著小说。时代背景从秦始皇兼并六国，建立中国首个帝国开始，到咸阳被楚军攻陷结束，时间跨度30年(包括回忆)，讲述一个体内流淌英雄之血的少年——荆天明，最终成长为盖世英雄，凭一己之力改变历史进程的热血励志故事。</span></p><p><span style=\"font-size:18px;\">剧情并非采用一部一个剧情的系列剧形式，而是连续剧形式。剧情融武侠、历史、奇幻于一体，融入众多中国元素，引领观众亲历两千年前风起云涌、瑰丽多姿的古中国世界，在浓郁的中国风中注入鲜明的时代感。</span></p><p><span style=\"font-size:18px;\"><img src=\"../upload/day_160924/201609242201532470.jpg\" width=\"500\" alt=\"\" /><br /></span></p>', 'upload/day_160924/201609242201532470.jpg', '4', '2016-09-24', '1');
INSERT INTO `product` VALUES ('9', '火影忍者', '<img src=\"../upload/day_160925/201609251515236308.jpg\" width=\"300\" alt=\"\" />', 'upload/day_160925/201609251515236308.jpg', '8', '2016-09-25', '2');

-- ----------------------------
-- Table structure for reply
-- ----------------------------
DROP TABLE IF EXISTS `reply`;
CREATE TABLE `reply` (
  `rpy_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(200) DEFAULT '????????????????????!',
  `rpy_date` date DEFAULT NULL,
  `msg_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`rpy_id`),
  UNIQUE KEY `msg_id` (`msg_id`),
  CONSTRAINT `reply_ibfk_1` FOREIGN KEY (`msg_id`) REFERENCES `message` (`msg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of reply
-- ----------------------------
