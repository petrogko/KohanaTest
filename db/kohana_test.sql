create table `user`(
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`first_name` varchar(128),
	`email` varchar(128),
	`updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	`created_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY (`id`),
	UNIQUE KEY `unq_email` (`email`),
	KEY `email` (`email`)
) ENGINE=INNODB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;