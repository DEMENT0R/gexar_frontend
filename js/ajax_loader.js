$(document).ready(function(){
    $("#main").click(function(event){
        $('#content').html('<div class="text-center"><div <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>');
        $.ajax({
            url: 'partials/welcome.php',
            success: function (data) {
                //alert (data);
                $('#content').html(data);
            },
            error: function(){
                //alert ("No PHP script: ");
                $('#content').html("Error");
            }
        });

        return false;
    });
 });

$(document).ready(function(){
    $("#chat-bot").click(function(event){
        $('#content').html('<div class="text-center"><div <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>');
        $.ajax({
            url: 'partials/chat.php',
            success: function (data) {
                //alert (data);
                $('#content').html(data);
            },
            error: function(){
                //alert ("No PHP script: ");
                $('#content').html("Error");
            }
        });

        return false;
    });
 });

 $(document).ready(function(){
     $("#create-bot").click(function(event){
         $('#content').html('<div class="text-center"><div <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>');
         $.ajax({
             url: 'partials/create.php',
             success: function (data) {
                 //alert (data);
                 $('#content').html(data);
             },
             error: function(){
                 //alert ("No PHP script: ");
                 $('#content').html("Error");
             }
         });

         return false;
     });
  });

  $(document).ready(function(){
      $("#app").click(function(event){
          $('#content').html('<div class="text-center"><div <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>');
          $.ajax({
              url: 'app.php',
              success: function (data) {
                  //alert (data);
                  $('#content').html(data);
              },
              error: function(){
                  //alert ("No PHP script: ");
                  $('#content').html("Error");
              }
          });

          return false;
      });
   });
