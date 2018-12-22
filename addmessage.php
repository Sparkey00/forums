<?php
/**
 * Created by PhpStorm.
 * User: Spark
 * Date: 19.12.2018
 * Time: 17:59
 */
session_start();
require_once "DataBase.php";
if(isset($_POST['message'])){
   $row = DataBase::run("INSERT INTO messages ( imgpath, message_text, date, author_id) VALUES (?,?,CURDATE(),?)",[$_POST['imgpath']??'',$_POST['message'],$_SESSION['userid']]);
   $rowmsgID = DataBase::run("SELECT message_id FROM messages WHERE message_text = ?",[$_POST['message']])->fetch();
    $row = DataBase::run("INSERT INTO thread_message ( thread_id, message_id) VALUES (?,?)",[$_POST['threadid'],$rowmsgID['message_id']]);
    header('Refresh: 1; //'.$_SERVER['HTTP_HOST'].'/forum/thread.php?threadid='.$_POST['threadid']); //redirect с задержкой
    echo '<p>Вы будете перенаправлены на главную страницу через 3 секунды.</p>';
}