<?php
/**
 * Created by PhpStorm.
 * User: Spark
 * Date: 19.12.2018
 * Time: 17:59
 */
session_start();
require_once "DataBase.php";
require_once "MessageFormat.php";


if(isset($_POST['message'])){
    $full_path='';
    if(isset($_FILES['image']) && !empty($_FILES['image']['name'])){

        $path = 'images/'; // директория для загрузки
        $ext = array_pop(explode('.',$_FILES['image']['name'])); // расширение
        $new_name = time().'.'.$ext; // новое имя с расширением
        $full_path = $path.$new_name; // полный путь с новым именем и расширением

        if($_FILES['image']['error'] == 0){
            if(move_uploaded_file($_FILES['image']['tmp_name'], $full_path)){

            }
        }
    }
    $formattedMessage = MessageFormat::format($_POST['message']);

   $row = DataBase::run("INSERT INTO messages ( imgpath, message_text, date, author_id) VALUES (?,?,CURDATE(),?)",[$full_path??'',$formattedMessage,$_SESSION['userid']]);
   $rowmsgID = DataBase::run("SELECT message_id FROM messages WHERE message_text = ?",[$formattedMessage])->fetch();
    $row = DataBase::run("INSERT INTO thread_message ( thread_id, message_id) VALUES (?,?)",[$_POST['threadid'],$rowmsgID['message_id']]);
    header('Refresh: 1; //'.$_SERVER['HTTP_HOST'].'/forum/thread.php?threadid='.$_POST['threadid']); //redirect с задержкой
    echo '<p>Вы будете перенаправлены на главную страницу через 3 секунды.</p>';
}