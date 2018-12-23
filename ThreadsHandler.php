<?php
/**
 * Created by PhpStorm.
 * User: Spark
 * Date: 22.12.2018
 * Time: 14:58
 */
require_once "DataBase.php";
class ThreadsHandler
{
    private $threadTable;
    private $postTable;

    public function generateTable($amount){
        $threads = DataBase::run("SELECT * FROM threads",[$amount])->fetchAll();
        $this->threadTable = "<table> <th><td>Тема</td></th>";
        foreach ($threads as $thread){
            $this->threadTable .="<tr><td><a href='thread.php?threadid={$thread['thread_id']}'>{$thread['thread_name']}</a> </td></tr>";
        }
        $this->threadTable .="</table>";

        return $this->threadTable;
    }

    /**
     * @param mixed $data
     */
    public function generatePostTable($data)
    {
        $this->postTable ="<table> <th><td>Сообщения</td></th>";

        foreach ($data as $post){
            $this->postTable .="<tr><td><p><b>{$post['username']}</b> <br> {$post['message_text']} <i> at {$post['date']}</i></p>";
            if($post['imgpath']!=""){$this->postTable .="<br><img src='{$post['imgpath']}' height='320' width='240'>";}

            $this->postTable .="</td></tr>";
        }
        $this->postTable .="</table>";
        return $this->postTable;
    }

}