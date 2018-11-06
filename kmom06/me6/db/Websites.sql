BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS `Websites` (
	`id`	INTEGER,
	`site`	TEXT,
	`url`	TEXT,
	`date`	INTEGER,
	PRIMARY KEY(`id`)
);
INSERT INTO `Websites` VALUES (1,'Me-sida för BTH','http://www.student.bth.se/~siso18/dbwebb-kurser/htmlphp/me/kmom05/me5/me.php',NULL);
INSERT INTO `Websites` VALUES (2,'Personlig sida','http://simonsolberg.se',NULL);
INSERT INTO `Websites` VALUES (3,'Test','test.se',NULL);
COMMIT;
