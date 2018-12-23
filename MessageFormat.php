<?php
/**
 * Created by PhpStorm.
 * User: Spark
 * Date: 23.12.2018
 * Time: 18:32
 */

class MessageFormat
{
    public static function format($str){
        $formated = trim(htmlentities($str));
        $formated = str_replace('[bold]','<b>',$formated);
        $formated = str_replace('[/bold]','</b>',$formated);
        $formated = str_replace('[italic]','<i>',$formated);
        $formated = str_replace('[/italic]','</i>',$formated);
        $formated = str_replace('[underline]','<u>',$formated);
        $formated = str_replace('[/underline]','</u>',$formated);

        return $formated;
    }
}