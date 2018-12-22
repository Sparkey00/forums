<?php
/**
 * Created by PhpStorm.
 * User: Spark
 * Date: 19.12.2018
 * Time: 17:59
 */
require_once "DataBase.php";
session_start();
$login = $_POST['username']??null;
$pass = $_POST['pass1']??null;
$row = DataBase::run("SELECT * FROM users WHERE username=? AND password=?", [$login,$pass])->fetch();
if($row['username']){
    $_SESSION['username'] = $login;
    $_SESSION['userid'] = $row['user_id'];
    header('Refresh: 3; //'.$_SERVER['HTTP_HOST'].'/forum/index.php'); //redirect с задержкой
    echo 'Вы успешно вошли! Вы будете перенаправлены на главную страницу через 3 секунд.';
    unset($_POST);
}else{
    header('Refresh: 1; //'.$_SERVER['HTTP_HOST'].'/forum/index.php'); //redirect с задержкой
    echo '<p>Вы будете перенаправлены на главную страницу через 3 секунды.</p>';

}

