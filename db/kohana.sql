create table `contest`(
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`first_name` varchar(128),
	`email` varchar(128)
	PRIMARY KEY (`id`),
	UNIQUE KEY `unq_email` (`email`),
	KEY `email` (`email`)
) ENGINE=INNODB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;