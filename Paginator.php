<?php
/**
 * Created by PhpStorm.
 * User: Spark
 * Date: 24.12.2018
 * Time: 12:36
 */
require_once "DataBase.php";

class Paginator
{
    private static $pagination;
    public static function generatePagination($currentPage,$itemsPerPage,$threadid){
        $posts = DataBase::run("SELECT * FROM thread_message WHERE thread_id=?",[$threadid])->fetchAll();
        $count = sizeof($posts);
        self::$pagination="<div class='pagination'><ul class='hr'>";
        for ($i=0;$i<$count/$itemsPerPage;$i++){
            if($i!=$currentPage){
                self::$pagination.="<li><a href='thread.php?threadid={$threadid}&page={$i}'>".($i+1)."</a></li>";
            }
            else{
                self::$pagination.="<li>".($i+1)."</li>";
            }
        }
        self::$pagination.="</ul></div>";

        return self::$pagination;
    }
}