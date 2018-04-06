// london day out information system


CREATE DATABASE `ldo_isystem` ;

//////////////////////////////////////////////////////////

 CREATE TABLE `ldo_isystem`.`memberinfo` (
`id` DOUBLE NOT NULL AUTO_INCREMENT ,
`title` VARCHAR( 4 ) NOT NULL ,
`firstname` VARCHAR( 30 ) NOT NULL ,
`familyname` VARCHAR( 25 ) NOT NULL ,
`dob` DATETIME NOT NULL ,
`gender` VARCHAR( 3 ) NOT NULL ,
`houseno` INT( 3 ) NULL ,
`streetname` VARCHAR( 30 ) NULL ,
`country` VARCHAR( 30 ) NULL ,
`postcode` VARCHAR( 10 ) NULL ,
`mobileno` INT NULL ,
`telephone` INT NULL ,
`email` VARCHAR( 50 ) NOT NULL ,
`username` VARCHAR( 15 ) NOT NULL ,
`password` VARCHAR( 50 ) NOT NULL ,
PRIMARY KEY ( `id` , `username` ) ,
UNIQUE (
`email`
)
) ENGINE = InnoDB COMMENT = 'This table contains registration information of the customer or user' 


//////////////////////////////////////////////////////////
// Now the table for contact us

CREATE TABLE `ldo_isystem`.`contactusinfo` (
`id` INT NOT NULL AUTO_INCREMENT ,
`Firstname` VARCHAR( 25 ) NOT NULL ,
`Lastname` VARCHAR( 25 ) NULL ,
`Email` VARCHAR( 30 ) NOT NULL ,
`Address` VARCHAR( 30 ) NULL ,
`Message` TEXT NULL ,
PRIMARY KEY ( `id` ) 
) ENGINE = InnoDB
//////////////////////////////////////////////////////////
//Now table for admin
CREATE TABLE `ldo_isystem`.`admins` (
`username` VARCHAR( 25 ) NOT NULL ,
`password` VARCHAR( 25 ) NULL ,
PRIMARY KEY ( `username` ) 
) ENGINE = InnoDB 
//////////////////////////////////////////////////////////
CREATE TABLE `bookingdetails` (
`id` DOUBLE NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`tripid` INT NULL ,
`username` VARCHAR( 16 ) NULL ,
`adultsno` TINYINT NULL ,
`childno` TINYINT NULL ,
`tripdate` VARCHAR( 12 ) NULL ,
`disability` varchar( 4 ) NULL ,
`assistance` varchar( 4 ) NULL ,
`formdate` DATE NULL
) ENGINE = innodb;
//////////////////////////////////////////////////////////
