<?php
/**
 * Created by PhpStorm.
 * User: Spark
 * Date: 10.11.2018
 * Time: 11:44
 */

class sql
{
 public $createUsers ="CREATE TABLE IF NOT EXISTS 
 `forum`.`users`
  ( `user_id` INT NOT NULL AUTO_INCREMENT ,
   `username` VARCHAR(64) NOT NULL ,
    `password` VARCHAR(64) NOT NULL ,
     `email` VARCHAR(128) NOT NULL , PRIMARY KEY (`user_id`)) ENGINE = InnoDB;";

 public $createMessages="CREATE TABLE `forum`.`messages` 
( `message_id` INT NOT NULL AUTO_INCREMENT ,
 `imgpath` VARCHAR(256) NOT NULL ,
  `message_text` TEXT NOT NULL ,
   `date` DATE NOT NULL ,
    `author_id` INT NOT NULL , PRIMARY KEY (`message_id`)) ENGINE = InnoDB;";

 public $createBound="CREATE TABLE `forum`.`user_message` ( `user_id` INT NOT NULL , `message_id` INT NOT NULL ) ENGINE = InnoDB;";

public $createThreads = "CREATE TABLE `forum`.`threads` ( `thread_id` INT NOT NULL AUTO_INCREMENT , `thread_name` VARCHAR(64) NOT NULL , PRIMARY KEY (`thread_id`)) ENGINE = InnoDB;";

public $createThreadBound = "CREATE TABLE `forum`.`thread_message` ( `thread_id` INT NOT NULL , `message_id` INT NOT NULL ) ENGINE = InnoDB;";

public $clearTable = "TRUNCATE product_prices";

}

