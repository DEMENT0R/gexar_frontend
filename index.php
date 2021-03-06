<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>GEXAR Bot</title>

  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/x-icon" class="js-site-favicon" href="images/gexar_logo.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/loader.css">

  <!-- JS! -->
  <script src="js/tooltip_switcher.js"></script>
  <script src="js/screen_fader.js"></script>

  <style type="text/css">
  </style>

  <script type="text/javascript">
  window.onload=function(){
    $('#content').html('<div class="text-center"><div <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>');
    $.ajax({
      url: 'partials/welcome.php',
      success: function (data) {
        //alert (data);
        $('#content').html(data);
      },
      error: function(){
        //alert ("No PHP script: ");
        $('#content').html("Error!");
      }
    });

    return false;
  }
  </script>

  <!-- Bootstrap Tooltip -->
  <script type="text/javascript">
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
  </script>

</head>
<body>
  <div class="wrapper">
    <div class="main-block">
      <h2><img src="images/gexar_logo.png" alt="GEXAR logo" id="logo"> GEXAR Neurobot Systems</h2>
      <hr>
      <div id="content">
        <div class="text-center"><div <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>
        <p>Возможно, у вас проблемы с интернетом...<br>
        Тем не менее, вы можете ознакомиться с некоторыми интересными вещами!</p>
      </div>
    </div>
    <div class="right-image">
      <div class="main-block">
      </div>
    </div>
  </div>
  <div class="info-block">
    <p>
      <b>Debug</b><br>
      <i>-Cookies-</i><br>
      <?php //var_dump($_COOKIE); ?>
      <?php echo "user_id: ".$_COOKIE['user_id']."<br>user_name: ".$_COOKIE['user_name']; ?>
      
    </p>
  </div>
</body></html>
