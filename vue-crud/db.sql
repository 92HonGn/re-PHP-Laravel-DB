DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (

  `id` int(11) NOT NULL AUTO_INCREMENT,

  `username` varchar(20) DEFAULT NULL,

  `email` varchar(100) DEFAULT NULL,

  `mobile` varchar(20) DEFAULT NULL,

  PRIMARY KEY (`id`)

) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
