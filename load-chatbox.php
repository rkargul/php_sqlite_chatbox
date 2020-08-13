<?php
include 'dbh.php';

  $select_data =<<<EOF
  SELECT * from MESSAGES;
  EOF;

  $result = $db->prepare($select_data)->execute();

  while($row = $result->fetchArray(SQLITE3_ASSOC) ) {
    echo "<p>[";
    echo $row['MESSAGE_TIME'];
    echo "] ";
    echo $row['USER_ID'];
    echo ": ";
    echo $row['MESSAGE'];
    echo "</p>";
  }

 ?>
