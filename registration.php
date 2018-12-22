<?php
/**
 * Created by PhpStorm.
 * User: Spark
 * Date: 19.12.2018
 * Time: 18:00
 */
require_once 'forms.php';
require_once 'DataBase.php';
$formprinter = new forms();
print "<html lang=\"en\">
<head>
	<meta charset=\"UTF-8\">
	<title>Document</title>	
	<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
	<script src=\"functions.js\"></script>
</head>";
print $formprinter->regForm;

if(isset($_POST['username'])){
    try{
    $stmt = DataBase::run("INSERT INTO users (username, password, email) VALUES (?, ?, ?)", [$_POST['username'], $_POST['pass1'],$_POST['email']]);
    print "Вы успешно зарегистрировались!";
    unset($_POST);
        echo '<meta http-equiv="refresh" content="500; url=index.php">';
    }
    catch (PDOException $e) {print $e->getMessage();}
}