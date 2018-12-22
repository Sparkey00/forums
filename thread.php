<?php
/**
 * Created by PhpStorm.
 * User: Spark
 * Date: 22.12.2018
 * Time: 15:29
 */
require_once "DataBase.php";
require_once "forms.php";
require_once "ThreadsHandler.php";
session_start();
print "<html lang=\"en\">
<head>
	<meta charset=\"UTF-8\">
	<title>Document</title>	
	<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
	<script src=\"functions.js\"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>";
echo "Добро пожаловать. Снова.";
$formprinter = new forms();
if(isset($_SESSION['username'])){
    print "С возвращением, <b>{$_SESSION['username']}#{$_SESSION['userid']}</b>";
    $thread = DataBase::run("SELECT thread_name FROM threads WHERE thread_id=?",[$_REQUEST['threadid']])->fetch();

    print "<br><a href='index.php'>Главная/</a><b>{$thread['thread_name']}</b><br>";
    $data = DataBase::run("SELECT m.message_text, m.imgpath, u.username, m.date FROM messages as m 
                                INNER JOIN thread_message as t_m
                                ON t_m.message_id = m.message_id AND t_m.thread_id = ?
                                INNER JOIN users as u 
                                ON u.user_id = m.author_id ORDER BY m.message_id DESC",[$_REQUEST['threadid']])->fetchAll();
   // var_dump($data);

    $TH = new ThreadsHandler();
    print $TH->generatePostTable($data);
    printf($formprinter->postForm,$_REQUEST['threadid']);
}
else {print $formprinter->signForm;}