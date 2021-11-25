CREATE TABLE `database`.`gpi_images` (
    `gpi_id` INT NOT NULL AUTO_INCREMENT ,
    `gpi_image_src` mediumblob NOT NULL ,
    `gpi_image_name` VARCHAR(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
    `gpi_image_size` INT NOT NULL ,
    PRIMARY KEY (`gpi_id`)
) ENGINE = MyISAM;
