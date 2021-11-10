CREATE TABLE `database`.`wt_lab1` (
    `ID` INT NOT NULL AUTO_INCREMENT ,
    `Name` VARCHAR(120) NOT NULL ,
    `Position` VARCHAR(32) NOT NULL ,
    `Department` VARCHAR(32) NOT NULL ,
    `Phone` VARCHAR(20) NOT NULL ,
    `Gender` VARCHAR(1) NOT NULL ,
    `Email` VARCHAR(64) NOT NULL ,
    `Comment` VARCHAR(2048) NOT NULL ,
    UNIQUE `ID` (`ID`)
) ENGINE = MyISAM;
 