<script src="js/ajax_loader.js"></script>

<script type="text/javascript">
var block = document.getElementById("chat-scroll");
block.scrollTop = block.scrollHeight;
</script>

<div class="dynamic_container">
  <h1>Чат</h1>
  <hr>
  <div id="chat-scroll">
    00:00:01 <b>...:</b> ...<br>
    00:00:01 <b>...:</b> ...<br>
    00:00:01 <b>...:</b> ...<br>
    00:00:01 <b>...:</b> ...<br>
    00:00:01 <b>...:</b> ...<br>
    00:00:01 <b>...:</b> ...<br>
    00:00:01 <b>...:</b> ...<br>
    10:53:28 <b>Вы:</b> Привет!<br>
    10:53:29 <b>ИИ:</b> Здравствуйте.<br>
    10:53:35 <b>Вы:</b> Как тебя зовут?<br>
    10:53:37 <b>ИИ:</b> Меня зовут AI v0.01 Alpha, а вас?<br>
    10:53:41 <b>Василий:</b> Василий<br>
  </div>
  <form action="db_writer.php" method="post">
    <input type="text" name="text" value="Мне нужен ...">
    <input type="submit">
  </form>
  <hr>
  <div class="text-center">
    <a href="app.php" id="app" type="button" class="btn btn-info">Чатлог</a>
    <a href="#" id="main" type="button" class="btn btn-primary">Обратно</a>
  </div>
</div>
