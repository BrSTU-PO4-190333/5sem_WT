CREATE TABLE `database`.`wt_lab3_data` (
    `ID` INT NOT NULL AUTO_INCREMENT ,
    `Name` VARCHAR(64) NOT NULL ,
    `Position` VARCHAR(32) NOT NULL ,
    `Department` VARCHAR(16) NOT NULL ,
    `Phone` VARCHAR(16) NOT NULL ,
    `Date` VARCHAR(16) NOT NULL ,
    `Email` VARCHAR(64) NOT NULL ,
    `Comment` VARCHAR(2048) NOT NULL ,
    UNIQUE `ID` (`ID`)
) ENGINE = MyISAM;
 