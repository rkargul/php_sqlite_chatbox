# php_sqlite_chatbox
A simple messenger application made with PHP and SQLite. User provides a username, types in a message and presses send button. All messages are displayed below in a chatbox. Username, message and date+time are then displayed. jQuery was used for simple polling to load messages without refreshing the page.
</br>
</br>
The SQLite database contains one table "MESSAGES". </br>
|   |   |   |   |   |
|---|---|---|---|---|
|ID |INT   |PRIMARY KEY   |NOT NULL   |AUTO_INCREMENT   |
|USER_ID   |TEXT   |   |NOT NULL   |   |
|MESSAGE   |TEXT   |   |NOT NULL   |   |
|MESSAGE_TIME   |TEXT   |   |NOT NULL   |   |


# How to run
Run index.php

# Sources
jQuery: https://code.jquery.com/ <br/>
PHP SQLite3 documentation: https://www.php.net/manual/en/book.sqlite3.php
