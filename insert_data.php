<?php
  include  'dbh.php';

// This file is used to retrieve data from the form in the index.php file and insert it in the database.
$USER_ID = $_POST['username'];
$MESSAGE = $_POST['text_message'];
$MESSAGE_TIME = date('Y-m-d H:i:s');

// Variables initialized above are used in a database query.
$sql = "INSERT INTO MESSAGES (USER_ID, MESSAGE, MESSAGE_TIME) VALUES ('$USER_ID', '$MESSAGE', '$MESSAGE_TIME')";
// $sql = "DELETE FROM MESSAGES";
$ret = $db->exec($sql);
header("refresh:0.0001; url=index.php");
 ?>
