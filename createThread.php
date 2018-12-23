<?php
/**
 * Created by PhpStorm.
 * User: Spark
 * Date: 23.12.2018
 * Time: 17:31
 */
session_start();
require_once "DataBase.php";
if(isset($_POST['threadname'])){
    $row = DataBase::run("INSERT INTO threads ( thread_name) VALUES (?)",[$_POST['threadname']]);
    $rowmsgID = DataBase::run("SELECT thread_id FROM threads WHERE thread_name = ?",[$_POST['threadname']])->fetch();
    header('Refresh: 1; //'.$_SERVER['HTTP_HOST'].'/forum/thread.php?threadid='.$rowmsgID['thread_id']); //redirect с задержкой
    echo '<p>Ваш тред создан. Вы будете перенаправлены через 3 секунды.</p>';
}