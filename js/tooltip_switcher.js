var i = 0;
setInterval(function(){
      i++;
      if (i == 1) {
         $('#button1').tooltip('show');
      }
      if (i == 2) {
         $('#button1').tooltip('hide');
      }
      if (i == 3) {
         $('#button2').tooltip('show');
      }
      if (i == 4) {
         $('#button2').tooltip('hide');
      }
      if (i == 5) {
         $('#button3').tooltip('show');
      }
      if (i == 6) {
         $('#button3').tooltip('hide');
      }
      if (i > 6){
          i = 0;
      }
},1000);
