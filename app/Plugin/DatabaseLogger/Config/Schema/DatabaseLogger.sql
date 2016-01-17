CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL ,
  `message` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `ip` varchar(32) DEFAULT NULL,
  `hostname` varchar(255) DEFAULT NULL,
  `uri` varchar(255) DEFAULT NULL,
  `refer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1 ;


ALTER TABLE logs  
ADD UNIQUE INDEX id(id),ADD FULLTEXT INDEX message(message); 


