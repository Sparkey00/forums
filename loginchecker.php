<?php
/**
 * Created by PhpStorm.
 * User: Spark
 * Date: 20.12.2018
 * Time: 13:32
 */
require_once 'DataBase.php';


$login = $_POST['username'];
$row = DataBase::run("SELECT * FROM users WHERE username=?", [$login])->fetch();

if($row['username']){
    print "Занято!";
}
else print "Логин свободен!";

