CREATE TABLE `Parameter Definition` (
	`UnID` INT(10) NOT NULL AUTO_INCREMENT,
	`Parameter ID` varchar(10) NOT NULL,
	`Parameter Desc.` TEXT,
	PRIMARY KEY (`UnID`)
);

CREATE TABLE `Field Equipment Value` (
	`UnID` INT(10) NOT NULL AUTO_INCREMENT,
	`Parameter ID` varchar(10) NOT NULL,
	`Timestamp` DATETIME NOT NULL,
	`Value` varchar(10),
	PRIMARY KEY (`UnID`)
);

CREATE TABLE `Alarm Definition` (
	`UnID` INT(10) NOT NULL AUTO_INCREMENT,
	`Alarm ID` varchar(10) NOT NULL,
	`Alarm Desc.` TEXT,
	PRIMARY KEY (`UnID`)
);

CREATE TABLE `Alarm History` (
	`UnID` INT(10) NOT NULL AUTO_INCREMENT,
	`Alarm ID` varchar(10) NOT NULL,
	`Start` DATETIME NOT NULL,
	`End` DATETIME,
	PRIMARY KEY (`UnID`)
);

CREATE TABLE `Standards Value` (
	`UnID` INT(10) NOT NULL AUTO_INCREMENT,
	`Parameter ID` varchar(10) NOT NULL,
	`Timestamp` DATETIME NOT NULL,
	`Value` varchar(10) NOT NULL,
	PRIMARY KEY (`UnID`)
);

ALTER TABLE `Field Equipment Value` ADD CONSTRAINT `Field Equipment Value_fk0` FOREIGN KEY (`Parameter ID`) REFERENCES `Parameter Definition`(`Parameter ID`);

ALTER TABLE `Alarm History` ADD CONSTRAINT `Alarm History_fk0` FOREIGN KEY (`Alarm ID`) REFERENCES `Alarm Definition`(`Alarm ID`);

ALTER TABLE `Standards Value` ADD CONSTRAINT `Standards Value_fk0` FOREIGN KEY (`Parameter ID`) REFERENCES `Parameter Definition`(`Parameter ID`);

