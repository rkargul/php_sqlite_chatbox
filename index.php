<?php
  include  'dbh.php';
 ?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/text/css" href="/css/master.css">
    <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <script>
  $(document).ready(function() {
    $('#chatbox').load('load-chatbox.php');
    setInterval(function() {
      $('#chatbox').load('load-chatbox.php');
    }, 1000);
  });

  </script>
    <title></title>
  </head>
  <body>

    <form class="" action="insert_data.php" method="post">
      Username: <input type="text" name="username" value="Insert username">
      <br>
      Message: <input type="text" name="text_message" value="Type message...">
      <br>
      <input id="send_button" type="submit" value="Send">
    </form>

    <div id="chatbox" style="border: 1px solid black; width: 750px; height: 300px;">
      
    </div>

    <!-- <button id="button" >New messages</button> -->

  </body>
</html>
