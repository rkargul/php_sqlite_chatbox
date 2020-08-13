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

  <!-- This script loads PHP file that retrieves data from the database. -->
  <script>
  $(document).ready(function() {
    $('#chatbox').load('load-chatbox.php');
    
    // This allows for autorefresh without refreshing the page
    setInterval(function() {
      $('#chatbox').load('load-chatbox.php');
    }, 1000);

  });

  </script>
    <title></title>
  </head>
  <body>

    <!-- This form is used to enter username and message. -->
    <form class="" action="insert_data.php" method="post">
      Username: <input type="text" name="username" value="Insert username">
      <br>
      Message: <input type="text" name="text_message" value="Type message...">
      <br>
      <input id="send_button" type="submit" value="Send">
    </form>

    <!-- This element is important, here all the messages are displayed from the database -->
    <div id="chatbox"
      style="overflow: auto;
      border: 1px solid black;
      width: 750px;
      height: 300px;
      position: relative;
      ">

    </div>


  </body>
</html>
