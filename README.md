# In Order for this to work do Following steps:

1. Go to DataBase.php and set your database details.
2. Create database called "forum" 
3. Run project
4. go to /dbadmin.php and click ALLTHEBUTTONS to create corresponding tables (or use db dump "forum.sql", whatever you like more)
5. Delete dbadmin.php from your folder.
You're ready to rock

# WARNING!
Project works only on php 7.0+ and MySQL 4+

# Usage
1. Registering new user:
You can either go straight to /registration.php where ypu'll find corresponding form, or go to /index.php where, if you didn't sign up already you will be geven a choise either to sign up, or create new account.
For registration you must enter prefered login, email and password.
after entering valid data click "register" and now you can sign in using entered data.

2. Creating a thread
Go to /index.php and sign in if you haven't already.
Enter your topic into textbox below existing threads and click "create"
You can now proceed to your thread and begin holywar about who's Evangelion waifu is better. (Rei is).

3. Posting a message

Yay, the good stuff! Go to /thread?threadid=*&page=* with "*" being any valid number from 0 to number of threads/page and find a textbox. Write down all you think about... whatever thread is about and smack that "send" button. Oh, you can also post some memes, there's also a button for this.
Have fun.
