<?php
  include  'dbh.php';
 ?>

<?php
$USER_ID = $_POST['username'];
$MESSAGE = $_POST['text_message'];
$MESSAGE_TIME = date('Y-m-d H:i:s');

$sql = "INSERT INTO MESSAGES (USER_ID, MESSAGE, MESSAGE_TIME) VALUES ('$USER_ID', '$MESSAGE', '$MESSAGE_TIME')";
// $sql = "DELETE FROM MESSAGES";
$ret = $db->exec($sql);
header("refresh:0.0001; url=index.php");
 ?>
