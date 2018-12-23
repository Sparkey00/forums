<?php
/**
 * Created by PhpStorm.
 * User: Spark
 * Date: 16.12.2018
 * Time: 15:18
 */

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

     $threadsHandler = new ThreadsHandler();

     print $threadsHandler->generateTable(20);

    print $formprinter->threadForm;
}
else {print $formprinter->signForm;}


