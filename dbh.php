<?php
//This object initializes a database, opens it and allows for reading/writing.
$db = new SQLite3("chat.sqlite", SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

// Query responsible for creating a table where all messages are stored.
$make_table =<<<EOF
   CREATE TABLE IF NOT EXISTS MESSAGES
   (ID INTEGER PRIMARY KEY AUTOINCREMENT,
   USER_ID TEXT NOT NULL,
   MESSAGE TEXT NOT NULL,
   MESSAGE_TIME TIMESTAMP NOT NULL);
EOF;

$db->query($make_table);

// Sample data that was used to test the database.
// $db->exec('BEGIN');
// $db->query('INSERT INTO "MESSAGES" ("USER_ID", "MESSAGE", "MESSAGE_TIME")
//      VALUES ("radek.kargul", "This is just a sample message", "2017-01-14 10:11:23")');
// $db->query('INSERT INTO "MESSAGES" ("USER_ID", "MESSAGE", "MESSAGE_TIME")
//      VALUES ("john.smith", "And this is a common name.", "2017-01-14 12:41:21")');
// $db->exec('COMMIT');

 ?>
