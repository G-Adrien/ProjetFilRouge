DROP DATABASE IF EXISTS banque_php;

CREATE DATABASE banque_php;

DROP USER IF EXISTS banque_php;



CREATE TABLE `banque_php`.`account` ( `id` INT NOT NULL AUTO_INCREMENT , `number_account` VARCHAR(30) NOT NULL , `amount` FLOAT NOT NULL , `user_id_cle_etrangere` INT NOT NULL , `account_type` VARCHAR(30) NOT NULL , PRIMARY KEY (`id`) INDEX (`user_id_cle_etrangere`)) ENGINE = InnoDB;
CREATE TABLE `banque_php`.`transaction` ( `id` INT NOT NULL AUTO_INCREMENT , `account_id_cle_etrangere` INT NOT NULL , `opération_amount` FLOAT NOT NULL , `date _ransaction` DATE NOT NULL , `name_transaction` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`)INDEX (`account_id_cle_etrangere`)) ENGINE = InnoDB;
CREATE TABLE `banque_php`.`user` ( `id` INT NOT NULL AUTO_INCREMENT , `password_user` VARCHAR(50) NOT NULL , `name_user` VARCHAR(30) NOT NULL , `surname_user` VARCHAR(30) NOT NULL , `date_of_birth` DATE NOT NULL , `mail_address` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

