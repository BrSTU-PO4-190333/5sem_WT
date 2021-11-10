CREATE TABLE `wt_lab2_students` (
    `ID` INT NOT NULL AUTO_INCREMENT ,
    `Student` VARCHAR(64) NOT NULL ,
    `Faculty` VARCHAR(120) NOT NULL ,
    `Course` INT(2) NOT NULL ,
    `Group` VARCHAR(6) NOT NULL ,
    UNIQUE `ID` (`ID`)
) ENGINE = MyISAM;
