<?php

include 'config/config.php';
$db_req = "mysql:host=$db_host;dbname=$db_name;charset=$charset";

?>
<script src="js/ajax_loader.js"></script>

<script type="text/javascript">
var block = document.getElementById("chat-scroll");
block.scrollTop = block.scrollHeight;
</script>

<h1>Чатлог</h1>
<div id="chat-scroll">
  <table class="table" border="1">
    <thead>
      <tr>
        <th>message_id</th>
        <th>user_id</th>
        <th>user_name</th>
        <th>timestamp</th>
        <th>already_exist</th>
        <th>text</th>
      </tr>
    </thead>
    <tbody>

      <?php
      //echo "user_id | user_name | timestamp | already_exist | text<br>";
      try {
        $dbh = new PDO($db_req, $db_user, $db_pass);
        foreach($dbh->query('SELECT * FROM `chat`') as $row) {
          //echo $row['text'];
          echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td></tr>';
        }
      } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
      }
      ?>

    </tbody>
  </table>
</div>

<div class="text-center">
  <a href="#" id="chat-bot" type="button" class="btn btn-info">Чат</a>
  <a href="#" id="main" type="button" class="btn btn-primary">Обратно</a>
</div>

<?php
