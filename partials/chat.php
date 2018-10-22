<script src="js/ajax_loader.js"></script>

<script type="text/javascript">
var block = document.getElementById("chat-scroll");
block.scrollTop = block.scrollHeight;
</script>

<div class="dynamic_container">
  <h1>Чат</h1>
  <div id="chat-scroll">
    <?php
    if($_COOKIE['user_name'] == ''){
      echo date("H:i:s").' <b>Бот:</b> Здравствуйте! Как к вам можно обращаться?<br>';
    } else {
      echo date("h:m:s").' <b>Бот:</b> Приветствую, '.$_COOKIE['user_name'].'!<br>';
    }
    ?>
  </div>
  <form action="db_writer.php" method="post">
    <input type="text" id="chat_text" name="chat_text" value="">

    <script>
    function setUserName (){
      document.cookie = "user_name=" + document.getElementById('chat_text').value;
    }
    </script>

    <?php
    if($_COOKIE['user_name'] == ''){
      echo '<input type="button" value="Ввод Имени" onclick="setUserName()">';
    } else {
      echo '<input type="submit" value="Ввод Текста">';
    }
    ?>
  </form>
  <hr>
  <div class="text-center">
    <a href="#" id="app" type="button" class="btn btn-info">Чатлог</a>
    <a href="#" id="main" type="button" class="btn btn-primary">Обратно</a>
  </div>
</div>
