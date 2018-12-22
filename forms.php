<?php
/**
 * Created by PhpStorm.
 * User: Spark
 * Date: 16.12.2018
 * Time: 15:28
 */

class forms
{
    public $regForm = " <form method='post' action='registration.php'>
 <input type='text' name='username' id='usr' placeholder='Логин' onkeyup='ajaxlogin()' required>
 <div id='usr-errors'></div>
                        <input type='password' id='pswd1' name='pass1' placeholder='Пароль'  onkeyup='checkpasswords()' required>
                        <input type='password' id='pswd2' name='pass2' placeholder='Пароль еще раз' onkeyup='checkpasswords()' required>
                        <div id='pswd-errors'></div>
                        <input type='email' name='email' placeholder='email' required>
                        <input type='submit' id='register-btn' value='Регистрация'></form>";


    public $signForm = "<form method='post' action='login.php'><input type='text' name='username' placeholder='Логин' required>
                        <input type='password' name='pass1' placeholder='Пароль' required>
                         <input type='submit' value='Войти'> <br>
                         <p>Нет учетной записи? </p><a href='registration.php'>Зарегистрируйтесь</a> </form>";


    public $postForm = " <form method='post' action='addmessage.php'><br>
  
                         <div id='messageformat'>
                         <button type='button' id='bold-button' onclick='insertBold()'><b>Ж</b></button>
                         <button type='button' id='italic-button' onclick='insertItalic()'><i>К</i></button>
                         <button type='button' id='strike-button' onclick='insertStrike()'><u>Ч</u></button><br>
                         <textarea id='message-area' name='message'></textarea><br>
                         </div>
                         <input type='hidden' name='threadid' value='%s'>
                         <input type='file' name='image'>
                         <div class=\"g-recaptcha\" data-sitekey=\"6LdW_IMUAAAAABiCpT6NZh87XpkREy5Q14_inGUf\"></div>
                         <input type='submit' value='Написать'></form> ";

}